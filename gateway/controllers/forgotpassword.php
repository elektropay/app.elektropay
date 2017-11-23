<?php
/**
* Forgot password Controller
*
*
* @version 1.0
* @author Hemal Sharma
* @package Custom
*/
class Forgotpassword extends Controller {
    

	/**
	* Forgot password
	*/
   function forgot_password() 
   {
	   
        $email = $_POST['username'];
		$query = $this->db->query("select * from clients where email = '".$email."' ");
        $row = $query->row();
		$count = count($row);
		if($count > 0)
		{   
	        //$row->email;
			$new_password = $this->generateRandomString();
	        $cpss = $this->db->query("Update clients SET password='".md5($new_password)."' WHERE email='$email'");
			$CI =& get_instance();
			$username = $row->username;

			$CI->load->library('email');
			$CI->email->from('everpay@gmail.com', 'support@everpayinc.com');
			$CI->email->to($email);
			$CI->email->subject('Forgot password');
			$message = $this->load->view('email_templates/forgotpassword_email',array(
				'password' => $new_password,'username' => $username
			),true);
			$CI->email->message($message);
			$CI->email->send();
			//return true;
			echo "<script>alert('Your new password send successfully in your email.')</script>";
			echo "<script>window.location.href = 'https://everpayinc.com/test/dashboard/login';</script>";
			 
		}
		else  
	    {
		    echo "<script>alert('We can not find your email in our database.')</script>";
			echo "<script>window.location.href = 'https://everpayinc.com/dashboard/login';</script>";
	    } 
    }
	/*Random password generate */
	function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
}
