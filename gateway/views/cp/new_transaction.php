<?=$this->load->view(branded_view('cp/header'), array('head_files' => '
<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/formmapper.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/jquery.bank.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/formatter.min.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/form.transaction.js') . '"></script>')); ?>


<link href="https://everpayinc.com/assets/app/css/skeuocard.reset.css" rel="stylesheet" type="text/css" media="screen" />

<link href="https://everpayinc.com/assets/app/css/skeuocard.css" rel="stylesheet" type="text/css" media="screen" />

<style type="text/css">


    .has-error input {
      border-width: 2px;
    }

    .validation.text-danger:after {
      content: 'Validation failed';
    }

    .validation.text-success:after {
      content: 'Validation passed';
    }


input[type="number"]{
  display: inline-block;
  height: 34px!important;
  border: 1px solid #eee!important;
  display: inline-block;
  padding: 5px 10px!important;
  margin-bottom: 2px;
  font-size: 16pximportant;
  line-height: 16pximportant;
}


div#transaction_gateway {
  background-position: 45px 25px!important;
  background-repeat: no-repeat;
}
#form_wraper_div input[type="radio"] {
  top: -1px!important;
}

.card-container {
            width: 100%;
            max-width: 350px;
            margin: 20px auto;
        }


#form_container {
  position: relative;
  margin-bottom: 40px;
  margin-top: 25px;
}

#form_container {
  width: 480px!important;
}


#cc_expiry_year {
width: 80px;
}
#cc_security {
width: 60px;
}

.inner-payment-section {
  padding: 15px;
  border: 0px solid #ccc!important;
  margin-bottom: 12px;
}

.inner-payment-section .inner-payment-head {
  padding-bottom: 0px;
  border-top: 0px solid #ccc!important;
  font-weight: bold;
  padding-top: 10px;
  border-bottom: 0px solid #ccc!important;
}

select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
  display: inline-block;
  padding: 8px 10px!important;
  margin-bottom: 2px;
  font-size: 14px;
  line-height: 16px;
  color: #555;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  vertical-align: middle;
}

.skeuocard.js {
  width: 24.8em;
  height: 15.6em;
  -webkit-perspective: 1000;
  -moz-perspective: 1000;
  -o-perspective: 1000;
  perspective: 1000;
  margin: 0px auto;
}

.skeuocard.js .cc-name {
  margin: 0;
  padding: 0;
  position: absolute;
  display: block;
  font-size: 1.5em!important;
  font-family: "ocraregular","OCR A Std","OCR A",Courier,"Courier New",monospace;
  text-transform: uppercase;
  height: 32px;
  top: 60px!important;
  left: 50px!important;
}

.skeuocard.js .cc-number input {
  color: #333;
  font-family: "ocraregular","OCR A Std","OCR A",Courier,"Courier New",monospace;
  font-size: 1.5em;
  margin-top: 20px;
}

.skeuocard.js .cc-number input.group19 {
  width: 12em;
}

.skeuocard.js .cc-number {
  position: absolute;
  display: block;
  left: 2.5em;
  top: 7.05em;
  padding: 0.2em;
}

.skeuocard.js .cc-name {
  margin: 0;
  padding: 0;
  position: absolute;
  display: block;
  font-size: 1.5em!important;
  font-family: "ocraregular","OCR A Std","OCR A",Courier,"Courier New",monospace;
  text-transform: uppercase;
  height: 32px;
  top: 60px!important;
  left: 33px!important;
  width: 73%!important;
}


#billing-form .billing {
  max-width: 640px;
  margin: 0 auto;
  margin-top: 10px;
}

.big-tabs li {
    width: auto;
    display: inline-block;
font-size: 12px!important;
}

.big-tabs li:first-child {
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
}

.big-tabs li {
    display: inline-block;
    float: none;
    font-weight: bold;
    margin: 0;
    border: 1px solid #0eb3ec;
    margin-left: -1px;
font-size: 12px;
    margin-bottom: 10px;
}

.big-tabs li:first-child a {
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
}

.big-tabs li a {
    border-radius: 0;
    width: auto;
    display: inline-block;
font-size: 12px;
}

