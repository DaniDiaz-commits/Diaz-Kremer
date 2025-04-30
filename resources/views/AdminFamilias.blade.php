<x-layouts.app :title="__('Diaz Kremer - Admin-Familias')">
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Familias') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Maneja las Familias de los productos') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <livewire:familias />
</x-layouts.app>
