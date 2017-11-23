<?php
/**
* Client Model
*
* Contains all the methods used to create, update, and delete clients.
*
* @version 1.0
* @author Electric Function, Inc.
* @package OpenGateway

* Client Types
* 1 = Service Provider
* 2 = End User
* 3 = Administrator

*/
class Client_model extends Model
{
	var $cache;

	function __construct()
	{
		parent::__construct();
	}

	/**
	* Create a new gateway client
	*
	* Creates a new client.
	*
	* @param int $client_id The client ID of the Parent Client
	* @param string $params['first_name'] Client's first name
	* @param string $params['last_name'] Client's last name
	* @param string $params['company'] Client's company
	* @param string $params['address_1'] Client's address line 1.
	* @param string $params['address_2'] Client's address line 2. Optional.
	* @param string $params['city'] Client's city
	* @param string $params['state'] Client's state.  If in the US or Canada, it should be the 2-letter abbreviation.  The system will try to determin the correct county.
	* @param string $params['postal_code'] Client's postal code
	* @param string $params['country'] Client's country in ISO format.
	* @param string $params['phone'] Client's phone
	* @param string $params['email'] Client's email
	* @param string $params['username'] Client's username
	* @param string $params['password'] Client's password
	* @param boolean $first_client If this is the first client, it is not required to be created by a parent client
	*
	* @return array Containing new User ID, API ID and Secret Key
	*/
	function NewClient($client_id, $params, $first_client = FALSE)
	{
		// Make sure this client is authorized to create a child client
		if ($client_id and $first_client == FALSE) {
			$client = $this->GetClientDetails($client_id);
			$array = array(1,3);
			if(!in_array($client->client_type_id, $array)) {
				die($this->response->Error(2000));
			}
		}

		// Validate the required fields
		$this->load->library('field_validation');
		$this->field_validation->ValidateRequiredFields('NewClient', $params);

		// fill empty fields
		$params['address_1'] = isset($params['address_1']) ? $params['address_1'] : '';
		$params['address_2'] = isset($params['address_2']) ? $params['address_2'] : '';
		$params['city'] = isset($params['city']) ? $params['city'] : '';
		$params['state'] = isset($params['state']) ? $params['state'] : '';
		$params['country'] = isset($params['country']) ? $params['country'] : '';
		$params['postal_code'] = isset($params['postal_code']) ? $params['postal_code'] : '';

		// Make sure the country is in the proper format
		if (!empty($params['country'])) {
			$country_id = $this->field_validation->ValidateCountry($params['country']);
			if (!$country_id) {
				die($this->response->Error(1007));
			}
		}
		else {
			$country_id = 0;
		}

		// If the country is US or Canada, we need to validate and supply the 2 letter abbreviation
		$this->load->helper('states_helper');
		$country_array = array(124,840);
		if (in_array($country_id, $country_array)) {
			$state = GetState($params['state']);
			if ($state) {
				$params['state'] = $state;
			} else {
				die($this->response->Error(1012));
			}
		}

		$valid_email = $this->field_validation->ValidateEmailAddress($params['email']);

		if(!$valid_email) {
			die($this->response->Error(1008));
		}

		// If a timezone was provided, validate it
		if(isset($params['timezone'])) {
			$timezone = $params['timezone'];
		} else {
			$timezone = 'UTC';
		}

		// Make sure the username is not already in use
		$exists = $this->UsernameExists($params['username']);

		if($exists) {
			die($this->response->Error(2002));
		}

		// let's see what type of client we are making
		if (isset($params['client_type'])) {
			if ($params['client_type'] == 1 and $client->client_type_id != 3) {
				// only Administrators can make Service Providers
				die($this->response->Error(2006));
			}
			elseif ($params['client_type'] < 1 or ($params['client_type'] > 2 and $first_client == FALSE) or !is_numeric($params['client_type'])) {
				die($this->response->Error(2007));
			}
		}
		else {
			$params['client_type'] = 2;
		}

		// Make sure the password meets the requirements
		$valid_pass = $this->ValidatePassword($params['password']);

		if(!$valid_pass) {
			die($this->response->Error(2003));
		}

		// handle empty phone
		$params['phone'] = (isset($params['phone'])) ? $params['phone'] : '000-000-0000';

		// Generate an API ID and Secret Key
		$this->load->library('key');
		$api_id = strtoupper($this->key->GenerateKey(20));
		$secret_key = strtoupper($this->key->GenerateKey(40));

		// Create the new Client
		$insert_data = array(
							'client_type_id'	=> $params['client_type'],
							'first_name' 		=> $params['first_name'],
							'last_name'  		=> $params['last_name'],
							'company'	 		=> $params['company'],
							'address_1'  		=> $params['address_1'],
							'address_2'  		=> $params['address_2'],
							'city'				=> $params['city'],
							'state'		 		=> $params['state'],
							'postal_code'		=> $params['postal_code'],
							'country'	 		=> $country_id,
							'gmt_offset'		=> $timezone,
							'phone'				=> $params['phone'],
							'email'		 		=> $params['email'],
							'parent_client_id' 	=> $client_id,
							'api_id'			=> $api_id,
							'secret_key'		=> $secret_key,
							'username'			=> $params['username'],
							'password'			=> md5($params['password'] . $params['email'])
							);

		if (isset($params['tax_id'])) {

			$insert_data['tax_id'] = $params['tax_id'];
		}
		if (isset($params['business_start'])) {

			$insert_data['business_start'] = $params['business_start'];
		}
		if (isset($params['business_category'])) {

			$insert_data['business_category'] = $params['business_category'];
		}
		if (isset($params['business_address'])) {

			$insert_data['business_address'] = $params['business_address'];
		}
		if (isset($params['business_city'])) {

			$insert_data['business_city'] = $params['business_city'];
		}
		if (isset($params['business_state'])) {

			$insert_data['business_state'] = $params['business_state'];
		}
		if (isset($params['business_zip'])) {

			$insert_data['business_zip'] = $params['business_zip'];
		}
		if (isset($params['business_country'])) {

			$insert_data['business_country'] = $params['business_country'];
		}
		if (isset($params['business_phone'])) {

			$insert_data['business_phone'] = $params['business_phone'];
		}
		if (isset($params['business_fax'])) {

			$insert_data['business_fax'] = $params['business_fax'];
		}
		if (isset($params['business_url'])) {

			$insert_data['business_url'] = $params['business_url'];
		}
		if (isset($params['business_monthly_vol'])) {

			$insert_data['business_monthly_vol'] = $params['business_monthly_vol'];
		}
		if (isset($params['bank_routing_number'])) {

			$insert_data['bank_routing_number'] = $params['bank_routing_number'];
		}
		if (isset($params['bank_acc_number'])) {

			$insert_data['bank_acc_number'] = $params['bank_acc_number'];
		}
		if (isset($params['bank_acc_type'])) {

			$insert_data['bank_acc_type'] = $params['bank_acc_type'];
		}
		if (isset($params['bank_name'])) {

			$insert_data['bank_name'] = $params['bank_name'];
		}
		if (isset($params['bank_acc_name'])) {

			$insert_data['bank_acc_name'] = $params['bank_acc_name'];
		}
		if (isset($params['is_non_us'])) {

			$insert_data['is_non_us'] = $params['is_non_us'];
		}
		if (isset($params['bank_swift_number'])) {

			$insert_data['bank_swift_number'] = $params['bank_swift_number'];
		}
		if (isset($params['bank_address'])) {

			$insert_data['bank_address'] = $params['bank_address'];
		}
		if (isset($params['payment_types'])) {

			$insert_data['payment_types'] = $params['payment_types'];
		}
		if (isset($params['credit_card'])) {

			$insert_data['credit_card'] = $params['credit_card'];
		}
		if (isset($params['echeck'])) {

			$insert_data['echeck'] = $params['echeck'];
		}
		if (isset($params['merchant_number'])) {

			$insert_data['merchant_number'] = $params['merchant_number'];
		}
		if (isset($params['terminal_number'])) {

			$insert_data['terminal_number'] = $params['terminal_number'];
		}
		if (isset($params['store_number'])) {

			$insert_data['store_number'] = $params['store_number'];
		}

		$this->db->insert('clients', $insert_data);

		$response = array(
						 'client_id' 	=> $this->db->insert_id(),
						 'api_id' 		=> $api_id,
						 'secret_key' 	=> $secret_key
						 );

		return $response;
	}

