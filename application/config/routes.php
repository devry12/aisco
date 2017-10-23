<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//frontend
$route['default_controller']    = 'home';
$route['firstmeet']             = 'home/firstmeet';
$route['division']              = 'home/division';
$route['makrab']                = 'home/makrab';
$route['bayar']                 = 'home/status_makrab';
$route['gallery']               = 'home/gallery';
$route['video']                 = 'home/video';
$route['play/(:any)']           = 'home/singlevideo/$1';
$route['contact']               = 'home/contact';

//backend
$route['admin/home']                                 = 'admin';
$route['admin/gallery']                              = 'admin/gallery';
$route['admin/addvideo']                             = 'admin/addvideo';
$route['admin/video']                                = 'admin/video';
$route['admin/gallery/delete_video/(:any)']          = 'admin/delete_video/$1';
$route['admin/gallery/delete_photos/(:any)']         = 'admin/delete_photos/$1';
$route['admin/addphoto']                             = 'admin/addphoto';
$route['admin/data']                                 = 'home/data';
$route['admin/export']                               = 'home/export';
$route['admin/divisi']                               = 'admin/divisi';
$route['admin/makrab/edit_status/(:any)']            = 'admin/edit_status/$1';
$route['admin/makrab']                               = 'admin/makrab';
$route['admin/edivisi']                              = 'admin/e_divisi';
$route['admin/emakrab']                              = 'admin/e_makrab';

//auth
$route['auth/login']                                = 'auth/login';
$route['auth/join']                                 = 'auth/register';
$route['auth/logout']                               = 'auth/logout';
$route['auth/verify/(:any)/(:any)']                 = 'auth/verify_email/$1/$2';



$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;
