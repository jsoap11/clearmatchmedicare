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
                <li><a href="javascript:void(0);">See All State</a></li>
                <li class="active"><span>Medicare in Alaska</span></li>
            </ul>
        </div>
        <div class="common-content-block">
            <div class="row">
                <div class="col-12 col-lg-8 mt-3">
			        <h1>Medicare Plans in Alaska</h1>
                    <h3 class="text-blue">How Do You Qualify for Medicare?</h3>
                    <p class="open-sans font-14 p-3">
                        <img alt="Alabama Flag" class="float-right d-none d-lg-block shadow" src="assets/image/AlaskaFlag.jpg">
                        Medicare is a federally-funded health insurance program. American citizens living in the United States qualify for Medicare once they turn 65. They may also qualify if they are under 65 and meet one of the following conditions:
                        </p>
                    <ul>
                        <li>
                            <p class="open-sans font-14">Receive Social Security disability insurance (SSDI) for at least 24 months</p>
                        </li>
                        <li>
                            <p class="open-sans font-14">Have End-Stage Renal Disease (ESRD)</p>
                        </li>
                        <li>
                            <p class="open-sans font-14">Have amyotrophic lateral sclerosis (ALS, also known as <i>Lou Gehrig's disease</i>)</p>
                        </li>
                        <li>
                            <p class="open-sans font-14">Receive Railroad Retirement Benefits</p>
                        </li>
                    </ul>
                    <p class="open-sans font-14">There is no income requirement to qualify for Medicare.</p>
                    <h3 class="text-blue mt-4 m-0">What Medicare Plans Are Available in Alaska?</h3>
                    <p class="open-sans font-14">Medicare enrollees have multiple options to receive their benefits.</p>
                    <ul>
                        <li>
                            <p class="open-sans font-14"><strong>Original Medicare</strong> includes Part A (hospital insurance) and Part B (medical insurance)</p>
                        </li>
                        <li>
                            <p class="open-sans font-14"><strong>Medicare Advantage</strong> MA) plans, also known as Part C, cover the same services as Original Medicare, with most MA plans offering additional coverage</p>
                        </li>
                        <li>
                            <p class="open-sans font-14"><strong>Medicare Part D</strong> plans provide prescription drug coverage</p>
                        </li>
                        <li>
                            <p class="open-sans font-14"><strong>Medicare Supplement Insurance</strong> plans, also known as <i>Medigap</i>, help pay for some of the costs not covered by Original Medicare</p>
                        </li>
                    </ul>
                    <p class="open-sans font-14">Private insurance companies provide Medicare Advantage, Part D, and Medigap plans. Coverage and costs vary according to each plan and provider. However, beneficiaries still pay their Part B premium, even if they have an MA plan.</p>
                    <p class="open-sans font-14">Alaska does not require Medigap providers to offer plans to beneficiaries who are under age 65.</p>
                    <h3 class="text-blue mt-4">Medicare Savings Programs in Alaska</h3>
                    <p class="open-sans font-14">Although Medicare is a federally-funded program, there are state-level programs to help Alaskans pay their Medicare costs. These are known as Medicare Savings Programs (MSPs) and include:</p>
                    <ul>
                        <li>
                            <p class="open-sans font-14">Qualified Medicare Beneficiary (QMB) Program</p>
                        </li>
                        <li>
                            <p class="open-sans font-14">Special Low-Income Medicare Beneficiary (SLMB) Program</p>
                        </li>
                        <li>
                            <p class="open-sans font-14">Qualifying Individual (QI) Program</p>
                        </li>
                        <li>
                            <p class="open-sans font-14">Qualified Disabled and Working Individuals (QDWI) Program</p>
                        </li>
                    </ul>
                    <p class="open-sans font-14">While Medicare has no income requirements, MSPs do. Refer to the table below to see the <a class="text-blue" href="javascript:void(0)" onclick="location.href = 'https://secure.ssa.gov/poms.nsf/lnx/0600815023/';" rel="nofollow"> income and resource limits</a> for each program. If you are still employed, you may qualify even if your income exceeds these limits. It's always worth applying to see if you qualify.</p>
                    <div class="bg-blue py-3 text-center mt-5">
                    <h4 class="text-white open-sans"><strong>Medicare Savings Program Requirements (Alaska)</strong></h4>
                    </div>
                    <table class="table table-hover table-bordered table-striped table-responsive open-sans">
                        <tbody>
                            <tr>
                                <th align="left" scope="row">Program <span class="d-block">Name</span></th>
                                <td class="align-middle text-center">QMB <span class="d-block">Program</span></td>
                                <td class="align-middle text-center">SLMB <span class="d-block">Program</span></td>
                                <td class="align-middle text-center">QI <span class="d-block">Program</span></td>
                                <td class="align-middle text-center">QDWI <span class="d-block">Program</span></td>
                            </tr>
                            <tr>
                                <th scope="row">Individual <span class="d-block">Income</span></th>
                                <td class="align-middle text-center">$1,320 <span class="d-block">Per Month</span></td>
                                <td class="align-middle text-center">$1,580 <span class="d-block">Per Month</span></td>
                                <td class="align-middle text-center">$1,775 <span class="d-block">Per Month</span></td>
                                <td class="align-middle text-center">$5,285 <span class="d-block">Per Month</span></td>
                            </tr>
                            <tr>
                                <th scope="row">Married <span class="d-block">Income</span></th>
                                <td class="align-middle text-center">$1,781 <span class="d-block">Per Month</span></td>
                                <td class="align-middle text-center">$2,133 <span class="d-block">Per Month</span></td>
                                <td class="align-middle text-center">$2,398 <span class="d-block">Per Month</span></td>
                                <td class="align-middle text-center">$7,129 <span class="d-block">Per Month</span></td>
                            </tr>
                            <tr>
                                <th scope="row">Individual <span class="d-block">Resources</span></th>
                                <td class="align-middle text-center">$7,730</td>
                                <td class="align-middle text-center">$7,730</td>
                                <td class="align-middle text-center">$7,730</td>
                                <td class="align-middle text-center">$4,000</td>
                            </tr>
                            <tr>
                                <th scope="row">Married <span class="d-block">Resources</span></th>
                                <td class="align-middle text-center">$11,600</td>
                                <td class="align-middle text-center">$11,600</td>
                                <td class="align-middle text-center">$11,600</td>
                                <td class="align-middle text-center">$6,000</td>
                            </tr>
                            <tr>
                                <th scope="row">Helps <span class="d-block">Pay</span></th>
                                <td class="align-middle text-center">All out-of-pocket costs</td>
                                <td class="align-middle text-center">Part B Premiums</td>
                                <td class="align-middle text-center">Part B Premiums</td>
                                <td class="align-middle text-center">Part A Premiums</td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 class="text-blue mt-4">Additional Alaska Medicare Resources</h3>
                    <p class="open-sans font-14">The following sites offer additional information on <strong>Medicare in Alaska.</strong></p>
                    <ul>
                        <li class="open-sans font-14"><a class="text-blue" href="javascript:void(0)" onclick="location.href = 'https://www.aldoi.gov/';" rel="nofollow">Alaska Department of Insurance</a></li>
                        <li class="open-sans font-14"><a class="text-blue" href="javascript:void(0)" onclick="location.href = 'http://www.medicaid.alabama.gov/';" rel="nofollow">Alaska Medicaid Office</a> or call toll-free<a class="text-blue" href="tel:800-478-6065"> 800-478-6065</a></li>
                        <li class="open-sans font-14"><a class="text-blue" href="javascript:void(0)" onclick="location.href = 'https://www.aldoi.gov/Consumers/SeniorHealthInsurance.aspx/';" rel="nofollow">Help with Medicare Costs</a></li>
                        <li class="open-sans font-14"><a class="text-blue" href="javascript:void(0)" onclick="location.href = 'https://www.aldoi.gov/Consumers/SeniorHealthInsurance.aspx/';" rel="nofollow">Alaska Division of Public Assistance</a></li>
                    </ul>
                    <p class="open-sans font-14">You can also call MedicareUSA toll-free at <a class="text-blue" href="tel:1-800-637-7602">1-800-637-7602</a>. Our licensed agents are happy to answer your questions and guide you through the Medicare program. The best part? Working with MedicareUSA is always free!</p>
                    <hr class="my-4">		
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