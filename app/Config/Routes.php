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
$routes->get('/news', 'News::index');
$routes->get('/news/(:any)', 'News::viewNews/$1');


/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
$routes->get('/news', 'News::index');
$routes->get('/profile', 'Page::profile');

$routes->get('/anggaran', 'Page::anggaran');
$routes->get('/penelitian', 'Page::penelitian');
$routes->get('/pkm', 'Page::pkm');
$routes->get('/reimburse', 'Page::reimburse');


$routes->get('/jenis_penelitian', 'Penelitian::jenis');

$routes->get('/form_penelitian/1', 'Penelitian::form_penelitian1');
$routes->get('/form_penelitian/2', 'Penelitian::form_penelitian2');
$routes->get('/form_penelitian/3', 'Penelitian::form_penelitian3');
$routes->get('/form_penelitian/4', 'Penelitian::form_penelitian4');
$routes->get('/form_penelitian/5', 'Penelitian::form_penelitian5');

$routes->get('/tesread_penelitian', 'Post::index');

$routes->get('/tes_dompdf', 'PdfController::index');


$routes->group('admin', function ($routes) {
    $routes->get('news', 'NewsAdmin::index');
    $routes->get('news/(:segment)/preview', 'NewsAdmin::preview/$1');
    $routes->add('news/new', 'NewsAdmin::create');
    $routes->add('news/(:segment)/edit', 'NewsAdmin::edit/$1');
    $routes->get('news/(:segment)/delete', 'NewsAdmin::delete/$1');
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
