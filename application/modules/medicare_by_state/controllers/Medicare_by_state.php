<?php defined('BASEPATH') or exit('No direct script access allowed');

class Medicare_by_state extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model(array('Ion_auth_model', 'common_model'));
		$this->load->module('front_template');
		// $this->setting = $this->common_model->getAllData('blog_settings','*','1');
	}

	public function index()
	{
		$this->setCookiesInLocal();

		$data['cms_content']  			= $this->common_model->DJoin('*', 'comment', 'blog_post', 'blog_post.id = comment.post_id', '', '', array('blog_post.id' => 139,'blog_post.status' => 1)); 
		$data['title'] 					= $data['cms_content'][0]->page_title;
		$data['metadata'] 				= $data['cms_content'][0]->meta_desc;
		$data['canonical'] 				= $data['cms_content'][0]->canonical_tag;

		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
		$data['updateon'] 				= $site_settings->updateon;
		$data['social_title'] 			= $data['cms_content'][0]->page_title;
		$data['all_state'] 				= '';
		$data['page'] 					= 'medicare_by_state/sidebar_page';
		$this->front_template->template_innerView($data);
	}

	public function view_state()
	{
		$this->setCookiesInLocal();

		$slug				= $this->uri->segment(2);
		$rData  			= $this->common_model->DJoin('*', 'comment', 'blog_post', 'blog_post.id = comment.post_id', '', '', array('blog_post.slug' => $slug,'blog_post.status' => 1,'blog_post.type' => 1,'blog_post.state_filter' => '0'));
		$site_settings 		= $this->common_model->getAllData('site_config','*',array('id'=>1));

		$data['all_state'] 		= $this->uri->segment(1);
		if(count($rData)>0){
			$data['cms_content']			= $rData;
			$data['title'] 					= $data['cms_content'][0]->page_title;
			$data['metadata'] 				= $data['cms_content'][0]->meta_desc;
			$data['canonical'] 				= $data['cms_content'][0]->canonical_tag;
			$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
			$data['updateon'] 				= $site_settings->updateon;
			$data['social_title'] 			= $data['cms_content'][0]->page_title;
		}else{
			$data['cms_content']  = $this->common_model->DJoin('*', 'comment', 'blog_post', 'blog_post.id = comment.post_id', '', '', array('blog_post.id' => 117,'blog_post.status' => 1)); //117 is 404 page id
			$data['title'] 					= $data['cms_content'][0]->page_title;
			$data['metadata'] 				= $data['cms_content'][0]->meta_desc;
			$data['canonical'] 				= $data['cms_content'][0]->canonical_tag;
			$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
			$data['updateon'] 				= $site_settings->updateon;
			$data['social_title'] 			= $data['cms_content'][0]->page_title;
		}
		//pr($data['cms_content']);
		//exit;
		if($data['cms_content'][0]->view_type ==1){
			$data['page'] = 'medicare_by_state/full_width_page';
		}elseif($data['cms_content'][0]->view_type ==2){
			$data['page'] = 'medicare_by_state/sidebar_page';
		}else{
			$data['page'] = 'medicare_by_state/sidebar_page';
		}
		$this->front_template->template_innerView($data);
	}

	public function medicare_advantage_by_state()
	{
		$this->setCookiesInLocal();

		$slug = $this->uri->segment(2);
		$rData  = $this->common_model->DJoin('*', 'comment', 'blog_post', 'blog_post.id = comment.post_id', '', '', array('blog_post.slug' => $slug,'blog_post.status' => 1,'blog_post.type' => 1,'blog_post.state_filter' => '1'));
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		
		$data['all_state'] 		= $this->uri->segment(1);
		if(count($rData)>0){
			$data['cms_content']			= $rData;
			$data['title'] 					= $data['cms_content'][0]->page_title;
			$data['metadata'] 				= $data['cms_content'][0]->meta_desc;
			$data['canonical'] 				= $data['cms_content'][0]->canonical_tag;
			$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
			$data['updateon'] 				= $site_settings->updateon;
			$data['social_title'] 			= $data['cms_content'][0]->page_title;
		}else{
			$data['cms_content']  = $this->common_model->DJoin('*', 'comment', 'blog_post', 'blog_post.id = comment.post_id', '', '', array('blog_post.id' => 117,'blog_post.status' => 1)); //117 is 404 page id
			$data['title'] 					= $data['cms_content'][0]->page_title;
			$data['metadata'] 				= $data['cms_content'][0]->meta_desc;
			$data['canonical'] 				= $data['cms_content'][0]->canonical_tag;
			$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
			$data['updateon'] 				= $site_settings->updateon;
			$data['social_title'] 			= $data['cms_content'][0]->page_title;
		}
		// pr($data['cms_content']);
		// exit;
		if($data['cms_content'][0]->view_type ==1){
			$data['page'] = 'medicare_by_state/full_width_page';
		}elseif($data['cms_content'][0]->view_type ==2){
			$data['page'] = 'medicare_by_state/sidebar_page';
		}else{
			$data['page'] = 'medicare_by_state/inner_page';
		}
		$this->front_template->template_innerView($data);
	}

	public function medicare_supplement_by_state()
	{
		$this->setCookiesInLocal();

		$slug = $this->uri->segment(2);
		$rData  = $this->common_model->DJoin('*', 'comment', 'blog_post', 'blog_post.id = comment.post_id', '', '', array('blog_post.slug' => $slug,'blog_post.status' => 1,'blog_post.type' => 1,'blog_post.state_filter' => '2'));
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		
		$data['all_state'] 		= $this->uri->segment(1);
		if(count($rData)>0){
			$data['cms_content']			= $rData;
			$data['title'] 					= $data['cms_content'][0]->page_title;
			$data['metadata'] 				= $data['cms_content'][0]->meta_desc;
			$data['canonical'] 				= $data['cms_content'][0]->canonical_tag;
			$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
			$data['updateon'] 				= $site_settings->updateon;
			$data['social_title'] 			= $data['cms_content'][0]->page_title;
		}else{
			$data['cms_content']  = $this->common_model->DJoin('*', 'comment', 'blog_post', 'blog_post.id = comment.post_id', '', '', array('blog_post.id' => 117,'blog_post.status' => 1)); //117 is 404 page id
			$data['title'] 					= $data['cms_content'][0]->page_title;
			$data['metadata'] 				= $data['cms_content'][0]->meta_desc;
			$data['canonical'] 				= $data['cms_content'][0]->canonical_tag;
			$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
			$data['updateon'] 				= $site_settings->updateon;
			$data['social_title'] 			= $data['cms_content'][0]->page_title;
		}
		// pr($data['cms_content']);
		// exit;
		if($data['cms_content'][0]->view_type ==1){
			$data['page'] = 'medicare_by_state/full_width_page';
		}elseif($data['cms_content'][0]->view_type ==2){
			$data['page'] = 'medicare_by_state/sidebar_page';
		}else{
			$data['page'] = 'medicare_by_state/inner_page';
		}
		$this->front_template->template_innerView($data);
	}

	public function medicare_part_d_by_state()
	{
		$this->setCookiesInLocal();

		$slug = $this->uri->segment(2);
		$rData  = $this->common_model->DJoin('*', 'comment', 'blog_post', 'blog_post.id = comment.post_id', '', '', array('blog_post.slug' => $slug,'blog_post.status' => 1,'blog_post.type' => 1,'blog_post.state_filter' => '3'));
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		
		$data['all_state'] 		= $this->uri->segment(1);
		if(count($rData)>0){
			$data['cms_content']			= $rData;
			$data['title'] 					= $data['cms_content'][0]->page_title;
			$data['metadata'] 				= $data['cms_content'][0]->meta_desc;
			$data['canonical'] 				= $data['cms_content'][0]->canonical_tag;
			$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
			$data['updateon'] 				= $site_settings->updateon;
			$data['social_title'] 			= $data['cms_content'][0]->page_title;
		}else{
			$data['cms_content']  = $this->common_model->DJoin('*', 'comment', 'blog_post', 'blog_post.id = comment.post_id', '', '', array('blog_post.id' => 117,'blog_post.status' => 1)); //117 is 404 page id
			$data['title'] 					= $data['cms_content'][0]->page_title;
			$data['metadata'] 				= $data['cms_content'][0]->meta_desc;
			$data['canonical'] 				= $data['cms_content'][0]->canonical_tag;
			$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
			$data['updateon'] 				= $site_settings->updateon;
			$data['social_title'] 			= $data['cms_content'][0]->page_title;
		}
		// pr($data['cms_content']);
		// exit;
		if($data['cms_content'][0]->view_type ==1){
			$data['page'] = 'medicare_by_state/full_width_page';
		}elseif($data['cms_content'][0]->view_type ==2){
			$data['page'] = 'medicare_by_state/sidebar_page';
		}else{
			$data['page'] = 'medicare_by_state/inner_page';
		}
		$this->front_template->template_innerView($data);
	}

	public function setCookiesInLocal()
	{
		$flag = $this->input->get('flag');
		$temp1 = $this->input->get('temp1');
		$refid = $this->input->get('refid');
		$subid = $this->input->get('subid');
		$gclid = $this->input->get('gclid');
		if(!isset($flag)){
			$phone = array();
			if(isset($temp1)){
				$phone = $this->common_model->getAllData('phone','refIdPhone','',array('leadSource'=> $temp1,'refId'=>''));
			}elseif ($this->input->cookie('temp1', TRUE)){
				$phone = $this->common_model->getAllData('phone','refIdPhone','',array('leadSource'=> $this->input->cookie('temp1', TRUE),'refId'=>''));
			}
			if(isset($temp1) && isset($refid)){
				$phone = $this->common_model->getAllData('phone','refIdPhone','',array('leadSource'=> $temp1,'refId'=>$refid));
				if(count($phone)==0){
					$phone = $this->common_model->getAllData('phone','refIdPhone','',array('leadSource'=> $temp1,'refId'=>''));
				}
			}elseif ($this->input->cookie('temp1', TRUE) && $this->input->cookie('refid', TRUE)){
				$phone = $this->common_model->getAllData('phone','refIdPhone','',array('leadSource'=> $this->input->cookie('temp1', TRUE),'refId'=>$this->input->cookie('refid', TRUE)));
				if(count($phone)==0){
					$phone = $this->common_model->getAllData('phone','refIdPhone','',array('leadSource'=> $this->input->cookie('temp1', TRUE),'refId'=>''));
				}
			}

			if(count($phone)>0){
				$cookie_refid= array(
					'name'   => 'site_phone',
					'value'  => $phone[0]->refIdPhone,
					'expire' => '2592000',
				);
				$this->input->set_cookie($cookie_refid);
			}else{
				delete_cookie('site_phone');
			}
			/*else{
			echo $this->input->cookie('site_phone', TRUE);
			$cookie_refid= array(
				'name'   => 'site_phone',
				'value'  => '1-800-637-7602',
				'expire' => '2592000',
			);
			$this->input->set_cookie($cookie_refid);
		}
		*/

			if(isset($temp1)){
				$cookie_temp1= array(
					'name'   => 'temp1',
					'value'  => $temp1,
					'expire' => '2592000',
				);
				$this->input->set_cookie($cookie_temp1);
			}
			if(isset($refid)){
				$cookie_refid= array(
					'name'   => 'refid',
					'value'  => $refid,
					'expire' => '2592000',
				);
				$this->input->set_cookie($cookie_refid);
			}else{
				// delete_cookie('refid');
			}
			if(isset($subid)){
				$cookie_subid= array(
					'name'   => 'subid',
					'value'  => $subid,
					'expire' => '2592000',
				);
				$this->input->set_cookie($cookie_subid);
			}
			if(isset($gclid)){
				$cookie_gclid= array(
					'name'   => 'gclickid',
					'value'  => $gclid,
					'expire' => '2592000',
				);
				$this->input->set_cookie($cookie_gclid);
			}			

			if(isset($_GET['temp1']) || (isset($_GET['temp1']) && isset($_GET['refid']) ))
			{
				$this->load->helper('url');
				$page_url=current_url();
				$query_string = $_SERVER['QUERY_STRING'].'&flag=true';
				echo '<script>window.location.href = "'.$page_url.'?'.$query_string.'";</script>';
				exit;
			}
		}
		/********* Back start *********/
		$backFlag 		= $this->input->get('backFlag');
	    $back 			= $this->input->get('back');

		if(isset($back) ==1 && !isset($backFlag)){
			$cookie_back= array(
				'name'   => 'back',
				'value'  => true,
				'expire' => '2592000',
			);
			$this->input->set_cookie($cookie_back);
			
			$this->load->helper('url');
			$page_url=current_url();
			$query_string = $_SERVER['QUERY_STRING'].'&backFlag';
			echo '<script>window.location.href = "'.$page_url.'?'.$query_string.'";</script>';
			exit;
		}
		/********* Back end *********/
	}

}

