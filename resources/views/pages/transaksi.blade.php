@extends('layouts.app')

@section('content')
    <section class="space-y-6">
        <div class="flex items-start justify-between gap-4">
            <div>
                <h2 class="text-[52px] font-bold leading-none text-slate-800">Transaksi</h2>
            </div>

            <div class="flex items-center gap-3">
                <button type="button" class="btn-secondary gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 4h18l-7 8v6l-4 2v-8L3 4z" />
                    </svg>
                    Filter
                </button>

                <button type="button" class="btn-primary">
                    Bersihkan
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
            <div class="relative">
                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-4.35-4.35m1.85-5.15a7 7 0 1 1-14 0a7 7 0 0 1 14 0Z" />
                    </svg>
                </span>
                <input type="text" class="input-search pl-12" placeholder="Search..." />
            </div>

            <div class="relative">
                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-4.35-4.35m1.85-5.15a7 7 0 1 1-14 0a7 7 0 0 1 14 0Z" />
                    </svg>
                </span>
                <input type="text" class="input-search pl-12" placeholder="Search..." />
            </div>
        </div>

        <div class="panel-card overflow-hidden">
            <div class="overflow-x-auto">
                <table class="panel-table min-w-full">
                    <thead>
                        <tr>
                            <th>ID Transaksi</th>
                            <th>Pembeli</th>
                            <th>Cabang</th>
                            <th>Tanggal</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr>
                            <td class="font-semibold text-slate-800">#TRX001</td>
                            <td>Budi Santoso</td>
                            <td>Minimarket A</td>
                            <td>2026-04-10</td>
                            <td class="font-semibold text-slate-800">Rp 1,200,000</td>
                            <td>
                                <span class="badge-success">Selesai</span>
                            </td>
                            <td class="text-center">
                                <button class="btn-primary px-6 py-2.5">Detail</button>
                            </td>
                        </tr>

                        <tr>
                            <td class="font-semibold text-slate-800">#TRX002</td>
                            <td>Siti Aisyah</td>
                            <td>Minimarket B</td>
                            <td>2026-04-09</td>
                            <td class="font-semibold text-slate-800">Rp 850,000</td>
                            <td>
                                <span class="badge-warning">Pending</span>
                            </td>
                            <td class="text-center">
                                <button class="btn-primary px-6 py-2.5">Detail</button>
                            </td>
                        </tr>

                        <tr>
                            <td class="font-semibold text-slate-800">#TRX003</td>
                            <td>Andi Wijaya</td>
                            <td>Minimarket A</td>
                            <td>2026-04-08</td>
                            <td class="font-semibold text-slate-800">Rp 950,000</td>
                            <td>
                                <span class="badge-success">Selesai</span>
                            </td>
                            <td class="text-center">
                                <button class="btn-primary px-6 py-2.5">Detail</button>
                            </td>
                        </tr>

                        <tr>
                            <td class="font-semibold text-slate-800">#TRX004</td>
                            <td>Anisa Putri</td>
                            <td>Minimarket C</td>
                            <td>2026-04-07</td>
                            <td class="font-semibold text-slate-800">Rp 1,100,000</td>
                            <td>
                                <span class="badge-danger">Dibatalkan</span>
                            </td>
                            <td class="text-center">
                                <button class="btn-primary px-6 py-2.5">Detail</button>
                            </td>
                        </tr>

                        <tr>
                            <td class="font-semibold text-slate-800">#TRX005</td>
                            <td>Fajar Hidayat</td>
                            <td>Minimarket D</td>
                            <td>2026-04-07</td>
                            <td class="font-semibold text-slate-800">Rp 1,500,000</td>
                            <td>
                                <span class="badge-success">Selesai</span>
                            </td>
                            <td class="text-center">
                                <button class="btn-primary px-6 py-2.5">Detail</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="flex flex-col items-center justify-between gap-4 border-t border-slate-200 px-6 py-5 text-slate-500 sm:flex-row">
                <span class="text-[34px] leading-none tracking-tight">Sebelumnya</span>

                <div class="flex flex-wrap items-center gap-0 overflow-hidden rounded-lg border border-slate-200 bg-white text-[34px] leading-none tracking-tight">
                    <button class="border-r border-slate-200 px-6 py-4 text-slate-600">1</button>
                    <button class="border-r border-slate-200 bg-slate-50 px-6 py-4 font-semibold text-blue-500">2</button>
                    <button class="border-r border-slate-200 px-6 py-4 text-slate-600">3</button>
                    <button class="border-r border-slate-200 px-6 py-4 text-slate-600">3</button>
                    <button class="border-r border-slate-200 px-8 py-4 text-slate-600">Selanjutnya</button>
                    <button class="px-8 py-4 text-slate-600">Selanjutnya</button>
                </div>
            </div>
        </div>
    </section>
@endsection