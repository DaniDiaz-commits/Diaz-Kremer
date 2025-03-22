<div>
    <flux:modal name="edit-familia" class="md:w-200">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Modificar familia</flux:heading>
                <flux:subheading>Modifica los detalles de la familia. </flux:subheading>
            </div>

            <flux:input wire:model='nombre' label="nombre" placeholder="El nombre de la familia" />
            <flux:textarea wire:model='descripcion' label="descripcion" placeholder="La descripcion" />


            <div class="flex">
                <flux:spacer />
                <flux:button type="submit" variant="primary" wire:click='update'>Actualizar</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
