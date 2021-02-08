@extends('layouts/layout');

@section('title')
  Reset password
@endsection

@section('content')
<div class="mainreset">
    <section class="container mt-5" id="recoverPassword">
        <!-- Validation Errors -->
        <div class="col-12 text-warning">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
        </div>
        <h4><strong>Password Reset</strong></h4>
        <form method="POST" action="{{ route('password.update') }}" class="row g-3">
            @csrf
            
            <!-- Password Reset Token -->
            <!--Hiden from user-->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            
            <!-- Email Address -->
            <div class="form-group col-12">
                <label for="email" class="text-secondary" value="__('Email')">Email</label>
                <input id="email" class="form-control" id="inputAddress" type="email" name="email" :value="old('email', $request->email)" required autofocus placeholder="jamiedoe@mail.com">
            </div>
            
            <!-- Password -->
            <div class="col-md-6 mb-4">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" class="form-control" type="password"  name="password" required placeholder="New password">
            </div>
            
            <!-- Confirm Password -->
            <div class="col-md-6 mb-4">
                <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" class="form-control" type="password"  name="password_confirmation" placeholder="Confirm password" required>
            </div>
            <!--Button-->
            <div class="extra">
                <input type="submit" value="{{ __('Reset Password') }}"id="btnreset">
            </div>
        </form>
    </div>
</section>
@endsection