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
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'authenticate']);
$routes->get('/profile', 'Profile::index', ['filter' => 'authenticate']);
$routes->get('/upload_berkas', 'Upload_Berkas::index', ['filter' => 'authenticate']);