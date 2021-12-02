<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;

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



Auth::routes();

Route::resource('/login', App\Http\Controllers\LoginController::class);


Route::resource('/admin', App\Http\Controllers\AdminController::class);


Route::resource('/guru', App\Http\Controllers\GuruController::class);


Route::resource('/siswa', App\Http\Controllers\SiswaController::class);

