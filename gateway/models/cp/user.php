<?php

class User extends Model {
	var $active_user;

    function __construct() {
        parent::__construct();

        // check for session
        if ($this->session->userdata('client_id') != '') {
        	$this->SetActive($this->session->userdata('client_id'));
        }
    }

    function Login ($username, $password) {
		$where = '(email= "'.$username.'" or username = "'.$username.'")';
         $this->db->where($where);
		//$this->db->where('email',$username);
		$this->db->where('suspended','0');
		$this->db->where('deleted','0');
		$query = $this->db->get('clients');

		if ($query->num_rows() > 0) {
			$client = $query->row_array();
			
			if ($client['password'] != md5($password) && ($client['password'] != md5($password . $client['email'])) && $client['password'] != $password) {
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
// echo '<pre/>';print_r($this->active_user);die();
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

    function check_business_verified() {

        $fields_to_be_verified = array('business_address', 'business_address2', 'business_city', 'business_zip', 'business_state', 'business_country', 'business_url', 'business_phone');
        
        $CI =& get_instance();
        if (empty($this->active_user)) {
            return false;
        }
        else {
            foreach($fields_to_be_verified as $d) {
                if(empty($this->active_user->$d)) {
                    return false;
                }
            }
            return true;
        }
        
    }

    function check_bank_verified() {
        $btc_to_be_verified = array('bitcoin_address_name', 'bitcoin_address', 'bitcoin_settlement_percentage');
        $bank_to_be_verified = array('bank_name', 'bank_acc_name', 'bank_address', 'bank_acc_number', 'bank_routing_number', 'bank_swift_number', 'bank_acc_type');

        $CI =& get_instance();
        if (empty($this->active_user)) {
            return false;
        }
        else {
            $btc_verified = true;
            $bank_verified = true;

            foreach($btc_to_be_verified as $d) {
                if(empty($this->active_user->$d)) {
                    $btc_verified = false;
                }
            }

            foreach($bank_to_be_verified as $d) {
                if(empty($this->active_user->$d)) {
                    $bank_verified = false;
                }
            }

            return ($btc_verified OR $bank_verified);
        }
    }

    function check_email_verified() {

        $CI =& get_instance();
        if (empty($this->active_user)) {
            return false;
        }
        else {
            if($this->active_user->email_verified == 1) {
                return true;
            }

            return false;
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
        $CI->email->from('support@elektropay.com', 'support@elektropay.com');
        $CI->email->to($email);
        $CI->email->subject('Verification Code');
        $message = $this->load->view('email_templates/verification_email',array(
            'code' => $code
        ),true);

        $CI->email->message($message);
        $CI->email->send();
    }

    function total_user(){
        // $this->db->where('DATE_FORMAT(date_created,\'%Y-%m-%d\') = CURDATE()');
        $this->db->where('client_id', $this->active_user->client_id);
        $this->db->from('customers');
        return $this->db->count_all_results();
    }

    function total_user_for_admin(){
        // $this->db->where('DATE_FORMAT(date_created,\'%Y-%m-%d\') = CURDATE()');
        // $this->db->where('client_id', $this->active_user->client_id);
        $this->db->from('customers');
        return $this->db->count_all_results();
    }

    function _total_user_of_the_day(){
        $today_customere_rec_q = mysql_query("SELECT COUNT(customer_id) AS TOTAL_USERS FROM customers WHERE DATE_FORMAT(date_created,'%Y-%m-%d') = CURDATE()");
        $today_cust = mysql_fetch_assoc($today_customere_rec_q)or die(mysql_error());

        $total_user_of_the_day = $today_cust["TOTAL_USERS"];
        return $total_user_of_the_day;
    }

    function total_orders(){
        // $this->db->where('DATE_FORMAT(timestamp,\'%Y-%m-%d\') = CURDATE()');
        $this->db->where('client_id', $this->active_user->client_id);
        $this->db->from('orders');
        return $this->db->count_all_results();
    }

    function total_orders_for_admin(){
        // $this->db->where('DATE_FORMAT(timestamp,\'%Y-%m-%d\') = CURDATE()');
        // $this->db->where('client_id', $this->active_user->client_id);
        $this->db->from('orders');
        return $this->db->count_all_results();
    }

    function total_orders_today(){
        $this->db->where('DATE_FORMAT(timestamp,\'%Y-%m-%d\') = CURDATE()');
        $this->db->where('client_id', $this->active_user->client_id);
        $this->db->from('orders');
        return $this->db->count_all_results();
    }

    function total_orders_today_for_admin(){
        $this->db->where('DATE_FORMAT(timestamp,\'%Y-%m-%d\') = CURDATE()');
        // $this->db->where('client_id', $this->active_user->client_id);
        $this->db->from('orders');
        return $this->db->count_all_results();
    }

    function _total_orders_of_the_day(){
        $today_orders_rec_q = mysql_query("SELECT COUNT(order_id) AS TOTAL_ORDERS FROM orders WHERE DATE_FORMAT(timestamp,'%Y-%m-%d') = CURDATE()");
        $today_orders = mysql_fetch_assoc($today_orders_rec_q);
        $total_orders_of_the_day = $today_orders["TOTAL_ORDERS"];
        return $total_orders_of_the_day;
    }

    function total_sales(){
        $this->db->select_sum('amount', 'total_amount');
        // $this->db->where('DATE_FORMAT(timestamp,\'%Y-%m-%d\') = CURDATE()');
        $this->db->where('client_id', $this->active_user->client_id);
        $query = $this->db->get('orders');

        if ($query->num_rows() > 0) {
            $order = $query->row_array();
            
            if(!empty($order['total_amount']))
                return $order['total_amount'];
        }

        return 0;
    }

    function total_sales_for_admin(){
        $this->db->select_sum('amount', 'total_amount');
        // $this->db->where('DATE_FORMAT(timestamp,\'%Y-%m-%d\') = CURDATE()');
        // $this->db->where('client_id', $this->active_user->client_id);
        $query = $this->db->get('orders');

        if ($query->num_rows() > 0) {
            $order = $query->row_array();
            
            if(!empty($order['total_amount']))
                return $order['total_amount'];
        }

        return 0;
    }

    function total_sales_today(){
        $this->db->select_sum('amount', 'total_amount');
        $this->db->where('DATE_FORMAT(timestamp,\'%Y-%m-%d\') = CURDATE()');
        $this->db->where('client_id', $this->active_user->client_id);
        $query = $this->db->get('orders');

        if ($query->num_rows() > 0) {
            $order = $query->row_array();
            
            if(!empty($order['total_amount']))
                return $order['total_amount'];
        }

        return 0;
    }

    function total_sales_today_for_admin(){
        $this->db->select_sum('amount', 'total_amount');
        $this->db->where('DATE_FORMAT(timestamp,\'%Y-%m-%d\') = CURDATE()');
        // $this->db->where('client_id', $this->active_user->client_id);
        $query = $this->db->get('orders');

        if ($query->num_rows() > 0) {
            $order = $query->row_array();
            
            if(!empty($order['total_amount']))
                return $order['total_amount'];
        }

        return 0;
    }

    function _total_sales_of_the_day(){
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

    function total_transactions_today_by_card($card_type = ''){
        $this->db->select_sum('amount', 'total_amount');
        $this->db->where('DATE_FORMAT(timestamp,\'%Y-%m-%d\') = CURDATE()');
        $this->db->where('client_id', $this->active_user->client_id);
        $this->db->where('card_type', $card_type);
        $query = $this->db->get('orders');
        if ($query->num_rows() > 0) {
            $order = $query->row_array();
            if(!empty($order['total_amount']))
                return $order['total_amount'];
        }

        return 0;
    }

    function total_transactions_today_by_card_for_admin($card_type = ''){
        $this->db->select_sum('amount', 'total_amount');
        $this->db->where('DATE_FORMAT(timestamp,\'%Y-%m-%d\') = CURDATE()');
        // $this->db->where('client_id', $this->active_user->client_id);
        $this->db->where('card_type', $card_type);
        $query = $this->db->get('orders');
        if ($query->num_rows() > 0) {
            $order = $query->row_array();
            if(!empty($order['total_amount']))
                return $order['total_amount'];
        }

        return 0;
    }

    function total_transactions_today(){
        $this->db->select_sum('amount', 'total_amount');
        $this->db->where('DATE_FORMAT(timestamp,\'%Y-%m-%d\') = CURDATE()');
        $this->db->where('client_id', $this->active_user->client_id);
        $query = $this->db->get('orders');

        if ($query->num_rows() > 0) {
            $order = $query->row_array();
            
            return $order['total_amount'];
        }

        return 0;
    }

    function total_transactions_today_for_admin(){
        $this->db->select_sum('amount', 'total_amount');
        $this->db->where('DATE_FORMAT(timestamp,\'%Y-%m-%d\') = CURDATE()');
        // $this->db->where('client_id', $this->active_user->client_id);
        $query = $this->db->get('orders');

        if ($query->num_rows() > 0) {
            $order = $query->row_array();
            
            return $order['total_amount'];
        }

        return 0;
    }

    function total_transactions_by_card($card_type = ''){

        $this->db->where('client_id', $this->active_user->client_id);
        $this->db->where('card_type', $card_type);
        $this->db->from('orders');
        return $this->db->count_all_results();
    }

    function total_transactions_by_card_for_admin($card_type = ''){

        // $this->db->where('client_id', $this->active_user->client_id);
        $this->db->where('card_type', $card_type);
        $this->db->from('orders');
        return $this->db->count_all_results();
    }

    function total_transactions(){
        $this->db->where('client_id', $this->active_user->client_id);
        $this->db->from('orders');
        return $this->db->count_all_results();
    }

    function total_transactions_for_admin(){
        // $this->db->where('client_id', $this->active_user->client_id);
        $this->db->from('orders');
        return $this->db->count_all_results();
    }

    function _total_visa_transactions_amount(){
        //1 visa cards counter
        $today_visa_rec_q = mysql_query("SELECT COUNT(order_id) AS TOTAL_VISA_ORDERS,SUM(amount) AS TOTAL_AMOUNT FROM orders WHERE (card_payment_type = '1' OR card_payment_type = 'V')  AND DATE_FORMAT(timestamp,'%Y-%m-%d') = CURDATE()");
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

    function update_business($client_id,$data)
    {
        $this->db->where('client_id',$client_id);
        $this->db->update('clients',$data);
    }

    function get_client_details($client_id)
    {
        $this->db->where('client_id',$client_id);
        $query=$this->db->get('clients');
        return $query->row_array();
    }
}