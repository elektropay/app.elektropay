<?=$this->load->view(branded_view('cp/header'));?>

						<div class="row">
<div class="portlet light tasks-widget">
						<div class="portlet-title">
							<div class="col-md-4">
							</div>
							<div class="col-md-4">

<header class="section-header">
              <div class="container-960 center">
<div class="copywriting">
<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	
<h1 class="margin-none">My <strong class="text-primary">Merchants</strong></h1>

</div>
</div>
             </div>
             </header>
							</div>

							<div class="col-md-4">
<a class="btn btn-success btn-sm pull-right" style="color:#fff; margin-right:30px;" href="<?=site_url('/clients/create');?>"><span class="fa fa-plus-circle"></span> New Merchant </a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="task-content">

    

<? if ($this->user->Get('client_type_id') == '1') { ?>
<div class="alert alert-warning alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only"> As a <b><?=$this->user->Get('client_type');?></b>, you have the ability to Create, Update, Suspend, Unsuspend, and Delete client accounts.  Please do
so with care.  You are the parent of all the client accounts you create.  You only have permission to modify
the client accounts that you have created.</span></div>
<? } elseif ($this->user->Get('client_type_id') == '3') { ?>

<div class="alert alert-warning alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"></span><span class="sr-only">Close</span></button>As an <b><?=$this->user->Get('client_type');?></b>, you have the ability to Create, Update, Suspend, Unsuspend,
and Delete client accounts across the entire system.  These accounts can be a Merchant Service Provider accounts (with permissions to create End User accounts),
or standalone End User accounts which do not have Client creation privileges.  Please do so with care.
    </div>
<? } ?>
<p></p>
<?=$this->dataset->TableHead();?>
<?
if (!empty($this->dataset->data)) {
	foreach ($this->dataset->data as $row) {
	?>
		<tr rel="<?=$row['id'];?>">
			<td><input type="checkbox" name="check_<?=$row['id'];?>" value="1" class="action_items" /></td>
			<td><?=$row['id'];?></td>
			<td><?=$row['username'];?></td>
			<td><?=$row['last_name'];?>, <?=$row['first_name'];?></td>
			<td><?=$row['email'];?></td>
			<td><? if ($row['suspended'] == '1') { ?><span class="suspended"><img src="<?=site_url('images/failed.png');?>" alt="Suspended" /> Suspended</span><? } else { ?>Active<? } ?></td>
			<td class="options"><a class="btn btn-primary btn-xs" href="<?=site_url('clients/edit/' . $row['id']);?>"><span class="glyphicon glyphicon-edit"></span> edit</a></td>
		</tr>
	<?
	}
}
else {
?>
<tr><td colspan="7">Empty data set.</td></tr>
<?
}	
?>
<?=$this->dataset->TableClose();?>
</div>
    </div>
    </div>

    </div>
							</div>
						
</div>
<?=$this->load->view(branded_view('cp/footer'));?>