@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>All Order Item</h4>
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
                    @if(Session::has('delete_message'))
                        <p class="alert alert-danger" role="text">{{Session::get('delete_message')}}</p>
                    @endif
                    
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Id</th>
                                <th>Order Id</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Order Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($orderdetails as $orderdetails)
                            <tr>
                                <td>{{$orderdetails->id}}</td>
                                <td>{{$orderdetails->product_id}}</td>
                                <td>{{$orderdetails->order_id}}</td>
                                <td>{{$orderdetails->price}}</td>
                                <td>{{$orderdetails->quantity}}</td>
                                <td>{{$orderdetails->created_at}}</td>
                                <td>
                                    <a href="#" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
