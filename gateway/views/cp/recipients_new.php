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

</style>

<div class="row">
<div class="col-md-12">

<div class="panel panel-default"> 
<div class="portlet-body form">

<div class="content-wrapper">
				<form id="new-customer" class="form-horizontal" method="post" action="#" role="form" novalidate="novalidate">
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">First name</label>
					    <div class="col-sm-10 col-md-8">
					      <input type="text" class="form-control" name="customer[first_name]">
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">Last name</label>
					    <div class="col-sm-10 col-md-8">
					      <input type="text" class="form-control" name="customer[last_name]">
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">Display picture</label>
					    <div class="col-sm-10 col-md-8">
					    	<input type="file" name="customer[display]">
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">Email address</label>
					    <div class="col-sm-10 col-md-8">
					      	<input type="text" class="form-control" name="customer[email]">
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">Phone number</label>
					    <div class="col-sm-10 col-md-8">
					    	<div class="has-feedback">
								<input type="text" class="form-control mask-phone" name="customer[phone]">
						      	<i class="ion-information-circled form-control-feedback" data-toggle="tooltip" title="" data-original-title="Tooltip helper example">
						      	</i>
							</div>
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">Credit card number</label>
					    <div class="col-sm-10 col-md-8">
					    	<div class="has-feedback">
					      		<input type="text" class="form-control mask-cc" name="customer[cc]">
					      		<i class="ion-information-circled form-control-feedback" data-toggle="tooltip" title="" data-original-title="Credit card masked input example">
						      	</i>
							</div>
					    </div>
				  	</div>
				  	<div class="address">
				  		<div class="form-group">
						    <label class="col-sm-2 col-md-2 control-label">Address</label>
						    <div class="col-sm-10 col-md-8">
						      	<input type="text" class="form-control" placeholder="Address" name="customer[address]">
						    </div>
						</div>
						<div class="form-group">
						    <div class="col-sm-3 col-sm-offset-2">
						      	<input type="text" class="form-control" placeholder="City" name="customer[city]">
						    </div>
						    <div class="col-sm-3">
						      	<input type="text" class="form-control" placeholder="State" name="customer[state]">
						    </div>
						    <div class="col-sm-2 col-md-2">
						      	<input type="text" class="form-control" placeholder="Zip code" name="customer[zip]">
						    </div>
					  	</div>
				  	</div>
				  	<div class="form-group">
					    <label for="inputPassword3" class="col-sm-2 col-md-2 control-label">Extra notes</label>
					    <div class="col-sm-10 col-md-8">
					    	<textarea class="form-control" rows="4" name="customer[notes]"></textarea>
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label for="inputPassword3" class="col-sm-2 col-md-2 control-label">Customer tags</label>
					    <div class="col-sm-10 col-md-8">
					      	<div class="select2-container select2-container-multi" id="s2id_customer-tags" style="width: 100%;"><ul class="select2-choices">  <li class="select2-search-choice">    <div>client</div>    <a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-choice">    <div>developer</div>    <a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-choice">    <div>lead</div>    <a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-field">    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" id="s2id_autogen1" style="width: 34px;">  </li></ul><div class="select2-drop select2-drop-multi select2-display-none">   <ul class="select2-results">   </ul></div></div><input type="hidden" id="customer-tags" style="width:100%" value="client,developer,lead" name="customer[tags]" tabindex="-1" class="select2-offscreen">
					    </div>
				  	</div>
				  	<div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      	<div class="checkbox">
					        	<label>
					 <input type="checkbox" name="customer[send_marketing]"> Send marketing emails
				        		</label>
					      	</div>
					    </div>
				  	</div>

				  	<div class="form-group form-actions">
				    	<div class="col-sm-offset-2 col-sm-10">
				    		<a href="form.html" class="btn btn-default">Cancel</a>
				      		<button type="submit" class="btn btn-success">Save customer</button>
			    		</div>
				  	</div>
				</form>
			</div>



			<!-- BEGIN FORM-->
<form class="form-horizontal" id="form_customer" method="post" action="<?=site_url($form_action);?>">

	<div class="form-body">
		<div class="form-group">
		<label class="col-md-3 control-label">Internal Identifier</label>
		<div class="col-md-6">
<input type="text" class="form-control" id="internal_id" name="internal_id" value="<?=$form['internal_id'];?>" />
<span class="help-block">This identifier can be a username or account ID for your internal systems.  It can be used via the API to
			synchronize customer data on our system with other software by providing a cross-system unique identifier.</span>
		</div>
		</div>

	<div class="form-group">
	<label class="col-md-3 control-label">Email Address</label>
					<div class="col-md-6">
					<div class="input-group">
					<span class="input-group-addon">
					<i class="fa fa-envelope"></i>
						</span>
<input type="text" autocomplete="off" class="form-control email mark_empty" id="email" name="email" value="<?=$form['email'];?>" />
														</div>
													</div>
												</div>

<legend>Personal Information</legend>

		<div class="form-group">
		<label class="col-md-3 control-label for="first_name">Name</label>
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
		<label class="col-md-3 control-label for="company">Company</label>
<div class="col-md-6">
<div class="input-group">
					<span class="input-group-addon">
					<i class="fa fa-building"></i>
						</span>
			<input type="text" class="form-control" id="company" name="company" value="<?=$form['company'];?>" />
		</div>
</div>
</div>
		<div class="form-group">
		<label class="col-md-3 control-label for="address_1">Street Address</label>
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
	<label class="col-md-3 control-label for="address_2">Address Line 2</label>
<div class="col-md-6">
<div class="input-group">
					<span class="input-group-addon">
					<i class="fa fa-globe"></i>
						</span>
			<input type="text" class="form-control" name="address_2" id="address_2" value="<?=$form['address_2'];?>" />
		</div>
</div></div>
		<div class="form-group">
		<label class="col-md-3 control-label for="city">City</label>
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
		<label class="col-md-3 control-label for="Country">Country</label>
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

		<div class="form-group">
		<label class="col-md-3 control-label for="state">Region</label>
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
	<label class="col-md-3 control-label for="postal_code">Postal Code</label>
<div class="col-md-6">
<div class="input-group">
					<span class="input-group-addon">
					<i class="fa fa-globe"></i>
						</span>
<input type="text" geoname="postal_code" class="form-control" name="postal_code" id="postal_code" value="<?=$form['postal_code'];?>" />
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
													
		<div class="form-actions">
					<div class="row">
				<div class="col-md-offset-1 col-md-9">
	<input type="submit" class="btn btn-success btn-lg btn-block center" name="go_customer" value="<?=ucfirst($form_title);?>" />
</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>



				</div>
			</div>
		</div>
</div><!--/col-lg-9-->

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="widget-box">
			
</div>
</div><!--/col-lg-4-->

</div><!--/row -->


</div><!--/panel-body-->
</div><!--/portlet-->

</div><!--/col-md-12 -->
</div><!--/row-->

<?=$this->load->view(branded_view('cp/footer'));?>

<!-- anooj -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script src="https://everpayinc.com/test/assets/app_v2/assets/js/formmapper/formmapper.js"></script>
<script>
  $(function(){ 
        $("#address_1").formmapper({details:"form"}); 

        });
</script>
<!-- anooj -->