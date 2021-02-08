@extends('layouts/layout');

@section('title')
  Register
@endsection

@section('content')
<div class="mainregister">

  <section class="container mt-4 pb-5" id="registerSection">
    <!-- Content here -->
    <!-- Validation Errors -->
    <div class="col-12 text-warning">
    <x-auth-validation-errors :errors="$errors" />
    </div>
    
    <h4 class="mb-3"><strong>Create an account</strong></h4>
    <form method="POST" action="{{ route('register') }}" class="row g-3">
      @csrf
      <!-- Name -->
      <div class="col-md-6">
        <label for="firstname" class="form-label">First Name</label>
        <input id="firstname" class="form-control" type="text" name="firstname" :value="old('firstname')" required autofocus placeholder="Jamie">
      </div>
      <!-- Last Name -->
      <div class="col-md-6">
        <label for="lastname" class="form-label">Last Name</label>
        <input id="lastname" class="form-control" type="text" name="lastname" :value="old('lastname')" placeholder="Doe" required>
      </div>
      <!-- Email Address -->
      <div class="col-md-6">
        <label for="email" class="form-label" value="__('Email')">Email</label>
        <input id="email"  class="form-control" type="email" name="email" :value="old('email')" placeholder="jamiedoe@mail.com" required>
      </div>
      <!-- Email Address -->
      <div class="col-md-6">
        <label for="phone" class="form-label" value="__('phone')">Phone</label>
        <input id="phone"  class="form-control" type="text" name="phone" :value="old('phone')" placeholder="+000123456789" required>
      </div>
      
      <!-- Password -->
      <div class="col-md-6">
        <label for="password" class="form-label" :value="__('Password')">Password</label>
        <input id="password" class="form-control" type="password"  name="password" required autocomplete="new-password" placeholder="Password">
      </div>
      
      
      <!-- Confirm Password -->
      <div class="col-md-6">
        <label for="password_confirmation" class="form-label" :value="__('Confirm Password')">Confirm Password</label>
        <input id="password_confirmation" class="form-control" type="password"  name="password_confirmation" placeholder="Confirm password" required>
      </div>
      
      <div class="col-12 p-0 mt-3" id="formOptions">
        <div class="col-md-6">
          <input type="submit" value="{{ __('Register') }}"id="btn">
          
        </div>
        <div class="col-md-6 mt-2" id="last">
          <a class="text-primary text-decoration-none" href="{{ route('login') }}" id="loginQuestion">
            {{ __('Already have an account?') }}
          </a>
        </div>
      </div>
    </form>
  </section>
</div>
@endsection
