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
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/customer', 'CustomerController@index')->name('customer');
Route::get('/customer/tambah', 'CustomerController@create');
Route::post('/customer/store', 'CustomerController@store');
Route::get('/customer/edit/{id}', 'CustomerController@edit');
Route::post('/customer/update/{id}', 'CustomerController@update');
Route::get('/customer/detail/{id}', 'CustomerController@show');
Route::get('/customer/hapus/{id}', 'CustomerController@destroy');

Route::get('/mobil', 'MobilController@index')->name('mobil');
Route::get('/mobil/tambah', 'MobilController@create');
Route::post('/mobil/store', 'MobilController@store');
Route::get('/mobil/edit/{id}', 'MobilController@edit');
Route::post('/mobil/update/{id}', 'MobilController@update');
Route::get('/mobil/detail/{id}', 'MobilController@show');
Route::get('/mobil/hapus/{id}', 'MobilController@destroy');

Route::get('/transaksi', 'TransaksiController@index')->name('transaksi');
