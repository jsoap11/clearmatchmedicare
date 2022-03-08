<?php
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
$tempUrlFPA .= '&coveragestartdate='.csdp();
$tempUrlFPA .= '&zipcode='.returnZipCode();
$redirectUrlFindAPlan= returnPostUrl().'/pgTransferMUSA.aspx?'.$tempUrlFPA;
?>
<div id="newtimer"></div>
<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<h1>Let’s find your plan together</h1>
				<h2>We know Medicare inside and out.</h2>				
				<?php if(isset($_COOKIE['back'])){ ?>
				<div class="btn-block"><a href="<?= $redirectUrlFindAPlan ?>" class="btn btn-find-a-plan">BACK TO PLANS</a></div>
				<?php }else{ ?>
				<div class="btn-block"><a href="<?= bs() ?>find-a-plan" class="btn btn-find-a-plan">FIND A PLAN</a></div>
				<?php } ?>
				<h6>Compare plans and find <br />the right coverage for you.</h6>
				<div class="d-none dynamic_phoneno">
					<p class="callNow">Call Now <a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>"><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?></a></p>
					<p class="hours"><?php displayTime(); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Partner Logo Block -->
<section class="partner-logo-block">
    <div class="container">
        <div class="partner-logo-subblock">
            <div class="logo-img"><img alt="aetna" src="<?= bs() ?>front_assets/image/png/aetna.png" class="img-fluid" /></div>
            <div class="logo-img"><img alt="cigna" src="<?= bs() ?>front_assets/image/png/cigna.png" class="img-fluid" /></div>
            <div class="logo-img"><img alt="humana" src="<?= bs() ?>front_assets/image/png/humana.png" class="img-fluid" /></div>
            <div class="logo-img moo-logo"><img alt="moo" src="<?= bs() ?>front_assets/image/png/moo.png" class="img-fluid" /></div>
            <div class="logo-img wellcare-logo"><img alt="wellcare" src="<?= bs() ?>front_assets/image/png/wellcare.png" class="img-fluid" /></div>
        </div>
    </div>
</section>

<!-- Get Benefit Block -->
<section class="get-benefit-block">
    <div class="container">
        <h2>Get the benefits you deserve</h2>
        <h6>Here’s how <br />ClearMatch Medicare <br/>works</h6>
        <ul>
            <li>We’ll educate you about the basics of Medicare.</li>
            <li>We’ll ask you about your doctors, drugs, and other needs.</li>
            <li>Based on your information, we will give you a personalized list to help you find the right plan for you.</li>
        </ul>
        <div class="get-benefit-subblock">
            <h6>That’s it!</h6>
            <h5>Apply online, <strong>call, email,</strong> or <strong>chat</strong> with a licensed sales agent anytime.</h5>
        </div>
        <div class="call-now-block">
            <div class="row d-flex align-items-center">
                <div class="offset-md-3 col-md-6">
                    <div class="call-now-left-block">
						<?php if(isset($_COOKIE['back'])){ ?>
						<a href="<?= $redirectUrlFindAPlan ?>" class="btn btn-get-started">BACK TO PLANS</a>
						<?php }else{ ?>
						<a href="<?= bs() ?>find-a-plan" class="btn btn-get-started">FIND A PLAN</a>
						<?php } ?>
                        <div class="d-none dynamic_phoneno">
							<h2>Call Now <br /><a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>"><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?></a></h2>
                        	<h6><?php displayTime(); ?></h6>
						</div>
                    </div>
                </div>
                <div class="col-md-3 d-none d-md-block">
                    <div class="call-now-right-block">
                        <a href="javascript:void(0);" data-target="#learnMore" data-toggle="modal">
							<img alt="Guarantee" src="<?= bs() ?>front_assets/image/png/CM-Guarantee.png" class="img-fluid" />
						</a>
						<a href="javascript:void(0);" data-target="#learnMore" data-toggle="modal" class="btn btn-learn-more">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade show" id="learnMore" tabindex="-1" role="dialog" aria-labelledby="learnMoreLabel" aria-modal="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="learnMoreLabel">ClearMatch<sup>&trade;</sup> Medicare Guarantee</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
		  <p>Here is our ClearMatch<sup>&trade;</sup> Medicare Guarantee: experienced licensed insurance agents who know Medicare, no pushy sales tactics, and no obligation to enroll.</p>
		</div>  
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-close">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Advice Block -->
<div class="advice-block d-lg-none d-md-none d-sm-none">
	<div class="container">
		<h1>Need Medicare Advice?</h1>
		<h4>Speak to a Licensed Sales Agent</h4>
		<div class="button-block dynamic_phoneno">
			<a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>" class="btn btn-call-now">Call now!</a>
		</div>
		<span><?php displayTime(); ?></span>
	</div>
</div>

