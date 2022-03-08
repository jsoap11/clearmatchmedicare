<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Lander_manager extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->lang->load('auth');
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->load->module('template');

        $this->load->helper(array('html', 'language', 'form', 'country_helper'));
        $this->load->model(array('common_model'));

        if (!$this->ion_auth->logged_in()) {
            redirect('backoffice', 'refresh');
        }
    }

    public function index()
    {
        $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
        $data['lander'] = $this->common_model->getAllData('disclaimer');
        $this->session->set_flashdata('message', $this->ion_auth->messages());
        $data['page'] = "lander_manager/view_lander";
        $this->template->template_view($data);
    }


    public function add()
    {
        $this->form_validation->set_rules('lander_name', 'Lander Name', 'trim|required');
		$this->form_validation->set_rules('lander_url', 'Lander URL', 'trim|required');
		$this->form_validation->set_rules('disclaimer', 'Disclaimer', 'trim|required');
       
        $data['lander_name'] = $this->input->post('lander_name');
		$data['lander_url'] = $this->input->post('lander_url');
		$data['disclaimer'] = $this->input->post('disclaimer');

        if ($this->form_validation->run() === true && isset($_POST) && !empty($_POST)) {	

            $saveData['lander_name'] = $this->input->post('lander_name');
			$saveData['lander_url'] = $this->input->post('lander_url');
			$saveData['disclaimer'] = $this->input->post('disclaimer');

            if ( $this->common_model->add('disclaimer',$saveData)) {
                $this->session->set_flashdata('success', $this->ion_auth->messages());
                redirect('lander_manager', 'refresh');
            } else {
                $this->session->set_flashdata('error', $this->ion_auth->errors());
                $data['page'] = "landers/add_lander";
                $this->template->template_view($data);
            }
        }else{
            $tables = $this->config->item('tables', 'ion_auth');
            $identity_column = $this->config->item('identity', 'ion_auth');

            $data['page'] = "lander_manager/add_lander";

            $data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            $this->session->set_flashdata('error', $data['message']);
            $this->template->template_view($data);
        }
    }

    public function delete_lander($id)
    {
        $result = $this->common_model->delete(array('id'=>$id),'disclaimer');

        if ($result) {
            $this->session->set_flashdata('success', $this->ion_auth->messages());
            redirect('lander_manager', 'refresh');
        } else {
            $this->session->set_flashdata('success', $this->ion_auth->errors());
            redirect('lander_manager', 'refresh');
        }
    }


    public function edit($id)
    {
		$this->form_validation->set_rules('lander_name', 'Lander Name', 'trim|required');
		$this->form_validation->set_rules('lander_url', 'Lander URL', 'trim|required');
		$this->form_validation->set_rules('disclaimer', 'Disclaimer', 'trim|required');
		if (isset($_POST) && !empty($_POST) && $this->form_validation->run() === TRUE) {
			$data = array(
				'lander_name'       => $this->input->post('lander_name'),
				'lander_url'       => $this->input->post('lander_url'),
				'disclaimer'       => $this->input->post('disclaimer')
			);

            if ($this->common_model->update($id, $data,'disclaimer')) {
                $this->session->set_flashdata('success', $this->ion_auth->messages());
                redirect('lander_manager', 'refresh');
            } else {
                $this->session->set_flashdata('errors', $this->ion_auth->errors());
                redirect('lander_manager', 'refresh');
            }
        }else{
            $data['csrf'] = $this->_get_csrf_nonce();
            $data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            $this->session->set_flashdata('errors', $data['message']);
            $lander = $this->common_model->update_data(array('id'=>$id),'disclaimer');
            $data['lander_name'] = array(
                'name'  => 'lander_name',
                'id'    => 'lander_name',
                'type'  => 'text',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('lander_name', $lander->lander_name)
            );
			$data['lander_url'] = array(
                'name'  => 'lander_url',
                'id'    => 'lander_url',
                'type'  => 'text',
                'class' => 'form-control',
                'value' => $this->form_validation->set_value('lander_url', $lander->lander_url)
            );
            $data['disclaimer'] = $lander->disclaimer;
			$data['id'] = $id;
      
            $data['page'] = "lander_manager/edit_lander";
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
