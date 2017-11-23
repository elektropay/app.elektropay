<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?=$this->config->item('server_name');?>  | Verify Your Account</title>
	<link href="<?=branded_include('css/universal.css');?>" rel="stylesheet" type="text/css" media="screen" />

<link rel="shortcut icon" href="https://db.tt/xketQSS3">

                             <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

   <link href="https://db.tt/9DBggTlu" rel="stylesheet" type="text/css" media="screen" />

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">	

    <link href="<?=branded_include('css/pwdwidget.css');?>" rel="stylesheet" type="text/css" />
  
    <link href="<?=branded_include('css/animate.min.css');?>" rel="stylesheet" type="text/css" media="screen" />

    <link href="<?=branded_include('css/prettyPhoto.css');?>" rel="stylesheet" type="text/css" media="screen" />

    <!-- Custom styles for this template -->

    <link href="https://db.tt/6uHbTljO" rel="stylesheet" type="text/css" media="screen" />

<link href="<?=branded_include('css/components-rounded.css');?>" id="style_components" rel="stylesheet" type="text/css" />

<link href="<?=branded_include('css/animate.min.css');?>" rel="stylesheet" type="text/css" />
	
<link href="<?=branded_include('css/everpay.min.css');?>" rel="stylesheet" type="text/css" media="screen" />	
		

	                         <!-- GOOGLE FONTS -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,700,800' rel='stylesheet' type='text/css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript" src="<?=branded_include('js/universal.js');?>"></script>


<style type="text/css">

#username, #password, #code {
float: left;
border-radius: 3px!important;
-moz-border-radius: 3px!important;
-webkit-border-radius: 3px!important;
border: 1px solid #999;
padding-left: 5px;
font-size: 18px;
height: 44px;
}


#login_form {
width:320px!important;
}


a:hover {
text-decoration: none!important;
text-transform: none;
}

body {
  position: inherit;
  -webkit-transition: all 0.15s ease-out 0;
  -moz-transition: all 0.15s ease-out 0;
  transition: all 0.15s ease-out 0;
  background: transparent!important; 
}

</style>

</head>
<body>
<!-- NAVBAR ================================================== -->
	
<span id="ajax-loader"></span>
			<div></div>
<span id="back-to-top"></span>
<nav class="navbar navbar-inverse navbar-fixed-top page-header">
<div class="page-header-top">

<li class="dropdown dropdown-extended dropdown-dark dropdown-tasks" id="header_menu_bar">
						<span class=""></span>
						</a>
   <div class="dropdown dropdown-extended dropdown-dark">
      <a href="#" class="dropdown-toggle navbar-menu" data-toggle="dropdown">
        
        <span class=""><label for="sidebartoggler" class="toggle">&#8803; </i></label></span>
      </a>
						
      <ul class="dropdown-menu dropdown-menu-default dropdown-menu-list scroller" style="top:70px;">
	<li><?=$this->navigation->Output();?></li>
	<li><a href="//developers.everpayinc.com/">Developer Portal</a></li>
	<li><a href="<?=$this->config->item('support_url');?>"><i class="ace-icon fa fa-life-ring"></i> Help Center</a></li>
	<li><a href="//marketplace.everpayinc.com/">Add-ons</a></li>
        <li class="divider hidden-md hidden-lg"></li>
        <li class="hidden-md hidden-lg"><a class="nav-log-in" href="<?=site_url('account/logout');?>">
				<i class="ace-icon fa fa-key"></i> Log logout</a></li>
      </ul>

					<div class="droddown dropdown-separator">
						<span class="separator"></span>
					</div>
</div>
</li>

      <div class="container">
   <div class="navbar-header">
	   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
	      <!-- Logo -->
<div class="page-logo" style="margin-top: 8px; margin-left: 30px;">
<a class="navbar-brand" href="/"><img src="https://db.tt/JJyPoUJX" width="40%"></a>
</div>
        </div>
        <div id="navbar" class="navbar-collapse collapse bs-navbar-collapse navbar-right" role="navigation">
