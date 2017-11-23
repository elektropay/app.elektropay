<?php
/**
* Forgot password Controller
*
*
* @version 1.0
* @author Hemal Sharma
* @package Custom
*/
class Signup extends Controller {
    

	/**
	* Forgot password
	*/
   function activation() 
   {
	   //echo $_GET['act_key'];
	   //print_r($_REQUEST);die;
	   $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	   $get_act_code = explode("/",$actual_link);
	   $act_code = $get_act_code[5];
	   $this->load->model('user');
	   $check_act_code = $this->user->signup_activation($act_code);
	   if($check_act_code)
	   {
		echo "<script>alert('You have successfully registered with us, you can now login.');</script>";
	    echo "<script>window.location.href = 'https://everpayinc.com/dashboard/login'</script>";   
	   }
	   else{
		   echo "<script>alert('Invalid activation code');</script>";
	   }
	   
	 }
	function check_client_email($str)
	{
		$str = mysql_real_escape_string($str);
		$email = $this->input->post('email');	
		$query = $this->db->query("SELECT COUNT(*) AS count FROM clients WHERE email = '".$str."'  and is_active = '1' ");
		$row = $query->row();
		
		if($row->count > 0)
		{
			$this->form_validation->set_message('check_client_email','Email already exist');
			return false;
		}
		else
		{
			return true;
		}
	}
function index()
	{
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		$data = array(
			'title' => 'Sign Up In 3 Minutes'
		);
		$this->load->view('signup/index', $data);
	}
}
