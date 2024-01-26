@extends('layouts.app')

@section('content')
<div class="container mb-3">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Update Cheque information | <a href="{{URL::to('/')}}/cheque_List" Style="font-weight: bold; color: red;">Cheque List</a></div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif 
                <div class="card-body">
                    <form action="{{URL::to('/')}}/updateChequeInformation/{{$chequeInformations->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
 
                        <div class="row mt-3 mb-3">
                            <div class="col-md-2" style="padding-top: 13px;">
                                <label for="ac_number" class="h6">Account No:</label>
                            </div>
                            <div class="col-md-5">
                                <input type="number" value="{{$chequeInformations->ac_number}}" class="form-control" id="ac_number"  name="ac_number" placeholder="A/C Number">
                            </div>
                            <div class="col-md-1" style="padding-top: 13px;">
                                <label for="date" class="h6">Date:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="date" value="{{$chequeInformations->date}}" class="form-control" id="date"  name="date" placeholder="Current date">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-2" style="padding-top: 13px;">
                                <label for="pay_to" class="h6">Pay To:</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" value="{{$chequeInformations->pay_to}}" class="form-control" id="pay_to"  name="pay_to" placeholder="Pay to/Bearer name">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-2" style="padding-top: 13px;">
                                <label for="amount" class="h6">Amount:</label>
                            </div>
                            <div class="col-md-10">
                                <input type="number" value="{{$chequeInformations->amount}}" class="form-control" id="amount"  name="amount" placeholder="Amount in number">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-2" style="padding-top: 13px;">
                                <label for="amount_in_word" class="h6">A. in word:</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" value="{{$chequeInformations->amount_in_word}}" class="form-control" id="amount_in_word"  name="amount_in_word" placeholder="Amount in word">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-2" style="padding-top: 13px;">
                                <label for="signature" class="h6">Signature:</label>
                            </div>
                            <div class="col-md-10">
                                <img src="{{asset('application/public/images/signatures/signature'.$chequeInformations->signature)}}" alt="Product Image"; width="180" height="50" style="margin-bottom: 10px;">
                                <input type="file" value="{{$chequeInformations->signature}}" class="form-control" id="signature"  name="signature" placeholder="Authority signature" required>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-end my-3">
                            <button class="btn btn-primary btn-lg ml-3" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
@endsection
