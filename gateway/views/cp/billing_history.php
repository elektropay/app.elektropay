<?=$this->load->view(branded_view('cp/header'), array('head_files' => '
<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>
<link rel="stylesheet" type="text/css" href="' . branded_include('css/style-shop.css') . '" />
<link rel="stylesheet" type="text/css" href="' . branded_include('css/geostyles.css') . '" />
<script type="text/javascript" src="' . branded_include('js/form.transaction.js') . '"></script>')); ?>

<style>

#sidebar-clear{
 border-radius: 7px;
}

input[type="file"] {
  display: block;
  height: 50px;
  padding-top: 10px;
  color: #444;
}

#sidebar-default .page-menu li a {
  display: block;
  padding: 19px 10px 10px 20px;
  font-size: 16px;
  color: #eee;
  text-decoration: none;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.page-menu li a {
  display: block;
  padding: 13px 30px;
  font-size: 15px;
  color: #444;
  text-decoration: none;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.page-menu > li > .active {
  color: #6787DA;
}

.pagemenu li a i.ion-ios7-person-outline {
  font-size: 36px;
  position: relative;
  top: 4px;
width: 38px;
}

.pagemenu li a i {
  font-size: 36px;
  position: relative;
  top: 4px;
width: 38px;
}

#account #content #sidebar-default .page-menu li a i {
  min-width: 30px;
  font-size: 36px!important;
  position: relative;
  top: 4px;
width: 38px;
}

#account-page #content #panel {
  top: 0;
  position: relative;
  width: 79%;
  margin-left: 35%;
  padding: 10px 60px;
  padding-bottom: 80px;
  float: right;
}

#account-page #content #panel.profile form {
  width: 85%!important;
  margin-top: 10px;
}

select {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  display: inline-block;
  height: 42px!important;
width:80%;
 font-size: 14px;
}

.profile-user-info-striped .profile-info-name {
  color: #336199;
  background-color: #EDF3F4;
  border-top: 1px solid #F7FBFF;
}

.profile-info-row {
  display: table-row;
width: 180px;
}

.profile-user-info {
  display: table;
  width: 98%;
  margin: 0 auto;
  margin-left: -25px;
}

.profile-user-info-striped {
  border: 1px solid #DCEBF7;
}

.profile-info-name {
  text-align: left;
  padding: 6px 10px 6px 4px;
  font-weight: 400;
  color: #667E99;
  text-transform: uppercase;
  color: #999;
  letter-spacing: .2px;
  background-color: transparent;
  border-top: 1px dotted #D5E4F1;
  display: table-cell;
  width: 130px;
  vertical-align: middle;
}

.profile-user-info-striped .profile-info-value {
  border-top: 1px dotted #DCEBF7;
  padding-left: 12px;
}


.profile-info-value {
  display: inline-block;
  padding: 6px 4px 6px 6px;
  border-top: 1px dotted #D5E4F1;
}

.profile-info-value > span {
  width: 120px;
  display: inline-block;
  font-size: 12px;
}



</style>

<!-- END PAGE HEADER-->

<!-- BEGIN PAGE -->
<div class="row">

       <h2 class="page-title">Account Billing <span><small pull-right><strong class="date pull-right">

<div class="actions">
			<div class="btn-group">
				<a class="btn btn-default btn-circle" href="javascript:;" data-toggle="dropdown">
									<i class="fa fa-share"></i>
									<span class="hidden-480">
									More </span>
									<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li>
								<a href="<?=site_url('/settings');?>">
								<i class="fa fa-cog"></i> Application Settings </a>
										</li>										
										<li class="divider">
										</li>
	                                                                        <li>
				<a href="#" data-toggle="modal" data-target="#confirm-modal"><i class="fa fa-times"></i>
											Close Account</a>
										</li>
									</ul>
								</div>
</div>

</strong></small></span></h2>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
                                           
<!-- BEGIN PANEL-->
<div class="panel panel-default panel-border panel-shadow">
<div class="panel-body">

       <!-- BEGIN CONTENT -->
<div class="row-fluid">


<div id="account-page">
<div id="content-inner" class="row account-page">

			<div id="sidebar-clear" class="col-md-3 page-menu" style="padding-bottom:40px;">
				<div id="user-profile">

