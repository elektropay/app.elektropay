<?=$this->load->view(branded_view('cp/header'));?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script type="text/javascript" src="<?=branded_include('assets/global/plugins/jquery-migrate-1.2.1.min.js');?>"></script>

<!-- BEGIN PLUGINS USED BY X-EDITABLE -->
<link href="<?=branded_include('assets/global/plugins/select2/select2.css');?>" rel="stylesheet" type="text/css" media="screen" />
<link href="<?=branded_include('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css');?>" rel="stylesheet" type="text/css" media="screen" />
<link href="<?=branded_include('assets/global/plugins/bootstrap-datepicker/css/datepicker.css');?>" rel="stylesheet" type="text/css" media="screen" />
<link href="<?=branded_include('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css');?>" rel="stylesheet" type="text/css" media="screen" />
<link href="<?=branded_include('assets/global/plugins/bootstrap-datetimepicker/css/datetimepicker.css');?>" rel="stylesheet" type="text/css" media="screen" />
<link href="<?=branded_include('assets/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css');?>" rel="stylesheet" type="text/css" media="screen" />
<link href="<?=branded_include('assets/global/plugins/bootstrap-editable/inputs-ext/address/address.css');?>" rel="stylesheet" type="text/css" media="screen" />
<!-- END PLUGINS USED BY X-EDITABLE -->


<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script type="text/javascript" src="<?=branded_include('assets/global/scripts/metronic.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/admin/layout/scripts/layout.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('assets/admin/layout/scripts/quick-sidebar.js');?>"></script>
<script>
jQuery(document).ready(function() {
// initiate layout and plugins
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init() // init quick sidebar
FormEditable.init();
});
</script>
<!-- END PAGE LEVEL SCRIPTS -->
<?=$this->load->view(branded_view('cp/footer'));?>