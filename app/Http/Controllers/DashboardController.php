<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DashboardController extends Controller
{
    public function dashboard(): View
    {
        return view('pages.dashboard');
    }

    public function produk(): View
    {
        return view('pages.produk');
    }

    public function stokBarang(): View
    {
        return view('pages.stok-barang');
    }

    public function transaksi(): View
    {
        return view('pages.transaksi');
    }

    public function laporan(): View
    {
        return view('pages.laporan');
    }

    public function pegawai(): View
    {
        return view('pages.pegawai');
    }

    public function logout(): View
    {
        return view('pages.logout');
    }
}