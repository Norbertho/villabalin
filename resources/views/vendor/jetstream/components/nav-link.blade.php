@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-4 border-bluish text-sm font-bold leading-5 text-gray-900 focus:outline-none focus:border-blish transition'
            : 'inline-flex items-center px-1 pt-1 border-b-4 border-transparent text-sm font-bold leading-5 text-gray-600 hover:text-gray-900 hover:border-teal-200 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
