<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name=”description”>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>xyz</title>

<!-- normalize -->
<link rel="stylesheet" href="assets/css/normalize.min.css">
<!-- fav-icon -->    
<link rel="shortcut icon" href="assets/image/brand1.png"> 
<!-- Bootstrap 4.4.1-->
<link rel="stylesheet" href="assets/bootstrap-4.5.2/css/bootstrap.min.css">
<!-- Font-Awesome -->
<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
<!-- Swiper Slider -->
<link rel="stylesheet" href="assets/swiper-master/package/css/swiper.css">
<!-- google-fonts   
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:wght@300&family=Teko:wght@500&display=swap" rel="stylesheet">
<!-- style.css -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    <main>	
	<!--header-->
	<header>
		<div class="container">
			<div class="row py-3">
				<div class="col-4 col-md-6 col-lg-4 text-left d-flex">
					<span class="d-sm-none d-block">
						<button class="navbar-toggler navbar-light border mr-3 mt-1" type="button">
							<span class="navbar-toggler-icon"></span>
						</button>
					</span>
					<a class="navbar-brand" href="index.php"><img src="assets/image/png/CMM-logo.png" class="logo" /></a>
				</div>
				<div class="col-4 col-md-6 col-lg-4 text-gold text-center header-call-now-block">
					<p class="mb-0 d-md-block d-none" style="line-height: 26px;">
						<span>Speak to a Licensed Sales Agent</span> <br> <b>Call Now 1-855-537-2378 TTY: 711</b><br>
						<span class="text-blue small">
							Monday-Friday 8:00am - 8:00pm
						</span>
					</p>

					<span class="d-md-block d-none">
						<a class="nav-link text-blue text-decoration-none d-md-none d-block" href="#">
							<i class="fa fa-user-circle text-blue fa-lg mr-2"></i>
							<small>Customer ID</small>
						</a>
					</span>
				</div>
				<div class="col-4 text-right align-self-center d-flex justify-content-end">
					<span class="d-lg-block d-none">
						<a class="btn btn bg-gold px-4 text-white p20" href="#">
							GET STARTED
						</a>
					</span>

					<span>
						<a class="btn btn-light nav-link rounded-circle ml-2 d-md-none d-block" style="padding-top: 7px !important; padding-bottom: 7px !important; padding-left: 10px !important; padding-right: 10px !important;" href="#">
							<i class="fa fa-phone text-gold fa-lg"></i>
						</a>
					</span>
				</div>
			</div>
		</div>
		
		
		<!--<nav class="navbar navbar-expand-md bg-blue p-md-0 nav1">
			<div class="container">
				<a class="navbar-brand pt-3 d-md-none d-block" href="index.php"><img class="w-100" src="assets/image/png/CMM-logo-white.png"></a>
				<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="about.php">About Us</a>
						</li>
						<li class="nav-item pl-md-3">
							<a class="nav-link" href="contact.php">Medicare Advantage</a>
						</li>    
						<li class="nav-item pl-md-3">
							<a class="nav-link" href="contact.php">Medicare Supplement</a>
						</li>    
						<li class="nav-item pl-md-3">
							<a class="nav-link" href="contact.php">Prescription Drug Coverage</a>
						</li>    
						<li class="nav-item pl-md-3">
							<a class="nav-link" href="contact.php">Blog</a>
						</li> 
					</ul>
				</div>  

				<div class="d-md-block d-none">
					<div class="d-flex justify-content-end align-self-end">
						<a href="#" class="text-decoration-none text-white p14">
							<i class="fa fa-user-circle text-white fa-lg mr-2"></i>
							<small>Customer ID</small>
						</a>
					</div>
				</div>
				
			</div>
		</nav>-->

		<nav class="bg-blue p-md-0 nav1">
			<div class="container cnttr nav-container">
				<a href="javascript:void(0);" class="close-toggle d-sm-none"><i class="fa fa-times" aria-hidden="true"></i></a>
				<div class="menu-block">
					<div class="d-flex justify-content-md-start justify-content-center flex-column">
						<div class="header-details d-sm-none">
							<div class="text-center align-self-center d-flex justify-content-center mb-2">
								<span class="d-lg-block">
									<a class="btn btn bg-gold px-4 text-white p20" href="#">
										GET STARTED
									</a>
								</span>
							</div>
							<div class="text-white text-center header-call-now-block">
								<p class="mb-0 d-md-block" style="line-height: 26px;">
									<span>Speak to a Licensed Sales Agent</span> <br> <b>1-855-537-2378 <br />TTY: 711</b><br>
									<span class="text-white small">
										Monday-Friday 8:00am - 8:00pm
									</span>
								</p>
							</div>
						</div>
						<ul class="navbar-nav flex-row">
							<li class="nav-item d-lg-block d-sm-none">
								<span class=""><a class="nav-link" href="about.php">About Us</a></span>
							</li>
							<li class="nav-item pl-md-3 d-sm-block">
								<a class="nav-link" href="contact.php">Medicare Advantage</a>
							</li>    
							<li class="nav-item pl-md-3 d-sm-block">
								<a class="nav-link" href="contact.php">Medicare Supplement</a>
							</li>    
							<li class="nav-item pl-md-3 d-sm-block">
								<a class="nav-link" href="contact.php">Prescription Drug Coverage</a>
							</li>    
							<li class="nav-item pl-md-3">
								<a class="nav-link" href="javascript:void(0);">Blog</a>
								<ul class="submenu">
									<li class="nav-item pl-md-3">
										<a class="nav-link" href="javascript:void(0);">Medicare</a>
									</li>
									<li class="nav-item pl-md-3">
										<a class="nav-link" href="javascript:void(0);">Lifestyle</a>
									</li>
									<li class="nav-item pl-md-3">
										<a class="nav-link" href="javascript:void(0);">Retirement</a>
									</li>
									<li class="nav-item pl-md-3">
										<a class="nav-link" href="javascript:void(0);">Health</a>
									</li>
								</ul>
							</li> 
							<li class="nav-item ml-auto">
								<a class="nav-link text-white text-decoration-none d-lg-block d-none dd-none" href="#">
									<i class="fa fa-user-circle text-white fa-lg mr-2"></i>
									<small>Customer ID</small>
								</a>
							</li> 
						</ul>
					</div> 
				</div>
			</div>
		</nav>
	</header>