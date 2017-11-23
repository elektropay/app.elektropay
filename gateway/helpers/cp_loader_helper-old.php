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
	$CI->navigation->Add('dashboard','Dashboard');
	
	$CI->navigation->Add('transactions','Payments');
	$CI->navigation->Add('transactions/create','New Charge','transactions');
	$CI->navigation->Add('transactions/all_recurring','Recurring Charges','transactions');

        $CI->navigation->Add('customers','Customers');
	$CI->navigation->Add('customers/add','+ New','customers');

	if ($CI->user->LoggedIn() and ($CI->user->Get('client_type_id') == 1 or $CI->user->Get('client_type_id') == 3)) {
        $CI->navigation->Add('recipients','Recipients');
        $CI->navigation->Add('recipients/new_recipient','+ New','recipients');
	}

	if ($CI->user->LoggedIn() and ($CI->user->Get('client_type_id') == 1 or $CI->user->Get('client_type_id') == 3)) {
		$CI->navigation->Add('clients','Users');
		$CI->navigation->Add('clients/create','New User','clients');
		$CI->navigation->Add('transfers', 'Transfers');
		$CI->navigation->Add('transfers/deposit', 'Deposit', 'transfers');
		$CI->navigation->Add('transfers/withdraw', 'Withdraw', 'transfers');
		$CI->navigation->Add('transfers/send', 'Send', 'transfers');
		$CI->navigation->Add('transfers/masspay', 'Mass Pay', 'transfers');
		$CI->navigation->Add('transfers/escrow', 'Escrow', 'transfers');
}
	$CI->navigation->Add('plans','Recurring Plans');
	$CI->navigation->Add('plans/new_plan','New Plan','plans');
	$CI->navigation->Add('coupons', 'Coupons');
	$CI->navigation->Add('coupons/add', 'New Coupon', 'coupons');	
	
	if ($CI->user->LoggedIn() and ($CI->user->Get('client_type_id') == 1 or $CI->user->Get('client_type_id') == 3)) {	
		$CI->navigation->Add('products', 'Products');
		$CI->navigation->Add('products/add', 'New Product', 'products');
                $CI->navigation->Add('manufacturers', 'Manufacturers');
		$CI->navigation->Add('manufacturers/add', 'New Manufacturer', 'manufacturers');
		$CI->navigation->Add('invoices', 'Invoices');
		$CI->navigation->Add('invoices/add', 'New Invoice', 'invoices');
	}
		$CI->navigation->Add('reports_orders', 'Reports');
		$CI->navigation->Add('reports_sales', 'Sales Reports', 'reports_orders');

	if ($CI->user->LoggedIn() and ($CI->user->Get('client_type_id') == 1 or $CI->user->Get('client_type_id') == 3)) {
	$CI->navigation->Add('analytics','Analytics','analytics');
}

if ($CI->user->LoggedIn() and ($CI->user->Get('client_type_id') == 1 or $CI->user->Get('client_type_id') == 3)) {
	$CI->navigation->Add('settings','Settings',false,true);
	$CI->navigation->Add('settings/emails','Emails','settings');
	$CI->navigation->Add('settings/gateways','Gateways','settings');
	$CI->navigation->Add('settings/cronjob','Cronjobs','#');
	$CI->navigation->Add('settings/api','API Access','settings');
        $CI->navigation->Add('settings/system','System Settings','settings');
        $CI->navigation->Add('settings/wallet','Wallet','settings');
	$CI->navigation->Add('events','Webhooks','settings');
        $CI->navigation->Add('settings/mobile','Mobile','settings');
        $CI->navigation->Add('settings/pos','POS','settings');
        $CI->navigation->Add('settings/marketplace','Marketplace','settings');
	}

	// Set default page title
	$CI->navigation->PageTitle('Dashboard');
}

// branding functions
function branded_include ($file) {
	if (file_exists(BASEPATH . '../assets/custom/' . $file)) {
		return site_url('assets/custom/' . $file);
	}
	else {
		return site_url('assets/app/' . $file);
	}
}

function branded_view ($file) {
	if (file_exists(BASEPATH . '../branding/custom/views/' . $file . '.php')) {
		return '../../../branding/custom/views/' . $file;
	}
	else {
		return $file;
	}
}