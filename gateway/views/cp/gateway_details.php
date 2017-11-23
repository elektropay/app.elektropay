<?=$this->load->view(branded_view('cp/header'));?>
<style>

select {
border-radius: 0;
-webkit-box-shadow: none!important;
box-shadow: none!important;
color: #444;
background-color: #fff;
border: 1px solid #d5d5d5;
height: 40px;
}

label {
font-weight: 400;
font-size: 15px;
margin-right: 20px;
margin-left: 10px;
}

</style>

<div class="portlet light bordered">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-equalizer font-blue-hoki"></i>
<span class="caption-subject font-blue-hoki bold uppercase"><?=$form_title;?></span>
											<span class="caption-helper"></span>
										</div>
										<div class="tools">
	<span><a href = "javascript:history.back()"><i class="fa fa-arrow-circle-left fa-2"></i> &nbsp;Go Back</a> </span>	
										</div>
									</div><!-- portlet-title-->

									<div class="portlet-body form">
										<!-- BEGIN FORM-->
<p class="warning"><span>Is your gateway in test mode?  Even when "Test mode" is specified below, your transactions can
still be processed as live, real transactions if your gateway is not in test mode.  You must set your gateway
to test mode in your gateway control panel.  "Test mode" below only indicates which of your gateway's servers to use.</span></p>

<form class="form-horizontal form-row-seperated" id="form_plan" method="post" action="<?=$form_action;?>">
<input type="hidden" name="external_api" value="<?=$external_api;?>" />

<div class="form-body">
<fieldset>
	
<legend>Gateway Settings</legend>
	

<ul class="form">
	

<li>
		

<label for="alias">Gateway Alias</label>
		

<input type="text" class="text" name="alias" value="<?=$name;?>" />
	

</li>
	

<? foreach ($fields as $name => $field) { ?>
	

<? if (!isset($values[$name])) { $values[$name] = ''; } ?>
		

<li>
		

<label for="<?=$name;?>"><?=$field['text'];?></label>
		

<? if ($field['type'] == 'text') { ?>
			
<input type="text" class="text required" name="<?=$name;?>" id="<?=$name;?>" value="<?=$values[$name];?>" />
		

<? } elseif ($field['type'] == 'password') { ?>
			


<input type="password" class="text required" name="<?=$name;?>" id="<?=$name;?>" value="<?=$values[$name];?>" />
		

<? } elseif ($field['type'] == 'radio') { ?>
			

<? foreach ($field['options'] as $value => $display) { ?>
				<input type="radio" id="<?=$name;?>" name="<?=$name;?>" class="required" value="<?=$value;?>" <? if ($values[$name] == $value) { ?>checked="checked"<? } ?> />&nbsp;<?=$display;?>&nbsp;&nbsp;&nbsp;
			
<? } ?>
		

<? } elseif ($field['type'] == 'select') { ?>
			
<select id="<?=$name;?>" name="<?=$name;?>" class="required">
			
<? foreach ($field['options'] as $value => $display) { ?>
				<option value="<?=$value;?>" <? if ($values[$name] == $value) { ?>selected="selected"<? } ?>><?=$display;?></option>
			
<? } ?>
			
</select>
		

<? } ?>
		
</li>
	

<? } ?>


</fieldset>


<div class="form-actions">
<div class="row margin-top-20">
<div class="col-md-offset-2 col-md-6">

<div class="clearfix" style="height: 20px;"></div>
<input type="submit" name="go_gateway" class="btn btn-success btn-lg btn-block" value="Save Gateway" />
</div>
</div>
</div><!-- END FORM-ACTIONS-->

</div><!-- END FORM-BODY-->

</form><!-- END FORM-->

</div><!-- portlet-body form-->
								
</div><!-- portlet light bordered-->

<?=$this->load->view(branded_view('cp/footer'));?>