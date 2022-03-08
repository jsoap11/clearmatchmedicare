<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Phone extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->lang->load('auth');
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->load->module('template');

        $this->load->helper(array('html', 'language', 'form', 'country_helper'));
        $this->load->model(array('banner_modal', 'common_model'));

        if (!$this->ion_auth->logged_in()) {
            redirect('backoffice', 'refresh');
        }
    }

    public function index()
    {
        $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
        $data['phone'] = $this->common_model->getAllData('phone');
        $this->session->set_flashdata('message', $this->ion_auth->messages());
        $data['page'] = "phone/view_phone";
        $this->template->template_view($data);
    }


    public function phone_add()
    {
        $this->form_validation->set_rules('leadSource', 'Lead Source', 'trim|required');
		//$this->form_validation->set_rules('refId', 'Ref Id', 'trim|required');
		$this->form_validation->set_rules('refIdPhone', 'Phone', 'trim|required');
       
		$data['leadSource'] 		= $this->input->post('leadSource');
		$data['refId'] 				= $this->input->post('refId');
		$data['refIdPhone'] 		= $this->input->post('refIdPhone');

        if ($this->form_validation->run() === true && isset($_POST) && !empty($_POST)) {	

            $saveData['leadSource'] = $this->input->post('leadSource');
			$saveData['refId'] 		= $this->input->post('refId');
			$saveData['refIdPhone'] = $this->input->post('refIdPhone');

            if ( $this->common_model->add('phone',$saveData)) {
                $this->session->set_flashdata('success', $this->ion_auth->messages());
                redirect('phone', 'refresh');
            } else {
                $this->session->set_flashdata('error', $this->ion_auth->errors());
                $data['page'] = "phone/add_phone";
                $this->template->template_view($data);
            }
        }else{
            $tables = $this->config->item('tables', 'ion_auth');
            $identity_column = $this->config->item('identity', 'ion_auth');

            $data['page'] = "phone/add_phone";

            $data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            $this->session->set_flashdata('error', $data['message']);
            $this->template->template_view($data);
        }
    }

    public function delete_phone($id)
    {
        $result = $this->common_model->delete(array('id'=>$id),'phone');

        if ($result) {
            $this->session->set_flashdata('success', $this->ion_auth->messages());
            redirect('phone', 'refresh');
        } else {
            $this->session->set_flashdata('success', $this->ion_auth->errors());
            redirect('phone', 'refresh');
        }
    }


    public function edit_phone($id)
    {
		$this->form_validation->set_rules('leadSource', 'Lead Source', 'trim|required');
		//$this->form_validation->set_rules('refId', 'Ref Id', 'trim|required');
		$this->form_validation->set_rules('refIdPhone', 'Phone', 'trim|required');
		if (isset($_POST) && !empty($_POST) && $this->form_validation->run() === TRUE) {
			$data = array(
				'leadSource'			=> $this->input->post('leadSource'),
				'refId'					=> $this->input->post('refId'),
				'refIdPhone'			=> $this->input->post('refIdPhone')
			);

            if ($this->common_model->update($id, $data,'phone')) {
                $this->session->set_flashdata('success', $this->ion_auth->messages());
                redirect('phone', 'refresh');
            } else {
                $this->session->set_flashdata('errors', $this->ion_auth->errors());
                redirect('phone', 'refresh');
            }
        }else{
            $data['csrf'] = $this->_get_csrf_nonce();
            $data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            $this->session->set_flashdata('errors', $data['message']);
            $phone = $this->common_model->update_data(array('id'=>$id),'phone');
            $data['leadSource'] = array(
                'name'  => 'leadSource',
                'id'    => 'leadSource',
                'type'  => 'text',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('leadSource', $phone->leadSource)
            );
			$data['refId'] = array(
                'name'  => 'refId',
                'id'    => 'refId',
                'type'  => 'text',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('refId', $phone->refId)
            );
			$data['refIdPhone'] = array(
                'name'  => 'refIdPhone',
                'id'    => 'refIdPhone',
                'type'  => 'text',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('refIdPhone', $phone->refIdPhone)
            );
			$data['id'] = $id;
      
            $data['page'] = "phone/edit_phone";
            $this->template->template_view($data);
        }
    }

    public function _render_page($view, $data = null, $returnhtml = false) //I think this makes more sense
    {

        $this->viewdata = (empty($data)) ? $this->data : $data;

        $view_html = $this->load->view($view, $this->viewdata, $returnhtml);

        if ($returnhtml) return $view_html; //This will return html on 3rd argument being true
    }

    public function _valid_csrf_nonce()
    {
        $csrfkey = $this->input->post($this->session->flashdata('csrfkey'));
        if ($csrfkey && $csrfkey == $this->session->flashdata('csrfvalue')) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function _get_csrf_nonce()
    {
        $this->load->helper('string');
        $key   = random_string('alnum', 8);
        $value = random_string('alnum', 20);
        $this->session->set_flashdata('csrfkey', $key);
        $this->session->set_flashdata('csrfvalue', $value);

        return array($key => $value);
    }
 
}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */
