<?php $page= "glossary";?>

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
                <li class="active"><span>Medicare Glossary</span></li>
            </ul>
        </div>
        <div class="common-content-block">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-8 pb-lg-5">
                    <h1>Glossary of Common Medicare Terms</h1>
                    <p class="open-sans font-14">It sometimes seems as though Medicare has its own language. On this page, we define terms commonly used by Medicare.</p>
                    <div class="glossary-list-block d-lg-flex"><a class="text-blue h5 open-sans" href="#A">A</a> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <a class="text-blue h5 ml-1 open-sans" href="#B">B</a> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <a class="text-blue h5 ml-1 open-sans" href="#C">C</a> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <a class="text-blue h5 ml-1 open-sans" href="#D">D</a> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <a class="text-blue h5 ml-1 open-sans" href="#E">E</a> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <a class="text-blue h5 ml-1 open-sans" href="#F">F</a> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <a class="text-blue h5 ml-1 open-sans" href="#G">G</a> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <a class="text-blue h5 ml-1 open-sans" href="#H">H</a> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <a class="text-blue h5 ml-1 open-sans" href="#I">I</a> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <span class="text-black-50 h5 ml-1 open-sans">J</span> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <span class="text-black-50 h5 ml-1 open-sans">K</span> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <a class="text-blue h5 ml-1 open-sans" href="#L">L</a> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <a class="text-blue h5 ml-1 open-sans" href="#M">M</a> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <a class="text-blue h5 ml-1 open-sans" href="#N">N</a> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <a class="text-blue h5 ml-1 open-sans" href="#O">O</a> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <a class="text-blue h5 ml-1 open-sans" href="#P">P</a> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <span class="text-black-50 h5 ml-1 open-sans">Q</span> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <a class="text-blue h5 ml-1 open-sans" href="#R">R</a> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <a class="text-blue h5 ml-1 open-sans" href="#S">S</a> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <a class="text-blue h5 ml-1 open-sans" href="#T">T</a> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <a class="text-blue h5 ml-1 open-sans" href="#U">U</a> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <span class="text-black-50 h5 ml-1 open-sans">V</span> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <span class="text-black-50 h5 ml-1 open-sans">W</span> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <span class="text-black-50 h5 ml-1 open-sans">X</span> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <span class="text-black-50 h5 ml-1 open-sans">Y</span> <span class="text-black-50 font-weight-bold h5 open-sans ml-1">-</span> <span class="text-black-50 h5 ml-1 open-sans">Z</span></div>
                    <div class="capital" id="A">&nbsp;</div>
                    <div class="d-flex justify-content-between align-items-center">
                       <h3 class="text-dark mt-4 m-0">A</h3>
                    </div>
                    <h4 class="text-blue mt-4">Accept assignment</h4>
                    <p class="open-sans font-14">If a provider (physician, supplier, pharmacy, etc.) accepts assignment, it means they agree to accept the Medicare-approved amount for the service or item. That means the provider cannot then bill you for anything beyond your Medicare coinsurance or deductible.</p>
                    <h4 class="text-blue">Advance Beneficiary Notice of Noncoverage (ABN)</h4>
                    <p class="open-sans font-14">Your provider should ask you to sign an Advance Beneficiary Notice of Noncoverage before supplying a service or item they believe Medicare will not cover. If you sign an ABN and Medicare denies the claim, you most likely have to pay for it. However, if the provider did not provide an ABN before supplying the service or item, you may not have to pay.</p>
                    <h4 class="text-blue mt-4">Advance directive</h4>
                    <p class="open-sans font-14">If you prefer to stay with Original Medicare, Aetna also offers three Medicare Part D (prescription drug) plans. These are available in all 50 states as well as Washington, D.C. Monthly premiums and yearly deductibles vary according to your state. Options include:</p>
                    <p class="open-sans font-14">A written, legal document that describes your wishes in the event you become unable to make your wishes known. Common examples include a medical power of attorney and a living will.</p>
                    <h4 class="text-blue mt-4">Annual Enrollment Period (AEP)</h4>
                    <p class="open-sans font-14">Sometimes referred to as <em>Open Enrollment</em>, the AEP is your yearly opportunity to make changes to your Medicare coverage. It begins on October 15 and lasts through December 7. You may sign up for a Medicare Advantage (MA) plan, switch back to Original Medicare, or choose a Medicare Part D plan. Changes made during annual enrollment take effect on January 1 of the following year.</p>
                    <h4 class="text-blue mt-4">Assignment</h4>
                    <p class="open-sans font-14">An agreement between a doctor or other provider and Medicare. The provider agrees to accept Medicare's approved cost for the service and Medicare agrees to pay claims for covered services.</p>
                    <div class="capital" id="B">&nbsp;</div>
                    <div class="d-flex justify-content-between align-items-center">
                       <h3 class="text-dark mt-4 m-0">B</h3>
                    </div>
                    <h4 class="text-blue mt-4">Balance Billing</h4>
                    <p class="open-sans font-14">If a Medicare Private Fee-for-Service Plan’s provider (doctor or hospital) charges you more than the plan’s payment amount for services, this is called balance billing. This overcharge cannot be more than 15% of the amount approved by Medicare and may be less, depending on your state. In order to balance bill, the provider must have a written contract with the Medicare Private-Fee-for-Service Plan OR have met certain company conditions to ensure a contract.</p>
                    <h4 class="text-blue">Benefit period</h4>
                    <p class="open-sans font-14">The Medicare Part A benefit period begins the day a hospital or skilled nursing facility admits you as an inpatient. The benefit period ends when you go 60 days in a row without receiving inpatient care. Unlike Part B, which has an annual deductible, you must pay the Part A deductible for each benefit period. There may be multiple benefit periods in a single year.</p>
                    <div class="capital" id="C">&nbsp;</div>
                    <div class="d-flex justify-content-between align-items-center">
                       <h3 class="text-dark mt-4 m-0">C</h3>
                    </div>
                    <h4 class="text-blue mt-4">Catastrophic Coverage</h4>
                    <p class="open-sans font-14">If you enter and leave the Donut Hole in a single calendar year, you enter what Medicare calls catastrophic coverage. During this stage, you pay a relatively small co-payment or co-insurance for covered prescriptions. Your Part D plan pays the rest. The out-of-pocket amount to enter the catastrophic coverage stage changes every year.</p>
                    <p class="open-sans font-14">A written, legal document that describes your wishes in the event you become unable to make your wishes known. Common examples include a medical power of attorney and a living will.</p>
                    <h4 class="text-blue mt-4">Centers for Medicare and Medicaid Services (CMS)</h4>
                    <p class="open-sans font-14">CMS is a federal agency within the U.S. Department of Health and Human Services. The program works to help lower costs and improve healthcare for tens of millions of Americans. CMS helps beneficiaries of Medicare, Medicaid, the Children's Health Insurance Program (CHIP), and the Health Insurance Marketplace.</p>
                    <h4 class="text-blue mt-4">Claim</h4>
                    <p class="open-sans font-14">If you submit a request for payment to Medicare or other insurance provider, this is known as a <i>claim</i>.</p>
                    <h4 class="text-blue mt-4">Clinical breast exam</h4>
                    <p class="open-sans font-14">This in-office exam given by your doctor or healthcare provider includes visual and manual observation of your breasts. It is not a mammogram. Typically, women receive a clinical breast exam once a year during their annual pelvic exam and Pap test.</p>
                    <h4 class="text-blue mt-4">Co-insurance</h4>
                    <p class="open-sans font-14">An out-of-pocket amount Medicare beneficiaries usually pay for covered services. Typically, co-insurance is a percent of Medicare-approved amount. For example, most covered Part B services have a 20 percent co-insurance charge.</p>
                    <h4 class="text-blue mt-4">Co-payment</h4>
                    <p class="open-sans font-14">Unlike co-insurance, co-payments are usually a set dollar amount for covered services or items. For example, you may have a $15 co-pay for visits to your primary care physician if you have a Medicare Advantage plan.</p>
                    <h4 class="text-blue mt-4">Coordination of Benefits</h4>
                    <p class="open-sans font-14">If you have health insurance in addition to Medicare, coordination of benefits determines which plan pays first. Numerous factors determine who pays first, including whether your secondary insurance is via a civilian employer or the military.</p>
                    <h4 class="text-blue mt-4">Cost sharing</h4>
                    <p class="open-sans font-14">Refers to numerous methods Medicare employs to share costs with beneficiaries, including co-insurance, co-pays, deductibles, and premiums.</p>
                    <h4 class="text-blue mt-4">Coverage determination (Part D)</h4>
                    <p class="open-sans font-14">If you have a question about your prescription drug benefits, the coverage determination is your plan's first decision. It includes information about whether a particular drug is covered, if you meet the requirements for a requested drug, and your out-of-pocket costs. Part D plans must return prompt coverage determination decisions – within 24 hours for an expedited request and 72 hours for a standard request. If you disagree with the coverage determination, filing an appeal is the next step.</p>
                    <h4 class="text-blue mt-4">Coverage Gap</h4>
                    <p class="open-sans font-14">Commonly known as the donut hole, you enter the Part D coverage gap when you and your plan spend a specific amount. You remain in the coverage gap until your out-of-pocket spending meets predetermined limits. The amounts to enter and leave the coverage gap change every year.</p>
                    <h4 class="text-blue mt-4">Creditable prescription drug coverage</h4>
                    <p class="open-sans font-14">If you have prescription drug coverage through a provider other than Medicare, the benefits must be at least as good as those offered by Medicare. If it does not pay about the same amount that Medicare pays, it is not creditable. You may have to pay a penalty for late Part D enrollment.</p>
                    <h4 class="text-blue mt-4">Critical access hospital (CAH)</h4>
                    <p class="open-sans font-14">Small healthcare facility in rural areas that provides limited outpatient and inpatient services.</p>
                    <h4 class="text-blue mt-4">Custodial care</h4>
                    <p class="open-sans font-14">Assistance with personal care activities, characterized as those you could normally do yourself. May include bathing, dressing, and some medically-related activities, such as administering medications. Custodial care is not covered by Medicare.</p>
                    <div class="capital" id="D">&nbsp;</div>
                    <div class="d-flex justify-content-between align-items-center">
                       <h3 class="text-dark mt-4 m-0">D</h3>
                    </div>
                    <h4 class="text-blue mt-4">Deductible</h4>
                    <p class="open-sans font-14">This is a fixed amount that you must pay out-of-pocket before Original Medicare or your Medicare plan pays.</p>
                    <h4 class="text-blue mt-4">Donut hole</h4>
                    <p class="open-sans font-14">Also known as the <i>Part D coverage gap</i>, you enter the donut hole when you and your plan spend a specific amount. You remain in the gap until your out-of-pocket spending meets predetermined limits. The amounts to enter and leave the donut hole change every year. See <i>coverage gap</i>.</p>
                    <h4 class="text-blue mt-4">Drug list</h4>
                    <p class="open-sans font-14">Medicare Part D plans provide a list of covered prescriptions. Also known as a drug formulary, if your prescription is not listed here, it is not covered by your Part D plan.</p>
                    <h4 class="text-blue mt-4">Dual Eligible</h4>
                    <p class="open-sans font-14">If you qualify for both Medicare and Medicaid, you are what is known as dual eligible. If you have full Medicaid, you receive prescription drug coverage via Medicare Part D and qualify for Extra Help. Medicaid should cover your remaining costs after Medicare pays.</p>
                    <h4 class="text-blue mt-4">Durable medical equipment (DME)</h4>
                    <p class="open-sans font-14">Your doctor may prescribe certain medical equipment for you to use at home. Common examples include a hospital bed, wheelchair, and an oxygen tank.</p>
                    <div class="capital" id="E">&nbsp;</div>
                    <div class="d-flex justify-content-between align-items-center">
                       <h3 class="text-dark mt-4 m-0">E</h3>
                    </div>
                    <h4 class="text-blue mt-4">End-Stage Renal Disease (ESRD)</h4>
                    <p class="open-sans font-14">Also known as <em>end-stage kidney disease</em>, ESRD occurs when chronic kidney disease advances to the point that your kidneys are no longer able to meet your body's needs, i.e. filtering waste and excess fluid from your blood.</p>
                    <h4 class="text-blue mt-4">Exception</h4>
                    <p class="open-sans font-14">If your Part D plan doesn't cover a prescription, you may submit a request asking for an exception. You may also ask for a tiering exception if your prescription is not on one of the preferred tiers. Requests should include supporting documentation from the prescribing doctor.</p>
                    <h4 class="text-blue mt-4">Excess charge</h4>
                    <p class="open-sans font-14">Under Original Medicare, you may see a doctor who does not accept Medicare, or only accepts assignment on certain services. In this case, the provider may charge more than the Medicare-approved amount for the service. The amount over the Medicare-approved cost is the <i>excess charge</i>.</p>
                    <h4 class="text-blue mt-4">Extra Help</h4>
                    <p class="open-sans font-14">If you meet certain income and resource requirements, you may qualify for assistance paying some Medicare costs. May include premiums, deductibles, co-insurance, and other cost sharing items.</p>
                    <div class="capital" id="F">&nbsp;</div>
                    <div class="d-flex justify-content-between align-items-center">
                       <h3 class="text-dark mt-4 m-0">F</h3>
                    </div>
                    <h4 class="text-blue mt-4">FFS (Fee for Service)</h4>
                    <p class="open-sans font-14">A payment model for healthcare that pays each service separately. Medicare's payment method used to follow the FFS model. Changes came about when it was determined some providers felt incentivized to provide unnecessary treatments, leading to a question of quantity versus quality as regards healthcare.</p>
                    <h4 class="text-blue mt-4">Formulary</h4>
                    <p class="open-sans font-14">Medicare Part D plans include a list of prescription drugs covered by the plan. Before choosing a prescription drug plan, always review the plan's formulary to ensure it covers your medications.</p>
                    <div class="capital" id="G">&nbsp;</div>
                    <div class="d-flex justify-content-between align-items-center">
                       <h3 class="text-dark mt-4 m-0">G</h3>
                    </div>
                    <h4 class="text-blue mt-4">Grievance</h4>
                    <p class="open-sans font-14">If you have a complaint about the care provided by your Medicare plan – including your prescription drug coverage – this is known as a grievance. Examples include negative interactions with staff or difficulty contacting someone at your plan. Please note that complaints about coverage decisions require filing an appeal, not a grievance.</p>
                    <h4 class="text-blue mt-4">Group health plan</h4>
                    <p class="open-sans font-14">This is typically the type of health plan provided by an employer, union, or other employee organization.</p>
                    <h4 class="text-blue mt-4">Guaranteed issue rights</h4>
                    <p class="open-sans font-14">Also known as <i>Medigap protections</i>, this encompasses certain periods where insurance companies must sell you a Medigap policy, regardless of your medical history. In addition, guaranteed issue rights protect you from being charged a higher premium based on pre-existing conditions.</p>
                    <h4 class="text-blue mt-4">Guaranteed renewable policy</h4>
                    <p class="open-sans font-14">This is a type of insurance policy that cannot be terminated unless you fail to meet requirements. Specifically, as long as you pay your premiums, do not attempt to defraud the insurance company, and do not make untrue statements, your Medigap policy is guaranteed renewable.</p>
                    <div class="capital" id="H">&nbsp;</div>
                    <div class="d-flex justify-content-between align-items-center">
                       <h3 class="text-dark mt-4 m-0">H</h3>
                    </div>
                    <h4 class="text-blue mt-4">Health insurance marketplace</h4>
                    <p class="open-sans font-14">A federally operated service designed to help U.S. citizens find affordable health insurance. Most states use the Marketplace (<a class="text-blue" href="https://www.healthcare.gov/">www.healthcare.gov</a>) although a few states manage their own.</p>
                    <h4 class="text-blue mt-4">Health maintenance organization</h4>
                    <p class="open-sans font-14">Commonly referred to as an HMO, this is a type of Medicare Advantage plan. It requires plan members to use a network of providers for covered services, including doctors, nurses, labs, and more. Typically, HMOs require members choose a primary care physician (PCP) from the network. He or she coordinates the patient's care among specialists.</p>
                    <h4 class="text-blue mt-4">Healthcare provider</h4>
                    <p class="open-sans font-14">Any organization or person licensed to provide healthcare. Common examples include doctors, nurses, clinics, laboratories, and hospitals.</p>
                    <h4 class="text-blue mt-4">Home health agency</h4>
                    <p class="open-sans font-14">Organizations that provide healthcare in the patient's home.</p>
                    <h4 class="text-blue mt-4">Home healthcare</h4>
                    <p class="open-sans font-14">Healthcare services that patients receive in their home that are ordered, planned, and monitored by the patient's physician. Medicare covers limited home healthcare services.</p>
                    <h4 class="text-blue mt-4">Hospice</h4>
                    <p class="open-sans font-14">Sometimes called <i>end-of-life care</i>, hospice care may be prescribed for terminally ill patients choosing to end treatment and receive palliative care. Hospice care supports both the patient and his or her family, friends, and caregivers.</p>
                    <h4 class="text-blue mt-4">Hospital insurance</h4>
                    <p class="open-sans font-14">Medicare Part A covers inpatient care received at either a hospital or skilled nursing facility.</p>
                    <div class="capital" id="I">&nbsp;</div>
                    <div class="d-flex justify-content-between align-items-center">
                       <h3 class="text-dark mt-4 m-0">I</h3>
                    </div>
                    <h4 class="text-blue mt-4">In-network provider</h4>
                    <p class="open-sans font-14">Any healthcare provider – including doctors, nurses, hospitals, and pharmacies – contracted with your health insurance plan. Most HMOs only cover care received in-network. Some plans, such as PPOs, cover out-of-network care at a higher out-of-pocket cost to the beneficiary.</p>
                    <h4 class="text-blue mt-4">Independent reviewer</h4>
                    <p class="open-sans font-14">If you appeal your Medicare plan's coverage or payment decision, Medicare may contract an organization, known as an <i>independent reviewer</i>, to review your case. The reviewer is not connected to your Medicare plan.</p>
                    <h4 class="text-blue mt-4">Initial Enrollment Period</h4>
                    <p class="open-sans font-14">This is the seven-month period when you first become eligible for Medicare. Commonly known as your IEP, it begins three months before your 65th birthday and ends three months after the month of your birthday. So, if you turn 65 in April, your IEP begins January 1 and extends through July 31.</p>
                    <h4 class="text-blue mt-4">Inpatient services</h4>
                    <p class="open-sans font-14">Care and services you receive after being admitted to either a hospital or skilled nursing facility. Examples include surgery, medical treatments, therapeutic services, and room and board.</p>
                    <div class="capital" id="L">&nbsp;</div>
                    <div class="d-flex justify-content-between align-items-center">
                       <h3 class="text-dark mt-4 m-0">L</h3>
                    </div>
                    <h4 class="text-blue mt-4">Late enrollment penalty</h4>
                    <p class="open-sans font-14">If you delay enrollment in Medicare Part B or Part D and do not qualify for a special enrollment period, you may have a late enrollment penalty. The amount varies according to how long you delayed enrollment. You must pay the late enrollment penalty for as long as you have Medicare coverage.</p>
                    <p class="open-sans font-14">The Part B late enrollment penalty is 10 percent of your monthly premium for every full 12-month period you could have signed up for Part B but did not. So, 10 percent for one full year, 20 percent for two full years, and so on.</p>
                    <p class="open-sans font-14">Part D's penalty varies according the base beneficiary premium, which is based on the national average. You pay 1 percent of this amount for every 30 days that you delayed enrollment in a Part D plan. This penalty is added to your Part D premium.</p>
                    <h4 class="text-blue mt-4">Lifetime reserve days</h4>
                    <p class="open-sans font-14">Under Original Medicare (Parts A and B), you have 60 lifetime reserve days. You dip into this bank any time you spend more than 90 days in the hospital. During lifetime reserve days, Medicare pays all covered hospital costs except for your daily co-insurance.</p>
                    <h4 class="text-blue mt-4">Limiting charge</h4>
                    <p class="open-sans font-14">If you receive covered services from a provider who does not accept assignment, he or she may only charge 15 percent above the Medicare-approved amount for said services. This does not apply to medical supplies or equipment.</p>
                    <h4 class="text-blue mt-4">Living will</h4>
                    <p class="open-sans font-14">A type of advance directive, this legal document delineates the types of treatments you approve in the event you are unable to advocate for yourself, such as if you are unconscious.</p>
                    <h4 class="text-blue mt-4">Long-term care</h4>
                    <p class="open-sans font-14">May include a variety of services, both medical and non-medical, for patients unable to perform these functions themselves. Treatment may be received in the home, in a nursing home, assisted living facility, or within their community. Like most health insurances, Medicare does not cover most long-term care services.</p>
                    <h4 class="text-blue mt-4">Long-term care hospital</h4>
                    <p class="open-sans font-14">Intended for patients requiring acute care for an extended period (average: over 25 days). Typically, patients transfer to a long-term care hospital from either an intensive or critical care center. Common services include respiratory therapy, pain management, comprehensive rehabilitation, and treatment for head trauma.</p>
                    <h4 class="text-blue mt-4">Low-income subsidy</h4>
                    <p class="open-sans font-14">Commonly referred to as Extra Help within Medicare Part D. The program helps eligible beneficiaries pay for their prescription drugs. Eligibility requirements include income and resource limits.</p>
                    <div class="capital" id="M">&nbsp;</div>
                    <div class="d-flex justify-content-between align-items-center">
                       <h3 class="text-dark mt-4 m-0">M</h3>
                    </div>
                    <h4 class="text-blue mt-4">Maximum out-of-pocket limit</h4>
                    <p class="open-sans font-14">Unlike Original Medicare, Medicare Advantage plans have an annual maximum out-of-pocket limit. Once you reach this limit, you don't have to pay anything for covered services for the rest of the year. This limit usually changes from year to year. It also varies according to the plan and insurance provider you choose.</p>
                    <h4 class="text-blue mt-4">Medicaid</h4>
                    <p class="open-sans font-14">State-run health insurance for citizens who meet their state's income and resource requirements. Medicare recipients who also qualify for Medicaid are described as having <i>dual eligibility</i>.</p>
                    <h4 class="text-blue mt-4">Medicaid-approved provider</h4>
                    <p class="open-sans font-14">Any healthcare provider (doctor, hospital, etc.) that Medicaid approves after an inspection conducted by the appropriate state agency.</p>
                    <h4 class="text-blue mt-4">Medical underwriting</h4>
                    <p class="open-sans font-14">Insurance company process that considers medical history and other risk factors to determine (1) whether to sell an insurance policy to an applicant and (2) how much to charge for that policy.</p>
                    <h4 class="text-blue mt-4">Medically necessary care</h4>
                    <p class="open-sans font-14">Any services or supplies that meet accepted medical standards and are required to diagnose and/or treat a medical condition.</p>
                    <h4 class="text-blue mt-4">Medicare</h4>
                    <p class="open-sans font-14">A federally run health insurance program available to all American citizens aged 65 or older as well as those who meet certain medical requirements.</p>
                    <h4 class="text-blue mt-4">Medicare Advantage Plan</h4>
                    <p class="open-sans font-14">Also known as Medicare Part C, Medicare Advantage plans resemble the group insurance offered by many employers. There are a variety of Medicare Advantage plan types, but HMO and PPO plans are the most common. Private insurers offer these plans, which must provide the same coverage as Original Medicare. Most also offer additional services, particularly prescription drug coverage.</p>
                    <h4 class="text-blue mt-4">Medicare-approved amount</h4>
                    <p class="open-sans font-14">Healthcare providers and suppliers who accept assignment agree to accept this amount for covered services, even if the amount is less than they'd normally charge. Medicare pays its share of this amount (usually 80 percent) and you pay the remainder.</p>
                    <h4 class="text-blue mt-4">Medicare-certified provider</h4>
                    <p class="open-sans font-14">Healthcare providers that have been approved by Medicare to provide services. To become certified, the provider must first pass inspection by a state-level government agency.</p>
                    <h4 class="text-blue mt-4">Medicare Cost Plan</h4>
                    <p class="open-sans font-14">This is a type of Medicare health plan that is often described as a hybrid between Original Medicare and Medicare Advantage. Most states do not offer Medicare Cost Plans.</p>
                    <h4 class="text-blue mt-4">Medicare health plan</h4>
                    <p class="open-sans font-14">Private insurance companies contract with Medicare to sell health plans that provide the same benefits as Parts A and B. There are numerous types of Medicare health plans, including Medicare Advantage Plans, Medicare Cost Plans, and Programs of All-inclusive Care for the Elderly (PACE) plans.</p>
                    <h4 class="text-blue mt-4">Medicare Medical Savings Account (MSA) Plan</h4>
                    <p class="open-sans font-14">This is the combination of a bank account and a Medicare Advantage (MA) Plan with a high deductible. The funds deposited into the savings account are typically less than the MA deductible, which means most beneficiaries must pay out-of-pocket before coverage kicks in.</p>
                    <h4 class="text-blue mt-4">Medicare Part A</h4>
                    <p class="open-sans font-14">Also known as <i>hospital insurance</i>, Part A covers inpatient care received in a hospital, skilled nursing facility, some home healthcare, and hospice.</p>
                    <h4 class="text-blue mt-4">Medicare Part B</h4>
                    <p class="open-sans font-14">Commonly referred to as <i>medical insurance</i>, as it covers outpatient services commonly received in a doctor's office. In addition, Part B may cover ambulance services, durable medical equipment, and preventive screenings.</p>
                    <h4 class="text-blue mt-4">Medicare Preferred Provider Organization (PPO) Plan</h4>
                    <p class="open-sans font-14">This is a type of Medicare Advantage plan that utilizes a network of providers similar to an HMO. However, it allows you to see a provider outside the plan's network for a higher out-of-pocket cost (i.e. a $30 co-pay instead of $15).</p>
                    <h4 class="text-blue mt-4">Medicare Preferred Provider Organization (PPO) Plan</h4>
                    <p class="open-sans font-14">This is a type of Medicare Advantage plan that utilizes a network of providers similar to an HMO. However, it allows you to see a provider outside the plan's network for a higher out-of-pocket cost (i.e. a $30 co-pay instead of $15).</p>
                    <h4 class="text-blue mt-4">Medicare Prescription Drug Plan (Part D)</h4>
                    <p class="open-sans font-14">Private insurance companies offer prescription drug coverage at an additional cost. You can add a Part D plan to Original Medicare as well as some Cost Plans, Private Fee-for-Service plans, and Medical Savings Account plans. If you have a Medicare Advantage plan that does not include prescription drug coverage, you can add a Part D plan.</p>
                    <h4 class="text-blue mt-4">Medicare Private Fee-for-Service (PFFS) Plan</h4>
                    <p class="open-sans font-14">This is a type of Medicare Advantage plan that allows you to go to the same providers you would if you had Original Medicare. Each plan varies according to how much it pays and how much you pay. Your out-of-pocket costs may be higher or lower than they would with Original Medicare.</p>
                    <h4 class="text-blue mt-4">Medicare savings program</h4>
                    <p class="open-sans font-14">This is a Medicaid program that helps beneficiaries with limited financial resources pay their Medicare expenses.</p>
                    <h4 class="text-blue mt-4">Medicare SELECT</h4>
                    <p class="open-sans font-14">This is a type of Medigap (Medicare Supplement Insurance) policy that includes a provider network.</p>
                    <h4 class="text-blue mt-4">Medicare Special Needs Plan (SNP)</h4>
                    <p class="open-sans font-14">A Medicare Advantage plan designed for a specific population, focused on either health conditions or personal factors, such as qualifying for Medicaid or living in a nursing home.</p>
                    <h4 class="text-blue mt-4">Medicare Summary Notice</h4>
                    <p class="open-sans font-14">A written communication you receive that details how much your provider billed Medicare for, what Medicare paid, and the remainder you owe for services.</p>
                    <h4 class="text-blue mt-4">Medicare Supplement Insurance (Medigap)</h4>
                    <p class="open-sans font-14">Policies sold by private insurance companies to help pay some of your out-of-pocket costs under Original Medicare. Also known as <i>Medigap</i>, coverage varies according to the plan you choose.</p>
                    <h4 class="text-blue mt-4">Medigap Open Enrollment Period</h4>
                    <p class="open-sans font-14">A 6-month period that begins the first month you are both aged 65 or older AND enrolled in Medicare Part B. During this period, you cannot be denied a Medigap policy or charged more for any reason.</p>
                    <h4 class="text-blue mt-4">Medigap policy</h4>
                    <p class="open-sans font-14">See Medicare Supplement Insurance.</p>
                    <div class="capital" id="N">&nbsp;</div>
                    <div class="d-flex justify-content-between align-items-center">
                       <h3 class="text-dark mt-4 m-0">N</h3>
                    </div>
                    <h4 class="text-blue mt-4">Network</h4>
                    <p class="open-sans font-14">The group of healthcare providers contracted with your health plan to provide services. Most HMOs won't cover services received outside the plan's network.</p>
                    <div class="capital" id="O">&nbsp;</div>
                    <div class="d-flex justify-content-between align-items-center">
                       <h3 class="text-dark mt-4 m-0">O</h3>
                    </div>
                    <h4 class="text-blue mt-4">Original Medicare</h4>
                    <p class="open-sans font-14">Includes Medicare Part A and Medicare Part B.</p>
                    <h4 class="text-blue mt-4">Out-of-network provider</h4>
                    <p class="open-sans font-14">Any doctor, hospital, clinic, or other healthcare provider that is not part of your plan's network.</p>
                    <h4 class="text-blue mt-4">Out-of-pocket costs</h4>
                    <p class="open-sans font-14">Healthcare costs you must pay on your own, either because Medicare does not cover the service or because it is your co-pay, co-insurance, premium, or deductible.</p>
                    <h4 class="text-blue mt-4">Out-of-pocket maximum</h4>
                    <p class="open-sans font-14">Medicare Advantage plans place a cap on how much you'll pay out-of-pocket in a calendar year. The amount varies by plan and provider.</p>
                    <h4 class="text-blue mt-4">Outpatient Services</h4>
                    <p class="open-sans font-14">Services you receive without being admitted to a hospital, skilled nursing facility, or similar healthcare environment.</p>
                    <h4 class="text-blue mt-4">Overall Star Rating</h4>
                    <p class="open-sans font-14">The combined score of 35 metrics under a healthcare plan and 12 metrics under a prescription drug plan. Customer service, price accuracy, quality of care, and more contribute to the plan's overall star rating.</p>
                    <div class="capital" id="P">&nbsp;</div>
                    <div class="d-flex justify-content-between align-items-center">
                       <h3 class="text-dark mt-4 m-0">P</h3>
                    </div>
                    <h4 class="text-blue mt-4">Pap test</h4>
                    <p class="open-sans font-14">A preventive screening used to detect cervical cancer.</p>
                    <h4 class="text-blue mt-4">Pelvic exam</h4>
                    <p class="open-sans font-14">A physical exam of a woman's external and internal pelvic area, including uterus, vagina, vulva, ovaries, and Fallopian tubes.</p>
                    <h4 class="text-blue mt-4">Penalty</h4>
                    <p class="open-sans font-14">If you fail to enroll in Medicare Part B or join a Part D plan when you first become eligible, you may have late fees attached to your monthly premium.</p>
                    <h4 class="text-blue mt-4">Point-of-service option</h4>
                    <p class="open-sans font-14">If you have an HMO, you may be able to receive services outside your plan for an additional cost.</p>
                    <h4 class="text-blue mt-4">Power of attorney</h4>
                    <p class="open-sans font-14">A legal document granting another person authority to make certain types of decisions on your behalf.</p>
                    <h4 class="text-blue mt-4">Pre-existing condition</h4>
                    <p class="open-sans font-14">Any health issue you had before joining a new plan.</p>
                    <h4 class="text-blue mt-4">Premium</h4>
                    <p class="open-sans font-14">Typically a monthly payment for a health or prescription drug plan.</p>
                    <h4 class="text-blue mt-4">Preventive services</h4>
                    <p class="open-sans font-14">Healthcare intended to prevent illness or detect it while in its early stage. Examples include Pap tests, mammograms, flu shots, and prostate exams.</p>
                    <h4 class="text-blue mt-4">Primary care doctor</h4>
                    <p class="open-sans font-14">The doctor you see for most standard heath issues. Typically, your primary care doctor coordinates care if you have chronic conditions or need to see a specialist.</p>
                    <h4 class="text-blue mt-4">Prior authorization</h4>
                    <p class="open-sans font-14">Some Medicare drug plans require beneficiaries receive approval from the plan before filling a prescription.</p>
                    <h4 class="text-blue mt-4">Programs of All-Inclusive Care for the Elderly (PACE)</h4>
                    <p class="open-sans font-14">Designed for older adults who require nursing home services but do not necessarily need to live in a nursing home.</p>
                    <div class="capital" id="R">&nbsp;</div>
                    <div class="d-flex justify-content-between align-items-center">
                       <h3 class="text-dark mt-4 m-0">R</h3>
                    </div>
                    <h4 class="text-blue mt-4">Referral</h4>
                    <p class="open-sans font-14">Designed for older adults who require nursing home services but do not necessarily need to live in a nursing home.Written authority from your primary care physician (PCP) to visit a specialist or other medical provider. Most HMOs will not pay for care received from any provider but your PCP unless you have a referral.</p>
                    <h4 class="text-blue mt-4">Respite care</h4>
                    <p class="open-sans font-14">When a patient's primary caregiver needs a break or is otherwise unable to provide care, the patient may receive temporary care in a hospital, nursing home, or similar healthcare facility.</p>
                    <div class="capital" id="S">&nbsp;</div>
                    <div class="d-flex justify-content-between align-items-center">
                       <h3 class="text-dark mt-4 m-0">S</h3>
                    </div>
                    <h4 class="text-blue mt-4">Secondary Payer</h4>
                    <p class="open-sans font-14">If you have more than one form of medical insurance, this is the provider that pays second for any claims. Includes Medicare and Medicaid as well as private insurance.</p>
                    <h4 class="text-blue mt-4">Service Area</h4>
                    <p class="open-sans font-14">Many health insurance plans establish geographical limits where enrollees may receive healthcare services. Typically, this is based on where you live. If you move out of the plan's service area, you may have to find a new plan.</p>
                    <h4 class="text-blue mt-4">Skilled Nursing Care</h4>
                    <p class="open-sans font-14">Care that must be provided by a medical professional, such as a nurse or a doctor.</p>
                    <h4 class="text-blue mt-4">Skilled Nursing Facility</h4>
                    <p class="open-sans font-14">A medical facility with the staff and equipment necessary to provide skilled nursing care.</p>
                    <h4 class="text-blue mt-4">State Health Insurance Assistance Program (SHIP)</h4>
                    <p class="open-sans font-14">A federally funded state program that helps Medicare enrollees understand the program and benefits.</p>
                    <h4 class="text-blue mt-4">State Insurance Department</h4>
                    <p class="open-sans font-14">A state agency that governs all forms of private insurance for that state, including Medigap providers.</p>
                    <h4 class="text-blue mt-4">State medical assistance office</h4>
                    <p class="open-sans font-14">Also known as <i>Medicaid</i>, this government agency helps residents with limited income and resources receive healthcare.</p>
                    <h4 class="text-blue mt-4">State Pharmaceutical Assistance Program (SPAP)</h4>
                    <p class="open-sans font-14">A state-funded and run program that helps pay for prescription drugs. Eligibility is typically based on financial need but may also be available to those who meet certain age or medical restrictions.</p>
                    <h4 class="text-blue mt-4">Step therapy</h4>
                    <p class="open-sans font-14">Some Medicare Part D programs require enrollees to try preferred, low-cost drugs before the plan will pay for the medication prescribed by the patient's doctor.</p>
                    <h4 class="text-blue mt-4">Supplemental Security Income (SSI)</h4>
                    <p class="open-sans font-14">Social Security benefits paid monthly to people who qualify based on age, income, or disability. This is not the same as receiving Social Security retirement or disability benefits.</p>
                    <div class="capital" id="T">&nbsp;</div>
                    <div class="d-flex justify-content-between align-items-center">
                       <h3 class="text-dark mt-4 m-0">T</h3>
                    </div>
                    <h4 class="text-blue mt-4">Telemedicine</h4>
                    <p class="open-sans font-14">Healthcare services conducted over a distance, typically via smartphone or computer. May also include digital medical devices, such as glucose and blood pressure monitors, that transmit patient data to the provider.</p>
                    <h4 class="text-blue mt-4">Tiered formulary</h4>
                    <p class="open-sans font-14">Most prescription drug plans have a list of covered medications. Covered drugs are typically placed on levels, also known as tiers, with costs going up as the tiers do.</p>
                    <h4 class="text-blue mt-4">TTY</h4>
                    <p class="open-sans font-14">An abbreviation for <i>teletypewriter</i>, which helps those who have a disability that affects speech or hearing communicate over the phone.</p>
                    <div class="capital" id="U">&nbsp;</div>
                    <div class="d-flex justify-content-between align-items-center">
                       <h3 class="text-dark mt-4 m-0">U</h3>
                    </div>
                    <h4 class="text-blue mt-4">Urgent care</h4>
                    <p class="open-sans font-14">Medical treatment for non-life-threatening illness or injury that occurs outside your regular doctor's office. If you need urgent care when outside your plan's service area or network, your plan must pay for services.</p>
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