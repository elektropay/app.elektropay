<?=
$this->load->view(branded_view('cp/header'));
error_reporting(0);
?>



<style>

#ui section {
  margin-bottom: 50px;
}

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



<!-- END PAGE HEADER-->

<div id="ui"> 
<!-- BEGIN ADD ON APPS -->
<div class="content-wrapper">

    <div class="chart clearfix" style="height:auto;">


<section class="intro">
<header class="section-header">
<div class="copywriting center">
<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	
<h3 class="margin-none">Add<strong class="text-primary"> More Features</strong></h3>

</div>
</div> 
</header>
	</section>

<section class="tour">

<div class="row" id="PageContentRow3">

      <div class="col-md-4">
        
<!--Begin Feature: F7b9f054c4288 - A/X Transactional Optimization-->
<div class="Feature" style="width:100%;" id="F7b9f054c4288">
<div class="FeatureEditBar" style="display:none;" id="FBarF7b9f054c4288">
<div style="float:right;"><a title="Edit the settings for this page feature." onclick="admin.editFeature('F7b9f054c4288', 'path=/smtp-server', '?id=F7b9f054c4288&amp;path=/smtp-server', 'Html');return false;">Edit</a> - <a title="Remove this feature from the page." onclick="admin.deleteFeature('F7b9f054c4288', 'path=/smtp-server');return false;">Delete</a></div><img src="../assets/app/img/textarea.png" alt="Text Area" title="Text Area" border="0">Text Area - I/O Optimization</div>
<div class="panel panel-default">
<div class="panel-body">
<div style="min-height:140px;"><i class="fa fa-random fa-5x" style="color:#714C73;padding: 15px;"></i><h3><span style="color: rgb(66, 66, 66);">I/O Optimization</span></h3><p><span style="color: rgb(66, 66, 66);">Improve your transactions with easy to setup channels and templates that will learn and optimize over time.</span></p></div>
<p><a class="btn btn-default" href="#">Learn More</a></p>
</div>
</div>
</div><!--End Feature: F7b9f054c4288 - A/X Transactional Optimization-->

      </div>

      <div class="col-md-4">
        
<!--Begin Feature: F19ac8be22f8a - Sub-Accounts-->
<div class="Feature" style="width:100%;" id="F19ac8be22f8a">
<div class="FeatureEditBar" style="display:none;" id="FBarF19ac8be22f8a">
<div style="float:right;"><a title="Edit the settings for this page feature." onclick="admin.editFeature('F19ac8be22f8a', 'path=/smtp-server', '?id=F19ac8be22f8a&amp;path=/smtp-server', 'Html');return false;">Edit</a> - <a title="Remove this feature from the page." onclick="admin.deleteFeature('F19ac8be22f8a', 'path=/smtp-server');return false;">Delete</a></div><img src="../assets/app/img/textarea.png" alt="Text Area" title="Text Area" border="0">Text Area - Sub-Accounts</div>
<div class="panel panel-default">
<div class="panel-body">
<div style="min-height:140px;">
<i class="fa fa-user fa-5x" style="color:#245491;padding: 15px;"></i><h3><span style="color: rgb(66, 66, 66);">Sub-Accounts</span></h3><p><span style="color: rgb(66, 66, 66);">Gain access to unlimited sub-accounts. Separate your mail by type or for your own clients to get the best results.</span></p>
</div>
<p><a class="btn btn-default" href="#">Learn More</a></p>
</div>
</div>
</div><!--End Feature: F19ac8be22f8a - Sub-Accounts-->

      </div>
      <div class="col-md-4">
        
