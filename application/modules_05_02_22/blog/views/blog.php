<!-- Article Page -->
<section class="article-page">
	<div class="looking-for-block d-md-none">
		<div class="container">
			<p>Looking for a Medicare Plan?</p>
			<h4>Get started by entering your zip code</h4>
			<div class="form-block">				
				<form id="get_sidebar_frm_mobile" method="get" action="<?php postUrl(); ?>/planlist" class="find-plan-form">
					<div style="display:none">
						<input type="hidden" id="gender" name="gender" value="F">
						<input type="hidden" name="pgName" value="<?php echo $_SERVER['REQUEST_URI'];?>">
						<input type="hidden" name="category" value="MA">
						<input type="hidden" name="temp1" value="<?php echo (isset($_COOKIE['temp1']))?$_COOKIE['temp1']:'1440';?>">
						<input type="hidden" name="refid" value="<?php echo (isset($_COOKIE['refid']))?$_COOKIE['refid']:'';?>">
						<input type="hidden" name="subid" value="<?php echo (isset($_COOKIE['subid']))?$_COOKIE['subid']:'';?>">
						<input type="hidden" name="gclickid" value="<?php echo (isset($_COOKIE['gclickid']))?$_COOKIE['gclickid']:'';?>">
						<input type="hidden" name="transferPage" id="transferPage" value="planlist">
						<input type="hidden" name="effectiveDate" value="<?php csd(); ?>" readonly="true">
						<input type="hidden" id="county_side" name="county" value="">
					</div>
					<input type="text"  value="<?php echo returnZipCode();?>" onkeypress="return isNumber(event)" maxlength="5" name="zip" id="zipcode_mobile" class="form-control" placeholder="Enter ZIP code">
					<button type="button" onclick="frmValidate_mobile()" class="btn btn-submit">FIND A PLAN</button>
				</form>
				<span id="zip_validate"></span>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="container custom-container custom-container1">
			<div class="row">
				<div class="col-lg-12 custom-column-block custom-column-block1">
					<a href="<?php bs() ?>blog/<?php echo $fetch_posts_blog_first[0]->cat_slug ?>/<?php echo $fetch_posts_blog_first[0]->slug ?>" class="custom-link">
						<div class="left-block">
							<div class="image-block">

								<?php if($fetch_posts_blog_first[0]->featured_img_alt ==''){ ?>
								<img alt="<?php echo $fetch_posts_blog_first[0]->title ?>" src="<?php bs() ?><?php echo $fetch_posts_blog_first[0]->featured_img ?>" class="img-fluid" />
								<?php }else{ ?>
								<img alt="<?php echo $fetch_posts_blog_first[0]->featured_img_alt ?>" src="<?php bs() ?><?php echo $fetch_posts_blog_first[0]->featured_img ?>" class="img-fluid" />
								<?php } ?>

							</div>
							<div class="content-block">
								<span class="d-md-none"><?php echo date("M d, Y", strtotime($fetch_posts_blog_first[0]->add_date)) ?></span>
								<h3><?php echo $fetch_posts_blog_first[0]->title ?></h3>
								<span class="d-md-block d-none"><?php echo date("M d, Y", strtotime($fetch_posts_blog_first[0]->add_date)) ?></span>
								<p><?php echo $fetch_posts_blog_first[0]->short_description ?></p>
								<h6 class="btn btn-read-more">Read more</h6>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="col-lg-12 advice-wrapper d-sm-none d-md-none d-lg-none">
			<!-- Advice Block -->
			<div class="advice-block blog-advice-block">
				<div class="container">
					<h1>Need Medicare Advice?</h1>
					<h4>Speak to a Licensed Sales Agent</h4>
					<div class="button-block dynamic_phoneno">
						<a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>" class="btn btn-call-now">Call now!</a>
					</div>
					<span><?php displayTime(); ?></span>
				</div>
			</div>
		</div>
		<div class="container custom-container custom-container2">
			<div class="row">
				<div class="col-lg-12 custom-column-block custom-column-block2">
					<div class="right-block">
						<h1>Trending Articles</h1>
						<div class="right-subblock">
							<a href="<?php bs() ?>blog/medicare/<?php echo $medi_post[0]->slug ?>" class="custom-link">
								<h6>MEDICARE</h6>
								<h4><?php echo $medi_post[0]->title ?></h4>
								<p><?php echo $medi_post[0]->short_description ?></p>
								<span class="btn btn-read-more">Read more</span>
							</a>
						</div>
						<div class="right-subblock">
							<a href="<?php bs() ?>blog/retirement/<?php echo $reti_post[0]->slug ?>" class="custom-link">
								<h6>RETIREMENT</h6>
								<h4><?php echo $reti_post[0]->title ?></h4>
								<p><?php echo $reti_post[0]->short_description ?></p>
								<span class="btn btn-read-more">Read more</span>
							</a>
						</div>
						<div class="right-subblock">
							<a href="<?php bs() ?>blog/healthy-living/<?php echo $heal_post[0]->slug ?>" class="custom-link">
								<h6>HEALTHY LIVING</h6>
								<h4><?php echo $heal_post[0]->title ?></h4>
								<p><?php echo $heal_post[0]->short_description ?></p>
								<span class="btn btn-read-more">Read more</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Latest Post -->
