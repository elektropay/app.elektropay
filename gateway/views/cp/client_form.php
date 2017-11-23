<?

/* Default Values */

if (!isset($form)) {
	$form = array(
				'first_name' => '',
				'last_name' => '',
				'company' => '',
				'address_1' => '',
				'address_2' => '',
				'city' => '',
				'state' => '',
				'postal_code' => '',
				'country' => 'US',
				'suspended' => '0',
				'gmt_offset' => 'UM5',
				'phone' => '',
				'email' => '',
				'username' => '',
				'client_type' => '2'	
			);
} ?>
<?=$this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>'));?>
	<!-- Imported styles on this page -->
	<link href="<?=branded_include('js/multiselect/css/multi-select.css');?>" rel="stylesheet" type="text/css" media="screen" />
    
	<!-- Imported scripts on this page -->
	<script type="text/javascript" src="<?=branded_include('js/jquery-validate/jquery.validate.min.js');?>"></script>

	<script type="text/javascript" src="<?=branded_include('js/inputmask/jquery.inputmask.bundle.js');?>"></script>

	<script type="text/javascript" src="<?=branded_include('js/formwizard/jquery.bootstrap.wizard.min.js');?>"></script>

	<script type="text/javascript" src="<?=branded_include('js/datepicker/bootstrap-datepicker.js');?>"></script>

	<script type="text/javascript" src="<?=branded_include('js/multiselect/js/jquery.multi-select.js');?>"></script>

	<script type="text/javascript" src="<?=branded_include('js/jquery-ui/jquery-ui.min.js');?>"></script>

	<script type="text/javascript" src="<?=branded_include('js/selectboxit/jquery.selectBoxIt.min.js');?>"></script>

<script src="<?= branded_include('js/fuelux.wizard.min.js'); ?>" type="text/javascript"></script>

<script src="<?= branded_include('js/additional-methods.min.js'); ?>" type="text/javascript"></script>

<script src="<?= branded_include('js/select2.min.js'); ?>" type="text/javascript"></script>





<style>

#wizard .form-wizard {
    background: #fff;
    margin: 0 auto;
    margin-top: 42px;
    width: 65%;
    position: relative;
}

#wizard .header {
    padding: 11px 0 9px 0;
    background: #5A6474;
    font-family: "Helvetica Neue", Arial;
    text-align: center;
    box-shadow: 0px 1px 1px rgba(0,0,0,0.15);
}

#wizard .form-wizard .step.active {
    opacity: 1;
    z-index: 3;
}

#wizard .form-wizard .step {
    opacity: 0;
    position: absolute;
    width: 100%;
}


#wizard .form-wizard .step .form-group {
    margin-bottom: 21px;
}

.steps {
    list-style: none;
    display: table;
    width: 100%;
    padding: 0;
    margin: 0;
    position: relative;
}

.steps li {
    display: table-cell;
    text-align: center;
    width: 1%;
}

.steps li .step {
    border: 5px solid #ced1d6;
    color: #546474;
    font-size: 15px;
    border-radius: 100%;
    background-color: #FFF;
    position: relative;
    z-index: 2;
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 30px;
    text-align: center;
}



.steps li.complete:hover:before {
    border-color: #80afd4;
}
.steps li.active:before, .steps li.complete:before, .steps li.active .step, .steps li.complete .step {
    border-color: #5293c4;
}
.steps li:first-child:before {
    max-width: 51%;
    left: 50%;
}
.steps li:before {
    display: block;
    content: "";
    width: 100%;
    height: 1px;
    font-size: 0;
    overflow: hidden;
    border-top: 4px solid #CED1D6;
    position: relative;
    top: 21px;
    z-index: 1;
}

.steps li.complete .title, .steps li.active .title {
    color: #2b3d53;
}
.steps li .title {
    display: block;
    margin-top: 4px;
    max-width: 100%;
    color: #949ea7;
    font-size: 14px;
    z-index: 104;
    text-align: center;
    table-layout: fixed;
    word-wrap: break-word;
}

ul {
    display: block;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    -webkit-padding-start: 40px;
}

.step-content {
    position: relative;
}
.modal-body {
    position: relative;
    padding: 15px;
}
.wizard-actions {
    text-align: right;
}
.modal-footer {
    padding-top: 12px;
    padding-bottom: 14px;
    border-top-color: #e4e9ee;
    -webkit-box-shadow: none;
    box-shadow: none;
    background-color: #eff3f8;
}




</style>


<div id="wizard">

<div class="content-wrapper">

<div class="row clearfix">

