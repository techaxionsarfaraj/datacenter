<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');


// Login Page
$routes->get('/', 'Login::index');
$routes->post('login', 'Login::validateUser');

$routes->get('dashboard', 'Login::dashboard');
$routes->get('logout', 'Login::logOut');

//User Profile
$routes->get('/profile', 'User::index'); // IN PROGRESSS

// Customer
$routes->get('/customer', 'Customer::index');
$routes->get('/allCustomer', 'Customer::allCustomer');
$routes->post('/addCustomer', 'Customer::addCustomer');
