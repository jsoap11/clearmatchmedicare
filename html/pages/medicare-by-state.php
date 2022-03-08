<?php $page= "state";?>

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
                <li class="active"><span>Medicare by State</span></li>
            </ul>
        </div>
        <div class="common-content-block">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8">
                    <h1>Medicare by State</h1>
                    <p class="open-sans">Although Medicare is a federally-funded program, every state's insurance department provides information specific to that state. Simply click on your state for details about help paying for Medicare and state-specific information regarding Medicare Part D and Medigap plans.</p>
                    <p class="open-sans">You can also call MedicareUSA toll-free at <a class="text-blue" href="tel:18006377602">1-800-637-7602</a>. One of our licensed agents is happy to help you find the best plan to fit your needs.</p>
                    <div class="row">
                        <div class="col-6 col-sm-4">
                            <ul class="list-group">
                                <li class="list-group-item border-0 bg-transparent p-0"><a class="state-name-list-color" href="javascript:void(0);">Alabama</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Alaska</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Arizona</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Arkansas</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">California</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Colorado</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Connecticut</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Delaware</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Florida</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Georgia</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Hawaii</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Idaho</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Illinois</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Indiana</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Iowa</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Kansas</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Kentucky</a></li>
                            </ul>
                        </div>
                    
                        <div class="col-6 col-sm-4">
                            <ul class="list-group">
                                <li class="list-group-item border-0 bg-transparent p-0"><a class="state-name-list-color" href="javascript:void(0);">Louisiana</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Maine</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Maryland</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Massachusetts</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Michigan</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Minnesota</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Mississippi</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Missouri</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Montana</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Nebraska</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Nevada</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">New Hampshire</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">New Jersey</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">New Mexico</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">New York</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">North Carolina</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">North Dakota</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-sm-4">
                            <ul class="list-group">
                                <li class="list-group-item border-0 bg-transparent p-0"><a class="state-name-list-color" href="javascript:void(0);">Ohio</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Oklahoma</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Oregon</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Pennsylvania</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Rhode Island</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">South Carolina</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">South Dakota</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Tennessee</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Texas</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Utah</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Vermont</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Virginia</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Washington, D.C.</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Washington</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">West Virginia</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Wisconsin</a></li>
                                <li class="list-group-item border-0 bg-transparent p-0 mt-2"><a class="state-name-list-color" href="javascript:void(0);">Wyoming</a></li>
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