<?php defined('BASEPATH') or exit('No direct script access allowed');

class Permissions extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->load->library(array('form_validation'));
		$this->load->helper(array('html', 'language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
		$this->load->model(array('Ion_auth_model', 'common_model'));

		$this->load->module('template');

		if (!$this->ion_auth->logged_in()) {
			redirect('users/auth', 'refresh');
		}
	}

	public function index()
	{
		if (!$this->ion_auth->is_admin()) {
			return show_error("You Must Be An Administrator To View This Page");
		}

		if ($_POST) {

			$data = array(
				'perm_name' => post('perm_name'),
				'icon' => post('icon'),
				'menu_name' => 'head',
				'url' => post('url'),
				'slug' => slugify(post('perm_name')),
				'level' => 0,
				'parent_id' => 0,
			);

			$result = $this->common_model->add('permissions', $data);

			if ($result) {
				$msg = "Permission Added Successfully";
				$this->session->set_flashdata('success', $msg);
				redirect('users/Permissions', 'refresh');
			} else {
				$msg = "Error";
				$this->session->set_flashdata('error', $msg);
				redirect('users/Permissions', 'refresh');
			}
		} else {

			$data['head_permissions'] = $this->common_model->getAllData('permissions', '*', '', array('level' => 0));
			$data['sub_permissions'] = $this->common_model->getAllData('permissions', '*', '', array('level' => 1));

			$data['page'] = 'users/user_groups/permissions';
			$this->template->template_view($data);
		}
	}
	public function sub_permission()
	{
		$data = array(
			'perm_name' => post('perm'),
			'icon' => '<i class="fa fa-angle-right" aria-hidden="true"></i>',
			'slug' => slugify(post('perm')),
			'level' => 1,
			'menu_name' => 'sub',
			'url' => post('url'),
			'parent_id' => post('head_perm'),
		);

		$result = $this->common_model->add('permissions', $data);

		if ($result) {
			$msg = "Permission Added Successfully";
			$this->session->set_flashdata('success', $msg);
			redirect('users/Permissions', 'refresh');
		} else {
			$msg = "Error";
			$this->session->set_flashdata('error', $msg);
			redirect('users/Permissions', 'refresh');
		}
	}
	public function delete_perm($id)
	{
		$this->common_model->delete(array('perm_id' => $id), 'permissions');
		$this->common_model->delete(array('parent_id' => $id), 'permissions');

		$msg = "Permission Delete Successfully";
		$this->session->set_flashdata('success', $msg);
		redirect('users/Permissions', 'refresh');
	}
	public function get_perm()
	{
		$id = post('id');
		$level = post('level');

		if ($level == 0) {
			$edit_id = array('perm_id' => $id);

			$result = $this->common_model->getAllData('permissions', '*', 1, $edit_id);

			echo json_encode($result);
		} else {
			$result =  $this->common_model->getAllData('permissions', '*', 1, array('perm_id' => $id));

			echo json_encode($result);
		}
	}

	public function update_perm()
	{
		if (!$this->ion_auth->is_admin()) {
			return show_error("You Must Be An Administrator To View This Page");
		}
		$data = array(
			'perm_name' => post('perm_name'),
			'icon' => post('icon'),
			'url' => post('url'),
		);

		$result = $this->common_model->UpdateDB("permissions", array('perm_id' => post('id')), $data);

		if ($result) {
			$msg = "Head Permission Update Successfully";
			$this->session->set_flashdata('success', $msg);
			redirect('users/Permissions', 'refresh');
		} else {
			$msg = "Error";
			$this->session->set_flashdata('error', $msg);
			redirect('users/Permissions', 'refresh');
		}
	}
	public function update_sub_permission()
	{
		$data = array(
			'perm_name' => post('perm'),
			'url' => post('url'),
			'parent_id' => post('head_perm'),
		);

		$result = $this->common_model->UpdateDB("permissions", array('perm_id' => post('id')), $data);

		if ($result) {
			$msg = "Sub Permission Updated Successfully";
			$this->session->set_flashdata('success', $msg);
			redirect('users/Permissions', 'refresh');
		} else {
			$msg = "Error";
			$this->session->set_flashdata('error', $msg);
			redirect('users/Permissions', 'refresh');
		}
	}
}

/* End of file Controllername.php */
