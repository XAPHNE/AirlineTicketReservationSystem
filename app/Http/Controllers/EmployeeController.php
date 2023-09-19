<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller {
    public function dashboard() {
        return view('employee.dashboard');
    }
    public function view() {
        return view('employee.add-user');
    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);
        // Start Insert Query
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' =>  Hash::make($request['password']),
            'role' => $request['role'],
        ]);
        $employee = new Employee;
        $employee->user_id = $user->id;
        $employee->save();
        // End Insert Query
        return redirect('/employee/add-user');
    }
}
