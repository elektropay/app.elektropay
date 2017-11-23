<?=$this->load->view(branded_view('cp/header'));?>

<link href="<?=branded_include('css/base_reports.css');?>" rel="stylesheet" type="text/css" media="screen" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script type="text/javascript" src="<?=branded_include('assets/global/plugins/jquery-migrate-1.2.1.min.js');?>"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.0/highlight.min.js"></script>
<div id="loading"><img src="http://apps.everpayinc.com/assets/img/ajax-loader.gif"></div>

<div class="row-fluid">
       
          <div class="box paint">
            <div class="title row-fluid">
              <h4> Sales Stats </h4>
            </div>
            <!-- End title row-fluid -->
            <div class="row-fluid  content simple_stats">
              <div class="row-fluid fluid">
                <div class="span7">
                  <div class="row-fluid pagination-centered well well-small height_medium2"> <i class="icon-caret-up green xxbig pull-left well hidden-phone"></i>
                    <div class="pull-left pagination-centered value">
                      <h1 class="full value green">$398.23</h1>
                      <p class="full muted"> already paid </p>
                    </div>
                  </div>
                  <!-- End .row-fluid -->
                  <div class="row-fluid pagination-centered well well-small height_medium2"> <i class="icon-caret-down red xxbig pull-left well hidden-phone"></i>
                    <div class="pull-left pagination-centered value">
                      <h1 class="full value red">$192.16</h1>
                      <p class="full muted"> not payed yet </p>
                    </div>
                  </div>
                  <!-- End .row-fluid -->
                  <div class="row-fluid pagination-centered well well-small"> <i class="icon-minus blue xxbig pull-left well hidden-phone"></i>
                    <div class="pull-left pagination-centered value">
                      <h1 class="full value blue">$590.39</h1>
                      <p class="full muted"> total taxes </p>
                    </div>
                  </div>
                  <!-- End .row-fluid --> 
                </div>
                <div class="span5">
                  <div class="row-fluid pagination-centered well well-small height_medium2">
                    <h3 class="full">Sales Today</h3>
                    <h3 class="green full"><strong>+8.632</strong></h3>
                  </div>
                  <div class="row-fluid pagination-centered well well-small height_medium2">
                    <h3 class="full">Earnings Today</h3>
                    <h3 class="red full"><strong>-$3.62</strong></h3>
                  </div>
                  <div class="row-fluid pagination-centered well well-small height_medium2">
                    <h3 class="full">New Customers</h3>
                    <h3 class="blue full"><strong>12</strong></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End .box  --> 
        
        <div class="row-fluid hidden-phone">
          <div class=" box paint" style="min-height:398px;">
            <div class="title row-fluid">
              <h4> <i class=" icon-bar-chart"></i><span>Gauge stats</span> </h4>
            </div>
            <!-- End title row-fluid -->
            <div class="row-fluid fluid content">
              <div class="span8 ">
                <div id="gauge1" class="row-fluid gauge" style="height:300px"> </div>
              </div>
              <div class="span4">
                <div id="gauge2" class="row-fluid gauge" style="height:100px"> </div>
                <div id="gauge3" class="row-fluid gauge" style="height:100px"> </div>
                <div id="gauge4" class="row-fluid gauge" style="height:100px"> </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End .box .row-fluid--> 
      </div>
      <!-- End row-fluid -->


<!-- BEGIN INTERACTIVE CHART PORTLET-->



      <div class="row-fluid">
        
          <div class=" box paint">
            <div class="title row-fluid">
              <h4> <span>With Charts</span> </h4>
            </div>
            <!-- End title row-fluid -->
            <div class="row-fluid content simple_stats">
              <div class="row-fluid fluid">
                <div class="span4 ">
                  <div class=" pagination-centered well" style="width:150px; margin:0 auto;">
                    <div class="row-fluid fluid"> <i class="icon-caret-up green medium span3"></i> <span class="percent span3">12%</span> <span class="bar1 span6">3,4,10,5,3,6,3</span> </div>
                    <div class="row-fluid ">
                      <h2 class="full"><strong>$192.37</strong></h2>
                    </div>
                    <div class="row-fluid"> Today so far </div>
                  </div>
                </div>
                <!-- End .span4 -->
                <div class="span4 hidden-phone">
                  <div class="pagination-centered well" style="width:150px; margin:0 auto;">
                    <div class="row-fluid fluid"> <i class="icon-caret-down red medium span3"></i> <span class="percent span3">4%</span> <span class="bar2 span6">1, 4, 6, 7,4, 2,4</span> </div>
                    <div class="row-fluid">
                      <h2 class="full"><strong>$743.82</strong></h2>
                    </div>
                    <div class="row-fluid"> <span class="inline">Yesterday</span> <i class="icon-question-sign muted inline" rel="tooltip" data-placement="right" data-original-title="Your total earnings accrued yesterday. This amount is an estimate that is subject to change when your earnings are verified for accuracy at the end of every month."></i> </div>
                  </div>
                </div>
                <!-- End .span4 -->
                <div class="span4">
                  <div class="pagination-centered well" style="width:150px; margin:0 auto;">
                    <div class="row-fluid fluid"> <i class="icon-minus blue medium span3"></i> <span class="percent span3">13%</span> <span class="bar3 span6">1, 4, 6, 7,4, 2,4</span> </div>
                    <div class="row-fluid">
                      <h2 class="full"><strong>$990.84</strong></h2>
                    </div>
                    <div class="row-fluid"> Last Month </div>
                  </div>
                </div>
                <!-- End .span4 --> 
              </div>
            </div>
            <div class="description">Small boxes for general statistics</div>
          </div>
        
        <!-- End .box -->
        <div class="row-fluid ">
<!-- BEGIN INTERACTIVE CHART PORTLET-->
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Interactive Chart
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div id="chart_2" class="chart">
							</div>
						</div>
					</div>
					<!-- END INTERACTIVE CHART PORTLET-->
					<!-- BEGIN BASIC CHART PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Bar Chart
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div id="chart_1_1_legendPlaceholder">
							</div>
							<div id="chart_1_1" class="chart">
							</div>
						</div>
					</div>
					<!-- END BASIC CHART PORTLET-->
					<!-- BEGIN BASIC CHART PORTLET-->
					<div class="portlet box purple">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Horizontal Bar Chart
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div id="chart_1_2" class="chart">
							</div>
						</div>
					</div>
					<!-- END BASIC CHART PORTLET-->
				</div>
			</div>
			<!-- END CHART PORTLETS-->
	</div><!-- End title row-fluid --><!-- BEGIN PAGE CONTENT-->
			<div class="row-fluid">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-briefcase fa-icon-medium"></i>
						</div>
						<div class="details">
							<div class="number">
								 $168,492.54
							</div>
							<div class="desc">
								 Lifetime Sales
							</div>
						</div>
						<a class="more" href="#">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number">
								 1,127,390
							</div>
							<div class="desc">
								 Total Orders
							</div>
						</div>
						<a class="more" href="#">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-group fa-icon-medium"></i>
						</div>
						<div class="details">
							<div class="number">
								 $670.54
							</div>
							<div class="desc">
								 Average Orders
							</div>
						</div>
						<a class="more" href="#">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<!-- Begin: life time stats -->
					<div class="portlet box blue-steel">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-thumb-tack"></i>Overview
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="tabbable-line">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#overview_1" data-toggle="tab">
										Top Selling </a>
									</li>
									<li>
										<a href="#overview_2" data-toggle="tab">
										Most Viewed </a>
									</li>
									<li>
										<a href="#overview_3" data-toggle="tab">
										New Customers </a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										Orders <i class="fa fa-angle-down"></i>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li>
												<a href="#overview_4" tabindex="-1" data-toggle="tab">
												Latest 10 Orders </a>
											</li>
											<li>
												<a href="#overview_4" tabindex="-1" data-toggle="tab">
												Pending Orders </a>
											</li>
											<li>
												<a href="#overview_4" tabindex="-1" data-toggle="tab">
												Completed Orders </a>
											</li>
											<li>
												<a href="#overview_4" tabindex="-1" data-toggle="tab">
												Rejected Orders </a>
											</li>
										</ul>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="overview_1">
										<div class="table-responsive">
											<table class="table table-striped table-hover table-bordered">
											<thead>
											<tr>
												<th>
													 Product Name
												</th>
												<th>
													 Price
												</th>
												<th>
													 Sold
												</th>
												<th>
												</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>
													<a href="#">
													Apple iPhone 4s - 16GB - Black </a>
												</td>
												<td>
													 $625.50
												</td>
												<td>
													 809
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Samsung Galaxy S III SGH-I747 - 16GB </a>
												</td>
												<td>
													 $915.50
												</td>
												<td>
													 6709
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Motorola Droid 4 XT894 - 16GB - Black </a>
												</td>
												<td>
													 $878.50
												</td>
												<td>
													 784
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Regatta Luca 3 in 1 Jacket </a>
												</td>
												<td>
													 $25.50
												</td>
												<td>
													 1245
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Samsung Galaxy Note 3 </a>
												</td>
												<td>
													 $925.50
												</td>
												<td>
													 21245
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Inoval Digital Pen </a>
												</td>
												<td>
													 $125.50
												</td>
												<td>
													 1245
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Metronic - Responsive Admin + Frontend Theme </a>
												</td>
												<td>
													 $20.00
												</td>
												<td>
													 11190
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane" id="overview_2">
										<div class="table-responsive">
											<table class="table table-striped table-hover table-bordered">
											<thead>
											<tr>
												<th>
													 Product Name
												</th>
												<th>
													 Price
												</th>
												<th>
													 Views
												</th>
												<th>
												</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>
													<a href="#">
													Metronic - Responsive Admin + Frontend Theme </a>
												</td>
												<td>
													 $20.00
												</td>
												<td>
													 11190
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Regatta Luca 3 in 1 Jacket </a>
												</td>
												<td>
													 $25.50
												</td>
												<td>
													 1245
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Apple iPhone 4s - 16GB - Black </a>
												</td>
												<td>
													 $625.50
												</td>
												<td>
													 809
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Samsung Galaxy S III SGH-I747 - 16GB </a>
												</td>
												<td>
													 $915.50
												</td>
												<td>
													 6709
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Motorola Droid 4 XT894 - 16GB - Black </a>
												</td>
												<td>
													 $878.50
												</td>
												<td>
													 784
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Samsung Galaxy Note 3 </a>
												</td>
												<td>
													 $925.50
												</td>
												<td>
													 21245
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Inoval Digital Pen </a>
												</td>
												<td>
													 $125.50
												</td>
												<td>
													 1245
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane" id="overview_3">
										<div class="table-responsive">
											<table class="table table-striped table-hover table-bordered">
											<thead>
											<tr>
												<th>
													 Customer Name
												</th>
												<th>
													 Total Orders
												</th>
												<th>
													 Total Amount
												</th>
												<th>
												</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>
													<a href="#">
													David Wilson </a>
												</td>
												<td>
													 3
												</td>
												<td>
													 $625.50
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Amanda Nilson </a>
												</td>
												<td>
													 4
												</td>
												<td>
													 $12625.50
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Jhon Doe </a>
												</td>
												<td>
													 2
												</td>
												<td>
													 $125.00
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Bill Chang </a>
												</td>
												<td>
													 45
												</td>
												<td>
													 $12,125.70
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Paul Strong </a>
												</td>
												<td>
													 1
												</td>
												<td>
													 $890.85
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Jane Hilson </a>
												</td>
												<td>
													 5
												</td>
												<td>
													 $239.85
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Patrick Walker </a>
												</td>
												<td>
													 2
												</td>
												<td>
													 $1239.85
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											</tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane" id="overview_4">
										<div class="table-responsive">
											<table class="table table-striped table-hover table-bordered">
											<thead>
											<tr>
												<th>
													 Customer Name
												</th>
												<th>
													 Date
												</th>
												<th>
													 Amount
												</th>
												<th>
													 Status
												</th>
												<th>
												</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>
													<a href="#">
													David Wilson </a>
												</td>
												<td>
													 3 Jan, 2013
												</td>
												<td>
													 $625.50
												</td>
												<td>
													<span class="label label-sm label-warning">
													Pending </span>
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Amanda Nilson </a>
												</td>
												<td>
													 13 Feb, 2013
												</td>
												<td>
													 $12625.50
												</td>
												<td>
													<span class="label label-sm label-warning">
													Pending </span>
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Jhon Doe </a>
												</td>
												<td>
													 20 Mar, 2013
												</td>
												<td>
													 $125.00
												</td>
												<td>
													<span class="label label-sm label-success">
													Success </span>
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Bill Chang </a>
												</td>
												<td>
													 29 May, 2013
												</td>
												<td>
													 $12,125.70
												</td>
												<td>
													<span class="label label-sm label-info">
													In Process </span>
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Paul Strong </a>
												</td>
												<td>
													 1 Jun, 2013
												</td>
												<td>
													 $890.85
												</td>
												<td>
													<span class="label label-sm label-success">
													Success </span>
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Jane Hilson </a>
												</td>
												<td>
													 5 Aug, 2013
												</td>
												<td>
													 $239.85
												</td>
												<td>
													<span class="label label-sm label-danger">
													Canceled </span>
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#">
													Patrick Walker </a>
												</td>
												<td>
													 6 Aug, 2013
												</td>
												<td>
													 $1239.85
												</td>
												<td>
													<span class="label label-sm label-success">
													Success </span>
												</td>
												<td>
													<a href="#" class="btn default btn-xs green-stripe">
													View </a>
												</td>
											</tr>
											</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End: life time stats -->
				</div>
				<div class="col-md-6">
					<!-- Begin: life time stats -->
					<div class="portlet box red-sunglo tabbable">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-bar-chart-o"></i>Revenue
							</div>
							<div class="tools">
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="portlet-tabs">
								<ul class="nav nav-tabs" style="margin-right: 50px">
									<li>
										<a href="#portlet_tab2" data-toggle="tab" id="statistics_amounts_tab">
										Amounts </a>
									</li>
									<li class="active">
										<a href="#portlet_tab1" data-toggle="tab">
										Orders </a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="portlet_tab1">
										<div id="statistics_1" class="chart">
										</div>
									</div>
									<div class="tab-pane" id="portlet_tab2">
										<div id="statistics_2" class="chart">
										</div>
									</div>
								</div>
							</div>
							<div class="well no-margin no-border">
								<div class="row">
									<div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-success">
										Revenue: </span>
										<h3>$1,234,112.20</h3>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-info">
										Tax: </span>
										<h3>$134,90.10</h3>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-danger">
										Shipment: </span>
										<h3>$1,134,90.10</h3>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-warning">
										Orders: </span>
										<h3>235090</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End: life time stats -->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->
	<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>
	<div class="page-quick-sidebar-wrapper">
		<div class="page-quick-sidebar">
			<div class="nav-justified">
				<ul class="nav nav-tabs nav-justified">
					<li class="active">
						<a href="#quick_sidebar_tab_1" data-toggle="tab">
						Users <span class="badge badge-danger">2</span>
						</a>
					</li>
					<li>
						<a href="#quick_sidebar_tab_2" data-toggle="tab">
						Alerts <span class="badge badge-success">7</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						More<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-right" role="menu">
							<li>
								<a href="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-bell"></i> Alerts </a>
							</li>
							<li>
								<a href="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-info"></i> Notifications </a>
							</li>
							<li>
								<a href="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-speech"></i> Activities </a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="#quick_sidebar_tab_3" data-toggle="tab">
								<i class="icon-settings"></i> Settings </a>
							</li>
						</ul>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
						<div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
							<h3 class="list-heading">Staff</h3>
							<ul class="media-list list-items">
								<li class="media">
									<div class="media-status">
										<span class="badge badge-success">8</span>
									</div>
									<img class="media-object" src="../../assets/admin/layout/img/avatar3.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Bob Nilson</h4>
										<div class="media-heading-sub">
											 Project Manager
										</div>
									</div>
								</li>
								<li class="media">
									<img class="media-object" src="../../assets/admin/layout/img/avatar1.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Nick Larson</h4>
										<div class="media-heading-sub">
											 Art Director
										</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="badge badge-danger">3</span>
									</div>
									<img class="media-object" src="../../assets/admin/layout/img/avatar4.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Deon Hubert</h4>
										<div class="media-heading-sub">
											 CTO
										</div>
									</div>
								</li>
								<li class="media">
									<img class="media-object" src="../../assets/admin/layout/img/avatar2.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Ella Wong</h4>
										<div class="media-heading-sub">
											 CEO
										</div>
									</div>
								</li>
							</ul>
							<h3 class="list-heading">Customers</h3>
							<ul class="media-list list-items">
								<li class="media">
									<div class="media-status">
										<span class="badge badge-warning">2</span>
									</div>
									<img class="media-object" src="../../assets/admin/layout/img/avatar6.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Lara Kunis</h4>
										<div class="media-heading-sub">
											 CEO, Loop Inc
										</div>
										<div class="media-heading-small">
											 Last seen 03:10 AM
										</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="label label-sm label-success">new</span>
									</div>
									<img class="media-object" src="../../assets/admin/layout/img/avatar7.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Ernie Kyllonen</h4>
										<div class="media-heading-sub">
											 Project Manager,<br>
											 SmartBizz PTL
										</div>
									</div>
								</li>
								<li class="media">
									<img class="media-object" src="../../assets/admin/layout/img/avatar8.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Lisa Stone</h4>
										<div class="media-heading-sub">
											 CTO, Keort Inc
										</div>
										<div class="media-heading-small">
											 Last seen 13:10 PM
										</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="badge badge-success">7</span>
									</div>
									<img class="media-object" src="../../assets/admin/layout/img/avatar9.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Deon Portalatin</h4>
										<div class="media-heading-sub">
											 CFO, H&D LTD
										</div>
									</div>
								</li>
								<li class="media">
									<img class="media-object" src="../../assets/admin/layout/img/avatar10.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Irina Savikova</h4>
										<div class="media-heading-sub">
											 CEO, Tizda Motors Inc
										</div>
									</div>
								</li>
								<li class="media">
									<div class="media-status">
										<span class="badge badge-danger">4</span>
									</div>
									<img class="media-object" src="../../assets/admin/layout/img/avatar11.jpg" alt="...">
									<div class="media-body">
										<h4 class="media-heading">Maria Gomez</h4>
										<div class="media-heading-sub">
											 Manager, Infomatic Inc
										</div>
										<div class="media-heading-small">
											 Last seen 03:10 AM
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="page-quick-sidebar-item">
							<div class="page-quick-sidebar-chat-user">
								<div class="page-quick-sidebar-nav">
									<a href="javascript:;" class="page-quick-sidebar-back-to-list"><i class="icon-arrow-left"></i>Back</a>
								</div>
								<div class="page-quick-sidebar-chat-user-messages">
									<div class="post out">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="#" class="name">Bob Nilson</a>
											<span class="datetime">20:15</span>
											<span class="body">
											When could you send me the report ? </span>
										</div>
									</div>
									<div class="post in">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="#" class="name">Ella Wong</a>
											<span class="datetime">20:15</span>
											<span class="body">
											Its almost done. I will be sending it shortly </span>
										</div>
									</div>
									<div class="post out">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="#" class="name">Bob Nilson</a>
											<span class="datetime">20:15</span>
											<span class="body">
											Alright. Thanks! :) </span>
										</div>
									</div>
									<div class="post in">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="#" class="name">Ella Wong</a>
											<span class="datetime">20:16</span>
											<span class="body">
											You are most welcome. Sorry for the delay. </span>
										</div>
									</div>
									<div class="post out">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="#" class="name">Bob Nilson</a>
											<span class="datetime">20:17</span>
											<span class="body">
											No probs. Just take your time :) </span>
										</div>
									</div>
									<div class="post in">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="#" class="name">Ella Wong</a>
											<span class="datetime">20:40</span>
											<span class="body">
											Alright. I just emailed it to you. </span>
										</div>
									</div>
									<div class="post out">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="#" class="name">Bob Nilson</a>
											<span class="datetime">20:17</span>
											<span class="body">
											Great! Thanks. Will check it right away. </span>
										</div>
									</div>
									<div class="post in">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="#" class="name">Ella Wong</a>
											<span class="datetime">20:40</span>
											<span class="body">
											Please let me know if you have any comment. </span>
										</div>
									</div>
									<div class="post out">
										<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
										<div class="message">
											<span class="arrow"></span>
											<a href="#" class="name">Bob Nilson</a>
											<span class="datetime">20:17</span>
											<span class="body">
											Sure. I will check and buzz you if anything needs to be corrected. </span>
										</div>
									</div>
								</div>
								<div class="page-quick-sidebar-chat-user-form">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Type a message here...">
										<div class="input-group-btn">
											<button type="button" class="btn blue"><i class="icon-paper-clip"></i></button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
						<div class="page-quick-sidebar-alerts-list">
							<h3 class="list-heading">General</h3>
							<ul class="feeds list-items">
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-check"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 4 pending tasks. <span class="label label-sm label-warning ">
													Take action <i class="fa fa-share"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 Just now
										</div>
									</div>
								</li>
								<li>
									<a href="#">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-success">
													<i class="fa fa-bar-chart-o"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 Finance Report for year 2013 has been released.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 20 mins
										</div>
									</div>
									</a>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-danger">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 5 pending membership that requires a quick review.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 24 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-shopping-cart"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 New order received with <span class="label label-sm label-success">
													Reference Number: DR23923 </span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 30 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-success">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 5 pending membership that requires a quick review.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 24 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-bell-o"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 Web server hardware needs to be upgraded. <span class="label label-sm label-warning">
													Overdue </span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 2 hours
										</div>
									</div>
								</li>
								<li>
									<a href="#">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-default">
													<i class="fa fa-briefcase"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 IPO Report for year 2013 has been released.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 20 mins
										</div>
									</div>
									</a>
								</li>
							</ul>
							<h3 class="list-heading">System</h3>
							<ul class="feeds list-items">
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-check"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 4 pending tasks. <span class="label label-sm label-warning ">
													Take action <i class="fa fa-share"></i>
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 Just now
										</div>
									</div>
								</li>
								<li>
									<a href="#">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-danger">
													<i class="fa fa-bar-chart-o"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 Finance Report for year 2013 has been released.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 20 mins
										</div>
									</div>
									</a>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-default">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 5 pending membership that requires a quick review.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 24 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-shopping-cart"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 New order received with <span class="label label-sm label-success">
													Reference Number: DR23923 </span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 30 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-success">
													<i class="fa fa-user"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 You have 5 pending membership that requires a quick review.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 24 mins
										</div>
									</div>
								</li>
								<li>
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-warning">
													<i class="fa fa-bell-o"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
													Overdue </span>
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 2 hours
										</div>
									</div>
								</li>
								<li>
									<a href="#">
									<div class="col1">
										<div class="cont">
											<div class="cont-col1">
												<div class="label label-sm label-info">
													<i class="fa fa-briefcase"></i>
												</div>
											</div>
											<div class="cont-col2">
												<div class="desc">
													 IPO Report for year 2013 has been released.
												</div>
											</div>
										</div>
									</div>
									<div class="col2">
										<div class="date">
											 20 mins
										</div>
									</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
						<div class="page-quick-sidebar-settings-list">
							<h3 class="list-heading">General Settings</h3>
							<ul class="list-items borderless">
								<li>
									 Enable Notifications <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
								<li>
									 Allow Tracking <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
								<li>
									 Log Errors <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
								<li>
									 Auto Sumbit Issues <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
								<li>
									 Enable SMS Alerts <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
							</ul>
							<h3 class="list-heading">System Settings</h3>
							<ul class="list-items borderless">
								<li>
									 Security Level
									<select class="form-control input-inline input-sm input-small">
										<option value="1">Normal</option>
										<option value="2" selected>Medium</option>
										<option value="e">High</option>
									</select>
								</li>
								<li>
									 Failed Email Attempts <input class="form-control input-inline input-sm input-small" value="5"/>
								</li>
								<li>
									 Secondary SMTP Port <input class="form-control input-inline input-sm input-small" value="3560"/>
								</li>
								<li>
									 Notify On System Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
								<li>
									 Notify On SMTP Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
								</li>
							</ul>
							<div class="inner-content">
								<button class="btn btn-success"><i class="icon-settings"></i> Save Changes</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END QUICK SIDEBAR -->

					</div><!-- End title row-fluid -->
           

