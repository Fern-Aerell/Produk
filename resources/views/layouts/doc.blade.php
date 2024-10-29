<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Produk @hasSection('subtitle') - @yield('subtitle') @endif
    </title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex flex-row">
        <!-- SIDEBAR -->
        <div class="flex flex-col min-w-[300px] p-10 pr-16">
            @yield('sidebar')
        </div>
        <!-- MAINBAR -->
        <div class="w-full h-screen bg-slate-100 p-10">
            @yield('mainbar')
        </div>
    </div>
</body>

</html>