<div class="profile-info">
			
<div class="row-fluid">
<div class="profile-user-info">
<div class="details">

<div class="profile-info-row field">
<div class="profile-info-name label"> Username </div>
<div class="profile-info-value"><span class="middle"><?=$form['username'];?></span></div>																</div>

<div class="profile-info-row field">
<div class="profile-info-name label"> Account ID </div>
<div class="profile-info-value"><span class="middle"><i class="fa fa-map-marker light-orange bigger-110"></i>
<span>ELK6<?= $this->user->Get('client_id') ?></span></div>															</div>


<div class="profile-info-row">
<div class="profile-info-name label"> Status: </div>
<div class="profile-info-value"><span class="middle">

<? if ($row['suspended'] == '1') { ?><span class="label label-danger suspended arrowed-in-right"><img src="<?= branded_include('images/failed.png'); ?>" alt="Suspended" /> Suspended</span><? } else { ?><span class="label label-success arrowed-in-right" alt="Live"> Live <? } ?> 															</span></div>																</div>
																													<div class="profile-info-row field">
<div class="profile-info-name label">Business </div>
<div class="profile-info-value"><span class="middle"><?=$form['company'];?></span></div>
	</div>

																         <div class="profile-info-row field">
<div class="profile-info-name label"> Signed Up </div>
<div class="profile-info-value"><span class="middle"><?= $this->user->Get('created_date') ?> </span></div>
	</div>

         <div class="profile-info-row field">
<div class="profile-info-name label"> Last Login </div>
<div class="profile-info-value"><span class="middle"><?= $this->user->Get('last_activity') ?> </span></div>															          </div>
	</div><!--/.details -->														</div>
</div>


</div><!--/.profile-info -->
</div><!--/#profile-info -->	

<div class="hr hr-8"></div>
<hr>
				<ul class="page-menu">
					<li>
						<a href="<?= site_url('account/'); ?>" class="active">
							<i class="ion-ios7-person-outline"></i>
							Profile
						</a>
					</li>
					<li>
						<a href="<?= site_url('account/billing'); ?>">
							<i class="ion-card"></i>
							Billing
						</a>
					</li>
					<li>
						<a href="<?= site_url('account/notifications'); ?>">
							<i class="ion-ios7-email-outline"></i>
							Notifications
						</a>
					</li>
					<li>
						<a href="<?= site_url('account/support'); ?>">
							<i class="ion-ios7-help-outline"></i>
							Support
						</a>
					</li>
				</ul>
			</div><!--/.col-md-3 -->

			<div id="panel" class="col-md-8 profile pull-right">
<form class="form-horizontal" id="form_account" method="post" enctype="multipart/form-data" action="<?=site_url($form_action);?>">
				<p class="lead">
					Change your account information, avatar, login credentials, etc.
				</p>

				<form>
					<div class="form-group avatar-field clearfix">
					    <div class="col-sm-12">
	<label>Set up your company logo</label>
			<?php $logo=$form['company_logo'];
			if($logo!=""){ ?>
<img class="img-responsive img-circle" src="<?php echo site_url();?>/upload/<?php echo $form['company_logo'];?>" height="76" width="72"/>
			<?php } else{?>
      <img class="img-responsive img-circle" src="<?php echo site_url();?>/upload/avatar.png" height="76" width="72"/>
			<?php }?>		    

<input type="file" class="text btn btn-link" id="company_logo" name="company_logo"  />

</div>
				  	</div>
				  	<div class="form-group">
					<label class="control-label">Name</label>
<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-user"></i>
					</span>
						    <div class="col-sm-6">
<input class="form-control required mark_empty" class="form-control First Name" type="text" id="first_name" name="first_name" value="<?=$form['first_name'];?>" />
						    </div>
						    <div class="col-sm-6">
<input  class="form-control required mark_empty" rel="Last Name" type="text" id="last_name" name="last_name" value="<?=$form['last_name'];?>" />
 </div>
						    </div>
						  
					  	</div>
				  	<div class="form-group">
						<label>Email address</label>
<div class="input-group">
<span class="input-group-addon">
					<i class="ace-icon fa fa-envelope"></i>
					</span>
