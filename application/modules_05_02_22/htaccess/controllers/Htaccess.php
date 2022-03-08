<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Htaccess extends MY_Controller 
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

	}

	public function index($value='')
	{
		$data['settings'] =file_get_contents(".htaccess");
		$data['page'] = "htaccess/htaccess";
		$this->template->template_view($data);
	}

	public function write()
	{
		$this->form_validation->set_rules('htaccess', 'Htaccess','trim|required');
		if ($this->form_validation->run() == true) {

			$myfile = fopen(".htaccess", "w") or die("Unable to open file!");
			$txt = post('htaccess');
			fwrite($myfile, $txt);
			fclose($myfile);

			set_flashdata('success','Settings Updated');
			redirect('htaccess/htaccess','refresh');	
		}else{
			$data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

			$this->session->set_flashdata('errors', $data['message']);
			redirect('htaccess/htaccess','refresh');
		}
	}	
}	
