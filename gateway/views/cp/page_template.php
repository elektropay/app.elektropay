<?=$this->load->view(branded_view('cp/header'), array('head_files' => '
<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>
<link rel="stylesheet" type="text/css" href="' . branded_include('css/style-shop.css') . '" />
<link rel="stylesheet" type="text/css" href="' . branded_include('css/geostyles.css') . '" />
<script type="text/javascript" src="' . branded_include('js/form.transaction.js') . '"></script>')); ?>

<!-- END PAGE HEADER-->

<!-- BEGIN PAGE -->
<div class="row">

       <h2 class="page-title">Page Template Examples <small pull-right><strong class="date pull-right"><div class="actions">
			<a href="<?=site_url('/transactions');?>" class="btn btn-info btn-circle">
								<i class="fa fa-cog"></i>
								<span class="hidden-480">
								Example </span>
								</a>
								<div class="btn-group">
				<a class="btn btn-default btn-circle" href="javascript:;" data-toggle="dropdown">
									<i class="fa fa-share"></i>
									<span class="hidden-480">
									Example2 </span>
									<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="javascript:;">
											1st Selection </a>
										</li>
										<li>
											<a href="javascript:;">
											2nd Selection</a>
										</li>
<li>
											<a href="javascript:;">
											3rd Selection</a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="javascript:;">
											Import/Print Whatever </a>
										</li>
									</ul>
								</div>
</div>

</strong></small></h2>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
                                           
<!-- BEGIN PANEL-->
<div class="panel panel-default panel-border panel-shadow">
<div class="panel-body">

       <!-- BEGIN CONTENT -->
<div class="row ecommerce">







</div><!--/.row ecommerce-->
<!-- END CONTENT -->
    
</div><!-- END PANEL-BODY -->
</div> <!-- END PANEL DEFAULT -->
</div><!--/.col-md-12-->
</div><!--/.row-->


</div><!--/.row-->

<?=$this->load->view(branded_view('cp/footer'));?>

<!-- richard -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script src="https://everpayinc.com/test/assets/app_v2/assets/js/formmapper/formmapper.js"></script>
<script>
  $(function(){ 

       $("#address_1").formmapper({details:"div#shipping-address-content"}); 

        });
</script>
<!-- richard -->