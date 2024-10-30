<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Produk @hasSection('subtitle') - @yield('subtitle') @endif
    </title>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex flex-row">
        <!-- SIDEBAR -->
        <div class="flex flex-col min-w-[300px] p-10 pr-16 bg-slate-50 border border-gray-300 overflow-x-hidden overflow-y-auto">
            @yield('sidebar')
        </div>
        <!-- MAINBAR -->
        <div class="quill-content w-full h-screen overflow-x-hidden overflow-y-auto bg-white p-10">
            <div class="max-w-5xl">
                @yield('mainbar')
            </div>
        </div>
    </div>
</body>

</html>