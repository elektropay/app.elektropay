<?=$this->load->view(branded_view('cp/header'));?>


<style type="text/css">
thead {
    display: table-header-group;
    vertical-align: middle;
    border-color: inherit;
}

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
  min-height: 520px;
  position: relative;
  border-radius: 10px;
  z-index: 20;
  -moz-border-bottom-right-radius: 10px;
  border-bottom-right-radius: 10px;
  -webkit-border-bottom-right-radius: 10px;
  -webkit-font-smoothing: subpixel-antialiased;
}

#content {
  background: #FFF;
  padding-top: 56px!important;
  position: relative;
  min-height: 520px;
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -ms-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}

.table .btn {
    margin-top: 0px;
    margin-left: 2px;
    margin-right: 1px;
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
    margin: 20px -0px!important;
    padding: 10px!important;
}

#reports .stats {
    margin: auto 0px!important;
    margin-top: -24px;
    padding: 24px 36px 12px;
    background: #FAFBFD;
    border-top: 3px solid #ADBDD5;
    border-bottom: 1px solid #E2E4F5;
    width: 100%!important;
}


.dashboard-status-marker-activated {
  margin: -3px 2px 0px 0;
  padding: 4px 5px!important;
  border: 1px solid #7ae498;
  font-size: 10px!important;
  letter-spacing: 1.3px;
  color: #7ae498;
  font-weight: 600;
  text-shadow: 0 0px 0 #000;
}


.dashboard-status-marker-pending {
  margin: -3px 2px 0px 0;
  padding: 4px 5px;
  border: 1px solid #f0ad4e;
  font-size: 10px;
  letter-spacing: 1.3px;
  color: #f0ad4e;
  font-weight: 600;
  text-shadow: 0 0px 0 #000;
}


abbr[title], abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #777;
font-weight: bold;
}

.timeago (
  cursor: help;
  border-bottom: 1px dotted #777;
font-weight: bold;
  color: #999;

)


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
			<td><input type="checkbox" name="check_<?=$row['id'];?>" value="1" class="action_items" /></td>
			<td><?=$row['id'];?></td>
			<td><?=$row['gateway'];?></td>
			<td><?=$row['date_created'];?></td>
			<td class="actions">
			<a href="<?=site_url('settings/edit_gateway/' . $row['id']);?>">edit</a> | 
			<? if ($this->user->Get('default_gateway_id') == $row['id']) { ?><b>default</b>
			<? } else { ?>
			<a href="<?=site_url('settings/make_default_gateway/' . $row['id']);?>">make default</a>
			<? } ?>
			</td>
		</tr>
 
 </tr><!--/.list-item-->

</div><!--/.user-list-->


<?php endforeach; ?>

</tbody>
<?=$this->dataset->TableClose();?>

</div><!--/.#users-list_wrapper-->
	
<?php else : ?>

<div class="empty margin-top-0">
<br />
<div id="no-data-view">
<div class="jumbotron jumbotron-icon">
<i class="fa fa-file-code-o fa-5"></i>
</div>

<h2>Gateway Connections</h2>
<p>You haven't configured and Gateways yet. <a href="//everpayinc.com/docs/#gateways" target="_blank" class="arrow">Learn more</a></p>
    
    <div class="controls">
        <p>
    <a id="create" href="<?=site_url('settings/new_gateway');?>" class="btn btn-primary btn-lg"><span><i class="fa fa-plus"></i> Set Up Your New Gateway</span></a>
        </p>
    </div><!-- /.controls -->
    
</div><!-- /#no-data-view -->
</div><!-- /.empty -->

<?php endif; ?>


 </div><!-- END/ .section-->
 </div><!-- END/ .col-md-12-->

  </div><!-- END/ .row-->
  
 </div><!-- END/ .content-wrapper-->

 </div><!-- END/ #reports-->

<?=$this->load->view(branded_view('cp/footer'));?>