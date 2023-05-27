<x-app-layout :title="__('Create URL')">
    <div class="mx-auto sm:max-w-md  dark:bg-gray-800">
        <form method="POST" action="{{ route('urls.store') }}">
            @csrf

            <!-- Expanded URL -->
            <div>
                <x-input-label for="expanded" :value="__('Expanded URL')"/>
                <x-text-input id="expanded" class="block mt-1 w-full" type="text" name="expanded"
                              :value="old('expanded')" required autofocus autocomplete="off"/>
                <x-input-error :messages="$errors->get('expanded')" class="mt-2"/>
            </div>

            <!-- Shortened URL -->
            <div class="mt-4">
                <x-input-label for="shortened" :value="__('Shortened URL')" class="mb-1"/>
                <x-text-input-left-addon :addonValue="url('/') . '/'" id="shortened" class="block w-full" type="text"
                                         name="shortened" :value="old('shortened')" required autocomplete="off"/>
                <x-input-error :messages="$errors->get('shortened')" class="mt-2"/>
            </div>

            <div class="flex items-center mt-4">
                <x-primary-button>{{ __('Create') }}</x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
