<x-layouts.appD title="Diaz kremer - Productos">
    <div class="flex flex-wrap p-5 text-black bg-gray-100 shadow-lg">
        <!-- Sidebar: Filtros -->
        <div class="hidden md:block w-1/4 lg:w-1/5 p-5 bg-gray-200 shadow-md mb-5 md:mb-0">
            <h2 class="text-xl font-semibold mb-4">Filtros</h2>
            <!-- Filtros -->
            <form id="formulario" action="{{ route('productos.order') }}" method="GET" class="max-w-sm mx-auto mb-8 ml-4 mr-4 mt-8">
                @csrf
                <label for="familias" class="block mb-2 text-xl font-medium text-center text-gray-900">Selecciona una familia</label>
                <select id="familias" name="familia" class="bg-gray-50 border mx-auto overflow-hidden border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">Todas las familias</option>

                    @foreach ($familias as $familia)
                        <option name="nombre" value="{{ $familia->id }}">{{ $familia->nombre }}</option>
                    @endforeach

                </select>
                <h1 class="block mb-2 mt-2 text-2xl text-center font-medium text-gray-900">Ordenar por</h1>
                <p class="block mb-2 mt-2 text-xl font-medium text-gray-900">Nombre</p>
                <div>
                    @php
                        $ordenes = [
                            'A-Z' => 'az',
                            'Z-A' => 'za',
                            'Por relevancia' => 'relevancia',
                            'Más vendidos' => 'mas-vendidos',
                            'Mejor valorados' => 'mejor-valorados',
                        ];
                    @endphp

                    @foreach ($ordenes as $label => $value)
                        <label class="block">
                            <input type="radio" name="orden" value="{{ $value }}"
                                class="w-4 h-4 text-blue-900 bg-gray-100 border-gray-300 focus:bg-none">
                            <span class="check mr-2"></span> {{ $label }}
                        </label>
                    @endforeach

                </div>
                <p class="block mb-2 mt-2 text-xl font-medium text-gray-900">Precio</p>
                <div>
                    @php
                        $prices = ['All', '0 € - 30 €', '30 € -  60€', '70 € - 100 €', '+100 €'];
                        $contador = 0;
                    @endphp

                    @foreach ($prices as $price)
                        <label class="block">
                            <input type="radio" name="precio" value="{{ $contador++ }}"
                                class="w-4 h-4 text-blue-900 bg-gray-100 border-gray-300 focus:bg-none">
                            <span class="check mr-2"></span> {{ $price }}
                        </label>
                    @endforeach
                </div>
                <p class="block mb-2 mt-2 text-xl font-medium text-gray-900">Rating</p>
                <div>
                    @for ($i = 5; $i >= 1; $i--)
                        <label class="block">
                            <input type="radio" name="rating" value="{{ $i }}"
                                class="w-4 h-4 text-blue-900 bg-gray-100 border-gray-300 focus:bg-none">
                            <span class="check mr-2"></span> {{ $i }} ⭐
                        </label>
                    @endfor
                </div>
                </br></br></br></br></br></br>
            </form>
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
