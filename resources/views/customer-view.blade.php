@extends('layouts.main')
@push('title')
<title>Customeer Home | Airline Ticket Reservation System</title>
@endpush()
@section('main-section')
&nbsp;
<div class="table-responsive">
    <table class="table table-light table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Dob</th>
                <th scope="col">Gender</th>
                <th scope="col">Mobile</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $customer)
            <tr class="">
                <td scope="row">{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->dob}}</td>
                <td>{{$customer->gender}}</td>
                <td>{{$customer->mobileNumber}}</td>
            </tr>
            @endforeach()
        </tbody>
    </table>
</div>
@endsection()
