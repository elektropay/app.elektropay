<?=$this->load->view(branded_view('cp/header'), array('head_files' => '
<script type="text/javascript" src="' . branded_include('js/formmapper.js') . '"></script>
<link rel="stylesheet" type="text/css" href="' . branded_include('css/geostyles.css') . '" />
<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>')); ?>



<style type="text/css">


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


</style>

<div class="col-lg-12 col-md-12 col-sm-12">
<div class="row">

<section id="user-details-section" data-route-regex="^\/users\/" data-title="User Details " class="content-page current">
<div class="content">
<style type="text/css">
/** FIX for Bootstrap and Google Maps Info window styes problem **/
img[src*="gstatic.com/"], img[src*="googleapis.com/"] {
max-width: none;
}
</style>
<form class="form-horizontal" id="form_customer" method="post" action="<?=site_url($form_action);?>">

<div class="user-header">
    <img class="img-polaroid" src="https://media.licdn.com/mpr/mprx/0_fxkuMxLkAG3FavaiSyq0MpvoPhNw29OiSZK1MjkJuL8s1td__MN8cgrcgmqv7A0fayQtns9_xWqd">

    <div class="user-bg-box">
        <img class="user-bg" src="https://media.licdn.com/mpr/mprx/0_fxkuMxLkAG3FavaiSyq0MpvoPhNw29OiSZK1MjkJuL8s1td__MN8cgrcgmqv7A0fayQtns9_xWqd">

        <div class="box-content">
            <div class="payment-count">
                <span class="lined-text">Payments Count:</span>
                <strong><?php echo $total_orders;?></strong>
            </div>
            <div class="username-area">
                <h4>
                    <span class="name user-head-nickname">
                       <b> <?=$form['first_name'];?> <?=$form['last_name'];?></b>
                    </span>

                    
                    <span class="user-label user-blocked js-user-blocked" style="display: none;">Blocked</span>
                </h4>
            </div>
        </div>
    </div>
</div>

<div class="detail-nav">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#userdetails-details" class="userdetails-details" data-toggle="tab" aria-expanded="true">Details</a></li>
        <li><a href="#userdetails-devices" class="userdetails-devices" data-toggle="tab" aria-expanded="false">Devices</a></li>
        <li><a href="#userdetails-history" class="userdetails-history" data-toggle="tab" aria-expanded="false">History</a></li>
        <li><a href="#userdetails-location" class="userdetails-location" data-toggle="tab" aria-expanded="false">Location</a></li>
        <li><a href="#userdetails-json" class="userdetails-json" data-toggle="tab" aria-expanded="false">Raw JSON</a></li>
    <li><a href="#userdetails-metadata" class="userdetails-metadata" data-toggle="tab" aria-expanded="false">Metadata</a></li>
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
                        <div class="field-title">Customer Since</div>
                        [<strong><abbr class="timeago" title="<?=$form['date_created'];?>"><?=$form['date_created'];?></abbr></strong>]
                    </div>
                    

                    <div class="col-xs-4 field">
                        <div class="field-title">Multifactor Encryption</div>
                        <div class="text-label logins-count" style="margin:2px;">
                        <b> no </b>
                        </div>
                    </div>


                    <div class="col-xs-4 field hide">
                        <div class="field-title">Email</div>
                        
                          <?=$form['email'];?>
                        
                    </div>

                    <div class="col-xs-4 field">
                        <div class="field-title">Primary Payment Provider</div>
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
                        <div class="field-title">Last Payment</div>
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

        <label class="col-xs-3 control-label truncate" title="given_name">given_name</label>
        <div class="col-xs-6 info-field">
          
            
              
               <?=$form['first_name'];?>
              
            
          
        </div>
		
    <div class="col-xs-3">
      <button class="btn btn-primary btn-sm btn-edit-customer"><span class="fa fa-edit"></span> Edit</button>
    </div>
	
    </div>
		
    </div>
  
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="family_name">family_name</label>
        <div class="col-xs-9 info-field">
          
            
              
               <?=$form['last_name'];?>
              
            
          
        </div>
    </div>

    <div class="form-group">
          <label for="address_1" class="col-xs-3 control-label" title="billing Address">address_1</label>
		 <div class="col-xs-9 info-field">
		 <?=$form['address_1'];?>
		 </div>
			</div>

    <div class="form-group">
				<label for="address_2" class="col-xs-3 control-label" title="Address 2">address_2</label>
				<div class="col-xs-9 info-field">
           <?=$form['address_2'];?>
		   </div>
			</div>

    <div class="form-group">
				<label for="city" class="col-xs-3 control-label" title="city">billing_City</label>
				<div class="col-xs-9 info-field">
           <?=$form['city'];?>
			</div>
			</div>

    <div class="form-group">
				<label for="state" class="col-xs-3 control-label" title="billing_state">billing_State</label>
				<div class="col-xs-9 info-field">
				   <?=$form['state'];?>
          				</div>
			</div>
			

    <div class="form-group">
				<label for="Country" class="col-xs-3 control-label" title="billing_country">country</label>
				<div class="col-xs-9 info-field">
           <?=$form['country'];?>
		   </div>
			</div>

    <div class="form-group">
				<label for="postal_code" class="col-xs-3 control-label" title="billing_zip">billing_zip</label>
	<div class="col-xs-9 info-field">
           <?=$form['postal_code'];?>
		   </div>
			</div>

    <div class="form-group">
				<label for="phone" class="col-xs-3 control-label" title="contact_number">contact_phone</label>
				<div class="col-xs-9 info-field">
          			 <?=$form['phone'];?>
					 </div>
			</div>
      
		
    <div class="form-group">

        <label class="col-xs-3 control-label truncate" title="picture">picture</label>
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

    <div class="tab-pane" id="userdetails-json">
        <div class="user-json widget-box"><pre class="prettyprint user-json-text prettyprinted" style="min-height: 50vh;"><span class="pln">  </span><span class="pun">{</span><span class="pln">
    </span><span class="str">"given_name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"<?=$form['first_name'];?>"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"family_name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"<?=$form['last_name'];?>"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"picture"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"https://media.licdn.com/mpr/mprx/0_fxkuMxLkAG3FavaiSyq0MpvoPhNw29OiSZK1MjkJuL8s1td__MN8cgrcgmqv7A0fayQtns9_xWqd"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"<?=$form['first_name'];?> <?=$form['last_name'];?>"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"apiStandardProfileRequest"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
        </span><span class="str">"headers"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            </span><span class="str">"_total"</span><span class="pun">:</span><span class="pln"> </span><span class="lit">1</span><span class="pun">,</span><span class="pln">
            </span><span class="str">"values"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">[</span><span class="pln">
                </span><span class="pun">{</span><span class="pln">
                    </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"x-li-auth-token"</span><span class="pun">,</span><span class="pln">
                    </span><span class="str">"value"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"name:1IqZ"</span><span class="pln">
                </span><span class="pun">}</span><span class="pln">
            </span><span class="pun">]</span><span class="pln">
        </span><span class="pun">},</span><span class="pln">
        </span><span class="str">"url"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"https://api.linkedin.com/v1/people/2d_jxyrXWD"</span><span class="pln">
    </span><span class="pun">},</span><span class="pln">
    </span><span class="str">"currentShare"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
        </span><span class="str">"author"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            </span><span class="str">"firstName"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"<?=$form['first_name'];?>"</span><span class="pun">,</span><span class="pln">
            </span><span class="str">"id"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"2d_jxyrXWD"</span><span class="pun">,</span><span class="pln">
            </span><span class="str">"lastName"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"<?=$form['last_name'];?>"</span><span class="pln">
        </span><span class="pun">},</span><span class="pln">
        </span><span class="str">"comment"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"One of the best developers that I've worked with.. I highly recommend him for any development or server work"</span><span class="pun">,</span><span class="pln">
        </span><span class="str">"content"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            </span><span class="str">"description"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"LinkedIn strengthens and extends your existing network of trusted contacts. LinkedIn is a networking tool that helps you discover inside connections to recommended job candidates, industry experts and business partners."</span><span class="pun">,</span><span class="pln">
            </span><span class="str">"eyebrowUrl"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"https://www.linkedin.com/shareArticle?mini=true&amp;url=http://share.fiverr.com/ab07lcc6291"</span><span class="pun">,</span><span class="pln">
            </span><span class="str">"resolvedUrl"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"https://www.linkedin.com/uas/login"</span><span class="pun">,</span><span class="pln">
            </span><span class="str">"shortenedUrl"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"https://lnkd.in/ddAH2Fc"</span><span class="pun">,</span><span class="pln">
            </span><span class="str">"submittedUrl"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"https://www.linkedin.com/shareArticle?mini=true&amp;url=http://share.fiverr.com/ab07lcc6291"</span><span class="pun">,</span><span class="pln">
            </span><span class="str">"title"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Sign In | LinkedIn"</span><span class="pln">
        </span><span class="pun">},</span><span class="pln">
        </span><span class="str">"id"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"s5958612310007246855"</span><span class="pun">,</span><span class="pln">
        </span><span class="str">"source"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            </span><span class="str">"serviceProvider"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
                </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"LI_BADGE"</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
        </span><span class="pun">},</span><span class="pln">
        </span><span class="str">"timestamp"</span><span class="pun">:</span><span class="pln"> </span><span class="lit">1420643880000</span><span class="pun">,</span><span class="pln">
        </span><span class="str">"visibility"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            </span><span class="str">"code"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"anyone"</span><span class="pln">
        </span><span class="pun">}</span><span class="pln">
    </span><span class="pun">},</span><span class="pln">
    </span><span class="str">"distance"</span><span class="pun">:</span><span class="pln"> </span><span class="lit">0</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"headline"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Chief Innovation Director at Elektropay Corp"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"industry"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Financial Services"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"location"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
        </span><span class="str">"country"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            </span><span class="str">"code"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"us"</span><span class="pln">
        </span><span class="pun">},</span><span class="pln">
        </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Miami/Fort Lauderdale Area"</span><span class="pln">
    </span><span class="pun">},</span><span class="pln">
    </span><span class="str">"numConnections"</span><span class="pun">:</span><span class="pln"> </span><span class="lit">500</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"numConnectionsCapped"</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"positions"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
        </span><span class="str">"_total"</span><span class="pun">:</span><span class="pln"> </span><span class="lit">1</span><span class="pun">,</span><span class="pln">
        </span><span class="str">"values"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">[</span><span class="pln">
            </span><span class="pun">{</span><span class="pln">
                </span><span class="str">"company"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
                    </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Elektropay Corp"</span><span class="pln">
                </span><span class="pun">},</span><span class="pln">
                </span><span class="str">"id"</span><span class="pun">:</span><span class="pln"> </span><span class="lit">610890422</span><span class="pun">,</span><span class="pln">
                </span><span class="str">"isCurrent"</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">,</span><span class="pln">
                </span><span class="str">"startDate"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
                    </span><span class="str">"month"</span><span class="pun">:</span><span class="pln"> </span><span class="lit">9</span><span class="pun">,</span><span class="pln">
                    </span><span class="str">"year"</span><span class="pun">:</span><span class="pln"> </span><span class="lit">2014</span><span class="pln">
                </span><span class="pun">},</span><span class="pln">
                </span><span class="str">"title"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"CTO"</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
        </span><span class="pun">]</span><span class="pln">
    </span><span class="pun">},</span><span class="pln">
    </span><span class="str">"publicProfileUrl"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"https://www.linkedin.com/in/everpay"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"relationToViewer"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
        </span><span class="str">"distance"</span><span class="pun">:</span><span class="pln"> </span><span class="lit">0</span><span class="pln">
    </span><span class="pun">},</span><span class="pln">
    </span><span class="str">"siteStandardProfileRequest"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
        </span><span class="str">"url"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"https://www.linkedin.com/profile/view?id=57801416&amp;authType=name&amp;authToken=1IqZ&amp;trk=api*a266483*s274221*"</span><span class="pln">
    </span><span class="pun">},</span><span class="pln">
    </span><span class="str">"specialties"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"World Market Analyst, Global Logistics, Branding and Identity, Guerrilla Marketing, Database and Device architecture, Information Systems design, Web &amp; Application GUI design, real estate financing. Social Networking Adjuster - Liaison"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"summary"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Opening Accounts  and registering Shipping/ Fleet companies, freight forwarders, warehouses to use the Oceanwide Marine Network's Genoa platform. Which is a unique application that promotes real-time collaboration between brokers, underwriters, claim settling agents and shippers within a single hosted application to offer significant operational efficiencies and cost reductions in the management and administration of P&amp;C insurance policies.\nBasically I marketed and sold cargo insurance"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"email_verified"</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"updated_at"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"2015-09-13T05:33:08.769Z"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"user_id"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"linkedin|2d_jxyrXWD"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"nickname"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"<?=$form['first_name'];?> <?=$form['last_name'];?>"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"identities"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">[</span><span class="pln">
        </span><span class="pun">{</span><span class="pln">
            </span><span class="str">"access_token"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"AQWKBZie2fhmFZg4QIFE76is6pU2WrnXC0kfxWZhCLTTMs5Z-ReT73GL9PevtiLBAXYMoVm2_Jdp-7aj9jxyuQlnv0b2ubk5ewzdowEtr6SMAtQFjZWyYlFhQRPvBNZ8ojq7qdE0Y0CQCvpjIJHmIuJNEZp_OIpZWeJ1iPDAJpkYPD5XDH0"</span><span class="pun">,</span><span class="pln">
            </span><span class="str">"provider"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"linkedin"</span><span class="pun">,</span><span class="pln">
            </span><span class="str">"user_id"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"2d_jxyrXWD"</span><span class="pun">,</span><span class="pln">
            </span><span class="str">"connection"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"linkedin"</span><span class="pun">,</span><span class="pln">
            </span><span class="str">"isSocial"</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">true</span><span class="pln">
        </span><span class="pun">}</span><span class="pln">
    </span><span class="pun">],</span><span class="pln">
    </span><span class="str">"created_at"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"2015-09-13T05:33:08.769Z"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"payment_ip"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"74.12.221.150"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"last_payment"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"2015-09-13T05:33:08.756Z"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"charge_count"</span><span class="pun">:</span><span class="pln"> </span><span class="lit">1</span><span class="pln">
