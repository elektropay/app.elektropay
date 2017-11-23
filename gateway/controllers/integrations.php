<?php
/**
* Integrations Controller
*
*
* @version 1.0
* @author Richard Rowe
* @package Custom

*/
class Integrations extends Controller {
    
	function __construct()
	{
		parent::__construct();

		// perform control-panel specific loads
		CPLoader();
		
	}

	/**
	* 3rd Party App integrations
	*
	* Plug and Play integrations of popular apps..
	*/
	function index()
	{
		$this->navigation->PageTitle('Integrations');


// sidebar
		$this->navigation->SidebarButton('<i class="fa fa-tablet"></i> Dashboard','dashboard');

		$this->navigation->SidebarButton('<i class="fa fa-cog"></i> Settings','settings/');

		$this->load->view('cp/integrations', $data);
		ini_set('display_errors', 1);
	}
}
