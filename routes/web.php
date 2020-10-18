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

Route::get('/', function () {
    return view('welcome');
});


Route::get('master/buku', 'CustomerController@index');
Route::get('master/buku/create', 'CustomerController@viewCreate');
Route::post('master/buku/create/proses', 'CustomerController@store');
Route::get('master/buku/edit/{id}', 'CustomerController@edit');
Route::put('master/buku/edit/{id}/proses', 'CustomerController@update');
Route::get('master/buku/delete/{id}', 'CustomerController@delete');

Route::group(['prefix' => '/buku'], function(){
    Route::get('/', 'BukuController@index')->name('indexBuku');
    Route::get('/create', 'BukuController@create')->name('createBuku');
    Route::post('/store', 'BukuController@store')->name('storeBuku');
    Route::get('/{id}/edit', 'BukuController@edit')->name('editBuku');
    Route::put('/{id}/update', 'BukuController@update')->name('updateBuku');
    Route::delete('/{id}/delete', 'BukuController@destroy')->name('deleteBuku');
});


Route::group(['prefix' => '/pengguna'], function(){
    Route::get('/', 'PenggunaController@index')->name('indexPengguna');
    Route::get('/create', 'PenggunaController@create')->name('createPengguna');
    Route::post('/store', 'PenggunaController@store')->name('storePengguna');
    Route::get('/{id}/detail', 'PenggunaController@detail')->name('showPengguna');
    Route::get('/{id}/edit', 'PenggunaController@edit')->name('editPengguna');
    Route::put('/{id}/update', 'PenggunaController@update')->name('updatePengguna');
    Route::delete('/{id}/delete', 'PenggunaController@destroy')->name('deletePengguna');
});

Route::group(['prefix' => '/role'], function(){
    Route::get('/', 'RoleController@index')->name('indexRole');
    Route::get('/create', 'RoleController@create')->name('createRole');
    Route::post('/store', 'RoleController@store')->name('storeRole');
    Route::get('/{id}/detail', 'RoleController@detail')->name('showRole');
    Route::get('/{id}/edit', 'RoleController@edit')->name('editRole');
    Route::put('/{id}/update', 'RoleController@update')->name('updateRole');
    Route::delete('/{id}/delete', 'RoleController@destroy')->name('deleteRole');
});

Route::group(['prefix' => '/Kategori'], function(){
    Route::get('/', 'KategoriController@index')->name('indexKategori');
    Route::get('/create', 'KategoriController@create')->name('createKategori');
    Route::post('/store', 'KategoriController@store')->name('storeKategori');
    Route::get('/{id}/detail', 'KategoriController@detail')->name('showKategori');
    Route::get('/{id}/edit', 'KategoriController@edit')->name('editKategori');
    Route::put('/{id}/update', 'KategoriController@update')->name('updateKategori');
    Route::delete('/{id}/delete', 'KategoriController@destroy')->name('deleteKategori');
});

Route::group(['prefix' => '/Status'], function(){
    Route::get('/', 'StatusController@index')->name('indexStatus');
    Route::get('/create', 'StatusController@create')->name('createStatus');
    Route::post('/store', 'StatusController@store')->name('storeStatus');
    Route::get('/{id}/detail', 'StatusController@detail')->name('showStatus');
    Route::get('/{id}/edit', 'StatusController@edit')->name('editStatus');
    Route::put('/{id}/update', 'StatusController@update')->name('updateStatus');
    Route::delete('/{id}/delete', 'StatusController@destroy')->name('deleteStatus');
});