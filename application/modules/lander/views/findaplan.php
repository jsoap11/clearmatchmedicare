	<script>
			$(window).keydown(function(event){
				if(event.keyCode == 13) {
					if($('#customerModal').is(":visible")){
						frm_Enter_Custome_ID();
					}else{
						frmFindaplan('<?php csd(); ?>');
					}
					event.preventDefault();
					return false;
				}
				
				$("#customerID2").focus(function(){
					$("#i_validate").html('');
				})
			});
		</script>
<header class="fixed-header lander-header findaplan-lander-header">
		<div class="container container-full">
			<div class="top-header">
				<div class="row">
					<div class="col-12 col-lg-6 d-flex">
						<a class="navbar-brand" href="<?php echo bs();?>"><img alt="clearmatchmedicare" src="<?= bs() ?>front_assets/image/png/CMM-logo.png" class="logo" /></a>
						<span class="phone-mobile dynamic_phoneno"><a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>" id="ucHeader_hpoPhoneA1" class="hpoPhoneA"><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?></a></span>
					</div>
					<div class="col-4 col-md-6 col-lg-6 right-block d-none d-lg-block dynamic_phoneno">
						<h6>Speak with a licensed sales agent</h6>
						<h1>Call Today: <?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>/TTY:711</h1>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="space-block lander-space-block"></div>
	<div id="newtimer"></div>
	<div class="jumbotron landingpage-jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-12">
					<h1>Get All the Medicare <br/>Benefits That You Deserve!</h1>
					<h6>Medicare Advantage Plans start at <strong>$0 per month.</strong></h6>
					<div class="form-block d-none d-lg-block">
						<h1>Find A Medicare Plan That’s Right for You!</h1>
						<span>Enter your zip code to see if these plans are in your area.</span>
						<form id="findaplanFrm" method="get" action="<?php postUrl(); ?>" class="callusform">	
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
							<input value="<?php echo returnZipCode();?>" onKeyup="returncountyArr()" onkeypress="return isNumber(event)" size="5" maxlength="5" name="zip" id="zip" type="text" class="form-control error" placeholder="Enter ZIP Code" />
							<button type="button" onclick="frmFindaplan('<?php csd(); ?>')" class="btn btn-submit">Find Plans</button>
						</form>
						<div class="error-md light" id="zip_validate"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="find-a-plan-form-block d-lg-none">
		<h1>Find A Medicare Plan That’s Right for You!</h1>
		<span>Enter your zip code to see if these plans are in your area.</span>
		<form id="findaplanFrm" method="get" action="<?php postUrl(); ?>/pgTransferMUSA.aspx?" class="callusform">	
			<div style="display:none">
								<input type="hidden" id="gender" name="gender" value="F">	
				<input type="hidden" name="pgName" value="callnow">
				<input type="hidden" name="category" value="MA">
				<input type="hidden" name="temp1" value="<?php echo (isset($_COOKIE['temp1']))?$_COOKIE['temp1']:temp1();?>">
				<input type="hidden" name="refid" value="<?php echo (isset($_COOKIE['refid']))?$_COOKIE['refid']:'';?>">
				<input type="hidden" name="subid" value="<?php echo (isset($_COOKIE['subid']))?$_COOKIE['subid']:'';?>">
				<input type="hidden" name="gclickid" value="<?php echo (isset($_COOKIE['gclickid']))?$_COOKIE['gclickid']:'';?>">
				<input type="hidden" name="transferPage" id="transferPage" value="planlist">
				<input type="hidden" name="coveragestartdate" id="coveragestartdate" value="<?php csd(); ?>">
			</div>
			<input value="<?php echo returnZipCode();?>" onKeyup="returncountyArr()" onkeypress="return isNumber(event)" size="5" maxlength="5" name="zipcode" id="zipcode" type="text" class="form-control error" placeholder="Enter ZIP Code" />
			<button type="button" onclick="frmFindaplan('<?php csd(); ?>')" class="btn btn-submit">Find Plans</button>
		</form>
		<div class="error-md light" id="zipcode_validate"></div>
	</div>

	<section class="partner-logo-block lander-partner-logo-block">
		<div class="container">
			<div class="partner-logo-subblock">
				<a href="<?= bs() ?>medicare-carriers/aetna"><img alt="aetna" src="<?= bs() ?>front_assets/image/landing/aetna.png" class="img-fluid"></a>
				<a href="<?= bs() ?>medicare-carriers/cigna"><img alt="cigna" src="<?= bs() ?>front_assets/image/landing/cigna.png" class="img-fluid"></a>
				<a><!--<href="javascript:void(0);">--><img alt="wellcare" src="<?= bs() ?>front_assets/image/landing/wellcare.png" class="img-fluid wellcare-logo"></a>
				<a href="<?= bs() ?>medicare-carriers/mutual-of-omaha"><img alt="moo" src="<?= bs() ?>front_assets/image/landing/moo.png" class="img-fluid"></a>
				<a href="<?= bs() ?>medicare-carriers/humana"><img alt="humana" src="<?= bs() ?>front_assets/image/landing/humana.png" class="img-fluid"></a>
			</div>
			<div class="partner-details">
				<p>With ClearMatch Medicare, you have access to <strong>over 4,000 Medicare Advantage plans nationwide</strong>, so you can feel confident that we can help you find the right plan for you and your budget needs.</p>
			</div>
		</div>
	</section>

	<section class="summary-block">
		<div class="container">
			<h1>Summary Of Medicare Advantage Key Benefits</h1>
			<p>Medicare Advantage plans often provide a variety of additional benefits at no extra cost! <br />Call us today or enter your zip code to see if you can get a Medicare Advantage plan that may include:</p>
			<div class="summary-subblock">
				<div class="row">
					<div class="col-md-4">
						<ul class="blue">
							<li>Prescriptions</li>
							<li>Dental</li>
							<li>Part B Premium Reduction</li>
							<li>Over-the-Counter items</li>
							<li>Insulin savings</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="black">
							<li>Telehealth</li>
							<li>Acupunture</li>
							<li>Chiropractic Services</li>
							<li>Hearing</li>
							<li>Vision</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="black">
							<li>Transportation</li>
							<li>Fitness Benefit</li>
							<li>Home Healthcare</li>
							<li>Mental Health Services</li>
							<li>Home Meal Delivery</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="getting-started-block">
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

	<section class="why-use-block">
		<div class="container">
			<h1>Why Use ClearMatch</h1>
			<p>ClearMatch Medicare provides support and advice throughout the lifetime of your selected Medicare plan. Our licensed Medicare sales agents are just a phone call away. There’s no cost to you and the call is absolutely free!</p>
			<div class="why-use-subblock">
				<div class="row">
					<div class="col-md-4">
						<div class="image-block">
							<img alt="" src="<?= bs() ?>front_assets/image/svg/we-know-icon.svg" class="img-fluid" />
						</div>
						<h1>We Know</h1>
						<p>Our main focus is Medicare. We know Medicare inside and out and our #1 goal is to make sure you understand it as well as we do.</p>
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
						<h1>Peace of</h1>
						<p>Whether you bought a plan from us 10 years ago or yesterday, we will stand by your side during this Medicare journey for as long as you need us.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="learn-more-block">
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
				<div class="button-block"><a href="javascript:void(0);" class="btn btn-learn-more">Learn More</a></div>
			</div>
		</div>
	</section>

	<!--footer-->
    <footer class="bg-blue1 foot">
        <div class="top-footer-block">
            <div class="container container-full footer-logo-block">
                <div class="row text-white">
                    <div class="col-12 col-md-12 col-xl-3 text-muted footer-logo">
                        <a class="navbar-brand" href="<?= bs() ?>"><img class="w-100" src="<?= bs() ?>front_assets/image/png/CMM-logo-white.png"></a>
                    </div>
                    <div class="col-12 col-md-9 col-xl-6 d-md-block footer-info-block">
						<span class="text-decoration-none text-white more-info">
							<b class="need">Need more information?</b> <span class="text-white">Speak to a Licensed Sales Agent</span> <br> 
							<span class="button-block  d-md-none dynamic_phoneno">
								<a class="number" href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>">CALL NOW!</a>
							</span>
							<h5 class="d-none dynamic_phoneno"><b><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?></b><b>/TTY 711</b></h5>
							<span class="button-block d-none d-md-inline dynamic_phoneno">
								<a class="number" href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>"><b><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?></b></a><b>/TTY 711</b>
							</span>
							<span class="text-white"><?php displayTime(); ?></span>
						</span>
					</div>
                    <div class="col-12 col-md-3 col-xl-3 find-plan d-none">
                        <a class="btn btn bg-gold text-white" href="<?= bs() ?>find-a-plan">
                            FIND A PLAN
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="container container-full footer-link-block">
                <div class="row text-white">
                    <div class="col-12 col-md-3 col-lg-3 col-xl-3 footer-menu">
                        <h5 class="footer-menu-heading">PRODUCTS</h5>
                        <div class="footer-submenu">
							<ul>
								<li><a href="<?= bs() ?>medicare-part-d" class="text-decoration-none"> Medicare Part D Plans</li>
								<li><a href="<?= bs() ?>medicare-supplement" class="text-decoration-none"> Medicare Supplement Plans</a></li>
								<li><a href="<?= bs() ?>medicare-advantage" class="text-decoration-none"> Medicare Advantage Plans</a></li>
								<li><a href="<?= bs() ?>blog/medicare/medicare-plan-finder" class="text-decoration-none"> Medicare Plan Finder</a></li>
								<li><a href="<?php echo bs();?>medicare-glossary" class="text-decoration-none"> Medicare Glossary</a></li>
							</ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3 col-xl-3 footer-menu">
                        <h5 class="footer-menu-heading">HELPFUL CONTENT</h5>
                        <div class="footer-submenu">    
							<ul>
								<li><a href="<?= bs() ?>blog/medicare/what-is-medicare" class="text-decoration-none"> What is Medicare</a></li>
								<li><a href="<?= bs() ?>blog/medicare/apply-for-medicare" class="text-decoration-none"> Apply for Medicare</a></li>
								<li><a href="<?= bs() ?>blog/medicare/medicare-enrollment" class="text-decoration-none"> Medicare Enrollment</a></li>
								<li><a href="<?= bs() ?>medicare-carriers" class="text-decoration-none"> Medicare Carriers</a></li>
								<li><a href="<?= bs() ?>medicare-by-state" class="text-decoration-none"> Medicare by State</a></li>
							</ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 col-lg-2 col-xl-3 footer-menu">
                        <h5 class="footer-menu-heading">COMPANY</h5>
                        <div class="footer-submenu">   
							<ul>
								<li><a href="<?= bs() ?>about-us" class="text-decoration-none"> About Us</a></li>
								<li><a href="https://www.hpone.com/careers.aspx" target="_blank" class="text-decoration-none" rel=”nofollow”> Careers</a></li>
								<li><a href="<?= bs() ?>contact-us" class="text-decoration-none"> Contact Us</a></li>
								<li><a href="<?= bs() ?>privacy-policy" class="text-decoration-none"> Privacy Policy</a></li>
								<li><a href="<?= bs() ?>licensing-legal" class="text-decoration-none"> Licensing Legal</a></li>
								<li><a href="<?= bs() ?>do-not-call" class="text-decoration-none"> Do Not Call Policy</a></li>
								<li><a href="<?= bs() ?>terms-of-service" class="text-decoration-none"> Terms of Service</a></li>
							</ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 col-xl-3 footer-menu">
                        <h5 class="footer-menu-heading">MEDICARE BY STATE</h5>
                        <div class="footer-submenu d-md-none">
                            <ul class="state-list-group">
                                <li><a href="<?= bs() ?>medicare-by-state/alabama">Alabama</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/alaska">Alaska</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/arizona">Arizona</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/arkansas">Arkansas</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/california">California</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/colorado">Colorado</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/connecticut">Connecticut</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/delaware">Delaware</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/florida">Florida</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/georgia">Georgia</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/hawaii">Hawaii</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/idaho">Idaho</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/illinois">Illinois</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/indiana">Indiana</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/iowa">Iowa</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/kansas">Kansas</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/kentucky">Kentucky</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/louisiana">Louisiana</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/maine">Maine</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/maryland">Maryland</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/massachusetts">Massachusetts</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/michigan">Michigan</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/minnesota">Minnesota</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/mississippi">Mississippi</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/missouri">Missouri</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/montana">Montana</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/nebraska">Nebraska</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/nevada">Nevada</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/new-hampshire">New Hampshire</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/new-jersey">New Jersey</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/new-mexico">New Mexico</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/new-york">New York</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/north-carolina">North Carolina</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/north-dakota">North Dakota</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/ohio">Ohio</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/oklahoma">Oklahoma</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/oregon">Oregon</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/pennsylvania">Pennsylvania</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/rhode-island">Rhode Island</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/south-carolina">South Carolina</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/south-dakota">South Dakota</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/tennessee">Tennessee</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/texas">Texas</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/utah">Utah</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/vermont">Vermont</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/virginia">Virginia</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/washingtondc">Washington D.C.</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/washington">Washington</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/west-virginia">West Virginia</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/wisconsin">Wisconsin</a></li>
                                <li><a href="<?= bs() ?>medicare-by-state/wyoming">Wyoming</a></li>
                            </ul>
                        </div>
                        <div class="footer-submenu d-none d-md-block">
                            <p>
							<a href="<?= bs() ?>medicare-by-state/alabama">AL</a>,
                                <a href="<?= bs() ?>medicare-by-state/alaska">AK</a>,
                                <a href="<?= bs() ?>medicare-by-state/arizona">AZ</a>,
                                <a href="<?= bs() ?>medicare-by-state/arkansas">AR</a>,
                                <a href="<?= bs() ?>medicare-by-state/california">CA</a>,
                                <a href="<?= bs() ?>medicare-by-state/colorado">CO</a>,
                                <a href="<?= bs() ?>medicare-by-state/connecticut">CT</a>,
                                <a href="<?= bs() ?>medicare-by-state/delaware">DE</a>,
                                <a href="<?= bs() ?>medicare-by-state/washingtondc">DC</a>,
                                <a href="<?= bs() ?>medicare-by-state/florida">FL</a>,
                                <a href="<?= bs() ?>medicare-by-state/georgia">GA</a>,
                                <a href="<?= bs() ?>medicare-by-state/hawaii">HI</a>,
                                <a href="<?= bs() ?>medicare-by-state/idaho">ID</a>,
                                <a href="<?= bs() ?>medicare-by-state/illinois">IL</a>,
                                <a href="<?= bs() ?>medicare-by-state/indiana">IN</a>,
                                <a href="<?= bs() ?>medicare-by-state/iowa">IA</a>,
                                <a href="<?= bs() ?>medicare-by-state/kansas">KS</a>,
                                <a href="<?= bs() ?>medicare-by-state/kentucky">KY</a>,
                                <a href="<?= bs() ?>medicare-by-state/louisiana">LA</a>,
                                <a href="<?= bs() ?>medicare-by-state/maine">ME</a>,
                                <a href="<?= bs() ?>medicare-by-state/maryland">MD</a>,
                                <a href="<?= bs() ?>medicare-by-state/massachusetts">MA</a>,
                                <a href="<?= bs() ?>medicare-by-state/michigan">MI</a>,
                                <a href="<?= bs() ?>medicare-by-state/minnesota">MN</a>,
                                <a href="<?= bs() ?>medicare-by-state/mississippi">MS</a>,
                                <a href="<?= bs() ?>medicare-by-state/missouri">MO</a>,
                                <a href="<?= bs() ?>medicare-by-state/montana">MT</a>,
                                <a href="<?= bs() ?>medicare-by-state/nebraska">NE</a>,
                                <a href="<?= bs() ?>medicare-by-state/nevada">NV</a>,
                                <a href="<?= bs() ?>medicare-by-state/new-hampshire">NH</a>,
                                <a href="<?= bs() ?>medicare-by-state/new-jersey">NJ</a>,
                                <a href="<?= bs() ?>medicare-by-state/new-mexico">NM</a>,
                                <a href="<?= bs() ?>medicare-by-state/new-york">NY</a>,
                                <a href="<?= bs() ?>medicare-by-state/north-carolina">NC</a>,
                                <a href="<?= bs() ?>medicare-by-state/north-dakota">ND</a>,
                                <a href="<?= bs() ?>medicare-by-state/ohio">OH</a>,
                                <a href="<?= bs() ?>medicare-by-state/oklahoma">OK</a>,
                                <a href="<?= bs() ?>medicare-by-state/oregon">OR</a>,
                                <a href="<?= bs() ?>medicare-by-state/pennsylvania">PA</a>,
                                <a href="<?= bs() ?>medicare-by-state/rhode-island">RI</a>,
                                <a href="<?= bs() ?>medicare-by-state/south-carolina">SC</a>,
                                <a href="<?= bs() ?>medicare-by-state/south-dakota">SD</a>,
                                <a href="<?= bs() ?>medicare-by-state/tennessee">TN</a>,
                                <a href="<?= bs() ?>medicare-by-state/texas">TX</a>,
                                <a href="<?= bs() ?>medicare-by-state/utah">UT</a>,
                                <a href="<?= bs() ?>medicare-by-state/vermont">VT</a>,
                                <a href="<?= bs() ?>medicare-by-state/virginia">VA</a>,
                                <a href="<?= bs() ?>medicare-by-state/washington">WA</a>,
                                <a href="<?= bs() ?>medicare-by-state/west-virginia">WV</a>,
                                <a href="<?= bs() ?>medicare-by-state/wisconsin">WI</a>,
                                <a href="<?= bs() ?>medicare-by-state/wyoming">WY</a>
							</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container container-full">
            <hr class="footer-border">
        </div>
        <div class="container footer-copyright-block container-full">
            <div class="row">
                <div class="col-12 col-md-9 col-lg-5 col-xl-5 footer-copyright-left-block">
                    <p>© 2021 HealthPlanOne, LLC, All Rights Reserved. <a href="<?= bs() ?>sitemap.xml">Site Map</a></p>
                </div>
                <div class="col-12 col-md-3 col-lg-3 col-xl-3 footer-copyright-middle-block">
                    <div class="d-flex justify-content-flex-end justify-content-center justify-content-md-end justify-content-xl-start">
                        <a href="https://www.facebook.com/ClearMatchMedicare" class="text-decoration-none" target="_blank"  rel=”nofollow”>
                            <img class="" src="<?= bs() ?>front_assets/image/png/facebook-square.png">
                        </a>
                        <a href="https://twitter.com/clear_match" class="text-decoration-none ml-3" target="_blank"  rel=”nofollow”>
                            <img class="" src="<?= bs() ?>front_assets/image/png/twitter-square.png">
                        </a>
                        <a href="https://www.instagram.com/clearmatchmedicare/" class="text-decoration-none ml-3" target="_blank"  rel=”nofollow”>
                            <img class="" src="<?= bs() ?>front_assets/image/png/instagram-square.png">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 col-xl-4 text-lg-right footer-copyright-right-block">
                    <a href="<?= bs() ?>"><img class="" src="<?= bs() ?>front_assets/image/png/BBB-Accredited-Business.png"></a>
                    <a href="<?= bs() ?>"><img class="" src="<?= bs() ?>front_assets/image/png/McAfee-Secure.png"></a>
                </div>
            </div>
        </div>
    </footer>

    <section class="footer-bottom">
        <div class="container container-full">
            						<p>
                            The ClearMatch Medicare website is operated by HealthPlanOne, LLC a licensed health insurance agency based in Connecticut; in California d/b/a HPOne Insurance Agency, license #OF30784. HealthPlanOne, is a licensed and certified representative of Medicare Advantage HMO, PPO and PFFS organizations and stand-alone prescription drug plans with a Medicare contract. ClearMatch™ Medicare is not affiliated with the federal government. Enrollment in any plan depends on contract renewal.
                        </p>
                        <p>
                            For a complete list of available plans please contact 1-800-MEDICARE (TTY users should call 1-877-486-2048), 24 hours a day/7 days a week or consult www.medicare.gov.
                        </p>
