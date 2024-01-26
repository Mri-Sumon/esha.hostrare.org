@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!--<div class="col-md-1"></div>-->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Cheque List | <a href="{{URL::to('/')}}/cheque" Style="font-weight: bold; color: red;">Cheque Prepare</a></div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif 
                <div class="card-body">
                    <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">Sr.</th>
                              <th scope="col">Account No</th>
                              <th scope="col">Issue Date</th>
                              <th scope="col">Pay To</th>
                              <th scope="col">Amount</th>
                              <th scope="col">A. in word</th>
                              <th scope="col">Signature</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($cheques as $cheque)
                                <tr>
                                  <th>{{$loop->iteration}}</th>
                                  <td>{!!$cheque->ac_number!!}</td> 
                                  <td>{!!$cheque->date!!}</td>
                                  <td>{!!$cheque->pay_to!!}</td>
                                  <td>{!!$cheque->amount!!}</td>
                                  <td>{!!$cheque->amount_in_word!!}</td>
                                  <td><img src="{{asset('application/public/images/signatures/signature'.$cheque->signature)}}" alt="Product Image"; width="180" height="50"></td>
                                  <td>
                                        <a href="{{URL::to('/')}}/chequePrint/{{$cheque->id}}" class="btn btn-primary btn-sm" style="width: 80px !important; margin-bottom: 3px !important;">Print</a><br>
                                        <a href="{{URL::to('/')}}/editCheque/{{$cheque->id}}" class="btn btn-info btn-sm" style="width: 80px !important; margin-bottom: 3px !important;">Edit</a><br>
                                        <form action="{{URL::to('/')}}/deleteCheque/{{$cheque->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return delete_conformation()" style="width: 80px !important;">Delete</button>
                                        </form>   
                                        <script>
                                            function delete_conformation(){
                                                var txt;
                                                var r = confirm("Are you sure you want to delete?");
                                                if (r == true) {
                                                    txt = "You pressed OK!";
                                                } else {
                                                    txt = "You pressed Cancel!";
                                                    event.preventDefault();
                                                }
                                            }
                                        </script>
                                  </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--<div class="col-md-1"></div>-->
    </div>
</div>
@endsection
