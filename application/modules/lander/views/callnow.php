<body>
	<script>
			$(window).keydown(function(event){
				if(event.keyCode == 13) {
					if($('#customerModal').is(":visible")){
						frm_Enter_Custome_ID();
					}else{
						frmCallnow('<?php csd(); ?>');
					}
					event.preventDefault();
					return false;
				}
				
				$("#customerID2").focus(function(){
					$("#i_validate").html('');
				})
			});
		</script>
	<main>	
		<header class="fixed-header callnow-header">
			<div class="container-fluid">
				<div class="top-header">
					<div class="row">
						<div class="col-12 col-md-6 col-lg-6 d-flex">
							<a class="navbar-brand" href="<?php echo bs();?>"><img src="<?= bs() ?>front_assets/image/png/CMM-logo.png" class="logo" /></a>
							<span class="phone-mobile dynamic_phoneno"><a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>" id="ucHeader_hpoPhoneA1" class="hpoPhoneA"><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?></a></span>
						</div>
						<div class="col-4 col-md-6 col-lg-6 header-call-now-block d-none d-md-block">
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
						<div class="col-4 col-lg-4 text-right align-self-center justify-content-end d-none">
							<span class="d-lg-block d-none dynamic_phoneno">
								<div class="btn-block dynamic_phoneno"><a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>" class="btn btn-call-now"><i class="fa fa-phone" aria-hidden="true"></i>
									Call Now</a></div>
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

			<nav class="bg-blue p-md-0 nav1 d-none d-lg-block">
				<div class="container cnttr nav-container container-full">
					<div class="menu-block">
						<div class="d-flex justify-content-md-start justify-content-center flex-column">
							<ul class="navbar-nav flex-row">
								<li class="nav-item ml-auto">
									<a class="nav-link text-white text-decoration-none" href="javascript:void(0);" data-toggle="modal" data-target="#customerModal">
										<img alt="customer-id" src="<?= bs() ?>front_assets/image/svg/customer-id.svg" class="img-fluid mr-2" />
										Customer ID
									</a>
								</li> 
							</ul>
						</div> 
					</div>
				</div>
			</nav>	
		</header>
		<main class="lander-block">
	<div id="newtimer"></div>
		<div class="jumbotron custom-jumbotron">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<h1>Get all the Medicare benefits you deserve</h1>
						<h2>Call now to speak with a caring,<br /> licensed insurance agent.</h2>
						<div class="btn-block d-none d-md-block dynamic_phoneno"><a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>" class="btn btn-find-a-plan"><i class="fa fa-phone" aria-hidden="true"></i>
							<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?> <br />TTY: 711</a></div>
						<div class="btn-block d-md-none dynamic_phoneno"><a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>" class="btn btn-find-a-plan">Call Now</a><h5><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?> TTY: 711</h5></div>
						<h6><?php displayTime(); ?></h6>
					</div>
				</div>
			</div>
		</div>

		<!-- Partner Logo Block -->
		<section class="partner-logo-block callnow-partner-logo-block">
			<div class="container">
				<div class="partner-logo-subblock">
					<a href="<?php echo bs();?>medicare-carriers/aetna"><img alt="aetna" src="<?= bs() ?>front_assets/image/png/aetna.png" class="img-fluid" /></a>
					<a href="<?php echo bs();?>medicare-carriers/cigna"><img alt="cigna" src="<?= bs() ?>front_assets/image/png/cigna.png" class="img-fluid" /></a>
					<a href="<?php echo bs();?>medicare-carriers/humana"><img alt="humana" src="<?= bs() ?>front_assets/image/png/humana.png" class="img-fluid" /></a>
					<a href="<?php echo bs();?>medicare-carriers/mutual-of-omaha" class="moo-logo"><img alt="moo" src="<?= bs() ?>front_assets/image/png/moo.png" class="img-fluid" /></a>
					<a ><!--<href="javascript:void(0);">--><img class="wellcare-logo" alt="wellcare" src="<?= bs() ?>front_assets/image/png/wellcare.png" class="img-fluid" /></a>
				</div>
			</div>
		</section>

		<!-- Compare Plan Block -->
		<section class="compare-plan-block">
			<div class="container">
				<h1>Compare Plans Online</h1>
				<form id="callnowFrm" method="get" action="<?php postUrl(); ?>" class="compare-form">	
					<div style="display:none">
								<input type="hidden" id="gender" name="gender" value="F">	
						<input type="hidden" name="pgName" value="callnow">
						<input type="hidden" name="category" value="MA">
						<input type="hidden" name="temp1" value="<?php echo (isset($_COOKIE['temp1']))?$_COOKIE['temp1']:temp1();?>">
						<input type="hidden" name="refid" value="<?php echo (isset($_COOKIE['refid']))?$_COOKIE['refid']:'';?>">
						<input type="hidden" name="subid" value="<?php echo (isset($_COOKIE['subid']))?$_COOKIE['subid']:'';?>">
						<input type="hidden" name="gclickid" value="<?php echo (isset($_COOKIE['gclickid']))?$_COOKIE['gclickid']:'';?>">
						<input type="hidden" name="transferPage" id="transferPage" value="planlist">
						<input type="hidden" name="effectiveDate" id="effectiveDate" value="<?php csd(); ?>">
						<input type="hidden" id="county" name="county" value="">
						<input type="hidden" id="state" name="state" value="">
					</div>
					<input value="<?php echo returnZipCode();?>" onKeyup="returncountyArr()" onkeypress="return isNumber(event)" size="5" maxlength="5" name="zip" id="zip" type="text" class="form-control" placeholder="Enter ZIP Code" />
					<button type="button" onclick="frmCallnow('<?php csd(); ?>')" class="btn btn-submit">FIND PLANS</button>
				</form>
				<div class="error-md light" id="zip_validate"></div>
			</div>
		</section>
		<footer class="footer-lander">
			<div class="footer-top">
				<div class="container-fluid">
					<div class="row text-center text-md-left align-items-center">
						<div class="col-12 col-md-6 footer-left-link">
							<a href="#" data-target="#PrivacyPolicy" data-toggle="modal" class="">Privacy Policy</a>
							|
							<a href="#" data-target="#LicensingLegal" data-toggle="modal" class="">Licensing Legal</a>
							|
							<a href="<?= bs() ?>do-not-call" data-target="#DoNotCallModal" data-toggle="modal" class="">Do Not Call Policy</a>
							<p>© <?php echo date("Y");?> HealthPlanOne, LLC. All Rights Reserved</p>
						</div>
						<div class="col-12 col-md-6 text-center text-md-right mt-3 mt-lg-0 footer-copyright-block">
							<div class="footer-copyright-right-block">
								<a href="javascript:void(0)"> <!--https://www.bbb.org/us/ct/trumbull/profile/medicare/healthplanone-llc-0111-87015513#sealclick -->
									<img src="<?= bs() ?>front_assets/image/png/BBB-Accredited-Business.png" alt="">
								</a>
								<a href="javascript:void(0)"> <!--https://www.mcafeesecure.com/verify?host=medicareusa.com-->
									<img src="<?= bs() ?>front_assets/image/png/McAfee-Secure.png" class="border" style="height: 33px" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container-fluid">
					<?php echo $disclaimer;?>
				</div>
			</div>
			<div class="modal fade find-a-plan-modal" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<button type="button" class="close rx-modal-close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
						<div class="modal-body text-center">
							<h2 class="">Get a Detailed Estimate</h2>
							<p>Listing the medications you take will help us give the most accurate estimate of your costs under the plans.</p>
							<div class="button-block">
								<div class="row">
									<div class="col-md-6">
										<a href="javascript:void(0)" onclick="submitFrmplan('drugBasket','callnowFrm')" class="btn btn-drugs">ENTER DRUGS</a>
									</div>
									<div class="col-md-6">
										<a  href="javascript:void(0)" onclick="submitFrmplan('planlist','callnowFrm')"  class="btn btn-plans">SEE PLANS</a>
										<span>(Enter Drugs Later)</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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
							<form action="<?php postUrl(); ?>/drugTransfer.aspx" class="customer-form" method="get" id="frm_Enter_customerid">
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
		</footer>