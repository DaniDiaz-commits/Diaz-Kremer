{{-- <header class="sticky top-0"> --}}
<header>
    <nav class="border-gray-200 dark:bg-[#1b2126] bg-white dark:border-gray-700">
        <div class=" flex flex-wrap items-center justify-between  p-4">
            <a href="/" class="flex items-center rtl:space-x-reverse">
                {{-- <img src="{{ asset('img/diazkremer-logo.svg') }}" class="h-8 bg-white" alt="Diazkremer Logo" /> --}}
                <x-app-logo />
                {{-- <span class="self-center pl-2 text-2xl whitespace-nowrap text-black">Diaz Kremer</span> --}}
            </a>
            <div class="links hidden md:flex items-center space-x-2 gap-1">
                <a href="/"
                    class="{{ request()->is('/')
                        ? 'active'
                        : 'dark:text-white border-b-2 border-transparent font-bold hover:border-[#5b7ba6] transition-colors duration-200' }}">
                    Inicio
                </a>

                <a href="/productos"
                    class="{{ request()->is('productos*')
                        ? 'active'
                        : 'dark:text-white border-b-2 border-transparent font-bold hover:border-[#5b7ba6] transition-colors duration-200' }}">
                    Productos
                </a>

                <a href="/proveedores"
                    class="{{ request()->is('proveedores')
                        ? 'active'
                        : 'dark:text-white border-b-2 border-transparent font-bold hover:border-[#5b7ba6] transition-colors duration-200' }}">
                    Marcas
                </a>

                <a href="/#contacto"
                    class="{{ request()->is('#contacto')
                        ? 'active'
                        : 'dark:text-white border-b-2 border-transparent font-bold hover:border-[#5b7ba6] transition-colors duration-200' }}">
                    Contacto
                </a>
                @auth
                    <a href="{{ route('dashboard') }}" class="btn btn-primary text-black dark:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                @endauth
                @guest
                    <a href="{{ route('login') }}" class="btn btn-primary text-black dark:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                    </a>
                @endguest
            </div>


            <button data-collapse-toggle="navbar-hamburger" type="button" id="button-toggle-nav"
                class="button-mv inline-flex md:hidden items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg  focus:outline-none focus:ring-gray-200 dark:text-gray-400 dark:hover:[#23518c] dark:focus:ring-gray-600"
                aria-controls="navbar-hamburger" aria-expanded="false">
                {{-- <span class="sr-only">Open main menu</span> --}}
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full" id="navbar-hamburger">
                <ul class="flex flex-col font-medium mt-4 rounded-lg ">
                    <li>
                        <a href="/"
                            class="block {{ request()->is('/') ? 'active' : 'hover:bg-gray-100 no-active' }} change py-2 px-3 rounded-sm    dark:text-white dark:hover:text-[#23518c]"
                            aria-current="page">Inicio</a>
                    </li>
                    <li>
                        <a href="/productos"
                            class="block {{ request()->is('productos*') ? 'active' : 'hover:bg-gray-100 no-active' }} change py-2 px-3 rounded-sm  dark:text-white dark:hover:text-[#23518c]">
                            Productos
                        </a>
                    </li>
                    <li>
                        <a href="/proveedores"
                            class="block {{ request()->is('proveedores') ? ' active' : 'hover:bg-gray-100 no-active' }} change py-2 px-3 rounded-sm   dark:text-white  dark:hover:text-[#23518c] ">Marcas</a>
                    </li>
                    <li>
                        <a href="/#contacto"
                            class="block change py-2 px-3 rounded-sm   dark:text-white hover:bg-gray-100 dark:hover:text-[#23518c]">Contacto</a>
                    </li>
                    <li class="flex justify-end">
                        @auth
                            <a href="{{ route('dashboard') }}"
                                class="btn btn-primary text-black dark:text-white py-2 px-2 rounded-sm hover:shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        @endauth
                        @guest
                            <a href="{{ route('login') }}"
                                class="btn btn-primary text-black dark:text-white py-2 px-2 rounded-sm hover:shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                            </a>
                        @endguest
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
