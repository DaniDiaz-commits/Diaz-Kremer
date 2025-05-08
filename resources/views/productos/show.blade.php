<x-layouts.appD title="Diaz Kremer - {{ $producto->nombre }}">

    <!-- Product Section with Breadcrumb Close to Card -->
    <section class="flex flex-col justify-center items-center min-h-[calc(100vh-6rem)] bg-secondary dark:bg-gray-900 py-8 px-4">
        <!-- Breadcrumb Section (near the card) -->
        <x-breadcrumb class="mb-4">
            <x-slot name="home">Home</x-slot>
            <x-slot name="datos">productos</x-slot>
            <x-slot name="current" >{{ $producto->nombre }}</x-slot>
        </x-breadcrumb>
        <div class="w-full max-w-md border border-gray-200 bg-tertiary rounded-xl shadow-lg transition-shadow duration-300 dark:bg-[#23518c] dark:border-gray-700 overflow-hidden">
            
            <!-- Image Container -->
            <div class="p-6 flex justify-center">
                <img class="w-full object-contain max-h-80" src="{{ $producto->img_url }}" alt="Imagen del producto" />
            </div>

            <!-- Content Section -->
            <div class="px-6 pb-6">
                <!-- Title -->
                <h5 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                    {{ $producto->nombre }}
                </h5>

                <!-- Description -->
                <p class="text-gray-600 dark:text-gray-300 mb-4 text-sm md:text-base">
                    {{ $producto->descripcion }}
                </p>

                <!-- Rating -->
                <div class="flex items-center mb-4">
                    <div class="flex space-x-1">
                        @for ($i = 0; $i < $producto->rating; $i++)
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor
                        @for ($i = 0; $i < 5 - $producto->rating; $i++)
                            <svg class="w-5 h-5 text-gray-300 dark:text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor
                    </div>
                    <span class="ml-2 bg-blue-100 text-blue-800 text-sm font-semibold px-2.5 py-0.5 rounded">{{ $producto->rating }}</span>
                </div>

                <!-- Price and Actions -->
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
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

                <!-- Comment Modal Button -->
                {{-- <div class="mt-4 text-center">
                    <button onclick="document.getElementById('commentModal').classList.remove('hidden')" class="text-white bg-gray-700 hover:bg-gray-800 px-4 py-2 rounded-lg">💬 Ver Comentarios</button>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- Comment Modal -->
    <div id="commentModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg w-11/12 max-w-md">
            <div class="h-80 overflow-y-auto border-b mb-4 p-2">
                @forelse ($producto->comentarios as $comentario)
                    <div class="mb-2 p-2 border-b border-gray-300 dark:border-gray-700">
                        <p class="text-sm font-semibold text-gray-900 dark:text-white">{{ $comentario->usuario->name }}</p>
                        <p class="text-gray-600 dark:text-gray-300 text-sm">{{ $comentario->contenido }}</p>
                        <span class="text-xs text-gray-500 dark:text-gray-400">{{ $comentario->created_at->diffForHumans() }}</span>
                    </div>
                @empty
                    <p class="text-gray-600 dark:text-gray-300">No hay comentarios aún.</p>
                @endforelse
            </div>
            <button onclick="document.getElementById('commentModal').classList.add('hidden')" class="text-white bg-primary hover:bg-red-700 px-4 py-2 rounded-lg w-full">Cerrar</button>
        </div>
    </div>
</x-layouts.appD>
