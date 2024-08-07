<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KegiatanKadesController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PengaduanMasrayakatController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Models\KegiatanKades;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

//Route Website Blog
Route::get('artisan', function(){
  Artisan::call('migrate:fresh --seed');
});
Route::get('/', [BlogController::class,'index'])->middleware('guest');

// Profile Desa
Route::get('tentang-desa', [BlogController::class,'tentang_desa'])->middleware('guest');
Route::get('perangkat-desa', [BlogController::class,'perangkat_desa'])->middleware('guest');
Route::get('struktur-pemerintah-desa', [BlogController::class,'struktur_organisasi'])->middleware('guest');
Route::get('lembaga-desa', [BlogController::class,'lembaga_desa'])->middleware('guest');
Route::get('tentang', [BlogController::class,'tentang'])->middleware('guest');
Route::post('tentang_blog', [BlogController::class,'tentang_blog'])->middleware('guest');

// Layanan Public
// Route::get('pengaduan-masyarakat', [LayananController::class,'pengaduan_masyarakat'])->middleware('guest');
// Route::post('pengaduan-store', [LayananController::class,'pengaduan_store'])->middleware('guest');


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
Route::post('buatsurat/coba', [SuratController::class, 'coba'])->middleware('auth');

// Kegitan Kades
Route::get('kegiatan-kades', [KegiatanKadesController::class, 'kegiatan_kades'])->middleware('auth')->name('kegiatan-kades');
Route::get('create-kegiatan-kades', [KegiatanKadesController::class,'create_kegiatan_kades'])->middleware('auth');
Route::get('edit-kegiatan-kades/{id}', [KegiatanKadesController::class, 'edit_view_kegiatan_kades'])->middleware('auth');
Route::get('detail-kegiatan-kades/{id}', [KegiatanKadesController::class, 'detail_kegiatan_kades'])->middleware('auth');
Route::post('kades', [KegiatanKadesController::class,'kades_store'])->middleware('auth');
Route::put('kades/{id}', [KegiatanKadesController::class, 'kades_update'])->middleware('auth');
Route::delete('kades/{id}', [KegiatanKadesController::class, 'kades_delete'])->middleware('auth');

//
Route::get('pengaduan', [PengaduanMasrayakatController::class, 'pengaduan_masyarakat_public'])->middleware('guest');
// Pengaduan Masrayakat
Route::get('pengaduan-masyarakat', [PengaduanMasrayakatController::class, 'pengaduan_masyarakat'])->middleware('auth');
Route::get('pengaduan-masyarakat/create', [PengaduanMasrayakatController::class, 'create_pengaduan_masyarakat'])->middleware('auth');
Route::post('pengaduan-masyarakat/create', [PengaduanMasrayakatController::class, 'pengaduan_store'])->middleware('auth');
Route::get('pengaduan-masyarakat/{id}/detail', [PengaduanMasrayakatController::class, 'detail_pengaduan_masyarakat'])->middleware('auth');
Route::get('pengaduan-masyarakat/{id}/edit', [PengaduanMasrayakatController::class, 'edit_pengaduan_masyarakat'])->middleware('auth');
Route::put('pengaduan-masyarakat/{id}/edit', [PengaduanMasrayakatController::class, 'update_pengaduan_masyarakat'])->middleware('auth');
Route::delete('pengaduan-masyarakat/{id}', [PengaduanMasrayakatController::class, 'delete_pengaduan_masyarakat'])->middleware('auth');