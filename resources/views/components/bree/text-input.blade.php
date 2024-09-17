@props(['disabled' => false])
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'w-full bg-transparent placeholder:text-slate-400 
      text-slate-700 text-sm border-neutral-200 px-3 py-2 
      focus:border-teal-600 focus:outline-none focus:ring 
      focus:ring-opacity-0 focus:ring-teal-600 rounded-md shadow-sm dark:focus:ring-teal-600
      dark:border-neutral-700',
]) !!} />
