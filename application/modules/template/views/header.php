<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?= bs() ?>front_assets/image/favicon/favicon.ico" type="image/png">
	<title>ClearMatch Medicare :: Backoffice</title>
	<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
	<link rel="stylesheet" type="text/css" href="<?= bs() ?>public/b-asset/lib/material-design-icons/css/material-design-iconic-font.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?= bs() ?>public/b-asset/css/app.css" type="text/css" />
	<script src="<?= bs() ?>public/b-asset/lib/jquery/jquery.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="<?= bs() ?>public/assets/css/multiselect.css" type="text/css" />
	<link href="https://makitweb.com/demo/dropdown_select2/select2/css/select2.min.css" rel="stylesheet" />
	<script>
		const base_url = '<?= bs() ?>';
	</script>
<script src="https://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
</head>
<?php
$user = $this->ion_auth->user()->row();
?>

<body>
	<div class="be-wrapper">
		<nav class="navbar navbar-expand fixed-top be-top-header">
			<div class="container-fluid">
				<div class="be-navbar-header">
					<a class="" href="<?= bs() ?>/backoffice">
						<img src="<?= bs() ?>front_assets/image/png/CMM-logo.png" class="ml-4" style="width:85% !important">
						<!--<h2> &nbsp;&nbsp; <span class="icon mdi mdi-lock-outline"></span> Login System</h2>-->
					</a>
				</div>
				<div class="be-right-navbar">
					<ul class="nav navbar-nav float-right be-user-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
								<?php
								if (empty($user->user_img)) {

								?>
									<img src="<?= bs() ?>public/b-asset/img/avatar.png" alt="Avatar">
								<?php
								} else {
								?>
									<img src="<?php echo bs().$user->user_img ?>" class="img-responsive img-circle" width="200" height="200" alt="">
								<?php
								}
								?>

								<span class="user-name"> <?= $user->username; ?> </span>
							</a>
							<div class="dropdown-menu" role="menu">
								<div class="user-info">
									<div class="user-name"><?= $user->username; ?></div>
									<div class="user-position online">Available</div>
								</div>
								<a class="dropdown-item" href="pages-profile.html">
									<a class="dropdown-item" href="<?php bs('users/profile') ?>">
										<span class="icon mdi mdi-settings"></span>Settings
									</a>
									<a class="dropdown-item" href="<?= base_url('backoffice/auth/logout') ?>">
										<span class="icon mdi mdi-power"></span>Logout
									</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>