<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Get base_url value
include 'config.php';

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
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/*
|--------------------------------------------------------------------------
| Assets Location
|--------------------------------------------------------------------------
|
| Constants for base url
|
*/
define('BASE',$config['base_url']);


/*
|--------------------------------------------------------------------------
| COURSE TYPE ID CONSTANTS
|--------------------------------------------------------------------------
|
*/
define('DAILYCONVOID','14072117412377020160');
define('KIDSCOURSEID','14072117462560811635');
define('BUSINESSENGID','14072120303266967279');
define('TRAVELENGID','14072123040875414315');
define('PRONUNID','14072514104177825444');
define('TOPICID','14072514105077837154');
define('CALLANID','14072514110139886024');
define('QQONEONONEID','14072514110917144335');
define('NEWSALERTID','14072514112377373832');
define('INTERCHANGEID','14072514113750783703');
define('IELTSID','14072514115570334387');
define('FIRSTTIMEID','14092818041466887425');

/* End of file constants.php */
/* Location: ./application/config/constants.php */

