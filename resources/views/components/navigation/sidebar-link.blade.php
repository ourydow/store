@props(['route', 'icon'])
<li>
    <a href="{{ route($route) }}"
        class="inline-flex items-center w-full p-2 pl-3 text-sm font-light text-gray-500 rounded-lg hover:text-blue-500 group hover:bg-gray-50">
        <span class="inline-flex items-center w-full">
            <ion-icon class="w-4 h-4 md hydrated" name="{{ $icon }}-outline"
                role="img" aria-label="{{ $icon }} outline"></ion-icon>
            <span class="ml-4">
                {{ $slot }}
            </span>
        </span>
    </a>
</li>
