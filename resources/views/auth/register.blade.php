@extends('auth.main')
@section('content')
    
<section class="login header p-fixed d-flex text-center bg-primary common-img-bg">

        <div class="container">
        <div class="row">
        <div class="col-sm-12">
        
        <div class="signup-card card-block auth-body m-auto">
     <form method="POST" action="{{ route('register') }}" class="md-float-material">
                        @csrf
    
        <div class="text-center">
        {{-- <img src="assets/images/logo.png" alt="logo.png"> --}}
        <h1>ONLINE ASSIGNMENT SUSBMISSION SYSTEM</h1>
        </div>
        <div class="auth-box">
        <div class="row m-b-20">
        <div class="col-md-12">
        <h3 class="text-center txt-primary">Sign up. It is fast and easy.</h3>
        </div>
        </div>
        <hr />
        <div class="input-group">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Your Name">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        <span class="md-line"></span>
        </div>
        <div class="input-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        <span class="md-line"></span>
        </div>
        <div class="input-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        <span class="md-line"></span>
        </div>
        <div class="input-group"> 
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
        <span class="md-line"></span>
        </div>
        <div class="row m-t-25 text-left">
        <div class="col-md-12">
        <div class="checkbox-fade fade-in-primary">
         <label>
        <input type="checkbox" value="">
        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
        <span class="text-inverse">I read and accept <a href="#">Terms &amp; Conditions.</a></span>
        </label>
        </div>
        </div>
        <div class="col-md-12">
        <div class="checkbox-fade fade-in-primary">
        <label>
        <input type="checkbox" value="">
        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
        <span class="text-inverse">Send me the <a href="#">Newsletter</a> weekly.</span>
        </label>
        </div>
        </div>
        </div>
        <div class="row m-t-30">
        <div class="col-md-12">
        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now.</button>
        </div>
        </div>
        <hr />
        <div class="row">
        <div class="col-md-10">
        <p class="text-inverse text-left m-b-0">Thank you and enjoy our website.</p>
        <p class="text-inverse text-left"><b>Your Autentification Team</b></p>
        </div>
        <div class="col-md-2">
        {{-- <img src="assets/images/auth/Logo-small-bottom.png" alt="small-logo.png"> --}}
        <h1>ASMS</h1>
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























{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
