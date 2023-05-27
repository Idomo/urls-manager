<x-app-layout :title="__('Your URLs')">
    <!-- Create URL button -->
    <a href="{{ route('urls.create') }}">
        <x-primary-button>
            <x-majestic-plus-line class="mr-1"/> {{ __('Create URL') }}
        </x-primary-button>
    </a>

    @if(!empty($urls))
        <table class="mt-4 border-collapse table-auto w-full">
            <x-table-head :heads="['#', 'Expanded', 'Shortened']"></x-table-head>
            <x-table-body>
                @foreach($urls as $url)
                    <x-table-tr>
                        <x-table-td>{{ $url['id'] }}</x-table-td>
                        <x-table-td>
                            <a href="{{ $url['expanded'] }}" class="hover:underline">
                                {{ $url['expanded'] }}
                                <x-majestic-open-line class="h-4 w-4"/>
                            </a>
                        </x-table-td>
                        <x-table-td>
                            <a href="{{ url($url['shortened']) }}" class="hover:underline">
                                {{ url($url['shortened']) }}
                                <x-majestic-open-line class="h-4 w-4"/>
                            </a>
                        </x-table-td>
                    </x-table-tr>
                @endforeach
            </x-table-body>
        </table>
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
