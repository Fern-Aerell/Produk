@extends('layouts.feature-editor')

@section('content')
<!-- Include stylesheet -->
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />

<form method="POST" action="{{ route('feature.add') }}">
    @csrf

    <!-- Produk -->
    <div>
        <x-input-label for="produk_id" value="Product name" />
        <select class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" name="produk_id" id="produk_id" required autofocus autocomplete="produk_id">
            @foreach($produks as $produk)
            <option value="{{ $produk->id }}">{{ $produk->name }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('produk_id')" class="mt-2" />
    </div>

    <!-- Name -->
    <div class="mt-4">
        <x-input-label for="name" value="Feature name" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Route -->
    <div class="mt-4">
        <x-input-label for="route" value="Feature route name" />
        <x-text-input id="route" class="block mt-1 w-full" type="text" name="route" :value="old('route')" required autofocus autocomplete="route" />
        <x-input-error :messages="$errors->get('route')" class="mt-2" />
    </div>

    <!-- Content -->
    <div class="mt-4">
        <x-input-label for="content" value="Feature content" />
        <div class="bg-white">
            <div id="toolbar-container">
                <!-- Quill Toolbar -->
                <span class="ql-formats">
                    <select class="ql-font"></select>
                    <select class="ql-size"></select>
                </span>
                <span class="ql-formats">
                    <button class="ql-bold"></button>
                    <button class="ql-italic"></button>
                    <button class="ql-underline"></button>
                    <button class="ql-strike"></button>
                </span>
                <span class="ql-formats">
                    <select class="ql-color"></select>
                    <select class="ql-background"></select>
                </span>
                <span class="ql-formats">
                    <button class="ql-script" value="sub"></button>
                    <button class="ql-script" value="super"></button>
                </span>
                <span class="ql-formats">
                    <button class="ql-header" value="1"></button>
                    <button class="ql-header" value="2"></button>
                    <button class="ql-blockquote"></button>
                    <button class="ql-code-block"></button>
                </span>
                <span class="ql-formats">
                    <button class="ql-list" value="ordered"></button>
                    <button class="ql-list" value="bullet"></button>
                    <button class="ql-indent" value="-1"></button>
                    <button class="ql-indent" value="+1"></button>
                </span>
                <span class="ql-formats">
                    <button class="ql-direction" value="rtl"></button>
                    <select class="ql-align"></select>
                </span>
                <span class="ql-formats">
                    <button class="ql-link"></button>
                    <button class="ql-image"></button>
                    <button class="ql-video"></button>
                    <button class="ql-formula"></button>
                </span>
                <span class="ql-formats">
                    <button class="ql-clean"></button>
                </span>
            </div>

            <div id="editor-container" class="!min-h-[300px]"></div>
            <!-- Hidden input untuk konten Quill Editor -->
            <input type="hidden" name="content" id="content">
        </div>
        <x-input-error :messages="$errors->get('content')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('features') }}">Back</a>

        <x-primary-button class="ms-4">Add</x-primary-button>
    </div>
</form>

<!-- Include the Quill library -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
    const quill = new Quill('#editor-container', {
        theme: 'snow',
        modules: {
            toolbar: '#toolbar-container'
        }
    });

    // Set isi dari editor Quill ke dalam hidden input sebelum submit
    const form = document.querySelector('form');
    form.onsubmit = () => {
        document.querySelector('input[name=content]').value = quill.root.innerHTML;
    };
</script>
@endsection