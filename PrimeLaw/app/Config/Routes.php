<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home_controller');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//dashboard
$routes->get('/g', 'ImageUploadController::index');
$routes->post('/store', 'ImageUploadController::store');

//$routes->get('/', 'Authcontroller::index');

//Register
$routes->get('/register', 'Authcontroller::register');
$routes->post('/registeruser', 'AuthController::registeruser');

//Login
$routes->get('/', 'Authcontroller::login');
$routes->post('/loginuser', 'AuthController::loginuser');

//update
$routes->get('/update', 'Authcontroller::update');
$routes->post('/updateuser', 'Authcontroller::updateuser');

//view
$routes->get('/viewuser', 'Authcontroller::viewuser');

//logout
$routes->get('/logout', 'Authcontroller::logout');

//$routes->get('/deleteuser/(:num)', 'Authcontroller::deleteuser/$1');
$routes->get('/deleteuser', 'Authcontroller::deleteuser');


 


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
