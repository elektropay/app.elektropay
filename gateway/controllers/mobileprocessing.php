<?php
/**
* MobileProcessing Controller
*
*
* @version 1.0
* @author Richard Rowe
* @package Custom

*/
class MobileProcessing extends Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('cp/user','user');
		if($this->user->LoggedIn()) {
			// redirect('/dashboard');
		}
	}

	function index()
	{
		error_reporting(0);
		ini_set('display_errors', 1);
		$data = array(
			'title' => 'Mobile Processing Solutions | Everpay'
		);
		$this->load->view('mobile-processing/index.php', $data);
	}
}