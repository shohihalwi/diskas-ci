<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// rulte                        // nama controller
$route['default_controller'] = 'homepage';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'Admin';
$route['admin/events'] = 'Admin/events';
$route['admin/events/detail'] = 'Admin/detail';

