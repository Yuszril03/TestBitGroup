<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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
$routes->get('/', 'Login::index');
$routes->post('/Masuk', 'Login::masuk');
$routes->get('/Keluar', 'Login::keluar');

//Home
$routes->get('Home', 'Home2::index');
//Aktor
$routes->get('Aktor', 'Aktor::index');
$routes->post('Aktor-simpan', 'Aktor::simpan');
$routes->post('Aktor-edit', 'Aktor::update');
$routes->post('Aktor-hapus', 'Aktor::hapus');
//Kategori
$routes->get('Kategori', 'Kategori::index');
$routes->post('Kategori-simpan', 'Kategori::simpan');
$routes->post('Kategori-edit', 'Kategori::update');
$routes->post('Kategori-hapus', 'Kategori::hapus');
//Film
$routes->get('Film', 'Film::index');
$routes->post('Film-simpan', 'Film::simpan');
$routes->post('Film-edit', 'Film::update');
$routes->post('Film-hapus', 'Film::hapus');

// FILM Aktor
$routes->get('Film-Aktor', 'FilmAktor::index');
$routes->post('Film-Aktor-simpan', 'FilmAktor::simpan');
$routes->post('Film-Aktor-edit', 'FilmAktor::update');
$routes->post('Film-Aktor-hapus', 'FilmAktor::hapus');
// FILM Kategori
$routes->get('Film-Kategori', 'FilmKategori::index');
$routes->post('Film-Kategori-simpan', 'FilmKategori::simpan');
$routes->post('Film-Kategori-edit', 'FilmKategori::update');
$routes->post('Film-Kategori-hapus', 'FilmKategori::hapus');

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
