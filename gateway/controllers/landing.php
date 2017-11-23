<?php
/**
* Landing Controller
*
*
* @version 1.0
* @author Jitesh Tukadiya
* @package Custom

*/
class Landing extends Controller {

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
			'title' => 'Everpay 2.0'
		);
		$this->load->view('landing/index', $data);
	}
}