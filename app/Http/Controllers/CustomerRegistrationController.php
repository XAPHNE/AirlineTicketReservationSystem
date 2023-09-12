<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerRegistrationController extends Controller{
    public function addUserForm(){
        return view('add-user');
    }
    public function registerUser(Request $request){
        $request->validate([
            'username' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'dob' => 'required|date',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'mobileNumber' => 'required|numeric'

        ]);
        echo "<pre>";
        print_r($request->all());
    }
}
