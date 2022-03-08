<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BlogCategory extends MY_Controller
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
		/*if (!$this->ion_auth->is_admin()) :
			return show_error("You Must Be An Administrator To View This Page");
		endif;*/
	}

	/**
	 * [Load Categories]
	 * @return [void]
	 */
	public function index()
	{
		// getting categories
		$data['categories'] = $this->common_model->getAllData('blog_categories', '*');

		$data['page'] = "blogs/categories";
		$this->template->template_view($data);
	}

	/**
	 * [add new category to blog]
	 * @return [void]
	 */
	public function add()
	{
		$this->form_validation->set_rules('add_cat', 'Category Name', 'trim|required');
		$this->form_validation->set_rules('meta_title', 'Meta Title', 'trim|required');
		$this->form_validation->set_rules('meta_description', 'Meta Description', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$data = array(

				'cat_name' => post('add_cat'),
				'meta_title' => post('meta_title'),
				'meta_description' => post('meta_description'),
				'slug'     => slugify(post('add_cat'))

			);

			$result = $this->common_model->InsertData('blog_categories', $data);

			if ($result) {
				$msg = "Category Added";
				$this->session->set_flashdata('success', $msg);
				redirect('blogs/BlogCategory', 'refresh');
			} else {
				$msg = "Error please contact with administrator!";
				$this->session->set_flashdata('error', $msg);
				redirect('blogs/BlogCategory', 'refresh');
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
			redirect('blogs/BlogCategory', 'refresh');
		} else {
			$msg = "Error please contact with administrator!";
			$this->session->set_flashdata('error', $msg);
			redirect('blogs/BlogCategory', 'refresh');
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
			'meta_title'   => post('meta_title'),
			'meta_description'   => post('meta_description'),
			'updated_at' => date('Y-m-d H:i:s'),
		);

		$result = $this->common_model->UpdateDB('blog_categories', array('id' => post('id')), $data);

		if ($result) {
			$msg = "Category Updated Successfully";
			$this->session->set_flashdata('success', $msg);
			redirect('blogs/BlogCategory', 'refresh');
		} else {
			$msg = "Error please contact with administrator!";
			$this->session->set_flashdata('error', $msg);
			redirect('blogs/BlogCategory', 'refresh');
		}
	}
}

/* End of file BlogCategory.php */
/* Location: ./application/modules/blog/controllers/BlogCategory.php */
