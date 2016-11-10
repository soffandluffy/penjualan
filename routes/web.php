<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//BarangController()
Route::get('/barang/all', 'BarangController@index');
Route::get('/barang/add', 'BarangController@add');
Route::post('/barang/save', 'BarangController@save');
Route::get('/barang/edit/{id}', 'BarangController@edit');
Route::post('/barang/update', 'BarangController@update');
Route::get('/barang/delete/{id}', 'BarangController@delete');

// PembeliController()
Route::get('pembeli/all', 'PembeliController@index');
Route::get('/pembeli/add', 'PembeliController@add');
Route::post('/pembeli/save', 'PembeliController@save');
Route::get('/pembeli/edit/{id}', 'PembeliController@edit');
Route::post('/pembeli/update', 'PembeliController@update');
Route::get('/pembeli/delete/{id}', 'PembeliController@delete');

// TransaksiController()
Route::get('/transaksi/all', 'TransaksiController@index');
Route::get('/transaksi/add', 'TransaksiController@add');
Route::post('/transaksi/save', 'TransaksiController@save');