<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css" />
<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script>
	$(function() {
		$('input[name="daterange"]').daterangepicker({
			opens: 'left'
		}, function(start, end, label) {
			//console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
			setTimeout(function(){ $("#search_posts").submit(); }, 300);
			
		});
	});
</script>
<div class="be-content">
	<div class="page-head">
		<h2 class="page-head-title">Search List</h2>
		<nav aria-label="breadcrumb" role="navigation">
			<ol class="breadcrumb page-head-nav">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Search List</a></li>
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
				<div class="card card-table  card-border-color card-border-color-primary">
					<div class="card-header"> <span class="icon mdi mdi-blogger"></span> Search List
						<a style="float: right;" href="<?= bs() ?>blogs/BlogSettings/download"> Click here to Download CSV </a>
						<form action="<?= base_url('blogs/Posts/search_posts') ?>" id="search_posts" enctype="multipart/form-data" method="post" style="float: right; margin-right: 20px;">
							Select data range:
							<input type="text" name="daterange" value="<?php echo $daterange;?> " />
						</form>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12">
								<table class="table table-striped table-hover table-fw-widget" id="table1">
									<thead>
										<tr>
											<th>Search Text</th>
											<th>IP Address</th>
											<th>Search Date</th>
											<th>Count</th>
										</tr>
									</thead>
									<tbody>
										<?php if (!empty($posts)) : ?>
										<?php
										foreach ($posts as $post) :
										//pr($post);
										?>
										<tr>
											<td><?php echo $post->search_text; ?></td>
											<td><?php echo $post->ip ?></td>
											<td><?php echo date('m-d-Y', strtotime($post->date)) ?></td>
											<td><?php echo $post->total ?></td>
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
