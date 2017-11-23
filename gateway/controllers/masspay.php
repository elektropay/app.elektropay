<?php
/**
* Deposit Controller
*
*
* @version 1.0
* @author Richard Rowe
* @package Custom

*/
class Masspay extends Controller {
    
	function __construct()
	{
		parent::__construct();

		// perform control-panel specific loads
		CPLoader();
		
	}

	/**
	* Mass Payment
	*
	* Make A Mass Payments Of Funds To Many Users At The Same Time
	*/
	function index()
	{
		
		$this->navigation->PageTitle('Mass Payments');
	    // get log
		$this->load->model('log_model');
		$log = $this->log_model->GetClientLog($this->user->Get('client_id'),'','','N');
		$logcount = $this->log_model->GetClientLogCount($this->user->Get('client_id'));
		$data['log'] = $log;
		$data['logcount']= $logcount;
		$this->load->view('cp/mass_pay', $data);
		ini_set('display_errors', 1);
	}
}
