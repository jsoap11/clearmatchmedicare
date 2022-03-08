<script>
	$(document).ready(function() {
		$(window).keydown(function(event){
			if(event.keyCode == 13) {
				frmLandingmaDoc();
				event.preventDefault();
				return false;
			}
		});
	});
</script>
<main class="lander-block">
	<div id="newtimer"></div>
	<div class="landing-heading-image">
		
		<div class="container">
			<div class="row px-auto px-md-5 pl-auto pl-lg-4 pt-3">
				<div class="col-12 col-md-12">
					<div class="heading-group-box">
						<div class="landing-heading-form-background header-box-height zip-box-padding">
							<h1>2022 Medicare Advantage Plans</h1>
							<h3>Discover affordable Medicare Advantage plans that may help you save!</h3>
							<form method="get" action="<?php postUrl(); ?>" id="landingmaDocFrm" class="landing-form">
								<div style="display:none">
								<input type="hidden" id="gender" name="gender" value="F">	
									<input type="hidden" name="lander_name" value="landing_ma">
									<input type="hidden" name="pgName" value="landing_ma">
									<input type="hidden" name="category" value="MA">
									<input type="hidden" name="temp1" value="<?php echo (isset($_COOKIE['temp1']))?$_COOKIE['temp1']:temp1();?>">
									<input type="hidden" name="refid" value="<?php echo (isset($_COOKIE['refid']))?$_COOKIE['refid']:'';?>">
									<input type="hidden" name="subid" value="<?php echo (isset($_COOKIE['subid']))?$_COOKIE['subid']:'';?>">
									<input type="hidden" name="gclickid" value="<?php echo (isset($_COOKIE['gclickid']))?$_COOKIE['gclickid']:'';?>">
									<input type="hidden" name="transferPage" id="transferPage" value="doctorLookup"> <!--druglist/doctorLookup/guide-->
									<input type="hidden" name="effectiveDate" value="<?php csd(); ?>" readonly="true">
									<input type="hidden" id="county" name="county" value="">
									<input type="hidden" id="landing_tab" name="landing_tab" value="">
								</div>
								<div class="form-group rounded d-flex zip-code-box lander-type-d justify-content-center">
									<input value="<?php echo returnZipCode();?>" type="text" onblur="returncounty()" onkeypress="return isNumber(event)" maxlength="5" name="zip" id="zip" placeholder="Enter ZIP Code" class="form-control">
									<input type="button" onClick="return frmLandingmaDoc()" value="SEE PLANS" class="btn btn-plans">
								</div>
								<div class="error-md light" id="zip_validate"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="plans-content">
				<div class="row">
					<div class="col-md-4">
						<div class="plans-content-details">
							<i class="fa fa-dollar-sign fa-2x"></i>
							<h4>Plans starting at <br />$0 per month</h4>
						</div>
					</div>
					<div class="col-md-4">
						<div class="plans-content-details">
							<i class="fas fa-prescription-bottle fa-2x"></i>
							<h4>Extra benefits may include <br />prescription, hearing, vision and dental</h4>
						</div>
					</div>
					<div class="col-md-4">
						<div class="plans-content-details">
							<i class="fa fa-file-medical fas-2x"></i>
							<h4>4000+ Medicare Advantage <br />plans available</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="partner-bg-light">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-3">
					<a href="<?= bs() ?>medicare-carriers/aetna" class="text-decortion-none">
						<img src="<?php echo bs() ?>front_assets/image/ma/aetna.png" class="img-fluid carrier_logo"  alt="clearmatchmedicare">
					</a>
				</div>

				<div class="col-3">
					<a href="<?= bs() ?>medicare-carriers/cigna" class="text-decoration-none">
						<img src="<?php echo bs() ?>front_assets/image/ma/cigna.png" class="img-fluid carrier_logo"  alt="clearmatchmedicare">
					</a>
				</div>

				<div class="col-3">
					<a href="<?= bs() ?>medicare-carriers/humana" class="text-decoration-none">
						<img src="<?php echo bs() ?>front_assets/image/ma/humana.png" class="img-fluid carrier_logo"  alt="clearmatchmedicare">
					</a>
				</div>

				<div class="col-3">
					<a href="<?= bs() ?>/landingma/#" class="text-decoration-none">
						<img src="<?php echo bs() ?>front_assets/image/ma/wellcare.png" class="img-fluid carrier_logo"  alt="clearmatchmedicare">
					</a>
				</div>
			</div>
		</div>
	</div>

<div class="modal fade find-a-plan-modal" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<button type="button" class="close rx-modal-close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
			</button>
			<div class="modal-body text-center">
				<h2 class="">Are Your Doctors In Network?</h2>
		  		<p>Before you search for a new plan, enter your doctors' names and locations to make sure they are part of the plan's network.</p>
				<div class="button-block">
					<div class="row">
			  			<div class="col-md-6">
							<a href="javascript:void(0)" onclick="submitFrm('doctorLookup','landingmaDocFrm')" class="btn btn-drugs">ENTER DOCTORS</a>
						</div>
						<div class="col-md-6">
							<a href="javascript:void(0)" onclick="submitFrm('planlist','landingmaDocFrm')" class="btn btn-plans">SEE PLANS</a>
							<span>(Enter Doctors Later)</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>