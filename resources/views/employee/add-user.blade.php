@extends('../layouts.main')
@push('title')
<title>Employee Registration | Airline Ticket Reservation System</title>
@endpush()
@section('main-section')
<main>
    &nbsp;
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md-6">
            <div class="card">
                <!-- <img class="card-img-top" src="holder.js/100x180/" alt="Customer Registration"> -->
                <div class="card-body">
                    <h4 class="card-title text-center">Employee Registration</h4>
                    <form action="{{route('employee.add-user')}}" method="post">
                        @csrf
                        <x-input-fields type="text" name="name" label="Name:" placeholder="Enter your name" />
                        <x-input-fields type="email" name="email" label="Email:" placeholder="Enter your email" />
                        <x-input-fields type="password" name="password" label="Password:" placeholder="Enter your password" />
                        <x-input-fields type="password" name="password_confirmation" label="Confirm Password:" placeholder="Confirm your password" />
                        <x-select-lists label="Role" name="role" />
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    &nbsp;
</main>
@endsection()
