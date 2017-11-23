<?=$this->load->view(branded_view('cp/header'));?>

<link href="<?=branded_include('css/customer-page.css'); ?>" rel="stylesheet" type="text/css" media="screen" />


<style>

.section {
	padding:20px;
}

div.payment-view div.header div.credit-card-img {
  position: absolute;
  top: 2px;
  left: 28px;
  width: 41px;
  height: 40px;
}


div.credit-card-img {
  position: absolute;
  top: 2px;
  left: 28px;
  width: 41px;
  height: 40px;
}


.payment-status-marker-good {
  margin: -5px 2px 0 0;
  padding: 5px 7.8px;
  border: 1px solid #7ae498;
  font-size: 11px;
  letter-spacing: 1.3px;
  color: #7ae498;
  font-weight: 600;
  text-shadow: 0 0px 0 #000;
}

#section {
  background-color: #fff;
  border-left: 1px solid #b9c1d0;
  /* margin-left: 179px; */
  min-height: 580px;
  position: relative;
  z-index: 20;
  padding-top: 10px!important;
  -moz-border-bottom-right-radius: 4px;
  border-bottom-right-radius: 4px;
  -webkit-border-bottom-right-radius: 4px;
  -webkit-font-smoothing: subpixel-antialiased;
  width: 90%!important;
  margin: 0px auto!important;
}


table.dataset td.label {
color: #444;
}

