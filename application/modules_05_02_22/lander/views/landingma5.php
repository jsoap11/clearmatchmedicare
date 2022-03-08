<script>
	$(window).keydown(function(event){
		if(event.keyCode == 13) {
			if($('#customerModal').is(":visible")){
				frm_Enter_Custome_ID();
			}else{
				frmLandingma5();
			}
			event.preventDefault();
			return false;
		}

		$("#customerID2").focus(function(){
			$("#i_validate").html('');
		})
	});
</script>
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
<main class="lander-block">
	<div id="newtimer"></div>
	<div class="jumbotron custom-jumbotron new-jumbotron search-jumbotron landing-jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<h1>2022 Medicare Advantage Plans</h1>
					<h2>Discover affordable Medicare Advantage plans that may help you save!</h2>
					<form method="get" action="<?php postUrl(); ?>" id="landingma5Frm">
						<div class="compare-form">
							<div style="display:none">
								<input type="hidden" id="gender" name="gender" value="F">	
								<input type="hidden" id="gender" name="gender" value="F">	
								<input type="hidden" name="lander_name" value="landingma5">
								<input type="hidden" name="pgName" value="landing_ma">
								<input type="hidden" name="category" value="MA">
								<input type="hidden" name="temp1" value="<?php echo (isset($_COOKIE['temp1']))?$_COOKIE['temp1']:temp1();?>">
								<input type="hidden" name="refid" value="<?php echo (isset($_COOKIE['refid']))?$_COOKIE['refid']:'';?>">
								<input type="hidden" name="subid" value="<?php echo (isset($_COOKIE['subid']))?$_COOKIE['subid']:'';?>">
								<input type="hidden" name="gclickid" value="<?php echo (isset($_COOKIE['gclickid']))?$_COOKIE['gclickid']:'';?>">
								<input type="hidden" name="transferPage" id="transferPage" value="planlist"> <!--druglist/planlist/guide-->
								<input type="hidden" name="effectiveDate" value="<?php csd(); ?>" readonly="true">
								<input type="hidden" id="county" name="county" value="">
								<input type="hidden" id="landing_tab" name="landing_tab" value="">
							</div>
							<div class="form-group rounded d-flex zip-code-box lander-type-d justify-content-center">
								<input type="text" value="<?php echo returnZipCode();?>" onblur="returncounty()" onkeypress="return isNumber(event)" maxlength="5" name="zip" id="zip" placeholder="Enter ZIP Code" class="form-control">
								<input type="button" onClick="return frmLandingma5()" value="SEE PLANS" class="btn btn-submit">
							</div>
						</div>
						<div class="error-md light" id="zip_validate"></div>
					</form>
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
	
<section class="partner-logo-block lander-partner-logo-block landingma5-partner-logo-block">
	<div class="container">
		<div class="partner-details">
			<p>With ClearMatch Medicare, you have access to <strong>over 4,000 Medicare Advantage plans nationwide,</strong> so you can feel confident that we can help you find the right plan for you and your budget needs.</p>
		</div>
	</div>
</section>

