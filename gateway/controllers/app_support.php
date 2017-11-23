<?php
/**
* Appsupport Controller
*
*
* @version 1.0
* @author Richard Rowe
* @package Custom

*/
class Appsupport extends Controller {
    
	function __construct()
	{
		parent::__construct();

		// perform control-panel specific loads
		CPLoader();
		
	}

	/**
	* Application Support And Help
	*
	* Help And Support section
	*/
	function index()
	{
		
		$this->navigation->PageTitle('Help And Support');
	    // get log
		$this->load->model('log_model');
		$log = $this->log_model->GetClientLog($this->user->Get('client_id'),'','','N');
		$logcount = $this->log_model->GetClientLogCount($this->user->Get('client_id'));
		$data['log'] = $log;
		$data['logcount']= $logcount;
		$this->load->view('cp/app_support', $data);
		ini_set('display_errors', 1);
	}
}
