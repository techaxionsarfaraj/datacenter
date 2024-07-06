<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/contact', 'Home::contact');

// Login Page
$routes->get('/', 'Login::index');
$routes->post('login', 'Login::validateUser');

$routes->get('dashboard', 'Login::dashboard');
$routes->get('logout', 'Login::logOut');

// Customer
$routes->get('/customer', 'Customer::index');
$routes->get('/demo', 'Customer::demo');
