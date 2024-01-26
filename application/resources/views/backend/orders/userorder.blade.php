@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>All Orders</h4>
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
                                <th>Action</th>
                                <th>Name</th>
                                <th>Order Date</th>
                                <th>Total Quantity</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th>Payment Type</th>
                            </tr>
                        </thead>
<style>
    .dropdwn-item{
        padding:4px;
        text-align:center;
    }
</style>
                        <tbody>
                             @foreach($order as $orders)
                            <tr>
                                <td>{{$orders->id}}</td>
                                <td>
                                  <ul class="icons-list">
                                    <li class="dropdown" style="list-style-type:none;">
                                      <a href="#"  data-toggle="dropdown" style="margin-left:-34px;font-size: 23px;"><ion-icon name="menu-outline"></ion-icon></a>
                                      <ul class="dropdown-menu ">
                                        <li class="dropdwn-item"><a href="{{url('user/view/orderdetails/'.$orders->id)}}"><i class="icon-eye"></i>Full View</a></li>
        
                                        <li class="divider"></li>
                                        
                                        <li class="dropdwn-item"><a href="{{url('user/order/update/'.$orders->id.'/'.'canceled')}}" onclick="return confirm('Are you sure, Order Cancelled ?')">
                                            <i class="icon-cross text-danger"></i>Cancelled
                                            </a>
                                        </li>
                                        <!--<li class="divider"></li>
                                        <li class="dropdwn-item"><a href="#"><i class="icon-pencil"></i>Edit Order
                                            </a>
                                        </li>--->
                                       </ul>
                                    </li>
                                  </ul>
                                </td>
                                <td>{{$orders->name}}</td>
                                <td>{{$orders->created_at}}</td>
                                <td>{{$orders->email}}</td>
                                <td>{{$orders->total}}</td>
                                <td>{{$orders->status}}</td>
                                <td>
                                    @php
                                        $payment_mode=DB::table('transactions')->where('order_id',$orders->id)->get();
                                    @endphp
                                    @foreach($payment_mode as $p_mode)
                                    {{$p_mode->mode}}
                                    @endforeach
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
