<div>
    <flux:modal.trigger name="create-producto">
        <flux:button>Crea productos</flux:button>
    </flux:modal.trigger>

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
                    <th scope="col" class="px-3 py-3 cursor-pointer" wire:click="sortBy('id')">
                        ID
                        @if ($sortColumn === 'id')
                            @if ($sortDirection === 'asc') ⬆️ @else ⬇️ @endif
                        @endif
                        
                    </th>
                    {{-- <th scope="col" class="px-6 py-3">Codigo</th> --}}
                    <th scope="col" class="px-3 py-3 cursor-pointer" wire:click="sortBy('codigo')">
                        Codigo
                        @if ($sortColumn === 'codigo')
                            @if ($sortDirection === 'asc') ⬆️ @else ⬇️ @endif
                        @endif
                        
                    </th>
                    {{-- <th scope="col" class="px-6 py-3">Nombre</th> --}}
                    <th scope="col" class="px-3 py-3 cursor-pointer" wire:click="sortBy('nombre')">
                        Nombre
                        @if ($sortColumn === 'nombre')
                            @if ($sortDirection === 'asc') ⬆️ @else ⬇️ @endif
                        @endif
                        
                    </th>
                    <th scope="col" class="px-6 py-3">Descripcion</th>
                    {{-- <th scope="col" class="px-6 py-3">Precio</th> --}}
                    <th scope="col" class="px-2 py-3 cursor-pointer" wire:click="sortBy('precio')">
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
                    <th scope="col" class="px-6 py-3">img_url</th>
                    <th scope="col" class="px-6 py-3">Actions</th>
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
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $producto->precio }}</td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $producto->stock }}</td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $producto->rating }}</td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $producto->familia->nombre }}</td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $producto->proveedor->nombre }}</td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300">
                            {{-- {{ $producto->img_url }} --}}
                            <div class="truncate max-w-[150px] overflow-hidden">
                                {{ $producto->img_url }}
                            </div>
                        </td>
                        <td class="px-6 py-2 flex justify-center">
                            <flux:button variante="primary" size="sm" wire:click="edit({{ $producto->id }})">Edit</flux:button>
                            <flux:button variant="danger" size="sm" wire:click="delete({{ $producto->id }})">Borrar</flux:button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
