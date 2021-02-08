@extends('layouts/layout');

@section('title')
  Confirm Password
@endsection

@section('content')
<div class="mainreset">
    <section class="container mt-5" id="confirmPassword">
        <h4><strong>Access Restricted</strong></h4>
        <div class="information">
            <p>{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}</p>
        </div>
        <div class="col-12 text-warning">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        </div>

        <form method="POST" action="{{ route('password.confirm') }}" class="row g-3">
            @csrf

            <!-- Password -->
            <div class="col-12 mb-4">
                <label for="password" class="form-label" :value="__('Password')">{{ __('Password') }}</label>
                <input id="password" class="form-control" type="password"  name="password" required autocomplete="current-password" placeholder="Password">
            </div>
            <div class="extra bottom">
                <input type="submit" value="{{ __('Confirm') }}"id="btnreset">
            </div>

        </form>
    </section>
@endsection