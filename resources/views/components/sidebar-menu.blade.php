<div x-data="{ open: false }" class="select-none">
    <p @click="open = !open" class="font-semibold py-2 hover:cursor-pointer transition-all hover:ml-1">
        {{ $slot }}
    </p>

    <ul x-show="open" class="ml-6">
        {{ $submenu }}
    </ul>
</div>
