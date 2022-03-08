<body>
	<script>
			$(window).keydown(function(event){
				if(event.keyCode == 13) {
					if($('#customerModal').is(":visible")){
						frm_Enter_Custome_ID();
					}else{
						frmLandingSearch('<?php csd(); ?>');
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
		<header class="fixed-header new-header">
			<div class="container container-full">
				<div class="top-header">
					<div class="row">
						<div class="col-12 col-md-6 col-lg-4 d-flex">
							<a class="navbar-brand" href="<?php echo bs();?>"><img src="<?= bs() ?>front_assets/image/png/CMM-logo.png" class="logo" /></a>
							<span class="phone-mobile dynamic_phoneno"><a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>" id="ucHeader_hpoPhoneA1" class="hpoPhoneA"><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?></a></span>
						</div>
						<div class="col-4 col-md-6 col-lg-8 header-call-now-block d-none d-md-block">
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
					</div>
				</div>
			</div>

			<nav class="bg-blue p-md-0 nav1 d-none">
				<div class="container cnttr nav-container container-full">
					<div class="menu-block">
					</div>
				</div>
			</nav>	
		</header>
		<main class="lander-block">
		<div id="newtimer"></div>
		<div class="jumbotron custom-jumbotron new-jumbotron search-jumbotron landing-jumbotron">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<h1>2022 Medicare Advantage Plans</h1>
						<h2>Discover affordable Medicare Advantage plans that may help you save!</h2>
						<form id="landingSearchFrm" method="get" action="<?php postUrl(); ?>" class="compare-form">	
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
							<input value="<?php echo returnZipCode();?>" onKeyup="returncounty()" onkeypress="return isNumber(event)" size="5" maxlength="5" name="zip" id="zip" type="text" class="form-control" placeholder="Enter ZIP Code" />
							<button type="button" onclick="frmLandingSearch('<?php csd(); ?>')" class="btn btn-submit">SEE PLANS</button>
						</form>
						<div class="error-md light" id="zip_validate"></div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="partner-bg-light">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-3">
						<img src="<?php echo bs() ?>front_assets/image/ma/aetna.png" class="img-fluid carrier_logo"  alt="clearmatchmedicare">
					</div>

					<div class="col-3">
						<img src="<?php echo bs() ?>front_assets/image/ma/cigna.png" class="img-fluid carrier_logo"  alt="clearmatchmedicare">
					</div>

					<div class="col-3">
						<img src="<?php echo bs() ?>front_assets/image/ma/humana.png" class="img-fluid carrier_logo"  alt="clearmatchmedicare">
					</div>

					<div class="col-3">
						<img src="<?php echo bs() ?>front_assets/image/ma/wellcare.png" class="img-fluid carrier_logo"  alt="clearmatchmedicare">
					</div>
				</div>
			</div>
		</div>

		<footer class="footer-lander">
			<div class="footer-top">
				<div class="container">
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
				<div class="container">
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
										<a href="javascript:void(0)" onclick="submitFrmplan('drugBasket','landingSearchFrm')" class="btn btn-drugs">ENTER DRUGS</a>
									</div>
									<div class="col-md-6">
										<a  href="javascript:void(0)" onclick="submitFrmplan('planlist','landingSearchFrm')"  class="btn btn-plans">SEE PLANS</a>
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
								<input type="hidden" id="gender" name="gender" value="F">	
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