</span><span class="pun">}</span></pre>

</div>

 </div>

<div class="tab-pane" id="userdetails-metadata">

<div class="form-group app-metadata">

        <div class="widget-box">
            <h5>Metadata</h5>
   <div class="metadata widget-box box-highlight">
   <form class="form-user-metadata form-horizontal">
  <div class="form-group user-metadata">
    <label class="col-xs-3 control-label truncate" title="user_metadata">
      user_metadata
      <span class="help" rel="tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="data that the user has read/write access to (e.g. color_preference, blog_url, etc.)">
        <i class="icon-question-sign">&nbsp;</i>
      </span>
    </label>

    <div class="col-xs-9 info-field">
      <div style="word-wrap:break-word;">

        
            No metadata yet.
        
      </div>
    </div>
	
  
   </div><!--END/.form-group user-metadata-->
  
    <div class="form-group app-metadata">
    <div class="col-xs-3 control-label truncate"></div>
    <div class="col-xs-9 info-field">
      <button class="btn btn-primary btn-sm btn-edit-metadata"><a href="<?=site_url('customer_edit/');?>">Edit</a></button>
    </div>
    </div>
  </div>
  
     </div><!--END/.widget-box-->
   </div><!--END/.metadata-->
</div><!--END/.form-group-->

 </div><!--END/.tab-pane-->

 </div><!--END/.tab-panel-->

