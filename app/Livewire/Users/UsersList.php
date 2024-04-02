<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UsersList extends Component
{


    public function mount(){
        if (!Auth::user()->hasRole('admin')) {
            abort(403, 'Unauthorized Access');
        }
    }

    public function render()
    {
        return view('livewire.users.users-list',[
            'users' => User::all()
        ]);
    }

    public function deleteUser($userId){
        User::findOrFail($userId)->delete();
    }
}
