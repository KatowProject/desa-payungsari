<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use Illuminate\Support\Facades\Route;

//Route Website Blog
Route::get('/', [BlogController::class,'index'])->middleware('guest');

// Profile Desa
Route::get('tentang-desa', [BlogController::class,'tentang_desa'])->middleware('guest');
Route::get('perangkat-desa', [BlogController::class,'perangkat_desa'])->middleware('guest');
Route::get('struktur-pemerintah-desa', [BlogController::class,'struktur_organisasi'])->middleware('guest');
Route::get('lembaga-desa', [BlogController::class,'lembaga_desa'])->middleware('guest');

// Postingan
Route::get('pencarian', [BlogController::class,'pencarian'])->middleware('guest');
Route::get('postingan/{post:slug}', [BlogController::class,'postingan_detail'])->middleware('guest');
Route::get('berita-desa', [BlogController::class,'berita_desa'])->middleware('guest');
Route::get('kegiatan-desa', [BlogController::class,'kegiatan_desa'])->middleware('guest');

//Route Postingan Admin
Route::resource('post',PostController::class)->middleware('auth');
Route::get('post/checkSlug',[DashboardController::class,'checkSlug'])->middleware('auth');

// Route Authencation dan Registrasi
Route::get('/login', [AuthController::class, 'index'])->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('gantipassword', [AuthController::class, 'gantipassword'])->middleware('auth');
Route::post('gantipassword', [AuthController::class, 'updatepassword'])->middleware('auth');
Route::get('adduser',[AuthController::class, 'create'])->middleware('auth');
Route::post('adduser',[AuthController::class, 'store'])->middleware('auth');

//Route Dashboard
Route::get('dashboard', [DashboardController::class,'index'])->middleware('auth');
Route::get('indeks_surat', [DashboardController::class,'indeks_surat'])->middleware('auth');
Route::get('blog', [DashboardController::class,'blog'])->middleware('auth');
Route::resource('penduduk', PendudukController::class)->middleware('auth');
Route::get('pencarian_penduduk', [PendudukController::class,'index'])->middleware('auth');
Route::post('pencarian_penduduk', [PendudukController::class,'pencarian_penduduk'])->middleware('auth');
Route::resource('pegawai', PegawaiController::class)->middleware('auth');
Route::resource('surat-masuk', SuratMasukController::class)->middleware('auth');
Route::resource('surat-keluar', SuratKeluarController::class)->middleware('auth');

//Route Pembuatan Surat
Route::get('buatsurat',[SuratController::class, 'buatsurat'])->middleware('auth');
Route::post('buatsurat/skdd', [SuratController::class, 'skdd'])->middleware('auth');
Route::post('buatsurat/sku', [SuratController::class, 'sku'])->middleware('auth');
Route::post('buatsurat/coba', [SuratController::class, 'coba'])->middleware('auth');