<div class="top-menu">
            <ul class="nav navbar-nav">
	         
	      
	       </ul>
	      <ul class="nav navbar-nav navbar-right header-button pull-right">
	  
  <li>
<p></p>
	          <br><br>
	         </li>

<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <img alt="" class="img-circle" src="<?=branded_include('images/customer.png');?>" height="22" width="32">
                        <span class="username username-hide-mobile"> <?=$this->user->Get('username')?></span>

<i class="ace-icon fa fa-caret-down"></i>
						</a>

						<ul class="dropdown-menu dropdown-menu-default dropdown-menu-list scroller">
							<li>
			<a id="account_link" href="<?=site_url('transactions/');?>">
				<i class="ace-icon fa fa-shopping-cart"></i>
				My Orders
			</a>
		</li>

<li class="divider"></li>
		<li>
			<a href="javascript:;">
				<i class="ace-icon fa fa-credit-card"></i>
				Start Selling
			</a>
		</li>

<li class="divider"></li>

	<li>
			<a id="account_link" href="<?=site_url('account');?>">
				<i class="ace-icon fa fa-user"></i>
				My Profile
			</a>
		</li>
		
<li class="divider"></li>
<li>
			<a href="<?=site_url('settings/api');?>">
				<i class="ace-icon fa fa-signal"></i>
				API Settings
			</a>
		</li>

	<li class="divider"></li>

<li>
			<a href="<?=site_url('settings/gateways');?>">
				<i class="ace-icon fa fa-cog"></i>
				Settings
			</a>
		</li>

	<li class="divider"></li>

	<li><a id="support" href="<?=$this->config->item('support_url');?>"><i class="ace-icon fa fa-life-ring"></i>   Support</a></li>

		<li class="divider"></li>
		<li>
			<a href="<?=site_url('account/logout');?>">
				<i class="ace-icon fa fa-key"></i>
				Logout
			</a>
		</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
	      </ul>
</div>
        </div><!--/.nav-collapse -->
      </div>
      </div>
    </nav>

<div class="row">
 <div id="wrapper">
 <div class="clearfix" style="height:100px;"></div>


	 <!-- Start SignUp Block
	================================================== -->
	 <section id="slider" class="section"style="height: 560px;">	

	<div id="notices"><?=get_notices();?></div>


<div class="body-container-wrapper">
    <div class="body-container container-fluid">

        <div class="row-fluid-wrapper row-depth-1 row-number-1 ">
        <div class="row-fluid ">
<div class="col-md-12 widget-span widget-type-cell page-center" style="" data-widget-type="cell" data-x="0" data-w="12">

                <div class="row-fluid-wrapper row-depth-1 row-number-2 ">
                <div class="row-fluid">
                    <div class="col-md-4" style="margin-right:20px;">

                        <div class="row-fluid-wrapper row-depth-2 row-number-1">
                        <div class="row-fluid">
                            <div class="col-md-12 widget-span widget-type-rich_text " style="" data-widget-type="rich_text" data-x="0" data-w="12">
                                <div class="cell-wrapper layout-widget-wrapper">
                                    
                                </div><!--end layout-widget-wrapper -->
                            </div><!--end widget-span -->
                        </div><!--end row-->
                        </div><!--end row-wrapper -->
                        <div class="row-fluid-wrapper row-depth-2 row-number-2">
                        <div class="row-fluid ">
                            <div class="col-md-12 widget-span widget-type-cell" style="" data-widget-type="cell" data-x="0" data-w="12">

                                <div class="row-fluid-wrapper row-depth-3 row-number-1 ">
                                <div class="row-fluid">
                                    <div class="col-md-12 widget-span widget-type-rich_text " style="" data-widget-type="rich_text" data-x="0" data-w="12">
                                        <div class="cell-wrapper layout-widget-wrapper">
                                            <span id="hs_cos_wrapper_module_13885056419142322" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text" style="" data-hs-cos-general-type="widget" data-hs-cos-type="rich_text">

