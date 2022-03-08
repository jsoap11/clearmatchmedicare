<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods:POST, GET, OPTIONS");
		$this->load->model(array('Ion_auth_model', 'common_model'));
		$this->load->module('front_template');
		// $this->setting = $this->common_model->getAllData('blog_settings','*','1');
	}
	public function search()
	{
		$content_settings 				= $this->common_model->getAllData('content_settings','meta_desc,meta_title','1');
		$data['metadata'] 				= $content_settings->meta_desc;
		$data['title'] 					= $content_settings->meta_title;
		$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
		$data['updateon'] 				= $site_settings->updateon;
		$data['txt_search'] 			= $this->input->post('txt_search');
		if(trim($data['txt_search']) ==''){
			$data["posts_search"] 			=array();
		}else{
			$data["posts_search"] 			= $this->common_model->common_blog(10,0,$data['txt_search']);
		}
		$data['canonical'] 				= base_url() .'result';
		$data['page'] 					= 'home/search';
		$data['social_title'] 			= $content_settings->meta_title;
		$data["postCount"]				= $this->common_model->common_blog_count($data['txt_search']);

		$date = new DateTime("now");
		$curr_date = $date->format('Y-m-d ');
		$allpost = $this->common_model->getAllData("blog_post",'','',array('type'=>0,'status'=>1,'deleted_at'=>"Null",'publish_date <='=>$curr_date));
		$data["lposts"] 				= $this->common_model->common_blogs(3,0);
		$data["lpostCount"]				= count($allpost);
		//search log start
		$search_data = array(
			'search_text'   => $data['txt_search'],
			'ip'           	=> $this->get_client_ip(),
			'date'   	  	=> date("Y-m-d H:i:s")
		);
		$this->common_model->InsertData('search_log', $search_data);
		//search log end
		$this->front_template->template_innerView($data);

	}
	function get_client_ip() {
		$ipaddress = '';
		if (getenv('HTTP_CLIENT_IP'))
			$ipaddress = getenv('HTTP_CLIENT_IP');
		else if(getenv('HTTP_X_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		else if(getenv('HTTP_X_FORWARDED'))
			$ipaddress = getenv('HTTP_X_FORWARDED');
		else if(getenv('HTTP_FORWARDED_FOR'))
			$ipaddress = getenv('HTTP_FORWARDED_FOR');
		else if(getenv('HTTP_FORWARDED'))
			$ipaddress = getenv('HTTP_FORWARDED');
		else if(getenv('REMOTE_ADDR'))
			$ipaddress = getenv('REMOTE_ADDR');
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	}

	public function index()
	{
		$this->setCookiesInLocal();
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] 					= $site_settings->site_meta_desc;
		$data['title'] 						= $site_settings->site_name;
		$data['terms_and_conditions'] 		= $site_settings->common_terms_and_conditions;
		$data['updateon'] 					= $site_settings->updateon;
		$data['social_title'] 				= $site_settings->site_name;
		$data['canonical'] 					= base_url();
		$data['page'] 						= 'home/home';
		$this->front_template->template_homeView($data);
	}

	public function info_guide()
	{
		$content_settings 				= $this->common_model->getAllData('content_settings','meta_desc,meta_title','1');
		$data['metadata'] 				= $content_settings->meta_desc;
		$data['title'] 					= $content_settings->meta_title;
		$data['canonical'] 				= base_url() .'info_guide';
		$data['page'] 					= 'home/info_guide';
		$this->front_template->template_blankView($data);

	}
	public function medicare_carriers()
	{
		$this->setCookiesInLocal();
		$slug = $this->uri->segment(2);
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$rData  = $this->common_model->DJoin('*', 'comment', 'blog_post', 'blog_post.id = comment.post_id', '', '', array('blog_post.slug' => $slug,'blog_post.status' => 1,'blog_post.type' => 3));
		$cms_404 = false;
		$data['mcslug'] 					= 1;
		if(count($rData)>0){
			$data['cms_content']			= $rData;
			$data['title'] 					= $rData[0]->page_title;
			$data['metadata'] 				= $rData[0]->meta_desc;
			$data['canonical'] 				= $rData[0]->canonical_tag;
			$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
			$data['updateon'] 				= $site_settings->updateon;
			$data['social_title'] 			= $rData[0]->page_title;
		}else{
			$data['cms_content']  = $this->common_model->DJoin('*', 'comment', 'blog_post', 'blog_post.id = comment.post_id', '', '', array('blog_post.id' => 117,'blog_post.status' => 1)); //117 is 404 page id
			$data['title'] 					= $data['cms_content'][0]->page_title;
			$data['metadata'] 				= $data['cms_content'][0]->meta_desc;
			$data['canonical'] 				= $data['cms_content'][0]->canonical_tag;			
			$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
			$data['updateon'] 				= $site_settings->updateon;
			$data['social_title'] 			= $data['cms_content'][0]->page_title;
			$cms_404 =true;
		}
		// pr($data['cms_content']);
		// exit;
		if($data['cms_content'][0]->view_type ==1){
			$data['page'] = 'home/full_width_page';
		}elseif($data['cms_content'][0]->view_type ==2){
			if($slug =='new-to-medicare'
			   || $slug =='medicare-advantage'
			   || $slug =='medicare-part-d'
			   || $slug =='medicare-glossary'
			   || $slug =='medicare-supplement'){

				$data['allState'] =array();
				if($slug =="medicare-advantage"){
					$cSlg=1;
				}elseif($slug =="medicare-supplement"){
					$cSlg=2;
				}elseif($slug =="medicare-part-d"){
					$cSlg=3;
				}
				if($cSlg){
					$data['allState'] = $this->common_model->getAllData('blog_post','*','',array('status'=>1,'type'=>1),'','','',array('state_filter' => $cSlg));
					$data['stateSlug'] =$slug;
				}
				//pr($data['allState']);
				$data['page'] = 'home/non_bread_sidebar_page';
			}else{
				$data['page'] = 'home/sidebar_page';
			}
		}else{
			$data['page'] = 'home/inner_page';
		}

		if($cms_404 == true){
			$data['page'] = 'home/404_page';
		}
		$this->front_template->template_innerView($data);
	}
	public function inner_page()
	{
		$this->setCookiesInLocal();
		$slug = $this->uri->segment(1);
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$cms_404 =false;
		$data['mcslug'] 					= 0;
		if($slug == 'find-a-plan'){
			$cookArrIn = $_COOKIE['arrIndex'];
			if(isset($cookArrIn)){
				$arrIndex =  $cookArrIn;
			}else{
				$arrIndex =1;// rand (0,1);
				$cookie_arrIndex= array(
					'name'   => 'arrIndex',
					'value'  =>  $arrIndex,
					'expire' => '2592000',
				);
				$this->input->set_cookie($cookie_arrIndex);
			}
			$fp = array();
			$fp[0][0] = "Are Your Doctors In Network?";
			$fp[0][1] = "Before you search for a new plan, enter your doctors' names and locations to make sure they are part of the plan's network.";
			$fp[0][2] = 0;

			$fp[1][0] = "Get a Detailed Estimate";
			$fp[1][1] = "Listing the medications you take will help us give the most accurate estimate of your costs under the plans.";
			$fp[1][2] = 1;

			$content_settings 				= $this->common_model->getAllData('content_settings','meta_desc,meta_title','1');
			$data['metadata'] 				= $content_settings->meta_desc;
			$data['title'] 					= $content_settings->meta_title;
			$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
			$data['updateon'] 				= $site_settings->updateon;
			$data['popup_title'] 			= $fp[$arrIndex][0];
			$data['popup_subtitle'] 		= $fp[$arrIndex][1];
			$data['popup_button'] 			= $fp[$arrIndex][2];
			$data['canonical'] 				= base_url() .'find-a-plan';
			$data['page'] 					= 'home/find_a_plan';
			$data['social_title'] 			= $content_settings->meta_title;
		}else if($slug == 'resources'){
			$content_settings 				= $this->common_model->getAllData('content_settings','meta_desc,meta_title','1');
			$data['videos'] 				= $this->common_model->getAllData('video','*','',array('is_active'=>1));
			$data['metadata'] 				= $content_settings->meta_desc;
			$data['title'] 					= $content_settings->meta_title;
			$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
			$data['updateon'] 				= $site_settings->updateon;
			$data['canonical'] 				= base_url() .'resources';
			$data['page'] 					= 'home/resources';
			$data['social_title'] 			= $content_settings->meta_title;
			/*	}else if($slug == 'info-guide'){
			$content_settings 				= $this->common_model->getAllData('content_settings','meta_desc,meta_title','1');
			$data['metadata'] 				= $content_settings->meta_desc;
			$data['title'] 					= $content_settings->meta_title;
			$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
			$data['updateon'] 				= $site_settings->updateon;
			$data['canonical'] 				= base_url() .'info-guide';
			$data['page'] 					= 'home/info_guide';
			$data['social_title'] 			= $content_settings->meta_title;*/
		}
		else
		{
			$rData  = $this->common_model->DJoin('*', 'comment', 'blog_post', 'blog_post.id = comment.post_id', '', '', array('blog_post.slug' => $slug,'blog_post.status' => 1,'blog_post.type' => 2));
			if(count($rData)>0){
				$data['cms_content']			= $rData;
				$data['title'] 					= $rData[0]->page_title;
				$data['metadata'] 				= $rData[0]->meta_desc;
				$data['canonical'] 				= $rData[0]->canonical_tag;			
				$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
				$data['updateon'] 				= $site_settings->updateon;
				$data['social_title'] 			= $rData[0]->page_title;
			}else{
				$data['cms_content']  = $this->common_model->DJoin('*', 'comment', 'blog_post', 'blog_post.id = comment.post_id', '', '', array('blog_post.id' => 117,'blog_post.status' => 1)); //117 is 404 page id
				$data['title'] 					= $data['cms_content'][0]->page_title;
				$data['metadata'] 				= $data['cms_content'][0]->meta_desc;
				$data['canonical'] 				= $data['cms_content'][0]->canonical_tag;			
				$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
				$data['updateon'] 				= $site_settings->updateon;
				$data['social_title'] 			= $data['cms_content'][0]->page_title;
				$cms_404 =true;
			}
			// pr($data['cms_content']);
			// exit;
			if($data['cms_content'][0]->view_type ==1){
				$data['page'] = 'home/full_width_page';
			}elseif($data['cms_content'][0]->view_type ==2){
				if($slug =='new-to-medicare'
				   || $slug =='medicare-advantage'
				   || $slug =='medicare-part-d'
				   || $slug =='medicare-glossary'
				   || $slug =='medicare-supplement'){

					$data['allState'] =array();
					if($slug =="medicare-advantage"){
						$cSlg=1;
					}elseif($slug =="medicare-supplement"){
						$cSlg=2;
					}elseif($slug =="medicare-part-d"){
						$cSlg=3;
					}
					if(isset($cSlg)){
						$data['allState'] = $this->common_model->getAllData('blog_post','*','',array('status'=>1,'type'=>1),'','','',array('state_filter' => $cSlg));
						$data['stateSlug'] =$slug;
					}
					//pr($data['allState']);
					$data['page'] = 'home/non_bread_sidebar_page';
				}else{
					$data['page'] = 'home/sidebar_page';
				}
			}else{
				$data['page'] = 'home/inner_page';
			}
		}
		if($cms_404 == true){
			$data['page'] = 'home/404_page';
		}
		$this->front_template->template_innerView($data);
	}

	/*public function search()
	{
		$keyword = $this->input->post('search');
		$data['search'] = $this->common_model->getSearchData($keyword);
		$arrResult = array ('response'=>'success','responseData'=>$data['search']);
		echo json_encode($arrResult);
		exit;

	}*/

	public function loadmore_search(){
		$per_page 		= 10;
		$pageNo 		= ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;
		$parPageCount 	= ($pageNo-1)*$per_page;
		$txt_search 	= $this->input->post('search_txt');
		$posts 			= $this->common_model->common_blog($per_page,$parPageCount,$txt_search);
		$html = '';
		if(count($posts)>0){
			foreach ($posts as $post){
				$html .='<div class="col-md-12">';
				$html .='<div class="latest-post-subblock">';
				$html .='<a href="'.base_url().'blog/'.$post->cat_slug.'/'.$post->slug.'" class="custom-link">';
				$html .='<div class="row">';
				$html .='<div class="col-md-5">';
				$html .='<div class="image-block">';
				$html .='<img src="'.base_url().$post->featured_img.'" class="img-fluid">';
				$html .='</div>';
				$html .='</div>';
				$html .='<div class="col-md-7">';
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
				$html .='</div>';
				$html .='</div>';
				$html .='</a>';
				$html .='</div>';
				$html .='</div>';

			}
		}
		echo $html;
	}

	/*public function result()
{
$content_settings 				= $this->common_model->getAllData('content_settings','meta_desc,meta_title','1');
$data['metadata'] 				= $content_settings->meta_desc;
$data['title'] 					= $content_settings->meta_title;
$data['terms_and_conditions'] 	= $site_settings->common_terms_and_conditions;
$data['updateon'] 				= $site_settings->updateon;
$data['canonical'] 				= base_url() .'result';
$data['page'] 					= 'home/result';
$data['social_title'] 			= $content_settings->meta_title;
$this->front_template->template_innerView($data);
}*/

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

	function bad_url(){
		echo '<script>window.location.href = "'.base_url().'404";</script>';
		exit;
	}

	public function newsletter()
	{
		$newsletter = post('newsletter');
		if(isset($newsletter)){
			$url = "https://api.maropost.com/accounts/1206/forms/5/subscribe/4729dcb714527817ea47e9b31da38d452a74a9da.json";
			$postfields = "contact_fields%5Bemail%5D={$newsletter}&commit=SUBSCRIBE";
			$options = array(
				CURLOPT_URL => $url,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'POST',
				CURLOPT_POSTFIELDS => $postfields,
				CURLOPT_HTTPHEADER => array(
					'Content-Type: application/x-www-form-urlencoded',
				)
			);
			$curl = curl_init();
			curl_setopt_array($curl, $options);
			$response = curl_exec($curl);
			curl_close($curl);
			echo $response;
			exit;
		}
		exit;
	}

	public function getcustomerid1()
	{
		$customerID = $this->input->get('customerID');
		if(isset($customerID)){
			$url = 'customerID='.$customerID;			
			$options = array(
				CURLOPT_RETURNTRANSFER => true,   // return web page
				CURLOPT_HEADER         => false,  // don't return headers
				CURLOPT_FOLLOWLOCATION => true,   // follow redirects
				CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
				CURLOPT_ENCODING       => "",     // handle compressed
				CURLOPT_USERAGENT      => "test", // name of client
				CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
				CURLOPT_CONNECTTIMEOUT => 120,    // time-out on connect
				CURLOPT_TIMEOUT        => 120,    // time-out on response
			); 
			$ch = curl_init();
			curl_setopt_array($ch, $options);
			curl_setopt($ch, CURLOPT_URL,"https://qaenroll.clearmatchmedicare.com/CustomerIdResponse.aspx?".$url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$server_output = curl_exec ($ch);
			curl_close ($ch);
			$return = json_decode($server_output);
			echo "customerID=".$customerID."&folder=home&userIdStatus=".$return->userIdStatus;
		}
		exit;
	}
	public function checkcustomerid()
	{
		$customerID = $this->input->get('i');
		if(isset($customerID)){
			// $url = "https://qaenroll.clearmatchmedicare.com/CustomerIdResponse.aspx";
			$url = "https://api.healthplanone.com/sf/v1-uat/session/".$customerID;
			//	$postfields = 'Ocp-Apim-Subscription-Key=05a5f62fcaac4e5a82d318ea7ee1fdea';
			$options = array(
				CURLOPT_URL => $url,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => '',
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 0,
				CURLOPT_FOLLOWLOCATION => true,
				CURLOPT_SSL_VERIFYHOST => false,
				CURLOPT_SSL_VERIFYPEER =>false,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => 'GET',
				CURLOPT_HTTPHEADER => array(
					'Content-Type: application/x-www-form-urlencoded',
					'Ocp-Apim-Subscription-Key: 05a5f62fcaac4e5a82d318ea7ee1fdea'
				)
			);
			$curl = curl_init();
			curl_setopt_array($curl, $options);
			$response = curl_exec($curl);
			curl_close($curl);
			$return = json_decode($response);
			if(isset($return->customerCode)){
				echo 'true';
			}else{
				echo 'false';
			}
		}else{
			echo 'false';
		}
		exit;
	}
}

