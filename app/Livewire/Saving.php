<?php

namespace App\Livewire;

use Livewire\Component;

class Saving extends Component
{
    public function render()
    {
        return view('livewire.saving',[
            'savings' => \App\Models\Saving::groupBy('client_id')->selectRaw('sum(amount) as total, client_id')->get()
        ]);
    }
}