.big-tabs li a {
    width: auto;
    border: 1px solid #0eb3ec!important;
    border-radius: 3px;
    display: block;
}

.big-tabs li.active a {
    background: #0eb3ec!important;
    color: #fff!important;
}

.big-tabs li a {
    color: #0eb3ec!important;
    line-height: 32px;
    display: inline-block;
    padding: 0 30px;
font-size: 12px!important;
}

#form_wraper_div span {
    font-size: 12px;
}

div.transaction.submit {
    padding-left: 0%;
    padding-right: 10px;
    width: 98%;
}

#form_wraper_div label {
    display: inline-block;
    color: #1d1d1d;
    margin-bottom: 12px;
    font-weight: bold;
    margin-top: 6px;
}


#form_container .form-content-wrap .form-content {
    background-color: #fff;
    margin-left: 5px!important;
    margin-right: 5px!important;
    padding-left: 10px!important;
    padding-top: 20px!important;
    text-align: left!important;
    position: relative;
    z-index: 10;
}

</style>
		




<!-- BEGIN VIRTUAL TERMINAL PAGE -->
<div id="billing-form">

<div class="content-wrapper">

<div class="row-fluid clearfix" style="height: auto;">


<? if ($this->user->Get('client_type_id') == '3') { ?>
<div class="row-fluid">

<p class="warning"><span>As a <b><?=$this->user->Get('client_type');?></b></p>


<div class="billing">

		<div class="secure clearfix hidden">
			<span class="lock pull-left">
				<i class="fa fa-lock"></i>
				Secure for ISO
			</span>
			<div class="accepted-cards pull-right">
				<img alt="Credit card types" src="../assets/app/img/credit_card_types.gif">
			</div>
		</div>

</p>

<h1 class="lead"> ONLY A Service Provider CAN SEE THIS Message</h1>
</div>

</div>


<? } elseif ($this->user->Get('client_type_id') == '1') { ?>

<div class="row-fluid">

<p class="lead">
<span>As an <b><?=$this->user->Get('client_type');?></b>,New Payment Form</span>

<div class="billing">

		<div class="secure clearfix hidden">
			<span class="lock pull-left">
				<i class="fa fa-lock"></i>
				Secure For Admin
			</span>
			<div class="accepted-cards pull-right">
				<img alt="Credit card types" src="../assets/app/img/credit_card_types.gif">
			</div>
		</div>

</p>

<h1 class="lead"> </h1>

</div>
</div>
<? } ?>



<div id="form_container">

            <!--Form content-->
<div class="form-content-wrap" style="background-color: rgb(255, 255, 255); padding-bottom:40px;">
                
<!--Form HEADER-->

<div class="form-content" style="background-color: rgb(255, 255, 255);">
                    
<div class="form_column_two" id="form_wraper_div">



<div class="billing">

		<div class="secure clearfix">
			<span class="lock pull-left">
				<i class="fa fa-lock"></i>
				Secure
			</span>
			<div class="accepted-cards pull-right">
				<img alt="Credit card types" src="../assets/app/img/credit_card_types.gif">
			</div>
		</div>

                        
<form id="billing" class="view_form" role="form" method="post" action="<?=site_url('transactions/post');?>">

<ul id="unorder_list_container">

<li style="display: inline-block;" class="inkdesk_form">
<div id="paymentOption" class="inkdesk_form payment_form"style="font-family: 'Source Sans Pro';">
<div id="continer_div1" class="view_wrapper" style="width:99%;">

<div class="clearfix" style="height:20px;"></div>
<div class="fg-outlined" style="font-family: 'Source Sans Pro'; border-color: #999; background: rgb(255, 255, 255);">

<div class="inner-payment-section" id="total">
<div class="inner-payment-head" style="font-family: 'Source Sans Pro';">
<span id="curr_loader" class="left col-sm-3" style="font-family: 'Source Sans Pro'; color: rgb(0, 0, 0);">Amount:</span>
<span id="baseprice" class="col-sm-3" style="width: 100px;font-family: 'Source Sans Pro'; color: rgb(0, 0, 0);"> 

 <input type="hidden" name="amount" class="required form-control" id="amount" placeholder="Dollar Amount"/>

