<x-app-layout :title="__('API')">
    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        <div class="max-w-xl">
            <header>
                <h2 class="text-lg font-medium text-blue-600 dark:text-blue-400 hover:underline">
                    <a href="{{ url('docs') }}">{{ __('API Documentation') }}</a>
                </h2>

                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Read the full documentation to understand how to use the API.') }}
                </p>
            </header>
        </div>
    </div>
    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        <div class="max-w-xl">
            @include('profile.partials.generate-api-token-form')
        </div>
    </div>
</x-app-layout>
