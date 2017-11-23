<?=
$this->load->view(branded_view('cp/header'));
error_reporting(0);
?>


<?php

class graph
{

    function __construct()
    {
        //echo "<pre>";print_r($_SERVER);exit;
        if ($_SERVER['HTTP_HOST'] == 'localhost') {
            $Host = "localhost";
            $UserName = "everpay_master";
            $Pass = "Parise03";
            $db = "everpay_engine";
        } else {
            $Host = "localhost";
            $UserName = "everpay_master";
            $Pass = "Parise03";
            $db = "everpay_engine";
        }
        $this->con = mysql_connect($Host, $UserName, $Pass);
        if (!$this->con) {
            echo "Database Not Connected";
            die;
        }
        mysql_select_db($db);
    }

    function __destruct()
    {
        if (isset($this->con)) {
            mysql_close($this->con);
        }
    }

    function write_log($msg = "")
    {
        $fp = fopen("APP_INFO_CRON", "a+");
        fwrite($fp, date("Y-m-d h:i:s") . "  :" . $msg . "\r\n");
        fclose($fp);
    }

    function IsAppIdAvailable($i)
    {

        $sql = "select PackageName from tblapp where PackageName = '$i'";
        $res = mysql_query($sql);
        return mysql_num_rows($res);
    }

    function GetIds()
    {
        $result = array();
        $delete_app = '';
        $res = mysql_query($this->sql);
        while ($res1 = mysql_fetch_assoc($res)) {
            $result[] = $res1['app'];
            //$delete_app.="'".$res1['app']."',";
        }

        return $result;
    }

    function get_order_data()
    {
        $r = array();
        $sql = "SELECT count(order_id) as cnt, DATE(timestamp) as dateonly FROM orders GROUP BY dateonly order by dateonly asc limit 7";
        $res = mysql_query($sql);
        while ($row = mysql_fetch_assoc($res)) {
            array_push($r, (object) array(
                        'dateonly' => $row['dateonly'],
                        'cnt' => $row['cnt']
            ));
        }

        return $r;
    }

    function delete_temp_id($i)
    {
        $sql = "delete from temp where app='$i'";
        mysql_query($sql);
    }

}

$obj = new graph();
$data = json_encode($obj->get_order_data());
//$data='{ "date": "2014-09-21", "duration": 5 },{ "date": "2014-09-20", "duration": 7 },{ "date": "2014-09-19", "duration": 2 },{ "date": "2014-09-18", "duration": 2 },{ "date": "2014-09-17", "duration": 4 },{ "date": "2014-09-16", "duration": 10 }';
?>




<script type="text/javascript">
    $(document).ready(function() {
        $.post('<?php echo base_url(); ?>index.php/dashboard/get_order_data/',
                function(data)
                {
                    Morris.Area({
                        element: 'chart_div',
                        data: data,
                        xkey: 'x',
                        ykeys: ['y'],
                        lineColors: ['#3498DB'],
                        pointFillColors: ['#2980B9'],
                        labels: ['Total Amount'],
                        parseTime: false,
                        yLabelFormat: function(y) {
                            return  '$' + y;
                        },
                        xLabelAngle: 45,
                        resize: true,
                        redraw: true
                    });
                }, 'json'
                );

        $.post('<?php echo base_url(); ?>index.php/dashboard/get_failed_transaction_data/',
                function(data)
                {
                    Morris.Area({
                        element: 'failed_transaction_chart_div',
                        data: data,
                        xkey: 'x',
                        ykeys: ['y'],
                        lineColors: ['#F66C5F'],
                        pointFillColors: ['#F66C5F'],
                        labels: ['Failed Transactions'],
                        parseTime: false,
                        yLabelFormat: function(y) {
                            return   y;
                        },
                        xLabelAngle: 45,
                        resize: true,
                        redraw: true
                    });
                }, 'json'
                );

        $.post('<?php echo base_url(); ?>index.php/dashboard/get_successful_transaction_data/',
                function(data)
                {
                    Morris.Area({
                        element: 'successful_transaction_chart_div',
                        data: data,
                        xkey: 'x',
                        ykeys: ['y'],
                        lineColors: ['#15C65F'],
                        pointFillColors: ['#15C65F'],
                        labels: ['Successfull Transactions'],
                        parseTime: false,
                        yLabelFormat: function(y) {
                            return  y;
                        },
                        xLabelAngle: 45,
                        resize: true,
                        redraw: true
                    });
                }, 'json'
                );
    });
</script>


<script type="text/javascript">
    $(function() {

        // pop up .popover-test
        $('.popover-test').popover();

        // pop up #example1, #example2, #example3 with same content
        $('[rel=popover]').popover({
            html: true,
            content: function() {
                return $('#popover_content_wrapper').html();
            }
        });

    });

</script>

<style type="text/css">

.font-blue-sharp {
  color: #5c9bd1 !important;
  display: inline-block;
}

#dashboard .charts-half {
  margin-top: 10px!important;
}

.panel-body {padding: 15px;}

.dashboard .panel-heading { margin: -1px;padding: 8px; }
.dashboard .panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 17px;
  color: inherit;
  padding: 15px!important;
  font-weight: 700;
  color: #fff;
  text-shadow: 0 0px 0.5px #000;
}

.dashboard .panel-body .list-group {padding: 5px!important;}

.dashboard .panel-body {
  padding: 20px!important;
}

.panel>.list-group  {
  margin-bottom: 10px;
  margin-top: 10px!important;
}

.list-group> ul li  {
  padding: 5px!important;
}

ul .panel-body .list-group li {
  margin-left: 0;
  padding: 5px;
}

#dashboard .ul> .panel-body> .list-group> li {
  margin-left: 0;
  padding: 5px;
}


.panel-footer {
padding: 25px; 
margin-top:20px;
}

.panel-footer .more {
 margin-top:-8px;
margin-bottom:5px;
}

div#section {
  border: 1px solid #eee;
  margin-left: 10px!important;
  margin-right: 10px!important;
  padding: 20px;
bottom: 20px;
top: 20px;
  min-height: 480px;
  position: relative;
  border-radius: 10px;
  z-index: 20;
  -moz-border-bottom-right-radius: 10px;
  border-bottom-right-radius: 10px;
  -webkit-border-bottom-right-radius: 10px;
  -webkit-font-smoothing: subpixel-antialiased;
}


.dashboard-status-marker-activated {
    margin: -6px 2px 0px 0;
    padding: 4px 5px!important;
    border: 1px solid #7ae498;
    font-size: 10px!important;
    letter-spacing: 1.3px;
    color: #7ae498;
    border-radius: 25px;
    font-weight: 600;
    text-shadow: 0 0px 0 #000;
}


.dashboard-status-marker-pending {
  margin: -6px 2px 0px 0;
  padding: 4px 5px;
  border: 1px solid #f0ad4e;
  font-size: 10px;
  letter-spacing: 1.3px;
  color: #f0ad4e;
  font-weight: 600;
  text-shadow: 0 0px 0 #000;
}

.upper, .docs-code-inner h3 {
  text-transform: uppercase;
  letter-spacing: .12em;
  font-weight: 400;
  font-style: normal;
}

