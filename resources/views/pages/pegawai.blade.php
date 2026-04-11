@extends('layouts.app')

@section('page_title', 'Pegawai')

@section('content')
    <section class="space-y-6">
        <div class="flex items-start justify-between gap-4">
            <div>
                <h2 class="text-[52px] font-bold leading-none text-slate-800">Pegawai</h2>
            </div>

            <div>
                <button type="button" class="btn-primary gap-3 text-[28px] leading-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Tambah Pegawai
                </button>
            </div>
        </div>

        <div class="panel-card overflow-hidden">
            <div class="border-b border-slate-200 px-6 py-5">
                <h3 class="text-[28px] font-semibold leading-none text-slate-700">Daftar Pegawai</h3>
            </div>

            <div class="overflow-x-auto">
                <table class="panel-table min-w-full">
                    <thead>
                        <tr>
                            <th>ID Pegawai</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Shift</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr>
                            <td class="font-semibold text-slate-800">PGW001</td>
                            <td>Santy Rahmawati</td>
                            <td>Supervisor</td>
                            <td>Pagi</td>
                            <td><span class="badge-success">Aktif</span></td>
                        </tr>
                        <tr>
                            <td class="font-semibold text-slate-800">PGW002</td>
                            <td>Budi Santoso</td>
                            <td>Kasir</td>
                            <td>Siang</td>
                            <td><span class="badge-success">Aktif</span></td>
                        </tr>
                        <tr>
                            <td class="font-semibold text-slate-800">PGW003</td>
                            <td>Siti Aisyah</td>
                            <td>Gudang</td>
                            <td>Malam</td>
                            <td><span class="badge-warning">Cuti</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection