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
			
		<!-- favicon -->
		<!--<link rel="apple-touch-icon" sizes="180x180" href="<?= bs() ?>front_assets/image/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?= bs() ?>front_assets/image/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?= bs() ?>front_assets/image/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?= bs() ?>front_assets/image/favicon/site.webmanifest">-->
		<link rel="icon" href="<?= bs() ?>front_assets/image/favicon/favicon.ico" type="image/png">
			<!-- Facebook Meta Start -->
		<meta property="og:url" content="<?=$_SERVER['SCRIPT_URI']?>">
		<meta property="og:type" content="website">
	<?php if(isset($social_title)){?>
		<meta property="og:title" content="<?=$social_title?>">
	<?php }else{ ?>
		<meta property="og:title" content="<?=$title?>">
	<?php } ?>
		<meta property="og:description" content="<?=$metadata?>">
	<?php if(isset($social_image)){?>
		<meta property="og:image" content="<?=bs().$social_image?>">
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

		<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
		<script>
			const base_url = '<?= bs() ?>';
			const search_url = '<?= bs() ?>';
		</script>
		<?php
			$canonical_display=0;
			$currentUrl = explode("/",$_SERVER['REQUEST_URI']);
			if(count($currentUrl)>2)
			{
				if($currentUrl[2]=='categories' || $currentUrl[2]=='tags' || $currentUrl[2]=='404')
				{
					echo '<meta name="robots" content="noindex, nofollow">';
					$canonical_display++;
				}
			}
			if(count($currentUrl) >0){
				if($currentUrl[1]=='404')
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
		<?php if($currentUrl[1]=='blog' && count($currentUrl) >3){ ?>
		<script type="application/ld+json">
			{
			  "@context": "https://schema.org",
			  "@type": "BlogPosting",
			  "mainEntityOfPage": {
				"@type": "WebPage",
				"@id": "<?=$_SERVER['SCRIPT_URI']?>"
			  },
			  "headline": "<?=$social_title?>",
			  "description": "<?=$metadata?>",
			  "image": "<?=bs().$social_image?>",  
			  "author": {
				"@type": "Organization",
				"name": "Administrator"
			  },  
			  "publisher": {
				"@type": "Organization",
				"name": "<?php echo $post->first_name ?> <?php echo $post->last_name ?>",
				"logo": {
				  "@type": "ImageObject",
				  "url": "https://clearmatchmedicare.com/front_assets/image/png/CMM-logo.png"
				}
			  },
			  "datePublished": "2021-03-30",
			  "dateModified": "2021-03-30"
			}

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
	
</head>
<body>
	<header class="fixed-header header-lander">
		<div class="container-fluid">
			<div class="top-header">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-6 d-flex">
						<a class="navbar-brand" href="<?php echo bs();?>"><img src="<?= bs() ?>front_assets/image/png/CMM-logo.png" class="logo" /></a>
						<span class="phone-mobile dynamic_phoneno"><a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>" id="ucHeader_hpoPhoneA1" class="hpoPhoneA"><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?></a></span>
					</div>
					<div class="col-4 col-md-6 col-lg-6 header-call-now-block d-none d-md-block text-right">
						<div class="header-call-now-block dynamic_phoneno">
							<h6>Speak to a Licensed Sales Agent</h6>
							<h5>Call Now <a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>"><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?></a> TTY: 711</h5>
							<span><?php displayTime(); ?></span>
						</div>

						<span class="d-md-block d-none">
							<a class="nav-link text-blue text-decoration-none d-md-none d-block" href="#">
								<i class="fa fa-user-circle text-blue fa-lg mr-2"></i>
								<small>Customer ID</small>
							</a>
						</span>
					</div>
					<div class="col-4 col-lg-3 text-right align-self-center justify-content-end d-none">
						<span class="d-lg-block d-none">
							<a class="btn btn bg-gold px-4 text-white p20" href="<?= bs() ?>find-a-plan">
								GET STARTED
							</a>
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
	</header>