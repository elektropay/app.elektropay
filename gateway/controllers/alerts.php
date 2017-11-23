<?php
/**
* Alerts Controller
*
* Manage alerts for api post request, ewallet transaction post, invoicing rss feeds and social notifications
*
* @version 1.0
* @author Richard Rowe
* @package OpenGateway

*/
class Clients extends Controller {

	function __construct()
	{
		parent::__construct();

		// perform control-panel specific loads
		CPLoader();
	}

	/**
	* Manage clients
	*
	* Lists all active clients, with optional filters
	*/
	function index()
	{
		$this->navigation->PageTitle('Notifications');

		$this->load->view(branded_view('cp/alerts.php'));


		// sidebar
		$this->navigation->SidebarButton('Notifications','alerts');

		$this->load->view(branded_view('cp/alerts.php'));
	}


}