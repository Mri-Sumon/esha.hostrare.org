
@extends('layouts.FrontendLayout2')
@section('content')
        <section class="best_seller_product"  style="background-color: #fff;padding-bottom: 10px;padding-top:0" id="main_content_area">
            <style>
    td{padding: 1px !important;    font-size: 12px;}
    .reg-title{
    padding: 12px 12px !important;
    background: #f9f9f9 !important;
    margin: 5px 0 10px 0 !important;
    color: #495c58 !important;
    border-bottom: 1px dashed #E7E7E7 !important;
    cursor: pointer !important;
    text-transform: uppercase !important;
    font-weight: 600 !important;
    }
</style>
<section class="details_section" >
    <div class="container" style="padding-right: 0  !important;;">
        <div class="row" style="margin-right: 0;padding-top:20px">
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-left: 5px;padding-right: 5px">
                
                
                <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12" > 
                <div class="panel panel-success" style="border: 0;">

                    <div class="panel-heading reg-title">
                        <strong style="font-size: 16px;color: #495c58">Customar Information</strong>

                    </div>

                    <div class="panel-body" style="padding:0">
                     
                            <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12" > 
                                <form action="{{ URL::to('confirm_buynow/'.$product->id) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group" style="padding-bottom: 15px">
                                        <!--<input name="product_id" type="hidden" value="">-->
                                        <input style="width: 100% !important;border: 1px solid #ccc;padding-left: 10px;border-radius: 5px !important;" name="name"  type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1">
                                        @error('name')
                                            <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group" style="padding-bottom: 15px">
                                        <!--<input style="width: 100% !important;border: 1px solid #ccc;padding-left: 10px;border-radius: 5px !important;" name="customer_mobile"  required type="number" class="form-control" placeholder="Mobile" aria-describedby="basic-addon1" >-->

                                        <input style="width: 100% !important;border: 1px solid #ccc;padding-left: 10px;border-radius: 5px !important;" name="phone"  type="text" class="form-control" placeholder="number" aria-describedby="basic-addon1" pattern="\d*" maxlength="11" minlength="11">
                                        @error('phone')
                                            <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                    </div>
                                    @php
                                    $setting=DB::table('settings')->first();
                                    @endphp
                                    <div class="form-group" style="padding-bottom: 15px">
                                        <select id="DeliAddress" onchange="UpdateOrderInfo(this.value)" name="address"   class="form-control" style="border: 1px solid #ccc;border-radius: 5px !important;">
                                            <option value="0">Select Your Area</option>
                                            <option   value="{{$setting->Delivery_Charge_Inside_Dhaka}}">Inside Dhaka</option>
                                            <option value="{{$setting->Delivery_Charge_Outside_Dhaka}}">Outside Dhaka</option>
                                        </select>
                                    </div>
