<?=$this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/rwd-table.min.js') . '"></script>'));?>


 <style rel="stylesheet" type="text/css">
 
 #content {
    background: #FFF;
    padding-top: 55px!important;
    margin-bottom: 0px!important;
    position: relative;
    min-height: 520px;
 }
 
#PageContentRow{
    padding: 0;
    margin-top: 10px!important;
}

.panel .panel-body {
    padding: 0;
    padding-top: 10px!important;
    color: #979898;
}

.panel-body {
  font-size: 13px;
  text-align: center;
}

.panel-body h3 {
  margin-top: 25px !important;
  margin-top: 10px !important;
  text-align: center;
}

.panel-body p {
  margin-top: 10px !important;
  margin-top: 10px !important;
  text-align: left;
}

.panel-body i {
  margin-top: 30px !important;
  padding: 10px !important;
text-align: center;
}

.panel-body .btn {
text-align: center;
}

pre {
  white-space: pre-wrap;
  font-size: 14px!important;
}

code {
  border: 0px solid #e1e1e1;
  -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
  box-shadow: 0 0px 4px rgba(0, 0, 0, 0.1);
}


input[type=checkbox], input[type=radio] {
box-sizing: border-box;
padding-right: 10px;
margin-top: 4px!important;
position: relative !important;
}

#dataset_form .pagination {
	overflow: visible !important;
}

.metrics {
  margin-top: 10px;
  font-family: "Helvetica Neue", Arial;
  border: 1px solid #eee;
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.3);
  background-color: #4c87b9!important;
  border-radius: 5px;
}

.metrics .metric {
  float: left;
  width: 29%;
  margin-top: 0px;
  padding: 10px 0;
  padding-top: 15px;
  text-align: center;
  background-color: #4c87b9!important;
  border-right: 1px solid #eee;
}

.metric {
  width: 29%!important;
)

.data >h3 {
  font-size: 28px!important;
  margin-bottom: 10px!important;
  font-weight: 600;
  margin-top: 0px;
}

.data > fa {
  font-size: 28px!important;
  margin-bottom: 10px!important;
  font-weight: 600;
  margin-top: 0px;
font-color: #FFF;
}

#dashboard .chart .ace-icon {
 font-size: 28px!important;
font-color: #FFF;
}



div#section {
  border: 1px solid #eee;
  margin-left: 10px!important;
  margin-right: 10px!important;
  padding: 10px;
bottom: 20px;
top: 30px;
  min-height: 600px;
  position: relative;
  border-radius: 10px;
  z-index: 20;
  -moz-border-bottom-right-radius: 10px;
  border-bottom-right-radius: 10px;
  -webkit-border-bottom-right-radius: 10px;
  -webkit-font-smoothing: subpixel-antialiased;
}

#status #update {
    margin-top: 10px!important;
    margin-bottom: 40px!important;
}

</style>

<div id="status">

	<div id="update">

<div class="content-wrapper">

	
	<div id="" class="row-fluid clearfix">
	

<div class="row" id="PageContentRow">
      
<div class="col-md-4">
        
<!--Begin Feature:  Account Settings-->
<div class="Feature" style="width:100%;">
<div class="FeatureEditBar" style="display:none;">
<div style="float:right;"><a title="Edit the settings for this page feature." onclick="admin.editFeature('F79203a533f4b', 'path=/smtp-server', '?id=F79203a533f4b&amp;path=/smtp-server', 'Html');return false;">Edit</a> - <a title="Remove this feature from the page." onclick="admin.deleteFeature('F79203a533f4b', 'path=/smtp-server');return false;">Delete</a></div>
<img src="../assets/app/img/textarea.png" alt="Text Area" title="Text Area" border="0">Text Area - Account Settings</div>
<div class="panel panel-default">
<div class="panel-body">
<div style="min-height:140px;">
<i class="fa fa-user fa-5x fa-fw" style="color:#245491"></i>
<h3><span style="color: rgb(66, 66, 66);">Account Settings</span></h3>
<p><span style="color: rgb(66, 66, 66);">Manage your account and personal settings, add features, enable extra security.&nbsp;</span></p>
</div>
<p><a class="btn btn-default center" href="<?=site_url('account/');?>">View My Profile</a></p>
</div>
</div>
</div><!--End Feature:  - Account Settings-->

      </div>


      <div class="col-md-4">
        
