<tr {{ $attributes->merge(['class' => 'odd:bg-white dark:odd:bg-gray-700 even:bg-gray-100 dark:even:bg-gray-800 hover:bg-sky-100 dark:hover:bg-sky-900']) }}>
    {{ $slot }}
</tr>
