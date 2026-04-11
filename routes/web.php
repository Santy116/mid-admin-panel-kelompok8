<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/produk', 'produk')->name('produk');
    Route::get('/stok-barang', 'stokBarang')->name('stok-barang');
    Route::get('/transaksi', 'transaksi')->name('transaksi');
    Route::get('/laporan', 'laporan')->name('laporan');
    Route::get('/pegawai', 'pegawai')->name('pegawai');
    Route::get('/logout', 'logout')->name('logout');
});