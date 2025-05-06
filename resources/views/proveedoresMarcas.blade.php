<link rel="stylesheet" href="{{ asset('css/sliderMarcas.css') }}">
{{-- <x-header /> --}}
<x-layouts.appD title="Diaz Kremer - Proveedores">
    <h1 class="text-6xl text-center mt-6 text-black">Marcas con las que trabajamos</h1>
    <p class="text-m text-center mt-7 text-black">Conoce los proveedores que trabajan con nosotros, clickando en la imagen irás a su presentación.</p>
    <div class="slider bg-white">
        <div class="media-scroller">
            @foreach ($proveedores as $item)
                <a href="#{{ $item->nombre }}" class="media-element">
                    <img class="min-h-50 max-h-50 min-w-50 object-contain img"
                        src="{{ asset('img/marcas-logos/' . $item->logo_url) }}" alt="">
                </a>
            @endforeach
            <!-- Duplicamos el contenido para la animación infinita -->
            @foreach ($proveedores as $item)
                <a class="media-element">
                    <img class="min-h-50 max-h-50 min-w-50 object-contain img"
                        src="{{ asset('img/marcas-logos/' . $item->logo_url) }}" alt="">
                </a>
            @endforeach
        </div>
    </div>


    <div class="container mx-auto px-6 py-10">
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8">
            @foreach ($proveedores as $item)
                <div id="{{ $item->nombre }}"
                     class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-1">
                    <div class="flex flex-col items-center text-center p-6">
                        <img class="w-24 h-16 object-contain mb-4"
                             src="{{ asset('img/marcas-logos/' . $item->logo_url) }}" alt="{{ $item->nombre }}">
                        <h2 class="text-base font-semibold text-gray-800">{{ $item->nombre }}</h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    
    

</x-layouts.appD>