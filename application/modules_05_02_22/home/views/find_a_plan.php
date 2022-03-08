<script>
	$(document).ready(function() {
		$(window).keydown(function(event){
			if(event.keyCode == 13) {
				//	frmValidate('<?php csd(); ?>');
				event.preventDefault();
				return false;
			}
		});
		returncountyArr();
	});
</script>
<section class="find-a-plan-block">
	<div class="container form-section">
		<div class="row">
			<div class="col-xl-10 offset-xl-1 col-lg-12 offset-lg-0 col-sm-12 offset-sm-0">
				<div class="row">
					<div class="col-xl-7 col-lg-7 col-md-6 d-none d-md-block">
						<img alt="clearmatchmedicare-find-a-plan" src="<?= bs() ?>front_assets/image/find-a-plan.png" class="photo" alt="">
					</div>
					<div class="col-xl-5 col-lg-5 col-md-6">
						<h1>Find a Plan</h1>
						<p>Enter your ZIP Code to find available plans in your area.</p>
						<form id="get_frm" method="get" action="<?php postUrl(); ?>">
							<div style="display:none">
								<input type="hidden" id="gender" name="gender" value="F">
								<input type="hidden" name="pgName" value="find_a_plan">
								<input type="hidden" name="category" value="MA">
								<input type="hidden" name="temp1" value="<?php echo (isset($_COOKIE['temp1']))?$_COOKIE['temp1']:temp1();?>">
								<input type="hidden" name="refid" value="<?php echo (isset($_COOKIE['refid']))?$_COOKIE['refid']:'';?>">
								<input type="hidden" name="subid" value="<?php echo (isset($_COOKIE['subid']))?$_COOKIE['subid']:'';?>">
								<input type="hidden" name="gclickid" value="<?php echo (isset($_COOKIE['gclickid']))?$_COOKIE['gclickid']:'';?>">
								<input type="hidden" name="transferPage" id="transferPage" value="planlist">
								<input type="hidden" name="effectiveDate" id="effectiveDate" value="<?php csd(); ?>">
							</div>
							<div class="form-group">
								<label class="font-weight-6 label-black open-sans letter-specing-1 font-14 zip_validate" ref="ZIP CODE:">ZIP CODE:</label>
								<div class="border-black">
									<input  value="<?php echo returnZipCode();?>" onKeyup="returncountyArrFindaPlan(this.value)" onkeypress="return isNumber(event)" size="5" maxlength="5" name="zip" id="zip" type="text" class="form-control rounded-0 shadow-none border-0 open-sans font-14" placeholder="Enter your ZIP Code" maxlength="5">
								</div>
							</div>
							<div class="form-group">
								<label class="font-weight-6 open-sans label-black letter-specing-1 font-14">SELECT A COUNTY:</label>
								<div class="border-black" id="cunty_cont">
									<select class="form-control rounded-0 shadow-none border-0" id="county" name="county">
									</select>
								</div>
								<label class="font-weight-6 label-black open-sans mt-3 letter-specing-1 font-14 coverageMonth_validate coverageDay_validate coverageYear_validate diff_validate d-none" ref="START DATE FOR COVERAGE:">START DATE FOR COVERAGE:</label>
								<?php $dateElements = explode('/', csdp()); ?>
								<div class="date-coverage-field d-flex1 align-items-center justify-content-between d-none" style="display:none;">
									<input maxlength="2" onkeyup="updatedConvertionStartDate('coverageMonth',this.value)" name="coverageMonth" id="coverageMonth"  value="<?php echo $dateElements[0];?>" type="text" class="form-control shadow-none border-black bg-white rounded-0 text-center mr-2" max-length="2" style="width: 4.5em; height: 46px;" placeholder="MM">/
									<input readonly="true" maxlength="2" onkeyup="updatedConvertionStartDate('coverageDay',this.value)" name="coverageDay" id="coverageDay"  value="<?php echo $dateElements[1];?>" type="text" class="form-control shadow-none border-black bg-white text-center mx-2 rounded-0" max-length="2" style="width: 4.5em; height: 46px;" placeholder="DD">/
									<input readonly="true" maxlength="4" onkeyup="updatedConvertionStartDate('coverageYear',this.value)" name="coverageYear" id="coverageYear"  value="<?php echo $dateElements[2];?>" type="text" class="form-control shadow-none border-black bg-white text-center ml-2 rounded-0" max-length="4" style="width: 5.5em; height: 46px;" placeholder="YYYY">
								</div>
								<!--<div id="coverageMonth_validate"></div>
		<div id="coverageDay_validate"></div>
		<div id="coverageYear_validate"></div>
		<div id="diff_validate"></div>-->
							</div>
							<input id="pr_find_a_plan" type="button" onclick="frmValidate('<?php csd(); ?>')" class="btn-continue" value="CONTINUE">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="modal fade find-a-plan-modal" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<button type="button" class="close rx-modal-close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
			<div class="modal-body text-center">
				<h2 class=""><?php echo $popup_title;?></h2>
				<p><?php echo $popup_subtitle;?></p>
				<div class="button-block">
					<?php if($popup_button ==1){ ?>
					<div class="row">
						<div class="col-md-6">
							<a href="javascript:void(0)" onclick="submitFrmplan('drugBasket','get_frm')" class="btn btn-drugs">ENTER DRUGS</a>
						</div>
						<div class="col-md-6">
							<a  href="javascript:void(0)" onclick="submitFrmplan('planlist','get_frm')"  class="btn btn-plans">SEE PLANS</a>
							<span>(Enter Drugs Later)</span>
						</div>
					</div>
					<?php } ?>
					<?php if($popup_button ==0){ ?>
					<div class="row">
						<div class="col-md-6">
							<a href="javascript:void(0)" onclick="submitFrmplan('doctorLookup','get_frm')" class="btn btn-drugs">ENTER DOCTORS</a>
						</div>
						<div class="col-md-6">
							<a href="javascript:void(0)" onclick="submitFrmplan('planlist','get_frm')" class="btn btn-plans">SEE PLANS</a>
							<span>(Enter Doctors Later)</span>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
