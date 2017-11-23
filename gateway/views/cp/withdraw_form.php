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

<div class="row">

<header class="section-header">
              <div class="container-960 center">
<div class="copywriting">
<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	
<h1 class="margin-none"><strong class="text-primary"><?=$form_title;?></strong></h1>
</div>
</div>
             </div>
             </header>


<div class="row-fluid">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="widget-box">
<div class="widget-body">			
<div class="widget-main">
<div class="row">
				<div class="col-md-12">
					<div class="portlet light" id="form_wizard_1">
						<div class="portlet-title">
							<div class="caption">
								<span class="caption-subject theme-font bold uppercase">
			<i class="fa fa-magic"></i> Merchant Quick Application <span class="step-title">  </span>
								</span>
							</div>
							<div class="tools">
								
							</div>
						</div>
						<div class="portlet-body form">
<form class="form-horizontal" id="submit_form" method="post" action="<?=site_url($form_action);?>" novalidate="novalidate">
							
								<div class="form-wizard">
									<div class="form-body">
<ul class="tabs nav nav-tabs nav-tabs-justified">
											<li class="active">
												<a href="#tab1" data-toggle="tab" class="step" aria-expanded="true">
												<span class="number">
												1 </span>
												<span class="desc">
												Account Info </span>
												</a>
											</li>
											<li>
												<a href="#tab2" data-toggle="tab" class="step">
												<span class="number">
												2 </span>
												<span class="desc">
												 Owner Info </span>
												</a>
											</li>
											<li>
												<a href="#tab3" data-toggle="tab" class="step active">
												<span class="number">
												3 </span>
												<span class="desc">
												 Business Info </span>
												</a>
											</li>
											<li>
												<a href="#tab4" data-toggle="tab" class="step">
												<span class="number">
												4 </span>
												<span class="desc">
										Deposit Info </span>
												</a>
											</li>
<li>
												<a href="#tab5" data-toggle="tab" class="step">
												<span class="number">
												5 </span>
												<span class="desc">
									Processor Info</span>
												</a>
											</li>
<li>
												<a href="#tab6" data-toggle="tab" class="step">
												<span class="number">
												5 </span>
												<span class="desc">
									Activate</span>
												</a>
											</li>
										</ul>

														<div class="progress-indicator">
					<span></span>
				</div>
										<div class="tab-content">
											<div class="alert alert-danger display-none">
												<button class="close" data-dismiss="alert"></button>
												You have some form errors. Please check below.
											</div>
											<div class="alert alert-success display-none">
												<button class="close" data-dismiss="alert"></button>
												Your merchant setup was successful!
											</div>
											<div class="tab-pane active" id="tab1">
										<h3 class="block">Provide The Merchant Details </h3>
												<div class="form-group">
<label for="username" class="control-label col-md-3">Username <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
<input type="text" autocomplete="off" class="required form-control" id="username" name="username" value="<?=$form['username'];?>" />
							
														<span class="help-block">
														Provide a username for your merchant </span>
													</div>
												</div>
												<div class="form-group">
<label for="password" class="control-label col-md-3">Password <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">

<input data-rel="tooltip" type="password" autocomplete="off" class="form-control <? if ($action == 'new') { ?>required<? } ?> full" id="password" name="password" title="" data-placement="bottom" data-original-title="Password must be 6 characters or more!" value="" />

														<span class="help-block">
														Pick a password. </span>
													</div>
												</div>
												<div class="form-group">
<label for="password2" class="control-label col-md-3">Confirm  <span class="required" aria-required="true"> * </span>
													</label>
													<div class="col-md-4">
<input type="password" autocomplete="off" class="form-control <? if ($action == 'new') { ?>required<? } ?> full" id="password2" name="password2" value="" />
	
														<span class="help-block">
														Confirm the choosen password </span>
													</div>
												</div>
												<div class="form-group">
<label for="email" class="control-label col-md-3">Email <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">

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
	</div>										<div class="tab-pane" id="tab2">
												<h3 class="block">Provide Merchant's Profile Details</h3>
<div class="row-fluid">
												<div class="form-group">
<label for="first_name" class="control-label col-md-3">Fullname <span class="required" aria-required="true">
													* </span>
													</label>
<div class="col-md-9">
													<div class="form-inline">
