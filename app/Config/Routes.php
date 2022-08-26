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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

$routes->get('login', 'Auth::login');

$routes->addRedirect('/', 'home');
$routes->get('home2', 'Home::halamanUtama');
$routes->get('admin', 'Admin::index');

$routes->match(['get', 'post'], 'email', 'Home::about');

$routes->get('abouts', 'Home::about');
$routes->get('promo', 'Home::promo');
$routes->get('newproducts', 'Home::newproduct');
$routes->get('machinery', 'Home::machinery');
$routes->get('machinetool', 'Home::machinetool');
$routes->get('cuttingtool', 'Home::cuttingtool');
$routes->get('measuringtool', 'Home::measuringtool');
$routes->get('handtool', 'Home::handtool');
$routes->get('cuttingcoolant', 'Home::cuttingcoolant');
$routes->get('abrasive', 'Home::abrasive');
$routes->get('katalog/detail/(:num)', 'Home::detail/$1');

$routes->get('sales/trash', 'Sales::trash'); //hapus sementara
$routes->get('merk/trash', 'Merk::trash'); //hapus sementara
$routes->get('barang/trash', 'Barang::trash'); //hapus sementara
$routes->get('users/trash', 'Users::trash'); //hapus sementara

$routes->get('sales/restore/(:any)', 'Sales::restore/$1'); //restore 1 data
$routes->get('merk/restore/(:any)', 'Merk::restore/$1'); //restore 1 data
$routes->get('users/restore/(:any)', 'Users::restore/$1'); //restore 1 data

$routes->get('sales/restore', 'Sales::restore'); //restore all
$routes->get('merk/restore', 'Merk::restore'); //restore all
$routes->get('users/restore', 'Users::restore'); //restore all

$routes->delete('sales/hapus/(:any)', 'Sales::hapus/$1'); //hapus permanen 1 data
$routes->delete('merk/hapus/(:any)', 'Merk::hapus/$1'); //hapus permanen 1 data
$routes->delete('users/hapus/(:any)', 'Users::hapus/$1'); //hapus permanen 1 data

$routes->delete('/sales/hapus', 'Sales::hapus'); //hapus permanen all
$routes->delete('merk/hapus', 'Merk::hapus'); //hapus permanen all
$routes->delete('/users/hapus', 'Users::hapus'); //hapus permanen all

$routes->resource('sales', ['filter' => 'isLoggedIn']);
$routes->resource('merk', ['filter' => 'isLoggedIn']);
$routes->resource('kategori', ['filter' => 'isLoggedIn']);
$routes->resource('barang', ['filter' => 'isLoggedIn']);
$routes->resource('users', ['filter' => 'isLoggedIn']);



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
