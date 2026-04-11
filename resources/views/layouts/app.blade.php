<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimarket Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#f3f4f6] text-slate-800">
    <div class="flex min-h-screen">
        @include('components.sidebar')

        <div class="flex min-h-screen min-w-0 flex-1 flex-col">
            @include('components.header')

            <main class="flex-1 px-8 py-8 lg:px-10">
                @yield('content')
            </main>

            @include('components.footer')
        </div>
    </div>
</body>
</html>