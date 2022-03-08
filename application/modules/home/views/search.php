<!-- Latest Post -->
<section class="latest-post-block helath-block result-block">
	<div class="container">
		<div class="row text-left">
			<div class="col-sm-12">
				<div class="heading-block"> 
					<h1>Search Results For: <span>"<?php echo $txt_search;?>"</span></h1>
				</div>
			</div>
		</div>
		<?php if(count($posts_search) >0){ ?>
		<div class="row health-full-block postList">
			<?php foreach ($posts_search as $post): ?>		
			<div class="col-md-12">
				<div class="latest-post-subblock">
					<a href="<?php bs() ?>blog/<?php echo $post->cat_slug ?>/<?php echo $post->slug ?>" class="custom-link">
						<div class="row">
							<div class="col-md-5">
								<div class="image-block">
									<img alt="<?php echo $post->cat_name ?>" src="<?php bs() ?><?= $post->featured_img ?>" class="img-fluid">
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
									<p><?php echo $post->short_description ?></p>
									<span class="btn btn-read-more">Read more</span>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<?php endforeach ?>
		</div>
		<?php } ?>
		<?php if(count($posts_search) >0){ ?>
		<?php if($postCount >10){ ?>
		<div class="row text-center">
			<div class="col-12">
				<input type="hidden" id="row" value="1">
				<input type="hidden" id="postCount" value="<?php echo $postCount; ?>">
				<input type="hidden" id="limit" value="10">
				<input type="hidden" id="search_txt" value="<?php echo $txt_search;?>">
				<a href="javascript:void(0);" id="search_loadBtn" class="btn btn-load-more">Load more articles</a>	
			</div>
		</div>
		<?php } ?>
		<?php }else{ ?>
		<div class="row text-left">
			<div class="col-12">
				<strong>No items were found matching your search request.</strong> Please revise your search or take a look at our latest blog posts below.
			</div>
		</div>
		<?php } ?>
	</div>
</section>
<!-- Latest Post -->
<?php if(count($posts_search) ==0){ ?>
<section class="latest-post-block latest-post-result-block result-block">
	<div class="container">
		<div class="row text-sm-left text-center">
			<div class="col-sm-12">
				<div class="heading-block">
					<h1>Latest Posts</h1>
				</div>
			</div>
		</div>
		<div class="row postList">
			<?php foreach ($lposts as $post): ?>	
			<div class="col-md-6 col-lg-4">
				<a href="<?php bs() ?>blog/<?php echo $post->cat_slug ?>/<?php echo $post->slug ?>" class="latest-post-subblock custom-link">
					<div class="image-block">
						<?php if($post->thumble_image==''){ ?>
						<img alt="<?php echo $post->cat_name ?>" src="<?php bs() ?><?= $post->featured_img ?>" class="img-fluid" />
						<?php }else{ ?>
						<img alt="<?php echo $post->cat_name ?>" src="<?php bs() ?><?= $post->thumble_image ?>" class="img-fluid" />
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
				<input type="hidden" id="postCount" value="<?php echo $lpostCount; ?>">
				<input type="hidden" id="limit" value="3">
				<a href="javascript:void(0);" id="loadBtn" class="btn btn-load-more">Load more articles</a><?php //echo $links; ?>
			</div>
		</div>
	</div>
</section>
<?php } ?>