<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/


/* Admin Panel */
$route['backoffice']                    = 'backoffice/backoffice/index';
$route['users']                         = 'users/users/index';
$route['banner']                        = 'banner/banner/index';
$route['content_manager']               = 'content_manager/content_manager/index';
$route['carriers_manager']              = 'carriers_manager/carriers_manager/index';
$route['state']                         = 'state/state/index';
$route['blogs']                         = 'blogs/posts/index';
$route['site_config']                   = 'site_config/site_config/index';
$route['static_content']                = 'static_content/static_content/index';
$route['menu']                          = 'menu/menu/index';
$route['footer_menu']                   = 'footer_menu/footer_menu/index';
$route['redirect']                      = 'redirect/redirect/index';
$route['video']                      	= 'video/video/index';
$route['todo']                          = 'todo/todo/index';
$route['rx_partner']                    = 'rx_partner/rx_partner/index';
$route['landers']                    	= 'landers/landers/index';
$route['phone']                    		= 'phone/phone/index';
$route['lander_manager']                = 'lander_manager/lander_manager/index';
$route['htc']                    		= 'htaccess/htaccess/index';
$route['gallery']                    	= 'gallery/gallery/index';


/* Front end */
$route['default_controller'] = 'home';
$route['guide'] = 'home/home/info_guide';
$route['404_override'] = 'home/home/inner_page';
$route['search'] = 'home/home/search';
$route['loadmore_search/(:num)']    = 'home/home/loadmore_search';
$route['checkcustomerid'] = 'home/home/checkcustomerid';
$route['newsletter'] = 'home/home/newsletter';	

$route['thank-you'] = 'lander/lander/thankyou';
$route['landingma'] = 'lander/lander/landing_ma';
$route['medicareadvantage'] = 'lander/lander/medicareadvantage';
$route['landingma-doc'] = 'lander/lander/landing_ma_doc';
$route['landingma2'] = 'lander/lander/landing_ma_2';
$route['landingma5'] = 'lander/lander/landingma5';
$route['landingrx'] = 'lander/lander/landing_rx';
$route['landingrx-compare'] = 'lander/lander/landing_rx_compare';
$route['landingrx-enroll'] = 'lander/lander/landing_rx_enroll';
$route['landingrx-planfinder'] = 'lander/lander/landing_rx_planfinder';
$route['landingrx-search'] = 'lander/lander/landing_rx_search';
$route['landingrx-shop'] = 'lander/lander/landing_rx_shop';
$route['landingma-compare'] = 'lander/lander/landing_ma_compare';
$route['landingma-enroll'] = 'lander/lander/landing_ma_enroll';
$route['landingma-planfinder'] = 'lander/lander/landing_ma_planfinder';
$route['landingma-search'] = 'lander/lander/landing_ma_search';
$route['landingma-shop'] = 'lander/lander/landing_ma_shop';
$route['callnow'] = 'lander/lander/callnow';
$route['landing-search'] = 'lander/lander/newsearch';
$route['callus'] = 'lander/lander/callus';
$route['findaplan'] = 'lander/lander/findaplan';
$route['demographics'] = 'lander/lander/demographics';
$route['findaplan1'] = 'lander/lander/findaplan1';
$route['findaplan2'] = 'lander/lander/findaplan2';
$route['landingmastep2'] = 'lander/lander/landingmastep2';
$route['step2'] = 'lander/lander/step2';
$route['landingma-dr'] = 'lander/lander/landingma_dr';
$route['medicareadvantage2'] = 'lander/lander/medicareadvantage2';
$route['medicareadvantage3'] = 'lander/lander/medicareadvantage3';

$route['checkzip'] = 'lander/lander/checkzip';
$route['returncounty'] = 'lander/lander/returncounty';
$route['returncountyArr'] = 'lander/lander/returncountyArr';
$route['landingsupp'] = 'lander/lander/landingsupp';

$route['blog']   			 = 'blog/blog/index';
$route['blog/(:num)'] 		 = 'blog/blog/index';
$route['blog/(:any)'] 		 = 'blog/blog/categories';
$route['blog/(:any)/(:num)'] = 'blog/blog/categories';
$route['blog/(:any)/(:any)'] = 'blog/blog/view_resources';
$route['tags/(:any)/(:any)'] = 'blog/blog/view_resources';
$route['tags/(:any)/(:any)/(:num)'] = 'blog/blog/view_resources';
$route['loadmore/(:num)']    = 'blog/blog/loadmore';

$route['medicare-by-state'] = 'medicare_by_state/medicare_by_state/index';
$route['medicare-by-state/(:any)'] = 'medicare_by_state/medicare_by_state/view_state';
$route['medicare-advantage/(:any)'] = 'medicare_by_state/medicare_by_state/medicare_advantage_by_state';
$route['medicare-supplement/(:any)'] = 'medicare_by_state/medicare_by_state/medicare_supplement_by_state';
$route['medicare-part-d/(:any)'] = 'medicare_by_state/medicare_by_state/medicare_part_d_by_state';
$route['categories/(:any)'] = 'home/home/bad_url';
$route['categories/(:any)/(:any)'] = 'home/home/bad_url';
$route['medicare-carriers/(:any)'] = 'home/home/medicare_carriers';
$route['(:any)'] = 'home/home/inner_page';