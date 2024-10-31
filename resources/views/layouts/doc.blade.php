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
        <div x-data="{ open: window.innerWidth >= 1024 }"
            x-init="$watch('open', () => { if (window.innerWidth < 1024) open = false; })"
            class="flex flex-row h-full bg-transparent fixed items-center lg:relative overflow-y-auto">

            <!-- Sidebar with Transition Width -->
            <div :class="open ? 'w-[300px] lg:w-[450px]' : 'w-0'"
                class="flex flex-col h-full bg-slate-100 border box-border overflow-hidden transition-all duration-300">
                <div class="p-10 h-full w-full" x-show="open">
                    @yield('sidebar')
                </div>
            </div>

            <!-- Toggle Button -->
            <button
                @click="open = !open"
                x-text="open ? '<' : '>'"
                class="bg-slate-100 h-fit py-10 px-1 font-bold border rounded-tr-lg rounded-br-lg">
            </button>
        </div>

        <!-- MAINBAR -->
        <div :class="{ 'ml-[300px] lg:ml-[450px]': open }"
            class="transition-all duration-300 w-full h-full">
            @yield('mainbar')
        </div>
    </div>

</body>

</html>