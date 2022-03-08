<?php
defined('BASEPATH') OR exit('No direct script access allowed');
function displayPhoneNo(){
return '1-888-992-0738';
}
function returnZipCode(){
	$curl = curl_init();
	curl_setopt_array($curl, array(
	  CURLOPT_URL => "http://ip-api.com/json/".$_SERVER['REMOTE_ADDR'],
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "GET",
	  CURLOPT_HTTPHEADER => array(
		"cache-control: no-cache"
	  ),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	$response = json_decode($response, true);
	return $response['zip'];
}

function temp1(){
	return '1910';
}
function returnPostUrl()
{
	return 'https://enroll.clearmatchmedicare.com';
}
function postUrl()
{
	echo 'https://enroll.clearmatchmedicare.com';
}
function csd()
{
	if(date('m')>=10 && date('d')>=15){
		echo date('01'.'/01/'.'Y', strtotime('+1 year', strtotime(date('Y-m-d'))));
	}else{
		echo date('m'.'/01/'.'Y', strtotime('+1 month', strtotime(date('Y-m-d'))));
		//echo '02/01/2022';
	}
}
function csdp()
{
	if(date('m')>=10 && date('d')>=15){
		return date('01'.'/01/'.'Y', strtotime('+1 year', strtotime(date('Y-m-d'))));
	}else{
		return date('m'.'/01/'.'Y', strtotime('+1 month', strtotime(date('Y-m-d'))));
		//return '02/01/2022';
	}
}
function displayTime()
{
	echo ' M-F 9am-8pm EST ';
}
// Helper For print_r
function pr($var = '')
{
	echo "<pre>";
	print_r($var);	
	echo "</pre>";
	// die();	
}

//Helper For base_url()
function bs($value = '')
{
	// public $url = ""
	echo base_url($value);
}

//Helper for $this->load->view()
function view($value='', $data=array(), $output = false)
{
	$CI =& get_instance();
	$CI->load->view($value,$data,$output);
}

//Helper For thsi->input->post()
function post($value='')
{
	$CI =& get_instance();
	return $CI->input->post($value);
}

//helper for var_dump
function dd($value='')
{
	echo "<pre>";
	var_dump($value);	
	echo "</pre>";
	die();
}

//Helper for last_query()
function vd()
{
	$CI =& get_instance();
	return $CI->db->last_query();
}

function group_priviliges($value='')
{
	$CI =& get_instance();

	$gp_id = $CI->session->userdata("group_id");

	$gp_result = $CI->ion_auth_model->user_head_privilege($gp_id);

	foreach($gp_result as $key => $head_pre)
	{
		$gp_result[$key]->sub = $CI->ion_auth_model->user_sub_privilege($gp_id,$head_pre->perm_id);
	}

	return $gp_result;
}
function has($val)
{
	if ($val) 
	{
		return true;
	}
	return false;
}

/**
	 * Slugify Helper
	 *
	 * Outputs the given string as a web safe filename
	 */
if ( ! function_exists('slugify'))
{
	function slugify($string, $replace = array(), $delimiter = '-', $locale = 'en_US.UTF-8', $encoding = 'UTF-8') {
		if (!extension_loaded('iconv')) {
			throw new Exception('iconv module not loaded');
		}
		// Save the old locale and set the new locale
		$oldLocale = setlocale(LC_ALL, '0');
		setlocale(LC_ALL, $locale);
		$clean = iconv($encoding, 'ASCII//TRANSLIT', $string);
		if (!empty($replace)) {
			$clean = str_replace((array) $replace, ' ', $clean);
		}
		$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
		$clean = strtolower($clean);
		$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
		$clean = trim($clean, $delimiter);
		// Revert back to the old locale
		// setlocale(LC_ALL, $oldLocale);
		return $clean;
	}
}


/* End of file custom_helpers.php */
/* Location: ./application/helpers/custom_helpers.php */