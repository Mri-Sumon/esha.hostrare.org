@extends('layouts.FrontendLayout2')
<style>
    .continue-shopping{
        text-align: center;
        font-size: 21px;
        margin-bottom:200px;
    }
</style>

@section('content')
<section class="content_wrapper checkout_wrapper">
        <div class="container ">
    <h1></h1>
    <div class="continue-shopping">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Status</th>
                    <th>Total Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->status}}</td>
                    <td>{{$order->total_with_dcost}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
</section>

@endsection