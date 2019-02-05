@extends('layouts.app')
@section('content')
<!-- resources/views/auth/register.blade.php -->
<div class="row">
    <div class="col-sm-4 col-md-offset-4">
        <div style="margin-top:50%;">
            <form method="POST" action="{{route ('/register')}}">
                {!! csrf_field() !!}

                <div class="form-group">
                    Name
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    Email
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    Password
                    <input class="form-control" type="password" name="password">
                </div>

                <div class="form-group">
                    Confirm Password
                    <input class="form-control" type="password" name="password_confirmation">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection