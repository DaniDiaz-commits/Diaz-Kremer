<x-layouts.app :title="__('Diaz Kremer - Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl">
        <div class="grid gap-3 md:grid-cols-3">
            <!-- Total Productos -->
            <div class="relative aspect-video rounded-xl border p-4 bg-white dark:bg-gray-900 shadow">
                <h3 class="text-lg font-semibold mb-2 text-gray-700 dark:text-white text-center">Total de Productos</h3>
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
            // Total Productos
            new Chart(document.getElementById('totalProductosChart'), {
                type: 'bar',
                data: {
                    labels: ['Total Productos'],
                    datasets: [{
                        label: 'Cantidad',
                        data: [{{ $totalProductos }}],
                        backgroundColor: '#60a5fa',
                        borderColor: '#3b82f6',
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

            // Valor Inventario
            new Chart(document.getElementById('valorInventarioChart'), {
                type: 'bar',
                data: {
                    labels: ['Valor Total'],
                    datasets: [{
                        label: '€',
                        data: [{{ $valorInventario }}],
                        backgroundColor: '#4ade80',
                        borderColor: '#16a34a',
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


            // Productos por Familia
            if (labelsFamilia.length > 0 && dataFamilia.length > 0) {
    new Chart(document.getElementById('familiaChart'), {
        type: 'pie',
        data: {
            labels: labelsFamilia,
            datasets: [{
                data: dataFamilia,
                backgroundColor: [
                    '#22c55e', '#3b82f6', '#f43f5e', '#eab308',
                    '#a855f7', '#0ea5e9', '#ef4444', '#10b981', '#facc15'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });
} else {
    console.warn('No hay datos suficientes para graficar productos por familia.');
}
        });
    </script>
</x-layouts.app>
