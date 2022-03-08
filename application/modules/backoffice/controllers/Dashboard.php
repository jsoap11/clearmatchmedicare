<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{


	public function __construct()
	{
		parent::__construct();
		// $this->load->database();
		$this->load->library(array('form_validation', "email"));
		$this->load->helper(array('html', 'language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->load->config('ion_auth');

		$this->lang->load('auth');
		$this->load->model(array('Users_modal', 'Users_groups', 'common_model'));

		$this->load->module('template');
		if (!$this->ion_auth->logged_in()) {
            redirect('backoffice', 'refresh');
        }
	}

	// redirect if needed, otherwise display the user list
	public function index()
	{
		if (!$this->ion_auth->logged_in()) {
			// redirect them to the login page
			redirect('backoffice/auth/login', 'refresh');
		} else {

			//Count all users
			$data['total_users'] = $this->Users_modal->count_users();

			// set the flash data error message if there is one
			$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			//get all users
			$data['all_users'] = $this->Users_modal->all_users();

			$data['today_users'] = $this->Users_modal->recent_users();

			$data['weekly'] = $this->Users_modal->weekly_data();

			$data['page'] = "backoffice/dashboard/view_dashboard";
			$this->template->template_view($data);
		}
	}
}
