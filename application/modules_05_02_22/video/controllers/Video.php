<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->lang->load('auth');
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->load->module('template');

        $this->load->helper(array('html', 'language', 'form', 'country_helper'));
        $this->load->model(array('video_modal', 'common_model'));

        if (!$this->ion_auth->logged_in()) {
            redirect('admin/auth', 'refresh');
        }
    }

    public function index()
    {
        
        // set the flash data error message if there is one
        $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

        // list the redirect
        $data['video'] =  $this->common_model->getAllData('video', '*');
        $this->session->set_flashdata('message', $this->ion_auth->messages());

        $data['page'] = "video/video/view_video";
        $this->template->template_view($data);
    }

    public function add()
    {
      /*  if (!$this->ion_auth->is_admin()) {
            return show_error("You Must Be an Administrator To view This Page");
        }*/

        $data['page'] = "video/video/create_video";
        $this->template->template_view($data);
    }

    // create a new user
    public function add_video()
    {
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('desc', 'Description', 'trim|required');
        $this->form_validation->set_rules('youtube', 'Youtube URL', 'trim|required');

        if ($this->form_validation->run() === FALSE) {
            redirect('video/video/create_video');
        } else {
            $data = array(
				'title'           		=> $this->input->post('title'),
				'desc'           		=> $this->input->post('desc'),
				'youtube'           	=> $this->input->post('youtube'),
				'cat_id'           		=> $this->input->post('cat_id'),
				'is_active'           		=> $this->input->post('is_active'),
				'image'   		  		=> $this->input->post('image')
			);

            if ($this->common_model->InsertData('video', $data)) {
				
                $this->session->set_flashdata('success', $this->ion_auth->messages());
                redirect('video', 'refresh');
            } else {
                $this->session->set_flashdata('success', $this->ion_auth->errors());
                redirect('video/create_video', 'refresh');
            }
        }
    }
	
    //Delete User
    public function delete_video()
    {
        $id = $this->uri->segment(3);

        $data = array(
			'id' 	 => $id
		);

        $result = $this->common_model->DeleteDB('video', $data);
        

        if ($result) {
            $this->session->set_flashdata('success', $this->ion_auth->messages());
            redirect('video', 'refresh');
        } else {
            $this->session->set_flashdata('success', $this->ion_auth->errors());
            redirect('video', 'refresh');
        }
    }

    // edit a user
    public function edit_video($id)
    {
		if ($this->input->post()) {

			$this->form_validation->set_rules('title', 'Title', 'trim|required');
			$this->form_validation->set_rules('desc', 'Description', 'trim|required');
			$this->form_validation->set_rules('youtube', 'Youtube URL', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				redirect('video/edit_video/'.$id, 'refresh');
			} else {

				$data = array(
					'title'           		=> $this->input->post('title'),
					'desc'           		=> $this->input->post('desc'),
					'youtube'           	=> $this->input->post('youtube'),
					'cat_id'           		=> $this->input->post('cat_id'),
					'is_active'           	=> $this->input->post('is_active'),
					'image'   		  		=> $this->input->post('image')
				);

				$this->common_model->UpdateDB('video', array('id' => $id), $data);
				
				
				set_flashdata('success', 'Data Updated Successfully');
				redirect('video', 'refresh');
			}
		} else {
			$data['post_data'] = $data = $this->common_model->getAllData('video', '*', '', array('id' => trim($id)));

			    //  pr($data['post_data']);die;

			$data['page'] = "video/video/edit_video";
			$this->template->template_view($data);
		}
	}

 // activate the user
    public function activate($id, $code = false)
    {
        if ($code !== false) {
            $activation = $this->ion_auth->activate($id, $code);
        } else if ($this->ion_auth->is_admin()) {
            $activation = $this->ion_auth->activate($id);
        }

        if ($activation) {
            // redirect them to the auth page
            $this->session->set_flashdata('success', $this->ion_auth->messages());
            redirect("redirect", 'refresh');
        } else {
            // redirect them to the forgot password page
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            redirect("redirect", 'refresh');
        }
    }

}
