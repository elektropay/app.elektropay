<?=$this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>'));?>
	<script type="text/javascript" src="<?=branded_include('js/formmapper.js');?>"></script>
	<script type="text/javascript" src="<?=branded_include('js/moment.min.js');?>"></script>
	<script type="text/javascript" src="<?=branded_include('js/livestamp.min.js');?>"></script>
	

<link href="<?=branded_include('css/customer-page.css'); ?>" rel="stylesheet" type="text/css" media="screen" />

<style type="text/css">
/** FIX for Bootstrap and Google Maps Info window styes problem **/
img[src*="gstatic.com/"], img[src*="googleapis.com/"] {
max-width: none;
 min-height:620px;}
}

.content-wrapper {
    margin-top: 40px!important;
}

.widget-box{padding:15px; min-height:280px;}

.widget-flat { min-height:280px;}

section#user-details-section h5 {
    text-transform: uppercase;
    border-bottom: 1px solid #d0d2d3;
    padding-bottom: 20px;
    letter-spacing: .5px;
    font-size: 0.9rem;
    font-weight: bold;
    margin-top: 10px;
    margin-bottom: 20px;
}

.modal form {
    background-color: #fff;
}

.form-horizontal {
    margin-top: 0px;
}

.modal .modal-body {
    overflow-y: auto;
    margin: 0;
    padding: 0 40px;
    background-color: #fff;
}
</style>

<div class="content-wrapper" style=" margin-top: 30px!important;">

<div class="clearfix" style="height: auto;">		
					
<div class="row">
										
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																	
<div class="portlet-body form">