<? if ($this->user->Get('client_type_id') == '1') { ?>

<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<h3 class="lighter">
									<i class="fa fa-plus"></i>
									<a href="#QuickappModal" data-toggle="modal" class="blue"> Add New User (Quick Application) </a>
								</h3>


</div>

<div id="QuickappModal" class="modal" aria-hidden="true" style="display: none;">
									<div class="modal-dialog">
										<div class="modal-content">
											<div id="modal-wizard-container" class="complete">
												<div class="modal-header">
													<ul class="steps">
														<li data-step="1" class="complete">
															<span class="step">1</span>
															<span class="title">Account Info</span>
														</li>

														<li data-step="2" class="complete">
															<span class="step">2</span>
															<span class="title">Owner Info</span>
														</li>

														<li data-step="3" class="complete">
															<span class="step">3</span>
															<span class="title">Business Info</span>
														</li>

														<li data-step="4" class="active">
															<span class="step">4</span>
															<span class="title">Banking Info</span>
														</li>
													</ul>
												</div>

												<div class="modal-body step-content">
													<div class="step-pane" data-step="1">
														<div class="center">
															<h4 class="blue">Account</h4>
														</div>
													</div>

													<div class="step-pane" data-step="2">
														<div class="center">
															<h4 class="blue">Owner</h4>
														</div>
													</div>

													<div class="step-pane" data-step="3">
														<div class="center">
															<h4 class="blue">Business</h4>
														</div>
													</div>

													<div class="step-pane active" data-step="4">
														<div class="center">
															<h4 class="blue">Banking</h4>
														</div>
													</div>
												</div>
											</div>

											<div class="modal-footer wizard-actions">
												<button class="btn btn-sm btn-prev">
													<i class="ace-icon fa fa-arrow-left"></i>
													Prev
												</button>

												<button class="btn btn-success btn-sm btn-next" data-last="Finish">Finish<i class="ace-icon fa fa-arrow-right icon-on-right"></i></button>

												<button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Cancel
												</button>
											</div>
											
										</div>
									</div>
								</div>

<div class="row">								
<div class="col-xs-12">
																							
<div class="portlet-body form">
													
<!-- BEGIN FORM-->
													
<form class="form-horizontal" id="form_customer" method="post" action="<?=site_url($form_action);?>">
														
<div class="form-body">		
								<div class="widget-main">
											<div id="fuelux-wizard-container">
												<div>
													<ul class="steps">
														<li data-step="1" class="active">
															<span class="step">1</span>
															<span class="title">Account Info</span>
														</li>

														<li data-step="2">
															<span class="step">2</span>
															<span class="title">Owner Info</span>
														</li>

														<li data-step="3">
															<span class="step">3</span>
															<span class="title">Business Info</span>
														</li>

														<li data-step="4">
															<span class="step">4</span>
															<span class="title">Deposit Info</span>
														</li>
													</ul>
												</div>

												<hr>

												<div class="step-content pos-rel">
													<div class="step-pane active" data-step="1">
														<h3 class="lighter block green">Enter the following information</h3>

														<form class="form-horizontal" id="sample-form" style="display: none;">
															<div class="form-group has-warning">
																<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Input with warning</label>

																<div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input type="text" id="inputWarning" class="width-100">
																		<i class="ace-icon fa fa-leaf"></i>
																	</span>
																</div>
																<div class="help-block col-xs-12 col-sm-reset inline"> Warning tip help! </div>
															</div>

															<div class="form-group has-error">
																<label for="inputError" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">Input with error</label>

																<div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input type="text" id="inputError" class="width-100">
																		<i class="ace-icon fa fa-times-circle"></i>
																	</span>
																</div>
																<div class="help-block col-xs-12 col-sm-reset inline"> Error tip help! </div>
															</div>

															<div class="form-group has-success">
																<label for="inputSuccess" class="col-xs-12 col-sm-3 control-label no-padding-right">Input with success</label>

																<div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input type="text" id="inputSuccess" class="width-100">
																		<i class="ace-icon fa fa-check-circle"></i>
																	</span>
																</div>
																<div class="help-block col-xs-12 col-sm-reset inline"> Success tip help! </div>
															</div>

															<div class="form-group has-info">
																<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Input with info</label>

																<div class="col-xs-12 col-sm-5">
																	<span class="block input-icon input-icon-right">
																		<input type="text" id="inputInfo" class="width-100">
																		<i class="ace-icon fa fa-info-circle"></i>
																	</span>
																</div>
																<div class="help-block col-xs-12 col-sm-reset inline"> Info tip help! </div>
															</div>

															<div class="form-group">
																<label for="inputError2" class="col-xs-12 col-sm-3 control-label no-padding-right">Input with error</label>

																<div class="col-xs-12 col-sm-5">
																	<span class="input-icon block">
																		<input type="text" id="inputError2" class="width-100">
																		<i class="ace-icon fa fa-times-circle red"></i>
																	</span>
																</div>
																<div class="help-block col-xs-12 col-sm-reset inline"> Error tip help! </div>
															</div>
														</form>

														<form class="form-horizontal" id="new-client-form" method="get" novalidate="novalidate">
															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Email Address:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="email" name="email" id="email" class="col-xs-12 col-sm-6">
																	</div>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">Password:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="password" name="password" id="password" class="col-xs-12 col-sm-4">
																	</div>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password2">Confirm Password:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="password" name="password2" id="password2" class="col-xs-12 col-sm-4">
																	</div>
																</div>
															</div>

															<div class="hr hr-dotted"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Company Name:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="text" id="name" name="name" class="col-xs-12 col-sm-5">
																	</div>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group has-error">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phone">Phone Number:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="ace-icon fa fa-phone"></i>
																		</span>

																		<input type="tel" id="phone" name="phone" aria-required="true" aria-invalid="true" aria-describedby="">
																	</div>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="url">Company URL:</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<input type="url" id="url" name="url" class="col-xs-12 col-sm-8">
																	</div>
																</div>
															</div>

															<div class="hr hr-dotted"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right">Services Required</label>

																<div class="col-xs-12 col-sm-9">
																	<div>
																		<label>
																			<input name="subscription" value="1" type="checkbox" class="ace">
																			<span class="lbl"> Credit Card Processing</span>
																		</label>
																	</div>

																	<div>
																		<label>
																			<input name="subscription" value="2" type="checkbox" class="ace">
																			<span class="lbl"> E-Check/ ACH Processing</span>
																		</label>
																	</div>
																	
																	
																	<div>
																		<label>
																			<input name="subscription" value="2" type="checkbox" class="ace">
																			<span class="lbl"> Direct Debit Processing</span>
																		</label>
																	</div>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right">Company Structure</label>

																<div class="col-xs-12 col-sm-9">
																	<div>
																		<label class="line-height-1 blue">
																			<input name="gender" value="1" type="radio" class="ace">
																			<span class="lbl"> Private Corporation</span>
																		</label>
																	</div>

																	<div>
																		<label class="line-height-1 blue">
																			<input name="gender" value="2" type="radio" class="ace">
																			<span class="lbl"> Public Corporation</span>
																		</label>
																	</div>
																	
																	
																	<div>
																		<label class="line-height-1 blue">
																			<input name="gender" value="2" type="radio" class="ace">
																			<span class="lbl"> LLC - Limited Liable Company</span>
																		</label>
																	</div>
																	
																	<div>
																		<label class="line-height-1 blue">
																			<input name="gender" value="2" type="radio" class="ace">
																			<span class="lbl"> Partnership</span>
																		</label>
																	</div>	
																	<div>
																		<label class="line-height-1 blue">
																			<input name="gender" value="2" type="radio" class="ace">
																			<span class="lbl"> LLP - Limited Liable Partnership</span>
																		</label>
																	</div>
																</div>
															</div>

															<div class="hr hr-dotted"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state">State</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="select2-container select2" id="s2id_state" style="width: 200px;"><a href="javascript:void(0)" class="select2-choice select2-default" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-1">Click to Choose...</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1" class="select2-offscreen">State</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen1_search" class="select2-offscreen">State</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" id="s2id_autogen1_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-1">   </ul></div></div><select id="state" name="state" class="select2" data-placeholder="Click to Choose..." style="width: 200px; display: none;" tabindex="-1" title="State">
																		<option value="">&nbsp;</option>
																		<option value="AL">Alabama</option>
																		<option value="AK">Alaska</option>
																		<option value="AZ">Arizona</option>
																		<option value="AR">Arkansas</option>
																		<option value="CA">California</option>
																		<option value="CO">Colorado</option>
																		<option value="CT">Connecticut</option>
																		<option value="DE">Delaware</option>
																		<option value="FL">Florida</option>
																		<option value="GA">Georgia</option>
																		<option value="HI">Hawaii</option>
																		<option value="ID">Idaho</option>
																		<option value="IL">Illinois</option>
																		<option value="IN">Indiana</option>
																		<option value="IA">Iowa</option>
																		<option value="KS">Kansas</option>
																		<option value="KY">Kentucky</option>
																		<option value="LA">Louisiana</option>
																		<option value="ME">Maine</option>
																		<option value="MD">Maryland</option>
																		<option value="MA">Massachusetts</option>
																		<option value="MI">Michigan</option>
																		<option value="MN">Minnesota</option>
																		<option value="MS">Mississippi</option>
																		<option value="MO">Missouri</option>
																		<option value="MT">Montana</option>
																		<option value="NE">Nebraska</option>
																		<option value="NV">Nevada</option>
																		<option value="NH">New Hampshire</option>
																		<option value="NJ">New Jersey</option>
																		<option value="NM">New Mexico</option>
																		<option value="NY">New York</option>
																		<option value="NC">North Carolina</option>
																		<option value="ND">North Dakota</option>
																		<option value="OH">Ohio</option>
																		<option value="OK">Oklahoma</option>
																		<option value="OR">Oregon</option>
																		<option value="PA">Pennsylvania</option>
																		<option value="RI">Rhode Island</option>
																		<option value="SC">South Carolina</option>
																		<option value="SD">South Dakota</option>
																		<option value="TN">Tennessee</option>
																		<option value="TX">Texas</option>
																		<option value="UT">Utah</option>
																		<option value="VT">Vermont</option>
																		<option value="VA">Virginia</option>
																		<option value="WA">Washington</option>
																		<option value="WV">West Virginia</option>
																		<option value="WI">Wisconsin</option>
																		<option value="WY">Wyoming</option>
																	</select>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="platform">Platform</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<select class="input-medium" id="platform" name="platform">
																			<option value="">------------------</option>
																			<option value="linux">Linux</option>
																			<option value="windows">Windows</option>
																			<option value="mac">Mac OS</option>
																			<option value="ios">iOS</option>
																			<option value="android">Android</option>
																		</select>
																	</div>
																</div>
															</div>

															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Comment</label>

																<div class="col-xs-12 col-sm-9">
																	<div class="clearfix">
																		<textarea class="input-xlarge" name="comment" id="comment"></textarea>
																	</div>
																</div>
															</div>

															<div class="space-8"></div>

															<div class="form-group">
																<div class="col-xs-12 col-sm-6 col-sm-offset-1">
																	<label>
																		<input name="agree" id="agree" type="checkbox" class="ace">
																		<span class="lbl"> I agree that the information is true and correct</span>
																	</label>
																</div>
															</div>
														</form>
													</div>

													<div class="step-pane" data-step="2">
														<div>
															<div class="alert alert-success">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>

																<strong>
																	<i class="ace-icon fa fa-check"></i>
																	Well done!
																</strong>

																You successfully read this important alert message.
																<br>
															</div>

															<div class="alert alert-danger">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>

																<strong>
																	<i class="ace-icon fa fa-times"></i>
																	Oh snap!
																</strong>

																Change a few things up and try submitting again.
																<br>
															</div>

															<div class="alert alert-warning">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>
																<strong>Warning!</strong>

																Best check yo self, you're not looking too good.
																<br>
															</div>

															<div class="alert alert-info">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>
																<strong>Heads up!</strong>

																This alert needs your attention, but it's not super important.
																<br>
															</div>
														</div>
													</div>

													<div class="step-pane" data-step="3">
														<div class="center">
															<h3 class="blue lighter">This is step 3</h3>
														</div>
													</div>

													<div class="step-pane" data-step="4">
														<div class="center">
															<h3 class="green">Congrats!</h3>
															Account is ready to go! Click finish to continue!
														</div>
													</div>
												</div>
											</div>
											
										<div class="tab-pane active" id="tab1">
										
										<h3 class="block">Provide The Merchant Details </h3>
												<div class="form-group">
<label for="username" class="control-label col-md-3">Username <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
<input type="text" autocomplete="off" class="required form-control" id="username" name="username" value="<?=$form['username'];?>" />
							
														<span class="help-block">
														Provide a username for your merchant </span>
													</div>
												</div>
												<div class="form-group">
<label for="password" class="control-label col-md-3">Password <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">

<input data-rel="tooltip" type="password" autocomplete="off" class="form-control <? if ($action == 'new') { ?>required<? } ?> full" id="password" name="password" title="" data-placement="bottom" data-original-title="Password must be 6 characters or more!" value="" />

														<span class="help-block">
														Pick a password. </span>
													</div>
												</div>
												<div class="form-group">
<label for="password2" class="control-label col-md-3">Confirm  <span class="required" aria-required="true"> * </span>
													</label>
													<div class="col-md-6">
<input type="password" autocomplete="off" class="form-control <? if ($action == 'new') { ?>required<? } ?> full" id="password2" name="password2" value="" />
	
														<span class="help-block">
														Confirm the choosen password </span>
													</div>
												</div>
												<div class="form-group">
<label for="email" class="control-label col-md-3">Email <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">

<input type="text" autocomplete="off" class="form-control required email mark_empty" rel="user.email@company.com" id="email" name="email" value="<?=$form['email'];?>" />
		
														<span class="help-block">
														Provide merchant email address </span>
													</div>
												</div>
<div class="form-group">
<label for="client_type" class="control-label col-md-3">Type <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
<select name="client_type" id="client_type">
				<? if ($this->user->Get('client_type_id') == '3') { ?><option <? if ($form['client_type'] == '1') { ?> selected="selected" <? } ?> value="1">Service Provider</option><? } ?>
				
<option <? if ($form['client_type'] == '2') { ?> selected="selected" <? } ?> value="2">End User</option>
</select>
		
</div>	<? if ($this->user->Get('client_type_id') == '3') { ?>
	
	<? } ?>
											</div>
	</div>						
															</div>


											
											<div id="accordion" class="accordion-style1 panel-group">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false">
															<i class="bigger-110 ace-icon fa fa-angle-right" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
															Owner Information
														</a>
													</h4>
												</div>

												<div class="panel-collapse collapse" id="collapseOne" aria-expanded="false" style="height: 0px;">
													<div class="panel-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
													</div>
												</div>
											</div>

											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false">
															<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
															Business Information
														</a>
													</h4>
												</div>

												<div class="panel-collapse collapse" id="collapseTwo" aria-expanded="false">
													<div class="panel-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
													</div>
												</div>
											</div>

											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false">
															<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
															Deposit Information
														</a>
													</h4>
												</div>

												<div class="panel-collapse collapse" id="collapseThree" aria-expanded="false">
													<div class="panel-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
													</div>
												</div>
											</div>
											
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false">
															<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
															Processing Information
														</a>
													</h4>
												</div>

												<div class="panel-collapse collapse" id="collapseThree" aria-expanded="false">
													<div class="panel-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
													</div>
												</div>
											</div>
											
											
										</div>
											
</form>
</div>
</div>
											<hr>
											<div class="wizard-actions">
												<button class="btn btn-prev" disabled="disabled">
													<i class="ace-icon fa fa-arrow-left"></i>
													Prev
												</button>

												<button class="btn btn-success btn-next" data-last="Finish">
													Next
													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
												</button>
											</div>
										</div>
</div><!--/col-xs-12-->

</div><!--/row-->


<? } elseif ($this->user->Get('client_type_id') == '3') { ?>
<div class="row">

<div class="col-xs-12">													
																							
<div class="portlet-body form">
													
<!-- BEGIN FORM-->
																						
<div class="form-body">					
<div id="accordion" class="accordion-style1 panel-group">

<form class="form-horizontal" id="submit_form" method="post" action="<?=site_url($form_action);?>" novalidate="novalidate">

											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseZero" aria-expanded="true">
															<i class="bigger-110 ace-icon fa fa-angle-down" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
															Account Information
														</a>
													</h4>
												</div>

<div class="panel-collapse collapse in" id="collapseZero" aria-expanded="true" style="height:auto;">
										<div class="panel-body">
										<div class="form-body">					
										<div class="form-group">
<label for="email" class="control-label col-md-3">Email <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">

<input type="text" autocomplete="off" class="form-control required email mark_empty" rel="user.email@company.com" id="email" name="email" value="<?=$form['email'];?>" />
		
														<span class="help-block">
														Provide users email address </span>
													</div>
																						</div>	<!--/form-group-->	

												<div class="form-group">
<label for="username" class="control-label col-md-3">Username <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
<input type="text" autocomplete="off" class="required form-control" id="username" name="username" value="<?=$form['username'];?>" />
							
														<span class="help-block">
														Provide a username for your merchant </span>
													</div>
												</div>
												<div class="form-group">
<label for="password" class="control-label col-md-3">Password <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">

<input data-rel="tooltip" type="password" autocomplete="off" class="form-control <? if ($action == 'new') { ?>required<? } ?> full" id="password" name="password" title="" data-placement="bottom" data-original-title="Password must be 6 characters or more!" value="" />

														<span class="help-block">
														Pick a password. </span>
													</div>
												</div>
												<div class="form-group">
<label for="password2" class="control-label col-md-3">Confirm  <span class="required" aria-required="true"> * </span>
													</label>
													<div class="col-md-6">
<input type="password" autocomplete="off" class="form-control <? if ($action == 'new') { ?>required<? } ?> full" id="password2" name="password2" value="" />
	
														<span class="help-block">
														Confirm the chosen password </span>
													</div>
												</div>
												
<div class="form-group">
<label for="client_type" class="control-label col-md-3">Type <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
<select name="client_type" id="client_type" class="form-control">
				<? if ($this->user->Get('client_type_id') == '3') { ?><option <? if ($form['client_type'] == '1') { ?> selected="selected" <? } ?> value="1">Service Provider</option><? } ?>
				
<option <? if ($form['client_type'] == '2') { ?> selected="selected" <? } ?> value="2">End User</option>
</select>
		
		<? if ($this->user->Get('client_type_id') == '3') { ?>
	</div>	<!--/.col-md-4-->
	<? } ?>
											</div>	<!--/form-group-->	
											
											
											</div>	<!--/form-body-->	
	</div>	<!--/.panel-body-->					
</div>	<!--/.panel-collapse-->						
											</div><!--/.panel-default-->
											
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false">
															<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
															Owner Information
														</a>
													</h4>
												</div>

												<div class="panel-collapse collapse" id="collapseOne" aria-expanded="false">
													
													<div class="panel-body">
													
					<div class="row">
						<div class="col-md-12">
					<div class="well">
					<div class="form-body">
												<div class="form-group">
<label for="first_name" class="control-label col-md-3">Fullname <span class="required" aria-required="true">
													* </span>
													</label>
<div class="col-md-4">
													<div class="form-inline">
<input class="form-control required col-md-6" rel="First Name" type="text" id="first_name" name="first_name" value="<?=$form['first_name'];?>" />&nbsp;&nbsp;<label style="display:none" for="last_name">Last Name</label><input class="form-control required col-md-6" rel="Last Name" type="text" id="last_name" name="last_name" value="<?=$form['last_name'];?>" /></div>
											<span class="help-block">
												Provide the owners full name </span>
													</div>
												</div>

					</div>
												<div class="form-group">
<label for="phone" class="control-label col-md-3">Phone <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
<input type="text" class="form-control" id="phone" name="phone" value="<?=$form['phone'];?>" />
	
														<span class="help-block">
														Provide a contact number </span>
													</div>
												</div>
												<div class="form-group">
<label for="passport" class="control-label col-md-3">Passport <span>
													 </span>
													</label>
													<div class="col-md-4">
			<input type="text" class="form-control" name="passport" id="passport" value="<?=$form['passport'];?>" />
<span class="help-block">
								Provide merchant's passport #</span>
													</div>
												</div>
												<div class="form-group">
<label for="address_1" class="control-label col-md-3">Address <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
<input type="text" class="form-control" name="address_1" id="address_1" value="<?=$form['address_1'];?>" />

														<span class="help-block">
											Provide merchant's mailing address </span>
													</div>
												</div>
												<div class="form-group">
<label for="city" class="control-label col-md-3">City/Town <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
				<input geoname="locality" type="text" class="form-control" name="city" id="city" value="<?=$form['city'];?>" />

														<span class="help-block">
														Provide merchant's city or town </span>
													</div>
												</div>
												<div class="form-group">
<label for="country" class="control-label col-md-3">Country</label>
													<div class="col-md-4">
<select geoname="country_short" id="country" name="country" class="required form-control"><? foreach ($countries as $country) { ?><option <? if ($form['country'] == $country['iso2']) { ?> selected="selected" <? } ?> value="<?=$country['iso2'];?>"><?=$country['name'];?></option><? } ?></select>

<span class="help-block">
											Select merchant's country of residence </span>
													</div>
												</div>
<div class="form-group">
<label for="state" class="control-label col-md-3">Region<span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
<input geoname="administrative_area_level_1" type="text" class="text" name="state" id="state" value="<?=$form['state'];?>" />

<span class="help-block">
Provide merchant's state, province or region </span>
													</div>
												</div>
												<div class="form-group">
<label for="postal_code" class="control-label col-md-3">Postal Code</label>
													<div class="col-md-4">
														
<input geoname="postal_code" type="text" class="form-control" name="postal_code" id="postal_code" value="<?=$form['postal_code'];?>" />
<span class="help-block">
											Provide merchant's postal/ zip code</span>
													</div>
												</div>
<div class="form-group">
<label class="control-label col-md-3" for="timezone">Merchant's Timezone</label>
<div class="col-md-4 form-control">
 <?=timezone_menu($form['gmt_offset']);?>			
<span class="help-block">Select Your Merchant's Timezone</span>
</div>
</div><!--/form-group-->

</div><!--form-body-->

</div><!--/well-->
</div><!--/col-md-12-->
</div><!--/row-->
														
														</div>
													
												</div>
												
											</div>

											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false">
															<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
															Business Information
														</a>
													</h4>
												</div>

												<div class="panel-collapse collapse" id="collapseTwo" aria-expanded="false">
													<div class="panel-body">
														
<div class="row">
<div class="col-md-12">							
<div class="well">
<div class="form-body">			

			<div class="form-group">
	<label for="company" class="control-label col-md-3">Business Name <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
<input type="text" class="form-control required" id="company" name="company" value="<?=$form['company'];?>" />
	
														<span class="help-block">
Provide the business name
														</span>
													</div>
												</div>
												
												<div class="form-group">
<label for="business_url" class="control-label col-md-3">Website<span class="required" aria-required="true">
													 </span>
													</label>
													<div class="col-md-4">
		<input type="text" placeholder="http://merchantwebsite.com" class="form-control" name="business_url" id="business_url">
														<span class="help-block">
												Provide your merchant's website address </span>
													</div>
												</div>
											
												<div class="form-group">
<label for="company_id" class="control-label col-md-3">Business Number <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="registration_number">
														<span class="help-block">
Provide the business registration number
														</span>
													</div>
												</div>
												<div class="form-group">
<label  for="tax_id" class="control-label col-md-3">Tax ID <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" placeholder="" class="form-control" name="tax_id">
														<span class="help-block">
Provide business Tax ID/ GST number
														</span>
													</div>
												</div>
											
															<div class="space-2"></div>

															<div class="form-group">
																<label class="control-label col-xs-12 col-sm-3 no-padding-right">Company Structure</label>

																<div class="col-xs-12 col-sm-9">
																	<div>
																		<label class="line-height-1 blue">
																			<input name="gender" value="1" type="radio" class="ace">
																			<span class="lbl"> Private Corporation</span>
																		</label>
																	</div>

																	<div>
																		<label class="line-height-1 blue">
																			<input name="gender" value="2" type="radio" class="ace">
																			<span class="lbl"> Public Corporation</span>
																		</label>
																	</div>
																	
																	
																	<div>
																		<label class="line-height-1 blue">
																			<input name="gender" value="2" type="radio" class="ace">
																			<span class="lbl"> LLC - Limited Liable Company</span>
																		</label>
																	</div>
																	
																	<div>
																		<label class="line-height-1 blue">
																			<input name="gender" value="2" type="radio" class="ace">
																			<span class="lbl"> Partnership</span>
																		</label>
																	</div>	
																	<div>
																		<label class="line-height-1 blue">
																			<input name="gender" value="2" type="radio" class="ace">
																			<span class="lbl"> LLP - Limited Liable Partnership</span>
																		</label>
																	</div>
																</div>
															</div>

															<div class="hr hr-dotted"></div>
											
												
													</div><!--/form-body-->
											</div><!--/well-->
											</div><!--col-md-12-->
											</div><!--row-->
				



														</div>
												</div>
											</div>

											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false">
															<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
															Deposit Information
														</a>
													</h4>
												</div>

												<div class="panel-collapse collapse" id="collapseThree" aria-expanded="false">
													<div class="panel-body">
																							
<div class="row-fluid">
							
<div class="well">

<div class="form-body">
									<h4 class="form-section">Settlement Info</h4>
	
												<div class="form-group">
<label for="bank_name"class="control-label col-md-3">Bank Name <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
<input type="text" class="form-control required" id="bank_name" name="bank_name" value="<?=$form['bank_name'];?>" />
	
														<span class="help-block">
Provide the bank name
														</span>
													</div>
												</div>
												<div class="form-group">
<label for="bank_address"class="control-label col-md-3">Address <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="registration_number">
														<span class="help-block">
Provide the bank's address
														</span>
													</div>
												</div>

<div class="form-group">
<label for="bank_account_name" class="control-label col-md-3">Account Name<span class="required" aria-required="true">
													 </span>
													</label>
													<div class="col-md-4">
		<input type="text" placeholder="My Company Inc." class="form-control" name="bank_acct_name"/>
														<span class="help-block">
												Provide the account holders name </span>
													</div>
												</div>


												<div class="form-group">
<label for="bank_swift" class="control-label col-md-3">S.W.I.F.T # <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
<input type="text" placeholder="" class="form-control" name="bank_swift">
														<span class="help-block">
Provide the bank's S.W.I.F.T number
														</span>
													</div>
												</div>

<div class="form-group">
<label for="bank_routing_number" class="control-label col-md-3">Routing #/ BIC<span class="required" aria-required="true">
													 </span>
													</label>
													<div class="col-md-4">
		<input type="text" placeholder="" class="form-control" name="bank_routing_number">
														<span class="help-block">
												Provide your merchant's routing/ transit number </span>
													</div>
												</div>
												<div class="form-group">
<label for="bank_account_number" class="control-label col-md-3">Account #<span class="required" aria-required="true">
													 </span>
													</label>
													<div class="col-md-4">
		<input type="text" placeholder="" class="form-control" name="bank_acct_number">
														<span class="help-block">
												Provide your merchant's account number </span>
													</div>
												</div>
</div><!--/tab-->

</div><!--well-->
														
	</div><!--row-fluid-->													
														
														</div>
												</div>
											</div>
											
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false">
															<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
															Processing Information
														</a>
													</h4>
												</div>

												<div class="panel-collapse collapse" id="collapseFour" aria-expanded="false">
													<div class="panel-body">
																	
	<div class="row-fluid">		
	<div class="col-md-12">		
					
		
<div class="well">	
	<div class="row">	
<div class="form-body">		

<div class="form-group">
						<label class="col-md-4 control-label">Industry Type </label>
										<div class="col-md-8">
											<select class="form-control">
											    <option>(R) Retail </option>
										        <option>(M) Mail-Order/Phone-Order</option>
												<option>(E) E-Commerce</option>
												<option>(R) Restaurant</option>
											</select>

<span class="help-block"> Select your merchant's industry type </span>
										</div>
									</div>

															<div class="form-group">
																<label class="control-label col-md-4 col-xs-12  no-padding-right">Services Required</label>

																<div class="col-md-8 col-xs-12">
																	<div>
																		<label>
																			<input name="subscription" value="1" type="checkbox" class="ace">
																			<span class="lbl"> Credit Card Processing</span>
																		</label>
																	</div>

																	<div>
																		<label>
																			<input name="subscription" value="2" type="checkbox" class="ace">
																			<span class="lbl"> E-Check/ ACH Processing</span>
																		</label>
																	</div>
																	
																	
																	<div>
																		<label>
																			<input name="subscription" value="2" type="checkbox" class="ace">
																			<span class="lbl"> Direct Debit Processing</span>
																		</label>
																	</div>
																</div>
															</div>

									
<div class="form-group">
				<label class="col-md-3 control-label">Payment types</label>
										<div class="col-md-9">
											<div class="checkbox-list">
												<label class="checkbox-inline">
												<div class="checker" id="uniform-inlineCheckbox21"><span><input type="checkbox" id="inlineCheckbox21" value="option1"></span></div> Visa </label>
												<label class="checkbox-inline">
												<div class="checker" id="uniform-inlineCheckbox22"><span><input type="checkbox" id="inlineCheckbox22" value="option2"></span></div> MasterCard </label>
<label class="checkbox-inline">
												<div class="checker" id="uniform-inlineCheckbox22"><span><input type="checkbox" id="inlineCheckbox22" value="option2"></span></div> Amex </label>
<label class="checkbox-inline">
												<div class="checker" id="uniform-inlineCheckbox22"><span><input type="checkbox" id="inlineCheckbox22" value="option2"></span></div> MasterCard </label>
<label class="checkbox-inline">
												<div class="checker" id="uniform-inlineCheckbox22"><span><input type="checkbox" id="inlineCheckbox22" value="option2"></span></div> Discover </label>
<label class="checkbox-inline">
												<div class="checker" id="uniform-inlineCheckbox22"><span><input type="checkbox" id="inlineCheckbox22" value="option2"></span></div>JCB </label>

<label class="checkbox-inline">
												<div class="checker" id="uniform-inlineCheckbox22"><span><input type="checkbox" id="inlineCheckbox22" value="option2"></span></div> Echeck </label>

											</div>

<span class="help-block"> Select the payment types for your merchant </span>
										</div>
									</div>

												<div class="form-group">
<label for="username" class="control-label col-md-3"> Credit Card Processor<span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
<input type="text" autocomplete="off" class="required form-control" id="gateway" name="cc_processor" value="<?=$form['cc_processor'];?>" />
							
<span class="help-block"> Select a Credit Card Processor/ Network for your merchant </span>
													</div>
												</div>
<div class="form-group">
<label for="username" class="control-label col-md-3"> Echeck Processor <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
<input type="text" autocomplete="off" class="required form-control" id="echeck_processor" name="echeck_processor" value="<?=$form['echeck_processor'];?>" />
	
		
<span class="help-block"> Select a Echeck/Direct Debit Processor </span>
													</div>
												</div>



<div class="form-group">
<label for="merchantnum" class="control-label col-md-3"> Merchant # <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
<input type="text" autocomplete="off" class="required form-control" id="echeck_processor" name="merchant_number" value="<?=$form['merchant_number'];?>" />
	
		
<span class="help-block"> Merchant Account Number</span>
													</div>
												</div>

<div class="form-group">
<label for="username" class="control-label col-md-3"> Terminal # <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
<input type="text" autocomplete="off" class="required form-control" id="terminal_number" name="terminal_number" value="<?=$form['terminal_number'];?>" />
	
		
<span class="help-block"> Provide Your Merchants Terminal Number/ ID (Optional) </span>
													</div>
												</div>



<div class="form-group">
<label for="username" class="control-label col-md-3"> Store # <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
<input type="text" autocomplete="off" class="required form-control" id="store_number" name="store_number" value="<?=$form['store_number'];?>" />
	
		
<span class="help-block"> Provide Your Merchants Store Number (Optional) </span>
													</div>
												</div>

												<div class="form-group">
<label  for="suspended" class="control-label col-md-4">Status <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-8">
		<div class="radio-list">
<label class="radio-inline" for="suspended"></label>
			
<input type="radio" class="required" id="suspended" name="suspended" <? if ($form['suspended'] == '0') { ?> checked="checked" <? } ?> value="0"/>&nbsp;Active&nbsp;&nbsp;&nbsp;<input type="radio" class="required" id="suspended" name="suspended" <? if ($form['suspended'] == '1') { ?> checked="checked" <? } ?> value="1" />&nbsp;Suspended
		
		</div><!--/.radio-list-->
													</div><!--/col-md-4-->
												</div><!--/form-group-->
														
</div><!--/form-body-->
							
</div><!--row-->		
</div><!--well-->													
</div><!--col-md-12-->	
</div><!--row-fluid-->

</div><!--panel-body-->										
	</div><!--panel-collapse-->	
											
											<hr>
<div class="form-actions">
						<div class="row">
								<div class="col-md-offset-3 col-md-6">
								<button type="submit" name="go_client" class="ladda-button btn-block" data-color="green" data-style="expand-right"><span class="ladda-label">Submit</span><span class="ladda-spinner"></span><div class="ladda-progress" style="width: 0px;"></div></button>
								</div>
                        </div>
	</div><!--/.wizard-actions-->
							</form>

	
							</div><!--/#accordion-->
											</div><!--form-body-->

									
										</div>
										</div>
</div><!--/col-xs-12-->
</div><!--/row-->
<? } ?>       


			<script type="text/javascript">
				jQuery(document).ready(function($)
				{
					$(".multi-select").multiSelect({
						afterInit: function()
						{
							// Add alternative scrollbar to list
							this.$selectableContainer.add(this.$selectionContainer).find('.ms-list').perfectScrollbar();
						},
						afterSelect: function()
						{
							// Update scrollbar size
							this.$selectableContainer.add(this.$selectionContainer).find('.ms-list').perfectScrollbar('update');
						}
					});
					
					$(".selectboxit").selectBoxIt().on('open', function()
					{
						// Adding Custom Scrollbar
						$(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
					});
				});
			</script>


<!-- START: anoop -->
 <script type="text/javascript">
            
            // Ajax post
            $(document).ready(function() {
                $("#go_client").click(function(event) {
                    event.preventDefault();
                  	var data = $("#submit_form").serialize();
                    jQuery.ajax({
                        type: "POST",
                        url: "<?=site_url($form_action);?>",
                        dataType: 'json',
                        data: data,
                        success: function(response) {
                           $("#show-info-message").html(response.message);
						   if(typeof response.redirect != 'undefined')
						   {
							   window.location = "<?=site_url('clients');?>"
						   }
                        }
                    });
                });
            });
        </script>  
<!-- END: anoop -->

<script>
  $(function(){ 

       $("#address_1").formmapper({details:"form"}); 

        });
</script>


<script type="text/javascript">
			jQuery(function($) {
			
				$('[data-rel=tooltip]').tooltip();
			
				$(".select2").css('width','200px').select2({allowClear:true})
				.on('change', function(){
					$(this).closest('form').validate().element($(this));
				}); 
			
			
				var $validation = false;
				$('#fuelux-wizard-container')
				.ace_wizard({
					//step: 2 //optional argument. wizard will jump to step "2" at first
					//buttons: '.wizard-actions:eq(0)'
				})
				.on('actionclicked.fu.wizard' , function(e, info){
					if(info.step == 1 && $validation) {
						if(!$('#validation-form').valid()) e.preventDefault();
					}
				})
				.on('finished.fu.wizard', function(e) {
					bootbox.dialog({
						message: "Thank you! User information was successfully saved!", 
						buttons: {
							"success" : {
								"label" : "OK",
								"className" : "btn-sm btn-primary"
							}
						}
					});
				}).on('stepclick.fu.wizard', function(e){
					//e.preventDefault();//this will prevent clicking and selecting steps
				});
			
			
				//jump to a step
				/**
				var wizard = $('#fuelux-wizard-container').data('fu.wizard')
				wizard.currentStep = 3;
				wizard.setState();
				*/
			
				//determine selected step
				//wizard.selectedItem().step
			
			
			
				//hide or show the other form which requires validation
				//this is for demo only, you usullay want just one form in your application
				$('#skip-validation').removeAttr('checked').on('click', function(){
					$validation = this.checked;
					if(this.checked) {
						$('#short-form').hide();
						$('#new-client-form').removeClass('hide');
					}
					else {
						$('#short-form').addClass('hide');
						$('#new-client-form').show();
					}
				})
			
			
			
				//documentation : http://docs.jquery.com/Plugins/Validation/validate
			
			
				$.mask.definitions['~']='[+-]';
				$('#phone').mask('(999) 999-9999');
			
				jQuery.validator.addMethod("phone", function (value, element) {
					return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");
			
				$('#validation-form').validate({
					errorElement: 'div',
					errorClass: 'help-block',
					focusInvalid: false,
					ignore: "",
					rules: {
						email: {
							required: true,
							email:true
						},
						password: {
							required: true,
							minlength: 8
						},
						password2: {
							required: true,
							minlength: 8,
							equalTo: "#password"
						},
						name: {
							required: true
						},
						phone: {
							required: true,
							phone: 'required'
						},
						url: {
							required: true,
							url: true
						},
						comment: {
							required: true
						},
						state: {
							required: true
						},
						platform: {
							required: true
						},
						subscription: {
							required: true
						},
						gender: {
							required: true,
						},
						agree: {
							required: true,
						}
					},
			
					messages: {
						email: {
							required: "Please provide a valid email.",
							email: "Please provide a valid email."
						},
						password: {
							required: "Please specify a password.",
							minlength: "Please specify a secure password."
						},
						state: "Please choose state",
						subscription: "Please choose at least one option",
						gender: "Please choose gender",
						agree: "Please accept our policy"
					},
			
			
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});
			
				
				
				
				$('#modal-wizard-container').ace_wizard();
				$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
				
				
				/**
				$('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
				
				$('#mychosen').chosen().on('change', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
				*/
				
				
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					$('[class*=select2]').remove();
				});
			})
		</script>


</div><!--/row-->
</div><!--/content-wrapper-->
</div><!--/wizard-->

<?=$this->load->view(branded_view('cp/footer'));?>


<!-- anooj -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script type="text/javascript" src="<?=branded_include('js/formmapper.js');?>"></script>

<script>
  $(function(){ 

       $("#address_1").formmapper({details:"form"}); 

        });
</script>
<!-- anooj -->