<p dir="ltr"><span><span id="docs-internal-guid-875aa4c5-8daa-4795-4463-2c0f48edc0e1"></span></span></p></span>
                                        </div><!--end layout-widget-wrapper -->
                                    </div><!--end widget-span -->
                                </div><!--end row-->
                                </div><!--end row-wrapper -->
                                <div class="row-fluid-wrapper row-depth-3 row-number-2 ">
                                <div class="row-fluid ">
                                    <div class="col-md-12 widget-span widget-type-rich_text " style="" data-widget-type="rich_text" data-x="0" data-w="12">
                                        <div class="cell-wrapper layout-widget-wrapper">
                                            <span id="hs_cos_wrapper_module_14019991867393411" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text" style="" data-hs-cos-general-type="widget" data-hs-cos-type="rich_text"></span>
                                        </div><!--end layout-widget-wrapper -->
                                    </div><!--end widget-span -->
                                </div><!--end row-->
                                </div><!--end row-wrapper -->
                                <div class="row-fluid-wrapper row-depth-3 row-number-3 ">
                                <div class="row-fluid ">
                                    <div class="col-sm-12 widget-span widget-type-raw_html " style="" data-widget-type="raw_html" data-x="0" data-w="12">
                                        <div class="cell-wrapper layout-widget-wrapper">
                                            <span id="hs_cos_wrapper_module_14032080191272590" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_raw_html" style="" data-hs-cos-general-type="widget" data-hs-cos-type="raw_html"></span>
                                        </div><!--end layout-widget-wrapper -->
                                    </div><!--end widget-span -->
                                </div><!--end row-->
                                </div><!--end row-wrapper -->
                            </div><!--end widget-span -->
                    </div><!--end row-->
                    </div><!--end row-wrapper -->
                </div><!--end widget-span -->
           <div class="col-md-4 widget-span widget-type-form lp-form" style="background-color: #fff; padding: 36px 28px; border: 1px solid #ECEBE5; margin-bottom: 36px;width:360px!important; margin-right:auto 0px;" margin-left:40px ;" data-widget-type="form" data-x="8" data-w="4">
                <div class="cell-wrapper layout-widget-wrapper">
<span id="hs_cos_wrapper_module_13885066546126190" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_form" style="" data-hs-cos-general-type="widget" data-hs-cos-type="form">

<div id="hs_form_target_module_13885066546126190">

<form id="contactform" class="hs-form stacked hs-custom-form" method="post" action="<?=site_url('dashboard/two_step');?>">
 <div class="form" style="width:300px;">
             <p>
<div class="contact">
  <input type="text" id="code" name="code" class="form-control" placeholder="Verification Code">
<div class="clearfix"></div>
</div>
<div class="col-md-8">
<div class="checkbox">
    <label>
    <input type="checkbox" id="remember" name="remember" style="font-size:10px; display:inline-block !important;"><span style="font-size:10px;color:#444; margin-top:4px;"> Remember This Device</span>
<p>
    </label>
  </div>
  </div>
<div class="clearfix"></div>
<div class="form-group" style="text-align:center;">
<input id="submit" type="submit" name="submit_button" value="Submit" class="btn btn-success btn-lg" />
&nbsp;&nbsp;&nbsp;
<input id="resend" type="submit" name="submit_button" value="Resend Code" class="btn btn-info btn-lg" />
</div>
		</form>

</div>


</span>
                </div><!--end layout-widget-wrapper -->
            </div><!--end widget-span -->
        </div><!--end row-->
        </div><!--end row-wrapper -->
    </div><!--end widget-span -->


</div><!--end row-->
</div><!--end row-wrapper -->


