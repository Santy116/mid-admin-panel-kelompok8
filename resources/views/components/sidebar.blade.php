@php
    $currentRoute = Route::currentRouteName();

    $menuItems = [
        [
            'label' => 'Dashboard',
            'route' => 'dashboard',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24"><path d="M12 3l9 7h-3v10h-5v-6H11v6H6V10H3l9-7z"/></svg>',
        ],
        [
            'label' => 'Produk',
            'route' => 'produk',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2 3 7l9 5 9-5-9-5Zm-9 7v8l9 5 9-5V9l-9 5-9-5Z"/></svg>',
        ],
        [
            'label' => 'Stok Barang',
            'route' => 'stok-barang',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24"><path d="M7 4A3 3 0 0 0 4 7v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7a3 3 0 0 0-3-3h-2V3h-6v1H7Zm2 0h6v2H9V4Zm-3 5h12v9H6V9Z"/></svg>',
        ],
        [
            'label' => 'Transaksi',
            'route' => 'transaksi',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24"><path d="M3 4h2l2.2 9.2A2 2 0 0 0 9.15 15H18a2 2 0 0 0 1.94-1.5L22 6H7.42L6.96 4.65A1 1 0 0 0 6 4H3Zm6 13a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 .001 4A2 2 0 0 0 17 17Z"/></svg>',
        ],
        [
            'label' => 'Laporan',
            'route' => 'laporan',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24"><path d="M4 19h16v2H4v-2Zm2-2V9h3v8H6Zm5 0V5h3v12h-3Zm5 0v-6h3v6h-3Z"/></svg>',
        ],
        [
            'label' => 'Pegawai',
            'route' => 'pegawai',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm0 2c-4.33 0-8 2.17-8 5v1h16v-1c0-2.83-3.67-5-8-5Z"/></svg>',
        ],
    ];
@endphp

<aside class="sidebar-gradient flex min-h-screen w-[355px] flex-col text-white">
    <div class="border-b border-white/15 px-10 py-7">
        <div class="flex items-center gap-4">
            <div class="flex h-11 w-11 items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-11 w-11" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M3 7.5 12 3l9 4.5V9H3V7.5Zm1 2.5h2v7H4v-7Zm4 0h8v7H8v-7Zm10 0h2v7h-2v-7ZM2 19h20v2H2v-2Z"/>
                </svg>
            </div>

            <div class="flex items-baseline gap-2">
                <span class="text-[28px] font-bold leading-none">Minimarket</span>
                <span class="text-[24px] leading-none text-white/85">Admin</span>
            </div>
        </div>
    </div>

    <nav class="flex-1 px-3 py-6">
        <ul class="space-y-2">
            @foreach ($menuItems as $item)
                @php
                    $isActive = $currentRoute === $item['route'];
                @endphp

                <li>
                    <a href="{{ route($item['route']) }}"
                       class="{{ $isActive ? 'bg-white/10' : 'bg-transparent hover:bg-white/5' }} flex items-center gap-5 rounded-xl px-7 py-5 text-[22px] font-medium leading-none text-white transition">
                        <span class="shrink-0 text-white/95">{!! $item['icon'] !!}</span>
                        <span>{{ $item['label'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>

    <div class="px-3 pb-6">
        <div class="mb-4 border-t border-white/15"></div>

        <a href="{{ route('logout') }}"
           class="{{ $currentRoute === 'logout' ? 'bg-white/10' : 'bg-transparent hover:bg-white/5' }} flex items-center gap-5 rounded-xl px-7 py-5 text-[22px] font-medium leading-none text-white transition">
            <span class="shrink-0 text-white/95">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M11 2a9 9 0 1 0 8.94 10h-2.02A7 7 0 1 1 11 4v3l5-4-5-4v3Zm1 7v2h8V9h-8Z"/>
                </svg>
            </span>
            <span>Logout</span>
        </a>
    </div>
</aside>