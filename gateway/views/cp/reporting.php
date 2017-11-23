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


<style>
    #chartdiv {
        width		: 100%;
        height		: 380px;
        font-size	: 11px;
    }
    #chartdiv_pie {
        width		: 100%;
        height		: 380px;
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
</style>
<style>
    html, body, #map-canvas { height: 100%; margin: 0px; padding: 0px }
    .panel-heading {
        padding: 0 10px!important;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

    .dashboard-stat2 .progress-info .status .status-number {
        float: left!important;
        display: inline-block;
        margin-left: 20px;
    }

    .dashboard-stat > .details {
        position: absolute;
        left: 15px!important;
        padding-left: 15px!important;
    }

    .dashboard-stat .details .number {
        padding-top: 10px!important;
        text-align: left;
        font-size: 34px;
        line-height: 36px;
        letter-spacing: -1px;
        margin-bottom: 0px;
        font-weight: 300;
    }
    .dashboard-stat .details .desc {
        text-align: left;
        font-size: 16px;
        letter-spacing: 0px;
        font-weight: 300;
    }
    .dashboard-stat .more {
        clear: both;
        display: block;
        padding: 6px 10px 6px 10px;
        position: relative;
        text-transform: uppercase;
        font-weight: 300;
        font-size: 11px;
        opacity: 0.7;
        filter: alpha(opacity=70);
    }

    .xe-widget.xe-counter .xe-label span {
        display: block;
        font-style: normal;
        font-size: 8px;
        text-transform: uppercase;
        color: #979898;
        margin-top: 8px;
    }

    .multicountryFlag {
        margin-right: 5px;
        background: url("") no-repeat scroll transparent;
        padding-left: 21px;
    }

    .money-row {
        margin-top: 15px;
    }

    .multipleCurrency {
        background-color: #f2f8fc;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        -moz-background-clip: padding;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border-radius: 5px;
        -moz-background-clip: padding;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        margin-left: 10px;
        margin-right: 10px;
    }

    .multipleCurrencyRow {
        padding: 5px 8px;
    }

    .multipleCurrency .multipleCurrencyRow .multicurrencyCode {
        font-size: 14px;
        color: #000;
        margin-top: 12px;
        display: inline-block;
    }

    .multipleCurrencyRow .multiAmount {
        float: right;
        font-size: 13px;
        font-family: "inherit";
    }

    .multiExchangeNote {
        font-size: 10px;
        color: #eee;
        line-height: 12px;
        margin: 10px 0;
        padding-left: 12px;
    }

    .dashboard-stat .visual {
        width: 80px;
        height: 80px;
        display: block;
        padding-top: 10px;
        padding-left: 50%;
        margin: 0px auto;
        font-size: 35px;
        line-height: 35px;
    }

    .caption-subject {
        font-size: 18px;
        font-weight: bold;
        margin: 10px 20px 10px 10px;
        border-bottom: 1px solid #eee;
    }

</style>


<script type="text/javascript" src="//www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="//www.amcharts.com/lib/3/serial.js"></script>
<script type="text/javascript" src="//www.amcharts.com/lib/3/pie.js"></script>
<script type="text/javascript" src="//www.amcharts.com/lib/3/themes/none.js"></script>


<!-- END PAGE HEADER-->

<!-- BEGIN DASHBOARD STATS -->

<div class="col-sm-12">
    <div class="col-sm-6" id="failed_transaction_chart_div" style="width: 50%; height: 340px;">


    </div><!-- END/ .chart_div-->
    <div class="col-sm-6" id="successful_transaction_chart_div" style="width: 50%; height: 340px;">


    </div><!-- END/ .chart_div-->

</div><!-- END col-sm-12-->
<div class="clearfix"></div>

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
                        labels: ['Revenue'],
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
                        pointFillColors: ['#5A508F'],
                        labels: ['Failed Transactions'],
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
                        labels: ['Revenue'],
                        parseTime: false,
                        yLabelFormat: function(y) {
                            return  '$' + y;
                            ;
                        },
                        xLabelAngle: 45,
                        resize: true,
                        redraw: true
                    });
                }, 'json'
                );
    });
</script>
<script type="text/javascript" src="<?= branded_include('js/notyfy/jquery.notyfy.js'); ?>"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<?= $this->load->view(branded_view('cp/footer')); ?>