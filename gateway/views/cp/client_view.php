<?
/* Default Values */
if (!isset($form)) {
	$form = array(
				'first_name' => '',
				'last_name' => '',
				'company' => '',
				'address_1' => '',
				'address_2' => '',
				'city' => '',
				'state' => '',
				'postal_code' => '',
				'country' => 'US',
				'suspended' => '0',
				'gmt_offset' => 'UM5',
				'phone' => '',
				'email' => '',
				'username' => '',
				'client_type' => '2'	
			);
} ?>
<?=$this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>'));?>
<script type="text/javascript" src="<?=branded_include('js/formmapper.js');?>"></script>

<h4><?=$form_title;?></h4>


<style type="text/css">

.content {
    display: inherit;
}


select {
border-radius: 0;
-webkit-box-shadow: none!important;
box-shadow: none!important;
color: #444;
background-color: #fff;
border: 1px solid #d5d5d5;
height: 44px;
font-size: 16px;
}

label {
transition: background 0.4s, color 0.4s, top 0.4s, bottom 0.4s, right 0.4s, left 0.4s;
    display: inline-block;
    font-weight: bold;
}

control-label {
    padding-top: 0;
}

.form-horizontal .control-label {
    margin-bottom: 0;
    text-align: right;
}

.form-control[readonly] {
    cursor: default;
}
.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
    background-color: #eee;
    opacity: 1;
}

.map_canvas {display:;}

ul.form li {
    display: block;
    clear: both;
    padding: 2px 0px;
}
.form-horizontal .form-group {
    margin-right: -15px;
    margin-left: -15px;
}
.form-group {
    margin-bottom: 15px;
}



}
.btn, a.btn {
    font-size: 12px;
}
.btn {
    padding-top: 8px;
    padding-bottom: 8px;
    transition: background-color .2s ease;
    font-weight: bold;
    border: 1px solid #d0d2d3;
    padding-left: 15px;
    padding-right: 15px;
    border-radius: 3px;
}
.btn-default {
    color: #333;
}
.btn {
    display: inline-block;
    margin-bottom: 0;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
}


.account-status-marker-activated {
    margin: -3px 2px 0px 0;
    padding: 4px 5px!important;
    border: 1px solid #7ae498;
    font-size: 10px!important;
    letter-spacing: 1.3px;
    color: #7ae498;
    border-radius: 25px;
    font-weight: 600;
    text-shadow: 0 0px 0 #000;
}