<input class="form-control required mark_empty" rel="First Name" type="text" id="first_name" name="first_name" value="<?=$form['first_name'];?>" />&nbsp;&nbsp;<label style="display:none" for="last_name">Last Name</label><input class="form-control required mark_empty" rel="Last Name" type="text" id="last_name" name="last_name" value="<?=$form['last_name'];?>" /></div>
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
				<input type="text" class="form-control" name="city" id="city" value="<?=$form['city'];?>" />

														<span class="help-block">
														Provide merchant's city or town </span>
													</div>
												</div>
												<div class="form-group">
<label for="country" class="control-label col-md-3">Country</label>
													<div class="col-md-4">
<select id="country" name="country" class="required form-control"><? foreach ($countries as $country) { ?><option <? if ($form['country'] == $country['iso2']) { ?> selected="selected" <? } ?> value="<?=$country['iso2'];?>"><?=$country['name'];?></option><? } ?></select>

<span class="help-block">
											Select merchant's country of residence </span>
													</div>
												</div>
<div class="form-group">
<label for="state" class="control-label col-md-3">Region<span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
<input type="text" class="text" name="state" id="state" value="<?=$form['state'];?>" />

<span class="help-block">
Provide merchant's state, province or region </span>
													</div>
												</div>
												<div class="form-group">
<label for="postal_code" class="control-label col-md-3">Postal Code</label>
													<div class="col-md-4">
														
<input type="text" class="form-control" name="postal_code" id="postal_code" value="<?=$form['postal_code'];?>" />
<span class="help-block">
											Provide merchant's postal/ zip code</span>
													</div>
												</div>
<div class="form-group">
<label class="control-label" for="timezone">Merchant's Timezone</label>
<div class="col-md-4">
 <?=timezone_menu($form['gmt_offset']);?>
						
<span class="help-block">Select Your Merchant's Timezone</span>
</div>
</div><!--/form-group-->

</div><!--/tab-->
	
<div class="tab-pane" id="tab3">
<h3 class="block">Provide Your Merchant's Business Details</h3>
												<div class="form-group">
	<label for="company" class="control-label col-md-3">Name <span class="required" aria-required="true">
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
<label for="company_id" class="control-label col-md-3">Company # <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="registration_number">
														<span class="help-block">
Provide the company's registration number
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
<label  for="suspended" class="control-label col-md-3">Status <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
														<div class="radio-list">
<label class="radio-inline" for="suspended"></label>
			
<input type="radio" class="required" id="suspended" name="suspended" <? if ($form['suspended'] == '0') { ?> checked="checked" <? } ?> value="0"/>&nbsp;Active&nbsp;&nbsp;&nbsp;<input type="radio" class="required" id="suspended" name="suspended" <? if ($form['suspended'] == '1') { ?> checked="checked" <? } ?> value="1" />&nbsp;Suspended
		
		</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab4">
							<h3 class="block">Provide Your Merchant's Settlement Details</h3>
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
<label for="bank_routing_number" class="control-label col-md-3">Routing #<span class="required" aria-required="true">
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

<div class="tab-pane" id="tab5">

<h3 class="block">Select The Processor(s) For Your Merchant </h3>

<div class="form-group">
						<label class="col-md-3 control-label">Industry Type </label>
										<div class="col-md-4">
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
<label for="username" class="control-label col-md-3"> Credit Card <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
<input type="text" autocomplete="off" class="required form-control" id="username" name="cc_processor" value="<?=$form['cc_processor'];?>" />
							
<span class="help-block"> Select a Credit Card Processor/ Network for your merchant </span>
													</div>
												</div>
<div class="form-group">
<label for="username" class="control-label col-md-3"> Echeck/C21 <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
<input type="text" autocomplete="off" class="required form-control" id="echeck_processor" name="echeck_processor" value="<?=$form['echeck_processor'];?>" />
	
		
<span class="help-block"> Select a Echeck/Direct Debit Processor for your merchant </span>
													</div>
												</div>



<div class="form-group">
<label for="merchantnum" class="control-label col-md-3"> Merchant # <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
<input type="text" autocomplete="off" class="required form-control" id="echeck_processor" name="merchant_number" value="<?=$form['merchant_number'];?>" />
	
		
<span class="help-block"> Merchant Account Number for your merchant </span>
													</div>
												</div>

<div class="form-group">
<label for="username" class="control-label col-md-3"> Terminal # <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
<input type="text" autocomplete="off" class="required form-control" id="terminal_number" name="terminal_number" value="<?=$form['terminal_number'];?>" />
	
		
<span class="help-block"> Provide Your Merchants Terminal Number/ ID (Optional) </span>
													</div>
												</div>



