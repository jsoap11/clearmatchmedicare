<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carriers_settings extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->module('template'); 
		$this->load->model('common_model'); 
		$this->load->library('form_validation'); 

		if (!$this->ion_auth->logged_in()):
		redirect('bcakoffice', 'refresh');
		endif;
	}

	public function index($value='')
	{
		$data['settings'] = $this->common_model->getAllData('carriers_settings','*','1');
		$data['page'] = "carriers_manager/carriers_settings";
		$this->template->template_view($data);
	}

	public function carriers_settings()
	{
		$this->form_validation->set_rules('meta_desc', 'meta desc','trim|required');
		$this->form_validation->set_rules('meta_title', 'meta title','trim|required');
		$this->form_validation->set_rules('meta_desc', 'meta desc','trim|required');

		if ($this->form_validation->run() == FALSE) 
		{
			$this->index();
		} 
		else
		{
			if ($_FILES['img']['name'] != "") 
			{
				$config['upload_path']          = './uploads/';
				$config['allowed_types']        = 'gif|jpg|png';


				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('img'))
				{
					$error = array('error' => $this->upload->display_errors());

					$msg = $error['error'];
					$this->session->set_flashdata('error',$msg);
					redirect('blog/blog_settings','refresh');
				}
				else
				{
					$data = array('upload_data' => $this->upload->data());
					$image ='uploads/'.$data['upload_data']['file_name'];
				}
			}
			else
			{
				$image = post('update_img');
			}
			$data = array( 
				'meta_description' 	   	=> post('meta_desc'), 
				'default_img' 		   	=> $image,
				'meta_desc' 	   		=> post('meta_desc'),
				'meta_title' 	   		=> post('meta_title')
			);

			$result = $this->common_model->UpdateDB('carriers_settings',array('id' => 1),$data);

			if ($result) 
			{
				set_flashdata('success','Settings Updated');
				redirect('carriers_manager/carriers_settings','refresh');
			}
			else
			{
				set_flashdata('error','Database Error');
				redirect('carriers_manager/carriers_settings','refresh');
			}	
		}
	}	
}	
