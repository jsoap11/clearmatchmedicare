<script>
	$(document).ready(function() {
		$(window).keydown(function(event){
			if(event.keyCode == 13) {
				frmLandingma();
				event.preventDefault();
				return false;
			}
		});
	});
</script>
<main class="lander-block">
	<div id="newtimer"></div>
	<div class="estimate-block">
		<div class="container">
			<h1>Get a Detailed Estimate</h1>
			<p>Listing the medications you take will help us give the most accurate estimate of your costs under the plans.</p>
			<div class="button-block">
				<div class="row">
					<div class="col-6">
						<a href="javascript:void(0)" onclick="submitFrmplan('drugBasket','step2Frm')" class="btn btn-drugs">ENTER DRUGS</a>
					</div>
					<div class="col-6">
						<a href="javascript:void(0)" onclick="submitFrmplan('planlist','step2Frm')" class="btn btn-plans">SEE PLANS</a>
						<span>(Enter Drugs Later)</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<form method="get" action="<?php postUrl(); ?>" id="step2Frm"  style="display:none">
		<input type="hidden" name="lander_name" value="step2">
		<input type="hidden" name="pgName" value="step2">
								<input type="hidden" id="gender" name="gender" value="F">	
		<input type="hidden" name="category" value="MA">
		<input type="hidden" name="temp1" value="<?php echo (isset($_COOKIE['temp1']))?$_COOKIE['temp1']:temp1();?>">
		<input type="hidden" name="refid" value="<?php echo (isset($_COOKIE['refid']))?$_COOKIE['refid']:'';?>">
		<input type="hidden" name="subid" value="<?php echo (isset($_COOKIE['subid']))?$_COOKIE['subid']:'';?>">
		<input type="hidden" name="gclickid" value="<?php echo (isset($_COOKIE['gclickid']))?$_COOKIE['gclickid']:'';?>">
		<input type="hidden" name="transferPage" id="transferPage" value="planlist"> <!--druglist/planlist/guide-->
		<input type="hidden" name="effectiveDate" value="<?php csd(); ?>" readonly="true">
		<input type="hidden" id="county" name="county" value="<?php echo (isset($county))?$county:'';?>">
		<input type="hidden" id="landing_tab" name="landing_tab" value="">
		<input type="hidden" name="zip" id="zip" value="<?php echo (isset($zipcode))?$zipcode:'';?>">
	</form>
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
				<h2 class="">Get a Detailed Estimate</h2>
		  		<p>Listing the medications you take will help us give the most accurate estimate of your costs under the plans.</p>
				<div class="button-block">
					<div class="row">
			  			<div class="col-md-6">
							<a href="javascript:void(0)" onclick="submitFrm('drugBasket','landingmaFrm')" class="btn btn-drugs">ENTER DRUGS</a>
						</div>
						<div class="col-md-6">
							<a href="javascript:void(0)" onclick="submitFrm('planlist','landingmaFrm')" class="btn btn-plans">SEE PLANS</a>
							<span>(Enter Drugs Later)</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>