.account-status-marker-pending {
  margin: -6px 2px 0px 0;
  padding: 4px 5px;
  border: 1px solid #f0ad4e;
  font-size: 10px;
  letter-spacing: 1.3px;
  color: #f0ad4e;
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
  padding-top: 70px;
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
.nav.nav-justified > li > a { position: relative; }
.nav.nav-justified > li > a:hover,
.nav.nav-justified > li > a:focus { background-color: transparent; }
.nav.nav-justified > li > a > .quote {
    position: absolute;
    left: 0px;
    top: 0;
    opacity: 0;
    width: 30px;
    height: 30px;
    padding: 5px;
    background-color: #9585bf;
    border-radius: 15px;
    color: #fff;  
}
.nav.nav-justified > li.active > a > .quote { opacity: 1; }
.nav.nav-justified > li > a > img { box-shadow: 0 0 0 5px #9585bf; }
.nav.nav-justified > li > a > img { 
    max-width: 100%; 
    opacity: .3; 
    -webkit-transform: scale(.8,.8);
            transform: scale(.8,.8);
    -webkit-transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
				width: 96px;
		
}
.nav.nav-justified > li.active > a > img,
.nav.nav-justified > li:hover > a > img,
.nav.nav-justified > li:focus > a > img { 
    opacity: 1; 
    -webkit-transform: none;
            transform: none;
    -webkit-transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
				width: 96px;
}
.tab-pane .tab-inner { padding: 2px 0 20px; }

@media (min-width: 768px) {
    .nav.nav-justified > li > a > .quote {
        left: auto;
        top: auto;
        right: 20px;
        bottom: 0px;
    }  
	
.nav.nav-justified > li > a {
    margin-bottom: 20px;
}
	
	.tab-pane {
    position: relative;
    padding-top: 5px!important;
}

.wrapper h5 {
    text-transform: uppercase;
    border-bottom: 1px solid #d0d2d3;
    padding-bottom: 6px;
    letter-spacing: .5px;
    font-size: 1rem;
}

p {
    margin: 0px 0!important;
}

.account-edit-btn {
    margin-top: 1px;
    margin-right: 20px;
	    position: relative;
}

#account-edit-btn {
    margin-top: 1px;
    margin-right: 20px;
	    position: relative;
}

</style>


<div class="content-wrapper">


<div class="col-lg-12 col-md-12 col-sm-12">
<div class="row">

<section id="user-details-section" data-route-regex="^\/users\/" data-title="User Details " class="content-page current">
<div class="row-fluid">
<style type="text/css">
/** FIX for Bootstrap and Google Maps Info window styes problem **/
img[src*="gstatic.com/"], img[src*="googleapis.com/"] {
max-width: none;
}
</style>
<form class="form-horizontal" id="form_customer" method="post" action="<?=site_url($form_action);?>">

<div class="user-header">
<?php $email = $this->user->Get('email');
$size = 96; $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?s=" . $size;
?>
    <img class="img-polaroid" src="<?php echo $grav_url; ?>">

    <div class="user-bg-box">
        <img class="user-bg" src="<?php echo $grav_url; ?>">

        <div class="box-content">
            <div class="payment-count">
                <span class="lined-text">Transaction Total:</span>
                <strong><?php echo $total_orders;?></strong>
            </div>
            <div class="username-area">
                <h4>
                    <span class="name user-head-nickname">
                       <b> <?=$form['first_name'];?> <?=$form['last_name'];?></b>
                    </span>

                    
                    <span class="user-label user-blocked js-user-blocked" style="display: none;">Deactivated</span>
                </h4>
            </div>
        </div>
    </div>
</div>

<div class="detail-nav">
    <ul class="[ nav nav-justified ]" id="nav-tabs" role="tablist">
        <li class="active" role="presentation"><a href="#userdetails-details" class="userdetails-details" data-toggle="tab" aria-expanded="true">Details</a></li>
        <li role="presentation"><a href="#userdetails-devices" class="userdetails-devices" data-toggle="tab" aria-expanded="false">Devices</a></li>
        <li role="presentation"><a href="#userdetails-history" class="userdetails-history" data-toggle="tab" aria-expanded="false">History</a></li>
        <li role="presentation"><a href="#userdetails-location" class="userdetails-location" data-toggle="tab" aria-expanded="false">Location</a></li>
    </ul>
</div>

<div class="tab-content">

    <div class="tab-pane active" id="userdetails-details">
	
        <div class=" user-details">

                <div class="row form-group details-main">

                    
                    <div class="col-xs-4 field">
                        <div class="field-title">Name</div>
                        <strong><span class="user-name"><?=$form['first_name'];?> <?=$form['last_name'];?></span></strong>
                    </div>
                                     
                    <div class="col-xs-4 field">
                        <div class="field-title">Merchant Since</div>
                        [<strong><abbr class="timeago" title="<?=$form['date_created'];?>"><?=$form['date_created'];?></abbr></strong>]
                    </div>
                    

                    <div class="col-xs-4 field">
                        <div class="field-title"> Encryption</div>
                        <div class="text-label logins-count" style="margin:2px;">
                        <b> no </b>
                        </div>
                    </div>


                    <div class="col-xs-4 field hide">
                        <div class="field-title">Email</div>
                        
                          <?=$form['email'];?>
                        
                    </div>

                    <div class="col-xs-4 field">
                        <div class="field-title">Primary Gateway Provider</div>
                        <b> <?=$form['gateway'];?></b>
                    </div>

                    <div class="col-xs-4 field js-user-country hide">
                        <div class="field-title">Country</div>
                        <b><span class="text"> <?=$form['country'];?> </span></b>
                    </div>

                    <div class="col-xs-4 field js-user-city hide">
                        <div class="field-title">City</div>
                        <b><span class="text"> <?=$form['city'];?></span></b>
                    </div>

                    <div class="col-xs-4 field">
                        <div class="field-title">Last Transaction</div>
                        <div class="last-payment"><b>7 days ago</b></div>
                    </div>

                    <div class="col-xs-4 field">
                        <div class="field-title">Recurring Payments</div>
                        <div class="text-label" style="margin:2px;">
                            
                                <b> None </b>
                            
                        </div>
                    </div>


                    <div class="col-xs-4 field">
                        <div class="field-title">Browser</div>
                        <div class="user-agent text-label">- <?=$form['browser'];?></div>
                    </div>

                </div>
        </div>

            <h5>Customer Attributes</h5>
            <div class="external widget-box box-highlight">
			<div class="form-horizontal">
	  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="given_name">Given name:</label>
        <div class="col-xs-6 info-field">
          
            
              
               <?=$form['first_name'];?>
              
            
          
        </div>
		
    <div class="col-xs-3">
      <button class="btn btn-primary btn-sm btn-edit-metadata"><a href="#" data-toggle="modal" data-target="#EditAccountModal">Edit</a></button>
    
    </div>
	
    </div>
		
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="family_name">Family name</label>
        <div class="col-xs-9 info-field">
          
            
              
               <?=$form['last_name'];?>
              
            
          
        </div>
    </div>

    <div class="form-group">
          <label for="address_1" class="col-xs-3 control-label" title="billing Address">Address:</label>
		 <div class="col-xs-9 info-field">
		 <?=$form['address_1'];?>
		 </div>
			</div>

    <div class="form-group">
				<label for="address_2" class="col-xs-3 control-label" title="Address 2">Address 2:</label>
				<div class="col-xs-9 info-field">
           <?=$form['address_2'];?>
		   </div>
			</div>

    <div class="form-group">
				<label for="city" class="col-xs-3 control-label" title="city">City:</label>
				<div class="col-xs-9 info-field">
           <?=$form['city'];?>
			</div>
			</div>

    <div class="form-group">
				<label for="state" class="col-xs-3 control-label" title="billing_state">Region:</label>
				<div class="col-xs-9 info-field">
				   <?=$form['state'];?>
          				</div>
			</div>
			

    <div class="form-group">
				<label for="Country" class="col-xs-3 control-label" title="billing_country">Country:</label>
				<div class="col-xs-9 info-field">
           <?=$form['country'];?>
		   </div>
			</div>

    <div class="form-group">
				<label for="postal_code" class="col-xs-3 control-label" title="billing_zip">Zip:</label>
	<div class="col-xs-9 info-field">
           <?=$form['postal_code'];?>
		   </div>
			</div>

    <div class="form-group">
				<label for="phone" class="col-xs-3 control-label" title="contact_number">Phone:</label>
				<div class="col-xs-9 info-field">
          			 <?=$form['phone'];?>
					 </div>
			</div>
      
		
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="picture">picture:</label>
        <div class="col-xs-9 info-field">
          
            <div class="row">
              <div class="col-xs-8">
                <input id="picture-url" class="form-control" type="text" value="https://media.licdn.com/mpr/mprx/0_fxkuMxLkAG3FavaiSyq0MpvoPhNw29OiSZK1MjkJuL8s1td__MN8cgrcgmqv7A0fayQtns9_xWqd" readonly="">
              </div>
              <div class="col-xs-2">
                <button class="btn copy-btn btn-default" data-clipboard-target="picture-url">
                  <i class="fa fa-file-archive-o"></i>
                </button>
              </div>
            </div>
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="apiStandardProfileRequest">apiStandardProfileRequest</label>
        <div class="col-xs-9 info-field">
          
            
              <div style="word-wrap:break-word;">


                <div class="row">
                  <div class="col-xs-8">
                    <textarea id="identities-obj" class="form-control" readonly="">{
  "headers": {
    "_total": 1,
    "values": [
      {
        "name": "x-li-auth-token",
        "value": "name:1IqZ"
      }
    ]
  },
  "url": "https://api.linkedin.com/v1/people/2d_jxyrXWD"
}</textarea>
                  </div>
                  <div class="col-xs-2">
                    <button class="btn copy-btn btn-default" data-clipboard-target="identities-obj">
                      <i class="fa fa-file-archive-o"></i>
                    </button>
                  </div>
                </div>
              </div>
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="currentShare">currentShare</label>
        <div class="col-xs-9 info-field">
          
            
              <div style="word-wrap:break-word;">


                <div class="row">
                  <div class="col-xs-8">
                    <textarea id="identities-obj" class="form-control" readonly="">{
  "author": {
    "firstName": "<?=$form['last_name'];?>",
    "id": "<?=$form['internal_id"'];?>",
    "lastName": "<?=$form['last_name'];?>"
  },
  "comment": "One of the best developers that I've worked with.. I highly recommend him for any development or server work",
  "content": {
    "description": "LinkedIn strengthens and extends your existing network of trusted contacts. LinkedIn is a networking tool that helps you discover inside connections to recommended job candidates, industry experts and business partners.",
    "eyebrowUrl": "https://www.linkedin.com/shareArticle?mini=true&amp;url=http://share.fiverr.com/ab07lcc6291",
    "resolvedUrl": "https://www.linkedin.com/uas/login",
    "shortenedUrl": "https://lnkd.in/ddAH2Fc",
    "submittedUrl": "https://www.linkedin.com/shareArticle?mini=true&amp;url=http://share.fiverr.com/ab07lcc6291",
    "title": "Sign In | LinkedIn"
  },
  "id": "s5958612310007246855",
  "source": {
    "serviceProvider": {
      "name": "LI_BADGE"
    }
  },
  "timestamp": 1420643880000,
  "visibility": {
    "code": "anyone"
  }
}</textarea>
                  </div>
                  <div class="col-xs-2">
                    <button class="btn copy-btn btn-default" data-clipboard-target="identities-obj">
                      <i class="fa fa-file-archive-o"></i>
                    </button>
                  </div>
                </div>
              </div>
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="distance">distance</label>
        <div class="col-xs-9 info-field">
          
            
              
                0
              
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="headline">headline</label>
        <div class="col-xs-9 info-field">
          
            
              
                Chief Innovation Director at Elektropay Corp
              
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="industry">industry</label>
        <div class="col-xs-9 info-field">
          
            
              
                Financial Services
              
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="location">location</label>
        <div class="col-xs-9 info-field">
          
            
              <div style="word-wrap:break-word;">


                <div class="row">
                  <div class="col-xs-8">
                    <textarea id="identities-obj" class="form-control" readonly=""id="formmapper">{
  "country": {<?=$form['country'];?>
    "code": "us"
  },

           
  "name": "<?=$form['state'];?>/<?=$form['zip'];?>"

}</textarea>
                  </div>
                  <div class="col-xs-2">
                    <button class="btn copy-btn btn-default" data-clipboard-target="identities-obj">
                      <i class="fa fa-file-archive-o"></i>
                    </button>
                  </div>
                </div>
              </div>
            
          
        </div>
    </div>
	
                <h3>Address Details</h3>
                <div class="form-group input-prepend">
                  <label class="col-xs-3 control-label add-on">Number</label>
				     <div class="col-xs-9 info-field">
                  <input disabled="disabled" name="street_number" type="text" class="form-control" readonly="" value="">
				  </div>
                </div>
                <div class="form-group input-prepend">
                  <label class="col-xs-3 control-label add-on">Street</label>
				     <div class="col-xs-9 info-field">
                  <input disabled="disabled" name="route" type="text" class="form-control" readonly="" value="">
				  </div>
                </div>
                <div class="form-group input-prepend">
                  <label class="col-xs-3 control-label add-on">City</label>
				     <div class="col-xs-9 info-field">
                  <input disabled="disabled" name="locality" type="text" class="form-control" readonly="" value="">
				  </div>
                </div>
                <div class="form-group input-prepend">
                  <label class="col-xs-3 control-label add-on">State</label>
				     <div class="col-xs-9 info-field">
                  <input disabled="disabled" name="administrative_area_level_1" type="text" class="form-control" readonly="" value="">
                </div>
				</div>
                <div class="form-group input-prepend">
                  <label class="col-xs-3 control-label add-on">Postal Code</label>
				     <div class="col-xs-9 info-field">
                  <input disabled="disabled" name="postal_code" type="text" class="form-control" readonly="" value="">
				  </div>
                </div>
                <div class="form-group input-prepend">
                  <label class="col-xs-3 control-label add-on">Country</label>
				     <div class="col-xs-9 info-field">
                  <input disabled="disabled" name="country" type="text" class="form-control" readonly="" value="">
				  </div>
                </div>
                <div class="form-group input-prepend">
                  <label class="col-xs-3 control-label add-on">Latitude</label>
				     <div class="col-xs-9 info-field">
                  <input disabled="disabled" name="lat" placeholder="" type="text" class="form-control" readonly="" value="">
				  </div>
                </div>
                <div class="form-group input-prepend">
                   <label  class="col-xs-3 control-label add-on">Longitude</span>
				      <div class="col-xs-9 info-field">
                   <input disabled="disabled" name="lng" placeholder="" type="text" class="form-control" readonly="" value="">
                </div>
				</div>
				

    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="numConnections">numConnections</label>
        <div class="col-xs-9 info-field">
          
            
              
                500
              
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="numConnectionsCapped">numConnectionsCapped</label>
        <div class="col-xs-9 info-field">
          
            
              
                true
              
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="positions">positions</label>
        <div class="col-xs-9 info-field">
          
            
              <div style="word-wrap:break-word;">


                <div class="row">
                  <div class="col-xs-8">
                    <textarea id="identities-obj" class="form-control" readonly="">{
  "_total": 1,
  "values": [
    {
      "company": {
        "name": "<?=$form['company'];?>"
      },
      "id": 610890422,
      "isCurrent": true,
      "startDate": {
        "month": 9,
        "year": 2014
      },
      "title": "CTO"
    }
  ]
}</textarea>
                  </div>
                  <div class="col-xs-2">
                    <button class="btn copy-btn btn-default" data-clipboard-target="identities-obj">
                      <i class="fa fa-file-archive-o"></i>
                    </button>
                  </div>
                </div>
              </div>
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="publicProfileUrl">publicProfileUrl</label>
        <div class="col-xs-9 info-field">
          
            
              
                https://www.linkedin.com/in/everpay
              
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="relationToViewer">relationToViewer</label>
        <div class="col-xs-9 info-field">
          
            
              <div style="word-wrap:break-word;">


                <div class="row">
                  <div class="col-xs-8">
                    <textarea id="identities-obj" class="form-control" readonly="">{
  "distance": 0
}</textarea>
                  </div>
                  <div class="col-xs-2">
                    <button class="btn copy-btn btn-default" data-clipboard-target="identities-obj">
                      <i class="fa fa-file-archive-o"></i>
                    </button>
                  </div>
                </div>
              </div>
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="siteStandardProfileRequest">siteStandardProfileRequest</label>
        <div class="col-xs-9 info-field">
          
            
              <div style="word-wrap:break-word;">


                <div class="row">
                  <div class="col-xs-8">
                    <textarea id="identities-obj" class="form-control" readonly="">{
  "url": "https://www.linkedin.com/profile/view?id=57801416&amp;authType=name&amp;authToken=1IqZ&amp;trk=api*a266483*s274221*"
}</textarea>
                  </div>
                  <div class="col-xs-2">
                    <button class="btn copy-btn btn-default" data-clipboard-target="identities-obj">
                      <i class="fa fa-file-archive-o"></i>
                    </button>
                  </div>
                </div>
              </div>
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="specialties">specialties</label>
        <div class="col-xs-9 info-field">
          
            
              
                World Market Analyst, Global Logistics, Branding and Identity, Guerrilla Marketing, Database and Device architecture, Information Systems design, Web &amp; Application GUI design, real estate financing. Social Networking Adjuster - Liaison
              
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="summary">summary</label>
        <div class="col-xs-9 info-field">
          
            
              
                Opening Accounts  and registering Shipping/ Fleet companies, freight forwarders, warehouses to use the Oceanwide Marine Network's Genoa platform. Which is a unique application that promotes real-time collaboration between brokers, underwriters, claim settling agents and shippers within a single hosted application to offer significant operational efficiencies and cost reductions in the management and administration of P&amp;C insurance policies.
Basically I marketed and sold cargo insurance
              
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="updated_at">updated_at</label>
        <div class="col-xs-9 info-field">
          
            
              
                2015-09-13T05:33:08.769Z
              
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="user_id">customer_id</label>
        <div class="col-xs-9 info-field">
          
            
              
                <?=$form['internal_id"'];?>
              
            
          
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
    "access_token": "AQWKBZie2fhmFZg4QIFE76is6pU2WrnXC0kfxWZhCLTTMs5Z-ReT73GL9PevtiLBAXYMoVm2_Jdp-7aj9jxyuQlnv0b2ubk5ewzdowEtr6SMAtQFjZWyYlFhQRPvBNZ8ojq7qdE0Y0CQCvpjIJHmIuJNEZp_OIpZWeJ1iPDAJpkYPD5XDH0",
    "gateway": "<?=$form['gateway'];?>",
    "customer_id": "<?=$form['internal_id'];?>",
    "connection": "<?=$form['gateway'];?>",
    "isSocial": true
  }
]</textarea>
                  </div>
                  <div class="col-xs-2">
                    <button class="btn copy-btn btn-default" data-clipboard-target="identities-obj">
                      <i class="fa fa-file-archive-o"></i>
                    </button>
                  </div>
                </div>
              </div>
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="created_at">created_at</label>
        <div class="col-xs-9 info-field">
          
            
              
                <?=$form['date_created'];?>
              
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="last_ip">last_ip</label>
        <div class="col-xs-9 info-field">
          
            
              
                <?=$form['ip_address'];?>
              
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="last_login">last_payment</label>
        <div class="col-xs-9 info-field">
          
            
              
                2015-09-13T05:33:08.756Z
              
            
          
        </div>
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="charges_count">charges_count</label>
        <div class="col-xs-9 info-field">
          
                1
              </div>
    </div>
  

