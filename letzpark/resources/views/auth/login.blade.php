@extends('layouts/layout');

@section('title')
  Log In
@endsection

@section('content')
<div class="mainlogin">
    
    <section class="container mt-5 pb-5" id="loginSection">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="col-12 text-warning">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        </div>
        
        <form method="POST" action="{{ route('login') }}" class="row g-3">
            @csrf
            
            <h3><strong>Welcome back!</strong></h3>
            <!-- Email Address -->
            <div class="form-group col-12">
                <label for="email" class="text-secondary" value="__('Email')">Email</label>
                <input id="email" class="form-control" id="inputAddress" type="email" name="email" :value="old('email')" required autofocus placeholder="jamiedoe@mail.com">
            </div>
            
            <!-- Password -->
            <div class="form-group col-12">
                <label for="password" class="text-secondary" :value="__('Password')">Password</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="Password">
            </div>
            
            <!-- Remember Me -->
            <div class="form-check col-12 ml-3">
                <input id="remember_me" class="form-check-input" type="checkbox" name="remember" >
                <label class="remember_me" class="text-secondary" for="remember_me">
                    {{ __('Remember me') }}
                </label>
            </div>
            
            <div class="col-12 p-0 mt-3 d-flex flex-column-reverse" id="formOptions">
                <!--Not registered-->
                <span class="text-secondary">You don't have an account?<a class="mt-2 text-primary" href="{{ route('register') }}">
                    {{ __('Register') }}
                </a></span>
                
                <!--Forgot your password?-->
                @if (Route::has('password.request'))
                <a id="forgotPass" class="mt-2 text-primary" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
                <!--submit-->
                <div class="col-md-6">
                    <input type="submit" value="{{ __('Login') }}"id="btn">
                </div>
                
            </div>
        </form>
    </section>
</div>
@endsection
