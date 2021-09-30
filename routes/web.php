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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/c', [App\Http\Controllers\CapSkillsController::class, 'index'])->name('c');


Route::get('/auth/login', 'App\Http\Controllers\Auth\AuthController@redirectToProvider')->name('login');
Route::post('/auth/logout', 'App\Http\Controllers\Auth\AuthController@logout')->name('logout');
Route::get('/auth/callback','App\Http\Controllers\Auth\AuthController@handleProviderCallback');