<section class="latest-post-block">
	<div class="container">
		<div class="row text-sm-left text-center">
			<div class="col-sm-12">
				<div class="heading-block">
					<h1>Latest Posts</h1>
				</div>
			</div>
		</div>
		<div class="row postList">
			<?php foreach ($posts as $post): ?>	
			<div class="col-md-6 col-lg-4">
				<a href="<?php bs() ?>blog/<?php echo $post->cat_slug ?>/<?php echo $post->slug ?>" class="latest-post-subblock custom-link">
					<div class="image-block">
						<?php if($post->thumble_image==''){ ?>
						<?php if($post->featured_img_alt ==''){ ?>
						<img alt="<?php echo $post->cat_name ?>" src="<?php bs() ?><?= $post->featured_img ?>" class="img-fluid" />
						<?php }else{ ?>
						<img alt="<?php echo $post->featured_img_alt ?>" src="<?php bs() ?><?= $post->featured_img ?>" class="img-fluid" />
						<?php } ?>
						<?php }else{ ?>
						<?php if($post->thumble_image_alt ==''){ ?>
						<img alt="<?php echo $post->cat_name ?>" src="<?php bs() ?><?= $post->thumble_image ?>" class="img-fluid" />
						<?php }else{ ?>
						<img alt="<?php echo $post->thumble_image_alt ?>" src="<?php bs() ?><?= $post->thumble_image ?>" class="img-fluid" />
						<?php } ?>

						<?php } ?>
					</div>
					<div class="content-block">
						<div class="row">
							<div class="col-6">
								<h5><?php echo $post->cat_name ?></h5>
							</div>
							<div class="col-6">
								<h6><?php echo date("M d, Y", strtotime($post->add_date)) ?></h6>
							</div>
						</div>
						<h3><?php echo $post->title ?></h3>
						<p><?php echo $post->short_description ?></p>
						<span class="btn btn-read-more">Read more</span>
					</div>
				</a>
			</div>
			<?php endforeach ?>
		</div>
		<div class="row text-center">
			<div class="col-12">
				<input type="hidden" id="row" value="1">
				<input type="hidden" id="postCount" value="<?php echo $postCount; ?>">
				<input type="hidden" id="limit" value="<?php echo $limit; ?>">
				<a href="javascript:void(0);" id="loadBtn" class="btn btn-load-more">Load more articles</a><?php //echo $links; ?>
			</div>
		</div>
	</div>
</section>

