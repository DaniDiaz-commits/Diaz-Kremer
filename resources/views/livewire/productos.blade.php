<div>
    <div class="flex justify-between items-center">
        {{-- <flux:input size="sm" class="max-w-80" placeholder="Buscar por..." wire:model.debounce.500ms="search" /> --}}
    <flux:modal.trigger name="create-producto">
        <flux:button>+ Crea productos</flux:button>
    </flux:modal.trigger>
    </div>

    <livewire:producto-create />
    <livewire:producto-edit />

    <flux:modal name="delete-producto" class="min-w-[22rem]">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Eliminar producto?</flux:heading>

                <flux:subheading>
                    <p>Estás apunto de eliminar el producto.</p>
                    <p>Esta acción no es reversible.</p>
                </flux:subheading>
            </div>

            <div class="flex gap-2">
                <flux:spacer />

                <flux:modal.close>
                    <flux:button variant="ghost">Cancelar</flux:button>
                </flux:modal.close>

                <flux:button type="submit" variant="danger" wire:click='destroy()'>Eliminar producto</flux:button>
            </div>
        </div>
    </flux:modal>

    <div class="overflow-x-auto mt-4">
        <table class="w-full text-sm text-left rtl:text-right #text-gray-500 #dark:text-gray-400">
            <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 #dark:text-gray-400">
                <tr>
                    {{-- <th scope="col" class="px-6 py-3">ID</th> --}}
                    <th scope="col" class="px-4 py-2 cursor-pointer" wire:click="sortBy('id')">
                        ID
                        @if ($sortColumn === 'id')
                            @if ($sortDirection === 'asc') ⬆️ @else ⬇️ @endif
                        @endif
                        
                    </th>
                    {{-- <th scope="col" class="px-6 py-3">Codigo</th> --}}
                    <th scope="col" class="px-4 py-2 cursor-pointer" wire:click="sortBy('codigo')">
                        Codigo
                        @if ($sortColumn === 'codigo')
                            @if ($sortDirection === 'asc') ⬆️ @else ⬇️ @endif
                        @endif
                        
                    </th>
                    {{-- <th scope="col" class="px-6 py-3">Nombre</th> --}}
                    <th scope="col" class="px-4 py-2" wire:click="sortBy('nombre')">
                        Nombre
                        @if ($sortColumn === 'nombre')
                            @if ($sortDirection === 'asc') ⬆️ @else ⬇️ @endif
                        @endif
                        
                    </th>
                    <th scope="col" class="px-4 py-2 text-center cursor-pointer">Descripcion</th>
                    {{-- <th scope="col" class="px-6 py-3">Precio</th> --}}
                    <th scope="col" class="px-1 py-3 cursor-pointer text-center" wire:click="sortBy('precio')">
                        Precio
                        @if ($sortColumn === 'precio')
                            @if ($sortDirection === 'asc') ⬆️ @else ⬇️ @endif
                        @endif
                        
                    </th>
                    <th scope="col" class="px-6 py-3">Stock</th>
                    <th scope="col" class="px-6 py-3">Rating</th>
                    {{-- <th scope="col" class="px-6 py-3">Familia</th> --}}
                    <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="sortBy('id_familia')">
                        Familia
                        @if ($sortColumn === 'id_familia')
                            @if ($sortDirection === 'asc') ⬆️ @else ⬇️ @endif
                        @endif
                        
                    </th>
                    {{-- <th scope="col" class="px-6 py-3">Proveedor</th> --}}
                    <th scope="col" class="px-3 py-3 min-w-20 cursor-pointer" wire:click="sortBy('id_proveedor')">
                        Proveedor
                        @if ($sortColumn === 'id_proveedor')
                            @if ($sortDirection === 'asc') ⬆️ @else ⬇️ @endif
                        @endif
                        
                    </th>
                    {{-- <th scope="col" class="px-6 py-3 text-center">img_url</th> --}}
                    <th scope="col" class="px-6 py-3 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td class="px-6 py-2 font-medium text-gray-600 dark:text-gray-300">{{ $producto->id }}</td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $producto->codigo }}</td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $producto->nombre }}</td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300">
                            {{-- {{ $producto->descripcion }} --}}
                            <div class="truncate max-w-[150px] overflow-hidden">
                                {{ $producto->descripcion }}
                            </div>
                        </td>
                        <td class="px-4 py-2 text-center text-green-600 dark:text-green-400 font-semibold">
                            {{ number_format($producto->precio, 2) }} €
                        </td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300 text-center">{{ $producto->stock }}</td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300 text-center">⭐ {{ number_format($producto->rating, 1) }}</td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $producto->familia->nombre }}</td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $producto->proveedor->nombre }}</td>
                        {{-- <td class="px-6 py-2 text-gray-600 dark:text-gray-300">
                            <div class="truncate max-w-[150px] overflow-hidden">
                                {{ $producto->img_url }}
                            </div>
                        </td> --}}
                        <td class="px-6 py-2 flex justify-center gap-2">
                            <flux:button variant="primary" size="sm" wire:click="edit({{ $producto->id }})">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>                                  
                            </flux:button>
                            <flux:button variant="danger" size="sm" wire:click="delete({{ $producto->id }})">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                  </svg>
                            </flux:button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $productos->links() }}
    </div>
</div>
