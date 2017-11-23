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

</style>

<!-- BEGIN PAGE CONTENT -->
<div id="reports">

<div class="content-wrapper">

<div class="section clearfix" style="height: auto;">

<div id="section" class="row">
<div class="row-fluid">

<?php if (!empty($this->dataset->data)) : ?>
<div id="users-list_wrapper" class="dataTables_wrapper" role="grid" style="height: auto;">
<?=$this->dataset->TableHead();?>
		
<tbody>   

<?php foreach ($this->dataset->data as $row) :?>

<div class="row-fluid user">           

<tr class="items-list">	
			<td><input type="checkbox" name="check_<?=$row['id'];?>" value="1" class="action_items" /></td>
			<td><b><a href="#"><?=$row['id'];?></a></b></td>
			<td><b class="blue"><?=$row['name'];?></b></td>
			<td><?= $row['code'] ?></td>
			<? $end_date = ($row['end_date'] == FALSE) ? 'no expiry' : date('Y-m-d', strtotime($row['end_date'])); ?>
			<td><abbr><?= date('Y-m-d', strtotime($row['start_date'])) .' - ' . $end_date;?></abbr></td>
			<td><b><a href="#"><?= $coupon_options[$row['type_id']] ?><b><a href="#"></td>
			<td class="actions" style="width:5%;">
    <ul class="actions inline-list">
      <li data-toggle="tooltip" title="" data-original-title="Edit">
        <a href="<?=site_url('coupons/edit/' . $row['id']);?>">
          <i class="icon-budicon-329"></i>
        </a>
      </li>
    </ul>
  </td>	
</tr><!--/.list-item-->

</div><!--/.user-list-->

<?php endforeach; ?>

</tbody>

<?=$this->dataset->TableClose();?>

</div><!--/.#users-list_wrapper-->
	
<?php else : ?>

<div class="empty margin-top-0 margin-bottom-20">
<br />
<div id="no-data-view">
 <div class="jumbotron jumbotron-icon">
<i class="fa fa-credit-card fa-5"></i>
</div>
    <h2>Coupons</h2>
 <p>You haven't made any coupons.  <a href="//everpayinc.com/docs/#coupons" target="_blank" class="arrow">Learn more</a></p>
    
    <div class="controls">
        <p>
 <a id="create" href="<?=site_url('/coupons/add/');?>" class="btn btn-primary btn-lg"><span><i class="fa fa-plus"></i> Create your first coupon</span></a>
        </p>
  </div><!-- /.controls -->
    
</div><!-- /#no-data-view -->
</div><!-- /.empty -->

<?php endif; ?>



 </div><!-- END/ .row-fluid-->
 </div><!-- END/ .col-md-12-->

 </div><!-- END/ .row-fluid-->
 </div><!-- END/ .section clearfix-->

 </div><!-- END/ .content-wrapper-->
 </div><!-- END/ #reports-->



<?=$this->load->view(branded_view('cp/footer'));?>