	/**
	* Regenerate API Access Info
	*
	* Generates a new API ID and Secret key for the client
	*
	* @return bool TRUE upon success
	*/
	function GenerateNewAccessKeys ($client_id)
	{
		// Generate an API ID and Secret Key
		$this->load->library('key');
		$api_id = strtoupper($this->key->GenerateKey(20));
		$secret_key = strtoupper($this->key->GenerateKey(40));

		$update_data = array(
							'api_id' => $api_id,
							'secret_key' => $secret_key
						);

		$this->db->where('client_id',$client_id);
		$this->db->update('clients',$update_data);

		return TRUE;
	}

	/**
	* Update Client information.
	*
	* Updates client information.  All fields are optional
	*
	* @param int $client_id The client ID of the Parent Client
	* @param int $updated_client_id The ID of the client being updated
	* @param string $params['first_name'] Client's first name
	* @param string $params['last_name'] Client's last name
	* @param string $params['company'] Client's company
	* @param string $params['address_1'] Client's address line 1.
	* @param string $params['address_2'] Client's address line 2.
	* @param string $params['city'] Client's city
	* @param string $params['state'] Client's state.  If in the US or Canada, it should be the 2-letter abbreviation.  The system will try to determin the correct county.
	* @param string $params['postal_code'] Client's postal code
	* @param string $params['country'] Client's country in ISO format
	* @param string $params['phone'] Client's phone
	* @param string $params['email'] Client's email
	* @param string $params['username'] Client's username
	* @param string $params['password'] Client's password
	*
	* @return bool TRUE upon success, FALSE upon failure
	*/
	function UpdateClient($client_id, $updated_client_id, $params)
	{
		// Validate the required fields
		$this->load->library('field_validation');
		$this->field_validation->ValidateRequiredFields('UpdateClient', $params);

		// Make sure it's them or their client

		if($updated_client_id == $client_id) {
			$client = $this->GetClientDetails($client_id);
		} else {
			$client = $this->GetChildClientDetails($client_id, $updated_client_id);
		}

		if(!$client) {
			die($this->response->Error(2004));
		}

		if(isset($params['first_name']) && $params['first_name'] != '') {
			$update_data['first_name'] = $params['first_name'];
		}

		if(isset($params['last_name']) && $params['last_name'] != '') {
			$update_data['last_name'] = $params['last_name'];
		}

		if(isset($params['company'])) {
			$update_data['company'] = $params['company'];
		}

		if(isset($params['address_1']) && $params['address_1'] != '') {
			$update_data['address_1'] = $params['address_1'];
		}

		if(isset($params['address_2'])) {
			$update_data['address_2'] = $params['address_2'];
		}

		if(isset($params['city']) && $params['city'] != '') {
			$update_data['city'] = $params['city'];
		}

		if(isset($params['postal_code']) && $params['postal_code'] != '') {
			$update_data['postal_code'] = $params['postal_code'];
		}

		if(isset($params['country']) && $params['country'] != '') {
			// Make sure the country is in the proper format
			$country_id = $this->field_validation->ValidateCountry($params['country']);

			if(!$country_id) {
				die($this->response->Error(1007));
			}
			$update_data['country'] = $country_id;
		}

		if(isset($params['state']) && $params['state'] != '') {
		// If the country is US or Canada, we need to validate and supply the 2 letter abbreviation
			$this->load->helper('states_helper');
			$country_array = array(124,840);
			if(in_array($country_id, $country_array)) {
				$state = GetState($params['state']);
				if($state) {
					$update_data['state'] = $state;
				} else {
					die($this->response->Error(1012));
				}
			}
		}

		// If a timezone was provided, validate it
		if(isset($params['timezone'])) {
			if($params['timezone'] < -23 OR $params['timezone'] > 23) {
				die($this->response->Error(1011));
			}

			$update_data['gmt_offset'] = $params['timezone'];
		} else {
			$update_data['gmt_offset'] = 0;
		}

		if(isset($params['phone']) && $params['phone'] != '') {
			$update_data['phone'] = $params['phone'];
		}

		if(isset($params['email']) && $params['email'] != '') {
			$valid_email = $this->field_validation->ValidateEmailAddress($params['email']);

			if(!$valid_email) {
				die($this->response->Error(1008));
			}
			$update_data['email'] = $params['email'];
		}

		if(isset($params['username']) && $params['username'] != '' && $client->username != $params['username']) {
			// Make sure the username is not already in use
			$exists = $this->UsernameExists($params['username']);

			if($exists) {
				die($this->response->Error(2002));
			}
			$update_data['username'] = $params['username'];
		}

		if(isset($params['password'])) {
			// Make sure the password meets the requirements
			$valid_pass = $this->ValidatePassword($params['password']);

			if(!$valid_pass) {
				die($this->response->Error(2003));
			}
			
			$use_email = (isset($params['email'])) ? $params['email'] : $client->email;
			$update_data['password'] = md5($params['password'] . $use_email);
		}

		$request_client = $this->GetClientDetails($client_id);
		if (isset($params['client_type'])) {
			if ($params['client_type'] == 1 and $request_client->client_type_id != 3) {
				// only Administrators can make Service Providers
				die($this->response->Error(2006));
			}
			elseif ($params['client_type'] < 1 or $params['client_type'] > 2 or !is_numeric($params['client_type'])) {
				die($this->response->Error(2007));
			}

			$update_data['client_type_id'] = $params['client_type'];
		}

		if (isset($params['two_step_verification'])) {

			$update_data['two_step_verification'] = $params['two_step_verification'];
		}

		if (isset($params['backup_codes'])) {

			$update_data['backup_codes'] = $params['backup_codes'];
		}
		if (isset($params['company_logo'])) {

			$update_data['company_logo'] = $params['company_logo'];
		}


		if (isset($params['tax_id'])) {

			$update_data['tax_id'] = $params['tax_id'];
		}
		if (isset($params['business_start'])) {

			$update_data['business_start'] = $params['business_start'];
		}
		if (isset($params['business_category'])) {

			$update_data['business_category'] = $params['business_category'];
		}
		if (isset($params['business_address'])) {

			$update_data['business_address'] = $params['business_address'];
		}
		if (isset($params['business_city'])) {

			$update_data['business_city'] = $params['business_city'];
		}
		if (isset($params['business_state'])) {

			$update_data['business_state'] = $params['business_state'];
		}
		if (isset($params['business_zip'])) {

			$update_data['business_zip'] = $params['business_zip'];
		}
		if (isset($params['business_country'])) {

			$update_data['business_country'] = $params['business_country'];
		}
		if (isset($params['business_phone'])) {

			$update_data['business_phone'] = $params['business_phone'];
		}
		if (isset($params['business_fax'])) {

			$update_data['business_fax'] = $params['business_fax'];
		}
		if (isset($params['business_url'])) {

			$update_data['business_url'] = $params['business_url'];
		}
		if (isset($params['business_monthly_vol'])) {

			$update_data['business_monthly_vol'] = $params['business_monthly_vol'];
		}
		if (isset($params['bank_routing_number'])) {

			$update_data['bank_routing_number'] = $params['bank_routing_number'];
		}
		if (isset($params['bank_acc_number'])) {

			$update_data['bank_acc_number'] = $params['bank_acc_number'];
		}
		if (isset($params['bank_acc_type'])) {

			$update_data['bank_acc_type'] = $params['bank_acc_type'];
		}
		if (isset($params['bank_name'])) {

			$update_data['bank_name'] = $params['bank_name'];
		}
		if (isset($params['bank_acc_name'])) {

			$update_data['bank_acc_name'] = $params['bank_acc_name'];
		}
		if (isset($params['is_non_us'])) {

			$update_data['is_non_us'] = $params['is_non_us'];
		}
		if (isset($params['bank_swift_number'])) {

			$update_data['bank_swift_number'] = $params['bank_swift_number'];
		}
		if (isset($params['bank_address'])) {

			$update_data['bank_address'] = $params['bank_address'];
		}
		if (isset($params['payment_types'])) {

			$update_data['payment_types'] = $params['payment_types'];
		}
		if (isset($params['credit_card'])) {

			$update_data['credit_card'] = $params['credit_card'];
		}
		if (isset($params['echeck'])) {

			$update_data['echeck'] = $params['echeck'];
		}
		if (isset($params['merchant_number'])) {

			$update_data['merchant_number'] = $params['merchant_number'];
		}
		if (isset($params['terminal_number'])) {

			$update_data['terminal_number'] = $params['terminal_number'];
		}
		if (isset($params['store_number'])) {

			$update_data['store_number'] = $params['store_number'];
		}


		if(!isset($update_data)) {
			die($this->response->Error(6003));
		}
      
		$this->db->where('client_id', $updated_client_id);
		if ($this->db->update('clients', $update_data)) {
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	/**
	* Mark a client as suspended
	*
	* Suspends a client.  When a client is suspended, they can no longer perform any API funcions
	*
	* @param int $client_id The client ID of the Parent Client
	* @param int $suspended_client_id Client to be suspended

	*
	* @return bool TRUE upon success, FALSE upon permissions error
	*/
	function SuspendClient($client_id, $suspended_client_id)
	{
		$client = $this->GetChildClientDetails($client_id, $suspended_client_id);

		// Make sure it's their client
		if(!$client) {
			return FALSE;
		}

		$update_data['suspended'] = 1;

		$this->db->where('client_id', $suspended_client_id);
		$this->db->update('clients', $update_data);

		return TRUE;
	}

	/**
	* Mark a client as unsuspended
	*
	* Unsuspends a client.  Restores full functionality to a client.
	*
	* @param int $client_id The client ID of the Parent Client
	* @param int $unsuspended_client_id Client to be suspended

	*
	* @return bool TRUE upon success, FALSE upon permissions error.
	*/
	function UnsuspendClient($client_id, $unsuspended_client_id)
	{
		$client = $this->GetChildClientDetails($client_id, $unsuspended_client_id);

		// Make sure it's their client
		if(!$client) {
			return FALSE;
		}

		$update_data['suspended'] = 0;

		$this->db->where('client_id', $unsuspended_client_id);
		$this->db->update('clients', $update_data);

		return TRUE;
	}

	/**
	* Mark a client as deleted
	*
	* Deletes a client.  Does not actually delete the client, but marks it as deleted in the clients table.
	*
	* @param int $client_id The client ID of the Parent Client
	* @param int $deleted_client_id Client to be deleted

	*
	* @return bool TRUE upon success, FALSE upon failure.
	*/
	function DeleteClient($client_id, $deleted_client_id)
	{
		$client = $this->GetChildClientDetails($client_id, $deleted_client_id);

		// Make sure it's their client
		if(!$client) {
			return FALSE;
		}

		$update_data['deleted'] = 1;

		$this->db->where('client_id', $deleted_client_id);
		$this->db->update('clients', $update_data);

		return TRUE;
	}

	/**
	* Get the client details for a child client.
	*
	* Returns an array containg all the childs client's details.
	* If the child does not belong to the parent, an error is returned.
	*
	* @param int $parent_client_id The client ID of the Parent Client
	* @param int $child_client_id Child client

	*
	* @return mixed Array containing all the client details.
	*/

	function GetChildClientDetails($parent_client_id, $child_client_id)
	{
		// if the requesting client is an administrator, we won't filter
		$requesting_client = $this->GetClientDetails($parent_client_id);
		if ($requesting_client->client_type_id != 3) {
			$this->db->where('parent_client_id', $parent_client_id);

		}

		// if they are an end user, we'll outright reject
		if ($requesting_client->client_type_id == 2) {
			return FALSE;
		}

		$this->db->select('clients.*, countries.iso2 as country');
		$this->db->join('countries', 'countries.country_id = clients.country', 'left');

		$this->db->where('client_id', $child_client_id);
		$this->db->limit(1);
		$query = $this->db->get('clients');
		if($query->num_rows() > 0) {
			return $query->row();
		} else {
			return FALSE;
		}
	}

	/**
	* Get the client details for a client.
	*
	* Returns an array containg all the client's details.
	*
	* @param int $client_id The client ID
	*
	* @return mixed Array containing all the client details.
	*/
	function GetClientDetails($client_id)
	{
		if (!isset($this->cache[$client_id])) {
			$this->db->select('clients.*');
			$this->db->select('countries.iso2 as country');
			$this->db->select('client_types.description AS client_type');
			$this->db->select('plans.name AS plan_name');
			$this->db->join('countries', 'countries.country_id = clients.country', 'left');
			$this->db->join('client_types','clients.client_type_id = client_types.client_type_id', 'left');
			$this->db->join('plans','clients.plan_id = plans.plan_id', 'left');
			$this->db->where('clients.client_id', $client_id);
			$this->db->limit(1);
			$query = $this->db->get('clients');
			if ($query->num_rows() > 0) {
				$this->cache[$client_id] = $query->row();

				return $this->cache[$client_id];
			} else {
				return FALSE;
			}
		}
		else {
			return $this->cache[$client_id];
		}
	}

	/**
	* Check to see if a username already exists.
	*
	* Returns TRUE or FALSE if the username already exists in the database.
	*
	* @param string $username The desired username.
	*
	* @return boolean Returns TRUE or FALSE if the username already exists
	*/
	function UsernameExists($username)
	{
		$this->db->where('username', $username);
		$query = $this->db->get('clients');
		if($query->num_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	/**
	* Check to see if a password meets strength requirements.
	*
	* Returns TRUE or FALSE if the password meets the requirements.
	*
	* @param string $password The desired password.
	*
	* @return boolean Returns TRUE or FALSE if the password meets the requirements.
	*/
	function ValidatePassword($password)
	{
		if (strlen($password) > 5) {
			return true;
		}
		else {
			return false;
		}
	}

	/**
	* Get a list of Clients.
	*
	* Search the database for a formatted list of clients.
	*
	* @param int $client_id The client id
	* @param int $params['client_id'] Filter by Client ID.
	* @param string $params['sort'] Field to search clients by.  Possible values are client_first_name and client_last_name
	* @param string $params['sort_dir'] Used with $params['sort'].  Possible values are asc and desc
	*
	* @return mixed Array containing a list of clients and client details meeting the criteria.
	*/

	function GetClients($client_id, $params)
	{
		// get the user type
		$client = $this->GetClientDetails($client_id);
		$client_type = $client->client_type_id;

		if(isset($params['sort'])) {
			switch($params['sort']) {
				case 'last_name':
					$sort = 'last_name';
					break;
				case 'first_name':
					$sort = 'first_name';
					break;
				case 'email':
					$sort = 'email';
					break;
				case 'username':
					$sort = 'username';
					break;
			}
		} else {
			$sort = FALSE;
		}

		if(isset($params['sort_dir'])) {
			$dir = $params['sort_dir'];
		} else {
			$dir = FALSE;
		}

		if ($sort) {
			if($dir) {
				$this->db->order_by($sort, $dir);
			} else {
				$this->db->order_by($sort, 'ASC');
			}
		}

		switch($client_type)
		{
			case 1:
				$this->db->where('parent_client_id', $client_id);
			break;
			case 2:
				die($this->response->Error(1002));
			break;
		}

		if (isset($params['client_id']) and is_numeric($params['client_id'])) {
			$this->db->where('client_id',$params['client_id']);
		}

		if (isset($params['suspended']) and ($params['suspended'] == '1' or $params['suspended'] == '0')) {
			$this->db->where('suspended',$params['suspended']);
		}

		if (isset($params['username'])) {
			$this->db->where('username',$params['username']);
		}

		if (isset($params['email'])) {
			$this->db->where('email',$params['email']);
		}

		$this->db->where('deleted', 0);
		$this->db->join('countries', 'countries.country_id = clients.country', 'left');
		$this->db->join('client_types','clients.client_type_id = client_types.client_type_id', 'left');
		$query = $this->db->get('clients');
        // print_r($query->result());die;
		if($query->num_rows() > 0) {
			$i=0;
			foreach($query->result() as $row) {
				//print_r($row);die;
				$data[$i]['id'] = $row->client_id;
				$data[$i]['client_type_id'] = $row->client_type_id;
				$data[$i]['client_type'] = $row->description;
				$data[$i]['parent_id'] = $row->parent_client_id;
				$data[$i]['first_name'] = $row->first_name;
				$data[$i]['last_name'] = $row->last_name;
				$data[$i]['company'] = $row->company;
				$data[$i]['company_logo'] = $row->company_logo;
				$data[$i]['address_1'] = $row->address_1;
				$data[$i]['address_2'] = $row->address_2;
				$data[$i]['city'] = $row->city;
				$data[$i]['state'] = $row->state;
				$data[$i]['postal_code'] = $row->postal_code;
				$data[$i]['country'] = $row->iso2;
				$data[$i]['suspended'] = ($row->suspended == '1') ? '1' : '0';
				$data[$i]['timezone'] = $row->gmt_offset;
				$data[$i]['phone'] = $row->phone;
				$data[$i]['email'] = $row->email;
				$data[$i]['api_id'] = $row->api_id;
				$data[$i]['secret_key'] = $row->secret_key;
				$data[$i]['username'] = $row->username;

				$i++;
			}
		} else {
			return FALSE;
		}

		return $data;
	}

	/**
	* Get Client details.
	*
	* get the details of a specific client based on client ID.
	*
	* @param int $client_id The client id
	* @param int $params['client_id'] The client ID to return the details for
	*
	* @return mixed Array containing a the details of the client.
	*/

	function GetClient($client_id, $real_client_id)
	{
		// get the user type
		$client = $this->GetClientDetails($client_id);
		if (!$client) {
			die($this->response->Error(2004));
		}

		$client_type = $client->client_type_id;

		switch($client_type)
		{
			case 1:
				$this->db->where('parent_client_id', $client_id);
			break;
			case 2:
				if ($real_client_id != $client_id) {
					die($this->response->Error(1002));
				}
			break;
		}

		$this->db->where('client_id', $real_client_id);
		$this->db->join('countries', 'countries.country_id = clients.country', 'left');
		$this->db->join('client_types','clients.client_type_id = client_types.client_type_id', 'left');
		$query = $this->db->get('clients');

		if ($query->num_rows() > 0) {
			$row = $query->row();
			$data['id'] = $row->client_id;
			$data['client_type_id'] = $row->client_type_id;
			$data['client_type'] = $row->description;
			$data['parent_id'] = $row->parent_client_id;
			$data['first_name'] = $row->first_name;
			$data['last_name'] = $row->last_name;
			$data['company'] = $row->company;
			$data['company_logo'] = $row->company_logo;
			$data['address_1'] = $row->address_1;
			$data['address_2'] = $row->address_2;
			$data['city'] = $row->city;
			$data['state'] = $row->state;
			$data['postal_code'] = $row->postal_code;
			$data['country'] = $row->iso2;
			$data['suspended'] = ($row->suspended == '1') ? '1' : '0';
			$data['timezone'] = $row->gmt_offset;
			$data['phone'] = $row->phone;
			$data['email'] = $row->email;
			$data['api_id'] = $row->api_id;
			$data['secret_key'] = $row->secret_key;
			$data['username'] = $row->username;
			$data['two_step_verification'] = $row->two_step_verification;
			$data['backup_codes'] = $row->backup_codes;

			$data['tax_id'] = $row->tax_id;
			$data['business_start'] = $row->business_start;
			$data['business_category'] = $row->business_category;
			$data['business_address'] = $row->business_address;
			$data['business_city'] = $row->business_city;
			$data['business_state'] = $row->business_state;
			$data['business_zip'] = $row->business_zip;
			$data['business_country'] = $row->business_country;
			$data['business_phone'] = $row->business_phone;
			$data['business_fax'] = $row->business_fax;
			$data['business_url'] = $row->business_url;
			$data['business_monthly_vol'] = $row->business_monthly_vol;
			$data['bank_routing_number'] = $row->bank_routing_number;
			$data['bank_acc_number'] = $row->bank_acc_number;
			$data['bank_acc_type'] = $row->bank_acc_type;
			$data['bank_name'] = $row->bank_name;
			$data['bank_acc_name'] = $row->bank_acc_name;
			$data['is_non_us'] = $row->is_non_us;
			$data['bank_swift_number'] = $row->bank_swift_number;
			$data['bank_address'] = $row->bank_address;
			$data['payment_types'] = $row->payment_types;
			$data['credit_card'] = $row->credit_card;
			$data['echeck'] = $row->echeck;
			$data['merchant_number'] = $row->merchant_number;
			$data['terminal_number'] = $row->terminal_number;
			$data['store_number'] = $row->store_number;

		} else {
			return FALSE;
		}

		return $data;
	}

	/**
	* Get client timezone
	*
	* Get a client's timezone.  Returns the number of hours (-23 to 23) for the GMT offset.
	*
	* @param int $client_id The client id
	*
	* @return int Number of hours difference with GMT
	*/

	function GetTimezone($client_id)
	{
		$this->db->where('client_id', $client_id);
		$query = $this->db->get('clients');
		if($query->num_rows() > 0) {
			return $query->row()->gmt_offset;
		} else {
			return 0;
		}
	}
}