</div><!--END/customer-attributes-->
</div><!--END/tab-pane-->


    <div class="tab-pane" id="userdetails-devices">
        <div class="devices widget-box">
		<div class="explanation">
  <i class="icon-info-sign"></i>
  These are the devices being used by this particular customer. If you click on Unlink, the refresh token will be revoked, forcing the user to re-login on the application.
</div>
<div class="widget-flat devices-list">

  <div id="devices-list_wrapper" class="dataTables_wrapper" role="grid">
    <table class="table data-table dataTable" style="table-layout:fixed">
      <thead>
        <tr>
          <th>Device</th>
          <th>Number of Refresh Tokens</th>
          <th></th>
        </tr>
      </thead>
      <tbody><tr>
  <td colspan="3">There are no linked devices yet.</td>
</tr></tbody>
    </table>
    <div class="actions-group">
    </div>
  </div>
</div></div>
    </div>

    <div class="tab-pane" id="userdetails-history">
<div class="login-history widget-box"><div class="explanation">
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
          <th>App</th>
          <th>Payment Provider</th>
          <th>IP Address</th>
          <th>From</th>
        </tr>
      </thead>
      <tbody><tr>
  <td colspan="7">There are no logs yet.</td>
</tr></tbody>
    </table>
    <div class="actions-group">
      Showing <span class="current_logs_count">0</span> of <span class="total_logs_count">0</span>&nbsp;
      <button class="btn btn-primary" id="loadMoreLogs" data-loading-text="Loading..." disabled="disabled">
        <i class="icon-whitefa fa-file-archive-o"></i> More
      </button>
    </div>
  </div>
