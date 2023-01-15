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

//dipindah biar gg kena middleware
$router->get('api/kategori' , ['uses' => 'KategoriController@index']); //mengambil data dr database

// register ------------------------------------------
$router->post('api/register' , ['uses' => 'LoginController@register']);

// login ------------------------------------------
$router->post('api/login' , ['uses' => 'LoginController@login']);

$router->group( ['prefix' => 'api' , 'middleware'=>'auth'] , function() use ($router) {

    // kategori ------------------------------------------
    

    $router->get('kategori/{id}' , ['uses' => 'KategoriController@show']);

    $router->delete('kategori/{id}' , ['uses' => 'KategoriController@destroy']); //ini utk hapus data

    $router->put('kategori/{id}' , ['uses' => 'KategoriController@Update']); //update pake put

    $router->post('kategori' , ['uses' => 'KategoriController@create']); //ini utk inset data

    // pelanggan ------------------------------------------
    $router->get('pelanggan' , ['uses' => 'PelangganController@index']);

    $router->get('pelanggan/{id}' , ['uses' => 'PelangganController@show']); //ini utk tampilkan data

    $router->post('pelanggan' , ['uses' => 'PelangganController@create']);

    $router->delete('pelanggan/{id}' , ['uses' => 'PelangganController@destroy']);

    $router->put('pelanggan/{id}' , ['uses' => 'PelangganController@Update']);

    // menu ------------------------------------------
    $router->post('menu' , ['uses' => 'MenuController@create']); //ini utk upload gambar

    $router->get('menu' , ['uses' => 'MenuController@index']);

    // login ------------------------------------------
    $router->get('login' , ['uses' => 'LoginController@index']);
} );


