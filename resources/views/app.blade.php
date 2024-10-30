@extends('layouts.doc')

@section('sidebar')
<!-- LOGO AND TITLE -->
<a class="flex flex-row gap-3 items-center" href="{{ route('app') }}">
    <x-app-logo />
    <h1 class="text-[30px] font-bold text-red-500">Produk</h1>
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
        {!! $content !!}
    @endif
@endsection