<div class="form-group">
<label for="username" class="control-label col-md-3"> Store # <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
<input type="text" autocomplete="off" class="required form-control" id="store_number" name="store_number" value="<?=$form['store_number'];?>" />
	
		
<span class="help-block"> Provide Your Merchants Store Number (Optional) </span>
													</div>
												</div>



</div><!--/tab-->



<div class="tab-pane" id="tab6">
												<h3 class="block">Confirm the account</h3>
								<h4 class="form-section">Please Confirm And Activate Your Merchant's Account</h4>
												<div class="form-group">
													<label class="control-label col-md-3">Username:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="username">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Email:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="email">
														</p>
													</div>
												</div>
												<h4 class="form-section">Profile</h4>
												<div class="form-group">
													<label class="control-label col-md-3">Fullname:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="fullname">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gender:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="gender">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Phone:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="phone">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Address:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="address">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">City/Town:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="city">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label for="country" class="control-label col-md-3">Country:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="country">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Remarks:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="remarks">
														</p>
													</div>
												</div>
												<h4 class="form-section">Business</h4>
												<div class="form-group">
													<label class="control-label col-md-3">Card Holder Name:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="card_name">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Card Number:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="card_number">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">CVC:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="card_cvc">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Expiration:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="card_expiry_date">
														</p>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Settlement Options:</label>
													<div class="col-md-4">
														<p class="form-control-static" data-display="payment">
														</p>
													</div>
												</div>

<div class="form-group">
<label class="control-label col-md-3">Account Status <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
														<div class="radio-list">
<label class="radio-inline" for="suspended"></label>
			
<input type="radio" class="required" id="suspended" name="suspended" <? if ($form['suspended'] == '0') { ?> checked="checked" <? } ?> value="0"/>&nbsp;Active&nbsp;&nbsp;&nbsp;<input type="radio" class="required" id="suspended" name="suspended" <? if ($form['suspended'] == '1') { ?> checked="checked" <? } ?> value="1" />&nbsp;Suspended
		
		</div>
													</div>
												</div>
</div><!--/tab-->
			



										</div>
									</div>
<!-- Tabs Pager -->
					<ul class="pager wizard">
						<li class="previous first">
							<a href="#">First</a>
						</li>
						<li class="previous">
							<a href="#"><i class="entypo-left-open"></i> Previous</a>
						</li>
						
						<li class="next last">
							<a href="#">Last</a>
						</li>
						<li class="next">
							<a href="#">Next <i class="entypo-right-open"></i></a>
						</li>
					</ul>
					

									<div class="form-actions">
										<div class="row">
								<div class="col-md-offset-3 col-md-9">
			<a href="javascript:;" class="btn btn-lg btn-inverse button-previous disabled" onClick="history.back()">
			<i class="m-icon-swapleft"></i> Back </a>
<a href="javascript:;" class="btn btn-primary btn-lg button-next">
				Continue <i class="m-icon-swapright m-icon-white"></i>
</a>
				
<button type="submit" name="go_client" class="btn btn-success btn-lg button-submit" value="<?=ucfirst($form_title);?>" />

 Create Account <i class="fa fa-check"></i> </button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

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



</div><!--/widget-body-->
</div><!--/widget-main-->
</div><!--/widget-box-->
</div><!--/col-lg-12-->
</div><!--/row-fluid-->


	<!-- Imported scripts on this page -->
	<script type="text/javascript" src="<?=branded_include('js/jquery-validate/jquery.validate.min.js');?>"></script>

	<script type="text/javascript" src="<?=branded_include('js/inputmask/jquery.inputmask.bundle.js');?>"></script>

	<script type="text/javascript" src="<?=branded_include('js/formwizard/jquery.bootstrap.wizard.min.js');?>"></script>

	<script type="text/javascript" src="<?=branded_include('js/datepicker/bootstrap-datepicker.js');?>"></script>

	<script type="text/javascript" src="<?=branded_include('js/multiselect/js/jquery.multi-select.js');?>"></script>

	<script type="text/javascript" src="<?=branded_include('js/jquery-ui/jquery-ui.min.js');?>"></script>

	<script type="text/javascript" src="<?=branded_include('js/selectboxit/jquery.selectBoxIt.min.js');?>"></script>

<?=$this->load->view(branded_view('cp/footer'));?>