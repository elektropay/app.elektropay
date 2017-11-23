<?=$this->load->view(branded_view('cp/header'), array('head_files' => '
<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/pwdwidget.js') . '"></script>
<link rel="stylesheet" type="text/css" href="' . branded_include('css/pwdwidget.css') . '" />
<script type="text/javascript" src="' . branded_include('js/formmapper.js') . '"></script>')); ?>

<style type="text/css">
.linksColumn {
  float: left;
  margin-right: 10px;
  margin-left: -20px;
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
  margin-left: -10px;
  list-style-type: none;
}

.linksColumn li {
color: #FFFFFF;
font-weight: 500;
  font-size: 13px;
  list-style-type: none;
}

.pageColumn {
  float: left;
  margin-right: 10px;
  margin-left: -20px;
  width: 480px;
  line-height: 18px;
  padding: 20px;
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
  margin-right: 40px;
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
  background: #fff;
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

#content2 {
  background: #FFF;
  margin-left: 10px;
  padding: 10px;
  padding-top: 20px;
  position: relative;
  min-height: 900px;
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -ms-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}


#content2 .content-wrapper {
  margin-top: -40px;
}

#invoice #content2 {
  padding: 10px 20px;
}

#invoice .invoice-wrapper .intro {
  line-height: 25px;
  color: #444;
  position: relative;
}

#invoice .invoice-wrapper .payment-info {
  margin-top: 25px;
  padding-top: 15px;
}

#invoice .invoice-wrapper .payment-details {
  border-top: 2px solid #EBECEE;
  margin-top: 30px;
  padding-top: 20px;
  line-height: 22px;
}

#invoice .invoice-wrapper .line-items {
  margin-top: 40px;
}


#invoice .invoice-wrapper .intro {
  line-height: 25px;
  color: #444;
  position: relative;
}

.fa-lg {
  font-size: 24px !important;
}


</style>



<!-- BEGIN ACCOUNT INVOICE PAGE -->


<div id="invoice">

<div id="content2">

<div class="content-wrapper">
	<div class="invoice-wrapper chart clearfix" style="height:auto; padding: 20px;">
		<div class="intro">
			Hi <strong><?=$this->user->Get('first_name')?> <?=$this->user->Get('last_name')?></strong>, 
			<br>
			This is the receipt for a payment of <strong>$0.00</strong> (USD) you made to Everpay Corporation.

			<div class="status">Paid</div>
		</div>

		<div class="payment-info">
			<div class="row">
				<div class="col-sm-6">
					<span>Payment No.</span>
					<strong>883053045</strong>
				</div>
				<div class="col-sm-6 text-right">
					<span>Payment Date</span>
					<strong>Feb 09, 2014 - 03:44 pm</strong>
				</div>
			</div>
		</div>

		<div class="payment-details">
			<div class="row">
				<div class="col-sm-6">
					<span>Merchant</span>
					<strong>
					<?=$this->user->Get('company')?>
					</strong>
					<p>
				<?=$this->user->Get('business_address')?> <?=$this->user->Get('business_address2')?><br>
						<?=$this->user->Get('business_city')?> <br>
	                                        <?=$this->user->Get('business_state')?> <br>
						<?=$this->user->Get('business_zip')?> <br>
						<?=$this->user->Get('business_country')?>  <br>
						<a href="#">
						<?=$this->user->Get('email')?>
						</a>
					</p>
				</div>
				<div class="col-sm-6 text-right">
					<span>Payment To</span>
					<strong>
						Everpay Corporation
					</strong>
					<p>
						344 9th Avenue <br>
						San Francisco <br>
						99383 <br>
						USA <br>
						<a href="#">
							billing@everpayinc.com
						</a>
					</p>
				</div>
			</div>
		</div>

		<div class="line-items">
			<div class="headers clearfix">
				<div class="row">
					<div class="col-xs-4">Description</div>
					<div class="col-xs-3">Quantity</div>
					<div class="col-xs-5 text-right">Amount</div>
				</div>
			</div>
			<div class="items">
				<div class="row item">
					<div class="col-xs-4 desc">
						Discount Fee
					</div>
					<div class="col-xs-3 qty">
						10.95%
					</div>
					<div class="col-xs-5 amount text-right">
						$0.00
					</div>
				</div>
				<div class="row item">
					<div class="col-xs-4 desc">
						Transaction Fee
					</div>
					<div class="col-xs-3 qty">
						1
					</div>
					<div class="col-xs-5 amount text-right">
						$0.00
					</div>
				</div>
				<div class="row item">
					<div class="col-xs-4 desc">
						Rolling Reserve 
					</div>
					<div class="col-xs-3 qty">
						2
					</div>
					<div class="col-xs-5 amount text-right">
						$0.00
					</div>
				</div>
			</div>
			<div class="total text-right">
				<p class="extra-notes">
					<strong>Notes</strong>
					none.
				</p>
				<div class="field">
					Subtotal <span>$0.00</span>
				</div>
				<div class="field">
					Shipping <span>$0.00</span>
				</div>
				<div class="field">
					Discount <span>4.5%</span>
				</div>
				<div class="field grand-total">
					Total <span>$0.00</span>
				</div>
			</div>

			<div class="print">
				<a href="#">
					<i class="fa fa-print"></i>
					Print this receipt
				</a>
			</div>
		</div>
	</div>
</div>
 
  </div><!-- END/ #invoice-->

 </div><!-- END/ #content-->




<!-- anooj -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>

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

<script>
  $(function(){ 

       $("#address_1").formmapper({details:"div.widget-body"}); 

        });
</script>
<!-- anooj -->

<!-- richard -->
<script>
$(document).ready(function() {
  $("abbr.timeago").timeago();
});
</script>
<!-- richard -->


<?=$this->load->view(branded_view('cp/footer'));?>
