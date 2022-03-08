<body>
	<header class="fixed-header header-lander medicare-advantage-header-lander">
		<div class="container-fluid">
			<div class="top-header">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-6 d-flex">
						<a class="navbar-brand" href="<?php echo bs();?>"><img src="<?= bs() ?>front_assets/image/png/CMM-logo.png" class="logo" /></a>
						<span class="phone-mobile dynamic_phoneno"><a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>" id="ucHeader_hpoPhoneA1" class="hpoPhoneA"><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?></a></span>
					</div>
					<div class="col-4 col-md-6 col-lg-6 header-call-now-block d-none d-md-block text-right">
						<div class="header-call-now-block dynamic_phoneno">
							<span><strong>Speak to a Licensed Agent</strong> | Mon-Fri 8:00am-8:00pm</span>
							<h2>1-855-537-2378 TTY 711</h2>
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
	</header>
	<script>
		$(document).ready(function() {
			$(window).keydown(function(event){
				if(event.keyCode == 13) {
					frmMedicareadvantage2();
					event.preventDefault();
					return false;
				}
			});
		});
	</script>	
    <main class="lander-block medicare-advantage-lander-block">
		<div id="newtimer"></div>
		<div class="new-jumbotron search-jumbotron landing-jumbotron new-medicare-advantage-jumbotron">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<h1>Check out the new 2022 Medicare benefits</h1>
						<h2>You don’t get additional benefits automatically, so check now to see if your zip code qualifies you for more.</h2>
						<form method="get" action="<?php postUrl(); ?>" id="medicareadvantage2Frm">
							<div class="compare-form">
								<div style="display:none">
									<input type="hidden" id="gender" name="gender" value="F">	
									<input type="hidden" name="lander_name" value="landing_ma_2">
									<input type="hidden" name="pgName" value="landing_ma">
									<input type="hidden" name="category" value="MA">
									<input type="hidden" name="temp1" value="<?php echo (isset($_COOKIE['temp1']))?$_COOKIE['temp1']:temp1();?>">
									<input type="hidden" name="refid" value="<?php echo (isset($_COOKIE['refid']))?$_COOKIE['refid']:'';?>">
									<input type="hidden" name="subid" value="<?php echo (isset($_COOKIE['subid']))?$_COOKIE['subid']:'';?>">
									<input type="hidden" name="gclickid" value="<?php echo (isset($_COOKIE['gclickid']))?$_COOKIE['gclickid']:'';?>">
									<input type="hidden" name="transferPage" id="transferPage" value="planlist"> <!--druglist/planlist/guide-->
									<input type="hidden" name="effectiveDate" value="<?php csd(); ?>" readonly="true">
									<input type="hidden" id="county" name="county" value="">
									<input type="hidden" id="state" name="state" value="">
									<input type="hidden" id="landing_tab" name="landing_tab" value="">
								</div>
								<div class="form-group rounded d-flex zip-code-box lander-type-d justify-content-center">
									<input value="<?php echo returnZipCode();?>" type="text" onblur="returncounty()" onkeypress="return isNumber(event)" maxlength="5" name="zip" id="zip" placeholder="Enter ZIP Code" class="form-control">
									<input type="button" onClick="return frmMedicareadvantage2()" value="SEE PLANS" class="btn btn-submit">
								</div>
							</div>
							<div class="error-md light" id="zip_validate"></div>
						</form>
					</div>
				</div>
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
							<a href="javascript:void(0)" onclick="submitFrm('drugBasket','medicareadvantage2Frm')" class="btn btn-drugs">ENTER DRUGS</a>
						</div>
						<div class="col-md-6">
							<a href="javascript:void(0)" onclick="submitFrm('planlist','medicareadvantage2Frm')" class="btn btn-plans">SEE PLANS</a>
							<span>(Enter Drugs Later)</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		<section class="partner-logo-block medicare-advantage-partner-logo-block">
			<div class="container">
				<div class="partner-logo-subblock">
					<a><img alt="aetna" src="<?= bs() ?>front_assets/image/medicareadvantage/aetna.png" class="img-fluid" /></a>
					<a><img alt="cigna" src="<?= bs() ?>front_assets/image/medicareadvantage/cigna.png" class="img-fluid" /></a>
					<a><img alt="humana" src="<?= bs() ?>front_assets/image/medicareadvantage/humana.png" class="img-fluid" /></a>
					<a class="moo"><img alt="moo" src="<?= bs() ?>front_assets/image/medicareadvantage/moo.png" class="img-fluid" /></a>
					<a class="wellcare"><img alt="wellcare" src="<?= bs() ?>front_assets/image/medicareadvantage/wellcare.png" class="img-fluid wellcare-logo" /></a>
				</div>
				<div class="partner-details">
					<p class="d-md-none">See plans from all major carriers, in one place.</p>
					<p class="d-none d-md-block">See plans from all major carriers, in one place. Same plans, same prices.</p>
				</div>
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
		</footer>