<section class="summary-block callus-summary-block">
	<div class="container">
		<h1>Summary Of Medicare Advantage Key Benefits</h1>
		<p>Medicare Advantage plans often provide a variety of additional benefits at no extra cost! <br />Call us today or enter your zip code to see if you can get a Medicare Advantage plan that may include:</p>
		<div class="summary-subblock">
			<div class="row">
				<div class="col-md-4 first">
					<ul class="black">
						<li>Transportation</li>
						<li>Fitness Benefit</li>
						<li>Home Healthcare</li>
						<li>Mental Health Services</li>
						<li>Home Meal Delivery</li>
					</ul>
				</div>
				<div class="col-md-4 second">
					<ul class="black">
						<li>Telehealth</li>
						<li>Acupunture</li>
						<li>Chiropractic Services</li>
						<li>Hearing</li>
						<li>Vision</li>
					</ul>
				</div>
				<div class="col-md-4 third">
					<ul class="black">
						<li>Prescription Drugs</li>
						<li>Dental</li>
						<li>Part B Premium Reduction</li>
						<li>Over-the-Counter items</li>
						<li>Insulin savings</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

	<section class="getting-started-block callus-getting-started-block findaplan1-getting-started-block">
	<div class="container">
		<div class="getting-started-subblock">
			<div class="row">
				<div class="col-md-6">
					<div class="left-block">
						<h1>Getting started with us <br />is quick and easy</h1>
						<p>There’s no cost to you and the call is <br />absolutely free!</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="right-block">
						<div class="button-block d-none d-md-block dynamic_phoneno"><a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>" class="btn">Call <?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>/TTY: 711</a></div>
						<div class="button-block d-md-none dynamic_phoneno"><a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>" class="btn">Call Now!</a></div>
						<span><?php displayTime(); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="why-use-block callus-why-use-block">
	<div class="container">
		<h1>Why Use ClearMatch Medicare?</h1>
		<p>ClearMatch Medicare provides support and advice throughout your Medicare journey. Our licensed <br />Medicare sales agents are just a phone call away. There’s no cost to you and the call is absolutely free!</p>
		<div class="why-use-subblock">
			<div class="row">
				<div class="col-md-4">
					<div class="image-block">
						<img alt="" src="<?= bs() ?>front_assets/image/svg/we-know-icon.svg" class="img-fluid" />
					</div>
					<h1>We Know Medicare</h1>
					<p>We know Medicare inside and out and our #1 goal is to make sure you understand it as well as we do.</p>
				</div>
				<div class="col-md-4">
					<div class="image-block">
						<img alt="" src="<?= bs() ?>front_assets/image/svg/trusted-icon.svg" class="img-fluid" />
					</div>
					<h1>Trusted Advice. No Pushy Sales Tactics</h1>
					<p>You will never feel forced to enroll in a Medicare plan you don’t want or need. We care about your health and well being, that’s why we will make sure your Medicare plan is right for you.</p>
				</div>
				<div class="col-md-4">
					<div class="image-block">
						<img alt="" src="<?= bs() ?>front_assets/image/svg/peace-of-mind-icon.svg" class="img-fluid" />
					</div>
					<h1>Peace of Mind</h1>
					<p>Whether you bought a plan from us 10 years ago or yesterday, we will stand by your side during this Medicare journey for as long as you need us.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="learn-more-block callus-learn-more-block">
	<div class="container">
		<div class="learn-more-plan-block">
			<div class="row">
				<div class="col-4">
					<div class="learn-more-content-block left-block">
						<h2>Medicare Advantage</h2>
						<h6>Plans Available</h6>
						<span>Co-pays</span>
						<h1>$0</h1>
					</div>
				</div>
				<div class="col-4 scale-block">
					<div class="learn-more-content-block center-block">
						<h2>Medicare Advantage</h2>
						<h6>Plans Available</h6>
						<span>Monthly Premium</span>
						<h1>$0</h1>
					</div>
				</div>
				<div class="col-4">
					<div class="learn-more-content-block right-block">
						<h2>Medicare Advantage</h2>
						<h6>Plans Available</h6>
						<span>Deductibles</span>
						<h1>$0</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="learn-more-subblock">
			<h1>Learn More About Medicare Advantage Plans</h1>
			<div class="button-block"><a href="<?php echo bs();?>medicare-advantage" class="btn btn-learn-more">Learn More</a></div>
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

<!--scroll-top-->
<div>
	<a class="scroll-top rounded-circle bg-gold text-white" href="#"><small><i class="fa fa-chevron-up fa-lg"></i></small></a>
</div>  
</main>


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
							<a href="javascript:void(0)" onclick="submitFrmplan('drugBasket','landingma5Frm')" class="btn btn-drugs">ENTER DRUGS</a>
						</div>
						<div class="col-md-6">
							<a  href="javascript:void(0)" onclick="submitFrmplan('planlist','landingma5Frm')"  class="btn btn-plans">SEE PLANS</a>
							<span>(Enter Drugs Later)</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>