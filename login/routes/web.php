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

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('dashboard','DashboardController@index')->name('dashboard');

Route::post('login', 'Auth\LoginController@login')->name('login');

Route::post('other', 'Auth\LoginController@other')->name('other');


Route::get('pruebas', 'PruebasController@pruebas')->name('pruebas');


Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
