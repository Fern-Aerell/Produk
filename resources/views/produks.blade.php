<x-app-layout title="Dashboard">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Products
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('produk.add') }}"><x-primary-button>Add</x-primary-button></a>
            @foreach($produks as $produk)
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-3">
                    <div class="p-6 text-gray-900 dark:text-gray-100 flex flex-row justify-between">
                        {{ $produk->name }}
                        <div class="flex flex-row gap-3">
                            <x-primary-button>Edit</x-primary-button>
                            <x-danger-button>Delete</x-danger-button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>