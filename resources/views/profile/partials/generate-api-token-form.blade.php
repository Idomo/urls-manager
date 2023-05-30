<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('API Token') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Generate new API token') }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.api.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('PATCH')
        <div class="flex items-center gap-4 w-full">
            <x-primary-button>
                {{ __('Generate Token') }}
            </x-primary-button>
            @if(!empty($token))
                <div class="flex rounded-md shadow-sm border border-gray-600 group"
                     x-data="{token: '{{ $token }}', tokenCopied: false}">
                    <x-text-input readonly="readonly" :value="$token" class="px-4 py-1.5 rounded-l-md rounded-r-none"/>
                    <x-primary-button data-tooltip-target="tooltip-right" data-tooltip-placement="right" type="button"
                                      x-on:click="await navigator.clipboard.writeText(token); tokenCopied = true"
                                      class="px-2 rounded-l-none">
                        <x-majestic-clipboard-line x-show="!tokenCopied" class="text-white dark:text-gray-500"/>
                        <x-majestic-clipboard-check-line x-show="tokenCopied" class="text-white dark:text-gray-500"/>
                    </x-primary-button>

                    <div id="tooltip-right" role="tooltip"
                         x-text="tokenCopied ? 'Copied to clipboard' : 'Copy to clipboard'"
                         class="absolute z-10 invisible group-hover:visible group-hover:relative inline-block px-3 py-2.5 text-sm font-medium text-white bg-gray-800 rounded-lg shadow-sm opacity-0 transition-opacity  group-hover:opacity-100 tooltip dark:bg-gray-600">
                        Copy to clipboard
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>
            @endif
        </div>
        <p class="mt-2 p-2 rounded inline-block text-sm text-yellow-700 bg-yellow-100 dark:text-yellow-300 dark:bg-yellow-900">
            <b>{{ __('Warning!') }}</b>
            <br>
            {{ __('The token will be presented only once, so make sure to back it up in a safe place.') }}
        </p>
    </form>
</section>
