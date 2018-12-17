@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" action="registrar">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label>Password Confirmation</label>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    @include('modals')
@endsection