
<?=$this->load->view(branded_view('cp/header'), array('head_files' => '
<link rel="stylesheet" type="text/css" href="' . branded_include('leaflet/dist/leaflet.css') . '" />','<link rel="stylesheet" type="text/css" href="' . branded_include('leaflet/dist/leaflet.css') . '" />' ,'<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>'));?>

						
<script type="text/javascript">
$(function() {
	$('#submit_form').click(function(e){
	 	e.preventDefault();
	 	var l = Ladda.create(this);
	 	l.start();
	 	$.post("https://everpayinc.com/customers/customer_add", 
	 	    { data : data },
	 	  function(response){
	 	    console.log(response);
	 	  }, "json")
	 	.always(function() { l.stop(); });
	 	return false;
	});
});
</script>

<style type="text/css">
h2 {
    margin: 10px 0px 20px;
    font-size: 22px!important;
}
	#map {
		display: block;
		height: 180px;
		/* max-height: 200px; */
		overflow: hidden;
	}
	
	.jumbotron {
    padding: 30px;
    margin-bottom: 20px;
    margin-top: 40px;
    color: #05101b!important;
    background-color: #ffffff!important;
}

.content-wrapper .chart {
  margin: 25px 0 50px;
  background: #fff;
  border: 1px solid #DFE3EB;
  padding: 5px 5px;
  border-radius: 5px;
  box-shadow: inset 0 1px 0 #ededed;
}

.leaflet-container .leaflet-control-attribution {
  background: #fff;
  background: rgba(255, 255, 255, 0.7);
  margin: 0;
display: none!important;
}

#users .dataTables_wrapper {
    margin: 20px -10px!important;
}


#content {
    background: #FFF;
    margin-left: 200px;
    padding: 20px;
    padding-top: 67px;
    padding-bottom: 40px;
    position: relative;
    min-height: 560px;
    margin-bottom: 0px!important;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}
</style>				

<div id="users" style="height: auto;">
 
<div class="content-wrapper">
			   
<div class="row">

  <?php if (!empty($this->dataset->data)) : ?>
  
<div id="users-list_wrapper">

<div class="row-fluid">

<div class="row clearfix" style="height: auto;">
					
<div class="users-list">
 <div class="col-md-12"			
<div class="row headers">
<?=$this->dataset->TableHead();?>
</div>
</div>

<div class="row user">             

	<?php foreach ($this->dataset->data as $row) :?>

	<tr class="items-list js-trigger-settings" rel="<?=$row['id'];?>">
			<td class=""><input type="checkbox" name="check_<?=$row['id'];?>" value="1" class="action_items" /></td>
			
		<td class="col-sm-3">
   <span class="left"> <a href="<?=site_url('customers/edit/' . $row['id']);?>">
   <?php $email = $row['email'];
$size = 28; $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?s=" . $size;
?>
      <img class="img-circle" src="<?php echo $grav_url; ?>" alt="" width="28">
    </a></span>
<span id="truncate" class="col-sm-9 card-name right truncate"><?=$row['first_name'];?> <?=$row['last_name'];?></span></td>

             <td>
 <span class="description long-label"><strong><a  class="truncate" href="<?=site_url('customers/edit/' . $row['id']);?>"><?=$row['email'];?></strong></a> <i class="fa fa-ellipsis-h"></i> <em><?=$row['id'];?></em></a></span></td>
 <td class="">[<strong><abbr class="timeago" title="<?=$row['date_created'];?>"><?=$row['date_created'];?></abbr></strong>]</span></td>
<td class="truncate"><?

if (isset($row['plans'])) {
	foreach ($row['plans'] as $plan) {
		if ($plan['status'] != 'inactive') {
			?><span class="label label-warning"><i class="fa fa-times"></i><?=$plan['name'];?></span><br /><?
		}
	}
}
			
