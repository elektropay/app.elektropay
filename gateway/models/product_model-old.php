<?php
/**
* Product Model
*
* Contains all the methods used to create, update, and delete customers.
*
* @version 1.0
* @author Everpay, Corporation.
* @package OpenGateway

*/
class Product_model extends Model
{
	function __construct()
	{
		parent::__construct();
	}

	/**
	* Create a new product
	*
	* Creates a new product.
	*
	* @param int $client_id The client ID of the gateway client.
	* @param string $params['product_name'] Client's first name
	* @param string $params['last_name'] Client's last name
	* @param string $params['company'] Client's company. Optional.
	* @param string $params['address_1'] Client's address line 1. Optional.
	* @param string $params['product_description'] Client's address line 2. Optional.
	* @param string $params['city'] Client's city. Optional.
	* @param string $params['state'] Client's state. Optional.  If the country is US or Canada, the 2-letter abbreviation should be used.
	* @param string $params['postal_code'] Client's postal code. Optional.
	* @param string $params['country'] Client's country in ISO format. Optional.
	* @param string $params['phone'] Client's phone. Optional.
	* @param string $params['email'] Client's email. Optional.
	*
	* @return int New Customer ID
	*/

	function NewCustomer($client_id, $params)
	{
		// Validate the required fields
		$this->load->library('field_validation');
		$this->field_validation->ValidateRequiredFields('NewCustomer', $params);

		if (!isset($params['email'])) $params['email'] = '';
		if (!isset($params['company'])) $params['company'] = '';
		if (!isset($params['internal_id'])) $params['internal_id'] = '';
		if (!isset($params['address_1'])) $params['address_1'] = '';
		if (!isset($params['address_2'])) $params['address_2'] = '';
		if (!isset($params['city'])) $params['city'] = '';
		if (!isset($params['state'])) $params['state'] = '';
		if (!isset($params['postal_code'])) $params['postal_code'] = '';
		if (!isset($params['phone'])) $params['phone'] = '';

		// Make sure the country is in the proper format
		$this->load->library('field_validation');
		if (!empty($params['country'])) {
			$country_id = $this->field_validation->ValidateCountry($params['country']);

			if(!$country_id) {
				die($this->response->Error(1007));
			}
		}
		else {
			$country_id = '';
		}

		// If the country is US or Canada, we need to validate and supply the 2 letter abbreviation
		$this->load->helper('states_helper');
		$country_array = array(124,840);
		if(in_array($country_id, $country_array)) {
			$state = GetState($params['state']);
			if($state) {
				$params['state'] = $state;
			} else {
				die($this->response->Error(1012));
			}
		}

		// Make sure the email address is valid
		if ($params['email']) {
			$valid_email = $this->field_validation->ValidateEmailAddress($params['email']);

			if(!$valid_email) {
				die($this->response->Error(1008));
			}
		}

		if ($customer_id = $this->SaveNewCustomer($client_id, $params['first_name'], $params['last_name'], $params['company'], $params['internal_id'], $params['address_1'], $params['address_2'], $params['city'], $params['state'], $params['postal_code'], $country_id, $params['phone'], $params['email']))
		{
			return $customer_id;
		}
		else {
			return FALSE;
		}
	}

	/**
	* Save the new customer
	*
	* Saves a new customer into the database and returns the resulting customer_id
	*
	* @param int $client_id The client ID of the gateway client.
	* @param string $params['first_name'] Client's first name
	* @param string $params['last_name'] Client's last name
	* @param string $params['company'] Client's company. Optional.
	* @param string $params['address_1'] Client's address line 1. Optional.
	* @param string $params['address_2'] Client's address line 2. Optional.
	* @param string $params['city'] Client's city. Optional.
	* @param string $params['state'] Client's state. Optional.  If the country is US or Canada, the 2-letter abbreviation should be used.
	* @param string $params['postal_code'] Client's postal code. Optional.
	* @param string $params['country'] Client's country in ISO format. Optional.
	* @param string $params['phone'] Client's phone. Optional.
	* @param string $params['email'] Client's email. Optional.
	*
	* @return int New Customer ID
	*/

	// Save new Product
	function SaveNewProduct($client_id, $product_name, $company = '', $internal_id = '', $address_1 = '', $address_2 = '', $city = '', $state = '', $postal_code = '', $country_id = '', $phone = '', $email = '')
	{
		$insert_data = array(
							'client_id'		=> $client_id,
							'product_name' 	=> $product_name,
							'company'		=> $company,
							'internal_id' 	=> $internal_id,
							'address_1'		=> $address_1,
							'product_description'		=> $product_description,
							'city'			=> $city,
							'state'			=> $state,
							'postal_code'	=> $postal_code,
							'country'		=> $country_id,
							'phone'			=> $phone,
							'email'			=> $email,
							'active'		=> '1',
							'date_created'  => date('Y-m-d, H:i:s'),
							);
		$this->db->insert('customers', $insert_data);

		$customer_id = $this->db->insert_id();

		TriggerTrip('new_product', $client_id, false, false, $product_id);

		return $product_id;
	}

