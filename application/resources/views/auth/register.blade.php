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
.form-control{
    margin-bottom: 8px;
}
</style>
<div class="container" style="margin: 50px auto;">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header d-flex justify-content-center"">
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
                    <h4 style="text-align: center; margin-bottom:25px;">Registration</h4>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row ">
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
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                <div class="input-group-prepend">
                                      <select class="form-control" style="height: 38px; margin-bottom: 8px;">
                                          <option value="bd">+88</option>
                                      </select>
                                </div>
                                <input id="phone" type="text" pattern="\d*" maxlength="11" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                                </div>
                                @error('phone')
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
                        </div><br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger" style="color:#fff !important;float:right;border:1px solid #006FA6;">
                                    {{ __('Register') }}
                                </button>
                                <a class="btn btn-link mt-2" href="{{ route('login') }}">
                                        Already Registered, Login Now
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
