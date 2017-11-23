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


<style type="text/css">

#reports .stats {
    margin: 0 -20px;
    margin-top: -10px!important;
    padding: 24px 36px 18px;
    background: #FAFBFD;
    border-top: 3px solid #ADBDD5;
    border-bottom: 1px solid #E2E4F5;
}

#content .content-wrapper {
    margin-top: 15px;
}

td.filter select { width: 55px }


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
  margin: 5px 2px!important;
  padding: 5px!important;
}

#content {
    padding-top: 56px!important;
    margin-bottom: 1px!important;
}




.big-tabs li {
    width: auto;
    display: inline-block;
margin-top:-20px;
margin-bottom:20px;
}

.big-tabs li {
    width: 40%;
    margin-bottom: 10px;
    border: 0;
    width: auto;
    display: inline-block;
}

.big-tabs li:first-child {
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
}

.big-tabs li {
    display: inline-block;
    float: none;
    font-weight: bold;
    margin: 0;
    border: 1px solid #0eb3ec;
    margin-left: -1px;
}

.big-tabs li:first-child a {
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
}

.big-tabs li a {
    border-radius: 0;
    width: auto;
    display: inline-block;
}

.big-tabs li a {
    width: 40%;
    border: 1px solid #0eb3ec!important;
    border-radius: 3px;
    display: block;
}

.big-tabs li.active a {
    background: #0eb3ec!important;
    color: #fff!important;
}

.big-tabs li a {
    color: #0eb3ec!important;
    line-height: 32px;
    display: inline-block;
    padding: 0 30px;
}

.btn-info {
  color: #0eb3ec!important;
    line-height: 32px;
    display: inline-block;
    padding: 0 30px;
    background: #fff!important;
}


.btn-info .active a {
    background: #0eb3ec!important;
    display: inline-block;
    color: #fff!important;
}

.btn-info.active:hover {
    background: #0eb3ec!important;
    color: #fff!important;
}

</style>


 <!-- BEGIN PAGE CONTENT-->


<div id="reports">

<div class="content-wrapper" style="height: auto;">

        <div class="stats clearfix">
            <div class="stat">
                <label>Total Trans</label>
                <div class="value">
                   0
                    <div class="change up">
                        <i class="fa fa-caret-up"></i>
                        0%
                    </div>
                </div>
            </div>
            <div class="stat">
                <label>Total Successful</label>
                <div class="value">
                    0
                    <div class="change up">
                        <i class="fa fa-caret-up"></i>
                        0%
                    </div>
                </div>
            </div>
            <div class="stat">
                <label>Total Failed</label>
                <div class="value">
                 0
                    <div class="change down">
                        <i class="fa fa-caret-down"></i>
                        0%
                    </div>
                </div>
            </div>

            <div class="stat">
                <label>Total Amount</label>
                <div class="value">
<?= $this->config->item('currency_symbol'); ?><?= money_format("%!^i", $total_amount); ?>                                                                  
                    <div class="change up">
                        <i class="fa fa-caret-up"></i>
                        0%
                    </div>
                </div>
            </div>

  </div><!--/.stats clearfix-->


<div class="row">
<div class="chart col-md-12">

<div class="widget" style="padding: 15px;border: 1px #eee;border-radius:10px;height: auto;">

            <h3>
                Revenue

                <ul class="big-tabs clearfix pull-right" data-toggle="buttons">
                    <li id="week" class="btn btn-info active">
                        <input type="radio" name="options active" id="option2" /> Week
                    </li>

                    <li id="month" class="btn btn-info">
                        <input type="radio" name="options" id="option1" /> Month
                    </li>

                    <li id="year" class="btn btn-info">
                        <input type="radio" name="options" id="option1" /> Year
                    </li>

                </ul>
            </h3>
<br />
            <div id="revenue" style="height: 320px;"></div>

</div><!--/.widget-->
 </div><!--/.col-md-12-->

  </div><!--/.row-->


<div id="section">

<div class="row users-list">
<div class="col-md-12">

<?php if (!empty($this->dataset->data)) : ?>	

<?=$this->dataset->TableHead();?>
            
<tbody>
	<?php foreach ($this->dataset->data as $row) :?>
                                    <tr class="items-list">
               <td><b class=""><?= $this->config->item('currency_symbol'); ?><?= $row['amount']; ?></b></td>
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

<td class="card-name"><strong> Charges for <a href="<?= site_url('transactions/charge/' . $row['customer']['id']); ?>"><?= $row['customer']['email']; ?></a></strong></td>
                                      									
<td> <span class="fa fa-credit-card"></span> <? if (!empty($row['card_last_four'])) { ?> **** <?=$row['card_last_four'];?><? } ?></td>

	<td class="date options"><a href="<?=site_url('transactions/charge/' . $row['id']);?>"><abbr class="timeago"><?= date('M j, Y h:i a', $row['date']); ?></abbr><span class="btn-primary btn-circle btn-xs center pull-right" style="text-align:center; width: 22px;padding: 6px; border-radius:25px;"><i class="fa fa-eye"></i></span></a></td>

		</tr>                         
                         <?php endforeach; ?>
</tbody>

<?=$this->dataset->TableClose();?>

	
<?php else : ?>
<div class="empty margin-top-0 margin-bottom-20">

</div>
<?php endif; ?>

</div><!--/.col-md-12-->
</div><!--/.row-fluid-->
</div><!--/#section-->



<!-- page application js -->
<script type="text/javascript">
    $(document).ready(function() {
        revenue('week');
        $('.widget .big-tabs .btn-info').click(function(e) {
            var type = $(this).attr('id');
            $('#revenue').html('');
            revenue(type);

        });

        function revenue(type) {
            $.post('<?php echo base_url(); ?>index.php/reports_orders/get_order_data/',
                    {
                        type: type
                    },
            function(data)
            {
                console.log(data);
                if (data.length != 0) {
                    Morris.Line({
                        element: 'revenue',
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
                } else {
                    $("#revenue").html('');
                    $("#revenue").append("<div class='body no-margin'><div class='visits-info well well-sm'><div class='row-fluid'>No Related Data Found</div></div></div>");
                }
            }, 'json');

        }

    });

</script>

</div><!--/.row charts-->

</div><!--/.content-wrapper-->

</div><!--/#reports-->




<?= $this->load->view(branded_view('cp/footer')); ?>