@extends('layouts.mainBase')

@section('sub-title','Forgot Password')

@section('content')
<!-- Content -->
<div class="main-content account-content">
    <div class="content">
        <div class="container">
            <div class="account-box">
                <form class="form-signin" method="POST" action="{{ route('password.email') }}">
                        @csrf
                    <div class="account-title">
                        <h3>Reset Password</h3>
                    </div>
                    <div class="form-group">
                        <label>Enter Your Email</label>
                        <input name="email" type="email" class="form-control" autofocus required autocomplete="email">
                    </div>
                    
                    <div class="form-group text-center">
                        <button class="btn btn-primary account-btn" type="submit">Send Password Reset Link</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Content /-->

@endsection