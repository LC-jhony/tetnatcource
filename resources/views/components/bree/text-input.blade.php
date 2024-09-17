@props(['disabled' => false])
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'w-full border-1 border-neutral-200
      focus:border-teal-600 focus:outline-none focus:ring focus:ring-opacity-0 focus:ring-teal-600 rounded-md shadow-sm',
]) !!} />
