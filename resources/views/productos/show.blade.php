<x-layouts.appD>
    <div>
        {{-- <x-breadcrumb>
            <x-slot name="home">Home</x-slot>
            <x-slot name="productos">Productos</x-slot>
            <x-slot name="current">{{ $producto->nombre }}</x-slot>
        </x-breadcrumb> --}}
        <div style="background: var(--terciary-color)" class="w-full max-w-md border border-gray-200 rounded-xl shadow-xl hover:shadow-2xl transition-shadow duration-300 dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
            <!-- Image Container with Padding -->
            <div class="mt-8 mb-4 px-8 flex justify-center items-center">
                <img class="w-full object-contain sm:h-80 md:h-96" 
                     src="{{ $producto->img_url }}" 
                     alt="product image" />
            </div>
            
            <!-- Content Section -->
            <div class="px-6 pb-6">
                <!-- Title with Margin -->
                <h5 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white mb-2">
                    {{ $producto->nombre }}
                </h5>
                
                <!-- Description with Margins -->
                <p class="text-gray-600 dark:text-gray-300 mb-4 text-sm md:text-base">
                    {{ $producto->descripcion }}
                </p>
                
                <!-- Rating Section -->
                <div class="flex items-center mb-5 ml-2">
                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                        @for ($i = 0; $i < $producto->rating; $i++)
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor

                        @for ($i = 0; $i < 5 - $producto->rating; $i++)
                            <svg class="w-5 h-5 text-gray-300 dark:text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor
                    </div>
                    <span class="bg-blue-100 text-blue-800 text-sm font-semibold px-2.5 py-0.5 rounded ml-2">4.0</span>
                </div>

                <!-- Price and Actions -->
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                    <div>
                        <span class="text-2xl font-bold text-gray-900 dark:text-white">
                            ${{ number_format($producto->precio, 2) }}
                        </span>
                        <span class="block text-sm text-green-600 dark:text-green-400">
                            📦 Stock: {{ $producto->stock }}
                        </span>
                    </div>
                    <button class="w-full sm:w-auto text-white bg-blue-600 hover:bg-blue-700 px-5 py-2.5 rounded-lg transition-colors duration-200">
                        🛒 Añadir al carrito
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.appD>
