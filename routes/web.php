<?php

Route::get('/', function () {
    return view('index');
});

//Los index
Route::get('/inicio', 'inicioController@index'); 
Route::get('/descriptores', 'descriptoresController@index');
Route::get('/estados', 'estadoController@index');
Route::get('/tipos', 'tiposController@index');
Route::get('/piezas', 'piezasController@index');

//Metodos para los 3 abms
//descriptores
Route::get('/descriptores/nuevo', 'descriptoresController@create');
Route::get('/descriptores/modificar/{id}','descriptoresController@show');
Route::post('/descriptores/modificado','descriptoresController@update');
Route::get('/descriptores/eliminar/{id}','descriptoresController@destroy');
Route::post('/descriptores/crear','descriptoresController@store');
//tipos
Route::get('/tipos/nuevo', 'tiposController@create');
Route::get('/tipos/modificar/{id}','tiposController@show');
Route::post('/tipos/modificado','tiposController@update');
Route::get('/tipos/eliminar/{id}','tiposController@destroy');
Route::post('/tipos/crear','tiposController@store');
//estados
Route::get('/estados/nuevo', 'estadoController@create');
Route::get('/estados/modificar/{id}','estadoController@show');
Route::post('/estados/modificado','estadoController@update');
Route::get('/estados/eliminar/{id}','estadoController@destroy');
Route::post('/estados/crear','estadoController@store');

//Las piezas
Route::get('/piezas/nuevo', 'piezasController@create');
Route::get('/piezas/ver/{id}', 'piezasController@ver');
Route::get('/piezas/modificar/{id}','piezasController@show');
Route::post('/piezas/modificado','piezasController@update');
Route::get('/piezas/eliminar/{id}','piezasController@destroy');
Route::post('/piezas/crear','piezasController@store');