.right {
  float: right!important;
}

    #chart_div {
        width		: 99%!important;
        height		: 280px;
        font-size	: 11px;
    }
    #chartdiv_pie {
        width		: 100%;
        height		: 320px;
        font-size	: 11px;
    }
    .amChartsLegend {
        overflow: hidden;
        position: relative;
        text-align: left;
        width: 220px;
        height: 150px;
        left: 400px!important;
        top: 100px!important;
    }

    html, body, #map-canvas { height: 100%; margin: 0px; padding: 0px }
    .panel-heading {
        padding: 0 10px!important;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

strong .num {
  font-weight: 100;
  font-size: 12px;
}

.dashboard-stat2 {
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  -o-border-radius: 4px;
  border-radius: 4px;
  background: transparent;
  padding: 15px 1px 0px 1px!important;
  margin-bottom: 5px;
  height: auto;
  letter-spacing: .12em;
  font-weight: 400;
  text-shadow: 0 0px 0 #000;
}

    .dashboard-stat2 .progress-info .status .status-number {
        float: left!important;
        display: inline-block;
        margin-left: 10px!important;
    }

    .dashboard-stat > .details {
        position: absolute;
        left: 10px!important;
        padding-left: 10px!important;
    }

    .xe-widget.xe-vertical-counter .xe-icon i {
        display: block;
        line-height: 0.6!important;
    }
    .fa-2x {
        font-size: 0.7em;
    }

    .fa-3x {
        font-size: 2.0em!important;
    }

    .font-xs {
        font-size: 11px;
        padding-top: 5px;
    }


.dashboard-stat-light {
  padding-bottom: 8px;
  margin-bottom: 12px;
  margin-top: 2px;
}

.content-header {
    margin-bottom: 0;
	margin-top:-10px;
}

.content-header h1 {
    display: inline-block;
    font-weight: 100;
    min-height: 36px;
    min-width: 1px;
    vertical-align: bottom;
}

.page-title {
    float: left;
    font-weight: 400!important;
    position: relative;
    font-size: 36px!important;
    min-height: 36px!important;
    min-width: 1px;
    vertical-align: bottom;
    line-height: 36px;
    top: 22px;
    bottom: 2px;
    left: -2px;
}

.content-header .btn.btn-success, .content-header .btn-default.new {
    margin-top: 12px;
    padding: 12px 20px;
}

h5 {
    text-transform: uppercase;
    border-bottom: 1px solid #d0d2d3;
    padding-bottom: 10px;
    letter-spacing: .5px;
    font-size: 1.2rem;
}

h2, h3, h4, h5 {
    font-weight: bold;
}
h1, h2, h3, h4, h5, p, pre {
    margin: 20px 0;
}

.wrapper h1 {
    margin-top: 0;
}

#dashboard #year-payments {
    min-height: 140px;
    margin-bottom: 20px;
    width: 100%;
}

.morris-hover.morris-default-style {
    padding: 10px;
    background: #222!important;
    color: #bbb;
    font-size: 12px;
    line-height: 1.4;
    width: 140px;
    position: absolute;
    z-index: 99999;
    text-align: center;
    border-radius: 2px;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
    display: none;
    box-sizing: border-box;
}

.morris tspan {
    fill: #999;
    font-size: 10px;
}

tspan[Attributes Style] {
    text-anchor: middle;
    dominant-baseline: middle;
}


.client-stat-boxes.loaded {
    visibility: visible;
}

.row-stats {
    border-top: 1px solid #f1f1f1;
    border-bottom: 1px solid #f1f1f1;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    font-size: 16px;
    margin-bottom: 20px;
    color: #666;
    height: 130px;
}

.row-stats span {
    display: block;
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: 1px;
}

.row-stats strong {
    color: #ffffff;
    font-size: 36px;
    font-weight: 300;
    height: 40px;
    display: block;
}


.year-payments h5 {
    text-transform: uppercase;
    border-bottom: 1px solid #d0d2d3;
	padding-top: 15px;
    padding-bottom: 10px;
    letter-spacing: .5px;
	    font-weight: 400;
    font-size: 1.2rem;
}

.col-widgets {
    padding-right: 0;
}

.col-user-list.col-user-last-payment {
    margin-right: 5%;
}

.col-user-list {
    width: 45%;
    float: left;
}

#dashboard .user-list {
    list-style: none;
    margin: 0;
    padding: 0;
    margin-top: 5px;
	overflow: hidden;
}

#dashboard .user-list li a {
    color: #444;
}


#dashboard .col-user-list.col-user-last-payment {
    margin-right: 5%;
}

#dashboard .col-user-list {
    width: 46%!important;
    float: left;
	overflow: hidden;
}

#dashboard .user-list li img {
    position: absolute;
    left: 0;
    top: 2px;
}
.avatar {
    border-radius: 100px;
}

#dashboard .user-list li {
    margin: 0;
    padding: 0;
    padding-left: 20px;
    position: relative;
    margin-bottom: 10px;
}

#dashboard .user-list li span.username {
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 2px;
    color: #000;
    max-width: 270px;
    word-break: break-word;
	display: inline;
}

#dashboard .user-list li span {
    display: block;
    color: #444;
    font-size: 12px;
}

#dashboard .user-list time {
    float: right;
    font-size: 11px;
    color: #999;
}

