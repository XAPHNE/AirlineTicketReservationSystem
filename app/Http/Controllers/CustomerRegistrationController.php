<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerRegistrationController extends Controller{
    public function addUserForm(){
        return view('add-user');
    }
    public function registerUser(Request $request){
        echo "<pre>";
        print_r($request->all());
    }
}
