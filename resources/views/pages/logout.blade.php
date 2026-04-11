@extends('layouts.app')

@section('page_title', 'Logout')

@section('content')
    <section class="flex min-h-[60vh] items-center justify-center">
        <div class="panel-card w-full max-w-2xl px-8 py-10 text-center">
            <h2 class="text-[44px] font-bold leading-none text-slate-800">Logout</h2>
            <p class="mt-4 text-lg text-slate-500">
                Halaman logout placeholder sudah tersedia agar navigasi tidak error saat dibuka.
            </p>

            <div class="mt-8 flex items-center justify-center gap-4">
                <a href="{{ route('dashboard') }}" class="btn-primary min-w-[180px]">
                    Kembali ke Dashboard
                </a>
                <button type="button" class="btn-secondary min-w-[180px]">
                    Keluar
                </button>
            </div>
        </div>
    </section>
@endsection