</div>

<!-- BEGIN FOOTER -->
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/respond.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/excanvas.min.js');?>"></script> 
<![endif]-->

<script type="text/javascript" src="<?=branded_include('js/modernizr.custom.32549.js');?>"></script> 
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/jquery-1.11.0.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/jquery-migrate-1.2.1.min.js');?>"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js');?>"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->

<script type="text/javascript" src="<?=branded_include('assets/global/plugins/fullcalendar/fullcalendar/fullcalendar.min.js');?>"></script>

<script type="text/javascript" src="<?=branded_include('assets/global/plugins/bootstrap/js/bootstrap.min.js');?>"></script></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/jquery.blockui.min.js');?>"></script></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/jquery.cokie.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/uniform/jquery.uniform.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js');?>"></script>
<!-- END CORE PLUGINS -->

<!-- Sparkline -->
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/jquery.sparkline.min.js');?>"></script>

<script type="text/javascript" src="<?=branded_include('assets/global/plugins/flot/jquery.flot.min.js"');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/flot/jquery.flot.resize.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/flot/jquery.flot.categories.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/flot/jquery.flot.pie.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/flot/jquery.flot.crosshair.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/flot/jquery.flot.stack.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/flot/jquery.flot.spider.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/flot/jquery.flot.tooltip.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/flot/jquery.flot.selection.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/flot/jquery.flot.orderBars.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/jquery.pulsate.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/bootstrap-daterangepicker/moment.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js');?>">
</script>
<script type="text/javascript" src="<?=branded_include('js/highcharts.js');?>">
</script>
<script type="text/javascript" src="<?=branded_include('js/exporting.js');?>">
</script>
<script type="text/javascript" src="<?=branded_include('js/raphael.2.1.0.min.js');?>">
</script>
<script type="text/javascript" src="<?=branded_include('js/justgage.1.0.1.min.js');?>">
</script>