<input type="number" name="amount_other" id="amount_other" min="0.01" step="0.01" max="10000.00" value="1.00" style="margin-top:10px; margin-left: 5px;" />
</span>

<span class="pull-right col-sm-5" style="margin-top:-5px;">
<select style="width:99%;" class="form-control" name="currency_converter" id="currency_converter">
<option value="">Currency</option>
	<?php foreach($valid_currencies as $curr) { ?>
	<option value="<?php echo $curr; ?>"><?php echo $curr; ?>
</option>
	<?php } ?>
</select>
</span>
			   

<span class="clear" style="font-family: 'Source Sans Pro'; color: rgb(0, 0, 0);"></span>

<span class="clear" style="font-family: 'Source Sans Pro'; color: rgb(0, 0, 0);"></span>

</div>

<div class="inner-payment-content" style="font-family: 'Source Sans Pro';">
<div id="rmvbase" class="single-payment-wrapper" style="font-family: 'Source Sans Pro';">
<span class="left" style="font-family: 'Source Sans Pro'; color: rgb(0, 0, 0);">
<? if ($coupons == FALSE) { ?> 
<select style="width:110px;" name="coupon" class="form-control">
<option value="">No Coupons</option>
</select> 
<? } ?>
					<? if (!empty($coupons)) { ?>
						<? if ($coupons === TRUE) { ?>
	<input type="text" class="form-control" name="coupon" value="" />
						<? } else { ?> 
<span class="left fg-outline" style="margin-top:-10px;">
				<select class="form-control" style="width:135px;" name="coupon">
							<option value="">Add coupon</option>
								<? foreach ($coupons as $coupon) { ?>
					<? if ($coupon['end_date'] === FALSE or (strtotime($coupon['end_date'])+84600) > time()) { ?>
				                         <option value="<?=$coupon['code'];?>"><?=$coupon['code'];?> - <?=$coupon['name'];?></option>
									<? } ?>
								<? } ?>
				</select>
						<? } ?>
					<? } ?>
</select>
</span>

<span class="left col-sm-6 inner-payment-head" style="font-size: 17px !important;color: #55bc75;margin-top:-10px; margin-right;10px; text-align: center;">Total: $<span id="target_amount"></span> USD</span>

<span class="left" style="width:160px;margin-top:10px;margin-bottom:10px;">
<button class="btn-link" type="button" data-toggle="collapse" data-target="#collapseRecurring" aria-expanded="false" aria-controls="collapseNewCustomer">
 <i class="fa fa-check"></i>Make Recurring
</button></span>


</div>



</div>

</div>

</div>
</div>
</li>

<li style="display: inline-block;">
<div id="continer_div7" class="view_wrapper">
<span data-title="false" class="fg-label-parent" style="font-family: 'Source Sans Pro'; color: rgb(0, 0, 0);">
<label class="view_check"style="font-family: 'Source Sans Pro'; color: rgb(0, 0, 0);"></label></span>
<span id="break_line6" style=" color: rgb(0, 0, 0);"></span>
<ul id="checkboxes6" style="font-family: 'Source Sans Pro';">
<li style="font-family: 'Source Sans Pro';">
<div style="font-family: 'Source Sans Pro';">
<label class="check_desc" for="checkboxes6.0" style="font-family: 'Source Sans Pro'; color: rgb(0, 0, 0);"><span class="pull-right">

</span></label>
</div>
</li>
</ul>
</div>
</li>


<li data-targetlogic="1" data-sourcelogic="1" data-visible="block" class="inkdesk_form element_container_li">

<div class="collapse" id="collapseRecurring">
  
<div id="continer_div1" class="view_wrapper margin-top-30">

<div class="fg-outlined" style=" border-color: #999; background: rgb(255, 255, 255);width:410px;">
<div class="widget">
<!-- BEGIN PAYMENT METHOD -->
 <div id="payment-method" class="address">
<h3 class="center clearfix margin-bottom-10" style="padding-top:10px;"><b> Recurring Details</b></h3>

<div id="continer_div7" class="view_wrapper">
<div class="form-group">			
<span class="left col-sm-4" for="interval"><label>Charge Interval</label></span> 
<span class="right col-sm-8">
<input type="text" class="form-control" id="interval" placeholder="(Days) Will be charged every Interval days. "name="interval" />
</span>			
 </div>
 </div>
