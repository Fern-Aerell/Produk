<x-guest-layout>
    <form method="POST" action="{{ route('feature.update') }}">
        @csrf

        <input type="number" name="id" value="{{ $feature->id }}" hidden>

        <!-- Produk -->
        <div>
            <x-input-label for="produk_id" value="Product name" />
            <select class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" name="produk_id" id="produk_id" required autofocus autocomplete="produk_id">
                @foreach($produks as $produk)
                    <option selected="{{ $produk->id == $feature->produk->id }}" value="{{ $produk->id }}">{{ $produk->name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('produk_id')" class="mt-2" />
        </div>

        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name" value="Feature name" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $feature->name }}" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Route -->
        <div class="mt-4">
            <x-input-label for="route" value="Feature route name" />
            <x-text-input id="route" class="block mt-1 w-full" type="text" name="route" value="{{ $feature->route }}" required autofocus autocomplete="route" />
            <x-input-error :messages="$errors->get('route')" class="mt-2" />
        </div>

        <!-- Content -->
        <div class="mt-4">
            <x-input-label for="content" value="Feature content" />
            <x-text-input id="content" class="block mt-1 w-full" type="text" name="content" value="{{ $feature->content }}" required autofocus autocomplete="content" />
            <x-input-error :messages="$errors->get('content')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('features') }}">Back</a>

            <x-primary-button class="ms-4">Update</x-primary-button>
        </div>
    </form>
</x-guest-layout>
