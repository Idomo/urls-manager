<x-app-layout :title="__('Your URLs')">
    @if(!empty($urls))
        <div class="flex items-center">
            <!-- Create URL button -->
            <a href="{{ route('urls.create') }}" class="flex-none pr-4">
                <x-primary-button>
                    <x-majestic-plus-line class="mr-1"/> {{ __('Create URL') }}
                </x-primary-button>
            </a>

            @if(request()->has('s'))
                <!-- Search reset -->
                <a href="{{ route('urls.index') }}" title="Reset Search" class="group">
                    <button data-tooltip-target="tooltip-right" data-tooltip-placement="right" type="button"
                        class="text-blue-700 hover:text-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center dark:text-blue-600 dark:hover:text-blue-700 dark:focus:ring-blue-800">
                        <x-majestic-reload-circle-line/>
                    </button>

                    <div id="tooltip-right" role="tooltip"
                         class="absolute z-10 invisible group-hover:visible inline-block px-3 py-2.5 text-sm font-medium text-white bg-gray-800 rounded-lg shadow-sm opacity-0 transition-opacity  group-hover:opacity-100 tooltip dark:bg-gray-600">
                        Reset Search
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </a>
            @endif

            <!-- SearchBar -->
            <form action="{{ route('urls.index') }}" method="GET" class="flex-1 pl-1">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="search" id="search" name="s" value="{{ request()->query('s') }}"
                           class="block w-full p-2.5 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Search by url or ID...">
                    <button type="submit"
                            class="text-white absolute right-2.5 bottom-1.5 top-1.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Search
                    </button>
                </div>
            </form>
        </div>

        @if(count($urls))
            <div x-data="{url: '', setUrl(newUrl){this.url = newUrl}}" class="overflow-x-auto">
                <!-- URLs table -->
                <table class="mt-4 border-collapse table-auto w-full">
                    <x-table-head
                        :heads="['#', 'Expanded', 'Shortened', 'Created at', 'Updated at', 'Manage']"></x-table-head>
                    <x-table-body>
                        @foreach($urls as $url)
                            <x-table-tr class="group transition ease-in-out duration-500">
                                <x-table-td>{{ $url['id'] }}</x-table-td>
                                <x-table-td
                                    class="max-w-xs truncate group-hover:whitespace-normal group-hover:overflow-visible">
                                    <a href="{{ $url['expanded'] }}" class="hover:underline">
                                        {{ $url['expanded'] }}
                                        <x-majestic-open-line class="h-4 w-4"/>
                                    </a>
                                </x-table-td>
                                <x-table-td
                                    class="max-w-xs truncate group-hover:whitespace-normal group-hover:overflow-visible">
                                    <a href="{{ url($url['shortened']) }}" class="hover:underline truncate max-w-xs">
                                        {{ url($url['shortened']) }}
                                        <x-majestic-open-line class="h-4 w-4"/>
                                    </a>
                                </x-table-td>
                                <x-table-td
                                    class="whitespace-nowrap">{{$url['created_at']->format('d/m/Y H:i')}}</x-table-td>
                                <x-table-td
                                    class="whitespace-nowrap">{{$url['updated_at']->format('d/m/Y H:i')}}</x-table-td>
                                <x-table-td class="whitespace-nowrap">
                                    <a href="{{ route('urls.edit', $url['id']) }}"
                                       class="pl-1 pt-2 pb-1 focus:outline rounded">
                                        <x-majestic-edit-pen-2-line/>
                                    </a>
                                    <a href="#" x-data="" class="p-1 pt-2 focus:outline focus:outline-red-700 rounded"
                                       x-on:click.prevent="$dispatch('open-modal', 'confirm-url-deletion'); setUrl({{$url->toJson()}})">
                                        <x-majestic-delete-bin-line class="text-red-600 dark:text-red-700"/>
                                    </a>
                                </x-table-td>
                            </x-table-tr>
                        @endforeach
                    </x-table-body>
                </table>

                <!-- Pagination -->
            {{ $urls->links() }}

            <!-- URL deletion confirmation modal -->
                <x-modal name="confirm-url-deletion" focusable>
                    <form method="post" :action="'{{ route('urls.destroy', '') }}' + '/' + url.id" class="p-6">
                        @csrf
                        @method('DELETE')

                        <div class="p-6 text-center">
                            <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                                 fill="none"
                                 stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Are you sure you want to delete this URL?') }}</h3>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('This operation can\'t be canceled.') }}
                            </p>

                            <p class="mt-4 text-lg text-gray-800 dark:text-gray-200">
                                {{ __('Take one last review:') }}
                            </p>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">
                                <b>{{ __('Expanded:') }} </b> <span x-text="url.expanded"></span>
                                <br>
                                <b>{{ __('Shortened:') }} </b> <span x-text="url.shortened"></span>
                            </p>
                            <div class="mt-6 flex justify-center space-x-4">
                                <x-secondary-button
                                    x-on:click="$dispatch('close')">{{ __('No, Cancel') }}</x-secondary-button>
                                <x-danger-button class="ml-3">{{ __('Yes, I\'m sure') }}</x-danger-button>
                            </div>
                        </div>
                    </form>
                </x-modal>
            </div>
        @else
            <div class="text-center text-xl mt-4">
                {{ __('There are no URLs that matching your search') }}
                <div class="text-gray-400 text-medium">
                    {{ __('Try to search for something else') }}
                </div>
            </div>
        @endif
    @else
        <div class="text-center text-xl">
            {{ __('You don\'t have urls yet.') }}
            <br>
            <a href="{{ route('urls.create') }}" class="text-gray-400">
                <x-majestic-plus-line/> {{ __('Create your first one now!') }}
            </a>
        </div>
    @endif
</x-app-layout>
