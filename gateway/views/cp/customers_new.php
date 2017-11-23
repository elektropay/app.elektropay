<?=$this->load->view(branded_view('cp/header'));?>

<style type="text/css">

	#dashboard .chart {
		margin: 25px 0 50px;
		background: #fff;
		border: 1px solid #DFE3EB;
		padding: 10px 10px;
		border-radius: 5px;
		box-shadow: inset 0 1px 0 #ededed;
	}
	
	.jumbotron {
		padding: 30px;
		margin-bottom:40px;
		color: #444;
		background-color: #ffffff!important;
	}
	.dataTables_wrapper {
	   margin: 0px; 
	}
div#section {
  border: 1px solid #eee;
  margin-left: 10px!important;
  margin-right: 10px!important;
  padding: 5px;
bottom: 40px;
top: 30px;
  min-height: 600px;
  position: relative;
  border-radius: 10px;
  z-index: 20;
  -moz-border-bottom-right-radius: 10px;
  border-bottom-right-radius: 10px;
  -webkit-border-bottom-right-radius: 10px;
  -webkit-font-smoothing: subpixel-antialiased;
}



table.dataTable thead th {
  padding: 6px 8px 6px 15px!important;
  border-top: 1px solid #05101b;
  font-weight: 500;
  font-size: 12px!important;
  cursor: pointer;
}

.dataTables_wrapper .row:last-child {
  border-bottom: 0px solid #e0e0e0!important;
  /* padding-top: 12px; */
  padding-bottom: 12px;
  margin-top: 20px!important;
  background-color: rgba(239, 243, 248, 0.03)!important;
}


.dataTables_length select {
  width: 70px;
  height: 38px!important;
  padding: 2px 3px;
}

input[type="search"]{
  display: inline-block;
  height: 20px!important;
  padding: 8px 10px!important;
  margin-bottom: 8px;
  font-size: 14px;
  line-height: 18px;
  color: #444;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  vertical-align: middle;
}

#reports .dataTables_wrapper {
  margin: 5px 2px!important;
  padding: 5px!important;
}


</style>


<div id="reports">

	<div class="content-wrapper">

<div class="stats clearfix" style="height: auto;">
		
                <div class="stat">
			<label>Total Customers</label>
			<div class="value">
				0
				<div class="change up">
					<i class="fa fa-caret-up"></i>
					0%
				</div>
			</div>
		</div>

		<div class="stat">
			<label>New Customers</label>
			<div class="value">
				0
				<div class="change up">
					<i class="fa fa-caret-up"></i>
					0%
				</div>
			</div>
		</div>

               <div class="stat">
			<label>Recurring Customers</label>
			<div class="value">
				0
				<div class="change up">
					<i class="fa fa-caret-up"></i>
					0%
				</div>
			</div>
		</div>

		<div class="stat">
			<label>Customer Volume</label>
			<div class="value">
			<?=$this->config->item('currency_symbol');?><?=money_format("%!^i",$total_amount);?>
				<div class="change up">
					<i class="fa fa-caret-up"></i>
					0%
				</div>
			</div>
		</div>
</div>


<div id="section">
	<div class="row-fluid users-list" style="margin-top: -28px;">
				<div class="row">
				<script type="text/javascript">
				jQuery(document).ready(function($) {

					tbl = jQuery('#example-1').dataTable({
						"aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
	                    "aaSorting": [[ 1, "desc" ]],
	                    "iDisplayLength": 2,
	                    'bProcessing'    : true,
						'bServerSide'    : true,
						'sAjaxSource'    : '<?php echo base_url(); ?>customers/ajax_list',
						'fnServerData': function(sSource, aoData, fnCallback, fnFooterCallback) {
							console.log('hello');
							$.ajax({
								'dataType': 'json',
								'type'    : 'POST',
								'url'     : sSource,
								'data'    : aoData,
								'success' : fnCallback
							});
						}
	                });
				});
				</script>



					<table id="example-1" class="" cellspacing="0" width="100%">
						<thead>

							<tr>
								<?php foreach ($cols as $col) { ?>
								<th><?php echo $col['name']; ?></th>
								<?php } ?>
							</tr>

						</thead>
						<tbody>
							<tr>
								<td colspan="<?php echo count($cols); ?>" class="margin-top-20 lead dataTables_empty"><p class="lead center">Loading your customer data from the server</p></td>
							</tr>
						</tbody>

						<tfoot>
							<tr>
							</tr>
						</tfoot>
					</table>
				</div>
				<!--/.col-md-12-->
			</div>
			<!--/#user-list-->


<div class="empty margin-top-20 margin-bottom-20 hidden">
<div id="no-data-view">
 <div class="jumbotron jumbotron-icon">
<i class="fa fa-user fa-5"></i>
</div>
    <h2>Customers</h2>
 <p>You haven't created any customers yet.  <a href="//everpayinc.com/docs/#customers" target="_blank" class="arrow">Learn more</a></p>
    
    <div class="controls">
        <p>
 <a id="create" href="<?=site_url('/customers/add/');?>" class="btn btn-primary btn-lg"><span><i class="fa fa-plus"></i> Create your first charge</span></a>
        </p>
    </div>
    
</div>
</div><!--/.empty margin-top-20-->

</div><!--/.col-md-12-->
</div><!--/.row-fluid-->


			</div><!--/#section-->
		</div><!--/chart-->
		
		

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
					
	 	</form><!-- END FORM-->
    <div class="modal-footer center">
        <button class="btn btn-primary btn-lg" data-dismiss="modal" aria-hidden="true">Cancel</button>
		<input type="submit" class="btn btn-success btn-lg" name="go_customer" value="<?=ucfirst($form_title);?>" />
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

<script type="text/javascript">
var form = document.getElementById("change-password-form");
var repeatPassword = document.getElementById("changed-password-repeat");

if (repeatPassword) {
    repeatPassword.addEventListener("input", function() {
        var e = form.elements;
        if (e['password'].value != repeatPassword.value) {
            repeatPassword.setCustomValidity("Please enter the same password");
        } else {
            repeatPassword.setCustomValidity("");
        }
    });
}
</script>

    


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

		

	</div><!--/content-wrapper-->

<?=$this->load->view(branded_view('cp/footer'));?>