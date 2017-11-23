<?php
/**
* About Controller
*
*
* @version 1.0
* @author Richard Rowe
* @package Custom

*/
class About extends Controller {

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
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
		$data = array(
			'title' => 'All About Our Little Payments Company  | Everpay '
		);
		$this->load->view('landing/about-us', $data);
	}
}