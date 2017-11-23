<?= $this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/form.coupon.js') . '"></script>')); ?>
<style>
select {
text-transform: none;
height: 36px;
border-radius: 4px;
}

.input-group .input-group-addon {
    border-radius: 0!important;
}
.input-daterange .input-group-addon {
    width: auto;
    min-width: 16px;
    padding: 4px 5px;
    font-weight: 400;
    line-height: 1.428571429;
    text-align: center;
    text-shadow: 0 1px 0 #fff;
    vertical-align: middle;
    background-color: #eee;
    border: solid #ccc;
    border-width: 1px 0;
    margin-left: -5px;
    margin-right: -5px;
}

.couponForm {
    float: left;
    width: 94.8%;
    margin-top: 5px;
}

.couponInfo {
float: right;
    padding: 25px 3.8%;
    background: #f7f6f1;
    float: left;
    width: 99.489%;
}
.couponInfo p{
    font: normal 400 14px/25px 'proxima-nova',Arial,sans-serif;
    color: #333333;
}

.sectionTitle {
    font: normal 400 24px/30px 'proxima-nova',Arial,sans-serif;
    color: #202020;
    margin-bottom: 10px;
}

.contentPad {
    padding: 20px 0;
    margin-top: -25px;
}

.fLt {
    float: left;
}

.reqfield {
    font: 400 14px/14px 'proxima-nova', Arial, sans-serif;
    color: red;
}
.marB50 {
    margin-bottom: 20px;
}

.clearfix {
    display: block;
}

.form-body {
    padding: 20px;
    margin-top: 0px;
    margin-bottom: 20px;
    background: #fafbfc;
    border: 0;
	border-radius: 5px;
}

.form-horizontal {
    margin-top: 2px;
}

.help-block {
    margin-top: 12px!important;
    margin-bottom: 5px;
	display: inline-block;
	margin-left: 15px;
	font-size:11px!important;
}
</style>


<div class="wrap contentPad clearfix" itemscope="" itemtype="http://schema.org/Organization">

<div class="row">

<div class="col-md-7">
		<section class="couponForm clearfix" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
			<h4 class="sectionTitle">Coupon <span itemprop="name">Description</span></h4>
			<span class="subSectionTitle block"></span>

			<div class="clearfix marB50">
		

			<!-- BEGIN FORM-->
<form class="form-horizontal form validate" id="form_coupon" method="post" action="<?=$form_action;?>">
    <fieldset>
<div class="form-body">

<div class="form-group" style="display: none;">
										<label class="control-label col-md-4"></label>
																<div class="col-md-6">
			<input type="" class="form-control" id="coupon_id" name="coupon_id" value="<?= isset($coupon) ? $coupon['id'] : '' ?>">
													<span class="help-block"> </span>
																</div>
</div>

<div class="row">

<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label" for="coupon_name">Coupon Name</label>
					    <div class="col-sm-6 col-md-6">
					      <input type="text" class="form-control" name="coupon_name" rel="" id="coupon_name" value="<?= isset($coupon) ? $coupon['name'] : '' ?>">
					    </div>
						<div class="help-block">Something for you to recognize the coupon by. </div>
									
				  	</div>
					
<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label" for="coupon_code">Coupon Code</label>
					    <div class="col-sm-6 col-md-6">
					      <input type="text" class="form-control" name="coupon_code" rel="" id="coupon_code" value="<?= isset($coupon) ? $coupon['code'] : '' ?>">
					    </div>
							<span class="help-block"> The code the customer must enter. </span>
				  	</div>
					<div class="space space-8"></div>
<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label" for="coupon_start_date">Start Date</label>
					     <div class="col-sm-6 col-md-6">
						 <input class="form-control input-mask-date" type="text" id="form-field-mask-1">
 <input type="text" class="form-control hidden date-picker" data-date-format="dd-mm-yyyy" name="coupon_start_date" id="coupon_start_date" rel="" id="coupon_start_date" value="<?= isset($coupon) ? $coupon['start_date'] : date('Y-m-d') ?>">
									
						  	<span class="help-block"></span>
					    </div>
				  	</div>

<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label" for="coupon_end_date">Expiry Date</label>
					    <div class="col-sm-6 col-md-6">
						<input class="form-control hidden active" type="text" name="date-range-picker" style="width:8em" id="id-date-range-picker-1">
<input type="text" class="form-control datepick mark_empty" id="expiry-date-picker" data-date-format="dd-mm-yyyy" name="coupon_end_date" rel="" id="coupon_end_date" value="<?= (isset($coupon) and $coupon['end_date'] != FALSE) ? $coupon['end_date'] : '' ?>">
	            &nbsp;<input id="no_expiry" type="checkbox" name="no_expiry" value="1" <? if (!isset($coupon) or $coupon['end_date'] == FALSE) { ?>checked="checked"<? } ?> /> No expiry
					    </div>
							<span class="help-block"></span>
				  	</div>

<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label" for="coupon_max_uses">Maximum Uses</label>
					     <div class="col-sm-6 col-md-6">
<input type="text" class="form-control" name="coupon_max_uses" id="coupon_max_uses" value="<?= isset($coupon) ? $coupon['max_uses'] : '' ?>">
&nbsp;&nbsp;<input id="no_limit" type="checkbox" name="no_limit" value="1" <? if (!isset($coupon) or $coupon['max_uses'] == FALSE) { ?>checked="checked"<? } ?> /> Unlimited usage
									
					    </div>
						<div class="help-block"> The maximum number of customers that can use the coupon.</div>
									
				  	</div>

<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label" for="coupon_customer_limit">One Per?</label>
					    <div class="col-sm-6 col-md-6">
