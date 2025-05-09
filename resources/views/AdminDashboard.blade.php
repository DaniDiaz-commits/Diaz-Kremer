<x-layouts.app :title="__('Diaz Kremer - Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-3">
            <!-- Total Productos -->
            <div
                class="relative rounded-2xl border p-6 bg-[#88a0bf] dark:bg-[#f2f2f2] shadow-md w-full min-h-[280px] max-h-[300px] overflow-hidden">
                <h3 class="text-lg font-semibold mb-2 text-gray-700 dark:text-gray-800 text-center">Productos
                    comerciables
                </h3>
                <canvas id="totalProductosChart" class="w-full h-full"></canvas>
            </div>

            <!-- Valor Inventario -->
            <div
                class="relative rounded-2xl border p-6 bg-[#88a0bf] dark:bg-[#f2f2f2] shadow-md w-full min-h-[280px] max-h-[300px] overflow-hidden">
                <h3 class="text-lg font-semibold mb-2 text-gray-700 dark:text-gray-900 text-center">Valor del inventario
                    (€)
                </h3>
                <canvas id="valorInventarioChart" class="w-full h-full"></canvas>
            </div>

            <!-- Productos por Familia -->
            <div
                class="relative rounded-2xl border p-6 bg-[#88a0bf] dark:bg-[#f2f2f2] shadow-md w-full min-h-[280px] overflow-hidden">
                <h3 class="text-lg font-semibold mb-2 text-gray-700 dark:text-gray-800 text-center">Top 5 Familias con
                    más
                    productos </h3>
                <canvas id="topfamiliasChart" class="w-full h-full"></canvas>
            </div>

            <!-- Gráfico de top 5 Familias con más productos -->
            <div
                class="relative rounded-2xl border p-6 bg-[#88a0bf] dark:bg-[#f2f2f2] shadow-md w-full min-h-[280px] overflow-hidden block xl:hidden">
                <h3 class="text-lg font-semibold mb-2 text-gray-700 dark:text-gray-800 text-center">Proveedores</h3>
                <canvas id="proveedoresChart" class="w-full h-full"></canvas>
            </div>

        </div>

        <!-- Productos Recientes -->
        <div class="relative overflow-hidden rounded-xl border p-4 bg-[#88a0bf] dark:bg-[#1b2126] shadow">
            <h3 class="text-lg font-semibold mb-4 text-gray-700 dark:text-white">Productos Recientes</h3>
            <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($productosRecientes as $producto)
                    <li class="py-3">
                        <p class="text-base font-medium text-gray-900 dark:text-white">{{ $producto->nombre }}</p>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Precio:
                            <span> {{ number_format($producto->precio, 2) }} €</span>
                        </p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Chart.js -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="module" src="https://unpkg.com/cally"></script>
    <script>
        if (!localStorage.getItem("pageReloaded")) {
            localStorage.setItem("pageReloaded", "true");
            location.reload();
        } else {
            localStorage.removeItem("pageReloaded");
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const totalProductos = @json($totalProductos);
            const valorInventario = @json($valorInventario);
            const topFamilias = @json($topFamilias);
            const proveedores = @json($proveedores);

            // Total Productos
            new Chart(document.getElementById('totalProductosChart'), {
                type: 'bar',
                data: {
                    labels: ['Productos'],
                    datasets: [{
                        label: 'Total Productos',
                        data: [totalProductos],
                        backgroundColor: ['#1b2126']
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                }
            });

            // Valor Inventario
            new Chart(document.getElementById('valorInventarioChart'), {
                type: 'bar',
                data: {
                    labels: ['Inventario'],
                    datasets: [{
                        label: 'Valor Total (€)',
                        data: [valorInventario],
                        backgroundColor: ['#1b2126']
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Top Familias
            const topFamiliasNombres = topFamilias.map(f => f.familia);
            const familiasDistribucion = topFamilias.map(f => f.total);

            const coloresFamiliasBase = [
                '#23518c',
                '#5b7ba6',
                '#88a0bf',
                '#1b2126',
                '#f2f2f2'
            ];

            const coloresFamilias = topFamiliasNombres.map((_, i) => coloresFamiliasBase[i % coloresFamiliasBase
                .length]);

            new Chart(document.getElementById('topfamiliasChart'), {
                type: 'pie',
                data: {
                    labels: topFamiliasNombres,
                    datasets: [{
                        label: 'Productos',
                        data: familiasDistribucion,
                        backgroundColor: coloresFamilias
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom'
                        }
                    }
                }
            });

            // Proveedores (solo en móvil)
            let proveedorChart = null;
            function renderProveedorChart() {
                if (window.innerWidth < 1280 && !proveedorChart) {
                    const proveedorNombres = proveedores.map(p => p.nombre);
                    const proveedorDistribucion = Array(proveedorNombres.length).fill(1);
                    const colores = proveedorNombres.map(() => generarColorDesdePaleta(coloresFamiliasBase));


                    const ctx = document.getElementById('proveedoresChart');
                    if (!ctx) return;

                    proveedorChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: proveedorNombres,
                            datasets: [{
                                // label: 'Distribución de Proveedores',
                                data: proveedorDistribucion,
                                backgroundColor: colores
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    display: true,
                                    position: 'bottom'
                                }
                            }
                        }
                    });
                }
            }

            renderProveedorChart();
            window.addEventListener('resize', renderProveedorChart);
        });

        function generarColorDesdePaleta(paleta) {
            const base = paleta[Math.floor(Math.random() * paleta.length)];

            const tempDiv = document.createElement('div');
            tempDiv.style.color = base;
            document.body.appendChild(tempDiv);
            const rgb = getComputedStyle(tempDiv).color;
            document.body.removeChild(tempDiv);

            const [r, g, b] = rgb.match(/\d+/g).map(Number);

            const rPerc = r / 255;
            const gPerc = g / 255;
            const bPerc = b / 255;

            const max = Math.max(rPerc, gPerc, bPerc);
            const min = Math.min(rPerc, gPerc, bPerc);
            let h, s, l = (max + min) / 2;

            if (max === min) {
                h = s = 0;
            } else {
                const d = max - min;
                s = l > 0.5 ? d / (2 - max - min) : d / (max + min);
                switch (max) {
                    case rPerc:
                        h = (gPerc - bPerc) / d + (gPerc < bPerc ? 6 : 0);
                        break;
                    case gPerc:
                        h = (bPerc - rPerc) / d + 2;
                        break;
                    case bPerc:
                        h = (rPerc - gPerc) / d + 4;
                        break;
                }
                h *= 60;
            }

            h = (h + Math.random() * 30 - 15 + 360) % 360;
            s = Math.min(100, Math.max(30, s * 100 + (Math.random() * 20 - 10)));
            l = Math.min(90, Math.max(30, l * 100 + (Math.random() * 10 - 5)));

            return `hsl(${h.toFixed(0)}, ${s.toFixed(0)}%, ${l.toFixed(0)}%)`;
        }
    </script>



</x-layouts.app>
