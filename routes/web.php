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
