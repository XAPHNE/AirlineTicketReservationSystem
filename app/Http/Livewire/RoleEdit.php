<?php

namespace App\Http\Livewire;

use App\Models\Role;
use Livewire\Component;

class RoleEdit extends Component {
    public $role;
    public function mount($id) {
        $this->role = Role::find($id);

        // Check if the role exists, and if not, you can handle it accordingly (e.g., redirect to an error page).
        if (!$this->role) {
            // Handle the case where the role doesn't exist.
            // You can set an error message or redirect to an error page.
            abort(404); // Example: Redirect to a 404 error page.
        }
    }
    public function render($id) {
        $role = Role::find($id);
        return view('livewire.role-edit', compact('role'));
    }
    public function updateRole() {
        $this->validate([
            'role.name' => 'required|unique:roles,name,' . $this->role->id,
        ]);

        $this->role->save();

        // Redirect or emit an event to indicate the role has been updated
    }
}
