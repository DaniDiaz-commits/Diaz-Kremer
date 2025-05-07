<x-layouts.app :title="__('Diaz Kremer - Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl">
        <div class="grid gap-3 md:grid-cols-3">
            <!-- Total Productos -->
            <div class="relative aspect-video rounded-xl border p-4 bg-white dark:bg-gray-900 shadow">
                <h3 class="text-lg font-semibold mb-2 text-gray-700 dark:text-white text-center">Productos comerciables</h3>
                <canvas id="totalProductosChart" class="w-full h-full"></canvas>
            </div>

            <!-- Valor Inventario -->
            <div class="relative aspect-video rounded-xl border p-4 bg-white dark:bg-gray-900 shadow">
                <h3 class="text-lg font-semibold mb-2 text-gray-700 dark:text-white text-center">Valor Inventario (€)</h3>
                <canvas id="valorInventarioChart" class="w-full h-full"></canvas>
            </div>

            <!-- Productos por Familia -->
            <div class="relative aspect-video rounded-xl border p-4 bg-white dark:bg-gray-900 shadow">
                <h3 class="text-lg font-semibold mb-2 text-gray-700 dark:text-white text-center">Productos por Familia</h3>
                <canvas id="familiaChart" class="w-full h-full"></canvas>
            </div>
        </div>

        <!-- Productos Recientes -->
        <div class="relative overflow-hidden rounded-xl border p-4 bg-white dark:bg-gray-900 shadow">
            <h3 class="text-lg font-semibold mb-4 text-gray-700 dark:text-white">Productos Recientes</h3>
            <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($productosRecientes as $producto)
                    <li class="py-3">
                        <p class="text-base font-medium text-gray-900 dark:text-white">{{ $producto->nombre }}</p>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Precio:
                            €{{ number_format($producto->precio, 2) }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Chart.js -->
    @php
        $labelsFamilia = $productosPorFamilia->pluck('familia')->toArray();
        $totalesFamilia = $productosPorFamilia->pluck('total')->toArray();
    @endphp
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const labelsFamilia = {!! json_encode($labelsFamilia) !!};
        const dataFamilia = {!! json_encode($totalesFamilia) !!};
    
        document.addEventListener('DOMContentLoaded', () => {
            new Chart(document.getElementById('totalProductosChart'), {
                type: 'bar',
                data: {
                    labels: ['Productos'],
                    datasets: [{
                        label: 'Cantidad',
                        data: [{{ $totalProductos }}],
                        backgroundColor: '#23518c',
                        borderColor: '#1b2126',
                        borderWidth: 1
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

            new Chart(document.getElementById('valorInventarioChart'), {
                type: 'bar',
                data: {
                    labels: ['Valor Total'],
                    datasets: [{
                        label: '€',
                        data: [{{ $valorInventario }}],
                        backgroundColor: '#5b7ba6',
                        borderColor: '#1b2126',
                        borderWidth: 1
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
    
            if (labelsFamilia.length > 0 && dataFamilia.length > 0) {
                new Chart(document.getElementById('familiaChart'), {
                    type: 'bar',
                    data: {
                        labels: labelsFamilia,
                        datasets: [{
                            label: 'Productos por Familia',
                            data: dataFamilia,
                            backgroundColor: '#88a0bf',
                            borderColor: '#1b2126',
                            borderWidth: 1
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
            } else {
                console.warn('No hay datos suficientes para graficar productos por familia.');
            }
        });
    </script>
    
</x-layouts.app>
