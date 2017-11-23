<?

/* Default Values */

if (!isset($form)) {
	$form = array(
				'first_name' => '',
				'last_name' => '',
				'company' => '',
				'address_1' => '',
				'address_2' => '',
				'city' => '',
				'state' => '',
				'postal_code' => '',
				'country' => 'US',
				'suspended' => '0',
				'gmt_offset' => 'UM5',
				'phone' => '',
				'email' => '',
				'username' => '',
				'client_type' => '2'	
			);
} ?>
<?=$this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>'));?>




<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="widget-box">
<div class="widget-body">			
<div class="widget-main">
<div class="row">
				<div class="col-md-12">
					<div class="portlet light" id="form_wizard_1">
						<div class="portlet-title">
							<div class="caption">
								<span class="caption-subject theme-font bold uppercase">
			<i class="fa fa-magic"></i> Import User List <span class="step-title">  </span>
								</span>
							</div>
							<div class="tools">
								
							</div>
						</div>
						<div class="portlet-body form progress-demo">
<form class="form-horizontal" id="submit_form" method="post" action="<?=site_url($form_action);?>" novalidate="novalidate">
							
								<div class="form-wizard">
									<div class="form-body">
										
										<div class="tab-content">
											<div class="tab-pane active" id="tab1">
										<h3 class="block">Provide The User List </h3>
												<div class="form-group">
<label for="username" class="control-label col-md-3">Username <span class="required" aria-required="true">
													* </span>
													</label>
													<div class="col-md-4">
<input type="text" autocomplete="off" class="required form-control" id="username" name="username" value="<?=$form['username'];?>" />
							
														<span class="help-block">
														Provide a username for your merchant </span>
													</div>
												</div>
</div><!--/tab-->
			
										</div>
									</div>
									<div class="form-actions">
										<div class="row">
								<div class="col-md-offset-3 col-md-9">
			<a href="javascript:;" class="btn btn-lg btn-inverse button-previous disabled">
			<i class="m-icon-swapleft"></i> Back </a>
<a href="javascript:;" class="btn btn-primary btn-lg button-next">
				Continue <i class="m-icon-swapright m-icon-white"></i>
</a>
				
<button type="submit" name="go_client" class="btn btn-success btn-lg button-submit"ladda-button" data-style="expand-left" value="" /><span class="ladda-label">Add Client</span></button>

 Create Account <i class="fa fa-check"></i> </button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>



</div><!--/widget-body-->
</div><!--/widget-main-->
</div><!--/widget-box-->
</div><!--/col-lg-12-->
</div><!--/row-fluid-->

<script>

			// Bind normal buttons
			Ladda.bind( 'div:not(.progress-demo) button', { timeout: 2000 } );

			// Bind progress buttons and simulate loading progress
			Ladda.bind( '.progress-demo button', {
				callback: function( instance ) {
					var progress = 0;
					var interval = setInterval( function() {
						progress = Math.min( progress + Math.random() * 0.1, 1 );
						instance.setProgress( progress );

						if( progress === 1 ) {
							instance.stop();
							clearInterval( interval );
						}
					}, 200 );
				}
			} );

			// You can control loading explicitly using the JavaScript API
			// as outlined below:

			// var l = Ladda.create( document.querySelector( 'button' ) );
			// l.start();
			// l.stop();
			// l.toggle();
			// l.isLoading();
			// l.setProgress( 0-1 );

		</script> 
        

<script type="text/javascript">
$(function() {
	$('#submit_form').click(function(e){
	 	e.preventDefault();
	 	var l = Ladda.create(this);
	 	l.start();
	 	$.post("https://php-elektropay.rhcloud.com/clients/create", 
	 	    { data : data },
	 	  function(response){
	 	    console.log(response);
	 	  }, "json")
	 	.always(function() { l.stop(); });
	 	return false;
	});
});
</script>

<?=$this->load->view(branded_view('cp/footer'));?>