<!--Begin Feature:  API Settings-->
<div class="Feature" style="width:100%;">
<div class="FeatureEditBar" style="display:none;">
<div style="float:right;"><a title="Edit the settings for this page feature." onclick="admin.editFeature('F79203a533f4b', 'path=/smtp-server', '?id=F79203a533f4b&amp;path=/smtp-server', 'Html');return false;">Edit</a> - <a title="Remove this feature from the page." onclick="admin.deleteFeature('F79203a533f4b', 'path=/smtp-server');return false;">Delete</a></div>
<img src="../assets/app/img/textarea.png" alt="Text Area" title="Text Area" border="0">Text Area - API Request</div>
<div class="panel panel-default">
<div class="panel-body">
<div style="min-height:140px;">
<i class="fa fa-external-link fa-5x fa-fw" style="color:#714C73"></i>
<h3><span style="color: rgb(66, 66, 66);">API Settings</span></h3>
<p><span style="color: rgb(66, 66, 66);">Use our API to parse all inbound transactions and have the data posted to your server.&nbsp;</span></p>
</div>
<p><a class="btn btn-default center" href="<?=site_url('settings/api');?>">Get API Details</a></p>
</div>
</div>
</div><!--End Feature:  - API Notifications-->

      </div>

      
      <div class="col-md-4">
        
<!--Begin Feature: Gateway Settings-->
<div class="Feature" style="width:100%;">
<div class="FeatureEditBar" style="display:none;">
<div style="float:right;">
<a title="Edit the settings for this page feature." onclick="admin.editFeature('F2688abed2f7b', 'path=/smtp-server', '?id=F2688abed2f7b&amp;path=/smtp-server', 'Html');return false;">Edit</a> - 
<a title="Remove this feature from the page." onclick="admin.deleteFeature('F2688abed2f7b', 'path=/smtp-server');return false;">Delete</a></div><img src="/assets/app/img/textarea.png" alt="Text Area" title="Text Area" border="0">Text Area - Private IP Pools</div>
<div class="panel panel-default">
<div class="panel-body">
<div style="min-height:140px;">
<i class="icon fa fa-database fa-5x fa-fw"style="color:#3D4752"></i>
<h3><span style="color: rgb(66, 66, 66);">Connections</span></h3>
<p><span style="color: rgb(66, 66, 66);">Route payments to more than a dozen gateways to increase profits.</span></p></div>
<p><a class="btn btn-default center" href="<?=site_url('settings/gateways');?>">Select Gateways</a></p>
</div>
</div>
</div><!--End Feature: Gateway Settings-->

      </div>

</div><!-- END/.row-->


<div class="row" id="PageContentRow">
      
<div class="col-md-4">
        
<!--Begin Feature: Email Template Settings-->
<div class="Feature" style="width:100%;">
<div class="FeatureEditBar" style="display:none;">
<div style="float:right;">
<a title="Edit the settings for this page feature." onclick="admin.editFeature('F2688abed2f7b', 'path=/smtp-server', '?id=F2688abed2f7b&amp;path=/smtp-server', 'Html');return false;">Edit</a> - 
<a title="Remove this feature from the page." onclick="admin.deleteFeature('F2688abed2f7b', 'path=/smtp-server');return false;">Delete</a></div><img src="/assets/app/img/textarea.png" alt="Text Area" title="Text Area" border="0">Text Area - Private IP Pools</div>
<div class="panel panel-default">
<div class="panel-body">
<div style="min-height:140px;">
<i class="fa fa-envelope fa-5x fa-fw" style="color:#997A36"></i>
<h3><span style="color: rgb(66, 66, 66);">Email Templates</span></h3>
<p><span style="color: rgb(66, 66, 66);">Take control of your brand and customize all your email messages that are sent.</span></p></div>
<p><a class="btn btn-default center" href="<?=site_url('settings/emails');?>">Manage Emails</a></p>
</div>
</div>
</div><!--End Feature: F2688abed2f7b - Email Templates Management-->

      </div>


      <div class="col-md-4">
        
<!--Begin Feature: Invoicing Settings-->
<div class="Feature" style="width:100%;">
<div class="FeatureEditBar" style="display:none;">
<div style="float:right;">
<a title="Edit the settings for this page feature." onclick="admin.editFeature('F6e923bc1ec97', 'path=/smtp-server', '?id=F6e923bc1ec97&amp;path=/smtp-server', 'Html');return false;">Edit</a> - <a title="Remove this feature from the page." onclick="admin.deleteFeature('F6e923bc1ec97', 'path=/smtp-server');return false;">Delete</a></div>
<img src="../assets/app/img/textarea.png" alt="Text Area" title="Text Area" border="0">Text Area - Invoicing Settings</div>
<div class="panel panel-default"><div class="panel-body">
<div style="min-height:140px;">
<i class="fa fa-file-pdf-o fa-5x fa-fw" style="color:#993333"></i>
<h3><span style="color: rgb(66, 66, 66);"> Invoice Settings</span></h3>
<p><span style="color: rgb(66, 66, 66);">Everpay's invoicing solution effectively manages the process.</span></p></div>
<p><a class="btn btn-default center" href="#">Manage Invoices</a></p>
</div>
</div>
</div><!--End Feature: Invoicing Settings-->

      </div>



      <div class="col-md-4">
        
