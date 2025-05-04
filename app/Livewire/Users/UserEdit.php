<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class UserEdit extends Component
{
    public $user, $name, $email, $password, $confirm_password;

    public function mount($id){
        $this->user = User::find($id);
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    } 

    public function render()
    {
        return view('livewire.users.user-edit');
    }
}