<? if ($this->user->Get('client_type_id') == '1') { ?>
 <div class="row clearfix">

</div><!-- END.row clearfix-->	

<? } elseif ($this->user->Get('client_type_id') == '3') { ?>
					
<section id="user-details-section" data-route-regex="^\/users\/" data-title="User Details " class="col-md-12 current">

	
    <div class="content-header">
        <h1>Customer Details</h1>

        <div class="actions-area">
            
            <div class="sign-in-as dropdown">
</div>
            <div class="dropdown">
              <a class="dropdown-toggle btn btn-primary btn-mid new" data-toggle="dropdown" href="#" aria-expanded="false">Actions <b class="caret"></b></a>
              <ul class="dropdown-menu user-actions pull-right" role="menu" aria-labelledby="dLabel">
			  
			  <li>
	
		<a class="js-block-unblock-user" data-block-status="unblocked" href="#" title="Edit Customer Details" data-toggle="modal" data-target="#editCustomerModal">Edit Customer </a>
	
</li>

<li class="divider"></li>
<li>
	<a class="send-marketing-email-modal" href="#" title="Send Marketing Email" data-toggle="modal" data-target="#send-marketing-email-modal">Send marketing e-mail</a>
</li>

<li class="divider"></li>

<li>
	 <a href="#confirm-delete-user" data-toggle="modal">Delete Customer</a>
</li>

</ul>
            </div>
            
        </div>
    </div>

    <div class="bcrumb hide">
        <a href="/" class="tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a>
        <a href="#/customers">Customers</a>
        <a href="" class="current">Customer Details</a>
    </div>

    <div class="col-md-12 content-wrapper">

<form class="form-horizontal" id="form_customer" method="post" action="<?=site_url($form_action);?>">
	
<div class="user-header">
    <img class="img-polaroid" src="<?=branded_include('img/avatars/avatar.png');?>" alt="">
    

    <div class="user-bg-box">
        <img class="user-bg" src="<?=branded_include('img/avatars/avatar.png');?>">

        <div class="box-content">
            <div class="login-count">
                <span class="lined-text">Charge Count:</span>
                <strong>0</strong>
            </div>
            <div class="username-area">
                <h4>
                    <span class="name user-head-nickname editable editable-click" id="email" style="display: inline;">
                   <?=$form['first_name'];?>  <?=$form['last_name'];?>
									                    </span>

                    
                       <a class="user-label user-head-email" href="<?=$form['email'];?>"><?=$form['email'];?></a>
                    
                    <span class="user-label user-blocked js-customer-status" style="display: hidden none;">Verified</span>
                </h4>
            </div>
        </div>
    </div>
</div>

<div class="detail-nav">
    <ul class="nav nav-tabs" id="detail-nav">
        <li class="active"><a href="#userdetails-details" class="userdetails-details" data-toggle="tab" aria-expanded="true">Details</a></li>
        <li class=""><a href="#userdetails-address" class="userdetails-devices" data-toggle="tab" aria-expanded="false">Address</a></li>
        <li class=""><a href="#userdetails-history" class="userdetails-history" data-toggle="tab" aria-expanded="false">History</a></li>
        <li class=""><a href="#userdetails-location" class="userdetails-location" data-toggle="tab" aria-expanded="false">Locations</a></li>
        <li class=""><a href="#userdetails-json" class="userdetails-json" data-toggle="tab" aria-expanded="false">Raw JSON</a></li>
    </ul>
</div>

<div class="tab-content">
    <div class="tab-pane active" id="userdetails-details">
        <div class=" user-details">

                <div class="row form-group details-main">

                    

                    
                    <div class="col-xs-4 field">
                        <div class="field-title">
                            Email
                            
<span class="edit-user-email icon-circle" title="Edit email" data-toggle="modal" data-target="#personalInfoModal">
                                <i class="icon-budicon-274"></i>
                            </span>
                            
                        </div>

                    <span class="name user-head-nickname editable editable-click" id="email" style="display: inline;">
                   <?=$form['email'];?></span>
                            <span class="user-email-verified hidden">(verified)</span>
                        
                    </div>
                    

                    
                    
                    <div class="col-xs-4 field">
                        <div class="field-title">Customer Since</div>
                        <?=date('M j, Y h:i a', $date);?> <?=$time;?>
                    </div>
                    

                    <div class="col-xs-4 field">
                        <div class="field-title">Recurring Customer</div>
                        <div class="text-label logins-count" style="margin:2px;">
                        no
                        </div>
                    </div>


                    <div class="col-xs-4 field">
                        <div class="field-title">Primary Processor  </div>                                          
						<span class="name user-head-nickname editable editable-click" id="gateway" style="display: inline;">
                   <?=$form['gateway_name'];?>
                        Test Gateway</span>
                    </div>

                    <div class="col-xs-4 field">
                        <div class="field-title">Company</div>
                        <div class="text input-mask-phone"> <?=$form['company'];?></div>
                    </div>

                    <div class="col-xs-4 field">
                        <div class="field-title">Phone</div>
                        <div class="text"> <?=$form['phone'];?></div>
                    </div>

                    <div class="col-xs-4 field">
                        <div class="field-title">Last Payment</div>
						  <div class="text-label" id="login" style="margin:2px;">
						<script>
    moment().format();
</script>
    <?php echo date("D M d, Y G:i a"); ?>
					     </div>
                    </div>

                    <div class="col-xs-4 field">
                        <div class="field-title">Accounts Associated</div>
                        <div class="text-label" style="margin:2px;">
                            
                                None
                            
                        </div>
                    </div>


                    <div class="col-xs-4 field">
                        <div class="field-title">Browser</div>
                        <div class="user-agent text-label">Other 0.0.0 / Other 0.0.0</div>
                    </div>

                </div>
        </div>

        <div class="widget-box">
            <h5>Metadata</h5>
            <div class="metadata widget-box box-highlight">
			<form class="form-user-metadata form-horizontal">
  <div class="form-group user-metadata">
    <label class="col-xs-3 control-label truncate" title="user_metadata">
      customer_metadata
      <span class="help" rel="tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="data that the user has read/write access to (e.g. color_preference, blog_url, etc.)">
        <i class="icon-question-sign">&nbsp;</i>
      </span>
    </label>

    <div class="col-xs-9 info-field">
      <div style="word-wrap:break-word;">

        
            No metadata yet.
        

      </div>
    </div>
  </div>
  <div class="form-group app-metadata">
    <label class="col-xs-3 control-label truncate" title="app_metadata">
      payment_metadata
      <span class="help" rel="tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="data that the user has read-only access to (e.g. roles, permissions, vip, etc)">
        <i class="icon-question-sign">&nbsp;</i>
      </span>
    </label>

    <div class="col-xs-9 info-field">
      <div style="word-wrap:break-word;">

        
          No metadata yet.
        

      </div>
    </div>
  </div>
  
    <div class="form-group app-metadata hidden">
    <div class="col-xs-3 control-label truncate"></div>
    <div class="col-xs-9 info-field">
      <button class="btn btn-primary btn-edit-metadata">Edit</button>
    </div>
    </div>
  
</form>
</div>

            <h5>Payment Provider Attributes</h5>
            <div class="external widget-box box-highlight"><div class="form-horizontal">
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="connection">connection</label>
        <div class="col-xs-9 info-field">
          
            
              
                Credit-Card-Payments
              
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="user_id">customer_id</label>
        <div class="col-xs-9 info-field">
		 <span class="info-field" id="email" style="display: inline;">
<?=$form['internal_id'];?>  </span>          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="provider">provider</label>
        <div class="col-xs-9 info-field">
          
            
              
                Everpay
              
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="picture">picture</label>
        <div class="col-xs-9 info-field">
          
            <div class="row">
              <div class="col-xs-8">
                <input id="picture-url" class="form-control" type="text" value="https://secure.gravatar.com/avatar/f5b2e94b2af6fdd5568a34dbd4cf9e62?s=480&amp;r=pg&amp;d=https%3A%2F%2Fcdn.auth0.com%2Favatars%2Fri.png" readonly="">
              </div>
              <div class="col-xs-2">
                <button class="btn copy-btn btn-default" data-clipboard-target="picture-url">
                  <i class="icon-budicon-669"></i>
                </button>
              </div>
            </div>
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="identities">identities</label>
        <div class="col-xs-9 info-field">
          
            
              <div style="word-wrap:break-word;">


                <div class="row">
                  <div class="col-xs-8">
                    <textarea id="identities-obj" class="form-control" readonly="">[
  {
    "connection": "Payment-Authentication",
    "customer_id": "<?=$form['internal_id'];?>",
    "provider": "Everpay",
    "isSocial": false
  }
]</textarea>
                  </div>
                  <div class="col-xs-2">
                    <button class="btn copy-btn btn-default" data-clipboard-target="identities-obj">
                      <i class="icon-budicon-669"></i>
                    </button>
                  </div>
                </div>
              </div>
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="updated_at">updated_at</label>
        <div class="col-xs-9 info-field">
          
            
              
                2015-08-14T04:50:09.810Z
              
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="created_at">created_at</label>
        <div class="col-xs-9 info-field">
          
            
              
                2015-08-14T04:50:09.810Z
              
            
          
        </div>
    </div>
  
</div>
</div>
        </div>

    </div>

    <div class="tab-pane" id="userdetails-address">
        <div class="devices widget-box" style="padding:10px;">
		 <h5>
		 Billing Address 
		 <span class="edit-user-email icon-circle pull-right" title="Edit Billing Address" data-toggle="modal" data-target="#billingAddressModal">
                                <i class="icon-budicon-274"></i>
                            </span>
							</h5>
		 <div class="explanation">
  <i class="icon-info-sign"></i>
  The Billing Address for this particular customer. To edit the address just click on the     <span class="edit-user-email icon-circle" title="Edit Customer Details" data-toggle="modal" data-target="#editCustomerModal">
                                <i class="icon-budicon-274"></i>
                            </span> to do so.
</div>
<div class="widget-flat devices-list">

  <div id="devices-list_wrapper" class="wrapper" role="grid">
           <div class="row form-group details-main">
           <div class="col-xs-12">       
		         
	               <div class="col-xs-4 field">
                        <div class="field-title">
                            Address
                            
                            
                        </div>

                    <span class="name user-head-nickname editable editable-click" id="address_1" style="display: inline;">
                   <?=$form['address_1'];?></span>
                            <span class="user-email-verified"></span>
                     
                    </div>
					
					       <div class="col-xs-4 field">
                        <div class="field-title">
                            Address 2
                            
                            
                        </div>

                    <span class="name user-head-nickname editable editable-click" id="address_2" style="display: inline;">
                   <?=$form['address_2'];?></span>
                            <span class="edit-user-email icon-circle" title="Edit Suite/Apt/PO Box">
                      
                            </span>
                            <span class="user-email-verified"></span>
                        
                    </div>
					
					       <div class="col-xs-4 field">
                        <div class="field-title">
                           City
                          
                            
                        </div>

                    <span class="name user-head-nickname editable editable-click" name="city" id="city" style="display: inline;" geoname="locality" >
                   <?=$form['city'];?>
				   </span>  
                            <span class="edit-user-email icon-circle" title="Edit City">
                              
                            </span>
                            <span class="user-email-verified"></span>
                        
                    </div>
					       <div class="col-xs-4 field">
                        <div class="field-title">
                            State/ Province
                            
                            
                            
                        </div>

                    <span class="name user-head-nickname editable editable-click" id="state" style="display: inline;">
                   <select geoname="administrative_area_level_1_short" id="state_select" class="form-control" name="state_select"><?php
																			foreach ($states as $state) {
																				if ($form['state'] == $state['code']) { ?>
																					<option  selected="selected"  value="<?=$state['code'];?>"><?=$state['name'];?></option><?php
																				} else { ?>
																					<option value="<?=$state['code'];?>"><?=$state['name'];?></option><?php
																				}
																			} ?></select>
			
                            <span class="user-email-verified"></span>
                        
                    </div>
					       <div class="col-xs-4 field">
                        <div class="field-title">
                            Zip/ Postal
                           
                            
                        </div>

                    <span class="name user-head-nickname editable editable-click" id="postal_code" style="display: inline;">
                   <?=$form['postal_code'];?></span> 
                            <span class="edit-user-email icon-circle" title="Edit Zip/Postal Code">
                               
                            </span>
                            <span class="user-email-verified"></span>
                        
                    </div>
					
					       <div class="col-xs-4 field">
                        <div class="field-title">
                            Country                            
                        </div>

                    <span class="name user-head-nickname" id="country" style="display: inline;">
                   <select geoname="country_short" id="country" name="country"><option value=""></option><? foreach ($countries as $country) { ?><option <? if ($form['country'] == $country['iso2']) { ?> selected="selected" <? } ?> value="<?=$country['iso2'];?>"><?=$country['name'];?></option><? } ?>
																		</select></span>
                       
                        
                    </div>
					
	</div>
					<hr>
					
		  <div class="devices widget-box" style="padding:10px;">
		         <h5>
				 Shipping Address
				 
				  <span class="edit-user-email icon-circle pull-right" title="Edit Shipping Address" data-toggle="modal" data-target="#shippingAddressModal">
                                <i class="icon-budicon-274"></i>
                            </span>
				 
				 </h5>
          
		  
		  </div>
		  
    <div class="actions-group">
    </div>
	
	</div>
	  </div><!--END.col-xs-12-->

</div><!--END.explanation-->
</div><!--END.widget-box-->
    </div><!--END.tab-pane-->

    <div class="tab-pane" id="userdetails-history">
        <div class="payment-history widget-box">
		<div class="explanation">
  <i class="icon-info-sign"></i>
  Max. Log Storage: 2 days.
</div>
<div class="widget-flat logs-list">
  <div id="logs-list_wrapper" class="dataTables_wrapper" role="grid">
    <table class="table data-table dataTable" style="table-layout:fixed">
      <thead>
        <tr>
          <th width="7%"></th>
          <th>Event</th>
          <th>When</th>
          <th>Type</th>
          <th>Gateway</th>
          <th>IP Address</th>
          <th>From</th>
        </tr>
      </thead>
      <tbody>
  
  <tr data-toggle="collapse" data-target="#failed-55cd738198dcd9b5627577e5" class="accordion-toggle pointer">
    <td>
      <i style="color:green" class="icon-budicon-314"></i>
    
    </td>
    <td class="truncate"><span title="Success Payment">Successful Payment</span></td>
    <td class="truncate" rel="tooltip" title="14 August 2015 0:50:9">
      a minute ago
    </td>
    <td class="truncate"><span title="N/A">All Applications</span></td>
    <td class="truncate"><span title="Username-Password-Authentication">Username-Password-Authentication</span></td>
    <td class="truncate">127.0.0.1</td>
    
      <td class="truncate">N/A or Internal Network</td>
    
  </tr>

  

  
</tbody>
    </table>
    <div class="actions-group">
      Showing <span class="current_logs_count">1</span> of <span class="total_logs_count">1</span>&nbsp;
      <button class="btn btn-primary" id="loadMoreLogs" data-loading-text="Loading..." disabled="disabled">
        <i class="icon-white icon-budicon-473"></i> More
      </button>
    </div>
  </div>
</div>
</div>
    </div>
    <div class="tab-pane" id="userdetails-location">
        <div class="login-locations widget-box">
		<div class="widget-content">
		<div class="row">
		 <div class="col-xs-4 field js-user-country">
                        <div class="field-title">Longitude</div>
                        <div class="text" name="lng" id="lng" geoname="lng"> <?=$form['lng'];?></div>
                    </div>

                    <div class="col-xs-4 field js-user-city">
                        <div class="field-title">Latitude</div>
                        <div class="text">
                   <div class="text" name="lat" id="lat" geoname="lat"> <?=$form['lat'];?></div>
                    </div>
					</div>
					
	<div id="map-canvas" style="width: 100%; height: 620px; position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);">
	<div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;">
	<div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(https://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default;">
	<div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
	<div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
	<div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
	<div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -122px; top: -192px;"></div></div></div></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -122px; top: -192px;"></div></div></div></div><div style="position: absolute; z-index: 0; transform: translateZ(0px); left: 0px; top: 0px;"><div style="overflow: hidden;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="transform: translateZ(0px); position: absolute; left: -122px; top: -192px; width: 256px; height: 256px; transition: opacity 200ms ease-out;"><img src="https://mts0.googleapis.com/vt?pb=!1m4!1m3!1i2!2i0!3i0!2m3!1e0!2sm!3i317206090!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0" draggable="false" style="-webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 256px; height: 256px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=74.019543,-137.109375&amp;z=2&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 62px; height: 26px; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/google_white2.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 62px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 0px; height: 0px; position: absolute; left: 5px; top: 5px; background-color: white;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;"></div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 0px; bottom: 0px; width: 12px;"><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span style="display: none;"></span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);"></div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; -webkit-user-select: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; display: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a target="_new" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@74.0195433,-137.109375,2z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint" draggable="false" controlwidth="32" controlheight="84" style="margin: 5px; -webkit-user-select: none; position: absolute; left: 0px; top: 0px;"><div controlwidth="32" controlheight="40" style="cursor: url(https://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default; position: absolute; left: 0px; top: 0px;"><div aria-label="Street View Pegman Control" style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -9px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div aria-label="Pegman is disabled" style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -107px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div aria-label="Pegman is on top of the Map" style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -58px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div aria-label="Street View Pegman Control" style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -205px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoprint" controlwidth="0" controlheight="0" style="opacity: 0.6; display: none; position: absolute;"><div title="Rotate map 90 degrees" style="width: 22px; height: 22px; overflow: hidden; position: absolute; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -38px; top: -360px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoprint" controlwidth="20" controlheight="39" style="position: absolute; left: 6px; top: 45px;"><div style="width: 20px; height: 39px; overflow: hidden; position: absolute;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -39px; top: -401px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div title="Zoom in" style="position: absolute; left: 0px; top: 2px; width: 20px; height: 17px; cursor: pointer;"></div><div title="Zoom out" style="position: absolute; left: 0px; top: 19px; width: 20px; height: 17px; cursor: pointer;"></div></div></div><div class="gmnoprint gm-style-mtc" style="margin: 5px; z-index: 0; position: absolute; cursor: pointer; text-align: left; width: 85px; right: 0px; top: 0px;"><div draggable="false" title="Change map style" style="direction: ltr; overflow: hidden; text-align: left; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 1px 6px; border-radius: 2px; -webkit-background-clip: padding-box; border: 1px solid rgba(0, 0, 0, 0.14902); box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; font-weight: 500; background-color: rgb(255, 255, 255); background-clip: padding-box;">Map<img src="https://maps.gstatic.com/mapfiles/arrow-down.png" draggable="false" style="-webkit-user-select: none; border: 0px; padding: 0px; margin: -2px 0px 0px; position: absolute; right: 6px; top: 50%; width: 7px; height: 4px;"></div><div style="z-index: -1; padding-top: 2px; -webkit-background-clip: padding-box; border-width: 0px 1px 1px; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); border-left-color: rgba(0, 0, 0, 0.14902); box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; top: 100%; left: 0px; right: 0px; text-align: left; display: none; background-color: white; background-clip: padding-box;"><div draggable="false" title="Show street map" style="color: black; font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px; font-weight: 500; background-color: rgb(255, 255, 255);">Map</div><div draggable="false" title="Show satellite imagery" style="color: black; font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px; background-color: rgb(255, 255, 255);">Satellite</div><div style="margin: 1px 0px; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(235, 235, 235);"></div><div draggable="false" title="Show street map with terrain" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div><div style="margin: 1px 0px; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(235, 235, 235); display: none;"></div><div draggable="false" title="Zoom in to show 45 degree view" style="color: rgb(184, 184, 184); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap; display: none; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(241, 241, 241); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">45°</label></div><div draggable="false" title="Show imagery with street names" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 3px 8px 3px 3px; direction: ltr; text-align: left; white-space: nowrap; display: none; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div></div>
</div>
</div>
    </div>

	    </div>
		
    <div class="tab-pane" id="userdetails-json">
        <div class="user-json widget-box">
		<pre class="prettyprint user-json-text prettyprinted" style="min-height: 50vh;">
		
		<span class="pln">  </span><span class="pun">{</span>
<span class="pun">}</span><span class="pln">  </span>
		<span class="pun">{</span>
		<span class="pln"></span><span class="str">"email"</span>
	<span class="pun">:</span>
	<span class="pln"> </span><span class="str">"<?=$form['email'];?>"</span>
	<span class="pun">,</span><span class="pln"></span>
	<span class="str">"connection"</span><span class="pun">:</span>
	<span class="pln"> </span><span class="str">"Payment-Authentication"</span>
	<span class="pun">,</span><span class="pln">
    </span><span class="str">"email_verified"</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"customer_id"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"auth0|<?=$form['internal_id'];?>"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"provider"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"auth0"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"picture"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"https://secure.gravatar.com/avatar/f5b2e94b2af6fdd5568a34dbd4cf9e62?s=480&amp;r=pg&amp;d=https%3A%2F%2Fcdn.auth0.com%2Favatars%2Fri.png"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"nickname"</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">null</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"identities"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">[</span><span class="pln">
        </span><span class="pun">{</span><span class="pln">
            </span><span class="str">"connection"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Payment-Authentication"</span><span class="pun">,</span><span class="pln">
            </span><span class="str">"payment_id"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"<?=$form['internal_id'];?>"</span><span class="pun">,</span><span class="pln">
            </span><span class="str">"provider"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"everpay"</span><span class="pun">,</span><span class="pln">
            </span><span class="str">"isSocial"</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">false</span><span class="pln">
        </span><span class="pun">}</span><span class="pln">
    </span><span class="pun">],</span><span class="pln">
    </span><span class="str">"updated_at"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"2015-08-14T04:50:09.810Z"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"created_at"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"2015-08-14T04:50:09.810Z"</span><span class="pln">
</span>

<span class="pun">}</span>
</div>

</pre>

</div>
    </div>
</div>


</form>


<div id="editCustomerModal" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h1>Edit Customer Info</h1>
    </div>
	
<div class="form-horizontal">
 <div class="modal-body">
														
<div class="form-body">
	
 <form class="form-horizontal" id="form_customer" method="post" action="<?=site_url($form_action);?>">														
<div class="form-group">
<h5>Customer Information</h5>
							<label class="col-sm-4 col-md-3 control-label no-padding-right" for="first_name">Name</label>
																		
																		<div class="col-sm-8 col-md-9">
																		<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-user"></i>
																		</span>
																			<input class="input-small" type="text" id="form-field-first" placeholder="First Name" rel="First Name" id="first_name" name="first_name" value="<?=$form['first_name'];?>" />
																			&nbsp;&nbsp;<input class="input-small" type="text" id="form-field-last" placeholder="Last Name" rel="Last Name" id="last_name" name="last_name" value="<?=$form['last_name'];?>" />
																		</div>
																	    </div>
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
															
															
															<h5>Billing Address</h5>

														
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
															
															
														</div><!--/form-body-->
												</div><!-- END/.modal-body-->
									</div><!-- END/.form-horizontal-->						
					
    <div class="modal-footer center">
        <button class="btn btn-primary btn-lg" data-dismiss="modal" aria-hidden="true">Cancel</button>
		<input type="submit" class="btn btn-success btn-lg" name="go_customer" value="<?=ucfirst($form_title);?>" />
 		 	</form><!-- END FORM-->
	</div><!-- END/.modal-footer-->
	
       </div><!-- END/.modal-content-->
	</div><!-- END/.modal-dialog-->
</div><!-- END/ .modal-->



<div id="confirm-delete-user" class="modal" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button">×</button>
            <h1 class="modal-title">Delete Customer</h1>
        </div>

        <div class="form-horizontal">
            <div class="modal-body">
			
			
               <p class="lead"> Are you really sure you want to delete this customer?
                <strong>This cannot be undone!</strong></p>
				<br />
				
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger confirm" data-loading-text="removing...">Yes, delete it</button>
                <button data-dismiss="modal" class="btn dismiss">Cancel</button>
           </div><!-- END/.modal-footer-->
        </div>

    </div>
  </div>
</div>

    <div id="send-marketing-email-modal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Send Marketing Promo e-mail</h1>
            </div>

            <div class="modal-body">
                <p class="lead">Do you want to send a marketing e-mail to this user?</p>
            </div>
			
            <div class="modal-footer">
        <button class="btn btn-confirm confirm" data-loading-text="Send Request.."  data-dismiss="modal">Send</button>
        
                <button class="btn btn-danger cancel" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
    
    <div id="change-password" class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h1 class="modal-title">Change Password</h1>
        </div>

        <form class="form-horizontal" id="change-password-form">
            <div class="modal-body">
                <div class="error-message"></div>

                <div class="form-group">
                    <label class="control-label col-xs-3">Password</label>
                    <div class="controls col-xs-9">
                        <input class="form-control" type="password" name="password" id="changed-password" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Repeat Password</label>
                    <div class="controls col-xs-9">
                        <input class="form-control" type="password" name="repeatPassword" id="changed-password-repeat" required="">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" data-loading-text="Saving..." class="btn btn-primary">Save</button>
            </div>
        </form>

    </div>
  </div>
</div>



    


<div class="spin-container loading-spin  " style="display: none;">


  <div class="spinner-css small">
    <span class="side sp_left">
      <span class="fill"></span>
    </span>
    <span class="side sp_right">
      <span class="fill"></span>
    </span>
  </div>
</div>

<!-- reset value so it does not have to be set everywhere -->


<? } ?>



					
<!-- BEGIN FORM-->
													
	<form class="form-horizontal" id="form_customer" method="post" action="<?=site_url($form_action);?>">
														
<div class="form-body">
															
<div class="form-group">
																<label class="col-md-3 control-label">Internal Identifier</label>
																<div class="col-md-6">
																	<input type="text" class="form-control" id="internal_id" name="internal_id" value="<?=$form['internal_id'];?>" />
																	<em class="help-block"><small>This identifier can be a username or account ID for your internal systems.  It can be used via the API to synchronize customer data on our system with other software by providing a cross-system unique identifier.</small></em>
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

															<div class="form-group">
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

															<div class="form-group">
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
															
															</div><!--/form-group-->
														</div><!--/form-body-->
														
													</form><!-- END FORM-->
											
</div><!--/portlet-body-form-->	
			
			
			</div><!--/.content-->	

<script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>	

<script type="text/javascript">
$(document).ready(function(){
$("#submit").click(function(){
$("#form_customer").submit();  
});
  </script>		

<script type="text/javascript">

$(document).ready(function(){
$("#submit").click(function(){
var internal_id = $("#internal_id").val();
var first_name = $("#first_name").val();
var last_name = $("#last_name").val();
var email = $("#email").val();
var company = $("#company").val();
var address_1 = $("#address_1").val();
var address_2 = $("#address_2").val();
var city = $("#city").val();
var state = $("#state").val();
var postal_code = $("#postal_code").val();
var country = $("#country").val();
var phone = $("#phone").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'internal_id1='+ internal_id + '&first_name1='+ first_name + '&last_name1='+ last_name + '&email1='+ email + '&company1='+ company + '&address_11='+ address_1 + '&address_21='+ address_2 + '&city1='+ city + '&state='+ state + '&postal_code1='+ postal_code + '&country='+ country '&phone='+ phone  ;
if(name=='first_name'||last_name==''||email==''||phone=='')
{
alert("Please Fill Out The Minimum Required Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "customers/edit/",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});

</script>



<script type="text/javascript">
			jQuery(function($) {
			
				//editables on first profile page
				$.fn.editable.defaults.mode = 'inline';
				$.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
			    $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
			                                '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';    
				
				//editables 
				
				//text editable
			    $('#username')
				.editable({
					type: 'text',
					name: 'username'
			    });
				
				   $('#first_name')
				.editable({
					type: 'text',
					name: 'first_name'
			    });
			
			   $('#first_name')
				.editable({
					type: 'text',
					name: 'last_name'
			    });
			
			   $('#phone')
				.editable({
					type: 'text',
					name: 'phone'
			    });
			
			   $('#email')
				.editable({
					type: 'text',
					name: 'email'
			    });
			   $('#address_1')
				.editable({
					type: 'text',
					name: 'address_1'
			    });
			   $('#company')
				.editable({
					type: 'text',
					name: 'company'
			    });
			   $('#address_2')
				.editable({
					type: 'text',
					name: 'address_2'
			    });
			   $('#city')
				.editable({
					type: 'text',
					name: 'username'
			    });
				   $('#postal_code')
				.editable({
					type: 'text',
					name: 'username'
			    });
			
				
				//select2 editable
				var countries = [];
			    $.each({ "CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function(k, v) {
			        countries.push({id: k, text: v});
			    });
			
				var cities = [];
				cities["CA"] = [];
				$.each(["Toronto", "Ottawa", "Calgary", "Vancouver"] , function(k, v){
					cities["CA"].push({id: v, text: v});
				});
				cities["IN"] = [];
				$.each(["Delhi", "Mumbai", "Bangalore"] , function(k, v){
					cities["IN"].push({id: v, text: v});
				});
				cities["NL"] = [];
				$.each(["Amsterdam", "Rotterdam", "The Hague"] , function(k, v){
					cities["NL"].push({id: v, text: v});
				});
				cities["TR"] = [];
				$.each(["Ankara", "Istanbul", "Izmir"] , function(k, v){
					cities["TR"].push({id: v, text: v});
				});
				cities["US"] = [];
				$.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"] , function(k, v){
					cities["US"].push({id: v, text: v});
				});
				
				var currentValue = "NL";
			    $('#country').editable({
					type: 'select2',
					value : 'NL',
					//onblur:'ignore',
			        source: countries,
					select2: {
						'width': 140
					},		
					success: function(response, newValue) {
						if(currentValue == newValue) return;
						currentValue = newValue;
						
						var new_source = (!newValue || newValue == "") ? [] : cities[newValue];
						
						//the destroy method is causing errors in x-editable v1.4.6+
						//it worked fine in v1.4.5
						/**			
						$('#city').editable('destroy').editable({
							type: 'select2',
							source: new_source
						}).editable('setValue', null);
						*/
						
						//so we remove it altogether and create a new element
						var city = $('#city').removeAttr('id').get(0);
						$(city).clone().attr('id', 'city').text('Select City').editable({
							type: 'select2',
							value : null,
							//onblur:'ignore',
							source: new_source,
							select2: {
								'width': 140
							}
						}).insertAfter(city);//insert it after previous instance
						$(city).remove();//remove previous instance
						
					}
			    });
			
				$('#city').editable({
					type: 'select2',
					value : 'Amsterdam',
					//onblur:'ignore',
			        source: cities[currentValue],
					select2: {
						'width': 140
					}
			    });
			
			
				
				//custom date editable
				$('#signup').editable({
					type: 'adate',
					date: {
						//datepicker plugin options
						    format: 'yyyy/mm/dd',
						viewformat: 'yyyy/mm/dd',
						 weekStart: 1
						 
						//,nativeUI: true//if true and browser support input[type=date], native browser control will be used
						//,format: 'yyyy-mm-dd',
						//viewformat: 'yyyy-mm-dd'
					}
				})
			
			    $('#age').editable({
			        type: 'spinner',
					name : 'age',
					spinner : {
						min : 16,
						max : 99,
						step: 1,
						on_sides: true
						//,nativeUI: true//if true and browser support input[type=number], native browser control will be used
					}
				});
				
			
			    $('#user-details-section').editable({
			        type: 'slider',
					name : 'login',
					
					slider : {
						 min : 1,
						  max: 50,
						width: 100
						//,nativeUI: true//if true and browser support input[type=range], native browser control will be used
					},
					success: function(response, newValue) {
						if(parseInt(newValue) == 1)
							$(this).html(newValue + " hour ago");
						else $(this).html(newValue + " hours ago");
					}
				});
			
				$('#about').editable({
					mode: 'inline',
			        type: 'wysiwyg',
					name : 'about',
			
					wysiwyg : {
						//css : {'max-width':'300px'}
					},
					success: function(response, newValue) {
					}
				});
				
				
				
				// *** editable avatar *** //
				try {//ie8 throws some harmless exceptions, so let's catch'em
			
					//first let's add a fake appendChild method for Image element for browsers that have a problem with this
					//because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
					try {
						document.createElement('IMG').appendChild(document.createElement('B'));
					} catch(e) {
						Image.prototype.appendChild = function(el){}
					}
			
					var last_gritter
					$('#avatar').editable({
						type: 'image',
						name: 'avatar',
						value: null,
						image: {
							//specify ace file input plugin's options here
							btn_choose: 'Change Avatar',
							droppable: true,
							maxSize: 110000,//~100Kb
			
							//and a few extra ones here
							name: 'avatar',//put the field name here as well, will be used inside the custom plugin
							on_error : function(error_type) {//on_error function will be called when the selected file has a problem
								if(last_gritter) $.gritter.remove(last_gritter);
								if(error_type == 1) {//file format error
									last_gritter = $.gritter.add({
										title: 'File is not an image!',
										text: 'Please choose a jpg|gif|png image!',
										class_name: 'gritter-error gritter-center'
									});
								} else if(error_type == 2) {//file size rror
									last_gritter = $.gritter.add({
										title: 'File too big!',
										text: 'Image size should not exceed 100Kb!',
										class_name: 'gritter-error gritter-center'
									});
								}
								else {//other error
								}
							},
							on_success : function() {
								$.gritter.removeAll();
							}
						},
					    url: function(params) {
							// ***UPDATE AVATAR HERE*** //
							//for a working upload example you can replace the contents of this function with 
							//examples/profile-avatar-update.js
			
							var deferred = new $.Deferred
			
							var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
							if(!value || value.length == 0) {
								deferred.resolve();
								return deferred.promise();
							}
			
			
							//dummy upload
							setTimeout(function(){
								if("FileReader" in window) {
									//for browsers that have a thumbnail of selected image
									var thumb = $('#avatar').next().find('img').data('thumb');
									if(thumb) $('#avatar').get(0).src = thumb;
								}
								
								deferred.resolve({'status':'OK'});
			
								if(last_gritter) $.gritter.remove(last_gritter);
								last_gritter = $.gritter.add({
									title: 'Avatar Updated!',
									text: 'Uploading to server can be easily implemented. A working example is included with the template.',
									class_name: 'gritter-info gritter-center'
								});
								
							 } , parseInt(Math.random() * 800 + 800))
			
							return deferred.promise();
							
							// ***END OF UPDATE AVATAR HERE*** //
						},
						
						success: function(response, newValue) {
						}
					})
				}catch(e) {}
				
				/**
				//let's display edit mode by default?
				var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
				if(blank_image) {
					$('#avatar').editable('show').on('hidden', function(e, reason) {
						if(reason == 'onblur') {
							$('#avatar').editable('show');
							return;
						}
						$('#avatar').off('hidden');
					})
				}
				*/
			
				//another option is using modals
				$('#avatar2').on('click', function(){
					var modal = 
					'<div class="modal fade">\
					  <div class="modal-dialog">\
					   <div class="modal-content">\
						<div class="modal-header">\
							<button type="button" class="close" data-dismiss="modal">&times;</button>\
							<h4 class="blue">Change Avatar</h4>\
						</div>\
						\
						<form class="no-margin">\
						 <div class="modal-body">\
							<div class="space-4"></div>\
							<div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
						 </div>\
						\
						 <div class="modal-footer center">\
							<button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>\
							<button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
						 </div>\
						</form>\
					  </div>\
					 </div>\
					</div>';
					
					
					var modal = $(modal);
					modal.modal("show").on("hidden", function(){
						modal.remove();
					});
			
					var working = false;
			
					var form = modal.find('form:eq(0)');
					var file = form.find('input[type=file]').eq(0);
					file.ace_file_input({
						style:'well',
						btn_choose:'Click to choose new avatar',
						btn_change:null,
						no_icon:'ace-icon fa fa-picture-o',
						thumbnail:'small',
						before_remove: function() {
							//don't remove/reset files while being uploaded
							return !working;
						},
						allowExt: ['jpg', 'jpeg', 'png', 'gif'],
						allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
					});
			
					form.on('submit', function(){
						if(!file.data('ace_input_files')) return false;
						
						file.ace_file_input('disable');
						form.find('button').attr('disabled', 'disabled');
						form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");
						
						var deferred = new $.Deferred;
						working = true;
						deferred.done(function() {
							form.find('button').removeAttr('disabled');
							form.find('input[type=file]').ace_file_input('enable');
							form.find('.modal-body > :last-child').remove();
							
							modal.modal("hide");
			
							var thumb = file.next().find('img').data('thumb');
							if(thumb) $('#avatar2').get(0).src = thumb;
			
							working = false;
						});
						
						
						setTimeout(function(){
							deferred.resolve();
						} , parseInt(Math.random() * 800 + 800));
			
						return false;
					});
							
				});
			
				
			
				//////////////////////////////
				$('#profile-feed-1').ace_scroll({
					height: '250px',
					mouseWheelLock: true,
					alwaysVisible : true
				});
			
				$('a[ data-original-title]').tooltip();
			
				$('.easy-pie-chart.percentage').each(function(){
				var barColor = $(this).data('color') || '#555';
				var trackColor = '#E2E2E2';
				var size = parseInt($(this).data('size')) || 72;
				$(this).easyPieChart({
					barColor: barColor,
					trackColor: trackColor,
					scaleColor: false,
					lineCap: 'butt',
					lineWidth: parseInt(size/10),
					animate:false,
					size: size
				}).css('color', barColor);
				});
			  
				///////////////////////////////////////////
			
				//right & left position
				//show the user info on right or left depending on its position
				$('#user-profile-2 .memberdiv').on('mouseenter touchstart', function(){
					var $this = $(this);
					var $parent = $this.closest('.tab-pane');
			
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $this.offset();
					var w2 = $this.width();
			
					var place = 'left';
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = 'right';
					
					$this.find('.popover').removeClass('right left').addClass(place);
				}).on('click', function(e) {
					e.preventDefault();
				});
			
			
				///////////////////////////////////////////
				$('#user-profile-3')
				.find('input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Change avatar',
					btn_change:null,
					no_icon:'ace-icon fa fa-picture-o',
					thumbnail:'large',
					droppable:true,
					
					allowExt: ['jpg', 'jpeg', 'png', 'gif'],
					allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
				})
				.end().find('button[type=reset]').on(ace.click_event, function(){
					$('#user-profile-3 input[type=file]').ace_file_input('reset_input');
				})
				.end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				})
				$('.input-mask-phone').mask('(999) 999-9999');
			
				$('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);
			
			
				////////////////////
				//change profile
				$('[data-toggle="buttons"] .btn').on('click', function(e){
					var target = $(this).find('input[type=radio]');
					var which = parseInt(target.val());
					$('.user-profile').parent().addClass('hide');
					$('#user-profile-'+which).parent().removeClass('hide');
				});
				
				
				
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					try {
						$('.editable').editable('destroy');
					} catch(e) {}
					$('[class*=select2]').remove();
				});
			});
		</script>

				<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				/**
				$('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
				  //console.log(e.target.getAttribute("href"));
				})
					
				$('#accordion').on('shown.bs.collapse', function (e) {
					//console.log($(e.target).is('#collapseTwo'))
				});
				*/
				
				$('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
					//if($(e.target).attr('href') == "#home") doSomethingNow();
				})
			
				
				/**
					//go to next tab, without user clicking
					$('#myTab > .active').next().find('> a').trigger('click');
				*/
			
			
				$('#accordion-style').on('click', function(ev){
					var target = $('input', ev.target);
					var which = parseInt(target.val());
					if(which == 2) $('#accordion').addClass('accordion-style2');
					 else $('#accordion').removeClass('accordion-style2');
				});
				
				//$('[href="#collapseTwo"]').trigger('click');
			
			
				var oldie = /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase());
				$('.easy-pie-chart.percentage').each(function(){
					$(this).easyPieChart({
						barColor: $(this).data('color'),
						trackColor: '#EEEEEE',
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: 8,
						animate: oldie ? false : 1000,
						size:75
					}).css('color', $(this).data('color'));
				});
			
				$('[data-rel=tooltip]').tooltip();
				$('[data-rel=popover]').popover({html:true});
			
			
				$('#gritter-regular').on(ace.click_event, function(){
					$.gritter.add({
						title: 'This is a regular notice!',
						text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="blue">magnis dis parturient</a> montes, nascetur ridiculus mus.',
						image: 'assets/avatars/avatar1.png', //in Ace demo dist will be replaced by correct assets path
						sticky: false,
						time: '',
						class_name: (!$('#gritter-light').get(0).checked ? 'gritter-light' : '')
					});
			
					return false;
				});
			
				$('#gritter-sticky').on(ace.click_event, function(){
					var unique_id = $.gritter.add({
						title: 'This is a sticky notice!',
						text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="red">magnis dis parturient</a> montes, nascetur ridiculus mus.',
						image: 'assets/avatars/avatar.png',
						sticky: true,
						time: '',
						class_name: 'gritter-info' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
					});
			
					return false;
				});
			
			
				$('#gritter-without-image').on(ace.click_event, function(){
					$.gritter.add({
						// (string | mandatory) the heading of the notification
						title: 'This is a notice without an image!',
						// (string | mandatory) the text inside the notification
						text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="orange">magnis dis parturient</a> montes, nascetur ridiculus mus.',
						class_name: 'gritter-success' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
					});
			
					return false;
				});
			
			
				$('#gritter-max3').on(ace.click_event, function(){
					$.gritter.add({
						title: 'This is a notice with a max of 3 on screen at one time!',
						text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="green">magnis dis parturient</a> montes, nascetur ridiculus mus.',
						image: 'assets/avatars/avatar3.png', //in Ace demo dist will be replaced by correct assets path
						sticky: false,
						before_open: function(){
							if($('.gritter-item-wrapper').length >= 3)
							{
								return false;
							}
						},
						class_name: 'gritter-warning' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
					});
			
					return false;
				});
			
			
				$('#gritter-center').on(ace.click_event, function(){
					$.gritter.add({
						title: 'This is a centered notification',
						text: 'Just add a "gritter-center" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
						class_name: 'gritter-info gritter-center' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
					});
			
					return false;
				});
				
				$('#gritter-error').on(ace.click_event, function(){
					$.gritter.add({
						title: 'This is a warning notification',
						text: 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
						class_name: 'gritter-error' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
					});
			
					return false;
				});
					
			
				$("#gritter-remove").on(ace.click_event, function(){
					$.gritter.removeAll();
					return false;
				});
					
			
				///////
			
			
				$("#bootbox-regular").on(ace.click_event, function() {
					bootbox.prompt("What is your name?", function(result) {
						if (result === null) {
							
						} else {
							
						}
					});
				});
					
				$("#bootbox-confirm").on(ace.click_event, function() {
					bootbox.confirm("Are you sure?", function(result) {
						if(result) {
							//
						}
					});
				});
				
			/**
				$("#bootbox-confirm").on(ace.click_event, function() {
					bootbox.confirm({
						message: "Are you sure?",
						buttons: {
						  confirm: {
							 label: "OK",
							 className: "btn-primary btn-sm",
						  },
						  cancel: {
							 label: "Cancel",
							 className: "btn-sm",
						  }
						},
						callback: function(result) {
							if(result) alert(1)
						}
					  }
					);
				});
			**/
					
				$("#bootbox-options").on(ace.click_event, function() {
					bootbox.dialog({
						message: "<span class='bigger-110'>I am a custom dialog with smaller buttons</span>",
						buttons: 			
						{
							"success" :
							 {
								"label" : "<i class='ace-icon fa fa-check'></i> Success!",
								"className" : "btn-sm btn-success",
								"callback": function() {
									//Example.show("great success");
								}
							},
							"danger" :
							{
								"label" : "Danger!",
								"className" : "btn-sm btn-danger",
								"callback": function() {
									//Example.show("uh oh, look out!");
								}
							}, 
							"click" :
							{
								"label" : "Click ME!",
								"className" : "btn-sm btn-primary",
								"callback": function() {
									//Example.show("Primary button");
								}
							}, 
							"button" :
							{
								"label" : "Just a button...",
								"className" : "btn-sm"
							}
						}
					});
				});
			
			
			
				$('#spinner-opts small').css({display:'inline-block', width:'60px'})
			
				var slide_styles = ['', 'green','red','purple','orange', 'dark'];
				var ii = 0;
				$("#spinner-opts input[type=text]").each(function() {
					var $this = $(this);
					$this.hide().after('<span />');
					$this.next().addClass('ui-slider-small').
					addClass("inline ui-slider-"+slide_styles[ii++ % slide_styles.length]).
					css('width','125px').slider({
						value:parseInt($this.val()),
						range: "min",
						animate:true,
						min: parseInt($this.attr('data-min')),
						max: parseInt($this.attr('data-max')),
						step: parseFloat($this.attr('data-step')) || 1,
						slide: function( event, ui ) {
							$this.val(ui.value);
							spinner_update();
						}
					});
				});
			
			
			
				//CSS3 spinner
				$.fn.spin = function(opts) {
					this.each(function() {
					  var $this = $(this),
						  data = $this.data();
			
					  if (data.spinner) {
						data.spinner.stop();
						delete data.spinner;
					  }
					  if (opts !== false) {
						data.spinner = new Spinner($.extend({color: $this.css('color')}, opts)).spin(this);
					  }
					});
					return this;
				};
			
				function spinner_update() {
					var opts = {};
					$('#spinner-opts input[type=text]').each(function() {
						opts[this.name] = parseFloat(this.value);
					});
					opts['left'] = 'auto';
					$('#spinner-preview').spin(opts);
				}
			
						
				
				
				
				///////////
				$(document).one('ajaxloadstart.page', function(e) {
					$.gritter.removeAll();
					$('.modal').modal('hide');
				});
			
			});
		</script>



<script type="text/javascript">

$(function(){
	$("#address_1").formmapper({details:"form"});
});
</script>
			
			
</div><!--/content-wrapper-->

</div><!--/content-->


<?=$this->load->view(branded_view('cp/footer'));?>