{{-- php artisan make:livewire PostCreate --}}
<div>
    <flux:modal name="edit-post" class="md:w-200">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Update profile</flux:heading>
            <flux:subheading>Add details for the post. Let`s add all the details. </flux:subheading>
        </div>

        <flux:input wire:model='title' label="Title" placeholder="Your post title" />
        <flux:textarea wire:model='body' label="Body" placeholder="Your post body" />


        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" variant="primary" wire:click='update'>Update</flux:button>
        </div>
    </div>
</flux:modal>
</div>
