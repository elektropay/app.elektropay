<?php
/**
* Account Controller
*
* Update account details, logout
*
* @version 1.0
* @author Electric Function, Inc.
* @package OpenGateway

*/

require_once(APPPATH."libraries/segment/Segment.php");
class Account extends Controller {

	function __construct()
	{
		// error_reporting(E_ALL);
		// ini_set('display_errors',1);
		parent::__construct();

		// perform control-panel specific loads
		CPLoader();
		$this->load->library('encrypt');
	}
	$this->valid_currencies = array('AED', 'ANG', 'ARS', 'AUD', 'BGN', 'BHD', 'BND', 'BOB', 'BRL', 'BWP', 'CAD', 'CHF', 'CLP', 'CNY', 'COP', 'CRC', 'CZK', 'DKK', 'DOP', 'DZD', 'EGP', 'EUR', 'FJD', 'GBP', 'HKD', 'HNL', 'HRK', 'HUF', 'IDR', 'ILS', 'INR', 'JMD', 'JOD', 'JPY', 'KES', 'KRW', 'KWD', 'KYD', 'KZT', 'LBP', 'LKR', 'LTL', 'LVL', 'MAD', 'MDL', 'MKD', 'MUR', 'MXN', 'MYR', 'NAD', 'NGN', 'NIO', 'NOK', 'NPR', 'NZD', 'OMR', 'PEN', 'PGK', 'PHP', 'PKR', 'PLN', 'PYG', 'QAR', 'RON', 'RSD', 'RUB', 'SAR', 'SCR', 'SEK', 'SGD', 'SLL', 'SVC', 'THB', 'TND', 'TRY', 'TTD', 'TWD', 'TZS', 'UAH', 'UGX', 'USD', 'UYU', 'UZS', 'VEB', 'VND', 'YER', 'ZAR', 'ZMK');
	}

	/**
	* Update Account
	*
	* Update your account details, password, etc.
	*
	* @return string view
	*/
