<?php

/* 20140427 - s17
 * - modified to include signup/signin/signout for opengateway
 *   - totally depends on opengateway using cookie-based sessions (not db)
 * 
 * 20140429 - s17
 * - modified for easylogin add/update usermeta
 * 
 * 20140430 - s17
 * - modified to include signup/signin/signout for ewallet
 * 
 * */

// these are API credentials for a Service Provider account
define('OGAPI_ID', 'Q2LRJ8T72260E6PKXNA5');
define('OGAPI_KEY', '7NPXQ4O1YTPA41O487YYRU6Y5PGU7HE1907ASTVL');
define('OGAPI_URL', 'https://zoanga.com/commerce/api');

// be sure to include opengateway $config before easylogin $config
// we have to define BASEPATH or be denied config access.
if (!defined('BASEPATH')) define('BASEPATH', '../commerce/system/opengateway/');
if (!defined('APPPATH')) define('APPPATH', '');
include (BASEPATH . 'config/config.php');

// session configuration for opengateway cookies.
$session = array (
  'key' => $config['encryption_key'],
  'name' => $config['sess_cookie_name'],
  'exp' => $config['sess_expiration'],
  'path' => $config['cookie_path'],
  'domain' => $config['cookie_domain'],
);
$time_ref = $config['time_reference'];
//
//// include some configuration/functions from ewallet
include ('../ewallet/config.htm');

// EasyLogin begins here.
require_once ('load.php');
$EL = EasyLogin::getInstance();

$url_components = parse_url( $EL->config_item('script_url') );

if (isset ($url_components['host'])) {
  $host = $url_components['host'];
  $host = (substr($host, 0, 3) == 'www') ? substr($host, 0, 4) : $host;

  header("Access-Control-Allow-Origin: $host");
  header("Access-Control-Allow-Origin: www.$host");
}

