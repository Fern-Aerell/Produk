<x-app-layout title="{{ $title }}" subtitle="Settings">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Settings
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Logo Setting -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                Logo
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                You can set the website logo.
                            </p>
                        </header>

                        <form method="post" action="" class="mt-6 space-y-6">
                            @csrf
                            <div>
                                <div class="mb-4">
                                    <input type="file" name="logo" id="logo" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border file:border-gray-300 file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100 focus:file:outline-none focus:file:ring-2 focus:file:ring-blue-500 focus:file:border-blue-500" />
                                    <x-input-error class="mt-2" :messages="$errors->get('logo')" />
                                </div>

                                <div class="flex items-center gap-4">
                                    <x-primary-button>Save</x-primary-button>

                                    @if (session('status') === 'logo-updated')
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600 dark:text-gray-400">Saved.</p>
                                    @endif
                                </div>
                        </form>
                    </section>
                </div>
            </div>
            <!-- Title Setting -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-5">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                Title
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                You can set the website title.
                            </p>
                        </header>

                        <form method="post" action="{{ route('setting.title.update') }}" class="mt-6 space-y-6">
                            @csrf
                            <div>
                                <div class="mb-4">
                                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" value="{{ $title }}" required autofocus autocomplete="title" />
                                    <x-input-error class="mt-2" :messages="$errors->get('title')" />
                                </div>

                                <div class="flex items-center gap-4">
                                    <x-primary-button>Save</x-primary-button>

                                    @if (session('status') === 'title-updated')
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600 dark:text-gray-400">Saved.</p>
                                    @endif
                                </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>