@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-teal-400 text-base font-medium text-bluish bg-teal-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-tale-700 transition'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-mdium text-gray-900 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
