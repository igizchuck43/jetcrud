<div>
    {{-- The whole world belongs to you. --}}
    
    <x-button wire:click="openUserEditModal" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
        Edit 
    </x-button>


    <x-dialog-modal wire:model="showModal">
        <x-slot name="title">
            Edit User
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <x-label for="name" value="Name" />
                <x-input id="name" class="block mt-1 w-full" type="text" wire:model="name" />
                <x-input-error for="name" />
            </div>

            <div class="mb-4">
                <x-label for="email" value="Email" />
                <x-input id="email" class="block mt-1 w-full" type="email" wire:model="email" />
                <x-input-error for="email" />
            </div>

            <div class="mb-4">
                <x-label for="role" value="Role" />
                <select id="role" class="block mt-1 w-full" wire:model="role">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                <x-input-error for="role" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
                Close
            </x-secondary-button>

            <x-button class="ml-2" wire:click="updateUser" wire:loading.attr="disabled">
                Update
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
