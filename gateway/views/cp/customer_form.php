<?=$this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>'));?>
						
<script type="text/javascript">
$(function() {
	$('#submit_form').click(function(e){
	 	e.preventDefault();
	 	var l = Ladda.create(this);
	 	l.start();
	 	$.post("https://everpayinc.com/customers/customer_add", 
	 	    { data : data },
	 	  function(response){
	 	    console.log(response);
	 	  }, "json")
	 	.always(function() { l.stop(); });
	 	return false;
	});
});
</script>

<script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script type="text/javascript">
$(function(){
	$("#address_1").formmapper({details:"form"});
});
</script>
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

#update_description {
	
	margin-top:-20px;
}

.caption {
	font-size: 18px!important;
	margin-bottom:15px;
	margin-top: 15px;
}

</style>

<div class="content-wrapper">

<div class="row clearfix" style="height: auto;">		
					
<div class="col-md-12">
										

<div class="payment-view">
<div class="detail-container">

<div class="row-fluid clearfix">
	
<div class="content-header"></div>
		
<div class="row">
													
<!-- BEGIN FORM-->
													
<form class="form-horizontal" id="form_customer" method="post" action="<?=site_url($form_action);?>">
														

		<div id="section">

  <!-- Content -->
        <div class="row-fluid">
			</br />

<div class="section-wrap">

<div class="row">

<div class="col-md-offset-1 col-md-9">


<div class="portlet portlet-default box">

<div class="portlet-body">                

<div class="content-container"> 

<div class="row-fluid">        

<div class="form-body">
<div class="col-sm-12">
<div class="portlet-title">
<div class="caption">
 Account Details
</div>

</div>
</div>

<div class="form-group">
																<label class="col-md-3 control-label">Customer Email</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-envelope"></i>
																		</span>
																		<input type="text" autocomplete="off" class="form-control email mark_empty" id="email" name="email" value="<?=$form['email'];?>" />
																	</div>
																</div>
															</div>


	<div class="form-group">
<label class="col-md-3 control-label">Customer ID</label>
																<div class="col-md-6">
																	<input type="text" class="form-control" disabled readonly id="internal_id" name="internal_id" value="<?=$form['internal_id'];?>" />
																	<em class="help-block"><small>.</small></em>
																</div>
															</div>
															
														<div class="col-sm-12">
<div class="portlet-title">
<div class="caption">
 Personal Details
</div>

</div>
</div>

															<div class="form-group">
																<label class="col-md-3 control-label" for="first_name">Name</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-user"></i>
																		</span>
																		<input class="form-control required mark_empty" rel="First Name" type="text" id="first_name" name="first_name" value="<?=$form['first_name'];?>" />&nbsp;&nbsp;<label style="display:none" for="last_name">Last Name</label><input class="form-control mark_empty" rel="Last Name" type="text" id="last_name" name="last_name" value="<?=$form['last_name'];?>" />
																	</div>
																</div>
															</div>
<div class="form-group">
																<label class="col-md-3 control-label">Phone</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-mobile"></i>
																		</span>
																		<input type="text" class="form-control" id="phone" name="phone" value="<?=$form['phone'];?>" />
																	</div>
																</div>
															</div>
															
															<div class="form-group">
																<label class="col-md-3 control-label" for="company">Company</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-building"></i>
																		</span>
																		<input type="text" class="form-control" id="company" name="company" value="<?=$form['company'];?>" />
																	</div>
																</div>
															</div>
														<div class="col-sm-12">
<div class="portlet-title">
<div class="caption">
 Billing Address
</div>

</div>
</div>
															<div class="form-group">
																<label class="col-md-3 control-label" for="address_1">Street Address</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																				<i class="fa fa-globe"></i>
																		</span>
																		<input type="text" class="form-control" name="address_1" id="address_1" value="<?=$form['address_1'];?>" />
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label" for="address_2">Address Line 2</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<input type="text" class="form-control" name="address_2" id="address_2" value="<?=$form['address_2'];?>" />
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-3 control-label" for="city">City</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<input geoname="locality" type="text" class="form-control" name="city" id="city" value="<?=$form['city'];?>" />
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-3 control-label" for="Country">Country</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<select geoname="country_short" id="country" name="country"><option value=""></option><? foreach ($countries as $country) { ?><option <? if ($form['country'] == $country['iso2']) { ?> selected="selected" <? } ?> value="<?=$country['iso2'];?>"><?=$country['name'];?></option><? } ?>
																		</select>
																	</div>
																</div>
															</div>

															<div class="form-group hidden">
																<label class="col-md-3 control-label" for="lat">Latitude</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<input geoname="lat" type="text" class="form-control" name="lat" id="lat" value="<?=$form['lat'];?>" />
																	</div>
																</div>
															</div>

															<div class="form-group hidden">
																<label class="col-md-3 control-label" for="lng">Longitude</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<input geoname="lng" type="text" class="form-control" name="lng" id="lng" value="<?=$form['lng'];?>" />
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label" for="state">Region</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<input type="text" geoname="administrative_area_level_1" class="text" name="state" id="state" value="<?=$form['state'];?>" />
																		<select geoname="administrative_area_level_1_short" id="state_select" class="form-control" name="state_select"><?php
																			foreach ($states as $state) {
																				if ($form['state'] == $state['code']) { ?>
																					<option  selected="selected"  value="<?=$state['code'];?>"><?=$state['name'];?></option><?php
																				} else { ?>
																					<option value="<?=$state['code'];?>"><?=$state['name'];?></option><?php
																				}
																			} ?></select>
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label" for="postal_code">Postal Code</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<input type="text" geoname="postal_code" class="form-control" name="postal_code" id="postal_code" value="<?=$form['postal_code'];?>" />
																	</div>
																</div>
															</div>

															
															<div class="form-actions">
																<div class="row">
																	<div class="col-md-offset-1 col-md-9">
																		<input type="submit" class="btn btn-success btn-lg btn-block center" name="go_customer" value="<?=ucfirst($form_title);?>" />
																	</div>
																</div><!-- END row-->
															</div><!-- END form-actions-->			
															
</div><!-- col-sm-12-->
</div><!-- row-->  
</div><!-- content-container-->
</div><!-- portlet-body--> 
														</div><!-- END portlet-->
														</div><!-- END col-md-9-->
									
														
													</div><!--/row -->
													
												</div><!--/section-wrap -->
												
														</div><!-- END row-fluid-->
														</div><!--/#section -->
													</form><!-- END FORM-->
													
													</div><!--/row -->
												</div><!--/section-clearfix -->
												
								
						</div><!--/detail-container-->
								
						</div><!--/payment-view-->
						
						</div><!--/row -->
						

</div><!--/row-clearfix-->

</div><!--/content-wrapper-->

<?=$this->load->view(branded_view('cp/footer'));?>