<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = "home";
$route['backoffice'] = "backoffice";
$route['(:any)'] = "home/index/$1";
$route['property/(:any)'] = "home/index/$1";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
