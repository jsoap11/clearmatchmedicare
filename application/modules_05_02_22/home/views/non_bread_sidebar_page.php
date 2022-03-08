<!-- General Template -->
<?php 
$ClassUrl = explode("/",$_SERVER['REQUEST_URI']); 
?>
<section class="general-template <?php if($ClassUrl[1] =='medicare-glossary'){ ?> glossary-template <?php } ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-9">
                <div class="left-block">
                    <div class="breadcrumbs-block">
                        <ul>
                            <li><a href="<?= bs() ?>">Home</a></li>
                            <li><span><?=$cms_content[0]->title?></span></li>
                        </ul>
                    </div>
                    <!-- <div class="image-block">
                        <img src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=400" class="img-fluid" />
                    </div> -->
                    <div class="content-block">
                        <!--<h1><?php //echo $cms_content[0]->title?></h1>-->
                        <?= $cms_content[0]->comment?>
                    </div>
                    <!--div class="share-block">
                        <h6>Share this…</h6>
                        <ul class="social-block">
                            <li><a href="javascript:void(0);" target="_blank"><img src="<?= bs() ?>front_assets/image/facebook.png" class="img-fluid" /></a>
                            <li><a href="javascript:void(0);" target="_blank"><img src="<?= bs() ?>front_assets/image/twitter.png" class="img-fluid" /></a>
                            <li><a href="javascript:void(0);" target="_blank"><img src="<?= bs() ?>front_assets/image/instagram.png" class="img-fluid" /></a>
                            <li><a href="javascript:void(0);" target="_blank"><img src="<?= bs() ?>front_assets/image/instagram.png" class="img-fluid" /></a>
                        </ul>
                    </div>
                    <div class="related-articles-left-block">
                        <h6>Related Articles</h6>
                        <ul class="article-list">
                            <li><a href="javascript:void(0);" target="_blank">The lower-body workout for active people</a></li>
                            <li><a href="javascript:void(0);" target="_blank">The best and worst exercises for back pain</a></li>
                            <li><a href="javascript:void(0);" target="_blank">4 Exercises that are better than crunches</a></li>
                            <li><a href="javascript:void(0);" target="_blank">What is the best time of day to exercise</a></li>
                            <li><a href="javascript:void(0);" target="_blank">5 Awesome Bodyweight Moves to Build Strength</a></li>
                        </ul>
                    </div-->
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <div class="sticky-top right-block">
                    <div class="find-plan-block d-none d-lg-block dynamic_phoneno">
                            <h6>Find a Plan today!</h6>
                      <form id="get_sidebar_frm" method="get" action="<?php postUrl(); ?>/planlist" class="find-plan-form">
						<div style="display:none">
								<input type="hidden" id="gender" name="gender" value="F">	
							<input type="hidden" name="pgName" value="<?php echo $_SERVER['REQUEST_URI'];?>">
							<input type="hidden" name="category" value="MA"><!--apptype-->
							<input type="hidden" name="temp1" value="<?php echo (isset($_COOKIE['temp1']))?$_COOKIE['temp1']:temp1();?>">
							<input type="hidden" name="refid" value="<?php echo (isset($_COOKIE['refid']))?$_COOKIE['refid']:'';?>">
							<input type="hidden" name="subid" value="<?php echo (isset($_COOKIE['subid']))?$_COOKIE['subid']:'';?>">
							<input type="hidden" name="gclickid" value="<?php echo (isset($_COOKIE['gclickid']))?$_COOKIE['gclickid']:'';?>">
							<input type="hidden" name="transferPage" id="transferPage" value="planlist">
							<input type="hidden" name="effectiveDate" value="<?php csd(); ?>" readonly="true">
							<input type="hidden" id="county_side" name="county" value="">
						</div>
						  <input type="text"  value="<?php echo returnZipCode();?>" onkeypress="return isNumber(event)" maxlength="5" name="zip" id="zipcode_side" class="form-control rounded-0 border-0 shadow-none col-lg-12 mx-auto" placeholder="Enter ZIP code">
                                <button type="button" onclick="frmValidate_sidebar()" class="btn btn-submit">FIND A PLAN</button>
                            </form>
                            <h5>Call a Licensed Sales Agent</h5>
                            <h4><?php echo (isset($_COOKIE['site_phone']))?$_COOKIE['site_phone']:displayPhoneNo();?> TTY User: 711</h4>
                            <span><?php displayTime(); ?></span>
                    </div>
                    <!--div class="select-topic-block d-none d-lg-block">
                        <h6>Select a Topic</h6>
                        <ul>
                            <li><a href="javascript:void(0);">Medicare Enrollment</a></li>
                            <li><a href="javascript:void(0);">Medicare Advantage</a></li>
                            <li class="active"><a href="javascript:void(0);">Medicare Supplement</a></li>
                            <li><a href="javascript:void(0);">Medicare Part D Plan</a></li>
                            <li><a href="javascript:void(0);">Medicare and Retirement</a></li>
                            <li><a href="javascript:void(0);">Medicare and Medication</a></li>
                            <li><a href="javascript:void(0);">Medicare Coverage</a></li>
                            <li><a href="javascript:void(0);">Medicare Education</a></li>
                            <li><a href="javascript:void(0);">Medicare Lifestyle</a></li>
                        </ul>
                    </div>
                    <div class="related-articles-right-block d-none d-lg-block">
                        <h6>Related Articles</h6>
                        <ul>
                            <li>
                                <a href="javascript:void(0);">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Aliquam finibus metus sit amet cursus pellentesque.</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Cras ut sem lorem. Aenean vel imperdiet felis.</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Sed gravida ante neque, eget rutrum ligula suscipit faucibus.</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Suspendisse pharetra tortor a lectus dignissim condimentum.</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tag-block">
                        <h6>Tags</h6>
                        <ul>
                            <li><a href="javascript:void(0);">MEDICARE</a></li>
                            <li><a href="javascript:void(0);">MEDICARE PART D</a></li>
                            <li><a href="javascript:void(0);">HEALTH CARE</a></li>
                            <li><a href="javascript:void(0);">QUOTE</a></li>
                            <li><a href="javascript:void(0);">ANNUAL ENROLLMENT</a></li>
                            <li><a href="javascript:void(0);">COMPARE</a></li>
                            <li><a href="javascript:void(0);">THE DONUT HOLE</a></li>
                            <li><a href="javascript:void(0);">MEDICARE LIFESTYLE</a></li>
                        </ul>
                    </div-->
                </div>
            </div>
        </div>
    </div>
</section>

<?php if(count($allState) >0 ) { ?>
<section class="state-block custom-state-block">
    <div class="container">
        <div class="row">
			<div class="col-12">
				<h2><?=$cms_content[0]->title?> Plans In Your State</h2>
				<ul class="list-group custom-list-group">
					<?php for($i=0;$i<count($allState);$i++){ ?>
					<li>
						<a href="<?php echo  base_url().$stateSlug.'/'.$allState[$i]->slug;?>" class="state-name-list-color"><?php echo $allState[$i]->title;?></a>
					</li>
					<?php } ?>
				</ul>
			</div>
	    </div>
    </div>
</section>
<?php } ?>