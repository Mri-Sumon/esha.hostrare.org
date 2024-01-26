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
<div class="card-header"><a href="{{URL::to('/')}}">
                    <img src="{{URL::to('/')}}/application/storage/app/settings/{{$settings->icon}}" alt="{{ config('app.name') }}" style="border-radius: 130px; height: 144px;">
                    </a>
                    </div>
<br>
                <div class="card-body">
                    <h4 style="text-align: center; margin-bottom:25px;">{{ __('Reset Password') }}</h4>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
