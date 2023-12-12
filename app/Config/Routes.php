<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/', 'LoginController::index');
$routes->get('login', 'LoginController::index');
$routes->post('login', 'LoginController::login');
$routes->get('logout', 'LoginController::logout');

$routes->get('home', 'Home::index');
$routes->group('master', function($routes){
	$routes->get('penerbit', 'Master\DataPenerbit::index');
	$routes->get('penerbit/tambah', 'Master\DataPenerbit::tambah');
	$routes->post('penerbit/simpan', 'Master\DataPenerbit::simpan');
	$routes->get('penerbit/preview/(:segment)', 'Master\DataPenerbit::preview/$1');
	$routes->post('penerbit/ubah/(:segment)', 'Master\DataPenerbit::ubah/$1');
	$routes->get('penerbit/delete/(:segment)', 'Master\DataPenerbit::delete/$1');	
});

// Users
$routes->get('users', 'UsersController::index');
$routes->post('users/tambah', 'UsersController::tambah');
$routes->get('users/preview/(:segment)', 'UsersController::preview/$1');
$routes->post('users/ubah/(:segment)', 'UsersController::ubah/$1');
$routes->get('users/delete/(:segment)', 'UsersController::delete/$1');