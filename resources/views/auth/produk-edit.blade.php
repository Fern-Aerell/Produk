<x-guest-layout>
    <form method="POST" action="{{ route('produk.update') }}">
        @csrf

        <input type="number" name="id" value="{{ $produk->id }}" hidden>

        <!-- Name -->
        <div>
            <x-input-label for="name" value="Product name" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $produk->name }}" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Route -->
        <div class="mt-4">
            <x-input-label for="route" value="Product route name" />
            <x-text-input id="route" class="block mt-1 w-full" type="text" name="route" value="{{ $produk->route }}" required autofocus autocomplete="route" />
            <x-input-error :messages="$errors->get('route')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('produks') }}">Back</a>

            <x-primary-button class="ms-4">Update</x-primary-button>
        </div>
    </form>
</x-guest-layout>
