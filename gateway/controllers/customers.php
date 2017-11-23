<?php
/**
* Customers Controller
*
* Manage customers
*
* @version 1.0
* @author Electric Function, Inc.
* @package OpenGateway

*/

require_once(APPPATH."libraries/segment/Segment.php");

class Customers extends Controller {

	function __construct()
	{
		parent::__construct();
		//error_reporting(0);

		// perform control-panel specific loads
		CPLoader();
	}

	/**
	* Manage customers
	*
	* Lists all active customers, with optional filters
	*/
	function index2()
	{
		
		$this->navigation->PageTitle('Customers');
		
        $this->load->library('gravatar');

		// $this->load->model('cp/dataset','dataset');

		// $columns = array(
		// 				array(
		// 					'name' => '',
		// 					'sort_column' => 'id',
		// 					'type' => 'id',
		// 					'width' => '5%',
		// 					'filter' => 'customer_id'),
		// 				array(
		// 					'name' => 'Customer',
		// 					'sort_column' => 'customers.first_name', 'customers.last_name',
		// 					'type' => 'text',
		// 					'width' => '35%',
		// 					'filter' => 'customer_last_name', 'customer_last_name'),

		// 				array(
		// 					'name' => 'Date',
		// 					'sort_column' => 'date_created',
		// 					'type' => 'text',
		// 					'width' => '25%',
		// 					'filter' => 'date_created')
		// 			);

		// // handle recurring plans if they exist
		// $this->load->model('plan_model');
		// $plans = $this->plan_model->GetPlans($this->user->Get('client_id'),array());

		// if ($plans) {
		// 	// build $options
		// 	$options = array();
		// 	while (list(,$plan) = each($plans)) {
		// 		$options[$plan['id']] = $plan['name'];
		// 	}

		// 	$columns[] = array(
		// 					'name' => 'Active Plans',
		// 					'type' => 'select',
		// 					'options' => $options,
		// 					'filter' => 'plan_id',
		// 					'width' => '10%'
		// 					);
		// }
		// else {
		// 	$columns[] = array(
		// 		'name' => 'Plan Link',
		// 		'width' => '15%'
		// 		);
		// }

		// $columns[] = array(
		// 		'name' => '',
		// 		'width' => '5%'
		// 		);

		// // set total rows by hand to reduce database load
		// $result = $this->db->select('COUNT(customer_id) AS total_rows',FALSE)->where('active','1')->from('customers')->get();
		// $this->dataset->total_rows((int)$result->row()->total_rows);
		// print_r($this->dataset->data);
		// $this->dataset->Initialize('customer_model','GetCustomers',$columns);

		// // add actions
		// $this->dataset->Action('Delete','customers/delete');
           
  //               // sidebar

		// $this->navigation->SidebarButton('<i class="fa fa-globe"></i> Map View','customers/map');
		// $this->navigation->SidebarButton('<i class="fa fa-plus green"></i><span class-"green"> Customer</span>','customers/add');

		$cols = array(
			array(
				'name' => 'ID #',
				'width' => '3%'
			),array(
				'name' => 'Customer',
				'width' => '28%'
			),array(
				'name' => 'Date',
				'width' => '18%'
			),array(
				'name' => 'Active Plans',
				'width' => '8%'
			),array(
				'name' => '',
				'width' => '12%'
			)
		);

		$data['cols'] = $cols;

		$this->load->view(branded_view('cp/customers_new.php'), $data);
	}
	function index() {
		$this->navigation->PageTitle('Customers');
		$this->load->model('cp/dataset','dataset');

		$columns = array(
						array(
							'name' => 'Customer',
							'sort_column' => 'id',
							'type' => 'id',
							'width' => '17%',
							'filter' => 'customer_id'),

						array(
							'name' => 'Email',
							'sort_column' => 'customers.first_name', 'customers.last_name',
							'type' => 'text',
							'width' => '25%',
							'filter' => 'customer_last_name', 'customer_last_name'),

						array(
							'name' => 'Date',
							'sort_column' => 'date_created',
							'type' => 'text',
							'width' => '17%',
							'filter' => 'date_created')
					);

		// handle recurring plans if they exist
		$this->load->model('plan_model');
		$plans = $this->plan_model->GetPlans($this->user->Get('client_id'),array());

		if ($plans) {
			// build $options
			$options = array();
			while (list(,$plan) = each($plans)) {
				$options[$plan['id']] = $plan['name'];
			}

			$columns[] = array(
							'name' => 'Plans',
							'type' => 'select',
							'options' => $options,
							'filter' => 'plan_id',
							'width' => '10%'
							);
		}
		else {
			$columns[] = array(
				'name' => 'Plan Link',
				'width' => '5%'
				);
		}

		$columns[] = array(
				'name' => '',
				'width' => '10%'
				);

		// set total rows by hand to reduce database load
		$result = $this->db->select('COUNT(customer_id) AS total_rows',FALSE)->where('active','1')->from('customers')->get();
		$this->dataset->total_rows((int)$result->row()->total_rows);
		print_r($this->dataset->data);
		$this->dataset->Initialize('customer_model','GetCustomers',$columns);

		// add actions
		$this->dataset->Action('Delete','customers/delete');
           
                
                // sidebar

		$this->navigation->SidebarButton('<span class="btn btn-default"><i class="fa fa-globe"></i> Map View</span>','customers/map');
		$this->navigation->SidebarButton('<span class="btn btn-success"><i class="fa fa-plus"></i> Customer</span>','customers/add');

		// echo '<pre/>';
		// print_r($this->dataset->data);die();

		$cols = array(
			array(
				'name' => 'ID #',
				'width' => '3%'
			),array(
				'name' => 'Customer',
				'width' => '25%'
			),array(
				'name' => 'Date',
				'width' => '25%'
			),array(
				'name' => 'Plans',
				'width' => '5%'
			),array(
				'name' => 'Options',
				'width' => '40%'
			)
		);

		$data['cols'] = $cols;
		$this->load->view(branded_view('cp/customers.php'), $data);
	}

