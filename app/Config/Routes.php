<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/auth/login', 'Auth::login');
$routes->get('/auth/register', 'Auth::register');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/profile', 'Profile::index');
$routes->get('/upload_berkas', 'Upload_Berkas::index');
