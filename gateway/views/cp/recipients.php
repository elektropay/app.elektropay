<?=$this->load->view(branded_view('cp/header'));?>

<!-- END PAGE HEADER-->

<!-- BEGIN PAGE -->
<div class="row">
<h2 class="page-title">Customers  <small pull-right></strong></small></h2>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div class="row-fluid">                              
<!-- BEGIN PANEL-->
<div class="panel panel-default panel-border panel-shadow">

           <div class="row"> 
<div class="panel-body">

       <!-- BEGIN CONTENT -->
<div id="section">

<section id="datatables">

<div id="datatable-example_wrapper" class="dataTables_wrapper" role="grid">

<table id="datatable-example" class="dataTable" aria-describedby="datatable-example_info">
               
<?=$this->dataset->TableHead();?>
<?
if (!empty($this->dataset->data)) {
	foreach ($this->dataset->data as $row) {
	?>
		<tr rel="<?=$row['id'];?>">
			<td><input type="checkbox" name="check_<?=$row['id'];?>" value="1" class="action_items" /></td>
			<td><?=$row['id'];?></td>
<td><? if (isset($row['customer'])) { ?><?=$row['customer']['first_name'];?> <?=$row['customer']['last_name'];?><? } ?></td>
			<td><?=$row['email'];?></td>
			<td><?

if (isset($row['plans'])) {
	foreach ($row['plans'] as $plan) {
		if ($plan['status'] != 'inactive') {
			?><span class="label label-warning"><i class="fa fa-times"></i><?=$plan['name'];?></span><br /><?
		}
	}
}
			
?></td>
<td class="options"><a href="<?=site_url('customers/edit/' . $row['id']);?>" class="btn btn-info btn-cirlce btn-xs"> edit <i class="fa fa-angle-right"></i></a></td>
		</tr>
	<?
	}
}
else {
?>
<div class="empty"><div id="no-data-view">
    <div class="no-data-img customers"></div>
    <h2>Customers</h2>
 <p>You haven't created any customers.  <a href="//elektropay.io/docs/api#customers" target="_blank" class="arrow">Learn more</a></p>
    
    <div class="controls">
        <p>
 <a id="create" href="<?=site_url('/customer/new');?>" class="btn btn-default btn-lg"><span><i class="fa fa-plus"></i> Create your first customer</span></a>
        </p>
    </div>
    
</div>
</div>
<?
}	
?>
<?=$this->dataset->TableClose();?>

<!-- END CONTENT -->
   </div> 
</section><!--/#datatables-->
</div><!--/#section-->

</div><!-- END datatables -->

</div><!-- END PANEL-BODY -->
</div> <!-- END PANEL DEFAULT -->

</div><!-- END PORTLET -->
</div><!--/.col-md-12-->
</div><!--/.row-->


</div><!--/.row-fluid-->

<?=$this->load->view(branded_view('cp/footer'));?>