@extends('layouts/layout');

@section('title')
  Reset password
@endsection

@section('content')
<div class="mainforget">
    <section class="mt-5 pb-5" id="recoverPassword">
    
        <div class="text-secondary">
            <h4><strong>{{ __('Forgot your password? No problem.') }}</strong></h4>
            <p> Just let us know your email address and we will email you a password reset link, which will allow you to choose a new one.<p>
        </div>
    
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
    
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
        <form method="POST" action="{{ route('password.email') }}" class="row g-3">
            @csrf
    
            <!-- Email Address -->
            <div class="form-group col-12">
                <label for="email" class="text-secondary mt-2" value="__('Email')">Email</label>
                <input id="email" class="form-control" id="inputAddress" type="email" name="email" :value="old('email')" required autofocus placeholder="jamiedoe@mail.com">
            </div>
    
            <!--Submit-->
            <div class="col-12 mt-3 text-center">
                <input type="submit" value="{{ __('Email Password Reset Link') }}"id="btnforgot">
            </div>
        </form>
    </section>
</div>
@endsection
