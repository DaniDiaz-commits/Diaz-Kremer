{{-- php artisan make:livewire ProveedorCreate --}}
<div>
    <flux:modal name="create-proveedor" class="md:w-200">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Crear proveedor</flux:heading>
                <flux:subheading>Añade los campos del proveedor. </flux:subheading>
            </div>

            <flux:input wire:model='nombre' label="Nombre" placeholder="El nombre del proveedor" />
            <flux:textarea wire:model='descripcion' label="Descripcion" placeholder="La descripción del proveedor" />

            <flux:input wire:model='email' label="Email" placeholder="El email del proveedor" />
            <flux:input wire:model='telefono' label="Telefono" placeholder="El telefono del proveedor" />
            <flux:input wire:model='direccion' label="Direccion" placeholder="La dirección del proveedor" />
            <flux:input wire:model='logo_url' label="Logo" placeholder="La url de la imagen del logo del proveedor" />

            {{-- <flux:input wire:model='img_url' type="file" label="Img" placeholder="La url de la imagen" /> --}}
            <div class="flex">
                <flux:spacer />

                <flux:button type="submit" variant="primary" wire:click='submit'>Save</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
