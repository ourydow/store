<div class="flex flex-col w-64 h-full print:hidden">
    <div class="flex flex-col flex-grow pt-5 overflow-y-auto bg-red-500 border-r">
        <div class="flex flex-col flex-shrink-0 p-2 px-4 m-2 text-center bg-white rounded-lg">
            <a class="text-lg font-bold tracking-tighter text-blue-600 focus:outline-none focus:ring " href="/">
                <span class="inline-flex items-center gap-2">
                    <span class="inline-flex items-center gap-2">
                            <!-- <x-application-logo /> -->
                            <img src="{{ asset('logo_cigo.png') }}" alt="Logo" class="w-20 h-20" />
                            
                    </span> </a>
            </span> </a>

        </div>
        <div class="flex flex-col flex-grow px-4 mt-5">
            <nav class="flex-1 space-y-1">
                <ul>
                    <x-navigation.link route="dashboard" icon="cellular">
                        Tableau de bord
                    </x-navigation.link>
                    {{-- <x-navigation.link route="client" icon="cellular">
                        Clients
                    </x-navigation.link>

                    <x-navigation.link route="gestion" icon="cellular">
                        Progets
                    </x-navigation.link> --}}

                    {{-- @role('achat')
                    <x-navigation.link route="achats" icon="documents">
                        Achats & Logistique
                    </x-navigation.link>
                    @endrole

                    @role('rh')
                    <x-navigation.link route="rh.users" icon="people">
                        Ressources Humaines
                    </x-navigation.link>
                    @endrole

                    @role('finance')
                    <x-navigation.link route="attente" icon="cash">
                        Finances
                    </x-navigation.link>
                    @endrole

                    @role('courrier')
                    <x-navigation.link route="courriers" icon="bookmarks">
                        Courriers
                    </x-navigation.link>
                    @endrole

                    @role('besoin')
                    <p class="px-2 mt-4 text-sm font-thin text-white">Service</p>
                    <x-navigation.link route="besoins" icon="duplicate">
                        Expression de besoin
                    </x-navigation.link>
                    @endrole

                    @role('admin')
                    <p class="px-2 mt-4 text-sm font-thin text-white">Parametrage</p>
                    <x-navigation.link route="filiales" icon="business">
                        Filiales
                    </x-navigation.link>
                    <x-navigation.link route="departements" icon="settings">
                        Departements
                    </x-navigation.link>
                    <x-navigation.link route="privilege" icon="settings">
                        Privilèges
                    </x-navigation.link>
                    @endrole --}}

            </nav>
        </div>
        <div class="flex flex-shrink-0 p-4 px-4 bg-blue">
            <div @click.away="open = false" class="relative inline-flex items-center w-full" x-data="{ open: false }">
                <button @click="open = !open"
                    class="inline-flex items-center justify-between w-full px-4 py-3 text-lg font-medium text-center text-white transition duration-500 ease-in-out transform bg-white rounded-xl hover:bg-yellow-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    <span>
                        <span class="flex-shrink-0 block group">
                            <div class="flex items-center">
                                <div class="ml-3 text-left">
                                    <p
                                        class="text-xs font-medium text-yellow-500 group-hover:text-white whitespace-nowrap">
                                        {{ Auth::user()->name }}
                                    </p>
                                    <p
                                        class="text-xs font-medium text-yellow-500 group-hover:text-white whitespace-nowrap">
                                        {{ Auth::user()->email }}
                                    </p>
                                </div>
                            </div>
                        </span>
                    </span>
                    <svg :class="{ 'rotate-180': open, 'rotate-0': !open }" xmlns="http://www.w3.org/2000/svg"
                        class="inline w-5 h-5 ml-4 text-black transition-transform duration-200 transform rotate-0"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute bottom-0 z-50 w-full mx-auto mt-2 origin-bottom-right bg-white rounded-xl"
                    style="display: none;">
                    <div class="px-2 py-2 bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                        <ul>
                            <li>
                                <a href={{route('profile') }} wire:navigate
                                    class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-yellow-500">
                                    <ion-icon class="w-4 h-4 md hydrated" name="person-circle-outline" role="img"
                                        aria-label="person circle outline"></ion-icon>
                                    <span class="ml-4">
                                        Profile
                                    </span>
                                </a>
                            </li>

                            <li>
                                <livewire:logout />
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
