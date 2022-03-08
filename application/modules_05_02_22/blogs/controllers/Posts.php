<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Posts extends MY_Controller
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

		/*if (!$this->ion_auth->is_admin()) :
			return show_error("You Must Be An Administrator To View This Page");
		endif;*/
	}

	/**
	 * [Load add new post]
	 * @return [void] 
	 */
	public function index()
	{
		redirect('blogs/posts/manage_posts', 'refresh');
	}

	public function search_posts()
	{
		if (isset($_POST) && !empty($_POST)) {
			$data['daterange'] = post('daterange');
			$data['posts'] = $this->common_model->post_search($data['daterange']);

		}else{
			$data['daterange'] = "11/15/2021 - 11/30/2021";
			$data['posts'] = array();		
		}
		$data['page'] = "blogs/search_posts";	
		$this->template->template_view($data);
	}

	public function add_post()
	{
		$this->form_validation->set_rules('page_title', 'Page Title', 'trim|required');
		$this->form_validation->set_rules('title', 'Post Title', 'trim|required');
		$this->form_validation->set_rules('slug', 'Slug', 'trim|required');
		$this->form_validation->set_rules('canonical_tag', 'Canonical Tag', 'trim|required');
		$this->form_validation->set_rules('meta_desc', 'Meta Description', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('add_date', 'Add Date', 'trim|required');
		$this->form_validation->set_rules('publish_date', 'Publish Date', 'trim|required');
		$this->form_validation->set_rules('short_description', 'Short Description', 'trim|required');
		$this->form_validation->set_rules('author', 'Author', 'trim|required');
		$this->form_validation->set_rules('tags[]', 'Tags', 'trim|required');
		$this->form_validation->set_rules('primary_cat_id', 'Primary Category', 'trim|required');
		$this->form_validation->set_rules('content[]', 'Content', 'trim|required');
		//$this->form_validation->set_rules('thumble_image_post', 'Thumble image', 'trim|required');
		$this->form_validation->set_rules('featured_img_post', 'Featured image', 'trim|required');
		//$this->form_validation->set_rules('featured_img_alt', 'Featured Alt', 'trim|required');
		//$this->form_validation->set_rules('thumble_image_alt', 'Thumble Alt', 'trim|required');

		if (isset($_POST) && !empty($_POST) && $this->form_validation->run() == TRUE) {
			$data = array(
				'title'           		=> post('title'),
				'page_title'           	=> post('page_title'),
				'slug'   		  		=> $this->check_slug(post('slug')),
				'canonical_tag' 	 	=> post('canonical_tag'),
				'meta_desc' 	  		=> post('meta_desc'),
				'status' 		  		=> post('status'),
				'author_id' 		  	=> post('author'),
				'add_date'  			=> post('add_date'),
				'publish_date'  		=> post('publish_date'),
				'primary_cat_id'  		=> post('primary_cat_id'),
				'featured_img' 	  		=> post('featured_img_post'),
				'thumble_image' 	  	=> post('thumble_image_post'),
				'short_description'   	=> post('short_description'),
				'featured_img_alt'   	=> post('featured_img_alt'),
				'thumble_image_alt'   	=> post('thumble_image_alt'),
				'user_id'   	  		=> $this->session->userdata('user_id'),
				'deleted_at'	  		=> "Null",
				'type'	  				=> 0,
				'view_type'	  			=> 2,
				'created_at'   	  		=> date("Y-m-d H:i:s"),
				'updated_at'   	  		=> date("Y-m-d H:i:s"),
				'no_index'  			=> post('no_index')
			);



			$this->common_model->InsertData('blog_post', $data);

			$post_id = $this->db->insert_id();

			foreach (post('tags[]') as $tag_id) {
				$data = array(
					'post_id' => $post_id,
					'tag_id'  => $tag_id,
				);
				$this->common_model->InsertData('blog_post_tags', $data);
			}

			foreach (post('topics[]') as $topics) {
				$data = array(
					'post_id' => $post_id,
					'sub_cat_id'  => $topics,
				);
				$this->common_model->InsertData('topic_map', $data);
			}

			foreach (post('category[]') as $category) {
				$data = array(
					'post_id' => $post_id,
					'cat_id'  => $category,
				);
				$this->common_model->InsertData('category_map', $data);
			}

			foreach (post('content[]') as $index=>$content) {
				$data = array(
					'post_id'			=> $post_id,
					'comment'			=> $content,
					'add_date'			=> date("Y-m-d")
				);
				$this->common_model->InsertData('comment', $data);
			}

			set_flashdata('success', 'Post Added Successfully');
			redirect('blogs/posts/manage_posts', 'refresh');
		}else{
			$data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
			$this->session->set_flashdata('errors', $data['message']);
			$data['categories'] = $this->common_model->getAllData('blog_categories', '*','',array('parent_id'=>0));
			$data['tags']       = $this->common_model->getAllData('blog_tags', '*');
			$data['author']       = $this->common_model->getAllData('users', '*');	

			$data['title']  		= post('title');
			$data['page_title']  	= post('page_title');
			$data['slug']  			= post('slug');
			$data['canonical_tag'] 	= post('canonical_tag');
			$data['meta_desc']  	= post('meta_desc');
			$data['status']  		= post('status');
			$data['primary_cat_id'] = post('primary_cat_id');
			$data['author_id'] 		= post('author');
			$data['add_date']  		= post('add_date');
			$data['publish_date']  	= post('publish_date');
			$data['featured_img_alt']  	= post('featured_img_alt');
			$data['thumble_image_alt']  	= post('thumble_image_alt');
			$data['featured_img_post']  		= post('featured_img_post');
			$data['thumble_image_post']  		= post('thumble_image_post');
			$data['no_index']  		= post('no_index');
			$data['view_type']  	= 2;
			$data['short_description']	= post('short_description');
			if(isset($_POST['category[]']) && !empty($_POST['category[]'])){
				$data['post_category']		= post('category[]');
			}else{
				$data['post_category']		= array();
			}
			if(isset($_POST['tags[]']) && !empty($_POST['tags[]'])){
				$data['post_tags']		= post('tags[]');
			}else{
				$data['post_tags']		= array();
			}
			if(isset($_POST['content']) && !empty($_POST['content'])){
				$data['post_comment']		= post('content[]');
			}else{
				$data['post_comment']		= array('');
			}

			$data['page'] = "blogs/Posts";
			$this->template->template_view($data);
		}
	}

	public function getSubCategory(){
		$data = $this->common_model->getAllData('blog_categories', 'id,cat_name','',array('parent_id'=>post('catId')));
		echo json_encode($data);
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
	 * [Get All posts without Trashed]
	 */
	public function manage_posts()
	{
		$data['posts'] = $this->common_model->all_posts();

		$data['page'] = "blogs/manage_posts";
		$this->template->template_view($data);
	}



	public function posts_orders()
	{
		$data['posts'] = $this->common_model->getAllData('blog_post', '*', '', array('deleted_at' => 'Null','type' => 0), 'desc');

		$data['page'] = "blogs/posts_orders";
		$this->template->template_view($data);
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
			redirect('blogs/posts/manage_posts', 'refresh');
		}
	}

	/**
	 * [permenent_delete a post]
	 * @return [boolean]
	 */
	public function permenent_delete()
	{
		$fileurl = post('delete_img');

		$file_name = basename($fileurl);

		unlink("uploads/blog_images/" . $file_name);

		$result = $this->common_model->DeleteDB('blog_post', array('id' => post('post_id')));

		if ($result) {
			set_flashdata('success', 'Post Permenent Deleted');
			redirect('blogs/posts/trashed_posts', 'refresh');
		}
	}

	/**
	 * [Get All trashed posts]
	 * @return [void]
	 */
	public function trashed_posts()
	{

		$data['posts'] = $this->common_model->getAllData('blog_post', '*', '', array('deleted_at !=' => 'Null'));

		$data['page'] = "blogs/trashed_posts";
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
			set_flashdata('success', 'Post Revert Successfully');
			redirect('blogs/posts/trashed_posts', 'refresh');
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
			set_flashdata('success', 'Post Status Changed to Publish');
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
			set_flashdata('success', 'Post Status Changed to Unpublish');
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
	public function edit_post($id = '')
	{
		$this->form_validation->set_rules('page_title', 'Page Title', 'trim|required');
		$this->form_validation->set_rules('title', 'Post Title', 'trim|required');
		$this->form_validation->set_rules('canonical_tag', 'Canonical Tag', 'trim|required');
		$this->form_validation->set_rules('meta_desc', 'Meta Description', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('add_date', 'Add Date', 'trim|required');
		$this->form_validation->set_rules('publish_date', 'Publish Date', 'trim|required');
		$this->form_validation->set_rules('short_description', 'Short Description', 'trim|required');
		$this->form_validation->set_rules('author', 'Author', 'trim|required');
		$this->form_validation->set_rules('tags[]', 'Tags', 'trim|required');
		$this->form_validation->set_rules('primary_cat_id', 'Primary Category', 'trim|required');
		$this->form_validation->set_rules('content[]', 'Content', 'trim|required');
		//$this->form_validation->set_rules('thumble_image_post', 'Thumble image', 'trim|required');
		$this->form_validation->set_rules('featured_img_post', 'Featured image', 'trim|required');
		//$this->form_validation->set_rules('featured_img_alt', 'Featured Alt', 'trim|required');
		//$this->form_validation->set_rules('thumble_image_alt', 'Thumble Alt', 'trim|required');

		if (isset($_POST) && !empty($_POST) && $this->form_validation->run() == TRUE) {

			$data = array(
				'title'           		=> post('title'),
				'page_title'           	=> post('page_title'),
				'slug'  				=> post('slug'),
				'canonical_tag' 	 	=> post('canonical_tag'),
				'meta_desc' 	  		=> post('meta_desc'),
				'author_id' 		  	=> post('author'),
				'status' 		  		=> post('status'),
				'add_date'  			=> post('add_date'),
				'primary_cat_id'  		=> post('primary_cat_id'),
				'publish_date'  		=> post('publish_date'),
				'featured_img' 	  		=> post('featured_img_post'),
				'thumble_image' 	  	=> post('thumble_image_post'),
				'short_description'   	=> post('short_description'),
				'featured_img_alt'   	=> post('featured_img_alt'),
				'thumble_image_alt'   	=> post('thumble_image_alt'),
				'user_id'   	  		=> $this->session->userdata('user_id'),
				'deleted_at'	  		=> "Null",
				'view_type'	  			=> 2,
				'created_at'   	  		=> date("Y-m-d H:i:s"),
				'updated_at'   	  		=> date("Y-m-d H:i:s"),
				'no_index'  			=> post('no_index')
			);

			$this->common_model->UpdateDB('blog_post', array('id' => post('post_id')), $data);

			$this->common_model->DeleteDB('blog_post_tags', array('post_id' => post('post_id')));

			foreach (post('tags[]') as $tag_id) {
				$data = array(
					'post_id' => post('post_id'),
					'tag_id'  => $tag_id,
				);
				$this->common_model->InsertData('blog_post_tags', $data);
			}

			$this->common_model->DeleteDB('category_map', array('post_id' => post('post_id')));

			foreach (post('category[]') as $category_id) {
				$data = array(
					'post_id' => post('post_id'),
					'cat_id'  => $category_id,
				);
				$this->common_model->InsertData('category_map', $data);
			}
			/*
			echo '<pre>';
			print_r(post('topics[]'));
			echo '</pre>';
			*/
			$this->common_model->DeleteDB('topic_map', array('post_id' => post('post_id')));
			foreach (post('topics[]') as $topics) {
				$data = array(
					'post_id' => post('post_id'),
					'sub_cat_id'  => $topics,
				);
				$this->common_model->InsertData('topic_map', $data);
			}

			$this->common_model->DeleteDB('comment', array('post_id' => post('post_id')));
			foreach (post('content[]') as $index=>$content) {
				$data = array(
					'post_id'			=> post('post_id'),
					'comment'			=> $content,
					'add_date'			=> date("Y-m-d")
				);
				$this->common_model->InsertData('comment', $data);
			}
			if(post('odd_redirecr'))
			{
				$this->common_model->DeleteDB('redirect', array('prv_url' => post('odd_redirecr')));
				$data = array(
					'prv_url'		=> post('odd_redirecr'),
					'crnt_url'		=> post('slug')
				);

				$this->common_model->InsertData('redirect', $data);
			}

			set_flashdata('success', 'Post Updated Successfully');
			redirect('blogs/posts/manage_posts', 'refresh');

		}else {
			$data['post_data'] = $this->common_model->DJoin('*,blog_post.slug as pslug,blog_categories.slug as cslug', 'blog_post', 'blog_categories', 'blog_post.primary_cat_id = blog_categories.id', '1', '', array('blog_post.id' => $id));
			//pr($data['post_data'] );
			//$lpArr = $this->common_model->getAllData('blog_post', '*,blog_post.slug as pslug','',array('blog_post.id' => $id));	
			//$data['post_data'] =$lpArr[0];
			$data['categories'] = $this->common_model->getAllData('blog_categories', '*','',array('parent_id'=>0));
			$data['tags']       = $this->common_model->getAllData('blog_tags', '*');
			$data['author']       = $this->common_model->getAllData('users', '*');
			$data['topics'] = $this->common_model->getAllData('blog_categories', '*','',array('parent_id'=>$data['post_data']->primary_cat_id));

			$data['post_tags']  = $this->common_model->DJoin('*', 'blog_post_tags', 'blog_tags', 'blog_tags.id = blog_post_tags.tag_id', '', '', array('blog_post_tags.post_id' => $id));
			$data['post_topics']  =$this->common_model->getAllData('topic_map', '*','',array('post_id'=>$id));
			$data['post_cats']  = $this->common_model->DJoin('*', 'category_map', 'blog_categories', 'blog_categories.id = category_map.cat_id', '', '', array('category_map.post_id' => $id));
			$data['post_author']  = $this->common_model->DJoin('users.id,users.first_name,users.last_name', 'users', 'blog_post', 'blog_post.author_id = users.id', '1', '',  array('blog_post.id' => $id));
			$data['post_comment']  = $this->common_model->DJoin('*', 'comment', 'blog_post', 'blog_post.id = comment.post_id', '', '',  array('blog_post.id' => $id));
			$data['post_301']  = $this->common_model->DJoin('redirect.prv_url', 'redirect', 'blog_post', 'redirect.crnt_url = blog_post.slug', '1', '',  array('blog_post.id' => $id));
			$data['page'] = "blogs/edit_post";
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

	function update_ordering(){
		$category =  post('category');
		$orderArr = post('order_'.$category.'[]');
		if(count($orderArr)>0){
			foreach($orderArr as $key =>$value){
				if($category =='blog'){
					$this->common_model->UpdateDB('blog_post',array('ordering' => $value), array('ordering' => 0));
					echo $this->common_model->UpdateDB('blog_post',array('id' => $key),array('ordering' =>$value));
				}
				if($category =='medicare'){
					$this->common_model->UpdateDB('blog_post',array('ordering_medicare' => $value), array('ordering_medicare' => 0));
					echo $this->common_model->UpdateDB('blog_post',array('id' => $key),array('ordering_medicare' => $value));
				}
				if($category =='retirement'){
					$this->common_model->UpdateDB('blog_post',array('ordering_retirement' => $value), array('ordering_retirement' => 0));
					echo $this->common_model->UpdateDB('blog_post',array('id' => $key),array('ordering_retirement' => $value));
				}
				if($category =='healthy'){
					$this->common_model->UpdateDB('blog_post',array('ordering_healthy' => $value), array('ordering_healthy' => 0));
					echo $this->common_model->UpdateDB('blog_post',array('id' => $key),array('ordering_healthy' => $value));
				}
			}
		}

		$defult = post('defult');
		if(isset($defult))
		{
			if($category =='blog'){
				$data = array('is_blog_first' =>1);

				$where = array(
					'id' => $defult
				);

				$this->common_model->UpdateDB('blog_post',array(), array('is_blog_first' => 0));
			}

			if($category =='medicare'){
				$data = array(
					'is_cat_first' =>1 
				);

				$where = array(
					'id' => $defult
				);

				$this->common_model->UpdateDB('blog_post',array('primary_cat_id' => 41), array('is_cat_first' => 0));
			}

			if($category =='retirement'){
				$data = array(
					'is_cat_first' =>1
				);

				$where = array(
					'id' => $defult
				);

				$this->common_model->UpdateDB('blog_post',array('primary_cat_id'=>43), array('is_cat_first' =>0));
			}

			if($category =='healthy'){
				$data = array(
					'is_cat_first' =>1 
				);

				$where = array(
					'id' => $defult
				);

				$this->common_model->UpdateDB('blog_post',array('primary_cat_id' => 44), array('is_cat_first' =>0));
			}
			$this->common_model->UpdateDB('blog_post', $where , $data);
		}

		$trending = post('trending');
		if(isset($trending))
		{
			if($category =='medicare')
			{
				$data = array(
					'is_cat_trending' =>1 
				);

				$where = array(
					'id' => $trending
				);

				$this->common_model->UpdateDB('blog_post',array('primary_cat_id' => 41), array('is_cat_trending' => 0));
			}

			if($category =='retirement')
			{
				$data = array(
					'is_cat_trending' =>1
				);

				$where = array(
					'id' => $trending
				);

				$this->common_model->UpdateDB('blog_post',array('primary_cat_id'=>43), array('is_cat_trending' =>0));
			}

			if($category =='healthy')
			{
				$data = array(
					'is_cat_trending' =>1 
				);

				$where = array(
					'id' => $trending
				);

				$this->common_model->UpdateDB('blog_post',array('primary_cat_id' => 44), array('is_cat_trending' =>0));
			}

			$this->common_model->UpdateDB('blog_post', $where , $data);
		}
	}

	function image_uploadls(){

		if(post('image'))
		{
			$folderPath = 'uploads/blog_images/';
			$image_parts = explode(";base64,", $_POST['image']);
			$image_type_aux = explode("image/", $image_parts[0]);
			$image_type = $image_type_aux[1];
			$image_base64 = base64_decode($image_parts[1]);
			$file = $folderPath . time() . '.png';

			file_put_contents($file, $image_base64);

			echo $file;
		}

	}

}

