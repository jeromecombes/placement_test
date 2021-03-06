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

Route::get('/', 'PlacementController@index')
    ->name('index')
    ->middleware('auth');

Route::post('/', 'PlacementController@store')
    ->name('store')
    ->middleware('auth');

Route::get('/thanks', 'PlacementController@thanks')
    ->name('thanks');


Route::get('login', 'Auth\LoginController@showLoginForm')
    ->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')
    ->name('logout');

Route::get('/home', 'HomeController@index')
    ->name('home');