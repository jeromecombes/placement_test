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

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlacementController;

Route::get('/', [PlacementController::class, 'index'])
    ->name('index')
    ->middleware('auth');

Route::post('/', [PlacementController::class, 'store'])
    ->name('store')
    ->middleware('auth');

Route::get('/thanks', [PlacementController::class, 'thanks'])
    ->name('thanks');


Route::get('login', [LoginController::class, 'showLoginForm'])
    ->name('login');

Route::post('login', [LoginController::class, 'login']);

Route::post('logout', [LoginController::class, 'logout'])
    ->name('logout');

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');
