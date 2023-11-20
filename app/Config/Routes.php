<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->setAutoRoute(true);

$routes->get('/', 'Home::index');

$routes->get('/auth/login', 'Auth::login');
$routes->get('/auth/register', 'Auth::register');
$routes->get('/auth/logout', 'Auth::logout');
$routes->post('/auth/loginProccess', 'Auth::loginProccess');
$routes->post('/auth/registerProccess', 'Auth::registerProccess');

$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/profile_media', 'ProfileMedia::index');
$routes->post('/profile_media/update', 'ProfileMedia::update');

$routes->get('/list_profile_media', 'ListProfileMedia::index');
$routes->get('/list_profile_media/detail/(:num)', 'ListProfileMedia::detail/$1');
$routes->post('/list_profile_media/active/(:num)', 'ListProfileMedia::active/$1');
$routes->delete('/list_profile_media/delete/(:num)', 'ListProfileMedia::deleteAkun/$1');  


$routes->get('/upload_berkas', 'UploadBerkas::index');