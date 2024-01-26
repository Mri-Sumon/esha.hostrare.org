@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Customer Order Details</h4>
                        </div>
                        <div class="col-md-6">
                            
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Session::has('message'))
                        <p class="alert alert-success" role="text">{{Session::get('message')}}</p>
                    @endif
                    <h4 class="text-center">Customar details</h4>
                    <table class="table">
                            <tr>
                                <th>Customar Name</th>
                                <td>{{$order->name}}</td>
                                <th>Email</th>
                                <td>{{$order->email}}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{$order->mobile}}</td>
                                <th>Address</th>
                                <td>{{$order->address}}</td>
                            </tr>
                        </table>
                        <br>
                        <br>
                    <HR>
                    <h4 class="text-center">Product Details</h4>
                   
                         <table class="table">
                            <thead>
                                <tr>
                                    <th>Quantity</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Unite-Price</th>
                                    <th>Sub-Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                   $order_item=DB::table('order_items')->where('order_id',$order->id)->get();
                                @endphp
                                @foreach($order_item as $order_itm)
                                @php
                                    $products=DB::table('products')->where('id',$order_itm->product_id)->get();
                                @endphp
                                @foreach($products as $prdt)
                                <tr>
                                    <td>{{$order_itm->quantity}}</td>
                                    <td>{{$prdt->name}}</td>
                                    <td><img src="{{URL::to('/')}}/application/storage/app/product/{{$prdt->f_pic}}" class="" style="width:80px;"></td>
                                    <td>{{$prdt->price}}</td>
                                    <td>{{$order_itm->price*$order_itm->quantity}}</td>
                                </tr>
                                @endforeach
                                @endforeach
                            </tbody>
                        </table>
                        
                        <br>
                        <br>
                    <HR>
                        <h4 class="text-center">Shipping Details</h4>
                        @if($order->is_shipping_different=='1')
                            @php
                                $shipping=DB::table('shippings')->where('order_id',$order->id)->get();
                            @endphp
                            @foreach($shipping as $ships)
                            <table class="table">
                                    <tr>
                                        <th>Customar Name</th>
                                        <td>{{$ships->name}}</td>
                                        <th>Email</th>
                                        <td>{{$ships->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>{{$ships->mobile}}</td>
                                        <th>Address</th>
                                        <td>{{$ships->address}},{{$ships->city}}</td>
                                    </tr>
                            </table>
                            @endforeach
                        @else
                        <table class="table">
                                    <tr>
                                        <th>Customar Name</th>
                                        <td>{{$order->name}}</td>
                                        <th>Email</th>
                                        <td>{{$order->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>{{$order->mobile}}</td>
                                        <th>Address</th>
                                        <td>{{$order->address}},{{$order->city}}</td>
                                    </tr>
                            </table>
                        @endif
                        <br>
                        <br>
                    <HR>
                        <h4 class="text-center">Transaction details</h4>
                    <table class="table">
                        @php
                            $transactions=DB::table('transactions')->where('order_id',$order->id)->get();
                        @endphp
                        @foreach($transactions as $transaction)
                            <tr class="text-center">
                                <th>Order Id</th>
                                <td>{{$order->id}}</td>
                                <th>Payment Mode</th>
                                <td>{{$transaction->mode}}
                                <hr>
                                @if($transaction->mode=='bkash')
                                  Number : {{$transaction->number}}
                                  <hr>
                                  Transaction ID: {{$transaction->transaction_id}}
                                @endif
                                </td>
                                <th>Status</th>
                                <td>{{$transaction->status}}</td>
                            </tr>
                        @endforeach
                        </table>
                        <br>
                        <br>
                    <HR>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection