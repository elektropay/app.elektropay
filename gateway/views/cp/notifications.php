<?=$this->load->view(branded_view('cp/header'));?>


 <header class="section-header margin-bottom-20">
<div class="container-960 center">
<div class="copywriting">
<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	
<h1 class="margin-none">Your <strong class="text-primary"> Notifications</strong></h1>
</div>
</div>
             </div>
             </header>

<div class="row-fluid">

<div class="widget-main">
<div class="portlet light">
<div class="portlet-title">
</div>
<div class="portlet-body">

<div class="row">

<div class="col-md-12">
<div class="activity_log">
	
<div class="general-item-list">
									<div class="item">
										<div class="item-head">
											<div class="item-details">
<? if (!empty($log)) { ?>
<table class="table table-striped"> 
<thead></thead> 
<tbody> 
<? foreach ($log as $line) { ?>
		<tr> <td><?=$line;?></td></tr> 
	<? } ?>
</tbody> 
</table> 

<? } else { ?>
 <p class="lead soft">No recent activity.</p>
<? } ?>

</div><!-- item-details -->
</div><!-- item-head -->
</div><!-- item-->
</div><!-- general-item-list -->


</div><!-- ACTIVITY LOG -->


</div><!-- END PORTLET BODY -->
</div><!-- END PORTLET LIGHT -->
</div><!-- END WIDGET MAIN -->

</div><!-- END COL-MD-12 -->
</div><!-- END ROW -->

</div><!-- END ROW-FLUID -->






<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<!-- END JAVASCRIPTS -->

<?=$this->load->view(branded_view('cp/footer'));?>