<link rel="stylesheet" href="{{ asset('css/slider.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> --}}
{{-- <x-header /> --}}
<!-- Agregar CSS de Leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

<!-- Agregar JS de Leaflet -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<x-layouts.appD title="Diaz Kremer - Inicio">
    <x-slider />
    <section class="quienSomos bg-tertiary">
        <h2 class="text-4xl text-black dark:text-black">Quienes somos</h2>
        <div class="text-black dark:text-black">
            {{-- <img src="https://www.arteregal.com/assets/img/quienes-somos.png" class="" alt="Diaz kremer"> --}}
        </div>
        <div class="container mx-auto px-4 text-black dark:text-black">
            <p>En Díaz Kremer, nos enorgullecemos de ser una empresa familiar con más de 60 años de trayectoria
                arraigada en
                Burgos. Refundada en el año 2005 con el compromiso de ofrecer soluciones integrales a nuestros clientes,
                hemos
                crecido manteniendo intactos los valores que nos definen: calidad, responsabilidad y cercanía.
                <br /> <br />
                Nacimos como un pequeño proyecto familiar en Burgos, impulsados por la pasión de distribucion al pequeño
                comercio.
                Con el tiempo, gracias a la confianza de nuestros
                clientes y al esfuerzo de un equipo dedicado, nos convertimos en referentes en la distribución en
                Castilla y León, expandiendo nuestra
                presencia a nivel nacional.
                <br />
            </p>
            <ul>
                <li>Mision: Brindar soluciones innovadoras y personalizadas que superen las expectativas de nuestros
                    clientes, contribuyendo al progreso de los sectores en los que operamos.</li>
                <li>Vision: Ser líderes en distribución integral mediante la excelencia operativa, la innovación
                    constante y el
                    compromiso con un futuro sostenible.</li>
                <li>Valores:
                    <ul class="list-disc list-inside">
                        <li>Integridad: Actuamos con transparencia y ética en cada proyecto.</li>
                        <li>Compromiso local: Nos vinculamos con Burgos y su comunidad, apoyando iniciativas sociales y
                            culturales.</li>
                        <li>Sostenibilidad: Implementamos prácticas responsables con el medio ambiente.</li>
                    </ul>
                </li>
            </ul>
            <p>
                Somos un equipo multidisciplinar de profesionales apasionados, expertos en distribución.
                </br>
            </p>
        </div>
    </section>

    {{-- <section id="testimonials" aria-label="What our customers are saying" class="bg-slate-50 py-20 sm:py-32">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl md:text-center">
                        <h2 class="font-display text-3xl text-center tracking-tight text-slate-900 sm:text-4xl">Unas palabras del CEO</h2>
                    </div>
                    <ul role="list" class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-6 sm:gap-8 lg:mt-20 lg:max-w-none lg:grid-cols-3">
                        @foreach ($users as $user)
                            <li>
                                <ul role="list" class="flex flex-col gap-y-6 sm:gap-y-8">
                                    <li>
                                        <figure class="relative rounded-2xl bg-white p-6 shadow-xl shadow-slate-900/10"><svg
                                                aria-hidden="true" width="105" height="78"
                                                class="absolute left-6 top-6 fill-slate-100">
                                                <path d="M25.086 77.292c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622C1.054 58.534 0 53.411 0 47.686c0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C28.325 3.917 33.599 1.507 39.324 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Zm54.24 0c-4.821 0-9.115-1.205-12.882-3.616-3.767-2.561-6.78-6.102-9.04-10.622-2.11-4.52-3.164-9.643-3.164-15.368 0-5.273.904-10.396 2.712-15.368 1.959-4.972 4.746-9.567 8.362-13.786a59.042 59.042 0 0 1 12.43-11.3C82.565 3.917 87.839 1.507 93.564 0l11.074 13.786c-6.479 2.561-11.677 5.951-15.594 10.17-3.767 4.219-5.65 7.835-5.65 10.848 0 1.356.377 2.863 1.13 4.52.904 1.507 2.637 3.089 5.198 4.746 3.767 2.41 6.328 4.972 7.684 7.684 1.507 2.561 2.26 5.5 2.26 8.814 0 5.123-1.959 9.19-5.876 12.204-3.767 3.013-8.588 4.52-14.464 4.52Z"></path>
                                            </svg>
                                            <blockquote class="relative">
                                                <p class="text-lg tracking-tight text-slate-900">{{ $user->opinion }}</p>
                                            </blockquote>
                                            <figcaption
                                                class="relative mt-6 flex items-center justify-between border-t border-slate-100 pt-6">
                                                <div>
                                                    <div class="font-display text-base text-slate-900">{{ $user->name }}</div>
                                                </div>
                                                <div class="overflow-hidden rounded-full bg-slate-50">
                                                    <img alt="" class="h-14 w-14 object-cover" style="color:transparent" src="https://ui-avatars.com/api/?name={{$user->name}}">
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </li>
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section> --}}

    <div id="contacto" class="container-form bg-gray-100 dark:bg-[#5b7ba6] ">
        <div class="info-form">
            <h2 class=" dark:text-black">Contáctanos</h2>
            <p class=" dark:text-black">¿Tienes alguna pregunta o necesitas más información?<br> De lunes a viernes 8:15
                a 13:45 - 16:00 a 19:30.</p>
            <a href="https://wa.me/+34683580828"><i class="fa fa-phone"></i> +34 123-456-789</a> <!-- 947483961 -->
            <a href=""><i class="fa fa-envelope"></i> Email: admon.kremer@grupocrisol.com</a>
            <a href=""><i class="fa fa-map-marked"></i>Burgos, España</a>
        </div>
        {{-- HACER MAS VALIDACIONES --}}
        <form action="https://formsubmit.co/daniel.diaz04d@gmail.com" method="POST" autocomplete="off">
            <input type="text" name="nombre" class="campo dark:text-black" placeholder="Ingresa tu nombre"
                pattern="[A-Za-z ]{1,50}" required>
            <input type="email" name="email" class="campo dark:text-black" placeholder="Ingresa tu correo"
                pattern="[a-zA-Z0-9!#$%&'*\/=?^_`\{\|\}~\+\-]([\.]?[a-zA-Z0-9!#$%&'*\/=?^_`\{\|\}~\+\-])+@[a-zA-Z0-9]([^@&%$\/\(\)=?¿!\.,:;]|\d)+[a-zA-Z0-9][\.][a-zA-Z]{2,4}([\.][a-zA-Z]{2})?"
                required>
            <textarea name="mensaje" placeholder="Ingrese su mensaje" minlength="30" class=" dark:text-black"></textarea>
            <input type="submit" name="enviar" class="btn-enviar">
        </form>
    </div>
   <section id="localizacion" class="pb-15 bg-gray-100">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl text-black dark:text-black">Nuestra Localización</h2>
            <p class="text-lg text-black dark:text-black mt-4">Encuentra nuestra ubicación en Burgos, España, en el mapa a continuación.</p>
            <div id="map" class="rounded-lg mt-7" style="height: 500px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.7);"></div>
        </div>
    </section>

    {{-- <script type="text/javascript" src="{{ asset('js/script.js') }}"></script> --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {            
            var map = L.map('map').setView([42.373426991593206, -3.7109438098017513], 13); // Coordenadas de Burgos
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 18,
                // attribution: '© OpenStreetMap'
            }).addTo(map);
            var marker = L.marker([42.373426991593206, -3.7109438098017513]).addTo(map);
            marker.bindPopup("<b>Díaz Kremer</b><br>Dirección: C. Merindad de Cuesta Urria, 16, 09001<br>Burgos, España").openPopup();
        });
        // var map = L.map('map').setView([42.373426991593206, -3.7109438098017513], 13);

        // L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        // }).addTo(map);

        // L.marker([42.373426991593206, -3.7109438098017513]).addTo(map).bindPopup('¡Aquí está Diaz Kremer!').openPopup();
    </script>
</x-layouts.appD>
<script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>
