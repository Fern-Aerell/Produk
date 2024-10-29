@props(['id' => ''])

<div x-data="{ open: JSON.parse(localStorage.getItem('sidebarOpen{{ $id }}')) || false }" class="select-none">
    <p @click="open = !open; localStorage.setItem('sidebarOpen{{ $id }}', open)" class="font-semibold py-2 hover:cursor-pointer transition-all hover:ml-1">
        {{ $slot }}
    </p>

    <ul x-show="open" class="ml-6">
        {{ $submenu }}
    </ul>
</div>
