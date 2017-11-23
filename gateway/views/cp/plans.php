<?=$this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/rwd-table.min.js') . '"></script>'));?>


<style type="text/css">


	#dashboard .chart {
		margin: 25px 0 20px;
		background: #fff;
		border: 1px solid #DFE3EB;
		padding: 10px 10px;
		border-radius: 5px;
		box-shadow: inset 0 1px 0 #ededed;
	}
	

	.dataTables_wrapper {
	   margin: 0px; 
	}

div#section {
  border: 1px solid #eee;
  margin-left: 10px!important;
  margin-right: 10px!important;
  padding: 5px;
bottom: 20px;
margin-bottom: 30px;
top: 35px;
  min-height: 280px;
  position: relative;
  border-radius: 10px;
  z-index: 20;
  -moz-border-bottom-right-radius: 10px;
  border-bottom-right-radius: 10px;
  -webkit-border-bottom-right-radius: 10px;
  -webkit-font-smoothing: subpixel-antialiased;
  margin-top: ;
}



table.dataTable thead th {
    padding: 6px 8px 6px 15px!important;
    border-top: 1px solid #05101b;
    font-weight: 500;
    font-size: 13px!important;
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


#dataTables_length {
float: left!important;
}

.close-button {
  background-repeat: no-repeat !important;
  text-indent: -1px;
  outline: none;
  position: relative!important;
  display: inline-block;
  margin-top: 0px;
  margin-right: 1px;
  width: 24px;
  height: 24px;
  background-image: url('https://everpayinc.com/assets/app/images/x.png');
  cursor: pointer;
  float: right!important;
  margin-right: -20px!imporatant;
}

.actions {
    text-align: right;
}

.actions a {
    background: #f1f1f1;
    border-radius: 3px;
    border-radius: 3px;
    width: 34px;
    display: block;
    text-align: center;
    cursor: pointer;
    padding: 5px 0 4px 0;
}

.actions ul.list-inline {
    margin: 0;
    padding: 0;
	    display: block;
}
.actions ul, .actions li {
    margin: 0;
    padding: 0;
    list-style: none;
}

ul{
    margin-bottom: 1px;
    font-weight: normal;
}


#reports .dataTables_wrapper td {
    padding: 8px 10px!important;
}

.label.label-sm {
    font-size: 12px;
    padding: 4px 4px 1px 4px;
    margin-top: 4px;
}

.label-success, .label.label-success {
    margin-top: 3px;
}

.label-danger, .label.label-danger {
    margin-top: 3px;
}

#reports .dataTables_wrapper {
    margin: 20px -0px!important;
}

.dataTables_wrapper {
    margin: 20px -30px!important;
}

.actions a {
    background: #f1f1f1;
    border-radius: 3px;
    border-radius: 3px;
    width: 30px;
    display: block;
    text-align: center;
    cursor: pointer;
    padding: 6px 0 6px 0;
}

table td .actions, table th .actions {
    padding-top: 2px!important;
}

#users .dataTables_wrapper {
    margin: 20px -20px!important;
}

#reports .content-wrapper thead th {
    border-top: 1px solid #dee3ea;
    border-bottom: 1px solid #dee3ea;
    padding: 10px 1px 9px 1px!important;
}

thead th {
    border-top: 1px solid #dee3ea;
    border-bottom: 1px solid #dee3ea;
    padding: 10px 1px 9px 1px!important;
}

</style>

<!-- BEGIN PAGE CONTENT -->
<div id="reports">

<div class="section">

<div class=" clearfix" style="height: auto;">


<div class="row users-list">
<div class="section clearfix" style="height: auto;">
<br />

<?php if (!empty($this->dataset->data)) : ?>

<div class="users-grid" role="grid" style="height: auto;">

<?=$this->dataset->TableHead();?>

<div class="users-list">           

<?php foreach ($this->dataset->data as $row) :?>

<tr class="items-list">	
	
<td col span="1"><input type="checkbox" name="check_<?=$row['id'];?>" value="1" class="action_items" /></td>
			
<td class="sorting_1"><?=$row['id'];?></td>
			
<td><span class="co-name"><strong style="color: #111;"><?=$row['name'];?></strong></span></th>
			
<td><b><span class="green"><? if ($row['amount'] == '0.00') { ?></span></b><span class="label label-success"><i class="fa fa-check-square-o"></i> Free </span><? } else { ?><i class="fa fa-usd"></i> <?=$row['amount'];?><? } ?></span></td>
	
<td><?=$row['interval'];?> days</td>
			
<td><? if ($row['free_trial'] == '0') { ?>none<? } else { ?><?=$row['free_trial'];?> days<? } ?></td>
			
<td><a style="text-transform: lowercase;" href="<?=dataset_link('customers/index',array('plan_id' => $row['id']));?>"><?=$row['num_customers'];?> customers</a></td>

<td class="actions">
    <ul class="inline-list">
      <li data-toggle="tooltip" title="" data-original-title="Edit">
        <a href="<?=site_url('plans/edit/' . $row['id']);?>">
          <i class="fa fa-pencil"></i>
        </a>
      </li>
	  	 <li>
        <a href="<?=site_url('plans/delete/' . $row['id']);?>" data-toggle="tooltip" title="" data-original-title="Delete">
          <i class="fa fa-times"></i>
        </a>
      </li>
    </ul>
</td>
	
</tr><!--/.list-item-->

</div><!--/.user-list-->


<?php endforeach; ?>

<?=$this->dataset->TableClose();?>

</div><!--/.users-grid-->
		
<?php else : ?>

<div class="empty margin-top-0">
<br />
<div id="no-data-view">
<div class="jumbotron jumbotron-icon">
<i class="fa fa-file-code-o fa-5"></i>
</div>

<h2>Recurring Plans</h2>
<p>You haven't created any plans yet. <a href="//everpayinc.com/docs/#plans" target="_blank" class="arrow">Learn more</a></p>
    
    <div class="controls">
        <p>
    <a id="create" href="<?=site_url('/plans/new_plan');?>" class="btn btn-primary btn-lg"><span><i class="fa fa-plus"></i> Create your first recurring plan</span></a>
        </p>
    </div><!-- /.controls -->
    
</div><!-- /#no-data-view -->
</div><!-- /.empty -->

<?php endif; ?>

</div><!--/.users-grid-->
</div><!--/.users-grid-->

 </div><!-- END/ .section--->

 </div><!-- END/ .row--->
 </section><!-- END/ .content-wrapper-->
 </div><!-- END/ #reports-->


<?=$this->load->view(branded_view('cp/footer'));?>