@extends('layouts.app')
@section('content')
<!-- resources/views/auth/login.blade.php -->
<div class="row">
    <div class="col-sm-4 col-md-offset-4">
        <div style="margin-top:50%;">
            <form method="POST" action="{{ route('login') }}">
                {!! csrf_field() !!}
                <div class="form-group">
                    Email
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    Password
                    <input class="form-control" type="password" name="password" id="password" required>
                </div>

                <div>
                    <input type="checkbox" name="remember"> Remember Me
                </div>

                <div>
                    <a href="{{url('/register')}}" class="btn btn-lg btn-info">Register</a>
                    <button class="btn btn-primary btn-lg" type="submit">Login</button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection