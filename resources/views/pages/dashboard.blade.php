@extends('layouts.app')

@section('page_title', 'Dashboard')

@section('content')
    <section class="space-y-8">
        <div class="grid grid-cols-1 gap-5 xl:grid-cols-4">
            <div class="rounded-xl bg-gradient-to-r from-blue-500 to-blue-600 p-6 text-white shadow-sm">
                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-white/10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2 3 7l9 5 9-5-9-5Zm-9 7v8l9 5 9-5V9l-9 5-9-5Z"/>
                        </svg>
                    </div>

                    <div class="flex-1">
                        <p class="text-[22px] font-semibold leading-none">Total Produk</p>
                        <div class="my-4 h-px bg-white/30"></div>
                        <h3 class="text-[34px] font-bold leading-none">120</h3>
                    </div>
                </div>
            </div>

            <div class="rounded-xl bg-gradient-to-r from-emerald-500 to-emerald-600 p-6 text-white shadow-sm">
                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-white/10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3 4h2l2.2 9.2A2 2 0 0 0 9.15 15H18a2 2 0 0 0 1.94-1.5L22 6H7.42L6.96 4.65A1 1 0 0 0 6 4H3Zm6 13a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 .001 4A2 2 0 0 0 17 17Z"/>
                        </svg>
                    </div>

                    <div class="flex-1">
                        <p class="text-[22px] font-semibold leading-none">Total Transaksi</p>
                        <div class="my-4 h-px bg-white/30"></div>
                        <h3 class="text-[34px] font-bold leading-none">350</h3>
                    </div>
                </div>
            </div>

            <div class="rounded-xl bg-gradient-to-r from-orange-400 to-orange-500 p-6 text-white shadow-sm">
                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-white/10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2 1 21h22L12 2Zm1 15h-2v2h2v-2Zm0-8h-2v6h2V9Z"/>
                        </svg>
                    </div>

                    <div class="flex-1">
                        <p class="text-[22px] font-semibold leading-none">Stok Menipis</p>
                        <div class="my-4 h-px bg-white/30"></div>
                        <h3 class="text-[34px] font-bold leading-none">8 Item</h3>
                    </div>
                </div>
            </div>

            <div class="rounded-xl bg-gradient-to-r from-violet-500 to-violet-600 p-6 text-white shadow-sm">
                <div class="flex items-start gap-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-white/10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 1a5 5 0 0 0-5 5v1H6a2 2 0 0 0-2 2v2c0 3.53 2.61 6.43 6 6.92V20H8v2h8v-2h-2v-2.08c3.39-.49 6-3.39 6-6.92V9a2 2 0 0 0-2-2h-1V6a5 5 0 0 0-5-5Zm-3 6V6a3 3 0 0 1 6 0v1H9Zm3 6.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3ZM11 18h2v2h-2v-2Z"/>
                        </svg>
                    </div>

                    <div class="flex-1">
                        <p class="text-[22px] font-semibold leading-none">Total Pendapatan</p>
                        <div class="my-4 h-px bg-white/30"></div>
                        <h3 class="text-[34px] font-bold leading-none">Rp 75,000,000</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-card overflow-hidden">
            <div class="border-b border-slate-200 px-6 py-5">
                <h3 class="text-[28px] font-semibold leading-none text-slate-700">Riwayat Transaksi Terbaru</h3>
            </div>

            <div class="overflow-x-auto p-5">
                <table class="panel-table min-w-full overflow-hidden rounded-lg border border-slate-200">
                    <thead>
                        <tr>
                            <th>ID Transaksi</th>
                            <th>Pembeli</th>
                            <th>Tanggal</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        <tr>
                            <td class="font-semibold text-slate-800">#TRX001</td>
                            <td>Budi Santoso</td>
                            <td>2026-04-10</td>
                            <td class="font-semibold text-slate-800">Rp 1,200,000</td>
                            <td>
                                <span class="badge-success">Selesai</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="font-semibold text-slate-800">#TRX002</td>
                            <td>Siti Aisyah</td>
                            <td>2026-04-09</td>
                            <td class="font-semibold text-slate-800">Rp 850,000</td>
                            <td>
                                <span class="inline-flex items-center rounded-md bg-yellow-400 px-4 py-2 text-[16px] font-semibold leading-none text-black">
                                    Pending
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td class="font-semibold text-slate-800">#TRX003</td>
                            <td>Andi Wijaya</td>
                            <td>2026-04-08</td>
                            <td class="font-semibold text-slate-800">Rp 950,000</td>
                            <td>
                                <span class="badge-success">Selesai</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection