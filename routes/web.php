<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'home/jurnal/berita'], function($id = null){
    Route::get('/', [ArtikelController::class, 'berita'])->name('berita');
    Route::post('/upload_berita', [ArtikelController::class, 'upload_berita'])->name('upload_berita');
    Route::post('/upload_tag', [ArtikelController::class, 'upload_tag'])->name('upload_tag');

    Route::get('/{id}/hapus_berita', [ArtikelController::class, 'hapus_berita'])->name('hapus_berita', $id);
    Route::get('/{id}/hapus_tag', [ArtikelController::class, 'hapus_tag'])->name('hapus_tag', $id);

    Route::get('/{id}/edit_berita', [ArtikelController::class, 'edit_berita'])->name('edit_berita', $id);
    Route::post('/{id}/edit_berita/update', [ArtikelController::class, 'update_berita'])->name('update_berita', $id);
});

Route::group(['prefix' => 'home/jurnal/informasi'], function(){
    Route::get('/', [ArtikelController::class, 'informasi'])->name('informasi');
    Route::post('/upload_informasi', [ArtikelController::class, 'upload_informasi'])->name('upload_informasi');
});