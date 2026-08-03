<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PetaController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UmkmController as AdminUmkmController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Admin\PengaduanController as AdminPengaduanController;
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

// ====================================
// FRONTEND ROUTES
// ====================================

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// Informasi Nagari Routes
Route::prefix('informasi')->name('informasi.')->group(function () {
    // Profil dengan semua konten dalam satu halaman
    Route::get('profil', [InformasiController::class, 'profil'])->name('profil');

    // Route individual untuk kompatibilitas (redirect ke profil dengan anchor)
    Route::get('sejarah', function () {
        return redirect()->route('informasi.profil', [], 301) . '#sejarah';
    })->name('sejarah');

    Route::get('batas-wilayah', function () {
        return redirect()->route('informasi.profil', [], 301) . '#batas-wilayah';
    })->name('batas-wilayah');

    Route::get('jorong', function () {
        return redirect()->route('informasi.profil', [], 301) . '#jorong';
    })->name('jorong');

    Route::get('kondisi-geografis', function () {
        return redirect()->route('informasi.profil', [], 301) . '#kondisi-geografis';
    })->name('kondisi-geografis');

    Route::get('kondisi-nagari', function () {
        return redirect()->route('informasi.profil', [], 301) . '#kondisi-nagari';
    })->name('kondisi-nagari');

    Route::get('topografi', function () {
        return redirect()->route('informasi.profil', [], 301) . '#topografi';
    })->name('topografi');

    // Visi Misi & Struktur Organisasi
    Route::get('visi-misi', [InformasiController::class, 'visiMisi'])->name('visi-misi');
    Route::get('struktur-organisasi', [InformasiController::class, 'strukturOrganisasi'])->name('struktur-organisasi');
});

// UMKM Routes
Route::prefix('umkm')->name('umkm.')->group(function () {
    Route::get('/', [UmkmController::class, 'index'])->name('index');
    Route::get('{umkm:slug}', [UmkmController::class, 'show'])->name('show');
});

// Gallery Routes
Route::prefix('galeri')->name('gallery.')->group(function () {
    Route::get('/', [GalleryController::class, 'index'])->name('index');
    Route::get('{gallery}', [GalleryController::class, 'show'])->name('show');
});

// Articles Routes
Route::prefix('artikel')->name('articles.')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('index');
    Route::get('{article:slug}', [ArticleController::class, 'show'])->name('show');
});

// Peta Route
Route::get('/peta', [PetaController::class, 'index'])->name('peta.index');

// Pengaduan Masyarakat Routes (publik)
Route::prefix('pengaduan')->name('pengaduan.')->group(function () {
    Route::get('/',       [PengaduanController::class, 'index'])  ->name('index');
    Route::post('/',      [PengaduanController::class, 'store'])  ->name('store');
    Route::get('/sukses', [PengaduanController::class, 'sukses']) ->name('sukses');
    Route::get('/cek',    [PengaduanController::class, 'cek'])    ->name('cek');
});

// ====================================
// ADMIN ROUTES
// ====================================

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // UMKM Management
    Route::resource('umkm', AdminUmkmController::class);

    // Gallery Management
    Route::resource('gallery', AdminGalleryController::class);

    // Articles Management
    Route::resource('articles', AdminArticleController::class);

    // Pengaduan Management (hanya index, show, update status, destroy)
    Route::resource('pengaduan', AdminPengaduanController::class)
         ->only(['index', 'show', 'update', 'destroy']);

    // Additional admin routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ====================================
// AUTH ROUTES
// ====================================

require __DIR__ . '/auth.php';