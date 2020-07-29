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
    return view('/welcome');
});

Auth::routes();

Route::get('/welcome', 'HomeController@index')->name('home');
Route::get('/{id}', 'HomeController@showProfile')->name('show_profile');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/operator', 'OperatorController@index')->name('operator')->middleware('operator');
Route::post('/welcome', 'HomeController@store')->name('store_pass');
Route::patch('admin/passes/{id}/update', 'AdminController@update')->name('update_pass')->middleware('admin');
Route::patch('admin/passes/update_all', 'AdminController@update_all')->name('update_passes')->middleware('admin');
