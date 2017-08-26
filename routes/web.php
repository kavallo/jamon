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

Route::get('/test', function () {
    return view('backend/index');
});



Route::get('/clientes', 'ClientesController@index');
Route::get('/clientes/show', 'ClientesController@show');
Route::get('/clientes/all', 'ClientesController@all');
Route::post('/clientes', 'ClientesController@create');
Route::put('/clientes', 'ClientesController@store'); 
Route::get('/agenda', 'AgendaController@index');

Route::post('/prestamos','PrestamosController@create');
Route::get('/prestamos/clientes','PrestamosController@client');
Route::get('/prestamos/detail','PrestamosController@show'); 
Route::get('/prestamos/transacction/all','PrestamosController@transacctionShow');
Route::post('/prestamos/transacction','PrestamosController@transacction');

Route::get('/reportes', 'ReportesController@index');