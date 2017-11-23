<?= $this->load->view(branded_view('cp/header')); ?>
<style>


.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}

#datatables .content-wrapper td {
  padding: 11px 10px;
}

.dataTables_paginate {
  float: none;
  text-align: center;
  margin-top: 40px;
}

.paging_full_numbers {
  height: 22px;
  line-height: 22px;
}

.paging_full_numbers a.paginate_button, .paging_full_numbers a.paginate_active {
  border: 1px solid #ddd;
  padding: 5px 10px;
  cursor: pointer;
  color: #428bca !important;
  border-left: 0px;
}

.paging_full_numbers a.paginate_button {
  background-color: #fff;
}

#datatables .content-wrapper thead {
  display: table-header-group;
  vertical-align: middle;
  border-color: inherit;
margin-top:20px;
margin-bottom:20px;
padding-bottom: 10px;
  border-spacing: 2px;
  border-color: gray;
}

table.dataTable tr.odd td.sorting_1 {
  background-color: #FAFBFD;
}

table.dataTable td {
  padding: 11px 10px!important;
  border-bottom: 1px solid #edf2f7;
}

#reports .dataTables_wrapper td {
    padding: 11px 10px!important;
}

</style>
</div>

<div class="content-wrapper">
	<div class="stats clearfix">
		<div class="stat">
			<label>Total customers</label>
			<div class="value">
				512,928
				<div class="change up">
					<i class="fa fa-caret-up"></i>
					15%
				</div>
			</div>
		</div>
		<div class="stat">
			<label>Open accounts</label>
			<div class="value">
				1,890,344
				<div class="change down">
					<i class="fa fa-caret-down"></i>
					4%
				</div>
			</div>
		</div>
		<div class="stat">
			<label>New signups</label>
			<div class="value">
				3,045
				<div class="change up">
					<i class="fa fa-caret-up"></i>
					5%
				</div>
			</div>
		</div>
		<div class="stat">
			<label>Closed deals</label>
			<div class="value">
				834
				<div class="change up">
					<i class="fa fa-caret-up"></i>
					9%
				</div>
			</div>
		</div>
	</div>

<br />
<div id="orders-datatable_wrapper" class="dataTables_wrapper" role="grid">


<table id="orders-datatable" class="dataTable" aria-describedby="orders-datatable_info">
            
<thead>
    <tr role="row">

<th tabindex="0" rowspan="1" colspan="1" class="sorting_asc" role="columnheader" aria-controls="orders-datatable" aria-sort="ascending" aria-label="Order
                : activate to sort column descending" style="width: 60px;">Charge
                </th>
                                    <th>Status</th>                               
                                   <th tabindex="0" rowspan="1" colspan="1" class="sorting" role="columnheader" aria-controls="orders-datatable" aria-label="Total
                : activate to sort column ascending" style="width: 60px;">Amount
                </th>
                                <th tabindex="0" rowspan="1" colspan="1" class="sorting" role="columnheader" aria-controls="orders-datatable" aria-label="Customer
                : activate to sort column ascending" style="width: 110px;">Customer
                </th>
                                    <th  tabindex="0" rowspan="1" colspan="1" class="sorting" role="columnheader" aria-controls="orders-datatable" aria-label="Total
                : activate to sort column ascending" style="width: 90px;">Card</th> 
                                    <th class="">Gateway</th> 
                                    <th class="" style="width: 40px;">Recurring</th>
                                   <th tabindex="0" rowspan="1" colspan="1" class="sorting" role="columnheader" aria-controls="orders-datatable" aria-label="Date
                : activate to sort column ascending" style="width: 160px;">Date
                </th> 
                                    <th class="" style="width: 30px;">Actions</th> 
                                </tr> 
                        
            </thead>
<tbody role="alert" aria-live="polite" aria-relevant="all">
                                <?php
                                if (!empty($this->dataset->data)) {
                                    foreach ($this->dataset->data as $row) {
                                        ?>
                                        <tr>
       <td class=" sorting_1"><a href="<?= site_url('transactions/charge/' . $row['id']); ?>">#<?= $row['id']; ?></a></td>
                                            <td class="user-cb"> 
<?php if ($row['refunded'] == '1') { ?><span class="label label-warning">Refunded</span>
<?php } else { ?><span class="label label-default"><?= $row['status']; ?><?php } ?></span>&nbsp;
                                            </td>
                                         
                                            <td class=""><?= $this->config->item('currency_symbol'); ?><?= $row['amount']; ?></td>
                                            <td class="user-image "> 
                                                    <div class="user-name">
                                                       <strong> <a href="<?= site_url('transactions/charge/' . $row['id']); ?>" class="name"><?php if (isset($row['customer'])) { ?><?= $row['customer']['first_name']; ?> <?= $row['customer']['last_name']; ?><?php } ?></a> </strong>
                                                 
                                                    </div>
                                            </td>
    <td class=""><span class="fa fa-credit-card"></span><?php if (!empty($row['card_last_four'])) { ?>****<?= $row['card_last_four']; ?><?php } ?></td>
                                            <td class=""><span class="label label-default"><?= $gateways[$row['gateway_id']]; ?></span></td>
                                            <td class="options"><?php if (isset($row['recurring_id'])) { ?><a href="<?= site_url('transactions/recurring/' . $row['recurring_id']); ?>"><?= $row['recurring_id']; ?></a><?php } ?></td>
   <td class=""><a href="<?= site_url('transactions/charge/' . $row['id']); ?>"><?= $row['date']; ?></a></td>
                                            <td class="options"><a class="btn-link btn-sm" href="<?= site_url('transactions/charge/' . $row['id']); ?>"><span class="fa fa-caret-square-o-right"></span></a></td>
                        
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    
                                }
                                ?>
                                <?= $this->dataset->TableClose(); ?>
                            </tbody>
         
        </table>

</div><!-- END .portlet-body-->
</div><!-- END #orders-datatable_wrapper-->



<script type="text/javascript">
    
    jQuery(document).ready(function () {
        jQuery('#orders-datatable').dataTable({
            "pagingType": "full_numbers",
            "iDisplayLength": "10",
            "sPaginationType": "bootstrap",
           // "order": [[3, "desc"]],
            "bLengthChange": true,
           // "bFilter": true,
           // "bSort": true,
           // "bInfo": true,
            //"bAutoWidth": true,
            aLengthMenu: [
                [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]
            ],
            aoColumns: [
                {bSortable: false},
                {bSortable: false},
                {bSortable: false},
                {bSortable: false},
                {bSortable: false},
                {bSortable: false},
                {bSortable: false},
                {bSortable: false},
            ],
        });
    });
</script>
</div><!-- END /.content-wrapper-->
<?= $this->load->view(branded_view('cp/footer')); ?>
