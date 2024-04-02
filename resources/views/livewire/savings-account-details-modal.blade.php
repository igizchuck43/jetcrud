<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <x-button wire:click="openSavingsDetailsModal">
        Details
    </x-button>

    <x-dialog-modal wire:model="savingsDetailsModal_isOpen">
        <x-slot name="title">
            Savings Account Details  for {{$client->name}}
        </x-slot>

        <x-slot name="content">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created At</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created By</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                       
            @forelse ($client->savings as $saving)
                
                     <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{$saving->id}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$saving->created_at}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$saving->creator->name}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$saving->amount}}</td>
                        </tr>
                   
            @empty
                <tr><td cols="4">No transactions yet</td></tr>
            @endforelse
        </tbody>
    </table>
        </x-slot>
        

        <x-slot name="footer">
            <x-button wire:click="closeSavingsDetailsModal">
                Close
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
