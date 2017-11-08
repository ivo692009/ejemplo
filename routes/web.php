<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//Los index
Route::get('/inicio', 'inicioController@index'); 
Route::get('/descriptores', 'descriptoresController@index');
Route::get('/estados', 'estadoController@index');
Route::get('/tipos', 'tiposController@index');

//Metodos para los 3 abms
//descriptores
Route::get('/descriptores/nuevo', 'descriptoresController@create');
Route::get('/descriptores/modificar/{id}','descriptoresController@show')->name('/Modificando');
Route::post('/descriptores/modificado','descriptoresController@update');
Route::get('/descriptores/eliminar/{id}','descriptoresController@destroy');
Route::post('/descriptores/crear','descriptoresController@store');
//tipos
Route::get('/tipos/nuevo', 'tiposController@create');
Route::get('/tipos/modificar/{id}','tiposController@show')->name('/Modificar');
Route::post('/tipos/modificado','tiposController@update');
Route::get('/tipos/eliminar/{id}','tiposController@destroy');
Route::post('/tipos/crear','tiposController@store');
//estados
Route::get('/estados/nuevo', 'estadoController@create');
Route::get('/estados/modificar/{id}','estadoController@show')->name('/Modificar');
Route::post('/estados/modificado','estadoController@update');
Route::get('/estados/eliminar/{id}','estadoController@destroy');
Route::post('/estados/crear','estadoController@store');