<?php

namespace App\Livewire;

use Livewire\Component;

class SavingsAccountDetailsModal extends Component
{
    public $client;
    public $savingsDetailsModal_isOpen = false;

    public function openSavingsDetailsModal() {
        $this->savingsDetailsModal_isOpen = true;
        
    }

    public function closeSavingsDetailsModal() {
        $this->savingsDetailsModal_isOpen = false;  
    }   

    public function mount($client_id) {
        $this->client = \App\Models\User::findOrFail($client_id);
    }
    public function render()
    {
        return view('livewire.savings-account-details-modal');
    }
}