</div>
</div>
    </div>
	
    <div class="tab-pane" id="userdetails-location">
        <div class="login-locations widget-box">
		<div class="widget-content">
		 <!-- hidden element to attach .formMapper() to display map only -->
        <input id="contactForm" type="hidden"/>
               <div class="map_contact"></div>
       <!--<div id="map"style="width: 100%; height: 640px; position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);"></div>-->
		
		<!-- Hidden Fields -->
            
            <input name="street_number" type="hidden">
            <input name="route" type="hidden">
            <input name="locality" type="hidden">
            <input name="administrative_area_level_1" type="hidden">
            <input name="postal_code" type="hidden">
            <input name="country" type="hidden">
            <input name="lat" type="hidden">
            <input name="lng" type="hidden">
    
            <!-- ============= -->
            
</div>
        </div>
    </div>

   

 </div><!--END/.tab-panel-->

</form>

</section>
</div>

 </div><!--END/.col-lg-12-->

 </div><!--END/.row-->
 
  </div><!--END/.content-wrapper-->
  

<div class="modal" tabindex="-1" id="warningModal" role="dialog" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3>Are You Sure?</h3>
    </div>
    <div class="modal-body">
        <p class="message"></p>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
</div><!--/modal-->






<div class="modal fade" id="EditAccountModal" tabindex="-1" role="dialog" aria-labelledby="EditAccountModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="EditAccountModalLabel">Edit User Account</h2>
      </div>
    <div class="modal-body">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="row">
					<div class="portlet light" id="form_wizard_1">
						<div class="portlet-body form progress-demo">
