@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Shipping Different Address</h4>
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
                                <th>Order Id</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($shippingdifferent as $shippingdifferent)
                            <tr>
                                <td>{{$shippingdifferent->id}}</td>
                                <td>{{$shippingdifferent->order_id}}</td>
                                <td>{{$shippingdifferent->name}}</td>
                                <td>{{$shippingdifferent->mobile}}</td>
                                <td>{{$shippingdifferent->email}}</td>
                                <td>{{$shippingdifferent->address}}</td>
                                <td>{{$shippingdifferent->city}}</td>
                                <td>
                                    <!--<a href="#" class="btn btn-primary">Edit</a>-->
                                    <a href="{{url('admin/deletshipping/'.$shippingdifferent->id)}}" class="btn btn-danger">Delete</a>
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
