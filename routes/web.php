<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\videoAdminController;

// ==========================================================Authentication============================================================
Route::get('/login', function () {
	return view('login');
});
Route::post('login-check', [authController::class, 'loginCheck']);
Route::get('/logout', [authController::class, 'logout']);
// ===========================================================End Authentication=========================================================

// =============================================================Admin=======================================================
Route::get('/blank', function () {
	return view('admin.pages.blank');
});
Route::get('/admin/dashboard', function () {
	return view('admin.pages.Dashboard');
});
Route::get('/admin/data-user', function () {
	return view('admin.pages.DataUser');
});
Route::get('/admin/data-sanggar', function () {
	return view('admin.pages.DataSanggar');
});
Route::get('/admin/kategori-tari', function () {
	return view('admin.pages.DataKategoriTari');
});
Route::get('/admin/tarian', function () {
	return view('admin.pages.DataTarian');
});
Route::get('/admin/video', function () {
	return view('admin.pages.DataVideo');
});
Route::post('/admin/upload-video', [videoAdminController::class, 'store']);
Route::get('/admin/foto', function () {
	return view('admin.pages.DataFoto');
});
// =============================================================End Admin=======================================================


// ========================================================User=====================================================
Route::get('/', function () {
	return view('user.pages.beranda');
});

Route::get('/informasi-sanggar', function () {
	return view('user.pages.informasi_sanggar');
});

Route::get('/informasi-sanggar-detail', function () {
	return view('user.pages.informasi_sanggar_detail');
});

Route::get('/kategori-tarian', function () {
	return view('user.pages.kategori_tarian');
});

Route::get('/kategori-tarian-detail', function () {
	return view('user.pages.kategori_tarian_detail');
});

Route::get('/tarian', function () {
	return view('user.pages.tarian');
})->name('tarian');

Route::get('/tarian-detail', function () {
	return view('user.pages.tarian_detail');
})->name('tarian');

Route::get('/tarian-foto', function () {
	return view('user.pages.tarian_foto');
})->name('tarian');

Route::get('/tarian-video', function () {
	return view('user.pages.tarian_video');
})->name('tarian');
// =============================================================End User=======================================================
