<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\UserController;
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

//login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('isLogin');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//dashboard




Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
    //manajemen pengguna
    //pengguna
    Route::get('/dashboard-pengguna', [UserController::class, 'index']);
    Route::get('/dashboard-pengguna/create', [UserController::class, 'create']);
    Route::post('/dashboard-pengguna', [UserController::class, 'store']);
    Route::delete('/dashboard-pengguna/{id}', [UserController::class, 'destroy']);
    Route::get('/dashboard-pengguna/{id}/edit', [UserController::class, 'edit'])->name('pengguna.edit');
    Route::put('/dashboard-pengguna/{id}', [UserController::class, 'update'])->name('pengguna.update');
    //  Route::resource('/dashboard-pengguna', UserController::class);

    //divisi
    Route::get('/dashboard-divisi', [DivisiController::class,'index']);
    Route::get('/dashboard-divisi/create', [DivisiController::class,'create']);
    Route::post('/dashboard-divisi/', [DivisiController::class,'store']);
    Route::delete('/dashboard-divisi/{id}', [DivisiController::class,'destroy']);
    Route::get('/dashboard-divisi/{id}/edit', [DivisiController::class,'edit'])->name('divisi.edit');
    Route::put('/dashboard-divisi/{id}', [DivisiController::class,'update'])->name('divisi.update');

    //pegawai
    Route::get('/dashboard-pegawai',[PegawaiController::class,'index']);
    Route::get('/dashboard-pegawai/create',[PegawaiController::class,'create']);
    Route::post('/dashboard-pegawai',[PegawaiController::class,'store']);
    Route::delete('/dashboard-pegawai/{id}',[PegawaiController::class,'destroy']);
    Route::get('/dashboard-pegawai/{id}', [PegawaiController::class,'show']);
    Route::get('/dashboard-pegawai/{id}/edit', [PegawaiController::class,'edit']);
    Route::put('/dashboard-pegawai/{id}', [PegawaiController::class,'update'])->name('pegawai.update');
});


//kegiatan

//museum-masuk-sekolah
Route::resource('/dashboard/daftar-sekolah', SekolahController::class);