<hr>

<div id="continer_div7" class="view_wrapper">

<div class="form-group">			
<span class="left col-sm-4" for="free_trial"><label>Free Trial</label></span> 
<span class="right col-sm-8">
<input class="form-control" type="text" placeholder="(Days) XX many days before the 1st charge." id="free_trial" name="free_trial" />
</span>
</div>
</div>

<div id="continer_div7" class="view_wrapper">

<div class="form-group">
<span class="left col-sm-4" for="start_date"><label>Start Date</label></span>
<span class="right col-sm-8">
				<select style="width:65px;" class="form-control inline" name="start_date_day">
					<? for ($i = 1; $i <= 31; $i++) { ?>
					<option value="<?=$i;?>"<? if (date('j') == $i) { ?> selected="selected" <? } ?>><?=$i;?></option>
					<? } ?>
				</select>&nbsp;&nbsp;
				<select style="width:65px;" class="" name="start_date_month">
					<? for ($i = 1; $i <= 12; $i++) {
					       $month = str_pad($i, 2, "0", STR_PAD_LEFT);
					       $month_text = date('M',strtotime('2010-' . $month . '-01')); ?>
					<option value="<?=$month;?>"<? if (date('m') == $month) { ?> selected="selected" <? } ?>><?=$month_text;?></option>
					<? } ?>
				</select>
				&nbsp;&nbsp;
				<select style="width:75px;" class="" name="start_date_year">
					<?
						$now = date('Y');
						$future = $now + 5;
						for ($i = $now; $i <= $future; $i++) {
						?>
					<option value="<?=$i;?>"<? if (date('Y') == $i) { ?> selected="selected" <? } ?>><?=$i;?></option>
						<?
						}
					?>
				</select>

<p class="small help"><em>Start the recurring charge at this date.</em></p>

</span>
	</div>	
</div>

<div id="continer_div7" class="view_wrapper">

<div class="radio-list">
<span class="left col-sm-4" for="recurring_end"><label>Recur Until</label> Forever&nbsp;&nbsp;
<input type="radio" id="recurring_end" name="recurring_end" value="forever" checked="checked" />
                        </span>
                <label for="occurrences" style="display: none;">Occurrences:
                          <input type="radio" id="recurring_end" name="recurring_end" value="occurrences" /> 
                                <input type="text" id="occurrences" name="occurrences" /> charges
                        </label>
                       <span class="right col-sm-12 inline margin-bottom-20">
Date: 
                        <input type="radio" class="inline" id="recurring_end" name="recurring_end" value="date" /> 
&nbsp;&nbsp;
				<select style="width:60px;" class="month_select" name="end_date_day">
					<? for ($i = 1; $i <= 31; $i++) { ?>
					<option value="<?=$i;?>"><?=$i;?></option>
					<? } ?>
				</select>

				<select style="width:70px;" class="month_select" name="end_date_month">
					<? for ($i = 1; $i <= 12; $i++) {
					       $month = str_pad($i, 2, "0", STR_PAD_LEFT);
					       $month_text = date('M',strtotime('2010-' . $month . '-01')); ?>
					<option value="<?=$month;?>"><?=$month_text;?></option>
					<? } ?>
				</select>
				
				<select style="width:90px;" class="month_select" name="end_date_year">
					<?
						$now = date('Y');
						$future = $now + 5;
						for ($i = $now; $i <= $future; $i++) {
						?>
					<option value="<?=$i;?>"><?=$i;?></option>
						<?
						}
					?>
				</select>
                        </span>
</div>

</div>


</div>


</div>
</div>	
</li>


<li>

<div id="continer_div1" class="view_wrapper margin-top-30">

<div class="fg-outlined" style=" border-color: #999; background: rgb(255, 255, 255);width:99%;">


<ul class="widget-hiw-navigation clearfix big-tabs"> 
<li class="active" style="color: #fff;"> <a href="#card-payment" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-credit-card fa-lg"></i></span> <span class="hidden-xs">Credit Card</span> </a> </li> 
<li> <a href="#echeck" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-check fa-lg"></i></span> <span class="hidden-xs"> eCheck</span> </a> </li> 
<li> <a href="#direct-debit" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-bitcoin fa-lg"></i></span> <span class="hidden-xs">Bitcoin</span> </a> </li> 
</ul> 