	/**
	* Get the prodcut details.
	*
	* Returns a array containing all the customers's details.  If the customer does not belong to the client, an error is returned.
	*
	* @param int $client_id The client ID
	* @param int $product_id The product ID
	*
	* @return mixed Array containing all the customer details.
	*/
	function GetCustomerDetails($client_id, $product_id)
	{
		$this->db->where('customer_id', $product_id);
		$this->db->where('client_id', $client_id);
		$this->db->limit(1);
		$query = $this->db->get('products');
		if($query->num_rows > 0) {
			foreach($query->row() as $key => $value) {
				$data[$key] = $value;
			}
			return $data;
		} else {
			die($this->response->Error(4000));
		}
	}


	/**
	* Updates product details.
	*
	* Updates a product details. If the product does not belong to the client, an error is returned.
	*
	* @param int $client_id The client ID of the gateway client.
	* @param int $product_id The Product to update.
	* @param string $params['internal_id'] Customer's internal_id.  Optional.
	* @param string $params['product_name'] Product name. Optional.
	* @param string $params['company'] Customer's company. Optional.
	* @param string $params['address_1'] Customer's address line 1. Optional.
	* @param string $params['product_description'] Product description. Optional.
	* @param string $params['city'] Customer's city. Optional.
	* @param string $params['state'] Customer's state. Optional.
	* @param string $params['postal_code'] Customer's postal code. Optional.
	* @param string $params['country'] Customer's country. Optional.
	* @param string $params['phone'] Customer's phone. Optional.
	* @param string $params['product_image'] Product image. Optional.
	*
	* @return mixed Array containing new product_id
	*/
	function UpdateCustomer($client_id, $product_id, $params)
	{
		$this->load->library('field_validation');

		if(!isset(product_id)) {
			return FALSE;
		}

		if(isset($params['internal_id'])) {
			$update_data['internal_id'] = $params['internal_id'];
		}

		if(isset($params['product_name'])) {
			$update_data['product_name'] = $params['product_name'];
		}

		if(isset($params['last_name'])) {
			$update_data['last_name'] = $params['last_name'];
		}

		if(isset($params['company'])) {
			$update_data['company'] = $params['company'];
		}

		if(isset($params['internal_id'])) {
			$update_data['internal_id'] = $params['internal_id'];
		}

		if(isset($params['address_1'])) {
			$update_data['address_1'] = $params['address_1'];
		}

		if(isset($params['product_description'])) {
			$update_data['product_description'] = $params['address_description'];
		}

		if(isset($params['city'])) {
			$update_data['city'] = $params['city'];
		}

		if(isset($params['postal_code'])) {
			$update_data['postal_code'] = $params['postal_code'];
		}

		if(isset($params['country'])) {
			if ($params['country'] == '') {
				$update_data['country'] = '';
			}
			else {
				// Make sure the country is in the proper format
				$country_id = $this->field_validation->ValidateCountry($params['country']);

				if(!$country_id) {
					die($this->response->Error(1007));
				}
				$update_data['country'] = $country_id;
			}
		}

		if(isset($params['state']) and !empty($params['state'])) {
			// If the country is US or Canada, we need to validate and supply the 2 letter abbreviation
			$this->load->helper('states_helper');
			$country_array = array(124,840);
			if(isset($country_id) and in_array($country_id, $country_array)) {
				$state = GetState($params['state']);
				if($state) {
					$update_data['state'] = $state;
				} else {
					die($this->response->Error(1012));
				}
			}
			else {
				$update_data['state'] = $params['state'];
			}
		}

		if(isset($params['phone'])) {
			$update_data['phone'] = $params['phone'];
		}

		if(isset($params['email'])) {
			$valid_email = $this->field_validation->ValidateEmailAddress($params['email']);

			if(!$valid_email) {
				die($this->response->Error(1008));
			}
			$update_data['email'] = $params['email'];
		}

		if(!isset($update_data)) {
			die($this->response->Error(6003));
		}

		// Make sure they update their own customer
		$this->db->where('client_id', $client_id);
		$this->db->where('customer_id', $customer_id);

		if ($this->db->update('customers', $update_data)) {
			return TRUE;
		}
		else {
			return FALSE;
		}
	}