.panel-default {
    border-color: transparent;
}

.small-num {
    color: #444;
    font-size: 13px!important;
    font-weight: 300;
    height: 40px;
    display: block;
}

#content .menubar .page-title h4 {
    float: left;
    font-weight: 700;
    position: relative;
    font-size: 19px;
    line-height: 22px;
    top: -15px!important;
    left: 5px!important;
}


.list-group li, .list-group li a, .list-group li a:hover {
    font: normal 400 12px/20px 'proxima-nova',Arial,sans-serif;
    color: #333333;
}

#dashboard #year-payments {
    min-height: 140px;
    margin-bottom: 20px;
    width: 100%;
}

#dashboard .chart {
    margin: 5px 0 20px;
    background: #fff;
    border: 1px solid #DFE3EB;
    padding: 15px 20px!important;
    border-radius: 5px;
    box-shadow: inset 0 1px 0 #ededed;
}

#dashboard .widget-box {
    border: 0px solid #DFE3EB!important;
    padding: 10px 15px!important;
    border-radius: 5px;
    box-shadow: inset 0 0px 0 #ededed;
}

#dashboard .row-stats {
    border-top: 0px solid #f1f1f1;
    border-bottom: 0px solid #f1f1f1;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    font-size: 16px;
    margin-bottom: 20px;
    color: #666;
    height: 120px;
}
.row-stats {
    border-top: 0px solid #f1f1f1;
    border-bottom: 0px solid #f1f1f1;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    font-size: 16px;
    margin-bottom: 20px;
    color: #666;
    height: 120px;
}

#dashboard .row-stats strong {
    color: #000;
    font-size: 34px;
    font-weight: 500;
    height: 38px;
    display: block;
	margin-top:10px;
}

#dashboard .row-stats small {
    opacity: .5;
    display: block;
    font-size: 12px;
	margin-bottom:5px;
}

div {
    display: block;
}

</style>

<!-- END PAGE HEADER-->

<div class="container-fluid p-y-md">
					
<div class="content-wrapper">

<div id="dashboard" style="height: auto;">

<div id="year-payments">
        <!-- BEGIN DASHBOARD CHARTS-->

        <div class="row year-payments">
		
        <!-- BEGIN DASHBOARD GRAPHS -->
		<div class="col-xs-12">
			<h5>Payments along the year</h5>
			 <? if (isset($no_chart)) { ?>

<br /><p></p>
 <div class="well margin-top-30">
<p class="lead" style="padding-top: 20px; height: 180px;"> No Chart Data To Display</p>
                </div>
                <? } else { ?>
				<div id="chart_div" style="position:relative;">
								<div class="ch-tooltip"></div>
				</div>
		<!---<img src="<?= site_url('writeable/rev_chart_' . $this->user->Get('client_id') . '.png'); ?>" alt="Revenue Chart" style="width:100%; height: 320px" />--->
		      
<? } ?>
            
</div><!-- END/ .col-xs-12-->

</div><!-- END/ .row-->

        </div><!-- END/ #row-payments-->

        <!-- END DASHBOARD GRAPHS -->

		
        <!-- BEGIN TRANSACTION STATS -->
		
<div class="row-stats">
		<!-- Stat Boxes widget -->
		<div class="client-stat-boxes col-xs-12 loaded">
			<div class="widget-content row row-stats">
<a class="col-xs-3 stat-box-users" href="#" class="font-lg font-grey-mint" id="example1" rel="popover" data-original-title="Payment Types">
  <span>Charges</span>
  <strong>$<?php echo $total_sales_today; ?></strong>
  <small>Today</small>
</a>

<div class="col-xs-3 stat-box-active-users">
  <span>Fees</span>
  <strong>$<?php echo $fees_today; ?></strong>
  <small>Today</small>
</div>

<div class="col-xs-3 stat-box-logins">
  <span>Deposits</span>
  <strong class="font-lg font-grey-mint">$<?php echo $net_today; ?></strong>
  <small>Today</small>
</div>

<div class="col-xs-3 stat-box-signups">
  <span>Total Volume</span>
  <strong>$<?php echo $total_sales; ?></strong>
  <small><?=date('Y');?></small>