<div class="col-md-4">

                        <div class="row-fluid-wrapper row-depth-2 row-number-1">
                        <div class="row-fluid">
                            <div class="col-md-12 widget-span widget-type-rich_text " style="" data-widget-type="rich_text" data-x="0" data-w="12">
                                <div class="cell-wrapper layout-widget-wrapper">
                                    
                                </div><!--end layout-widget-wrapper -->
                            </div><!--end widget-span -->
                        </div><!--end row-->
                        </div><!--end row-wrapper -->
                        <div class="row-fluid-wrapper row-depth-2 row-number-2">
                        <div class="row-fluid ">
                            <div class="col-md-12 widget-span widget-type-cell" style="" data-widget-type="cell" data-x="0" data-w="12">

                                <div class="row-fluid-wrapper row-depth-3 row-number-1 ">
                                <div class="row-fluid ">
                                    <div class="col-md-12 widget-span widget-type-rich_text " style="" data-widget-type="rich_text" data-x="0" data-w="12">
                                        <div class="cell-wrapper layout-widget-wrapper">
                                            <span id="hs_cos_wrapper_module_13885056419142322" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text" style="" data-hs-cos-general-type="widget" data-hs-cos-type="rich_text">

<p dir="ltr"><span><span id="docs-internal-guid-875aa4c5-8daa-4795-4463-2c0f48edc0e1"></span></span></p></span>
                                        </div><!--end layout-widget-wrapper -->
                                    </div><!--end widget-span -->
                                </div><!--end row-->
                                </div><!--end row-wrapper -->
                                <div class="row-fluid-wrapper row-depth-3 row-number-2 ">
                                <div class="row-fluid ">
                                    <div class="col-md-12 widget-span widget-type-rich_text " style="" data-widget-type="rich_text" data-x="0" data-w="12">
                                        <div class="cell-wrapper layout-widget-wrapper">
                                            <span id="hs_cos_wrapper_module_14019991867393411" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text" style="" data-hs-cos-general-type="widget" data-hs-cos-type="rich_text"></span>
                                        </div><!--end layout-widget-wrapper -->
                                    </div><!--end widget-span -->
                                </div><!--end row-->
                                </div><!--end row-wrapper -->
                                <div class="row-fluid-wrapper row-depth-3 row-number-3 ">
                                <div class="row-fluid ">
                                    <div class="col-sm-12 widget-span widget-type-raw_html " style="" data-widget-type="raw_html" data-x="0" data-w="12">
                                        <div class="cell-wrapper layout-widget-wrapper">
                                            <span id="hs_cos_wrapper_module_14032080191272590" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_raw_html" style="" data-hs-cos-general-type="widget" data-hs-cos-type="raw_html"></span>
                                        </div><!--end layout-widget-wrapper -->
                                    </div><!--end widget-span -->
                                </div><!--end row-->
                                </div><!--end row-wrapper -->
                            </div><!--end widget-span -->

                    </div><!--end row-->
                    </div><!--end row-wrapper -->
                </div><!--end widget-span -->
      




</div><!--end row-->
</div><!--end row-wrapper -->

    </div><!--end body -->
	</section>
	<!--  ==================================================
	End SignUp Blcok -->
	
<div class="clearfix" height:40px;"></div>

<!-- Footer================================================== -->
	
      <div class="row">

	<footer class="footer">
      <div class="container">
   <p class="text-muted small">&COPY; <?php echo date('Y'); ?>  Everpay Corporation - All Rights Reserved.</p>
</div>
    </footer>
	
</div>

<!-- ==================================================
	End Footer Block -->
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

	<!-- JQuery v1.11.1 -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<!-- Modernizr -->
	<script src="//everpayinc.com/assets/dist/theme/scripts/modernizr.custom.76094.js"></script>
	 
    <script src="//everpayinc.com/assets/js/back-to-top.js" type="text/javascript"></script>

	<!-- LESS 2 CSS -->
	<script src="//everpayinc.com/assets/dist/theme/scripts/less-1.3.3.min.js"></script>
    <!-- END CORE PLUGINS -->

  <!-- Core plugins BEGIN (required only for current page) -->
  <script src="//everpayinc.com/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
<!-- pop up -->
  <script src="//everpayinc.com/assets/global/plugins/jquery.easing.js"></script>
  <script src="//everpayinc.com/assets/frontend/onepage/scripts/jquery.nav.js"></script>
  <!-- Core plugins END (required only for current page) -->

  <!-- Global js END -->

</body>
</html>