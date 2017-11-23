<?=$this->load->view(branded_view('cp/header'));?>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').dataTable();
} );
</script>
<header class="section-header"><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
              <div class="container-960 center">
<div class="copywriting">
<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	
<h1 class="margin-none">Menufacturers</strong></h1>
<a class="btn btn-success btn-sm pull-right" style="color:#fff; margin-right:30px;" href="<?=site_url('/manufacturers/add');?>"><span class="fa fa-plus-circle"></span> New Manufacturer </a>
</br>
</div>
</div>
             </div>
             </header>

<div class="widget-body">			
<div class="widget-main">
<div class="portlet">
<!-- BEGIN PORTLET-->
<div class="portlet-body">

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="99%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                 <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </tfoot>
 
        <tbody>
        	<?php
if (!empty($this->dataset->data)) {
	foreach ($this->dataset->data as $row) {
	?>
		<tr>
			
			<td><?=$row['id'];?></td>
			<td><?=$row['name'];?></td>
      <td class="options">
        <a class="btn btn-primary btn-xs" href="<?=site_url('manufacturers/edit/' . $row['id']);?>"><span class="fa fa-edit"></span> edit</a>
      </td>
		</tr>
	<?php
	}
}?>

 </tbody>
    </table>


</div><!--/portlet-->
</div><!--/portlet-body-->

</div><!--/widget-body-->
</div><!--/widget-main-->




</div><!--/widget-body-->
</div><!--/widget-main-->
</div><!--/widget-box-->
</div><!--/col-lg-12-->
</div><!--/row-fluid-->

<? //=$this->load->view(branded_view('cp/footer'));?>
<script type="text/javascript" src="<?=branded_include('js/jquery-migrate-1.2.1.min.js');?>"></script>

<script type="text/javascript" src="<?=branded_include('js/jquery.slimscroll.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/jquery.blockui.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/jquery.cokie.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/uniform/jquery.uniform.min.js');?>"></script>