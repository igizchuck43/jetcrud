<div>
    {{-- Stop trying to control. --}}
    <x-button wire:click="openNewUserModal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        new user
    </x-button>

    <x-dialog-modal wire:model="showNewUserModal">
        <x-slot name="title">
            {{ __('New User') }}
        </x-slot>

        <x-slot name="content">
            
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-1">
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="name" />
                    <x-input-error for="name" class="mt-2" />
                </div>
                <div class="col-span-1">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="email" />
                    <x-input-error for="email" class="mt-2" />
                </div>
                <div class="col-span-1">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="password" />
                    <x-input-error for="password" class="mt-2" />
                </div>
                <div class="col-span-1">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="password_confirmation" />
                    <x-input-error for="password_confirmation" class="mt-2" />
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="closeNewUserModal" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button class="ml-2" wire:click="createUser" wire:loading.attr="disabled">
                {{ __('Create') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
