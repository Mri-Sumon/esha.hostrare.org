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
                    <img src="{{URL::to('/')}}/application/storage/app/settings/{{$settings->icon}}" alt="{{ config('app.name') }}" style="border-radius: 130px; height: 144px;"></a></div>
<br>
                <div class="card-body">
                    <h4 style="text-align: center; margin-bottom:25px;">{{ __('Verify Your Email Address') }}</h4>
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
