<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class bankea  {

var $settings;
	
	function bankea() {
		$this->settings = $this->Settings();
	}

	function Settings()
	{
		$settings = array();
		$settings['name'] = 'Bankea';
		$settings['class_name'] = 'bankea';
		$settings['external'] = FALSE;
		$settings['no_credit_card'] = TRUE;
		$settings['description'] = 'Bankea specializes in high risk merchant acquiring and is a payments provider of online credit card processing services available for international merchants.';
		$settings['is_preferred'] = 1;
		$settings['setup_fee'] = '$1750';
		$settings['monthly_fee'] = '$99';
		$settings['transaction_fee'] = '9.75% + $1.25';
		$settings['purchase_link'] = 'https://everpayinc.com/signup';
		$settings['allows_updates'] = 1;
		$settings['allows_refunds'] = 1;
		$settings['requires_customer_information'] = 1;
		$settings['requires_customer_ip'] = 1;
	        $settings['required_fields'] = array(                                    'enabled',
											 'mode',
											 'password',
											 'site_id',
											 'currency',
											 'accept_visa',
											 'accept_mc',
											 'accept_discover',
											 'accept_dc',
											 'accept_amex'
											);
		
		$settings['field_details'] = array(
										'enabled' => array(
														'text' => 'Enable this gateway?',
														'type' => 'radio',
														'options' => array(
																		'1' => 'Enabled',
																		'0' => 'Disabled')
														),
										'mode' => array(
														'text' => 'Mode',
														'type' => 'select',
														'options' => array(
																		'live' => 'Live Mode',
																		'test' => 'Sandbox'
																		)
														),
										'site_name' => array(
														'text' => 'Site Name',
														'type' => 'text'
														),
	                                                                         
                                                                                 'site_id' => array(
														'text' => 'Site ID',
														'type' => 'text',
														),										

                                                                                 'password' => array(
														'text' => 'API Password',
														'type' => 'password'
														),
									
										 'currency' => array(
														'text' => 'Currency',
														'type' => 'select',
														'options' => array(
																		'USD' => 'US Dollar',
																		'AUD' => 'Australian Dollar',
																		'CAD' => 'Canadian Dollar',
																		'EUR' => 'Euro',
																		'GBP' => 'British Pound',
																		'JPY' => 'Japanese Yen',
																		'NZD' => 'New Zealand Dollar',
																		'CHF' => 'Swiss Franc',
																		'HKD' => 'Hong Kong Dollar',
																		'SGD' => 'Singapore Dollar',
																		'SEK' => 'Swedish Krona',
																		'DKK' => 'Danish Krone',
																		'PLN' => 'Polish Zloty',
																		'NOK' => 'Norwegian Krone',
																		'HUF' => 'Hungarian Forint',
																		'CZK' => 'Czech Koruna',
																		'ILS' => 'Israeli New Shekel',
																		'MXN' => 'Mexican Peso',
																		'BRL' => 'Brazilian Real',
																		'MYR' => 'Malaysian Ringgit',
																		'PHP' => 'Philippine Peso',
																		'TWD' => 'New Taiwan Dollar',
																		'THB' => 'Thai Baht',
																		'TRY' => 'Turkish Lira'
																	)
														),
										'accept_visa' => array(
														'text' => 'Accept VISA?',
														'type' => 'radio',
														'options' => array(
																		'1' => 'Yes',
																		'0' => 'No'
																	)
														),
										'accept_mc' => array(
														'text' => 'Accept MasterCard?',
														'type' => 'radio',
														'options' => array(
																		'1' => 'Yes',
																		'0' => 'No'
																	)
														),
										'accept_discover' => array(
														'text' => 'Accept Discover?',
														'type' => 'radio',
														'options' => array(
																		'1' => 'Yes',
																		'0' => 'No'
																	)
														),
										'accept_dc' => array(
														'text' => 'Accept Diner\'s Club?',
														'type' => 'radio',
														'options' => array(
																		'1' => 'Yes',
																		'0' => 'No'
																	)
														),
										'accept_amex' => array(
														'text' => 'Accept American Express?',
														'type' => 'radio',
														'options' => array(
																		'1' => 'Yes',
																		'0' => 'No'
																	)
														)
											);
		return $settings;
	}

//---------------------------------------------------------------
	function TestConnection($client_id, $gateway)
	{
		return TRUE;
	}
//---------------------------------------------------------------
	function Charge($client_id, $order_id, $gateway, $customer, $amount, $credit_card)
	{
	$CI =& get_instance();
		if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
		{
		  $client_ip=$_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
		{
		  $client_ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
		  $client_ip=$_SERVER['REMOTE_ADDR'];
		}
	
		$order_id= date('Ymdhis', strtotime($date));
		$post_url = $gateway['url_live'];
		$post_values = array(
			"site_id"			=> $gateway['siteid'],
			"password"		        => $gateway['password'],
			"merchant_reference"		=> $order_id,
			"currency"			=> "USD",
			"type"			        => "1",
			"ip"	                    	=> $client_ip,
			"amount"			=> $amount.".00",
			"product"	                => "New Sale",
            "card_holder"	                => $credit_card['name'],
			"card_number"	                => $credit_card['card_num'],
			"expiry_month"	                => $credit_card['exp_month'],
            "expiry_year"	                => $credit_card['exp_year'],
			"cvv"	                        => $credit_card['cvv'],
		);
		
		
		
		
		if (isset($customer['customer_id'])) {
			$post_values['firstname'] = $customer['first_name'];
			$post_values['lastname'] = $customer['last_name'];
			$post_values['address'] = $customer['address_1'];
			$post_values['city'] = $customer['city'];
            $post_values['state'] = $customer['state'];
			$post_values['zipcode'] = $customer['postal_code'];
			$post_values['country'] = $customer['country'];
			$post_values['email'] = $customer['email'];
            $post_values['phone'] = $customer['phone'];
		}
		// build NVP post string
		
		$post_string = "";
		foreach($post_values as $key => $value) {
			$post_string .= "$key=" . urlencode( $value ) . "&";
		}
		$post_string = rtrim($post_string, "& "); 
		  
		 
		$response=$this->Process($post_values,$order_id);

		if ($response['message'] == 'Success') {
			$response_array = array('charge_id' => $order_id);
			$response = $CI->response->TransactionResponse(1, $response_array);
		} else {
			$response_array = array('reason' => $response['message']);
			$response = $CI->response->TransactionResponse(2, $response_array);
		}
		return $response;
	}

	 

	function Recur ($client_id, $gateway, $customer, $amount, $charge_today, $start_date, $end_date, $interval, $credit_card, $subscription_id, $total_occurrences = FALSE)

	{

		$CI =& get_instance();



		// Get our customer array cleaned up so that invalide XML characters will not cause issues.

		$this->EncodeArray($customer);



		// Create a new authnet profile if one doesn't exist

		$CI->db->select('api_customer_reference');

		$CI->db->join('client_gateways', 'subscriptions.gateway_id = client_gateways.client_gateway_id', 'inner');

		$CI->db->join('external_apis', 'client_gateways.external_api_id = external_apis.external_api_id', 'inner');

		$CI->db->where('api_customer_reference !=','');

		$CI->db->where('subscriptions.gateway_id',$gateway['gateway_id']);

		$CI->db->where('subscriptions.active', 1);

		$CI->db->where('subscriptions.customer_id',$customer['customer_id']);

		$current_profile = $CI->db->get('subscriptions');



		if ($current_profile->num_rows() > 0) {

			// save the profile ID

			$current_profile = $current_profile->row_array();

			$profile_id = $current_profile['api_customer_reference'];



			// get payment profile to see if a matching one exists

			$payment_profiles = $this->GetCustomerProfile($profile_id, $gateway);



			// In case there are multiple profiles, make sure ours matches via last 4 of card.

			if (isset($payment_profiles->profile->paymentProfiles)) {

				foreach ($payment_profiles->profile->paymentProfiles as $payment_profile) {

					$card_number = (string)$payment_profile->payment->creditCard->cardNumber;



					if (substr($card_number, -4, 4) == substr($credit_card['card_num'],-4,4)) {

						$payment_profile_id = (string)$payment_profile->customerPaymentProfileId;

						$current_payment_profile = $payment_profile;

					}

				}

			}



		}

		else {

			$response = $this->CreateProfile($gateway, $subscription_id, $customer);



			if(isset($response) and !empty($response['success'])) {

				$profile_id = $response['profile_id'];

			}

		}



		if (empty($profile_id)) {

			$add_text = (isset($response['reason'])) ? $response['reason'] : FALSE;

			$CI->recurring_model->DeleteRecurring($subscription_id);

			die($CI->response->Error(5005, $add_text));

		}



		// save the api_customer_reference

		$CI->load->model('recurring_model');

		$CI->recurring_model->SaveApiCustomerReference($subscription_id, $profile_id);



		if (!isset($payment_profile_id) or empty($payment_profile_id)) {

			// Create the payment profile

			$response = $this->CreatePaymentProfile($profile_id, $gateway, $credit_card, $customer);

			if(isset($response) and is_array($response) and isset($response['payment_profile_id'])) {

				$payment_profile_id = $response['payment_profile_id'];

			}

		}

		else {

			// We have a payment profile ID, so update the customer's information at Bankea.

			$this->UpdateCustomerProfile($profile_id, $payment_profile_id, $gateway, $current_payment_profile, $customer);

		}



		if (empty($payment_profile_id)) {

			$add_text = (isset($response['reason'])) ? $response['reason'] : FALSE;

			$CI->recurring_model->DeleteRecurring($subscription_id);

			die($CI->response->Error(5006, $add_text));

		}



		// Save the api_payment_reference

		$CI->recurring_model->SaveApiPaymentReference($subscription_id, $payment_profile_id);



		// If a payment is to be made today, process it.

		if ($charge_today === TRUE) {

			// Create an order for today's payment

			$CI->load->model('charge_model');

			$order_id = $CI->charge_model->CreateNewOrder($client_id, $gateway['gateway_id'], $amount, $credit_card, $subscription_id, $customer['customer_id'], $customer['ip_address']);



			$response = $this->ChargeRecurring($client_id, $gateway, $order_id, $profile_id, $payment_profile_id, $amount);



			if($response['success'] == TRUE){

				$CI->charge_model->SetStatus($order_id, 1);

				$response_array = array('charge_id' => $order_id, 'recurring_id' => $subscription_id);

				$response = $CI->response->TransactionResponse(100, $response_array);

			} else {

				// Make the subscription inactive

				$CI->recurring_model->MakeInactive($subscription_id);



				$response_array = array('reason' => $response['reason']);

				$response = $CI->response->TransactionResponse(2, $response_array);

			}

		} else {

			$response = $CI->response->TransactionResponse(100, array('recurring_id' => $subscription_id));

		}



		return $response;

	}

	
//--------------------------------------------------------------------

	function Refund ($client_id, $gateway, $charge, $authorization)
	{
$CI =& get_instance();
		$order_id= date('Ymdhis', strtotime($date));
		$post_url = $this->GetAPIUrl($gateway);
		$post_values = array(
			"site_id"			=> $gateway['site_id'],
			"password"		        => $gateway['password'],
			"merchant_reference"		=> $order_id,
			"currency"			=> "USD",
			"type"			        => "5",
                        "ip"	                    	=> $client_ip,
			"amount"			=> $amount,
			"product"	                => "New Sale",
                        "card_holder"	                => $credit_card['name'],
			"card_number"	                => $credit_card['card_num'],
			"expiry_month"	                => $credit_card['exp_month'],
                        "expiry_year"	                => $credit_card['exp_year'],
			"cvv"	                        => $credit_card['cvv'],
		);
		if (isset($customer['customer_id'])) {
			$post_values['firstname'] = $customer['first_name'];
			$post_values['lastname'] = $customer['last_name'];
			$post_values['address'] = $customer['address_1'];
			$post_values['city'] = $customer['city'];
                        $post_values['state'] = $customer['state'];
			$post_values['zipcode'] = $customer['postal_code'];
			$post_values['country'] = $customer['country'];
			$post_values['email'] = $customer['email'];
                        $post_values['phone'] = $customer['phone'];
		}
		// build NVP post string
		$post_string = "";
		foreach($post_values as $key => $value) {
			$post_string .= "$key=" . urlencode( $value ) . "&";
		}
		$post_string = rtrim($post_string, "& ");
		$response = $this->Process($order_id, $post_url, $post_string);
		if ($this->debug)
		{
			$this->log_it('Charge Params: ', $post_string);
			$this->log_it('Charge Response: ', $response);
		}

		if ($response[110] == '9') {
			$response_array = array('charge_id' => $order_id);
			$response = $CI->response->TransactionResponse(1, $response_array);
		} else {
			$response_array = array('reason' => $response['reason']);
			$response = $CI->response->TransactionResponse(2, $response_array);
		}
		return $response;

	}

//--------------------------------------------------------------------
	
	function CancelRecurring($client_id, $subscription)
	{	
		return TRUE;
	}

//---------------------------------------------------------------

	function CreateProfile($gateway, $subscription_id, $customer = array())

	{
		$CI =& get_instance();

		$key = $gateway[$gateway['mode'] .'_api_key'];
		Stripe::setApiKey($key);

		$data = array(
			'email'	=> $customer['email'],
			'description'	=> isset($customer['firstname']) ? $customer['firstname'] .' '. $customer['lastname'] : '',
			'card'	=> array(
				'card_number'			=> $credit_card['card_num'],
				'expiry_month'			=> $credit_card['exp_month'],
				'expiry_year'			=> $credit_card['exp_year'],
				'cvv'				=> $credit_card['cvv'],
				'card_holder'			=> $credit_card['name'],
				'address'		        => isset($customer['address1']) ? $customer['address1'] : null,
				'city'		                => isset($customer['city']) ? $customer['city'] : null,
				'zipcode'		        => isset($customer['postal_code']) ? $customer['postal_code'] : null,
				'state'		                => isset($customer['state']) ? $customer['state'] : null,
				'country'	                => isset($customer['country']) ? $customer['country'] : null,
			)
		);

		$response = array();

		try {
			// Successful Creation
			$customer = Bankea_Customer::create($data);

			$response['success'] = true;
			$response['customer_id'] = $customer->id;

			// Save the Auth information
			$CI->load->model('recurring_model');
			$CI->recurring_model->SaveApiCustomerReference($subscription_id, $customer->id);
		}
		catch (Exception $e)
		{
			// Failed creation
			$response['success'] = false;
			$response['reason'] = $e->getMessage();
		}

		return $response;
	}

	

//---------------------------------------------------------------


function Process($request, $order_id)

	{


		$CI =& get_instance();
		$request['amount'] = round($request['amount'], 2);
		//$request = array_merge($this->_settings(), $request);
		

		$ch = curl_init("https://admin.bankea.com/api/cc.php");
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($request));
		$response_str = curl_exec($ch);
		curl_close($ch);
		parse_str($response_str, $response);
		
		return $response;

		$post_response = explode("&",$result);
		$post_resp = explode("=",$post_response[0]);
		//$post_resp = explode("=",$post_response[3]);
		$post_resp=trim($post_resp[1]);
		
		$paynet = explode("=",$post_response[3]);
		$paynet_order=trim($post_resp[1]);
		
		//die(print_r($post_resp));
		if ($post_resp == "async-response") {
			$CI->load->model('order_authorization_model');
			$CI->order_authorization_model->SaveAuthorization($order_id, $merchant_reference, 1);
			$CI->charge_model->SetStatus($order_id, 1);
		} else {
			$CI->load->model('charge_model');
			$CI->charge_model->SetStatus($order_id, 0);
		}
		return $post_resp;
	}

 
	
	function AutoRecurringCharge ($client_id, $order_id, $gateway, $params) {
		$response = array();
		$response['success'] = TRUE;

		return $response;
	}

//---------------------------------------------------------------

	
	function UpdateRecurring()
	{
		return TRUE;
	}

 
	function EncodeArray(&$items = null)

	{

		if (!is_array($items) || !count($items))

		{

			return;

		}



		foreach ($items as $item => &$value)

		{

			if (is_string($value))

			{

				$value = htmlspecialchars($value);

			}

			else if (is_array($value))

			{

				$value = $this->EncodeArray($value);

			}

		}

	}
 
	public function log_it($heading, $params)

	{

		$file = FCPATH .'writeable/gateway_log.txt';



		$content  = '';

		$content .= "\n\n//---------------------------------------------------------------\n";

		$content .= "\n\n[{$this->settings['name']}] $heading\n";

		$content .= date('Y-m-d H:i:s') ."\n\n";

		$content .= print_r($params, true);

		file_put_contents($file, $content, FILE_APPEND);

	}
}