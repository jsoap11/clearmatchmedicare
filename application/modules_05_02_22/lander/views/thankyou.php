<main>
	<!-- Image and text -->
	<nav class="navbar navbar-light bg-white my-6">
		<div class="container-fluid px-0">
			<a class="navbar-brand" href="<?= bs() ?>">
				<img src="<?= bs() ?>front_assets/image/MedicareUSA-logo.png" class="d-inline-block align-top logo-ln" alt="" loading="lazy">
			</a>
			<div class="ml-auto d-none d-md-block pr-3 contect-number">
				<h6 class="aleo font-16 text-blue m-0 font-weight-bold">Speak to a Licensed Sales Agent</h6>
				<h5 class="text-blue aleo font-weight-bold m-0 font-20 dynamic_phoneno"><a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:'1-800-637-7602';?>" class="text-blue text-decoration-none"><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:'1-800-637-7602';?></a> / TTY User 711</h5>
				<h6 class="aleo text-blue small m-0">Mon-Fri: 8:30 a.m. to 8:00 p.m. ET</h6>
			</div>
			<a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:'1-800-637-7602';?>" class="dynamic_phoneno text-decoration-none pr-3 d-block d-md-none">
				<i class="fa fa-phone font-weight-bold navbar-phone rounded-circle" style="padding: 10px 11px;"></i>
			</a>
		</div>
	</nav>
	<div class="py-lg-3 px-lg-5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-12 p-3 p-sm-5 m-sm-2 px-md-3 mx-md-auto mx-lg-1 my-md-5 my-lg-1 py-lg-4">
					<div class=" px-3 pb-5 pt-0">
						<h1 class="text-blue aleo text-center col-12 col-sm-12 col-md-12 col-lg-12 mx-auto">Thank you for choosing MedicareUSA.</h1>
						<h3 class="text-center col-12 col-sm-12 col-md-12 col-lg-12 mx-auto">A licensed agent will be in touch with you shortly.</h3>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="partner-bg-light">
		<div class="container-fluid">
			<div class="px-auto" style="text-align: center">

				<a href="aetna" class="text-decortion-none">
					<img src="<?php echo bs() ?>front_assets/image/cl_aetna.png" class="carrier_logo" alt="">
				</a>

				<a href="cigna" class="text-decoration-none">
					<img src="<?php echo bs() ?>front_assets/image/cl_cigna.png" class="carrier_logo" alt="">
				</a>
				<a href="#" class="text-decoration-none">
					<img src="<?php echo bs() ?>front_assets/image/cl_humana.png" class="carrier_logo" alt="">
				</a>	
				<a href="mutual-of-omaha" class="text-decoration-none">
					<img src="<?php echo bs() ?>front_assets/image/cl_MOO.png" class="carrier_logo" alt="">
				</a>

				<a href="#" class="text-decoration-none">
					<img src="<?php echo bs() ?>front_assets/image/cl_wellcare.png" class="carrier_logo" alt="">
				</a>

			</div>
		</div>
	</div>