	/**
	* Delete a customer.
	*
	* Marks a customer as deleted.  Does not actually delete the customer from the database, but only marks it as deleted.
	*
	* @param int $client_id The client ID
	* @param int $customer_id The customer ID
	*
	* @return bool TRUE upon success.
	*/
	function DeleteCustomer($client_id, $product_id)
	{
		// Make sure they update their own product
		$this->db->where('client_id', $client_id);
		$this->db->where('product_id', $product_id);

		$this->db->update('products', array('active' => 0));

		return TRUE;
	}

	/**
	* Get a list of product details.
	*
	* Searches the database for customers belonging to the client and returns an array with all the details.
	* All search parameters are optional.
	*
	* @param int $client_id The client ID of the gateway client.
	* @param string $params['internal_id'] Customer's internal ID. Optional.
	* @param string $params['product_name'] product name. Optional.
	* @param string $params['last_name'] Customer's last name. Optional.
	* @param string $params['company'] Customer's company. Optional.
	* @param string $params['address_1'] Customer's address line 1. Optional.
	* @param string $params['product_description'] Product Description. Optional.
	* @param string $params['city'] Customer's city. Optional.
	* @param string $params['state'] Customer's state. Optional.
	* @param string $params['postal_code'] Customer's postal code. Optional.
	* @param string $params['country'] Customer's country. Optional.
	* @param string $params['phone'] Customer's phone. Optional.
	* @param string $params['product_image'] Product Image. Optional.
	* @param int $params['deleted'] Set to 1 for deleted products.  Optional.
	* @param string $pararms['sort'] Used to change the order of results returned.  Possible values are date, product_name, and last_name. Optional.
	* @param string $params['sort_dir'] Used only when a sort valus is padded.  Possible values are asc and desc
	*
	* @return mixed Array containing the search results
	*/

	function GetProducts($client_id, $params, $any_status = FALSE)
	{
		// Make sure they only get their own customers
		$this->db->where('products.client_id', $client_id);

		if(isset($params['deleted']) and $params['deleted'] == '1') {
			$this->db->where('products.active', '0');
		}
		elseif ($any_status == FALSE) {
			$this->db->where('products.active', '1');
		}

		// Check which search paramaters are set
		if(isset($params['product_name'])) {
			$this->db->like('product_name', $params['product_name']);
		}

		if(isset($params['internal_id'])) {
			$this->db->where('internal_id', $params['internal_id']);
		}

		if(isset($params['id'])) {
			$this->db->where('products.product_id', $params['id']);
		}

		if(isset($params['product_id'])) {
			$this->db->where('products.product_id', $params['product_id']);
		}

		if(isset($params['product_name'])) {
			$this->db->like('product_name', $params['product_name']);
		}

		if(isset($params['company'])) {
			$this->db->like('company', $params['company']);
		}

		if(isset($params['address_1'])) {
			$this->db->where('address_1', $params['address_1']);
		}

		if(isset($params['address_2'])) {
			$this->db->where('product_description', $params['product_description']);
		}

		if(isset($params['city'])) {
			$this->db->like('city', $params['city']);
		}

		if(isset($params['state'])) {
			$this->db->where('state', $params['state']);
		}

		if(isset($params['postal_code'])) {
			$this->db->where('postal_code', $params['postal_code']);
		}

		if(isset($params['country'])) {
			$this->db->where('country', $params['country']);
		}

		if(isset($params['phone'])) {
			$this->db->like('phone', $params['phone']);
		}

		if(isset($params['product_image'])) {
			$this->db->like('product_image', $params['prodcut_image']);
		}

		if (isset($params['offset'])) {
			$offset = $params['offset'];
		}
		else {
			$offset = 0;
		}

		if(isset($params['limit'])) {
			$this->db->limit($params['limit'], $offset);
		}

		$params['sort'] = isset($params['sort']) ? $params['sort'] : '';

		switch($params['sort'])
		{
			case 'date':
				$sort = 'date_created';
				break;
			case 'first_name':
				$sort = 'product_name';
				break;
			case 'last_name':
				$sort = 'last_name';
				break;
			default:
				$sort = 'product_name';
				break;
		}

		$params['sort_dir'] = isset($params['sort_dir']) ? $params['sort_dir'] : '';

		switch($params['sort_dir'])
		{
			case 'asc':
				$sort_dir = 'ASC';
				break;
			case 'desc':
				$sort_dir = 'DESC';
				break;
			default:
				$sort_dir = 'DESC';
				break;
		}

		$this->db->order_by($sort, $sort_dir);

		if (isset($params['active_recurring']) or isset($params['plan_id'])) {
			$this->db->join('subscriptions', 'products.customer_id = subscriptions.customer_id', 'left');
		}

		if (isset($params['active_recurring'])) {
			if($params['active_recurring'] == 1) {
				$this->db->where('subscriptions.active', 1);
			} elseif($params['active_recurring'] === 0) {
				$this->db->where('subscriptions.active', 0);
			}
		}

		if (isset($params['plan_id'])) {
			$this->db->where('subscriptions.plan_id',$params['plan_id']);
			$this->db->where('subscriptions.active','1');
		}

		$this->db->select('products.*');
		$this->db->select('countries.iso2');

		$this->db->join('countries', 'countries.country_id = products.country', 'left');
		$this->db->group_by('products.customer_id');
		$query = $this->db->get('products');

		$data = array();
		if($query->num_rows() > 0) {
			$i=0;
			foreach($query->result() as $row) {

				$data[$i]['id'] = $row->customer_id;
				$data[$i]['internal_id'] = $row->internal_id;
				$data[$i]['product_name'] = $row->product_name;
				$data[$i]['last_name'] = $row->last_name;
				$data[$i]['company'] = $row->company;
				$data[$i]['address_1'] = $row->address_1;
				$data[$i]['address_2'] = $row->address_2;
				$data[$i]['city'] = $row->city;
				$data[$i]['state'] = $row->state;
				$data[$i]['postal_amount'] = $row->product_amount;
				$data[$i]['country'] = $row->iso2;
				$data[$i]['product_image'] = $row->product_image;
				$data[$i]['phone'] = $row->phone;
				$data[$i]['date_created'] = local_time($client_id, $row->date_created);
				$data[$i]['status'] = ($row->active == 1) ? 'active' : 'deleted';

				$plans = $this->GetPlansByCustomer($client_id, $row->customer_id);
				if (!empty($plans)) {
					$n=0;
					foreach($plans as $plan) {
						$data[$i]['plans'][$n]['id'] = $plan['id'];
						$data[$i]['plans'][$n]['name'] = $plan['name'];
						$data[$i]['plans'][$n]['amount'] = $plan['amount'];
						$data[$i]['plans'][$n]['interval'] = $plan['interval'];
						$data[$i]['plans'][$n]['notification_url'] = $plan['notification_url'];
						$data[$i]['plans'][$n]['status'] = $plan['active'];
						$n++;
					}
				}

				$i++;
			}
		} else {
			return FALSE;
		}

		return $data;
	}

