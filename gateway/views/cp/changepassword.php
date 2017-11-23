<?=$this->load->view(branded_view('cp/header') );
error_reporting(0);?>
<div class="display-table-cell min-height-right">
	<div class="container header-title ">
		<h1><i class="icon-user"></i>Change Password</h1>
</div>
	<form class="form-horizontal" id="form_cpass" method="post" action="<?=site_url('/changepassword/change');?>">

	 <div class="content-field-bar">
	 
	 	<div class="display-table form">
	 		<div class="display-table-cell">
	 		<div class="inputs-row">
	 				<div class="fl label-box">
	 					<label>Enter Old Password</label>
	 				</div>
	 				<div class="fl text-box show-temp">
	 					<input type="password" name="opassword" id="opassword" value="" class='required' required />
	 					</div>
	 			</div>
	 		<div class="inputs-row">
	 				<div class="fl label-box">
	 					<label>Enter New Password</label>
	 				</div>
	 				<div class="fl text-box show-temp">
	 					<input type="password" name="npassword" id="npassword" value="" class='required' required  onchange="form.cpassword.pattern = this.value;"/>
	 				</div>
	 			</div>
	 			<div class="inputs-row">
	 				<div class="fl label-box">
	 					<label>Retype New Password</label>
	 				</div>
	 				<div class="fl text-box show-temp">
	 					<input type="password" name="cpassword" id="cpassword" value=""  class='required' required />
	 				</div>
	 			</div>  
		   <div id="question-wrap"></div>
	 		
	 		</div>
	 		<div class="display-table-cell">
	 		</div>
	 	</div>
	 </div>
	 <div class="content-field-bar assign-last-btn">
		<div class="brown-btn fr">
   			<input type="reset" value="Cancel">
		</div>
   		<div class="brown-btn fr">
   			<input type="submit" value="Save">
   		</div>
	</div>
	 </form>
 
 </div>  
 
<script type="text/javascript" src='http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js'></script>
<script>$("#form_cpass").validate();</script>
<?=$this->load->view(branded_view('cp/footer'));?>