</form>
</section>
 </div><!--END/.col-lg-12-->

 </div><!--END/.row-->

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








<div class="row hidden">
<div class="col-lg-12 col-md-12 col-sm-12">

<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12">

<form class="form-horizontal well" id="form_customer" method="post" action="<?=site_url($form_action);?>">

<div class="widget-box">
			<div class="widget-header">
				
	<legend>System Information</legend>
			</div>

			<div class="widget-body">
				<div class="widget-main">
<fieldset>
	<ul class="form">
		<li>
			<label for="email">Email Address</label>
			<input type="text" autocomplete="off" class="text email mark_empty" rel="email@example.com" id="email" name="email" value="<?=$form['email'];?>" />
		</li>
<hr>
		<li>
			<label for="internal_id">Internal Identifier</label>
			<input type="text" class="text" id="internal_id" name="internal_id" value="<?=$form['internal_id'];?>" />
		</li>

		<li>
			<div class="help">
This identifier can be a username or account ID for your internal systems.  It can be used via the API to
			synchronize customer data on our system with other software by providing a cross-system unique identifier.</div>
		</li>
<hr>
		<li>
			<label for="phone">Contact Number</label>
			<input type="text" class="text" id="phone" name="phone" value="<?=$form['phone'];?>" />
		</li>
