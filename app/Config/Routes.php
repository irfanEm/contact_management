<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/contacts', 'Contact::index', ['filter' => 'auth']);
$routes->get('/contacts/create', 'Contact::create', ['filter' => 'auth']);
$routes->post('/contacts/store', 'Contact::store', ['filter' => 'auth']);
$routes->get('/contacts/edit/(:num)', 'Contact::edit/$1', ['filter' => 'auth']);
$routes->post('/contacts/update/(:num)', 'Contact::update/$1', ['filter' => 'auth']);
$routes->get('/contacts/delete/(:num)', 'Contact::delete/$1', ['filter' => 'auth']);

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::doLogin');
$routes->get('/logout', 'Auth::logout');