<!-- Task plugin --> 
<script type="text/javascript" src="<?=branded_include('js/knockout-2.0.0.js');?>">
</script>

<!-- Resize Script -->
<script type="text/javascript" src="<?=branded_include('js/jquery.ba-resize.js');?>">

<script type="text/javascript" src="<?=branded_include('js/jquery.iframe-auto-height.js');?>"></script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script type="text/javascript" src="<?=branded_include('assets/global/scripts/metronic.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/admin/layout/scripts/layout.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/admin/layout/scripts/quick-sidebar.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/admin/pages/scripts/index.js');?>"></script>
<!-- END PAGE LEVEL SCRIPTS -->

    
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init() // init quick sidebar
   Index.init();   
   Demo.init(); // init demo features
   Charts.init();
   Charts.initCharts();
   Charts.initPieCharts();
   Charts.initBarCharts();
});
</script>


<!-- Custom made scripts for this template --> 
<script src="<script type="text/javascript" src="<?=branded_include('js/scripts.js');?>"></script>
<script type="text/javascript">
   $(document).ready(function() {
    $('[rel=tooltip]').tooltip();
  if (Modernizr.canvas) {
      $(".bar").peity("bar", {
        colour: "#fff",
        width: 50,
        height: 17
      }).fadeIn();
      $(".bar1").peity("bar", {
        colour: "#4da74d",
        width: 30,
        height: 17
      }).fadeIn();
      $(".bar2").peity("bar", {
        colour: "#cb4b4b",
        width: 30,
        height: 17
      }).fadeIn();
       $(".bar3").peity("bar", {
        colour: "#5e96ea",
        width: 30,
        height: 17
      }).fadeIn();
      $(".line").peity("line").fadeIn();
    };
  });
