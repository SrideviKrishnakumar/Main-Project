@extends('layouts/layout');

@section('title')
  Email Verification
@endsection

@section('content')
<div class="mainemail">
    <section class="container mt-4 pb-5" id="verifySection">
        <div class="mb-4 text-sm text-gray-600">
            <h4 class="mb-3"><strong>{{ __('Thanks for signing up! ') }}</strong></h4>
            <p class="text-dark">Before getting started, you should verify your email address by clicking on the link we just emailed to you. If you didn't receive the email, we will send you another.</p>
        </div>
        @if (session('status') == 'verification-link-sent')
            <div class="text-dark information mb-4">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif
            <form method="POST" action="{{ route('verification.send') }}" class="row g-3">
                @csrf
                <div class="extra mb-2">
                    <input type="submit" value="{{ __('Resend Verification Email') }}"id="btnreset">
                </div>
            </form>
            <div class="col-12 text-center text-primary mb-4">
                <a style="text-decoration: none" href="{{route('home')}}">Continue to site</a>
            </div>
            <form method="POST" action="{{ route('logout') }}" class="row g-3">
                @csrf
                <div class="extra">
                    <input type="submit" value="{{ __('Logout') }}"id="btninverse">
                </div>
            </form>
    </section>
</div>
@endsection