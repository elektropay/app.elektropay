<?php
class crystalpay
{
	var $settings;
	private $debug = false;
	//---------------------------------------------------------------
	function crystalpay() {
		$this->settings = $this->Settings();
	}
	//---------------------------------------------------------------
	function Settings()
	{
		$settings = array();
		$settings['name'] = 'Crystal Payments';
		$settings['class_name'] = 'crystalpay';
		$settings['external'] = FALSE;
		$settings['no_credit_card'] = TRUE;
		$settings['description'] = 'Situated in heart of Asia, Crystal Payments has become a payment service provider for international merchant accounts. With Operating offices in countries like Hong Kong, Singapore, United Kingdom, Mauritius, Malaysia, Thailand and the Philippines. Our expertise in global payments and internet business is well known.';
		$settings['is_preferred'] = 1;
		$settings['setup_fee'] = '$1500';
		$settings['monthly_fee'] = '$100';
		$settings['transaction_fee'] = '0.60 cents';
		$settings['purchase_link'] = 'http://www.crystalpayments.biz/apply-merchant-pre.aspx';
		$settings['allows_updates'] = 1;
		$settings['allows_refunds'] = 1;
		$settings['requires_customer_information'] = 1;
		$settings['requires_customer_ip'] = 1;
		$settings['required_fields'] = array(
										'enabled',
										'mode',
										'control',
										'endpoint'
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
																		'prod' => 'Prod Mode',
																		'test' => 'Test Mode',
																		)
														),
										'control' => array(
														'text' => 'Control Key',
														'type' => 'text'
														),
										'endpoint' => array(
														'text' => 'Non 3D Endpoint',
														'type' => 'text'
														),
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
		$charge_id = $order_id;
		$endpointid=$gateway['endpoint'];
		$order_id=date('Ymdhis', strtotime($date));
		$merchant_control=$gateway['control'];
		$amount_in_cents=$amount*100;
		$control= sha1($endpointid . $order_id . $amount_in_cents . $customer['email'] . $merchant_control);
		file_put_contents(APPPATH.'/../abc.txt', $endpointid . $client_orderid . $amount_in_cents . $customer['email'] . $merchant_control);
		$post_values = array(
			"card_printed_name"	=> $customer['first_name'] . ' ' . $customer['last_name'],
			"control"			=> $control,
			"credit_card_number"	=> $credit_card['card_num'],
			"amount"			=> $amount,
			"expire_year"	=> $credit_card['exp_year'],
			"expire_month"	=> $credit_card['exp_month'],
			"cvv2"	                => $credit_card['cvv'],
			"client_orderid"		=> $order_id,
			"ipaddress"		=> $client_ip,
			"currency"			=> "USD",
			"order_desc"	=> "order desc",
			"redirect_url"	=> "https://everpayinc.com/transactions/create",
		);
		if (isset($customer['customer_id'])) {
			$post_values['address1'] = $customer['address_1'];
			$post_values['city'] = $customer['city'];
			$post_values['state'] = $customer['state'];
			$post_values['zip_code'] = $customer['postal_code'];
			$post_values['country'] = $customer['country'];
			$post_values['phone'] = $customer['phone'];
			$post_values['email'] = $customer['email'];
		}
		// build NVP post string
		$post_string = "";
		foreach($post_values as $key => $value) {
			$post_string .= "$key=" . urlencode( $value ) . "&";
		}
		$post_string = rtrim($post_string, "& ");
		$post_url = $this->GetAPIUrl($gateway, $endpointid);
		$response = $this->Process($order_id, $post_url, $post_string);
		
		if ($this->debug)
		{
			$this->log_it('Charge Params: ', $post_string);
			$this->log_it('Charge Response: ', $response);
		}

