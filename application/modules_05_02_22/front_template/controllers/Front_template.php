<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_template extends MY_Controller 
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function template_homeView($data = NULL)
	{
		$this->load->view('frontpage',$data);
	}

	public function template_innerView($data = NULL)
	{
		$this->load->view('innerpage',$data);
	}

	public function template_landerView($data = NULL)
	{
		$this->load->view('landerpage',$data);
	}
	
	public function template_demographicsView($data = NULL)
	{
		$this->load->view('demographicspage',$data);
	}
	
	public function template_blankView($data = NULL)
	{
		$this->load->view('blank_page',$data);
	}
	
	public function template_noCommonView($data = NULL)
	{
		$this->load->view('no_common_page',$data);
	}
	
	public function template_fullwidth($data = NULL)
	{
		$this->load->view('fullwidth_page',$data);
	}
	
	

}

