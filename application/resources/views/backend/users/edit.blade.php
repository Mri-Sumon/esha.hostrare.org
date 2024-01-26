@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit User Info
                    <a href="{{URL::to('users')}}" class="btn btn-outline-secondary float-right">Back to List</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="{{ route('users.update',$singleData->id) }}" method="post" enctype="multipart/form-data">@csrf
                            {{ method_field('PUT') }}
                            <div class="form-group col-md-7">
                                <label for="exampleInputName" class="h6">Name</label>
                                <input type="text" value="{{$singleData->name}}" class="form-control" id="name"  name="name" placeholder="Full Name">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputEmail" class="h6">Email</label>
                                <input type="text" value="{{$singleData->email}}" class="form-control" id="email"  name="email" placeholder="Email ID">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputPhone" class="h6">Phone</label>
                                <input type="text" value="{{$singleData->phone}}" class="form-control" id="phone"  name="phone" placeholder="Phone No">
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputPhone" class="h6">User Type</label>
                                <select class="form-control" name="utype">
                                    <option>Select</option>
                                    <option value="USR" @if($singleData->utype=='USR') selected @endif>User</option>
                                    <option value="ADM" @if($singleData->utype=='ADM') selected @endif>Admin</option>                                    
                                </select>
                                @error('utype')
                                    <p class="alert alert-danger" role="alert">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group col-md-7">
                                <label for="exampleInputPassword" class="h6">Password</label>
                                <input type="password" class="form-control" id="password"  name="password" placeholder="Password">
                            </div>
                            
                            <div class="form-group col-md-7">
                                <label for="exampleInputPassword" class="h6">Permissions</label>
                                @php
                                    $permissioarr=explode(',',$singleData->permissions);
                                @endphp
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="dashboard"><input type="checkbox" checked name="permissions[]" id="dashboard" value="dashbaord"> Dashboard</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="products"><input type="checkbox" @if(in_array("products", $permissioarr)===true) checked @endif name="permissions[]" id="products" value="products"> Product List</label>
                                    </div>                                    
                                    <div class="col-md-3">
                                        <label for="orders"><input type="checkbox" @if(in_array("orders", $permissioarr)===true) checked @endif name="permissions[]" id="orders" value="orders"> Order List</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="address"><input type="checkbox" @if(in_array("address", $permissioarr)===true) checked @endif name="permissions[]" id="address" value="address"> Address List</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="transactions"><input type="checkbox" @if(in_array("transactions", $permissioarr)===true) checked @endif name="permissions[]" id="transactions" value="transactions"> Transaction List</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="categories"><input type="checkbox" @if(in_array("categories", $permissioarr)===true) checked @endif name="permissions[]" id="categories" value="categories"> Category List</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="pages"><input type="checkbox" @if(in_array("pages", $permissioarr)===true) checked @endif name="permissions[]" id="pages" value="pages"> Page List</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="posts"><input type="checkbox" @if(in_array("posts", $permissioarr)===true) checked @endif name="permissions[]" id="posts" value="posts"> Post List</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="pictures"><input type="checkbox" @if(in_array("pictures", $permissioarr)===true) checked @endif name="permissions[]" id="pictures" value="pictures"> Picture List</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="settings"><input type="checkbox" @if(in_array("settings", $permissioarr)===true) checked @endif name="permissions[]" id="settings" value="settings"> Settings</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="themes"><input type="checkbox" @if(in_array("themes", $permissioarr)===true) checked @endif name="permissions[]" id="themes" value="themes"> Themes</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="users"><input type="checkbox" @if(in_array("users", $permissioarr)===true) checked @endif name="permissions[]" id="users" value="users"> All Users</label>
                                        <label for="customers" class="ml-2"><input type="checkbox" @if(in_array("customers", $permissioarr)===true) checked @endif name="permissions[]" id="customers" value="customers"> Customers</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="bkash"><input type="checkbox" @if(in_array("bkash", $permissioarr)===true) checked @endif name="permissions[]" id="bkash" value="bkash"> bKash</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="sections"><input type="checkbox" @if(in_array("sections", $permissioarr)===true) checked @endif name="permissions[]" id="sections" value="sections"> Section</label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-lg ml-3" type="submit">Update</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
