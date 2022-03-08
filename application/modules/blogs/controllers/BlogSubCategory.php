<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BlogSubCategory extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->module('template');
		$this->load->model('common_model');
		$this->load->library('form_validation');

		if (!$this->ion_auth->logged_in()) :
			redirect('users/auth', 'refresh');
		endif;
	}

	public function index()
	{
		// getting categories
		$data['parentCategories'] = $this->common_model->getAllData('blog_categories', '*','','parent_id =0');
		$data['categories'] = $this->common_model->getAllData('blog_categories', '*','','parent_id !=0');

		$data['page'] = "blogs/sub_categories";
		$this->template->template_view($data);
	}

	public function add()
	{
		$this->form_validation->set_rules('add_parent_cat', 'Parent Category Name', 'trim|required');
		$this->form_validation->set_rules('add_cat', 'Category Name', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$data = array(

				'cat_name' => post('add_cat'),
				'parent_id' => post('add_parent_cat'),
				'slug'     => slugify(post('add_cat'))

			);

			$result = $this->common_model->InsertData('blog_categories', $data);

			if ($result) {
				$msg = "Category Added";
				$this->session->set_flashdata('success', $msg);
				redirect('blogs/BlogSubCategory', 'refresh');
			} else {
				$msg = "Error please contact with administrator!";
				$this->session->set_flashdata('error', $msg);
				redirect('blogs/BlogSubCategory', 'refresh');
			}
		}
	}

	/**
	 * [delete category]
	 * @return [True]
	 */
	public function delete($id)
	{
		$result = $this->common_model->DeleteDB('blog_categories', array('id' => $id));

		if ($result) {
			$msg = "Category Deleted Successfully";
			$this->session->set_flashdata('success', $msg);
			redirect('blogs/BlogSubCategory', 'refresh');
		} else {
			$msg = "Error please contact with administrator!";
			$this->session->set_flashdata('error', $msg);
			redirect('blogs/BlogSubCategory', 'refresh');
		}
	}

	/**
	 * [update category]
	 * @return [void]
	 */
	public function update()
	{
		$data = array(
			'cat_name'   => post('cat'),
		//	'parent_id'   => post('add_parent_cat'),
			'updated_at' => date('Y-m-d H:i:s'),
		);

		$result = $this->common_model->UpdateDB('blog_categories', array('id' => post('id')), $data);

		if ($result) {
			$msg = "Category Updated Successfully";
			$this->session->set_flashdata('success', $msg);
			redirect('blogs/BlogSubCategory', 'refresh');
		} else {
			$msg = "Error please contact with administrator!";
			$this->session->set_flashdata('error', $msg);
			redirect('blogs/BlogSubCategory', 'refresh');
		}
	}
}

