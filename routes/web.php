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
    Route::put('/{id}/delete', 'BukuController@destroy')->name('deleteBuku');
});


Route::group(['prefix' => '/pengguna'], function(){
    Route::get('/', 'PenggunaController@index')->name('indexPengguna');
    Route::get('/create', 'PenggunaController@create')->name('createPengguna');
    Route::post('/store', 'PenggunaController@store')->name('storePengguna');
    Route::get('/{id}/detail', 'PenggunaController@detail')->name('showPengguna');
    Route::get('/{id}/edit', 'PenggunaController@edit')->name('editPengguna');
    Route::put('/{id}/update', 'PenggunaController@update')->name('updatePengguna');
    Route::put('/{id}/delete', 'PenggunaController@destroy')->name('deletePengguna');
});