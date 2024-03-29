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




Route::get('/','App\Http\Controllers\Controller@index');
Route::get('/book','App\Http\Controllers\BookController@index');
Route::get('/membership','App\Http\Controllers\MembershipController@index');
Route::view('login', 'login');

Route::view('/register', 'register');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function() {
   Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'perform'])->name('logout.perform');
});