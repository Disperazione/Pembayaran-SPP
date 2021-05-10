<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\Auth\AuthController;

// petugas controller
use App\Http\Controllers\petugas\mainController as maincontrollers;
use App\Http\Controllers\petugas\SiswaController as Siswas;
// siswa controller
use App\Http\Controllers\siswa\mainController;

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
Route::prefix('siswa')->name('siswa')->namespace('siswa')->middleware(['auth:siswa','level:siswa'])->group(function () {
    Route::get('/dashboard', [mainController::class, 'dashboard'])->name('dashboard');
    Route::get('/transaksi', [mainController::class, 'transaksi'])->name('transaksi');
    Route::get('/history', [mainController::class, 'history'])->name('history');
});

// Route petugas & admin
Route::prefix('petugas')->namespace('petugas')->name('petugas.')->middleware(['auth:petugas','level:petugas,admin'])->group(function () {

    //main dashboard
    Route::get('/dashboard', [maincontrollers::class, 'dashboard'])->name('dashboard');
    Route::post('/dashboard/ajax', [maincontrollers::class, 'ajax'])->name('dashboard.ajax');

    Route::resource('transaksi', TransaksiController::class);

    // admin
    Route::middleware('level:admin')->group(function () {
        Route::resource('siswa', SiswaController::class);
        Route::get('/siswa/{siswa}/transaksi', [Siswas::class, 'siswa_transaksi'])->name('siswa.transaksi');
        Route::resource('main', PetugasController::class);
        Route::resource('spp', SppController::class);
        Route::resource('kelas', KelasController::class);
    });
});



