<?php

namespace App\Livewire\Users;

use Livewire\Component;

class EditUserModal extends Component
{
    public $user;
    public $name;
    public $email;

    public $showModal = false;

    public function mount($user){
        $this->user = $user;

        $this->name= $user->name;
        $this->email= $user->email;
    }

    public function openUserEditModal(){
        $this->showModal = true;
    }
    public function closeModal()    {
        $this->showModal = false;
    }

    public function updateUser(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->closeModal();

        // session()->flash('message', 'User Updated Successfully.');
        // $this->emit('userUpdated');
        sweetalert()->addSuccess('Update Succesfully.');
    }


    public function render()
    {
        return view('livewire.users.edit-user-modal');
    }
}
