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
	$routes->delete('kategoribuku/delete/(:num)', 'Master\KategoriBuku::delete/$1');

});