<?php $this->load->view(branded_view('cp/header'));?>


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
  padding: 20px;
  margin-bottom: 28px;
  color: #444;
  background-color: #ffffff!important;
}

div#section {
  border: 1px solid #eee;
  margin-left: 10px!important;
  margin-right: 10px!important;
  padding: 5px;
bottom: 20px;
margin-bottom: 30px;
top: 35px;
  min-height: 480px;
  position: relative;
  border-radius: 10px;
  z-index: 20;
  -moz-border-bottom-right-radius: 10px;
  border-bottom-right-radius: 10px;
  -webkit-border-bottom-right-radius: 10px;
  -webkit-font-smoothing: subpixel-antialiased;
  margin-top: ;
}


</style>

<!-- BEGIN PAGE CONTENT -->
<div id="reports">

<div class="content-wrapper">

<div class="section clearfix" style="height: auto;">

<div id="section" class="row">
<div class="row-fluid">

<section id="datatables">

<div id="datatable-example_wrapper" class="dataTables_wrapper" role="grid">

<table id="datatable-example" class="dataTable" aria-describedby="datatable-example_info">
               
<?php $this->dataset->TableHead();?>
<div class="plans-list-view">
<div class="list-view-content" style="">
<?php
if (!empty($this->dataset->data)) {
	foreach ($this->dataset->data as $row) {
	?>
		<tr>
			<td><?=$row['id'];?></td>
<td class="<? if ($row['status'] == 'active') { ?><span class="label label-success"> Active <i class="fa fa-thumbs-up"></i></span><? } else { ?><span class="label label-danger"> Failed <i class="fa fa-thumbs-down"></i></span><? } ?>">&nbsp;</td>
			<td><?=$row['start_date'];?></td>
			<td><?=$row['last_charge_date'];?></td>
			<td><?=$row['next_charge_date'];?></td>
			<td><?=$this->config->item('currency_symbol');?><?=$row['amount'];?></td>
			<td><? if (isset($row['customer'])) { ?><?=$row['customer']['last_name'];?>, <?=$row['customer']['first_name'];?><? } ?></td>
			<td><? if (isset($row['plan']['name'])) { ?><?=$row['plan']['name'];?><? } ?></td>
			<td class="options"><a href="<?=site_url('transactions/recurring/' . $row['id']);?>" class="btn btn-info btn-circle btn-xs" > details <i class="fa fa-angle-right"></i></a></td>
		</tr>
</div><!--/.list-view-content-->
</div><!--/.plans-list-view-->
	<?php
	}
}
else {
?>

<div class="empty margin-top-0">
<br />
<div id="no-data-view">
<div class="jumbotron jumbotron-icon">
<i class="fa fa-refresh fa-5"></i>
</div>
    <h2>Recurring Plans</h2>
 <p>You haven't created any recurring payments. <a href="//everpayinc.com/docs/#recurring" target="_blank" class="arrow">Learn more</a></p>
    
    <div class="controls">
        <p>
    <a id="create" href="<?=site_url('/transactions/new_plan');?>" class="btn btn-success btn-lg"><span><i class="fa fa-plus"></i> Create your first recurring charge</span></a>
        </p>
    </div>
    
</div></div>

<?php } ?>

</table>
<?=$this->dataset->TableClose();?>



</div><!--/.row-fluid-->
</div><!--/.datatable-example_wrapper-->

</section><!--/#datatables-->

</div><!--/.row-fluid-->
</div><!--/.datatable-example_wrapper-->

</div><!--/.row-fluid-->


</div><!--/.chart clearfix-->
</div><!--/.content-wrapper-->

<?=$this->load->view(branded_view('cp/footer'));?>