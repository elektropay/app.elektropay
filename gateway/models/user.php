<?php

class User extends Model {
	var $active_user;

    function __construct() {
        parent::__construct();
        error_reporting(0);
        // check for session
        if ($this->session->userdata('client_id') != '') {
        	$this->SetActive($this->session->userdata('client_id'));
        }
    }

    function Login ($username, $password) {
		$this->db->where('username',$username);
		$this->db->where('suspended','0');
		$this->db->where('deleted','0');
		$query = $this->db->get('clients');

		if ($query->num_rows() > 0) {
			$client = $query->row_array();
			if ($client['password'] != md5($password) && $client['password'] != $password && empty($password)) {//($client['password'] != md5($password . $client['email'])) && $client['password'] != $password
				return FALSE;
			}
		}
		else {
			return false;
		}

    	$this->session->set_userdata('client_id',$client['client_id']);
    	$this->session->set_userdata('login_time',now());

		$this->SetActive($client['client_id']);

		return true;
    }

    function Logout () {
    	$this->session->set_userdata(array('notices' => ''));
        $this->session->unset_userdata('client_id','login_time');
        $this->session->unset_userdata('two_step_verified');

    	return true;
    }

    function SetActive ($client_id) {
    	$CI =& get_instance();
    	$CI->load->model('client_model');

    	if (!$client = $CI->client_model->GetClientDetails($client_id)) {
    		return false;
    	}

    	$this->active_user = $client;

    	return true;
    }

    function LoggedIn () {
    	if (empty($this->active_user)) {
    		return false;
    	}
    	else {
    		return true;
    	}
    }

    function Get ($parameter = false) {
    	if ($parameter) {
    		return $this->active_user->$parameter;
    	}
    	else {
    		return $this->active_user;
    	}
    }

    function CheckTwoStep () {
        $CI =& get_instance();
        if (empty($this->active_user)) {
            return false;
        }
        else {
            $two_step_enable = $this->active_user->two_step_verification;
            $client_id = $this->active_user->client_id;
            $email = $this->active_user->email;

            if(intval($two_step_enable) !== 1) {

                return true;
            } else {
                $two_step_verified = $CI->session->userdata('two_step_verified');
                $two_step_cookie = $CI->input->cookie('two_step_verification');
                
                // echo '<pre/>';print_r($CI->session);
                if(intval($two_step_verified) === 1) {

                    return true;
                } else if(!empty($two_step_cookie) AND md5($client_id) == $two_step_cookie) {

                    return true;
                } else {

                    $CI->load->model('two_step_model');
                    $result = $CI->two_step_model->GetCode($client_id);

                    if(!$result) {

                        // Generate 2nd Step Code (example: 9810684).
                        $num = range(0, 9); 
                        $code = ''; 
                        
                        for( $c = 0; $c < 7; $c++ ) { 
                           $code .= $num[mt_rand(0, count($num) - 1)]; 
                        }

                        $CI->two_step_model->InsertCode($code, $client_id);
                        $this->send_verification_email($code, $email);
                        $CI->notices->SetNotice($CI->lang->line('notice_code_sent'));
                        // $CI->notices->SetNotice('Enter this Code : '.$code.'(developemnet purpose)');
                    } else {
                        // $CI->notices->SetNotice('Enter this Code : '.$result->code.'(developemnet purpose)');
                    }

                    return false;
                }
            }
        }
    }

    function ResendCode() {

        $CI =& get_instance();
        if (empty($this->active_user)) {
            return false;
        }
        else {
            $two_step_enable = $this->active_user->two_step_verification;
            $client_id = $this->active_user->client_id;
            $email = $this->active_user->email;

            if(intval($two_step_enable) !== 1) {

                return true;
            } else {
                $two_step_verified = $CI->session->userdata('two_step_verified');
                $two_step_cookie = $CI->input->cookie('two_step_verification');
                
                // echo '<pre/>';print_r($CI->session);
                if(intval($two_step_verified) === 1) {

                    return true;
                } else if(!empty($two_step_cookie) AND md5($client_id) == $two_step_cookie) {

                    return true;
                } else {

                    $CI->load->model('two_step_model');
                    $result = $CI->two_step_model->GetCode($client_id);

                    // Generate 2nd Step Code (example: 9810684).
                    $num = range(0, 9); 
                    $code = ''; 
                    
                    for( $c = 0; $c < 7; $c++ ) { 
                       $code .= $num[mt_rand(0, count($num) - 1)]; 
                    }

                    if(!$result) {

                        $CI->two_step_model->InsertCode($code, $client_id);
                        $this->send_verification_email($code, $email);
                        $CI->notices->SetNotice($CI->lang->line('notice_code_sent'));
                        // $CI->notices->SetNotice('Enter this Code : '.$code.'(developemnet purpose)');
                    } else {

                        $CI->two_step_model->UpdateCode($code, $client_id);
                        $this->send_verification_email($code, $email);
                        $CI->notices->SetNotice($CI->lang->line('notice_code_sent'));
                        // $CI->notices->SetNotice('Enter this Code : '.$result->code.'(developemnet purpose)');
                    }

                    return false;
                }
            }
        }
    }

