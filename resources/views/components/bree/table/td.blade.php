@props(['align' => 'left'])

@php
$textAlignClass=[
'left' => 'text-left',
'light' => 'text-right',
'center' => 'text-center',
][$align] ?? 'text-left';
@endphp

<td
    class="whitespace-nowrap px-4 py-2 text-sm font-medium text-gray-900 md:py-3 md:text-left dark:border-white/5 dark:bg-gray-800 {{ $textAlignClass }}">
    {{ $slot }}
</td>