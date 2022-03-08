<?php $page= "carriers";?>

<?php include("header.php"); ?>

<!-- Looking for Plan -->
<div class="bg-blue2 blue-zip py-4">
	<div class="container d-md-flex text-left justify-content-center align-items-center">
		<h6 class="text-white open-sans d-none d-lg-block"><b>Looking for a plan?</b> Enter your zip code to shop online.</h6>
		<div class="d-none d-md-block d-lg-none mr-4">
			<h6 class="text-white open-sans"><b>Looking for a plan?</b></h6>
			<h6 class="text-white open-sans">Enter your zip code to shop online.</h6>
		</div>
		<form id="get_header_frm" method="get" action="https://enroll.medicareusa.com/pgTransferMUSA.aspx?" novalidate="novalidate">
			<div style="display:none">
				<input type="hidden" name="pgName" value="/medicare-by-state"> 
				<input type="hidden" name="category" value="MA">
				<input type="hidden" name="temp1" value="1440">
				<input type="hidden" name="refid" value="">
				<input type="hidden" name="subid" value="">
				<input type="hidden" name="gclickid" value="">
				<input type="hidden" name="transferPage" id="transferPage" value="planlist"> 
				<input type="hidden" name="coveragestartdate" value="06/01/2021" readonly="true">
				<input type="hidden" id="county" name="county" value="">
			</div>
			<div class="form-group border bg-white ml-lg-4 d-flex justify-content-center find-plan-text-form mt-2">
				<input value="361305" type="text" onkeypress="return isNumber(event)" maxlength="5" name="zipcode" id="zipcode" class="form-control shadow-none bg-transparent border-0 shop-zip delete error" placeholder="Enter ZIP code" aria-required="true" aria-invalid="true">
				<input type="button" onclick="frmValidate_header()" value="FIND A PLAN" class="form-control btn btn-red find-plan-submit-btn text-white shadow-none">
			</div>
			<div class="ml-lg-4 mt-2 shop-online-zip d-none" id="zipcode_validate"><label id="zipcode-error" class="error" for="zipcode">Please enter a valid ZIP Code</label></div>
		</form>
	</div>
</div>

<!-- Common Block -->
<section class="common-block">
    <div class="container">
        <div class="breadcrumbs-block">
            <ul>
                <li><a href="javascript:void(0);">Home</a></li>
                <li><a href="javascript:void(0);">Medicare Carrier</a></li>
                <li class="active"><span>Medicare Insurance Plan Carriers</span></li>
            </ul>
        </div>
        <div class="common-content-block">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-8 pb-lg-5">
                    <h1>Medicare Insurance Plan Carriers</h1>
                    <p class="open-sans font-14">MedicareUSA partners with a wide array of private insurance companies that offer Medicare plans. Whether you're looking for a Medicare Advantage plan, prescription drug coverage, or a Medigap plan, our licensed agents can help you find the best plan and carrier to meet your needs.</p>
                    <p class="open-sans font-14">To learn more about each carrier's offerings, simply click the appropriate link. You can also call us toll-free at <a class="text-blue" href="tel:18555372378">1-855-537-2378</a>. One of our licensed agents will answer all of your questions and help you choose the right insurance company and Medicare plan for your unique situation.</p>
                    <div class="row">
                        <div class="col-12 col-sm-6 font-14">
                            <ul class="list-group open-sans">
                                <li class="list-group-item border-0 px-0 py-2">ACI</li>
                                <li class="list-group-item border-0 px-0 py-2"><a class="text-blue" href="javascript:void(0);">Aetna</a></li>
                                <li class="list-group-item border-0 px-0 py-2">Aetna/Coventry</li>
                                <li class="list-group-item border-0 px-0 py-2"><a class="text-blue" href="javascript:void(0);">Anthem/Empire</a></li>
                                <li class="list-group-item border-0 px-0 py-2"><a class="text-blue" href="javascript:void(0);">Blue Cross Blue Shield</a></li>
                                <li class="list-group-item border-0 px-0 py-2">Central United Life</li>
                                <li class="list-group-item border-0 px-0 py-2"><a class="text-blue" href="javascript:void(0);">Cigna</a></li>
                                <li class="list-group-item border-0 px-0 py-2">Cigna HealthSpring</li>
                                <li class="list-group-item border-0 px-0 py-2"><a class="text-blue" href="javascript:void(0);">ConnectiCare</a></li>
                                <li class="list-group-item border-0 px-0 py-2"><a class="text-blue" href="javascript:void(0);">Continental Life</a></li>
                                <li class="list-group-item border-0 px-0 py-2">EmblemHealth</li>
                                <li class="list-group-item border-0 px-0 py-2">Envision</li>
                                <li class="list-group-item border-0 px-0 py-2"><a class="text-blue" href="javascript:void(0);">Excellus NY</a></li>
                                <li class="list-group-item border-0 px-0 py-2"><a class="text-blue" href="javascript:void(0);">Gerber Life</a></li>
                                <li class="list-group-item border-0 px-0 py-2"><a class="text-blue" href="javascript:void(0);">Government Personnel Mutual</a></li>
                                <li class="list-group-item border-0 px-0 py-2"><a class="text-blue" href="javascript:void(0);">Guarantee Trust Life</a></li>
                                <li class="list-group-item border-0 px-0 py-2"><a class="text-blue" href="javascript:void(0);">Harvard Pilgrim</a></li>
                                <li class="list-group-item border-0 px-0 py-2"><a class="text-blue" href="javascript:void(0);">Highmark</a></li>
                                <li class="list-group-item border-0 px-0 py-2">Horizon</li>
                                <li class="list-group-item border-0 px-0 py-2"><a class="text-blue" href="javascript:void(0);">Humana</a></li>
                                <li class="list-group-item border-0 px-0 py-2">Manhattan Life</li>
                                <li class="list-group-item border-0 px-0 py-2"><a class="text-blue" href="javascript:void(0);">Mutual of Omaha</a></li>
                                <li class="list-group-item border-0 px-0 py-2"><a class="text-blue" href="javascript:void(0);">Priority Health</a></li>
                                <li class="list-group-item border-0 px-0 py-2">Regence</li>
                                <li class="list-group-item border-0 px-0 py-2">SilverScript&nbsp;</li>
                                <li class="list-group-item border-0 px-0 py-2">UnitedHealthCare</li>
                            </ul>
                        </div>
                    </div>		
                </div>
                <div class="col-12 col-lg-4 mt-5 px-0 px-lg-5">
                    <div class="sticky-top">
                        <div class="find-plan-block">
                            <h6>Find a Plan today!</h6>
                            <form action="" class="find-plan-form">
                                <input type="text" placeholder="Enter ZIP Code" class="form-control" />
                                <span class="error">Please enter a valid ZIP Code</span>
                                <button type="submit" class="btn btn-submit">FIND A PLAN</button>
                            </form>
                            <h5>Call a Licensed Sales Agent</h5>
                            <h4>1-855-537-2378 TTY User: 711</h4>
                            <span>Mon-Fri 8:00a - 8:00p</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        
<?php include("footer.php"); ?>