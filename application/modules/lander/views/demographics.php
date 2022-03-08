<script>
	$(document).ready(function() {
		$(window).keydown(function(event){
			if(event.keyCode == 13) {
				frmDemographicsLander();
				event.preventDefault();
				return false;
			}
		});
		returncountyArr();
	});
</script>



<main class="lander-block demographic-lander-block">
	<div class="row lead-form-block">
		<div class="col-lg-3 lead-form-left-block">
			<div class="steps-block">
				<ul>
					<li class="first">
						<a href="javascript:void(0);">
							<h4>Step 1</h4>
							<h6>Enter Zip Code</h6>
						</a>
					</li>
					<li class="second">
						<a href="javascript:void(0);">
							<h4>Step 2</h4>
							<h6>Your Information</h6>
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</a>
					</li>
					<li class="third">
						<a href="javascript:void(0);">
							<h4>Step 3</h4>
							<h6>See Plans</h6>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-9 lead-form-right-block">
			<div class="lead-form-wrapper">
				<h1>Get all the Medicare benefits you deserve.</h1>
				<form method="get" action="<?php postUrl(); ?>/planlist" id="demographicsFrm"  class="lead-form">
					<div style="display:none">
						<input type="hidden" id="gender" name="gender" value="F">	
						<input type="hidden" name="lander_name" value="demographics">
						<input type="hidden" name="pgName" value="demographics">
						<input type="hidden" name="category" value="MA">
						<input type="hidden" name="temp1" value="<?php echo (isset($_COOKIE['temp1']))?$_COOKIE['temp1']:temp1();?>">
						<input type="hidden" name="refid" value="<?php echo (isset($_COOKIE['refid']))?$_COOKIE['refid']:'';?>">
						<input type="hidden" name="subid" value="<?php echo (isset($_COOKIE['subid']))?$_COOKIE['subid']:'';?>">
						<input type="hidden" name="gclickid" value="<?php echo (isset($_COOKIE['gclickid']))?$_COOKIE['gclickid']:'';?>">
						<input type="hidden" name="transferPage" id="transferPage" value="planlist"> <!--druglist/planlist/guide-->
						<input type="hidden" name="effectiveDate" value="<?php csd(); ?>" readonly="true">
						<input type="hidden" name="phoneNumber" id="phoneNumber" value="">
						<input type="hidden" id="landing_tab" name="landing_tab" value="">
					</div>
					<div class="form-group">
						<label class="custom-label zipcode_validate" ref="<span>*</span> ZIP Code:"><span>*</span> ZIP Code:</label>
						<input type="text" class="form-control zip-input" name="zip" id="zip" onkeypress="return isNumber(event)"  onKeyup="returncountyArr()" size="5" maxlength="5" value="<?php echo (isset($zipcode))?$zipcode:returnZipCode();?>">
					</div>
					<div class="form-group">
						<label>First Name:</label>
						<input type="text" class="form-control" placeholder="First Name" name="firstName" id="firstName">
					</div>
					<div class="form-group">
						<label>Last Name:</label>
						<input type="text" class="form-control" placeholder="Last Name" name="lastName" id="lastName">
					</div>
					<div class="form-group">
						<label class="phoneNumber_mask_validate" ref="Phone:">Phone:</label>
						<input type="text" size="10" maxlength="14" class="form-control phone" name="phoneNumber_mask" id="phoneNumber_mask" onkeypress="return isNumber(event)" onblur="setphone(this.value)" placeholder="Phone">
					</div>
					<div class="form-group">
						<label>County:</label>
						<div class="border-black" id="cunty_cont">
							<input type="hidden" id="state" name="state" value="">
							<select class="form-control rounded-0 shadow-none border-0" id="county" name="county">
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="email_validate" ref="Email Address:">Email Address:</label>
						<input type="text" class="form-control" name="email" id="email" placeholder="Email Address">
					</div>
					<div class="form-group button-group">
						<button type="button" onClick="frmDemographicsLander()" class="btn btn-orange">SEE PLANS</button>
					</div>
					<div class="form-group">
						<label class="custom-label"><span>*</span> Required fields</label>
					</div>
				</form>
				<div class="form-info-block">
					<p>By clicking “SEE PLANS” above: (1) I agree to receive marketing and other calls, texts and emails, sent to my contact information as entered in this form from HealthPlanOne, LLC, ClearMatch Medicare, MedicareUSA, their licensed and other agents/representatives, including by autodialer/pre-recorded message, on a recorded line, even if my number is on a “Do Not Call” list. This consent is voluntary and not required as a condition to buy anything, and can be revoked by calling our hotline at 844-978-0969 or emailing us at privacy@hpone.com; and (2) I consent and agree to all terms found in the <a href="#" data-target="#PrivacyPolicy" data-toggle="modal" class="">Privacy Policy</a> and <a href="#" data-target="#TermsOfServiceModal" data-toggle="modal" class="">Terms of Service.</a> Click each link to view each document.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Partner Logo Block -->
	<section class="partner-logo-block demographic-partner-logo">
		<div class="container">
			<div class="partner-logo-subblock">
				<a href="<?php echo bs();?>medicare-carriers/aetna"><img alt="aetna" src="<?= bs() ?>front_assets/image/png/aetna.png" class="img-fluid" /></a>
				<a href="<?php echo bs();?>medicare-carriers/cigna"><img alt="cigna" src="<?= bs() ?>front_assets/image/png/cigna.png" class="img-fluid" /></a>
				<a href="<?php echo bs();?>medicare-carriers/humana"><img alt="humana" src="<?= bs() ?>front_assets/image/png/humana.png" class="img-fluid" /></a>
				<a href="<?php echo bs();?>medicare-carriers/mutual-of-omaha"><img alt="moo" src="<?= bs() ?>front_assets/image/png/moo.png" class="img-fluid" /></a>
				<a ><!--<href="javascript:void(0);">--><img alt="wellcare" src="<?= bs() ?>front_assets/image/png/wellcare.png" class="img-fluid" /></a>
			</div>
		</div>
	</section>
	
	<div class="modal fade find-a-plan-modal" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
							<a href="javascript:void(0)" onclick="submitFrmplan('drugBasket','get_frm')" class="btn btn-drugs">ENTER DRUGS</a>
						</div>
						<div class="col-md-6">
							<a  href="javascript:void(0)" onclick="submitFrmplan('planlist','get_frm')"  class="btn btn-plans">SEE PLANS</a>
							<span>(Enter Drugs Later)</span>
						</div>
					</div>
				</div>
			  </div>
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

