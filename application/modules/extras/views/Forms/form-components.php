<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Login System</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="description" content="Login system">
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

	<link type="text/css" href="<?= bs('public/assets/plugins/form-select2/select2.css') ?>" rel="stylesheet"> <!-- Select2 -->
	<link type="text/css" href="<?= bs('public/assets/plugins/form-multiselect/css/multi-select.css') ?>" rel="stylesheet"> <!-- Multiselect -->
	<link type="text/css" href="<?= bs('public/assets/plugins/form-fseditor/fseditor.css') ?>" rel="stylesheet"> <!-- FullScreen Editor -->
	<link type="text/css" href="<?= bs('public/assets/plugins/bootstrap-tokenfield/css/bootstrap-tokenfield.css') ?>" rel="stylesheet"> <!-- Tokenfield -->

	<link type="text/css" href="<?= bs('public/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') ?>" rel="stylesheet"> <!-- Touchspin -->

	<link type="text/css" href="<?= bs('public/assets/plugins/iCheck/skins/minimal/_all.css') ?>" rel="stylesheet"> <!-- Custom Checkboxes / iCheck -->
	<link type="text/css" href="<?= bs('public/assets/plugins/iCheck/skins/flat/_all.css') ?>" rel="stylesheet">
	<link type="text/css" href="<?= bs('public/assets/plugins/iCheck/skins/square/_all.css') ?>" rel="stylesheet">

	<link type="text/css" href="<?= bs('public/assets/plugins/card/lib/css/card.css') ?> " rel="stylesheet"> <!-- Card -->
	<link type="text/css" href="<?= bs('public/assets/plugins/switchery/switchery.css') ?> " rel="stylesheet"> <!-- Switchery -->

</head>

