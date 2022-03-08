<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Robots extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->module('template'); 
		$this->load->model('common_model'); 
		$this->load->library('form_validation'); 

		if (!$this->ion_auth->logged_in()):
		redirect('bcakoffice', 'refresh');
		endif;

		/*if (!$this->ion_auth->is_admin()):
	      return show_error("You Must Be An Administrator To View This Page");
	    endif;  */
	}

	/**
	 * [Laod blog setting page]
	 * @return [void]
	 */
	public function index($value='')
	{
		$data['settings'] =file_get_contents("robots.txt");
		$data['page'] = "robots/robots";
		$this->template->template_view($data);
	}


	public function write()
	{
		$this->form_validation->set_rules('robots', 'Footer content','trim|required');
		if ($this->form_validation->run() == true) {

			$myfile = fopen("robots.txt", "w") or die("Unable to open file!");
			$txt = post('robots');
			fwrite($myfile, $txt);
			fclose($myfile);

			set_flashdata('success','Settings Updated');
			redirect('robots/robots','refresh');	
		}else{
			$data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

			$this->session->set_flashdata('errors', $data['message']);
			redirect('robots/robots','refresh');
		}
	}	
}	
