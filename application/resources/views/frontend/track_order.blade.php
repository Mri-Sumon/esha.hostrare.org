@extends('layouts.FrontendLayout2')
<style>
    .continue-shopping{
        text-align: center;
        font-size: 21px;
    }
</style>

@section('content')
<section class="content_wrapper checkout_wrapper">
        <div class="container ">
    <h1 style="text-align:center;margin-top:60px;">Track your order</h1>
    <div class="continue-shopping" style="margin-left:auto;margin-right:auto;">
        @if(Session::has('message'))
        <p class="alert alert-success" role="alert">{{Session::get('message')}}</p>
        @endif
        @if(Session::has('not_found_message'))
        <p class="alert alert-danger" role="alert">{{Session::get('not_found_message')}}</p>
        @endif
    <form method="post" action="{{url('trackorder')}}">
        @csrf
        <!--<div class="form-group">-->
        <!--    <label for="order_id">Order ID:</label>-->
        <!--    <input type="text" name="order_id">-->
        <!--</div>-->
        <div class="row">
            <div class="card" style="background-color: white;height: 247px;width: 427px;margin-left: auto;margin-right: auto;">
            <div class="col-md-12" style="margin-top:80px;">
                <div class="row form-group">
                    <label for="phone" class="col-md-4">Number:</label>
                    <div class="col-md-8">
                    <input type="text" name="phone" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary" style="border:1px solid black;margin-top:10px;">Search</button>
                </div>
            </div>
            <!--<div class="col-md-12" style="margin-left: auto;margin-right: auto;float: none;">-->
                
            <!--        <label for=""></label>-->
            <!--        <button type="submit" class="btn btn-primary" style="border:1px solid black;">Search</button>-->
                
            
            <!--</div>-->
            </div>
        </div>
    </form>
    </div>
</div>
</section>

@endsection