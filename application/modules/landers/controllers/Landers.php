<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Landers extends MY_Controller
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
        $data['lander'] = $this->common_model->getAllData('lander');
        $this->session->set_flashdata('message', $this->ion_auth->messages());
        $data['page'] = "landers/view_lander";
        $this->template->template_view($data);
    }


    public function add_lander()
    {
        $this->form_validation->set_rules('lander_name', 'Lander Name', 'trim|required');
		$this->form_validation->set_rules('lander_tcpa', 'TCPA', 'trim|required');
       
        $data['lander_name'] = $this->input->post('lander_name');
		$data['lander_tcpa'] = $this->input->post('lander_tcpa');

        if ($this->form_validation->run() === true && isset($_POST) && !empty($_POST)) {	

            $saveData['lander_name'] = $this->input->post('lander_name');
			$saveData['lander_tcpa'] = $this->input->post('lander_tcpa');

            if ( $this->common_model->add('lander',$saveData)) {
                $this->session->set_flashdata('success', $this->ion_auth->messages());
                redirect('landers', 'refresh');
            } else {
                $this->session->set_flashdata('error', $this->ion_auth->errors());
                $data['page'] = "landers/add_lander";
                $this->template->template_view($data);
            }
        }else{
            $tables = $this->config->item('tables', 'ion_auth');
            $identity_column = $this->config->item('identity', 'ion_auth');

            $data['page'] = "landers/add_lander";

            $data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            $this->session->set_flashdata('error', $data['message']);
            $this->template->template_view($data);
        }
    }

    public function delete_lander($id)
    {
        $result = $this->common_model->delete(array('id'=>$id),'lander');

        if ($result) {
            $this->session->set_flashdata('success', $this->ion_auth->messages());
            redirect('landers', 'refresh');
        } else {
            $this->session->set_flashdata('success', $this->ion_auth->errors());
            redirect('landers', 'refresh');
        }
    }


    public function edit_lander($id)
    {
		$this->form_validation->set_rules('lander_name', 'Lander Name', 'trim|required');
		$this->form_validation->set_rules('lander_tcpa', 'TCPA', 'trim|required');
		if (isset($_POST) && !empty($_POST) && $this->form_validation->run() === TRUE) {
			$data = array(
				'lander_name'       => $this->input->post('lander_name'),
				'lander_tcpa'       => $this->input->post('lander_tcpa')
			);

            if ($this->common_model->update($id, $data,'lander')) {
                $this->session->set_flashdata('success', $this->ion_auth->messages());
                redirect('landers', 'refresh');
            } else {
                $this->session->set_flashdata('errors', $this->ion_auth->errors());
                redirect('landers', 'refresh');
            }
        }else{
            $data['csrf'] = $this->_get_csrf_nonce();
            $data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            $this->session->set_flashdata('errors', $data['message']);
            $lander = $this->common_model->update_data(array('id'=>$id),'lander');
            $data['lander_name'] = array(
                'name'  => 'lander_name',
                'id'    => 'lander_name',
                'type'  => 'text',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('lander_name', $lander->lander_name)
            );
            $data['lander_tcpa'] = $lander->lander_tcpa;
			$data['id'] = $id;
      
            $data['page'] = "landers/edit_lander";
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
