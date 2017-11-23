<?=$this->load->view(branded_view('cp/header'));?>

<div id="latest-activity" class="row-fluid">

<div class="content-wrapper">
<div class="chart clearfix">

	<h3>
		
		<small></small>
	</h3>
	<div class="moment first">
		<div class="row event clearfix">
			<div class="col-sm-1">
				<div class="icon">
					<i class="fa fa-comment"></i>
				</div>
			</div>
			<div class="col-sm-11 message">
				<? if (!empty($log)) { ?>
                            <div class="content">
			 <? foreach ($log as $line) { ?>	
<div class="item-details" style="padding:5px;"><i class="fa fa-user-plus" style="color: #CBD3DB;"></i> <?=$line;?></div>
                                 <? } ?>

<? } else { ?>
 <p class="lead center" style="padding-left:10px;">You have no Events or Webhooks to display.</p>
<? } ?>
</div><!-- END content -->
			
	</div><!-- END /.col-sm-11 message -->
</div><!-- END /.row event clearfix-->
</div><!-- END /.moment first -->

</div><!-- END /.content-wrapper -->
</div><!-- END ROW -->

</div><!-- END /.col-md-12 -->

</div><!-- END ROW -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<!-- END JAVASCRIPTS -->

<?=$this->load->view(branded_view('cp/footer'));?>