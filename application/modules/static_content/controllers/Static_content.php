<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	Created By Salman Iqbal
*/

class Static_content extends MY_Controller 
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
		$data['settings'] = $this->common_model->getAllData('static_content','*','id = 1');
		// pr($data);die;
		$data['page'] = "static_content/static_content";
      	$this->template->template_view($data);
	}

	/**
	 * [Insert Blog Settings OR Update Blog Settings]
	 * @return [void]
	 */
	public function static_cont_ent()
	{
		$this->form_validation->set_rules('footer_content', 'Footer content','trim|required');
		if ($this->form_validation->run() == true) {
			
			$data = array( 
							'footer_content' 	   => post('footer_content')
						 );

			$result = $this->common_model->update(1,$data,'static_content');

			if ($result) 
			{
				set_flashdata('success','Settings Updated');
				redirect('static_content','refresh');
			}	
		}else{
			$data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
			
			$this->session->set_flashdata('errors', $data['message']);
			redirect('static_content','refresh');
		}
	}	
}	
