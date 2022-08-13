<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\PupilController;
use App\Http\Controllers\ParentController;

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



Route::get('school', [HomeController::class, 'index']);

// Route::get('/school/{home}', [HomeController::class, 'index']);

Route::resource('pupils', PupilController::class);

Route::resource('parents', ParentController::class);

Route::resource('class', ClassController::class);