if (isset ($_POST['action'])) {

  switch ($_POST['action']) {

    /* here is where we want to add/update usermeta values */
    case 'usermeta':

      // if not logged in, just ignore
      if (!$EL->is_logged()) die();
      // grab the user id
      $uid = $EL->is_logged();

      // break-down the posted values
      parse_str($_POST['data']);

      // make sure the post was really about some meta key/group
      if (isset ($metakey)) {

        switch ($metakey) {

          case 'business':
            // use the leading @ to suppress PHP warning about unset values
            // $_POST['name'] corresponds to HTML <input name="name"
            $name = @$name;

            //$phone = @$phone; /* etc */
            
            // here we stuff all the values into an array
            $values = array (
              'name' => $name,
              //'phone' => $phone, /* etc */
            );

            // if the key didn't exist, we have to add it
            if (!get_usermeta($uid, 'business')) {
              // 'add' automatically will json_encode the array
              add_usermeta($uid, 'business', $values);
            }

            // otherwise we can update it.
            else {
              // we have to json_encode the array for update...
              update_usermeta($uid, 'business', json_encode($values));
            }

            // return something to the ajax caller
            json_success();

            break;
            
          default:
            break;
        }
      }

      break;


    case 'signin':

      if ($EL->is_logged()) die();

      if (isset($_POST['remember'])) $_POST['remember'] = true;

      parse_str($_POST['data']);

      if ($EL->signin($username, $password, @$remember)) {
        // opengateway signin
        opengateway_signin($username);
        // ewallet signin
        ewallet_signin($username);
		
        json_success($EL->config_item('login_redirect'));
      }

      else 
        json_error($EL->errors);

    break;

    case 'signup':

      if ($EL->is_logged()) die();

      parse_str($_POST['data']);
      $signup = array(
        'username' => @$username,
        'email' => $email,
        'fname' => @$fname,
        'lname' => @$lname,
        'password' => $password,
        'captcha_challenge' => @$recaptcha_challenge_field,
        'captcha_response' => @$recaptcha_response_field
      );

      if ($EL->signup($signup)) {
        // opengateway_signup
        opengateway_signup($signup);
        // ewallet_signup
        ewallet_signup($signup);

        json_success($EL->config_item('email_activation'));
      }

      else 
        json_error($EL->errors);

    break;

    case 'forgot_pass':

      if ($EL->is_logged()) die();

      parse_str($_POST['data']);

      if ($EL->forgot_pass($email, @$recaptcha_challenge_field,
                           @$recaptcha_response_field
      ))
        json_success();

      else 
        json_error( $EL->errors );

    break;

    case 'recover_pass':

      if ($EL->is_logged()) die();

      parse_str($_POST['data']);

      if ( $EL->recover_pass($password, $confirm_password, $recover_key) )
        json_success();

      else 
        json_error( $EL->errors );

    break;

    case 'resend_activation':

      if ($EL->is_logged()) die();

      parse_str($_POST['data']);

      if ($EL->resend_activation($email,
                                 @$recaptcha_challenge_field,
                                 @$recaptcha_response_field
      ))
        json_success();

      else 
        json_error( $EL->errors );

    break;

    case 'activate_account':

      if ($EL->is_logged()) die();

      $activation_key = $_POST['activation_key'];

      if ($email = $EL->activate_account($activation_key)) {
        activate_ewallet($email);
        json_success();
      }

      else 
        json_error( $EL->errors );

    break;

    case 'check_recover_key':

      if ($EL->is_logged()) die();

      $recover_key = $_POST['recover_key'];

      if ($EL->check_recover_key($recover_key))
        json_success();

      else 
        json_error( $EL->errors );

    break;

    case 'signout':
      $EL->signout();
      // opengateway_signout
      opengateway_signout();
      // ewallet_signout
      ewallet_signout();

      json_success();

    break;

    case 'account':
      if (!$EL->is_logged()) die();

      parse_str($_POST['data'], $post);
      $account = array (
        'fname' => @$post['fname'],
        'lname' => @$post['lname'],
        'email' => $post['email'],
        'url' => $post['url'],
        'password' => $post['password'],
        'avatar' => $post['avatartype'],
      );
      $user_id = $EL->get_current_user('id');

      $EL->update_userdata($user_id, $account);
      
      // Update custom fields
      $custom_fields = $EL->config_item('custom_fields');
      if ($custom_fields) {

        foreach ($custom_fields as $field) {
          $validate_cb = 'validate_custom_field_'.$field['name'];
          $meta_value = $EL->escape(@$post[$field['name']]);
          
          if (function_exists($validate_cb)) {

            if ( $validate_cb($post[$field['name']]) )
              $EL->update_usermeta($user_id, $field['name'], $meta_value);

          } else {
            $EL->update_usermeta($user_id, $field['name'], $meta_value);
          }
        }
      }

      if (isset($EL->pass_changed))
        json_success(array('pass_changed' => true));

      else
        json_success();

    break;

    // imgPicker
    case 'upload':

      if (!$EL->is_logged()) die();
      
      require_once ('imgPicker/config.php');
      require_once ('imgPicker/functions.php');
      require_once ('imgPicker/imgPicker.php');

      $imgPickerConfig['upload_dir'] = '../' . $EL->config_item('upload_dir');
      $IP = new imgPicker($imgPickerConfig);

      $file   = @$_FILES['ip-file'];
      $user_id = $EL->get_current_user('id');
      
      $IP->upload($file, 'avatar', $user_id);

    break;

    case 'save-image':

      if (!$EL->is_logged()) die();

      require_once ('imgPicker/config.php');
      require_once ('imgPicker/functions.php');
      require_once ('imgPicker/imgPicker.php');

      $imgPickerConfig['upload_dir'] = '../' . $EL->config_item('upload_dir');
      $IP = new imgPicker($imgPickerConfig);

      $user_id = $EL->get_current_user('id');
      $_POST['obj_id'] = $user_id;
      $_POST['type'] = 'avatar';

      $IP->save_cropped($_POST);

    break;

  }
}
else if (isset ($_GET['action'])) {
  switch ($_GET['action']) {
    
    case 'userdata':
      if (!$EL->is_logged()) die();
      
      $user_id = $EL->get_current_user('id');
      $userdata = $EL->get_userdata($user_id);
      
      if ($userdata) {
        unset($userdata['data']['password']);
        $userdata['data']['custom_fields_html'] = get_custom_fields_html();
        $userdata['data']['avatarUrl'] = $EL->get_user_avatar($user_id);
        json_success($userdata['data']);
      }
      else 
        json_error();
    break;

    case 'get_avatar':
      if (!$EL->is_logged()) die();
      $user_id = $EL->get_current_user('id');
      json_success( $EL->get_user_avatar($user_id, 200, $_GET['type']) );
    break;
  }
}

