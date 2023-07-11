<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

//  jikalau user sudah login maka dibatasi
Route::middleware(['guest'])->group(function () {

});
Route::get('/', [UserController::class, 'index'])->name('depan.home');
Route::get('/prosedur', [UserController::class, 'prosedur'])->name('depan.prosedur');
Route::get('/kontak', [UserController::class, 'kontak'])->name('depan.kontak');
Route::get('/pengaduan', [UserController::class, 'pengaduan'])->name('depan.pengaduan');
Route::get('/laporan', [UserController::class, 'laporan'])->name('depan.laporan');

Route::post('/store', [UserController::class, 'storePengaduan'])->name('depan.store');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');

});
