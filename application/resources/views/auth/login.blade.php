@extends('layouts.AuthLayout')

@section('content')
<?php $settings=App\Settings::where('id',1)->first();?>
<style>
    .card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color:none; 
    border-bottom: 1px solid rgba(0,0,0,.125);
    text-align: center;
    font-size: 40px;
}
.card{
 border-radius: 30px!important;   
}
</style>
<div class="container" style="margin: 50px auto;">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header d-flex justify-content-center">
                    <div style="border: 1px solid gray; width: 80px; height: 80px; border-radius: 50%;">
                        <a href="{{URL::to('/')}}">
                            <style>
                                img {
                                    border-radius: 50%;
                                }
                            </style>
                            <img src="{{URL::to('/')}}/application/storage/app/settings/{{$settings->icon}}" alt="{{ config('app.name') }}" width="80%">
                        </a>
                    </div>
                </div>
                    <br>
                <div class="card-body">
                    
                    <h4 style="text-align: center; margin-bottom:25px;">Login</h4>
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-none">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }} <input class="form-check-input" style="position: absolute;left: -44px;" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    </label>
                                </div>
                            </div>
                        </div> <br>

                        <div class="form-group row mb-0 mt-1">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-danger" style="color:white !important;">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif <br>
                                <a class="btn btn-info mt-4 text-center mx-auto text-white" href="{{ route('register') }}">
                                        Register Now
                                </a>
                            </div>
                            
                        </div><br><br>
                        
                                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
