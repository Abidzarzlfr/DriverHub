<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LiveDataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KeberangkatanController;
use App\Models\Kendaraan;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AboutController::class, 'index']);

// Admin
//

//


// User & Admin
Route::get('/about', function () {return view('front-end.layouts.user-admin.about');});
Route::get('/detail', function () {return view('front-end.layouts.user-admin.detail');});

// Live Data
Route::get('/live-data', [LiveDataController::class, 'index'])->name('live-data');

// Auth
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Data Penumpang
Route::get('/input-data-karyawan', [KaryawanController::class, 'index'])->name('input-data-karyawan');
// Route::get('/input-data-karyawan', [KaryawanController::class, 'create'])->name('input-data-karyawan');
Route::post('/input-data-karyawan', [KaryawanController::class, 'store'])->name('input-data-karyawan');

// Data Driver
Route::get('/input-data-driver', [DriverController::class, 'index'])->name('input-data-driver');
Route::post('/input-data-driver', [DriverController::class, 'store'])->name('input-data-driver');

// Data Kendaraan
Route::get('/input-data-kendaraan', [KendaraanController::class, 'index'])->name('input-data-kendaraan');
Route::post('/input-data-kendaraan', [KendaraanController::class, 'store'])->name('input-data-kendaraan');

// Keberangkatan
Route::get('/keberangkatan', [KeberangkatanController::class, 'index'])->name('keberangkatan');
Route::post('/add-keberangkatan', [KeberangkatanController::class, 'store'])->name('add-keberangkatan');
Route::post('/edit-keberangkatan', [KeberangkatanController::class, 'edit'])->name('edit-keberangkatan');
Route::delete('/delete', [KeberangkatanController::class, 'destroy'])->name('delete');