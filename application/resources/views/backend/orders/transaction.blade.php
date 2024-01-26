@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Transaction</h4>
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
                    @if(Session::has('success_message'))
                        <p class="alert alert-success" role="text">{{Session::get('success_message')}}</p>
                    @endif
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User Id</th>
                                <th>Order ID</th>
                                <th>Payment Mode</th>
                                <th>Bkash Number</th>
                                <th>Transaction Number</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
<style>
    .dropdwn-item{
        padding:4px;
        text-align:center;
    }
</style>
                        <tbody>
                             @foreach($transaction as $transaction)
                            <tr>
                                <td>{{$transaction->id}}</td>
                                <td>{{$transaction->user_id}}</td>
                                <td>{{$transaction->order_id}}</td>
                                <td>{{$transaction->mode}}</td>
                                <td>{{$transaction->number}}</td>
                                <td>{{$transaction->transaction_id}}</td>
                                <td>{{$transaction->status}}</td>
                                <td>
                                  <ul class="icons-list">
                                    <li class="dropdown" style="list-style-type:none;">
                                      <a href="#"  data-toggle="dropdown" style="margin-left:-34px;font-size: 23px;"><ion-icon name="menu-outline"></ion-icon></a>
                                      <ul class="dropdown-menu ">
                                        <li class="dropdwn-item"><a href="{{url('admin/transaction/update/'.$transaction->id.'/'.'pending')}}"><i class="icon-price-tags"></i>Pending</a></li>
                                            <li class="divider"></li>
                                        <li class="dropdwn-item"><a href="{{url('admin/transaction/update/'.$transaction->id.'/'.'approved')}}" onclick="return confirm('Are you sure, Payment Approved ?')">
                                            <i class="icon-truck"></i>Approved
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="dropdwn-item"><a href="{{url('admin/transaction/update/'.$transaction->id.'/'.'declined')}}" onclick="return confirm('Are you sure, Payment Declined ?')" >
                                            <i class="icon-price-tags"></i>Declined
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        
                                        <li class="dropdwn-item"><a href="{{url('admin/transaction/update/'.$transaction->id.'/'.'refound')}}" onclick="return confirm('Are you sure, Payment Refound ?')">
                                            <i class="icon-cross text-danger"></i>Refound
                                            </a>
                                        </li>
                                        <!--<li class="divider"></li>
                                        <li class="dropdwn-item"><a href="#"><i class="icon-pencil"></i>Edit Order
                                            </a>
                                        </li>--->
                                        <li class="divider"></li>
                                        <li class="dropdwn-item"><a href="{{url('admin/delete/transaction/'.$transaction->id)}}" onclick="return confirm('Are you sure, want to delete this Transaction ?')">
                                            <i class="icon-trash"></i>Delete Order
                                            </a>
                                        </li>
                                       </ul>
                                    </li>
                                  </ul>
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
