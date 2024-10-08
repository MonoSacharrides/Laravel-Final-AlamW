@extends('layouts.auth')

@section('content')
<div class="card shadow-lg border-0 rounded-lg mt-5">
    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="inputFirstName" type="text" name="first_name" placeholder="First Name" required />
                        <label for="inputFirstName">First name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input class="form-control" id="inputLastName" type="text" name="last_name" placeholder="Last Name" required />
                        <label for="inputLastName">Last name</label>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" required />
                <label for="inputEmail">Email address</label>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" required />
                        <label for="inputPassword">Password</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="inputPasswordConfirm" type="password" name="password_confirmation" placeholder="Confirm Password" required />
                        <label for="inputPasswordConfirm">Confirm Password</label>
                    </div>
                </div>
            </div>
            <div class="mt-4 mb-0">
                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Create Account</button></div>
            </div>
        </form>
    </div>
    <div class="card-footer text-center py-3">
        <div class="small"><a href="{{ route('login') }}">Have an account? Go to login</a></div>
    </div>
</div>
@endsection