@extends('layouts.app')

@section('content')
    <section class="space-y-6">
        <div class="flex items-start justify-between gap-4">
            <div>
                <h2 class="text-[52px] font-bold leading-none text-slate-800">Laporan</h2>
            </div>

            <div class="flex items-center gap-3 rounded-xl bg-white px-4 py-2 shadow-sm">
                <div class="flex h-12 w-12 items-center justify-center overflow-hidden rounded-full bg-slate-100 text-slate-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6.75a3.75 3.75 0 1 1-7.5 0a3.75 3.75 0 0 1 7.5 0ZM4.5 20.118a7.5 7.5 0 0 1 15 0A17.933 17.933 0 0 1 12 21.75a17.933 17.933 0 0 1-7.5-1.632Z" />
                    </svg>
                </div>

                <div class="flex items-center gap-2">
                    <span class="text-[30px] leading-none text-slate-700">Santy Rahmawati</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="panel-card overflow-hidden">
            <div class="border-b border-slate-200 px-6 py-4">
                <h3 class="text-[34px] leading-none text-slate-700">Filter</h3>
            </div>

            <div class="space-y-6 px-6 py-6">
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-[220px_1fr_220px_140px] lg:items-center">
                    <label class="text-[30px] leading-none text-slate-700">Cabang</label>

                    <div class="relative">
                        <select class="input-search appearance-none pr-12 text-[28px] leading-none text-slate-500">
                            <option selected>Pilih Cabang</option>
                            <option>Minimarket A</option>
                            <option>Minimarket B</option>
                            <option>Minimarket C</option>
                            <option>Minimarket D</option>
                        </select>

                        <span class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4 text-slate-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m6 9 6 6 6-6" />
                            </svg>
                        </span>
                    </div>

                    <input type="text" class="input-search text-[28px] leading-none" placeholder="Tanggal Mulai" />

                    <button type="button" class="btn-secondary gap-2 text-[28px] leading-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V8.25A2.25 2.25 0 0 1 5.25 6h13.5A2.25 2.25 0 0 1 21 8.25v10.5M3 18.75A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75M3 18.75v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                        </svg>
                        Reset
                    </button>
                </div>

                <div class="grid grid-cols-1 gap-6 lg:grid-cols-[220px_1fr_1fr_140px] lg:items-center">
                    <label class="text-[30px] leading-none text-slate-700">Tanggal Mulai</label>

                    <input type="text" class="input-search text-[28px] leading-none" placeholder="yyyy-mm-dd" />
                    <input type="text" class="input-search text-[28px] leading-none" placeholder="yyyy-mm-dd" />

                    <div></div>
                </div>

                <div class="flex justify-end gap-4">
                    <button type="button" class="btn-primary min-w-[190px] text-[28px] leading-none">
                        Terapkan
                    </button>

                    <button type="button" class="btn-secondary min-w-[160px] text-[28px] leading-none">
                        Reset
                    </button>
                </div>
            </div>
        </div>

        <div class="panel-card overflow-hidden">
            <div class="border-b border-slate-200 px-6 py-4">
                <h3 class="text-[34px] leading-none text-slate-700">Daftar Laporan</h3>
            </div>

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