<form class="form-horizontal" id="form_newClient" method="post" action="<?=site_url($form_action);?>" novalidate="novalidate">
							
								<div class="form-wizard">
									<div class="form-body">
										<ul class="nav nav-pills nav-justified steps">
											<li class="active">
												<a href="#tab1" data-toggle="tab" class="step" aria-expanded="true">
												<span class="number">
												1 </span>
												<span class="desc">
												<i class="fa fa-desktop"></i> Account </span>
												</a>
											</li>
											<li>
												<a href="#tab2" data-toggle="tab" class="step">
												<span class="number">
												2 </span>
												<span class="desc">
												<i class="fa fa-user"></i> Owner  </span>
												</a>
											</li>
											<li>
												<a href="#tab3" data-toggle="tab" class="step active">
												<span class="number">
												3 </span>
												<span class="desc">
												<i class="fa fa-building"></i> Business </span>
												</a>
											</li>
											<li>
												<a href="#tab4" data-toggle="tab" class="step">
												<span class="number">
												4 </span>
												<span class="desc">
										<i class="fa fa-bank"></i> Deposit </span>
												</a>
											</li>
<li>
												<a href="#tab5" data-toggle="tab" class="step">
												<span class="number">
												5 </span>
												<span class="desc">
									<i class="fa fa-credit-card"></i> Processor</span>
												</a>
											</li>

										</ul>
										<br />
										<div id="bar" style="display:none;" class="progress progress-striped" role="progressbar">
											<div class="progress-bar progress-bar-success" style="display:none; width: 25%;">
											</div>
										</div>
										<div class="tab-content">
											<div class="hidden alert alert-danger"style=" display:none">
												<button class="close" data-dismiss="alert"></button>
												You have some form errors. Please check below.
											</div>
											<div class="hidden alert alert-success" style="display:none">
												<button class="close" data-dismiss="alert"></button>
												Your merchant setup was successful!
											</div>
											<div class="tab-pane active" id="tab1">
										<h3 class="block">Provide The Merchant Details </h3>
												<div class="form-group">
<label for="username" class="control-label col-md-3">Username <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-9">
<input type="text" autocomplete="off" class="required form-control" id="username" name="username" value="<?=$form['username'];?>" />
							
														<span class="help-block">
														Provide a username for your merchant </span>
													</div>
												</div>
												<div class="form-group">
