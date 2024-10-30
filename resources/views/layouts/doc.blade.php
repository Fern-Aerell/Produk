<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Produk') }}</title>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="flex flex-row w-screen h-screen overflow-hidden">
        <!-- SIDEBAR -->
        <div class="flex flex-col p-10 h-full min-w-[300px] bg-slate-100 border w-fit fixed lg:static overflow-y-auto">
            @yield('sidebar')
        </div>
        <!-- MAINBAR -->
        <div class="w-full">
            @yield('mainbar')
        </div>
    </div>
</body>

</html>