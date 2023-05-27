@props(['heads'])

<thead>
<tr>
    @foreach($heads as $head)
        <th {{ $attributes->merge(['class' => 'border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left transition ease-in-out duration-150']) }}>
            {{$head}}
        </th>
    @endforeach
</tr>
</thead>
