<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

// index adalah method di PelangganController
Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\PelangganController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\PelangganController::class, 'store']);
Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\PelangganController::class, 'edit']);
Route::put('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'destroy']);

// index adalah method di PaketController
Route::get('/paket', [App\Http\Controllers\PaketController::class, 'index']);
Route::get('/paket/create', [App\Http\Controllers\PaketController::class, 'create']);
Route::post('/paket', [App\Http\Controllers\PaketController::class, 'store']);
Route::get('/paket/{id}/edit', [App\Http\Controllers\PaketController::class, 'edit']);
Route::put('/paket/{id}', [App\Http\Controllers\PaketController::class, 'update']);
Route::delete('/paket/{id}', [App\Http\Controllers\PaketController::class, 'destroy']);

// index adalah method di PemesananController
Route::get('/pemesanan', [App\Http\Controllers\PemesananController::class, 'index']);
Route::get('/pemesanan/create', [App\Http\Controllers\PemesananController::class, 'create']);
Route::post('/pemesanan', [App\Http\Controllers\PemesananController::class, 'store']);
Route::get('/pemesanan/{id}/edit', [App\Http\Controllers\PemesananController::class, 'edit']);
Route::put('/pemesanan/{id}', [App\Http\Controllers\PemesananController::class, 'update']);
Route::delete('/pemesanan/{id}', [App\Http\Controllers\PemesananController::class, 'destroy']);






