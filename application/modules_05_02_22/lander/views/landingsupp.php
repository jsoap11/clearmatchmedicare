<main>
	<!-- Image and text -->
	<nav class="navbar navbar-light bg-white my-6">
		<div class="container-fluid px-0 px-lg-3">
			<a class="navbar-brand" href="<?= bs() ?>">
				<img src="<?= bs() ?>front_assets/image/MedicareUSA-logo.png" class="d-inline-block align-top logo-ln"  alt="clearmatchmedicare" loading="lazy">
			</a>
			<div class="ml-auto d-none d-md-block pr-3 contect-number">
				<h6 class="aleo font-16 text-blue m-0 font-weight-bold">Speak to a Licensed Sales Agent</h6>
				<h5 class="text-blue aleo font-weight-bold m-0 font-20 dynamic_phoneno"><a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:'1-800-637-7602';?>" class="text-blue text-decoration-none"><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:'1-800-637-7602';?></a> / TTY User 711</h5>
				<h6 class="aleo text-blue small m-0"><?php displayTime(); ?></h6>
			</div>
			<a href="tel:<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:'1-800-637-7602';?>" class="dynamic_phoneno text-decoration-none pr-3 d-block d-md-none">
				<i class="fa fa-phone font-weight-bold navbar-phone rounded-circle" style="padding: 10px 11px;"></i>
			</a>
		</div>
	</nav>

	<div class="landing-heading-image p-5">
		<div class="container">
			<div class="row px-auto px-md-5 pl-auto pl-lg-4 pt-3">
				<div class="col-12 col-md-12 col-lg-7">
					<div class="heading-group-box">
						<div class="landing-heading-form-background header-box-height zip-box-padding">
							<h1 class="group-form-heading heading-blue">Compare. Shop. Save.</h1>
							<h3 class="col-lg-11 px-0 font-32 font-weight-normal m-0">Discover affordable Medicare plans that may help you save!</h3>
							<form  method="post" action="<?php echo bs() ?>lander/demographics" id="landingsuppFrm" class="col-12 col-md-8 col-lg-8 px-0">
								<div style="display:none">
								<input type="hidden" id="gender" name="gender" value="F">	
									<input type="hidden" name="pagephone" value="<?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:'1-800-637-7602';?>">
									<input type="hidden" name="lander_name" value="landingsupp">
									<input type="hidden" name="pgName" value="landingsupp">
									<input type="hidden" name="category" value="MA">
									<input type="hidden" name="temp1" value="<?php echo (isset($_COOKIE['temp1']))?$_COOKIE['temp1']:temp1();?>">
									<input type="hidden" name="refid" value="<?php echo (isset($_COOKIE['refid']))?$_COOKIE['refid']:'';?>">
									<input type="hidden" name="subid" value="<?php echo (isset($_COOKIE['subid']))?$_COOKIE['subid']:'';?>">
									<input type="hidden" name="gclickid" value="<?php echo (isset($_COOKIE['gclickid']))?$_COOKIE['gclickid']:'';?>">
									<input type="hidden" name="transferPage" id="transferPage" value="planlist">
									<input type="hidden" name="effectiveDate" value="<?php csd(); ?>" readonly="true">
									<input type="hidden" id="county" name="county" value="">
								</div>
								<div class="form-group rounded d-flex zip-code-box lander-type-d">
									<input value="<?php echo returnZipCode();?>" onblur="returncounty()" onkeypress="return isNumber(event)" size="5" maxlength="5" name="zip" id="zip" type="text" placeholder="Enter ZIP Code" class="form-control align-self-center zip-fixed border-0 shadow-none open-sans m-0 border border-black-20 border-right-0">
									<input type="button" onClick="frmLandingsupp()" value="SEE PLANS" class="btn-lg btn bg-red btn-red-radius rounded-0 px-3 px-md-4 text-white open-sans">
								</div>
								<div class="error-md light supp-valid" id="zip_validate"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="partner-bg-light">
		<div class="container-fluid">
			<div class="px-auto" style="text-align: center">

				<a href="<?= bs() ?>medicare-carriers/aetna" class="text-decortion-none">
					<img src="<?php echo bs() ?>front_assets/image/cl_aetna.png" class="carrier_logo"  alt="clearmatchmedicare">
				</a>

				<a href="<?= bs() ?>medicare-carriers/cigna" class="text-decoration-none">
					<img src="<?php echo bs() ?>front_assets/image/cl_cigna.png" class="carrier_logo"  alt="clearmatchmedicare">
				</a>

				<a href="<?= bs() ?>medicare-carriers/humana" class="text-decoration-none">
					<img src="<?php echo bs() ?>front_assets/image/cl_humana.png" class="carrier_logo"  alt="clearmatchmedicare">
				</a>


				<a href="<?= bs() ?>medicare-carriers/mutual-of-omaha" class="text-decoration-none">
					<img src="<?php echo bs() ?>front_assets/image/cl_MOO.png" class="carrier_logo"  alt="clearmatchmedicare">
				</a>

				<a href="#" class="text-decoration-none">
					<img src="<?php echo bs() ?>front_assets/image/cl_wellcare.png" class="carrier_logo"  alt="clearmatchmedicare">
				</a>

			</div>
		</div>
	</div>

	<div class="container mt-5">
		<div class="row">
			<div class="col-12">
				<h3 class="aleo font-weight-bold text-blue">What is a Medicare Supplement Plan?</h3>
				<p class="open-sans">Medicare Supplement Insurance plans, also known as Medigap, help pay for the costs Original Medicare Parts A & B do not pay, like deductibles, copayments, and coinsurance.</p>
			</div>
		</div>
	</div>

	<hr class="mt-5">