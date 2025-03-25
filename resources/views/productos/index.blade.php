<x-layouts.appD>
    
    <div class="flex flex-wrap p-5 bg-gray-100 shadow-lg">
        <!-- Sidebar: Filtros -->
        <div class="hidden md:block w-1/4 lg:w-1/5 p-5 bg-gray-200 shadow-md mb-5 md:mb-0">
            <h2 class="text-xl font-semibold mb-4">Filtros</h2>
            <!-- Filtros -->
            <div class="mb-4">
                <h3 class="font-semibold">Categorías</h3>
                <ul>
                    <li><a href="#" class="text-blue-500">Categoría 1</a></li>
                    <li><a href="#" class="text-blue-500">Categoría 2</a></li>
                    <li><a href="#" class="text-blue-500">Categoría 3</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold">Precio</h3>
                <input type="range" min="0" max="1000" step="50" class="w-full" />
            </div>
        </div>
        
        <!-- Productos -->
        <div class="w-full md:w-3/4 lg:w-4/5 flex flex-wrap justify-center mt-5">
            <!-- Título -->
            <h1 class="text-6xl text-center mb-4 w-full">Productos Disponibles</h1>
            
            <!-- Productos -->
            @foreach ($productos as $producto)
                <a href="/producto/{{ $producto->id }}" class="m-2 p-5 cursor-pointer max-w-xs flex flex-col bg-gray-200  h-80 shadow-lg ">
                    <img src="{{ $producto->img_url }}" alt="{{ $producto->nombre }}" class="w-full h-36 object-cover mb-1" />
                    <section class="flex flex-col min-h-36 relative">
                            <h3 class="mb-1 mt-2 font-semibold text-gray-700 overflow-hidden text-ellipsis whitespace-nowrap">{{ $producto->nombre }}</h3>
        
                            <!-- Estrellas de calificación -->
                            <div class="flex items-center">
                                @for ($i = 0; $i < (int) $producto->rating; $i++)
                                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
        
                                @for ($i = 0; $i < 5 - (int) $producto->rating; $i++)
                                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                            </div>
        
                            <!-- Precio -->
                            <section class="card-price flex justify-between items-center mt-3 absolute bottom-0 w-full">
                                <div class="price text-green-600 font-bold">
                                    <del class="text-gray-500">${{ $producto->newPrecio }}</del> {{ $producto->precio }}
                                </div>
        
                                <div class="bag">
                                    <svg class="w-6 h-6 text-gray-600 cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16" aria-label="Añadir al carrito">
                                        <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                                    </svg>
                                </div>
                            </section>
                    </section>
                </a>
            @endforeach
        </div>
        
    </div>

    <div class="container mx-auto mt-4 mb-5">
        {{ $productos->links() }}
    </div>
</x-layouts.appD>