</div>

     </div><!-- END/ .widget-content-->

	</div><!-- END/ .client-stats-->
		
</div><!-- END/ .row-->
		
		
 <div class="row">
 <div class="col-xs-12 col-widgets">

			<div class="col-user-list col-user-latest-activity">
				<div class="latest-activity widget-box">
					<h5>Latest Activity</h5>

					<div class="widget-content">
       <? if (!empty($log)) { ?>
  <ul class="user-list" style="height:320px;">
    
                                <? foreach ($log as $line) { ?>
    <li>
      <a href="#">
        
          <time title=""></time>
        
        <img class="avatar" src="">
        <span class="username"><?= $line; ?></span>
        
        <span class="user-list-connection hide">Paypal</span>
        
        <span class="user-list-location hide">Buenos Aires, Argentina</span>
      </a>
    </li>
	
        <? } ?>
  </ul>
  
                                <? } else { ?>
            <li class="bold theme-font" style="padding-top: 5%;">
<div class="well margin-top-20">
<p class="lead"> There is nothing recent.</p> </div></li>
     </ul><!-- END .list-group -->
                                <? } ?>

</div>
					<p><a href="<?= site_url('events'); ?>" class="btn btn-block">View More</a></p>

				</div>

				</div>


			<div class="col-user-list col-user-last-payment">
				<!-- Last last Payment widget -->
				<div class="last-payment widget-box">
					<h5>New Customers</h5>

					<div class="widget-content">
  <ul class="user-list hidden">
    
    <li>
      <a href="#/users/bGlua2VkaW58MmRfanh5clhXRA">
        
          <time title="Sun Sep 13 2015 01:33:08 GMT-0400">a month ago</time>
        
        <img class="avatar" src="https://media.licdn.com/mpr/mprx/0_fxkuMxLkAG3FavaiSyq0MpvoPhNw29OiSZK1MjkJuL8s1td__MN8cgrcgmqv7A0fayQtns9_xWqd">
        <span class="username">Richard Rowe</span>

        
        <span class="user-list-connection">linkedin</span>
        
        <span class="user-list-location hide">Buenos Aires, Argentina</span>
      </a>
    </li>
    
    <li>
      <a href="#/users/ZmFjZWJvb2t8MTAxNTM0ODY5ODQyMTY4MTU">
        
          <time title="Sun Sep 13 2015 01:32:11 GMT-0400">a month ago</time>
        
        <img class="avatar" src="https://scontent.xx.fbcdn.net/hprofile-xpf1/v/t1.0-1/c4.6.50.50/p56x56/10423926_10153297068811815_2574425897854496868_n.jpg?oh=b9d878953e2b24000c20165057d3d6d5&amp;oe=5671E232">
        <span class="username">Richard Rowe</span>

        
        <span class="user-list-connection">facebook</span>
        
        <span class="user-list-location hide">Buenos Aires, Argentina</span>
      </a>
    </li>
    
    <li>
      <a href="#/users/YXV0aDB8NTVjZmQ4ZGJjZDFhOTEzZDY3MGIxOTdh">
        
          <time title="Sat Aug 15 2015 20:27:07 GMT-0400">2 months ago</time>
        
        <img class="avatar" src="https://secure.gravatar.com/avatar/f5b2e94b2af6fdd5568a34dbd4cf9e62?s=480&amp;r=pg&amp;d=https%3A%2F%2Fcdn.auth0.com%2Favatars%2Fri.png">
        <span class="username">richard.r@everpayinc.com</span>

        
        <span class="user-list-connection">Username-Password-Authentication</span>
        
        <span class="user-list-location hide">Buenos Aires, Argentina</span>
      </a>
    </li>
    
  </ul>

	 </div><!--end/ .widget-content-->

					<!-- <p><a href="<?= site_url('customers'); ?>" class="btn btn-block">View More</a></p>-->
		
			 </div><!--end/ .widget-box-->
 </div><!--end/ .row-->
			

 </div><!-- END.col-xs-12-->
 
 </div><!--end/ .row-->
 
 


