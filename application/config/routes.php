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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// 重定向路由设置
// 用户登录注册路由
$route['login'] = 'user/login';
$route['logout'] = 'user/logout';
$route['register'] = 'user/register';

$route['login/logout'] = 'login/logout';

// 课程详情
$route['course/(\d+)'] = 'course/index/$1';
// 课程修改
$route['course/(\d+)/edit'] = 'course/edit/$1';
// 课程更新
$route['course/(\d+)/update'] = 'course/update/$1';

// 上传视频
$route['course/(\d+)/upload'] = 'course/upload/$1';

// 添加评论
$route['course/comment/add'] = 'course/comment_add';

$route['reset_password'] = 'user/reset_password';

// $route['course/before_class'] = 'course/before';

$route['course/before_class/(\d+)'] = 'course/before_class/$1';

// 教师端
// $route['teacher/login'] = 'teacher/login';
// $route['teacher/logout'] = 'teacher/logout';
// $route['teacher/register'] = 'teacher/register'
