@extends('layouts.main')
@push('title')
<title>Customer Registration | Airline Ticket Reservation System</title>
@endpush()
@section('main-section')
<main>
    &nbsp;
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-6">
            <div class="card">
                <!-- <img class="card-img-top" src="holder.js/100x180/" alt="Customer Registration"> -->
                <div class="card-body">
                    <h4 class="card-title text-center">Customer Registration</h4>
                    <form action="{{url('/')}}/customer-registration" method="post">
                        @csrf
                        <x-input-fields type="text" name="username" label="Username:" placeholder="Enter your username"/>
                        <x-input-fields type="text" name="firstName" label="First Name:" placeholder="Enter your first name"/>
                        <x-input-fields type="text" name="lastName" label="Last Name:" placeholder="Enter your last name"/>
                        <x-input-fields type="email" name="email" label="Email:" placeholder="Enter your email"/>
                        <x-input-fields type="date" name="dob" label="Date of Birth:" placeholder="dd/mm/yyyy"/>
                        <x-select-lists name="gender" label="Gender:"/>
                        <x-input-fields type="password" name="password" label="Password:" placeholder="Enter your password"/>
                        <x-input-fields type="password" name="password_confirmation" label="Confirm Password:" placeholder="Confirm your password"/>
                        <x-input-fields type="number" name="mobileNumber" label="Mobile Number:" placeholder="Enter your 10 digit mobile number"/>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    &nbsp;
</main>
@endsection()
