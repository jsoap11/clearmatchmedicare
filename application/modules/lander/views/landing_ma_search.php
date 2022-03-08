<script>
	$(document).ready(function() {
		$(window).keydown(function(event){
			if(event.keyCode == 13) {
				frmLandingmasearch();
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
					<h1>Find Medicare Plans in My Area</h1>
					<h2>Discover affordable Medicare Advantage plans that may help you save!</h2>
					<form method="get" action="<?php postUrl(); ?>" id="landingmasearchFrm">
						<div class="compare-form">
							<div style="display:none">
								<input type="hidden" id="gender" name="gender" value="F">	
								<input type="hidden" name="lander_name" value="landing_ma_search">
								<input type="hidden" name="pgName" value="landing_ma_search">
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
							<div class="form-group rounded d-flex zip-code-box lander-type-d justify-content-center">
								<input value="<?php echo returnZipCode();?>" type="text" onblur="returncounty()" onkeypress="return isNumber(event)" maxlength="5" name="zip" id="zip" placeholder="Enter ZIP Code" class="form-control">
								<input type="button" onClick="return frmLandingmasearch()" value="SEE PLANS" class="btn btn-submit">
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

<div class="modal fade find-a-plan-modal" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<button type="button" class="close rx-modal-close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
			</button>
			<div class="modal-body text-center">
				<h2 class="">Get a Detailed Estimate</h2>
		  		<p>Listing the medications you take will help us give the most accurate estimate of your costs under the plans.</p>
				<div class="button-block">
					<div class="row">
			  			<div class="col-md-6">
							<a href="javascript:void(0)" onclick="submitFrm('drugBasket','landingmasearchFrm')" class="btn btn-drugs">ENTER DRUGS</a>
						</div>
						<div class="col-md-6">
							<a href="javascript:void(0)" onclick="submitFrm('planlist','landingmasearchFrm')" class="btn btn-plans">SEE PLANS</a>
							<span>(Enter Drugs Later)</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>