    function send_verification_email($code, $email) {

        $CI =& get_instance();

        $CI->load->library('email');
        $CI->email->from('EverPay Security', 'security-noreply@everpayinc.com');
        $CI->email->to($email);
        $CI->email->subject('Verification Code');
        $message = $this->load->view('email_templates/verification_email',array(
            'code' => $code
        ),true);

        $CI->email->message($message);
        $CI->email->send();
    }

    function total_user_of_the_day(){
        // echo 'Hi';die();
        $this->db->where('DATE_FORMAT(date_created,\'%Y-%m-%d\') = CURDATE()');
        $this->db->where('client_id', $this->active_user->client_id);
        $this->db->from('customers');
        // echo $this->db->count_all_results();die();
        return 400;
    }

    function _total_user_of_the_day(){
        $today_customere_rec_q = mysql_query("SELECT COUNT(customer_id) AS TOTAL_USERS FROM customers WHERE DATE_FORMAT(date_created,'%Y-%m-%d') = CURDATE()");
        $today_cust = mysql_fetch_assoc($today_customere_rec_q)or die(mysql_error());

        $total_user_of_the_day = $today_cust["TOTAL_USERS"];
        return $total_user_of_the_day;
    }
    function total_orders_of_the_day(){
        $today_orders_rec_q = mysql_query("SELECT COUNT(order_id) AS TOTAL_ORDERS FROM orders WHERE DATE_FORMAT(timestamp,'%Y-%m-%d') = CURDATE()");
        $today_orders = mysql_fetch_assoc($today_orders_rec_q);
        $total_orders_of_the_day = $today_orders["TOTAL_ORDERS"];
        return $total_orders_of_the_day;
    }
    function total_sales_of_the_day(){
        $today_sales_rec_q = mysql_query("SELECT SUM(amount) AS TOTAL_AMOUNT FROM orders WHERE DATE_FORMAT(timestamp,'%Y-%m-%d') = CURDATE()");
        $today_sales = mysql_fetch_assoc($today_sales_rec_q);
        $total_sales_of_the_day = $today_sales["TOTAL_AMOUNT"];
        return $total_sales_of_the_day;
    }

    function total_sales_of_the_week(){
        $week_sales_rec_q = mysql_query("SELECT COUNT(`order_id`) AS TOTAL_WEEK_ORDERS FROM orders WHERE YEARWEEK(`timestamp`) = YEARWEEK(CURRENT_DATE)");
        $week_sales = mysql_fetch_assoc($week_sales_rec_q);
        $total_sales_of_the_week = $week_sales["TOTAL_WEEK_ORDERS"];
        return $total_sales_of_the_week;
    }

    function total_visa_transactions_amount(){
        //1 visa cards counter
        $today_visa_rec_q = mysql_query("SELECT COUNT(order_id) AS TOTAL_VISA_ORDERS,SUM(amount) AS TOTAL_AMOUNT FROM orders WHERE (card_payment_type = '1' OR card_payment_type = 'V')  AND DATE_FORMAT(timestamp,'%Y-%m-%d') = CURDATE()")or die(mysql_error());
        $today_visa_rec = mysql_fetch_assoc($today_visa_rec_q);
        $total_visa_transactions = $today_visa_rec["TOTAL_VISA_ORDERS"];
        $total_visa_transactions_amount = $today_visa_rec["TOTAL_AMOUNT"];
        return $total_visa_transactions_amount;
    }

