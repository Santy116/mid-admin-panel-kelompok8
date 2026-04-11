<header class="border-b border-slate-200 bg-[#f3f4f6] px-8 py-5 lg:px-10">
    <div class="flex items-center justify-between gap-4">
        <div>
            <h1 class="text-[52px] font-semibold leading-none text-slate-800">
                @yield('page_title', 'Dashboard')
            </h1>
        </div>

        <div class="flex items-center gap-4">
            <div class="relative hidden md:block">
                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-4.35-4.35m1.85-5.15a7 7 0 1 1-14 0a7 7 0 0 1 14 0Z" />
                    </svg>
                </span>

                <input
                    type="text"
                    placeholder="Search..."
                    class="w-[320px] rounded-xl border border-slate-200 bg-white py-4 pl-12 pr-4 text-[28px] leading-none text-slate-700 outline-none placeholder:text-slate-400"
                />
            </div>

            <div class="relative">
                <button type="button" class="relative flex h-12 w-12 items-center justify-center text-slate-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2a7 7 0 0 0-7 7v3.586L3.293 14.293A1 1 0 0 0 4 16h16a1 1 0 0 0 .707-1.707L19 12.586V9a7 7 0 0 0-7-7Zm0 20a3 3 0 0 0 2.995-2.824L15 19h-6a3 3 0 0 0 3 3Z"/>
                    </svg>

                    <span class="absolute -right-1 -top-1 flex h-6 min-w-[24px] items-center justify-center rounded-full bg-red-500 px-1 text-sm font-semibold text-white">
                        7
                    </span>
                </button>
            </div>

            <div class="flex items-center gap-3">
                <div class="flex h-12 w-12 items-center justify-center overflow-hidden rounded-full bg-slate-200 text-slate-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6.75a3.75 3.75 0 1 1-7.5 0a3.75 3.75 0 0 1 7.5 0ZM4.5 20.118a7.5 7.5 0 0 1 15 0A17.933 17.933 0 0 1 12 21.75a17.933 17.933 0 0 1-7.5-1.632Z" />
                    </svg>
                </div>

                <span class="hidden text-[28px] leading-none text-slate-800 lg:inline">
                    Santy Rahmawati
                </span>
            </div>
        </div>
    </div>
</header>