<label for="password" class="control-label col-md-3">Password <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">

<input data-rel="tooltip" type="password" autocomplete="off" class="form-control <? if ($action == 'new') { ?>required<? } ?> full" id="password" name="password" title="" data-placement="bottom" data-original-title="Password must be 6 characters or more!" value="" />

														<span class="help-block">
														Pick a password. </span>
													</div>
												</div>
												<div class="form-group">
<label for="password2" class="control-label col-md-3">Confirm  <span class="required" aria-required="true"> * </span>
													</label>
													<div class="col-md-4">
<input type="password" autocomplete="off" class="form-control <? if ($action == 'new') { ?>required<? } ?> full" id="password2" name="password2" value="" />
	
														<span class="help-block">
														Confirm the choosen password </span>
													</div>
												</div>
												<div class="form-group">
<label for="email" class="control-label col-md-3">Email <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-9">

<input type="email" autocomplete="off" class="form-control required email mark_empty" rel="user.email@company.com" id="email" name="email" value="<?=$form['email'];?>" />
		
														<span class="help-block">
														Provide merchant email address </span>
													</div>
												</div>
<div class="form-group">
<label for="client_type" class="control-label col-md-3">Type <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-9">
<select name="client_type" id="client_type">
				<? if ($this->user->Get('client_type_id') == '3') { ?><option <? if ($form['client_type'] == '1') { ?> selected="selected" <? } ?> value="1">Service Provider</option><? } ?>
				
<option <? if ($form['client_type'] == '2') { ?> selected="selected" <? } ?> value="2">End User</option>
</select>
		
</div>	<? if ($this->user->Get('client_type_id') == '3') { ?>
	
	<? } ?>
											</div>
	</div>										<div class="tab-pane" id="tab2">
												<h3 class="block">Provide Merchant's Profile Details</h3>
<div class="row-fluid">
												<div class="form-group">
<label for="first_name" class="control-label col-md-3">Fullname <span class="required" aria-required="true">
													* </span>
													</label>
<div class="col-md-6">
													<div class="form-inline">
<input class="form-control required mark_empty" rel="First Name" type="text" id="first_name" name="first_name" value="<?=$form['first_name'];?>" />&nbsp;&nbsp;<label style="display:none" for="last_name">Last Name</label><input class="form-control required mark_empty" rel="Last Name" type="text" id="last_name" name="last_name" value="<?=$form['last_name'];?>" /></div>
											<span class="help-block">
												Provide the owners full name </span>
													</div>
												</div>

					</div>
												<div class="form-group">
<label for="phone" class="control-label col-md-3">Phone <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
<input type="text" class="form-control" id="phone" name="phone" value="<?=$form['phone'];?>" />
	
														<span class="help-block">
														Provide a contact number </span>
													</div>
												</div>
												<div class="form-group">
<label for="passport" class="control-label col-md-3">Passport <span>
													 </span>
													</label>
													<div class="col-md-6">
			<input type="password" class="form-control" name="passport" id="passport" value="<?=$form['passport'];?>" />
<span class="help-block">
								Provide merchant's passport #</span>
													</div>
												</div>
												
												<div class="form-group">
<label for="passport" class="control-label col-md-3">SSN: <span>
													 </span>
													</label>
													<div class="col-md-6">
			<input type="password" class="form-control" name="ssn" id="ssn" value="<?=$form['ssn'];?>" />
<span class="help-block">
								Provide merchant's SSN/SIN:</span>
													</div>
												</div>
												
												<div class="form-group">
<label for="address_1" class="control-label col-md-3">Address <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
<input type="text" class="form-control" name="address_1" id="address_1" value="<?=$form['address_1'];?>" />

														<span class="help-block">
											Provide merchant's mailing address </span>
													</div>
												</div>
												<div class="form-group">
<label for="city" class="control-label col-md-3">City/Town <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
				<input type="text" class="form-control" name="city" id="city" value="<?=$form['city'];?>" />

														<span class="help-block">
														Provide merchant's city or town </span>
													</div>
												</div>
												<div class="form-group">
<label for="country" class="control-label col-md-3">Country</label>
													<div class="col-md-6">
<select id="country" name="country" class="required form-control"><? foreach ($countries as $country) { ?><option <? if ($form['country'] == $country['iso2']) { ?> selected="selected" <? } ?> value="<?=$country['iso2'];?>"><?=$country['name'];?></option><? } ?></select>

<span class="help-block">
											Select merchant's country of residence </span>
													</div>
												</div>
<div class="form-group">
<label for="state" class="control-label col-md-3">Region<span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
<input type="text" class="text" name="state" id="state" value="<?=$form['state'];?>" /><select id="state_select" name="state_select"><? foreach ($states as $state) { ?><option <? if ($form['state'] == $state['code']) { ?> selected="selected" <? } ?> value="<?=$state['code'];?>"><?=$state['name'];?></option><? } ?></select>

<span class="help-block">
Provide merchant's state, province or region </span>
													</div>
												</div>
												<div class="form-group">
<label for="postal_code" class="control-label col-md-3">Postal Code</label>
													<div class="col-md-4">
														
<input type="text" class="form-control" name="postal_code" id="postal_code" value="<?=$form['postal_code'];?>" />
<span class="help-block">
											Provide merchant's postal/ zip code</span>
													</div>
												</div>
<div class="form-group">
<label class="control-label" for="timezone">Merchant's Timezone</label>
<div class="col-md-6">
 <?=timezone_menu($form['gmt_offset']);?>
						
<span class="help-block">Select Your Merchant's Timezone</span>
</div>
</div><!--/form-group-->

