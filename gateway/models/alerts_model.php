<?php

/**
* Alerts - Notifications - Log Model
*
* Contains all the methods used to send alerts from requests and errors
* based upon the log model and Facebook notifications header top nav menu section
* @version 1.0
* @author Richard Rowe, Inc.
* @package OpenGateway

*/

class Alert_model extends Model
{
	function __construct()
	{
		parent::__construct();
	}

	/**
	* Creates the Alert.
	*
	* Sends An Alert
	*
	* @param string $request The request
	*
	*/