<hr>
	</ul>
</fieldset>
 
	

<fieldset><legend>Personal Information</legend>
	<ul class="form">
		<li>
			<label for="first_name">Name</label>
			<input class="text required mark_empty" rel="First Name" type="text" id="first_name" name="first_name" value="<?=$form['first_name'];?>" />&nbsp;&nbsp;<label style="display:none" for="last_name">Last Name</label><input class="text mark_empty" rel="Last Name" type="text" id="last_name" name="last_name" value="<?=$form['last_name'];?>" />
		</li>
<hr>
		<li>
			<label for="company">Company</label>
			<input type="text" class="text" id="company" name="company" value="<?=$form['company'];?>" />
		</li>
<hr>
		<li>
			<label for="address_1">Street Address</label>
			<input type="text" class="text" name="address_1" id="address_1" value="<?=$form['address_1'];?>" />
		</li>
<hr>
		<li>
			<label for="address_2">Address Line 2</label>
			<input type="text" class="text" name="address_2" id="address_2" value="<?=$form['address_2'];?>" />
		</li>
<hr>
		<li>
			<label for="city">City</label>
			<input type="text" class="text" name="city" id="city" value="<?=$form['city'];?>" />
		</li>
<hr>
		<li>
			<label for="Country">Country</label>
			<select id="country" name="country"><option value=""></option><? foreach ($countries as $country) { ?><option <? if ($form['country'] == $country['iso2']) { ?> selected="selected" <? } ?> value="<?=$country['iso2'];?>"><?=$country['name'];?></option><? } ?></select>
		</li>
