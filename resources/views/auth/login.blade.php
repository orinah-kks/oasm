@extends('auth.main')
@section('content')
    
<section class="login p-fixed d-flex text-center bg-primary common-img-bg">

        <div class="container">
        <div class="row">
        <div class="col-sm-12">
        
        <div class="signup-card card-block auth-body m-auto">
        <form class="md-float-material" action="{{ route('login') }}" method="POST">
                @csrf
        <div class="text-center">
        {{-- <img src="assets/images/logo.png" alt="logo.png"> --}}
        <h1> ASSIGNMENT SUBMISSION SYSTEM</h1>
        </div>
        <div class="auth-box">
        <div class="row m-b-20">
        <div class="col-md-3">
        <h3 class="text-center txt-primary">SignIn OASS</h3>
        </div>
        <div class="col-md-9">
        <p class="text-inverse m-t-25 text-right">Don't have an account? <a href="{{route('register')}}"> Register </a> here for free!</p>
        </div>
        </div>
        <p class="text-inverse b-b-default text-left p-b-5">Sign in easily with your social account:</p>
        <div class="row m-b-20">
        <div class="col-md-6">
        <button class="btn btn-facebook m-b-20 share-btn"><i class="icofont icofont-social-facebook"></i>Sign in with facebook</button>
        </div>
        <div class="col-md-6">
        <button class="btn btn-twitter m-b-20 share-btn"><i class="icofont icofont-social-twitter"></i>Sign in with twitter</button>
        </div>
        </div>
        <p class="text-inverse b-b-default text-left p-b-5">Sign in with your regular account</p>
        <div class="input-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email">
        
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <span class="md-line"></span>
        </div>
        <div class="input-group">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">
        
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <span class="md-line"></span>
        </div>
        <div class="row m-t-25 text-left">
        <div class="col-sm-6 col-xs-12">
        <div class="checkbox-fade fade-in-primary">
        <label>
        <input type="checkbox" value="">
        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
        <span class="text-inverse">Remember me</span>
        </label>
        </div>
        </div>
        <div class="col-sm-6 col-xs-12 forgot-phone text-right">
                @if (Route::has('password.request'))
                <a class="text-right f-w-600 text-inverse" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
        </div>
        <div class="row m-t-30">
        <div class="col-md-12">
        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
        </div>
        </div>
        
        
        
        </div>
        </form>
        
        </div>
        
        </div>
        
        </div>
        
        </div>
        
        </section>
        
@endsection



