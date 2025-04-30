{{-- <header class="sticky top-0"> --}}
<header>
    <nav style="background-color: var(--primary-color)" class="border-gray-200 dark:border-gray-700">
        <div class=" flex flex-wrap items-center justify-between  p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/diazkremer-logo.svg') }}" class="h-8 bg-white" alt="Diazkremer Logo" />
                <span class="self-center pl-2 text-2xl whitespace-nowrap text-white">Diaz Kremer</span>
            </a>
            <div class="links hidden md:flex items-center space-x-2 gap-1">
                <a href="/" class="{{ request()->is('/') ? 'active' : 'link' }}">Inicio</a>
                <a href="/productos" class="{{ request()->is('productos') ? 'active' : 'link' }}">Productos</a>
                <a href="/proveedores" class="{{ request()->is('proveedores') ? 'active' : 'link' }}">Marcas</a>
                <a href="/#contacto" class="{{ request()->is('#contacto') ? 'active' : 'link' }}">Contacto</a>
            </div>
            

            <button data-collapse-toggle="navbar-hamburger" type="button" id="button-toggle-nav"
                class="button-mv inline-flex md:hidden items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-hamburger" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full" id="navbar-hamburger">
                <ul style="background-color: var(--primary-color)" class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50">
                    <li>
                        <a href="/" class="block {{ request()->is('/') ? 'active' : 'hover:bg-blue-300' }} change py-2 px-3 rounded-sm  dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" aria-current="page">Inicio</a>
                    </li>
                    <li>
                        <a href="/productos" class="block {{ request()->is('productos') ? 'active' : 'hover:bg-blue-200' }} change py-2 px-3 rounded-sm  dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Productos</a>
                    </li>
                    <li>
                        <a href="/proveedores" class="block {{ request()->is('proveedores') ? 'active' : 'hover:bg-blue-200' }} change py-2 px-3 rounded-sm  dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-black ">Marcas</a>
                    </li>
                    <li>
                        <a href="/#contacto" class="block {{ request()->is('contacto') ? 'active' : 'hover:bg-blue-200' }} change py-2 px-3 rounded-sm  dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Contacto</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>
</header>