</script> 
<script type="text/javascript">
$(function () {
    // we use an inline data source in the example, usually data would
    // be fetched from a server
    var data = [], totalPoints = 250;
    function getRandomData() {
        if (data.length > 0)
            data = data.slice(1);
        // do a random walk
        while (data.length < totalPoints) {
            var prev = data.length > 0 ? data[data.length - 1] : 20;
            var y = prev + Math.random() * 10 - 5;
            if (y < 0)
                y = 0;
            if (y > 100)
                y = 100;
            data.push(y);
        }
        // zip the generated y values with the x values
        var res = [];
        for (var i = 0; i < data.length; ++i)
            res.push([i, data[i]])
        return res;
    }
    // setup control widget
    var updateInterval = 100;
    // setup plot
    var options = {
        series: {
                  shadowSize: 0,
                   lines: { show: true, fill:true, },
                   points: { show: false, fill:true },
               }, // drawing is faster without shadows
        yaxis: { min: 0, max: 90 },
        xaxis: { show: false },
        grid: { hoverable: true, clickable: true, autoHighlight: false, borderWidth:0,  backgroundColor: { colors: ["#fff", "#fbfbfb"] } },
        colors: ["#a1d14d"]
    };
    var plot = $.plot($("#real-time"), [ { data: getRandomData()} ], options);
    function update() {
        plot.setData([ getRandomData() ]);
        // since the axes don't change, we don't need to call plot.setupGrid()
        plot.draw();
        setTimeout(update, updateInterval);
    }
    update();
});
</script> 
<script type="text/javascript">
   $(window).load(function() {
     $('#loading').fadeOut();
    });
    $(function () {
    // Big Bar Chart
    var sin = [], cos = [], tes = [];
    for (var i = 0; i < 14; i += 1) {
        sin.push([i, Math.sin(i)*Math.random()*0.9]);
        cos.push([i, Math.cos(i)*Math.random()*1.4]);
          tes.push([i, Math.cos(i)*Math.random()*0.4]);
    }
    var plot = $.plot($("#placeholder"),
           [  { data: sin, label: "Google+", color:"#ef4723", shadowSize:0 }, { data: cos, label: "Envato", color:"#a1d14d", shadowSize:0},  { data: tes, label: "Facebook", color:"#4a8cf7", shadowSize:0 } ], {
               series: {
                   lines: { show: true, fill:true },
                   points: { show: true, fill:true },
               },
               grid: { hoverable: true, clickable: true, autoHighlight: false, borderWidth:0,  backgroundColor: { colors: ["#fff", "#fbfbfb"] } },
               yaxis: { min: -1.5, max: 1.5 },
             });
    function showTooltip(x, y, contents) {
        $('<div id="tooltip">' + contents + '</div>').css( {
            position: 'absolute',
            display: 'none',
            top: y + 5,
            left: x + 5,
            border: '1px solid #ccc',
            padding: '2px 6px',
            'background-color': '#fff',
            opacity: 0.80
        }).appendTo("body").fadeIn(200);
    }
    var previousPoint = null;
    $("#placeholder").bind("plothover", function (event, pos, item) {
        $("#x").text(pos.x.toFixed(2));
        $("#y").text(pos.y.toFixed(2));
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;
                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                        y = item.datapoint[1].toFixed(2);
                    showTooltip(item.pageX, item.pageY,
                                item.series.label + " of " + x + " = " + y);
                }
        }
    });
    // Line chart
    var sin2 = [], cos2 = [];
    for (var i = 0; i < 14; i += 0.5) {
        sin2.push([i, Math.sin(i)]);
        cos2.push([i, Math.cos(i)]);
    }
     var plot = $.plot($("#line-chart"),
           [  { data: sin2, label: "Google+", color:"#ef4723", shadowSize:0 }, { data: cos2, label: "Envato", color:"#a1d14d", shadowSize:0} ], {
               series: {
                   lines: { show: true, fill:false },
                   points: { show: true, fill:true },
               },
               grid: { hoverable: true, clickable: true, autoHighlight: false, borderWidth:0,  backgroundColor: { colors: ["#fff", "#fbfbfb"] } },
               yaxis: { min: -1.5, max: 1.5 },
             });
     // Bar chart
          var d11 = [];
    for (var i = 0; i <= 20; i += 1)
        d11.push([i, parseInt(Math.random() * 30)]);
    var d22 = [];
    for (var i = 0; i <= 20; i += 1)
        d22.push([i, parseInt(Math.random() * 30)]);
    var d33 = [];
    for (var i = 0; i <= 20; i += 1)
        d33.push([i, parseInt(Math.random() * 30)]);
     var plot = $.plot($("#bar-chart"),
           [  { data: d11, label: "Google+", color:"#ef4723", shadowSize:0 }, { data: d22, label: "Envato", color:"#a1d14d", shadowSize:0}, { data: d33, label: "Facebook", color:"#4a8cf7", shadowSize:0 } ], {
               series: {
                  stack: 0,
                   lines: { show: false, fill:false },
                   points: { show: false, fill:true },
                   bars: {show:true, barWidth: 0.6}
               },
               grid: { hoverable: true, clickable: true, autoHighlight: false, borderWidth:0,  backgroundColor: { colors: ["#fff", "#fbfbfb"] } },
             });
});
$(function () {
  var data = [];
  var series = Math.floor(Math.random()*5)+1;
  data[0] = { label: "Google+", data:42, color: "#cb4b4b" };
  data[1] = { label: "Envato", data:27, color: "#4da74d"};
  data[2] = { label: "Pinterest", data:9, color: "#edc240"};
  data[3] = { label: "Facebook", data:22, color: "#5e96ea"};
  // Pie Chart
    $.plot($("#donut"), data, 
  {
      series: {
        pie: { 
          label: {
            show: true,
            radius: 1,
            formatter: function(label, series){
                return '<div class="chart-label">'+label+'&nbsp;'+Math.round(series.percent)+'%</div>';
            }
          },
          show: true,
          radius:1,
          highlight: {
            opacity: 0.3
          },
          legend: {
            show: false
          },
        }
      }
    });
    // Donut Chart
    $.plot($("#donut2"), data,
    {
            series: {
            pie: { 
              show: true,
              innerRadius: 0.42,
              highlight: {
                opacity: 0.3
              },
              radius: 1,
              stroke: {
                color: '#fff',
                width: 4
              },
              startAngle: 0,
              combine: {
                          color: '#353535',
                          threshold: 0.05
              },
              label: {
                          show: true,
                          radius: 1,
                          formatter: function(label, series){
                              return '<div class="chart-label">'+label+'&nbsp;'+Math.round(series.percent)+'%</div>';
                          }
                      }
              },
              grow: { active: false}
              },
              legend:{show:true},
              grid: {
                      hoverable: true,
                      clickable: true
              },
    });
});
   // Spider chart
      var p1,p2,data,options;
      $(function () {
          var d1 = [ [0,10], [1,20], [2,80], [3,70], [4,60] ];
              var d2 = [ [0,30], [1,25], [2,50], [3,60], [4,95] ];
              var d3 = [ [0,50], [1,40], [2,60], [3,95], [4,30] ];
              options = { series:
                                  { spider:
                                              { active: true
                           ,highlight: {mode: "area"}
                           ,legs: { data: [{label: "Scalability"}
                                            ,{label: "Stability"}
                                            ,{label: "Accuracy"}
                                            ,{label: "Flexibility"}
                                            ,{label: "Quality"}
                                          ]
                                          , legScaleMax: 1, legScaleMin:0.8}
                           ,spiderSize: 0.9 }
                          }
                         ,grid:
                                          { hoverable: true
                                               ,clickable: true
                                               ,tickColor: "rgba(0,0,0,0.2)"
                                               ,mode: "radar"
                                              }
                        };
              data = [ { label: "Google",          data: d1, spider: {show: true, color: "#cb4b4b"} }
                      ,{ label: "Envato",        data: d2, spider: {show: true, color: "#a1d14d"} }
                      ,{ label: "Facebook",      data: d3, spider: {show: true,  color: "#5e96ea"} }
                     ];
          p1 = $.plot($("#spider"), data , options);
      });
