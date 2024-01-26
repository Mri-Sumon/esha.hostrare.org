@extends('layouts.app')

@section('content')
<div class="container mb-3">
    <div class="row">
        <div class="col-md-1"></div> 
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Cheque information | <a href="{{URL::to('/')}}/cheque_List" Style="font-weight: bold; color: red;">Cheque List</a></div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif 
                <div class="card-body">
                    <form action="{{ URL::to('saveCheque') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row mt-3 mb-3">
                            <div class="col-md-2" style="padding-top: 13px;">
                                <label for="ac_number" class="h6">Account No:</label>
                            </div>
                            <div class="col-md-5">
                                <input type="number" value="" class="form-control" id="ac_number"  name="ac_number" placeholder="A/C Number">
                            </div>
                            <div class="col-md-1" style="padding-top: 13px;">
                                <label for="date" class="h6">Date:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="date" value="" class="form-control" id="date"  name="date" placeholder="Current date">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-2" style="padding-top: 13px;">
                                <label for="pay_to" class="h6">Pay To:</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" value="" class="form-control" id="pay_to"  name="pay_to" placeholder="Pay to/Bearer name">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-2" style="padding-top: 13px;">
                                <label for="amount" class="h6">Amount:</label>
                            </div>
                            <div class="col-md-10">
                                <input type="number" class="form-control" id="numberInput" oninput="convertToWords()" name="amount" placeholder="Amount in number">
                            </div>
                            <script>
                                function convertToWords() {
                                    var numberInput = document.getElementById("numberInput").value;
                                    var words = numberToWords.toWords(numberInput);
                                    document.getElementById("wordsOutput").value = words;
                                }
                            </script>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-2" style="padding-top: 13px;">
                                <label for="amount_in_word" class="h6">A. in word:</label>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="wordsOutput"  name="amount_in_word" placeholder="Amount in word">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-2" style="padding-top: 13px;">
                                <label for="signature" class="h6">Signature:</label>
                            </div>
                            <div class="col-md-10">
                                <input type="file" value="" class="form-control" id="signature"  name="signature" placeholder="Authority signature" required>
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