<div class="clearfix" style="height:40px;"></div>


 <div class="row">
			<div class="intro-text-1">
           		
                <div class="row widget-box">
				
                    <div class="col-sm-7 col-xs-7">
                        <h4 class="animated slideInDown">Need More Features?
                        </h4>

                        <p>
                          Upgrade today to unlock more functions.
                        </p>                   
                    </div>
					
                    <div class="col-sm-5 col-xs-5 center">
                        <a href="<?= site_url('account/upgrade'); ?>" class="btn btn-primary btn-lg text-center">Upgrade Now</a>
                    </div>
				                
                </div><!--end/ .row-->
				
				      </div><!--end/ .intro-text-1-->
					        </div><!--end/ .row-->
 

<? if ($this->user->Get('client_type_id') == '1') { ?>
 <div class="row clearfix">

</div><!-- END.row clearfix-->	

<? } elseif ($this->user->Get('client_type_id') == '0') { ?>
 <div class="row clearfix hide">
					
<iframe width="100%" height="380" src="//everpay.slack.com/messages/" allowfullscreen></iframe>
	</div><!-- END.row clearfix-->	
	
<? } ?>

<div id="popover_content_wrapper" style="display: none">
    <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
<ul class="list-inline center" style="font-weight: 100;
  font-size: 12px;">
                <li style="padding-right: 10px;">
                 <span>   <i class="fa fa-cc-visa fa-2"></i> <strong class="small-num" style="padding-top: 12px;font-weight: 100;"> <?php echo $total_visa_transactions_amount_today; ?></strong> <span></span></span>
                </li>

                <li style="padding-right: 10px;">
                <span>    <i class="fa fa-cc-mastercard fa-2"></i> <strong class="small-num" style="padding-top: 12px;font-weight: 100;"> <?php echo $total_mastercard_transactions_amount_today; ?></strong> <span> </span></span>
                </li>

                <li style="padding-right: 10px;">
                <span>    <i class="fa fa-cc-amex fa-2"></i><strong class="small-num" style="padding-top: 12px;font-weight: 100;"> <?php echo $total_amex_transactions_amount_today; ?> <span></strong> </span></span>
                </li>


                <li style="padding-right: 10px;">
                    <span><i class="fa fa-cc-discover fa-2"></i>  <strong class="small-num" style="padding-top: 12px;font-weight: 100;"> <?php echo $total_discover_transactions_amount_today; ?> <span> </strong></span></span>
                </li>

                <li style="padding-right: 10px;">
                    <span><i class="fa fa-cc fa-2"></i> <strong class="small-numm" style="padding-top: 12px;font-weight: 100;"> <?php echo $total_cc_transactions_amount_today; ?></strong> <span> </span></span>
                </li>
                <li>
                    <span><i class="fa fa-check-circle-o fa-2"></i> <strong class="small-num" style="padding-top: 12px;font-weight: 100;"> <?php echo $total_other_transactions_amount_today; ?></strong> <span></span></span>
                </li>
</ul>
            </div><!-- END/ .ROW-->

    </div><!-- /#pop-over-content -->




</div><!-- END/ #section-->

</div><!-- END/ #dashboard-->

</div><!-- END/ #content-wrapper-->

 </div><!--end/-->


</div><!-- END/ #close-page-->

   </div> <!-- .container-fluid -->

        <!-- Page Plugins -->
        <script src="<?= branded_include('js/plugins/slick/slick.min.js');?>"></script>
        <script src="<?= branded_include('js/plugins/chartjs/Chart.min.js');?>"></script>
        <script src="<?= branded_include('js/plugins/flot/jquery.flot.min.js');?>"></script>
        <script src="<?= branded_include('js/plugins/flot/jquery.flot.pie.min.js');?>"></script>
        <script src="<?= branded_include('js/plugins/flot/jquery.flot.stack.min.js');?>"></script>
        <script src="<?= branded_include('js/plugins/flot/jquery.flot.resize.min.js');?>"></script>

        <!-- Page JS Code -->
        <script src="<?= branded_include('js/pages/index.js');?>"></script>
        <script>
            $(function()
            {
                // Init page helpers (Slick Slider plugin)
                App.initHelpers('slick');
            });
        </script>

<?= $this->load->view(branded_view('cp/footer')); ?>