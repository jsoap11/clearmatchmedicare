<div class="be-content">
	<div class="page-head">
		<h2 class="page-head-title">General Settings</h2>
		<nav aria-label="breadcrumb" role="navigation">
			<ol class="breadcrumb page-head-nav">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Site Configuration</a></li>
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
				<div class="card card-table card-border-color card-border-color-primary">
					<div class="card-header"> <span class="icon mdi mdi-refresh-alt"></span> Update Site Configuration
					</div>
					<div class="card-body">
						<div class="row mx-2">
							<div class="col-sm-12">
								<form action="<?= base_url('site_config/Set_up') ?>" method="post" class="form-horizontal row-border">
									<div class="form-group">
										<div class="row">
											<div class="col-sm-12 col-md-6">
												<label class="control-label">Site Name</label>
												<input type="text" name="site_name" value="<?php echo $settings[0]->site_name ?>" class="form-control" placeholder="Medicareusa">
											</div>
											<div class="col-sm-12 col-md-6">
												<label class="control-label">Admin Email</label>
												<input type="text" name="admin_email" value="<?php echo $settings[0]->admin_email ?>" class="form-control" placeholder="admin@mdicareusa.com">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-12 col-md-12">
												<label class="control-label">Site Meta Description</label>
												<textarea name="site_meta_desc" id="meta_desc" class="form-control" rows="5" ><?php echo trim($settings[0]->site_meta_desc); ?></textarea>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-12 col-md-12">
												<label class="control-label">Footer Content</label>
												<textarea name="common_terms_and_conditions" id="common_terms_and_conditions" class="form-control editor" rows="5" placeholder="" ><?php echo trim($settings[0]->common_terms_and_conditions); ?></textarea>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-12 col-md-12">
												<label class="control-label">Footer Content Update On</label>
												<input type="text" name="updateon" id="updateon" value="<?php echo $settings[0]->updateon ?>" class="form-control" placeholder="">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-12 col-md-12">
												<label class="control-label">Landing Privacy Policy</label>
												<textarea name="landing_privacy_policy" id="landing_privacy_policy" class="form-control editor" rows="5"><?php echo $settings[0]->landing_privacy_policy ?></textarea>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-12 col-md-12">
												<label class="control-label">Landing Licensing Legal</label>
												<textarea name="landing_licensing_legal" id="landing_licensing_legal" class="form-control editor" rows="5"><?php echo $settings[0]->landing_licensing_legal ?></textarea>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-12 col-md-12">
												<label class="control-label">Landing Do Not Call Policy</label>
												<textarea name="landing_do_not_call_policy" id="landing_do_not_call_policy" class="form-control editor" rows="5"><?php echo $settings[0]->landing_do_not_call_policy ?></textarea>
											</div>
										</div>
									</div>
									<div class="form-group text-center">
										<button type="submit" class="btn btn-info"> <span class="icon mdi mdi-settings"></span> Save </button>
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
</div>