<!-- Category Block -->
<section class="category-block">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumbs-block">
					<ul>
						<li><a href="<?= bs() ?>">Home</a></li>
						<li><a href="<?= bs() ?>blog">Blog</a></li>
						<li><span><?php echo $cate->cat_name;?></span></li>
					</ul>
				</div>
			</div>
		</div>
		<?php if($fetch_first_posts){ ?>
		<div class="row align-items-center">
			<div class="col-lg-7">
				<div class="left-block">
					<div class="image-block">
						<a href="<?php bs() ?>blog/<?php echo $fetch_first_posts[0]->cat_slug ?>/<?php echo $fetch_first_posts[0]->slug ?>" class="custom-link">

							<?php if($fetch_first_posts[0]->featured_img_alt ==''){ ?>
							<img alt="<?php echo $fetch_first_posts[0]->title ?>" src="<?= bs() ?><?php echo $fetch_first_posts[0]->featured_img;?>" class="img-fluid" />
							<?php }else{ ?>
							<img alt="<?php echo $fetch_first_posts[0]->featured_img_alt ?>" src="<?= bs() ?><?php echo $fetch_first_posts[0]->featured_img;?>" class="img-fluid" />
							<?php } ?>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="content-block">
					<a href="<?php bs() ?>blog/<?php echo $fetch_first_posts[0]->cat_slug ?>/<?php echo $fetch_first_posts[0]->slug ?>" class="custom-link">
						<span><?php echo date("M d, Y", strtotime($fetch_first_posts[0]->add_date)) ?></span>
						<h3><?php echo $fetch_first_posts[0]->title ?></h3>
						<p><?php echo $fetch_first_posts[0]->short_description ?></p>
						<h6 class="btn btn-outline-read-more">Read more</h6>	
					</a>
				</div>
			</div>
		</div>
		<?php } ?>

	</div>
</section>

<!-- Newsletter Block -->
<div class="container">
	<div class="newsletter">
		<div class="row">
			<div class="col-lg-7 col-md-8">
				<h4 id="newsletter_2_validate" txt="Subscribe to our Newsletter">Subscribe to our Newsletter</h4>
				<form id="frm_newsletter_2">
					<div class="input-group mb-3">
						<input name="newsletter_2" id="newsletter_2" type="text" class="form-control" placeholder="Please enter your email address" aria-label="Please enter your email address" aria-describedby="">
						<div class="input-group-append">
							<span class="input-group-text btn btn-default" onclick="fun_newsletter_2()">Subscribe</span>
						</div>
					</div>
				</form>
				<h6>By signing up, you are agreeing to receive emails from ClearMatch Medicare.</h6>
			</div>
			<div class="col-lg-5 col-md-4">
				<div class="share-block d-none d-md-block d-lg-block d-xl-block">
					<h6>Follow us</h6>
					<ul class="social-block">
						<li>
							<a href="https://www.facebook.com/ClearMatchMedicare" title="Share on Facebook" target="_blank">
								<img alt="Share on Facebook" src="https://clearmatchmedicare.com/front_assets/image/facebook.png" class="img-fluid">
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

<!-- Latest Post -->
<section class="latest-post-block helath-block">
	<div class="container">
		<div class="row text-sm-left text-center">
			<div class="col-sm-12">
				<div class="heading-block">
					<h1><?php echo $cate->cat_name;?></h1>
				</div>
			</div>
		</div>
		<?php if(count($posts)>0){?>
		<div class="row">
			<?php $i_loop=0;?>
			<?php foreach ($posts as $post): ?> 
			<?php if($i_loop<6){?>    
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
			<?php  } $i_loop++;?>
			<?php endforeach ?>   
		</div>
		<div class="row health-full-block">
			<?php $i_loop=0;?>
			<?php foreach ($posts as $post): ?> 
			<?php if($i_loop>5){?>
			<div class="col-md-12">
				<div class="latest-post-subblock">
					<a href="<?php bs() ?>blog/<?php echo $post->cat_slug ?>/<?php echo $post->slug ?>" class="custom-link">
						<div class="row">
							<div class="col-md-5">
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
							</div>
							<div class="col-md-7">
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
									<p><?php echo $post->short_description ?>...</p>
									<span class="btn btn-read-more">Read more</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<?php  } $i_loop++;?>
			<?php endforeach ?> 
		</div>
		<div class="text-right">
			<?php echo $links; ?>
		</div>
		<?php }else{ ?>
		<div class="row text-center">
			<div class="col-sm-12">
				<div class="heading-block">
					<h4>No record found</h4>
				</div>
			</div>
		</div>
		<?php } ?>
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
						<li>
							<a href="https://www.facebook.com/ClearMatchMedicare" title="Share on Facebook" target="_blank">
								<img alt="Share on Facebook" src="https://clearmatchmedicare.com/front_assets/image/facebook.png" class="img-fluid">
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
						<img alt="clearmatchmedicare-facebook" src="<?= bs() ?>front_assets/image/facebook.png" class="img-fluid" />
					</a>
				</li>
				<li>
					<a href="https://twitter.com/clear_match" target="_blank">
						<img alt="clearmatchmedicare-twitter" src="<?= bs() ?>front_assets/image/twitter.png" class="img-fluid" />
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/clearmatchmedicare/" target="_blank">
						<img alt="clearmatchmedicare-instagram" src="<?= bs() ?>front_assets/image/instagram.png" class="img-fluid" />
					</a>
				</li>
				<li>
					<a href="mailto:" target="_blank">
						<img alt="clearmatchmedicare-envelope" src="<?= bs() ?>front_assets/image/envelope.png" class="img-fluid" />
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