@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-gray-200 dark:border-neutral-700 dark:bg-zinc-900 dark:text-neutral-500 
        focus:border-gray-200 dark:focus:border-gray-200 focus:ring-gray-200 dark:focus:ring-gray-200 rounded-md shadow-sm',
]) !!}>
