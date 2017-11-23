<?=$this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>'));?>


<style type="text/css">


select {
border-radius: 0;
-webkit-box-shadow: none!important;
box-shadow: none!important;
color: #444;
background-color: #fff;
border: 1px solid #d5d5d5;
height: 40px;
font-size: 16px;
width: 99%;
}

form label {
transition: background 0.4s, color 0.4s, top 0.4s, bottom 0.4s, right 0.4s, left 0.4s;
position: relative!important;
color: #999;
padding: 7px 6px;
float: left;
padding-right: 40px;
margin-top: 5px;
margin-bottom: 5px;
}

.map_canvas {display:none;}

ul.form li {
    display: block;
    clear: both;
    padding: 2px 0px;
}

table.dataTable thead th {
  padding: 6px 8px 6px 15px!important;
  border-top: 1px solid #05101b;
  font-weight: 500;
  font-size: 12px!important;
  cursor: pointer;
}

</style>

<div class="content-wrapper">
	
<div class="row clearfix" style="height: auto;">
<br />
<div class="col-md-12 col-sm-12">
<div id="form">

<div class="portlet-body form">
	<header class="section-header">
					<div class="container-960 center">
						<div class="copywriting">
							<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	<h3 class="margin-none"> <strong class="green-seagreen">Create New Customer</strong></h3>
							</div>
						</div>
					</div>
				</header>
<p></p>
<div class="form-content">
<form id="new-customer" class="form-horizontal" method="post" action="<?=site_url($form_action);?>" role="form" novalidate="novalidate">
				  	  	
						<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label" for="email">Email address</label>
					    <div class="col-sm-10 col-md-8">
					      	<input type="email" class="form-control required" name="email" id="email" value="<?php echo $_REQUEST['email'] ?>">
					    </div>
				  	</div>
					
					<div class="form-group hidden">
					    <label class="col-sm-2 col-md-2 control-label">Customer ID</label>
					    <div class="col-sm-10 col-md-8">
					      <input type="text" class="form-control required" name="internal_id" id="internal_id" readonly value="<?php echo $customer_unique_id; ?>">
					      <span class="help-block">This identifier  can be used via the API to
			               synchronize customer data on our system with other software or apps by providing a cross-system unique identifier.</span>
						</div>
				  	</div>
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label" for="first_name">First name</label>
					    <div class="col-sm-10 col-md-8">
					      <input type="text" class="form-control required" name="first_name" id="first_name" value="<?php echo $_REQUEST['first_name'] ?>">
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label" for="last_name">Last name</label>
					    <div class="col-sm-10 col-md-8">
					      <input type="text" class="form-control required" name="last_name" id="last_name" value="<?php echo $_REQUEST['last_name'] ?>">
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label" for="Company">Company</label>
					    <div class="col-sm-10 col-md-8">
					    	<input type="text" class="form-control" name="company" id="company" value="<?php echo $_REQUEST['company'] ?>">
					    </div>
				  	</div>
				
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label" for="phone">Phone number</label>
					    <div class="col-sm-10 col-md-8">
					    	<div class="has-feedback">
								<input type="text" class="form-control required" name="phone" id="phone" value="<?php echo $_REQUEST['phone'] ?>">
							</div>
					    </div>
				  	</div>
				  	
				  		<div class="form-group">
						    <label class="col-sm-2 col-md-2 control-label">Address1</label>
						    <div class="col-sm-10 col-md-8">
						      	<input type="text" class="form-control required"  required name="address_1" id="address_1" value="<?php echo $_REQUEST['address_1'] ?>">
						    </div>
						</div>
						
				  		<div class="form-group">
						    <label class="col-sm-2 col-md-2 control-label">Address2</label>
						    <div class="col-sm-10 col-md-8">
						      	<input type="text" class="form-control"   name="address_2" id="address_2" value="<?php echo $_REQUEST['address_2'] ?>">
						    </div>
						</div>
						
				  		<div class="form-group">
						    <label class="col-sm-2 col-md-2 control-label" for="Country">Country</label>
						    <div class="col-sm-10 col-md-8">
						      <select id="country" name="country">
							  <option value=""></option>
							  <? foreach ($countries as $country) { ?><option <? if ($form['country'] == $country['iso2']) { ?> selected="selected" <? } ?> value="<?=$country['iso2'];?>"><?=$country['name'];?></option><? } ?></select>
		
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-sm-2 col-md-2 control-label" for="state">State</label>
						    <div class="col-sm-10 col-md-8">
						      	<select geoname="administrative_area_level_1_short" id="state" class="form-control required" required name="state">
						      		<option value="">Please select state</option>
						      		<?php
								foreach ($states as $state) {
									if ($form['state'] == $state['code']) { ?>
										<option  selected="selected"  value="<?=$state['code'];?>"><?=$state['name'];?></option><?php
									} else { ?>
										<option value="<?=$state['code'];?>"><?=$state['name'];?></option><?php
									}
								    } ?>
							   </select>
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-sm-2 col-md-2 control-label" for="City">City</label>
						    <div class="col-sm-10 col-md-8">
						      	<input type="text" class="form-control required" name="city" id="city" value="<?php echo $_REQUEST['city'] ?>">
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-sm-2 col-md-2 control-label" for="postal_code">Postal code</label>
						    <div class="col-sm-10 col-md-8">
						      	<input type="text" class="form-control required" name="postal_code" id="postal_code" value="<?php echo $_REQUEST['postal_code'] ?>">
						    </div>
						</div>
						
						<!-- <div class="form-group">
						    <div class="col-sm-3 col-sm-offset-2">
						      	<input type="text" class="form-control" placeholder="City" name="customer[city]">
						    </div>
						    <div class="col-sm-3">
						      	<input type="text" class="form-control" placeholder="State" name="customer[state]">
						    </div>
						    <div class="col-sm-2 col-md-2">
						      	<input type="text" class="form-control" placeholder="Zip code" name="customer[zip]">
						    </div>
					  	</div> -->
				  	

				  	<div class="form-group form-actions">
				    	<div class="col-sm-offset-2 col-sm-10">
				 <button type="reset" class="btn btn-default btn-lg">Reset <i class="fa fa-refresh"></i></button>
				 &nbsp; &nbsp;
				 <button type="submit" class="btn btn-success btn-lg">Save customer <i class="fa fa-check"></i></button>
			    		</div>
				  	</div>
				</form>
			</div><!--/form-content-->



</div><!--/portlet-body-form-->
</div><!--/#form-->

</div><!--/row-->
</div><!--/chart clearfix-->
</div><!--/content-wrapper-->


<?=$this->load->view(branded_view('cp/footer'));?>
