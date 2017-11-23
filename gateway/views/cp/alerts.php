<?=$this->load->view(branded_view('cp/header'));?>


 <header class="section-header">
<div class="container-960 center">
<div class="copywriting">
<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	
<h1 class="margin-none"> <strong class="text-primary"> Notifications</strong></h1>
</div>
</div>
             </div>
             </header>

<div class="row-fluid">

<div class="widget-main">
<div class="portlet light">
<div class="portlet-title">
	<div class="caption caption-md">
								<i class="icon-bar-chart theme-font hide"></i>
					<span class="caption-subject theme-font bold uppercase">Recent Payment Activity</span>
								<span class="caption-helper"></span>
        </div>
							<div class="inputs">
								
							</div>
</div>
<div class="portlet-body">
<div class="activity_log">
	
<div class="general-item-list">
									<div class="item">
										<div class="item-head">
											<div class="item-details">

<? if (!empty($log)) { ?>
	
<? foreach ($log as $line) { ?>
		

<span class="item-status"><?=$line;?> </span>
	

<? } ?>


<? } else { ?>
 

<p class="lead soft">No recent payment activity.</p>


<? } ?>

</div><!-- item-details -->
</div><!-- item-head -->
</div><!-- item-->
</div><!-- general-item-list -->


</div><!-- ACTIVITY LOG -->


</div><!-- END PORTLET BODY -->
</div><!-- END PORTLET LIGHT -->
</div><!-- END WIDGET MAIN -->
</div><!-- END ROW-FLUID -->






<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<!-- END JAVASCRIPTS -->

<?=$this->load->view(branded_view('cp/footer'));?>