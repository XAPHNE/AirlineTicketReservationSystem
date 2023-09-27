<?php

namespace App\Http\Livewire;

use App\Models\Role;
use Livewire\Component;

class Roles extends Component {
    public $roles;
    public $name;

    public function render() {
        $this->roles = Role::all();
        return view('livewire.roles');
    }
    public function createRole() {
        $this->validate([
            'name' => 'required|unique:roles.name',
        ]);
        Role::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);
        $this->name = '';
        $this->emit('roleCreated');
    }
}
