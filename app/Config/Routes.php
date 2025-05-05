<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/template', 'Home::index');

//web MainPage
$routes->get('/', 'Home::index');
$routes->get('/pages', 'Pages::view/index');              // default page (home)
$routes->get('(:segment)', 'Pages::view/$1');       // catch-all for pages like /about, /contact, etc.

$routes->post('/ceklogin', 'Home::ceklogin');
$routes->post('/logout', 'Home::logout');


$routes->post('/inputUser', 'Home::inputUser');
