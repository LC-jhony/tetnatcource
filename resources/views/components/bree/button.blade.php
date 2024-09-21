@props([
    'color' => 'blue',
    'size' => 'small',
    'value' => null,
    'icon' => null,
    'iconPosition' => 'left',
    'href' => null,
    'type' => 'button',
])

@php
    // Definir colores y tamaños
    $buttonColorClass =
        [
            'dark' => 'bg-gray-800 hover:bg-gray-900',
            'gray' => 'bg-gray-500 hover:bg-gray-600',
            'blue' => 'bg-blue-600 hover:bg-blue-700',
            'red' => 'bg-red-500 hover:bg-red-600',
            'rose' => 'bg-rose-500 hover:bg-rose-600',
            'yellow' => 'bg-yellow-500 hover:bg-yellow-600',
            'amber' => 'bg-amber-500 hover:bg-amber-600',
            'green' => 'bg-green-500 hover:bg-green-600',
            'teal' => 'bg-teal-600 hover:bg-teal-500',
            'orange' => 'bg-orange-400 hover:bg-orange-500',
            'cyan' => 'bg-cyan-600 hover:bg-cyan-500',
        ][$color] ?? 'bg-blue-700 hover:bg-blue-800'; // Color por defecto

    // Definir tamaños, incluyendo ancho completo para 'full'
    $buttonSizeClass =
        [
            'full' => 'w-full py-1.5', // Ancho completo
            'extrasmall' => 'px-3 py-2 text-sm',
            'small' => 'px-3 py-2 text-xs',
            'base' => 'px-4 py-2.5 text-sm',
            'large' => 'px-4 py-2.5 text-base',
            'extralarge' => 'px-5 py-2.5 text-base',
        ][$size] ?? 'px-3 py-2 text-xs'; // Tamaño por defecto
@endphp
<div>
    <{{ $href ? 'a' : 'button' }} {{ $href ? 'href=' . $href : 'type=' . $type }}
        {{ $attributes->merge(['class' => "flex justify-center gap-2 $buttonSizeClass text-white font-semibold $buttonColorClass rounded-md"]) }}>

        @if ($icon && $iconPosition === 'left')
            <x-dynamic-component :component="'heroicon-o-' . $icon" class="w-5 h-5" />
        @endif

        <span>{{ $value ?? $slot }}</span>

        @if ($icon && $iconPosition === 'right')
            <x-dynamic-component :component="'heroicon-o-' . $icon" class="w-5 h-5" />
        @endif

        </{{ $href ? 'a' : 'button' }}>
</div>