function get_custom_fields_html() {
  $EL = EasyLogin::getInstance();

  if (!$EL->is_logged()) 
    return false;

  $output = '';
  $custom_fields = $EL->config_item('custom_fields');
  if ($custom_fields) {
       $user_id = $EL->get_current_user('id');
    $userdata = $EL->get_userdata($user_id);

      foreach ($custom_fields as $field) {
          $meta = @$userdata['usermeta'][$field['name']];
          
          $output .= '<div class="form-group">';
          switch ( $field['type'] ) {
              case 'text':
                  $output .= '<label>'. $field['label'] . '<br><input type="text" name="'. $field['name'] .'" value="'.$meta.'" class="form-input"></label>';
              break;
              case 'textarea':
                  $output .= '<label>'. $field['label'] . '<br><textarea name="'. $field['name'] .'" class="form-input">'.$meta.'</textarea></label>';
              break;
              case 'select':
                  $output .= '<label>'. $field['label'] . '<select name="'. $field['name'] .'" class="form-input"><br>';
                  foreach ($field['options'] as $key => $value)
                      $output .= '<option value="'.$key.'" '.( $meta == $key ? 'selected' : '' ).'>'.$value.'</option>';
                  $output .= '</select></label>';
              break;
              case 'checkbox':
                  $output .= '<label><input type="checkbox" name="'. $field['name'] .'" value="1" '.($meta == '1' ? 'checked' : '').'> '. $field['label'] .'</label>';
              break;
          }
          $output .= '</div>';
      }
  }
  return $output;
}

function activate_ewallet($email) {
  // include some configuration/functions from ewallet
  global $data;

  /* activate the account (do this after $EL->activate())
   * 
   * we can find the row by matching the email address
   * */

  // flush some stay confirms (2+ days old)
  db_query(
    "DELETE FROM `{$data['DbPrefix']}confirms`".
    " WHERE(TO_DAYS(NOW())-TO_DAYS(`cdate`)>=2)"
  );

  // find our target confirmation
  $confirm = db_rows("SELECT"
    . "`id`,`newuser`,`newpass`,`newquestion`,`newanswer`,`newmail`,"
    . ($data['UseExtRegForm']
      ? "`newfname`,`newlname`,`newcompany`,`newregnum`,`newdrvnum`,`newaddress`,"
        . "`newcity`,`newcountry`,`newstate`,`newzip`,`newphone`,`newfax`,"
      : "")
    . "`sponsor`"
    . " FROM `{$data['DbPrefix']}confirms` WHERE(`newmail`='{$email}')");

  $confirm = $confirm[0];

  foreach ($confirm as $key => $value)
    $confirm[$key] = @addslashes($value);

  // insert data as new member
  db_query("INSERT INTO `{$data['DbPrefix']}members`("
    . "`sponsor`,`username`,`password`,`email`,`question`,`answer`,"
    . ($data['UseExtRegForm']
      ? "`fname`,`lname`,`company`,`regnum`,`drvnum`,`address`,"
        . "`city`,`country`,`state`,`zip`,`phone`,`fax`,"
      : '')
    . "`active`,`empty`,`cdate`"
    . ")VALUES("
    . "{$confirm['sponsor']},'{$confirm['newuser']}','{$confirm['newpass']}','{$confirm['email']}',"
    . "'{$confirm['newquestion']}','{$confirm['newanswer']}',"
    . ($data['UseExtRegForm']
      ? "'{$confirm['newfname']}','{$confirm['newlname']}','{$confirm['newcompany']}',"
        . "'{$confirm['newregnum']}','{$confirm['newdrvnum']}','{$confirm['newaddress']}',"
        . "'{$confirm['newcity']}','{$confirm['newcountry']}','{$confirm['newstate']}',"
        . "'{$confirm['newzip']}','{$confirm['newphone']}','{$confirm['newfax']}',"
      : '')
    . "1," . ($data['UseExtRegForm'] ? '0' : '1') . ",'" . date('Y-m-d H:i:s') . "')"
  );

  $receiver = newid();
  db_query("INSERT INTO `{$data['DbPrefix']}member_emails` 
    (`owner`,`email`,`active`,`primary`) VALUES
    ('{$receiver}','{$confirm['newmail']}',1,1)"
  );

  // delete from waiting confirmations
  db_query("DELETE FROM `{$data['DbPrefix']}confirms`"
    . " WHERE(`id`={$confirm['id']})"
  );

}

