<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <x-slot name='header'>
        <div class="grid grid-cols-2 gap-4">
            <h2 class="col-span-1">Savings</h2>
            <div class="col-span-1 flex justify-end">
                {{-- @livewire('users.new-user-modal',key('new-user-modal')) --}}
            </div>
        </div>
    </x-slot>

    <table class="table-auto w-full">
        {{-- <div>{{$users->count()}}</div> --}}
        <thead>
            <tr>
                <th class="px-4 py-2">
                    <div class="flex items-center">ID</div>
                </th>
                <th class="px-4 py-2">
                    <div class="flex items-center">Client</div>
                </th>
                <th class="px-4 py-2">
                    <div class="flex items-center">Amount</div>
                </th>
                <th class="px-4 py-2">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>

            @forelse ($savings as $saving)
            <tr>
                <td class="border px-4 py-2">{{$saving->client->id}}</td>
                <td class="border px-4 py-2">{{$saving->client->name}}</td>
                <td class="border px-4 py-2">{{$saving->total}}</td>
            
                
                
                <td class="border px-4 py-2 flex justify-center space-x-6">
                @livewire('savings-account-details-modal', ['client_id' => $saving->client->id ], key( 'client-saving-' . $saving->client->id ) )                    
                </td>
            </tr>
            @empty
                <p>No savings yet Available</p>
            @endforelse 
                

        </tbody>
    </table>



</div>