<hr>
		<li>
			<label for="state">Region</label>
			<input type="text" class="text" name="state" id="state" value="<?=$form['state'];?>" /><select id="state_select" name="state_select"><? foreach ($states as $state) { ?><option <? if ($form['state'] == $state['code']) { ?> selected="selected" <? } ?> value="<?=$state['code'];?>"><?=$state['name'];?></option><? } ?></select>
		</li>
<hr>
		<li>
			<label for="postal_code">Postal Code</label>
			<input type="text" class="text" name="postal_code" id="postal_code" value="<?=$form['postal_code'];?>" />
		</li>
	</ul>
</fieldset>
<hr>
<div id="complete" class="submit margin-top-20 center">
	<input type="submit" class="btn btn-success btn-lg btn-block center" name="go_customer" value="<?=ucfirst($form_title);?>" />

</div>
</form>


				</div>
			</div>
		</div>
</div><!--/col-lg-6-->

<div class="col-lg-6 col-md-6 col-sm-12">
<div class="widget-box">
			
		</div>
</div><!--/col-lg-6-->

</div><!--/row -->

</div><!--/col-lg-12-->
</div><!--/row -->


</div><!--/row -->

</div><!--/col-lg-12-->
	<script>
	
      $(function(){
        $("#formmapper").formmapper({
          map: ".map_canvas",
		  findme: true,
          details: "form",
          markerOptions: {
            draggable: true,
			zoom: 5
          }
        });
        
        $("#formmapper").bind("geocode:dragged", function(event, latLng){
		  $("#formmapper").formmapper("find",latLng.lat()+","+latLng.lng());
        });
        
        
        $("#find").click(function(){
          $("#formmapper").trigger("geocode");
        }).click();
		
		$('#formmapper').popover({'trigger': 'focus'});
		
		$('input:disabled').val('Add location above');

      });
    </script>




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


<script>
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



<?=$this->load->view(branded_view('cp/footer'));?>