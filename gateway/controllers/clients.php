<?php
/**
* Clients Controller
*
* Manage clients (for Service Providers and Administrators, only)
*
* @version 1.0
* @author Electric Function, Inc.
* @package OpenGateway
*/

require_once(APPPATH."libraries/segment/Segment.php");

class Clients extends Controller {
	function __construct()
	{
		parent::__construct();
		// perform control-panel specific loads
		CPLoader();
	}
	/**
	* Manage clients
	*
	* Lists all active clients, with optional filters
	*/
	function index()
	{
		$this->navigation->PageTitle('Users');
		$this->load->model('cp/dataset','dataset');
		$columns = array(
						array(
							'name' => 'Id',
							'sort_column' => 'clients.id',
							'type' => 'id',
							'width' => '9%',
							'filter' => 'client_id'),
						array(
							'name' => 'Username',
							'sort_column' => 'username',
							'type' => 'text',
							'width' => '12%',
							'filter' => 'username'
							),
						array(
							'name' => 'Real Name',
							'sort_column' => 'last_name',
							'type' => 'text',
							'width' => '17%',
							'filter' => 'last_name'),
						array(
							'name' => 'Email Address',
							'sort_column' => 'email',
							'type' => 'text',
							'width' => '17%',
							'filter' => 'email'),
						array(
							'name' => 'Status',
							'type' => 'select',
							'options' => array('0' => 'Active', '1' => 'Suspended'),
							'filter' => 'suspended',
							'width' => '10%'),
						array(
							'name' => '',
							'width' => '15%'
						)
					);
		$this->dataset->Initialize('client_model','GetClients',$columns);
		// add actions
		$this->dataset->Action('Suspend','clients/suspend');
		$this->dataset->Action('Activate','clients/activate');
		// sidebar
		$this->navigation->SidebarButton('<span class="btn btn-default"><i class="fa fa-dashboard"></i> Dashboard</span>','dashboard');
		$this->navigation->SidebarButton('<span class="btn btn-success"><i class="fa fa-plus"></i>User</span>','clients/create');
				
$this->load->view(branded_view('cp/clients.php'));
	}
	/**
	* Suspend Clients
	*
	* Suspend clients as passed from the dataset
	*
	* @param string Hex'd, base64_encoded, serialized array of client ID's
	* @param string Return URL for Dataset
	*
	* @return bool Redirects to dataset
	*/
	function suspend ($clients, $return_url) {
		$this->load->model('client_model');
		$this->load->library('asciihex');
		$clients = unserialize(base64_decode($this->asciihex->HexToAscii($clients)));
		$return_url = base64_decode($this->asciihex->HexToAscii($return_url));
		foreach ($clients as $client) {
			$this->client_model->SuspendClient($this->user->Get('client_id'),$client);
		}
		$this->notices->SetNotice($this->lang->line('clients_suspended'));
		redirect($return_url);
		return true;
	}
	/**
	* Activate Clients
	*
	* Activate clients as passed from the dataset
	*
	* @param string Hex'd, base64_encoded, serialized array of client ID's
	* @param string Return URL for Dataset
	*
	* @return bool Redirects to dataset
	*/
	function activate ($clients, $return_url) {
		$this->load->model('client_model');
		$this->load->library('asciihex');
		$clients = unserialize(base64_decode($this->asciihex->HexToAscii($clients)));
		$return_url = base64_decode($this->asciihex->HexToAscii($return_url));
		foreach ($clients as $client) {
		$this->client_model->UnsuspendClient($this->user->Get('client_id'),$client);
		}
		$this->notices->SetNotice($this->lang->line('clients_unsuspended'));
		redirect($return_url);
		return true;
	}

/*
	* Create Random string genrator
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
	* New Client
	*
	* Create a new client
	*
	* @return string view
	*/
	function create () {
		$this->navigation->PageTitle('New User');
		$this->load->model('states_model');
		$countries = $this->states_model->GetCountries();
		$states = $this->states_model->GetStates();
		$data = array(
					'form_title' => 'Add A New User',
					'form_action' => 'clients/post/new',
					'action' => 'new',
					'states' => $states,
					'countries' => $countries
					);

		// sidebar
		$this->navigation->SidebarButton('<span class="btn btn-default"><i class="fa fa-eye"></i> View</span>','clients');
		$this->navigation->SidebarButton('<span class="btn btn-success"><i class="fa fa-plus"></i> Import</span>','clients/import');

		$this->load->view(branded_view('cp/client_form.php'),$data);
	}
	
	/**
    * Import Client
	*
	* Import client list
	*
	* @return string view
	*/
	function import () {
		$this->navigation->PageTitle('New User');
		$this->load->model('states_model');
		$countries = $this->states_model->GetCountries();
		$states = $this->states_model->GetStates();
		$data = array(
					'form_title' => 'Import Users',
					'form_action' => 'clients/post/new',
					'action' => 'import',
					'states' => $states,
					'countries' => $countries
					);

		// sidebar
		$this->navigation->SidebarButton('<span class="btn btn-default"><i class="fa fa-eye"></i> List View</span>','clients');
		$this->navigation->SidebarButton('<span class="btn btn-success"><i class="fa fa-plus"></i> User</span>','clients/create');

		$this->load->view(branded_view('cp/client_import.php'),$data);
	}
	
	/**
	* Edit Client
	*
	* Edit an existing client
	*
	* @return string view
	*/
	function edit ($id) {
		$this->navigation->PageTitle('Edit User');
		$this->load->model('states_model');
		$countries = $this->states_model->GetCountries();
		$states = $this->states_model->GetStates();
		$client = $this->client_model->GetClient($this->user->Get('client_id'),$id);
		$client['gmt_offset'] = $client['timezone'];
		$client['client_type'] = $client['client_type_id'];
		$data = array(
					'form_title' => 'Change Details',
					'form_action' => 'clients/post/edit/' . $id,
					'action' => 'edit',
					'states' => $states,
					'countries' => $countries,
					'form' => $client
					);
		$this->load->view(branded_view('cp/client_edit.php'),$data);
	}
	
	/**
	* View Client
	*
	* View an existing user
	*
	* @return string view
	*/
	function view ($id) {
		$this->navigation->PageTitle('User');
		$this->load->model('states_model');
		$countries = $this->states_model->GetCountries();
		$states = $this->states_model->GetStates();
		$client = $this->client_model->GetClient($this->user->Get('client_id'),$id);
		$client['gmt_offset'] = $client['timezone'];
		$client['client_type'] = $client['client_type_id'];
		$data = array(
					'form_title' => 'View Details',
					'form_action' => 'clients/post/edit/' . $id,
					'action' => 'edit',
					'states' => $states,
					'countries' => $countries,
					'form' => $client
					);
	// sidebar
		$this->navigation->SidebarButton('<span class="btn btn-default"><i class="fa fa-eye"></i> View</span>','clients');
		$this->navigation->SidebarButton('<span class="btn btn-success"><i class="fa fa-plus"></i> User</span>','clients/create');

		$this->load->view(branded_view('cp/client_view.php'),$data);
	}
	
	/**
	* Post Client
	*
	* Handles new/edit submisions for clients
	*
	* @return string view
	*/
	function post ($action, $id = false) {
		$this->load->library('field_validation');
		if ($this->input->post('client_type') == '1' and $this->user->Get('client_type') == '1') {
			$this->notices->SetError('You do not have permission to create a Service Provider accounts.');
			$error = true;
		}
		elseif ($this->user->Get('client_type') == '3') {
			$this->notices->SetError('You do not have client account creation privileges.');
			$error = true;
		}
		if ($this->input->post('username') == '') {
			$this->notices->SetError('Username is a required field.');
			$error = true;
		}
		if ($this->input->post('first_name') == '') {
			$this->notices->SetError('First Name is a required field.');
			$error = true;
		}
		if ($this->input->post('last_name') == '') {
			$this->notices->SetError('Last Name is a required field.');
			$error = true;
		}
		if (!$this->field_validation->ValidateCountry($this->input->post('country'))) {
			$this->notices->SetError('Your country is in an improper format.');
			$error = true;
		}
		if (!$this->field_validation->ValidateEmailAddress($this->input->post('email'))) {
			$this->notices->SetError('Email is in an improper format.');
			$error = true;
		}
		$password = $this->input->post('password'); // put password in variable for later functions
		if ($action == 'new') {
			if (empty($password) or strlen($this->input->post('password')) < 6) {
				$this->notices->SetError('You must supply a password of at least 6 characters.');
				$error = true;
			}
			elseif (!empty($password) and $this->input->post('password') != $this->input->post('password2')) {
				$this->notices->SetError('Your passwords do not match.');
				$error = true;
			}
		}
		elseif ($action == 'edit') {
			if (!empty($password) and $this->input->post('password') != $this->input->post('password2')) {
				$this->notices->SetError('Your passwords do not match.');
				$error = true;
			}
			elseif (!empty($password) and strlen($this->input->post('password')) < 6) {
				$this->notices->SetError('You must supply a password of at least 6 characters to change the password.');
				$error = true;
			}
		}
		// check uniqueness of username
		$this->load->model('client_model');
		if ($action == 'new') {
			$clients = $this->client_model->GetClients($this->user->Get('client_id'),array('username' => $this->input->post('username',true)));
			if (is_array($clients)) {
				$this->notices->SetError('Client username is not unique.');
				$error = true;
			}
		}
		if (isset($error)) {
			if ($action == 'new') {
				redirect('clients/create');
				return false;
			}
			else {
				redirect('clients/edit/' . $id);
				return false;
			}
		}
		$params = array(
						'client_type' => $this->input->post('client_type'),
						'username' => $this->input->post('username'),
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
						'timezone' => $this->input->post('timezones')
						);
		if (!empty($password)) {
			$params['password'] = $this->input->post('password');
		}
		if ($action == 'new') {
			$client = $this->client_model->NewClient($this->user->Get('client_id'), $params);
			$this->notices->SetNotice($this->lang->line('client_added'));
			// handle status submission
			if ($this->input->post('suspended') == '1') {
				$this->client_model->SuspendClient($this->user->Get('client_id'), $client['client_id']);
			}
			elseif ($this->input->post('suspended') == '0') {
				$this->client_model->UnsuspendClient($this->user->Get('client_id'), $client['client_id']);
			}
		}
		else {
			$this->client_model->UpdateClient($this->user->Get('client_id'), $id, $params);
			$this->notices->SetNotice($this->lang->line('client_updated'));
			// handle status submission
			if ($this->input->post('suspended') == '1') {
				$this->client_model->SuspendClient($this->user->Get('client_id'), $id);
			}
			elseif ($this->input->post('suspended') == '0') {
				$this->client_model->UnsuspendClient($this->user->Get('client_id'), $id);
			}
		}
		redirect('clients');
		return true;
	}
}