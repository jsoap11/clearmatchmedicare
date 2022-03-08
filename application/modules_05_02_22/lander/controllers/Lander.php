<?php defined('BASEPATH') or exit('No direct script access allowed');

class Lander extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: GET, OPTIONS");
		$this->load->model(array('Ion_auth_model', 'common_model'));
		$this->load->module('front_template');
		$this->load->helper('cookie');
		// $this->setting = $this->common_model->getAllData('blog_settings','*','1');
	}

	public function index()
	{

	}
	
	public function landingma5()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'landingma'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Advantage Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/landingma5';
		$this->front_template->template_noCommonView($data);
	}
	
	public function landingma_dr()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'landingma'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Advantage Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/landingma_dr';
		$this->front_template->template_noCommonView($data);
	}

	public function landingmastep2()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'landingmastep2'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Advantage Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/landingmastep2';
		$this->front_template->template_landerView($data);
	}

	public function step2()
	{
		$zipcode = $this->input->post('zip');
		if(!isset($zipcode)){
			echo '<script>window.location.href = "'.$page_url.'landingmastep2";</script>';
		}else{
			$data['zipcode']  = $this->input->post('zip');
			$data['transferPage'] = $this->input->post('transferPage');
			$data['pgName'] = $this->input->post('pgName');
			$data['pagephone'] = $this->input->post('pagephone');
			$zipcode = $this->input->post('zip');
			$lander_name = $this->input->post('lander_name');
			$data['county'] = array();
			if(isset($zipcode)){
				$state = $this->common_model->getAllData('zipcodes','DISTINCT(County)','',array('ZipCode'=> $zipcode));
				$data['county'] = $state[0]->County;
			}
			$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'step2'));
			$data['disclaimer'] = $disclaimer[0]->disclaimer;
			$this->setCookiesInLocal();
			$data['title'] = 'Compare Medicare Advantage Plans Now | ClearMatch Medicare';
			$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
			$data['metadata'] = $site_settings->site_meta_desc;
			$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
			$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
			$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
			$data['page'] = 'lander/step2';
			$this->front_template->template_landerView($data);
		}
	}

	public function findaplan1()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'step2'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Advantage Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/findaplan1';
		$this->front_template->template_noCommonView($data);
	}

	public function findaplan2()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'landingma'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Advantage Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/findaplan2';
		$this->front_template->template_noCommonView($data);
	}

	public function demographics()
	{
		$zipcode = $this->input->post('zip');
		if(!isset($zipcode)){
			echo '<script>window.location.href = "'.$page_url.'landingma2";</script>';
		}else{
			$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'landingma'));
			$data['disclaimer'] = $disclaimer[0]->disclaimer;
			$this->setCookiesInLocal();
			$data['zipcode']  = $this->input->post('zip');
			$data['transferPage'] = $this->input->post('transferPage');
			$data['pgName'] = $this->input->post('pgName');
			$data['pagephone'] = $this->input->post('pagephone');
			$zipcode = $this->input->post('zip');
			$lander_name = $this->input->post('lander_name');
			$data['county'] = array();
			if(isset($zipcode)){
				$data['county'] = $this->common_model->getAllData('zipcodes','DISTINCT(County)','',array('ZipCode'=> $zipcode));
			}
			$data['tcpa'] ='';
			$dataTcpa = $this->common_model->getAllData('lander','*','',array('lander_name'=> $lander_name));
			if(count($dataTcpa)>0){
				$data['tcpa'] =$dataTcpa[0]->lander_tcpa;
			}else{
				$dataTcpaDefult = $this->common_model->getAllData('lander','*','',array('id'=> 2));
				$data['tcpa'] =$dataTcpaDefult[0]->lander_tcpa;
			}

			$data['title'] = 'Compare Medicare Advantage Plans Now | ClearMatch Medicare';
			$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
			$data['metadata'] = $site_settings->site_meta_desc;
			$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
			$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
			$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
			if($data['pgName'] =='landingv2')
			{
				$data['page'] = 'lander/demographics_validated';
			}else{
				$data['page'] = 'lander/demographics';
			}
			$this->front_template->template_fullwidth($data);
		}
	}

	public function callus()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'callnow'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Advantage Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/callus';
		$this->front_template->template_noCommonView($data);
	}

	public function findaplan()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'callnow'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Advantage Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/findaplan';
		$this->front_template->template_noCommonView($data);
	}

	public function newsearch()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'callnow'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Advantage Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/newsearch';
		$this->front_template->template_noCommonView($data);
	}

	public function callnow()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'callnow'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Advantage Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/callnow';
		$this->front_template->template_noCommonView($data);
	} 

	public function landing_ma_doc()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'landingma'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Advantage Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/landing_ma_doc';
		$this->front_template->template_landerView($data);
	}

	public function landing_ma_2()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'landingma'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Advantage Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/landing_ma_2';
		$this->front_template->template_fullwidth($data);
	}

	public function landing_ma()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'landingma'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Advantage Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/landing_ma';
		$this->front_template->template_landerView($data);
	}

	public function landing_rx()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'landingrx'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Prescription Drug Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/landing_rx';
		$this->front_template->template_landerView($data);
	}

	public function landing_rx_compare()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'landingrx-compare'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Prescription Drug Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/landing_rx_compare';
		$this->front_template->template_landerView($data);
	}

	public function landing_rx_enroll()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'landingrx-enroll'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Prescription Drug Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/landing_rx_enroll';
		$this->front_template->template_landerView($data);
	}

	public function landing_rx_planfinder()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'landingrx-planfinder'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Prescription Drug Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/landing_rx_planfinder';
		$this->front_template->template_landerView($data);
	}

	public function landing_rx_search()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'landingrx-search'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Prescription Drug Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/landing_rx_search';
		$this->front_template->template_landerView($data);
	}

	public function landing_rx_shop()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'landingrx-shop'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Prescription Drug Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/landing_rx_shop';
		$this->front_template->template_landerView($data);
	}

	public function landing_ma_compare()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'landingma-compare'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Advantage Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/landing_ma_compare';
		$this->front_template->template_landerView($data);
	}

	public function landing_ma_enroll()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'landingma-enroll'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Advantage Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/landing_ma_enroll';
		$this->front_template->template_landerView($data);
	}

	public function landing_ma_planfinder()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'landingma-planfinder'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Advantage Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/landing_ma_planfinder';
		$this->front_template->template_landerView($data);
	}

	public function landing_ma_search()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'landingma-search'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Advantage Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/landing_ma_search';
		$this->front_template->template_landerView($data);
	}

	public function landing_ma_shop()
	{
		$disclaimer = $this->common_model->getAllData('disclaimer','*','',array('lander_url'=>'landingma-shop'));
		$data['disclaimer'] = $disclaimer[0]->disclaimer;
		$this->setCookiesInLocal();
		$data['title'] = 'Compare Medicare Advantage Plans Now | ClearMatch Medicare';
		$site_settings = $this->common_model->getAllData('site_config','*',array('id'=>1));
		$data['metadata'] = $site_settings->site_meta_desc;
		$data['landing_do_not_call_policy'] = $site_settings->landing_do_not_call_policy;
		$data['landing_privacy_policy'] = $site_settings->landing_privacy_policy;
		$data['landing_licensing_legal'] = $site_settings->landing_licensing_legal;
		$data['page'] = 'lander/landing_ma_shop';
		$this->front_template->template_landerView($data);
	}
	public function checkzip()
	{
		$zipcode = $this->input->get('zip');
		if(isset($zipcode)){
			$result = $this->common_model->getAllData('zipcodes','*','',array('ZipCode'=> $zipcode));
			if(count($result)>0)
			{
				echo "true";
			}else{
				echo "false";
			}
		}
		exit;
	}

	public function returncounty()
	{
		$zipcode = $this->input->get('zip');
		if(isset($zipcode)){
			$result = $this->common_model->getAllData('zipcodes','*','',array('ZipCode'=> $zipcode));
			if(count($result)>0)
			{
				echo $result[0]->County;
			}
		}	
	}

	public function returncountyArr()
	{
		$zipcode = $this->input->get('zip');
		if(isset($zipcode)){
			$result = $this->common_model->getAllData('zipcodes','DISTINCT(County),State','',array('ZipCode'=> $zipcode));
			$name ='<input type="hidden" name="state" value="'.$result[0]->State.'">';
			$name .='<select class="form-control" id="county" name="county">';
			if(count($result)>0)
			{
				for($i=0;$i<count($result);$i++){
					$name .='<option value="'.$result[$i]->County.'">'.$result[$i]->County.'</option>';
				}
			}
			$name .='</select>';
			echo $name;
		}	
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
	}


}

