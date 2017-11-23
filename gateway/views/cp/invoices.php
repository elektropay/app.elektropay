<?

/* Default Values */

if (!isset($form)) {
	$form = array(
				'first_name' => '',
				'last_name' => '',
				'company' => '',
				'address_1' => '',
				'address_2' => '',
				'city' => '',
				'state' => '',
				'postal_code' => '',
				'country' => 'US',
				'suspended' => '0',
				'gmt_offset' => 'UM5',
				'phone' => '',
				'email' => '',
				'username' => '',
				'client_type' => '2'	
			);
} ?>
<?=$this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>'));?>
	<!-- Imported styles on this page -->
	<link href="<?=branded_include('js/multiselect/css/multi-select.css');?>" rel="stylesheet" type="text/css" media="screen" />
	
<style type="text/css">


.invoices {
margin-top:20px;
}

/***********************************************
   Dashboard 
************************************************/

.in-bold {
    font-size: 25px;
    font-weight: bold;;
}


.in-thin {
    font-size: 18px;
    font-weight: 100;
}

.in-bold-white {
    font-weight: bold;
    color: white;
padding: 8px;
}

.in-image {
    float:left;padding-right:25px;
}

.in-white {
    color: white;
}


.active-clients {
    background-color: #0b4d78;
    background-image:url('../images/activeclients.png');
    background-position:center;
    background-repeat: no-repeat;
    height: 200px;
    padding-top: 44px;
    text-align: center;
}

.average-invoice {
    background-color: #ecd817;
    min-height: 200px;
    padding-top: 60px;
    text-align: center;
}

.table>thead>tr>th>tr> {
  vertical-align: middle;
  border-top: none;
  border-bottom: 1px solid #dfe0e1;
color: #444;
}


.invoice-table tbody {
    border-style: none !important;
}
.panel-body {padding: 15px;}

.dashboard .panel-heading { margin: -1px;padding: 8px; }

.dashboard .panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 16px;
  color: inherit;
  padding: 8px;
color: #fff;
}

.dashboard .panel-body {padding: 0;}

.dashboard .table-striped>tbody>tr>td, .table-striped>tbody>tr>th { background-color: #fbfbfb;}
.dashboard .table-striped>tbody>tr:nth-child(odd)>tr, .table-striped>tbody>tr:nth-child(odd)>th {
background-color: #fff;
} 
.dashboard th {
border-left: none;
    background-color: #fbfbfb;
    border-bottom: 1px solid #dfe0e1;
}
.dashboard table.table thead > tr > th {
border-bottom-width: 1px;
color: #444;
}

.dashboard .table-striped>tbody>tr>td:first-child { padding-left: 10px;  }
.dashboard .table-striped>thead>tr>th:first-child { padding-left: 10px;  }


.invoice-table tfoot input {
    text-align: right;
}


/***********************************************
   New/edit invoice page
************************************************/

table.invoice-table { color:#333; }

table.invoice-table th:first-child {
    border-radius: 3px 0 0 3px;
}
table.invoice-table th:last-child {
    border-radius: 0 3px 3px 0;
}

.invoice-table td.hide-border,
.invoice-table th.hide-border {
    border-style: none !important;
}

.invoice-table .line-total {
    padding-top: 6px;
}


.invoice-table td.td-icon {
    vertical-align: middle !important;
}

.fa-sort {
    cursor: move !important;
}

.closer-row {
    margin-bottom: 2px;
}


/* Animate col width changes */
body {
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

div.discount-group span {
    padding: 0px;
    border: none;
}

#is_amount_discount {
    min-width: 120px;
}

/***********************************************
   New/edit invoice page
************************************************/

.two-column .form-group div {
	-webkit-column-count:2; /* Chrome, Safari, Opera */
	-moz-column-count:2; /* Firefox */
	column-count:2;
}

.two-column .form-group div .radio {
	margin-left:10px;
}



</style>
		

<!-- BEGIN INVOICE OVERVIEW PAGE -->

<div id="billing-form">

<div class="content-wrapper">
<div class="chart clearfix" style="height: auto;">

<div class="col-lg-12 clom-md-12 col-sm-12">		
  
<div class="row invoices">

    <div class="col-md-4">

        <div class="panel panel-default">

            <div class="panel-body">
                <img src="https://app.invoiceninja.com/images/totalinvoices.png" class="in-image">  
                <div class="in-bold">
                    0
                </div>
                <div class="in-thin">
                    Invoices sent
                </div>
            </div>

        </div>

    </div><!--END/.col-md-4-->

    <div class="col-md-4">  
        <div class="panel panel-default">
            <div class="panel-body">
                <img src="https://app.invoiceninja.com/images/totalincome.png" class="in-image">  
                <div class="in-bold">
                                            $0.00
                                    </div>
                <div class="in-thin">
                    in total revenue
                </div>
            </div>
        </div>

    </div><!--END/.col-md-4-->

    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <img src="https://app.invoiceninja.com/images/clients.png" class="in-image">  
                              <div class="in-bold">
                                            $0.00
                                    </div>
  <div class="in-thin">
                    Average invoice                    
                </div>
            </div>
        </div>

    </div><!--END/.col-md-4-->


</div><!--END/.row-->


<p>&nbsp;</p>

<div class="row">

    <div class="col-md-6">  
        <div class="panel panel-default dashboard" style="min-height:320px">
            <div class="panel-heading" style="background-color:#e37329 !important">
                <h3 class="panel-title in-bold-white">
                    <i class="glyphicon glyphicon-time"></i> Invoices Past Due
                </h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr><th>Invoice #</th>
                        <th>Client</th>
                        <th>Due Date</th>
                        <th>Balance Due</th>
                    </tr></thead>
                    <tbody>
                                            </tbody>
                </table>
            </div>
        </div>  

    </div><!--END/.col-md-6-->


    <div class="col-md-6">  

        <div class="panel panel-default dashboard" style="min-height:320px;">
            <div class="panel-heading" style="margin:0; background-color: #0b4d78 !important;">
                <h3 class="panel-title in-bold-white">
                    <i class="glyphicon glyphicon-time"></i> Upcoming invoices
                </h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr><th>Invoice #</th>
                        <th>Client</th>
                        <th>Due Date</th>
                        <th>Balance Due</th>
                    </tr></thead>
                    <tbody>
                    
</tbody>
                </table>
            </div>

      </div>

    </div><!--END/.col-md-6-->

</div><!--END/.row-->


<hr>

<section>



</section>










</div><!-- /.chart clearfix -->

</div><!-- /.content-wrapper -->

</div><!-- /#billing-form -->

<!-- END INVOICE OVERVIEW PAGE -->












<?=$this->load->view(branded_view('cp/footer'));?>