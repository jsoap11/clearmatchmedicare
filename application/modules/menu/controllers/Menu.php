<?php defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('html', 'language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
		$this->load->model(array('Ion_auth_model', 'common_model'));

		$this->load->module('template');

		if (!$this->ion_auth->logged_in()) {
			redirect('backoffice', 'refresh');
		}
	}

	public function index()
	{
		if (!$this->ion_auth->is_admin()) {
			return show_error("You Must Be An Administrator To View This Page");
		}

		if ($_POST) {

			$data = array(
				'menu_name' => post('menu_name'),
				'parent_id' => 0,
				'post_id' => post('post_id'),
				'slug' => post('slug'),
				'level' => 0
			);

			$result = $this->common_model->add('site_menu', $data);

			if ($result) {
				$msg = "Menu Added Successfully";
				$this->session->set_flashdata('success', $msg);
				redirect('menu', 'refresh');
			} else {
				$msg = "Error";
				$this->session->set_flashdata('error', $msg);
				redirect('menu', 'refresh');
			}
		} else {

			$data['head_menu'] = $this->common_model->getAllData('site_menu', '*', '', array('parent_id' => 0));
			$data['sub_menu'] = $this->common_model->getAllData('site_menu', '*', '', array('level' => 1));
			$data['sub_sub_menu'] = $this->common_model->getAllData('site_menu', '*', '', array('level' => 2));

			$data['allPost'] = $this->common_model->getAllData('blog_post', 'id,page_title,slug', '', array('deleted_at' => 'Null','status' => 1));

			$data['page'] = 'menu/menu/menu';
			$this->template->template_view($data);
		}
	}
	public function sub_menu()
	{
		$data = array(
			'menu_name' => post('menu_name'),
			'parent_id' => post('parent_id'),
			'post_id' => post('post_id'),
			'slug' => post('slug'),
			'level' => 1
		);

		$result = $this->common_model->add('site_menu', $data);

		if ($result) {
			$msg = "Menu Added Successfully";
			$this->session->set_flashdata('success', $msg);
			redirect('menu', 'refresh');
		} else {
			$msg = "Error";
			$this->session->set_flashdata('error', $msg);
			redirect('menu', 'refresh');
		}
	}
	public function sub_sub_menu()
	{
		$data = array(
			'menu_name' => post('menu_name'),
			'parent_id' => post('parent_id'),
			'post_id' => post('post_id'),
			'slug' => post('slug'),
			'level' => 2
		);

		$result = $this->common_model->add('site_menu', $data);

		if ($result) {
			$msg = "Menu Added Successfully";
			$this->session->set_flashdata('success', $msg);
			redirect('menu', 'refresh');
		} else {
			$msg = "Error";
			$this->session->set_flashdata('error', $msg);
			redirect('menu', 'refresh');
		}
	}
	public function delete_menu($id)
	{
		$this->common_model->delete(array('menu_id' => $id), 'site_menu');
		$this->common_model->delete(array('parent_id' => $id), 'site_menu');

		$msg = "Menu Delete Successfully";
		$this->session->set_flashdata('success', $msg);
		redirect('menu', 'refresh');
	}
	public function get_perm()
	{
		$id = post('id');
		$level = post('level');

		$result =  $this->common_model->getAllData('site_menu', '*', 1, array('menu_id' => $id));
		echo json_encode($result);
	}

	public function update_menu()
	{
		if (!$this->ion_auth->is_admin()) {
			return show_error("You Must Be An Administrator To View This Page");
		}
		$data = array(
			'menu_name' => post('menu_name'),
			'post_id' => post('post_id'),
			'slug' => post('slug')
		);

		$result = $this->common_model->UpdateDB("site_menu", array('menu_id' => post('id')), $data);

		if ($result) {
			$msg = "Menu Update Successfully";
			$this->session->set_flashdata('success', $msg);
			redirect('menu', 'refresh');
		} else {
			$msg = "Error";
			$this->session->set_flashdata('error', $msg);
			redirect('menu', 'refresh');
		}
	}
	public function update_sub_menu()
	{
		$data = array(
			'menu_name' => post('menu_name'),
			'post_id' => post('post_id'),
			'slug' => post('slug')
		);

		$result = $this->common_model->UpdateDB("site_menu", array('menu_id' => post('id')), $data);

		if ($result) {
			$msg = "Menu Updated Successfully";
			$this->session->set_flashdata('success', $msg);
			redirect('menu', 'refresh');
		} else {
			$msg = "Error";
			$this->session->set_flashdata('error', $msg);
			redirect('menu', 'refresh');
		}
	}
}