<input type="hidden" id="travel_cost" name="travel_cost">
                                    <div class="form-group" style="padding-bottom: 15px">
                                        <textarea style="border: 1px solid #ccc;border-radius: 5px !important;"  class="form-control" name="district"   placeholder="Delivery Address"></textarea>
                                        @error('district')
                                        <p class="alert alert-danger" role="alert">{{$message}}</p>
                                        @enderror
                                       
                                    </div>
                                    <div class="form-group" style="padding-bottom:15px;">
                                        <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0"> 
                                           <tr>
                                            Please complete your bKash payment at first, then fill up the form below. Also note that 1.85% bKash merchant cost will be added with net price. Total amount you need to send us at bKash Personal Number : {{$bkash->number}}
                                        </tr>
                                        <tr>
                                         
                                        <td><p style="height:30px;width:20px;font-size:30px;"><input type="radio" onchange="show(this.value)" name="payment_method" value="bkash"/> </p></td>
                                        <td>Bkash Payment</td>
                                        
                                        </tr>
                                        
                                        <tr>
                                            <td><p style="height:30px;width:20px;font-size:30px;"><input type="radio" onchange="show1(this.value)" name="payment_method" value="cod" checked></p></td>
                                            <td>Cash On Delivery</td>
                                        </tr>
                                        
                                        </table>
	                                   <div id="demo" class="collapse" >
                                                <input type="text" name="bkash_number" class="form-control" style="width: 100% !important;height:40px !important;border: 1px solid #ccc;padding-left: 10px;margin-bottom:20px;border-radius: 5px !important;" placeholder=" Bkash Number" />
                                                @error('bkash_number')
                                                <p class="alert alert-danger" role="alert">{{$message}}</p>
                                                @enderror
                                                <input type="text" name="transaction_id" style="width: 100% !important;height:40px !important;border: 1px solid #ccc;padding-left: 10px;border-radius: 5px !important;" placeholder="Transaction ID" />
                                                @error('transaction_id')
                                                <p class="alert alert-danger" role="alert">{{$message}}</p>
                                                @enderror
                                        </div>
	                                    
                                    </div>

                                    <div class="form-group  reg-btn-desk " style="padding-bottom: 15px;width: 40%;margin-right: 15px;float:left" >
                                        <input id="submitBTN" type="submit" class="btn btn-success btn-block" value="Confirm Order" style="background: #286090;padding: 6px 12px;font-size: 14px; font-weight: 400;border:0;border-radius: 4px !important;">
                                    </div>
                                     <div class="form-group reg-btn-desk" style="padding-bottom: 15px;width: 32%;float: left;">
                                          <a href="{{URL::to('/')}}" class="btn btn-info btn-block" style="background: #37A1D1;padding: 6px 12px;font-size: 14px; font-weight: 400;border:0;border-radius: 4px !important;">Continue Shopping </a>
                                     </div>
                                    
                                </form>
                            </div>
                    </div>
                </div>
                </div>
            </div>
            

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  style="padding-left: 5px;padding-right: 5px; ">
                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12" > 
                    <div class="panel panel-info" style="border: 0;">
                        <div class="panel-heading reg-title"><strong style="font-size: 16px;color: #495c58;"> Order Information</strong></div>
                        <div class="panel-body " style="padding: 0">


                            <table class="table table-bordered" style="margin-top: 0px;border:0" >
                                <thead>
            <tr class="active">
                <th>Product</th> 
              <th style="width: 35%;text-align: right;padding:10px">Price  </th>
            </tr>
                                </thead>    
                                <tbody id="CustomerOrderData">
                                    <tr style="cursor: pointer">
                                        <td style="">
                                            <img style="float:left;width:40px;height: 40px" src="{{URL::to('/')}}/application/storage/app/product/{{$product->f_pic}}" title="{{$product->name}}" alt="{{$product->name}}">
                                            <label style=" float: left; padding: 5px;margin-bottom:0;font-weight:500">
                                            {{$product->name}}<br>           
                                            ৳  @if($product->sale_price==$product->price)
	                                        {{$product->price}}
	                                        @else
	                                        {{$product->sale_price}}
	                                        @endif
                                            <i style="color:#333;font-weight:500" class="fa fa-times" ></i>
                                            1           &nbsp;</label>
                                        </td>
                                        <td style="width: 35%;text-align: right;padding:10px !important;text-align:right;font-family: 'Open Sans', sans-serif;font-size: 14px;"> 
                                            ৳ @if($product->sale_price==$product->price)
	                                        {{$product->price}}
	                                        @else
	                                        {{$product->sale_price}}
	                                        @endif
                                        </td>
                                             
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="border:0;padding:20px !important"></td>
                                    </tr>
                                    <tr class="active">
                                        <td   style="padding:10px !important;text-align:left;font-family: 'Open Sans', sans-serif;font-size: 14px;"> Sub Total</td>
                                        <td   style="padding:10px !important;text-align:right;font-family: 'Open Sans', sans-serif;font-size: 14px;"> 	৳  @if($product->sale_price==$product->price)
	                                        {{$product->price}}
	                                        @else
	                                        {{$product->sale_price}}
	                                        @endif</td>
                                    </tr>
                                    <tr>
                                        <td  style="padding:10px !important;text-align:left;font-family: 'Open Sans', sans-serif;font-size: 14px;"> Delivery Cost</td>
                                        <td   style="padding:10px !important;text-align:right;font-family: 'Open Sans', sans-serif;font-size: 14px;" id="CustomerDeliveryPoint"> 00 </td>
                                    </tr>
                                    <tr class="active">
                                        <input id="TotalPtk" type="hidden" value="@if($product->sale_price==$product->price)
	                                        {{$product->price}}
	                                        @else
	                                        {{$product->sale_price}}
	                                        @endif">
                                        <td   style="padding:10px !important;text-align:left;font-family: 'Open Sans', sans-serif;font-size: 14px;"> Grand Total</td>
                                        <td   style="padding:10px !important;text-align:right;font-family: 'Open Sans', sans-serif;font-size: 14px;" id="GrandOrderTk">
                                     	৳  @if($product->sale_price==$product->price)
	                                        {{$product->price}}
	                                        @else
	                                        {{$product->sale_price}}
	                                        @endif
                                     	</td>
                                    </tr>
                                </tbody>
                            </table>




                        </div>
                    </div>

                </div>
                </div>

                    </div>
    </div>
