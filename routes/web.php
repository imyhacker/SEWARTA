<?php

use App\Http\Controllers\AkunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\SettingController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => '/'], function($id = null, $kategori = null){
    Route::get('/', [ClientController::class, 'index'])->name('index');
    Route::get('/tentang', [ClientController::class, 'tentang'])->name('tentang');
    Route::get('/berita', [ClientController::class, 'berita'])->name('semua_berita');
    Route::get('/kontak', [ClientController::class, 'kontak'])->name('kontak');
    Route::get('/berita/{id}/baca', [ClientController::class, 'baca'])->name('baca', $id);
    Route::get('/semua_informasi', [ClientController::class, 'semua_informasi'])->name('semua_informasi');
    Route::get('/informasi/{id}/baca', [ClientController::class, 'baca_info'])->name('baca_info', $id);
    Route::get('/kategori/{kategori}', [ClientController::class, 'kategori'])->name('kate', $kategori);

});

Auth::routes(['register'=>false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'home/jurnal/berita'], function($id = null){
    Route::get('/', [ArtikelController::class, 'berita'])->name('berita');
    Route::post('/upload_berita', [ArtikelController::class, 'upload_berita'])->name('upload_berita');
    Route::post('/upload_tag', [ArtikelController::class, 'upload_tag'])->name('upload_tag');
    Route::post('/upload_kategori', [ArtikelController::class, 'upload_kategori'])->name('upload_kategori');
    Route::get('/{id}/hapus_kategori', [ArtikelController::class, 'hapus_kategori'])->name('hapus_kategori', $id);
    Route::get('/{id}/hapus_berita', [ArtikelController::class, 'hapus_berita'])->name('hapus_berita', $id);
    Route::get('/{id}/hapus_tag', [ArtikelController::class, 'hapus_tag'])->name('hapus_tag', $id);
    Route::get('/{id}/edit_berita', [ArtikelController::class, 'edit_berita'])->name('edit_berita', $id);
    Route::post('/{id}/edit_berita/update', [ArtikelController::class, 'update_berita'])->name('update_berita', $id);
    Route::get('/laporan', [ArtikelController::class, 'laporan'])->name('laporan');
    Route::get('/laporan/cari_tanggal_berita', [ArtikelController::class, 'cari_tanggal_berita'])->name('cari_tanggal_berita');

});

Route::group(['prefix' => 'home/jurnal/informasi'], function($id = null){
    Route::get('/', [ArtikelController::class, 'informasi'])->name('informasi');
    Route::post('/upload_informasi', [ArtikelController::class, 'upload_informasi'])->name('upload_informasi');
    Route::get('/{id}/hapus_informasi', [ArtikelController::class, 'hapus_informasi'])->name('hapus_informasi', $id);
    Route::get('/{id}/edit_informasi', [ArtikelController::class, 'edit_informasi'])->name('edit_informasi', $id);
    Route::post('/{id}/edit_informasi/update', [ArtikelController::class, 'update_informasi'])->name('update_informasi', $id);

});

Route::group(['prefix' => 'home/setting'], function(){
    Route::post('/upload_nama_aplikasi', [SettingController::class, 'upload_nama_aplikasi'])->name('upload_nama_aplikasi');
    Route::post('/upload_alamat', [SettingController::class, 'upload_alamat'])->name('upload_alamat');
    Route::post('/upload_tentang', [SettingController::class, 'upload_tentang'])->name('upload_tentang');
    Route::post('/upload_desa', [SettingController::class, 'upload_desa'])->name('upload_desa');
});

Route::group(['prefix' => 'home/akun'], function($id = null){
    Route::get('/semua_akun', [AkunController::class, 'index'])->name('semua_akun');
    Route::post('/semua_akun/tambah', [AkunController::class, 'tambah_akun'])->name('tambah_akun');
    Route::get('/semua_akun/{id}/hapus', [AkunController::class, 'hapus'])->name('hapus_akun', $id);
    Route::get('/akunku', [AkunController::class, 'akunku'])->name('akunku');
    Route::post('/akunku/update', [AkunController::class, 'update_akun'])->name('update_akun');
});