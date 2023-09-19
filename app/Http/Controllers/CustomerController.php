<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Models\User;

class CustomerController extends Controller {
    public function index() {
        return view('customer');
    }

    public function store(Request $request) {
        // Start Insert Query
        $customer = new Customer;
        $customer->dob = $request['dob'];
        $customer->gender = $request['gender'];
        $customer->mobileNumber = $request['mobileNumber'];
        $customer->save();
        // End Insert Query
        return redirect('/customer/view');
    }

    public function view() {
        $users = User::all();
        $customers = Customer::all();
        $data = compact('customers','users');
        return view('customer-view')->with($data);
    }
}
