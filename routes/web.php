<?php

use App\Http\Controllers\AboutController;
use Illuminate\Auth\Events\Login;
use Illuminate\Routing\Route as RoutingRoute;
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
Route::get('/login', function () {return view('front-end.layouts.admin.login');});
Route::get('/edit-keberangkatan', function () {return view('front-end.layouts.admin.edit-keberangkatan');});
Route::get('/delete', function () {return view('front-end.layouts.admin.delete');});
Route::get('/add-keberangkatan', function () {return view('front-end.layouts.admin.add-keberangkatan');});

Route::get('/input-data-driver', function () {return view('front-end.layouts.admin.tabel-master.input-data-driver');});
Route::get('/input-data-kendaraan', function () {return view('front-end.layouts.admin.tabel-master.input-data-kendaraan');});
Route::get('/input-data-penumpang', function () {return view('front-end.layouts.admin.tabel-master.input-data-penumpang');});

// User & Admin
Route::get('/about', function () {return view('front-end.layouts.user-admin.about');});
Route::get('/live-data', function () {return view('front-end.layouts.user-admin.live-data');});
Route::get('/detail', function () {return view('front-end.layouts.user-admin.detail');});