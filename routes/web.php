<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\UserController;
use App\Http\Middleware;
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

Auth::routes();
Route::get('/', [UserController::class, 'index'])->name('depan.home');
Route::get('/prosedur', [UserController::class, 'prosedur'])->name('depan.prosedur');
Route::get('/kontak', [UserController::class, 'kontak'])->name('depan.kontak');
Route::get('/pengaduan', [UserController::class, 'pengaduan'])->name('depan.pengaduan');
Route::post('/store', [UserController::class, 'storePengaduan'])->name('depan.store');

// khusus User
Route::prefix('user')
    ->middleware(['auth', 'MahasiswaMiddleware'])
    ->group(function () {
        Route::get('/laporan', [UserController::class, 'laporan'])->name('depan.laporan');
    });

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');

});

// Khusus Admin & Petugas
Route::group(['middleware' => ['auth', 'peran:admin-petugas']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.index');
    Route::get('/admin/pengaduan', [PengaduanController::class, 'index'])->name('admin.pengaduan');
    Route::get('/admin/pengaduan/detail/{id}', [PengaduanController::class, 'detail'])->name('pengaduan.detail');
    Route::delete('/admin/pengaduan/{id}', [PengaduanController::class, 'destroy'])->name('admin.pengaduan.destroy');
    Route::get('/admin/mahasiswa', [AdminController::class, 'mahasiswa'])->name('admin.mahasiswa');
    Route::get('/admin/laporan', [AdminController::class, 'laporan'])->name('admin.laporan');
});
