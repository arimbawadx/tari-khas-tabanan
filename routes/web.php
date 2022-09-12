<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\bannerAdminController;
use App\Http\Controllers\berandaPengunjungController;
use App\Http\Controllers\dashboardAdminController;
use App\Http\Controllers\fotoAdminController;
use App\Http\Controllers\kategoriAdminController;
use App\Http\Controllers\sanggarAdminController;
use App\Http\Controllers\sanggarPengunjungController;
use App\Http\Controllers\tarianAdminController;
use App\Http\Controllers\tarianPengunjungController;
use App\Http\Controllers\userAdminController;
use App\Http\Controllers\videoAdminController;

// test
// Route::get('/blank', function () {
// 	return view('admin.pages.blank');
// });

// ==========================================================Authentication============================================================
Route::get('/login', function () {
	return view('login');
});
Route::post('login-check', [authController::class, 'loginCheck']);
Route::get('/logout', [authController::class, 'logout']);
// ===========================================================End Authentication=====================================================


// =============================================================Admin=======================================================
Route::middleware(['SessionAdmin'])->group(function () {
	// --------------------------------------------------/data user-----------------------------------------------------------------
	Route::get('/admin/data-user', [userAdminController::class, 'index']);
	Route::post('/admin/data-user', [userAdminController::class, 'store']);
	Route::post('/admin/data-user/{id}', [userAdminController::class, 'update']);
	Route::get('/admin/data-user/{id}', [userAdminController::class, 'destroy']);

	// --------------------------------------------------/dashboard-----------------------------------------------------------------
	Route::get('/admin/dashboard', [dashboardAdminController::class, 'index']);

	// --------------------------------------------------/data sanggar-----------------------------------------------------------------
	Route::get('/admin/data-sanggar', [sanggarAdminController::class, 'index']);
	Route::post('/admin/data-sanggar', [sanggarAdminController::class, 'store']);
	Route::post('/admin/data-sanggar/{id}', [sanggarAdminController::class, 'update']);
	Route::get('/admin/data-sanggar/{id}', [sanggarAdminController::class, 'destroy']);

	// --------------------------------------------------/kategori tari---------------------------------------------------------------
	Route::get('/admin/kategori-tari', [kategoriAdminController::class, 'index']);
	Route::post('/admin/kategori-tari', [kategoriAdminController::class, 'store']);
	Route::post('/admin/kategori-tari/{id}', [kategoriAdminController::class, 'update']);
	Route::get('/admin/kategori-tari/{id}', [kategoriAdminController::class, 'destroy']);

	// --------------------------------------------------/tarian---------------------------------------------------------------
	Route::get('/admin/tarian', [tarianAdminController::class, 'index']);
	Route::post('/admin/tarian', [tarianAdminController::class, 'store']);
	Route::post('/admin/tarian/{id}', [tarianAdminController::class, 'update']);
	Route::get('/admin/tarian/{id}', [tarianAdminController::class, 'destroy']);

	// --------------------------------------------------/video---------------------------------------------------------------
	Route::get('/admin/video', [videoAdminController::class, 'index']);
	Route::post('/admin/video', [videoAdminController::class, 'store']);
	Route::post('/admin/video/{id}', [videoAdminController::class, 'update']);
	Route::get('/admin/video/{id}', [videoAdminController::class, 'destroy']);

	// --------------------------------------------------/foto---------------------------------------------------------------
	Route::get('/admin/foto', [fotoAdminController::class, 'index']);
	Route::post('/admin/foto', [fotoAdminController::class, 'store']);
	Route::post('/admin/foto/{id}', [fotoAdminController::class, 'update']);
	Route::get('/admin/foto/{id}', [fotoAdminController::class, 'destroy']);

	// --------------------------------------------------/banner---------------------------------------------------------------
	Route::get('/admin/banner', [bannerAdminController::class, 'index']);
	Route::post('/admin/banner', [bannerAdminController::class, 'store']);
	Route::post('/admin/banner/{id}', [bannerAdminController::class, 'update']);
	Route::get('/admin/banner/{id}', [bannerAdminController::class, 'destroy']);
});
// =============================================================End Admin=======================================================


// ========================================================Pengunjung=====================================================
// --------------------------------------------------/beranda-----------------------------------------------------------------
Route::get('/', [berandaPengunjungController::class, 'index']);

// --------------------------------------------------/tarian-----------------------------------------------------------------
Route::get('/tarian', [tarianPengunjungController::class, 'index'])->name('tarian');
Route::get('/tarian/{id}', [tarianPengunjungController::class, 'show']);
Route::get('/tarian/foto/{id}', [tarianPengunjungController::class, 'showFoto']);
Route::get('/tarian/video/{id}', [tarianPengunjungController::class, 'showVideo']);

Route::get('/informasi-sanggar', [sanggarPengunjungController::class, 'index']);
Route::get('/informasi-sanggar/{id}', [sanggarPengunjungController::class, 'show']);
// --------------------------------------------------/done-----------------------------------------------------------------


Route::get('/kategori-tarian', function () {
	return view('user.pages.kategori_tarian');
});

Route::get('/kategori-tarian-detail', function () {
	return view('user.pages.kategori_tarian_detail');
});

// =============================================================End Pengunjung=======================================================
