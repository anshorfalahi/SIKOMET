<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->setAutoRoute(true);

$routes->get('/', 'Home::index');

$routes->get('/auth/login', 'Auth::login', ['filter' => 'redirectIfAuthenticated']);
$routes->get('/auth/register', 'Auth::register', ['filter' => 'redirectIfAuthenticated']);
$routes->get('/auth/logout', 'Auth::logout');
$routes->post('/auth/loginProccess', 'Auth::loginProccess');
$routes->post('/auth/registerProccess', 'Auth::registerProccess');

$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'authenticate']);

$routes->get('/profile_media', 'ProfileMedia::index', ['filter' => 'authenticate']);
$routes->post('/profile_media/update', 'ProfileMedia::update', ['filter' => 'authenticate']);

$routes->get('/list_profile_media', 'ListProfileMedia::index', ['filter' => 'authenticate']);

$routes->get('/upload_berkas', 'UploadBerkas::index', ['filter' => 'authenticate']);