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


Route::get('master/customer', 'CustomerController@index');
Route::get('master/customer/create', 'CustomerController@viewCreate');
Route::post('master/customer/create/proses', 'CustomerController@store');
Route::get('master/customer/edit/{id}', 'CustomerController@viewEdit');
Route::post('master/customer/edit/{id}/proses', 'CustomerController@update');
Route::get('master/customer/delete/{id}', 'CustomerController@delete');