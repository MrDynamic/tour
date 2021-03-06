<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESCTRUCTIVE') OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

define('ADMIN_ROLE','ADMIN');
define('USER_ROLE','USER');
define('CONTENT_TYPE','CONTENT');
define('PATH','/resources/upload/package/');

// Constants Variables
define('OPEN_FORM_GROUP', '<div class="form-group">');
define('OPEN_FORM_GROUP_6', '<div class="col-sm-6 form-group">');
define('OPEN_FORM_GROUP_3', '<div class="col-sm-3 form-group">');
define('OPEN_FORM_GROUP_12', '<div class="col-sm-12 form-group">');
define('OPEN_FORM_GROUP_HIDDEN','<div class="form-group" style="display:none;">');
define('CLOSE_FORM_GROUP', '</div>');
define('ADMIN_LAYOUT', 'admin/layout');
define('MAIN_CONTAINER','admin/main_container');
define('ACTION_ADD','ADD');
define('ACTION_EDIT','EDIT');

// Package
define('TBL_PACKAGE_TYPE', 'TBL_PACKAGE_TYPE');
define('TBL_PACKAGE', 'TBL_PACKAGE');

// MENU
define('MENU_MAIN_PACKAGE','MAIN_PACKAGE');
define('MENU_PACKAGE','PACKAGE');
define('MENU_PACKAGE_TYPE','PACKAGE_TYPE');
define('MENU_PACKAGE_PICTURE','PACKAGE_PICTURE');

define('MENU_MAIN_ORDER','MAIN_ORDER');
define('MENU_ORDER','ORDER');
define('MENU_RQUEST_TOUR','REQUEST_TOUR');

define('MENU_MAIN_REPORT','MAIN_REPORT');
define('MENU_REPORT_ORDER','REPORT_ORDER');

define('MENU_MAIN_SUMARY','MAIN_SUMARY');
define('MENU_SUM_AREA','SUMARY_AREA');

define('MENU_MAIN_PORTFOLIO','MAIN_PORTFOLIO');
define("MENU_PORTFOLIO","PORTFOLIO");


define("MENU_MAIN_CONTACT","MAIN_CONTACT");
define("MENU_CONTACT","MENU_CONTACT");

define("MENU_MAIN_CONFIG","MAIN_CONFIG");
define("MENU_CONFIG_EMAIL","MENU_CONF_MAIL");

// Paypal
define('PAYPAL_TEST_URL','https://www.sandbox.paypal.com/cgi-bin/webscr');
define('PAYPAL_ID', 'ocharos.th@gmail.com');

// Order status
define('STATUS_PENDING','P');
define('STATUS_SUCCESS','S');
define('STATUS_WAITING','W');
define('STATUS_CANCEL','C');

// Request Status
define('REQUEST_STATUS_SUCCESS','RS');
define('REQUEST_STATUS_WAITING','RW');
define('REQUEST_STATUS_CANCEL','RC');

// Execute message
define('EXEC_MSG','EXEC_MESSAGE');
define('ERROR_MSG','ERROR_MESSAGE');
define('STATUS_ERROR','STATUS_ERROR');

// Mail
define("MAIL_CHANGE_PASSWORD","CPW");
define("MAIL_ORDER","ORDER");
define("MAIL_REQUEST","REQUEST");
define("MAIL_CUST_NAME","#{name}");
define("MAIL_TOKEN","#{token}");
define("MAIL_MAP_ORDER_ID","#{order_id}");
define("MAIL_FROM","tassanee.oc@gmail.com");