<div class="tab-content"> 

<div class="tab-pane active" id="card-payment"> 


<div class="row">
<div class="row" style="margin-left: 20px; margin-right: 20px;">
<div class="col-md-10" style="padding: 10px;">
 <!-- START FORM -->
        
    <div class="card-container">

<div class="form-container active">
<div class="form-group">
			    <span class="left control-label" for="cc_name"><label>Card Name:</label></span>
			    <span class="right">
	<input type="text" class="form-control" placeholder="Customer Name" style="width:100%; margin-top:-6px;" id="cc_name" name="cc_name">
			    </span>
		  	</div>
<div class="form-group">
			    <span class="left control-label" for="cc_number"><label>Card Number:</label></span>
			    <span class="right">
	<input type="tel" class="input-lg form-control cc_number" autocomplete="cc_number" placeholder="****-****-****-****" style="width:100%; margin-top:-6px;" id="cc_number" name="cc_number" required >
			    </span>
		  	</div>

			<div class="form-group">

				    <span class="pull-left control-label" style="margin-top:8px;" for="cc_name"><label>Expiry Date:</label></span>
			    <div class="left col-md-3 col-sm-3"style="margin-right:10px;">
			<select name="cc_expiry_month" class="form-control" style="width:100px;margin-right:6px;" for="cc_exp_month" id="cc_exp_month" placeholder="00">
					<? for ($i = 1; $i <= 12; $i++) {
					       $month = str_pad($i, 2, "0", STR_PAD_LEFT);
					       $month_text = date('M',strtotime('2015-' . $month . '-01')); ?>
					<option value="<?=$month;?>"><?=$month;?> - <?=$month_text;?></option>
					<? } ?>
				</select>
			    </div>

	<div class="col-md-3 col-sm-3"style="margin-right:2px;">
               
<select name="cc_expiry_year" class="form-control" style="width:84px;margin-right:1px;">
					<?
						$now = date('Y');
						$future = $now + 15;
						for ($i = $now; $i <= $future; $i++) {
						?>
					<option value="<?=$i;?>"><?=$i;?></option>
						<?
						}
					?>
				</select>
                      </div>
			    <div class="col-sm-2 col-md-2 right">
   <input id="cc_security" name="cvv" type="tel" class="input-lg form-control cc_security" autocomplete="off" style="width:60px; margin-top: 4px;" placeholder="***" required/>
			    </div>

<div class="form-group-separator"></div>
		  </div>
      <div class="form-group" style="display: none;">
        <label for="numeric" class="control-label">Restrict numeric</label>
        <input id="numeric" type="tel" class="input-lg form-control" data-numeric>
      </div>
</div>


    </div><!-- card-container-->

<!-- END FORM -->

</div><!-- END col-md-10-->
</div><!-- END .Row-->
</div><!-- END ROW -->

</div><!-- END TAB-PANE -->

<div class="tab-pane" id="echeck"> 

<br />
<div class="echeck_content">
<div class="row" style="margin-left: 20px; margin-right: 20px;">
<div class="col-sm-12"> 
<div class="alert alert-warning"> <strong>Your account</strong> is not set up to accept <a>echeck </a> or direct debit transactions at this time.
</div>
</div>
<div class="well" style="display:none; padding: 20px;">
 
 <div class="form-group">			
<label class="col-sm-4 control-label">Check #:</label> 
<div class="col-sm-7">
<input type="text" class="form-control input-lg" style="width:50%;" name="Check_number" value="" id="check_number" placeholder="1234" id="check_number" name="check_number" /></div>
 </div>


<div class="form-group"> 
<label class="col-sm-4 control-label" for="bank_routing_number">Routing #:</label> 
<div class="col-sm-7">
id="routing" type="text" size="25" class="js-routing-transit-number" pattern="\d*" x-autocompletetype="routing-transit-number" placeholder="122105278" required /> </div> 
</div>

<div class="form-group"> 
<label class="col-sm-4 control-label" for="bank_account_number">Account #:</label> 
<div class="col-sm-7"> <input type="text" value="" class="form-control input-lg" placeholder="12345678" id="bank_account_number" name="bank_account_number" /></div> 
</div>

