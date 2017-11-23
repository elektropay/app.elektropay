<?=$this->load->view(branded_view('cp/header'), array('head_files' => '
<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/formmapper.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/jquery.bank.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/cssua.min.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/card.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/form.transaction.js') . '"></script>')); ?>


<link href="https://everpayinc.com/assets/app/css/skeuocard.reset.css" rel="stylesheet" type="text/css" media="screen" />

<link href="https://everpayinc.com/assets/app/css/skeuocard.css" rel="stylesheet" type="text/css" media="screen" />

<style type="text/css">

.card-container {
            width: 100%;
            max-width: 350px;
            margin: 50px auto;
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


</style>
		

<!-- BEGIN VIRTUAL TERMINAL PAGE -->
<div id="billing-form">

<div class="content-wrapper">

<div class="chart clearfix" style="height: auto;">


<? if ($this->user->Get('client_type_id') == '3') { ?>
<p class="warning"><span>As a <b><?=$this->user->Get('client_type');?></b></p>
    <div class="card-container">
        <div class="card-wrapper"></div>

        <div class="form-container active">
        
		<form method="post" action="#" role="form">
                <input placeholder="Card number" type="text" name="number">
                <input placeholder="Full name" type="text" name="name">
                <input placeholder="MM/YY" type="text" name="expiry">
                <input placeholder="CVC" type="text" name="cvc">
            </form>
        </div>
    </div>

	</div>


<? } elseif ($this->user->Get('client_type_id') == '1') { ?>



<p class="lead">
<span>As an <b><?=$this->user->Get('client_type');?></b>, Put New Payment Form</span>

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

</p>


<? } ?>

<div class="row-fluid">

<div id="form_container">

            <!--Form content-->
<div class="form-content-wrap" style="background-color: rgb(255, 255, 255); padding-bottom:60px;">
                
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
<div id="continer_div1" class="view_wrapper" style="font-family: 'Source Sans Pro';">

<div class="fg-outlined" style="font-family: 'Source Sans Pro'; border-color: #999; background: rgb(255, 255, 255);">

<div class="inner-payment-section" id="total" style="">
<div class="inner-payment-head" style="font-family: 'Source Sans Pro';">
<span id="curr_loader" class="left" style="font-family: 'Source Sans Pro'; color: rgb(0, 0, 0);">Amount: $</span>
<span id="baseprice" class="left" style="width: 100px;font-family: 'Source Sans Pro'; color: rgb(0, 0, 0);"> 

 <input type="hidden" name="amount" class="required form-control" id="amount" placeholder="Dollar Amount"/>
<input onfocus="view_select('continer_div13',13)" type="text" name="amount_other" id="amount_other" placeholder="0.00" maxlength="9" />
</span>
<span class="pull-right" style="margin-top:-5px;">
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
<select style="width:99%;" name="coupon" class="form-control">
<option value="">No Coupons</option>
</select> 
<? } ?>
					<? if (!empty($coupons)) { ?>
						<? if ($coupons === TRUE) { ?>
	<input type="text" class="form-control" name="coupon" value="" />
						<? } else { ?> 
<span class="left fg-outline" style="margin-top:-10px;">
				<select class="form-control" style="width:96%;" name="coupon">
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
<span class="right inner-payment-head" style="margin-left:10px;margin-right:10px; margin-top:-10px; text-align: center;">Total: $<span id="target_amount"></span> USD</span>

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
<button class="btn-link btn-xs" type="button" data-toggle="collapse" data-target="#collapseRecurring" aria-expanded="false" aria-controls="collapseNewCustomer">
 <i class="fa fa-refresh"></i>&nbsp; Make This A Recurring charge?
</button>
</span></label>
</div>
</li>
</ul>
</div>
</li>


<li>
<div class="collapse" id="collapseRecurring">
  
<div id="continer_div1" class="view_wrapper margin-top-30">

<div class="fg-outlined" style=" border-color: #999; background: rgb(255, 255, 255);">
<div class="well">
<!-- BEGIN PAYMENT METHOD -->
 <div id="payment-method" class="address">
<h3> Recurring Details</h3>
<br />
<div class="form-group">			
<label class="col-sm-2" for="interval">Charge Interval</label> 
<div class="col-sm-4 col-md-3">
<input type="text" class="form-control" id="interval" name="interval" /></div>
	
<p class="help" style="margin-top:8px;"><b>(Days)</b> Customer will be charged every Interval days.</p>
			
 </div>

 <div class="form-group">			
<label class="col-sm-2" for="free_trial">Free Trial</label> 
<div class="col-sm-4 col-md-3">
<input class="form-control" type="text" id="free_trial" name="free_trial" />
</div>
<div class="help" style="margin-top:8px;"><b>(Days)</b> Wait this many days before making the first charge.</div>
 </div>


<div class="form-group">
<label class="col-sm-2" for="start_date">Start Date</label>
<div class="col-sm-4 col-md-6">
				<select class="" name="start_date_day">
					<? for ($i = 1; $i <= 31; $i++) { ?>
					<option value="<?=$i;?>"<? if (date('j') == $i) { ?> selected="selected" <? } ?>><?=$i;?></option>
					<? } ?>
				</select>&nbsp;&nbsp;
				<select class="" name="start_date_month">
					<? for ($i = 1; $i <= 12; $i++) {
					       $month = str_pad($i, 2, "0", STR_PAD_LEFT);
					       $month_text = date('M',strtotime('2010-' . $month . '-01')); ?>
					<option value="<?=$month;?>"<? if (date('m') == $month) { ?> selected="selected" <? } ?>><?=$month_text;?></option>
					<? } ?>
				</select>
				&nbsp;&nbsp;
				<select class="" name="start_date_year">
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

<p class="help">Start the recurring charge at this date.  If a free trial is set, it will delay the first charge from this date.</p>

</div>
	</div>		

<div class="radio-list">
<label class="col-sm-2" for="recurring_end">Recur Until</label> Forever&nbsp;&nbsp;&nbsp;
<input type="radio" id="recurring_end" name="recurring_end" value="forever" checked="checked" />
                        </label>
                <label for="occurrences" style="display: none;">Occurrences:
                          <input type="radio" id="recurring_end" name="recurring_end" value="occurrences" /> 
                                <input type="text" id="occurrences" name="occurrences" /> charges
                        </label>
                       <label class="col-sm-7 col-md-7">
                        <input type="radio" id="recurring_end" name="recurring_end" value="date" /> Date: 
				<select class="month_select" name="end_date_day">
					<? for ($i = 1; $i <= 31; $i++) { ?>
					<option value="<?=$i;?>"><?=$i;?></option>
					<? } ?>
				</select>&nbsp;&nbsp;

				<select class="month_select" name="end_date_month">
					<? for ($i = 1; $i <= 12; $i++) {
					       $month = str_pad($i, 2, "0", STR_PAD_LEFT);
					       $month_text = date('M',strtotime('2010-' . $month . '-01')); ?>
					<option value="<?=$month;?>"><?=$month_text;?></option>
					<? } ?>
				</select>
				&nbsp;&nbsp;
				<select class="month_select" name="end_date_year">
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
                        </label>
</div>

</div>


</div>
</div>
</li>	


<li>

<div id="continer_div1" class="view_wrapper margin-top-30">

<div class="fg-outlined" style=" border-color: #999; background: rgb(255, 255, 255);">


<ul class="nav nav-tabs center lead"> 
<li class="active" style="color: #fff;"> <a href="#card-payment" data-toggle="tab"> <span class="visible-xs"><i class="fa-home"></i></span> <span class="hidden-xs">Credit Card</span> </a> </li> 
<li> <a href="#echeck" data-toggle="tab"> <span class="visible-xs"><i class="fa-user"></i></span> <span class="hidden-xs"> eCheck</span> </a> </li> 
<li> <a href="#direct-debit" data-toggle="tab"> <span class="visible-xs"><i class="fa-envelope-o"></i></span> <span class="hidden-xs">Bitcoin</span> </a> </li> 
</ul> 

<div class="tab-content"> 

<div class="tab-pane active" id="card-payment"> 
<br />
<div class="row">
<div class="row" style="margin-left: 20px; margin-right: 20px;">
<div class="col-md-10" style="padding: 10px;">
 <!-- START FORM -->
        
         <!--<div class="credit-card-input no-js" id="skeuocard">
            <p class="no-support-warning">
              Either you have Javascript disabled, or you're using an unsupported browser, amigo! That's why you're seeing this old-school credit card input form instead of a fancy new Skeuocard. On the other hand, at least you know it gracefully degrades...
            </p>
            <label for="cc_type">Card Type</label>
            <select name="cc_type">
              <option value="">...</option>
              <option value="visa">Visa</option>
              <option value="discover">Discover</option>
              <option value="mastercard">MasterCard</option>
              <option value="maestro">Maestro</option>
              <option value="jcb">JCB</option>
              <option value="unionpay">China UnionPay</option>
              <option value="amex">American Express</option>
              <option value="dinersclubintl">Diners Club</option>
            </select>
            <label for="cc_number">Card Number</label>
            <input type="text" name="cc_number" id="cc_number" placeholder="XXXX XXXX XXXX XXXX" maxlength="19" size="19">
            <label for="cc_exp_month">Expiration Month</label>
            <input type="text" name="cc_exp_month" id="cc_exp_month" placeholder="00">
            <label for="cc_exp_year">Expiration Year</label>
            <input type="text" name="cc_exp_year" id="cc_exp_year" placeholder="00">
            <label for="cc_name">Cardholder's Name</label>
            <input type="text" name="cc_name" id="cc_name" placeholder="John Doe">
            <label for="cc_cvc">Card Validation Code</label>
            <input type="text" name="cc_cvc" id="cc_cvc" placeholder="123" maxlength="3" size="3">
          </div> -->

        <!-- END FORM -->

<div>
        <!-- START FORM --> 

<div class="card-wrapper"></div>

        <div class="form-container active">

     <!--<form action="">
				<div class="form-group">
			    <span class="left control-label" for="cc_name"><label>Card Name:</label></span>
			    <span class="right">
	<input type="text" class="form-control" placeholder="Card number" style="width:100%;" id="cc_name" name="cc_name">
			    </span>
		  	</div>

  <label for="cc_type" style="display:none;">Card Type</label>
            <select class="form-control" style="display:none;" name="cc_type">
              <option value="">...</option>
              <option value="visa">Visa</option>
              <option value="discover">Discover</option>
              <option value="mastercard">MasterCard</option>
              <option value="maestro">Maestro</option>
              <option value="jcb">JCB</option>
              <option value="unionpay">China UnionPay</option>
              <option value="amex">American Express</option>
              <option value="dinersclubintl">Diners Club</option>
            </select>
			  	<div class="form-group">

<span class="control-label left" for="cc_number"><label>Card Number:</label></span>
<span class="right">
<input type="text" class="form-control input-lg" style="width:100%;" value="" placeholder="••••  ••••  ••••  ••••" id="cc_number" name="cc_number" maxlength="18" />
</span>
			  	</div>

			<div class="form-group">

				    <span class="pull-left control-label" style="margin-top:8px;" for="cc_name"><label>Expiry Date:</label></span>
			    <div class="left col-md-3 col-sm-3"style="margin-right:15px;">
			<select name="cc_expiry_month" class="form-control" style="width:100px;margin-right:6px;" for="cc_exp_month" id="cc_exp_month" placeholder="00">
					<? for ($i = 1; $i <= 12; $i++) {
					       $month = str_pad($i, 2, "0", STR_PAD_LEFT);
					       $month_text = date('M',strtotime('2015-' . $month . '-01')); ?>
					<option value="<?=$month;?>"><?=$month;?> - <?=$month_text;?></option>
					<? } ?>
				</select>
			    </div>

	<div class="col-md-3 col-sm-3"style="margin-right:6px;">
               
<select name="cc_expiry_year" class="form-control" style="width:80px;margin-right:2px;">
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
			    <div class="col-sm-2 col-md-2">
   <input type="text" class="form-control" id="cc_security" placeholder="CVC" maxlength="3" size="3" name="cvv" style="width:60px; margin-top: 8px;" />
			    </div>

<div class="form-group-separator"></div>
		  </div>
</div>
 </div> --> 

     </form>
        </div>
    </div>

        <!-- END FORM -->
      </div>

</div><!-- END col-md-12-->
</div><!-- END CREDIT-CARD-CONTENT -->
</div><!-- END ROW -->

</div><!-- END TAB-PANE -->

<div class="tab-pane" id="echeck"> 

<br />
<div class="echeck_content">
<div class="row" style="margin-left: 20px; margin-right: 20px;">
<div class="col-sm-12"> 
<div class="alert alert-warning"> <strong>Your account</strong>  is not set up to <a>echeck </a> or direct debit transactions at this time.
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


<li data-targetlogic="1" data-sourcelogic="1" data-visible="block" class="inkdesk_form element_container_li">
<div id="div_24" class="remove_error_container">
<div style="display:none;" id="info24" class="form_desc" original-title=""></div>
<span id="break_line24" class="element_drag"></span>
<div style="display:block;" id="info24"></div>
<span class="fg-outline">
<div class="inner-payment-section" id="total24">
<div class="inner-payment-head margin-top-20">
<span class="left" id="total_head_24">Is this a </span>
<span class="left"style="width: 40%; margin-top:-8px;">
<select id="customer_id" class="form-control" style="width 95%;" name="customer_id" <? if ($customers == FALSE) { ?> disabled="disabled"<? } ?>>
	<? if ($customers == FALSE) { ?><option value="">You do not have any customers</option><? } ?>
					<option value="">Existing Customer</option>
					<? if (is_array($customers)) { ?>
					<? foreach ($customers as $customer) { ?>
					<option value="<?=$customer['id'];?>"><?=$customer['cc_lname'];?>, <?=$customer['cc_name'];?><? if (!empty($customer['email'])) { ?> (<?=$customer['email'];?>)<? } ?></option>
					<? } ?>
					<? } ?>
				</select>
</span>
<span class="pull-right">
<button class="btn-link btn-xs" type="button" data-toggle="collapse" data-target="#collapseNewCustomer" aria-expanded="false" aria-controls="collapseNewCustomer">
 <i class="fa fa-user"></i>&nbsp; A New Customer?
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
</li>


<li>


<div class="collapse" id="collapseNewCustomer">
  <div class="well">

<h3 class="center clearfix margin-bottom-10"> Customer Details</h3>

<div id="address_content" class="address" style="display: ;">

	  	<div class="form-group">
		    <label class="col-sm-2 col-md-2 control-label">Email</label>
		    <div class="col-sm-10 col-md-8">
		   <input type="text" class="mark_empty form-control" rel="customer@example.com" id="email" name="email" />
		    </div>
	  	</div>

<div class="form-group" style="display: ;">
		    <label class="col-sm-2 col-md-2 control-label">Customer</label>
		    <div class="col-sm-4">
<input class="mark_empty form-control" rel="First Name" type="text" id="first_name" name="first_name" />
		    </div>
		    <div class="col-sm-4 col-md-4">
<input class="mark_empty form-control" rel="Last Name" type="text" id="last_name" name="last_name" />
		    </div>
	  	</div>


  <div class="form-group">
                        <label class="col-sm-2 col-md-2 control-label" for="company-dd">Company</label>
<div class="col-sm-10 col-md-8">
                      <input type="text" class="form-control" id="company" name="company" placeholder="Company" />
  </div>
                    </div>

<div class="form-group">
		    <label class="col-sm-2 col-md-2 control-label">Phone</label>
		    <div class="col-sm-10 col-md-8">
		    	<div class="has-feedback">
            <input type="text" class="form-control" id="phone" name="phone" placeholder="111-222-3333" />
	<i class="ion-information-circled form-control-feedback" data-toggle="tooltip" title="Your customer will get a notification of this payment">
			      	</i>
				</div>
		    </div>
	  	</div>
</div>

	  	<div id="shipping-address" class="address">
	  		<div class="form-group">
			    <label class="col-sm-2 col-md-2 control-label">Address</label>
			    <div class="col-sm-6 col-md-5">
  <input type="text" class="form-control" name="address_1" id="address_1" placeholder="Billing Address"/>
			    </div>
  <div class="col-sm-2 col-md-3">
  <input type="text" class="form-control" name="address_2" id="address_2" placeholder="Suite #"/>
			    </div>
			</div>

                   <div class="form-group">
			    <label class="col-sm-2 col-md-2 control-label">Country</label>
			    <div class="col-sm-8 col-md-6">
			<select id="country" class="" name="country" geoname="country_short"><option value=""></option><? foreach ($countries as $country) { ?><option value="<?=$country['iso2'];?>"><?=$country['name'];?></option><? } ?></select>
			    </div>
</div>

			<div class="form-group">
			    <div class="col-sm-3 col-sm-offset-2">
		  <input type="text" class="form-control" name="city" id="city" placeholder="city" geoname="locality"/>
			    </div>

	<div class="col-sm-3">
                   <input type="text"  class="form-control input-sm" name="state" id="state" placeholder="State" />
<select id="state_select" class="form-control input-sm" name="state_select" placeholder="State" geoname="administrative_area_level_1_short"><option value=""></option><? foreach ($states as $state) { ?><option value="<?=$state['code'];?>"><?=$state['name'];?></option><? } ?></select>
                      </div>
			    <div class="col-sm-2 col-md-2">
   <input type="text" name="postal_code" class="form-control" id="postal_code" placeholder="zipcode" geoname="postal_code"/>
			    </div>
		  	</div>

</div><!-- /.well -->
</div><!-- /.address -->
</div><!-- /#collapseNewCustomer -->


</li>



	
<li>


<div id="continer_div1" class="view_wrapper" style="height:auto;">

<div class="fg-outlined" style="font-family: 'Source Sans Pro'; border-color: #999; background: rgb(255, 255, 255);">

<!-- BEGIN GATEWAY CHOICE -->
 <div class="col-md-12">

<div class="clearfix" style="height: 20px;"></div>

<div class="row">

	  	<div class="form-group">
	<label for="inputPassword3" class="col-sm-2 col-md-2 control-label">Gateway</label>	
<div class="col-sm-6 col-md-9 security pull-left"> 
<? if (!empty($gateways)) { ?>
		<? if (count($gateways) == 1) { ?>

<p>Transaction will be processed on your <?=$gateways[0]['gateway'];?> gateway.</p>
		<? } else { ?>
			<div class="form">

				<div>
		<input type="radio" name="gateway_type" value="default" checked="checked" /> Use my default gateway
				</div>
				      <div>
<input type="radio" name="gateway_type" value="specify" /> Select gateway: 
                                      </div>
                                 <div>
					<select name="gateway" style="width:50%;">
						<? foreach ($gateways as $gateway) { ?>
							<option value="<?=$gateway['id'];?>" <? if ($this->user->Get('default_gateway_id') == $gateway['id']) {?> selected="selected"<? } ?>><?=$gateway['gateway'];?></option>
						<? } ?>
					</select>
				</div>
			</div>
		<? } ?>
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
</div>

</div><!-- /.fg-outlined -->
</div><!-- /#continer_div1 -->

</li>

<li class="form_button" style="font-family: 'Source Sans Pro';">
<input type="hidden" name="save" style="font-family: 'Source Sans Pro';">
  	<div class="form-group">
	    	<div class="col-sm-offset-2 col-sm-8">
	     <button type="submit" class="margin-top-20 btn btn-success btn-lg btn-block center" id="complete" name="go_transaction" value="Submit Transaction" /> Submit Transaction <i class="fa fa-check"></i></button>
    		</div>
	  	</div>
</li>

<li><br /></li>

</ul>
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





 <script>
        new Card({
            form: document.querySelector('form'),
            container: '.card-wrapper'
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

</div><!-- /#billing-form -->

<!-- anooj -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script>
  $(function(){ 

       $("#address_1").formmapper({details:"#address_content"}); 
		card = new Skeuocard($("#skeuocard"));
        });
</script>



<!-- richard -->

<script>
$input.bank('RoutingTransitNumber', 'US');
$input.toggleClass('valid', $.bank.validate('RoutingTransitNumber', 'US', $input.val()));
</script>



<!-- anooj -->
<script type="text/javascript" src="<?=branded_include('js/skeuocard.min.js');?>"></script>

    <script>

      $(document).ready(function(){
        var isBrowserCompatible = 
          $('html').hasClass('ua-ie-10') ||
          $('html').hasClass('ua-webkit') ||
          $('html').hasClass('ua-firefox') ||
          $('html').hasClass('ua-opera') ||
          $('html').hasClass('ua-chrome');

        if(isBrowserCompatible){
          window.card = new Skeuocard($("#skeuocard"), {
            debug: true
          });
        }
        $('#enable-anyway-btn').click(function(){
          window.card = new Skeuocard($("#skeuocard"), {
            debug: false
          });
        });
      });

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