<!-- Partner Logo Block -->
<section class="partner-logo-block as-seen-logo-block">
    <div class="container">
        <div class="partner-logo-heading-block">
            <h6>As seen in:</h6>
        </div>
        <div class="partner-logo-subblock">
            <a href="javascript:void(0);"><img alt="AARP" src="<?= bs() ?>front_assets/image/png/AARP-logo.png" class="img-fluid" /></a>
            <a href="javascript:void(0);"><img alt="WSJ" src="<?= bs() ?>front_assets/image/png/WSJ-logo.png" class="img-fluid" /></a>
            <a href="javascript:void(0);"><img alt="Parade" src="<?= bs() ?>front_assets/image/png/Parade-logo.png" class="img-fluid" /></a>
            <a href="javascript:void(0);"><img alt="Prevention" src="<?= bs() ?>front_assets/image/png/Prevention-logo.png" class="img-fluid" /></a>
            <a href="javascript:void(0);"><img alt="Readers-Digest" src="<?= bs() ?>front_assets/image/png/Readers-Digest-logo.png" class="img-fluid" /></a>
        </div>
    </div>
</section>

<!-- Understand Block -->
<section class="understand-block" id="GoToLearnMore">
    <div class="container">
        <div class="understand-heading-block">
            <h2>Understanding the basics</h2>
            <p>We know Medicare can be confusing. That’s why we created these easy-to-understand videos to help you understand Medicare and some common plans that may be available to you.</p>
        </div>
		<div class="understand-subblock">
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="video-column-block">
						<div class="video-block">
							<img alt="" src="<?= bs() ?>front_assets/image/video2.jpg" class="img-fluid poster-image" />
							<div class="overlay" data-target="#videoModal1" data-toggle="modal">
								<img alt="" src="<?= bs() ?>front_assets/image/png/play.png" class="img-fluid play-icon" />
							</div>
						</div>
						<div class="video-content-block">
							<h6>Medicare Basics: Learn the Lingo</h6>
							<p>Medicare uses enough jargon to fill an encyclopedia! In this video, we explain Original Medicare, Medicare Supplement, Medicare Advantage, and Medicare Part D.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="video-column-block">
						<div class="video-block">
							<img alt="" src="<?= bs() ?>front_assets/image/video3.jpg" class="img-fluid poster-image" />
							<div class="overlay" data-target="#videoModal2" data-toggle="modal">
								<img alt="" src="<?= bs() ?>front_assets/image/png/play.png" class="img-fluid" />
							</div>
						</div>
						<div class="video-content-block">
							<h6>4 Signs a Medicare Advantage Plan is Right for You</h6>
							<p>There are many reasons you may want to choose a Medicare Advantage plan. We break down the 4 reasons that this all-in-one plan might be right for you.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="video-column-block">
						<div class="video-block">
							<img alt="" src="<?= bs() ?>front_assets/image/video4.jpg" class="img-fluid poster-image" />
							<div class="overlay" data-target="#videoModal3" data-toggle="modal">
								<img alt="" src="<?= bs() ?>front_assets/image/png/play.png" class="img-fluid" />
							</div>
						</div>
						<div class="video-content-block">
							<h6>4 Signs a Medicare Supplement Plan is Right for You</h6>
							<p>If you like to travel and want to keep your current doctors, you may want to look into a Medicare Supplement plan. Take a look at this video to find more reasons a Medigap plan may work for you.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="understand-subblock d-none">
            <div class="row">
                <div class="col-xl-4">
                    <div class="understand-content-block">
                        <div class="image-block">
                            <img alt="shield-cross" src="<?= bs() ?>front_assets/image/png/shield-cross-icon.png" class="img-fluid" />
                        </div>
                        <h5>Medicare Advantage</h5>
                        <p>Covers medical expenses, hospital bills, prescription drugs and other extras.</p>
                        <a href="<?php echo bs();?>medicare-advantage" class="btn bg-btn-learn-more">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="understand-content-block">
                        <div class="image-block">
                            <img alt="hand-holding-usd" src="<?= bs() ?>front_assets/image/png/hand-holding-usd-icon.png" class="img-fluid" />
                        </div>
                        <h5>Medicare Supplement</h5>
                        <p>Pays for the 20% of doctor and hospital costs that Medicare doesn’t cover.</p>
                        <a href="<?php echo bs();?>medicare-supplement" class="btn bg-btn-learn-more">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="understand-content-block">
                        <div class="image-block">
                            <img alt="pill" src="<?= bs() ?>front_assets/image/png/pill-icon.png" class="img-fluid" />
                        </div>
                        <h5>Prescription Drug Plans</h5>
                        <p>Helps pay for medications and offers better value through preferred pharmacies.</p>
                        <a href="<?php echo bs();?>medicare-part-d" class="btn bg-btn-learn-more">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Rating Block -->
