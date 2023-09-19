<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CustomerRegistrationController extends Controller{
    public function addUserForm(){
        return view('add-user');
    }
    public function registerUser(Request $request){
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
            'role' => 'Customer',
        ]);
        $customer = new Customer;
        $customer->user_id = $user->id;
        $customer->save();
        // End Insert Query
        return redirect('/customer/view');
    }
}
