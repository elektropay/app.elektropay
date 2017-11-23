<?=$this->load->view(branded_view('cp/header'));?>

<style type="text/css">

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
			<a href="<?= site_url('account/'); ?>">
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
			<a class="active" href="<?= site_url('account/notifications/'); ?>">
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

<div id="panel" class="notifications">
	
		<div class="row-fluid">

        <!-- BEGIN FORM Content-->
<div id="form_container">
            <!--Form content-->
            <div class="form-content-wrap" style="background-color: rgb(255, 255, 255);">

                <div class="form-content" style="background-color: rgb(255, 255, 255);">
                    
<div class="form_column_two" id="form_wraper_div">

<form class="view_form" id="form_account" method="post" enctype="multipart/form-data" action="<?=site_url($form_action);?>">


<div class="settings">
			<div class="digest">
				<h2>
		Email Notifications
	</h2>
				<div class="row">
					<div class="col-md-8">
						<p>
							Get real time notifications of all activities relating to your account activities and summaries directly to your inbox or Iphone.
						</p>
					</div>
					<div class="col-md-4">
						<div class="fake-select-wrap">
                                                  <select data-smart-select="">
							<option>Never receive</option>
							<option>Every day</option>
							<option>Every Week</option>
						</select>

					</div>
				</div>
			</div>

			<div class="types">
				<h4>
					Types
				</h4>
				<section>
					<div class="title">In-app</div>

					<div class="row">
						<div class="col-sm-8">
						Credit Card Order Confirmation
						</div>
						<div class="col-sm-4">
						<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-3" type="checkbox">
														<span class="lbl"></span>
													</label>
</div>
					</div>
					<div class="row">
						<div class="col-sm-8">
						Credit Card Recurring Order Confirmation
						</div>
						<div class="col-sm-4">
							<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-3" type="checkbox">
														<span class="lbl"></span>
													</label>
</div>
					</div>
					<div class="row">
						<div class="col-sm-8">
						Credit Card Orders For Review
						</div>
						<div class="col-sm-4">
							<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-3" type="checkbox">
														<span class="lbl"></span>
													</label>
</div>
					</div>
					<div class="row">
						<div class="col-sm-8">
						Credit Card Chargeback Notification 
						</div>
						<div class="col-sm-4">
							<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-3" type="checkbox">
														<span class="lbl"></span>
													</label>
</div>
					</div>
					<div class="row">
						<div class="col-sm-8">
						Incoming Transfers Notification
						</div>
						<div class="col-sm-4">
							<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-3" type="checkbox">
														<span class="lbl"></span>
													</label></div>
					</div>
					<div class="row">
						<div class="col-sm-8">
						eCheck Order Confirmation
						</div>
						<div class="col-sm-4">
							<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-3" type="checkbox">
														<span class="lbl"></span>
													</label></div>
					</div>

					<div class="row">
						<div class="col-sm-8">
						echeck Recurring Order Confirmation
						</div>
						<div class="col-sm-4">
							<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-3" type="checkbox">
														<span class="lbl"></span>
													</label></div>
					</div>
				</section>
				<section>
					<div class="title">News</div>

					<div class="row">
						<div class="col-sm-8">
							Recommendations &amp; tips
						</div>
						<div class="col-sm-4">
							<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-3" type="checkbox">
														<span class="lbl"></span>
													</label></div>
					</div>
					<div class="row">
						<div class="col-sm-8">
							Partner Offers
						</div>
						<div class="col-sm-4">
							<label>
														<input name="switch-field-1" class="ace ace-switch ace-switch-3" type="checkbox">
														<span class="lbl"></span>
													</label>
</div>
					</div>
				</section>
			</div>
<div class="row">
<div class="col-md-offset-3 col-md-6">

<div class="actions">
<button type="submit" class="btn btn-success btn-lg center" name="go_account" value="" /> Save Changes <i class="fa fa-check"></i></button>
</div>

</div><!--/.col-md-6-->
</div><!--/.row-->
	
</form>

</div><!--/#form_wraper_div-->

</div><!--/,form-content-->
</div><!--/.form-content-wrap-->

  </div><!-- END/ #form_container -->


 </div><!-- END/ . ROW-->


</div><!-- END/ #PANEL -->


  </div><!-- END/.clearfix-->

 </div><!-- END/.content-wrapper-->


 </div><!-- END/ #content-->


 </div><!-- END/ #account-->


<!-- END PROFILE PAGE -->




<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<!-- anooj -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script src="https://everpayinc.com/assets/js/formmapper.js"></script>
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