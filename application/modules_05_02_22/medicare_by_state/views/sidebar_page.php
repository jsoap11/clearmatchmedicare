<!-- Common Block -->
<section class="common-block">
    <div class="container">
        <div class="breadcrumbs-block">
            <ul>
                <li><a href="<?= bs() ?>">Home</a></li>
				<?php if($all_state != ''){ 
				$displayname= "See All States";	
				if($all_state =="medicare-advantage"){ $displayname= "Medicare Advantage";}
				if($all_state =="medicare-supplement"){ $displayname= "Medicare Supplement";}
				if($all_state =="medicare-part-d"){ $displayname= "Medicare Part D";}
				?>
					<li><a href="<?php echo bs().$all_state; ?>"><?php echo $displayname;?></a></li>
					<li class="active"><span><?=$cms_content[0]->title?></span></li>
				<?php }else{ ?>
					<li class="active"><span>See All States</span></li>
				<?php } ?>
            </ul>
        </div>
        <div class="common-content-block">
            <div class="row">
                <div class="col-12 col-lg-8 mt-3">
				<?= $cms_content[0]->comment?>		
                </div>
                <div class="col-12 col-lg-4 mt-5 px-0 px-lg-5">
                    <div class="sticky-top">
                        <div class="find-plan-block dynamic_phoneno">
                            <h6>Find a Plan today!</h6>
                      <form id="get_sidebar_frm" method="get" action="<?php postUrl(); ?>/planlist" class="find-plan-form">
						<div style="display:none">
								<input type="hidden" id="gender" name="gender" value="F">	
							<input type="hidden" name="pgName" value="<?php echo $_SERVER['REQUEST_URI'];?>">
							<input type="hidden" name="category" value="MA"><!--apptype-->
							<input type="hidden" name="temp1" value="<?php echo (isset($_COOKIE['temp1']))?$_COOKIE['temp1']:'1440';?>">
							<input type="hidden" name="refid" value="<?php echo (isset($_COOKIE['refid']))?$_COOKIE['refid']:'';?>">
							<input type="hidden" name="subid" value="<?php echo (isset($_COOKIE['subid']))?$_COOKIE['subid']:'';?>">
							<input type="hidden" name="gclickid" value="<?php echo (isset($_COOKIE['gclickid']))?$_COOKIE['gclickid']:'';?>">
							<input type="hidden" name="transferPage" id="transferPage" value="planlist">
							<input type="hidden" name="effectiveDate" value="<?php csd(); ?>" readonly="true">
							<input type="hidden" id="county_side" name="county" value="">
						</div>
						  <input type="text" onkeypress="return isNumber(event)" maxlength="5" name="zip" id="zipcode_side" class="form-control rounded-0 border-0 shadow-none col-lg-12 mx-auto" placeholder="Enter ZIP code" value="<?php echo returnZipCode();?>">
                                <button type="button" onclick="frmValidate_sidebar()" class="btn btn-submit">FIND A PLAN</button>
                            </form>
                            <h5>Call a Licensed Sales Agent</h5>
                            <h4><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?> TTY User: 711</h4>
                            <span><?php displayTime(); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

