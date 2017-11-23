<?=$this->load->view(branded_view('cp/header'), array('head_files' => '
<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/jquery.inputlimiter.1.3.1.min.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/jquery.maskedinput.min.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/pwdwidget.js') . '"></script>
<link rel="stylesheet" type="text/css" href="' . branded_include('css/pwdwidget.css') . '" />
<script type="text/javascript" src="' . branded_include('js/formmapper.js') . '"></script>')); ?>


<style type="text/css">



.account-status-marker-activated {
  margin: -5px 2px 0 0;
  padding: 5px 7.8px;
  border: 1px solid #7ae498;
  font-size: 12px;
  letter-spacing: 1.3px;
  color: #7ae498;
  font-weight: 600;
  text-shadow: 0 0px 0 #000;
}


.linksColumn {
  float: left;
  margin-right: 10px;
  margin-left: 20px;
  width: 280px;
  line-height: 18px;
  padding: 20px;
  font-size: 14px;
  color: #fefefe;
}
.linksColumn h3 {
margin-top: 10px;
margin-bottom: 10px;
color: #FFFFFF;
}

.linksColumn ul, ol {
  margin-top: 0;
  margin-left: 10px;
  list-style-type: none;
}

.linksColumn li {
color: #FFFFFF;
font-weight: 500;
  font-size: 14px;
  list-style-type: none;
}



.pageColumn {
  float: left;
  margin-right: 20px;
  margin-left: 20px;
  width: 100%;
  line-height: 18px;
  padding: 10px;
  font-size: 14px;
  color: #fefefe;
}



.pageColumn h2 {
margin-top: 1px;
margin-bottom: 10px;
color: #FFFFFF;
}

.pageColumn ul, ol {
  margin-top: 0;
  margin-left: -20px;
  margin-right: 20px;
  list-style-type: none;
}

.pageColumn li {
color: #FFFFFF;
font-weight: 500;
  font-size: 14px;
  list-style-type: none;
}

select {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  display: inline-block;
  height: 42px!important;
width:99%;
 font-size: 14px;
}

.form-control {
 display: inline-block;
  height: 42px!important;
  padding: 8px 12px!important;
  font-size: 14px;
  line-height: 18px;
  font-weight: normal;
  margin-bottom: 8px;
  color: #555;
  background-color: #fff;
  border: 1px solid #e5e5e5;
  -webkit-border-radius: 4px!important;
  -moz-border-radius: 4px!important;
  border-radius: 4px!important;
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}

.xe-widget.xe-counter, .xe-widget.xe-counter-block .xe-upper, .xe-widget.xe-progress-counter .xe-upper {
  background: transparent;
  padding: 28px;
  line-height: 1;
  display: inline-block!important;
  width: 100%;
  margin-bottom: 20px;
  overflow: inherit;
}

.profile-avatar {
  text-align: center;
  padding-top: 2px;
  padding-bottom: 10px;
  background-position: 50% 50%;
  background-size: cover;
  position: relative;
}
.avatar-name {
  text-align: center;
font-weight: 700;
color: #999;
}

.main-details {
  border-bottom: 1px solid #DFE2E9;
}

.details {
  padding: 0 20px;
  margin-top: 20px;
}

.avatar .social i {
  font-size: 19px;
  margin: 0 5px;
  color: #444;
}

.modal .modal-header h2 {
  font: normal normal normal 32px "Proxima Nova Semi Bold",arial,sans-serif;
  line-height: 0px;
  color: #000;
  padding: 0;
  margin: 0;
  margin-top: -25px;
}


.fa-lg {
  font-size: 24px !important;
}

#content .content-wrapper {
  margin-top: 0px;
}

@media (max-width: 767px)
#content {
  margin-left: 0px;
  z-index: 9999;
  padding-left: 0px!important;
  padding-right: 20px;
}

.pageColumn h2 {
  margin-top: 2px;
  margin-bottom: 20px;
  color: #FEFEFE;
}

select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
  display: inline-block;
  height: 38px!important;
  padding: 8px 10px!important;
  margin-bottom: 8px;
  font-size: 16px!important;
  line-height: 18px;
  color: #555;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  vertical-align: middle;
}


input[type="button" i], input[type="submit" i], input[type="reset" i], input[type="file" i]::-webkit-file-upload-button, button {
  padding: 5px 8px!important;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 5px!important;
}
label {
  margin-bottom: 8px;
}

