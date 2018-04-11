<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";
$route['404_override'] = 'customerror404';
// Kids Course 
$route['studentinterview/lists'] = 'studentsfeedback/listcontroller_kidscourse';
$route['studentinterview/KidsCourse'] = 'studentsfeedback/listcontroller_kidscourse';
$route['studentinterview/KidsCourse/(:num)'] = 'studentsfeedback/listcontroller_kidscourse/index/$1';

// Daily Course
$route['studentinterview/DailyConversationCourse'] = 'studentsfeedback/listcontroller_dailycourse';
$route['studentinterview/DailyConversationCourse'] = 'studentsfeedback/listcontroller_dailycourse/index/';
$route['studentinterview/DailyConversationCourse/(:num)'] = 'studentsfeedback/listcontroller_dailycourse/index/$1';

// Business English
$route['studentinterview/CallanMethod'] = 'studentsfeedback/listcontroller_callanmethod';
$route['studentinterview/CallanMethod'] = 'studentsfeedback/listcontroller_callanmethod/index/';
$route['studentinterview/CallanMethod/(:num)'] = 'studentsfeedback/listcontroller_callanmethod/index/$1';

// Others
$route['studentinterview/Others'] = 'studentsfeedback/listcontroller_others';
$route['studentinterview/Others'] = 'studentsfeedback/listcontroller_others/index/';
$route['studentinterview/Others/(:num)'] = 'studentsfeedback/listcontroller_others/index/$1';


// Student interview details
$route['studentinterview/detail/(:num)'] = 'detailscontroller/index/$1'; 
$route['studentinterview/detail'] = 'detailscontroller';

// Index download
$route['static/download/index.shtml'] = 'indexdownload';
/* End of file routes.php */
/* Location: ./application/config/routes.php */