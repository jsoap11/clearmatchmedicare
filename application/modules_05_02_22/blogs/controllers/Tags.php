<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tags extends MY_Controller
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

	public function index()
	{
		$data['tags'] = $this->common_model->getAllData('blog_tags', '*');

		$data['page'] = "blogs/tags";
		$this->template->template_view($data);
	}

	/* [add new tag ]
	 * @return [void]
	 */
	public function add()
	{
		$this->form_validation->set_rules('add_tag', 'Tag', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$data = array(

				'tag'  => post('add_tag'),
				'slug' => slugify(post('add_tag'))

			);

			$result = $this->common_model->InsertData('blog_tags', $data);

			if ($result) {
				set_flashdata('success', 'Tag Added');
				redirect('blogs/Tags', 'refresh');
			} else {
				$msg = "Error please contact with administrator!";
				$this->session->set_flashdata('error', $msg);
				redirect('blogs/Tags', 'refresh');
			}
		}
	}

	/**
	 * [Delete Tag]
	 * @return [ture]
	 */
	public function delete($id)
	{
		$result = $this->common_model->DeleteDB('blog_tags', array('id' => $id));

		if ($result) {
			set_flashdata('success', 'Tag Deleted');
			redirect('blogs/Tags', 'refresh');
		} else {
			$msg = "Error please contact with administrator!";
			set_flashdata('error', $msg);
			redirect('blogs/Tags', 'refresh');
		}
	}

	/**
	 * [update tag]
	 * @return [void]
	 */
	public function update()
	{
		$data = array(
			'tag'       => post('cat'),
			'updated_at' => date('Y-m-d H:i:s'),
		);

		$result = $this->common_model->UpdateDB('blog_tags', array('id' => post('id')), $data);

		if ($result) {
			set_flashdata('success', 'Tag Updated');
			redirect('blogs/Tags', 'refresh');
		} else {
			$msg = "Error please contact with administrator!";
			set_flashdata('error', $msg);
			redirect('blogs/Tags', 'refresh');
		}
	}
}

/* End of file Tags.php */
/* Location: ./application/modules/blog/controllers/Tags.php */
