<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;

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

Route::get('/onama', 'App\Http\Controllers\PagesController@about');

Route::get('/pocetna', 'App\Http\Controllers\PagesController@pocetnastr');

Route::resource('galerija','App\Http\Controllers\PostsController');

Route::get('/postavi', 'App\Http\Controllers\PostsController@create');
Route::group(['middleware' => 'guest'], function () {
  Route::get('/register', [RegisterController::class, 'register']);
  Route::post('/register', [RegisterController::class, 'register']);
  Route::get('/login', [LoginController::class, 'getLoginForm'])->name('login');
  Route::post('/login', [LoginController::class, 'login']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
