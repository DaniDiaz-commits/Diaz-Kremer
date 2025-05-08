<x-layouts.appD title="Diaz Kremer - {{ $proveedor->nombre }}">

    <section class="flex flex-col justify-center items-center min-h-[calc(100vh-6rem)] bg-secondary dark:bg-gray-900 py-8 px-4">

        <!-- Breadcrumb -->
        <x-breadcrumb class="mb-4">
            <x-slot name="home">Home</x-slot>
            <x-slot name="datos">proveedores</x-slot>
            <x-slot name="current">{{ $proveedor->nombre }}</x-slot>
        </x-breadcrumb>

        <!-- Card -->
        <div class="w-full max-w-md border border-gray-200 bg-tertiary rounded-xl shadow-lg transition-shadow duration-300 dark:bg-[#23518c] dark:border-gray-700 overflow-hidden">
   
            <!-- Logo -->
            <div class="p-6 flex justify-center">
                <img class="w-40 h-40 object-contain" src="{{ $proveedor->logo_url }}" alt="{{ $proveedor->nombre }}">
            </div>

            <!-- Content -->
            <div class="px-6 pb-6">
                <h5 class="text-2xl font-bold text-center text-gray-900 dark:text-white mb-2">{{ $proveedor->nombre }}</h5>
                <p class="text-black dark:text-gray-300 mb-4 text-sm md:text-base">
                    {{ $proveedor->descripcion }}
                </p>
                @if ($proveedor->email)
                    <ul class="text-gray-700 dark:text-gray-300 text-sm space-y-2">
                        <li><strong>Email:</strong> {{ $proveedor->email }}</li>
                        <li><strong>Teléfono:</strong> {{ $proveedor->telefono }}</li>
                        <li><strong>Dirección:</strong> {{ $proveedor->direccion }}</li>
                    </ul>                    
                @endif

                <!-- Botón de contacto o acción -->
                <div class="mt-6 text-center">
                    @if ($proveedor->email)
                        <a href="mailto:{{ $proveedor->email }}" class="text-white bg-blue-600 hover:bg-blue-700 px-5 py-2.5 rounded-lg transition-colors duration-200">
                            ✉️ Contactar
                        </a>
                    @endif
                </div>
            </div>

        </div>
    </section>

</x-layouts.appD>