</section>
<script>
function show(str){
                document.getElementById('demo').style.display = 'block';
            }
            function show1(str){
                document.getElementById('demo').style.display = 'none';
            }
    function UpdateOrderInfo(obj) {
        
        delivery_amount1 = document.getElementById("DeliAddress").value
        console.log('delivery_amount1');
        total_order_tk = document.getElementById("TotalPtk").value
        if (total_order_tk) {
            total_tk = Number(total_order_tk) + Number(delivery_amount1);
            document.getElementById("CustomerDeliveryPoint").innerHTML = ' ৳ ' + delivery_amount1;
 
  document.getElementById("travel_cost").value = delivery_amount1;
            document.getElementById("GrandOrderTk").innerHTML = ' ৳ ' + total_tk;
        }
 
    }
 
 
 
 
</script>
<script>
//     function UpdateOrderInfo(obj) {
//         if (obj == 1) {
//             delivery_amount = 60;
//         } else if (obj == 2) {
//             delivery_amount = 100;
//         }else if (obj == 3) {
//             delivery_amount = 150;
//         } else {
//             delivery_amount = 0;
//         }
//         total_order_tk = document.getElementById("TotalPtk").value
//         if (total_order_tk) {
//             total_tk = Number(total_order_tk) + Number(delivery_amount);
//             document.getElementById("CustomerDeliveryPoint").innerHTML = ' ৳ ' + delivery_amount;
            
//   document.getElementById("travel_cost").value = delivery_amount;
//             document.getElementById("GrandOrderTk").innerHTML = ' ৳ ' + total_tk;
//         }

//     }


    function CartDataRemoveR(Obj)
    {

        serverPage = 'http://www.kalerhaat.com/cart/ajax_cart_remove_product/' + Obj;
        xmlhttp.open("GET", serverPage);
        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                if (xmlhttp.responseText != 0) {
                    document.getElementById("CustomerOrderData").innerHTML = xmlhttp.responseText;
                    cartStatus();
                } else {
                    window.location.href = "http://www.kalerhaat.com/resistration-information";
                }
            }
        }
        xmlhttp.send(null);

    }

</script>

<script>
    function IncrementFunctionR(Obj, rowid) {

        var x = document.getElementById(Obj).innerHTML;
        var quantity = Number(x) + 1;
        serverPage = 'http://www.kalerhaat.com/cart/ajax_update_cart/' + rowid + '/' + quantity;
        xmlhttp.open("GET", serverPage);
        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("CustomerOrderData").innerHTML = xmlhttp.responseText;
                cartStatus();
            }
        }
        xmlhttp.send(null);


    }
    function DecrementFunctionR(Obj, rowid) {
        var x = document.getElementById(Obj).innerHTML;
        var quantity = Number(x) - 1;
        if (quantity >= 1) {
            document.getElementById(Obj).innerHTML = quantity;

            serverPage = 'http://www.kalerhaat.com/cart/ajax_update_cart/' + rowid + '/' + quantity;
            xmlhttp.open("GET", serverPage);
            xmlhttp.onreadystatechange = function ()
            {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                {
                    document.getElementById("CustomerOrderData").innerHTML = xmlhttp.responseText;
                    cartStatus();
                }
            }
            xmlhttp.send(null);
        }


    }


    function cartStatus()
    {

        serverPage = 'http://www.kalerhaat.com/cart/cart_status/';
        xmlhttp.open("GET", serverPage);
        xmlhttp.onreadystatechange = function ()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                var obj = JSON.parse(xmlhttp.responseText);
                document.getElementById("totalCartItems2").innerHTML = obj.total_items + ' Items';
                
                  document.getElementById("MtotalCartItemsBlank").style.background = "#f00";
           
                 document.getElementById("MtotalCartItems").innerHTML = obj.total_items;     
                 
                 document.getElementById("MtotalCartItemsBlank2").style.background = "#f00";
               
                 document.getElementById("MtotalCartItems2").innerHTML = obj.total_items;    
                
                
                document.getElementById("CartDetailsTotal").innerHTML = obj.total_amount + ' Tk.';
                document.getElementById("MtotalCartItems").innerHTML = obj.total_items;

                obj_place = document.getElementById("DeliAddress").value;

                if (obj_place == 1) {
                    delivery_amount = 60;
                } else if (obj_place == 2) {
                    delivery_amount = 100;
                } else if (obj_place ==3 {
                    delivery_amount = 150;
                } else {
                    delivery_amount = 0;
                }
                total_order_tk = document.getElementById("TotalPtk").value
                if (total_order_tk) {
                    total_tk = Number(total_order_tk) + Number(delivery_amount);
                    document.getElementById("CustomerDeliveryPoint").innerHTML = ' ৳ ' + delivery_amount;
                    document.getElementById("GrandOrderTk").innerHTML = ' ৳ ' + total_tk;
                }


            }
        }
        xmlhttp.send(null);

    }


</script>
        </section>

        <!--content area end-->

@endsection