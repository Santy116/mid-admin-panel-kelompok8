<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $stats = [
            [
                'title' => 'Total Users',
                'value' => '120',
                'description' => 'User terdaftar',
            ],
            [
                'title' => 'Total Orders',
                'value' => '85',
                'description' => 'Pesanan bulan ini',
            ],
            [
                'title' => 'Revenue',
                'value' => 'Rp 12.5Jt',
                'description' => 'Pendapatan bulan ini',
            ],
            [
                'title' => 'Active Products',
                'value' => '32',
                'description' => 'Produk aktif',
            ],
        ];

        return view('pages.dashboard', compact('stats'));
    }
}