function index() {
		$this->navigation->PageTitle('My Profile');
		
		$this->load->model('states_model');
		$countries = $this->states_model->GetCountries();
		$states = $this->states_model->GetStates();
		$business_categories = $this->db->get('business_categories')->result();
		$business_countries = $this->db->get('countries')->result();

		$client = $this->client_model->GetClient($this->user->Get('client_id'),$this->user->Get('client_id'));
		
		$client['gmt_offset'] = $client['timezone'];
		$monthly_vol_list = array(
			'1000' 		=> '$1000 - $10,000',
			'10000' 	=> '$10,000 - $50,000',
			'50000' 	=> '$50,000 - $100,000',
			'100000' 	=> '$100,000 - $150,000',
			'150000' 	=> '$150,000 - $250,000',
			'250000' 	=> '$250,000 - $500,000',
			'500000' 	=> '$500,000 - $1,000,000',
			'1000000' 	=> '$1,000,000 +'
		);
       // echo '<pre/>';print_r($business_countries);die();
		$data = array(
					'form_title' => 'My Business Info',
					'form_action' => 'account/post',
					'states' => $states,
					'countries' => $countries,
					'business_categories' => $business_categories,
					'business_countries' => $business_countries,
					'monthly_vol_list' => $monthly_vol_list,
					'form' => $client
					);
        // echo '<pre/>';print_r($data);die();

		// sidebar
		$this->navigation->SidebarButton('<span class="btn btn-default"><i class="fa fa-dashboard"></i> Dashboard</span>','dashboard/');
		$this->navigation->SidebarButton('<span class="btn btn-primary"><i class="fa fa-cog"></i> Settings</span>','settings/');

		error_reporting(-1);
		ini_set('show_errors', 1);
		// var_dump($this->encrypt->decode($data['form']['bank_routing_number']));
		// echo '<pre/>';print_r($data);die();
		// foreach($data['form'] as $key=>$val) {
			$data['form']['bank_routing_number'] = $this->encrypt->decode($data['form']['bank_routing_number']) ? $this->encrypt->decode($data['form']['bank_routing_number']) : $data['form']['bank_routing_number'];
			$data['form']['bank_acc_number'] = $this->encrypt->decode($data['form']['bank_acc_number']) ? $this->encrypt->decode($data['form']['bank_acc_number']) : $data['form']['bank_acc_number'];
		// }
		$this->load->view(branded_view('cp/account_form.php'),$data);
	}

	/**
	* Post Account Update
	*
	* Handles an update account post
	*
	* @return string view
	*/
	function post () {
		// error_reporting(E_ALL);
		// ini_set('display_errors',1);

		$this->load->library('field_validation');

		if (!$this->field_validation->ValidateEmailAddress($this->input->post('email'))) {
			$this->notices->SetError('Email is in an improper format.');
			$error = true;
		}
	
		if (!$this->field_validation->ValidateCountry($this->input->post('country'))) {
			$this->notices->SetError('Your country is in an improper format.');
			$error = true;
		}
		 if ($this->input->post('first_name') == '') {
		 	$this->notices->SetError('First Name is a required field.');
		 	$error = false;
		 }
		 if ($this->input->post('last_name') == '') {
		 	$this->notices->SetError('Last Name is a required field.');
			$error = false;
		}
		// if ($this->input->post('business_fax') == '') {
		// 	$this->notices->SetError('Business Fax is a required field.');
		// 	$error = true;
		// }
		//if ($this->input->post('business_url') == '') {
			//$this->notices->SetError('Business URL is a required field.');
			//$error = true;
		//}
		//if ($this->input->post('business_monthly_vol') == '') {
		//	$this->notices->SetError('Business Monthly Volume is a required field.');
		//	$error = true;
		//}
		
		if ($this->input->post('is_non_us') == 'on') {
			if ($this->input->post('bank_swift_number') == '') {
				$this->notices->SetError('Bank Swift Number is a required field.');
				$error = true;
			}
			//if ($this->input->post('bank_address') == '') {
				//$this->notices->SetError('Bank Address is a required field.');
				//$error = true;
			//}
		}


		$password = $this->input->post('password'); // put password in variable for later functions

		if (!empty($password) and $this->input->post('password') != $this->input->post('password2')) {
			$this->notices->SetError('Your passwords do not match.');
			$error = true;
		}
		elseif (!empty($password) and strlen($this->input->post('password')) < 6) {
			$this->notices->SetError('You must supply a password of at least 6 characters to change the password.');
			$error = true;
		}

		if (isset($error)) {
			redirect('account/');
			return false;
		}
		$two_step_verification = ($this->input->post('two_step_verification') == 'on') ? 1 : 0;

        $logo = md5($this->user->Get('client_id')) . '.' . pathinfo($_FILES['company_logo']['name'], PATHINFO_EXTENSION); // $_FILES['company_logo']['name'];

        if($_FILES['company_logo']['error'] !== 4) {
        	move_uploaded_file($_FILES['company_logo']['tmp_name'], "upload/".$logo)or die($_FILES['company_logo']['error']);
        }
        
        $params = array(
					'api_id' => $this->user->Get('api_id'),
					'secret_key' => $this->user->Get('secret_key'),
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
					'timezone' => $this->input->post('timezones'),
					'two_step_verification' => $two_step_verification,
					'tax_id' => $this->input->post('tax_id'),
				    'business_start' => $this->input->post('business_start'),
				    'business_category' => $this->input->post('business_category'),
				    'business_address' => $this->input->post('business_address'),
				    'business_city' => $this->input->post('business_city'),
				    'business_state' => $this->input->post('business_state'),
				    'business_zip' => $this->input->post('business_zip'),
				    'business_country' => $this->input->post('business_country'),
				    'business_phone' => $this->input->post('business_phone'),
				    'business_fax' => $this->input->post('business_fax'),
				    'business_url' => $this->input->post('business_url'),
				    'business_monthly_vol' => $this->input->post('business_monthly_vol'),
				    'bank_routing_number' => $this->encrypt->encode($this->input->post('bank_routing_number')),
				    'bank_acc_number' => $this->encrypt->encode($this->input->post('bank_acc_number')),
				    'bank_acc_type' => $this->input->post('bank_acc_type'),
				    'bank_name' => $this->input->post('bank_name'),
				    'bank_acc_name' => $this->input->post('bank_acc_name'),
				    'is_non_us' => ($this->input->post('is_non_us') == 'on') ? 1 : 0,
				    'bank_swift_number' => $this->input->post('bank_swift_number'),
				    'bank_address' => $this->input->post('bank_address'),
					);

        if($logo!="") {
        	$params['company_logo'] = $logo;
        }

		if (!empty($password)) {
			$params['password'] = $this->input->post('password');
		}
   // echo '<pre/>';print_r($params);die();
		$this->client_model->UpdateClient($this->user->Get('client_id'), $this->user->Get('client_id'), $params);
		$this->notices->SetNotice($this->lang->line('account_updated'));

		redirect('account');

		return true;
	}

	function regenerate_codes() {

		$num = range(0, 9); 
		$code1 ='';
		$code2 =''; 
		$code3 =''; 
		$code4 =''; 
		$code5 =''; 
		$code6 =''; 
		for($c=0;$c < 7;$c++) { 
			$code1 .= $num[mt_rand(0,count($num)-1)]; 
			$code2 .= $num[mt_rand(0,count($num)-1)];
			$code3 .= $num[mt_rand(0,count($num)-1)]; 
			$code4 .= $num[mt_rand(0,count($num)-1)]; 
			$code5 .= $num[mt_rand(0,count($num)-1)]; 
			$code6 .= $num[mt_rand(0,count($num)-1)]; 
		}
		$new_codes = $code1.",".$code2.",".$code3.",".$code4.",".$code5.",".$code6;

		$params = array(
			'backup_codes' => $new_codes
		);

		$this->client_model->UpdateClient($this->user->Get('client_id'), $this->user->Get('client_id'), $params);
		redirect('account');
		return true;
	}



//--------------------------------------------------------------------
/*
   * New Controller 
   * Created by Richard
   * 
  */
   
   function  billing()
   {
		$this->navigation->PageTitle('Billing and Usage');
		$this->load->model('client_model');
		$this->load->model('plan_model');
		$plans_details = $this->plan_model->GetPlans($this->user->Get('client_id'));
		$plans = array();
		foreach($plans_details as $plan) {
			$plans[$plan['id']] = $plan;
		}

		$data = array();

		$data['plans'] = $plans;

		
		// sidebar
		$this->navigation->SidebarButton('<span class="btn btn-default"><i class="fa fa-dashboard"></i> Dashboard</span>','dashboard/');
		$this->navigation->SidebarButton('<span class="btn btn-primary"><i class="fa fa-cog"></i> Settings</span>','settings/');
		$this->load->view(branded_view('cp/billing'), $data);
   }


   function  notifications()
   {
 	   $this->navigation->PageTitle('Notifications');
       $this->load->model('client_model');
       $data = array('');

		// sidebar
		$this->navigation->SidebarButton('<span class="btn btn-default"><i class="fa fa-dashboard"></i> Dashboard</span>','dashboard/');
		$this->navigation->SidebarButton('<span class="btn btn-primary"><i class="fa fa-cog"></i> Settings</span>','settings/');
       $this->load->view(branded_view('cp/notification_settings'), $data);
   }

  function  upgrade()
   {
		$this->navigation->PageTitle('Upgrade Account');
		$this->load->model('client_model');
		$data = array('');

		$this->navigation->SidebarButton('<span class="btn btn-default"><i class="fa fa-dashboard"></i> Dashboard</span>','dashboard');
		$this->navigation->SidebarButton('<span class="btn btn-primary"><i class="fa fa-cog"></i> Settings</span>','settings');
		$this->load->view(branded_view('cp/account_upgrade'), $data);
   }

  function  support()
   {
 	   $this->navigation->PageTitle('Help & Support');
       $this->load->model('client_model');
       $data = array('');
                $this->navigation->SidebarButton('<span class="btn btn-default"><i class="fa fa-dashboard"></i> Dashboard</span>','dashboard');

		$this->navigation->SidebarButton('<span class="btn btn-primary"><i class="fa fa-cog"></i> Settings</span>','settings');
       $this->load->view(branded_view('cp/account_support'), $data);
   }


  function  close()
   {
 	   $this->navigation->PageTitle('Close Account');
       $this->load->model('client_model');
       $data = array('');
                $this->navigation->SidebarButton('<span class="btn btn-default"><i class="fa fa-dashboard"></i> Dashboard</span>','dashboard');

		$this->navigation->SidebarButton('<span class="btn btn-primary"><i class="fa fa-cog"></i> Settings</span>','settings');
       $this->load->view(branded_view('cp/account_close'), $data);
   }


//--------------------------------------------------------------------
	/**
	* Logout
	*
	* Logout the user, return to login page
	*
	* @return bool True, with redirect
	*/
	function logout() {
		$this->user->Logout();

		redirect('dashboard/login');
		return true;
	}

	function currency_ajax() {
		$this->load->library('currencyconvert');
		$converter = new CurrencyConvert();
		$to_Currency = 'USD'; // always convert to USD
		$from_Currency = $this->input->post('from_Currency');
		$amount = $this->input->post('amount');
		$data = array();

		if(array_search($from_Currency, $this->valid_currencies) !== FALSE) {
			if($amount > 0) {
				$data['status'] = 200;

				$converted = $converter->currencyConvert($amount, $from_Currency, $to_Currency);
				$new_converted = round($converted, 2);
				// echo $converted.'<br>';
				// echo $new_converted;die();
				if($new_converted < $converted) {
					$new_converted += 0.01;
				}

				$data['converted'] = $new_converted;
			} else {
				$data['status'] = 'error';
				$data['message'] = 'Invalid amount';
			}
		} else {
			$data['status'] = 'error';
			$data['message'] = 'Invalid Currency';
		}

		header('Content-Type: application/json');
		echo json_encode($data);
		die();
	}
}