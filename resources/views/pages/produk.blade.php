@extends('layouts.app')

@section('page_title', 'Produk')

@section('content')
    <section class="space-y-6">
        <div class="flex items-start justify-between gap-4">
            <div>
                <h2 class="text-[52px] font-bold leading-none text-slate-800">Produk</h2>
            </div>

            <div>
                <button type="button" class="btn-primary gap-3 text-[28px] leading-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Tambah Produk
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
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Tanggal Ditambahkan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        <tr>
                            <td class="font-semibold text-slate-800">ID1</td>
                            <td>Indomie Goreng</td>
                            <td>Makanan</td>
                            <td>Rp 3,500</td>
                            <td>150</td>
                            <td>2026-04-10</td>
                            <td>
                                <div class="flex items-center justify-center gap-2">
                                    <button class="inline-flex items-center rounded-md bg-green-500 px-4 py-2 text-sm font-semibold text-white">
                                        Edit
                                    </button>
                                    <button class="inline-flex items-center rounded-md bg-red-500 px-3 py-2 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 7.5h12m-10.5 0v10.75A1.75 1.75 0 0 0 9.25 20h5.5a1.75 1.75 0 0 0 1.75-1.75V7.5M9.75 7.5V5.75c0-.966.784-1.75 1.75-1.75h1c.966 0 1.75.784 1.75 1.75V7.5" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="font-semibold text-slate-800">ID2</td>
                            <td>Aqua 600ml</td>
                            <td>Minuman</td>
                            <td>Rp 3,000</td>
                            <td>120</td>
                            <td>2026-04-09</td>
                            <td>
                                <div class="flex items-center justify-center gap-2">
                                    <button class="inline-flex items-center rounded-md bg-green-500 px-4 py-2 text-sm font-semibold text-white">
                                        Edit
                                    </button>
                                    <button class="inline-flex items-center rounded-md bg-red-500 px-3 py-2 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 7.5h12m-10.5 0v10.75A1.75 1.75 0 0 0 9.25 20h5.5a1.75 1.75 0 0 0 1.75-1.75V7.5M9.75 7.5V5.75c0-.966.784-1.75 1.75-1.75h1c.966 0 1.75.784 1.75 1.75V7.5" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="font-semibold text-slate-800">ID3</td>
                            <td>Sunlight Cair 800ml</td>
                            <td>Peralatan Rumah</td>
                            <td>Rp 15,000</td>
                            <td>80</td>
                            <td>2026-04-08</td>
                            <td>
                                <div class="flex items-center justify-center gap-2">
                                    <button class="inline-flex items-center rounded-md bg-green-500 px-4 py-2 text-sm font-semibold text-white">
                                        Edit
                                    </button>
                                    <button class="inline-flex items-center rounded-md bg-red-500 px-3 py-2 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 7.5h12m-10.5 0v10.75A1.75 1.75 0 0 0 9.25 20h5.5a1.75 1.75 0 0 0 1.75-1.75V7.5M9.75 7.5V5.75c0-.966.784-1.75 1.75-1.75h1c.966 0 1.75.784 1.75 1.75V7.5" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="font-semibold text-slate-800">ID4</td>
                            <td>Downy 900ml</td>
                            <td>Peralatan Rumah</td>
                            <td>Rp 25,000</td>
                            <td>60</td>
                            <td>2026-04-08</td>
                            <td>
                                <div class="flex items-center justify-center gap-2">
                                    <button class="inline-flex items-center rounded-md bg-green-500 px-4 py-2 text-sm font-semibold text-white">
                                        Edit
                                    </button>
                                    <button class="inline-flex items-center rounded-md bg-red-500 px-3 py-2 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 7.5h12m-10.5 0v10.75A1.75 1.75 0 0 0 9.25 20h5.5a1.75 1.75 0 0 0 1.75-1.75V7.5M9.75 7.5V5.75c0-.966.784-1.75 1.75-1.75h1c.966 0 1.75.784 1.75 1.75V7.5" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="font-semibold text-slate-800">ID5</td>
                            <td>Rinso Bubuk 1.8kg</td>
                            <td>Peralatan Rumah</td>
                            <td>Rp 35,000</td>
                            <td>40</td>
                            <td>2026-04-08</td>
                            <td>
                                <div class="flex items-center justify-center gap-2">
                                    <button class="inline-flex items-center rounded-md bg-green-500 px-4 py-2 text-sm font-semibold text-white">
                                        Edit
                                    </button>
                                    <button class="inline-flex items-center rounded-md bg-red-500 px-3 py-2 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 7.5h12m-10.5 0v10.75A1.75 1.75 0 0 0 9.25 20h5.5a1.75 1.75 0 0 0 1.75-1.75V7.5M9.75 7.5V5.75c0-.966.784-1.75 1.75-1.75h1c.966 0 1.75.784 1.75 1.75V7.5" />
                                        </svg>
                                    </button>
                                </div>
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
                    <button class="border-r border-slate-200 px-8 py-4 text-slate-600">Selanjutnya</button>
                    <button class="px-8 py-4 text-slate-600">Selanjutnya</button>
                </div>
            </div>
        </div>
    </section>
@endsection