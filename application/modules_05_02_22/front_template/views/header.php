
<!DOCTYPE html>
<html lang="en">
	<head>
		<script async>
			window.dataLayer = window.dataLayer || [];
			window.dataLayer.push({
				"event":"pageload",
				"pagevalues": {
					"leadsrc":"<?php echo (isset($_COOKIE['temp1']))?$_COOKIE['temp1']:temp1();?>"
					,"apptype":"MA"
					,"refid":"<?php echo (isset($_COOKIE['refid']))?$_COOKIE['refid']:'';?>"
					,"age":"68"
					,"coveragestartdate":"<?php csd(); ?>"
					,"webcustomerid":""
					,"pharmacustomerid":""
					,"ipAddress" : "<?=$_SERVER["REMOTE_ADDR"]?>"
				}
			});
		</script>
		
		
		
		
		<!-- Google Tag Manager -->
		<script>
			(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-5XDWNTT');</script>
		<!-- End Google Tag Manager -->
		<meta charset="UTF-8">
		<meta name=”description”>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<title><?=$title?> | ClearMatch Medicare</title>
		<meta name="description" content="<?=$metadata?>">

		<link rel="icon" href="<?= bs() ?>front_assets/image/favicon/favicon.ico" type="image/png">
		<!-- Facebook Meta Start -->
		<meta property="og:url" content="<?=$_SERVER['SCRIPT_URI']?>">
		<meta property="fb:page_id" content="<?php echo rand(9999999,99999999999);?>" />
		<meta property="og:type" content="website">
		<?php if(isset($social_title)){?>
		<meta property="og:title" content="<?=$social_title?>">
		<?php }else{ ?>
		<meta property="og:title" content="<?=$title?>">
		<?php } ?>
		<meta property="og:description" content="<?=$metadata?>">
		<?php if(isset($social_image)){?>
		<meta property="og:image" content="<?php echo bs().$social_image; ?>">
		<?php }else{ ?>
		<meta property="og:image" content="https://clearmatchmedicare.com/front_assets/image/png/CMM-logo.png">
		<?php } ?>
		<!-- Facebook Meta End -->

		<!-- Twitter Meta Tags -->
		<meta name="twitter:card" content="summary_large_image">
		<meta property="twitter:domain" content="<?=$_SERVER['SCRIPT_URI']?>">
		<meta property="twitter:url" content="<?= bs() ?>">
		<?php if(isset($social_title)){?>
		<meta name="twitter:title" content="<?=$social_title?>">
		<?php }else{ ?>
		<meta name="twitter:title" content="<?=$title?>">
		<?php } ?>
		<meta name="twitter:description" content="<?=$metadata?>">
		<?php if(isset($social_image)){?>
		<meta name="twitter:image" content="<?=bs().$social_image?>">
		<?php }else{ ?>
		<meta name="twitter:image" content="https://clearmatchmedicare.com/front_assets/image/png/CMM-logo.png">
		<?php } ?>

		<!-- normalize -->
		<link rel="stylesheet" href="<?= bs() ?>front_assets/css/normalize.min.css">
		<!-- Bootstrap 4.4.1-->
		<link rel="stylesheet" href="<?= bs() ?>front_assets/bootstrap-4.5.2/css/bootstrap.min.css">
		<!-- Font-Awesome -->
		<link rel="stylesheet" href="<?= bs() ?>front_assets/font-awesome-4.7.0/css/font-awesome.min.css">
		<!-- Swiper Slider -->
		<link rel="stylesheet" href="<?= bs() ?>front_assets/swiper-master/package/css/swiper.css">

		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?= bs() ?>front_assets/css/style.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script>
			const base_url = '<?= bs() ?>';
			const search_url = '<?= bs() ?>';
		</script>
		<?php
			$canonical_display=0;
			$currentUrl = explode("/",$_SERVER['REQUEST_URI']);
			$queryUrl = explode("?",$currentUrl[1]);
			$compareUrl = $queryUrl[0];
			  if(count($currentUrl)>2)
			  {
				  if($currentUrl[2]=='categories' || $currentUrl[2]=='tags' || $currentUrl[2]=='404')
				  {
					  echo '<meta name="robots" content="noindex, nofollow">';
					  $canonical_display++;
				  }
			  }
			  if(count($currentUrl) >0){
				  if($compareUrl=='404')
				  {
					  echo '<meta name="robots" content="noindex, nofollow">';
					  $canonical_display++;
				  }
			  }
			  if($page =='home/404_page')
			  {
				  echo '<meta name="robots" content="noindex, nofollow">';
				  $canonical_display++;
			  }
			  if(isset($no_index)){
				  if($no_index ==1){
					  echo '<meta name="robots" content="noindex, nofollow">';
					  $canonical_display++;
				  }
			  }
			  if($canonical_display==0){
				  echo '<link rel="canonical" href="'.$canonical.'" />	';
			  }
		?>

		<meta name="msvalidate.01" content="690F306D8246353B22D21BD5AA397AB2" />
		<script type="application/ld+json">
		{
			"@context":"http://schema.org",
			"@type":"WebSite",
			"name":"qa.clearmatchmedicare.com",
			"url":"https://qa.clearmatchmedicare.com",
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://qa.clearmatchmedicare.com/search/{search_term_string}?src=mc_google",
				"query-input": "required name=search_term_string"
						   }
		}
		</script>
		<script type="application/ld+json">
			{
				"@context": "http://schema.org",
				"@id": "https://qa.clearmatchmedicare.com/#webpage",
				"@type": "WebPage",
				"url": "<?=$_SERVER['SCRIPT_URI']?>",
				"name": "qa.clearmatchmedicare.com"
			}
		</script>
		<script type="application/ld+json">
		{
		  "@context": "http://schema.org",
		  "@type": "Organization",
		  "name": "Qa.Clearmatchmedicare.com",
		  "url": "<?=$_SERVER['SCRIPT_URI']?>",
		  "logo": "https://qa.clearmatchmedicare.com/front_assets/image/png/CMM-logo.png",
		   "contactPoint": [
					{
					 "@type": "ContactPoint",
					 "telephone": "<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>",
					 "contactType": "sales",
					 "areaServed": [ "US" ]
					}
				],
		  "sameAs": [
			"https://twitter.com/clear_match",
			"https://www.facebook.com/ClearMatchMedicare",
			"https://www.instagram.com/clearmatchmedicare/"
		  ]
		}
		</script>


		<?php if($compareUrl=='blog'){ ?>
		<script type="application/ld+json">

			{
				"@context": "https://schema.org",
				"@type": "BookSeries",
				"name": "<?=$cms_content[0]->title?>",
				"genre": "Blog Post",
				"startDate": "<?php echo date("Y-m-d", strtotime($post->add_date)) ?>",
				"endDate": "2025-10-12",
				"abstract": "<?php echo $post->short_description;?>",
				"author": {
					"@type": "Person",
					"givenName": "<?php echo $post->first_name ?> <?php echo $post->last_name ?>",
					"familyName": "<?php echo $post->first_name ?>",
					"additionalName": "<?php echo $post->first_name ?>",
					"birthDate": "1952-03-11",
					"birthPlace": {
						"@type": "Place",
						"address": "Cambridge, Cambridgeshire, England"
					},
					"deathDate": "",
					"deathPlace": {
						"@type": "Place",
						"address": ""
					}
				}
			}
		</script>
		<?php } ?>
		<?php 
		if( ($compareUrl !='blog')&&($compareUrl !='find-a-plan')){ ?>
		<script>
			$(window).keydown(function(event){
				if(event.keyCode == 13) {
					if($('#customerModal').is(":visible")){
						frm_Enter_Custome_ID();
					}
					event.preventDefault();
					return false;
				}
				
				$("#customerID2").focus(function(){
					$("#i_validate").html('');
				})
			});
		</script>
		<?php } ?>
		<?php
			returnZipCode();
		
			$tempUrlFPA = 'pgName='.$compareUrl;
			$tempUrlFPA .= '&category=MA';
			$tempUrlFPA .= '&transferPage=planlist';
			$tempUrlFPA .= '&temp1=';
			$tempUrlFPA .= (isset($_COOKIE["temp1"]))?$_COOKIE["temp1"]:temp1();
			$tempUrlFPA .= '&refid=';
			$tempUrlFPA .= (isset($_COOKIE["refid"]))?$_COOKIE["refid"]:"";
			$tempUrlFPA .= '&subid=';
			$tempUrlFPA .= (isset($_COOKIE["subid"]))?$_COOKIE["subid"]:"";
			$tempUrlFPA .= '&gclickid=';
			$tempUrlFPA .= (isset($_COOKIE["gclickid"]))?$_COOKIE["gclickid"]:"";
			$tempUrlFPA .= '&effectiveDate='.csdp();
			$tempUrlFPA .= '&zip='.returnZipCode();
		
			$this->db->from('zipcodes')->where(array('ZipCode'=> returnZipCode()));
			$query = $this->db->get();
			$result = $query->result();
			if(count($result)>0){
				$hc = $result[0]->County;
			}else{
				$hc = '';
			}
			$tempUrlFPA .= '&county='.$hc;
		 	$redirectUrlFindAPlan= returnPostUrl().'/planlist?'.$tempUrlFPA;
		?>
		
	</head>
	<body>
		<main>	
			<!--header-->
			<!-- Google Tag Manager (noscript) --> <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5XDWNTT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

			<!-- End Google Tag Manager (noscript) -->
	<header class="fixed-header resource-header">
				<div class="container container-full">
					<div class="top-header">
						<div class="row">
							<div class="col-12 col-md-4 d-flex">
								<span class="d-md-none d-block">
									<button class="navbar-toggler navbar-light border mr-3 mt-1" type="button">
										<span class="navbar-toggler-icon"></span>
									</button>
								</span>
								<a class="navbar-brand" href="<?php echo bs();?>"><img alt="clearmatchmedicare" src="<?= bs() ?>front_assets/image/png/CMM-logo.png" class="logo" /></a>
								<span class="phone-mobile dynamic_phoneno"><a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>" id="ucHeader_hpoPhoneA1" class="hpoPhoneA"><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?></a></span>
							</div>
							<div class="col-4 col-md-5 col-lg-5 header-call-now-block d-none d-md-block">
								<div class="header-call-now-block dynamic_phoneno">
									<h6>Speak to a Licensed Sales Agent</h6>
									<h5>Call Now <a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>"><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?></a> TTY: 711</h5>
									<span><?php displayTime(); ?></span>
								</div>

								<span class="d-md-block d-none">
									<a class="nav-link text-blue text-decoration-none d-md-none d-block" href="#">
										<i class="fa fa-user-circle text-blue fa-lg mr-2"></i>
										Customer ID
									</a>
								</span>
							</div>
							<div class="col-4 col-md-3 text-right align-self-center justify-content-end">
								<span class="d-md-block d-none">
									<?php if($compareUrl !='find-a-plan'){ ?>
									<?php if(isset($_COOKIE['back'])){ ?>
									<a class="btn btn bg-gold px-4 text-white p20" href='<?= $redirectUrlFindAPlan ?>'>
										BACK TO PLANS
									</a>
									<?php }else{ ?>
									<a class="btn btn bg-gold px-4 text-white p20" href="<?= bs() ?>find-a-plan">
										FIND A PLAN
									</a>
									<?php } ?>
									<?php } ?>
								</span>

								<span class="d-none">
									<a class="btn btn-light nav-link rounded-circle ml-2 d-md-none d-block" style="padding-top: 7px !important; padding-bottom: 7px !important; padding-left: 10px !important; padding-right: 10px !important;" href="#">
										<i class="fa fa-phone text-gold fa-lg"></i>
									</a>
								</span>
							</div>
						</div>
					</div>
				</div>

				<nav class="bg-blue p-md-0 nav1">
					<div class="container cnttr nav-container container-full">
						<a href="javascript:void(0);" class="close-toggle d-md-none"><i class="fa fa-times" aria-hidden="true"></i></a>
						<div class="menu-block">
							<div class="d-flex justify-content-md-start justify-content-center flex-column">
								<div class="header-details d-md-none">
									<div class="text-center align-self-center justify-content-center mb-2">
										<span class="d-lg-block">
										<?php if(isset($_COOKIE['back'])){ ?>
											<a class="btn btn bg-gold px-4 text-white p20" href="<?= $redirectUrlFindAPlan ?>">
												BACK TO PLANS
											</a>
										<?php }else{ ?>
											<a class="btn btn bg-gold px-4 text-white p20" href="<?= bs() ?>find-a-plan">
												FIND A PLAN
											</a>
										<?php } ?>
										</span>
									</div>
									<div class="text-white text-center header-call-now-block dynamic_phoneno">
										<h6>Speak to a Licensed Sales Agent</h6>
										<h5><a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>"><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?></a> <br />TTY: 711</h5>
										<span><?php displayTime(); ?></span>
									</div>
								</div>
								<ul class="navbar-nav flex-row">
									<li class="nav-item d-md-block">
										<span class=""><a class="nav-link <?php if($compareUrl =='about-us'){ echo 'active';}?>" href="<?= bs() ?>about-us">About Us</a></span>
									</li>
									<li class="nav-item dropdown d-md-block">
										<span class=""><a class="nav-link <?php if(($compareUrl =='medicare-advantage')||($compareUrl =='medicare-supplement')||($compareUrl =='medicare-part-d')){ echo 'active';}?>" href="javascript:void(0);">Medicare Plans</a></span>
										<ul class="dropdown-menu">
											<li class="nav-item pl-md-3 d-sm-block">
												<a class="nav-link <?php if($compareUrl =='medicare-advantage'){ echo 'active';}?>" href="<?php echo bs();?>medicare-advantage">Medicare Advantage</a>
											</li>    
											<li class="nav-item pl-md-3 d-sm-block">
												<a class="nav-link <?php if($compareUrl =='medicare-supplement'){ echo 'active';}?>" href="<?php echo bs();?>medicare-supplement">Medicare Supplement</a>
											</li>    
											<li class="nav-item pl-md-3 d-sm-block">
												<a class="nav-link <?php if($compareUrl =='medicare-part-d'){ echo 'active';}?>" href="<?php echo bs();?>medicare-part-d">Prescription Drug Coverage</a>
											</li>   
										</ul>
									</li>
									<li class="nav-item d-md-block">
										<a class="nav-link <?php if(($compareUrl =='resources')||($compareUrl =='medicare-glossary')){ echo 'active';}?>" href="<?= bs() ?>resources">Resources</a>
										<?php  if(($compareUrl =='resources')||($compareUrl =='medicare-glossary')){?>
											<ul class="submenu resource-submenu active d-none d-md-flex">
												<li class="nav-item">
													<a class="nav-link <?php if(isset($compareUrl) && $compareUrl =='medicare-glossary'){ echo 'active';}?>" href="<?php echo bs();?>medicare-glossary">Medicare Glossary</a>
												</li>
												<li class="nav-item">
													<a class="nav-link p-videos sub-pr" href="<?= bs() ?>resources#video">Videos</a>
												</li>
												<li class="nav-item">
													<a class="nav-link p-learning-guides sub-pr" href="<?= bs() ?>resources#learningGuides">Learning Guides</a>
												</li>
											</ul>
										<?php  } ?>
									</li>
									<li class="nav-item pl-md-3">
										<a class="nav-link <?php if($compareUrl =='blog'){ echo 'active';}?>" href="<?php echo bs();?>blog">Blog</a>
										<?php if($compareUrl =='blog' || $compareUrl == 'search'){?>
										<ul class="submenu active">
											<li class="nav-item">
												<a class="nav-link <?php if(isset($currentUrl[2]) && $currentUrl[2] =='medicare'){ echo 'active';}?>" href="<?php echo bs();?>blog/medicare">Medicare</a>
											</li>
											<li class="nav-item">
												<a class="nav-link <?php if(isset($currentUrl[2]) && $currentUrl[2] =='retirement'){ echo 'active';}?>" href="<?php echo bs();?>blog/retirement">Retirement</a>
											</li>
											<li class="nav-item">
												<a class="nav-link <?php if(isset($currentUrl[2]) && $currentUrl[2] =='healthy-living'){ echo 'active';}?>" href="<?php echo bs();?>blog/healthy-living">Healthy Living</a>
											</li>
											<li class="nav-item">
												<a class="nav-link search-link" href="javascript:void(0);"><i class="fa fa-search" aria-hidden="true"></i></a>
											</li>
										</ul>
										<div class="search-form-block desktop-search-block">
											<form class="search-form" id="frm_search" action="<?= bs() ?>search" method="POST">
												<div class="form-group">
													<i class="fa fa-search" aria-hidden="true"></i>
													<input type="text" placeholder="Type Keyword and press ENTER"  name="txt_search" id="txt_search_l" value="" class="form-control" />
												</div>
											</form>
											<script>
												$(document).ready(function() {
													$(window).keydown(function(event){
														if(event.keyCode == 13) {
															if($("#txt_search_l").val() !=''){
																$("#frm_search").submit();
															}
														}
													});
												});
											</script>
											<a class="nav-link close-search" href="javascript:void(0);"><i class="fa fa-times" aria-hidden="true"></i></a>
											<div id="blog_search_cont"></div>
										</div>
										<?php } ?>
									</li> 
									<li class="search d-md-none">
										<form class="search-form"  action="<?= bs() ?>search" method="POST">
											<input type="text" name="txt_search" class="form-control" placeholder="Search" />
											<button type="submit" class="btn-submit">Go</button>
										</form>
									</li>
									<li class="nav-item customer-id-link" id="customerIdForm">
										<a class="nav-link text-white text-decoration-none" href="javascript:void(0);" data-toggle="modal" data-target="#customerModal">
											<img alt="customer-id" src="<?= bs() ?>front_assets/image/svg/customer-id.svg" class="img-fluid mr-2" />
											Customer ID
										</a>
									</li> 
									<li class="nav-item customer-id-link" id="customerIdRedirect" style="display:none;">
										<a class="nav-link text-white text-decoration-none" href="javascript:void(0);">
											<img alt="customer-id" src="<?= bs() ?>front_assets/image/svg/customer-id.svg" class="img-fluid mr-2" />My Customer ID : <span id="cid_d"></span>
										</a>
									</li>
								</ul>
							</div> 
						</div>
					</div>
				</nav>	
				<?php if($compareUrl =='blog' || $compareUrl == 'search'){?>
				<nav class="bg-blue mobile-nav d-lg-none">
					<div class="container cnttr nav-container container-full">
						<ul class="navbar-nav flex-row">
							<li class="nav-item pl-md-3">
								<ul class="submenu active">
									<li class="nav-item pl-md-3">
										<a class="nav-link  <?php if($currentUrl[2] =='medicare'){ echo 'active';}?>" href="<?php echo bs();?>blog/medicare">Medicare</a>
									</li>
									<li class="nav-item pl-md-3">
										<a class="nav-link  <?php if($currentUrl[2] =='retirement'){ echo 'active';}?>" href="<?php echo bs();?>blog/retirement">Retirement</a>
									</li>
									<li class="nav-item pl-md-3">
										<a class="nav-link  <?php if($currentUrl[2] =='healthy-living'){ echo 'active';}?>" href="<?php echo bs();?>blog/healthy-living">Healthy Living</a>
									</li>
								</ul>
							</li> 
						</ul>
					</div>
				</nav>
				<?php 
				  $class = '';
				  if($compareUrl == 'search'){
					  $class = 'result-search-block';
				  } 
				?>
				<div class="search-form-block d-none d-md-block d-lg-none active <?php echo $class; ?>">
					<div class="container">
						<form class="search-form"  action="<?= bs() ?>search" method="POST">
							<div class="row">
								<div class="col-9 col-sm-10">
									<div class="form-group">
										<i class="fa fa-search" aria-hidden="true"></i>
										<input type="text" name="txt_search" class="form-control" placeholder="Search" />
									</div>
								</div>
								<div class="col-3 col-sm-2">
									<div class="form-group">
										<button type="submit" class="btn-submit">Go</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<?php } ?>
			</header>
			<?php  if(($compareUrl =='resources')||($compareUrl =='medicare-glossary')){?>
				<div class="mobile-header d-md-none">
					<ul class="submenu resource-submenu active">
						<li class="nav-item">
							<a class="nav-link <?php if(isset($compareUrl) && $compareUrl =='medicare-glossary'){ echo 'active';}?>" href="<?php echo bs();?>medicare-glossary">Medicare Glossary</a>
						</li>
						<li class="nav-item">
							<a class="nav-link p-videos sub-pr" href="<?= bs() ?>resources#video">Videos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link p-learning-guides sub-pr" href="<?= bs() ?>resources#learningGuides">Learning Guides</a>
						</li>
					</ul>
				</div>
			<?php } ?>
			<div class="space-block"></div>
	
			<div class="modal fade customer-modal" id="customerModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="customerModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h2><i class="fa fa-id-card"></i> <span>Enter Customer ID</span></h2>
							<button type="button" class="close rx-modal-close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<p>If you have received a Customer ID from us previously, you can enter it here. We'll use this to load your prescription drug and preferred pharmacy information to save you time.</p>
							<form action="<?php echo posturl();?>/drugBasket" class="customer-form" method="get" id="frm_Enter_customerid">
								<input type="hidden" id="customerId3" name="customerid"/>
								<input type="hidden" id="gender" name="gender" value="F"/>
								<input type="hidden" id="zip" name="zip" value="<?php echo returnZipCode();?>"/>
								<input type="text" placeholder="Enter Customer ID" class="form-control" id="customerID2" name="i"/>
								<?php 
								$currentURL = current_url(); 
								$params   = $_SERVER['QUERY_STRING'];
								$fullURL = $currentURL . '?' . $params; 
								?>
								<input type="hidden" name="s" id="s" value="webUserId">
								<input type="hidden" name="redirectUrl" id="redirectUrl" value="<?php echo $fullURL;?>">
								<input type="hidden" name="leadsrc" id="leadsrc_b" value="<?php echo (isset($_COOKIE['temp1']))?$_COOKIE['temp1']:'1440';?>">
								<input type="hidden" name="refid" id="refid_b" value="<?php echo (isset($_COOKIE['refid']))?$_COOKIE['refid']:'';?>">
								<input type="hidden" name="coveragestartdate_b" id="coveragestartdate_b" value="<?php csd(); ?>">
								<button type="button" class="btn-submit" onclick="frm_Enter_Custome_ID()">Submit</button>
							</form>
							<div id="i_validate"></div>
						</div>
					</div>
				</div>
			</div>