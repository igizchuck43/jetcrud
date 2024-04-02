<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class NewUserModal extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;


    public $showNewUserModal = false;

    public function openNewUserModal(){
        $this->showNewUserModal = true;
    }

    public function closeNewUserModal(){
        $this->showNewUserModal = false;
    }


    public function createUser(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);
        $this->reset();
        $this->closeNewUserModal();
        sweetalert()->addSuccess('New User Added!');
    }


    public function render()
    {
        return view('livewire.users.new-user-modal');
    }


}
