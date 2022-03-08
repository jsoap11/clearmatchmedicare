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
					frmMedicareadvantage3();
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
						<form method="get" action="<?php postUrl(); ?>" id="medicareadvantage3Frm">
							<div class="compare-form">
								<div style="display:none">
									<input type="hidden" id="gender" name="gender" value="F">	
									<input type="hidden" name="lander_name" value="landing_ma_3">
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
									<input type="button" onClick="return frmMedicareadvantage3()" value="SEE PLANS" class="btn btn-submit">
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
							<a href="javascript:void(0)" onclick="submitFrm('drugBasket','medicareadvantage3Frm')" class="btn btn-drugs">ENTER DRUGS</a>
						</div>
						<div class="col-md-6">
							<a href="javascript:void(0)" onclick="submitFrm('planlist','medicareadvantage3Frm')" class="btn btn-plans">SEE PLANS</a>
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
		
		<section class="medicare-glance-block">
			<div class="container">
				<div class="heading-block">
					<h2>Medicare At-A-Glance</h2>
				</div>
				<div class="medicare-glance-subblock">
					<div class="row">
						<div class="col-3">
							<div class="medicare-glance-main-block">
								<div class="medicare-glance-content-block">
									<div class="image-block">
										<img src="<?= bs() ?>front_assets/image/glance-image1.png" class="img-fluid" alt="Original Medicare" />
									</div>
									<h4>“Original” Medicare</h4>
									<h6>Parts A+B</h6>
									<p>Basic hospital and doctor coverage, provided by the federal government</p>
									<ul>
										<li class="check"><span>80% hospital and doctor expense coverage</li>
										<li><span>No prescription drug coverage</span></li>
										<li><span>No dental, hearing, or vision coverage</span></li>
										<li><span>No limits to your out-of-pocket costs</span></li>
									</ul>
								</div>
								<div class="other-content">
									<p>Sign up through Social Security</p>
									<p>Most people pay $171 per month, usually taken out of your Social Security check</p>
								</div>
								<div class="link-block">
									<a href="javascript:void(0);" class="link">More Details</a>
								</div>
							</div>
						</div>

						<div class="col-3">
							<div class="medicare-glance-main-block">
								<div class="medicare-glance-content-block">
									<div class="image-block">
										<img src="<?= bs() ?>front_assets/image/glance-image4.png" class="img-fluid" alt="Original Medicare" />
									</div>
									<h4>Prescription Drug Coverage</h4>
									<h6>Part D</h6>
									<p>Even with Original Medicare, you must have this additional coverage</p>
									<ul>
										<li class="check"><span>Combined with “Original” or Medicare Supplement</span></li>
										<li class="check"><span>Pays for your prescriptions</span></li>
										<li><span>No dental, hearing, or vision coverage</span></li>
										<li><span>No limits to your out-of-pocket costs</span></li>
									</ul>
								</div>
								<div class="other-content">
									<p>Available from individual insurance companies or via ClearMatchMedicare.com</p>
									<p>You pay a premium plus your Original Medicare or Medicare Supplement monthly cost</p>
								</div>
								<div class="link-block">
									<a href="javascript:void(0);" class="link">More Details</a>
								</div>
								<div class="button-block">
									<a href="<?= bs() ?>find-a-plan" class="btn btn-orange">FIND YOUR PLAN</a>
								</div>
							</div>
						</div>
												<div class="col-3">
							<div class="medicare-glance-main-block right-block">
								<div class="medicare-glance-content-block">
									<div class="image-block">
										<img src="<?= bs() ?>front_assets/image/glance-image2.png" class="img-fluid" alt="Original Medicare" />
									</div>
									<h4>Medicare Advantage</h4>
									<h6>Part C</h6>
									<p>Limits your expenses and helps you control costs, if you can stay “in-network”</p>
									<ul>
										<li class="check"><span>100% of in-network doctors and hospital coverage</span></li>
										<li class="check"><span>Generally pays for prescription drugs</span></li>
										<li class="check"><span>Routine dental, hearing, and vision care</span></li>
										<li class="check"><span>Limits out-of-pocket maximums</span></li>
									</ul>
								</div>
								<div class="other-content">
									<p>Available from individual insurance companies or via ClearMatchMedicare.com</p>
									<p>Often no higher monthly than with Original Medicare</p>
								</div>
								<div class="link-block">
									<a href="javascript:void(0);" class="link">More Details</a>
								</div>
								<div class="button-block">
									<a href="<?= bs() ?>find-a-plan" class="btn btn-orange">FIND YOUR PLAN</a>
								</div>
							</div>
						</div>
						<div class="col-3">
							<div class="medicare-glance-main-block">
								<div class="medicare-glance-content-block">
									<div class="image-block">
										<img src="<?= bs() ?>front_assets/image/glance-image3.png" class="img-fluid" alt="Original Medicare" />
									</div>
									<h4>Medicare Supplement</h4>
									<h6>aka Medigap</h6>
									<p>Good if you travel extensively or can’t stay “in network”</p>
									<ul>
										<li class="check"><span>100% "in & out" of network coverage</span></li>
										<li><span>No prescription drug coverage</span></li>
										<li><span>No dental, hearing, or vision coverage</span></li>
										<li class="check"><span>Limits out-of-pocket maximums</span></li>
									</ul>
								</div>
								<div class="other-content">
									<p>Available from individual carriers or from ClearMatch™ Medicare</p>
									<p>Generally higher monthly premium than Medicare Advantage</p>
								</div>
								<div class="link-block">
									<a href="javascript:void(0);" class="link">More Details</a>
								</div>
								<div class="button-block">
									<a href="<?= bs() ?>find-a-plan" class="btn btn-orange">FIND YOUR PLAN</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="discover-advantage-block">
			<div class="container">
				<div class="heading-block">
					<h1>Discover the ClearMatch advantage</h1>
				</div>
				<div class="discover-advantage-subblock">
					<div class="discover-image-block">
						<div class="discover-image-subblock">
							<img src="<?= bs() ?>front_assets/image/discover-left.svg" class="img-fluid" alt="Discover" />
							<h6>Access thousands of plans from all major carriers</h6>
						</div>
						<div class="discover-image-subblock">
							<img src="<?= bs() ?>front_assets/image/discover-center.svg" class="img-fluid" alt="Discover" />
							<h6>Bias-free recommendations based on your needs</h6>
						</div>
						<div class="discover-image-subblock">
							<img src="<?= bs() ?>front_assets/image/discover-right.svg" class="img-fluid" alt="Discover" />
							<h6>Dedicated to your satisfaction. Lowest complaints of any large brokerage</h6>
						</div>
					</div>
					<div class="discover-button-block">
						<a href="<?= bs() ?>find-a-plan" class="btn btn-orange">FIND YOUR PLAN</a>
					</div>
				</div>
				<div class="discover-bottom-block">
					<div class="custom-image-block">
						<img src="<?= bs() ?>front_assets/image/clearmatch-gurantee.png" class="img-fluid" alt="Clearmatch Gurantee" />
					</div>
					<div class="cmm-guarantee-content-block">
						<div class="cmm-guarantee-content-subblock">
							<p>Shop and compare plans from all the major Medicare plans all on one site. You can feel confident that the plans you see are the same price that the individual carriers provide. Plus, you have access to our Clearmatch Medicare agents and their extensive knowledge of Medicare, so you know we'll help you find the right plan for you.</p>
							<div class="link-block">
								<a href="<?= bs() ?>find-a-plan" class="link">Find My Plans</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="hear-from-customers-block">
			<div class="container">
				<div class="heading-block">
					<h2>Hear from customers who know ClearMatch Medicare</h2>
					<h4>We’ve helped millions understand Medicare better and shop for Medicare plans</h4>
				</div>
			</div>
			<div class="hear-from-customers-subblock">
				<div class="container">
					<div class="row">
						<div class="col-4">
							<div class="rating-block">
								<div class="rating-subblock">
									<div class="image-block">
										<img src="<?= bs() ?>front_assets/image/png/tt.png" class="img-fluid" alt="Trustpilot" />
									</div>
									<h5>Trustpilot</h5>
									<div class="rating-text">
										<h2>4.8</h2>
										<h6>Rating</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="rating-block">
								<div class="rating-subblock">
									<div class="image-block">
										<img src="<?= bs() ?>front_assets/image/png/google.png" class="img-fluid" alt="Trustpilot" />
									</div>
									<h5>Google Reviews</h5>
									<div class="rating-text">
										<h2>4.6</h2>
										<h6>Rating</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="rating-block">
								<div class="rating-subblock">
									<div class="image-block">
										<img src="<?= bs() ?>front_assets/image/png/bbb.png" class="img-fluid" alt="Trustpilot" />
									</div>
									<h5>BBB Accredited Business</h5>
									<div class="rating-text">
										<h2>A+</h2>
										<h6>Rating</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="customer-reviews-block d-none d-lg-flex">
				<div class="customer-reviews-subblock">
					<div class="customer-reviews-details-block">
						<div class="customer-reviews-details-subblock">
							<h2>Norberto Ramos</h2>
							<div class="star-block">
								<img src="<?= bs() ?>front_assets/image/all-star.png" class="img-fluid" alt="Trustpilot" />
							</div>
							<p>“Ms. Mora was amazing. Made sure we understood everything that was being told to us. Explained everything in detail with no confusion whatsoever. The time it took to process everything was well worth it. A kind, courteous and someone with a lively spirit. Would recommend her anytime.”</p>
						</div>
					</div>
					<div class="customer-reviews-details-block">
						<div class="customer-reviews-details-subblock">
							<h2>Michael Damon</h2>
							<div class="star-block">
								<img src="<?= bs() ?>front_assets/image/all-star.png" class="img-fluid" alt="Trustpilot" />
							</div>
							<p>“I had an excellent experience in navigating the numerous plans available with Cherie. She was able to clearly present your product and help me choose the correct plan for me. She was upbeat and casual but still professional in her presentation. She’s a great asset to your organization.”</p>
						</div>
					</div>
					<div class="customer-reviews-details-block">
						<div class="customer-reviews-details-subblock">
							<h2>Jose Miranda</h2>
							<div class="star-block">
								<img src="<?= bs() ?>front_assets/image/all-star.png" class="img-fluid" alt="Trustpilot" />
							</div>
							<p>“I had a very good experience with clear match, the representative took her time to make sure that my primary care physician was under the plan that I chose, very direct and professional and I thank them very much for taking the time to meet my needs I will recommend them to my family and friends.”</p>
						</div>
					</div>
					<div class="customer-reviews-details-block">
						<div class="customer-reviews-details-subblock">
							<h2>Jose Miranda</h2>
							<div class="star-block">
								<img src="<?= bs() ?>front_assets/image/all-star.png" class="img-fluid" alt="Trustpilot" />
							</div>
							<p>“The key to having success with this is your ability to find high quality operatives to help and work with retirees. You have done that and all the folks I worked with were high quality personnel.”</p>
						</div>
					</div>
				</div>
			</div>
			<div class="customer-reviews-block d-lg-none">
				<div class="swiper-container swiper4 rating-swiper">
					<div class="swiper-wrapper text-left">
						<div class="swiper-slide">
							<div class="swiper-slide-details">
								<h2>Norberto Ramos</h2>
								<div class="star-block">
									<img src="<?= bs() ?>front_assets/image/all-star.png" class="img-fluid" alt="Trustpilot" />
								</div>
								<p>“Ms. Mora was amazing. Made sure we understood everything that was being told to us. Explained everything in detail with no confusion whatsoever. The time it took to process everything was well worth it. A kind, courteous and someone with a lively spirit. Would recommend her anytime.”</p>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="swiper-slide-details">
								<h2>Michael Damon</h2>
								<div class="star-block">
									<img src="<?= bs() ?>front_assets/image/all-star.png" class="img-fluid" alt="Trustpilot" />
								</div>
								<p>“I had an excellent experience in navigating the numerous plans available with Cherie. She was able to clearly present your product and help me choose the correct plan for me. She was upbeat and casual but still professional in her presentation. She’s a great asset to your organization.”</p>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="swiper-slide-details">
								<h2>Jose Miranda</h2>
								<div class="star-block">
									<img src="<?= bs() ?>front_assets/image/all-star.png" class="img-fluid" alt="Trustpilot" />
								</div>
								<p>“I had a very good experience with clear match, the representative took her time to make sure that my primary care physician was under the plan that I chose, very direct and professional and I thank them very much for taking the time to meet my needs I will recommend them to my family and friends.”</p>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="swiper-slide-details">
								<h2>Norberto Ramos</h2>
								<div class="star-block">
									<img src="<?= bs() ?>front_assets/image/all-star.png" class="img-fluid" alt="Trustpilot" />
								</div>
								<p>“The key to having success with this is your ability to find high quality operatives to help and work with retirees. You have done that and all the folks I worked with were high quality personnel.”</p>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="swiper-slide-details">
								<h2>Michael Damon</h2>
								<div class="star-block">
									<img src="<?= bs() ?>front_assets/image/all-star.png" class="img-fluid" alt="Trustpilot" />
								</div>
								<p>“I had an excellent experience in navigating the numerous plans available with Cherie. She was able to clearly present your product and help me choose the correct plan for me. She was upbeat and casual but still professional in her presentation. She’s a great asset to your organization.”</p>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="swiper-slide-details">
								<h2>Jose Miranda</h2>
								<div class="star-block">
									<img src="<?= bs() ?>front_assets/image/all-star.png" class="img-fluid" alt="Trustpilot" />
								</div>
								<p>“I had a very good experience with clear match, the representative took her time to make sure that my primary care physician was under the plan that I chose, very direct and professional and I thank them very much for taking the time to meet my needs I will recommend them to my family and friends.”</p>
							</div>
						</div>
					</div>
					<div class="swiper-pagination text-center pr-3 pb-3">
                        <div class="swiper-pagination wdt bg-white p-3 txt2 text-center mb-0"></div>
                    </div>
					<div class="swiper-button-next"></div>
    				<div class="swiper-button-prev"></div>
				</div>
			</div>
			<div class="button-block">
				<a href="<?= bs() ?>find-a-plan" class="btn btn-orange">GET STARTED</a>
			</div>
		</section>
		
		<section class="expect-block">
			<div class="container">
				<div class="heading-block">
					<h2>Expect simplicity and transparency</h2>
					<h5>And we make it as easy as 1-2-3</h5>
				</div>
				<div class="expect-subblock">
					<div class="expect-steps-block">
						<div class="expect-steps-subblock expect-steps-subblock1">
							<div class="expect-content-block">
								<h1>1</h1>
								<div class="expect-content-subblock">
									<h4>Become a <br />savvy shopper</h4>
									<h3>We know Medicare. <br />We’ll share the basics so <br />you’re confident.</h3>
								</div>
							</div>
						</div>
						<div class="expect-steps-subblock expect-steps-subblock2">
							<div class="expect-content-block">
								<h1>2</h1>
								<div class="expect-content-subblock">
									<h4>Share what <br />you need</h4>
									<h3>We’ll ask a few questions – <br />your location, doctors, <br />drugs, preferences – <br />all to help you.</h3>
								</div>
							</div>
						</div>
						<div class="expect-steps-subblock expect-steps-subblock3">
							<div class="expect-content-block">
								<h1>3</h1>
								<div class="expect-content-subblock">
									<h4>See your <br />options</h4>
									<h3>We’ll review thousands <br />of insurance plans to <br />show you a selection <br />customized <b>for you.</b></h3>
								</div>
							</div>
						</div>
					</div>
					<div class="expect-detail-block">
						<p>Enroll online in minutes or get help at any time from a ClearMatch agent. And we never ask for payment.</p>
						<div class="button-block d-lg-none">
							<a href="javascript:void(0);" class="btn btn-orange">GET STARTED</a>
						</div>
						<div class="form-block d-none d-lg-block">
							<form method="get" action="<?php postUrl(); ?>" id="medicareadvantage3Frm">
								<div class="compare-form">
									<div style="display:none">
										<input type="hidden" id="gender" name="gender" value="F">	
										<input type="hidden" name="lander_name" value="landing_ma_3">
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
										<input type="button" onClick="return frmMedicareadvantage3()" value="GET STARTED" class="btn btn-submit">
									</div>
								</div>
								<div class="error-md light" id="zip_validate"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="ready-to-find-block">
			<div class="container">
				<div class="heading-block">
					<h1>Ready to find a Medicare plan that works for you?</h1>
				</div>
				<form method="get" action="<?php postUrl(); ?>" id="medicareadvantage3Frm">
					<div class="compare-form">
						<div style="display:none">
							<input type="hidden" id="gender" name="gender" value="F">	
							<input type="hidden" name="lander_name" value="landing_ma_3">
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
							<input type="button" onClick="return frmMedicareadvantage3()" value="SEE PLANS" class="btn btn-submit">
						</div>
					</div>
					<div class="error-md light" id="zip_validate"></div>
				</form>
				<div class="ready-to-find-below-block">
					<h5>Or talk with a licensed ClearMatch agent for your free Medicare review. No obligation.</h5>
					<h2><a href="tel:1-855-537-2378 TTY 711">1-855-537-2378 TTY 711</a></h2>
					<h6>Monday-Friday 9am – 8pm</h6>
				</div>
			</div>
			<div class="ready-icon-block">
				<img src="<?= bs() ?>front_assets/image/ready-icon1.svg" class="img-fluid icon1" alt="Icon 1" />
				<img src="<?= bs() ?>front_assets/image/ready-icon2.svg" class="img-fluid icon2" alt="Icon 2" />
				<img src="<?= bs() ?>front_assets/image/ready-icon3.svg" class="img-fluid icon3" alt="Icon 3" />
				<img src="<?= bs() ?>front_assets/image/ready-icon4.svg" class="img-fluid icon4" alt="Icon 4" />
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