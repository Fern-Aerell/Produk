@extends('layouts.doc')

@section('sidebar')
<!-- LOGO AND TITLE -->
<a class="flex flex-row gap-3 w-full items-center" href="{{ route('app') }}">
    <x-app-logo />
    <h1 class="text-[30px] font-bold text-red-500 truncate">{{ config('app.name', 'Produk') }}</h1>
</a>
<!-- MENU -->
<x-sidebar-menu-container>
    @foreach($produks as $produk)
    <x-sidebar-menu id="{{ $produk->id }}">
        {{$produk->name}}
        @slot('submenu')
        @foreach($produk->features as $feature)
        <x-sidebar-submenu
            href="{{ route('app.produk.feature', [$produk->route, $feature->route]) }}"
            :activate=" request()->routeIs('app.produk.feature') &&
            request()->route('produk') === $produk->route &&
            request()->route('feature') === $feature->route">{{ $feature->name }}</x-sidebar-submenu>
        @endforeach
        @endslot
    </x-sidebar-menu>
    @endforeach
</x-sidebar-menu-container>
@endsection

@section('mainbar')
    @if($content)
        <iframe id="rich-text-content" class="w-full h-full" frameborder="0"></iframe>
        <script>
            const content = `{!! $content !!}`;
            const iframe = document.getElementById('rich-text-content').contentDocument;

            iframe.open();
            iframe.write(`
                <link rel="stylesheet" href="/tinymce/skins/content/default/content.min.css">
                <link rel="stylesheet" href="/tinymce/skins/ui/oxide/content.min.css">
                <body style="padding:2.5rem;">
                    <div style="max-width: 64rem;">${content}</div>
                </body>
            `);
            iframe.close();
        </script>
    @endif
@endsection