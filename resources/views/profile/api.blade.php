<x-app-layout :title="__('API')">
    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        <div class="max-w-xl">
            @include('profile.partials.generate-api-token-form')
        </div>
    </div>
</x-app-layout>
