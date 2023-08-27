<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HistoriKunjunganController;
use App\Http\Controllers\JadwalKunjunganController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\KunjunganPetugasController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\UserController;
use App\Models\HistoriKunjungan;
use App\Models\KunjunganPetugas;
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


//frontend
Route::get('/', [FrontendController::class, 'index']);
Route::get('/profile', [FrontendController::class, 'profile']);
Route::get('/koleksi', [FrontendController::class, 'koleksi']);
Route::get('/bukutamu', [FrontendController::class, 'bukutamu']);
Route::post('/bukutamu', [FrontendController::class, 'store']);
Route::get('/koleksi/{id}', [FrontendController::class, 'showKoleksiDetail'])->name('koleksi.detail');

//dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
    Route::get('/dashboard/filter-kunjungan', [App\Http\Controllers\DashboardController::class, 'filterKunjungan'])->name('filter-kunjungan');


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
    Route::get('/dashboard-divisi', [DivisiController::class, 'index']);
    Route::get('/dashboard-divisi/create', [DivisiController::class, 'create']);
    Route::post('/dashboard-divisi/', [DivisiController::class, 'store']);
    Route::delete('/dashboard-divisi/{id}', [DivisiController::class, 'destroy']);
    Route::get('/dashboard-divisi/{id}/edit', [DivisiController::class, 'edit'])->name('divisi.edit');
    Route::put('/dashboard-divisi/{id}', [DivisiController::class, 'update'])->name('divisi.update');

    //pegawai
    Route::get('/dashboard-pegawai', [PegawaiController::class, 'index']);
    Route::get('/dashboard-pegawai/create', [PegawaiController::class, 'create']);
    Route::post('/dashboard-pegawai', [PegawaiController::class, 'store']);
    Route::delete('/dashboard-pegawai/{id}', [PegawaiController::class, 'destroy']);
    Route::get('/dashboard-pegawai/{id}', [PegawaiController::class, 'show']);
    Route::get('/dashboard-pegawai/{id}/edit', [PegawaiController::class, 'edit']);
    Route::put('/dashboard-pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');


    //inventaris koleksi
    Route::get('/dashboard-koleksi', [KoleksiController::class, 'index']);
    Route::get('/dashboard-koleksi/create', [KoleksiController::class, 'create']);
    Route::post('/dashboard-koleksi', [KoleksiController::class, 'store']);

    //jadwal-kunjungan
    Route::get('/dashboard-jadwal-kunjungan', [JadwalKunjunganController::class, 'index']);
    Route::get('/dashboard-jadwal-kunjungan/create', [JadwalKunjunganController::class, 'create']);
    Route::post('/dashboard-jadwal-kunjungan', [JadwalKunjunganController::class, 'store']);
    Route::get('/dashboard-jadwal-kunjungan/{id}/edit', [JadwalKunjunganController::class, 'edit']);
    Route::put('/dashboard-jadwal-kunjungan/{id}', [JadwalKunjunganController::class, 'update']);


    //histori-kunjungan
    Route::get('/dashboard-histori-kunjungan', [HistoriKunjunganController::class, 'index']);
    Route::post('/histori/{id}', [HistoriKunjunganController::class, 'store']);

    //kunjungan-petugas
    Route::get('/dashboard-kunjungan-petugas/create', [KunjunganPetugasController::class, 'create']);
    Route::post('/dashboard-kunjungan-petugas', [KunjunganPetugasController::class, 'store']);
    Route::post('/dashboard-kunjungan-petugas/{id}/success', [KunjunganPetugasController::class, 'updateStatusSuccess'])->name('kunjungan-petugas.success');
});



// //museum-masuk-sekolah
// Route::resource('/dashboard/daftar-sekolah', SekolahController::class);
