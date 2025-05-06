<div class="space-y-6">
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
        {{-- <flux:input size="sm" class="max-w-sm" placeholder="Buscar por..." /> --}}
        <flux:modal.trigger name="create-familia">
            <flux:button>+ Nueva familia</flux:button>
        </flux:modal.trigger>
    </div>

    <livewire:familia-create />
    <livewire:familia-edit />

    <!-- Modal para eliminar -->
    <flux:modal name="delete-familia" class="min-w-[22rem]">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">¿Eliminar familia?</flux:heading>
                <flux:subheading>
                    <p>¿Estás seguro de que deseas eliminar esta familia?</p>
                    <p class="text-sm text-red-500">Esta acción no se puede deshacer.</p>
                </flux:subheading>
            </div>
            <div class="flex justify-end gap-2">
                <flux:modal.close>
                    <flux:button variant="ghost">Cancelar</flux:button>
                </flux:modal.close>
                <flux:button type="submit" variant="danger" wire:click='destroy()'>Eliminar</flux:button>
            </div>
        </div>
    </flux:modal>

    <!-- Tabla -->
    <div class="overflow-x-auto">
        <div class="bg-white dark:bg-gray-900 rounded-xl shadow-md">
            <table class="w-full text-sm text-left text-gray-700 dark:text-gray-300">
                <thead class="text-xs text-gray-500 uppercase bg-gray-50 dark:bg-gray-800 dark:text-gray-400">
                    <tr>
                        <th class="px-4 py-3 cursor-pointer" wire:click="sortBy('id')">
                            ID
                            @if ($sortColumn === 'id')
                                {{ $sortDirection === 'asc' ? '⬆️' : '⬇️' }}
                            @endif
                        </th>
                        <th class="px-4 py-3 cursor-pointer" wire:click="sortBy('nombre')">
                            Nombre
                            @if ($sortColumn === 'nombre')
                                {{ $sortDirection === 'asc' ? '⬆️' : '⬇️' }}
                            @endif
                        </th>
                        <th class="px-4 py-3">Descripción</th>
                        <th class="px-4 py-3 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($familias as $familia)
                        <tr class="border-t dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 transition">
                            <td class="px-4 py-2">{{ $familia->id }}</td>
                            <td class="px-4 py-2">{{ $familia->nombre }}</td>
                            <td class="px-4 py-2">
                                <div class="line-clamp-2 max-w-xs text-gray-600 dark:text-gray-400">
                                    {{ $familia->descripcion }}
                                </div>
                            </td>
                            <td class="px-4 py-2">
                                <div class="flex justify-center gap-2">
                                    <flux:button variant="primary" size="sm" wire:click="edit({{ $familia->id }})">
                                        ✏️
                                    </flux:button>
                                    <flux:button variant="danger" size="sm" wire:click="delete({{ $familia->id }})">
                                        🗑️
                                    </flux:button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="px-4 py-4">
                {{ $familias->links() }}
            </div>
        </div>
    </div>
</div>
