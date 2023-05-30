<x-app-layout :title="__('Edit URL')">
    <div class="mx-auto sm:max-w-md  dark:bg-gray-800">
        <form method="POST" action="{{ route('urls.update', $url['id']) }}">
            @csrf
            @method('PUT')

            <!-- Expanded URL -->
            <div>
                <x-input-label for="expanded" :value="__('Expanded URL')"/>
                <x-text-input id="expanded" class="block mt-1 w-full" type="text" name="expanded"
                              :value="old('expanded', $url['expanded'])" required autofocus autocomplete="off"/>
                <x-input-error :messages="$errors->get('expanded')" class="mt-2"/>
            </div>

            <!-- Shortened URL -->
            <div class="mt-4"
                 x-data="{shortened: '{{ old('shortened', $url['shortened']) }}', async generateShortened(){this.shortened = (await (await fetch('/api/urls/generate')).json()).shortened}}">
                <x-input-label for="shortened" :value="__('Shortened URL')" class="mb-1"/>
                <x-text-input-left-addon :addonValue="url('/') . '/'" id="shortened" class="block w-full" type="text"
                                         name="shortened" x-model="shortened" required autocomplete="off">
                    <!-- Generate shortened -->
                    <div class="group">
                        <button x-on:click="generateShortened()" data-tooltip-target="tooltip-right" data-tooltip-placement="right" type="button"
                                class="text-blue-700 hover:text-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center dark:text-blue-600 dark:hover:text-blue-700 dark:focus:ring-blue-800">
                            <x-majestic-reload-circle-line/>
                        </button>

                        <div id="tooltip-right" role="tooltip"
                             class="absolute z-10 invisible group-hover:visible inline-block px-3 py-2.5 text-sm font-medium text-white bg-gray-800 rounded-lg shadow-sm opacity-0 transition-opacity  group-hover:opacity-100 tooltip dark:bg-gray-600">
                            Generate
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                </x-text-input-left-addon>
                <x-input-error :messages="$errors->get('shortened')" class="mt-2"/>
            </div>

            <div class="flex items-center mt-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
