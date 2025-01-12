<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Login System</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="description" content="Login System">
	<meta name="author" content="KaijuThemes">

	<link type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet'>

	<link type="text/css" href="<?= bs('public/assets/fonts/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	<!-- Font Awesome -->
	<link type="text/css" href="<?= bs('public/assets/fonts/themify-icons/themify-icons.css') ?>" rel="stylesheet">
	<!-- Themify Icons -->
	<link type="text/css" href="<?= bs('public/assets/css/styles.css') ?>" rel="stylesheet">
	<!-- Core CSS with all styles -->

	<link type="text/css" href="<?= bs('public/assets/plugins/codeprettifier/prettify.css') ?>" rel="stylesheet">
	<!-- Code Prettifier -->
	<link type="text/css" href="<?= bs('public/assets/plugins/iCheck/skins/minimal/blue.css') ?>" rel="stylesheet">
	<!-- iCheck -->

	<!--[if lt IE 10]>
        <script type="text/javascript" src="assets/js/media.match.min.js"></script>
        <script type="text/javascript" src="assets/js/respond.min.js"></script>
        <script type="text/javascript" src="assets/js/placeholder.min.js"></script>
    <![endif]-->
	<!-- The following CSS are included as plugins and can be removed if unused-->

	<link type="text/css" href="<?= bs('public/assets/plugins/gridforms/gridforms/gridforms.css') ?>" rel="stylesheet"> <!-- Gridforms -->

</head>

