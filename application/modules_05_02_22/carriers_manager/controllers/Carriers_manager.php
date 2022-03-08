<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Carriers_manager extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->load->module('template');
		$this->load->model('common_model');
		$this->load->library('form_validation');

		if (!$this->ion_auth->logged_in()) :
			redirect('backoffice', 'refresh');
		endif;
	}

	/**
	 * [Load add new post]
	 * @return [void] 
	 */
	public function index()
	{
		$data['posts'] = $this->common_model->getAllData('blog_post', '*', '', array('deleted_at' => 'Null','type' => 3));

		$data['page'] = "carriers_manager/carriers_manager";
		$this->template->template_view($data);
	}

	/**
	 * [Add New Post to Blog]
	 */
	public function add()
	{
		$this->form_validation->set_rules('page_title', 'Page Title', 'trim|required');
		$this->form_validation->set_rules('title', 'Content Title', 'trim|required');
		$this->form_validation->set_rules('slug', 'Slug', 'trim|required');
		$this->form_validation->set_rules('canonical_tag', 'Canonical Tag', 'trim|required');
		$this->form_validation->set_rules('meta_desc', 'Meta Description', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('content[]', 'Content', 'trim|required');

		if (isset($_POST) && !empty($_POST) && $this->form_validation->run() == TRUE) {

			$data = array(
				'title'           		=> post('title'),
				'page_title'           	=> post('page_title'),
				'slug'   		  		=> $this->check_slug(post('slug')),
				'canonical_tag' 	 	=> post('canonical_tag'),
				'meta_desc' 	  		=> post('meta_desc'),
				'status' 		  		=> post('status'),
				'author_id' 		  	=> 0,
				'add_date'  			=> date("Y-m-d"),
				'publish_date'  		=> date("Y-m-d"),
				'featured_img' 	  		=> '',
				'short_description'   	=> '',
				'user_id'   	  		=> $this->session->userdata('user_id'),
				'deleted_at'	  		=> "Null",
				'type'	  				=> 3,
				'terms_and_conditions'	=> post('terms_and_conditions'),
				'view_type'	  			=> post('view_type'),
				'created_at'   	  		=> date("Y-m-d H:i:s"),
				'updated_at'   	  		=> date("Y-m-d H:i:s"),
			);

			$this->common_model->InsertData('blog_post', $data);
			$post_id = $this->db->insert_id();

			foreach (post('content[]') as $index=>$content) {
				$data = array(
					'post_id'			=> $post_id,
					'comment'			=> $content,
					'add_date'			=> date("Y-m-d")
				);
				$this->common_model->InsertData('comment', $data);
			}

			set_flashdata('success', 'Content Added Successfully');
			redirect('carriers_manager/carriers_manager', 'refresh');
		}else{
			$data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            $this->session->set_flashdata('errors', $data['message']);
			
			$data['title']  		= post('title');
			$data['page_title']  	= post('page_title');
			$data['slug']  			= post('slug');
			$data['canonical_tag'] 	= post('canonical_tag');
			$data['meta_desc']  	= post('meta_desc');
			$data['status']  		= post('status');
			$data['view_type']  	= post('view_type');
			$data['terms_and_conditions']  	= post('terms_and_conditions');
			
			if(isset($_POST['content']) && !empty($_POST['content'])){
				$data['post_comment']		= post('content[]');
			}else{
				$data['post_comment']		= array('');
			}
			
			$data['page'] = "carriers_manager/add_carriers";
			$this->template->template_view($data);
		}
	}

	public function check_slug($slug)
	{
		$data = $this->common_model->getAllData('blog_post', 'slug', '', array('deleted_at' => 'Null','slug' => trim($slug)));
		if(count($data) ==0)
		{
			return $slug;
		}else{
			return $slug.'-2';
		}
	}


	/**
	 * [delete post but not deleted permenantly]
	 * @param  [int]  $id [post id]
	 * @return [boolean] 
	 */
	public function delete_post($id)
	{
		$data = array(
			'deleted_at' 	 => date("Y-m-d H:i:s"),
			'status'     	 => 0,
		);

		$result = $this->common_model->UpdateDB('blog_post', array('id' => $id), $data);

		if ($result) {
			set_flashdata('success', 'Post Trashed Successfully');
			redirect('blog/posts/manage_posts', 'refresh');
		}
	}

	/**
	 * [permenent_delete a post]
	 * @return [boolean]
	 */
	public function delete_carriers($delete_id)
	{
		$this->common_model->DeleteDB('comment', array('post_id' => $delete_id));
		$result = $this->common_model->DeleteDB('blog_post', array('id' => $delete_id));

		if ($result) {
			set_flashdata('success', 'Content Permenent Deleted');
			redirect('carriers_manager/carriers_manager', 'refresh');
		}
	}

	/**
	 * [Get All trashed posts]
	 * @return [void]
	 */
	public function trashed_posts()
	{

		$data['posts'] = $this->common_model->getAllData('blog_post', '*', '', array('deleted_at !=' => 'Null'));

		$data['page'] = "blog/trashed_posts";
		$this->template->template_view($data);
	}

	/**
	 * [revert the blog post]
	 * @param  [int] $id [post id]
	 * @return [boolean] 
	 */
	public function revert($id)
	{
		$data = array(
			'deleted_at' 	 => 'Null',
			'status'     	 => 1,
			'allow_comments' => 1,
		);

		$result = $this->common_model->UpdateDB('blog_post', array('id' => $id), $data);

		if ($result) {
			set_flashdata('success', 'Content Revert Successfully');
			redirect('blog/posts/trashed_posts', 'refresh');
		}
	}

	/**
	 * [Chaned the post status to publish]
	 * @param  [int] $id [post id]
	 * @return [boolean]  
	 */
	public function publish($id)
	{
		$data = array(
			'status' => 1
		);

		$result = $this->common_model->UpdateDB('blog_post', array('id' => $id), $data);

		if ($result) {
			set_flashdata('success', 'Content Status Changed to Publish');
			redirect($_SERVER['HTTP_REFERER'], 'refresh');
		}
	}

	/**
	 * [Chaned the post status to unpublish]
	 * @param  [int] $id [post id]
	 * @return [boolean]  
	 */
	public function unpublish($id)
	{
		$data = array(
			'status' => 0
		);

		$result = $this->common_model->UpdateDB('blog_post', array('id' => $id), $data);

		if ($result) {
			set_flashdata('success', 'Content Status Changed to Unpublish');
			redirect($_SERVER['HTTP_REFERER'], 'refresh');
		}
	}

	/**
	 * [change the comments status post comments on post]
	 * @param  [int] $id [post id]
	 * @return [boolean]
	 */
	public function allow_comments($id)
	{
		$data = array(
			'allow_comments' => 1
		);

		$result = $this->common_model->UpdateDB('blog_post', array('id' => $id), $data);

		if ($result) {
			set_flashdata('success', 'Comment Status Has been changed');
			redirect($_SERVER['HTTP_REFERER'], 'refresh');
		}
	}

	/**
	 * [change the comments status to unallow]
	 * @param  [int] $id [post id]
	 * @return [boolean]
	 */
	public function unallow_comments($id)
	{
		$data = array(
			'allow_comments' => 0
		);

		$result = $this->common_model->UpdateDB('blog_post', array('id' => $id), $data);

		if ($result) {
			set_flashdata('success', 'Comments Status has been Changed');
			redirect($_SERVER['HTTP_REFERER'], 'refresh');
		}
	}

	/**
	 * [edit post ]
	 * @param  [int] $id
	 * @return [void]
	 */
	public function edit($id = '')
	{
			$this->form_validation->set_rules('page_title', 'Page Title', 'trim|required');
			$this->form_validation->set_rules('title', 'Post Title', 'trim|required');
			$this->form_validation->set_rules('canonical_tag', 'Canonical Tag', 'trim|required');
			$this->form_validation->set_rules('meta_desc', 'Meta Description', 'trim|required');
			$this->form_validation->set_rules('status', 'Status', 'trim|required');
			$this->form_validation->set_rules('content[]', 'Content', 'trim|required');

			if (isset($_POST) && !empty($_POST) && $this->form_validation->run() == TRUE) {

				$data = array(
					'title'           		=> post('title'),
					'page_title'           	=> post('page_title'),
					'canonical_tag' 	 	=> post('canonical_tag'),
					'meta_desc' 	  		=> post('meta_desc'),
					'status' 		  		=> post('status'),
					'view_type'	  			=> post('view_type'),
					'terms_and_conditions'	=> post('terms_and_conditions'),
					'updated_at'   	  		=> date("Y-m-d H:i:s")
				);

				$this->common_model->UpdateDB('blog_post', array('id' => post('post_id')), $data);

				$this->common_model->DeleteDB('comment', array('post_id' => post('post_id')));
				foreach (post('content[]') as $index=>$content) {
					$data = array(
						'post_id'			=> post('post_id'),
						'comment'			=> $content,
						'add_date'			=> date("Y-m-d")
					);
					$this->common_model->InsertData('comment', $data);
				}

				set_flashdata('success', 'Post Updated Successfully');
				redirect('content_manager', 'refresh');
			
			}else {
			//$data['post_data'] = $this->common_model->DJoin('*,blog_post.slug as pslug', 'blog_post', 'blog_categories', 'blog_post.category_id = blog_categories.id', '1', '', array('blog_post.id' => $id));
			$lpArr = $this->common_model->getAllData('blog_post', '*,blog_post.slug as pslug','',array('blog_post.id' => $id));	
			$data['post_data'] =$lpArr[0];
			$data['post_comment']  = $this->common_model->DJoin('*', 'comment', 'blog_post', 'blog_post.id = comment.post_id', '', '',  array('blog_post.id' => $id));
			$data['page'] = "carriers_manager/edit_carriers";
			$this->template->template_view($data);
		}
	}




	public function uploadimge(){
		if(isset($_FILES['upload']['name']))
		{
			$config['upload_path']          = './uploads/blog_images/';
			$config['allowed_types']        = 'gif|jpg|png';
			$new_name                   = time().$_FILES["userfiles"]['name'];
			$config['file_name']        = $new_name;
			$this->load->library('upload', $config);
			$this->upload->do_upload('upload');
			$data = array('upload_data' => $this->upload->data());
			$url = base_url() . 'uploads/blog_images/' . $data['upload_data']['file_name'];
			$message = '';
			$function_number = $_GET['CKEditorFuncNum'];
			echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number, '$url', '$message');</script>";
		}
	}
}

/* End of file Posts.php */
/* Location: ./application/modules/blog/controllers/Posts.php */
