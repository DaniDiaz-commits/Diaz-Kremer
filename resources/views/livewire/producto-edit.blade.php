{{-- php artisan make:livewire ProductCreate --}}
<div>
    <flux:modal name="edit-producto" class="md:w-200">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Modificar producto</flux:heading>
                <flux:subheading>Modificar los campos del producto.</flux:subheading>
            </div>

            <flux:input wire:model='codigo' label="Codigo" placeholder="El código del producto" />
            <flux:input wire:model='nombre' label="Nombre" placeholder="El nombre del producto" />
            <flux:textarea wire:model='descripcion' label="Descripcion" placeholder="La descripción del producto" />

            <flux:input wire:model='precio' label="Precio" placeholder="El precio del producto" />
            <flux:input wire:model='stock' label="Stock" placeholder="El stock del producto" />
            <flux:input wire:model='rating' label="Rating" placeholder="La valoración del producto" />
            <flux:select wire:model='id_familia' class="max-w-fit" label="Familia">
                <flux:select.option value="" disabled selected>Selecciona una familia</flux:select.option>
                @foreach ($familias as $familia)
                    <flux:select.option value="{{ $familia->id }}">{{ $familia->nombre }}</flux:select.option>
                @endforeach
            </flux:select>

            <flux:select wire:model='id_proveedor' class="max-w-fit" label="Proveedor">
                <flux:select.option value="" disabled selected>Selecciona un proveedor</flux:select.option>
                @foreach ($proveedores as $proveedor)
                    <flux:select.option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</flux:select.option>
                @endforeach
            </flux:select>
            <flux:input wire:model='img_url' type="file" label="Img" placeholder="La url de la imagen" />
            <div class="flex">
                <flux:spacer />

                <flux:button type="submit" variant="primary" wire:click='update'>Actualizar</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