</script> 
<script>
    // Animated gauge charts
      var g1, g2;
      window.onload = function(){
     
        var gauge1 = new JustGage({
          id: "gauge1", 
          value: 126, 
          min: 0,
          max: 180,
          title: "Visitors",
          titleFontColor: "#fff",
          label: "per minute",
        });
         var gauge2 = new JustGage({
          id: "gauge2", 
          value: 28, 
          min: 0,
          max: 180,
          title: "Errors",
           titleFontColor: "#fff",
          label: "average",
        });
          var gauge3 = new JustGage({
          id: "gauge3", 
          value: 79, 
          min: 0,
          max: 180,
          title: "Timers",
           titleFontColor: "#fff",
          label: "average",
        });
           var gauge4 = new JustGage({
          id: "gauge4", 
          value: 163, 
          min: 0,
          max: 180,
          title: "Events",
           titleFontColor: "#fff",
          label: "per month",
        });
        setInterval(function() {
          gauge1.refresh(getRandomInt(60, 80));
          g2.refresh(getRandomInt(120, 160));          
        }, 2500);
      };
    </script> 

<script type="text/javascript">
  /**** Specific JS for this page ****/
</script>
<!-- END JAVASCRIPTS -->
<?=$this->load->view(branded_view('cp/footer'));?>