<body class="animated-content">

	<?php $this->load->view('template/header') ?>

	<?php $this->load->view('template/sidebar') ?>

	<div class="static-content-wrapper">
		<div class="static-content">
			<div class="page-content">
				<ol class="breadcrumb">

					<li><a href="index.html">Home</a></li>
					<li><a href="#">Advanced Forms</a></li>
					<li class="active"><a href="ui-forms.html">Form Components</a></li>

				</ol>
				<div class="container-fluid">


					<div data-widget-group="group1">

						<div class="panel panel-default" data-widget='{"draggable": "false"}'>
							<div class="panel-heading">
								<h2>Basic Form Elements</h2>
								<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
							</div>
							<div class="panel-editbox" data-widget-controls=""></div>
							<div class="panel-body">
								<form action="" class="form-horizontal row-border">
									<div class="form-group">
										<label class="col-sm-2 control-label">Simplest Input</label>
										<div class="col-sm-8">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Password Field</label>
										<div class="col-sm-8">
											<input type="password" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Input with Placeholder</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" placeholder="Placeholder">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Disabled Input</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" placeholder="Disabled Input" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Read only field</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" readonly="readonly" value="Read only text goes here">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">With pre-defined value</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" value="http://">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">With max length</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" maxlength="20" placeholder="max 20 characters here">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Popover Input</label>
										<div class="col-sm-8">
											<input type="text" class="form-control popovers" placeholder="Popover Input" data-trigger="hover" data-toggle="popover" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Tooltip Input</label>
										<div class="col-sm-8">
											<input type="text" class="form-control tooltips" data-trigger="hover" data-original-title="Tooltip text goes here. Tooltip text goes here.">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Select Box</label>
										<div class="col-sm-8">
											<select class="form-control" id="source">
												<optgroup label="Alaskan/Hawaiian Time Zone">
													<option value="AK">Alaska</option>
													<option value="HI">Hawaii</option>
												</optgroup>
												<optgroup label="Pacific Time Zone">
													<option value="CA">California</option>
													<option value="NV">Nevada</option>
													<option value="OR">Oregon</option>
													<option value="WA">Washington</option>
												</optgroup>
												<optgroup label="Mountain Time Zone">
													<option value="AZ">Arizona</option>
													<option value="CO">Colorado</option>
													<option value="ID">Idaho</option>
													<option value="MT">Montana</option>
													<option value="NE">Nebraska</option>
													<option value="NM">New Mexico</option>
													<option value="ND">North Dakota</option>
													<option value="UT">Utah</option>
													<option value="WY">Wyoming</option>
												</optgroup>
												<optgroup label="Central Time Zone">
													<option value="AL">Alabama</option>
													<option value="AR">Arkansas</option>
													<option value="IL">Illinois</option>
													<option value="IA">Iowa</option>
													<option value="KS">Kansas</option>
													<option value="KY">Kentucky</option>
													<option value="LA">Louisiana</option>
													<option value="MN">Minnesota</option>
													<option value="MS">Mississippi</option>
													<option value="MO">Missouri</option>
													<option value="OK">Oklahoma</option>
													<option value="SD">South Dakota</option>
													<option value="TX">Texas</option>
													<option value="TN">Tennessee</option>
													<option value="WI">Wisconsin</option>
												</optgroup>
												<optgroup label="Eastern Time Zone">
													<option value="CT">Connecticut</option>
													<option value="DE">Delaware</option>
													<option value="FL">Florida</option>
													<option value="GA">Georgia</option>
													<option value="IN">Indiana</option>
													<option value="ME">Maine</option>
													<option value="MD">Maryland</option>
													<option value="MA">Massachusetts</option>
													<option value="MI">Michigan</option>
													<option value="NH">New Hampshire</option>
													<option value="NJ">New Jersey</option>
													<option value="NY">New York</option>
													<option value="NC">North Carolina</option>
													<option value="OH">Ohio</option>
													<option value="PA">Pennsylvania</option>
													<option value="RI">Rhode Island</option>
													<option value="SC">South Carolina</option>
													<option value="VT">Vermont</option>
													<option value="VA">Virginia</option>
													<option value="WV">West Virginia</option>
												</optgroup>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Disabled Dropdown</label>
										<div class="col-sm-8">
											<select class="form-control" disabled placeholder="Disabled Dropdown">
												<option>Alaska</option>
												<option>Lorem ipsum dolor.</option>
												<option>Amet, impedit aperiam?</option>
												<option>Nemo, alias, quasi?</option>
												<option>Inventore, expedita.</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Multi-select Box</label>
										<div class="col-sm-8">
											<select class="form-control" multiple>
												<option>Lorem ipsum dolor.</option>
												<option>Amet, impedit aperiam?</option>
												<option>Nemo, alias, quasi?</option>
												<option>Inventore, expedita.</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Inline Radio</label>
										<div class="col-sm-8">
											<label class="radio-inline icheck">
												<input type="radio" id="inlineradio1" value="option1" name="optionsRadiosInline"> Option 1
											</label>
											<label class="radio-inline icheck">
												<input type="radio" id="inlineradio2" value="option2" name="optionsRadiosInline"> Option 2
											</label>
											<label class="radio-inline icheck">
												<input type="radio" id="inlineradio3" value="option3" name="optionsRadiosInline"> Option 3
											</label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Radio</label>
										<div class="col-sm-8">

											<label class="radio icheck">
												<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
												Option one is this and that
											</label>

											<label class="radio icheck">
												<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
												Option two can be something else
											</label>

										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Inline Checkbox</label>
										<div class="col-sm-8">
											<label class="checkbox-inline icheck">
												<input type="checkbox" id="inlinecheckbox1" value="option1"> Option 1
											</label>
											<label class="checkbox-inline icheck">
												<input type="checkbox" id="inlinecheckbox2" value="option2"> Option 2
											</label>
											<label class="checkbox-inline icheck">
												<input type="checkbox" id="inlinecheckbox3" value="option3"> Option 3
											</label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Checkbox</label>
										<div class="col-sm-8">

											<label class="checkbox icheck">
												<input type="checkbox" value="">
												Option one is this and that
											</label>

											<label class="checkbox icheck">
												<input type="checkbox" value="">
												Option two can be something else
											</label>

										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Textarea</label>
										<div class="col-sm-8">
											<textarea class="form-control"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Autogrow Textarea</label>
										<div class="col-sm-8">
											<textarea class="form-control autosize"></textarea>
										</div>
										<div class="col-sm-2">
											<p class="help-block">Textbox auto grows as you type!</p>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Fullscreen Textarea</label>
										<div class="col-sm-8">
											<textarea class="form-control fullscreen"></textarea>
										</div>
									</div>
								</form>

							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-sm-8 col-sm-offset-2">
										<button class="btn-primary btn">Submit</button>
										<button class="btn-default btn">Cancel</button>
									</div>
								</div>
							</div>
						</div>

						<div class="panel panel-default demo-icheck" data-widget='{"draggable": "false"}'>
							<div class="panel-heading">
								<h2>Custom Checkboxes and Radio Buttons</h2>
								<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'>
								</div>
							</div>
							<div class="panel-editbox" data-widget-controls=""></div>
							<div class="panel-body">

								<div class="alert alert-info">
									<h4>iCheck</h4>
									<p>Super customized checkbox and radio buttons that are backward compatible and appears identical in both desktop and mobile.</p>
								</div>

								<div class="row">
									<div class="col-sm-4">
										<h4>Minimal Skin <small>Default - <em>Customized for Avenxo</em></small></h4>
										<div class="row">
											<div class="col-sm-6 icheck-minimal">
												<div class="checkbox red icheck"><label><input type="checkbox" value="" checked>Red</label></div>
												<div class="checkbox green icheck"><label><input type="checkbox" value="" checked>Green</label></div>
												<div class="checkbox aero icheck"><label><input type="checkbox" value="" checked>Aero</label></div>
												<div class="checkbox blue icheck"><label><input type="checkbox" value="" checked>Blue</label></div>
												<div class="checkbox grey icheck"><label><input type="checkbox" value="" checked>Grey</label></div>
												<div class="checkbox orange icheck"><label><input type="checkbox" value="" checked>Orange</label></div>
												<div class="checkbox pink icheck"><label><input type="checkbox" value="" checked>Pink</label></div>
												<div class="checkbox purple icheck"><label><input type="checkbox" value="" checked>Purple</label></div>
												<div class="checkbox yellow icheck"><label><input type="checkbox" value="" checked>Yellow</label></div>
											</div>
											<div class="col-sm-6 icheck-minimal">
												<div class="radio red icheck"><label><input type="radio" name="optionsRadios-minimal" value="option1" checked>Red</label></div>
												<div class="radio green icheck"><label><input type="radio" name="optionsRadios-minimal" value="option2">Green</label></div>
												<div class="radio aero icheck"><label><input type="radio" name="optionsRadios-minimal" value="option2">Aero</label></div>
												<div class="radio blue icheck"><label><input type="radio" name="optionsRadios-minimal" value="option2">Blue</label></div>
												<div class="radio grey icheck"><label><input type="radio" name="optionsRadios-minimal" value="option2">Grey</label></div>
												<div class="radio orange icheck"><label><input type="radio" name="optionsRadios-minimal" value="option2">Orange</label></div>
												<div class="radio pink icheck"><label><input type="radio" name="optionsRadios-minimal" value="option2">Pink</label></div>
												<div class="radio purple icheck"><label><input type="radio" name="optionsRadios-minimal" value="option2">Purple</label></div>
												<div class="radio yellow icheck"><label><input type="radio" name="optionsRadios-minimal" value="option2">Yellow</label></div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<h4>Flat Skin</h4>
										<div class="row">
											<div class="col-sm-6 icheck-flat">
												<div class="checkbox red icheck"><label><input type="checkbox" value="" checked>Red</label></div>
												<div class="checkbox green icheck"><label><input type="checkbox" value="" checked>Green</label></div>
												<div class="checkbox aero icheck"><label><input type="checkbox" value="" checked>Aero</label></div>
												<div class="checkbox blue icheck"><label><input type="checkbox" value="" checked>Blue</label></div>
												<div class="checkbox grey icheck"><label><input type="checkbox" value="" checked>Grey</label></div>
												<div class="checkbox orange icheck"><label><input type="checkbox" value="" checked>Orange</label></div>
												<div class="checkbox pink icheck"><label><input type="checkbox" value="" checked>Pink</label></div>
												<div class="checkbox purple icheck"><label><input type="checkbox" value="" checked>Purple</label></div>
												<div class="checkbox yellow icheck"><label><input type="checkbox" value="" checked>Yellow</label></div>
											</div>
											<div class="col-sm-6 icheck-flat">
												<div class="radio red icheck"><label><input type="radio" name="optionsRadios-flat" value="option1" checked>Red</label></div>
												<div class="radio green icheck"><label><input type="radio" name="optionsRadios-flat" value="option2">Green</label></div>
												<div class="radio aero icheck"><label><input type="radio" name="optionsRadios-flat" value="option2">Aero</label></div>
												<div class="radio blue icheck"><label><input type="radio" name="optionsRadios-flat" value="option2">Blue</label></div>
												<div class="radio grey icheck"><label><input type="radio" name="optionsRadios-flat" value="option2">Grey</label></div>
												<div class="radio orange icheck"><label><input type="radio" name="optionsRadios-flat" value="option2">Orange</label></div>
												<div class="radio pink icheck"><label><input type="radio" name="optionsRadios-flat" value="option2">Pink</label></div>
												<div class="radio purple icheck"><label><input type="radio" name="optionsRadios-flat" value="option2">Purple</label></div>
												<div class="radio yellow icheck"><label><input type="radio" name="optionsRadios-flat" value="option2">Yellow</label></div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<h4>Square Skin</h4>
										<div class="row">
											<div class="col-sm-6 icheck-square">
												<div class="checkbox red icheck"><label><input type="checkbox" value="" checked>Red</label></div>
												<div class="checkbox green icheck"><label><input type="checkbox" value="" checked>Green</label></div>
												<div class="checkbox aero icheck"><label><input type="checkbox" value="" checked>Aero</label></div>
												<div class="checkbox blue icheck"><label><input type="checkbox" value="" checked>Blue</label></div>
												<div class="checkbox grey icheck"><label><input type="checkbox" value="" checked>Grey</label></div>
												<div class="checkbox orange icheck"><label><input type="checkbox" value="" checked>Orange</label></div>
												<div class="checkbox pink icheck"><label><input type="checkbox" value="" checked>Pink</label></div>
												<div class="checkbox purple icheck"><label><input type="checkbox" value="" checked>Purple</label></div>
												<div class="checkbox yellow icheck"><label><input type="checkbox" value="" checked>Yellow</label></div>
											</div>
											<div class="col-sm-6 icheck-square">
												<div class="radio red icheck"><label><input type="radio" name="optionsRadios-square" value="option1" checked>Red</label></div>
												<div class="radio green icheck"><label><input type="radio" name="optionsRadios-square" value="option2">Green</label></div>
												<div class="radio aero icheck"><label><input type="radio" name="optionsRadios-square" value="option2">Aero</label></div>
												<div class="radio blue icheck"><label><input type="radio" name="optionsRadios-square" value="option2">Blue</label></div>
												<div class="radio grey icheck"><label><input type="radio" name="optionsRadios-square" value="option2">Grey</label></div>
												<div class="radio orange icheck"><label><input type="radio" name="optionsRadios-square" value="option2">Orange</label></div>
												<div class="radio pink icheck"><label><input type="radio" name="optionsRadios-square" value="option2">Pink</label></div>
												<div class="radio purple icheck"><label><input type="radio" name="optionsRadios-square" value="option2">Purple</label></div>
												<div class="radio yellow icheck"><label><input type="radio" name="optionsRadios-square" value="option2">Yellow</label></div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>


						<div class="panel panel-default" data-widget='{"draggable": "false"}'>
							<div class="panel-heading">
								<h2>Toggle Switches</h2>
								<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'>
								</div>
							</div>
							<div class="panel-editbox" data-widget-controls=""></div>
							<div class="panel-body">
								<form action="" class="form-horizontal row-border">
									<div class="form-group">
										<label class="col-sm-2 control-label label-input-xs">Switchery Mini</label>
										<div class="col-sm-8">
											<ul class="demo-btns mb-n xs">
												<li><input type="checkbox" class="js-switch-primary switchery-xs" checked /></li>
												<li><input type="checkbox" class="js-switch-success switchery-xs" checked /></li>
												<li><input type="checkbox" class="js-switch-warning switchery-xs" checked /></li>
												<li><input type="checkbox" class="js-switch-inverse switchery-xs" checked /></li>
												<li><input type="checkbox" class="js-switch-danger switchery-xs" checked /></li>
												<li><input type="checkbox" class="js-switch-info switchery-xs" checked /></li>
											</ul>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label label-input-sm">Switchery Small</label>
										<div class="col-sm-8">
											<ul class="demo-btns mb-n sm">
												<li><input type="checkbox" class="js-switch-primary switchery-sm" checked /></li>
												<li><input type="checkbox" class="js-switch-success switchery-sm" checked /></li>
												<li><input type="checkbox" class="js-switch-warning switchery-sm" checked /></li>
												<li><input type="checkbox" class="js-switch-inverse switchery-sm" checked /></li>
												<li><input type="checkbox" class="js-switch-danger switchery-sm" checked /></li>
												<li><input type="checkbox" class="js-switch-info switchery-sm" checked /></li>
											</ul>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Switchery Default</label>
										<div class="col-sm-8">
											<ul class="demo-btns mb-n nm">
												<li><input type="checkbox" class="js-switch-primary" checked /></li>
												<li><input type="checkbox" class="js-switch-success" checked /></li>
												<li><input type="checkbox" class="js-switch-warning" checked /></li>
												<li><input type="checkbox" class="js-switch-inverse" checked /></li>
												<li><input type="checkbox" class="js-switch-danger" checked /></li>
												<li><input type="checkbox" class="js-switch-info" checked /></li>
											</ul>
										</div>
									</div>
								</form>
							</div>
						</div>


						<div class="panel panel-default" data-widget='{"draggable": "false"}'>
							<div class="panel-heading">
								<h2>Bootstrap Switches</h2>
								<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}' data-action-expand='' data-action-colorpicker=''>
								</div>
							</div>
							<div class="panel-editbox" data-widget-controls=""></div>
							<div class="panel-body">
								<form action="" class="form-horizontal row-border">
									<div class="form-group">
										<label class="col-sm-2 control-label label-input-xs">Switch Mini</label>
										<div class="col-sm-8">
											<ul class="demo-btns mb-n">
												<li class="mb-n"><input class="bootstrap-switch" type="checkbox" checked="false" data-size="mini" data-on-color="success" data-off-color="default" data-on-text="I" data-off-text="O"></li>
											</ul>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label label-input-sm">Switch Small</label>
										<div class="col-sm-8">
											<ul class="demo-btns mb-n">
												<li class="mb-n"><input class="bootstrap-switch" type="checkbox" data-size="small" data-on-color="success" data-off-color="default"></li>
											</ul>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Switch Default</label>
										<div class="col-sm-8">
											<ul class="demo-btns mb-n">
												<li class="mb-n"><input class="bootstrap-switch switch-alt" type="checkbox" checked="false" data-on-color="success" data-off-color="default"></li>
											</ul>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label label-input-lg">Switch Large</label>
										<div class="col-sm-8">
											<ul class="demo-btns mb-n">
												<li class="mb-n"><input class="bootstrap-switch" type="checkbox" data-size="large" data-on-color="success" data-off-color="default"></li>
											</ul>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Default Colors</label>
										<div class="col-sm-8">
											<ul class="demo-btns mb-n">
												<li><input class="bootstrap-switch" type="checkbox" checked="false" data-on-color="default" data-off-color="default"></li>
												<li><input class="bootstrap-switch" type="checkbox" checked="false" data-on-color="primary" data-off-color="default"></li>
												<li><input class="bootstrap-switch" type="checkbox" checked="false" data-on-color="success" data-off-color="default"></li>
												<li><input class="bootstrap-switch" type="checkbox" checked="false" data-on-color="warning" data-off-color="default"></li>
												<li><input class="bootstrap-switch" type="checkbox" checked="false" data-on-color="info" data-off-color="default"></li>
												<li><input class="bootstrap-switch" type="checkbox" checked="false" data-on-color="danger" data-off-color="default"></li>
											</ul>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Disabled States</label>
										<div class="col-sm-8">
											<ul class="demo-btns mb-n">
												<li><input class="bootstrap-switch" type="checkbox" checked="false" disabled="true" data-on-color="default" data-off-color="default"></li>
												<li><input class="bootstrap-switch" type="checkbox" checked="false" disabled="true" data-on-color="primary" data-off-color="default"></li>
												<li><input class="bootstrap-switch" type="checkbox" checked="false" disabled="true" data-on-color="success" data-off-color="default"></li>
												<li><input class="bootstrap-switch" type="checkbox" checked="false" disabled="true" data-on-color="warning" data-off-color="default"></li>
												<li><input class="bootstrap-switch" type="checkbox" checked="false" disabled="true" data-on-color="info" data-off-color="default"></li>
												<li><input class="bootstrap-switch" type="checkbox" checked="false" disabled="true" data-on-color="danger" data-off-color="default"></li>
											</ul>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">With Icons</label>
										<div class="col-sm-8">
											<ul class="demo-btns mb-n">
												<li><input class="bootstrap-switch" type="checkbox" data-on-text="<i class='fa fa-check'></i>" data-on-color="success" data-off-text="<i class='fa fa-times'></i>" data-off-color="danger" /></li>
												<li><input class="bootstrap-switch" type="checkbox" data-on-text="<i class='fa fa-glass'></i>" data-on-color="info" data-off-text="<i class='fa fa-beer'></i>" data-off-color="warning" /></li>
												<li><input class="bootstrap-switch" type="checkbox" data-on-text="<i class='fa fa-thumbs-up'></i>" data-on-color="primary" data-off-text="<i class='fa fa-thumbs-down'></i>" data-off-color="primary" /></li>
												<li><input class="bootstrap-switch" type="checkbox" data-on-text="<i class='fa fa-lock'></i>" data-on-color="default" data-off-text="<i class='fa fa-unlock'></i>" data-off-color="default" /></li>
												<li><input class="bootstrap-switch" type="checkbox" data-on-text="1" data-on-color="success" data-off-text="0" data-off-color="danger" /></li>
												<li><input class="bootstrap-switch" type="checkbox" data-on-text="<i class='fa fa-smile-o'></i>" data-on-color="default" data-off-text="<i class='fa fa-frown-o'></i>" data-off-color="default" /> </li>
											</ul>
										</div>
									</div>
								</form>
							</div>
						</div>


						<div class="panel panel-default" data-widget='{"draggable": "false"}'>
							<div class="panel-heading">
								<h2>Input Groups</h2>
								<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'>
								</div>
							</div>
							<div class="panel-editbox" data-widget-controls=""></div>
							<div class="panel-body">
								<form action="" class="form-horizontal row-border">
									<div class="form-group">
										<label class="col-sm-2 control-label">Before Text Field</label>
										<div class="col-sm-8">
											<div class="input-group">
												<span class="input-group-addon">@</span>
												<input type="text" class="form-control" placeholder="Username">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">After Text Field</label>
										<div class="col-sm-8">
											<div class="input-group">
												<input type="text" class="form-control">
												<span class="input-group-addon">.00</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Both</label>
										<div class="col-sm-8">
											<div class="input-group">
												<span class="input-group-addon">$</span>
												<input type="text" class="form-control">
												<span class="input-group-addon">.00</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Checkbox</label>
										<div class="col-sm-8">
											<div class="input-group">
												<span class="input-group-addon icheck">
													<input type="checkbox">
												</span>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Radio</label>
										<div class="col-sm-8">
											<div class="input-group">
												<span class="input-group-addon icheck">
													<input type="radio">
												</span>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Buttons instead of text</label>
										<div class="col-sm-8">
											<div class="input-group">
												<input type="text" class="form-control">
												<div class="input-group-btn">
													<button type="button" class="btn btn-info">Go!</button>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Buttons with Dropdowns</label>
										<div class="col-sm-8">
											<div class="input-group">
												<input type="text" class="form-control">
												<div class="input-group-btn">
													<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></button>
													<ul class="dropdown-menu pull-right">
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Segmentded Dropdown</label>
										<div class="col-sm-8">
											<div class="input-group">
												<input type="text" class="form-control">
												<div class="input-group-btn">
													<button type="button" class="btn btn-info">Action</button>
													<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
													<ul class="dropdown-menu pull-right">
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li><a href="#">Something else here</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>

						<div class="panel panel-default" data-widget='{"draggable": "false"}'>
							<div class="panel-heading">
								<h2>Autocomplete</h2>
								<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'>
								</div>
							</div>
							<div class="panel-editbox" data-widget-controls=""></div>
							<div class="panel-body">
								<div class="col-12">
									<p>A fast, full-featured, autocomplete library can prefet data, search that data on the client, and then falling back to the server. Powered by Twitter Typeahead.</p>
								</div>
								<form action="" class="form-horizontal row-border">
									<div class="form-group">
										<label class="col-sm-2 control-label">Autocomplete</label>
										<div class="col-sm-8">
											<input type="text" class="form-control typeahead example-countries" placeholder="Enter name of a country...">
											<p class="help-block">Type in a name of a state!</p>
										</div>
									</div>
								</form>
							</div>
						</div>


						<div class="panel panel-default" data-widget='{"draggable": "false"}'>
							<div class="panel-heading">
								<h2>Advanced Select Boxes</h2>
								<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'>
								</div>
							</div>
							<div class="panel-editbox" data-widget-controls=""></div>
							<div class="panel-body">
								<form action="" class="form-horizontal row-border">

									<div class="form-group">
										<label class="col-sm-2 control-label">Dropdown with Search</label>
										<div class="col-sm-8">
											<select id="e1" style="width:100% !important" class="populate"></select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Select with Multiple</label>
										<div class="col-sm-8">
											<select id="e2" multiple style="width:100% !important" class="populate"></select>
											<p class="help-block">Select2 also supports multi-value select boxes. The <code>select</code> above is declared with the <code>multiple</code> attribute. Select2 automatially picks up on this</p>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Minimum Input</label>
										<div class="col-sm-8">
											<select id="e3" style="width:100% !important" class="populate"></select>
											<p class="help-block">Supports a minimum input setting which is useful for large remote datasets where short search terms are not very useful</p>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Infinite Scroll with Remote Data</label>
										<div class="col-sm-8">
											<input type="hidden" id="e7" style="width:100% !important" />
											<p class="help-block">The selectbox has AJAX/JSONP support built in. In this example we will search for a movie using Rotten Tomatoes API. When result-list is scrolled to an end, more results are lazy-appended</p>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Tagging Support</label>
										<div class="col-sm-8">
											<input type="hidden" id="e12" style="width:100% !important" value="brown, red, green" />
											<p class="help-block">Quickly set up fields for tagging</p>
										</div>
									</div>
								</form>
							</div>
						</div>


						<div class="panel panel-default" data-widget='{"draggable": "false"}'>
							<div class="panel-heading ">
								<h2>Tokenfield</h2>
								<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'>
								</div>
							</div>
							<div class="panel-editbox" data-widget-controls=""></div>
							<div class="panel-body">
								<p>Advanced tagging/tokenizing plugin for input fields with a focus on keyboard and copy-paste support.</p>
								<form action="" class="form-horizontal row-border">

									<div class="form-group">
										<label class="col-sm-2 control-label">Using Twitter Typeahead</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="tokenfield-typeahead" value="red,green,blue" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-2 control-label">Parse Emails</label>
										<div class="col-sm-8">
											<div class="input-group">
												<input type="text" class="form-control" id="tokenfield-email" value="one@email.com,not an email, another@email.com" />
												<span class="input-group-addon"><span class="fa fa-envelope-o"></span></span>
											</div>

										</div>
									</div>

								</form>
							</div>
						</div>


						<div class="panel panel-default" data-widget='{"draggable": "false"}'>
							<div class="panel-heading">
								<h2>Select Options</h2>
								<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'>
								</div>
							</div>
							<div class="panel-editbox" data-widget-controls=""></div>
							<div class="panel-body">
								<div class="alert alert-info">
									<h4>Multi-Select</h4>
									<p>Drop-in replacement for standard <code>select</code> with multiple attribute activated.</p>
								</div>

								<form action="" class="form-horizontal row-border">
									<div class="form-group">
										<label class="col-sm-2 control-label">Multiple Select</label>
										<div class="col-sm-8">
											<select multiple="multiple" id="multi-select2">
												<option>Lorem</option>
												<option>Unde</option>
												<option>Saepe</option>
												<option>Harum</option>
												<option>Enim</option>
												<option>Aliquid</option>
												<option>Recusandae</option>
												<option>Esse</option>
												<option>Laborum</option>
												<option>Quo</option>
												<option>Quo</option>
												<option>Maiores</option>
												<option>Architecto</option>
												<option>Sapiente</option>
												<option>Placeat</option>
												<option>Officiis</option>
												<option>Obcaecati</option>
												<option>Aliquid</option>
												<option>Explicabo</option>
												<option>Aliquam</option>
												<option>Vero</option>
												<option>Voluptates</option>
												<option>Similique</option>
												<option>Minima</option>
												<option>Ipsum</option>
												<option>Nemo</option>
												<option>Omnis</option>
												<option>Fuga</option>
												<option>Iste</option>
												<option>Possimus</option>
											</select>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-2 control-label">Multiple Select with Search and Group select</label>
										<div class="col-sm-8">
											<select multiple="multiple" id="multi-select">
												<option>Lorem</option>
												<option>Unde</option>
												<option>Saepe</option>
												<option>Harum</option>
												<option>Enim</option>
												<option>Aliquid</option>
												<option>Recusandae</option>
												<option>Esse</option>
												<option>Laborum</option>
												<option>Quo</option>
												<option>Quo</option>
												<option>Maiores</option>
												<option>Architecto</option>
												<option>Sapiente</option>
												<option>Placeat</option>
												<option>Officiis</option>
												<option>Obcaecati</option>
												<option>Aliquid</option>
												<option>Explicabo</option>
												<option>Aliquam</option>
												<option>Vero</option>
												<option>Voluptates</option>
												<option>Similique</option>
												<option>Minima</option>
												<option>Ipsum</option>
												<option>Nemo</option>
												<option>Omnis</option>
												<option>Fuga</option>
												<option>Iste</option>
												<option>Possimus</option>
											</select>
										</div>
									</div>
								</form>

								<br>

								<div class="alert alert-info">
									<h4>Chained Select Boxes</h4>
									<p>Chained is simple chained <code>select</code>s plugin. Use <i>class based</i> version if you do not want to make external queries. A separate version that supports remote selects from <i>AJAX queries</i> is also included.</p>
								</div>

								<form action="" class="form-horizontal row-border">
									<div class="form-group">
										<label for="#" class="col-sm-2 control-label">Chaining Selects using class</label>
										<div class="col-sm-2">
											<select id="mark" name="mark" class="form-control">
												<option value="">--</option>
												<option value="bmw">BMW</option>
												<option value="audi">Audi</option>
											</select>
										</div>
										<div class="col-sm-2">
											<select id="series" name="series" class="form-control">
												<option value="">--</option>
												<option value="series-3" class="bmw">3 series</option>
												<option value="series-5" class="bmw">5 series</option>
												<option value="series-6" class="bmw">6 series</option>
												<option value="a3" class="audi">A3</option>
												<option value="a4" class="audi">A4</option>
												<option value="a5" class="audi">A5</option>
											</select>
										</div>
										<div class="col-sm-2">
											<select id="model" name="model" class="form-control">
												<option value="">--</option>
												<option value="coupe" class="series-3 series-6 a5">Coupe</option>
												<option value="cabrio" class="series-3 series-6 a3 a5">Cabrio</option>
												<option value="sedan" class="series-3 series-5 a3 a4">Sedan</option>
												<option value="sportback" class="a3 a5">Sportback</option>
											</select>
										</div>
									</div>
								</form>

							</div>
						</div>

						<div class="panel panel-default" data-widget='{"draggable": "false"}'>
							<div class="panel-heading">
								<h2>Card</h2>
								<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'>
								</div>
							</div>
							<div class="panel-editbox" data-widget-controls=""></div>
							<div class="panel-body">
								<div class="alert alert-info">
									<h4>Card <small>A better credit card form</small></h4>
									<p>Card will take any credit card form and make it the best part of the checkout process (without you changing anything). Everything is created with pure CSS, HTML, and Javascript — no images required.</p>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<form action="" class="form-horizontal card">
											<div class="form-group">
												<label for="#" class="col-sm-4 control-label">Card Number</label>
												<div class="col-sm-8">
													<input placeholder="Card number" type="text" name="number" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label for="#" class="col-sm-4 control-label">Full Name</label>
												<div class="col-sm-8">
													<input placeholder="Full name" type="text" name="name" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label for="#" class="col-sm-4 control-label">Expiry</label>
												<div class="col-sm-8">
													<input placeholder="MM/YY" type="text" name="expiry" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label for="#" class="col-sm-4 control-label">CVC</label>
												<div class="col-sm-8">
													<input placeholder="CVC" type="text" name="cvc" class="form-control">
												</div>
											</div>
										</form>
									</div>
									<div class="col-sm-6">
										<div class="card-wrapper"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="panel panel-default" data-widget='{"draggable": "false"}'>
							<div class="panel-heading">
								<h2>File Input</h2>
								<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'>
								</div>
							</div>
							<div class="panel-editbox" data-widget-controls=""></div>
							<div class="panel-body">
								<form action="" class="form-horizontal row-border">

									<div class="form-group">
										<label class="col-sm-2 control-label">File input group</label>
										<div class="col-sm-8">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group">
													<div class="form-control uneditable-input" data-trigger="fileinput">
														<i class="fa fa-file fileinput-exists"></i>&nbsp;<span class="fileinput-filename"></span>
													</div>
													<span class="input-group-btn">
														<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
														<span class="btn btn-default btn-file">
															<span class="fileinput-new">Select file</span>
															<span class="fileinput-exists">Change</span>
															<input type="file" name="...">
														</span>

													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">File input button</label>
										<div class="col-sm-8">
											<div class="fileinput fileinput-new" data-provides="fileinput">
												<span class="btn btn-default btn-file">
													<span class="fileinput-new">Select file</span>
													<span class="fileinput-exists">Change</span>
													<input type="file" name="...">
												</span>
												<span class="fileinput-filename"></span>
												<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Image Upload Widgets</label>
										<div class="col-sm-5">
											<div class="fileinput fileinput-new" style="width: 100%;" data-provides="fileinput">
												<div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;"></div>
												<div>
													<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
													<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="alert alert-info">Image preview only works in IE10+, FF3.6+, Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead.</div>
										</div>
									</div>

								</form>
							</div>
						</div>

						<div class="panel panel-default" data-widget='{"draggable": "false"}'>
							<div class="panel-heading">
								<h2>Touchspin</h2>
								<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'>
								</div>
							</div>
							<div class="panel-editbox" data-widget-controls=""></div>
							<div class="panel-body">
								<div class="alert alert-info">A mobile and touch friendly input spinner component for Avenxo. It supports the mousewheel and the up/down keys. </div>
								<form action="" class="form-horizontal row-border">
									<div class="form-group">
										<label for="" class="control-label col-sm-2">With Postfix</label>
										<div class="col-sm-8">
											<input id="touchspin1" value="4.20">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="control-label col-sm-2">With Prefix</label>
										<div class="col-sm-8">
											<input id="touchspin2" value="34234">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="control-label col-sm-2">Vertical Buttons Alignment</label>
										<div class="col-sm-8">
											<input id="touchspin3" value="54">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="control-label col-sm-2">Vertical Buttons (Custom Icons)</label>
										<div class="col-sm-8">
											<input id="touchspin4" value="872">
										</div>
									</div>
								</form>
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

	<script type="text/javascript" src="<?= bs('public/assets/plugins/form-multiselect/js/jquery.multi-select.min.js') ?>"></script> <!-- Multiselect Plugin -->
	<script type="text/javascript" src="<?= bs('public/assets/plugins/quicksearch/jquery.quicksearch.min.js') ?>"></script> <!-- Quicksearch to go with Multisearch Plugin -->
	<script type="text/javascript" src="<?= bs('public/assets/plugins/form-typeahead/typeahead.bundle.min.js') ?>"></script> <!-- Typeahead for Autocomplete -->
	<script type="text/javascript" src="<?= bs('public/assets/plugins/form-select2/select2.min.js') ?>"></script> <!-- Advanced Select Boxes -->
	<script type="text/javascript" src="<?= bs('public/assets/plugins/form-autosize/jquery.autosize-min.js') ?>"></script> <!-- Autogrow Text Area -->
	<script type="text/javascript" src="<?= bs('public/assets/plugins/form-colorpicker/js/bootstrap-colorpicker.min.js') ?>"></script> <!-- Color Picker -->

	<script type="text/javascript" src="<?= bs('public/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') ?>"></script> <!-- Touchspin -->

	<script type="text/javascript" src="<?= bs('public/assets/plugins/form-fseditor/jquery.fseditor-min.js') ?>"></script> <!-- Fullscreen Editor -->
	<script type="text/javascript" src="<?= bs('public/assets/plugins/form-jasnyupload/fileinput.min.js') ?>"></script> <!-- File Input -->
	<script type="text/javascript" src="<?= bs('public/assets/plugins/bootstrap-tokenfield/bootstrap-tokenfield.min.js') ?>"></script> <!-- Tokenfield -->

	<script type="text/javascript" src="<?= bs('public/assets/plugins/card/lib/js/card.js') ?>"></script> <!-- Card -->

	<!-- <script type="text/javascript" src="<?= bs('public/assets/plugins/iCheck/icheck.min.js') ?>"></script>  -->
	<!-- iCheck // already included on site-level -->
	<script type="text/javascript" src="<?= bs('public/assets/plugins/switchery/switchery.js') ?>"></script> <!-- Switchery -->
	<script type="text/javascript" src="<?= bs('public/assets/plugins/jquery-chained/jquery.chained.min.js') ?>"></script> <!-- Chained Select Boxes -->

	<script type="text/javascript" src="<?= bs('public/assets/plugins/jquery-mousewheel/jquery.mousewheel.min.js') ?>"></script>
	<!-- MouseWheel Support -->

	<script type="text/javascript" src="<?= bs('public/assets/demo/demo-formcomponents.js') ?>"></script>

	<!-- End loading page level scripts-->

</body>

</html>