	function ajax_list() {
		// echo '<pre/>';print_r($_POST);die();
		$data = array();
		$aColumns = array('customer_id', 'first_name', 'last_name', 'email', 'date_created');
		$sTable = 'customers';

		$sLimit = "";
		if( isset( $_POST['iDisplayStart'] ) && $_POST['iDisplayLength'] != '-1' ) {
			$sLimit = "LIMIT ".intval( $_POST['iDisplayStart'] ).", ".intval( $_POST['iDisplayLength'] );
		}

		$sOrder = "";
		if( isset( $_POST['iSortCol_0'] ) ) {
			$sOrder = "ORDER BY  ";
			for( $i=0 ; $i<intval( $_POST['iSortingCols'] ) ; $i++ ) {

				if( $_POST[ 'bSortable_'.intval($_POST['iSortCol_'.$i]) ] == "true" ) {
					$sOrder .= "`".$aColumns[ intval( $_POST['iSortCol_'.$i] ) ]."` ".($_POST['sSortDir_'.$i]==='asc' ? 'asc' : 'desc') .", ";
				}
			}

			$sOrder = substr_replace( $sOrder, "", -2 );
			if ( $sOrder == "ORDER BY" ) {
				$sOrder = "";
			}
		}

		$sWhere = "WHERE client_id=".$this->user->Get('client_id');
		if( isset($_POST['sSearch']) && $_POST['sSearch'] != "" ) {
			$sWhere .= ' AND (';
			for( $i=0 ; $i<count($aColumns) ; $i++ ) {
				$sWhere .= "`".$aColumns[$i]."` LIKE '%".mysql_real_escape_string( $_POST['sSearch'] )."%' OR ";
			}
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere .= ')';
		}

		for( $i=0 ; $i<count($aColumns) ; $i++ ) {
			if( isset($_POST['bSearchable_'.$i]) && $_POST['bSearchable_'.$i] == "true" && $_POST['sSearch_'.$i] != '' ) {
				if( $sWhere == "" ) {
					$sWhere = "WHERE ";

				} else {
					$sWhere .= " AND ";
				}

				$sWhere .= "`".$aColumns[$i]."` LIKE '%".mysql_real_escape_string($_POST['sSearch_'.$i])."%' ";
			}
		}

		$sQuery = "SELECT SQL_CALC_FOUND_ROWS `".str_replace(" , ", " ", implode("`, `", $aColumns))."`
				FROM   $sTable
				$sWhere
				$sOrder
				$sLimit
				";
		// echo $sQuery;die();
		$userResult = $this->db->query($sQuery);

		$aResultFilterTotal = $this->db->query('SELECT FOUND_ROWS() as total');
		$iFilteredTotal = $aResultFilterTotal->result();
		$iFilteredTotal = $iFilteredTotal[0]->total;

		$aResultTotal = $this->db->query('SELECT COUNT(customer_id) as total FROM '.$sTable.' WHERE client_id='.$this->user->Get('client_id'));
		$iTotal = $aResultTotal->result();
		$iTotal = $iTotal[0]->total;

		$output = array(
			"sEcho" => intval($_POST['sEcho']),
			"iTotalRecords" => $iTotal,
			"iTotalDisplayRecords" => $iFilteredTotal,
			"aaData" => array()
		);

		$userslist = $userResult->result();
// echo '<pre/>';print_r($userslist);die();
		if (count($userslist) > 0) {
			$users = array();
			foreach($userslist as $user) {

				$date = date('M j, Y h:i a', strtotime($user->date_created));

				$users[] = array(
					$user->customer_id,
					$user->first_name .' '.$user->last_name,
					'[<strong><abbr class="timeago" title="'.$date.'">'.$date.'</abbr></strong>]',
					'',
					'<a href="'.base_url().'customers/edit/'.$user->customer_id.'" class="btn btn-info btn-circle btn-xs"><i class="fa fa-chevron-right"></i> </a>'
				);
			}

			$output['aaData'] = $users;
		}

		echo json_encode($output);
		die();
	}
	
