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
                <thead class="text-xs text-gray-500 uppercase bg-gray-50 dark:bg-[#1b2126] dark:text-gray-400">
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
                        <tr class="odd:bg-white odd:dark:bg-[#5b7ba6] even:dark:bg-[#88a0bf] border-b dark:border-gray-700">
                            <td class="px-4 py-2">{{ $familia->id }}</td>
                            <td class="px-4 py-2">{{ $familia->nombre }}</td>
                            <td class="px-4 py-2">
                                <div class="line-clamp-2 max-w-xs text-gray-600 dark:text-gray-400">
                                    {{ $familia->descripcion }}
                                </div>
                            </td>
                            <td class="px-6 py-2 flex justify-center gap-2">
                                    <flux:button variant="primary" size="sm" wire:click="edit({{ $familia->id }})">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>    
                                    </flux:button>
                                    <flux:button variant="danger" size="sm" wire:click="delete({{ $familia->id }})">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                          </svg>
                                    </flux:button>
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
