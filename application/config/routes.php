<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// rulte                        // nama controller
$route['default_controller'] = 'homepage';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route[PATH_ADMIN . '/(:any)/(:any)/(:any)/(:any)'] = "admin/$1/$2/$3/$4";
$route[PATH_ADMIN . '/(:any)/(:any)/(:any)'] = "admin/$1/$2/$3";
$route[PATH_ADMIN . '/(:any)/(:any)'] = "admin/$1/$2";
$route[PATH_ADMIN . '/(:any)'] = "admin/$1";

$route[PATH_ADMIN] = "AdminController";