	/**
	* Get product details.
	*
	* Searches the database for products belonging to the client and with a specific product_id.
	*
	* @param int $client_id The client ID of the gateway client.
	* @param int $product_id Customer ID.
	*
	* @return array|bool Product data or FALSE upon failure.
	*/

	function GetCustomer($client_id, $product_id)
	{
		$params = array('product_id' => $product_id);

		$data = $this->GetProducts($client_id, $params, TRUE);

		if (!empty($data)) {
			return $data[0];
		}
		else {
			return FALSE;
		}
	}

	/**
	* Get plans by customer ID
	*
	* Gets all plans associated with the customer
	*
	* @param int $client_id The Client ID
	* @param int $customer_id The ID of the Customer
	*
	* @return array All the plans, including status
	*/
	function GetPlansByCustomer ($client_id, $customer_id) {
		$this->db->select('*');
		$this->db->select('subscriptions.amount AS sub_amount');
		$this->db->select('subscriptions.active AS sub_active');
		$this->db->where('customer_id',$customer_id);
		$this->db->join('plans','plans.plan_id = subscriptions.plan_id','INNER');
		$result = $this->db->get('subscriptions');

		$plans = array();

		if ($result->num_rows() > 0) {
			foreach ($result->result_array() as $row) {
				$plans[] = array(
								'id' => $row['plan_id'],
								'name' => $row['name'],
								'amount' => $row['sub_amount'],
								'interval' => $row['interval'],
								'notification_url' => $row['notification_url'],
								'active' => ($row['sub_active'] == '1') ? 'active' : 'inactive'
							);
			}
		}
		else {
			return FALSE;
		}

		return $plans;
	}
	function insert($data,$tablename){ print_r($data); die;
		$sku =  $this->input->post('product_sku');
        $this->db->where("product_sku", $sku);
        $query = $this->db->get($tablename);
         if ($query->num_rows() > 0) {
            $this->session->set_flashdata("error","SKU address already exists.");
            return false;
        }
        else {
            $insert = $this->db->insert($tablename, $data);
            return true;
        } 
	}
	function getProductData($id){ echo "ASDDAS".$id; die;
				$this->db->select('*');     
             $this->db->from('products');  
             $this->db->where('product_id',$id); 
             //$this->db->where('bStatus','1'); 
             return $this->db->get()->row();
	}
}