<!--Begin Feature: Hosted Payment Pages-->
<div class="Feature" style="width:100%;">
<div class="FeatureEditBar" style="display:none;">
<div style="float:right;">
<a title="Edit the settings for this page feature." onclick="admin.editFeature('F6e923bc1ec97', 'path=/smtp-server', '?id=F6e923bc1ec97&amp;path=/smtp-server', 'Html');return false;">Edit</a> - <a title="Remove this feature from the page." onclick="admin.deleteFeature('F6e923bc1ec97', 'path=/smtp-server');return false;">Delete</a></div>
<img src="../assets/app/img/textarea.png" alt="Text Area" title="Text Area" border="0">Text Area - Hosted payment pages </div>
<div class="panel panel-default">
<div class="panel-body">
<div style="min-height:140px;">
<i class="fa fa-code fa-5x fa-fw" style="color:#1E5C28"></i>
<h3><span style="color: rgb(66, 66, 66);">Hosted Pages</span></h3>
<p><span style="color: rgb(66, 66, 66);">Hosted Payment Form enables you to accept card payments without touching card data.</span></p></div>
<p><a class="btn btn-default center" href="<?=site_url('settings/payment_pages');?>">Get The Code</a></p>
</div>
</div>
</div><!--End Feature: Invoicing Settings-->

      </div>


</div><!-- END/.row-->



<div class="row" id="PageContentRow">
      
<div class="col-md-4">
        
<!--Begin Feature:  Webhooks Settings-->
<div class="Feature" style="width:100%;">

<div class="FeatureEditBar" style="display:none;">

<div style="float:right;">
<a title="Edit the settings for this page feature." onclick="admin.editFeature('F79203a533f4b', 'path=/smtp-server', '?id=F79203a533f4b&amp;path=/smtp-server', 'Html');return false;">Edit</a> - <a title="Remove this feature from the page." onclick="admin.deleteFeature('F79203a533f4b', 'path=/smtp-server');return false;">Delete</a>
</div>
<img src="../assets/app/img/textarea.png" alt="Text Area" title="Text Area" border="0"> Text Area - web hooks
</div>

<div class="panel panel-default">
<div class="panel-body">
<div style="min-height:140px;">
<i class="fa fa-bell-o fa-5x" style="color:#333333"></i>
<h3><span style="color: rgb(66, 66, 66);">Web Hooks</span></h3>
<p><span style="color: rgb(66, 66, 66);">Let our servers talk to your servers with real-time web hooks to notify you of events.</span></p>
</div>
<p><a class="btn btn-default center" href="#">Create A Hook</a></p>
</div>
</div>

</div><!--End Feature:  - webhooks and events-->

      </div><!--End col-md-4-->

      <div class="col-md-4">
        <!--Begin Feature: Marketplace Settings-->
<div class="Feature" style="width:100%;">

<div class="FeatureEditBar" style="display:none;">

<div style="float:right;">
<a title="Edit the settings for this page feature." onclick="admin.editFeature('F6e923bc1ec97', 'path=/product_management', '?id=F6e923bc1ec97&amp;path=/smtp-server', 'Html');return false;">Edit</a> - <a title="Remove this feature from the page." onclick="admin.deleteFeature('F6e923bc1ec97', 'path=/smtp-server');return false;">Delete</a>
</div>
<img src="../assets/app/img/textarea.png" alt="Text Area" title="Text Area" border="0">Text Area - Marketplace Settings
</div>
<div class="panel panel-default">
<div class="panel-body">
<div style="min-height:140px;">
<i class="fa fa-unsorted fa-5x" style="color:#1d9d74"></i>
<h3><span style="color: rgb(66, 66, 66);">Manage Products</span></h3>
<p><span style="color: rgb(66, 66, 66);">Easily add, edit and remove products, including stock changes and taxes.</span></p>
</div>
<p><a class="btn btn-default center" href="#">Add Some Items</a></p>
</div>
</div>


</div><!--End Feature: - Product Settings-->

      </div><!--End col-md-4-->

      <div class="col-md-4">
        
<!--Begin Feature: POS Settings-->
<div class="Feature" style="width:100%;">

<div class="FeatureEditBar" style="display:none;" id="">

<div style="float:right;">
<a title="Edit the settings for this page feature." onclick="admin.editFeature('F2688abed2f7b', 'path=/smtp-server', '?id=F2688abed2f7b&amp;path=/smtp-server', 'Html');return false;">Edit</a> - 
<a title="Remove this feature from the page." onclick="admin.deleteFeature('F2688abed2f7b', 'path=/smtp-server');return false;">Delete</a>
</div>
<img src="../assets/app/img/features/textarea.png" alt="Text Area" title="Text Area" border="0">Text Area - Virtual POS Settingss
</div>
<div class="panel panel-default">
<div class="panel-body">
<div style="min-height:140px;">
<i class="fa fa-barcode fa-5x" style="color:#3D4752"></i>
<h3><span style="color: rgb(66, 66, 66);">Virtual POS</span></h3>
<p><span style="color: rgb(66, 66, 66);">Take control of payments at your retail location, just add a tablet, EverSwipe and go.</span></p>
</div><p><a class="btn btn-default center" href="#">VPOS Settings</a></p>
</div>
</div>

