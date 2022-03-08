<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogSettings extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->module('template'); 
		$this->load->model('common_model'); 
		$this->load->library('form_validation'); 

		if (!$this->ion_auth->logged_in()):
		redirect('bcakoffice', 'refresh');
		endif;

	}

	public function index($value='')
	{
		$data['settings'] = $this->common_model->getAllData('blog_settings','*','1');
		// pr($data);die;
		$data['page'] = "blogs/blog_settings";
		$this->template->template_view($data);
	}

	public function download(){
		$this->download_send_headers("search_log_" . date("Y-m-d") . ".csv");
		$values = $this->common_model->getAllData('search_log','*');
		$array=array();
		foreach ($values as $row) {
			$local_array=array();
			$local_array['Search Text'] = $row->search_text;
			$local_array['IP Address'] = $row->ip;
			$local_array['Search Date'] = $row->date;
			array_push($array,$local_array);
		}
		echo $this->array2csv($array);
		die();
	}

	function array2csv(array &$array)
	{
		if (count($array) == 0) {
			return null;
		}
		ob_start();
		$df = fopen("php://output", 'w');
		fputcsv($df, array_keys(reset($array)));
		foreach ($array as $row) {
			fputcsv($df, $row);
		}
		fclose($df);
		return ob_get_clean();
	}

	function download_send_headers($filename) {
		// disable caching
		$now = gmdate("D, d M Y H:i:s");
		header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
		header("Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate");
		header("Last-Modified: {$now} GMT");

		// force download  
		header("Content-Type: application/force-download");
		header("Content-Type: application/octet-stream");
		header("Content-Type: application/download");

		// disposition / encoding on response body
		header("Content-Disposition: attachment;filename={$filename}");
		header("Content-Transfer-Encoding: binary");
	}




	public function blog_settings()
	{
		$this->form_validation->set_rules('comments', 'comments','trim|required');
		$this->form_validation->set_rules('meta_title', 'meta title','trim|required');
		$this->form_validation->set_rules('meta_desc', 'meta desc','trim|required');
		$this->form_validation->set_rules('post_per_page', 'post per page','trim|required');
		$this->form_validation->set_rules('category_posts', 'related posts','trim|required');
		$this->form_validation->set_rules('twitter', 'twitter','trim|required|prep_url');
		$this->form_validation->set_rules('linkedin', 'linkedin','trim|required|prep_url');
		$this->form_validation->set_rules('twitter', 'Twitter','trim|required|prep_url');
		$this->form_validation->set_rules('cat_meta_title', 'category meta title','trim|required');
		$this->form_validation->set_rules('cat_meta_desc', 'category meta desc','trim|required');
		$this->form_validation->set_rules('tag_meta_title', 'tag meta title','trim|required');
		$this->form_validation->set_rules('tag_meta_desc', 'tag meta desc','trim|required');

		if ($this->form_validation->run() == FALSE) 
		{
			$this->index();
		} 
		else
		{
			if ($_FILES['img']['name'] != "") 
			{
				$config['upload_path']          = './uploads/';
				$config['allowed_types']        = 'gif|jpg|png';


				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('img'))
				{
					$error = array('error' => $this->upload->display_errors());

					$msg = $error['error'];
					$this->session->set_flashdata('error',$msg);
					redirect('blogs/blog_settings','refresh');
				}
				else
				{
					$data = array('upload_data' => $this->upload->data());
					$image = base_url().'uploads/'.$data['upload_data']['file_name'];
				}
			}
			else
			{
				$image = post('update_img');
			}
			$data = array(
				'enable_comments'      => post('comments'), 
				'meta_description' 	   => post('meta_desc'),
				'meta_title' 	   	   => post('meta_title'), 
				'per_page_posts' 	   => post('post_per_page'), 
				'default_img' 		   => $image, 
				'enable_category_posts'=> post('category_posts'), 
				'twitter' 			   => post('twitter'), 
				'Linkedin' 			   => post('linkedin'), 
				'facebook' 			   => post('facebook'), 
				'cat_meta_desc' 	   => post('cat_meta_desc'),
				'cat_meta_title' 	   => post('cat_meta_title'),
				'tag_meta_desc' 	   => post('tag_meta_desc'),
				'tag_meta_title' 	   => post('tag_meta_title'),
			);

			$result = $this->common_model->UpdateDB('blog_settings',array('id' => 1),$data);

			if ($result) 
			{
				set_flashdata('success','Settings Updated');
				redirect('blogs/BlogSettings','refresh');
			}
			else
			{
				set_flashdata('error','Database Error');
				redirect('blogs/BlogSettings','refresh');
			}	
		}
	}	
}	
