<x-app-layout title="Dashboard">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Features
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('feature.add.view') }}"><x-primary-button>Add</x-primary-button></a>
            @foreach($features as $feature)
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-3">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex flex-row justify-between items-center">
                    ({{ $feature->produk->name }}) {{ $feature->name }}
                    <div class="flex flex-row gap-3">
                        <a href="{{ route('feature.edit.view', $feature->id) }}"><x-primary-button>Edit</x-primary-button></a>
                        <form method="post" action="{{ route('feature.delete', $feature->id) }}">
                            @csrf
                            @method('delete')
                            <x-danger-button>Delete</x-danger-button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>