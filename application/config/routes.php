<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']    = 'home';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

$route['admin']                 = 'login';
$route['admin/biodata']         = 'admin/biodata';
$route['admin/education']       = 'admin/education';
$route['admin/experience']      = 'admin/experience';
$route['admin/portofolio']      = 'admin/portofolio';
$route['admin/skills']          = 'admin/skills';
$route['admin/contact']         = 'admin/contact';
$route['admin/partials']        = 'admin/partials';