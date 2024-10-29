@extends('layouts.doc')

@section('sidebar')
<x-app-logo />
<x-sidebar-menu-container>
    <x-sidebar-menu>
        Garuda Kasir
        @slot('submenu')
        <x-sidebar-submenu-activate>Installation</x-sidebar-submenu-activate>
        <x-sidebar-submenu>Configurasi</x-sidebar-submenu>
        <x-sidebar-submenu>Directory Structure</x-sidebar-submenu>
        @endslot
    </x-sidebar-menu>
</x-sidebar-menu-container>
@endsection

@section('mainbar')
<h1 class="text-4xl font-semibold">Installation</h1>
@endsection