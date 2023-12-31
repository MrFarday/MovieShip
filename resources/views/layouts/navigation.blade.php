<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="w-full flex justify-between">
                <!-- Logo -->


                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('Beranda') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('films') }}">
                        {{ __('Daftar Film') }}
                    </x-nav-link>
                    @if (Route::has('login'))
                        @auth
                            <x-nav-link href="{{ url('/dashboard') }}" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-nav-link>
                            <x-nav-link href="{{ url('/dashboard/films') }}" :active="request()->routeIs('dashboard.films')">
                                {{ __('Films') }}
                            </x-nav-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-nav-link class="mt-5" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Keluar') }}
                                </x-nav-link>
                            </form>
                            @endauth
                    @endif
                </div>

                <div class="mt-4">
                    <form action="{{ route('films') }}">
                        <input type="text" name="search" id="first-name" autocomplete="given-name"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        placeholder="Cari">
                    </form>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center -me-2 sm:hidden">
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="#">
                {{ __('Beranda') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#">
                {{ __('Daftar Film') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
<div class="px-4 mx-auto bg-gray-300">
    <div class="flex justify-center h-16">
        <div class="flex items-center h-16 shrink-0">
            <div class="text-2xl font-semibold tracking-tighter text-foreground">MovieShip
            </div>
        </div>
    </div>
</div>
