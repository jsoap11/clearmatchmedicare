		<div class="jumbotron resource-jumbotron">
			<img alt="" src="<?= bs() ?>front_assets/image/svg/help-icon.svg" class="img-fluid help-icon d-md-none" />
			<img alt="" src="<?= bs() ?>front_assets/image/svg/banner-icon.svg" class="img-fluid right-icon" />
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<h6>Welcome to</h6>
						<h1>ClearMatch Medicare’s Resource Center</h1>
						<p>We want to make sure you understand everything there is to know about Medicare. Explore our library of Medicare terms, learn all about Medicare from our video series, download our Medicare learning guides, and so much more.</p>
					</div>
				</div>
			</div>
			<div class="mobile-jumbotron d-md-none">
				<a href="#videos">Start Learning <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
				<img alt="" src="<?= bs() ?>front_assets/image/svg/banner-below-icon.svg" class="img-fluid below-icon d-md-none" />
			</div>
		</div>
		
		<div class="video-wrapper" id="videos">
			<div class="container">
				<div class="heading-block">
					<h1>Learn About Medicare</h1>
				</div>
				<div class="video-tab-block">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
					  <li class="nav-item">
						<a class="nav-link active" id="medicare-tab" data-toggle="tab" href="#medicare" role="tab" aria-controls="medicare" aria-selected="true">Medicare</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" id="healthy-living-tab" data-toggle="tab" href="#healthy-living" role="tab" aria-controls="healthy-living" aria-selected="false">Healthy Living</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" id="retirement-tab" data-toggle="tab" href="#retirement" role="tab" aria-controls="retirement" aria-selected="false">Retirement</a>
					  </li>
					</ul>
					<div class="tab-content" id="myTabContent">
					  <div class="tab-pane fade show active" id="medicare" role="tabpanel" aria-labelledby="medicare-tab">
						  <div class="row">
							  <?php 
								foreach($videos as $video){
									
							  	if($video->cat_id ==1){ 
							  ?>
							  <div class="col-md-6 col-lg-4">
								  <div class="video-column-block">
									<div class="video-block">
										<img alt="" src="<?= bs() ?><?php echo $video->image;?>" class="img-fluid poster-image" />
										<div class="overlay" data-target="#videoModal<?php echo $video->id;?>" data-toggle="modal">
											<img alt="" src="<?= bs() ?>front_assets/image/png/play.png" class="img-fluid play-icon" />
                                        </div>
									</div>
									<div class="video-content-block">
										<h6><?php echo $video->title;?></h6>
										<p><?php echo $video->desc;?></p>
									</div>
								</div>
							  </div>
							  <?php } }?>
							  
							  
							  
							  
							 
						  </div>
					  </div>
					  <div class="tab-pane fade" id="healthy-living" role="tabpanel" aria-labelledby="healthy-living-tab">
						  <div class="row">
							   <?php 
								foreach($videos as $video){
									
							  	if($video->cat_id ==2){ 
							  ?>
							  <div class="col-md-6 col-lg-4">
								  <div class="video-column-block">
									<div class="video-block">
										<img alt="" src="<?= bs() ?><?php echo $video->image;?>" class="img-fluid poster-image" />
										<div class="overlay" data-target="#videoModal<?php echo $video->id;?>" data-toggle="modal">
											<img alt="" src="<?= bs() ?>front_assets/image/png/play.png" class="img-fluid play-icon" />
                                        </div>
									</div>
									<div class="video-content-block">
										<h6><?php echo $video->title;?></h6>
										<p><?php echo $video->desc;?></p>
									</div>
								</div>
							  </div>
							  <?php } }?>
							 
							  
						  </div>
					  </div>
					  <div class="tab-pane fade" id="retirement" role="tabpanel" aria-labelledby="retirement-tab">
						  <div class="row">
							   <?php 
								foreach($videos as $video){
									
							  	if($video->cat_id ==3){ 
							  ?>
							  <div class="col-md-6 col-lg-4">
								  <div class="video-column-block">
									<div class="video-block">
										<img alt="" src="<?= bs() ?><?php echo $video->image;?>" class="img-fluid poster-image" />
										<div class="overlay" data-target="#videoModal<?php echo $video->id;?>" data-toggle="modal">
											<img alt="" src="<?= bs() ?>front_assets/image/png/play.png" class="img-fluid play-icon" />
                                        </div>
									</div>
									<div class="video-content-block">
										<h6><?php echo $video->title;?></h6>
										<p><?php echo $video->desc;?></p>
									</div>
								</div>
							  </div>
							  <?php } }?>
							  
							 
						  </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="help-block">
			<div class="help-subblock">
				<img alt="" src="<?= bs() ?>front_assets/image/png/cta-insert-diamonds-bg@2x.png" class="img-fluid left-icon" />
				<div class="container">
					<h1>We're Here to Help!</h1>
					<p>Our caring, licensed insurance agents are ready to help you find a plan.</p>
					<h2 class="d-none d-md-block dynamic_phoneno"><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?> / TTY 711</h2>
					<div class="button-block d-md-none dynamic_phoneno">
						<a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>" class="btn btn-call-now">Call Now!</a>
					</div>
					<h6><?php displayTime(); ?></h6>
				</div>
				<img alt="" src="<?= bs() ?>front_assets/image/svg/help-icon.svg" class="img-fluid right-icon" />
			</div>
		</div>
		
		<div class="learning-guides-block" id="learning-guides">
			<div class="container">
				<div class="heading-block">
					<h1>Learning Guides</h1>
					<h5>Improve your Medicare knowledge and retirement strategies</h5>
					<p>There are so many things that you need to know about Medicare, not to mention managing retirement, and staying healthy at any age. We put together these guides to help you navigate these life stages while providing peace of mind.</p>
				</div>
				<div class="learning-guides-subblock">
					<div class="row">
						<div class="col-md-6 col-lg-3">
							<div class="learning-guides-content-block">
								<div class="image-block">
									<img alt="" src="<?= bs() ?>front_assets/image/svg/learning-icon1.svg" class="img-fluid" />
								</div>
								<div class="details-block">
									<h3>A Beginners Guide to Medicare</h3>
									<p>Whether you’re turning 65 or just about to retire, we’ve listed everything you need to know about Medicare and how to get started.</p>
									<div class="button-block"><a href="<?= bs() ?>pdf/A Beginners Guide to Medicare.pdf" target="_blank" class="btn btn-orange">READ NOW</a></div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="learning-guides-content-block">
								<div class="image-block">
									<img alt="" src="<?= bs() ?>front_assets/image/svg/learning-icon2.svg" class="img-fluid" />
								</div>
								<div class="details-block">
									<h3>The Medicare Annual Enrollment Workbook</h3>
									<p>Take our quiz on which Medicare plan is right for you, evaluate your current plan, plus uncover Medicare myths that may cost you money.</p>
									<div class="button-block"><a href="<?= bs() ?>pdf/The Medicare Annual Enrollment Workbook.pdf" target="_blank" class="btn btn-orange">READ NOW</a></div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="learning-guides-content-block learning-guides-content-block2">
								<div class="image-block">
									<img alt="" src="<?= bs() ?>front_assets/image/svg/learning-icon3.svg" class="img-fluid" />
								</div>
								<div class="details-block">
									<h3>Retirees Guide to Money</h3>
									<p>Learn how to stretch your retirement savings, find hidden sources of income, and enjoy life more while spending less!</p>
									<div class="button-block"><a href="<?= bs() ?>pdf/Retirees Guide to Money.pdf" target="_blank" class="btn btn-orange">READ NOW</a></div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="learning-guides-content-block learning-guides-content-block2">
								<div class="image-block">
									<img alt="" src="<?= bs() ?>front_assets/image/svg/learning-icon4.svg" class="img-fluid" />
								</div>
								<div class="details-block">
									<h3>How to be healthy at any age</h3>
									<p>We’ve listed the 25 ways to help you live your healthiest life, including volunteering, reading, playing sports, and acting like a kid!</p>
									<div class="button-block"><a href="<?= bs() ?>pdf/Healthy at Any Age.pdf" target="_blank" class="btn btn-orange">READ NOW</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php  foreach($videos as $video){ ?>
<div class="modal fade videoModal" id="videoModal<?php echo $video->id;?>" tabindex="-1" role="dialog" aria-labelledby="videoModal1" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<button type="button" class="close btn-round btn-primary" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="embed-responsive embed-responsive-16by9">
				<iframe src="<?php echo $video->youtube;?>" frameborder="0" allowfullscreen id="video"></iframe>
			</div>
		</div>
	</div>
</div>
<?php  } ?>

