<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//Jadwal 
$routes->get('/', 'Admin\JadwalController::index');
$routes->get('/Jadwal/tambah-jadwal','Admin\JadwalController::tambahJadwal');
$routes->get('/jadwal','Admin\JadwalController::index',['filter' => 'login']);
$routes->get('/Jadwal/delete-jadwal/(:num)','Admin\JadwalController::deleteJadwal/$1');
$routes->get('/Jadwal/edit-jadwal/(:num)','Admin\JadwalController::editJadwal/$1');
$routes->get('/Jadwal/viewDetail/(:num)','Admin\JadwalController::viewDetail/$1');
$routes->post('/simpan-jadwal','Admin\JadwalController::saveJadwal');
$routes->post('/update-jadwal','Admin\JadwalController::updateJadwal');

//Dosen
$routes->get('/Dosen/dosen', 'Admin\DosenController::viewDosen');
$routes->get('/Dosen/tambah-dosen','Admin\DosenController::tambahDosen');
$routes->get('/Dosen/edit-dosen/(:num)','Admin\DosenController::editDosen/$1');
$routes->get('/Dosen/delete-dosen/(:num)','Admin\DosenController::deleteDosen/$1');
$routes->post('/Dosen/simpan-dosen','Admin\DosenController::saveDosen');
$routes->post('/Dosen/update-dosen','Admin\DosenController::updateDosen');

//Mata Kuliah 
$routes->get('/Makul/makul', 'Admin\MakulController::viewMakul');
$routes->get('/Makul/tambah-makul','Admin\MakulController::tambahMakul');
$routes->get('/Makul/edit-makul/(:any)','Admin\MakulController::editMakul/$1');
$routes->get('/Makul/delete-makul/(:any)','Admin\MakulController::deleteMakul/$1');
$routes->post('/Makul/simpan-makul','Admin\MakulController::saveMakul');
$routes->post('/Makul/update-makul','Admin\MakulController::updateMakul');

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
