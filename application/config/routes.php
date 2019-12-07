<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home/view';
$route['(:any)'] = 'Home/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home/trailers'] = 'Home/trailers';

$route['home/nosotros'] = 'Home/nosotros';

$route['home/contacto'] = 'Home/contacto';

$route['home/services'] = 'Home/services';

$route['home/service-details/(:num)'] = 'Home/servicesDetails';

$route['admin'] = 'Home/admin/login-admin';