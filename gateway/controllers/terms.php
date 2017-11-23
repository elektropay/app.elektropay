<?php
/**
* Terms Of Service Controller
*
*
* @version 1.0
* @author Richard Rowe
* @package Custom

*/
class Terms extends Controller {

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
		//echo "hii..";
		error_reporting(0);
		ini_set('display_errors', 1);
		$data = array(
			'title' => 'Terms And Conditions'
		);
		$this->load->view('landing/terms.php', $data);
	}
}