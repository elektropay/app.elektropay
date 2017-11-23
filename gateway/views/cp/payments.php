<?=$this->load->view(branded_view('cp/header'));?>
<style type="text/css">

.jumbotron {
    padding: 20px;
    height: 150px;
    margin-bottom: 20px;
    margin-top: 40px;
    color: #05101b!important;
    background-color: #ffffff!important;
}
 

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
top: 30px;
  min-height: 520px;
  position: relative;
  border-radius: 10px;
  z-index: 20;
  -moz-border-bottom-right-radius: 10px;
  border-bottom-right-radius: 10px;
  -webkit-border-bottom-right-radius: 10px;
  -webkit-font-smoothing: subpixel-antialiased;
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
    margin: 5px -0px!important;
    padding: 0px!important;
}


#content {
    background: #FFF;
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


a .timeago (
  cursor: help;
  border-bottom: 1px dotted #777;
font-weight: bold;
  color: #999;

)



</style>


 <!-- BEGIN PAGE CONTENT-->

<div class="content-wrapper">

<div class="row" id="reports">


<?php if (!empty($this->dataset->data)) : ?>	

	<div class="stats clearfix">

	<div class="col-md-12">
		
                <div class="stat">
			<label>Total Orders</label>
			<div class="value">
                   <?php echo $total_transaction; ?> 
				<div class="change up">
					<i class="fa fa-caret-up"></i>
					0%
				</div>
			</div>
		</div>

		<div class="stat">
			<label>Total Successful</label>
			<div class="value">
				
                    <?php echo $total_failed_transactions; ?>
				<div class="change up">
					<i class="fa fa-caret-up"></i>
					0%
				</div>
			</div>
		</div>

               <div class="stat">
			<label>Total Failed</label>
			<div class="value">
			
                    <?php echo $total_failed_transactions; ?>
				<div class="change down">
					<i class="fa fa-caret-down"></i>
					0%
				</div>
			</div>
		</div>

		<div class="stat">
			<label>Total Amount</label>
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

<div class="users-list">
<div class="row section clearfix" style="height: auto;">

<div id="users-list_wrapper" class="" role="grid">


<?=$this->dataset->TableHead();?>
            


<div class="row-fluid user">  
	<?php foreach ($this->dataset->data as $row) :?>

		   <tr class="items-list">
<td><?=$this->config->item('currency_symbol');?><b><?=$row['amount'];?></b></td>			
<td> <span class="fa fa-credit-card"></span> <? if (!empty($row['card_last_four'])) { ?> **** <?=$row['card_last_four'];?><? } ?></td>
<td>
	<? if ($row['refunded'] == '1') { ?>
		<span class="label label-warning center">
                 <span class="fa fa-reply"></span>
			<b>&nbsp; Refunded </b>
			
		</span>
	<? } else {
		if($row['status'] == 'ok') { ?>

		<span class="label label-success center">
                <span class="fa fa-check"></span>
			<b>&nbsp; Success </b>
		</span>
		<? } else { ?>
			<span class="label label-danger center">
                        <span class="fa fa-remove"></span>
				<b>&nbsp; Declined </b>
			</span>
		<? }
	} ?>
</td>
<td><a href="<?=site_url('transactions/charge/' . $row['id']);?>"><?=$row['id'];?></a></td>
<td> <? if (isset($row['customer'])) { ?><span><?=$row['customer']['first_name'];?></span><span class="truncate"> <?=$row['customer']['last_name'];?></span><? } ?></td>

<td ><span id="truncate"> <?=$gateways[$row['gateway_id']];?></span></td>
	<td><? if (isset($row['recurring_id'])) { ?><a href="<?=site_url('transactions/recurring/' . $row['recurring_id']);?>"><?=$row['recurring_id'];?></a><? } ?></td>
	<td class="options">
	<b><a class="" href="<?=site_url('transactions/charge/' . $row['id']);?>"><abbr class="timeago"><?= date('M j, Y h:i a', $row['date']); ?></abbr> <i class="fa fa-chevron-right"></i></a></b></td>

		</tr>
		</div><!--/row-fluid-user-->
<?php endforeach; ?>

<?=$this->dataset->TableClose();?>

</div><!--/#user-list-wrapper-->
	
<?php else : ?>

<div class="empty margin-top-20 margin-bottom-20">
<div id="no-data-view">

 <div class="jumbotron jumbotron-icon">
 <br />
<i class="fa fa-credit-card fa-5"></i>
</div>

    <h2>Payments</h2>
 <p>You haven't charged a client yet.  <a href="//everpayinc.com/docs/#charges" target="_blank" class="arrow">Learn more</a></p>
    
    <div class="controls">
        <p>
 <a id="create" href="<?=site_url('/transactions/create/');?>" class="btn btn-primary btn-lg"><span><i class="fa fa-plus"></i> Create your first charge</span></a>
        </p>
    </div>
    
</div>
</div>


<?php endif; ?>

<div class="clearfix" style="height: auto;"></div>



</div><!--/.row-->

</div><!--/users-list-->

</div><!--/.content-wrapper-->

</div><!--/#reports-->

<?=$this->load->view(branded_view('cp/footer'));?>