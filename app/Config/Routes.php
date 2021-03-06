<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->group('', ['namespace' => 'App\Controllers\Auth'], function ($routes) {
	$routes->get('/register',  'RegisterController::create', ['as' => 'register.create']);
	$routes->post('/register', 'RegisterController::store', ['as' => 'register.store']);
	$routes->get('/login',     'AuthController::create', ['as' => 'login.create']);
	$routes->post('/login',    'AuthController::store', ['as' => 'login.store']);
	$routes->post('/logout',   'AuthController::logout', ['as' => 'logout']);
});

$routes->group('', ['filter' => 'authGuard'], function ($routes) {
	$routes->get('/dashboard', function () {
		helper('form');

		return view('dashboard');
	}, ['as' => 'dashboard']);

	// admin routes
});

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