	/**
	* View Customer
	*
	* View an existing customer
	*
	* @return string view
	*/
	function view($id = 0) {
		$this->navigation->PageTitle('Customer Details');

		$this->load->model('states_model');
		$countries = $this->states_model->GetCountries();
		$states = $this->states_model->GetStates();

		$this->load->model('customer_model');

		$customer = $this->customer_model->GetCustomer($this->user->Get('client_id'),$id);
// echo '<pre/>';print_r($customer);die();
		$data = array(
					'form_title' => 'Customer Details',
					'form_action' => 'customers' . $id,
					'states' => $states,
					'countries' => $countries,
					'form' => $customer
					);

		// sidebar
                $this->navigation->SidebarButton('<span class="btn btn-default"><i class="fa fa-eye"></i>View</span>','customers');
		$this->navigation->SidebarButton('<span class="btn btn-success"><i class="fa fa-plus"></i>Customer</span>','customers/add');
		
		$this->load->view(branded_view('cp/customer_view.php'),$data);
	}


	/*
	* Create Random string generator
	* Created by Hemal
	*/
     
     function generateRandomString($length = 15) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
		    return $randomString;
	}

	/**
	* Add customer
	*
	* Add New customer address, etc.
	*
	* @return string view
	*/
	
	function add () {
		$this->load->model('customer_model');
		$this->navigation->PageTitle('New Customer');
		$this->load->model('states_model');
		$countries = $this->states_model->GetCountries();
		$states = $this->states_model->GetStates();
        $this->load->model('customer_model');
        $customer_unique_id = "cust_".$this->generateRandomString();
        //$data['customer_unique_id'] = $customer_unique_id;
		$data = array(
					'form_title' => 'Add Customer',
					'form_action' => 'customers/customer_add',
					'states' => $states,
					'countries' => $countries,
					'form' => '',
					'customer_unique_id'=>$customer_unique_id

					);
  
                // sidebar
				
		$this->navigation->SidebarButton('<span class="btn btn-default"><i class="fa fa-globe"></i>Map View</span>','customers/map');
		$this->navigation->SidebarButton('<span class="btn btn-success"><i class="fa fa-plus"></i>Charge</span>','transactions/create');

	   $this->load->view(branded_view('cp/customer_form.php'),$data);
	}


	function customer_add()
	{
		   $this->load->library('field_validation');
           if ($this->input->post('country') != '' and !$this->field_validation->ValidateCountry($this->input->post('country'))) {
				$this->notices->SetError('Your country is in an improper format.');
				$error = true;
			}
			if ($this->input->post('email') != '' and !$this->field_validation->ValidateEmailAddress($this->input->post('email'))) {
				$this->notices->SetError('Email is in an improper format.');
				$error = true;
			}

			if (isset($error)) {
				//redirect('customers/customer_add');
				$this->load->model('states_model');
				$countries = $this->states_model->GetCountries();
				$states = $this->states_model->GetStates();
		        $this->load->model('customer_model');
				$customer_unique_id = "cust_".$this->generateRandomString();
		        //$data['customer_unique_id'] = $customer_unique_id;
				$data = array(
							'form_title' => 'Add Customer',
							'form_action' => 'customers/customer_add',
							'states' => $states,
							'countries' => $countries,
							'form' => '',
							'customer_unique_id'=>$customer_unique_id

							);
				
			     $this->load->view(branded_view('cp/customer_new.php'));
				return false;
			}

			$params = array(
							'client_id' => $this->user->Get('client_id'),
							'first_name' => $this->input->post('first_name'),
							'last_name' => $this->input->post('last_name'),
							'company' => $this->input->post('company'),
							'address_1' => $this->input->post('address_1'),
							'address_2' => $this->input->post('address_2'),
							'city' => $this->input->post('city'),
							'state' => ($this->input->post('country') == 'US' or $this->input->post('country') == 'CA') ? $this->input->post('state_select') : $this->input->post('state'),
							'country' => $this->input->post('country'),
							'postal_code' => $this->input->post('postal_code'),
							'phone' => $this->input->post('phone'),
							'email' => $this->input->post('email'),
							'internal_id' => $this->input->post('internal_id')
							/*'customer_u_id' => $this->input->post('internal_id')*/
							);

			$this->load->model('customer_model');

			$this->customer_model->NewCustomer($this->user->Get('client_id'),$params);
			$this->notices->SetNotice("Customer has been added successfully.");
			redirect('customers');

			return true;
		}




	/**
	* Delete Customers
	*
	* Delete customers as passed from the dataset
	*
	* @param string Hex'd, base64_encoded, serialized array of customer ID's
	* @param string Return URL for Dataset
	*
	* @return bool Redirects to dataset
	*/
	function delete ($customers, $return_url) {
		$this->load->model('customer_model');
		$this->load->library('asciihex');

		$customers = unserialize(base64_decode($this->asciihex->HexToAscii($customers)));
		$return_url = base64_decode($this->asciihex->HexToAscii($return_url));

		foreach ($customers as $customer) {
			$this->customer_model->DeleteCustomer($this->user->Get('client_id'),$customer);
		}

		$this->notices->SetNotice($this->lang->line('customers_deleted'));

			redirect('customers');
		return true;
	}

	/**
	* Edit customer
	*
	* Edit customer address, etc.
	*
	* @return string view
	*/
	function edit($id = 0) {
		$this->navigation->PageTitle('Edit Customer');

		$this->load->model('states_model');
		$countries = $this->states_model->GetCountries();
		$states = $this->states_model->GetStates();

		$this->load->model('customer_model');

		$customer = $this->customer_model->GetCustomer($this->user->Get('client_id'),$id);
// echo '<pre/>';print_r($customer);die();
		$data = array(
					'form_title' => 'Edit Customer',
					'form_action' => 'customers/post_edit/' . $id,
					'states' => $states,
					'countries' => $countries,
					'form' => $customer
					);

		// sidebar
                $this->navigation->SidebarButton('<span class="btn btn-default"><i class="fa fa-eye"></i>View</span>','customers');
		$this->navigation->SidebarButton('<span class="btn btn-success"><i class="fa fa-plus"></i>Customer</span>','customers/add');
		
		$this->load->view(branded_view('cp/customer_form.php'),$data);
	}

	/**
	* Post Customer Update
	*
	* Handles an update customer post
	*
	* @return string view
	*/
	function post_edit ($id) {
		$this->load->library('field_validation');

		if ($this->input->post('country') != '' and !$this->field_validation->ValidateCountry($this->input->post('country'))) {
			$this->notices->SetError('Your country is in an improper format.');
			$error = true;
		}
		if ($this->input->post('email') != '' and !$this->field_validation->ValidateEmailAddress($this->input->post('email'))) {
			$this->notices->SetError('Email is in an improper format.');
			$error = true;
		}

		if (isset($error)) {
			redirect('customers/edit/' . $id);
			return false;
		}

		$params = array(
						'first_name' => $this->input->post('first_name'),
						'last_name' => $this->input->post('last_name'),
						'company' => $this->input->post('company'),
						'address_1' => $this->input->post('address_1'),
						'address_2' => $this->input->post('address_2'),
						'city' => $this->input->post('city'),
						'state' => ($this->input->post('country') == 'US' or $this->input->post('country') == 'CA') ? $this->input->post('state_select') : $this->input->post('state'),
						'country' => $this->input->post('country'),
						'lat' => $this->input->post('lat'),
						'lng' => $this->input->post('lng'),
						'postal_code' => $this->input->post('postal_code'),
						'phone' => $this->input->post('phone'),
						'email' => $this->input->post('email'),
						'internal_id' => $this->input->post('internal_id')
						);

		$this->load->model('customer_model');

		$this->customer_model->UpdateCustomer($this->user->Get('client_id'), $id, $params);
		$this->notices->SetNotice($this->lang->line('customer_updated'));

		redirect('customers');

		return true;
	}

	public function map() {

		$this->navigation->PageTitle('Customers Map');
                
		$this->navigation->SidebarButton('<span class="btn btn-default"><i class="fa fa-arrow-left"></i> List View</span>','customers');
		$this->navigation->SidebarButton('<span class="btn btn-success"><i class="fa fa-plus"></i> Customer</span>','customers/add');
		
		$this->load->model('customer_model');
		$customers = $this->customer_model->GetCustomers($this->user->Get('client_id'), array());
		$data['customers'] = $customers;
		$this->load->view(branded_view('cp/customer_map.php'), $data);
	}

}