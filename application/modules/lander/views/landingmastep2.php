<script>
	$(document).ready(function() {
		$(window).keydown(function(event){
			if(event.keyCode == 13) {
				frmLandingmastep2();
				event.preventDefault();
				return false;
			}
		});
	});
</script>
<main class="lander-block">
	<div id="newtimer"></div>
	<div class="jumbotron custom-jumbotron new-jumbotron search-jumbotron landing-jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<h1>2022 Medicare Advantage Plans</h1>
					<h2>Discover affordable Medicare Advantage plans that may help you save!</h2>
					<form method="post" action="<?php echo bs() ?>lander/step2" id="landingmastep2Frm">
						<div class="compare-form">
							<div style="display:none">
								<input type="hidden" name="lander_name" value="landingmastep2">
								<input type="hidden" name="pgName" value="landingmastep2">
								<input type="hidden" name="category" value="MA">
								<input type="hidden" name="temp1" value="<?php echo (isset($_COOKIE['temp1']))?$_COOKIE['temp1']:temp1();?>">
								<input type="hidden" name="refid" value="<?php echo (isset($_COOKIE['refid']))?$_COOKIE['refid']:'';?>">
								<input type="hidden" name="subid" value="<?php echo (isset($_COOKIE['subid']))?$_COOKIE['subid']:'';?>">
								<input type="hidden" name="gclickid" value="<?php echo (isset($_COOKIE['gclickid']))?$_COOKIE['gclickid']:'';?>">
								<input type="hidden" name="transferPage" id="transferPage" value="planlist"> <!--druglist/planlist/guide-->
								<input type="hidden" name="effectiveDate" value="<?php csd(); ?>" readonly="true">
								<input type="hidden" id="county" name="county" value="">
								<input type="hidden" id="state" name="state" value="">
								<input type="hidden" id="landing_tab" name="landing_tab" value="">
							</div>
							<div class="form-group rounded d-flex zip-code-box lander-type-d justify-content-center"  id="zip_box">
								<input type="text" value="<?php echo returnZipCode();?>" onblur="returncounty()" onkeypress="return isNumber(event)" maxlength="5" name="zip" id="zip" placeholder="Enter ZIP Code" class="form-control">
								<input type="button" onClick="return frmLandingmastep2()" value="SEE PLANS" class="btn btn-submit">
							</div>
						</div>
						<div class="error-md light" id="zip_validate"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="partner-bg-light">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-3">
					<img src="<?php echo bs() ?>front_assets/image/ma/aetna.png" class="img-fluid carrier_logo"  alt="clearmatchmedicare">
				</div>

				<div class="col-3">
					<img src="<?php echo bs() ?>front_assets/image/ma/cigna.png" class="img-fluid carrier_logo"  alt="clearmatchmedicare">
				</div>

				<div class="col-3">
					<img src="<?php echo bs() ?>front_assets/image/ma/humana.png" class="img-fluid carrier_logo"  alt="clearmatchmedicare">
				</div>

				<div class="col-3">
					<img src="<?php echo bs() ?>front_assets/image/ma/wellcare.png" class="img-fluid carrier_logo"  alt="clearmatchmedicare">
				</div>
			</div>
		</div>
	</div>

	</div>

