<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/guru', 'Guru::index');
$routes->get('/guru/create', 'Guru::create');
$routes->post('/guru/store', 'Guru::store');
$routes->get('/guru/edit/(:num)', 'Guru::edit/$1');
$routes->post('/guru/update/(:num)', 'Guru::update/$1');
$routes->get('/guru/delete/(:num)', 'Guru::delete/$1');

$routes->get('/siswa', 'Siswa::index');
$routes->get('/siswa/create', 'Siswa::create');
$routes->post('/siswa/store', 'Siswa::store');
$routes->get('/siswa/edit/(:num)', 'Siswa::edit/$1');
$routes->post('/siswa/update/(:num)', 'Siswa::update/$1');
$routes->get('/siswa/delete/(:num)', 'Siswa::delete/$1');

$routes->get('/mata_pelajaran', 'MataPelajaran::index');
$routes->get('/mata_pelajaran/create', 'MataPelajaran::create');
$routes->get('/mata_pelajaran/edit/(:num)', 'MataPelajaran::edit/$1');
$routes->post('/mata_pelajaran/store', 'MataPelajaran::store');
$routes->post('/mata_pelajaran/update/(:num)', 'MataPelajaran::update/$1');
$routes->get('/mata_pelajaran/delete/(:num)', 'MataPelajaran::delete/$1');

$routes->get('/mata_pelajaran/siswa/(:num)', 'MataPelajaran::siswa/$1');

$routes->get('/login', 'Auth::login', ['filter' => 'guest']);
$routes->post('/login', 'Auth::processLogin', ['filter' => 'guest']);
$routes->get('/logout', 'Auth::logout');
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);

$routes->get('/register', 'Auth::register', ['filter' => 'guest']);
$routes->post('/register', 'Auth::processRegister', ['filter' => 'guest']);

$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('/guru', 'Guru::index');
    $routes->get('/siswa', 'Siswa::index');
    $routes->get('/mapel', 'Mapel::index');
    // Tambahkan rute lainnya
});

