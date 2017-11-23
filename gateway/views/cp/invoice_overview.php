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
	<!-- Imported styles on this page -->
	<link href="<?=branded_include('js/multiselect/css/multi-select.css');?>" rel="stylesheet" type="text/css" media="screen" />
	
	<div class="page-title">
		Invoice <strong></strong>
	</div>
	<div class="options pull-right">
		<a href="#"><i class="fa fa-print"></i> Print</a>
		<a href="#"><i class="fa fa-download"></i> Download</a>
	</div>
</div>
</div><!--/.menu-bar-->
</div><!--/.menu-bar-->

<h1> Invoices Page </h1>






































<?=$this->load->view(branded_view('cp/footer'));?>