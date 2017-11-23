<?php
/**
* API Documentation Controller
*
*
* @version 1.0
* @author Richard Rowe
* @package Custom
*/
class Apidocs extends Controller {
    
function __construct()
	{
		parent::__construct();

		// perform control-panel specific loads
		CPLoader();
		
	}

	/**
	* API Docs
	*
	* View All API documentation
	*/
	function index()
	{
		
		$this->navigation->PageTitle('API Docs');
	    // get log
		$this->load->model('log_model');
		$log = $this->log_model->GetClientLog($this->user->Get('client_id'),'','','N');
		$logcount = $this->log_model->GetClientLogCount($this->user->Get('client_id'));
		$data['log'] = $log;
		$data['logcount']= $logcount;
		$this->load->view('cp/docs', $data);
		ini_set('display_errors', 1);
	}
}
