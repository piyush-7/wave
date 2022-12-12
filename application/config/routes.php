<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Wave_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['home'] = 'Wave_controller/index';
$route['login'] = 'Wave_controller/login';
$route['signup'] = 'Wave_controller/sign_up';
$route['invoice'] = 'Wave_controller/invoice';