<?php

namespace App\Http\Livewire;

use App\Models\Role;
use Livewire\Component;

class RoleEdit extends Component {
    public $role;
    public $name; // Remove the "role" prefix
    public $description; // Remove the "role" prefix

    protected $rules = [
        'name' => 'required|unique:roles,name', // Validation rule for name
        'description' => 'nullable', // Validation rule for description
    ];

    public function mount($id) {
        $this->role = Role::find($id);

        if (!$this->role) {
            abort(404);
        }

        $this->name = $this->role->name;
        $this->description = $this->role->description;
    }

    public function render() {
        return view('livewire.role-edit');
    }

    public function updateRole() {
        $this->validate();

        $this->role->update([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Role updated successfully');
    }
}