#content {
  background: #FFF;
  margin-left: 180px!important;
  padding: 40px;
  padding-top: 67px;
  position: relative;
  min-height: 720px;
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -ms-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}

#form_container {
  top: 20px;
}

.xe-widget.xe-counter-block, .xe-widget.xe-progress-counter {
  color: #fff;
  background: #cecece!important;
  margin-bottom: 20px!important;
  border-radius: 10px!important;
}

#account #content-inner #panel.billing .plan {
  margin-top: 40px;
}

#account #content-inner #panel.billing h3 {
  margin: 0;
  font-size: 18px;
font-weight: 500;
padding-bottom:10px;
}


#account #content-inner #panel.billing .plan .current-plan {
  font-size: 14px;
}

#account #content-inner #panel.billing .plan .current-plan .change-plan {
  display: inline-block;
  margin-left: 20px;
  font-size: 14px;
}

#account #content-inner #panel.billing .plan .current-plan .change-plan .ion-edit {
  margin-left: 5px;
  font-size: 13px;
}

#account #content-inner #panel.billing .plan .current-plan label {
  margin-right: 20px;
  font-weight: 600;
}

#account #content-inner #panel.billing .plan .current-cc img {
  max-width: 25px;
  margin-right: 8px;
  position: relative;
  top: -2px;
}


#account #content-inner #panel.billing .plan .current-cc {
  position: relative;
  margin-top: 35px;
  padding-top: 35px;
  padding-bottom: 40px;
  font-size: 15px;
  color: #444;
}

#account #content-inner #panel.billing .plan .invoices {
  margin-top: 40px;
}


#account #content-inner #panel.billing .plan .current-cc .next {
  font-size: 13px;
  display: block;
  margin-top: 4px;
}

label {
  display: inline-block;
  margin-bottom: 5px;
  font-weight: 700!important;
}

</style>



<!-- BEGIN PROFILE PAGE -->


<div id="account">

<div id="content-inner">

<div id="sidebar">
	<div class="visible-xs">
	</div>
	<h2 style="font-size: 16px; padding-left:20px;padding-top:20px;"></h2>
	<ul class="menu">
		<li>
			<a class="active" href="<?= site_url('account/'); ?>">
				<i class="ion-ios7-person-outline"></i>
				Profile
			</a>
		</li>
		<li>
			<a href="<?= site_url('account/billing/'); ?>">
				<i class="ion-card"></i>
				Billing
			</a>
		</li>
		<li>
			<a href="<?= site_url('account/notifications/'); ?>">
				<i class="ion-ios7-email-outline"></i>
				Notifications
			</a>
		</li>
<li>
			<a href="<?= site_url('account/upgrade/'); ?>">
				<i class="ion-arrow-graph-up-right"></i>
				Upgrade
			</a>
		</li>
		<li>
			<a href="<?= site_url('account/help/'); ?>">
				<i class="ion-ios7-help-outline"></i>
				Support
			</a>
		</li>
<li>
			<a href="<?= site_url('account/close/'); ?>">
				<i class="ion-close-round"></i>
				Close
			</a>
		</li>
	</ul>

  </div><!-- END/ #sidebar-->



<div class="content-wrapper">
<div class="clearfix" style="height: auto;">

<div id="panel" class="billing">
	<h3>
		Billing &amp; Payments
	</h3>

	<div class="plan">
		<div class="current-plan">
			<div class="field">
				<label>Plan:</label>  <?= $this->user->Get('plan_name') ?>(<?=$this->config->item('currency_symbol');?><?=$plans[$this->user->Get('plan_id')]['amount']?>/month)
			<a href="<?= site_url('account/upgrade/'); ?>" class="change-plan">
					Change plan
					<i class="ion-edit"></i>
				</a>
			</div>

		</div>

		<div class="current-cc">
			<label>Current credit card:</label>
			<img alt="Visa" src="../assets/app/img/visa-5fc1888e5c31ba703807afdd864e94b9.png">
			<strong>Visa</strong> ending in <strong>0328.</strong>
			 <a class="manage-cc" href="javascript:;" onclick="jQuery('#modal-update-cc').modal('show', {backdrop: 'static'});" title="Set your primary bank account." class="autoTooltip">
                          Manage credit card
			 <i class="ion-edit"></i>
			</a>
			<span class="next">(next payment on <strong><?=$recurring['next_charge_date'];?></strong>).</span>
		</div>

		<div class="invoices">
			<h3>Invoices</h3>

			<table class="table">
				<tbody><tr>
					<td>
						Date
					</td>
					<td>
						Amount
					</td>
					<td>
						Due
					</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<a href="#">Jun 1, 2015 - Jul 1, 2015</a>
					</td>
					<td>
						$0.00 USD
					</td>
					<td>
						2015-08-01
					</td>
					<td>
						<a href="#">download</a>
					</td>
				</tr>
				
			</tbody>