    function total_mastercard_transactions_amount(){

        //2 mastercard counter
        $today_mastercard_rec_q = mysql_query("SELECT COUNT(order_id) AS TOTAL_MASTERCARD_ORDERS,SUM(amount) AS TOTAL_AMOUNT FROM orders WHERE (card_payment_type = '2' OR card_payment_type = 'M')  AND DATE_FORMAT(timestamp,'%Y-%m-%d') = CURDATE()");
        $today_mastercard_rec = mysql_fetch_assoc($today_mastercard_rec_q);
        $total_mastercard_transactions = $today_mastercard_rec["TOTAL_MASTERCARD_ORDERS"];
        $total_mastercard_transactions_amount = $today_mastercard_rec["TOTAL_AMOUNT"];
        return $total_mastercard_transactions_amount;
    }

    function total_amex_transactions_amount(){
        //3 amex counter
        $today_amex_rec_q = mysql_query("SELECT COUNT(order_id) AS TOTAL_AMEX_ORDERS,SUM(amount) AS TOTAL_AMOUNT FROM orders WHERE (card_payment_type = '3' OR card_payment_type = 'A')  AND DATE_FORMAT(timestamp,'%Y-%m-%d') = CURDATE()");
        $today_amex_rec = mysql_fetch_assoc($today_amex_rec_q);
        $total_amex_transactions = $today_amex_rec["TOTAL_AMEX_ORDERS"];
        $total_amex_transactions_amount = $today_amex_rec["TOTAL_AMOUNT"];
        return $total_amex_transactions_amount;
    }

    function total_debit_transactions_amount(){
        //4 pin debit counter
        $today_debit_rec_q = mysql_query("SELECT COUNT(order_id) AS TOTAL_DEBIT_ORDERS,SUM(amount) AS TOTAL_AMOUNT FROM orders WHERE (card_payment_type = '4' OR card_payment_type = 'D')  AND DATE_FORMAT(timestamp,'%Y-%m-%d') = CURDATE()");
        $today_debit_rec = mysql_fetch_assoc($today_debit_rec_q);
        $total_debit_transactions = $today_debit_rec["TOTAL_DEBIT_ORDERS"];
        $total_debit_transactions_amount = $today_debit_rec["TOTAL_AMOUNT"];
        return $total_debit_transactions_amount;
    }

    function total_echeck_transactions_amount(){
        //5 other counter
        $today_echeck_rec_q = mysql_query("SELECT COUNT(order_id) AS TOTAL_ECHECK_ORDERS,SUM(amount) AS TOTAL_AMOUNT FROM orders WHERE (card_payment_type = '5' OR card_payment_type = 'C')  AND DATE_FORMAT(timestamp,'%Y-%m-%d') = CURDATE()");
        $today_echeck_rec = mysql_fetch_assoc($today_echeck_rec_q);
        $total_echeck_transactions = $today_echeck_rec["TOTAL_ECHECK_ORDERS"];
        $total_echeck_transactions_amount = $today_echeck_rec["TOTAL_AMOUNT"];
        return $total_echeck_transactions_amount;
    }

    function total_other_transactions_amount(){
        //6 e check counter
        $today_other_rec_q = mysql_query("SELECT COUNT(order_id) AS TOTAL_OTHER_ORDERS,SUM(amount) AS TOTAL_AMOUNT FROM orders WHERE (card_payment_type = '6' OR card_payment_type = 'J')  AND DATE_FORMAT(timestamp,'%Y-%m-%d') = CURDATE()");
        $today_other_rec = mysql_fetch_assoc($today_other_rec_q);
        $total_other_transactions = $today_other_rec["TOTAL_OTHER_ORDERS"];
        $total_other_transactions_amount = $today_other_rec["TOTAL_AMOUNT"];
        return $total_other_transactions_amount;
    }

    function signup_activation($act_code) {
        $this->db->where('activation_code',$act_code);
        $this->db->where('is_active','0');
        $query = $this->db->get('clients');
        //$this->db->last_query();
        if ($query->num_rows() > 0) {
            $update_activation_code = mysql_query("update clients SET is_active = '1' where activation_code = '".$act_code."' ");
            
                        
               return true;
        }
        else {
            return false;
        }

        
    }

	
	
	
	
	
}