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
    return view('welcome');
});

Auth::routes();


// Route::get('user', function () {

	Route::group(['middleware' => 'auth'], function(){

	Route::resource('/karyawan', 'karyawanController');
	Route::resource('/supplier', 'supplierController');
	Route::resource('/stok', 'penyetokanController');
	Route::resource('/mokit', 'mokitController');
	Route::resource('/pelanggan', 'pelangganController');
	Route::resource('/penjualan', 'jualController');
	Route::resource('/detail', 'detailController');	

	});
	// }



Route::get('/home', 'HomeController@index')->name('home');
