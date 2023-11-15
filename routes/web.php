<?php

/** @var \Laravel\Lumen\Routing\Router $router */


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/login', 'AuthController@login');
$router->post('/pengunjung/register', 'AuthController@registerPengunjung');

$router->group(['prefix' => 'group-menu'], function () use ($router) {
    $router->get('/', 'Account\GroupMenuController@index');
    $router->post('/add', 'Account\GroupMenuController@store');
    $router->get('/edit/{id}', 'Account\GroupMenuController@edit');
    $router->put('/update/{id}', 'Account\GroupMenuController@update');
    $router->delete('/delete', 'Account\GroupMenuController@destroy');
});

$router->group(['prefix' => 'menu'], function () use ($router) {
    $router->get('/', 'Account\MenuController@index');
    $router->post('/add', 'Account\MenuController@store');
    $router->get('/edit/{id}', 'Account\MenuController@edit');
    $router->put('/update/{id}', 'Account\MenuController@update');
    $router->delete('/delete', 'Account\MenuController@destroy');
});

$router->group(['prefix' => 'admin'], function () use ($router) {
    $router->get('/', 'Account\AdminController@index');
    $router->post('/add', 'Account\AdminController@store');
    $router->get('/edit/{id}', 'Account\AdminController@edit');
    $router->put('/update/{id}', 'Account\AdminController@update');
    $router->delete('/delete', 'Account\AdminController@destroy');
});

$router->group(['prefix' => 'role'], function () use ($router) {
    $router->get('/', 'RoleController@index');
    $router->post('/add', 'Account\RoleController@store');
    $router->get('/edit/{id}', 'Account\RoleController@edit');
    $router->put('/update/{id}', 'Account\RoleController@update');
    $router->delete('/delete', 'Account\RoleController@destroy');
});

$router->group(['prefix' => 'privilage'], function () use ($router) {
    $router->get('/', 'Account\PrivilageController@index');
    $router->post('/add', 'Account\PrivilageController@store');
    $router->get('/edit/{id}', 'Account\PrivilageController@edit');
    $router->put('/update/{id}', 'Account\PrivilageController@update');
    $router->delete('/delete', 'Account\PrivilageController@destroy');
});

$router->group(['prefix' => 'penyelenggara'], function () use ($router) {
    $router->get('/', 'Account\PenyelenggaraController@index');
    $router->post('/add', 'Account\PenyelenggaraController@store');
    $router->get('/edit/{id}', 'Account\PenyelenggaraController@edit');
    $router->put('/update/{id}', 'Account\PenyelenggaraController@update');
    $router->delete('/delete', 'Account\PenyelenggaraController@destroy');
});

$router->group(['prefix' => 'pengunjung'], function () use ($router) {
    $router->get('/', 'Account\PengunjungController@index');
    $router->post('/add', 'Account\PengunjungController@store');
    $router->get('/edit/{id}', 'Account\PengunjungController@edit');
    $router->put('/update/{id}', 'Account\PengunjungController@update');
    $router->delete('/delete', 'Account\PengunjungController@destroy');
});

// Service ACCOUNT


$router->group(['prefix' => 'jenis-event'], function () use ($router) {
    $router->get('/', 'Main\JenisEventController@index');
    $router->post('/add', 'Main\JenisEventController@store');
    $router->get('/edit/{id}', 'Main\JenisEventController@edit');
    $router->put('/update/{id}', 'Main\JenisEventController@update');
    $router->delete('/delete', 'Main\JenisEventController@destroy');
});