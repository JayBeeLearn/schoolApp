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



Route::get('school', [HomeController::class, 'index'])->name('school');

// Route::get('/school/{home}', [HomeController::class, 'index']);

Route::resource('pupils', PupilController::class);
Route::get('/school/pupils', [PupilController::class, 'index'])->name('pupils.index');
Route::get('/pupils/create/{parents}', [PupilController::class, 'create'])->name('pupils.create');
Route::get('/pupils/show/{pupil}', [PupilController::class, 'show'])->name('pupils.show');
Route::get('/pupils/edit/{pupil}', [PupilController::class, 'edit'])->name('pupils.edit');

Route::post('/pupils', [PupilController::class, 'store'])->name('pupils.store');
Route::put('/pupils/{pupil}', [PupilController::class, 'update'])->name('pupils.update');

Route::delete('/pupils/{pupil}', [PupilController::class, 'destroy'])->name('pupils.destroy');

Route::resource('parents', ParentController::class);
Route::get('/school/parents', [ParentController::class, 'index'])->name('parents.index');
Route::get('/parents/create', [ParentController::class, 'create'])->name('parents.create');
Route::get('/parents/show/{parent}', [ParentController::class, 'show'])->name('parents.show');
Route::get('/parents/edit/{parent}', [ParentController::class, 'edit'])->name('parents.edit');

Route::post('/parents', [ParentController::class, 'store'])->name('parents.store');
Route::put('/parents/{parent}', [ParentController::class, 'update'])->name('parents.update');

Route::delete('/parents/{parent}', [ParentController::class, 'destroy'])->name('parents.destroy');

Route::resource('class', ClassController::class);