<input type="text" autocomplete="off" class="form-control required email mark_empty" rel="email@example.com" id="email" name="email" value="<?=$form['email'];?>" />
					</div>
</div>
					<div class="form-group">
						<label for="timezone">
						Timezone
						<small class="text-warning">(GMT)</small>
					</label>

					<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-globe"></i>
					</span>
<div style="width: 98%;"><?=timezone_menu($form['gmt_offset']);?></div>
</div>
				</div>

<div class="hr hr-8"></div>

<h2> Change Your Address Info.</h2>
					<div class="form-group">
						<label>Street & Number</label>
<input type="text" class="form-control required" name="address_1" id="address_1" value="<?=$form['address_1'];?>" />
					</div>
					<div class="form-group">
						<label>City</label>
<input type="text" class="form-control required" name="city" id="city" value="<?=$form['city'];?>" geoname="locality" />
					</div>
	<div class="form-group">
						<label>Country</label>
	<select id="country" name="country" class="form-control required" geoname="country"><?php
			foreach ($countries as $country) {
				if ($form['country'] == $country['iso2']) { ?>
					<option  selected="selected" geoname="country"  value="<?php echo $country['iso2'];?>" ><?php echo $country['name'];?></option><?php
				} else { ?>
					<option><?php echo $country['name']; ?></option><?php
				}
			} ?></select>
					</div>

<div class="form-group">
<label>State/Region</label>
<input geoname="administrative_area_level_1" type="text" class="text" name="state" id="state" value="<?=$form['state'];?>" />
			<select geoname="administrative_area_level_1_short" id="state_select" class="form-control" name="state_select"><?php
			foreach ($states as $state) {
				if ($form['state'] == $state['code']) { ?>
					<option  selected="selected"  value="<?=$state['code'];?>"><?=$state['name'];?></option><?php
				} else { ?>
					<option value="<?=$state['code'];?>"><?=$state['name'];?></option><?php
				}
			} ?></select>
</div>
					<div class="form-group">
						<label>ZIP</label>
<input geoname="postal_code" type="text" class="form-control required" name="postal_code" id="postal_code" value="<?=$form['postal_code'];?>" />
					</div>

<div class="hr hr-8"></div>

<h2> Change Your Password.</h2>
					<div class="form-group">
					<label>New password</label>
<input type="password" autocomplete="off" class="form-control" id="password" name="password" value="" />
					</div>
					<div class="form-group">
						<label>Confirm new password</label>
<input type="password" autocomplete="off" class="form-control" id="password2" name="password2" value="" />
					</div>

<div class="help">Leave password fields blank to keep your current password.</div>

<div class="hr hr-8"></div>

					<div class="form-group submit action">
<div class="row">
	<div class="col-md-offset-1 col-md-9 margin-top-20">
<input type="submit" class="btn btn-success btn-lg btn-block center" name="add_changes" value="Save Changes" />
</div>
                                       </div>
				</form>

		</div><!--/.col-md-8 -->

</div><!--/.row -->

</div><!--/#account-page-->

</div><!--/.row account-page-->
<!-- END CONTENT -->
    
</div><!-- END PANEL-BODY -->
</div> <!-- END PANEL DEFAULT -->
</div><!--/.col-md-12-->
</div><!--/.row-->


</div><!--/.row-->

<?=$this->load->view(branded_view('cp/footer'));?>

<div class="modal fade" id="confirm-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	  	<div class="modal-dialog">
		    <div class="modal-content">
		    	<form method="post" action="#" role="form">
			      	<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        	<h4 class="modal-title" id="myModalLabel">
			        		Are you sure you want to close this?
			        	</h4>
			      	</div>
			      	<div class="modal-body">
						Do you want to delete your account? All your info will be erased.
			      	</div>
			      	<div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
		<a href="<?=site_url('account/close');?>" type="submit" class="btn btn-danger">Yes, close it</button>
			      	</div>
			    </form>
		    </div>
	  	</div>
	</div>


<!-- richard -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script src="https://everpayinc.com/test/assets/app_v2/assets/js/formmapper/formmapper.js"></script>
<script>
  $(function(){ 

       $("#address_1").formmapper({details:"div#shipping-address-content"}); 

        });
</script>
<!-- richard -->