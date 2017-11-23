<?php

/**
* Resend activation code  Controller
*
*
* @version 1.0
* @author Hemal Sharma
* @package Custom
*/

class Resend_activation extends Controller {


   function resend() 

   {

	   error_reporting(1);
        $email = $_POST['username'];
        $this->load->database();
        $this->load->model('user');
	    $client_array = $this->user->resend_activation_code($email);
	   // echo "<pre>";
	    //print_r($client_array);die;
        
        //echo "select * from clients where email = '".$email."' and is_active = '0'";die;
		//$query = $this->db->query("select * from clients where email = '".$email."' and is_active = '0' ");
        //someAge = 25;
        $this->db->select('*');
        $query = $this->db->get_where('clients', array('email' => $email,'is_active' =>'0'));
        $row = $query->row();
        //echo $this->db->last_query();
		$count = count($row);
		$name = $row->first_name;
		//$name = "Hemal";
		if($count > 0)

		{   

	        //Send mail to user
	        $generatedKey = sha1(mt_rand(10000,99999).time().$email);//Activation Code
	        $cpss = $this->db->query("Update clients SET activation_code='".$generatedKey."' WHERE email='$email'");
	        $act_link  = '<a href=//elektropay.io/dashboard/activation/'.$generatedKey.' rel="nofollow" target="_blank" style="color:#ff6600;font-weight:bold;font-family:helvetica, arial, sans-seif;text-decoration:none;">Activate my account</a>';
	        $this->send_activation_code($name,$act_link,$email);
	        $this->send_activation_code_admin($name,$act_link,$email);

			//return true;
			echo "<script>alert('Thank you! for register with us. we have send activation link in you mail account so please check your Inbox or Spam folder. After activation, you will be able to access your dashboard and finish setting up your merchant account')</script>";
			echo "<script>window.location.href = 'http://elektropay.io/dashboard/login/';</script>";
		}

		else  

	    {

		    echo "<script>alert('We can not find your email in our database for active your account')</script>";
			echo "<script>window.location.href = 'http://elektropay.io/dashboard/login/';</script>";

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

function mailfunction($toemail,$fromemail,$subject,$messagearea)
{
	$headers 	= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	$headers .= "Content-Transfer-Encoding: 8bit\n";
	$headers .= "From:".$fromemail." \n";
	$headers .= "X-Mailer: PHP/" . phpversion()."\n";
	$message = $messagearea;
		if($send = @mail($toemail,$subject,$message,$headers))
		{
			return true;
		}
		else
		{
			return false;
		}
}


function send_activation_code_admin($name,$activation,$email){

		    $signup_mail = "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">\n"; 
			$signup_mail.= "<html>\n"; 
			$signup_mail.= "<head>\n"; 
			$signup_mail.= "  <title>Ever Pay</title>\n"; 
			$signup_mail.= " <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n"; 
			$signup_mail.= "</head>\n"; 
			$signup_mail.= "<body bottommargin=\"0\" leftmargin=\"0\" topmargin=\"0\" rightmargin=\"0\">\n"; 
			$signup_mail.= " <table width=\"715\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 715px ! important; overflow: hidden ! important; border: 1px solid #000000;\">\n"; 
			$signup_mail.= "  <tbody><tr>\n"; 
			$signup_mail.= "   <td bgcolor=\"#042e6f\" style=\"background-color:#fff;\">\n"; 
			$signup_mail.= "     <div style=\"height: 120px; padding: 0px;\">\n"; 
			$signup_mail.= "       <img src=\"https://dl.dropboxusercontent.com/u/63809504/assets/images/logo/logo.png\" style=\"padding-left:195px;padding-top:20px\">\n"; 
			$signup_mail.= "     </div>\n"; 
			$signup_mail.= "   </td>\n"; 
			$signup_mail.= "  </tr>\n"; 
			$signup_mail.= "  <tr>\n"; 
			$signup_mail.= "   <td bgcolor=\"#042e6f\" align=\"center\" style=\"height: 5px\"></td>\n"; 
			$signup_mail.= "  </tr>\n"; 
			$signup_mail.= "  <tr>\n"; 
			$signup_mail.= "   <td bgcolor=\"#FFFFFF\" align=\"center\"><div>&nbsp;</div></td>\n"; 
			$signup_mail.= "  </tr>\n"; 
			$signup_mail.= "  <tr>\n"; 
			$signup_mail.= "   <td bgcolor=\"#FFFFFF\">\n"; 
			$signup_mail.= "    <table width=\"715\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"width: 715px ! important; overflow: hidden ! important;\">\n"; 
			$signup_mail.= "     <tbody><tr>\n"; 
			$signup_mail.= "      <td width=\"20\">&nbsp;</td>\n"; 
			$signup_mail.= "      <td width=\"677\">\n"; 
			$signup_mail.= "       <table width=\"677\" cellspacing=\"1\" cellpadding=\"1\" border=\"0\" bgcolor=\"#FFFFFF\" style=\"width: 677px ! important; overflow: hidden ! important;\">\n"; 
			$signup_mail.= "         <tbody><tr>\n"; 
			$signup_mail.= "         <td bgcolor=\"#FFFFFF\">\n"; 
			$signup_mail.= "          <div style=\"padding: 10px;\"><font face=\"Verdana,Geneva\" color=\"#666666\" style=\"font-size: 18px;\">New user signup details</font></div>\n"; 
			$signup_mail.= "          <div style=\"padding: 10px;\"><font face=\"Verdana,Geneva\" color=\"#666666\" style=\"font-size: 14px;\">Dear admin,</font></div>\n"; 
			$signup_mail.= "          <div style=\"padding: 10px;\"><font face=\"Verdana,Geneva\" color=\"#666666\" style=\"font-size: 14px;\">Name : ".$name." </font></div>\n"; 
			$signup_mail.= "          <div style=\"padding: 10px;\"><font face=\"Verdana,Geneva\" color=\"#666666\" style=\"font-size: 14px;\">Email : ".$email." </font></div>\n"; 
			$signup_mail.= "          <div style=\"padding: 10px;\"><font face=\"Verdana,Geneva\" color=\"#666666\" style=\"font-size: 14px;\">".$activation."</strong></font></div>\n"; 
			$signup_mail.= "          <div style=\"padding: 10px;\"><font face=\"Verdana,Geneva\" color=\"#666666\" style=\"font-size: 14px;\">Thank you!</font></div>\n"; 
			$signup_mail.= "         </td>\n"; 
			$signup_mail.= "        </tr>\n"; 
			$signup_mail.= "       </tbody></table>\n"; 
			$signup_mail.= "      </td>\n"; 
			$signup_mail.= "      <td width=\"20\">&nbsp;</td>\n"; 
			$signup_mail.= "     </tr>\n"; 
			$signup_mail.= "    </tbody></table>\n"; 
			$signup_mail.= "   </td>\n"; 
			$signup_mail.= "  </tr>\n"; 
			$signup_mail.= "  <tr>\n"; 
			$signup_mail.= "   <td bgcolor=\"#FFFFFF\" align=\"center\"><div>&nbsp;</div></td>\n"; 
			$signup_mail.= "  </tr>\n"; 
			$signup_mail.= "\n"; 
			$signup_mail.= "   <tr>\n"; 
			$signup_mail.= "   <td bgcolor=\"#013567\" align=\"center\"><div>\n"; 
			$signup_mail.= "     <p><font face=\"Verdana,Geneva\" color=\"#fff\" style=\"font-size: 13px;\">Copyright &copy; ".date('Y')." Everpay Corporation. All rights reserved.</font>\n"; 
			$signup_mail.= "         </font></p></div>\n"; 
			$signup_mail.= "  </td>\n"; 
			$signup_mail.= "  </tr>\n"; 
			$signup_mail.= "\n"; 
			$signup_mail.= " </tbody></table>\n"; 
			$signup_mail.= "\n"; 
			$signup_mail.= "\n"; 
			$signup_mail.= "</body></html>\n";//everpay@gmail.com
			$send_mail = $this->mailfunction("sharmahemal@yahoo.com","no-reply@elektropay.io",'New user signup',$signup_mail);
}



function send_activation_code($name,$activation,$email){
$signup_mail =  "<div style=\"margin:0;padding:0;\" > \n"; 
$signup_mail .=  "<table bgcolor=\"#497cb1\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" id=\"yui_3_16_0_1_1429634001359_24870\">\n"; 
$signup_mail .=  "  <tbody ><tr>\n"; 
$signup_mail .=  "    <td align=\"center\">\n"; 
$signup_mail .=  "            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"672\" >\n"; 
$signup_mail .=  "              <tbody id=\"yui_3_16_0_1_1429634001359_24865\"><tr>\n"; 
$signup_mail .=  "                <td style=\"background:#497cb1;text-align:left;\" bgcolor=\"#497cb1\" height=\"95\" >\n"; 
$signup_mail .=  "                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"672\" >\n"; 
$signup_mail .=  "                      <tbody><tr>\n"; 
$signup_mail .=  "                        <td style=\"font-size:40px;line-height:40px;min-height:40px;text-align:left;\" height=\"40\" width=\"672\" id=\"yui_3_16_0_1_1429634001359_24859\"></td>\n"; 
$signup_mail .=  "                      </tr>\n"; 
$signup_mail .=  "                      <tr id=\"yui_3_16_0_1_1429634001359_24905\">\n"; 
$signup_mail .=  "                        <td style=\"text-align:left;\" id=\"yui_3_16_0_1_1429634001359_24904\">                        \n"; 
$signup_mail .=  "                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"672\" id=\"yui_3_16_0_1_1429634001359_24903\">\n"; 
$signup_mail .=  "                          <tbody id=\"yui_3_16_0_1_1429634001359_24902\"><tr id=\"yui_3_16_0_1_1429634001359_24901\">\n"; 
$signup_mail .=  "                            <td style=\"font-size:40px;line-height:40px;min-height:40px;text-align:left;\" height=\"24\" width=\"37\">\n"; 
$signup_mail .=  "                            </td>\n"; 
$signup_mail .=  "                            <td style=\"text-align:left;padding-left: 180px;\" height=\"24\" width=\"523\">\n"; 
$signup_mail .=  "                            <img src=\"http://elektropay.io/assets/web/images/logo.png\" alt=\"Electropay\" style=\"display:block;color:#ffffff;font-size:20px;font-family:Arial, Helvetica, sans-serif;max-width:557px;\" >\n"; 
$signup_mail .=  "                            </td>\n"; 
$signup_mail .=  "                            <td style=\"text-align:left;\" width=\"44\"></td>\n"; 
$signup_mail .=  "                            <td style=\"text-align:left;\" width=\"30\"></td>\n"; 
$signup_mail .=  "                            <td style=\"font-size:40px;line-height:40px;min-height:40px;text-align:left;\" height=\"24\" width=\"38\" id=\"yui_3_16_0_1_1429634001359_24900\"></td>\n"; 
$signup_mail .=  "                          </tr>\n"; 
$signup_mail .=  "                        </tbody></table>\n"; 
$signup_mail .=  "                        </td>\n"; 
$signup_mail .=  "                      </tr>\n"; 
$signup_mail .=  "                      <tr id=\"yui_3_16_0_1_1429634001359_24909\"><td style=\"font-size:33px;line-height:33px;min-height:33px;text-align:left;\" height=\"33\" width=\"672\" id=\"yui_3_16_0_1_1429634001359_24908\"></td></tr>\n"; 
$signup_mail .=  "                    </tbody></table>\n"; 
$signup_mail .=  "                \n"; 
$signup_mail .=  "                </td>\n"; 
$signup_mail .=  "              </tr>\n"; 
$signup_mail .=  "            </tbody></table>\n"; 
$signup_mail .=  "     </td>\n"; 
$signup_mail .=  "    </tr>\n"; 
$signup_mail .=  " </tbody></table>  \n"; 
$signup_mail .=  "  \n"; 
$signup_mail .=  " <table bgcolor=\"#497cb1\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tbody><tr><td style=\"background:#497cb1;min-height:5px;font-size:5px;line-height:5px;\" height=\"5\"></td></tr></tbody></table>\n"; 
$signup_mail .=  "       \n"; 
$signup_mail .=  " <table bgcolor=\"#e9eff0\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" id=\"yui_3_16_0_1_1429634001359_24896\">\n"; 
$signup_mail .=  "  <tbody id=\"yui_3_16_0_1_1429634001359_24895\"><tr id=\"yui_3_16_0_1_1429634001359_24894\">\n"; 
$signup_mail .=  "    <td align=\"center\" id=\"yui_3_16_0_1_1429634001359_24893\">\n"; 
$signup_mail .=  "      <table style=\"background:#e9eff0;\" bgcolor=\"#e9eff0\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"671\" id=\"yui_3_16_0_1_1429634001359_24892\">\n"; 
$signup_mail .=  "        <tbody id=\"yui_3_16_0_1_1429634001359_24891\"><tr>\n"; 
$signup_mail .=  "          <td style=\"font-size:30px;line-height:30px;min-height:30px;text-align:left;\" height=\"30\" width=\"38\"></td>\n"; 
$signup_mail .=  "          <td style=\"font-size:30px;line-height:30px;min-height:30px;text-align:left;\" height=\"30\" width=\"596\"></td>\n"; 
$signup_mail .=  "          <td style=\"font-size:30px;line-height:30px;min-height:30px;text-align:left;\" height=\"30\" width=\"37\"></td>\n"; 
$signup_mail .=  "        </tr>\n"; 
$signup_mail .=  "        <tr id=\"yui_3_16_0_1_1429634001359_24890\">\n"; 
$signup_mail .=  "          <td style=\"font-size:40px;line-height:40px;min-height:40px;text-align:left;\" height=\"40\" width=\"38\"></td>\n"; 
$signup_mail .=  "          <td style=\"text-align:left;\" id=\"yui_3_16_0_1_1429634001359_24889\"><table bgcolor=\"#ffffff\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"596\" id=\"yui_3_16_0_1_1429634001359_24888\">\n"; 
$signup_mail .=  "            <tbody id=\"yui_3_16_0_1_1429634001359_24887\"><tr>\n"; 
$signup_mail .=  "              <td style=\"font-size:26px;line-height:26px;min-height:26px;text-align:left;\" height=\"26\" width=\"20\"></td>\n"; 
$signup_mail .=  "              <td style=\"font-size:26px;line-height:26px;min-height:26px;text-align:left;\" height=\"26\" width=\"556\"></td>\n"; 
$signup_mail .=  "              <td style=\"font-size:26px;line-height:26px;min-height:26px;text-align:left;\" height=\"26\" width=\"20\"></td>\n"; 
$signup_mail .=  "            </tr>\n"; 
$signup_mail .=  "            <tr id=\"yui_3_16_0_1_1429634001359_24886\">\n"; 
$signup_mail .=  "              <td style=\"font-size:26px;line-height:26px;min-height:26px;text-align:left;\" height=\"26\" width=\"20\"></td>\n"; 
$signup_mail .=  "              <td style=\"text-align:left;\" width=\"556\" id=\"yui_3_16_0_1_1429634001359_24885\"><table style=\"font-family:helvetica, arial, sans-seif;color:#666666;font-size:16px;line-height:22px;\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"556\" id=\"yui_3_16_0_1_1429634001359_24884\">\n"; 
$signup_mail .=  "                <tbody id=\"yui_3_16_0_1_1429634001359_24883\"><tr>\n"; 
$signup_mail .=  "                  <td style=\"text-align:left;\"></td>\n"; 
$signup_mail .=  "                </tr>\n"; 
$signup_mail .=  "                <tr id=\"yui_3_16_0_1_1429634001359_24882\">\n"; 
$signup_mail .=  "                  <td style=\"text-align:left;\" id=\"yui_3_16_0_1_1429634001359_24881\"><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"556\" id=\"yui_3_16_0_1_1429634001359_24880\">\n"; 
$signup_mail .=  "                    <tbody id=\"yui_3_16_0_1_1429634001359_24879\"><tr><td style=\"font-family:helvetica, arial, sans-serif;font-size:30px;line-height:40px;font-weight:normal;color:#253c44;text-align:left;\"></td></tr>\n"; 
$signup_mail .=  "                    <tr><td style=\"font-size:20px;line-height:20px;min-height:20px;text-align:left;\" height=\"20\" width=\"556\"></td></tr>\n"; 
$signup_mail .=  "                    <tr id=\"yui_3_16_0_1_1429634001359_24878\">\n"; 
$signup_mail .=  "                      <td style=\"text-align:left;\" id=\"yui_3_16_0_1_1429634001359_24877\">\n"; 
$signup_mail .=  "       				   Hi ".$name.",<br>\n"; 
$signup_mail .=  "        			   <br>\n"; 
$signup_mail .=  "       					Thanks for signing up to Elektropay! Before we start, you will need to validate your email address by clicking the link below:\n"; 
$signup_mail .=  "						<br><br><br>\n"; 
$signup_mail .=  						$activation."\n";
$signup_mail .=  "						<br><br><br>\n"; 
$signup_mail .=  "						Regards,<br>\n"; 
$signup_mail .=  "						The Team at Elektropay<br>\n"; 
$signup_mail .=  "						<br>\n"; 
$signup_mail .=  "					</td>\n"; 
$signup_mail .=  "                    </tr>\n"; 
$signup_mail .=  "                    <tr>\n"; 
$signup_mail .=  "                      <td style=\"font-size:30px;line-height:30px;min-height:30px;text-align:left;\" height=\"30\" width=\"556\">&nbsp;</td>\n"; 
$signup_mail .=  "                    </tr>\n"; 
$signup_mail .=  "                  </tbody></table></td>\n"; 
$signup_mail .=  "                </tr>\n"; 
$signup_mail .=  "              </tbody></table></td>\n"; 
$signup_mail .=  "              <td style=\"font-size:26px;line-height:26px;min-height:26px;text-align:left;\" height=\"26\" width=\"20\"></td>\n"; 
$signup_mail .=  "            </tr>\n"; 
$signup_mail .=  "            <tr>\n"; 
$signup_mail .=  "              <td style=\"background-color:#d9dfe1;font-size:2px;line-height:2px;min-height:2px;text-align:left;\" bgcolor=\"#d9dfe1\" height=\"2\" width=\"20\"></td>\n"; 
$signup_mail .=  "              <td style=\"background-color:#d9dfe1;font-size:2px;line-height:2px;min-height:2px;text-align:left;\" bgcolor=\"#d9dfe1\" height=\"2\" width=\"556\"></td>\n"; 
$signup_mail .=  "              <td style=\"background-color:#d9dfe1;font-size:2px;line-height:2px;min-height:2px;text-align:left;\" bgcolor=\"#d9dfe1\" height=\"2\" width=\"20\"></td>\n"; 
$signup_mail .=  "            </tr>\n"; 
$signup_mail .=  "          </tbody></table></td>\n"; 
$signup_mail .=  "          <td style=\"font-size:40px;line-height:40px;min-height:40px;text-align:left;\" height=\"40\" width=\"37\"></td>\n"; 
$signup_mail .=  "        </tr>\n"; 
$signup_mail .=  "        <tr>\n"; 
$signup_mail .=  "          <td style=\"font-size:30px;line-height:30px;min-height:30px;text-align:left;\" height=\"30\" width=\"38\"></td>\n"; 
$signup_mail .=  "          <td style=\"font-size:30px;line-height:30px;min-height:30px;text-align:left;\" height=\"30\" width=\"596\"></td>\n"; 
$signup_mail .=  "          <td style=\"font-size:30px;line-height:30px;min-height:30px;text-align:left;\" height=\"30\" width=\"37\"></td>\n"; 
$signup_mail .=  "        </tr>\n"; 
$signup_mail .=  "      </tbody></table></td>\n"; 
$signup_mail .=  "  </tr>\n"; 
$signup_mail .=  "</tbody>\n"; 
$signup_mail .=  "</table>\n"; 
$signup_mail .=  "<table bgcolor=\"#273f47\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tbody><tr><td align=\"center\">&nbsp;</td></tr></tbody></table>\n"; 
$signup_mail .=  "<table bgcolor=\"#4473A5\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n"; 
$signup_mail .=  "  <tbody><tr>\n"; 
$signup_mail .=  "    <td align=\"center\">\n"; 
$signup_mail .=  "       <table bgcolor=\"#4473A5\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"672\">\n"; 
$signup_mail .=  "              <tbody><tr>\n"; 
$signup_mail .=  "              <td style=\"font-size:30px;line-height:30px;min-height:30px;text-align:left;\" height=\"30\" width=\"38\"></td>\n"; 
$signup_mail .=  "          <td style=\"font-size:30px;line-height:30px;min-height:30px;text-align:left;\" height=\"30\" width=\"569\"></td>\n"; 
$signup_mail .=  "          <td style=\"font-size:30px;line-height:30px;min-height:30px;text-align:left;\" height=\"30\" width=\"38\"></td>\n"; 
$signup_mail .=  "              </tr>\n"; 
$signup_mail .=  "              <tr>\n"; 
$signup_mail .=  "                <td style=\"font-size:40px;line-height:40px;text-align:left;\" height=\"40\" width=\"38\">\n"; 
$signup_mail .=  "                </td>\n"; 
$signup_mail .=  "                <td style=\"font-family:helvetica, arial, sans-seif;font-size:12px;line-height:16px;color:#fff;text-align:left;\" valign=\"top\">Copyright &copy; 2015, All rights reserved.<br>Elektropay Inc. Lorem ipsum address here<br><br><br></td>\n"; 
$signup_mail .=  "                <td style=\"font-size:40px;line-height:40px;text-align:left;\" height=\"40\" width=\"38\"></td>\n"; 
$signup_mail .=  "              </tr>\n"; 
$signup_mail .=  "              <tr>\n"; 
$signup_mail .=  "              <td style=\"font-size:40px;line-height:40px;text-align:left;\" height=\"40\" width=\"38\"></td>\n"; 
$signup_mail .=  "              <td style=\"font-size:40px;line-height:40px;text-align:left;\" height=\"40\" width=\"569\"></td>              \n"; 
$signup_mail .=  "                <td style=\"font-size:40px;line-height:40px;text-align:left;\" height=\"40\" width=\"38\"></td>\n"; 
$signup_mail .=  "              </tr>\n"; 
$signup_mail .=  "            </tbody></table>\n"; 
$signup_mail .=  "     </td>\n"; 
$signup_mail .=  "  </tr>\n"; 
$signup_mail .=  "</tbody></table>\n"; 
$signup_mail .=  "</div>\n";
$send_mail = $this->mailfunction($email,"no-reply@elektropay.io",'Email Verification',$signup_mail);
}

}

