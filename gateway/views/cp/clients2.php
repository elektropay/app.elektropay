<?=$this->load->view(branded_view('cp/header'));?>
<style>
.dataTables_wrapper {
    margin: 40px 5px;
}

</style>


<?php if ($this->user->Get('client_type_id') == '1') { ?>

<div class="alert alert-warning alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
     As a <strong><b><?=$this->user->Get('client_type');?></b>Did you Know That</strong> you have the ability to Create, Update, Suspend, Unsuspend, and Delete client accounts.  Please do so with care.  You are the parent of all the client accounts you create.  You only have permission to modify the client accounts that you have created.
    </div>

<?php } elseif ($this->user->Get('client_type_id') == '3') { ?>

<div class="alert alert-warning alert-dismissible fade in" role="alert">
<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>As an <b><?=$this->user->Get('client_type');?></b>, you have the ability to Create, Update, Suspend, Unsuspend,
and Delete client accounts across the entire system.  These accounts can be a Merchant Service Provider accounts (with permissions to create End User accounts),
or standalone End User accounts which do not have Client creation privileges.  Please do so with care.
    </div>

<?php } ?>


<?//=$this->dataset->TableHead();?>
<?php
/*if (!empty($this->dataset->data)) {
	foreach ($this->dataset->data as $row) {*/
	?>
		<!--<tr rel="<?=$row['id'];?>">
			<td><input type="checkbox" name="check_<?=$row['id'];?>" value="1" class="action_items" /></td>
			<td><?=$row['id'];?></td>
			<td><?=$row['username'];?></td>
			<td><?=$row['last_name'];?>, <?=$row['first_name'];?></td>
			<td><?=$row['email'];?></td>
			<td><? if ($row['suspended'] == '1') { ?><span class="suspended"><img src="<?=branded_include('images/failed.png');?>" alt="Suspended" /> Suspended</span><? } else { ?>Active<? } ?></td>
<td class="options"><a class="btn btn-link btn-xs" href="<?=site_url('clients/edit/' . $row['id']);?>"><span class="glyphicon glyphicon-edit"></span> edit</a></td>
		</tr>-->
	<?php
	//}
//}
//else {
?>
<!--<tr><td colspan="7">Empty data set.</td></tr>-->
<?php
//}	
?>
<?//=$this->dataset->TableClose();?>

<!-- BEGIN DATATABLE-->

<table id="example" class="hidden table table-striped table-bordered" cellspacing="0" width="99%">
        <thead>
            <tr>
                <th>ID</th>
                <th>User name</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
 
        <tfoot class="hidden">
            <tr>
                <th>ID</th>
                <th>User name</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </tfoot>
 <?=$this->dataset->TableHead();?>
        <tbody>
        	<?php
if (!empty($this->dataset->data)) {
	foreach ($this->dataset->data as $row) {
	?>

	<tr class="items-list js-trigger-settings" rel="<?=$row['id'];?>">
			<td class="highlight"><input type="checkbox" name="check_<?=$row['id'];?>" value="1" class="action_items" /></td>
			<td><?=$row['id'];?></td>
			<td><?=$row['username'];?></td>
			<td class="truncate"><?=$row['first_name'];?> <?=$row['last_name'];?></td>
			<td class="truncate"><?=$row['email'];?></td>
			<td><? if ($row['suspended'] == '1') { ?><span class="label label-danger suspended"><img src="<?=branded_include('images/failed.png');?>" alt="Suspended" /> Suspended</span><? } else { ?><span class="label label-success"> Activated <? } ?></span></td>
            <td class="actions highlight">
            <ul class="inline-list">
	  	<li class="protip" data-pt-title="View"> 	
	  <a class="btn btn-info btn-sm" href="<?=site_url('clients/view/' . $row['id']);?>">
	  <i class="fa fa-eye"></i>
	  </a> 
	  </li>
	   
		<li>
		<a class="btn btn-primary btn-sm protip" data-pt-title="Edit" href="<?=site_url('clients/edit/' . $row['id']);?>">
		<span class="fa fa-edit"></span>
		</a> 
		</li>
		
	  <li>
		<a href="mailto:<?=$row['email'];?>" class="btn btn-default btn-sm protip" data-pt-title="Contact">
          <i class="fa fa-envelope"></i>
		</a> 
		</li>
		
		<li>
		<a class="btn btn-danger btn-sm protip" data-pt-title="Delete" href="<?=site_url('clients/suspend/' . $row['id']);?>">
		<i class="fa fa-times"></i>
		</a> 
		</li>
		
    </ul>
</td>

			</tr>
	<?php
	}
}?>

 </tbody>
    </table>


</div><!--/.col-md-12-->


</div><!--/row-->


<?=$this->load->view(branded_view('cp/footer'));?>
