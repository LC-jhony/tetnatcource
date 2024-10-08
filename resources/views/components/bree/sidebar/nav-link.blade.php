@props([
'active',
'value' => null,
'icon' => null,
'iconPosition' => 'left',
])

@php
$classes =
$active ?? false
? 'flex items-center gap-3 block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg
dark:bg-gray-700
dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200
hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline'
: 'flex items-center gap-3 block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg
dark:bg-transparent
dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200
hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    @if ($icon && $iconPosition === 'left')
    <x-dynamic-component :component="'heroicon-o-' . $icon" class="w-5 h-5" />
    @endif
    {{ $value ?? $slot }}
    @if ($icon && $iconPosition === 'right')
    <x-dynamic-component :component="'heroicon-o-' . $icon" class="w-5 h-5" />
    @endif
</a>