<body class="animated-content">

	<?php $this->load->view('template/header') ?>

	<?php $this->load->view('template/sidebar') ?>


	<div class="static-content-wrapper">
		<div class="static-content">
			<div class="page-content">
				<ol class="breadcrumb">

					<li><a href="index.html">Home</a></li>
					<li>Advanced Forms</li>
					<li class="active"><a href="form-gridforms.html">Grid Forms</a></li>

				</ol>
				<div class="container-fluid">


					<div class="alert alert-info">
						<h3>Grid Forms</h3>
						<p>Grid forms are dense forms designed for use in applications that require lots of data to be entered regularly. A tiny Javascript/CSS framework that helps you make forms on grids with ease.</p>
					</div>
					<div data-widget-group="group1">
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-white" data-widget='{"draggable": "false"}'>
									<div class="panel-heading">
										<h2>Demo Form</h2>
										<!-- <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div> -->
									</div>
									<div class="panel-body">
										<form class="grid-form">
											<fieldset>
												<legend>Please open an account at</legend>
												<div data-row-span="1">
													<div data-field-span="1">
														<label>Branch Name</label>
														<input type="text" autofocus>
													</div>
												</div>
											</fieldset>

											<br><br>

											<fieldset>
												<legend>Personal Details (Sole/First Accountholder/Minor)</legend>

												<div data-row-span="4">
													<div data-field-span="1">
														<label>Title</label>
														<label><input type="radio" name="customer-title[]"> Mr.</label> &nbsp;
														<label><input type="radio" name="customer-title[]"> Mrs.</label> &nbsp;
														<label><input type="radio" name="customer-title[]"> Ms.</label>
													</div>
													<div data-field-span="3">
														<label>Full Name</label>
														<input type="text">
													</div>
												</div>
												<div data-row-span="2">
													<div data-field-span="1">
														<label>Date of birth</label>
														<input type="text">
													</div>
													<div data-field-span="1">
														<label>Nationality</label>
														<select>
															<option value="Afghanistan" title="Afghanistan">Afghanistan</option>
															<option value="Ã…land Islands" title="Ã…land Islands">Aland Islands</option>
															<option value="Albania" title="Albania">Albania</option>
															<option value="Algeria" title="Algeria">Algeria</option>
															<option value="American Samoa" title="American Samoa">American Samoa</option>
															<option value="Andorra" title="Andorra">Andorra</option>
															<option value="Angola" title="Angola">Angola</option>
															<option value="Anguilla" title="Anguilla">Anguilla</option>
															<option value="Antarctica" title="Antarctica">Antarctica</option>
															<option value="Antigua and Barbuda" title="Antigua and Barbuda">Antigua and Barbuda</option>
															<option value="Argentina" title="Argentina">Argentina</option>
															<option value="Armenia" title="Armenia">Armenia</option>
															<option value="Aruba" title="Aruba">Aruba</option>
															<option value="Australia" title="Australia">Australia</option>
															<option value="Austria" title="Austria">Austria</option>
															<option value="Azerbaijan" title="Azerbaijan">Azerbaijan</option>
															<option value="Bahamas" title="Bahamas">Bahamas</option>
															<option value="Bahrain" title="Bahrain">Bahrain</option>
															<option value="Bangladesh" title="Bangladesh">Bangladesh</option>
															<option value="Barbados" title="Barbados">Barbados</option>
															<option value="Belarus" title="Belarus">Belarus</option>
															<option value="Belgium" title="Belgium">Belgium</option>
															<option value="Belize" title="Belize">Belize</option>
															<option value="Benin" title="Benin">Benin</option>
															<option value="Bermuda" title="Bermuda">Bermuda</option>
															<option value="Bhutan" title="Bhutan">Bhutan</option>
															<option value="Bolivia, Plurinational State of" title="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
															<option value="Bonaire, Sint Eustatius and Saba" title="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
															<option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
															<option value="Botswana" title="Botswana">Botswana</option>
															<option value="Bouvet Island" title="Bouvet Island">Bouvet Island</option>
															<option value="Brazil" title="Brazil">Brazil</option>
															<option value="British Indian Ocean Territory" title="British Indian Ocean Territory">British Indian Ocean Territory</option>
															<option value="Brunei Darussalam" title="Brunei Darussalam">Brunei Darussalam</option>
															<option value="Bulgaria" title="Bulgaria">Bulgaria</option>
															<option value="Burkina Faso" title="Burkina Faso">Burkina Faso</option>
															<option value="Burundi" title="Burundi">Burundi</option>
															<option value="Cambodia" title="Cambodia">Cambodia</option>
															<option value="Cameroon" title="Cameroon">Cameroon</option>
															<option value="Canada" title="Canada">Canada</option>
															<option value="Cape Verde" title="Cape Verde">Cape Verde</option>
															<option value="Cayman Islands" title="Cayman Islands">Cayman Islands</option>
															<option value="Central African Republic" title="Central African Republic">Central African Republic</option>
															<option value="Chad" title="Chad">Chad</option>
															<option value="Chile" title="Chile">Chile</option>
															<option value="China" title="China">China</option>
															<option value="Christmas Island" title="Christmas Island">Christmas Island</option>
															<option value="Cocos (Keeling) Islands" title="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
															<option value="Colombia" title="Colombia">Colombia</option>
															<option value="Comoros" title="Comoros">Comoros</option>
															<option value="Congo" title="Congo">Congo</option>
															<option value="Congo, the Democratic Republic of the" title="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
															<option value="Cook Islands" title="Cook Islands">Cook Islands</option>
															<option value="Costa Rica" title="Costa Rica">Costa Rica</option>
															<option value="CÃ´te d'Ivoire" title="CÃ´te d'Ivoire">CÃ´te d'Ivoire</option>
															<option value="Croatia" title="Croatia">Croatia</option>
															<option value="Cuba" title="Cuba">Cuba</option>
															<option value="CuraÃ§ao" title="CuraÃ§ao">CuraÃ§ao</option>
															<option value="Cyprus" title="Cyprus">Cyprus</option>
															<option value="Czech Republic" title="Czech Republic">Czech Republic</option>
															<option value="Denmark" title="Denmark">Denmark</option>
															<option value="Djibouti" title="Djibouti">Djibouti</option>
															<option value="Dominica" title="Dominica">Dominica</option>
															<option value="Dominican Republic" title="Dominican Republic">Dominican Republic</option>
															<option value="Ecuador" title="Ecuador">Ecuador</option>
															<option value="Egypt" title="Egypt">Egypt</option>
															<option value="El Salvador" title="El Salvador">El Salvador</option>
															<option value="Equatorial Guinea" title="Equatorial Guinea">Equatorial Guinea</option>
															<option value="Eritrea" title="Eritrea">Eritrea</option>
															<option value="Estonia" title="Estonia">Estonia</option>
															<option value="Ethiopia" title="Ethiopia">Ethiopia</option>
															<option value="Falkland Islands (Malvinas)" title="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
															<option value="Faroe Islands" title="Faroe Islands">Faroe Islands</option>
															<option value="Fiji" title="Fiji">Fiji</option>
															<option value="Finland" title="Finland">Finland</option>
															<option value="France" title="France">France</option>
															<option value="French Guiana" title="French Guiana">French Guiana</option>
															<option value="French Polynesia" title="French Polynesia">French Polynesia</option>
															<option value="French Southern Territories" title="French Southern Territories">French Southern Territories</option>
															<option value="Gabon" title="Gabon">Gabon</option>
															<option value="Gambia" title="Gambia">Gambia</option>
															<option value="Georgia" title="Georgia">Georgia</option>
															<option value="Germany" title="Germany">Germany</option>
															<option value="Ghana" title="Ghana">Ghana</option>
															<option value="Gibraltar" title="Gibraltar">Gibraltar</option>
															<option value="Greece" title="Greece">Greece</option>
															<option value="Greenland" title="Greenland">Greenland</option>
															<option value="Grenada" title="Grenada">Grenada</option>
															<option value="Guadeloupe" title="Guadeloupe">Guadeloupe</option>
															<option value="Guam" title="Guam">Guam</option>
															<option value="Guatemala" title="Guatemala">Guatemala</option>
															<option value="Guernsey" title="Guernsey">Guernsey</option>
															<option value="Guinea" title="Guinea">Guinea</option>
															<option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
															<option value="Guyana" title="Guyana">Guyana</option>
															<option value="Haiti" title="Haiti">Haiti</option>
															<option value="Heard Island and McDonald Islands" title="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
															<option value="Holy See (Vatican City State)" title="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
															<option value="Honduras" title="Honduras">Honduras</option>
															<option value="Hong Kong" title="Hong Kong">Hong Kong</option>
															<option value="Hungary" title="Hungary">Hungary</option>
															<option value="Iceland" title="Iceland">Iceland</option>
															<option value="India" title="India">India</option>
															<option value="Indonesia" title="Indonesia">Indonesia</option>
															<option value="Iran, Islamic Republic of" title="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
															<option value="Iraq" title="Iraq">Iraq</option>
															<option value="Ireland" title="Ireland">Ireland</option>
															<option value="Isle of Man" title="Isle of Man">Isle of Man</option>
															<option value="Israel" title="Israel">Israel</option>
															<option value="Italy" title="Italy">Italy</option>
															<option value="Jamaica" title="Jamaica">Jamaica</option>
															<option value="Japan" title="Japan">Japan</option>
															<option value="Jersey" title="Jersey">Jersey</option>
															<option value="Jordan" title="Jordan">Jordan</option>
															<option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
															<option value="Kenya" title="Kenya">Kenya</option>
															<option value="Kiribati" title="Kiribati">Kiribati</option>
															<option value="Korea, Democratic People's Republic of" title="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
															<option value="Korea, Republic of" title="Korea, Republic of">Korea, Republic of</option>
															<option value="Kuwait" title="Kuwait">Kuwait</option>
															<option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
															<option value="Lao People's Democratic Republic" title="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
															<option value="Latvia" title="Latvia">Latvia</option>
															<option value="Lebanon" title="Lebanon">Lebanon</option>
															<option value="Lesotho" title="Lesotho">Lesotho</option>
															<option value="Liberia" title="Liberia">Liberia</option>
															<option value="Libya" title="Libya">Libya</option>
															<option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
															<option value="Lithuania" title="Lithuania">Lithuania</option>
															<option value="Luxembourg" title="Luxembourg">Luxembourg</option>
															<option value="Macao" title="Macao">Macao</option>
															<option value="Macedonia, the former Yugoslav Republic of" title="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
															<option value="Madagascar" title="Madagascar">Madagascar</option>
															<option value="Malawi" title="Malawi">Malawi</option>
															<option value="Malaysia" title="Malaysia">Malaysia</option>
															<option value="Maldives" title="Maldives">Maldives</option>
															<option value="Mali" title="Mali">Mali</option>
															<option value="Malta" title="Malta">Malta</option>
															<option value="Marshall Islands" title="Marshall Islands">Marshall Islands</option>
															<option value="Martinique" title="Martinique">Martinique</option>
															<option value="Mauritania" title="Mauritania">Mauritania</option>
															<option value="Mauritius" title="Mauritius">Mauritius</option>
															<option value="Mayotte" title="Mayotte">Mayotte</option>
															<option value="Mexico" title="Mexico">Mexico</option>
															<option value="Micronesia, Federated States of" title="Micronesia, Federated States of">Micronesia, Federated States of</option>
															<option value="Moldova, Republic of" title="Moldova, Republic of">Moldova, Republic of</option>
															<option value="Monaco" title="Monaco">Monaco</option>
															<option value="Mongolia" title="Mongolia">Mongolia</option>
															<option value="Montenegro" title="Montenegro">Montenegro</option>
															<option value="Montserrat" title="Montserrat">Montserrat</option>
															<option value="Morocco" title="Morocco">Morocco</option>
															<option value="Mozambique" title="Mozambique">Mozambique</option>
															<option value="Myanmar" title="Myanmar">Myanmar</option>
															<option value="Namibia" title="Namibia">Namibia</option>
															<option value="Nauru" title="Nauru">Nauru</option>
															<option value="Nepal" title="Nepal">Nepal</option>
															<option value="Netherlands" title="Netherlands">Netherlands</option>
															<option value="New Caledonia" title="New Caledonia">New Caledonia</option>
															<option value="New Zealand" title="New Zealand">New Zealand</option>
															<option value="Nicaragua" title="Nicaragua">Nicaragua</option>
															<option value="Niger" title="Niger">Niger</option>
															<option value="Nigeria" title="Nigeria">Nigeria</option>
															<option value="Niue" title="Niue">Niue</option>
															<option value="Norfolk Island" title="Norfolk Island">Norfolk Island</option>
															<option value="Northern Mariana Islands" title="Northern Mariana Islands">Northern Mariana Islands</option>
															<option value="Norway" title="Norway">Norway</option>
															<option value="Oman" title="Oman">Oman</option>
															<option value="Pakistan" title="Pakistan">Pakistan</option>
															<option value="Palau" title="Palau">Palau</option>
															<option value="Palestinian Territory, Occupied" title="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
															<option value="Panama" title="Panama">Panama</option>
															<option value="Papua New Guinea" title="Papua New Guinea">Papua New Guinea</option>
															<option value="Paraguay" title="Paraguay">Paraguay</option>
															<option value="Peru" title="Peru">Peru</option>
															<option value="Philippines" title="Philippines">Philippines</option>
															<option value="Pitcairn" title="Pitcairn">Pitcairn</option>
															<option value="Poland" title="Poland">Poland</option>
															<option value="Portugal" title="Portugal">Portugal</option>
															<option value="Puerto Rico" title="Puerto Rico">Puerto Rico</option>
															<option value="Qatar" title="Qatar">Qatar</option>
															<option value="RÃ©union" title="RÃ©union">RÃ©union</option>
															<option value="Romania" title="Romania">Romania</option>
															<option value="Russian Federation" title="Russian Federation">Russian Federation</option>
															<option value="Rwanda" title="Rwanda">Rwanda</option>
															<option value="Saint BarthÃ©lemy" title="Saint BarthÃ©lemy">Saint BarthÃ©lemy</option>
															<option value="Saint Helena, Ascension and Tristan da Cunha" title="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
															<option value="Saint Kitts and Nevis" title="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
															<option value="Saint Lucia" title="Saint Lucia">Saint Lucia</option>
															<option value="Saint Martin (French part)" title="Saint Martin (French part)">Saint Martin (French part)</option>
															<option value="Saint Pierre and Miquelon" title="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
															<option value="Saint Vincent and the Grenadines" title="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
															<option value="Samoa" title="Samoa">Samoa</option>
															<option value="San Marino" title="San Marino">San Marino</option>
															<option value="Sao Tome and Principe" title="Sao Tome and Principe">Sao Tome and Principe</option>
															<option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
															<option value="Senegal" title="Senegal">Senegal</option>
															<option value="Serbia" title="Serbia">Serbia</option>
															<option value="Seychelles" title="Seychelles">Seychelles</option>
															<option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
															<option value="Singapore" title="Singapore">Singapore</option>
															<option value="Sint Maarten (Dutch part)" title="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
															<option value="Slovakia" title="Slovakia">Slovakia</option>
															<option value="Slovenia" title="Slovenia">Slovenia</option>
															<option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
															<option value="Somalia" title="Somalia">Somalia</option>
															<option value="South Africa" title="South Africa">South Africa</option>
															<option value="South Georgia and the South Sandwich Islands" title="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
															<option value="South Sudan" title="South Sudan">South Sudan</option>
															<option value="Spain" title="Spain">Spain</option>
															<option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
															<option value="Sudan" title="Sudan">Sudan</option>
															<option value="Suriname" title="Suriname">Suriname</option>
															<option value="Svalbard and Jan Mayen" title="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
															<option value="Swaziland" title="Swaziland">Swaziland</option>
															<option value="Sweden" title="Sweden">Sweden</option>
															<option value="Switzerland" title="Switzerland">Switzerland</option>
															<option value="Syrian Arab Republic" title="Syrian Arab Republic">Syrian Arab Republic</option>
															<option value="Taiwan, Province of China" title="Taiwan, Province of China">Taiwan, Province of China</option>
															<option value="Tajikistan" title="Tajikistan">Tajikistan</option>
															<option value="Tanzania, United Republic of" title="Tanzania, United Republic of">Tanzania, United Republic of</option>
															<option value="Thailand" title="Thailand">Thailand</option>
															<option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
															<option value="Togo" title="Togo">Togo</option>
															<option value="Tokelau" title="Tokelau">Tokelau</option>
															<option value="Tonga" title="Tonga">Tonga</option>
															<option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and Tobago</option>
															<option value="Tunisia" title="Tunisia">Tunisia</option>
															<option value="Turkey" title="Turkey">Turkey</option>
															<option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
															<option value="Turks and Caicos Islands" title="Turks and Caicos Islands">Turks and Caicos Islands</option>
															<option value="Tuvalu" title="Tuvalu">Tuvalu</option>
															<option value="Uganda" title="Uganda">Uganda</option>
															<option value="Ukraine" title="Ukraine">Ukraine</option>
															<option value="United Arab Emirates" title="United Arab Emirates">United Arab Emirates</option>
															<option value="United Kingdom" title="United Kingdom">United Kingdom</option>
															<option value="United States" title="United States">United States</option>
															<option value="United States Minor Outlying Islands" title="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
															<option value="Uruguay" title="Uruguay">Uruguay</option>
															<option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
															<option value="Vanuatu" title="Vanuatu">Vanuatu</option>
															<option value="Venezuela, Bolivarian Republic of" title="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
															<option value="Viet Nam" title="Viet Nam">Viet Nam</option>
															<option value="Virgin Islands, British" title="Virgin Islands, British">Virgin Islands, British</option>
															<option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
															<option value="Wallis and Futuna" title="Wallis and Futuna">Wallis and Futuna</option>
															<option value="Western Sahara" title="Western Sahara">Western Sahara</option>
															<option value="Yemen" title="Yemen">Yemen</option>
															<option value="Zambia" title="Zambia">Zambia</option>
															<option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
														</select>
													</div>
												</div>
												<div data-row-span="4">
													<div data-field-span="2" data-field-error="Please enter a valid email address">
														<label>E-mail</label>
														<input type="text">
													</div>
													<div data-field-span="1">
														<label>Mobile No.</label>
														<input type="text">
													</div>
													<div data-field-span="1">
														<label>Existing Bank Account No. (if any)</label>
														<input type="text">
													</div>
												</div>
												<div data-row-span="2">
													<div data-field-span="1">
														<label>In case of a minor please provide details (Name of parent and natural guardian)</label>
														<input type="text">
													</div>
													<div data-field-span="1">
														<label>Name of father/spouse</label>
														<input type="text">
													</div>
												</div>

												<br>
												<fieldset>
													<legend>Residential address</legend>
													<div data-row-span="2">
														<div data-field-span="1">
															<label>Flat no. and bldg. name</label>
															<input type="text">
														</div>
														<div data-field-span="1">
															<label>Road no./name</label>
															<input type="text">
														</div>
													</div>
													<div data-row-span="4">
														<div data-field-span="3">
															<label>Area and landmark</label>
															<input type="text">
														</div>
														<div data-field-span="1">
															<label>City</label>
															<input type="text">
														</div>
													</div>
													<div data-row-span="4">
														<div data-field-span="1">
															<label>Telephone Residence</label>
															<input type="text">
														</div>
														<div data-field-span="1">
															<label>Office</label>
															<input type="text">
														</div>
														<div data-field-span="1">
															<label>Fax</label>
															<input type="text">
														</div>
														<div data-field-span="1">
															<label>Pin code</label>
															<input type="text">
														</div>
													</div>
												</fieldset>
											</fieldset>
											<br>

											<fieldset>
												<legend>Mailing Address (If different from the First Accountholder's address)</legend>
												<div data-row-span="1">
													<div data-field-span="1">
														<label>Company name and department/ Flat no. and bldg. name</label>
														<input type="text">
													</div>
												</div>
												<div data-row-span="4">
													<div data-field-span="1">
														<label>Road no./name</label>
														<input type="text">
													</div>
													<div data-field-span="1">
														<label>Area and landmark</label>
														<input type="text">
													</div>
													<div data-field-span="1">
														<label>City</label>
														<input type="text">
													</div>
													<div data-field-span="1">
														<label>Pin Code</label>
														<input type="text">
													</div>
												</div>
												<div data-row-span="4">
													<div data-field-span="1">
														<label>Telephone Residence</label>
														<input type="text">
													</div>
													<div data-field-span="1">
														<label>Office</label>
														<input type="text">
													</div>
													<div data-field-span="1">
														<label>Fax</label>
														<input type="text">
													</div>
													<div data-field-span="1">
														<label>Mobile No.</label>
														<input type="text">
													</div>
												</div>
												<div data-row-span="1">
													<div data-field-span="1">
														<label>E-mail</label>
														<input type="text">
													</div>
												</div>
											</fieldset>

											<br><br>

											<fieldset>
												<legend>Details of Introduction by Existing Customer (If applicable)</legend>
												<div data-row-span="2">
													<div data-field-span="1">
														<label>Customer Name</label>
														<input type="text">
													</div>
													<div data-field-span="1">
														<label>Account No.</label>
														<input type="text">
													</div>
												</div>
												<div data-row-span="1">
													<div data-field-span="1">
														<label>Introducer's signature</label>
														<textarea></textarea>
													</div>
												</div>
											</fieldset>

											<br><br>

											<fieldset>
												<legend>Account Details</legend>
												<div data-row-span="2">
													<div data-field-span="1">
														<label>Choice of account</label>
														<label><input type="checkbox"> Savings</label> &nbsp;
														<label><input type="checkbox"> Current</label> &nbsp;
														<label><input type="checkbox"> Fixed deposits</label>
													</div>
													<div data-field-span="1">
														<label>Mode of funding</label>
														<label><input type="checkbox"> Cash</label> &nbsp;
														<label><input type="checkbox"> Cheque</label> &nbsp;
														<label><input type="checkbox"> NEFT</label>
													</div>
												</div>
												<div data-row-span="1">
													<div data-field-span="1">
														<label>Amount</label>
														<input type="text">
													</div>
												</div>
												<br>
												<fieldset>
													<legend>Details of Fixed Deposit</legend>
													<div data-row-span="2">
														<div data-field-span="1">
															<label>Types of deposit</label>
															<label><input type="checkbox"> Ordinary</label> &nbsp;
															<label><input type="checkbox"> Cumulative</label>
														</div>
														<div data-field-span="1">
															<label>Mode of funding</label>
															<label><input type="checkbox"> Cash</label> &nbsp;
															<label><input type="checkbox"> Cheque</label> &nbsp;
															<label><input type="checkbox"> NEFT</label>
														</div>
													</div>
													<div data-row-span="4">
														<div data-field-span="2">
															<label>Amount</label>
															<input type="text">
														</div>
														<div data-field-span="1">
															<label>No. of deposits</label>
															<input type="text">
														</div>
														<div data-field-span="1">
															<label>Individual Deposit Amount</label>
															<input type="text">
														</div>
													</div>
												</fieldset>
											</fieldset>

											<br><br>
											<fieldset>
												<legend>Personal Details</legend>
												<div data-row-span="1">
													<div data-field-span="1">
														<label>Occupation</label>
														<label><input type="checkbox"> Non-executive</label> &nbsp;
														<label><input type="checkbox"> Housewife</label> &nbsp;
														<label><input type="checkbox"> Retired</label> &nbsp;
														<label><input type="checkbox"> Student</label> &nbsp;
														<label><input type="checkbox"> Other</label> &nbsp;
														<label><input type="checkbox"> Unemployed</label>
													</div>
												</div>
												<div data-row-span="1">
													<div data-field-span="1">
														<label>Job Title</label>
														<input type="text">
													</div>
												</div>
												<div data-row-span="2">
													<div data-field-span="1">
														<label>Department</label>
														<input type="text">
													</div>
													<div data-field-span="1">
														<label>Nature of business</label>
														<input type="text">
													</div>
												</div>
												<div data-row-span="2">
													<div data-field-span="1">
														<label>Education</label>
														<label><input type="checkbox"> Under graduate</label> &nbsp;
														<label><input type="checkbox"> Graduate</label> &nbsp;
														<label><input type="checkbox"> Others</label>
													</div>
													<div data-field-span="1">
														<label>Monthly Income</label>
														<label><input type="checkbox"> Zero Income</label> &nbsp;
														<label><input type="checkbox"> Less than $10,000</label> &nbsp;
														<label><input type="checkbox"> $10,000+</label>
													</div>
												</div>
												<div data-row-span="2">
													<div data-field-span="1">
														<label>Maritial Status</label>
														<label><input type="checkbox"> Married</label> &nbsp;
														<label><input type="checkbox"> Single</label>
													</div>
													<div data-field-span="1">
														<label>Spouse name</label>
														<input type="text">
													</div>
												</div>
												<br>
												<fieldset>
													<legend>Other existing bank accounts, if any</legend>
													<div data-row-span="2">
														<div data-field-span="1">
															<label>Name of the Bank / branch</label>
															<input type="text">
														</div>
														<div data-field-span="1">
															<label>Name of the Bank / branch</label>
															<input type="text">
														</div>
													</div>
												</fieldset>
											</fieldset>
											<br><br>
											<fieldset>
												<legend>Reason for Account opening</legend>
												<div data-row-span="2">
													<div data-field-span="1">
														<label>Please specify</label>
														<input type="text">
													</div>
												</div>
											</fieldset>
											<br><br>
											<fieldset>
												<legend>Terms And Conditions</legend>
												<div data-row-span="1">
													<div data-field-span="1">
														<label></label>
														<label><input type="checkbox"> I/We confirm having read and understood the account rules of The Banking Corporation Limited ('the Bank'), and hereby agree to be bound by the terms and conditions and amendments governing the account(s) issued by the Bank from time-to-time.</label>
													</div>
												</div>
											</fieldset>
											<div class="clearfix pt-md">
												<div class="pull-right">
													<button class="btn-primary btn">Submit Form</button>
													<button class="btn-default btn">Cancel</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>


				</div> <!-- .container-fluid -->
			</div> <!-- #page-content -->
		</div>
		<footer role="contentinfo">
			<div class="clearfix">
				<ul class="list-unstyled list-inline pull-left">
					<li>
						<h6 style="margin: 0;">&copy; 2015 Avenxo</h6>
					</li>
				</ul>
				<button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
			</div>
		</footer>

	</div>
	</div>
	</div>


	<!-- Switcher -->
	<div class="demo-options">
		<div class="demo-options-icon"><i class="ti ti-paint-bucket"></i></div>
		<div class="demo-heading">Demo Settings</div>

		<div class="demo-body">
			<div class="tabular">
				<div class="tabular-row">
					<div class="tabular-cell">Fixed Header</div>
					<div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" checked data-size="mini" data-on-color="success" data-off-color="default" name="demo-fixedheader" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
				</div>
				<div class="tabular-row">
					<div class="tabular-cell">Boxed Layout</div>
					<div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" data-size="mini" data-on-color="success" data-off-color="default" name="demo-boxedlayout" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
				</div>
				<div class="tabular-row">
					<div class="tabular-cell">Collapse Leftbar</div>
					<div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" data-size="mini" data-on-color="success" data-off-color="default" name="demo-collapseleftbar" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
				</div>
			</div>
		</div>

		<div class="demo-body">
			<div class="option-title">Topnav</div>
			<ul id="demo-header-color" class="demo-color-list">
				<li><span class="demo-cyan"></span></li>
				<li><span class="demo-light-blue"></span></li>
				<li><span class="demo-blue"></span></li>
				<li><span class="demo-indigo"></span></li>
				<li><span class="demo-deep-purple"></span></li>
				<li><span class="demo-purple"></span></li>
				<li><span class="demo-pink"></span></li>
				<li><span class="demo-red"></span></li>
				<li><span class="demo-teal"></span></li>
				<li><span class="demo-green"></span></li>
				<li><span class="demo-light-green"></span></li>
				<li><span class="demo-lime"></span></li>
				<li><span class="demo-yellow"></span></li>
				<li><span class="demo-amber"></span></li>
				<li><span class="demo-orange"></span></li>
				<li><span class="demo-deep-orange"></span></li>
				<li><span class="demo-midnightblue"></span></li>
				<li><span class="demo-bluegray"></span></li>
				<li><span class="demo-bluegraylight"></span></li>
				<li><span class="demo-black"></span></li>
				<li><span class="demo-gray"></span></li>
				<li><span class="demo-graylight"></span></li>
				<li><span class="demo-default"></span></li>
				<li><span class="demo-brown"></span></li>
			</ul>
		</div>

		<div class="demo-body">
			<div class="option-title">Sidebar</div>
			<ul id="demo-sidebar-color" class="demo-color-list">
				<li><span class="demo-cyan"></span></li>
				<li><span class="demo-light-blue"></span></li>
				<li><span class="demo-blue"></span></li>
				<li><span class="demo-indigo"></span></li>
				<li><span class="demo-deep-purple"></span></li>
				<li><span class="demo-purple"></span></li>
				<li><span class="demo-pink"></span></li>
				<li><span class="demo-red"></span></li>
				<li><span class="demo-teal"></span></li>
				<li><span class="demo-green"></span></li>
				<li><span class="demo-light-green"></span></li>
				<li><span class="demo-lime"></span></li>
				<li><span class="demo-yellow"></span></li>
				<li><span class="demo-amber"></span></li>
				<li><span class="demo-orange"></span></li>
				<li><span class="demo-deep-orange"></span></li>
				<li><span class="demo-midnightblue"></span></li>
				<li><span class="demo-bluegray"></span></li>
				<li><span class="demo-bluegraylight"></span></li>
				<li><span class="demo-black"></span></li>
				<li><span class="demo-gray"></span></li>
				<li><span class="demo-graylight"></span></li>
				<li><span class="demo-default"></span></li>
				<li><span class="demo-brown"></span></li>
			</ul>
		</div>



	</div>
	<!-- /Switcher -->
	<!-- Load site level scripts -->

	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

	<script type="text/javascript" src="<?= bs('public/assets/js/jquery-1.10.2.min.js ') ?>"></script> <!-- Load jQuery -->
	<script type="text/javascript" src="<?= bs('public/assets/js/jqueryui-1.10.3.min.js') ?>"></script> <!-- Load jQueryUI -->
	<script type="text/javascript" src="<?= bs('public/assets/js/bootstrap.min.js') ?>"></script> <!-- Load Bootstrap -->
	<script type="text/javascript" src="<?= bs('public/assets/js/enquire.min.js') ?>"></script> <!-- Load Enquire -->

	<script type="text/javascript" src="<?= bs('public/assets/plugins/velocityjs/velocity.min.js') ?>"></script> <!-- Load Velocity for Animated Content -->
	<script type="text/javascript" src="<?= bs('public/assets/plugins/velocityjs/velocity.ui.min.js') ?>"></script>

	<script type="text/javascript" src="<?= bs('public/assets/plugins/wijets/wijets.js') ?>"></script> <!-- Wijet -->

	<script type="text/javascript" src="<?= bs('public/assets/plugins/codeprettifier/prettify.js') ?>"></script> <!-- Code Prettifier  -->
	<script type="text/javascript" src="<?= bs('public/assets/plugins/bootstrap-switch/bootstrap-switch.js') ?>"></script> <!-- Swith/Toggle Button -->

	<script type="text/javascript" src="<?= bs('public/assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js') ?>"></script> <!-- Bootstrap Tabdrop -->

	<script type="text/javascript" src="<?= bs('public/assets/plugins/iCheck/icheck.min.js') ?>"></script> <!-- iCheck -->

	<script type="text/javascript" src="<?= bs('public/assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js') ?>"></script> <!-- nano scroller -->

	<script type="text/javascript" src="<?= bs('public/assets/js/application.js') ?>"></script>
	<script type="text/javascript" src="<?= bs('public/assets/demo/demo.js') ?>"></script>
	<script type="text/javascript" src="<?= bs('public/assets/demo/demo-switcher.js') ?>"></script>

	<!-- End loading site level scripts -->

	<!-- Load page level scripts-->

	<script type="text/javascript" src="<?= bs('public/assets/plugins/gridforms/gridforms/gridforms.js') ?>"></script> <!-- Gridforms -->

	<!-- End loading page level scripts-->

</body>

</html>