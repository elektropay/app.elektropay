<?php
/**
* Events Controller
*
*
* @version 1.0
* @author Richard Rowe
* @package Custom

*/
class Events extends Controller {
    
	function __construct()
	{
		parent::__construct();

		// perform control-panel specific loads
		CPLoader();
		
	}

	/**
	* Events & Webhhooks
	*
	* Events and Notifications for api, customer, product, payment post, rss feeds and fraud, risk alerts, etc.
	*/
	function index()
	{
		$this->navigation->PageTitle('Events & Webhooks');
	    // get log
		$this->load->model('log_model');
		$log = $this->log_model->GetClientLog($this->user->Get('client_id'),'','','N');
		$logcount = $this->log_model->GetClientLogCount($this->user->Get('client_id'));
		$data['log'] = $log;
		$data['logcount']= $logcount;
		$this->load->view('cp/events', $data);
		ini_set('display_errors', 1);
	}
}
