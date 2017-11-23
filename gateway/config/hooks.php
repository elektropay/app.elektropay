<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['post_controller_constructor'] = array(
                                'class'    => '',
                                'function' => 'install_redirect',
                                'filename' => 'install_redirect_helper.php',
                                'filepath' => 'helpers'
                                );
$hook['display_override'] = array(
    'class'    => 'OutputHandler',
    'function' => '__construct',
    'filename' => 'null_handler.php',
    'filepath' => 'hooks'
);

$hook['post_controller_constructor'] = array(
    'class' => 'Http_request_logger',
    'function' => 'log_all',
    'filename' => 'http_request_logger.php',
    'filepath' => 'hooks',
    'params' => array()
);

/* End of file hooks.php */
/* Location: ./system/opengateway/config/hooks.php */