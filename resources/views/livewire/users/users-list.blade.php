<div wire:poll class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-slot name='header'>
        <div class="grid grid-cols-2 gap-4">
            <h2 class="col-span-1">Users</h2>
            <div class="col-span-1 flex justify-end">
                @livewire('users.new-user-modal',key('new-user-modal'))
            </div>
        </div>
    </x-slot>
    <table class="table-auto w-full">
        <div>{{$users->count()}}</div>
        <thead>
            <tr>
                <th class="px-4 py-2">
                    <div class="flex items-center">ID</div>
                </th>
                <th class="px-4 py-2">
                    <div class="flex items-center">Name</div>
                </th>
                <th class="px-4 py-2">
                    <div class="flex items-center">Email</div>
                </th>
                <th class="px-4 py-2">
                    Status
                </th>
                <th class="px-4 py-2">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>

            @forelse ($users as $user)
            <tr>
                <td class="border px-4 py-2">{{$user->id}}</td>
                <td class="border px-4 py-2">{{$user->name}}</td>
                <td class="border px-4 py-2">{{$user->email}}</td>
                <td class="border px-4 py-2">
                    <img class="h-10 w-10 rounded-full" src="{{$user->profile_photo_url}}" alt="{{$user->name}}">
                </td>
                
                
                <td class="border px-4 py-2 flex justify-end space-x-6">
               @livewire('users.edit-user-modal', ['user' => $user], key('edit-user-modal-'.$user->id))

                <x-button wire:confirm="Are you Sure!!" wire:click="deleteUser({{$user->id}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    Delete
                </x-button>
                    
                    
                </td>
            </tr>
            @empty
                <p>No Users Available</p>
            @endforelse 
                

        </tbody>
    </table>










</div>