<!-- General Template -->
<section class="general-template article-template">
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
					<input type="text"  value="<?php echo returnZipCode();?>" onkeypress="return isNumber(event)" maxlength="5" name="zip" id="zipcode_side" class="form-control" placeholder="Enter ZIP code">
					<button type="button" onclick="frmValidate_mobile()" class="btn btn-submit">FIND A PLAN</button>
				</form>
				<span id="zip_validate"></span>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-xl-9">
				<div class="left-block">
					<div class="breadcrumbs-block">
						<ul>
							<li><a href="<?= bs() ?>">Home</a></li>
							<li><a href="<?= bs() ?>blog">Blog</a></li>
							<li><a href="<?= bs() ?>blog/<?php echo $blog_categories->slug;?>"><?php echo $blog_categories->cat_name;?></a></li>
							<li><span><?=$cms_content[0]->title?></span></li>
						</ul>
					</div>
					<div class="image-block">
						<?php if($cms_content[0]->featured_img_alt ==''){ ?>
						<img alt="<?=$cms_content[0]->title?>" src="<?= bs().$cms_content[0]->featured_img ?>" class="img-fluid" />
						<?php }else{ ?>
						<img alt="<?=$cms_content[0]->featured_img_alt?>" src="<?= bs().$cms_content[0]->featured_img ?>" class="img-fluid" />
						<?php } ?>

					</div>
					<div class="content-block">
						<span><?php echo date("M d, Y", strtotime($post->add_date)) ?></span>
						<h1><?=$cms_content[0]->title?></h1>
						<div class="blog_cont"><?= $cms_content[0]->comment?></div>
					</div>
					<div class="share-block">
						<h6>Share this…</h6>
						<ul class="social-block">
							<li>
								<a href="<?php echo $setting->facebook ?>" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&quote=' + encodeURIComponent(document.URL)); return false;">
									<img alt="Share on Facebook" src="<?php echo bs();?>front_assets/image/facebook.png" class="img-fluid" />
								</a>
							</li>
							<li>
								<a href="<?php echo $setting->twitter ?>" target="_blank" title="Share on Twitter" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;">
									<img alt="Share on Twitter" src="<?php echo bs();?>front_assets/image/twitter.png" class="img-fluid" />
								</a>
							</li>
							<li>
								<a href="<?php echo $setting->Linkedin ?>" target="_blank" title="Share on instagram">
									<img alt="Share on LinkedIn" src="<?php echo bs();?>front_assets/image/instagram.png" class="img-fluid" />
								</a>
							</li>
							<li>
								<a href="#" onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' +  encodeURIComponent(document.URL)); return false;" target="_blank">
									<img src="<?= bs() ?>front_assets/image/envelope.png" class="img-fluid" />
								</a>
							</li>
						</ul>
					</div>
					<div class="comment-block">
						<span>0 Comments</span>
						<a href="javascript:void(0);" id="join-conversation" class="btn btn-comment">JOIN THE CONVERSATION</a>
						<div class="disqus-block">
							<!--The form Section-->
							<div id="disqus_thread"></div>
							<script>

								/**

										RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.

										LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

								var disqus_config = function () {
									this.page.url = '<?=$canonical;?>';// Replace PAGE_URL with your page's canonical URL variable
									this.page.identifier = <?=$cms_content[0]->id?>; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
								}; 
								(function() { // DON'T EDIT BELOW THIS LINE
									var d = document, s = d.createElement('script');
									s.src = 'https://medicareusa.disqus.com/embed.js';
									s.setAttribute('data-timestamp', +new Date());
									(d.head || d.body).appendChild(s);
								})();
							</script>
							<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript"comments> powered by Disqus.</a></noscript>
							<!--End of The form Section-->
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-xl-3">
				<div class="right-block">
					<div class="find-plan-block d-none d-lg-block dynamic_phoneno">
						<h6>Find a Plan today!</h6>
						<form id="get_sidebar_frm" method="get" action="<?php postUrl(); ?>/planlist" class="find-plan-form">
							<div style="display:none">
								<input type="hidden" id="gender" name="gender" value="F">	
								<input type="hidden" name="pgName" value="<?php echo $_SERVER['REQUEST_URI'];?>">
								<input type="hidden" name="category" value="MA">
								<input type="hidden" name="temp1" value="<?php echo (isset($_COOKIE['temp1']))?$_COOKIE['temp1']:'1440';?>">
								<input type="hidden" name="refid" value="<?php echo (isset($_COOKIE['refid']))?$_COOKIE['refid']:'';?>">
								<input type="hidden" name="subid" value="<?php echo (isset($_COOKIE['subid']))?$_COOKIE['subid']:'';?>">
								<input type="hidden" name="gclickid" value="<?php echo (isset($_COOKIE['gclickid']))?$_COOKIE['gclickid']:'';?>">
								<input type="hidden" name="transferPage" id="transferPage" value="planlist">
								<input type="hidden" name="coveragestartdate" value="<?php csd(); ?>" readonly="true">
								<input type="hidden" id="county_side" name="county" value="">
							</div>
							<input type="text"  value="<?php echo returnZipCode();?>" onkeypress="return isNumber(event)" maxlength="5" name="zipcode" id="zipcode_side" class="form-control rounded-0 border-0 shadow-none col-lg-12 mx-auto" placeholder="Enter ZIP code">
							<button type="button" onclick="frmValidate_sidebar()" class="btn btn-submit">FIND A PLAN</button>
						</form>
						<h5>Call a Licensed Sales Agent</h5>
						<h4><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?> TTY User: 711</h4>
						<span><?php displayTime(); ?></span>
					</div>
					<!--<div class="related-articles-left-block select-article-topic d-xl-none">
						<h6>Select a Topic</h6>
						<ul class="article-list">
							<li><a href="javascript:void(0);" target="_blank">Health related topic here</a></li>
							<li><a href="javascript:void(0);" target="_blank">Health related topic here</a></li>
							<li><a href="javascript:void(0);" target="_blank">Health related topic here</a></li>
							<li><a href="javascript:void(0);" target="_blank">Health related topic here</a></li>
							<li><a href="javascript:void(0);" target="_blank">Health related topic here</a></li>
						</ul>
					</div>-->
					<div class="select-topic-block">
						<h6 class="text-black">Select a Topic</h6>
						<ul>

							<?php foreach ($topics as $topic): ?>
							<li>
								<a href="<?= bs() ?>tags/<?php echo $blog_categories->slug;?>/<?php echo $topic->slug;?>"><?php echo $topic->cat_name; ?></a>
							</li>
							<?php endforeach ?>
						</ul>
					</div>
					<div class="related-articles-left-block d-none">
						<h6>Related Articles</h6>
						<ul class="article-list">
							<?php foreach ($related_post as $relatedPost): ?>
							<li>
								<a href="<?php bs() ?>blog/healthy-living/<?php echo $relatedPost->slug ?>" target="_blank"><?php echo $relatedPost->title; ?></a>
							</li>
							<?php endforeach ?>
						</ul>
					</div>
					<div class="related-articles-right-block related-articles-other-right-block">
						<h6 class="text-black">Related Articles</h6>
						<ul>
							<?php foreach ($related_post as $relatedPost): ?>
							<li>
								<a href="<?php bs() ?>blog/<?php echo $relatedPost->cat_slug ?>/<?php echo $relatedPost->slug ?>" class="custom-link">
									<?php if($relatedPost->featured_img_alt ==''){ ?>
									<img alt="<?php echo $relatedPost->title; ?>" src="<?= bs().$relatedPost->featured_img; ?>" class="img-fluid" />
									<?php }else{ ?>
									<img alt="<?php echo $relatedPost->featured_img_alt; ?>" src="<?= bs().$relatedPost->featured_img; ?>" class="img-fluid" />
									<?php } ?>

									<div class="content">
										<h6><?php echo $relatedPost->title; ?></h6>
										<span class="btn btn-read-more">Read More</span>
									</div>
								</a>
							</li>
							<?php endforeach ?>
						</ul>
					</div>
					<div class="tag-block">
						<h6 class="text-black">Tags</h6>
						<ul>
							<?php foreach ($tags as $tag): ?>
							<li><a href="<?php bs() ?>blog/tags/<?php echo $tag->slug ?>"><?php echo $tag->tag ?></a></li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="single-article-info-block">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-xl-8">
				<div class="single-article-info-subblock">
					<div class="row">
						<div class="col-md-3 col-xl-4">
							<?php if($post->user_img ==''){ ?>
							<img  alt="<?php echo $post->first_name ?> <?php echo $post->last_name ?>" src="<?php echo bs();?>uploads/blog_images/1591083665profile_image.png" class="img-fluid">
							<?php }else{ ?>
							<img alt="<?php echo $post->first_name ?> <?php echo $post->last_name ?>" src="<?php echo bs().$post->user_img; ?>" style=" border-radius: 50%;" class="img-fluid">
							<?php } ?>
						</div>
						<div class="col-md-8 col-xl-8">
							<h6><?php echo $post->first_name ?> <?php echo $post->last_name ?></h6>
							<p>
								<?php if($post->short_description){?> 
								<?php echo substr($post->short_description, 0, 200); ?><span id="dots">...</span><span id="more"><?php echo substr($post->short_description, 200, (strlen($post->short_description)-200)); ?></span><a href="javascript:void(0)" onclick="myFunction()" id="myBtn" class="btn btn-read-more">Read more</a>
								<?php } ?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-xl-4">
				<div class="other-articles">
					<h6>Articles by <?php echo $post->first_name ?> <?php echo $post->last_name ?></h6>

					<?php foreach ($post_by_author as $postbyauthor): ?>
					<div class="other-articles-list">
						<span><?php echo $postbyauthor->cat_name; ?></span>
						<h6><?php echo $postbyauthor->title; ?></h6>
						<?php echo substr($postbyauthor->short_description, 0, 50); ?><span id="dots">...</span>
						<a href="<?php bs() ?>blog/<?php echo $postbyauthor->cat_slug ?>/<?php echo $postbyauthor->slug ?>" class="btn btn-read-more">Read More</a>
					</div>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="latest-post-block recommend-block d-none d-md-block">
	<div class="container">
		<div class="row text-sm-left text-center">
			<div class="col-sm-12">
				<div class="heading-block">
					<p>Recommended for you</p>
				</div>
			</div>
		</div>
		<div class="row">
			<?php $loop=0;?>
			<?php foreach ($recommended_post as $recommendedpost): ?>
			<?php if($loop <3){?>
			<div class="col-md-6 col-lg-4">
				<a href="<?php bs() ?>blog/<?php echo $recommendedpost->cat_slug ?>/<?php echo $recommendedpost->slug ?>" class="latest-post-subblock custom-link">
					<div class="image-block">
						<?php if($recommendedpost->featured_img_alt ==''){ ?>
						<img alt="<?php echo $recommendedpost->cat_name ?>" src="<?= bs().$recommendedpost->featured_img; ?>" class="img-fluid" />
						<?php }else{ ?>
						<img alt="<?php echo $recommendedpost->featured_img_alt ?>" src="<?= bs().$recommendedpost->featured_img; ?>" class="img-fluid" />
						<?php } ?>

					</div>
					<div class="content-block">
						<div class="row">
							<div class="col-6">
								<h5><?php echo $recommendedpost->cat_name ?></h5>
							</div>
							<div class="col-6">
								<h6><?php echo date("M d, Y", strtotime($recommendedpost->add_date)) ?></h6>
							</div>
						</div>
						<h3><?php echo $recommendedpost->title; ?></h3>
						<p><?php echo $recommendedpost->short_description; ?></p>
						<span class="btn btn-read-more">Read more</span>
					</div>
				</a>
			</div>
			<?php } 
			$loop++;
			?>
			<?php endforeach ?>

		</div>
	</div>
</section>

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