?></td>
<td class="actions">
    <ul class="inline-list">
	  
	<li class="hidden protip" data-pt-title="View"> 	
	  <a class="" href="<?=site_url('customers/view/' . $row['id']);?>" data-toggle="tooltip" title="" data-original-title="View">
	  <i class="fa fa-eye"></i>
	  </a> 
	  </li>
	  
		<li>
		<a class="" data-pt-title="Edit" href="<?=site_url('customers/edit/' . $row['id']);?>" data-toggle="tooltip" title="" data-original-title="Edit">
		<span class="fa fa-edit"></span>
		</a> 
		</li>
		
		<li class="hidden" data-toggle="tooltip" title="" data-original-title="Contact">
		<a href="mailto:<?=$row['email'];?>" class="btn btn-default btn-sm protip" data-pt-title="Contact" data-toggle="tooltip" title="" data-original-title="Contact">
          <i class="fa fa-envelope"></i>
		</a> 
		</li>
		
		<li>
		<a class="" data-pt-title="Delete" href="<?=site_url('customers/delete/' . $row['id']);?>" data-toggle="tooltip" title="" data-original-title="Delete">
		<i class="fa fa-times"></i>
		</a> 
		</li>
		
    </ul>
</td>

        </tr>
<?php endforeach; ?>


</div><!--END/.row-fluid user-->

<?=$this->dataset->TableClose();?>

</div><!--/col-lg-12-->
</div><!--/row-->
</section><!--END/#users-list_wrapper-->
	
<?php else : ?>

<div class="empty margin-top-0">
<br />
<div id="no-data-view">

 <div class="jumbotron jumbotron-icon">
 <br />
 
<i class="fa fa-users fa-5"></i>
</div>

    <h2>Customers</h2>
 <p>You haven't created any customers.  <a href="//everpayinc.com/docs/#customers" target="_blank" class="arrow">Learn more</a></p>
    
    <div class="controls">
        <p>
 <a id="new-customer-modal" href="#" title="Create Your First Customer" data-toggle="modal" data-target="#new-customer-modal"
 class="btn btn-primary btn-lg new-customer-modal"><span><i class="fa fa-plus"></i> Create your first customer</span></a>
        </p>
    </div>
    
</div><!--/#no-data-view-->
</div><!--/empty margin-top-0-->


 
</div><!--/content-wrapper-->
</div><!--/#users-->
<?php endif; ?>
 
 
 
</div><!--/content-wrapper-->
</div><!--/#users-->


<!--/START MODALS-->

<div id="edit-customer-modal" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
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
<div class="form-group hidden">
					    <label class="col-sm-2 col-md-2 control-label">Internal ID</label>
					    <div class="col-sm-10 col-md-8">
					      <input type="text" class="form-control required" required name="internal_id" id="internal_id" readonly value="<?php echo $customer_unique_id; ?>">
					      </div>
				  	</div> 
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
					
	 	</form><!-- END FORM-->
    <div class="modal-footer center">
        <button class="btn btn-primary btn-lg" data-dismiss="modal" aria-hidden="true">Cancel</button>
		<input type="submit" class="btn btn-success btn-lg" name="go_customer" value="<?=ucfirst($form_title);?>" />
 	</div><!-- END/.modal-footer-->
	
       </div><!-- END/.modal-content-->
	</div><!-- END/.modal-dialog-->



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
    
    <div id="new-customer-modal" class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h1 class="modal-title">Create New Customer</h1>
        </div>
<form class="form-horizontal" id="new-customer-form" method="post" action="<?=site_url($form_action);?>">
            <div class="modal-body">
                <div class="error-message"></div>

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
            </div>
            <div class="modal-footer center">
               		<input type="submit" class="btn btn-success btn-lg" name="go_customer" value="<?=ucfirst($form_title);?>" />
            </div>
        </form>

    </div>
	
	<!--/CLOSE MODALS-->

<?=$this->load->view(branded_view('cp/footer'));?>
