<?php

namespace App\Http\Livewire;

use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class RoleAdd extends Component {
    public $name;
    public $description;
    public function render() {
        return view('livewire.role-add');
    }
    public function createRole() {
        $this->validate([
            'name' => 'required|unique:roles.name',
            'description' => 'nullable',
        ]);
        Role::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);
        $this->name = '';
        $this->description = '';
        $this->emit('roleCreated');
        // Capture and view the executed SQL queries
        $queries = DB::getQueryLog();
        Log::info($queries); // Log the queries (optional)
        dd($queries); // Output the queries for debugging (optional)
    }
}
