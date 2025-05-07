<x-layouts.app :title="__('Productos')">
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Provedores') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manejar todos los proveedores con los que trabajamos') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>
    
    <livewire:proveedores />
</x-layouts.app>
