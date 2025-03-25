<x-layouts.app :title="__('Productos')">
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Productos') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manejar los productos') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>
    
    <livewire:productos />
</x-layouts.app>
