@extends('layouts.main')

@section('main-section')
    <main>
        &nbsp;
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-md-6">
                <div class="card">
                    <!-- <img class="card-img-top" src="holder.js/100x180/" alt="Customer Registration"> -->
                    <div class="card-body">
                        <h4 class="card-title text-center">Customer Registration</h4>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username :</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Enter your username" aria-describedby="usernameHelp">
                                <small id="usernameHelp" class="text-muted">Required</small>
                            </div>
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name :</label>
                                <input type="text" name="firstName" id="firstName" class="form-control" placeholder="Enter your first name" aria-describedby="firstName">
                                <small id="firstName" class="text-muted">Required</small>
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name :</label>
                                <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Enter your last name" aria-describedby="lastnameHelp">
                                <small id="lastnameHelp" class="text-muted">Required</small>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email :</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" aria-describedby="emailHelp">
                                <small id="emailHelp" class="text-muted">Required</small>
                            </div>
                            <div class="mb-3">
                                <label for="dob" class="form-label">Date of birth :</label>
                                <input type="date" name="dob" id="dob" class="form-control" placeholder="dd/mm/yyyy" aria-describedby="dobHelp">
                                <small id="dobHelp" class="text-muted">Required</small>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password :</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" aria-describedby="passwordHelp">
                                <small id="passwordHelp" class="text-muted">Required</small>
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm Password :</label>
                                <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" placeholder="Reenter your password" aria-describedby="confirmPasswordHelp">
                                <small id="confirmPasswordHelp" class="text-muted">Required</small>
                            </div>
                            <div class="mb-3">
                                <label for="mobileNumber" class="form-label">Mobile Number :</label>
                                <input type="number" name="mobileNumber" id="mobileNumber" class="form-control" placeholder="Enter you mobile number" aria-describedby="mobileNumberHelp">
                                <small id="mobileNumberHelp" class="text-muted">Required</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        &nbsp;
    </main>
@endsection()
