<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css" />
<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" />

<div class="be-content">
	<div class="page-head">
		<h2 class="page-head-title">Blogs Listing Order</h2>
		<nav aria-label="breadcrumb" role="navigation">
			<ol class="breadcrumb page-head-nav">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Resources</a></li>
				<li class="breadcrumb-item active"> Blogs Listing Order</li>
			</ol>
		</nav>
	</div>
	<div class="main-content container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card card-table  card-border-color card-border-color-primary">
					<div class="card-header"> <span class="icon mdi mdi-blogger"></span> Blogs Listing Order

					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12">
								<div>
									<div class="tab-container">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs nav-tabs-primary nav-tabs-classic" role="tablist">
											<li role="presentation" class="active">
												<a href="#blog" aria-controls="blog" class="nav-link active show" role="tab" data-toggle="tab">Blog</a>
											</li>
											<li role="presentation">
												<a href="#medicare" aria-controls="medicare" class="nav-link" role="tab" data-toggle="tab">Medicare</a>
											</li>
											<li role="presentation">
												<a href="#retirement" aria-controls="retirement" class="nav-link" role="tab" data-toggle="tab">Retirement</a>
											</li>
											<li role="presentation">
												<a href="#healthy_living" aria-controls="healthy_living" class="nav-link" role="tab" data-toggle="tab">Healthy Living</a>
											</li>
										</ul>
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane active" id="blog">
												<div>
													<div class="h-50 d-inline-block" style="width: 80%;">
														<?php 
	if (!empty($posts)){
		foreach ($posts as $post){
			if($post->is_blog_first ==1){
														?>
														<p><strong>Default Post Name:</strong><?php echo $post->title; ?></p>
														<?php 
			} 
		} 
	}
														?>
													</div>
													<div class="h-50 d-inline-block" style="width: 15%;">
														<button class="btn btn-primary btn-lg tab_confirm" style="float:right;" onclick='changePostOrders("blog")'>Update</button>
													</div>
												</div>
												<form id="form_blog">
													<table class="table table-striped table-hover table-fw-widget" id="blog_table">
														<thead>
															<tr>
																<td style="text-align: center; width:36%;"><strong>Post Title</strong></td>
																<td style="text-align: center; width:8%;"><strong>Ordering</strong></td>
																<td style="text-align: center; width:8%;"><strong>Default</strong></td>
															</tr>
														</thead>
														<tbody>
															<?php if (!empty($posts)) : ?>
															<?php
															foreach ($posts as $post) :
															?>
															<tr>
																<td style=" width:263px;"><?php echo $post->title ?></td>
																<td style="text-align: center; width:50px;">
																	<input value="<?php echo $post->ordering ?>" type="text"  maxlength="2" name="order_blog[<?php echo $post->id ?>]" onkeypress="return isNumber(event)">
																</td>
																<td style="text-align: center; width:50px;">
																	<input <?php if($post->is_blog_first ==1){ echo 'checked'; } ?> type="radio" name="defult_blog"  value="<?php echo $post->id ?>">
																</td>
															</tr>

															<?php endforeach ?>

															<?php else : ?>

															<tr>
																<td colspan="5" align="center">
																	<p>
																		No data available
																	</p>
																</td>
															</tr>

															<?php endif ?>
														</tbody>
													</table>
												</form>
											</div>
											<div role="tabpanel" class="tab-pane" id="medicare">
												<div>
													<div class="h-50 d-inline-block" style="width: 80%;">
														<?php if (!empty($posts)){
	foreach ($posts as $post){
														?>
														<?php
		if($post->primary_cat_id == 41 && $post->is_cat_first == 1){
														?>
														<p><strong>Default Post Name:</strong><?php echo $post->title; ?></p>

														<?php  } ?>
														<?php
		if($post->primary_cat_id == 41 && $post->is_cat_trending == 1){
														?>
														<p><strong>Trending Post Name:</strong><?php echo $post->title; ?></p>

														<?php  } 
	} 
}
														?>
													</div>
													<div class="h-50 d-inline-block" style="width: 15%;">
														<button class="btn btn-primary btn-lg tab_confirm" style="float:right;"  onclick='changePostOrders("medicare")'>Update</button>
													</div>
												</div>
												<form id="form_medicare">
													<table class="table table-striped table-hover table-fw-widget" id="medicare_table">
														<thead>
															<tr>
																<td style="text-align: center; width:36%;"><strong>Post Title</strong></td>
																<td style="text-align: center; width:8%;"><strong>Ordering</strong></td>
																<td style="text-align: center; width:8%;"><strong>Default</strong></td>
																<td style="text-align: center; width:8%;"><strong>Trending</strong></td>
															</tr>
														</thead>
														<tbody>
															<?php if (!empty($posts)) : ?>
															<?php
															foreach ($posts as $post) :
															?>
															<?php if($post->primary_cat_id ==41){?>
															<tr>
																<td style=" width:263px;"><?php echo $post->title ?></td>

																<td style="text-align: center; width:50px;">
																	<input value="<?php echo $post->ordering_medicare ?>" type="text" maxlength="2" name="order_medicare[<?php echo $post->id ?>]" onkeypress="return isNumber(event)">
																</td>
																<td style="text-align: center; width:50px;">
																	<input <?php if($post->is_cat_first ==1){ echo 'checked'; } ?> type="radio" name="defult_medicare"  value="<?php echo $post->id ?>">
																</td>
																<td style="text-align: center; width:50px;">
																	<input <?php if($post->is_cat_trending ==1){ echo 'checked'; } ?> type="radio" name="trending_medicare"  value="<?php echo $post->id ?>">
																</td>

															</tr>

															<?php } ?>
															<?php endforeach ?>

															<?php else : ?>

															<tr>
																<td colspan="5" align="center">
																	<p>
																		No data available
																	</p>
																</td>
															</tr>

															<?php endif ?>
														</tbody>
													</table>
												</form>
											</div>
											<div role="tabpanel" class="tab-pane" id="retirement">
												<div>
													<div class="h-50 d-inline-block" style="width: 80%;">
														<?php if (!empty($posts)){
	foreach ($posts as $post){
														?>
														<?php
		if($post->primary_cat_id == 43 && $post->is_cat_first == 1){
														?>
														<p><strong>Default Post Name:</strong><?php echo $post->title; ?></p>
														<?php  } ?>
														<?php
		if($post->primary_cat_id == 43 && $post->is_cat_trending == 1){
														?>
														<p><strong>Trending Post Name:</strong><?php echo $post->title; ?></p>
														<?php  
		} 
	} 
}
														?>	
													</div>
													<div class="h-50 d-inline-block" style="width: 15%;">
														<button class="btn btn-primary btn-lg" style="float:right;"  onclick='changePostOrders("retirement")'>Update</button>
													</div>
												</div>
												<form id="form_retirement">
													<table class="table table-striped table-hover table-fw-widget" id="retirement_table">
														<thead>

															<tr>
																<td style="text-align: center; width:36%;"><strong>Post Title</strong></td>
																<td style="text-align: center; width:8%;"><strong>Ordering</strong></td>
																<td style="text-align: center; width:8%;"><strong>Default</strong></td>
																<td style="text-align: center; width:8%;"><strong>Trending</strong></td>
															</tr>
														</thead>
														<tbody>
															<?php if (!empty($posts)) : ?>
															<?php
															foreach ($posts as $post) :
															?>
															<?php if($post->primary_cat_id ==43){?>

															<tr>
																<td style=" width:263px;"><?php echo $post->title ?></td>
																<td style="text-align: center; width:50px;">
																	<input value="<?php echo $post->ordering_retirement ?>" type="text"  maxlength="2" name="order_retirement[<?php echo $post->id ?>]" onkeypress="return isNumber(event)">
																</td>
																<td style="text-align: center; width:50px;">
																	<input <?php if($post->is_cat_first ==1){ echo 'checked'; } ?> type="radio" name="defult_retirement"  value="<?php echo $post->id ?>">
																</td>
																<td style="text-align: center; width:50px;"> 
																	<input <?php if(trim($post->is_cat_trending)==1){ echo 'checked'; } ?> type="radio" name="trending_retirement"  value="<?php echo $post->id ?>">
																</td>
															</tr>
															<?php } ?>

															<?php endforeach ?>

															<?php else : ?>

															<tr>
																<td colspan="5" align="center">
																	<p>
																		No data available
																	</p>
																</td>
															</tr>
															<?php endif ?>
														</tbody>
													</table>
												</form>
											</div>
											<div role="tabpanel" class="tab-pane" id="healthy_living">
												<div>
													<div class="h-50 d-inline-block" style="width: 80%;">
														<?php if (!empty($posts)){
	foreach ($posts as $post){
														?>
														<?php
		if($post->primary_cat_id == 44 && $post->is_cat_first == 1){
														?>
														<p><strong>Default Post Name:</strong><?php echo $post->title; ?></p>
														<?php  } ?>
														<?php
		if($post->primary_cat_id == 44 && $post->is_cat_trending == 1){
														?>
														<p><strong>Trending Post Name:</strong><?php echo $post->title; ?></p>
														<?php  
		} 
	} 
}
														?>	
													</div>
													<div class="h-50 d-inline-block" style="width: 15%;">
														<button class="btn btn-primary btn-lg" style="float:right;" onclick='changePostOrders("healthy")'>Update</button>
													</div>
												</div>
												<form id="form_healthy">
													<table class="table table-striped table-hover table-fw-widget" id="healthy_table">
														<thead>
															<tr>
																<td style="text-align: center; width:36%;"><strong>Post Title</strong></td>
																<td style="text-align: center; width:8%;"><strong>Ordering</strong></td>
																<td style="text-align: center; width:8%;"><strong>Default</strong></td>
																<td style="text-align: center; width:8%;"><strong>Trending</strong></td>
															</tr>
														</thead>
														<tbody>
															<?php if (!empty($posts)) : ?>
															<?php
															foreach ($posts as $post) :
															?>
															<?php if($post->primary_cat_id ==44){?>
															<tr>
																<td style=" width:263px;"><?php echo $post->title ?></td>

																<td style="text-align: center; width:50px;">
																	<input value="<?php echo $post->ordering_healthy ?>" type="text" name="order_healthy[<?php echo $post->id ?>]" maxlength="2"  onkeypress="return isNumber(event)">
																</td>
																<td style="text-align: center; width:50px;">
																	<input <?php if($post->is_cat_first ==1){ echo 'checked'; } ?> type="radio" name="defult_healthy"  value="<?php echo $post->id ?>">
																</td>
																<td style="text-align: center; width:50px;">
																	<input <?php if($post->is_cat_trending ==1){ echo 'checked'; } ?> type="radio" name="trending_healthy" value="<?php echo $post->id ?>">
																</td>
															</tr>
															<?php } ?>
															<?php endforeach ?>

															<?php else : ?>

															<tr>
																<td colspan="5" align="center">
																	<p>
																		No data available
																	</p>
																</td>
															</tr>

															<?php endif ?>
														</tbody>
													</table>
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
		</div>	
	</div>
</div>



<script>
	$(function() { 
		$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			localStorage.setItem('lastTab', $(this).attr('href'));
		});
		var lastTab = localStorage.getItem('lastTab');

		if (lastTab) {
			$('[href="' + lastTab + '"]').click();
		}
	});
</script>
