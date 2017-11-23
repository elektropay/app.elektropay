<?php

function CPLoader () {
	$CI =& get_instance();
	
	// define active Control Panel
	define("_CONTROLPANEL","1");
	
	// don't load this if OpenGateway isn't installed
	if (!file_exists(APPPATH . 'config/database.php')) {
		return TRUE;
	}
	
	// redirect to SSL?
	if ($CI->config->item('ssl_active') == TRUE and ($_SERVER["SERVER_PORT"] != "443" and (isset($_SERVER['https']) and $_SERVER['HTTPS'] != 'on'))) {
		header('Location: ' . str_replace('http://','https://',$CI->config->item('base_url')));
		die();
	}	
	
	$CI->load->library('session');
	$CI->load->model('cp/user','user');
	$CI->load->helper('url');
	$CI->lang->load('control_panel');
	$CI->load->model('cp/notices','notices');
	$CI->load->helper('get_notices');
	$CI->load->model('cp/navigation','navigation');
	$CI->load->helper('dataset_link');
	
	// confirm login
	if (!$CI->user->LoggedIn() and $CI->router->fetch_method() != 'login' and $CI->router->fetch_method() != 'do_login')
	{
		redirect('/dashboard/login');
		die();
	}

	else if (!$CI->user->CheckTwoStep() and $CI->router->fetch_method() != 'login' and $CI->router->fetch_method() != 'do_login' and $CI->router->fetch_method() != 'two_step' and $CI->user->LoggedIn() and $CI->router->fetch_method() != 'logout')
	{
		// echo 'LoggedIn but Two step required';
		redirect('/dashboard/two_step');
		die();
	}
	
	// Check CronJobs
	$query = $CI->db->get('version');
	if ($query->num_rows())
	{
		$result = $query->row();
		
		$check_time = strtotime("-1 day");
		// If the cronjobs have never been run, then go ahead and run them manually.
		if (!isset($result->cron_last_run_notifications) || 
			!isset($result->cron_last_run_subs) ||
			$result->cron_last_run_notifications == '0000-00-00 00:00:00' ||
			$result->cron_last_run_subs == '0000-00-00 00:00:00' )
		{
			$cronkey = $CI->config->item('cron_key');
			
			$url = site_url('cron/RunAll/'. $cronkey);
			
			// Run the cron jobs via curl for max server compatility.
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);   // Verify it belongs to the server.
		    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);   // Check common exists and matches the server host name
		    $post_response = curl_exec($ch);
		    
		    curl_close($ch);
		}

		// Otherwise, if it has been ran but not lately, throw a warning.
		else if (strtotime($result->cron_last_run_notifications) < $check_time || strtotime($result->cron_last_run_subs) < $check_time)
		{
			$CI->notices->SetError('Warning: Your cronjob is not running properly. <a href="'. site_url('settings/cronjob') .'">Click here for details</a>');
		}
	}
	
	// Build Navigation
	
	if ($CI->user->LoggedIn() and ($CI->user->Get('client_type_id') == 0 or $CI->user->Get('client_type_id') == 0)) {
	
	
	$CI->navigation->Add('get_started','<span>Get Started</span><i class="icon fa fa-arrow-right"></i>');
 }

 
	if ($CI->user->LoggedIn() and ($CI->user->Get('client_type_id') == 1 or $CI->user->Get('client_type_id') == 1)) {
	
	
	$CI->navigation->Add('dashboard','<i class="icon icon-budicon-497"></i><span>Dashboard</span>');
	$CI->navigation->Add('transactions','<i class="icon icon-budicon-375"></i><span>Payments</span>');
	$CI->navigation->Add('transactions/create','New Charge','transactions');
	$CI->navigation->Add('transactions/all_recurring','Recurring Charges','transactions');
    $CI->navigation->Add('customers','<i class="icon icon-budicon-292"></i><span>Customers</span>');
	$CI->navigation->Add('customers/add','New Customer','customers');
    $CI->navigation->Add('plans','<i class="icon icon-budicon-173"></i><span>Subscriptions</span>');
	$CI->navigation->Add('plans/new_plan','New Plan','plans');
	$CI->navigation->Add('coupons', '<i class="icon icon-budicon-348"></i><span>Coupons</span>');
	$CI->navigation->Add('coupons/add', 'New Coupon', 'coupons');	
	$CI->navigation->Add('analytics', '<i class="icon fa fa-pie-chart"></i><span>Analytics</span>');
	$CI->navigation->Add('reports_sales', 'Sales Reports', 'reports_orders');
	$CI->navigation->Add('integrations','<i class="icon fa fa-signal"></i><span> Integrations</span>');
	$CI->navigation->Add('settings','<i class="icon fa fa-cog"></i><span> Settings</span>');
 }
 