</div><!--/tab-->
	
<div class="tab-pane" id="tab3">
<h3 class="block">Provide Your Merchant's Business Details</h3>
												<div class="form-group">
	<label for="company" class="control-label col-md-3">Name <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
<input type="text" class="form-control required" id="company" name="company" value="<?=$form['company'];?>" />
	
														<span class="help-block">
Provide the business name
														</span>
													</div>
												</div>
												<div class="form-group">
<label for="company_id" class="control-label col-md-3">Company # <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" class="form-control" name="registration_number">
														<span class="help-block">
Provide the company's registration number
														</span>
													</div>
												</div>
												<div class="form-group">
<label  for="tax_id" class="control-label col-md-3">Tax ID <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" placeholder="" class="form-control" name="tax_id">
														<span class="help-block">
Provide business Tax ID/ GST number
														</span>
													</div>
												</div>
												<div class="form-group">
<label for="business_url" class="control-label col-md-3">Website<span class="required" aria-required="true">
													 </span>
													</label>
													<div class="col-md-6">
		<input type="text" placeholder="http://merchantwebsite.com" class="form-control" name="business_url" id="business_url">
														<span class="help-block">
												Provide your merchant's website address </span>
													</div>
												</div>
												<div class="form-group">
<label  for="suspended" class="control-label col-md-3">Status <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
														<div class="radio-list">
<label class="radio-inline" for="suspended"></label>
			
<input type="radio" class="required" id="suspended" name="suspended" <? if ($form['suspended'] == '0') { ?> checked="checked" <? } ?> value="0"/>&nbsp;Active&nbsp;&nbsp;&nbsp;<input type="radio" class="required" id="suspended" name="suspended" <? if ($form['suspended'] == '1') { ?> checked="checked" <? } ?> value="1" />&nbsp;Suspended
		
		</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab4">
							<h3 class="block">Provide Your Merchant's Settlement Details</h3>
									<h4 class="form-section">Settlement Info</h4>
	
												<div class="form-group">
<label for="bank_name"class="control-label col-md-3">Bank Name <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
<input type="text" class="form-control required" id="bank_name" name="bank_name" value="<?=$form['bank_name'];?>" />
	
														<span class="help-block">
Provide the bank name
														</span>
													</div>
												</div>
												<div class="form-group">
<label for="bank_address"class="control-label col-md-3">Address <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
														<input type="text" class="form-control" name="registration_number">
														<span class="help-block">
Provide the bank's address
														</span>
													</div>
												</div>
												<div class="form-group">
<label for="bank_swift" class="control-label col-md-3">S.W.I.F.T # <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
<input type="text" placeholder="" class="form-control" name="bank_swift">
														<span class="help-block">
Provide the bank's S.W.I.F.T number
														</span>
													</div>
												</div>
<div class="form-group">
<label for="bank_account_name" class="control-label col-md-3">Account Name<span class="required" aria-required="true">
													 </span>
													</label>
													<div class="col-md-6">
		<input type="text" placeholder="My Company Inc." class="form-control" name="bank_acct_name"/>
														<span class="help-block">
												Provide the account holders name </span>
													</div>
												</div>
<div class="form-group">
<label for="bank_routing_number" class="control-label col-md-3">Routing #<span class="required" aria-required="true">
													 </span>
													</label>
													<div class="col-md-6">
		<input type="text" placeholder="" class="form-control" name="bank_routing_number">
														<span class="help-block">
												Provide your merchant's routing/ transit number </span>
													</div>
												</div>
												<div class="form-group">
<label for="bank_account_number" class="control-label col-md-3">Account #<span class="required" aria-required="true">
													 </span>
													</label>
													<div class="col-md-6">
		<input type="text" placeholder="" class="form-control" name="bank_acct_number">
														<span class="help-block">
												Provide your merchant's account number </span>
													</div>
												</div>
</div><!--/tab-->

<div class="tab-pane" id="tab5">

<h3 class="block">Select The Processor(s) For Your Merchant </h3>

<div class="form-group">
						<label class="col-md-3 control-label">Industry Type </label>
										<div class="col-md-6">
											<select class="form-control">
											<option>(R) Retail </option>
										<option>(M) Mail-Order/Phone-Order</option>
												<option>(E) E-Commerce</option>
												<option>(R) Restaurant</option>
																							</select>

<span class="help-block"> Select your merchant's industry type </span>
										</div>
									</div>
<div class="form-group">
				<label class="col-md-3 control-label">Payment types</label>
										<div class="col-md-6">
											<div class="checkbox-list">
												<label class="checkbox-inline">
												<div class="checker" id="uniform-inlineCheckbox21"><span><input type="checkbox" id="inlineCheckbox21" value="option1"></span></div> Visa </label>
												<label class="checkbox-inline">
												<div class="checker" id="uniform-inlineCheckbox22"><span><input type="checkbox" id="inlineCheckbox22" value="option2"></span></div> MasterCard </label>
<label class="checkbox-inline">
												<div class="checker" id="uniform-inlineCheckbox22"><span><input type="checkbox" id="inlineCheckbox22" value="option2"></span></div> Amex </label>
<label class="checkbox-inline">
												<div class="checker" id="uniform-inlineCheckbox22"><span><input type="checkbox" id="inlineCheckbox22" value="option2"></span></div> MasterCard </label>
<label class="checkbox-inline">
												<div class="checker" id="uniform-inlineCheckbox22"><span><input type="checkbox" id="inlineCheckbox22" value="option2"></span></div> Discover </label>