</div><!--End Feature:  POS settings-->


      </div><!--End col-md-4-->

</div><!-- END/.row-->



<div class="row" id="PageContentRow">
      
<div class="col-md-4">
        
<!--Begin Feature:  Mobile Payments Settings-->
<div class="Feature" style="width:100%;">

<div class="FeatureEditBar" style="display:none;">

<div style="float:right;">
<a title="Edit the settings for this page feature." onclick="admin.editFeature('F79203a533f4b', 'path=/smtp-server', '?id=F79203a533f4b&amp;path=/smtp-server', 'Html');return false;">Edit</a> - <a title="Remove this feature from the page." onclick="admin.deleteFeature('F79203a533f4b', 'path=/smtp-server');return false;">Delete</a>
</div>
<img src="../assets/app/img/textarea.png" alt="Text Area" title="Text Area" border="0"> Text Area - web hooks
</div>

<div class="panel panel-default">
<div class="panel-body">
<div style="min-height:140px;">
<i class="fa fa-mobile fa-5x" style="color:#245491"></i>
<h3><span style="color: rgb(66, 66, 66);">Mobile Settings</span></h3>
<p><span style="color: rgb(66, 66, 66);">The EverSwipe app is branded with your company logo and contact information.</span></p>
</div>
<p><a class="btn btn-default center" href="#">Go Mobile Now</a></p>
</div>
</div>

</div><!--End Feature:  - Mobile Payments-->

      </div><!--End col-md-4-->

      <div class="col-md-4">
        <!--Begin Feature: Shopping Cart Settings-->
<div class="Feature" style="width:100%;">

<div class="FeatureEditBar" style="display:none;">

<div style="float:right;">
<a title="Edit the settings for this page feature." onclick="admin.editFeature('F6e923bc1ec97', 'path=/product_management', '?id=F6e923bc1ec97&amp;path=/smtp-server', 'Html');return false;">Edit</a> - <a title="Remove this feature from the page." onclick="admin.deleteFeature('F6e923bc1ec97', 'path=/smtp-server');return false;">Delete</a>
</div>
<img src="../assets/app/img/textarea.png" alt="Text Area" title="Text Area" border="0">Text Area - Marketplace Settings
</div>
<div class="panel panel-default">
<div class="panel-body">
<div style="min-height:140px;">
<i class="fa fa-shopping-cart fa-5x" style="color:#714C73"></i>
<h3><span style="color: rgb(66, 66, 66);">Shopping Cart</span></h3>
<p><span style="color: rgb(66, 66, 66);">Easily add, edit and remove products, including stock changes and taxes.</span></p>
</div>
<p><a class="btn btn-default center" href="#">Configure Cart</a></p>
</div>
</div>


</div><!--End Feature: - Shopping Cart Settings-->

      </div><!--End col-md-4-->

      <div class="col-md-4">
        
<!--Begin Feature: Stock Manager Settings-->
<div class="Feature" style="width:100%;">

<div class="FeatureEditBar" style="display:none;" id="">

<div style="float:right;">
<a title="Edit the settings for this page feature." onclick="admin.editFeature('F2688abed2f7b', 'path=/smtp-server', '?id=F2688abed2f7b&amp;path=/smtp-server', 'Html');return false;">Edit</a> - 
<a title="Remove this feature from the page." onclick="admin.deleteFeature('F2688abed2f7b', 'path=/smtp-server');return false;">Delete</a>
</div>
<img src="../assets/app/img/features/textarea.png" alt="Text Area" title="Text Area" border="0">Text Area - Virtual POS Settingss
</div>
<div class="panel panel-default">
<div class="panel-body">
<div style="min-height:140px;">
<i class="fa fa-truck fa-5x" style="color:#993333"></i>
<h3><span style="color: rgb(66, 66, 66);">Stock Manager</span></h3>
<p><span style="color: rgb(66, 66, 66);">Manage your inventory. Update stock and purchases from almost anywhere.</span></p>
</div><p><a class="btn btn-default center" href="#">Manage Inventory</a></p>
</div>
</div>
</div>
</div>

</div><!--End Feature:  Shopping Cart settings-->

</div><!-- END/.row-->


</div><!-- END/#section stats clearfix -->

</div><!-- END/. content-wrapper -->

</div><!-- END/. update -->

</div><!-- END/. status-->

<?=$this->load->view(branded_view('cp/footer'));?>