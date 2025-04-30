<link rel="stylesheet" href="{{ asset('css/sliderMarcas.css') }}">
{{-- <x-header /> --}}
<x-layouts.appD title="Diaz Kremer - Proveedores">
    <h1 class="text-6xl text-center mt-6">Marcas con las que trabajamos</h1>
    <p class="text-m text-center mt-7">Conoce los proveedores que trabajan con nosotros, clickando en la imagen irás
        a su presentación.</p>
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


    <div class="container mx-auto">
        @foreach ($proveedores as $item)
            <div id="{{ $item->nombre }}" class="container bg-gray-100 mb-4 border-6 border-black">
                <div class="flex flex-col items-center justify-center gap-1 contenedor-proveedor mb-10">
                    <h2 class="text-4xl text-center m-10 dark:text-black">{{ $item->nombre }}</h2>
                    <img class="max-w-[200px] max-h-[100px] object-contain"
                        src="{{ asset('img/marcas-logos/' . $item->logo_url) }}" alt="">
                </div>
            </div>
        @endforeach
    </div>

</x-layouts.appD>