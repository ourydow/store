<!-- Mobile sidebar -->
<!-- Backdrop -->
<div x-show="isSideMenuOpen" @click="isSideMenuOpen = false" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">

</div>
<aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64  overflow-y-auto bg-white md:hidden" x-show="isSideMenuOpen"
    x-transition:enter="transition ease-in-out duration-150"
    x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 transform -translate-x-20"
    >
    <x-layouts.menus />
</aside>
<div x-show="isSideMenuOpen" className="absolute top-0 right-0 -mr-12 pt-2 md:hidden">
        <button id="closeSB" type="button"
            className="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
            @click="isSideMenuOpen = false">
            <span className="sr-only">Close sidebar</span>
            X
        </button>
    </div>
    
