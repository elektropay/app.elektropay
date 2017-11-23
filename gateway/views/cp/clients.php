<?= $this->load->view(branded_view('cp/header')); ?>


<script>
			jQuery(function($) {
				$("#customer-delete-confirm").on(ace.click_event, function() {
					bootbox.confirm({
						message: "Are you sure?",
						buttons: {
						  confirm: {
							 label: "OK",
							 className: "btn-primary btn-sm",
						  },
						  cancel: {
							 label: "Cancel",
							 className: "btn-sm btn-default",
						  }
						},
						callback: function(result) {
							if(result) alert(1)
						}
					  }
					);
				});
					
		</script>

<style>

#datatables .content-wrapper thead th {
    border-top: 1px solid #dee3ea;
    border-bottom: 1px solid #dee3ea;
    padding: 10px 1px 9px 1px!important;
}

</style>


<div class="content-wrapper">

<div id="reports">

<div class="section clearfix" style="height: auto;">

<? if ($this->user->Get('client_type_id') == '0') { ?>

<div class="content-wrapper">
<div class="row-fluid section clearfix" style="height:420px;">

<div class="col-sm-12">
<div class="alert alert-purple alert-dismissable">
  <span class="glyphicon glyphicon-certificate"></span>
  <span type="button" class="close-button" data-dismiss="alert" aria-hidden="true"></span>
  <span><strong><b> <a href="//everpayinc.com/docs/#clients" target="_blank" ><?=$this->user->Get('client_type');?></strong><span>You do not have the ability to create user accounts.</span></b></a></span>
</div><!-- END.alert-->	
</div><!-- END.col-md-12-->	

<div class="col-md-12 col-sm-12">
			<div class="intro-text-1">
           		
                <div class="row widget-box">
				
                    <div class="col-sm-7 col-xs-7">
                        <h4 class="animated slideInDown">Want to add more users?
                        </h4>

                        <p>
                          Upgrade now to add more accounts.
                        </p>                   
                    </div>
					
                    <div class="col-sm-5 col-xs-5 center">
                        <a href="<?= site_url('account/upgrade'); ?>" class="btn btn-primary btn-lg text-center">Upgrade Now</a>
                    </div>
				                
                </div><!--end/ .row-->
				
				      </div><!--end/ .intro-text-1-->
					 
  </div><!-- END.col-md-12-->
  

</div><!-- END.row-fluid clearfix-->	

</div><!-- END.content-wrapper-->	

<? } elseif ($this->user->Get('client_type_id') == '1') { ?>

<br /> 
<div class="row clearfix">


</div><!-- END.row clearfix-->	

<? } elseif ($this->user->Get('client_type_id') == '2') { ?>

 <div class="row clearfix">
 <div class="col-sm-12">
<div class="alert alert-purple alert-dismissable">
                <span class="glyphicon glyphicon-certificate"></span>
                <span type="button" class="close-button" data-dismiss="alert" aria-hidden="true">
                    </span><strong>As a </strong>
					<a href="account/" target="_blank"><b><?=$this->user->Get('client_type');?></b></a> 

<p><span>You have the ability to Create, Update, Suspend, Unsuspend,
and Delete ALL user accounts across the entire system.  These accounts can be a Merchant Service Provider accounts (with permissions to create End User accounts),
or standalone End User (Merchant) accounts which do not have account creation privileges.  Please do so with care.</span></p>
</div>
</div>
 
 
 
</div><!-- END.row clearfix-->	

<? } elseif ($this->user->Get('client_type_id') == '3') { ?>

 <div class="col-sm-12">
<div class="alert alert-purple alert-dismissable">
                <span class="glyphicon glyphicon-certificate"></span>
                <span type="button" class="close-button" data-dismiss="alert" aria-hidden="true">
                    </span><strong>As a </strong>
					<a href="account/" target="_blank"><b><?=$this->user->Get('client_type');?></b></a> 

<p><span>You have the ability to Create, Update, Suspend, Unsuspend,
and Delete ALL user accounts across the entire system.  These accounts can be a Merchant Service Provider accounts (with permissions to create End User accounts),
or standalone End User (Merchant) accounts which do not have account creation privileges.  Please do so with care.</span></p>
</div>
</div>

<?php if (!empty($this->dataset->data)) : ?>	

<div class="section clearfix" style="height: auto;">
<div class="stats clearfix">

	<div class="col-md-12">
		
                <div class="stat">
			<label>Total Users</label>
			<div class="value">
				0
				<div class="change up">
					<i class="fa fa-caret-up"></i>
					0%
				</div>
			</div>
		</div>

		<div class="stat">
			<label>New Merchants</label>
			<div class="value">
				0
				<div class="change up">
					<i class="fa fa-caret-up"></i>
					0%
				</div>
			</div>
		</div>

               <div class="stat">
			<label>New Agents</label>
			<div class="value">
				0
				<div class="change up">
					<i class="fa fa-caret-up"></i>
					0%
				</div>
			</div>
		</div>

		<div class="stat">
			<label>Total Volume</label>
			<div class="value">
			<?=$this->config->item('currency_symbol');?><?=money_format("%!^i",$total_amount);?>
				<div class="change up">
					<i class="fa fa-caret-up"></i>
					0%
				</div>
			</div>
		</div>
</div>
	</div>

	
<div class="col-md-12">  
	
<div class="users-list">
<div class="row section clearfix" style="height: auto;">

<div id="users-list_wrapper" class="Datatable" role="grid">

<?=$this->dataset->TableHead();?>

<div class="row-fluid user">  

	<?php foreach ($this->dataset->data as $row) :?>
	

		<tr class="items-list js-trigger-settings" rel="<?=$row['id'];?>">
			<td><input type="checkbox" name="check_<?=$row['id'];?>" value="1" class="action_items" /></td>
			<td><b><?=$row['id'];?></b></td>
			<td><?=$row['username'];?></td>
			<?php $email = $row['email'];
$size = 28; $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?s=" . $size;
?>
			<td><img class="img-circle" src="<?php echo $grav_url; ?>" alt="" width="28" style="padding-right:2px;" /><?=$row['first_name'];?> <span class="truncate"><?=$row['last_name'];?></span></td>
			<td class="truncate"><b><?=$row['email'];?></b></td>
			<td class=""><? if ($row['suspended'] == '1') { ?><span class="label label-danger label-sm"><span class="fa fa-close"></span> Closed</span><? } else { ?><span class="label label-success label-sm"><span class="fa fa-check"></span>  Active</span><? } ?></td>
			
			<td class="actions">
    <ul class="inline-list">
	      <li>
        <a href="<?=site_url('clients/view/' . $row['id']);?>" data-toggle="tooltip" title="" data-original-title="View">
          <i class="fa fa-eye"></i>
        </a>
      </li>
      <li>
        <a href="<?=site_url('clients/edit/' . $row['id']);?>" data-toggle="tooltip" title="" data-original-title="Edit">
          <i class="icon-budicon-329"></i>
        </a>
      </li>
	 <li>
        <a href="<?=site_url('clients/suspend/' . $row['id']);?>" data-toggle="tooltip" title="" data-original-title="Delete">
          <i class="fa fa-times"></i>
        </a>
      </li>
    </ul>
  </td>	
	</tr>
</div><!--/row-fluid-user-->

<?php endforeach; ?>

<?=$this->dataset->TableClose();?>

</div><!--/#user-list-wrapper-->
	
</div><!--/col-md-12-->

<?php else : ?>
	
<div class="empty margin-top-20 margin-bottom-20">
<div id="no-data-view">

 <div class="jumbotron jumbotron-icon">
 <br />
<i class="fa fa-group fa-5"></i>
</div>
    <h2>Users</h2>
 <p>You haven't created any users yet.  <a href="//everpayinc.com/docs/#clients" target="_blank" class="arrow">Learn more</a></p>
    
    <div class="controls">
        <p>
 <a id="create" href="<?=site_url('/clients/create/');?>" class="btn btn-primary btn-lg"><span><i class="fa fa-plus"></i> Add Your First User</span></a>
        </p>
    </div>
</div>

<?php endif; ?>

  
  <div class="modal fade" id="confirm-suspend-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	  	<div class="modal-dialog">
		    <div class="modal-content">
		    	<form method="post" action="#" role="form">
			      	<div class="modal-header">
			        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        	<h4 class="modal-title" id="myModalLabel">
			        		Are you sure you want to de-activate this account?
			        	</h4>
			      	</div>
			      	<div class="modal-body">
					
						<p>Do you want to delete this user account? You can always activate later on.</p>
						 
	
			      	</div>
			      	<div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				        <button type="submit" href="<?=site_url('clients/suspend/' . $row['id']);?>" class="btn btn-danger">Yes, do it</button>
			      	</div>
			    </form>
		    </div>
	  	</div>
	</div>
  
  
<? } ?>




<div class="clearfix" style="height: auto;"></div>


</div><!--/.row-stats-->

 </div><!--/.END #reports-->

  </div><!--/.END .content-wrapper-->
<?= $this->load->view(branded_view('cp/footer')); ?>
