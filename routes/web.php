<?php

use Illuminate\Support\Facades\Route;

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

/*
					GET ROUTE
=================================================
*/
//routing login
Route::get('/','LoginController@index');
//routing admin index
Route::get('/admin','AdminController@index');
//routing logout
Route::get('/logout','AdminController@logout');

/*
					POST ROUTE
=================================================
*/
//route autentikasi
Route::post('/auth','LoginController@auth');

//routing tambah rw
Route::post('/tambah/rw','AdminController@tambahRw');
//routing tambah rt
Route::post('/tambah/rt','AdminController@tambahRt');
//routing tambah kk
Route::post('/tambah/kk','AdminController@tambahKk');
//routing tambah keluarga / warga
Route::post('/tambah/k','AdminController@tambahKeluarga');

//routing fetch data rw
Route::post('/data/rw','AdminController@getDataRw');
//routing fetch data rt
Route::post('/data/rt','AdminController@getDataRt');
//routing fetch data kepala keluarga
Route::post('/data/kk','AdminController@getDataKk');
//routing fetch data warga / keluarga
Route::post('/data/k','AdminController@getDataK');


//routing edit data rt
Route::post('/edit/rt','AdminController@editDataRt');
//routing edit data rw
Route::post('/edit/rw','AdminController@editDataRw');
//routing edit data kepala keluarga
Route::post('/edit/kk','AdminController@editDataKk');
Route::post('/edit/k','AdminController@editDataKeluarga');

//routing hapus data rw
Route::get('hapus/rw/{id}','AdminController@hapusRw');
//routing hapus data rt
Route::get('hapus/rt/{id}','AdminController@hapusRt');
//routing hapus data rw
Route::get('hapus/kk/{id}','AdminController@hapusKk');
//routing hapus data rw
Route::get('hapus/k/{id}','AdminController@hapusK');

//export rw
Route::get('export/rw','ExportController@RWExport');
//export rt
Route::get('export/rt','ExportController@RTExport');
//export kk
Route::get('export/kk','ExportController@KKExport');
//export k
Route::get('export/k','ExportController@KExport');

//route fetch data admin
Route::get('data/admin','AdminController@getDataAdmin');

//route edit data admin
Route::post('edit/admin','AdminController@editDataAdmin');