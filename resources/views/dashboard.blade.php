<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>
</x-layouts.app>

{{-- <div class="p-4 bg-white dark:bg-gray-800 rounded-xl shadow">
    <h3 class="text-lg font-bold">Total de productos</h3>
    <p class="text-2xl">{{ $totalProductos }}</p>
</div>
<div class="p-4 bg-white dark:bg-gray-800 rounded-xl shadow">
    <h3 class="text-lg font-bold">Total de ventas</h3>
    <p class="text-2xl">${{ number_format($totalVentas, 2) }}</p>
</div>
<div class="p-4 bg-white dark:bg-gray-800 rounded-xl shadow">
    <h3 class="text-lg font-bold">Stock Bajo</h3>
    <p class="text-2xl text-red-500">{{ $productosStockBajo }}</p>
</div> --}}