<label class="checkbox-inline">
												<div class="checker" id="uniform-inlineCheckbox22"><span><input type="checkbox" id="inlineCheckbox22" value="option2"></span></div>JCB </label>

<label class="checkbox-inline">
												<div class="checker" id="uniform-inlineCheckbox22"><span><input type="checkbox" id="inlineCheckbox22" value="option2"></span></div> Echeck </label>

											</div>

<span class="help-block"> Select the payment types for your merchant </span>
										</div>
									</div>

												<div class="form-group">
<label for="username" class="control-label col-md-3"> Credit Card <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
<input type="text" autocomplete="off" class="required form-control" id="username" name="cc_processor" value="<?=$form['cc_processor'];?>" />
							
<span class="help-block"> Select a Credit Card Processor/ Network for your merchant </span>
													</div>
												</div>
<div class="form-group">
<label for="username" class="control-label col-md-3"> Echeck/C21 <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
<input type="text" autocomplete="off" class="required form-control" id="echeck_processor" name="echeck_processor" value="<?=$form['echeck_processor'];?>" />
	
		
<span class="help-block"> Select a Echeck/Direct Debit Processor for your merchant </span>
													</div>
												</div>



<div class="form-group">
<label for="merchantnum" class="control-label col-md-3"> Merchant # <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
<input type="text" autocomplete="off" class="required form-control" id="echeck_processor" name="merchant_number" value="<?=$form['merchant_number'];?>" />
	
		
<span class="help-block"> Merchant Account Number for your merchant </span>
													</div>
												</div>

<div class="form-group">
<label for="username" class="control-label col-md-3"> Terminal # <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
<input type="text" autocomplete="off" class="required form-control" id="terminal_number" name="terminal_number" value="<?=$form['terminal_number'];?>" />
	
		
<span class="help-block"> Provide Your Merchants Terminal Number/ ID (Optional) </span>
													</div>
												</div>



<div class="form-group">
<label for="username" class="control-label col-md-3"> Store # <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-6">
<input type="text" autocomplete="off" class="required form-control" id="store_number" name="store_number" value="<?=$form['store_number'];?>" />
	
		
<span class="help-block"> Provide Your Merchants Store Number (Optional) </span>
													</div>
												</div>



</div><!--/tab-->




										</div>
									</div>
									
									<div class="form-actions hidden">
										<div class="row">
								<div class="col-md-offset-3 col-md-9">
			<a href="javascript:;" class="btn btn-inverse button-previous disabled">
			<i class="m-icon-swapleft"></i> Back </a>
<a href="javascript:;" class="btn btn-primary button-next">
				Continue <i class="m-icon-swapright m-icon-white"></i>
</a>
				
<button type="submit" name="go_client" class="btn btn-success button-submit"ladda-button" data-style="expand-left" value="" /><span class="ladda-label">Add Client</span></button>

 Create Account <i class="fa fa-check"></i> </button>
											</div>
										</div>
									</div>
									
								</div>
								
						</div>
					</div>
				</div>
			</div>


</div><!--/col-lg-12-->
</div><!--/row-->

    <div class="modal-footer hidden">
        <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
		<button type="submit" name="go_client" class="btn btn-success button-submit"ladda-button" data-style="expand-left" value="" /><span class="ladda-label">Update</span></button>

 
			</form>
    </div>
</div><!--/modal-->
</div>



<!-- Jitesh -->

<script type="text/javascript">
	var customers = JSON.parse('<?php echo addslashes(json_encode($customer_view)); ?>');
	var map = L.map('map').setView([34.2186286,-119.160848], 2);

	L.tileLayer( 'https://' + '{s}.tiles.mapbox.com/' + 'v3/{id}/{z}/{x}/{y}.png', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="http://openstreetmap.org/"> OpenStreetMap </a> contributors, ' +
		'<a href="http://creativecommons.org/"> CC-BY-SA </a>, ' +
		'Imagery © <a href="http://mapbox.com">Mapbox</a>',
		id: 'examples.map-i875mjb7'
	}).addTo(map);
	 
	function buildMap(customers) {
		var len = customers.length;
		for(var i=0;i<len;i++) {
			var c = customers[i];
			if(c.lat && c.lng) {
				L.marker([c.lat, c.lng], null).addTo(map).bindPopup('<b>' + c.first_name + ' ' + c.last_name + '</b><br>' + c.company + '<br>' + c.address_1 + '<br>' + c.address_2 + '<br>' + c.city + '<br>' + c.state + '<br>' + c.country);
			}
		}
	}
	 
	$( document ).ready(function() {
		buildMap(customer_view);
	});

</script>


<script type="text/javascript">
      $(function(){
        
        var $formmapper = $("#formmapper"),
          $multiple = $("#multiple");
        
        $formmapper
          .formmapper({ map: ".map_canvas", details: "form" })
          .bind("geocode:multiple", function(event, results){
            $.each(results, function(){
              var result = this;
              $("<li>")
                .html(result.formatted_address)
                .appendTo($multiple)
                .click(function(){
                  $formmapper.formmapper("update", result)
                });
            });
          });
        
        $("#find").click(function(){
          $("#formmapper").trigger("geocode");
        });
        
      });
    </script>


        

<script type="text/javascript">
$(function() {
	$('#submit_form').click(function(e){
	 	e.preventDefault();
	 	var l = Ladda.create(this);
	 	l.start();
	 	$.post("https://everpayinc.com/clients/post/edit/", 
	 	    { data : data },
	 	  function(response){
	 	    console.log(response);
	 	  }, "json")
	 	.always(function() { l.stop(); });
	 	return false;
	});
});
</script>

<?=$this->load->view(branded_view('cp/footer'));?>