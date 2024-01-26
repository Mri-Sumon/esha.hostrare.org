@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Customer Order Details</h4>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-primary float-right" onclick="printData()"><i class="fas fa-print"></i> Print</a>
                        </div>
                    </div>
                </div>
                <script>
	function downloadCSV(csv, filename) {
		var csvFile;
		var downloadLink;
		
		var BOM = "\uFEFF";
		
        var    csv = BOM + csv;

		csvFile = new Blob([csv], {type: "text/csv;charset=utf-8"});

		downloadLink = document.createElement("a");

		downloadLink.download = filename;

		downloadLink.href = window.URL.createObjectURL(csvFile);

		downloadLink.style.display = "none";

		document.body.appendChild(downloadLink);

		downloadLink.click();
	}
	
	function exportTableToCSV(filename) {
		var csv = [];
		var rows = document.querySelectorAll("table tr");
		
		for (var i = 0; i < rows.length; i++) {
			var row = [], cols = rows[i].querySelectorAll("td, th");
			
			for (var j = 0; j < cols.length; j++) 
				row.push(cols[j].innerText);
			
			csv.push(row.join(","));        
		}

		downloadCSV(csv.join("\n"), filename);
	}
	
	function printData()
    {
       var divToPrint=document.getElementById("datatable");
       newWin= window.open("");
       newWin.document.write(divToPrint.outerHTML);
       newWin.print();
       newWin.close();
    }
    

</script>
            <table border="1"  id="datatable" border="0" cellpadding="0" cellspacing="0" style="width:100%; ">
              <tr >
                  <td>
                <div class="card-body">
                    <p>Dispatch to:</p>
                    <h4>{{$order->name}}</h4>
                    <h4>Address: {{$order->address}},{{$order->city}}</h4>
                    <!--<h4>{{$order->city}}</h4>-->
                    <h4>Phone No: {{$order->mobile}}</h4>
                    <hr style="border: 1px dashed black;" />
                    <h5>Order ID: {{$order->id}}</h5>
                    <p>Thank you for buying from Sellwings.com</p>
                    <div style="border:1px solid">
                        <ul style="list-style-type:none;padding-top:15px;">
                            <li>Order Date: {{$order->created_at}}</li>
                            <li>Delivery Service: Standard</li>
                            <li>Order By: {{$order->name}}</li>
                            @php
                                $transaction=DB::table('transactions')->where('order_id',$order->id)->first();
                            @endphp
                            @if($transaction->mode=="cod")
                            <li>Payment Type: Cash on Delivery</li>
                            @elseif($transaction->mode=="bkash")
                            <li>Payment Type: Bkash (Number: {{$transaction->number}}, Transaction ID: {{$transaction->transaction_id}})</li>
                            @else
                            <li>Payment Type: </li>
                            @endif
                        </ul>
                    </div>
                    <div class="table" style="margin-top:30px; text-align:center;">
                        <table width="100%">
                            <thead style="border-top:1px solid gray;">
                                <tr width="100%" style="border:1px solid black;">
                                    <th width="15%" style="border:1px solid black;">Quantity</th>
                                    <th width="55%" style="border:1px solid black;">Product Details</th>
                                    <th width="15%" style="border:1px solid black;">Unite-Price</th>
                                    <th width="15%" style="border:1px solid black;">Sub-Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                   $order_item=DB::table('order_items')->where('order_id',$order->id)->get();
                                @endphp
                                @foreach($order_item as $order_itm)
                                @php
                                    $products=DB::table('products')->where('id',$order_itm->product_id)->get();
                                @endphp
                                @foreach($products as $prdt)
                                <tr style="border:1px solid black;">
                                    <th style="border:1px solid black;vertical-align: middle;" >{{$order_itm->quantity}}</th>
                                    <th style="border:1px solid black;">
                                        <table width="100%">
                                            <tr width="100%" style="border:1px solid black;">
                                                <th width="50%" style="border:1px solid black;">
                                                    <img src="{{URL::to('/')}}/application/storage/app/product/{{$prdt->f_pic}}" class="" style="width:100%;">
                                                </th>
                                                <th width="50%" style="border:1px solid black;">
                                                    <ul style="list-style-type:none;padding-top:15px;margin-left:-33px;text-align:left;">
                                                        <li>{{$prdt->name}}</li>
                                                    </ul>
                                                </th>
                                            </tr>
                                        </table>
                                    </th>
                                    <th style="border:1px solid black;vertical-align: middle;">{{$prdt->price}}</th>
                                    <th style="border:1px solid black;vertical-align: middle;">{{$order_itm->price*$order_itm->quantity}}</th>
                                </tr>
                                @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div style="border:1px solid black;text-align:end">
                            <ul style="list-style-type:none;margin-right:20px;padding-top:15px">
                                <li>Order Price  :  {{$order->total}}</li>
                                <li>Delivery Price : {{$order->delivery_charge}}</li>
                                <li>Discount :       00</li>
                                <li>Amount With Delivery Charge :  {{$order->total_with_dcost}}</li>
                                @php
                                $transaction=DB::table('transactions')->where('order_id',$order->id)->first();
                                @endphp
                                @if($transaction->status=="approved")
                                <li>Paid Amount :    {{$order->total_with_dcost}}</li>
                                @else
                                <li>Paid Amount :    00</li>
                                @endif
                            </ul>
                    </div>
                </div>
                
                <div style="padding:20px">
                    <p>Thanks for buying on giftmart.express. To provide feedback for the seller, please
visit <a href="{{URL::to('/')}}">giftmart.express</a></p>
                </div>
                </td>
                </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection