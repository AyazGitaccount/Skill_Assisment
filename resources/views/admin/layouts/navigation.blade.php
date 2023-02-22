<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('admin.dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                        {{ __('Admin Dashboard') }}
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-1 w-5 h-5" fill="none" viewBox="0 0 24 24"
                            strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                        </svg>
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('admin.advertisment')" :active="request()->routeIs('admin.advertisment')">
                        {{ __('Add Advertisments') }}
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            class="mx-2 w-5 h-5" viewBox="0 0 256 256" xml:space="preserve">
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                <path
                                    d="M 85.021 77.904 c -0.256 0 -0.512 -0.098 -0.707 -0.293 l -6.78 -6.78 l -3.313 3.313 c -0.249 0.25 -0.614 0.352 -0.954 0.262 c -0.343 -0.087 -0.613 -0.349 -0.713 -0.688 l -4.986 -17.005 c -0.103 -0.351 -0.006 -0.729 0.253 -0.988 s 0.637 -0.354 0.988 -0.253 l 17.005 4.986 c 0.339 0.1 0.601 0.37 0.688 0.713 c 0.088 0.342 -0.012 0.704 -0.262 0.954 l -3.313 3.313 l 6.78 6.78 c 0.391 0.391 0.391 1.023 0 1.414 l -3.979 3.979 C 85.532 77.807 85.276 77.904 85.021 77.904 z M 77.533 68.417 c 0.256 0 0.512 0.098 0.707 0.293 l 6.78 6.78 l 2.565 -2.565 l -6.78 -6.78 c -0.391 -0.391 -0.391 -1.023 0 -1.414 l 2.827 -2.827 l -13.631 -3.997 l 3.997 13.631 l 2.827 -2.827 C 77.021 68.515 77.277 68.417 77.533 68.417 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 53.644 56.499 h -7.75 c -0.552 0 -1 -0.447 -1 -1 V 27.218 c 0 -0.552 0.448 -1 1 -1 h 7.75 c 5.596 0 10.147 4.552 10.147 10.147 v 9.986 C 63.791 51.947 59.239 56.499 53.644 56.499 z M 46.894 54.499 h 6.75 c 4.492 0 8.147 -3.655 8.147 -8.147 v -9.986 c 0 -4.492 -3.655 -8.147 -8.147 -8.147 h -6.75 V 54.499 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 28.726 26.218 c -5.403 0 -9.799 4.396 -9.799 9.799 v 19.481 c 0 0.553 0.448 1 1 1 s 1 -0.447 1 -1 v -10.17 h 15.599 v 10.17 c 0 0.553 0.448 1 1 1 s 1 -0.447 1 -1 V 36.018 C 38.525 30.614 34.129 26.218 28.726 26.218 z M 20.927 43.329 v -7.311 c 0 -4.301 3.499 -7.799 7.799 -7.799 s 7.799 3.499 7.799 7.799 v 7.311 H 20.927 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 57.459 70.622 H 9.765 C 4.38 70.622 0 66.241 0 60.857 V 21.86 c 0 -5.384 4.38 -9.765 9.765 -9.765 h 63.188 c 5.384 0 9.765 4.38 9.765 9.765 v 25.838 c 0 0.553 -0.447 1 -1 1 s -1 -0.447 -1 -1 V 21.86 c 0 -4.281 -3.483 -7.765 -7.765 -7.765 H 9.765 C 5.483 14.096 2 17.579 2 21.86 v 38.997 c 0 4.281 3.483 7.765 7.765 7.765 h 47.694 c 0.553 0 1 0.447 1 1 S 58.012 70.622 57.459 70.622 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </svg>
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('admin.stats')" :active="request()->routeIs('admin.stats')">
                        {{ __('Ad Statistics') }}
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        class="mx-1 w-4 h-4" viewBox="0 0 256 256" xml:space="preserve">
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                <path
                                    d="M 45 2 c 3.004 0 6.001 0.314 8.934 0.935 l -14.021 41.5 l -0.233 0.69 l 0.265 0.678 l 15.957 40.798 C 52.353 87.53 48.696 88 45 88 C 21.29 88 2 68.71 2 45 S 21.29 2 45 2 M 45 0 C 20.147 0 0 20.147 0 45 c 0 24.853 20.147 45 45 45 c 4.727 0 9.283 -0.733 13.563 -2.085 l -16.755 -42.84 L 56.531 1.497 C 52.85 0.524 48.987 0 45 0 L 45 0 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 86.934 28.656 c -4.452 -11.41 -13.425 -20.558 -24.72 -25.239 L 49.59 40.788 L 86.934 28.656 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path
                                    d="M 87.245 36.967 C 87.747 39.612 88 42.306 88 45 c 0 15.856 -8.876 30.524 -22.787 37.954 L 51.739 48.501 L 87.245 36.967 M 88.733 34.38 l -39.63 12.874 L 64.15 85.725 C 79.424 78.53 90 63.003 90 45 C 90 41.341 89.558 37.786 88.733 34.38 L 88.733 34.38 z"
                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </svg>
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::guard('admin')->user()->name }}</div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"  class="mx-1 w-6 h-6" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                              
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('admin.logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{
                    Auth::guard('admin')->user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::guard('admin')->user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('admin.logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>