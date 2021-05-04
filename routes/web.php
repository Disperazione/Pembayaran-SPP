<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\siswa\mainController;
use App\Http\Controllers\petugas\mainController as maincontrollers;

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


// view controller untuk route view aja
Route::get('/', [AuthController::class, 'Login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postLogin'])->name('post.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// route siswa
Route::middleware('auth:siswa')->prefix('siswa')->group(function () {
    Route::get('/dashboard', [mainController::class, 'dashboard'])->name('siswa.dashboard');
});

// Route petugas & admin
Route::middleware('auth:petugas')->prefix('petugas')->group(function () {

    //main dashboard
    Route::get('/dashboard', [maincontrollers::class, 'dashboard'])->name('petugas.dashboard');

    // petugas
    Route::middleware('level:petugas')->group(function () {

    });

    // admin
    Route::middleware('level:admin')->group(function () {

    });
});