<div class="modal fade privacy-policy-modal" id="PrivacyPolicyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
		<div class="modal-heading d-flex justify-content-between p-3">
			<h4 class="modal-title aleo" id="exampleModalLabel">Privacy Policy</h4>
			<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
		</div>

		<ul class="nav align-items-center nav-tabs border-0 nav-bg-light-white mx-2 mb-3" id="myTab" role="tablist">
			<li class="border-0" role="presentation"><a aria-controls="home" aria-selected="true" class="nav-link bg-transparent active modal-nav-link" data-toggle="tab" href="#home" id="home-tab" role="tab">Privacy Policy</a></li>
			<li>/</li>
			<li class="nav-item" role="presentation"><a aria-controls="profile" aria-selected="false" class="nav-link bg-transparent modal-nav-link" data-toggle="tab" href="#profile" id="profile-tab" role="tab">Privacy Notice For California Residents</a></li>
		</ul>

		<div class="modal-body">
			<div class="tab-content" id="myTabContent">
<p>Thank you for your interest in HealthPlanOne, LLC and its affiliated organizations and brands (“Company,” “we,” “us,” or “our”). This Privacy Policy (“Policy”) applies to the following websites owned and operated by Company, and our other websites where we post this document as the applicable Privacy Policy, along with any related websites, networks, applications, insurance agent and representative services, and communication channels (including online chat and telephone call centers), and other services provided by us:</p>
                <ul>
                    <li><a href="www.healthplanone.com">www.healthplanone.com</a></li>
                    <li><a href="www.medicaresolutions.com">www.medicaresolutions.com</a></li>
                    <li><a href="www.hpone.com">www.hpone.com</a></li>
                    <li><a href="www.medicareusa.com">www.medicareusa.com</a></li>
                    <li><a href="www.medicarequickquote.com">www.medicarequickquote.com</a></li>
                </ul>    
                <p>You can learn about our commitment to privacy with this Policy describing how we collect, use, share and secure the personal information you provide. It also describes your choices regarding use, access and correction of your personal information. At our Company, we are strongly committed to protecting your privacy.</p> 
                <p>To serve as your licensed insurance agent, we will ask you to provide us with personal information about you. We use your personal information to help you find and, if you choose to do so, apply for health insurance and other products that may be of interest to you and your family. We only use and disclose your personal information in accordance with our Policy. Additionally, we use advanced technologies to ensure the security and confidentiality of the personal information you provide us. </p>
                <p>Throughout this Policy, we refer to information that can identify you as a specific individual, such as your name, phone number, email address, Social Security number, or credit card number, as “personal information”.</p>
                <p>Further, personal information includes any information about your health or medical history that you may provide us in a health insurance application or any financial or other sensitive personal information that you may provide us in an application to obtain an advanced premium tax credit (or “subsidy”) determination from the government. If you provide information directly to one of our partners or any other third party, then your information would be governed by such other party’s privacy policy.</p>
                <p>If you have questions or concerns regarding our privacy policy or practices, please contact us at privacy@hpone.com</p> 
				<h6>1. We do not disclose your personal information to third parties, unless one of the following limited exceptions applies. Insurance Companies, Licensed Agents, and Business Partners</h6>
                <div class="content-block">
                    <p>If you submit an application for an insurance product offered by us, then we will disclose your personal information to your chosen insurance company to process your application. If you submit a request for information or an application for an insurance product offered through an insurance agent, agency or other business partner with whom we associate or contract, then we may disclose your personal information to that agent, agency or business partner to process your request for information or application or to otherwise provide you with information about insurance products (including contacting you by telephone, email, or otherwise to discuss insurance products in which you may be interested). Please be assured that these partners are only allowed to use your personal information to process your requested quote, application or enrollment form and are legally obligated to maintain strict confidentiality.</p> 
                </div>
                <div class="content-block">
                    <h6>Service Providers</h6> 
                    <p>We may disclose your personal information to other companies that help us to process or service any application you begin, process or submit through us, or to correspond with you. Please be assured that the companies we hire to process or service your insurance application or correspond with you are not allowed to use your personal information for their own purposes and are contractually obligated to maintain strict confidentiality.</p> 
                </div>
                <div class="content-block">
                    <h6>Affinity Groups, and Benefits Administrators or Consultants</h6> 
                    <p>If you were referred to us by, or use our website or call center in connection with an affinity group, or other organization with which you may be affiliated (or a benefits administrator or consultant associated with such employer, group or organization), we may disclose your personal information to such group, organization, administrator and/or consultant. For example, we may inform such group, organization, administrator and/or consultant whether or not you have enrolled in a plan. Please be assured that these parties are only allowed to use your personal information as permitted by applicable law.</p> 
                </div>
                <div class="content-block">
                    <h6>Legal Obligations</h6> 
                    <p>In certain situations, Company may be required to disclose personal data in response to lawful requests by public authorities, including to meet national security or law enforcement requirements. We may also disclose your personal information as required by law, such as to comply with a subpoena, or similar legal process. We may disclose or report your personal information when we believe, in good faith, that the disclosure is required or permitted under law, for example, to cooperate with regulators or law enforcement authorities, to resolve consumer disputes, to protect our rights, to protect your safety or the safety of others, to investigate fraud, or to otherwise respond to a government request.</p> 
                </div>
                <div class="content-block">
                    <h6>Business Transition</h6> 
                    <p>If Company is involved in a merger, acquisition, or sale of all or a portion of its assets, you will be notified via email and/or a prominent notice on our website of any change in ownership or uses of your personal information, as well as any choices you may have regarding your personal information.</p>
                </div>
			</div>
		</div>
	  </div>
	</div>
</div>