</div>

<div class="form-group-separator"></div>

</div><!-- END WELL -->
</div> 
</div> 

<div class="tab-pane" id="direct-debit"> 
<br />
<div class="row" style="margin-left: 20px; margin-right: 20px;"> 

<div class="col-sm-12"> 
<div class="alert alert-warning"> <strong>Your account </strong> is not set up to process bitcoin transactions at this time. <a>.</a>
</div> 
</div> 

<div class="form-group-separator"></div>

</div><!-- END ROW -->
</div><!-- END TAB-PANEl -->
</div><!-- END. TAB-PANE -->


</div><!-- /.fg-outlined -->
</div><!-- /#continer_div1 -->
  	
</li>


<li class="inkdesk_form element_container_li">
<div id="div_24" class="remove_error_container">
<div style="display:none;" id="info24" class="form_desc" original-title=""></div>
	<div id="transaction_customer_details">
<span id="break_line24" class="element_drag"></span>
<div style="display:block;" id="info24"></div>
<span class="fg-outline">
<div class="inner-payment-section" id="total24">
<div class="inner-payment-head margin-top-20">
<span class="left" id="total_head_24">Is this an </span>
<span class="left"style="width: 42%; margin-top:-8px;">
<select id="customer_id" class="form-control" style="width 111px;" name="customer_id" <? if ($customers == FALSE) { ?> disabled="disabled"<? } ?>>
	<? if ($customers == FALSE) { ?><option value="">You do not have any customers</option><? } ?>
					<option value="">existing customer</option>
					<? if (is_array($customers)) { ?>
					<? foreach ($customers as $customer) { ?>
					<option value="<?=$customer['id'];?>"><?=$customer['cc_lname'];?>, <?=$customer['cc_name'];?><? if (!empty($customer['email'])) { ?> (<?=$customer['email'];?>)<? } ?></option>
					<? } ?>
					<? } ?>
				</select>

</span>
<span class="pull-right">or
<button class="btn-link btn-md" type="button" data-toggle="collapse" data-target="#collapseNewCustomer" aria-expanded="false" aria-controls="collapseNewCustomer">
 a new customer?
</button>
</span>

</div>

<div class="inner-payment-content">
<div class="single-payment-wrapper">
</div>
</div>
<input class="element" placeholder="" type="hidden" name="text_element24" id="text_element24">
<p style="display:none" class="ink_desc" id="list_item_instruction_para24"></p>
</div>
</span>
</div>

</div>
</li>


<div class="collapse" id="collapseNewCustomer">

<li>

<div id="continer_div1" class="view_wrapper" style="height:auto;">

<div class="fg-outlined" style="font-family: 'Source Sans Pro'; border-color: #999; background: rgb(255, 255, 255);width:410px;>

<!-- BEGIN CUSTOMER DETAILS -->
  <div class="widget">

<h3 class="center clearfix margin-bottom-10" style="padding-top:10px;"><b> Customer Details</b></h3>

<div id="address_content" class="address" style="display: ;">

	  	<div class="form-group">
		    <span class="col-sm-4 left"><label>Email</label></span>
		    <span class="right col-sm-8">
		   <input type="text" class="mark_empty form-control" placeholder="customer@example.com" id="email" name="email" />
		    </span>
	  	</div>

<div class="form-group" style="display:inline-block ;">
		    <span class="col-sm-3 left"><label>Customer</label></span>
		    <span class="col-sm-4 left">
<input class="mark_empty form-control" placeholder="First Name" type="text" id="first_name" name="first_name" />
		    </span>
		    <span class="col-sm-5 right">
<input class="mark_empty form-control" placeholder="Last Name" type="text" id="last_name" name="last_name" />
		    </span>
	  	</div>


  <div class="form-group" style="display:inline-block ;">
                        <span class="left col-sm-4" for="company-dd"><label>Company</label></span>
<span class="right col-sm-8">
                      <input type="text" class="form-control" id="company" name="company" placeholder="Optional" />
  </span>
                    </div>

