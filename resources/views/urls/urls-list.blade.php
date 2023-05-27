<x-app-layout :title="__('Your URLs')">
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
        </div>
    @endif
</x-app-layout>
