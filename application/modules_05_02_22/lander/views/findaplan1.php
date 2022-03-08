<script>
	$(window).keydown(function(event){
		if(event.keyCode == 13) {
			if($('#customerModal').is(":visible")){
				frm_Enter_Custome_ID();
			}else{
				frmFindaPlan1('<?php csd(); ?>');
			}
			event.preventDefault();
			return false;
		}

		$("#customerID2").focus(function(){
			$("#i_validate").html('');
		})
	});
</script>
<header class="fixed-header lander-header callus-lander-header">
	<div class="container-fluid">
		<div class="top-header">
			<div class="row">
				<div class="col-12 col-md-6 col-lg-6 d-flex">
					<a class="navbar-brand" href="<?php echo bs();?>"><img alt="clearmatchmedicare" src="<?= bs() ?>front_assets/image/png/CMM-logo.png" class="logo" /></a>
					<span class="phone-mobile dynamic_phoneno"><a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>" id="ucHeader_hpoPhoneA1" class="hpoPhoneA"><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?></a></span>
				</div>
				<div class="col-4 col-md-6 col-lg-6 right-block d-none d-md-block dynamic_phoneno">
					<h6>Speak with a licensed sales agent</h6>
					<h1>Call Today: <?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>/TTY:711</h1>
					<span><?php displayTime(); ?></span>
				</div>
			</div>
		</div>
	</div>
</header>
<main class="lander-block">
<div id="newtimer"></div>
<div class="jumbotron landingpage-jumbotron callus-jumbotron findaplan1-jumbotron">
	<div class="mobile-arrow d-md-none">
		<img alt="" src="<?= bs() ?>front_assets/image/svg/banner-below-icon.svg" class="img-fluid" />
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12 col-12 jumbotron-column">
				<div class="findaplan1-jumbotron-subblock">
					<h1>Get all the Medicare <br />benefits you deserve</h1>
					<h6>Get started by entering your zip code.</h6>
					<form id="findaPlan1Frm" method="get" action="<?php postUrl(); ?>" class="compare-form">	
						<div style="display:none">
								<input type="hidden" id="gender" name="gender" value="F">	
							<input type="hidden" name="pgName" value="findaPlan1">
							<input type="hidden" name="category" value="MA">
							<input type="hidden" name="temp1" value="<?php echo (isset($_COOKIE['temp1']))?$_COOKIE['temp1']:temp1();?>">
							<input type="hidden" name="refid" value="<?php echo (isset($_COOKIE['refid']))?$_COOKIE['refid']:'';?>">
							<input type="hidden" name="subid" value="<?php echo (isset($_COOKIE['subid']))?$_COOKIE['subid']:'';?>">
							<input type="hidden" name="gclickid" value="<?php echo (isset($_COOKIE['gclickid']))?$_COOKIE['gclickid']:'';?>">
							<input type="hidden" name="transferPage" id="transferPage" value="planlist">
							<input type="hidden" name="effectiveDate" id="effectiveDate" value="<?php csd(); ?>">
							<input type="hidden" id="county" name="county" value="">
						</div>
						<input value="<?php echo returnZipCode();?>" onKeyup="returncounty()" onkeypress="return isNumber(event)" size="5" maxlength="5" name="zip" id="zip" type="text" class="form-control" placeholder="Enter ZIP Code" />
						<button type="button" onclick="frmFindaPlan1('<?php csd(); ?>')" class="btn btn-submit">See Plans</button>
					</form>
					<div class="error-md light" id="zip_validate"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="partner-logo-block lander-partner-logo-block callus-partner-logo-block findaplan1-partner-logo-block">
	<div class="container">
		<div class="partner-logo-subblock">
			<a ><img alt="aetna" src="<?= bs() ?>front_assets/image/landing/aetna.png" class="img-fluid"></a>
			<a ><img alt="cigna" src="<?= bs() ?>front_assets/image/landing/cigna.png" class="img-fluid"></a>
			<a class="wellcare-img"><!--<href="javascript:void(0);">--><img alt="wellcare" src="<?= bs() ?>front_assets/image/landing/wellcare.png" class="img-fluid wellcare-logo"></a>
			<a class="moo-img" ><img alt="moo" src="<?= bs() ?>front_assets/image/landing/moo.png" class="img-fluid"></a>
			<a ><img alt="humana" src="<?= bs() ?>front_assets/image/landing/humana.png" class="img-fluid"></a>
		</div>
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
							<a href="javascript:void(0)" onclick="submitFrmplan('drugBasket','findaPlan1Frm')" class="btn btn-drugs">ENTER DRUGS</a>
						</div>
						<div class="col-md-6">
							<a  href="javascript:void(0)" onclick="submitFrmplan('planlist','findaPlan1Frm')"  class="btn btn-plans">SEE PLANS</a>
							<span>(Enter Drugs Later)</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>