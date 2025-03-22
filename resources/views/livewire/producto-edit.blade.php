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
        <flux:select wire:model='id_familia' class="max-w-fit">
            <flux:select.option selected>Familia</flux:select.option>
            <flux:select.option value="1">Familia 1</flux:select.option>
            <flux:select.option value="2">Familia 2</flux:select.option>
            <flux:select.option value="3">Familia 3</flux:select.option>
            <flux:select.option value="4">Familia 4</flux:select.option>            
        </flux:select>
        <flux:select wire:model='id_proveedor' class="max-w-fit">
            <flux:select.option selected>Proveedor</flux:select.option>
            <flux:select.option value="1">Proveedor 1</flux:select.option>
            <flux:select.option value="2">Proveedor 2</flux:select.option>
            <flux:select.option value="3">Proveedor 3</flux:select.option>
            <flux:select.option value="4">Proveedor 4</flux:select.option>            
        </flux:select>
        <flux:input wire:model='img_url' type="file" label="Img" placeholder="La url de la imagen" />
        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" variant="primary" wire:click='update'>Actualizar</flux:button>
        </div>
    </div>
</flux:modal>
</div>
