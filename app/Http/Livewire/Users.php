<?php

namespace App\Http\Livewire;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class Users extends Component {
    public $users;
    public $role;

    public function render() {
        $this->users = User::all();
        $this->role = Role::with('roles')->find('id');
        return view('livewire.users');
    }
}
