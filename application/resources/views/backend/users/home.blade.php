@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Users
                    <a href="{{URL::to('/')}}/users/create" class="btn btn-primary float-right"><i class="fa fa-plus-circle"></i> Add New </a>
                </div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>User Type</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($data as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>
                                @if($item->id!=1)
                                <a href="{{URL::to('/')}}/users/{{$item->id}}/edit" class="text-dark font-weight-bold">{{$item->name}}</a>
                                    @else
                                    <p class="text-dark font-weight-bold">{{$item->name}}</p>
                                @endif
                            </td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td>
                                @if($item->utype=='ADM')
                                Admin
                                @elseif($item->utype=='USR')
                                Customer
                                @else
                                None
                                @endif
                            </td>
                            <td>
                                <a href="{{URL::to('/')}}/users/{{$item->id}}/edit" class="btn btn-info btn-sm text-white"><i class="fa fa-pencil"></i> Edit</a>
                            </td>
                            <td>
                                @if($item->id!=1)
                                <form action="{{ route('users.destroy', $item->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger btn-sm text-white" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i> Delete</button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    </div>
                        {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