.content-header {
  background: #fafafa;
  background: -webkit-linear-gradient(#fff,#fafafa);
  background: -moz-linear-gradient(#fff,#fafafa);
  background: -ms-linear-gradient(#fff,#fafafa);
  background: -o-linear-gradient(#fff,#fafafa);
  background: linear-gradient(#fff,#fafafa);
  text-shadow: 0 1px 0 #fff;
}

div#section {
  border: 1px solid #eee;
  margin-left: 20px;
  margin-right: 20px;
    margin-bottom: 0px!important;
  padding: 20px;
  min-height: 600px;
  position: relative;
  border-radius: 10px;
  z-index: 20;
  -moz-border-bottom-right-radius: 10px;
  border-bottom-right-radius: 10px;
  -webkit-border-bottom-right-radius: 10px;
  -webkit-font-smoothing: subpixel-antialiased;
}

.test-object-badge {
  position: absolute;
  top: 0;
  right: 0;
  width: 54px;
  height: 55px;
  background-image: url("https://everpayinc.com/assets/app/img/icons/indicator-666.png");
  background-size: 100% 100%;
}

.table-striped>tbody>tr:nth-child(odd)>td, .table-striped>tbody>tr:nth-child(odd)>th {
background-color: #f9f9f9;
font-size: 14px;
color: #444;
}

.detail-container .header h2 span {
  display: block;
  position: relative;
  font-weight: normal;
  font-size: 18px;
  color: #999;
  margin-top: 10px!important;
}

div.payment-view div.header h2 {
  font-size: 36px;
  padding-left: 10px!important;
}

.payment-view .header h2 span {
  display: block;
  position: relative;
  margin-left: 10px;
}

.credit-card-img.visa {
  background-image: url("https://everpayinc.com/assets/app/img/icons/visa-large.png");
  background-size: 100% 100%;
}

.credit-card-img.mastercard {
  background-image: url("https://everpayinc.com/assets/app/img/icons/mastercard-large.png");
  background-size: 100% 100%;
}


.credit-card-img {
  position: absolute;
  top: -5px!important;
  left: 35px!important;
  width: 44px;
  height: 27px;
}

a.button.disabled {
  background: #cdcfd1;
}

a.button {
  position: absolute;
  right: 30px;
  top: 37px;
  background: #bdbdbd;
  -webkit-box-shadow: 0 1px 0 #fff;
  -moz-box-shadow: 0 1px 0 #fff;
  -ms-box-shadow: 0 1px 0 #fff;
  -o-box-shadow: 0 1px 0 #fff;
  box-shadow: 0 1px 0 #fff;
}

a.button.disabled, button.button.disabled, strong.button.disabled, .button.disabled {
  pointer-events: none;
}

a.button.medium, button.button.medium, strong.button.medium, .button.medium {
  height: 31px;
}

a.button, button.button, strong.button, .button {
  border: 0;
  -webkit-font-smoothing: antialiased;
  border: 0;
  padding: 1px;
  display: inline-block;
  text-decoration: none;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.075);
  -moz-box-shadow: 0 1px 0 rgba(0,0,0,0.075);
  -ms-box-shadow: 0 1px 0 rgba(0,0,0,0.075);
  -o-box-shadow: 0 1px 0 rgba(0,0,0,0.075);
  box-shadow: 0 1px 0 rgba(0,0,0,0.075);
  -webkit-touch-callout: none;
  -moz-user-select: -moz-none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}

.button.grey, button.button.grey, strong.button.grey, .button.grey {
  background: #adb2bb;
  background: #adb2bb;
  background: -webkit-linear-gradient(#ccd0d6,#adb2bb);
  background: -moz-linear-gradient(#ccd0d6,#adb2bb);
  background: -ms-linear-gradient(#ccd0d6,#adb2bb);
  background: -o-linear-gradient(#ccd0d6,#adb2bb);
  background: linear-gradient(#ccd0d6,#adb2bb);
}

.content h3 {
  position: relative;
  z-index: 2;
  font-size: 13px;
  font-weight: bold;
  color: #545454;
  margin-bottom: 10px;
  text-shadow: 0 1px 0 #fff;
}

.detail-container .content .section-wrap:hover span.actions {
  opacity: 1 !important;
}

.content h3 span.actions {
  opacity: .75;
  position: absolute;
  text-align: right;
  right: 0;
  -webkit-transition: opacity 150ms ease-in-out;
  -moz-transition: opacity 150ms ease-in-out;
  -webkit-backface-visibility: hidden;
}


span.actions a.sort {
  background-image: url("https://everpayinc.com/assets/app/img/icons/sort.png");
}


span.actions a {
  position: relative;
  margin-left: 7px;
  padding-left: 15px;
  font-size: 11px;
  color: ;
  cursor: pointer;
  font-weight: normal;
  background: url("https://everpayinc.com/assets/app/img/icons/edit-666.png") 0 50% no-repeat;
}


span.actions a.resend {
  background-image: url("https://everpayinc.com/assets/app/img/icons/curved_arrow-666.png");
}


.btn-warning {
    color: white!important;
    background-color: #dfba49!important;
    border-color: #dbb233;
}



.content-container {
  overflow: auto;
  position: relative;
  z-index: 2;
  border: 1px solid #dadada;
  border-top: 1px solid #bbb;
  background: #fff!important;
  padding: 15px;
  font-size: 14px;
  line-height: 16px;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  -ms-border-radius: 6px;
  -o-border-radius: 6px;
  border-radius: 6px;
  -webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,0.07),0 5px 0 #fefefe;
  -moz-box-shadow: inset 0 1px 0 rgba(0,0,0,0.07),0 5px 0 #fefefe;
  -ms-box-shadow: inset 0 1px 0 rgba(0,0,0,0.07),0 5px 0 #fefefe;
  -o-box-shadow: inset 0 1px 0 rgba(0,0,0,0.07),0 5px 0 #fefefe;
  box-shadow: inset 0 1px 0 rgba(0,0,0,0.07),0 4px 0 #fefefe;
}

.content-container ul {
  margin: -15px;
  font-size: 13px;
}

.content-container li {
  list-style: none;
}

.content-container dl {
  display: block;
  -webkit-margin-before: 1em;
  -webkit-margin-after: 1em;
  -webkit-margin-start: 0px;
  -webkit-margin-end: 0px;
}


.content-container dt {
  display: block;
  float: left;
  width: 85px;
  padding: 0 15px 0 0;
  position: relative;
  color: #888;
  text-align: right;
  line-height: 22px;
}

.content-container dd {
  color: #444;
  margin-left: 100px;
  padding-bottom: 5px;
  min-height: 22px;
  line-height: 22px;
  word-wrap: break-word;
  overflow: hidden;
}


.content-container dd:last-child {
  padding-bottom: 0;
}

dd {
  display: block;
  -webkit-margin-start: 40px;
}


.content-container .address-details {
  float: right;
  width: 50%;
}

.content-container .address-details dl {
  margin-bottom: 7px;
}



.section-wrap {
  padding-bottom: 5px;
}

em.empty-container {
  display: block;
  text-align: center;
  font-style: italic;
  color: #aaa;
}

li.sublist-receipts-list-item:last-of-type {
  border-bottom: 0;
}


li.sublist-receipts-list-item {
  display: block;
  padding: 12px 15px;
  border-bottom: 1px solid #eee;
}
li.sublist-receipts-list-item span.receipt-type {
  padding-right: 15px;
  color: #888;
}

li.sublist-receipts-list-item span.date {
  float: right;
  padding-right: 17px;
  color: #aaa;
}


p.more {
  margin: 15px -15px -15px -15px;
}

.content-container p.more a {
  font-size: 13px;
  font-weight: bold;
  border-top: 1px solid #eee;
  border-bottom: 0;
  -webkit-border-bottom-left-radius: 4px;
  -moz-border-bottom-left-radius: 4px;
  -ms-border-bottom-left-radius: 4px;
  -o-border-bottom-left-radius: 4px;
  border-bottom-left-radius: 4px;
  -webkit-border-bottom-right-radius: 4px;
  -moz-border-bottom-right-radius: 4px;
  -ms-border-bottom-right-radius: 4px;
  -o-border-bottom-right-radius: 4px;
  border-bottom-right-radius: 4px;
}

.detail-container .content .content-container ul a, .detail-container .content .content-container p.more a, .detail-container .content .content-container.link a {
  color: #444;
  display: block;
  padding: 12px 15px;
  border-bottom: 1px solid #eee;
  background: url("https://everpayinc.com/assets/app/img/icons/arrow-666.png") 678px 50% no-repeat;
}



.payment-status-refunded {
  position: absolute;
top: 1px;
  right: 28px;
  float: right;
  border: 2px solid #f0ad4e;
  padding: 10px 15px;
  border-#f0ad4e!important;
  text-transform: none;
  font-weight: 600;
  letter-spacing: 1.5px;
  font-size: 16px;
}

.payment-status-approved {
  position: absolute;
   top: 1px;
  right: 28px;
  float: right;
  border: 1px solid #7ae498;
  color: #7ae498!important;
  padding: 10px 15px;
  border-radius: 4px;
  text-transform: none;
  font-weight: 600;
  letter-spacing: 1.5px;
  font-size: 16px;
}

.payment-status-declined {
  position: absolute;
top: 1px;
  right: 28px;
  float: right;
  border: 2px solid #dd5e5e;
  padding: 10px 15px;
  border-radius: 4px;
  color: #dd5e5e!important;
  text-transform: none;
  font-weight: 600;
  letter-spacing: 1.5px;
  font-size: 16px;
}

.static-info .value {
  font-size: 12px;
  font-weight: 600;
}


.portlet.box > .portlet-body {
  background-color: #fefefe;
  padding: 5px!important;
  border-radius: 10px!important;
}



.table>tbody>tr>td {
padding-top: 10px!important;
line-height: 1.42857143;
vertical-align: top;
border-top: 0px solid #ddd!important;
text-align: right;
font-size: 14px;
color: #444;
text-align: left;
}

.table.dataset td.label {
color: #444;
}

.table-striped>tbody>tr:nth-child(odd)>td, .table-striped>tbody>tr:nth-child(odd)>th {
background-color: #f9f9f9;
font-size: 14px;
color: #444;
}

.table>tbody>tr>td {
padding-top: 10px!important;
line-height: 1.42857143;
vertical-align: top;
border-top: 0px solid #ddd!important;
text-align: right;
font-size: 14px;
color: #444;
text-align: left;
}

.section-header {
text-align: center;
margin-bottom: 5px;
margin-top: -2px;
}

.portlet.box > .portlet-title > .caption {
    padding: 10px 0 9px 0;
    float: left;
    display: inline-block;
    font-size: 20px;
    line-height: 22px;
    font-weight: 500;
}


.label {
  display: inline-block;
    padding: .9em .5em .2em;
  font-size: 75%;
  font-weight: 700;
  line-height: 0;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .50em;
  margin-top: 4px;
}

.label-success {
  background-color: #5cb85c;
}

.label-danger {
  background: #D66363;
}

.label-warning {
  background-color: #f0ad4e;
}

div.gradient {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    height: 29px;
    z-index: 5;
    background: #ffffff;
    background: -webkit-linear-gradient(#eef0f4,#ffffff);
    background: -moz-linear-gradient(#eef0f4,#ffffff);
    background: -ms-linear-gradient(#eef0f4,#ffffff);
    background: -o-linear-gradient(#eef0f4,#ffffff);
    /* background: linear-gradient(#eef0f4,#ffffff); */
    -webkit-box-shadow: inset 0 1px 0 #eee;
    -moz-box-shadow: inset 0 1px 0 #eee;
    -ms-box-shadow: inset 0 1px 0 #eee;
    -o-box-shadow: inset 0 1px 0 #eee;
    box-shadow: inset 0 1px 0 #eee;
    -webkit-border-top-left-radius: 6px;
    -webkit-border-top-right-radius: 6px;
    -moz-border-top-left-radius: 6px;
    -moz-border-top-right-radius: 6px;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
}

.portlet.box > .portlet-title {
    border-bottom: 0;
    padding: 0 10px;
    margin-bottom: 0;
    color: #444;
}


</style>

<div class="content-wrapper">
	<div class="stats clearfix" style="height: auto;">

		<div class="row">
	
					<!-- Begin: life time stats -->
<? if (isset($recurring_id)) { ?>
<a class="charge_recurring" href="<?=site_url('transactions/recurring/' . $recurring_id);?>">This charge is related to recurring charge #<?=$recurring_id;?>.</a>
<? } ?>
<div class="payment-view">
<div class="detail-container">

    <div class="section clearfix">
	
		<div class="content-header">
	<div class="row">
			 <div class="test-object-badge" title="Test Payment" style="display: none;"></div>

          			<div class="col-md-8">
					
            <div class="credit-card-img visa pull-left"></div>
			<h2 class="center">
            <strong data-text="">
              <?=$this->config->item('currency_symbol');?><?=$amount;?> USD
            </strong>
            <span style="padding-left: 20px;">ch_<?=$id;?></span>
          </h2>
		  </div>
		  
			<div class="col-md-4">

                <div class="value pull-right">
                            <? if ($refunded == '1') { ?>
                              <span class="payment-status-refunded">
                                 <span class="fa fa-reply"></span>
                                <b> Refunded </b>
                                
                              </span>
                            <? } else {
                              if($status == 'ok') { ?>

                              <span class="payment-status-approved">
                                          <span class="fa fa-check"></span>
                                <b> Approved </b>
                              </span>
                              <? } else { ?>
                                <span class="payment-status-declined">
                                                  <span class="fa fa-remove"></span>
                                  <b> Declined </b>
                                </span>
                              <? }
                            } ?>  

                </div>
          
			
		    </div>

	</div>
								
	</div>
</div>	
	
		<div id="section">

  <!-- Content -->
        <div class="row-fluid">

            <div class="gradient"></div>

            <div class="section-wrap">

<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

 <div class="portlet portlet-default box">
<div class="portlet-title">
	<div class="caption">
 Payment Details
</div>
  <span class="actions pull-right">
<a id="update_description" class="btn btn-warning btn-theme btn-sm" href="<?=site_url('transactions/refund/'  . $id);?>"><span style="color:;"> Refund <i class="fa fa-history"></i></span></a> 
                </span>
</div>

<div class="portlet-body">                

<div class="content-container">      

<div class="row">        

<div class="col-sm-6">
  <dl> 
                    <dt>Date:</dt>

                        <span class="amount"> 

                    <dd>
													 <?=date('M j, Y h:i a', $date);?> <?=$time;?>
															</span>
														</dt>

                <!-- Purely for the fees tipsy -->
                <div class="fee_breakdown hidden" style="display:hidden;">
                    <ul>
                    
                        <li>
                            <em>
                             Processing fees:
                            </em>
                            $<?php echo $fees_today; ?>
                        </li>
                    
                        <li>
                            <em>
                             Processing fee refund:
                            </em>
                            -$0.00
                        </li>
                    
                    </ul>
                </div>

                

                    <dt>Amount:</dt>
                    <dd>
                        <span class="amount">
                         <?=$this->config->item('currency_symbol');?><?=$amount;?> USD
                          
                        </span>
                    </dd>

        <? if ($refunded == '1') { ?>
                        <span class="refunded">
                          <dt>Refunded:</dt>
                          <dd>$0.00
                            
                          </dd>
                        </span>
                    
 <? } else {
                              if($status == 'ok') { ?>

<span></span>

 <? } else { ?>
<span></span>

  <? }
                            } ?> 
                    <dt>Fees:</dt>
                    <dd>
                        <span class="fees">
                            $<?php echo $fees_today; ?>
                            <img src="https://everpayinc.com/assets/app/img/icons/info-filled.png" alt="Info" class="info">
                        </span>
                    </dd>


                     <span class="amount">
                    <dt>Type:</dt>
                    <dd>
Credit Card
        <? if ($refunded == '1') { ?>
                              <span class="">
                                 <span class=" pull-right"></span>
                                <b> Refund date </b>
                                
                              </span>
                            <? } else {
                              if($status == 'ok') { ?>

                              <span class="pull-right hidden">
<a class="btn btn-link btn-xs" data-toggle="confirmation" href="<?=site_url('transactions/refund/'  . $id);?>">
                              <span class="fa fa-history"></span>
                                <b>Issue Refund </b></a>
                              </span>
                              <? } else { ?>
                                <span class="pull-right">
                                  <span class=""></span>
                                  <b> </b>
                                </span>
                              <? }
                            } ?>  

           
                   </dd>													
</span>


</div><!--/col-sm-6-->  

<div class="col-sm-6">
<!-- Transaction Status Details -->



                    <dt>Status:</dt>
                    <dd>

                        <!-- There is also the css class "disputed" -->
                      
                        <span class="fees" style="">
                          

                            <? if ($refunded == '1') { ?>
                              <span class="label label-warning">
                                <b> REFUNDED </b>
                                
                              </span>
                            <? } else {
                              if($status == 'ok') { ?>

                              <span class="label label-success">
                                <b> APPROVED </b>
                              </span>
                              <? } else { ?>
                                <span class="label label-danger">
                                  <b> DECLINED </b>
                                </span>
                              <? }
                            } ?>  
                           
                              
                            </span>
                          
                        
                    </dd>

                    

                    

                    


                    

                                                                                             
													<dt>
														Charge IP:
													</dt>
<dd>
													<span class="value">
									                               <?=$customer_ip_address;?>
													</span>
												</dd>

													<dt>
													Gateway:
													</dt>
<dd>
													<span class="value">
				<a href="<?=site_url('settings/edit_gateway/' . $gateway['gateway_id']);?>"><?=$gateway['alias'];?></a>
													</span>
												</dd>

            <!-- Authorization Details -->
						
	<? if (isset($details) and !empty($details)) { ?>

	<? foreach ($details as $name => $value) { ?>
		<? if (!empty($value) and $name != "order_authorization_id") { ?>
			<dt><?=$name;?>:</dt>
                    <dd id="description"><?=$value;?></dd>

		<? } ?>
	<? } ?>

	<? } ?>


            <!-- Dispute Details -->
                    <dt>Description:</dt>

                    <dd id="description">
.
                    </dd>

													<dt>
													Coupon:
                                                                                                       </dt>
<dd>
                                                                                      <span class="value">											
                                                                                   <? if (!empty($coupon)) { ?><?=$coupon;?><? } ?>
                                                                                      </span>
												</dt>


                </dl>

</div><!--/col-sm-6-->

</div><!--/.row-->

</div><!--content-container-->
</div><!--portlet-body-->

</div><!--portlet blue-hoki box-->	
											

<div class="portlet portlet-default box">
													<div class="portlet-title">
														<div class="caption">
											Card Details
														</div>
														<div class="actions hidden">
						<a href="" class="hidden btn btn-info btn-sm">
											 </a>
														</div>
													</div>

						<div class="portlet-body">
<div class="content-container">
 		
<div class="row">

<div class="col-sm-6">
<!-- Card Holder Details -->
                    <dt>Name:</dt>

                    <dd id="description">
<?=$customer['first_name'];?> <?=$customer['last_name'];?>
                    </dd>

					<!-- Card Digits -->
                    <dt>Last 4:</dt>

                    <dd id="description">
                  <? if (!empty($card_last_four)) { ?> **** **** <?=$card_last_four;?><? } ?> 
                    </dd>
					
					<!-- address -->
                    <dt>Address:</dt>

                    <dd id="description">
                   <?=$customer['address_1'];?>
                    </dd>

					<!-- city -->
                    <dt>City:</dt>

                    <dd id="description">
                    <?=$customer['city'];?>
                    </dd>
					
					<!-- country -->
                    <dt>Country:</dt>

                    <dd id="description">
                    <?=$customer['country'];?>
                    </dd>

</div><!--/col-sm-6-->

<div class="col-sm-6">
                    <!-- Payment Type Details -->
                    <dt>Brand:</dt>

                    <dd id="description">
   <span class="fa fa-credit-card"></span>
                    </dd>

					<!-- Card Expiration -->
                    <dt>Expiry:</dt>

                    <dd id="description">
                  <?=$card_expiry_month;?> / <?=$card_expiry_year;?>
                    </dd>

					<!-- Suite/ Apt/ PO box -->
                    <dt>Address 2:</dt>

                    <dd id="description">
                    <?=$customer['address_2'];?>
                    </dd>

					<!-- Region -->
                    <dt>State/Zip:</dt>

                    <dd id="description">
                   <?=$customer['state'];?>, <?=$customer['postal_code'];?>
                    </dd>


</div>

</div>
 
            			
</div><!--/content-container-->

</div><!--/portlet-body-->
							
</div><!--/portlet blue-hoki box-->

												

<? if (isset($customer)) { ?>
												
<div class="portlet portlet-default box">
													<div class="portlet-title">
														<div class="caption">
											Customer Information
														</div>
														<div class="actions">
						<a href="<?=site_url('customers/edit/' . $customer['id']);?>" class="btn btn-info btn-sm">
											Edit <i class="fa fa-pencil"></i> </a>
														</div>
													</div>

									<div class="portlet-body">
 <div class="content-container">
<dl>
													<dt>
														 Name:
															</dt>

<dd>   <? if (!empty($customer['first_name'])) { ?>
													<span class="value">
									<?=$customer['first_name'];?> <?=$customer['last_name'];?>
															
</span>


														</dd><? } ?>

													<dt>
																 Email:</dt>
		
													<dd>
<span class="value">													
		<? if (!empty($customer['email'])) { ?>
													<?=$customer['email'];?>
															</span>
<? } ?>
														</dd>
<? } ?>

		
<dt>
ID:
</dt>

		<? if (!empty($customer['internal_id'])) { ?>
<dd>
<span class="value">
	<?=$customer['internal_id'];?>
</span>
<? } ?>
															
</dd>

<div class="hr hr-24"></div>

													<dt>
													Address:</dt>
<dd>
													<span class="value">
												<?=$customer['address_1'];?>
					<? if (!empty($customer['address_2'])) { ?>, <?=$customer['address_2'];?><br /><? } ?>
					<? if (!empty($customer['city'])) { ?> <?=$customer['city'];?><? } ?>, <? if (!empty($customer['state'])) { ?> <?=$customer['state'];?><br /><? } ?>

					<? if (!empty($customer['postal_code'])) { ?><?=$customer['postal_code'];?><? } ?> <? if (!empty($customer['country'])) { ?><?=$customer['country'];?><? } ?>
															</span>
														</dd>

                                                                                     <? if (!empty($customer['phone'])) { ?>
													<dt>
													Phone:
															</dt>
<dd>
													<span class="value">
													<?=$customer['phone'];?>
															</span>
	<? } ?>
</dd>


													<dt>
														 Company:
															</dt>
<dd>

<? if (!empty($customer['company'])) { ?>													
<span class="value"><?=$customer['company'];?></span>
<? } ?>
</dd>														

</dl>
        
</div><!--/content-container-->

</div><!--/portlet-body-->
							
</div><!--/portlet blue-hoki box-->

										
<div class="row">
<div class="col-md-12 center">
          <a class="btn btn-success btn-lg center" href="<?=site_url('transactions/create/'  . $id);?>"><i class="fa fa-plus"></i>&nbsp; New Charge </a>
</div>
</div><!--/END/.row-->


</div><!--/END/.col-lg-9-->
</div><!--/END/.row-->

</div><!--/END/.section-wrap-->
</div><!--/END/.row-fluid-->
</div><!--/END/.#section-->

   </div><!--/END/.section clearfix-->
   </div><!--/END/.detail-container-->
   </div><!--/END/.payment-view-->

</div><!--/END/.row-->
</div><!--/END/.stats-clearfix-->


<?=$this->load->view(branded_view('cp/footer'));?>