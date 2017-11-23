<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the "Database Connection"
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the "default" group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = "default";
$active_record = TRUE;

$db['default']['hostname'] = "localhost";
$db['default']['username'] = "everpay_master";
$db['default']['password'] = 'Parise03';
$db['default']['database'] = "everpay_engine";
$db['default']['dbdriver'] = "mysql";
$db['default']['dbprefix'] = "";
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = "";
$db['default']['char_set'] = "utf8";
$db['default']['dbcollat'] = "utf8_general_ci";


$db['database_two']['username'] = 'everpay_master';
$db['database_two']['password'] = 'Parise03';
$db['database_two']['database'] = 'everpay_invoicing';
$db['database_two']['pconnect'] = TRUE;
$db['database_two']['db_debug'] = FALSE;
$db['database_two']['cache_on'] = FALSE;
$db['database_two']['cachedir'] = "";
$db['database_two']['char_set'] = "utf8";
$db['database_two']['dbcollat'] = "utf8_general_ci";
$db['database_two']['swap_pre'] = "";
$db['database_two']['autoinit'] = TRUE;
$db['database_two']['stricton'] = FALSE;

$db['database_three']['username'] = 'everpay_master';
$db['database_three']['password'] = 'Parise03';
$db['database_three']['database'] = 'everpay_vpos';
$db['database_three']['pconnect'] = TRUE;
$db['database_three']['db_debug'] = FALSE;
$db['database_three']['cache_on'] = FALSE;
$db['database_three']['cachedir'] = "";
$db['database_three']['char_set'] = "utf8";
$db['database_three']['dbcollat'] = "utf8_general_ci";
$db['database_three']['swap_pre'] = "";
$db['database_three']['autoinit'] = TRUE;
$db['database_three']['stricton'] = FALSE;
/* End of file database.php */
/* Location: ./system/opengateway/config/database.php */