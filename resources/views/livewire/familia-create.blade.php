<div>
    <flux:modal name="create-familia" class="md:w-200">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Crear familia</flux:heading>
                <flux:subheading>Añade los detalles de la familia</flux:subheading>
            </div>

            <flux:input wire:model='nombre' label="nombre" placeholder="El nombre de la familia" />
            <flux:textarea wire:model='descripcion' label="descripcion" placeholder="La descripcion" />


            <div class="flex">
                <flux:spacer />

                <flux:button type="submit" variant="primary" wire:click='submit'>Crear</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
