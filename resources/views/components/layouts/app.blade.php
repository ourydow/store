<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'store' }}</title>


        <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body x-data="{ isSideMenuOpen: false }">

        <div class="flex h-screen overflow-hidden bg-white " >
            <button class="fixed z-10 flex p-0 font-bold right-4 sm:hidden" @click="isSideMenuOpen = true"><ion-icon name="menu" class="p-2 m-4 text-white rounded-md bg-amber-600"></ion-icon></button>
                <x-layouts.mobile />
                <x-layouts.desktop />
                <div class="flex flex-col flex-1 w-0 overflow-hidden">
                    <main class="relative flex-1 overflow-y-auto bg-gray-100 focus:outline-none">
                        <div class="py-8">
                            <div class="px-4 mx-auto 2xl:max-w-7xl sm:px-6 md:px-8">
                                <!-- === Remove and replace with your own content... === -->
                                {{ $slot }}
                                <!-- === End ===  -->
                            </div>
                        </div>
                    </main>
                </div>
            </div>

        </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        @stack('modals')
        @stack('js')
        <x-toaster-hub />
        @livewireScripts
    </body>
</html>
