<?php defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model(array('Ion_auth_model', 'common_model'));
		$this->load->module('front_template');
		$this->setting = $this->common_model->getAllData('blog_settings','*','1'); 
	}

	public function index()
	{
		$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d ');

		$this->setCookiesInLocal();

		$this->load->library('pagination');

		/* Getting per page post for settings table */
		$per_page_posts = $this->common_model->getAllData('blog_settings','per_page_posts,meta_description,	meta_title','1');

		/* count all rows in blog posts table */
		$allpost = $this->common_model->getAllData("blog_post",'','',array('type'=>0,'status'=>1,'deleted_at'=>"Null",'publish_date <='=>$curr_date));
		$total_rows = count($allpost);


		$config = array();
		$config["base_url"] 		= base_url() . "blog";
		$config["per_page"] 		= empty($per_page_posts->per_page_posts) ? 10 : $per_page_posts->per_page_posts;
		$config["total_rows"] 		= $total_rows;
		$config["uri_segment"] 		= 2;
		$choice 					= $config["total_rows"] / $config["per_page"];
		//$config["num_links"] = round($choice)-1;

		$config['full_tag_open']    = "";
		$config['full_tag_close']   ="";
		$config['num_tag_open']     = '';
		$config['num_tag_close']    = '';
		$config['cur_tag_open']     = "<a class='text-decoration-none current rounded-0 pagination-btn-blue open-sans text-white font-weight-light px-2 py-1 align-self-center ml-1' href='#0'>";
		$config['cur_tag_close']    = "</a>";
		$config['next_tag_open']    = "";
		$config['next_tagl_close']  = "";
		$config['prev_tag_open']    = "";
		$config['prev_tagl_close']  = "";
		$config['first_tag_open']   = "";
		$config['first_tagl_close'] = "";
		$config['last_tag_open']    = "";
		$config['last_tagl_close']  = "";
		$config['use_page_numbers'] = TRUE;
		$config['first_link'] = '<<'; 
		$config['last_link'] = '>>';
		$config['attributes'] =array('class' => "text-decoration-none rounded-0 pagination-btn-blue open-sans text-white font-weight-light px-2 py-1 align-self-center ml-1" );

		$this->pagination->initialize($config);
		$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;
		$parPageCount = ($page-1)*$config["per_page"];
		$data["postCount"]				= $total_rows;
		$data['limit'] 					= $config["per_page"];
		$data["posts"] 					= $this->common_model->common_blog($config["per_page"],$parPageCount);
		$data["fetch_posts_blog_first"]	= $this->common_model->fetch_posts_blog_first();
		$data["categorys"] 				= $this->common_model->fetch_categorys();	
		$data["links"] 					= $this->pagination->create_links();
		$data['setting'] 				= $this->setting;
		$ptp = ($page ==1)? '' : 'Page '.$page;
		$data['title'] 					= $per_page_posts->meta_title.$ptp;
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
		$data['social_title'] 			= $per_page_posts->meta_title;
		$data['updateon'] 				= $site_settings->updateon;
		$data['metadata'] 				= $per_page_posts->meta_description;
		$data['medi_post'] 				= $this->common_model->getAllData("blog_post",'','',array('primary_cat_id'=>41,'is_cat_trending'=>1));
		$data['reti_post'] 				= $this->common_model->getAllData("blog_post",'','',array('primary_cat_id'=>43,'is_cat_trending'=>1));
		$data['heal_post'] 				= $this->common_model->getAllData("blog_post",'','',array('primary_cat_id'=>44,'is_cat_trending'=>1));
		$ctp = ($page ==1)? 'blog' : 'blog/'.$page;
		$data['canonical'] 				= base_url().$ctp;
		$data['page'] 					= 'blog/blog';
		$data['showBlogMenu'] 			= true;
		$this->front_template->template_innerView($data);
	}

	public function loadmore(){
		$per_page_posts = $this->common_model->getAllData('blog_settings','per_page_posts,meta_description,	meta_title','1');
		$per_page 		= empty($per_page_posts->per_page_posts) ? 10 : $per_page_posts->per_page_posts;
		$pageNo 		= ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;
		$parPageCount 	= ($pageNo-1)*$per_page;
		$posts 			= $this->common_model->common_blog($per_page,$parPageCount);
		$html = '';
		if(count($posts)>0){
			foreach ($posts as $post){

				$html .='<div class="col-md-6 col-lg-4">';
				$html .='<a href="'.base_url().'blog/'.$post->cat_slug.'/'.$post->slug.'" class="latest-post-subblock custom-link">';
				$html .='<div class="image-block">';
				if($post->thumble_image==''){ 
					$html .='<img src="'.base_url().$post->featured_img.'" class="img-fluid" />';
				}else{ 
					$html .='<img src="'.base_url().$post->thumble_image.'" class="img-fluid" />';
				}
				$html .='</div>';
				$html .='<div class="content-block">';
				$html .='<div class="row">';
				$html .='<div class="col-6">';
				$html .='<h5>'.$post->cat_name.'</h5>';
				$html .='</div>';
				$html .='<div class="col-6">';
				$html .='<h6>'.date("M d, Y", strtotime($post->add_date)).'</h6>';
				$html .='</div>';
				$html .='</div>';
				$html .='<h3>'.$post->title.'</h3>';
				$html .='<p>'.$post->short_description.'</p>';
				$html .='<span class="btn btn-read-more">Read more</span>';
				$html .='</div>';
				$html .='</a>';
				$html .='</div>';
			}
		}
		echo $html;
	}


	public function view_resources()
	{
		$this->setCookiesInLocal();

		$slug = $this->uri->segment(3);
		$catDetails = $this->common_model->getAllData('blog_categories','*','1',array('slug'=>$this->uri->segment(2)));
		if(count((array)$catDetails)==0){
			echo '<script>window.location.href = "'.base_url().'404";</script>';
			exit;
		}
		$rData  = $this->common_model->DJoin('*', 'comment', 'blog_post', 'blog_post.id = comment.post_id', '', '', array('blog_post.slug' => $slug,'blog_post.status' => 1,'blog_post.type' => 0,'blog_post.primary_cat_id' => $catDetails->id));

		$site_settings = $this->common_model->getAllData('site_config','*','1',array('id'=>1));
		$blog_categories = $this->common_model->getAllData('blog_categories','*','1',array('slug='=>$this->uri->segment(2)));
		$data['blog_categories']= $blog_categories;
		$hasSubCat = 0;
		if(count($rData)>0){
			$data['cms_content']= $rData;
			$data['post'] = $this->common_model->DJoin('*,blog_post.id AS post_id','blog_post','users','blog_post.author_id = users.id','1','',array('blog_post.slug' => $slug,'blog_post.status' => 1,'blog_post.type' => 0));
			$data['prev'] = $this->common_model->getAllData('blog_post','*','1',array('id <'=> $data['cms_content'][0]->post_id),'id desc');
			$data['next'] = $this->common_model->getAllData('blog_post','*','1',array('id >'=> $data['cms_content'][0]->post_id));

			$allcat_id = $this->common_model->getAllData('category_map','cat_id','',array('post_id'=>$data['cms_content'][0]->post_id));
			$idArr = array();
			$idArr2 = array();
			if(count($allcat_id)>0){
				foreach($allcat_id As $datas){
					array_push($idArr,$datas->cat_id);
				}
				$allpost_id = $this->common_model->getAllpost($idArr);
				foreach($allpost_id As $datas){
					array_push($idArr2,$datas->post_id);
				}
			}
			$data['related_post'] 			= $this->common_model->getAllRelatedPost($idArr2);
			$data['recommended_post'] 		= $this->common_model->getAllRecommendedPost($idArr2);
			$data['post_by_author'] 		= $this->common_model->getAllPostbyAuthor($data['post']);
			$data['setting'] 				= $this->setting;
			$data['tags'] = $this->common_model->DJoin('*', 'blog_tags', 'blog_post_tags', 'blog_post_tags.tag_id = blog_tags.id', '', '', array('blog_post_tags.post_id' => $data['cms_content'][0]->post_id));
			$data['title'] 					= $data['cms_content'][0]->page_title;
			$data['metadata'] 				= $data['cms_content'][0]->meta_desc;
			$data['canonical'] 				= $data['cms_content'][0]->canonical_tag;
			$data['topics'] 				= $this->common_model->getAllData('blog_categories','*','',array('parent_id'=>$catDetails->id));
			$data['no_index'] 				= $data['cms_content'][0]->no_index;
			$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
			$data['updateon'] 				= $site_settings->updateon;
			$data['social_title'] 			= $data['cms_content'][0]->page_title;
			$data['social_image'] 			= $data['cms_content'][0]->featured_img;
			// counter start
			$cookie_counter = $this->input->cookie('site_counter', TRUE);
			if($data['post']->id != $cookie_counter){
				$pdata = array(
					'counter'  			=> $data['post']->counter+1
				);	
				$this->common_model->UpdateDB('blog_post', array('id' => $data['post']->post_id),$pdata);
				$cookie_counter= array(
					'name'   => 'site_counter',
					'value'  => $data['post']->post_id,
					'expire' => '2592000',
				);
				$this->input->set_cookie($cookie_counter);
			}
			// counter end
			
		}else{
			$subCatDetails = $this->common_model->getAllData('blog_categories','*','1',array('slug'=>$this->uri->segment(3)));
			if($subCatDetails){
				$hasSubCat++;
				$allpost_id = $this->common_model->getAllData('topic_map','post_id','',array('sub_cat_id'=>$subCatDetails->id));

				$data["fetch_first_posts"] 		= $this->common_model->first_category_posts($catDetails->id);
				$idArr = array('0');
				$adedCount =0;
				$total_rows =0;
				if(count($allpost_id)>0){
					foreach($allpost_id As $datas){
						if($data["fetch_first_posts"][0]->id != $datas->post_id){
							array_push($idArr,$datas->post_id);
						}
					}
					$total_rows = $this->db->where(array('status'=>1,'type'=>0))->where_in('id',$idArr)->from("blog_post")->count_all_results();
				}
				$this->load->library('pagination');
				$per_page_posts = $this->common_model->getAllData('blog_settings','per_page_posts,cat_meta_title,cat_meta_desc','1');
				$config = array();
				$config["base_url"] 		= base_url() . "tags/".$catDetails->slug."/".$subCatDetails->slug;
				$config["per_page"] 		= empty($per_page_posts->per_page_posts) ? 0 : $per_page_posts->per_page_posts;
				$config["total_rows"] 		= $total_rows;
				$config["uri_segment"] 		= 4;
				$choice 					= $config["total_rows"] / $config["per_page"];

				$config['full_tag_open']    = "";
				$config['full_tag_close']   ="";
				$config['num_tag_open']     = '';
				$config['num_tag_close']    = '';
				$config['cur_tag_open']     = "<a class='text-decoration-none current rounded-0 pagination-btn-blue open-sans text-white font-weight-light px-2 py-1 align-self-center ml-1' href='#0'>";
				$config['cur_tag_close']    = "</a>";
				$config['next_tag_open']    = "";
				$config['next_tagl_close']  = "";
				$config['prev_tag_open']    = "";
				$config['prev_tagl_close']  = "";
				$config['first_tag_open']   = "";
				$config['first_tagl_close'] = "";
				$config['last_tag_open']    = "";
				$config['last_tagl_close']  = "";
				$config['use_page_numbers'] = TRUE;
				$config['first_link'] = '<<'; 
				$config['last_link'] = '>>';
				$config['attributes'] =array('class' => "text-decoration-none rounded-0 pagination-btn-blue open-sans text-white font-weight-light px-2 py-1 align-self-center ml-1" );

				$this->pagination->initialize($config);
				$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;
				$data["cate"] 					= $subCatDetails;
				$parPageCount 					= ($page-1)*$config["per_page"];
				$data["posts"] 					= $this->common_model->fetch_sub_categorywise_posts($config["per_page"],$parPageCount,$idArr); 
				$data["categorys"] 				= $this->common_model->fetch_categorys();	
				$data["links"] 					= $this->pagination->create_links();
				$data['setting'] 				= $this->setting;
				$data['title'] 					= $per_page_posts->cat_meta_title;
				$site_settings 					= $this->common_model->getAllData('site_config','*',array('id'=>1));
				$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
				$data['updateon'] 				= $site_settings->updateon;
				$data['social_title'] 			= $per_page_posts->cat_meta_title;
				$data['metadata'] 				= $per_page_posts->cat_meta_desc;
				$data['canonical'] 				= base_url() . "tags/".$catDetails->slug."/".$subCatDetails->slug;
				//pr($data);
				//exit;
			}else{				
				$data['cms_content']  = $this->common_model->DJoin('*', 'comment', 'blog_post', 'blog_post.id = comment.post_id', '', '', array('blog_post.id' => 117,'blog_post.status' => 1)); //117 is 404 page id
				$data['title'] 				= $data['cms_content'][0]->page_title;
				$data['metadata'] 			= $data['cms_content'][0]->meta_desc;
				$data['canonical'] 			= $data['cms_content'][0]->canonical_tag;
				$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
				$data['updateon'] 				= $site_settings->updateon;
				$data['social_title'] 			= $data['cms_content'][0]->page_title;
				$data['social_image'] 			= $data['cms_content'][0]->featured_img;
			}
		}
		// pr($data['blog_categories']);
		// exit;
		if($hasSubCat>0){
			$data['page'] = 'blog/sub_category_page';
		}else{
			if($data['cms_content'][0]->view_type ==1){
				$data['page'] = 'blog/full_width_page';
			}elseif($data['cms_content'][0]->view_type ==2){
				$data['page'] = 'blog/sidebar_page';
			}else{
				$data['page'] = 'blog/inner_page';
			}
		}
		$this->front_template->template_innerView($data);
	}


	public function tags_()
	{		
		$this->setCookiesInLocal();

		$tag_slug = $this->uri->segment(3);
		$tag = $this->common_model->getAllData('blog_tags','*','1',array('slug'=> $tag_slug));
		if(count((array)$tag)==0){
			echo '<script>window.location.href = "'.base_url().'404";</script>';
			exit;
		}
		$allpost_id = $this->common_model->getAllData('blog_post_tags','post_id','',array('tag_id'=>$tag->id));
		$idArr = array();
		foreach($allpost_id As $datas){
			array_push($idArr,$datas->post_id);
		}

		$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d ');
		$this->load->library('pagination');
		$per_page_posts = $this->common_model->getAllData('blog_settings','per_page_posts,tag_meta_title,tag_meta_desc','1');
		$total_rows =$this->db->where(array('status'=>1,'type'=>0,'publish_date <='=>$curr_date))->where_in('id',$idArr)->from("blog_post")->count_all_results();

		$config = array();
		$config["base_url"] 		= base_url() . "blog/tags/".$tag_slug;
		$config["per_page"] 		= empty($per_page_posts->per_page_posts) ? 8 : $per_page_posts->per_page_posts;
		$config["total_rows"] 		= $total_rows-$config["per_page"];
		$config["uri_segment"] 		= 4;
		$choice 					= $config["total_rows"] / $config["per_page"];
		//$config["num_links"] = round($choice);

		$config['full_tag_open']    = "";
		$config['full_tag_close']   ="";
		$config['num_tag_open']     = '';
		$config['num_tag_close']    = '';
		$config['cur_tag_open']     = "<a class='text-decoration-none current rounded-0 pagination-btn-blue open-sans text-white font-weight-light px-2 py-1 align-self-center ml-1' href='#0'>";
		$config['cur_tag_close']    = "</a>";
		$config['next_tag_open']    = "";
		$config['next_tagl_close']  = "";
		$config['prev_tag_open']    = "";
		$config['prev_tagl_close']  = "";
		$config['first_tag_open']   = "";
		$config['first_tagl_close'] = "";
		$config['last_tag_open']    = "";
		$config['last_tagl_close']  = "";
		$config['use_page_numbers'] = TRUE;
		$config['first_link'] = '<<'; 
		$config['last_link'] = '>>';
		$config['attributes'] =array('class' => "text-decoration-none rounded-0 pagination-btn-blue open-sans text-white font-weight-light px-2 py-1 align-self-center ml-1" );


		$this->pagination->initialize($config);
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;
		$data["tag"] 					= $tag;
		$parPageCount 					= ($page-1)*$config["per_page"];
		$data["posts"] 					= $this->common_model->fetch_posts($config["per_page"], $parPageCount,$idArr);
		$data["categorys"] 				= $this->common_model->fetch_categorys();	
		$data["links"] 					= $this->pagination->create_links();
		$data['setting'] 				= $this->setting;
		$data['title'] 					= $per_page_posts->tag_meta_title;
		$site_settings 					= $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
		$data['updateon'] 				= $site_settings->updateon;
		$data['social_title'] 			= $per_page_posts->tag_meta_title;
		$data['metadata'] 				= $per_page_posts->tag_meta_desc;
		$data['canonical'] 				= base_url() . "blog/tags/".$tag_slug;

		$data['page'] = 'blog/blog';
		$this->front_template->template_innerView($data);
	}

	public function categories()
	{
		$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d ');

		$this->setCookiesInLocal();

		$category_slug = $this->uri->segment(2);
		$cat = $this->common_model->getAllData('blog_categories','*','1',array('slug'=> $category_slug));
		if(count((array)$cat)==0){
			echo '<script>window.location.href = "'.base_url().'404";</script>';
			exit;
		}
		$allpost_id = $this->common_model->getAllData('category_map','post_id','',array('cat_id'=>$cat->id));

		$data["fetch_first_posts"] 		= $this->common_model->first_category_posts($cat->id);
		$idArr = array();
		$adedCount =0;
		if(count($allpost_id)>0){
			foreach($allpost_id As $datas){
				if($data["fetch_first_posts"][0]->id != $datas->post_id){
					array_push($idArr,$datas->post_id);
				}
			}
			$adedCount = $this->db->where(array('status'=>1,'type'=>0,'deleted_at'=>"Null",'is_cat_first'=>0,'publish_date <='=>$curr_date))->where_in('id',$idArr)->from("blog_post")->count_all_results();
		}
		$this->load->library('pagination');
		$per_page_posts = $this->common_model->getAllData('blog_settings','per_page_posts,cat_meta_title,cat_meta_desc','1');
		$total_rows =( $adedCount + $this->db->where(array('status'=>1,'type'=>0,'deleted_at'=>"Null",'is_cat_first'=>0,'publish_date <='=>$curr_date))->where('primary_cat_id',$cat->id)->where_not_in('id', $idArr)->from("blog_post")->count_all_results());


		$config = array();
		$config["base_url"] 		= base_url() . "blog/".$category_slug;
		$config["per_page"] 		= empty($per_page_posts->per_page_posts) ? 0 : $per_page_posts->per_page_posts;
		$config["total_rows"] 		= $total_rows;
		$config["uri_segment"] 		= 3;
		$choice 					= $config["total_rows"] / $config["per_page"];

		$config['full_tag_open']    = "";
		$config['full_tag_close']   ="";
		$config['num_tag_open']     = '';
		$config['num_tag_close']    = '';
		$config['cur_tag_open']     = "<a class='text-decoration-none current rounded-0 pagination-btn-blue open-sans text-white font-weight-light px-2 py-1 align-self-center ml-1' href='#0'>";
		$config['cur_tag_close']    = "</a>";
		$config['next_tag_open']    = "";
		$config['next_tagl_close']  = "";
		$config['prev_tag_open']    = "";
		$config['prev_tagl_close']  = "";
		$config['first_tag_open']   = "";
		$config['first_tagl_close'] = "";
		$config['last_tag_open']    = "";
		$config['last_tagl_close']  = "";
		$config['use_page_numbers'] = TRUE;
		$config['first_link'] = '<<'; 
		$config['last_link'] = '>>';
		$config['attributes'] =array('class' => "text-decoration-none rounded-0 pagination-btn-blue open-sans text-white font-weight-light px-2 py-1 align-self-center ml-1" );

		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
		$data["cate"] 					= $cat;
		$parPageCount 					= ($page-1)*$config["per_page"];
		$data["posts"] 					= $this->common_model->fetch_categorywise_posts($config["per_page"],$parPageCount,$cat->id,$idArr);
	/*	echo '<pre>';
		print_r($data["posts"]);
		echo '</pre>';*/
		$data["categorys"] 				= $this->common_model->fetch_categorys();	
		$data["links"] 					= $this->pagination->create_links();
		$data['setting'] 				= $this->setting;
		$data['title'] 					= $cat->cat_name.' blog page '.$page;
		$site_settings 					= $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
		$data['updateon'] 				= $site_settings->updateon;
		$data['social_title'] 			= $cat->cat_name.' blog page '.$page;
		$data['metadata'] 				= $cat->meta_description;//$per_page_posts->cat_meta_desc;
		$data['canonical'] 				= base_url() . "blog/".$category_slug;

		//pr($data["fetch_first_posts"]);
		//exit;
		$data['page'] = 'blog/blog_category';
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
			if(isset($temp1)&&isset($refid)){
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