<section class="rating-block">
    <div class="container">
        <div class="rating-top-block">
            <div class="row">
                <div class="col-6 col-md-4">
                    <img  alt="Trustpilot" src="<?= bs() ?>front_assets/image/png/tt.png" class="img-fluid" />
                    <h5>Trustpilot</h5>
                    <p>Rating: 4.8</p>
                </div>
                <div class="col-6 col-md-4">
                    <img alt="Google Reviews" src="<?= bs() ?>front_assets/image/png/google.png" class="img-fluid" />
                    <h5>Google Reviews</h5>
                    <p>Rating: 4.6</p>
                </div>
                <div class="col-md-4">
                    <img alt="BBB Accredited Business" src="<?= bs() ?>front_assets/image/png/bbb.png" class="img-fluid" />
                    <h5>BBB Accredited Business</h5>
                    <p>Rating: A+</p>
                </div>
            </div>
        </div>
        <div class="rating-middle-block">
            <h2>Take it from customers who know us</h2>
			<p>These reviews represent our customers' experiences with ClearMatch Medicare.</p>
            <img alt="Trustpilot-stars" src="<?= bs() ?>front_assets/image/png/Trustpilot-stars.png" class="img-fluid" />
            <div class="rating-slider-block">
                <div class="swiper-container swiper3 rating-swiper">
                    <div class="swiper-wrapper text-left">
                        <div class="swiper-slide">
                            <p>“I worked with someone who was knowledgeable and personable. I never felt pressured, nor did I ever feel neglected either. Great experience. Recommended to all.”</p>
                            <h6>Andrew C.</h6>
                        </div>
                        <div class="swiper-slide">
                            <p>“The agent was a blessing to me. She answered all of my concerns and questions. She was very knowledgeable in explaining and signing me into a better plan for my needs. THANK YOU”</p>
                            <h6>Ruth C.</h6>
                        </div>
                        <div class="swiper-slide">
                            <p>“Great customer service! Kimberly always looks out for me and lets me know when a better option becomes available. Thanks!”</p>
                            <h6>Stephen T.</h6>
                        </div>
						<div class="swiper-slide">
                            <p>“April Scow is the best! We went through the plans line by line, discussed, and then I made my decision on a Med. Advantage plan. She was always right there answering all my questions...friendly and courteous. April, thanks for the follow up call, today. I'm registered in the Aetna site already and printed out my ID card. Could not have had a better, anxiety-free, experience.”</p>
                            <h6>Tim G.</h6>
                        </div>
						<div class="swiper-slide">
                            <p>“Marcy LaPage has been excellent to work with. She has provided us with several health care insurance options to choose from. She has researched what would be the best coverages for us based on our personal situation. She has truly been a great help to us. Thanks again Marcy”</p>
                            <h6>Daniel S.</h6>
                        </div>
						<div class="swiper-slide">
                            <p>“Aaron Williams was great. He explained options to me and what they meant to me. The whole Medicare thing is very confusing I thought, until Aaron took the time to really explain my options. I was very satisfied with his service.”</p>
                            <h6>Marlene W.</h6>
                        </div>
						<div class="swiper-slide">
                            <p>“My salesperson was Julie Casey, she walked me through the whole process. She asked questions that helped me pick the best option of health care co's for my needs.”</p>
                            <h6>Robert K.</h6>
                        </div>
						<div class="swiper-slide">
                            <p>“Suelane was very professional and helpful responding to my request for a better Medicare plan that meets my personal needs.”</p>
                            <h6>Flora P.</h6>
                        </div>
						<div class="swiper-slide">
                            <p>“The agent was so very helpful. He made sure that I was set up with everything that I needed before I retired. I am very happy to have him as my agent.”</p>
                            <h6>Lugene C.</h6>
                        </div>
                    </div><br><br>
                    <div class="swiper-pagination text-center pr-3 pb-3">
                        <div class="swiper-pagination wdt bg-white p-3 txt2 text-center mb-0"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rating-bottom-block">
            <img alt="Trustpilot_brandmark_gr-blk_RGB" src="<?= bs() ?>front_assets/image/png/Trustpilot_brandmark_gr-blk_RGB.png" class="img-fluid" />
        </div>
    </div>
</section>

<div class="modal fade videoModal" id="videoModal1" tabindex="-1" role="dialog" aria-labelledby="videoModal1" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<button type="button" class="close btn-round btn-primary" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="embed-responsive embed-responsive-16by9">
				<iframe src="//www.youtube.com/embed/T0_2cYpPq48?enablejsapi=1" frameborder="0" allowfullscreen id="video"></iframe>
			</div>
		</div>
	</div>
</div>

<div class="modal fade videoModal" id="videoModal2" tabindex="-1" role="dialog" aria-labelledby="videoModal2" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<button type="button" class="close btn-round btn-primary" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="embed-responsive embed-responsive-16by9">
				<iframe src="//www.youtube.com/embed/Z68jwdMYdfg?enablejsapi=1" frameborder="0" allowfullscreen id="video"></iframe>
			</div>
		</div>
	</div>
</div>

<div class="modal fade videoModal" id="videoModal3" tabindex="-1" role="dialog" aria-labelledby="videoModal3" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<button type="button" class="close btn-round btn-primary" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="embed-responsive embed-responsive-16by9">
				<iframe src="//www.youtube.com/embed/vjcClrQyHR0?enablejsapi=1" frameborder="0" allowfullscreen id="video"></iframe>
			</div>
		</div>
	</div>
</div>