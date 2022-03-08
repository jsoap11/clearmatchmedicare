<div class="be-content">
	<div class="page-head">
		<h2 class="page-head-title">Videos</h2>
		<nav aria-label="breadcrumb" role="navigation">
			<ol class="breadcrumb page-head-nav">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Videos</a></li>
				<li class="breadcrumb-item active">Edit Video</li>
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
						<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
								class="mdi mdi-close" aria-hidden="true"></span></button>
						<strong>
							<?= $this->session->flashdata('success') ?>
						</strong>
					</div>
				</div>
				<?php endif; ?>
				<div class="card card-table card-border-color card-border-color-primary">
					<div class="card-header"> <span class="icon mdi mdi-web"></span> Edit Videos
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-6 offset-sm-2">
								<?= form_open('video/video/edit_video/'.$post_data[0]->id, array('id' => 'video_form_validation', 'class' => 'form-horizontal')); ?>

								<div class="form-group">
									<label class="control-label">Category </label>
									<select name="cat_id" class="form-control">
										<?php if ($post_data[0]->cat_id == 1){ ?>
										<option value="1" selected="selected">Medicare</option>
										<option value="2">Healthy Living</option>
										<option value="3">Reterment</option>
										<?php } ?>
										<?php if ($post_data[0]->cat_id == 2){ ?>
										<option value="1">Medicare</option>
										<option value="2" selected="selected">Healthy Living</option>
										<option value="3">Reterment</option>
										<?php } ?>
										<?php if ($post_data[0]->cat_id == 3){ ?>
										<option value="1">Medicare</option>
										<option value="2">Healthy Living</option>
										<option value="3" selected="selected">Reterment</option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label for="title" class="control-label">Title</label>
									<input type="text" id="title" name="title" class="form-control" required
										value="<?php echo $post_data[0]->title;?>" />
								</div>
								<div class="form-group">
									<label for="desc" class="control-label">Description</label>
									<textarea id="desc" name="desc" class="form-control" required />
									<?php echo $post_data[0]->desc;?></textarea>
								</div>
								<div class="form-group">
									<label for="youtube" class="control-label">YouTube Link</label>
									<input type="text" id="youtube" name="youtube" class="form-control" required
										value="<?php echo $post_data[0]->youtube;?>" />
								</div>
								<div class="form-group">
									<label for="thumble_image" class="btn btn-primary">Select Image</label>
									<input name="thumble_image" id="thumble_image" size="20" accept="image/*"
										style="visibility:hidden;" type="file">
									<div id="thumble_image_upload"><img style="height:200px;width:358px;"
											src="<?php echo base_url().$post_data[0]->image; ?>"
											id="thumble_image_post_img"></div>
									<input type="hidden" name="image" id="image"
										value="<?php echo $post_data[0]->image; ?>">
								</div>
								<div class="form-group">
									<label class="control-label">Status </label>
									<select name="is_active" class="form-control">
										<?php if ($post_data[0]->is_active == 1) : ?>
										<option value="1" selected="selected">Active</option>
										<option value="0">Inactive</option>
										<?php else : ?>
										<option value="1">Active</option>
										<option value="0" selected="selected">Inactive</option>
										<?php endif ?>
									</select>
								</div>
								<div class="form-group">
									<div class="col-md-offset-3">
										<input type="submit" class="finish btn-success btn" value="Submit">
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
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
	integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"
	crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha256-WqU1JavFxSAMcLP2WIOI+GB2zWmShMI82mTpLDcqFUg=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"
	integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"
	integrity="sha256-CgvH7sz3tHhkiVKh05kSUgG97YtzYNnWt6OXcmYzqHY=" crossorigin="anonymous"></script>



<div class="modal fade" id="modal_thum" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true"
	aria-hidden="true" data-backdrop="static" data-keyboard="false">
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

	$("body").on("change", "#thumble_image", function (e) {
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
			//	aspectRatio: 1.79,
			viewMode: 2,
		});
	}).on('hidden.bs.modal', function () {
		cropper_thum.destroy();
		cropper_thum = null;
	});

	$("#crop_thum").click(function () {
		canvas_thum = cropper_thum.getCroppedCanvas();

		canvas_thum.toBlob(function (blob) {
			url = URL.createObjectURL(blob);
			var reader = new FileReader();
			reader.readAsDataURL(blob);
			reader.onloadend = function () {
				var base64data = reader.result;

				$.ajax({
					type: "POST",
					dataType: "html",
					url: "<?= base_url('blogs/Posts/image_uploadls') ?>",
					data: { image: base64data },
					success: function (data) {
						console.log(data);
						$("#thumble_image_post_img").attr("src", '<?=base_url()?>' + data);
						$("#image").val(data);
						$modal_thum.modal('hide');
					}
				});
			}
		});
	})

</script>