<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
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
Route::get('/', [ViewController::class, 'Login'])->name('login');


// abaikan ini
Route::middleware('auth:siswa', 'level:siswa')->group(function () {
});

Route::middleware('auth:petugas','level:petugas')->group(function () {
});

Route::middleware('auth:petugas', 'level:admin')->group(function () {
});
