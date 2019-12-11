<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// rute                        // nama controller
$route['default_controller'] = 'homepage';

// Membership
$route['membership/tiket-saya'] = 'Membership/tiketsaya';
$route['membership/navbar_mb'] = 'Membership/membership';

//$route['event/(:num)/(:any)'] = 'Event/detail/$1/$2';
$route['event/all-events'] = 'Event/all_event';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
