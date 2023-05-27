@props(['disabled' => false, 'addonValue'])

<div class="flex flex-wrap items-stretch w-full relative">
    <div class="flex -mr-px">
        <span
            class="px-3 inline-flex items-center min-w-fit rounded-l-md border border-r-0 border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-600 text-sm">
            {{ $addonValue }}
        </span>
    </div>
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm flex-shrink flex-grow flex-auto leading-normal w-px flex-1 rounded rounded-l-none px-3 relative']) !!}>
</div>
