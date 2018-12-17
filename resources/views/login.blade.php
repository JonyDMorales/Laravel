@extends('layouts.app')
@section('content')
    <div class="container">
        <h2> Sing in </h2>
        <hr>
        <form method="POST" action="entrar">
            @csrf
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    @include('modals')
@endsection