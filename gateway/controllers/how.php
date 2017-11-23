<?php
/**
* How Everpay Controller
*
*
* @version 1.0
* @author Richard Rowe
* @package Custom

*/
class How extends Controller {

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
			'title' => 'How Does It Work? | Everpay'
		);
		$this->load->view('landing/how-it-works.php', $data);
	}
}