<div>
    <flux:modal.trigger name="create-post">
        <flux:button>Create post</flux:button>
    </flux:modal.trigger>

    <livewire:post-create />
    <livewire:post-edit />

    <flux:modal name="delete-post" class="min-w-[22rem]">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Delete post?</flux:heading>

                <flux:subheading>
                    <p>You're about to delete this post.</p>
                    <p>This action cannot be reversed.</p>
                </flux:subheading>
            </div>

            <div class="flex gap-2">
                <flux:spacer />

                <flux:modal.close>
                    <flux:button variant="ghost">Cancel</flux:button>
                </flux:modal.close>

                <flux:button type="submit" variant="danger" wire:click='destroy()'>Delete post</flux:button>
            </div>
        </div>
    </flux:modal>

    <div class="overflow-x-auto mt-4">
        <table class="w-full text-sm text-left rtl:text-right #text-gray-500 #dark:text-gray-400">
            <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 #dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Title</th>
                    <th scope="col" class="px-6 py-3">Body</th>
                    <th scope="col" class="px-6 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td class="px-6 py-2 font-medium text-gray-600 dark:text-gray-300">{{ $post->id }}</td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $post->title }}</td>
                        <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{ $post->body }}</td>
                        <td class="px-6 py-2">
                            <flux:button size="sm" wire:click="edit({{ $post->id }})">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>                                  
                            </flux:button>
                            <flux:button variant="danger" size="sm" wire:click="delete({{ $post->id }})">
                                
                            </flux:button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
