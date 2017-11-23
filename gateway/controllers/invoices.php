<?php
/**
* Invoices Controller
*
* Update invoice details, add, edit
*
* @version 1.0
* @author Everpayinc, Inc.
* @package OpenGateway
*/

require_once(APPPATH."libraries/segment/Segment.php");

require_once(APPPATH."libraries/pancake/pancakeapp.php");


class Invoices extends Controller {

	function __construct()
	{
		parent::__construct();
		//error_reporting(0);

		// perform control-panel specific loads
		CPLoader();
	}

	/**
	* Manage Invoices
	*
	* Lists all active invoices, with optional filters
	*/
	function index()
	{
		
		$this->navigation->PageTitle('Invoice Overview');

		$this->load->model('cp/dataset','dataset');

		$columns = array(
						array(
							'name' => '',
							'sort_column' => 'id',
							'type' => 'id',
							'width' => '5%',
							'filter' => 'customer_id'),
						array(
							'name' => 'Customer',
							'sort_column' => 'customers.first_name', 'customers.last_name',
							'type' => 'text',
							'width' => '25%',
							'filter' => 'customer_last_name', 'customer_last_name'),

						array(
							'name' => 'Date',
							'sort_column' => 'date_created',
							'type' => 'text',
							'width' => '25%',
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
							'name' => 'Active Plans',
							'type' => 'select',
							'options' => $options,
							'filter' => 'plan_id',
							'width' => '20%'
							);
		}
		else {
			$columns[] = array(
				'name' => 'Plan Link',
				'width' => '15%'
				);
		}

		$columns[] = array(
				'name' => '',
				'width' => '5%'
				);

		// set total rows by hand to reduce database load
		$result = $this->db->select('COUNT(customer_id) AS total_rows',FALSE)->where('active','1')->from('customers')->get();
		$this->dataset->total_rows((int)$result->row()->total_rows);
		print_r($this->dataset->data);
		$this->dataset->Initialize('customer_model','GetCustomers',$columns);

		// add actions
		$this->dataset->Action('Delete','invoices/delete');
           
                // sidebar

		$this->navigation->SidebarButton('<i class="fa fa-dashboard"></i> Dashboard','dashboard');

		$this->navigation->SidebarButton('<i class="fa fa-plus green"></i><span class="green"> New Invoice</span>','invoices/add');

		$this->load->view(branded_view('cp/invoices.php'));
	}
}
