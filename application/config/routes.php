<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'admin/HomeController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//----------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------
$route['admin/migrate'] = 'admin/Migrate';
/*
| Auth routes			|
*/
$route['admin/login'] = 'Auth/login';
$route['admin/login/check'] = 'Auth/login_check';
$route['admin/logout'] = 'Auth/logout';

/*
| Home routes			|
*/
$route['admin'] = 'admin/HomeController';

/*
| Admin routes			|
*/
$route['admin/user'] = 'admin/UserController';
$route['admin/user/(:num)'] = 'admin/UserController/detail/$1';
$route['admin/user/create'] = 'admin/UserController/create';
$route['admin/user/edit/(:num)'] = 'admin/UserController/edit/$1';
$route['admin/user/delete/(:num)'] = 'admin/UserController/delete/$1';

/*
| Teacher routes			|
*/
$route['admin/teacher'] = 'admin/TeacherController';
$route['admin/teacher/(:num)'] = 'admin/TeacherController/detail/$1';
$route['admin/teacher/create'] = 'admin/TeacherController/create';
$route['admin/teacher/edit/(:num)'] = 'admin/TeacherController/edit/$1';
$route['admin/teacher/delete/(:num)'] = 'admin/TeacherController/delete/$1';

/*
| Student routes			|
*/
$route['admin/student'] = 'admin/StudentController';
$route['admin/student/(:num)'] = 'admin/StudentController/detail/$1';
$route['admin/student/create'] = 'admin/StudentController/create';
$route['admin/student/edit/(:num)'] = 'admin/StudentController/edit/$1';
$route['admin/student/delete/(:num)'] = 'admin/StudentController/delete/$1';

/*
| Parent routes			|
*/
$route['admin/parent'] = 'admin/ParentController';
$route['admin/parent/(:num)'] = 'admin/ParentController/detail/$1';
$route['admin/parent/create'] = 'admin/ParentController/create';
$route['admin/parent/edit/(:num)'] = 'admin/ParentController/edit/$1';
$route['admin/parent/delete/(:num)'] = 'admin/ParentController/delete/$1';

/*
| Role routes			|
*/
$route['admin/role'] = 'admin/RoleController';
$route['admin/role/(:num)'] = 'admin/RoleController/detail/$1';
$route['admin/role/create'] = 'admin/RoleController/create';
$route['admin/role/edit/(:num)'] = 'admin/RoleController/edit/$1';

/*
| Course routes			|
*/
$route['admin/course'] = 'admin/CourseController';
$route['admin/course/(:num)'] = 'admin/CourseController/detail/$1';
$route['admin/course/create'] = 'admin/CourseController/create';
$route['admin/course/edit/(:num)'] = 'admin/CourseController/edit/$1';
$route['admin/course/delete/(:num)'] = 'admin/CourseController/delete/$1';

/*
| Course routes			|
*/
$route['admin/class'] = 'admin/ClassController';
$route['admin/class/(:num)'] = 'admin/ClassController/detail/$1';
$route['admin/class/create'] = 'admin/ClassController/create';
$route['admin/class/edit/(:num)'] = 'admin/ClassController/edit/$1';
$route['admin/class/delete/(:num)'] = 'admin/ClassController/delete/$1';