<!-- Newsletter Block -->
<div class="container">
	<div class="newsletter">
		<div class="row">
			<div class="col-lg-7 col-md-8">
				<h4 id="newsletter_validate" txt="Subscribe to our Newsletter">Subscribe to our Newsletter</h4>
				<form id="frm_newsletter">
					<div class="input-group mb-3">
						<input name="newsletter" id="newsletter" type="text" class="form-control" placeholder="Please enter your email address" aria-label="Please enter your email address" aria-describedby="">
						<div class="input-group-append">
							<span class="input-group-text btn btn-default" onclick="fun_newsletter()">Subscribe</span>
						</div>
					</div>
				</form>
				<h6>By signing up, you are agreeing to receive emails from ClearMatch Medicare.</h6>
			</div>
			<div class="col-lg-5 col-md-4">
				<div class="share-block d-none d-md-block d-lg-block d-xl-block">
					<h6>Follow us</h6>
					<ul class="social-block">
						<li><a href="https://www.facebook.com/ClearMatchMedicare" title="Share on Facebook" target="_blank">
							<img alt="Share on Facebook"  src="https://clearmatchmedicare.com/front_assets/image/facebook.png" class="img-fluid">
							</a>
						</li>
						<li>
							<a href="https://twitter.com/clear_match" target="_blank" title="Share on Twitter">
								<img alt="Share on Twitter" src="https://clearmatchmedicare.com/front_assets/image/twitter.png" class="img-fluid">
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/clearmatchmedicare/" target="_blank" title="Share on instagram">
								<img alt="Share on LinkedIn" src="https://clearmatchmedicare.com/front_assets/image/instagram.png" class="img-fluid">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="general-template blog-general-template d-lg-none">
	<div class="container">
		<div class="share-block">
			<h6>Share this…</h6>
			<ul class="social-block">
				<li>
					<a href="https://www.facebook.com/ClearMatchMedicare" target="_blank">
						<img alt="Share on Facebook" src="<?= bs() ?>front_assets/image/facebook.png" class="img-fluid" />
					</a>
				</li>
				<li>
					<a href="https://twitter.com/clear_match" target="_blank">
						<img alt="Share on Twitter"  src="<?= bs() ?>front_assets/image/twitter.png" class="img-fluid" />
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/clearmatchmedicare/" target="_blank">
						<img alt="Share on instagram" src="<?= bs() ?>front_assets/image/instagram.png" class="img-fluid" />
					</a>
				</li>
				<li>
					<a href="mailto:" target="_blank">
						<img alt="Share on envelope" src="<?= bs() ?>front_assets/image/envelope.png" class="img-fluid" />
					</a>
				</li>
			</ul>
		</div>
		<div class="related-articles-left-block">
			<h6>Related Articles</h6>
			<ul class="article-list">
				<li><a href="javascript:void(0);" target="_blank">The lower-body workout for active people</a></li>
				<li><a href="javascript:void(0);" target="_blank">The best and worst exercises for back pain</a></li>
				<li><a href="javascript:void(0);" target="_blank">4 Exercises that are better than crunches</a></li>
				<li><a href="javascript:void(0);" target="_blank">What is the best time of day to exercise</a></li>
				<li><a href="javascript:void(0);" target="_blank">5 Awesome Bodyweight Moves to Build Strength</a></li>
			</ul>
		</div>
		<div class="tag-block">
			<h6>Tags</h6>
			<ul>
				<li><a href="javascript:void(0);">MEDICARE</a></li>
				<li><a href="javascript:void(0);">MEDICARE PART D</a></li>
				<li><a href="javascript:void(0);">HEALTH CARE</a></li>
				<li><a href="javascript:void(0);">QUOTE</a></li>
				<li><a href="javascript:void(0);">ANNUAL ENROLLMENT</a></li>
				<li><a href="javascript:void(0);">COMPARE</a></li>
				<li><a href="javascript:void(0);">THE DONUT HOLE</a></li>
				<li><a href="javascript:void(0);">MEDICARE LIFESTYLE</a></li>
			</ul>
		</div>
	</div>
</section>




<!-- <div class="col-12 col-md-12 col-lg-4 mt-5 px-0 px-lg-5 order-3 order-lg-2">
   <h5 class="font-weight-bold aleo px-3 px-lg-1">Categories</h5>
   <?php //foreach ($categorys as $category): ?>
   <div class="mt-3 px-3 px-lg-1">
 <a href="<?php   //bs() ?>blog/categories/<?php // echo $category->slug ?>" class="text-decoration-none text-black-50 open-sans"><?php //echo $category->cat_name; ?></a>
   </div>
   <?php //endforeach ?>

  </div> -->


<div class="sticky-blog-block d-none">
	<a href="javascript:void(0);" class="btn-close">×</a>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 left-block">
				<h1>Get $144 back to your Social Security check</h1>
				<h2>Call to see if you're eligible <strong><a class="number dynamic_phoneno" href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>"><b><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?></b></a> / TTY 711 </strong></h2>
			</div>
			<div class="col-lg-4 right-block dynamic_phoneno">
				<a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?>" class="btn-callnow">Call Now!</a>
			</div>
		</div>
	</div>
</div>