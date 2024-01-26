@extends('layouts.FrontendBttexLayout')
<style>
.content_wrapper{
    height:300px;
}
    .continue-shopping{
        text-align: center;
        font-size: 21px;
    }
</style>

<! BOOTSTRAP CSS AND JAVASCRIPT LINK---->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


@section('content')
<section class="content_wrapper checkout_wrapper">
        <div class="container " style="margin-top:50px;">
    <h1 style="text-align:center;">Thank you ! Your Quoation Request has been successfully placed!</h1>
    <div class="continue-shopping">
    <a href="{{route('shop')}}">Continue Shopping...</a>
    </div>
</div>
</section>

@endsection