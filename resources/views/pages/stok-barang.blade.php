@extends('layouts.app')

@section('page_title', 'Stok Barang')

@section('content')
    <section class="space-y-6">
        <div class="flex items-start justify-between gap-4">
            <div>
                <h2 class="text-[52px] font-bold leading-none text-slate-800">Stok Barang</h2>
            </div>

            <div>
                <button type="button" class="btn-primary gap-3 text-[28px] leading-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h18M6 12h12M10 19h4" />
                    </svg>
                    Filter
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
                            <th>ID Produk</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Stok Saat Ini</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        <tr>
                            <td class="font-semibold text-slate-800">ID1</td>
                            <td>Indomie Goreng</td>
                            <td>Makanan</td>
                            <td>150</td>
                            <td>
                                <span class="badge-success">Aman</span>
                            </td>
                            <td class="text-center">
                                <button class="btn-primary px-6 py-2.5">Riwayat</button>
                            </td>
                        </tr>

                        <tr>
                            <td class="font-semibold text-slate-800">ID2</td>
                            <td>Aqua 600ml</td>
                            <td>Minuman</td>
                            <td>120</td>
                            <td>
                                <span class="badge-success">Aman</span>
                            </td>
                            <td class="text-center">
                                <button class="btn-primary px-6 py-2.5">Riwayat</button>
                            </td>
                        </tr>

                        <tr>
                            <td class="font-semibold text-slate-800">ID3</td>
                            <td>Sunlight Cair 800ml</td>
                            <td>Peralatan Rumah</td>
                            <td>20</td>
                            <td>
                                <span class="badge-warning">Hampir Habis</span>
                            </td>
                            <td class="text-center">
                                <button class="btn-primary px-6 py-2.5">Riwayat</button>
                            </td>
                        </tr>

                        <tr>
                            <td class="font-semibold text-slate-800">ID4</td>
                            <td>Downy 900ml</td>
                            <td>Peralatan Rumah</td>
                            <td>5</td>
                            <td>
                                <span class="badge-danger">Habis</span>
                            </td>
                            <td class="text-center">
                                <button class="btn-primary px-6 py-2.5">Riwayat</button>
                            </td>
                        </tr>

                        <tr>
                            <td class="font-semibold text-slate-800">ID5</td>
                            <td>Rinso Bubuk 1.8kg</td>
                            <td>Peralatan Rumah</td>
                            <td>40</td>
                            <td>
                                <span class="badge-success">Aman</span>
                            </td>
                            <td class="text-center">
                                <button class="btn-primary px-6 py-2.5">Riwayat</button>
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
                    <button class="border-r border-slate-200 px-6 py-4 text-slate-600">2</button>
                    <button class="border-r border-slate-200 px-6 py-4 text-slate-600">3</button>
                    <button class="px-8 py-4 text-slate-600">Selanjutnya</button>
                </div>
            </div>
        </div>
    </section>
@endsection