<div>
    <div class="flex justify-between items-center">
        <flux:input size="sm" class="max-w-80" placeholder="Buscar por..." />
        <flux:modal.trigger name="create-familia">
            <flux:button>Crear familia</flux:button>
        </flux:modal.trigger>
    </div>

    <livewire:familia-create />
    <livewire:familia-edit />

    <flux:modal name="delete-familia" class="min-w-[22rem]">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Delete post?</flux:heading>

                <flux:subheading>
                    <p>Seguro que quieres eliminar esta familia.</p>
                    <p>Esta acción es irreversible.</p>
                </flux:subheading>
            </div>

            <div class="flex gap-2">
                <flux:spacer />

                <flux:modal.close>
                    <flux:button variant="ghost">Cancelar</flux:button>
                </flux:modal.close>

                <flux:button type="submit" variant="danger" wire:click='destroy()'>Delete post</flux:button>
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
                            @if ($sortDirection === 'asc')
                                ⬆️
                            @else
                                ⬇️
                            @endif
                        @endif

                    </th>
                    {{-- <th scope="col" class="px-6 py-3">Nombre</th> --}}
                    <th scope="col" class="px-3 py-3 cursor-pointer" wire:click="sortBy('nombre')">
                        Nombre
                        @if ($sortColumn === 'nombre')
                            @if ($sortDirection === 'asc')
                                ⬆️
                            @else
                                ⬇️
                            @endif
                        @endif

                    </th>
                    <th scope="col" class="px-6 py-3">Descripcion</th>
                    <th scope="col" class="px-6 py-3 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($familias as $familia)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td class="px-6 py-2 font-medium text-gray-600 dark:text-gray-300">{{ $familia->id }}</td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $familia->nombre }}</td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300 max-w-72">
                            <div class="truncate max-w-[150px] overflow-hidden">
                                {{ $familia->descripcion }}
                            </div>
                        </td>
                        <td class="px-6 py-2 flex justify-center gap-2">
                            <flux:button variante="primary" size="sm" wire:click="edit({{ $familia->id }})">Edit
                            </flux:button>
                            <flux:button variant="danger" size="sm" wire:click="delete({{ $familia->id }})">Delete
                            </flux:button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $familias->links() }}
        </div>
        {{-- <flux:pagination :paginator="$familias" /> --}}

    </div>
</div>