<!--Begin Feature: F4b9cdd216e6a - Cloud POS Machine-->
<div class="Feature" style="width:100%;" id="F4b9cdd216e6a">
<div class="FeatureEditBar" style="display:none;" id="FBarF4b9cdd216e6a">
<div style="float:right;"><a title="Edit the settings for this page feature." onclick="admin.editFeature('F4b9cdd216e6a', 'path=/smtp-server', '?id=F4b9cdd216e6a&amp;path=/smtp-server', 'Html');return false;">Edit</a> - <a title="Remove this feature from the page." onclick="admin.deleteFeature('F4b9cdd216e6a', 'path=/smtp-server');return false;">Delete</a></div><img src="../assets/app/img/textarea.png" alt="Text Area" title="Text Area" border="0">Text Area - Cloud Email Delivery</div>
<div class="panel panel-default">
<div class="panel-body"><div style="min-height:140px;">
<i class="fa fa-cloud fa-5x" style="color:#bbbbbb;padding: 15px;"></i><h3><span style="color: rgb(66, 66, 66);">Cloud POS</span></h3><p><span style="color: rgb(66, 66, 66);">POS cloud based delivery scales to meet your needs. We process millions of payments every month.</span></p></div><p><a class="btn btn-default" href="#">Learn More</a></p></div></div></div><!--End Feature: F4b9cdd216e6a - Cloud POS Machine-->

      </div>
    </div>

<hr>

<div class="row">

 <div class="col-md-12 margin-btm-20">
                
    </div><!-- END/ .col-md-12-->

</div><!-- END/ .row-->


<div class="row" id="PageContentRow3">

<div class="col-md-4 col-xs-12">

<div class="Feature" style="width:100%;">
<div style="min-height:140px;">
	<div class="thumbnail">
    	<i class="fa fa-cloud fa-5x" style="color:#bbbbbb;padding: 15px;"></i>
        	<div class="caption" id="caption-half-down">
         		<h3>Thumbnail label</h3>
         			<p>Some sample text. </p>
            		
    		</div>
            <div class="caption" id="caption-half-up">
         			<p>
            		<a href="#" class="btn btn-primary" role="button">
               		Button
            		</a> 
            		<a href="#" class="btn btn-default" role="button">
               		Button
            		</a>
                   </p>
        			 
                     
    		</div>
    </div>

</div><!--End min-height-->
</div><!--End Feature:- Cloud POS Machine-->
</div>

<div class="col-md-4 col-xs-12">
<div class="Feature" style="width:100%;">
	<div class="thumbnail">
<div style="min-height:140px;">
    	<i class="fa fa-code fa-5x" style="color:#bbbbbb;padding: 15px;"></i>       	
<div class="caption" id="caption-half-down">
         		<h3>Hosted Payments</h3>
         			<p>Some sample text. </p>
            		
    		</div>
            <div class="caption" id="caption-half-up">
         			<p>
            		<a href="#" class="btn btn-primary" role="button">
               		Button
            		</a> 
            		<a href="#" class="btn btn-default" role="button">
               		Button
            		</a>
                   </p>
        			 
                     
    		</div>
</div><!--End min-height-->
</div>
</div><!--End Feature: F4b9cdd216e6a - Cloud POS Machine-->
</div>

<div class="col-md-4 col-xs-12">
<div class="Feature" style="width:100%;">
	<div class="thumbnail">
<div style="min-height:140px;">
    	<i class="fa fa-group fa-5x" style="color:#bbbbbb;padding: 15px;"></i>
        	<div class="caption" id="caption-half-down">
                           <h3>Thumbnail label</h3>
         			<p>Some sample text. </p>
            		
    		</div>
            <div class="caption" id="caption-half-up">
         			<p>
            		<a href="#" class="btn btn-primary" role="button">
               		Button
            		</a> 
            		<a href="#" class="btn btn-default" role="button">
               		Button
            		</a>
                   </p>
        			 
                     
    		</div>
</div><!--End min-height-->
    </div>
</div><!--End Feature: F4b9cdd216e6a - Cloud POS Machine-->
</div>

</div><!-- END/ .row-->

</section>

  </div><!-- END/ .chart-->
   </div><!-- END/ .content-wrapper-->
   </div><!-- END/ #ui-->



<script type="text/javascript">
$(document).ready(function(){
	$('button.btn').click(function(){
		$(this).popover('show');
	});
});
</script>

<?= $this->load->view(branded_view('cp/footer')); ?>