<p>PLEASE NOTE: Medicare Supplement insurance is available to those age 65 and older enrolled in Medicare Parts A and B and, in some states, to those under age 65 eligible for Medicare due to disability, ALS (Amyotrophic Lateral Sclerosis also known as Lou Gehrig’s disease) or End-Stage Renal disease.</p>

			<p>Medicare supplement plans cannot be held with Medicare Advantage plans.</p>
			
                           <p> The purpose of this communication is the solicitation of insurance. Contact will be made by an insurance agent/producer or insurance company.
                        </p>
                        <p>
                            Medicare supplement plans are not connected with or endorsed by the U.S. Government or the federal Medicare program.
                        </p>
                        <p>
                            The Centers for Medicare and Medicaid Services (CMS) does not review or approve Medicare Supplement plan information.
                        </p>
						<p>
							MULTIPLAN_HP1CMMWEB_2022 <br>Last Updated 06/21/2021
						</p>
        </div>
    </section>


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
							<a href="javascript:void(0)" onclick="submitFrmplan('drugBasket','findaplanFrm')" class="btn btn-drugs">ENTER DRUGS</a>
						</div>
						<div class="col-md-6">
							<a  href="javascript:void(0)" onclick="submitFrmplan('planlist','findaplanFrm')"  class="btn btn-plans">SEE PLANS</a>
							<span>(Enter Drugs Later)</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