		if ($response == "async-response") {
			$response_array = array('charge_id' => $charge_id);
			$response = $CI->response->TransactionResponse(1, $response_array);
		} else {
			$response_array = array('reason' => $response);
			$response = $CI->response->TransactionResponse(2, $response_array);
		}
		return $response;
	}

	//---------------------------------------------------------------

	function Recur ($client_id, $gateway, $customer, $amount, $charge_today, $start_date, $end_date, $interval, $credit_card, $subscription_id, $total_occurrences = FALSE)
{
		return false;

}


	/*

		Method: UpdateCustomerProfile()



		Updates the customer's payment profile stored at Crystal Payments with the latest

		customer information.



		Parameters:

			$profile_id	- the customer's profile id.

			$payment_profile_id	- The customer's payment profile id

			$gateway	- The gateway info

			$orig		- AN will blank out any fields that don't have a value, so we need our originals.

			$new		- The new Customer profile information

	*/
	//--------------------------------------------------------------------
	function Refund ($client_id, $gateway, $charge, $authorization)
	{
		$CI =& get_instance();
		$order_id= date('Ymdhis', strtotime($date));
		$post_url = $this->GetAPIUrl($gateway);
		$post_values = array(
			"NumSite"			=> $gateway['NumSite'],
			"Password"		=> $gateway['Password'],
			"orderID"		=> $order_id,
			"Currency"			=> "USD",
			"Language"			=> "en",
			"Amount"			=> $amount,
			"PaymentMethod"	=> "PP",
			"Signature"	=> $gateway['orderID']+$gateway['Password']+$amount,
			"CARDNO"	=> $credit_card['card_num'],
			"ED"	=> $credit_card['exp_month'] . '/' . substr($credit_card['exp_year'],-2,2),
			"CVC"	=> $credit_card['cvv'],
		);
		if (isset($customer['customer_id'])) {
			$post_values['CustFirstName'] = $customer['first_name'];
			$post_values['CustLastName'] = $customer['last_name'];
			$post_values['CustAddress1'] = $customer['address_1'];
			$post_values['CustCity'] = $customer['city'];
			$post_values['CustZIP'] = $customer['postal_code'];
			$post_values['CustCountry'] = $customer['country'];
			$post_values['EMAIL'] = $customer['email'];
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
	//---------------------------------------------------------------
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
			'EMAIL'	=> $customer['email'],
			'description'	=> isset($customer['CustFirstName']) ? $customer['CustFirstName'] .' '. $customer['CustLastName'] : '',
			'card'	=> array(
				'number'			=> $credit_card['card_num'],
				'exp_month'			=> $credit_card['exp_month'],
				'exp_year'			=> $credit_card['exp_year'],
				'cvc'				=> $credit_card['cvv'],
				'name'				=> $credit_card['name'],
				'address_line1'		=> isset($customer['address1']) ? $customer['address1'] : null,
				'address_line2'		=> isset($customer['address2']) ? $customer['address2'] : null,
				'address_zip'		=> isset($customer['postal_code']) ? $customer['postal_code'] : null,
				'address_state'		=> isset($customer['state']) ? $customer['state'] : null,
				'address_country'	=> isset($customer['country']) ? $customer['country'] : null,
			)
		);

		$response = array();

		try {
			// Successful Creation
			$customer = Crystalpay_Customer::create($data);

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



	function CreatePaymentProfile($profile_id, $gateway, $credit_card, $customer)

	{

		$CI =& get_instance();



		$post_url = $this->GetAPIUrl($gateway, 'arb');



		$first_name = $customer['first_name'];

		$last_name = $customer['last_name'];



		if (!empty($customer['address_1']) /*and strlen($customer['state']) == 2*/) {

			$customer_details =  "<company>" . $customer['company'] . "</company>".

								 "<address>" . $customer['address_1'] . "</address>".

								 "<city>" . $customer['city'] . "</city>".

								 "<state>" . $customer['state'] . "</state>".

								 "<zip>" . $customer['postal_code'] . "</zip>";

			if (isset($customer['country'])/* && ($customer['country'] == 'US' || $customer['country'] == 'CA')*/)

			{

				$customer_details .= "<country>" . $customer['country'] . "</country>";

			}

			$customer_details .= "<phoneNumber>" . $customer['phone'] . "</phoneNumber>";

		}

		else {

			$customer_details = '';

		}



		$card_code = (isset($credit_card['cvv'])) ? "<cardCode>" . $credit_card['cvv'] . '</cardCode>' : '';



		$content =

		"<?xml version=\"1.0\" encoding=\"utf-8\"?>" .

		"<createCustomerPaymentProfileRequest xmlns=\"AnetApi/xml/v1/schema/AnetApiSchema.xsd\">" .

		"<merchantAuthentication>

	        <name>".$gateway['login_id']."</name>

	        <transactionKey>".$gateway['transaction_key']."</transactionKey>

	    </merchantAuthentication>

		".

		"<customerProfileId>" . $profile_id . "</customerProfileId>".

		"<paymentProfile>".

		"<billTo>".

		 "<firstName>".$first_name."</firstName>".

		 "<lastName>".$last_name."</lastName>".

	      $customer_details .

		"</billTo>".

		"<payment>".

		 "<creditCard>".

		  "<cardNumber>".$credit_card['card_num']."</cardNumber>".

		  "<expirationDate>".str_pad($credit_card['exp_year'], 4, "20", STR_PAD_LEFT)."-".str_pad($credit_card['exp_month'], 2, "0", STR_PAD_LEFT)."</expirationDate>". // required format for API is YYYY-MM

		  $card_code.

		 "</creditCard>".

		"</payment>".

		"</paymentProfile>".

		"<validationMode>testMode</validationMode>\n";



		$content .= "</createCustomerPaymentProfileRequest>";



		$request = curl_init($post_url); // initiate curl object

		curl_setopt($request, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response

		curl_setopt($request, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)

		curl_setopt($request, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml"));

		curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE);   // Verify it belongs to the server.

	    curl_setopt($request, CURLOPT_SSL_VERIFYHOST, FALSE);   // Check common exists and matches the server host name

		curl_setopt($request, CURLOPT_POSTFIELDS, $content); // use HTTP POST to send form data

		$post_response = curl_exec($request); // execute curl post and store results in $post_response



		curl_close($request); // close curl object



		@$response = simplexml_load_string($post_response);



		if ($this->debug)

		{

			$this->log_it('CreatePaymentProfile Params: ', $content);

			$this->log_it('CreatePaymentProfile Response: ', $response);

		}



		$return = array();



		if($response->messages->resultCode == 'Ok') {

			$return['success'] = TRUE;

			$return['payment_profile_id'] = (string)$response->customerPaymentProfileId;

		} else {

			$return['success'] = FALSE;

			$return['reason'] = (string)$response->messages->message->text;

		}



		return $return;

	}
	//---------------------------------------------------------------
	function GetCustomerProfile ($profile_id, $gateway) {
		return false;
	}
	//--------------------------------------------------------------------
	function AutoRecurringCharge ($client_id, $order_id, $gateway, $params) {
		return $this->ChargeRecurring($client_id, $gateway, $order_id, $params['api_customer_reference'], $params['api_payment_reference'], $params['amount']);

	}



	//---------------------------------------------------------------



	function ChargeRecurring($client_id, $gateway, $order_id, $profile_id, $payment_profile_id, $amount)

	{

		$CI =& get_instance();



		$post_url = $this->GetAPIUrl($gateway, 'arb');



		$content =

		"<?xml version=\"1.0\" encoding=\"utf-8\"?>" .

		"<createCustomerProfileTransactionRequest xmlns=\"AnetApi/xml/v1/schema/AnetApiSchema.xsd\">" .

		 "<merchantAuthentication>

	        <name>".$gateway['login_id']."</name>

	        <transactionKey>" . $gateway['transaction_key'] . "</transactionKey>

	    </merchantAuthentication>".

		"<transaction>".

		"<profileTransAuthCapture>".

		"<amount>" . $amount . "</amount>".

		"<customerProfileId>" . $profile_id . "</customerProfileId>".

		"<customerPaymentProfileId>" . $payment_profile_id . "</customerPaymentProfileId>".

		"<order>".

		"<invoiceNumber>".$order_id."</invoiceNumber>".

		"<description>Order #".$order_id."</description>".

		"</order>".

		"</profileTransAuthCapture>".

		"</transaction>

		</createCustomerProfileTransactionRequest>";



		$request = curl_init($post_url); // initiate curl object

		curl_setopt($request, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response

		curl_setopt($request, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)

		curl_setopt($request, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml"));

		curl_setopt($request, CURLOPT_POSTFIELDS, $content); // use HTTP POST to send form data

		curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE);   // Verify it belongs to the server.

	    curl_setopt($request, CURLOPT_SSL_VERIFYHOST, FALSE);   // Check common exists and matches the server host name

		$post_response = curl_exec($request); // execute curl post and store results in $post_response



		curl_close($request); // close curl object



		@$post_response = simplexml_load_string($post_response);



		if ($this->debug)

		{

			$this->log_it('ChargeRecurring Params: ', $content);

			$this->log_it('ChargeRecurring Response: ', $post_response);

		}



		if($post_response->messages->resultCode == 'Ok') {

			// Get the auth code

			$post_response = explode(',', $post_response->directResponse);

			$CI->load->model('order_authorization_model');

			$CI->order_authorization_model->SaveAuthorization($order_id, $post_response[6], $post_response[4]);

			$response['success'] = TRUE;

		} else {

			$response['success'] = FALSE;

			$response['reason'] = (string)$post_response->messages->message->text[0];

		}



		return $response;

	}



	//---------------------------------------------------------------



	function UpdateRecurring()

	{

		return TRUE;

	}



	//---------------------------------------------------------------



	function Process($order_id, $post_url, $post_string, $test = FALSE)
	{
		$CI =& get_instance();
		$request = curl_init($post_url); // initiate curl object
		curl_setopt($request, CURLOPT_URL, $post_url);
		curl_setopt($request, CURLOPT_POST, TRUE);
		curl_setopt($request, CURLOPT_POSTFIELDS, $post_string);
		curl_setopt($request, CURLOPT_RETURNTRANSFER, TRUE);
		$result = curl_exec($request);
		file_put_contents(APPPATH.'/../abc.txt', print_r($result, true));
		curl_close($request);

		$post_response = explode("&",$result);
		$post_resp = explode("=",$post_response[0]);
		//$post_resp = explode("=",$post_response[3]);
		$post_resp=trim($post_resp[1]);
		
		$paynet = explode("=",$post_response[3]);
		$paynet_order=trim($post_resp[1]);
		
		//die(print_r($post_resp));
		if ($post_resp == "async-response") {
			$CI->load->model('order_authorization_model');
			$CI->order_authorization_model->SaveAuthorization($order_id, $paynet_order, 1);
			$CI->charge_model->SetStatus($order_id, 1);
		} else {
			$CI->load->model('charge_model');
			$CI->charge_model->SetStatus($order_id, 0);
		}
		return $post_resp;
	}
	//---------------------------------------------------------------
	function GetAPIUrl ($gateway, $endpointid) {
		switch($gateway['mode'])
			{
				case 'prod':
					$post_url = "https://crystals-pay.biz/paynet/api/v2/sale/".$endpointid;
				break;
				case 'test':
					$post_url = "https://sandbox.crystals-pay.biz/paynet/api/v2/sale/".$endpointid;
				break;
			}
		return $post_url;
	}



	//---------------------------------------------------------------



	/**

	 * Htmlspecialchars all individual items in an array.

	 *

	 */

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



	//---------------------------------------------------------------



	/*

		Method: log_it()



		Logs the transaction to a file. Helpful with debugging callback

		transactions, since we can't actually see what's going on.



		Parameters:

			$heading	- A string to be placed above the resutls

			$params		- Typically an array to print_r out so that we can inspect it.

	*/

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