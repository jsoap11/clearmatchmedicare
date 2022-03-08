<?php $page= "aetna";?>

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
                <li class="active"><span>Aetna</span></li>
            </ul>
        </div>
        <div class="common-content-block">
            <div class="row">
            <div class="col-12 col-md-12 col-lg-8 pb-lg-5">
			<p><img alt="" src="assets/image/aetna-logo.png"></p>
                    <h1>Aetna Medicare Insurance Plans</h1>
                    <p class="open-sans font-14">Aetna Insurance Company launched 200 years ago, in 1819. Initially offering only fire insurance, the company did not enter the health insurance field until 1899. In the year 2000, Aetna's focus shifted entirely to health insurance. Today, it is one of America's leading managed healthcare companies. Aetna offers a wide range of Medicare plans as well as ancillary benefits such as wellness, vision, and fitness coverage.</p>
                    <h3 class="text-blue mt-4 m-0">Aetna Medicare Advantage Plans</h3>
                    <p class="open-sans font-14">As with all private Medicare providers, Aetna's Medicare Advantage (MA) plans vary according to where you live. Possible options include:</p>
                    <ul>
                        <li>
                            <p class="open-sans font-14"><strong>HMO plans:</strong> Typically require beneficiaries to choose a primary care physician (PCP) within the plan's network. The PCP helps coordinate care with other providers in the network.</p>
                        </li>
                        <li>
                            <p class="open-sans font-14"><strong>HMO-POS plans:</strong> Most HMO-POS plans allow beneficiaries to see out-of-network providers for certain services at an additional cost.</p>
                        </li>
                        <li>
                            <p class="open-sans font-14"><strong>PPO plans:</strong> These plans allow the beneficiary to see any Medicare-approved provider who accepts Aetna's terms, in- or out-of-network.</p>
                        </li>
                        <li>
                            <p class="open-sans font-14"><strong>Dual Special Needs plans:</strong> Available to beneficiaries who qualify for both Medicare and Medicaid.</p>
                        </li>
                    </ul>
                    <p class="open-sans font-14">Many Aetna MA plans offer additional benefits and most offer prescription drug coverage. Again, additional benefits vary according to the plan you choose (and plan options vary according to where you live). Extra benefits may include:</p>
                    <ul>
                        <li>
                            <p class="open-sans font-14"><strong>Resources for Living:</strong> A concierge service to help beneficiaries find healthcare resources in their area.</p>
                        </li>
                        <li>
                            <p class="open-sans font-14"><strong>SilverSneakers</strong> A fitness benefit designed to help members stay active and healthy.</p>
                        </li>
                        <li>
                            <p class="open-sans font-14"><strong>Ask a Nurse 24/7:</strong> Allows enrollees to talk to a registered nurse 24 hours a day, 7 days a week.</p>
                        </li>
                        <li>
                            <p class="open-sans font-14"><strong>Prescription home delivery:</strong> Have your prescriptions delivered directly to your front door.</p>
                        </li>
                    </ul>
                    <p class="open-sans font-14">The licensed agents at MedicareUSA can help you understand the Aetna Medicare Advantage plan options in your area.</p>
                    <h3 class="text-blue mt-4">Aetna Medicare Rx Plans</h3>
                    <p class="open-sans font-14">If you prefer to stay with Original Medicare, Aetna also offers three Medicare Part D (prescription drug) plans. These are available in all 50 states as well as Washington, D.C. Monthly premiums and yearly deductibles vary according to your state. Options include:</p>
                    <ul>
                        <li class="open-sans font-14">Select</li>
                        <li class="open-sans font-14">Saver</li>
                        <li class="open-sans font-14">Value Plus</li>
                    </ul>
                    <p class="open-sans font-14">All Aetna Medicare Rx plans offer free home delivery on tier one and two drugs when you use preferred pharmacies. Drug copays vary according to the plan and prescription. Gap coverage is also available.</p>
                    <h3 class="text-blue mt-4">Aetna Medicare Supplement Plans</h3>
                    <p class="open-sans font-14">Aetna also offers Medicare Supplement Plans (Medigap) to Original Medicare beneficiaries in most states. These plans help enrollees pay certain out-of-pocket costs (coverage varies depending on which Medigap plan you choose).</p>
                    <h3 class="text-blue mt-4">Find an Aetna Medicare Plan</h3>
                    <p class="open-sans font-14">Finding the right Aetna Medicare plan to meet your needs can be extremely confusing. The team at MedicareUSA is here to help. We work with you to help you find the best plan that meets both your budget and your unique healthcare needs. Use our Plan Finder to review your options.</p>
                    <hr class="my-4">
                    <p class="small open-sans"><b>Aetna</b></p>
                    <p class="address open-sans font-14 col-lg-3 p-0">151 Farmington Avenue</p>
                    <p class="address open-sans font-14">Hartford, CT 06156</p>
                    <p class="address open-sans font-14">Phone: <a class="text-blue" href="tel:18008723862">1-800-872-3862</a></p>		
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
                            <h4>1-800-637-7602 TTY User: 711</h4>
                            <span>Mon-Fri 8:00a - 8:00p</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        
<?php include("footer.php"); ?>