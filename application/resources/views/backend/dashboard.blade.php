@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(\Auth::guard('web')->user()->utype=='ADM')
                    <table class="table table-bordered table-striped w-50">
                        <!--<tr>-->
                        <!--    <th>New Orders</th>-->
                        <!--    <th>{{\DB::table('orders')->where('status', 'ordered')->count('id')}}</th>-->
                        <!--</tr>-->
                        <!--<tr>-->
                        <!--    <th>Products</th>-->
                        <!--    <th>{{\DB::table('products')->where('status', 1)->count('id')}}</th>-->
                        <!--</tr>-->
                        <tr>
                            <th>User Total</th>
                            <th>{{\App\User::count('id')}}</th>
                        </tr>
                    </table>
                    @else
                    
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
