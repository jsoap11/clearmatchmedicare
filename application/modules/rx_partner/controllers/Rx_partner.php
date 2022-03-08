<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Rx_partner extends MY_Controller
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
		$data['rx_partner'] = $this->common_model->getAllData('rx_partner');
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		$data['page'] = "rx_partner/rx_partner/view_rx_partner";
		$this->template->template_view($data);
	}


	public function rx_partner_add()
	{
		$this->form_validation->set_rules('rx_partner_name', 'Barnd Name', 'trim|required');
		$this->form_validation->set_rules('full_name', 'Full Name', 'trim|required');
		if (empty($_FILES['rx_partner_img']['name']))
		{
			$this->form_validation->set_rules('rx_partner_img', 'Barnd Image', 'required');
		}

		$data['rx_partner_name'] = $this->input->post('rx_partner_name');
		$data['full_name'] = $this->input->post('full_name');
		$data['phone'] = $this->input->post('phone');
		$data['rx_partner_script'] = $this->input->post('rx_partner_script');
		$data['disclaimer'] = $this->input->post('disclaimer');
		$data['type'] = $this->input->post('type');
		//  $data['banner_img']  = $this->input->post('banner_img');
		$data['temp1_value']  = $this->input->post('temp1_value');
		$data['active']  = $this->input->post('active');
		$data['terms_and_conditions']  = $this->input->post('terms_and_conditions');
		$data['updateon']  = $this->input->post('updateon');

		if ($this->form_validation->run() === true && isset($_POST) && !empty($_POST)) {	
			$image ='';	
			$config['upload_path']          = './uploads/blog_images/';
			$config['allowed_types']        = 'gif|jpg|png';
			$new_name                   = time().$_FILES["rx_partner_img"]['name'];
			$config['file_name']        = $new_name;
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('rx_partner_img')) {
				$error = array('error' => $this->upload->display_errors());

				$msg = $error['error'];
				$this->session->set_flashdata('error', $msg);
				redirect('rx_partner/rx_partner_add', 'refresh');
			} else {
				$data = array('upload_data' => $this->upload->data());
				$image = 'uploads/blog_images/' . $data['upload_data']['file_name'];
			}

			$saveData['rx_partner_name'] = $this->input->post('rx_partner_name');
			$saveData['full_name'] = $this->input->post('full_name');
			$saveData['phone'] = $this->input->post('phone');
			$saveData['rx_partner_script'] = $this->input->post('rx_partner_script');
			$saveData['disclaimer'] = $this->input->post('disclaimer');
			$saveData['type'] = $this->input->post('type');
			$saveData['rx_partner_img'] = $image;
			$saveData['active'] = ($this->input->post('active')=='')?0:1;
			$saveData['temp1_value'] = $this->input->post('temp1_value');
			$saveData['terms_and_conditions']  = $this->input->post('terms_and_conditions');
			$saveData['updateon']  = $this->input->post('updateon');

			if ( $this->common_model->add('rx_partner',$saveData)) {
				$this->session->set_flashdata('success', $this->ion_auth->messages());
				redirect('rx_partner', 'refresh');
			} else {
				$this->session->set_flashdata('error', $this->ion_auth->errors());
				$data['page'] = "rx_partner/rx_partner/rx_partner_add";
				$this->template->template_view($data);
			}
		}else{
			$tables = $this->config->item('tables', 'ion_auth');
			$identity_column = $this->config->item('identity', 'ion_auth');

			$data['page'] = "rx_partner/rx_partner/rx_partner_add";

			$data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
			$this->session->set_flashdata('error', $data['message']);
			$this->template->template_view($data);
		}
	}

	public function delete_banner($id)
	{
		$result = $this->common_model->delete(array('id'=>$id),'rx_partner');

		if ($result) {
			$this->session->set_flashdata('success', $this->ion_auth->messages());
			redirect('rx_partner', 'refresh');
		} else {
			$this->session->set_flashdata('success', $this->ion_auth->errors());
			redirect('rx_partner', 'refresh');
		}
	}


	public function edit_rx_partner($id)
	{
		$this->form_validation->set_rules('rx_partner_name', 'Brand Name', 'trim|required');
		$this->form_validation->set_rules('full_name', 'Full Name', 'trim|required');
		$this->form_validation->set_rules('temp1_value', 'Brand Leadsrc', 'trim|required');
		if (isset($_POST) && !empty($_POST) && $this->form_validation->run() === TRUE) {
			$image ='';
			if (!empty($_FILES["rx_partner_img"]["name"])) {

				$config['upload_path']      = './uploads/blog_images/';
				$config['allowed_types']    = 'gif|jpg|png';
				$new_name                   = time().$_FILES["rx_partner_img"]['name'];
				$config['file_name']        = $new_name;
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('rx_partner_img')) {
					$error = array('error' => $this->upload->display_errors());

					$msg = $error['error'];
					$this->session->set_flashdata('error', $msg);
					redirect('rx_partner/edit_rx_partner/'.$id, 'refresh');
				} else {
					$data = array('upload_data' => $this->upload->data());
					$image = 'uploads/blog_images/' . $data['upload_data']['file_name'];
				}
			} 
			if($image ==''){
				$data = array(
					'rx_partner_name'   => $this->input->post('rx_partner_name'),
					'full_name'   => $this->input->post('full_name'),
					'phone'   => $this->input->post('phone'),
					'rx_partner_script'   => $this->input->post('rx_partner_script'),
					'disclaimer'   => $this->input->post('disclaimer'),
					'type'                  => $this->input->post('type'),
					'temp1_value'                  => $this->input->post('temp1_value'),
					'terms_and_conditions'                  => $this->input->post('terms_and_conditions'),
					'updateon'                  => $this->input->post('updateon'),
					'active'        => ($this->input->post('active')=='')?0:1
				);
			}else{
				$data = array(
					'full_name'       => $this->input->post('full_name'),
					'rx_partner_name'       => $this->input->post('rx_partner_name'),
					'phone'       => $this->input->post('phone'),
					'rx_partner_script'       => $this->input->post('rx_partner_script'),
					'disclaimer'       => $this->input->post('disclaimer'),
					'type'       => $this->input->post('type'),
					'temp1_value'                  => $this->input->post('temp1_value'),
					'active'            => ($this->input->post('active')=='')?0:1,
					'terms_and_conditions'                  => $this->input->post('terms_and_conditions'),
					'updateon'                  => $this->input->post('updateon'),
					'rx_partner_img'        => $image
				);
			}

			// echo '<pre>';
			// print_r($data);
			// echo '</pre>';
			// exit;

			if ($this->common_model->update($id, $data,'rx_partner')) {
				$this->session->set_flashdata('success', $this->ion_auth->messages());
				redirect('rx_partner', 'refresh');
			} else {
				$this->session->set_flashdata('errors', $this->ion_auth->errors());
				redirect('rx_partner', 'refresh');
			}
		}else{
			$data['csrf'] = $this->_get_csrf_nonce();
			$data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
			$this->session->set_flashdata('errors', $data['message']);
			$rx_partner = $this->common_model->update_data(array('id'=>$id),'rx_partner');
			// echo '<pre>';
			// print_r($banner);
			// echo '</pre>';
			// exit;
			$data['rx_partner_name'] = array(
				'name'  => 'rx_partner_name',
				'id'    => 'rx_partner_name',
				'type'  => 'text',
				'class' => 'form-control',
				'value' => $this->form_validation->set_value('rx_partner_name', $rx_partner->rx_partner_name)
			);
			$data['full_name'] = array(
				'name'  => 'full_name',
				'id'    => 'full_name',
				'type'  => 'text',
				'class' => 'form-control',
				'value' => $this->form_validation->set_value('full_name', $rx_partner->full_name)
			);
			$data['phone'] = array(
				'name'  => 'phone',
				'id'    => 'phone',
				'type'  => 'text',
				'class' => 'form-control',
				'value' => $this->form_validation->set_value('phone', $rx_partner->phone)
			);

			$data['temp1_value'] = array(
				'name'  => 'temp1_value',
				'id'    => 'temp1_value',
				'type'  => 'text',
				'class' => 'form-control',
				'value' => $this->form_validation->set_value('temp1_value', $rx_partner->temp1_value)
			);

			$data['rx_partner_img'] = $rx_partner->rx_partner_img;
			$data['active'] = $rx_partner->active;
			$data['rx_partner_script'] = $rx_partner->rx_partner_script;
			$data['disclaimer'] = $rx_partner->disclaimer;
			$data['type'] = $rx_partner->type;
			$data['id'] = $rx_partner->id;
			$data['terms_and_conditions'] = $rx_partner->terms_and_conditions;
			$data['updateon'] = $rx_partner->updateon;

			$data['page'] = "rx_partner/rx_partner/edit_rx_partner";
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

	// deactivate the user
	public function deactivate($id)
	{
		$data['active'] = 0;
		$activation = $this->common_model->update($id, $data,'rx_partner');

		if ($activation) {
			// redirect them to the auth page
			$this->session->set_flashdata('success', $this->ion_auth->messages());
			redirect("rx_partner", 'refresh');
		} else {
			// redirect them to the forgot password page
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect("rx_partner", 'refresh');
		}
	}

	// activate the user
	public function activate($id)
	{
		$data['active'] = 1;
		$activation = $this->common_model->update($id, $data,'rx_partner');

		if ($activation) {
			// redirect them to the auth page
			$this->session->set_flashdata('success', $this->ion_auth->messages());
			redirect("rx_partner", 'refresh');
		} else {
			// redirect them to the forgot password page
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect("rx_partner", 'refresh');
		}
	}

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */
