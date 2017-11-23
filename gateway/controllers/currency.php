<?php
/**
* Currency Controller
*
* Update Currency details
*
* @version 1.0
* @author Everpay, Inc.
* @package OpenGateway

*/
class Currency extends Controller {

	function __construct()
	{
		// error_reporting(E_ALL);
		// ini_set('display_errors',1);
		parent::__construct();

		// perform control-panel specific loads
		CPLoader();
	}

	/**
	* Update Currency
	*
	* Update your Currency type.
	*
	* @return string view
	*/
	function index() {
		$this->navigation->PageTitle('Currency');

		$this->load->model('currency_model');
		$currency = $this->db->get('currency')->result();
		$currencies = $this->db->get('currencies')->result();

		$client = $this->client_model->GetClient($this->user->Get('client_id'),$this->user->Get('client_id'));
		
		$client['gmt_offset'] = $client['currency_type'];
		$currency_type_list = array(
			'USD' 		=> 'US Dollars',
			'CDN' 	=> 'Canadian Dollars',
			'GBP' 	=> 'British Pounds',
			'YUN' 	=> 'Yuan',
		);
       // echo '<pre/>';print_r($currencies);die();
		$data = array(
					'form_title' => 'Update',
					'form_action' => 'currency/post',
					'currency_type' => $currency,
					'client_currencies' => $currencies,
					'currency_list' => $currency_type_list,
					'form' => $client
					);
        // echo '<pre/>';print_r($data);die();
		$this->load->view(branded_view('cp/currency.php'),$data);
	}

	/**
	* Post Currency Update
	*
	* Handles an update Currency post
	*
	* @return string view
	*/
	function post () {
		// error_reporting(E_ALL);
		// ini_set('display_errors',1);

		$this->load->library('field_validation');

		if ($this->input->post('currency_type') == '') {
			$this->notices->SetError('Currency type is a required field.');
			$error = true;
		}
		

		if (isset($error)) {
			redirect('currency/');
			return false;
		}
		
        }
        
        $params = array(
					'currency_type' => $this->input->post('currency_type'),
					
					);

      		}
   // echo '<pre/>';print_r($params);die();
		$this->client_model->UpdateClient($this->user->Get('client_id'), $this->user->Get('client_id'), $params);
		$this->notices->SetNotice($this->lang->line('Currency_updated'));

		redirect('Currency');

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
				$new_converted = number_format($converted, 2);
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