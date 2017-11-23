<?=$this->load->view(branded_view('cp/header')); ?>
<style>


.btn-vertical-slider{ margin-left:35px; cursor:pointer;}
a {  cursor:pointer;}
.carousel.vertical .carousel-inner .item {
  -webkit-transition: 0.6s ease-in-out top;
     -moz-transition: 0.6s ease-in-out top;
      -ms-transition: 0.6s ease-in-out top;
       -o-transition: 0.6s ease-in-out top;
          transition: 0.6s ease-in-out top;
}

 .carousel.vertical .active {
  top: 0;
}

 .carousel.vertical .next {
  top: 100%;
}

 .carousel.vertical .prev {
  top: -100%;
}

 .carousel.vertical .next.left,
.carousel.vertical .prev.right {
  top: 0;
}

 .carousel.vertical .active.left {
  top: -100%;
}

 .carousel.vertical .active.right {
  top: 100%;
}

 .carousel.vertical .item {
    left: 0;
}?


.form .form-actions {
padding: 10px 10px;
margin: 0;
background-color: transparent;
border-top: 1px solid #e5e5e5;
}

div.gateway_listing p.description {
  clear: both;
  margin-left: 22px;
  margin-top: 10px;
  margin-bottom: 10px;
}

div.gateway_listing {
  background-color: #f0f0f0;
  padding: 10px;
  margin-bottom: 10px;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  padding: 20px;
}

</style>



    <div class="content-wrapper">
   <div class="row">
        <div class="stats clearfix">
<div class="row"> 

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 

<header class="section-header">
              <div class="container-960 center">
<div class="copywriting">
<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	
<h1 class="margin-none">Select <strong class="text-primary"> Gateway</strong></h1>
</div>
</div>
             </div>
</header>

<div class="panel panel-default">

<? if ($this->user->Get('client_type_id') == '3') { ?>
<div>
<div class="container-fluid" style="margin:10px;">
	<div class="row well"> 
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div id="myCarousel" class="vertical-slider carousel vertical slide col-md-12" data-ride="carousel">
            
<form class="form" id="form_email" method="post" action="<?=site_url('settings/new_gateway_details');?>">

<div class="row">
                <div class="col-md-4">
                    <span data-slide="next" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-up "
                        style="font-size: 30px"></span>  
                </div>
                <div class="col-md-8"> 
                </div>
            </div>
            <br />
            <!-- Carousel items -->
            <div class="carousel-inner">

                <div class="item active">

	<? foreach ($gateways as $gateway) { ?>
                    <div class="row">

<div class="col-xs-6 col-sm-4 col-md-4">
<a href="<?=$gateway['purchase_link'];?>"> 
<img src="//placehold.it/150x150" class="thumbnail" alt="Image" /></a>
<h4><input type="radio" class="required" name="external_api" id="external_api" value="<?=$gateway['class_name'];?>" />&nbsp;<?=$gateway['name'];?>
</h4>

</div>

<div class="col-xs-6 col-sm-8 col-md-8 gateway_listing">
<span class="gateway_listing">
                <p class="description"><?=$gateway['description'];?></p>
		<span class="label label-default monthly_fee"><?=$gateway['monthly_fee'];?> Monthly Fee</span>
		<span class="label label-default setup_fee"><?=$gateway['setup_fee'];?> Setup Fee</span>
		<span class="label label-default transaction_fee"><?=$gateway['transaction_fee'];?> Transaction Fee</span>
		<span style="clear:both; height: 20px;"></span>
<br />
<div class="clearfix" style="clear:both; height: 20px;"></div>

<? if (!empty($gateway['purchase_link'])) { ?> 

<div class="row margin-top-20">
<div class="col-md-offset-3 col-md-6">
<a class="btn-primary btn-md center purchase" href="<?=$gateway['purchase_link'];?>"> Open an account </a>
</div>
</div>
<? } ?>
	
</span>
	              </div>


                    </div>
                    <!--/row-fluid-->
<? } ?>
          
                </div><!--/item-->
            </div>

            <div class="row">
                <div class="col-md-4">
                    <span data-slide="prev" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-down"
                        style="color: Black; font-size: 30px"></span>
                </div>
                <div class="col-md-8">
                </div>
            </div> <!--/row-->

        </div>
</div>
</div>
<div class="form-actions center">
<div class="clearfix center" style="height: 20px;"></div>
<input type="submit" class="btn btn-success btn-lg center" name="go_gateway" value="Continue setting up gateway" />
</div>

</form>
</div>

<? } elseif ($this->user->Get('client_type_id') == '1') { ?>
<p class="warning"><span>As an <b><?=$this->user->Get('client_type');?></b>, you have the ability to Create, Update, Suspend, Unsuspend,
and Delete client accounts across the entire system.  These accounts can be Service Provider accounts (with permissions to create End User accounts),
or standalone End User accounts which do not have Client creation privileges.  Please do so with care.</span></p>
<? } ?>



<table class="table"> 
<thead> 
<tr>


<div class="portlet-body">
<div class="panel-body">
<form class="form" id="form_email" method="post" action="<?=site_url('settings/new_gateway_details');?>">
<fieldset>
	<legend></legend>
	<label for="external_api" style="display:none">Gateway Type</label>
	<? foreach ($gateways as $gateway) { ?>
	<div class="gateway_listing">
		<h2><input type="radio" class="required" name="external_api" id="external_api" value="<?=$gateway['class_name'];?>" />&nbsp;<?=$gateway['name'];?><? if (!empty($gateway['purchase_link'])) { ?> <a class="purchase" href="<?=$gateway['purchase_link'];?>">Apply for an account now.</a><? } ?></h2>
		<p class="description"><?=$gateway['description'];?></p>
		<div class="monthly_fee"><?=$gateway['monthly_fee'];?><h3>Monthly Fee</h3></div>
		<div class="setup_fee"><?=$gateway['setup_fee'];?><h3>Setup Fee</h3></div>
		<div class="transaction_fee"><?=$gateway['transaction_fee'];?><h3>Transaction Fee</h3></div>
		<div style="clear:both"></div>
	
</div>
	
<? } ?>

</fieldset>




<div class="form-actions">
<div class="row margin-top-20">
<div class="col-md-offset-3 col-md-6">

<div class="clearfix" style="height: 20px;"></div>
<input type="submit" class="btn btn-success btn-lg btn-block center" name="go_gateway" value="Continue setting up gateway" />

</div>
</div>
</div>


</form>


</div><!--/portlet-->
</div><!--/widget-->
</div><!--/col-md-8-->

<div class="col-md-4"></div><!--/col-md-4-->

</div><!--/row-->
</tr> </tbody> </table> </div> </div> </div>


</div><!--/row-->


</div><!--/END .chart-->

</div><!--/END .row-->

</div><!--/END .content-wrapper-->


<!--START JAVASCRIPTS-->


<script type="text/javascript">

$(document).ready(function () {

    $('.btn-vertical-slider').on('click', function () {
        
        if ($(this).attr('data-slide') == 'next') {
            $('#myCarousel').carousel('next');
        }
        if ($(this).attr('data-slide') == 'prev') {
            $('#myCarousel').carousel('prev')
        }

    });
});
	</script>

<!--/END JAVASCRIPTS-->
<?=$this->load->view(branded_view('cp/footer'));?>