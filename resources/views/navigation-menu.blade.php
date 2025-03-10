@auth
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-jet-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="flex-shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-jet-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav> 
@endauth
@guest
<nav x-data="{ open: false }" class="bg-white border-b border-teal-500">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-24">
            <div class="flex justify-between w-full">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                        @if (request()->routeIs('rollerberles'))
                                <a class="flex items-center space-x-2" href="/rollerkolcsonzes">
                                    <div>
                                        <img class="h-20" src="{{ asset('/images/roller/roller-app-logo.png') }}"
                                            alt="">
                                    </div>
                                </a>
                            @else
                                <a class="flex items-center space-x-2" href="/">
                                      <x-jet-application-mark class="block w-auto" />
                                </a>
                            @endif
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-4 sm:-my-px sm:ml-10 sm:flex">
                    @if (request()->routeIs('rollerberles'))
                          <x-jet-nav-link href="/" :active="request()->routeIs('/')">
                            <a class="flex items-center space-x-2" href="/">
                                      <x-jet-application-mark class="block w-auto" />
                                </a>
                        </x-jet-nav-link>
                    @else
                        <x-jet-nav-link href="/" :active="request()->routeIs('/')">
                            {{ __('FŐOLDAL') }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('bekeszentandras-luxus-apartman') }}" :active="request()->routeIs('bekeszentandras-luxus-apartman')">
                            {{ __('A VILLÁRÓL') }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('bekeszentandras-horgaszat-apartman') }}" :active="request()->routeIs('bekeszentandras-horgaszat-apartman')">
                            {{ __('HASZNOS INFORMÁCIÓK') }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('reggeli') }}" :active="request()->routeIs('reggeli')">
                            {{ __('REGGELI') }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('bekeszentandras-apartman-arak') }}" :active="request()->routeIs('bekeszentandras-apartman-arak')">
                            {{ __('ÁRAINK') }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('rollerberles') }}" :active="request()->routeIs('rollerberles')">
                            {{ __('ROLLER KÖLCSÖNZÉS') }}
                        </x-jet-nav-link>
                

                        
                            <!-- Dropdown Menu -->
                            <div x-data="{ open: false }" class="relative group z-50">
                                <!-- Main Menu Trigger -->
                                <button
                                    @mouseenter="open = true"
                                    @mouseleave="open = false"
                                    class="flex items-center px-4 py-2 text-gray-700 hover:text-gray-900 font-bold"
                                >
                                    PROGRAMOK
                                </button>
                            
                                <!-- Dropdown Menu -->
                                <div
                                    x-show="open"
                                    @mouseenter="open = true"
                                    @mouseleave="open = false"
                                    class="absolute left-0 mt-2 w-48 bg-white border rounded shadow-lg z-50"
                                    x-cloak
                                >
                                    <!-- Add padding to ensure seamless movement -->
                                    <div class="py-2">
                                        <!-- Jóga és Önismereti Tábor -->
                                        <div x-data="{ submenuOpen: false }" class="relative group">
                                            <button
                                                @mouseenter="submenuOpen = true"
                                                @mouseleave="submenuOpen = false"
                                                class="block px-4 py-2 text-gray-700 hover:text-gray-900 w-full text-left"
                                            >
                                                Jóga és Önismereti Tábor
                                            </button>
                                            <!-- Submenu -->
                                            <div
                                                x-show="submenuOpen"
                                                @mouseenter="submenuOpen = true"
                                                @mouseleave="submenuOpen = false"
                                                class="absolute left-full top-0 w-48 bg-white border rounded shadow-lg z-50"
                                                x-cloak
                                            >
                                                <a href="#" class="block px-4 py-2 text-gray-700 hover:text-gray-900">Őszi Feltöltődés</a>
                                            </div>
                                        </div>
                            
                                        <!-- Önismereti Tábor -->
                                        <div x-data="{ submenuOpen: false }" class="relative group mt-2">
                                            <button
                                                @mouseenter="submenuOpen = true"
                                                @mouseleave="submenuOpen = false"
                                                class="block px-4 py-2 text-gray-700 hover:text-gray-900 w-full text-left"
                                            >
                                                Önismereti Tábor
                                            </button>
                                            <!-- Submenu -->
                                            <div
                                                x-show="submenuOpen"
                                                @mouseenter="submenuOpen = true"
                                                @mouseleave="submenuOpen = false"
                                                class="absolute left-full top-0 w-48 bg-white border rounded shadow-lg z-50"
                                                x-cloak
                                            >
                                                <a href="#" class="block px-4 py-2 text-gray-700 hover:text-gray-900">Újévi Testcélok Nyomában</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inline-flex items-center">
                            <a href="https://ibe.sabeeapp.com/properties/Villa-Balin-foglal%C3%A1s/?p=bSpbc4845ccceb04d66&checkin=2021-12-05&checkout=2021-12-06" class="bg-teal-300 px-4 py-2 rounded-full uppercase text-sm font-bold leading-5 text-gray-700 hover:text-white hover:bg-bluish">Foglalás</a>
                        </div>
                   @endif
                </div>
            </div>


            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-bluish hover:bg-teal-100 focus:outline-none bg-teal-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
                               @if (request()->routeIs('rollerberles'))
            <x-jet-responsive-nav-link href="/" :active="request()->routeIs('/')">
                VillaBalin
            </x-jet-responsive-nav-link>
                    @else
            <x-jet-responsive-nav-link href="/" :active="request()->routeIs('/')">
                FŐOLDAL
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('bekeszentandras-luxus-apartman') }}" :active="request()->routeIs('bekeszentandras-luxus-apartman')">
                A VILLÁRÓL
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('bekeszentandras-horgaszat-apartman') }}" :active="request()->routeIs('bekeszentandras-horgaszat-apartman')">
                HASZNOS INFORMÁCIÓK
            </x-jet-responsive-nav-link>
                        <x-jet-responsive-nav-link href="{{ route('reggeli') }}" :active="request()->routeIs('reggeli')">
                REGGELI
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('bekeszentandras-apartman-arak') }}" :active="request()->routeIs('bekeszentandras-apartman-arak')">
                ÁRAINK
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('rollerberles') }}" :active="request()->routeIs('rollerberles')">
                ROLLER KÖLCSÖNZÉS
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('joga') }}" :active="request()->routeIs('joga')">
                Jóga- és önismereti tábor
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="">
                Őszi feltöltődés
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="" :active="request()->routeIs('ujevi-testcelok-nyomaban')">
                Újévi testcélok nyomában
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="https://ibe.sabeeapp.com/properties/Villa-Balin-foglal%C3%A1s/?p=bSpbc4845ccceb04d66&checkin=2021-12-05&checkout=2021-12-06" >
                FOGLALÁS
            </x-jet-responsive-nav-link>
                @endif
        </div>

 
    </div>
</nav> 
@endguest
