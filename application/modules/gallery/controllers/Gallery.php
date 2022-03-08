<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MY_Controller 
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

	public function index()
	{
		$data['page'] = "gallery/gallery";
		$this->template->template_view($data);
	}

}	
