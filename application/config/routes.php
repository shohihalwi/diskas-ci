<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// rulte                        // nama controller
$route['default_controller'] = 'homepage';

// Membership
$route['membership/tiket-saya'] = 'Membership/tiketsaya';
$route['membership/navbar_mb'] = 'Membership/membership';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