<input type="checkbox" id="coupon_customer_limit" name="coupon_customer_limit" value="1" <?= isset($coupon) && $coupon['customer_limit'] == 1  ? 'checked="checked"' : '' ?>>

					    </div>
						<div class="help-block"> Check to limit each customer to a single use.</div>
									
				  	</div>
					
<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label" for="coupon_type_id">Coupon Type</label>
					    <div class="col-sm-7 col-md-7">
					  <select name="coupon_type_id" class="form-control" >
<?php foreach ($coupon_types as $type) :?>
				<option value="<?php echo $type->coupon_type_id ?>" <?= isset($coupon) && $coupon['type_id'] == $type->coupon_type_id ? 'selected="selected"' : '' ?>><?php echo $type->coupon_type_name; ?></option>
			<?php endforeach; ?>			    
            </select>
					    </div>
						<span class="help-block"></span>
				  	</div>
     
        <legend>Price Reduction</legend>
		
<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label"for="coupon_reduction_type">Reduction Type</label>
					    <div class="col-sm-7 col-md-7">
						<select class="form-control" name="coupon_reduction_type" >
                <option value="0" <?= isset($coupon) && $coupon['reduction_type'] == 0 ? 'selected="selected"' : '' ?>>Percent</option>
                <option value="1" <?= isset($coupon) && $coupon['reduction_type'] == 1 ? 'selected="selected"' : '' ?>>Fixed Amount</option>
            </select>
					    </div>
</div>
		
		<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label"for="coupon_reduction_amt">Reduction Amount</label>
					   <div class="col-sm-6 col-md-6">
					      <input type="text" class="form-control"name="coupon_reduction_amt" rel="" id="coupon_reduction_amt" value="<?= isset($coupon) ? $coupon['reduction_amt'] : '' ?>">
					    </div>
				  	</div>

<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label" for="coupon_trial_length">Free Trial Length</label>
					    <div class="col-sm-3 col-md-3">
					      <input type="text" class="form-control" name="coupon_trial_length" rel="in days" id="coupon_trial_length" value="<?= isset($coupon) ? $coupon['trial_length'] : '' ?>">
					    </div>
						
                <div class="help">
                    The amount of the discount.
                </div>
				  	</div>

<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label"for="plans[]">Subscriptions</label>
					     <div class="col-sm-8 col-md-7">
						<select name="plans[]" class="form-control" multiple="multiple">
	            	<option value="0" <? if (!isset($coupon) or empty($coupon['plans'])) { ?>selected="selected"<? } ?>>All plans and recurring charges</option>
	                <?php foreach ($plans as $plan) :?>
						<option value="<?php echo $plan['id'] ?>" <?= isset($coupon['plans']) && in_array($plan['id'], $coupon['plans']) ? 'selected="selected"' : '' ?>><?php echo $plan['name']; ?></option>
					<?php endforeach; ?>
	            </select>
					    </div>						
						<div class="help-block">
            		If you don't select any plans, or select "All plans", this coupon will be able to be used with any plan.
            	</div>
							  	</div>

    </fieldset>
	
</div><!--/form-body-->

<div id="complete" class="form-actions submit">
<div class="row">
<div class="col-md-offset-1 col-md-9">
<input type="submit" class="btn btn-success btn-lg btn-block center" name="add_coupon" value="Save Coupon" />
</div>
</div>
</div>


</form>

		
</section><!--/couponForm-->

	</div><!--/col-md-7-->
	
<div class="col-md-5">

<h4 class="sectionTitle">Coupon Types</h4>
			
<span class="subSectionTitle block"></span>
<span class="subSectionTitle block"><br /></span>
<section class="couponInfo">

<div class="clearfix marB50">
	<p class=""><b>Initial Charge Price Reduction</b> applies the price reduction to the initial charge only. Any recurring charges are full price.</p>
	<hr>
	<p class=""><b>Recurring Price Reduction</b> applies the price reduction to all charges, <i>except the initial charge</i>.</p>
	<hr>
	<p class=""><b>Total Price Reduction</b> applies the price reduction to all charges, both the initial charge and all recurring charges.</p>
	<hr>
	<p class=""><b>Free Trial</b> allows a customer to try out your product/service for a limited number of days before they are charged their initial charge.</p>
		
</div><!--/clearfix-->
</section><!--/couponInfo-->
</div><!--/col-md-5-->

</div><!--/row -->

</div><!--/wrapper -->

<script type="text/javascript">
$(function() {
	$('#submit_form').click(function(e){
	 	e.preventDefault();
	 	var l = Ladda.create(this);
	 	l.start();
	 	$.post("https://everpayinc.com/coupons/post_coupon/new", 
	 	    { data : data },
	 	  function(response){
	 	    console.log(response);
	 	  }, "json")
	 	.always(function() { l.stop(); });
	 	return false;
	});
});
</script>

<script>

			// Bind normal buttons
			Ladda.bind( '.form-actions button', { timeout: 2000 } );

			// Bind progress buttons and simulate loading progress
			Ladda.bind( '.form-actions button', {
				callback: function( instance ) {
					var progress = 0;
					var interval = setInterval( function() {
						progress = Math.min( progress + Math.random() * 0.1, 1 );
						instance.setProgress( progress );

						if( progress === 1 ) {
							instance.stop();
							clearInterval( interval );
						}
					}, 200 );
				}
			} );

			// You can control loading explicitly using the JavaScript API
			// as outlined below:

			// var l = Ladda.create( document.querySelector( 'button' ) );
			// l.start();
			// l.stop();
			// l.toggle();
			// l.isLoading();
			// l.setProgress( 0-1 );

		</script>
</div><!--/row-->
</div><!--/content-wrapper-->
<?= $this->load->view(branded_view('cp/footer')); ?>