@props(['icon'])
<button
class="inline-flex items-center justify-between w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500 group"
@click="open = ! open">
<span class="inline-flex items-center text-base font-light">
    <ion-icon class="w-4 h-4 md hydrated" name="{{ $icon }}-outline"
        role="img" aria-label="{{ $icon }} outline"></ion-icon>
    <span class="ml-4">
        {{ $slot }}
    </span>
</span>
<svg fill="currentColor" viewBox="0 0 20 20"
    :class="{ 'rotate-180': open, 'rotate-0': !open }"
    class="inline w-5 h-5 ml-auto transition-transform duration-200 transform group-hover:text-accent rotate-0">
    <path fill-rule="evenodd"
        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
        clip-rule="evenodd"></path>
</svg>
</button>