<div class="form-group" style="display:inline-block ;">
		    <span class="left col-sm-4"><label>Phone</label></span>
		    <span class="right col-sm-8">
            <input type="text" class="form-control" id="phone" name="phone" placeholder="111-222-3333" />
</span>
		    </div>


	  	<div id="shipping-address" class="address" style="display:inline-block ;">
	  		<div class="form-group" style="display:inline-block ;">
			    <span class="left col-sm-4"><label>Address</label></span>
			    <span class="col-sm-8 right">
  <input type="text" style="width:250px;" class="form-control" name="address_1" id="address_1" placeholder="Billing Address"/>
			    </span>
</div>

	  		<div class="form-group" style="display:inline-block ;">
			    <span class="left col-sm-4"><label>Address 2</label></span>
  <span class="right col-sm-8">
  <input type="text" class="form-control" name="address_2" id="address_2" placeholder="Suite#, PO Box#, Apt#"/>
			    </span>
			</div>
 <div class="clearfix" style="height:12px;"></div>

                   <div class="form-group" style="display:inline-block ;">
			    <span class="left col-sm-4"><label>Country</label></span>
			    <span class="col-sm-8 right">
			<select style="width:150px;" id="country" class="form-control" name="country" geoname="country_short"><option value=""></option><? foreach ($countries as $country) { ?><option value="<?=$country['iso2'];?>"><?=$country['name'];?></option><? } ?></select>
			    </span>
</div>

			<div class="form-group" style="display:inline-block ;">
			    <span class="left col-sm-4">
		  <input type="text"style="width:150px;" class="form-control" name="city" id="city" placeholder="city" geoname="locality"/>
			    </span>

	<span class="left col-sm-5">
                   <input type="text" class="form-control input-sm" name="state" id="state" placeholder="State" />
<select style="width:110px;" id="state_select" class="form-control input-sm" name="state_select" placeholder="State" geoname="administrative_area_level_1_short"><option value=""></option><? foreach ($states as $state) { ?><option value="<?=$state['code'];?>"><?=$state['name'];?></option><? } ?></select>
                      </span>
			    <span class="col-sm-3 right">
   <input type="text" name="postal_code" class="form-control" id="postal_code" placeholder="zipcode" geoname="postal_code"/>
			    </span>

</div><!-- /.form-group -->

</div><!-- /.WIDGET -->
</div><!-- /.address_content-->



</div><!-- /.fg-outlined -->

</div><!-- /continer_div1 -->

</li>
</div><!-- /#collapseNewCustomer -->


	
<li>


<div id="continer_div1" class="view_wrapper" style="height:auto;">

<div class="fg-outlined" style="font-family: 'Source Sans Pro'; border-color: #999; background: rgb(255, 255, 255); width:410px;>

<!-- BEGIN GATEWAY CHOICE -->
 <div class="col-md-12">

<div class="clearfix" style="height:20px;"></div>

<div id="transaction_gateway" class="row">

	  	<div class="form-group">
	<label for="gateway_type" class="col-sm-4 control-label">Gateway</label>	
<div class="col-sm-8 security pull-right"> 
<? if (!empty($gateways)) { ?>
		<? if (count($gateways) == 1) { ?>

<p>Transaction will be processed on your <?=$gateways[0]['gateway'];?> gateway.</p>
		<? } else { ?>
			<div class="form-inline">

				<div>
		<input type="radio" name="gateway_type" value="default" checked="checked" /> Default Gateway
				</div>
				      <div>
<input type="radio" name="gateway_type" value="specify" /> Select gateway: 
                                      </div>
                                 <div>
					<select name="gateway" style="width:140px;">
						<? foreach ($gateways as $gateway) { ?>
							<option value="<?=$gateway['id'];?>" <? if ($this->user->Get('default_gateway_id') == $gateway['id']) {?> selected="selected"<? } ?>><?=$gateway['gateway'];?></option>
						<? } ?>
					</select>
				</div>
			</div>
		<? } ?>

<div class="clearfix" style="height: 20px;"></div>

<div class="accepted" style="display:none;">
<span><img src="<?=branded_include('img/Z5HVIOt.png');?>" width="28" height="28" /></span>
<span><img src="<?=branded_include('img/Le0Vvgx.png');?>" width="28" height="28" /></span>
<span><img src="<?=branded_include('img/D2eQTim.png');?>" width="28" height="28" /></span>
<span><img src="<?=branded_include('img/Pu4e7AT.png');?>" width="28" height="28" /></span>
<span><img src="<?=branded_include('img/ewMjaHv.png');?>" width="28" height="28" /></span>
<span><img src="<?=branded_include('img/3LmmFFV.png');?>" width="28" height="28" /></span>
</div>

</div>
	
<? } ?>