function ewallet_signup($params) {
  // from ewallet/config.htm and ewallet/consts.htm
  global $data;

  $newuser = mysql_real_escape_string($params['username']);
  $newpass = mysql_real_escape_string($params['password']);
  $newques = '';
  $newansw = '';
  $newmail = mysql_real_escape_string($params['email']);
  $newfname = mysql_real_escape_string($params['fname']);
  $newlname = mysql_real_escape_string($params['lname']);
  $newcompany = mysql_real_escape_string($params['username']);
  $newregnum = '';
  $newdrvnum = '';
  $newaddress = '';
  $newcity = '';
  $newcountry = '';
  $newstate = '';
  $newzip = '';
  $newphone = '';
  $newfax = '';
  $sponsor = 0;

  // insert the new user into the waiting confirmation table
  db_query("INSERT INTO `{$data['DbPrefix']}confirms`("
    . "`newuser`,`newpass`,`newquestion`,`newanswer`,`newmail`,"
    . ($data['UseExtRegForm']
      ? "`newfname`,`newlname`,`newcompany`,`newregnum`,`newdrvnum`,`newaddress`,"
        . "`newcity`,`newcountry`,`newstate`,`newzip`,`newphone`,`newfax`,"
      : ''
      )
    . "`sponsor`,`confirm`"
    . ")VALUES("

    . "'{$newuser}','{$newpass}','{$newques}','{$newansw}','{$newmail}',"
    . ($data['UseExtRegForm']
      ? "'{$newfname}','{$newlname}','{$newcompany}','{$newregnum}','{$newdrvnum}',"
        . "'{$newaddress}','{$newcity}','{$newcountry}','{$newstate}','{$newzip}',"
        . "'{$newphone}','{$newfax}',"
      : ''
      )
     . "{$sponsor},'{$result}'"
     . ")"
  );
}

function ewallet_signin($username) {
  global $data;

  // get_member_id
  $result = db_rows("SELECT `id` FROM `{$data['DbPrefix']}members`"
    . " WHERE (`username`='{$username}' OR `email`='{$username}')"
    . " LIMIT 1"
  );

  $uid = (int) $result[0]['id'];
  $remote_addr = $_SERVER['REMOTE_ADDR'];

  $_SESSION['uid'] = $uid;
  $_SESSION['login'] = true;

  // set_last_access($username);
  db_query("UPDATE `{$data['DbPrefix']}members`"
    . " SET `ldate`='" . date("Y-m-d H:i:s") . "',"
    . "`last_ip`='{$remote_addr}'"
    . " WHERE `id`=${uid}"
  );

  // save_remote_ip
  db_query(
    "INSERT `{$data['DbPrefix']}visits`(`member`,`date`,`address`".
    ")VALUES({$uid},'" . date('Y-m-d H:i:s') . "','{$remote_addr}')"
  );
}

function ewallet_signout() {
  set_last_access_date($_SESSION['uid'], true);
  unset ($_SESSION['login']);
  unset ($_SESSION['uid']);
}

