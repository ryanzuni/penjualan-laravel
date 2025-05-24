<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
//Route::post('/login', [LoginController::class, 'login']);
//Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
//Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');