</div>


</div><!-- END ROW -->

</div><!-- /.fg-outlined -->
</div><!-- /#continer_div1 -->

</li>

<li class="form_button" style="">

</li>


</ul>

<div class="transaction submit">
	<input type="submit" name="go_transation" class="margin-top-20 btn btn-success btn-lg btn-block center" value="Submit Transaction" />
</div>
</form>

</form>
</div><!--/.content-wrapper-->
</div><!--/.#form-->

</div><!--/.row-->


<script type="text/javascript">
	$('#currency_converter, #amount_other').change(function(e){
		if(e.target.id == 'amount_other') {
			$('#currency_converter').attr('disabled', 'disabled');
		} else if(e.target.id == 'currency_converter') {
			$('#amount_other').attr('disabled', 'disabled');
		}
		$('p#curr_loader').html('Loading...');
		$.ajax({
			url: 'currency_ajax',
			dataType: 'json',
			type: 'post',
			data: {
				amount: $('#amount_other').val(),
				from_Currency: $('#currency_converter').val()
			},
			success: function(data) {
				if(data.status === 200) {
					$('#amount').val(data.converted);
					$('span#target_amount').html(data.converted);
					$('p#curr_loader').html('');
				} else {
					$('p#curr_loader').html(data.message);
				}

				$('#currency_converter').removeAttr('disabled');
				$('#amount_other').removeAttr('disabled');
			},
			error: function() {
				$('p#curr_loader').html('Internal error, Please try later');
			}
		});
	});
</script>




<script type="text/javascript">

new Formatter(document.getElementById('cc_number'), {
  'pattern': '{{9999}}-{{9999}}-{{9999}}-{{9999}}'
});

$('#cc_number').formatter({
  'pattern': '{{999}}-{{999}}-{{999}}-{{9999}}',
  'persistent': true
});


new Formatter(document.getElementById('cc_security'), {
  'pattern': '{{999}}
});

$('#cc_security').formatter({
  'pattern': '{{999}}',
  'persistent': true
});

new Formatter(document.getElementById('phone'), {
  'pattern': '({{999}}) {{999}}.{{9999}}',
  'persistent': true
});
$('#phone').formatter({
  'pattern': '({{999}}) {{999}}-{{9999}}',
  'persistent': true
});


</script>




<script type="text/javascript">
var Checkout = function () {

    return {
        init: function () {
            
            $('#checkout').on('change', '#checkout-content input[name="account"]', function() {

              var title = '';

              if ($(this).attr('value') == 'register') {
                title = 'Step 2: Account &amp; Billing Details';
              } else {
                title = 'Step 2: Billing Details';
              }    

              $('#billing-address .accordion-toggle').html(title);
            });

        }
    };

}();
</script>




</div><!-- /.form_column_two-->

</div><!-- /.form-content -->

</div><!-- /.form-content-wrap -->

</div><!-- /#form-container-->


<!-- anooj -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>


<!-- richard -->

<script>
$input.bank('RoutingTransitNumber', 'US');
$input.toggleClass('valid', $.bank.validate('RoutingTransitNumber', 'US', $input.val()));

</script>





<!-- START: anoop -->
 <script type="text/javascript">
            
            // Ajax post
            $(document).ready(function() {
                $("#complete").click(function(event) {
                    event.preventDefault();
                  	var data = $("#new-customer").serialize();
                    jQuery.ajax({
                        type: "POST",
                        url: "<?=site_url('transactions/post');?>",
                        dataType: 'json',
                        data: data,
                        success: function(response) {
                           $("#show-info-message").html(response.message);
                        }
                    });
                });
            });
        </script>  
<!-- END: anoop -->

</div><!-- /#billing-form -->

<?=$this->load->view(branded_view('cp/footer'));?>