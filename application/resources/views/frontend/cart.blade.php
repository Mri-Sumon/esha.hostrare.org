@extends('layouts.FrontendBttexLayout')
@section('content')
<style>
    .container{
        padding:0px 15px!important;
    }
    a{
        text-decoration:none!important;
    }
</style>
<! BOOTSTRAP CSS AND JAVASCRIPT LINK---->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<section class="best_seller_product"  style="background-color: #fff;padding-bottom: 10px;padding-top:0" id="main_content_area">
 <div class="row area-mobile-off" role="navigation" style="height: auto;top: 0;box-shadow: none;background: #000;margin-right: 0;margin-top: -1px;">
    <div class="container-fluid">
        <div class="" style="padding:0">
            <ul class="">
                <li class="color-2" style="padding: 10px; width: auto;float: left;">
                    <a  style="padding: 10px 5px 10px 0;" href="{{URL::to('/')}}" >
                        <span style="font-weight: normal;padding: 0;font-size: 14px;color:#fff"> 
                            Home /
                        </span>
                    </a>
                    <a  style="padding: 10px 5px 10px 0;" href="{{URL::to('/')}}" >
                        <span style="font-weight: normal;padding: 0;font-size: 14px;color:#fff"> 
                            Quotation List
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
 </div>
 <div class="heading">
     <h1 class="text-center mt-2">Quotation Items</h1>
 </div>
 <style>
 .table-responsive{
     overflow-x:auto;
 }  
     .button_checkout{
        border: 1px solid #1B456F;
        padding: 15px;
        font-size: 15px;
        background-color: #1B456F;
        color: #fff;
        border-radius: 4px;
     }
 </style>
 <section class="details_section" >
    <div class="container-fluid" style="padding-right: 0  !important;;">
        <div class="row" style="margin-right: 0;padding-top:20px">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 5px;padding-right: 5px;margin-bottom:50px;">
                <div class="table-responsive">
                    @if(Session::has('success_message'))
                        <div class="alert alert-success">
                            <strong>Success</strong>{{Session::get('success_message')}}
                        </div>
                    @endif
                <table class="table table-stripped">
                    <thead style="background-color:#FBFBFB;">
                        <tr>
                            <th width="15%">Image</th>
                            <th width="40%">Product</th>
                            <th width="15%">Price</th>
                            <th width="15%">Quantity</th>
                            <th width="10%">Total</th>
                            <th width="5%">Remove</th>
                        </tr>
                    </thead>
                    <tbody style="background-color:#ECECEC;">
                        @foreach(Cart::content() as $item)
                        <tr>
                            @php
                               $product=DB::table('products')->where('id',$item->id)->first();
                            @endphp
                            <td>
                                <a href="{{route('details',['product_id'=>$item->id])}}">
                                	 <img src="{{URL::to('/')}}/application/storage/app/product/{{$product->f_pic}}" width="150px" alt="image">
                                </a>
                            </td>
                            <td class="text-left">
                                <a href="{{route('details',['product_id'=>$item->id])}}" style="color:black;"><h3>{{$item->name}}</h3></a>
                                {!! $product->brief !!}
                            </td>
                            <td>
                                <span class="amount">৳ <span class="unit-price">{{$item->price}}</span> </span>
                            </td>
                            <td>
                                {{$item->qty}}
                            </td>
                            <td>
                                <span class="amount">৳ <span class="total-price">{{$item->price*$item->qty}}</span></span>
                            </td>
                            <td>
                                <a href="{{route('removeformcart',['id'=>$item->rowId])}}" class="btn"><i class="fa fa-times" style="font-size:24px;"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 5px;padding-right: 5px;margin-bottom:50px;">
                <a class="button_checkout" href="{{route('checkout')}}" style="float:right;">Proceed To Checkout</a>
            </div>
        </div>
    </div>
 </section>
 
               
</section>
 
@endsection