@props(['route', 'icon'])

@php
    $classes = Request::routeIs($route) ? 'text-yellow-600 bg-white' : 'text-white';
@endphp

<li>
    <a href="{{ route($route) }}" wire:navigate
        {{ $attributes->merge(['class' => 'inline-flex items-center font-semibold w-full px-4 py-2 mt-1 text-sm transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-yellow-500  hover:text-white hover:font-semibold ' . $classes]) }}>

        <ion-icon class="w-4 h-4 md hydrated" name="{{ $icon }}-outline" role="img"
            aria-label="{{ $icon }} outline"></ion-icon>
        <span class="ml-4">
            {{ $slot }}
        </span>
    </a>
</li>
