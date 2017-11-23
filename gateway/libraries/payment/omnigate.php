<?php
class omnigate
{
	var $settings;
	private $debug = false;
	//---------------------------------------------------------------
	function omnigate() {
		$this->settings = $this->Settings();
	}
	//---------------------------------------------------------------
	function Settings()
	{
		$settings = array();
		$settings['name'] = 'Omni Payments';
		$settings['class_name'] = 'omnigate';
		$settings['external'] = FALSE;
		$settings['no_credit_card'] = TRUE;
		$settings['description'] = 'OmniPayment secures and handles the “merchants” payment processing by integrating, reporting and managing the different payment methods from all kinds of sales channels, different credit cards types and multi-currency payments in real-time. Merchants are not required to establish a company in the acquiring bank’s country.';
		$settings['is_preferred'] = 1;
		$settings['setup_fee'] = '7%';
		$settings['monthly_fee'] = '$50';
		$settings['transaction_fee'] = '$1.25';
		$settings['purchase_link'] = 'http://omnipayment.com/application.html';
		$settings['allows_updates'] = 1;
		$settings['allows_refunds'] = 1;
		$settings['requires_customer_information'] = 1;
		$settings['requires_customer_ip'] = 1;
		$settings['required_fields'] = array(
										'enabled',
										'mode',
										'NumSite',
										'Password'
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
										'NumSite' => array(
														'text' => 'NumSite',
														'type' => 'text'
														),
										'Password' => array(
														'text' => 'Password',
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

			// We have a payment profile ID, so update the customer's information at AuthNet.

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



	/*

		Method: UpdateCustomerProfile()



		Updates the customer's payment profile stored at Authorize.net with the latest

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
			$customer = Stripe_Customer::create($data);

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

		$CI =& get_instance();



		$post_url = $this->GetAPIUrl($gateway, 'arb');



		$content = '<?xml version="1.0" encoding="utf-8"?>

					<getCustomerProfileRequest

					xmlns="AnetApi/xml/v1/schema/AnetApiSchema.xsd">

					<merchantAuthentication>

						<name>' . $gateway['login_id'] . '</name>

						<transactionKey>' . $gateway['transaction_key'] . '</transactionKey>

					</merchantAuthentication>

					<customerProfileId>' . $profile_id . '</customerProfileId>

					</getCustomerProfileRequest>';



		$request = curl_init($post_url); // initiate curl object

		curl_setopt($request, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response

		curl_setopt($request, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)

		curl_setopt($request, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml"));

		curl_setopt($request, CURLOPT_POSTFIELDS, $content); // use HTTP POST to send form data

		curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE);   // Verify it belongs to the server.

	    curl_setopt($request, CURLOPT_SSL_VERIFYHOST, FALSE);   // Check common exists and matches the server host name

		$post_response = curl_exec($request); // execute curl post and store results in $post_response



		curl_close($request); // close curl object



		@$response = simplexml_load_string($post_response);



		if ($this->debug)

		{

			$this->log_it('GetCustomerProfile Params: ', $content);

			$this->log_it('GetCustomerProfile Response: ', $response);

		}



		return $response;

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
		$post_response = curl_exec($request);
		curl_close ($request); // close curl object

//		$xml = simplexml_load_string($post_response);
//		$response=$xml->ncresponse[0];
		$response=$post_response;
		
		//die(print_r($response));
		if ($response[110] == '9') {
			$CI->load->model('order_authorization_model');
			$CI->order_authorization_model->SaveAuthorization($order_id, $response[6], $response[4]);
			$CI->charge_model->SetStatus($order_id, 1);
		} else {
			$CI->load->model('charge_model');
			$CI->charge_model->SetStatus($order_id, 0);
		}
		return $response;
	}
	//---------------------------------------------------------------
	function GetAPIUrl ($gateway, $mode = FALSE) {

		if ($mode == FALSE) {

			// Get the proper URL

			switch($gateway['mode'])

			{

				case 'prod':

					$post_url = "https://www.omnipaymentapi.com/test/access.php";

				break;

				case 'test':

					$post_url = "https://www.omnipaymentapi.com/prod/access.php";

				break;

			}

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