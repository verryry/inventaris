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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/barang','BarangController');

Route::resource('/barang-keluar','BarangKeluarController');
Route::get('/barang/{id}/in','BarangKeluarController@in')->name('barangKeluar.in');

Route::resource('/barang-masuk','BarangMasukController');
Route::resource('/barang-rusak','BarangRusakController');
Route::resource('/mutasi-barang','MutasiBarangMasukController');
Route::resource('/mutasi-keluar','MutasiBarangKeluarController');

Route::view('/report/barang','backend/barang/report');
