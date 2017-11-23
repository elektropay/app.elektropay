<?= $this->load->view(branded_view('cp/header')); ?>
<style>
	
td.filter select { width: 25px }

.label-success, .label.label-success {
    font-size: 12px;
    padding: 2px 4px 2px 4px;
    line-height: 15px;
#45b6af!important;
border-radius:4px;
}

div#section {
  border: 1px solid #eee;
  margin-left: 1px;
  margin-right: 1px;
  padding-left: 5px;
padding-top:10px;  
padding-right: 5px;
padding-bottom: 10px!important;
  min-height: 580px;
  position: relative;
  border-radius: 10px;
  z-index: 20;
  -moz-border-bottom-right-radius: 10px;
  border-bottom-right-radius: 10px;
  -webkit-border-bottom-right-radius: 10px;
  -webkit-font-smoothing: subpixel-antialiased;
margin-bottom:20px;
top:10px;
}

.table .btn {
    margin-top: 0px;
    margin-left: 0px;
    margin-right: 2px;
    margin-left: 10px;
}

.dataTables_filter (
float: right;
}

#dataTables_filter (
float: right!important;
}

.dataTables_length {
float: left;
}

#dataTables_length {
float: left!important;
}

.close-button {
  background-repeat: no-repeat !important;
  text-indent: -1px;
  outline: none;
  position: relative!important;
  display: inline-block;
  margin-top: 0px;
  margin-right: 1px;
  width: 24px;
  height: 24px;
  background-image: url('https://everpayinc.com/assets/app/images/x.png');
  cursor: pointer;
  float: right!important;
  margin-right: -20px!imporatant;
}

.table .btn {
    margin-top: 0px;
    margin-left: 0px;
    margin-right: 5px;
    margin-left: 5px;
    padding: 5px!important;
}

</style>

<div id="reports">

<div class="content-wrapper">


<div id="section">
<div class="row users-list">
<div class="col-md-12">

<?php if (!empty($this->dataset->data)) : ?>	

<?=$this->dataset->TableHead();?>
            
<tbody>
			
<div class="row-fluid user">             

	<?php foreach ($this->dataset->data as $row) :?>

		<tr class="items-list">
			<td><input type="checkbox" name="check_<?=$row['id'];?>" value="1" class="action_items" /></td>
			<td><?=$row['id'];?></td>
			<td><?=$row['trigger'];?></td>
			<td><?=$row['to_address'];?></td>
			<td><?=$row['email_subject'];?></td>
			<td><? if ($row['is_html'] == 0) { ?>plaintext<? } else { ?>HTML<? } ?></td>
			<td><? if (isset($plans[$row['plan']])) { ?><?=$plans[$row['plan']];?><? } ?></td>
			<td class="options"><a class="btn btn-primary btn-circle"style="padding: 5px;" href="<?=site_url('settings/edit_email/' . $row['id']);?>"><i class="fa fa-pencil"></i></a></td>
		</tr>


<?php endforeach; ?>

</div>
</tbody>


<?=$this->dataset->TableClose();?>
	
<?php else : ?>
<div class="empty margin-top-0">
<br />
<div id="no-data-view">
 <div class="jumbotron jumbotron-icon">
<i class="fa fa-envelope fa-5"></i>
</div>
    <h2>Email Templates</h2>
 <p>You haven't created any email templates.  <a href="//everpayinc.com/docs/emails.html" target="_blank" class="arrow">Learn more</a></p>
    
    <div class="controls">
        <p>
 <a id="create" href="<?=site_url('/settings/new_email');?>" class="btn btn-primary btn-lg"><span><i class="fa fa-plus"></i> Create your first template</span></a>
        </p>
    </div>
    
</div>
</div>

<?php endif; ?>

 </div><!--/.col-md-12-->    
</div><!--/.row user-list-->
</div><!--/#section-->
  
</div>

 </div><!--/content-wrapper-->
</div><!--/#reports-->
 

<?=$this->load->view(branded_view('cp/footer'));?>