<div class="modal fade terms-of-service-modal" id="TermsOfServiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
		<div class="modal-heading d-flex justify-content-between p-3">
			<h4 class="modal-title aleo" id="exampleModalLabel">Terms of Service</h4>
			<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
		</div>

		<div class="modal-body">
			<div class="tab-content" id="myTabContent">
                <p>LAST UPDATED: 6/18/21</p>
				<p>This website is operated by HealthPlanOne, LLC.</p>
				<p><strong>Please read these Terms of Service (the "Agreement") carefully. Your use of the Site constitutes your legal consent to be bound by this Agreement.</strong></p>
				<p>Welcome, and thank you for your interest in HealthPlanOne, LLC (“Us,” “Our,” or “We” (whether capitalized or not)) and our websites at clearmatchmedicare.com, medicaresolutions.com, medicareusa.com, healthplanone.com, azbluemedigap.com and our other websites where we post this document as the applicable terms of service, along with any related websites, networks, applications, insurance agent and representative services, and communication channels (including online chat and telephone call centers), and other services provided by us (collectively, our “<strong>Service</strong>” or “<strong>Services</strong>”).</p>
				<p>For purposes of this Agreement, “you” or “your” (whether capitalized or not) means the person(s) using the Services or the products or services offered through this Site.</p>
				<p>The <strong>"Site"</strong>&nbsp;means all the content, services and products available on the websites, applications, emails, widgets or other media through which you accessed this Agreement. The Site provides you with access to certain services, such as referrals to products, services, and service providers that may be of interest to you (the "<strong>Site Services</strong>"), and to certain content provided by us or by third parties (the "<strong>Site Content</strong>").</p>
				<p><strong>These Terms of Service are a legally binding contract between you and Us regarding your use of the Service and the Site.</strong></p>
				<p><strong>BY CLICKING “SEE PLANS” OR ANOTHER BUTTON WHILE USING THE SERVICES TO SUBMIT YOUR INFORMATION TO US OR BY OTHERWISE USING THE SERVICE, YOU ACKNOWLEDGE THAT YOU HAVE READ, UNDERSTOOD, AND AGREE TO BE BOUND BY THE FOLLOWING TERMS AND CONDITIONS, INCLUDING OUR&nbsp;<a href="/privacy-policy">PRIVACY POLICY&nbsp;</a></strong><strong>(TOGETHER, THE “TERMS”).</strong></p>
				<p><strong>THIS AGREEMENT CONTAINS AN AGREEMENT TO ARBITRATE ALL CLAIMS (PLEASE SEE SECTION 19). EXCEPT IF YOU OPT-OUT AND EXCEPT FOR CERTAIN TYPES OF DISPUTES DESCRIBED IN THE ARBITRATION SECTION BELOW, YOU AGREE THAT DISPUTES BETWEEN YOU AND US WILL BE RESOLVED BY BINDING, INDIVIDUAL ARBITRATION AND YOU WAIVE YOUR RIGHT TO PARTICIPATE IN A CLASS ACTION LAWSUIT OR CLASS-WIDE ARBITRATION. Your rights will be determined by a NEUTRAL ARBITRATOR and NOT a judge or jury.</strong></p>
				<p><strong>You also agree that We may (1) call and text you regarding Our Services, and (2) monitor and record any telephone calls made or received by Us for Our business purposes, including for quality assurance purposes.</strong></p>
				<p><strong>Table of Contents:</strong></p>
				<ol>
					<li><a href="#1">Modification of Terms</a></li>
					<li><a href="#2">Your Access and Use of the Site</a></li>
					<li><a href="#3">Information you Submit Through the Services</a></li>
					<li><a href="#4"><strong>Authorization to Contact</strong></a></li>
					<li><a href="#5">Services and Content Offered Through the Services</a></li>
					<li><a href="#6">Rules of Conduct</a></li>
					<li><a href="#7">Jurisdictional Issues</a></li>
					<li><a href="#8">Links to Third Party Sites</a></li>
					<li><a href="#9">Registration; Usernames and Passwords</a></li>
					<li><a href="#10">No Advice</a></li>
					<li><a href="#11">Submissions</a></li>
					<li><a href="#12">Payment</a></li>
					<li><a href="#13">Proprietary Rights</a></li>
					<li><a href="#14">Consent to Electronic Disclosures and Signatures</a></li>
					<li><a href="#15">DISCLAIMER OF WARRANTIES</a></li>
					<li><a href="#16">LIMITATION OF LIABILITY</a></li>
					<li><a href="#17">Indemnification</a></li>
					<li><a href="#18">RELEASE</a></li>
					<li><a href="#19">ARBITRATION</a></li>
					<li><a href="#20">Claims of Copyright Infringement</a></li>
					<li><a href="#21">Governing Law</a></li>
					<li><a href="#22">Advertising Disclaimers</a></li>
					<li><a href="#23">Data Processed in the United States</a></li>
					<li><a href="#24">Severability and Enforceability</a></li>
					<li><a href="#25">Product Restrictions</a></li>
				</ol>
				<ol>
					<li>
					<p><strong><a name="1"></a>Modification of Terms.</strong>&nbsp;We reserve the right to modify this Agreement from time to time without notification. Your use of the Services after such a modification will constitute your acceptance of those changes. We may notify you of any such changes by any reasonable means, including by posting the revised version of this Agreement to the Services. You can determine when we last changed this Agreement by referring to the "LAST UPDATED" date above.</p>
					</li>
					<li>
					<p><strong><a name="2"></a>Your Access to and Use of the Services.</strong>&nbsp;Your access to and use of the Services may be interrupted from time to time, including due to technical malfunctions, periodic updating and repairs. We may, at any time, modify or discontinue all or part of the Services, charge, modify or waive any fees required to use the Services, or offer opportunities to some or all Service users. We may, in our discretion and without notice, suspend or terminate your access to the Services and to any Site Content offered through the Services, and may remove and delete any content you have provided if we believe that your conduct or content violates or is inconsistent with this Agreement or its intent, that your conduct is disruptive, or that you have violated any laws or the rights of any third parties.</p>
					</li>
					<li>
					<p><strong><a name="3"></a>Information you submit through the Services.</strong>&nbsp;To use certain features of the Services, you may be required to submit information to us, including personally identifying information. Our use and disclosure of any information you submit through the Services is governed by this Agreement and our&nbsp;<a href="/privacy-policy">Privacy Policy</a>&nbsp;You agree that all information you provide to us is true, accurate, and complete and that you will not misrepresent your identify, impersonate any third party or enter information on behalf of any third party. You also agree to update such information regularly to keep it current.</p>
					</li>
					<li>
					<p><strong><a name="4"></a>Authorization to Contact.</strong>&nbsp;You understand and agree that by providing us with a telephone number and other contact information, you agree to receive communications, including via-email, texts, and calls (including text messages and calls made using an autodialer or prerecorded voice message), from us or on our behalf (or Our affiliates, subsidiaries, employees, contractors, agents, business partners or other third parties permitted to receive your information under the&nbsp;<a href="/privacy-policy">Privacy Policy</a>&nbsp;and&nbsp;<a data-target="#companies" data-toggle="modal" href="#">Companies</a>&nbsp;at the email address or telephone number you provided, even if that number is on a National or State Do Not Call List. These calls may be for informational and marketing purposes, such as to provide you with information about our services and your insurance options, for assistance with applications, and to provide reminders of deadlines. You are not required to provide your consent to these calls as a condition of any purchase through us, and you may revoke any consent for marketing messages, phone calls or text messages as described below. Standard text messaging and telephone minute charges applied by your cell phone carrier will apply. We may monitor and/or record telephone conversations for our business purposes, such as quality assurance and training purposes and to protect our rights and the rights of others.</p>

					<p>4.1 &nbsp;&nbsp;&nbsp;Opt-Out. IF YOU WISH TO OPT OUT OF MARKETING EMAILS, YOU CAN UNSUBSCRIBE BY FOLLOWING THE UNSUBSCRIBE OPTIONS PROVIDED IN THE EMAIL. IF YOU WISH TO OPT OUT OF TEXTS, YOU MAY REPLY “STOP” FROM THE MOBILE DEVICE RECEIVING THE MESSAGES. IF YOU WISH TO OPT OUT OF MARKETING CALLS OR CALLS TO A WIRELESS NUMBER, THEN YOU MAY MAKE A DO NOT CALL REQUEST EITHER DURING A CALL YOU RECEIVE FROM US OR BY CALLING 1-833-835-0826, YOU MAY ALSO EMAIL US AT PRIVACY@HPONE.COM WITH A REQUEST TO STOP RECEIVING SUCH TEXTS OR CALLS AT THE PHONE NUMBER YOU PROVIDE IN YOUR EMAIL.&nbsp;<strong>NOTE THAT OPTING OUT OF OUR MARKETING COMMUNICATIONS DOES NOT OPT YOU OUT OF MARKETING COMMUNICATIONS FROM INSURANCE CARRIERS (“CARRIERS”) WITH WHOM WE SHARE YOUR INFORMATION. TO OPT OUT OF SUCH COMMUNICATIONS FROM CARRIERS, PLEASE CONTACT THE CARRIERS DIRECTLY.</strong></p>

					<p>4.2 &nbsp;&nbsp;&nbsp;You understand and agree that you may: (i) continue to receive communications while we process your opt-out request, (ii) receive a communication confirming the receipt of your opt-out request, and (iii) after opting out of receiving marketing messages, continue to receive certain non-marketing communications by email or to a non-wireless number, such as confirmations or updates related to your account, insurance application or policy, or transactions through the Service. You may also manage your communication preferences as set forth in Section 4.3 below.</p>

					<p>4.3 &nbsp;&nbsp;&nbsp;Updating Information. You may correct or update your contact information, by contacting us at Sales@hpone.com or by mail at Sales Support at HealthPlanOne, 35 Nutmeg Dr. Ste. 220, Trumbull, CT 06611. Additionally, once you have created an account with us online at clearmatchmedicare.com or through one of our other Services that allow account creation, you may update your name, email address, phone number (if part of your account) and password by clicking on the “My Account” or “Log In” or similar link available on the Services and signing in using your email address and password.</p>
					</li>
					<li>
					<p><strong><a name="5"></a>Services and Content Offered Through the Services.</strong>&nbsp;<strong>PLEASE READ THE FOLLOWING CAREFULLY:</strong></p>

					<p>The Services permit consumers and businesses to research and shop for various insurance and related products. We are not an insurance company. The Services introduce users to insurance and related products offered by third parties.&nbsp;<strong>DO NOT CANCEL ANY EXISTING INSURANCE UNTIL YOU RECEIVE WRITTEN CONFIRMATION FROM THE INSURANCE COMPANY TO WHICH YOU ARE APPLYING THAT YOUR NEW POLICY IS IN EFFECT. We are not responsible for any issues associated with buying or transferring new or existing insurance policies.</strong></p>

					<p><strong><u>Transfer of your information</u>.</strong>&nbsp;In submitting a request for insurance (“Request”) to us, We may collect from you or otherwise obtain your name, address, telephone number, date of birth, and other information to allow us to verify your identity and match you with Carriers or send your information to Carriers. In submitting a Request through the Services, you agree to allow us to transfer all of your information, in connection with your Request to Carriers. If any Carrier(s) wish to provide information to you in connection with your Request, you will be contacted by the Carrier(s) who may keep your Request information and any other information provided by us in connection with your Request whether or not they offer you a plan.&nbsp;<strong>Please notify the Carrier(s) directly if you no longer wish to receive communications from them.</strong></p>

					<p><strong><u>No endorsements or recommendations</u>.</strong>&nbsp;In working with Carriers, we seek to work with companies that are reputable and professional; however, we strongly recommend that you perform your own due diligence for each potential Carrier and plan prior to selecting and/or entering into any type of agreement or other arrangement with any particular Carrier. In addition, once we refer your Request to the Carrier(s), the Carrier will evaluate your Request, and we have no further involvement in any transactions that occur between you and the Carrier. We neither recommend nor endorse any specific products, plans, opinions, or other services that may be made available through or mentioned through the Services.</p>

					<p><strong>WE ARE NOT RESPONSIBLE OR LIABLE FOR ANY CARRIER'S ACTS OR OMISSIONS INCLUDING FOR ANY QUOTES, PLAN INFORMATION, PRICING, PREMIUMS, OR SERVICES THAT ANY SUCH CARRIER MAY PROVIDE, FOR ANY CARRIER 'S CONTACTING OR FAILURE TO CONTACT YOU, FOR ANY CARRIER 'S PERFORMANCE OR FAILURE TO PERFORM ANY SERVICES, OR FOR ANY AGREEMENT OR TRANSACTION BETWEEN YOU AND ANY CARRIER.</strong></p>
					</li>
					<li>
					<p><strong><a name="6"></a>Rules of Conduct.</strong></p>

					<ol type="a">
						<li>You must be at least 18 years of age to use the Services. By agreeing to these Terms, you represent and warrant to us that: (a) you are at least 18 years of age; (b) you have not previously been suspended or removed from the Services; and (c) your registration and your use of the Services is in compliance with all applicable laws and regulations.</li>
						<li>You must not post violent, nude, partially nude, discriminatory, unlawful, infringing, hateful, pornographic or sexually suggestive photos or other similar content via the Services.</li>
						<li>You are responsible for any activity that occurs through your account and you agree you will not sell, transfer, license, or assign your account, followers, username, or any account rights to another person. With the exception of people or businesses that are expressly authorized to create accounts on behalf of their employers or clients, You agree that you will not create an account for anyone other than yourself. By using the Services, You represent that all information you provide upon registration and at all other times will be true, accurate, current and complete.&nbsp; You also agree to update your information as necessary to maintain its truth and accuracy.</li>
						<li>You must not solicit, collect, or use the login credentials of other Service users.</li>
						<li>You must not use the Services to defame abuse, harass, stalk, threaten or otherwise violate the legal rights of others, including others’ privacy rights or rights of publicity, or harvest, or collect personally identifiable information about other users of the Services.</li>
						<li>You must not use the Services for any illegal or unauthorized purpose. You agree to comply with all laws, rules and regulations (including federal, state, local and provincial) applicable to your use of the Services, including all copyright laws.</li>
						<li>You are solely responsible for your conduct and any data, text, files, information, usernames, images, graphics, photos, profiles, audio and video clips, sounds, musical works, works of authorship, applications, links, and other content or materials that you submit, post or display on or via the Services.</li>
						<li>You must not interfere or disrupt the Services, servers, or networks connected to the Services, including by transmitting any worms, viruses, spyware, malware or any other code of a destructive or disruptive nature. You may not inject content or code or otherwise alter or interfere with the way the Services are rendered or displayed in a user's browser or device.</li>
						<li>You must not use any robot, spider, site search/retrieval application or other manual or automatic device to retrieve, index, "scrape," "data mine" or in any way gather Service content or reproduce or circumvent the navigational structure or presentation of the Services without Our express prior written consent. Notwithstanding the immediately foregoing sentence (but subject to the other items listed above), We grant the operators of public search engines permission to use spiders to copy materials from the Services for the sole purpose of and solely to the extent necessary for creating publicly-available searchable indices of such materials, but not caches or archives of such materials. We reserve the right to revoke these exceptions without notification, either generally or in specific cases, at any time.</li>
						<li>You must not restrict or inhibit any other person from using the Services (including by hacking or defacing any portion of the Services).</li>
						<li>You must not reproduce, duplicate, copy, sell, resell or otherwise exploit for any commercial purposes, any portion of, use of, or access to the Services.</li>
						<li>Except as expressly permitted by applicable law, you must not modify, adapt, translate, reverse engineer, decompile or disassemble any portion of the Services.</li>
						<li>You must not remove any copyright, trademark or other proprietary rights’ notices from the Site or Service or materials originating from the Site or Service.</li>
						<li>You must not frame or mirror any part of the Site or Service without Our express prior written consent.</li>
						<li>You must not create a database by systematically downloading and storing all or any Site or Service content.</li>
						<li>You must not perform any fraudulent activity including impersonating any person or entity, claiming a false affiliation, accessing any other account without permission, or falsifying your age or date of birth.</li>
						<li>You must not use the Site or Service for any illegal purpose or in violation of any local, state, national, or international law.</li>
					</ol>
					</li>
					<li>
					<p><strong><a name="7"></a>Jurisdictional Issues.</strong>&nbsp;The Services are controlled and/or operated from the United States and are not intended to subject Us to non-U.S. jurisdiction or laws, except as otherwise expressly stated in this Agreement. The Services may not be appropriate or available for use in some jurisdictions outside of the United States. In choosing to access the Services, you do so on your own initiative and at your own risk, and you are responsible for complying with all local laws, rules and regulations, including any export controls, embargoes or other rules and regulations restricting exports. We may limit the Services’ availability, in whole or in part, to any person, geographic area or jurisdiction we choose, at any time and in our sole discretion.</p>
					</li>
					<li>
					<p><strong><a name="8"></a>Links to Third-Party Sites.</strong>&nbsp;The Services may provide links to external websites or resources for your convenience and reference only. We do not endorse these websites or resources. We are not responsible for the availability of these external websites or resources or for any content, advertising, products, or other materials on or available from such external websites or resources. Your use of and dealings with the owners or operators of these external websites or resources are at your own risk. You cannot make any claim against us, or our service providers arising out of your use of external websites or resources.</p>
					</li>
					<li>
					<p><strong><a name="9"></a>Registration; Usernames and Passwords.</strong>&nbsp;You may be required to register with Us in order to access certain Services or areas of the Services. With respect to any such registration, We may refuse to grant you, and you may not use, a username (or email address) that violates the intellectual property or other rights of any person; that is offensive; or that We reject for any other reason in Our sole discretion. Your username and password are for your personal use only, and not for use by any other person. You are responsible for maintaining the confidentiality of any password you may use to access the Services, and You agree not to transfer your password or username, or lend or otherwise transfer your use of or access to the Services, to any third party. You are fully responsible for all interaction with the Services that occurs in connection with your password or username. You agree to immediately notify Us of any unauthorized use of your password or username or any other breach of security related to your account or the Services, and to ensure that you "log off"/exit from your account with the Services (if applicable) at the end of each session. We are not liable for any loss or damage arising from your failure to comply with any of the foregoing obligations.</p>
					</li>
					<li>
					<p><strong><a name="10"></a>No Advice.</strong>The Site Content is for informational purposes only. No item is intended to be a substitute for professional medical advice, diagnosis, or treatment. Always seek the advice of your physician or other qualified health provider with any questions you may have regarding a medical condition. Never disregard professional medical advice or delay in seeking it because of something you have read on the Services. If you think you may have a medical emergency, call your doctor or 911 immediately. We do not recommend or endorse any specific tests, physicians, products, procedures, opinions, insurance coverage or other information that may be mentioned on the Services. Reliance on any information provided by Us, Our employees, or other visitors to the Services is solely at your own risk.</p>
					</li>
					<li>
					<p><strong><a name="11"></a>Submissions.</strong>&nbsp;For purposes of clarity, you retain ownership of any information, content and/or materials that you submit through the Services (each, a "<strong>Submission</strong>"). Please note, however, that we need certain rights to your Submissions to be able to make them available through the Services. Accordingly, you hereby grant to Us a worldwide, non-exclusive, transferable, sublicenseable (through multiple tiers), royalty-free, perpetual, irrevocable right and license, without compensation to you to use, reproduce, distribute, adapt (including edit, modify, translate, and reformat), create derivative works of, transmit, publicly display, publicly perform and otherwise exploit such Submission, in any media now known or hereafter developed. For each Submission, you represent and warrant that you have all rights necessary for you to grant the licenses granted in this section, and that such Submission, and your provision thereof to and through the Services, comply with all applicable laws, rules and regulations. Further, to the extent permitted under applicable law, you irrevocably waive any "moral rights" or other rights with respect to attribution of authorship or integrity of materials regarding each Submission that you may have under any applicable law under any legal theory. We request this waiver to help ensure that We have all the rights We may need to provide the Services. In addition, We have no control over, and shall have no liability for, any damages resulting from the use (including republication) or misuse by any third party of information voluntarily made public through any other part of the Services. IF YOU CHOOSE TO MAKE ANY OF YOUR PERSONALLY IDENTIFIABLE OR OTHER INFORMATION PUBLICLY AVAILABLE IN A SUBMISSION, YOU DO SO AT YOUR OWN RISK. You acknowledge and agree that We reserve the right (but have no obligation) to do any or all of the following, at its sole discretion: (i) monitor, evaluate or alter Submissions before or after they appear on the Services (including through the use of automated filtering software); and (ii) refuse, reject or remove any Submission at any time or for any reason (including through the use of automated filtering software or if We determine, in our sole discretion, that all rights, consents, releases and permissions have not been obtained by you despite your representations above).</p>
					</li>
					<li>
					<p><strong><a name="12"></a>Payment.&nbsp;</strong>If you provide payment information for purchasing or applying for a plan, then you will pay the applicable Carrier that provides such plan.</p>
					</li>
					<li>
					<p><strong><a name="13"></a>Proprietary Rights.</strong>&nbsp;All of the material included on the Services, including trademarks, text, graphics, logos and service marks, is Our property and may be the property of other parties, such as Carriers featured through the Services. U.S. and international copyright laws protect all Service Content available through the Services. Your use of the Services and the Site Content does not transfer to you any ownership or other rights in the Services or the Site Content. You may download Site Content displayed on the Services for your personal, noncommercial use only, provided you also retain all copyright and other proprietary notices contained on the Site Content. You may not modify, copy, distribute, transmit, display, publish, sell, license, or create derivative works using any of the Site Content for commercial or public purposes.</p>
					</li>
					<li>
					<p><strong><a name="14"></a>Consent to Electronic Disclosures and Signatures.</strong>&nbsp;You agree that all agreements, notices, disclosures and other communications that we provide to you electronically satisfy any legal requirement that such communications be in writing.&nbsp; Your consent to receive communications and to do business electronically applies to communications related to all Services we may make accessible or available, or offer to you, whether through a website, software application, email, messaging services (including text messages), or otherwise.</p>

					<p>If you submit a request to be matched with one of the Carriers featured through the Services, please note that these Carriers are required by law to provide you with certain communications, notices, disclosures, information and other materials ("<strong>Communications</strong>"). These Carriers must obtain your consent in order to provide you with these Communications electronically. By submitting a request to be matched with one of the Carriers, you affirmatively consent and agree to receive all Communications required under law electronically.</p>
					</li>
					<li>
					<p><strong><a name="15"></a>DISCLAIMER OF WARRANTIES.</strong>&nbsp;YOU EXPRESSLY AGREE THAT USE OF THE SERVICES IS AT YOUR OWN RISK. WE PROVIDE THE SERVICES ON AN "AS IS" BASIS. WE AND OUR SERVICE PROVIDERS EXPRESSLY DISCLAIM ALL WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED, INCLUDING THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE, AND NON-INFRINGEMENT. WE AND OUR SERVICE PROVIDERS MAKE NO WARRANTY THAT THE SERVICES WILL MEET YOUR REQUIREMENTS, OR THAT THE SERVICES WILL BE UNINTERRUPTED, TIMELY, SECURE, OR ERROR FREE; NOR DO WE OR OUR SERVICE PROVIDERS MAKE ANY WARRANTY AS TO THE RESULTS THAT MAY BE OBTAINED FROM THE USE OF THE SERVICES, AS TO CONFIDENTIALITY OR PRIVACY OF ANY YOUR INFORMATION REGISTRATION DATA, EXCEPT AS SET FORTH IN OUR&nbsp;<a href="/privacy-policy">PRIVACY POLICY</a>&nbsp;OR AS TO THE ACCURACY OR RELIABILITY OF ANY INFORMATION OBTAINED THROUGH THE SERVICES. ANY MATERIAL OR DATA DOWNLOADED OR OTHERWISE OBTAINED THROUGH THE USE OF THE SERVICES IS DONE AT YOUR OWN DISCRETION AND RISK AND YOU ARE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTER SYSTEM OR LOSS OF DATA THAT RESULTS FROM THE DOWNLOAD OF SUCH MATERIAL OR DATA. WE AND OUR SERVICE PROVIDERS MAKE NO WARRANTY REGARDING ANY GOODS OR SERVICES PURCHASED OR OBTAINED THROUGH THE SERVICES OR ANY TRANSACTIONS ENTERED INTO THROUGH THE SERVICES AND ARE NOT RESPONSIBLE FOR OTHER USERS. NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN, OBTAINED BY YOU FROM US, AFFILIATES OR THROUGH THE SERVICES, SHALL CREATE ANY WARRANTY NOT EXPRESSLY MADE HEREIN. SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF CERTAIN WARRANTIES, SO SOME OF THE ABOVE EXCLUSIONS MAY NOT APPLY TO YOU.</p>

					<p>While We take commercially reasonable steps to safeguard and to prevent unauthorized access to your information and registration data, we cannot be responsible for the acts of those who gain unauthorized access, and we make no warranty, express, implied, or otherwise, that we will prevent unauthorized access to your private information. IN NO EVENT SHALL WE BE LIABLE FOR ANY DAMAGES (WHETHER CONSEQUENTIAL, DIRECT, INCIDENTAL, INDIRECT, PUNITIVE, SPECIAL OR OTHERWISE) ARISING OUT OF, OR IN ANY WAY CONNECTED WITH, A THIRD PARTY'S UNAUTHORIZED ACCESS TO YOUR INFORMATION OR REGISTRATION DATA, REGARDLESS OF WHETHER SUCH DAMAGES ARE BASED ON CONTRACT, STRICT LIABILITY, TORT OR OTHER THEORIES OF LIABILITY, AND ALSO REGARDLESS OF WHETHER WE WERE GIVEN ACTUAL OR CONSTRUCTIVE NOTICE THAT DAMAGES WERE POSSIBLE.</p>
					</li>
					<li>
					<p><strong><a name="16"></a>LIMITATION OF LIABILITY.</strong>&nbsp;WE SHALL NOT BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL OR CONSEQUENTIAL DAMAGES RESULTING FROM THE USE OR THE INABILITY TO USE THE SERVICES OR FOR COST OF PROCUREMENT OF SUBSTITUTE GOODS AND SERVICES OR RESULTING FROM ANY GOODS OR SERVICES PURCHASED OR OBTAINED OR MESSAGES RECEIVED OR TRANSACTIONS ENTERED INTO THROUGH THE SERVICES OR RESULTING FROM UNAUTHORIZED ACCESS TO OR ALTERATION OF YOUR TRANSMISSIONS OR DATA, INCLUDING DAMAGES FOR LOSS OF PROFITS, USE, DATA OR OTHER INTANGIBLE, EVEN IF WE OR OUR SERVICE PROVIDERS HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES AND REGARDLESS OF THE LEGAL OR EQUITABLE THEORY UPON WHICH THE CLAIM IS BASED. SOME JURISDICTIONS DO NOT ALLOW THE LIMITATION OR EXCLUSION OF LIABILITY FOR INCIDENTAL OR CONSEQUENTIAL DAMAGES SO SOME OF THE ABOVE LIMITATIONS MAY NOT APPLY TO YOU. IN NO EVENT WILL WE EVER BE LIABLE TO YOU OR ANY OTHER PERSON FOR ANY CLAIMS, PROCEEDINGS, LIABILITIES, OBLIGATIONS, DAMAGES, LOSSES, AND COSTS, WHETHER IN CONTRACT, TORT OR UNDER OTHER FAULT OR WRONGDOING BY US OR ANY PERSON FOR WHOM EITHER WE ARE RESPONSIBLE, IN AN AMOUNT EXCEEDING $10,000.00.</p>
					</li>
					<li>
					<p><strong><a name="17"></a>Indemnification.</strong>&nbsp;You agree to indemnify and hold Us, our subsidiaries, affiliates, officers and employees, Carriers, and service providers harmless from any claim or demand, including reasonable attorneys' fees, made by any third party due to or arising out of your use of the Services, the violation of this Agreement by you, or the infringement by you, or other user of the Services using your computer, of any intellectual property or other right of any person or entity. Even though prohibited, people may provide information that is offensive, false, harmful, or deceptive. We and Our service providers assume no responsibility whatsoever for such content or actions.</p>
					</li>
					<li>
					<p><strong><a name="18"></a>RELEASE.</strong>&nbsp;YOU HEREBY RELEASE, REMISE AND FOREVER DISCHARGE US AND OUR SERVICE PROVIDERS AND EACH OF THEIR RESPECTIVE AGENTS, DIRECTORS, OFFICERS, EMPLOYEES, INFORMATION PROVIDERS, SERVICE PROVIDERS, SUPPLIERS, LICENSORS AND LICENSEES, AND ALL OTHER RELATED, ASSOCIATED, OR CONNECTED PERSONS FROM ANY AND ALL MANNER OF RIGHTS, CLAIMS, COMPLAINTS, DEMANDS, CAUSES OF ACTION, PROCEEDINGS, LIABILITIES, OBLIGATIONS, LEGAL FEES, COSTS, AND DISBURSEMENTS OF ANY NATURE AND KIND WHATSOEVER AND HOWSOEVER ARISING, WHETHER KNOWN OR UNKNOWN, WHICH NOW OR HEREAFTER EXIST, WHICH ARISE FROM, RELATE TO, OR ARE CONNECTED WITH YOUR USE OF THE SITE.</p>
					</li>
					<li><strong><a name="19"></a>ARBITRATION.</strong>
					<p>You agree that agree that any dispute or claim arising out of your use of the Services, including any dispute or claim as to the application, enforceability, scope, or interpretation of this agreement to arbitrate, shall be resolved by binding arbitration, rather than in court, except that you may assert claims in small claims court if your claims qualify. The Federal Arbitration Act and federal arbitration law apply to this agreement.</p>

					<p>There is no judge or jury in arbitration, and court review of an arbitration award is limited. However, an arbitrator can award on an individual basis the same damages and relief as a court (including injunctive and declaratory relief, or statutory damages), and must follow these Terms of Service.</p>

					<p>Arbitration shall be administered by the Judicial Arbitration and Mediation Services, Inc. (“JAMS”), pursuant to the most-current&nbsp;<a href="http://www.jamsadr.com/rules-streamlined-arbitration/" target="_blank">JAMS Streamlined Arbitration Rules &amp; Procedures</a>, and conducted by a single, neutral arbitrator. Arbitration shall take place by phone, unless an in-person hearing is requested by either party. In that case, the hearing shall take place in the county where you reside. To the extent this agreement to arbitrate conflicts with the JAMS Policy on Consumer Arbitrations Pursuant to Pre-Dispute Clauses Minimum Standards of Procedural Fairness (the “Minimum Standards”), the Minimum Standards in that regard will apply.</p>

					<p>Disputes may also be referred to another arbitration organization if you and Us agree in writing, or to an arbitrator appointed pursuant to Section 5 of the Federal Arbitration Act.</p>

					<p><strong>We each agree that any dispute resolution proceedings will be conducted only on an individual basis and not in a class, consolidated, or representative action.</strong>&nbsp;If for any reason a claim proceeds in court rather than in arbitration,&nbsp;<strong>we each waive any right to a jury trial</strong>. We also both agree that you or we may bring suit in court to enjoin infringement or other misuse of intellectual property rights.</p>
					</li>
					<li>
					<p><strong><a name="20"></a>Claims of Copyright Infringement.</strong>&nbsp;The Digital Millennium Copyright Act of 1998 (the&nbsp;<strong>"DMCA"</strong>) provides recourse for copyright owners who believe that material appearing on the Internet infringes their rights under U.S. copyright law.</p>

					<p>If you believe any Site Content infringes your copyrights, you may request that we remove the Site Content from the Sites (or disable access to that Site Content) by contacting our Designated Agent (identified below) and providing the following information:</p>

					<ul>
						<li>Identification of the copyrighted work that you believe to be infringed. Please describe the work and, where possible, include a copy or the location (e.g., URL) of an authorized version of the work.</li>
						<li>Identification of the material that you believe to be infringing and its location. Please describe the material, and provide us with its URL or any other pertinent information that will allow us to locate the material.</li>
						<li>Your name, address, telephone number, and e-mail address.</li>
						<li>A statement that you have a good faith belief that the complained of use of the materials is not authorized by the copyright owner, its agent, or the law.</li>
						<li>A statement that the information that you have supplied is accurate, and indicating that “under penalty of perjury,” you are the copyright owner or are authorized to act on the copyright owner’s behalf.</li>
						<li>A signature or the electronic equivalent from the copyright holder or authorized representative.</li>
					</ul>
					<p>Notices and counter-notices should be sent to:</p>
					<p>HealthPlanOne, LLC.<br>
					ATTN: CLO<br>
					35 Nutmeg Dr, Suite 220, Trumbull, CT 06611<br>
					Email:&nbsp;<a href="mailto:legal@hpone.com">legal@hpone.com</a></p>
					<p>Once notification in accordance with the above is received by the Designated Agent, it is our policy to: (a) remove or disable access to the Site Content; (b) notify the provider of the Site Content or Services user that it has removed or disabled access to such Site Content; and (c) terminate repeat infringers’ access to the Services.</p>
					<p>If you receive a notification of alleged copyright infringement, and believe that the claim is erroneous, you may submit a counter-notification to our Designated Agent within thirty (30) days of the date the Content was removed from the Services. A counter-notification must be a written communication that includes substantially the following:</p>
					<ul>
						<li>Identification of the material that has been removed or disabled and its location. Please describe the material, and provide us with its URL or any other pertinent information that will allow us to locate the material.</li>
						<li>Your name, address, telephone number, and e-mail address.</li>
						<li>A statement “under penalty of perjury” that you have a good faith belief that the material was removed or disabled as a result of mistake or misidentification of the material.</li>
						<li>A signature or the electronic equivalent of the person submitting the counter-notification.</li>
					</ul>
					<p>Upon receipt of a counter-notification in accordance with the above, We shall promptly provide the complaining party with a copy. The complaining party shall have within ten (10) business days to inform Us that an action has been filed seeking a court order to restrain the alleged infringer from engaging in infringing activity on the Services. If We receive such notification within ten (10) business days, We shall not replace the removed Site Content or cease disabling access to it. If We do not receive such notification from the complaining party that an action has been filed seeking a court order to restrain the alleged infringer from engaging in infringing activity on the Services, then We shall replace the removed Site Content or cease disabling access to it within four (4) business days following the expiration of the ten (10) business day deadline.</p>
					<p>In accordance with the DMCA and other applicable law, We may, in appropriate circumstances, at Our sole discretion, terminate access to the Services of any user that We find to be a repeat infringer. We reserve the right to define the criteria by which We will determine that a user is a “repeat infringer.” In the event that “repeat infringer” is defined by statute, law, or regulation as applicable to 17 USC § 512, We will adopt that definition as a minimum standard. Without limiting Our right to define “repeat infringer,” as a general rule, We will define a “repeat infringer” as any person or entity about whom We has received three or more DMCA notifications of alleged infringement in accordance with the procedures outlined above. We will take into account all relevant facts and circumstances when determining whether or not termination of access and/or use privileges of a “repeat infringer” is appropriate.</p>
					<p>If you believe that a user is a repeat infringer, please follow the instructions above to contact Our Designated Agent and provide information sufficient for us to verify that the user has been determined to be in violation of the DMCA repeatedly.</p>
					<p>We suggest that you consult your legal advisor before submitting a notice or counter-notice.</p>
					</li>
					<li>
					<p><strong><a name="21"></a>Governing Law.</strong>&nbsp;The Agreement shall be governed by and construed in accordance with the laws of the State of Connecticut (without regard to conflict of law provisions thereof). All disputes arising under, or in any way connected with use of this Site or the Services, shall be litigated exclusively in the state and federal courts residing in the State of Connecticut, and in no other court or jurisdiction. You hereby submit to the jurisdiction of the state and federal courts sitting in Bridgeport, Connecticut.</p>
					</li>
					<li>
					<p><strong><a name="22"></a>Advertising Disclaimers.</strong>&nbsp;For more information about our advertising content, go to&nbsp; <a data-target="#advertising_disclaimers" data-toggle="modal" href="#">Advertising Disclaimers.</a></p>
					</li>
					<li><strong><a name="23"></a>Data Processed in the United States.</strong>
					<p>We process data in the United States, and we make no representation that this the Services are appropriate or available for use beyond the United States. If you use the Services from other locations, you are doing so on your own initiative and are responsible for compliance with applicable local laws regarding your online conduct and acceptable content, if and to the extent local laws apply. This Services may describe programs and services that are available only in the United States (or only parts of it). We reserve the right to limit the availability of the Services and/or the provision of any content, programs, service, or other feature described or available through the Services to any person, entity, geographic area, or jurisdiction, at any time and in our sole discretion, and to limit the quantities of any content, program, service, or other feature that we provide.</p>
					<p>If you are in a jurisdiction outside the United States and nevertheless continue to use the Services, your personal information may be transferred into and processed within the United States, and your continued use of the Services constitutes consent to such transfer and processing. Please review our&nbsp;<a href="/privacy-policy">Privacy Policy</a>&nbsp;for additional information on how we process and protect your data.</p>
					</li>
					<li><strong><a name="24"></a>Severability and Enforceability.</strong>
					<p>If any provision or portion of these Terms is held to be illegal, invalid, or unenforceable, in whole or in part, it shall be modified to the minimum extent necessary to correct any deficiencies or replaced with a provision which is as close as is legally permissible to the provision found invalid or unenforceable and shall not affect the legality, validity or enforceability of any other provisions or portions of these Terms.</p>
					</li>
					<li><strong><a name="25"></a>Product Restrictions.</strong>
					<p>Policies and products are not available in all states. Exclusions and misstatement and misrepresentation restrictions may apply. The quote, policy, and plan comparisons and information we provide are furnished by the individual Carrier, and are subject to change without notice and/or underwriting qualification by the specific Carrier to which the application is submitted. A quote should not be construed as a commitment from the Carrier to actually issue that policy or any other policy to you. All quotes that we present are based on the information you have provided us at our request. You are responsible for ensuring that information you provide in connection with any quotation or inquiry through the Services is accurate and up to date. You may change or edit your information at our Services by contacting us via email at Sales@hpone.com.</p>
					<p>For Medicare Supplement Only: To purchase certain insurance policies, you must submit a completed application to the Carrier, which will then review and underwrite your application along with any other information that may be gathered from a variety of sources. Following that review and underwriting analysis, the insurance company will then determine whether you are eligible for insurance and, if so, the precise premium to charge you for the insurance policy you seek. This underwriting process may result in higher or lower premiums than your quote for these policies.</p>
					</li>
				</ol>

			</div>
		</div>
		<div class="modal-footer">
			<button type="button" data-dismiss="modal" class="btn btn-red rounded-pill mx-auto text-white px-3">CLOSE</button>
		</div>
	  </div>
	</div>
</div>