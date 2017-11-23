<?php
/**
* Change password Controller
*
*
* @version 1.0
* @author Hemal Sharma
* @package Custom
*/
class Changepassword extends Controller {
    
	function __construct()
	{
		parent::__construct();

		// perform control-panel specific loads
		CPLoader();
		
	}

	/**
	* Change password
	*
	* User change password.
	*/
	function index()
	{
		$this->navigation->PageTitle('Change password');
	    $this->load->view('cp/changepassword', $data);
		ini_set('display_errors', 1);
	}
	
	/**change password
	/*@hemal sharma
	*/
   function change() 
   {    
        error_reporting(0);
	    $this->load->view('cp/changepassword', $data);
        $client_id = $this->user->Get('client_id');
		$this->load->model('user');
		$new_pass =  $_POST['npassword'];
		$curr_pass = $_POST['cpassword'];
		if($new_pass != $curr_pass)
		{
			$this->notices->SetError('Your new password and retype password does not match.');
			redirect('/changepassword'); 
			return false;
		}
	
		if ($this->change_password($client_id)) {
			$this->notices->SetNotice("Your password changed successfully");
			//$this->session->set_userdata(array('notices' => ''));
            //$this->session->unset_userdata('client_id','login_time');
            //$this->session->unset_userdata('two_step_verified');
			redirect('/changepassword');
			return true;
		}
		else {
			$this->notices->SetError('Your old password does not match of your current password');
			redirect('/changepassword'); 
			return false;
		}
		
	    
    }
	
	 function change_password($client_id) 
   {
	    
        //$cpss = mysql_query("select email,username,password from clients where client_id=".$client_id);
		$query = $this->db->query("select email,username,password from clients where client_id=".$client_id);
        $row = $query->row();
		$curr_pass = md5($_POST['opassword']);
		$new_pass = md5($_POST['npassword']);
		$old_pass = $row->password;
		if(!empty($new_pass) && $curr_pass == $old_pass)
		{
			$cpss = $this->db->query("Update clients SET password='$new_pass' WHERE client_id='$client_id'");
			return true;
		}
		else  
	    {
		    //$this->notices->SetError('Your old password does not match of your current password');
			//redirect('/changepassword'); 
			return false;
	    }
    }
}
