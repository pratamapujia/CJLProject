<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'Home::index');

$routes->get('sales/trash', 'Sales::trash'); //hapus sementara
$routes->get('merk/trash', 'Merk::trash'); //hapus sementara
$routes->get('barang/trash', 'Barang::trash'); //hapus sementara
$routes->get('user/trash', 'User::trash'); //hapus sementara

$routes->get('sales/restore/(:any)', 'Sales::restore/$1'); //restore 1 data
$routes->get('merk/restore/(:any)', 'Merk::restore/$1'); //restore 1 data
$routes->get('user/restore/(:any)', 'User::restore/$1'); //restore 1 data

$routes->get('sales/restore', 'Sales::restore'); //restore all
$routes->get('merk/restore', 'Merk::restore'); //restore all
$routes->get('user/restore', 'User::restore'); //restore all

$routes->delete('sales/hapus/(:any)', 'Sales::hapus/$1'); //hapus permanen 1 data
$routes->delete('merk/hapus/(:any)', 'Merk::hapus/$1'); //hapus permanen 1 data
$routes->delete('user/hapus/(:any)', 'User::hapus/$1'); //hapus permanen 1 data

$routes->delete('/sales/hapus', 'Sales::hapus'); //hapus permanen all
$routes->delete('merk/hapus', 'Merk::hapus'); //hapus permanen all
$routes->delete('/user/hapus', 'User::hapus'); //hapus permanen all

$routes->resource('sales');
$routes->resource('merk');
$routes->resource('kategori');
$routes->resource('barang');
$routes->resource('user');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