</table>
		</div>
	</div>


</div><!-- END/ #PANEL -->


  </div><!-- END/.clearfix-->

 </div><!-- END/.content-wrapper-->


 </div><!-- END/ #content-->


 </div><!-- END/ #account-->


<!-- END PROFILE PAGE -->



<!-- BEGIN MODALS -->
<!-- BEGIN MODAL-EMAIL -->
<div class="modal fade" id="modal-update-cc" aria-hidden="true" style="display: none;"> 
<div class="modal-dialog"> 
<div class="modal-content"> 
<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
<h1 class="modal-title center">Update Credit Card</h1> </div> 
<div class="modal-body"> 
<form class="form well" id="form_update_cc" method="post" action="<?=site_url('transactions/post_update_cc');?>">
<input type="hidden" name="recurring_id" value="<?=$recurring['id'];?>" />

<div id="transaction_cc">
	<fieldset>
		<legend>Credit Card Information</legend>
		<ul class="form">
			<li>
				<label for="cc_number" class="full">Credit Card Number</label>
			</li>
			<li>
				<input type="text" class="text full required number" id="cc_number" name="cc_number" />
			</li>
			<li>
				<label for="cc_name" class="full">Credit Card Name</label>
			</li>
			<li>
				<input type="text" class="text full required" id="cc_name" name="cc_name" />
			</li>
			<li>
				<label for="cc_expiry" class="full">Credit Card Expiry</label>
			</li>
			<li>
				<select name="cc_expiry_month">
					<? for ($i = 1; $i <= 12; $i++) {
					       $month = str_pad($i, 2, "0", STR_PAD_LEFT);
					       $month_text = date('M',strtotime('2010-' . $month . '-01')); ?>
					<option value="<?=$month;?>"><?=$month;?> - <?=$month_text;?></option>
					<? } ?>
				</select>
				&nbsp;&nbsp;
				<select name="cc_expiry_year">
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
			</li>
			<li>
				<label for="cc_security" class="full">Credit Card Security Code</label>
			</li>
			<li>
				<input type="text" class="text full number" id="cc_security" name="cc_security" />
			</li>
		</ul>
	</fieldset>
</div>


</div><!--/modal-body-->

<div class="modal-footer"> 
<div class="form-actions center submit col-md-offset-2 col-md-6">
&nbsp;
<button type="submit" class="btn btn-success btn-lg"  name="go_update_cc" value="" /> Update Credit Card <i class="fa fa-check"></i></button>
&nbsp;
</div>
</form>

</div><!--/modal-footer-->

</div><!--/modal-content--> 
</div><!--/modal-dialog--> 
</div>
<!-- END .Modal-EMAIL-->




<!-- END MODALS -->






<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<script>
  $(function(){ 

       $("#address_1").formmapper({details:"div.widget-body"}); 

        });
</script>
<!-- anooj -->

<!-- richard -->
<script>
jQuery(function($) {
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});

                                $('#company_logo , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php|html|js|xls'
					//onchange:''
					//
				});
				//pre-show a file name, for example a previously selected file
				//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
			
			                                



                                $('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
</script>
<!-- richard -->

<!-- richard -->
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[
    var pwdwidget = new PasswordWidget('repeatpwddiv','repeatpwd');
    pwdwidget.enableGenerate = false;
    pwdwidget.enableShowStrength=false;
    pwdwidget.enableShowStrengthStr =false;
    pwdwidget.MakePWDWidget(false);
    
    var pwdwidget = new PasswordWidget('newpwddiv','newpwd');
    pwdwidget.MakePWDWidget();
        
    var frmvalidator  = new Validator("changepwd");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("newpwd","req","Please provide a new password");
    

// ]]>
</script>


<!-- END JAVASCRIPTS -->



<?=$this->load->view(branded_view('cp/footer'));?>