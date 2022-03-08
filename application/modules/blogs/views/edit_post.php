<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/summernote/summernote-bs4.css" />

<div class="be-content">
	<div class="page-head">
		<h2 class="page-head-title">Edit Blogs</h2>
		<nav aria-label="breadcrumb" role="navigation">
			<ol class="breadcrumb page-head-nav">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Blogs</a></li>
				<li class="breadcrumb-item active">Edit Blogs</li>
			</ol>
		</nav>
	</div>
	<div class="main-content container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<?php if (!empty($this->session->flashdata('success'))) : ?>
				<div class="alert alert-contrast alert-success alert-dismissible" role="alert">
					<div class="icon"><span class="mdi mdi-check"></span></div>
					<div class="message">
						<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button>
						<strong> <?= $this->session->flashdata('success') ?> </strong>
					</div>
				</div>
				<?php endif; ?>
				<?php if (!empty(validation_errors())) : ?>

				<div class="alert alert-contrast alert-danger alert-dismissible" role="alert">
					<div class="icon"><span class="mdi mdi-check"></span></div>
					<div class="message">
						<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button>
						<strong> <?php echo validation_errors(); ?></strong>
					</div>
				</div>

				<?php endif ?>
				<div class="card card-table  card-border-color card-border-color-primary">
					<div class="card-header"> <span class="icon mdi mdi-edit"></span> Edit Blogs

					</div>
					<div class="card-body">
						<div class="row mx-2">
							<div class="col-sm-12">
								<form action="<?= base_url('blogs/Posts/edit_post') ?>" id="add1_edit_post" enctype="multipart/form-data" method="post" class="form-horizontal blog_settings row-border">
								   <div class="form-group">
									  <div class="row">
											<div class="col-sm-12 col-md-6">
												<label class="control-label">Primary Category </label>
												<select name="primary_cat_id" class="form-control" id="primary_cat_id" onchange="getSubCategory(this.value)" required>
													<?php foreach ($categories as $category) : ?>
													<option ref="<?php echo $category->slug ?>" value="<?php echo $category->id ?>" <?php foreach ($post_cats as $post_cat) : ?> <?php if ($category->id == $post_data->primary_cat_id) : ?> selected="selected" <?php endif ?> <?php endforeach ?>><?php echo $category->cat_name ?>
														<?php endforeach ?>
												</select>
											</div>
											<div class="col-sm-12 col-md-6">
												<label class="control-label">Secondary Category </label>
												<select name="category[]" class="form-control" id="category" multiple>
													<?php foreach ($categories as $category) : ?>
													<option value="<?php echo $category->id ?>" <?php foreach ($post_cats as $post_cat) : ?> <?php if ($category->id == $post_cat->cat_id) : ?> selected="selected" <?php endif ?> <?php endforeach ?>><?php echo $category->cat_name ?>
														<?php endforeach ?>
												</select>
											</div>
									  </div>
								   </div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6">
												<label class="control-label">
													Meta Title
												</label>
												<input type="text" name="page_title" id="page_title_" value="<?php echo $post_data->page_title ?>" class="form-control" required>
												<span id="titld1">60</span> Character(s) Remaining<br>
												<span id="temp_slag">
													<?php echo bs().'blog/'.$post_data->cslug.'/'.$post_data->pslug; ?>
													&nbsp;&nbsp;
													<span onclick="editSlug()" style="cursor:pointer;font-size: 18px;" class="icon mdi mdi-edit"></span>
												</span>
											</div>
											<div class="col-sm-6">
												<label class="control-label">
													Heading 1
												</label>
												<input type="text" name="title" id="title-1" maxlength="180" value="<?php echo $post_data->title ?>" class="form-control" required>
												<input type="hidden" name="post_id" value="<?php echo $this->uri->segment(4); ?>">
												
												<!-- <span onclick="editSlug()" style="cursor:pointer;font-size: 18px;" class="icon mdi mdi-edit"></span> -->
											</div>
											<input type="hidden" name="slug" id="slug" value="<?php echo $post_data->pslug ?>">
										</div>
									</div>  
									<div class="form-group">
										<div class="row">
											<div class="col-sm-12">
												<label class="control-label">
													301 Redirect
												</label>
												<input type="text" name="odd_redirecr" value="<?php echo isset($post_301->prv_url) ?>" class="form-control" >
											</div>
										</div>
									</div> 
									<div class="form-group">
										<div class="row">
											<div class="col-sm-12 col-md-6">
												<label class="control-label">
													Canonical Tag
												</label>
												<input type="text" name="canonical_tag"  id="canonical_tag" class="form-control" value="<?php echo $post_data->canonical_tag ?>" placeholder="Enter Canonical Tag" required>
											</div>
										 <div class="col-sm-12 col-md-6">
											<label class="control-label">No Index </label>
											<select name="no_index" class="form-control" required>
													<?php if ($post_data->no_index == 1) : ?>

													<option value="<?php echo $post_data->no_index ?>" selected="selected">Yes</option>
													<option value="0">No</option>

													<?php else : ?>
												
													<option value="1">Yes</option>
													<option value="<?php echo $post_data->no_index ?>" selected="selected">No</option>

													<?php endif ?>
												</select>
										 </div>
										</div>
									</div>                          
									<div class="form-group">
										<div class="row">
											<div class="col-sm-12 col-md-6">
												<label class="control-label">Meta Description</label>
												<textarea name="meta_desc" id="meta_desc" maxlength="180" class="form-control" rows="5" placeholder="Description Must be within 150 characters" required><?php echo $post_data->meta_desc ?></textarea>
												<span id="rchars">180</span> Character(s) Remaining
											</div>
											<div class="col-sm-12 col-md-6">
												<label class="control-label">Summary</label>
												<textarea name="short_description" id="short_description" maxlength="135" class="form-control" rows="5" required><?php echo $post_data->short_description ?></textarea>
												<span id="rchars1">135</span> Character(s) Remaining
											</div>
										</div>
									</div>

									<div class="form-group">
										<div class="row">
											<div class="col-sm-12 col-md-6">
												<label class="control-label">Select Tags</label>
												<select name="tags[]" class="form-control" id='tags' required multiple>
													<?php foreach ($tags as $tag) : ?>

													<option value="<?php echo $tag->id ?>" <?php foreach ($post_tags as $post_tag) : ?> <?php if ($tag->id == $post_tag->tag_id) : ?> selected="selected" <?php endif ?> <?php endforeach ?>><?php echo $tag->tag ?>
													</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="col-sm-12 col-md-6">
												<label class="control-label">Select Topic</label>
												<div id="topic_cont">
												<select name="topics[]" class="form-control" id="topics" multiple>
													<?php foreach ($topics as $topic) : ?>

													<option value="<?php echo $topic->id ?>" <?php foreach ($post_topics as $post_topic) : ?> <?php if ($topic->id == $post_topic->sub_cat_id) : ?> selected="selected" <?php endif ?> <?php endforeach ?>><?php echo $topic->cat_name ?>
													</option>
													<?php endforeach ?>
												</select>
												</div>
											</div>	
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-12 col-md-6">
												<label class="control-label">Banner Image(848px X 556px)</label>
												<p>
													<br>
													<input type="text" name="featured_img_alt" id="featured_img_alt" class="form-control" placeholder="Enter Banner Image Alt" value="<?php echo ($post_data->featured_img_alt=='')?$post_data->page_title:$post_data->featured_img_alt; ?>">
												</p>
												<p>
													<label for="featured_img" class="btn btn-primary">Select Image</label>
													<input name="featured_img" id="featured_img" size="20" accept="image/*" style="visibility:hidden;" type="file">
												</p>
												<div  id="featured_img_upload"><img style="height:390px;width:600px;" src="<?php echo base_url().$post_data->featured_img; ?>" id="featured_img_post_img"></div>
												<input type="hidden" name="featured_img_post" id="featured_img_post"  value="<?=$post_data->featured_img?>">
											</div>
											<div class="col-sm-12 col-md-6">
												<label class="control-label">Thumble Image(358px X 200px)</label>
												<p>
													<br>
													<input type="text" name="thumble_image_alt" id="thumble_image_alt" class="form-control" placeholder="Enter Thumble Image Alt" value="<?php echo ($post_data->thumble_image_alt=='')?$post_data->page_title:$post_data->thumble_image_alt; ?>">
												</p>
												
												<p>
													<label for="thumble_image" class="btn btn-primary">Select Image</label>
													<input name="thumble_image" id="thumble_image" size="20" accept="image/*" style="visibility:hidden;" type="file">
												</p>
												<div id="thumble_image_upload"><img style="height:200px;width:358px;" src="<?php echo base_url().$post_data->thumble_image; ?>"  id="thumble_image_post_img"></div>
												<input type="hidden" name="thumble_image_post" id="thumble_image_post" value="<?=$post_data->thumble_image?>">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-12 col-md-6">
												<label class="control-label">Status </label>
												<select name="status" class="form-control" required>
													<?php if ($post_data->status == 1) : ?>

													<option value="<?php echo $post_data->status ?>" selected="selected">Publish</option>

													<?php else : ?>

													<option value="<?php echo $post_data->status ?>" selected="selected">Unpublish</option>

													<?php endif ?>
													<option value="1">Publish</option>
													<option value="0">Unpublish</option>
												</select>
											</div>
											<div class="col-sm-12 col-md-6">
												<label class="control-label">Select author</label>
												<select name="author" id="author" class="form-control" required>
													<option value="">Select Author</option>
													<option selected="selected" value="<?php echo $post_author->id ?>">
														<?php echo $post_author->first_name.' '.$post_author->last_name; ?>
													</option>
													<?php foreach ($author as $data) : ?>
													<option value="<?php echo $data->id ?>"><?php echo $data->first_name.' '.$data->last_name; ?></option>
													<?php endforeach ?>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-12 col-md-6">
												<label class="control-label">Published Date</label>
												<input type="text" name="publish_date" value="<?php echo $post_data->publish_date ?>"  id="publish_date" class="form-control" placeholder="Enter Published Date" required>
											</div>
											<div class="col-sm-12 col-md-6">
												<label class="control-label">Update Date</label>
												<input type="text" name="add_date"  value="<?php echo $post_data->add_date ?>"  id="add_date" class="form-control" placeholder="Enter Add Date" required>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-12">
												<label class="control-label">Post Content </label>
												<?php
												$i=0;
												foreach ($post_comment as $data) : 
												$i++;
												?><br><br>
												<div class="field_wrapper">
													<div class="py-2">
														<!-- <input type="text" name="contentTitle[]"  class="form-control mb-3" value="<?php echo $data->comment_title ?>" class="form-control mb-3" placeholder="Enter Content Title" required> -->
														<textarea name="content[]" id="editor_<?php echo $i;?>" class="form-control editor" rows="5"><?php echo $data->	comment ?></textarea>
														<a href="javascript:void(0);"  class="remove_button btn btn-danger float-right mt-2 mb-2">Remove</a>
													</div>
												</div>
												<?php endforeach ?>
												<a href="javascript:void(0);" class="add_button btn btn-primary">Add More</a>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label"></label>
										<div class="col-sm-12 text-center">
											<button type="submit" class="btn btn-primary"> <span class="icon mdi mdi-blogger"></span> Save</button>
											<input type="hidden" id="fntPage" value="<?php echo 'blog/'.$post_data->cslug; ?>">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<style type="text/css">
		#featured_image {
			display: block;
			max-width: 100%;
		}
		#image_thum{
			display: block;
			max-width: 100%;
		}
		.modal-lg{
			max-width: 1000px !important;
		}
	</style>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha256-WqU1JavFxSAMcLP2WIOI+GB2zWmShMI82mTpLDcqFUg=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js" integrity="sha256-CgvH7sz3tHhkiVKh05kSUgG97YtzYNnWt6OXcmYzqHY=" crossorigin="anonymous"></script>

	<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="img-container">
						<div class="row">
							<div class="col-md-11">
								<img id="featured_image" src="https://avatars0.githubusercontent.com/u/3456749">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" id="crop">Crop</button>
				</div>
			</div>
		</div>
	</div>
	<script>
		var $modal = $('#modal');
		var featured_image = document.getElementById('featured_image');
		var cropper;

		$("body").on("change", "#featured_img", function(e){
			var files = e.target.files;
			var done = function (url) {
				featured_image.src = url;
				$modal.modal('show');
			};
			var reader;
			var file;
			var url;

			if (files && files.length > 0) {
				file = files[0];

				if (URL) {
					done(URL.createObjectURL(file));
				} else if (FileReader) {
					reader = new FileReader();
					reader.onload = function (e) {
						done(reader.result);
					};
					reader.readAsDataURL(file);
				}
			}
		});

		$modal.on('shown.bs.modal', function () {
			cropper = new Cropper(featured_image, {
				aspectRatio: 1.52,
				viewMode: 2,
			});
		}).on('hidden.bs.modal', function () {
			cropper.destroy();
			cropper = null;
		});

		$("#crop").click(function(){
			canvas = cropper.getCroppedCanvas({
				width: 848,
				height: 556,
			});

			canvas.toBlob(function(blob) {
				url = URL.createObjectURL(blob);
				var reader = new FileReader();
				reader.readAsDataURL(blob); 
				reader.onloadend = function() {
					var base64data = reader.result;  

					$.ajax({
						type: "POST",
						dataType: "html",
						url: "<?= base_url('blogs/Posts/image_uploadls') ?>",
						data: {image: base64data},
						success: function(data){
							console.log(data);
							$("#featured_img_post_img").attr("src",'<?=base_url()?>'+data);
							$("#featured_img_post").val(data);
							$modal.modal('hide');
						}
					});
				}
			});
		})

	</script>
	
	<div class="modal fade" id="modal_thum" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="img-container">
						<div class="row">
							<div class="col-md-11">
								<img id="image_thum" src="https://avatars0.githubusercontent.com/u/3456749">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal_thum">Cancel</button>
					<button type="button" class="btn btn-primary" id="crop_thum">Crop</button>
				</div>
			</div>
		</div>
	</div>

	<script>
		var $modal_thum = $('#modal_thum');
		var image_thum = document.getElementById('image_thum');
		var canvas_thum;

		$("body").on("change", "#thumble_image", function(e){
			var files = e.target.files;
			var done = function (url) {
				image_thum.src = url;
				$modal_thum.modal('show');
			};
			var reader;
			var file;
			var url;

			if (files && files.length > 0) {
				file = files[0];

				if (URL) {
					done(URL.createObjectURL(file));
				} else if (FileReader) {
					reader = new FileReader();
					reader.onload = function (e) {
						done(reader.result);
					};
					reader.readAsDataURL(file);
				}
			}
		});

		$modal_thum.on('shown.bs.modal', function () {
			cropper_thum = new Cropper(image_thum, {
				aspectRatio: 1.79,
				viewMode: 2,
			});
		}).on('hidden.bs.modal', function () {
			cropper_thum.destroy();
			cropper_thum = null;
		});

		$("#crop_thum").click(function(){
			canvas_thum = cropper_thum.getCroppedCanvas({
				width: 358,
				height: 200,
			});

			canvas_thum.toBlob(function(blob) {
				url = URL.createObjectURL(blob);
				var reader = new FileReader();
				reader.readAsDataURL(blob); 
				reader.onloadend = function() {
					var base64data = reader.result;  

					$.ajax({
						type: "POST",
						dataType: "html",
						url: "<?= base_url('blogs/Posts/image_uploadls') ?>",
						data: {image: base64data},
						success: function(data){
							console.log(data);
							$("#thumble_image_post_img").attr("src",'<?=base_url()?>'+data);
							$("#thumble_image_post").val(data);
							$modal_thum.modal('hide');
						}
					});
				}
			});
		})

	</script>