if ($CI->user->LoggedIn() and ($CI->user->Get('client_type_id') == 1 or $CI->user->Get('client_type_id') == 1)) {
	
	
	$CI->navigation->Add('dashboard','<i class="icon icon-budicon-497"></i><span>Dashboard</span>');
	$CI->navigation->Add('transactions','<i class="icon icon-budicon-375"></i><span>Payments</span>');
	$CI->navigation->Add('transactions/create','New Charge','transactions');
	$CI->navigation->Add('transactions/all_recurring','Recurring Charges','transactions');
    $CI->navigation->Add('customers','<i class="icon icon-budicon-292"></i><span>Customers</span>');
	$CI->navigation->Add('customers/add','New Customer','customers');
    $CI->navigation->Add('plans','<i class="icon icon-budicon-173"></i><span>subscriptions</span>');
	$CI->navigation->Add('plans/new_plan','New Plan','plans');
	$CI->navigation->Add('coupons', '<i class="icon icon-budicon-754"></i><span>Coupons</span>');
	$CI->navigation->Add('coupons/add', 'New Coupon', 'coupons');	
	$CI->navigation->Add('analytics', '<i class="icon icon-budicon-348"></i><span>Analytics</span>');
	$CI->navigation->Add('reports_sales', 'Sales Reports', 'reports_orders');
	$CI->navigation->Add('integrations','<i class="icon fa fa-signal"></i><span> Integrations</span>');
	$CI->navigation->Add('settings','<i class="icon icon-budicon-339"></i><span> Settings</span>');
 }



if ($CI->user->LoggedIn() and ($CI->user->Get('client_type_id') == 2 or $CI->user->Get('client_type_id') == 2)) {
	
	$CI->navigation->Add('dashboard','<i class="icon icon-budicon-497"></i><span>Dashboard</span>');
	$CI->navigation->Add('transactions','<i class="icon icon-budicon-375"></i><span>Payments</span>');
    $CI->navigation->Add('clients','<i class="icon icon-budicon-292"></i><span>Merchants</span>');
	$CI->navigation->Add('clients/create','Add Merchant','clients');	
	$CI->navigation->Add('analytics', '<i class="icon icon-budicon-348"></i><span>Analytics</span>');
	$CI->navigation->Add('statements/','<i class="icon icon-budicon-754"></i><span>Statements</span>');
	$CI->navigation->Add('integrations','<i class="icon fa fa-signal"></i><span> Integrations</span>');
	$CI->navigation->Add('settings','<i class="icon icon-budicon-339"></i><span> Settings</span>');
 }

if ($CI->user->LoggedIn() and ($CI->user->Get('client_type_id') == 3 or $CI->user->Get('client_type_id') == 3)) {
	
	
	$CI->navigation->Add('dashboard','<i class="icon icon-budicon-497"></i><span>Dashboard</span>');
	$CI->navigation->Add('transactions','<i class="icon icon-budicon-375"></i><span>Payments</span>');
	$CI->navigation->Add('transactions/create','New Charge','transactions');
	$CI->navigation->Add('transactions/all_recurring','Recurring Charges','transactions');
    $CI->navigation->Add('customers','<i class="icon icon-budicon-292"></i><span>Customers</span>');
	$CI->navigation->Add('customers/add','New Customer','customers');
	$CI->navigation->Add('clients','<i class="icon icon-budicon-292"></i><span>Users</span>');
	$CI->navigation->Add('clients/create','New User','clients');
    $CI->navigation->Add('plans','<i class="icon icon-budicon-173"></i><span>Plans</span>');
	$CI->navigation->Add('plans/new_plan','New Plan','plans');
	$CI->navigation->Add('coupons', '<i class="icon icon-budicon-754"></i><span>Coupons</span>');
	$CI->navigation->Add('coupons/add', 'New Coupon', 'coupons');	
	$CI->navigation->Add('analytics', '<i class="icon icon-budicon-348"></i><span>Analytics</span>');
	$CI->navigation->Add('reports_sales', 'Sales Reports', 'reports_orders');
	$CI->navigation->Add('settings','<i class="icon icon-budicon-339"></i><span> Settings</span>');
        $CI->navigation->Add('settings/emails','<i class="icon icon-budicon-778"></i><span> Emails</span>','settings');
	$CI->navigation->Add('settings/gateways','<i class="icon icon-budicon-339"></i><span> Gateways<span>','settings');
	$CI->navigation->Add('settings/cronjob','Cronjobs','#');
	$CI->navigation->Add('settings/api','<i class="icon icon-budicon-339"></i><span>API Access</span>','settings');
        $CI->navigation->Add('settings/system','System Settings','settings');
        $CI->navigation->Add('settings/wallet','Wallet','settings');
	$CI->navigation->Add('events','Logs','settings');
        $CI->navigation->Add('settings/mobile','Mobile','settings');
        $CI->navigation->Add('settings/pos','POS','settings');
        $CI->navigation->Add('settings/marketplace','Marketplace','settings');
 }


	// Set default page title
	$CI->navigation->PageTitle('Dashboard');
}

// branding functions
function branded_include ($file) {
	if (file_exists(BASEPATH . './assets/' . $file)) {
		return site_url('assets/' . $file);
	}
	else {
		return site_url('assets/' . $file);
	}
}

function branded_view ($file) {
	if (file_exists(BASEPATH . '../assets/custom/views/' . $file . '.php')) {
		return '../../../assets/custom/views/' . $file;
	}
	else {
		return $file;
	}
}