function opengateway_signup($params) {
  $method = '<type>NewClient</type>';

  $newClient = array (
    'first_name' => $params['fname'],
    'last_name' => $params['lname'],
    'company' => $params['username'],
    'email' => $params['email'],
    'username' => $params['username'],
    'password' => $params['password'],
#    'client_type' => 2, // 2 == End User, defaults to 2
  );

  $params = '';

  foreach ($newClient as $k => $v)
    $params .= "<$k>$v</$k>";

  $auth = "<authentication>
  <api_id>" . OGAPI_ID . "</api_id>
  <secret_key>" . OGAPI_KEY . "</secret_key></authentication>";

  $request = '<?xml version="1.0" encoding="UTF-8"?><request>'
    . $auth
    . $method
    . $params
    . '</request>';

  # create the client
  opengateway_callAPI($request);

  return true;
}

function opengateway_signin($username) {
  global $session, $time_ref, $EL;

  $arr = opengateway_getClient($username);
  if (!$arr) return false;

  $client_id = $arr->clients->client[0]->id;
  $ip_addr = $_SERVER['REMOTE_ADDR'];

  /* session_id code is copied from commerce/system/libraries/Session.php */
  $sessid = '';
  while (strlen($sessid) < 32) $sessid .= mt_rand(0, mt_getrandmax());
  $sessid .= $ip_addr;

  $now = time();
  if (strtolower($time_ref) == 'gmt') {
    $now = mktime(gmdate("H", $now), gmdate("i", $now), gmdate("s", $now), gmdate("m", $now), gmdate("d", $now), gmdate("Y", $now));
  }


  $session_name = $EL->config_item('session_name');
  $_SESSION[$session_name]['api_id'] = $arr->clients->client[0]->api_id;
  $_SESSION[$session_name]['secret_key'] = $arr->clients->client[0]->secret_key;

  $cookie_data = array (
    'session_id' => md5(uniqid($sessid, TRUE)),
    'ip_address' => $ip_addr,
    'user_agent' => substr($_SERVER['HTTP_USER_AGENT'], 0, 50),
    'last_activity' => $now,
    //'errors' => opengateway_serialize(array ('this is some error')),
    'client_id' => $client_id,
    'login_time' => $now,
    //'notices' => opengateway_serialize(array ('this is some notice')),
  );

  $cookie_str = opengateway_serialize($cookie_data);
  $cookie_str .= md5($cookie_str . $session['key']);

  // Set the cookie
  setcookie(
    $session['name'],
    $cookie_str,
    $session['exp'] + $now,
    $session['path'],
    $session['domain'],
    0
  );

  return true;
}

function opengateway_signout() {
  global $session;

  // Kill the cookie
  setcookie(
    $session['name'],
    addslashes(serialize(array())),
    (time() - 31500000),
    $session['path'],
    $session['domain'],
    0
  );
}

// get OpenGateway data 
function opengateway_getClient($username) {

  $request = '<?xml version="1.0" encoding="UTF-8"?>'
    . "<request><authentication>"
    . "<api_id>" . OGAPI_ID . "</api_id>"
    . "<secret_key>" . OGAPI_KEY . "</secret_key></authentication>"
    . "<format>json</format>"
    . "<type>GetClients</type>"
    . "<username>" . htmlentities($username) . "</username></request>";

  $response = opengateway_callAPI($request);
  $arr = json_decode($response);

  if (!$arr->results) return false;
  return $arr;
}

function opengateway_callAPI($request) {

  $ch = curl_init(OGAPI_URL);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_TIMEOUT, 10);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
  $response = curl_exec($ch); 

  if (curl_errno($ch)){
    echo curl_error($ch);
    curl_close($ch);

    die(); // maybe log something somewhere?
  } else {
    curl_close($ch);

    /**
    * deal with the $response
    */
    #print "<pre>" . htmlspecialchars($response) . "</pre>\n";
  }

  return $response;
}

function opengateway_serialize($data) {

  if (is_array($data)) {

    foreach ($data as $key => $val) {
      $data[$key] = str_replace('\\', '{{slash}}', $val);
    }
  }

  else {
    $data = str_replace('\\', '{{slash}}', $data);
  }

  return serialize($data);
}