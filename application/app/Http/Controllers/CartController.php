<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\OrderItem;
use App\Shipping;
use App\Transaction;
use App\User;
use App\Bkash;
use App\Settings;
use Session;
use Validator;
use Illuminate\Support\Facades\Auth;
use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Cart::count()==0){
            return redirect('/');
        }
        return view('frontend.cart');
    }
    public function thankyou(Request $request){
        return view('frontend.thank-you');
    }
    public function checkout(){
            if(Auth::check()){
            $bkash=Bkash::first();
            return view('frontend.checkout')->with('bkash',$bkash);
            }else{
                return redirect()->route("register");
            }
    }
    public function detailstocart(Request $request,$id)
    {
        $product=Product::find($id);
        Cart::add($product->id,$product->name,$request->qty,$product->price)->associate('App\Product');
        session()->flash('success_message','Item added in Quatation list');
         return redirect()->route("product.cart");
    }
    public function addtocart($id, Request $request){
         $product=Product::find($id);
         Cart::add($product->id,$product->name,$request->quantity,$product->price)->associate('App\Product');
         session()->flash('success_message','Item added in Quatation list');
         return redirect()->route("home2");
    }
    public function removeformcart($id){
        Cart::remove($id);
        session()->flash('success_message',' Item has been removed');
        return redirect()->route("home2");
    }
    public function decreasequantity($rowId){
        $product=Cart::get($rowId);
        $qty=$product->qty-1;
        Cart::update($rowId,$qty);
        return redirect()->route("home2");
    }
    public function increasequantity($rowId){
        $product=Cart::get($rowId);
        $qty=$product->qty+1;
        Cart::update($rowId,$qty);
        return redirect()->route("home2");
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function placeorder(Request $request){
        $rules = array(
            'name'       => 'required',
            'phone'       => 'required',
            // 'email'       => 'required',
            'address'      =>'required',
            'district'      =>'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('checkout')
                ->withErrors($validator);
        } else {
        $settings=Settings::find(1);
        
        $checkuser=User::where('phone',$request->phone)->first();
        if($checkuser){
            $myid=$checkuser->id;
        }else{
            $usr=new User(); 
            $usr->utype='USR';
            $usr->name=$request->name;
            $usr->phone=$request->phone;
            $usr->email='';
            $usr->password=bcrypt('123456789987654321');
            $usr->save();
           
           $myid=$usr->id;
        }
        //dd($myid);
        $order=new Order();
        $order->user_id=$myid;
        $order->subtotal=Cart::subtotal();
        $order->tax=Cart::tax();
        $order->total=Cart::total();
        $order->name=$request->name;
        $order->mobile=$request->phone;
        // $order->email=$request->email;
        $order->address=$request->address;
        $order->city=$request->district;
        $order->note=$request->note;
        $order->status="ordered";
        $order->is_shipping_different=$request->ship_to_different_address ? 1:0;
        if($request->address==$settings->Delivery_Charge_Inside_Dhaka){
            $order->delivery_charge=$settings->Delivery_Charge_Inside_Dhaka;
            $order->total_with_dcost=Cart::total()+$settings->Delivery_Charge_Inside_Dhaka;
        }elseif($request->address==$settings->Delivery_Charge_Outside_Dhaka){
            $order->delivery_charge=$settings->Delivery_Charge_Outside_Dhaka;
            $order->total_with_dcost=Cart::total()+$settings->Delivery_Charge_Outside_Dhaka;
        }else{
            $order->delivery_charge="0";
            $order->total_with_dcost=Cart::total();
        }
        $order->save();
        
        foreach(Cart::content() as $item){
            $orderItem=new OrderItem();
            $orderItem->product_id = $item->id;
            $orderItem->order_id=$order->id;
            $orderItem->price=$item->price;
            $orderItem->quantity=$item->qty;
            $orderItem->save();
        }
        
        if($request->ship_to_different_address){
            $shipping = new Shipping();
            $shipping->order_id=$order->id;
            $shipping->name=$request->shipping_name;
            $shipping->mobile=$request->shipping_phone;
            $shipping->email=$request->shipping_email;
            $shipping->address=$request->shipping_address;
            $shipping->city=$request->shipping_district;
            $shipping->save();
        }
        if($request->payment_method == 'cod'){
            $transaction = new Transaction();
            $transaction->user_id=$myid;
            $transaction->order_id=$order->id;
            $transaction->mode=$request->payment_method;
            $transaction->status='pending';
            $transaction->save();
            Cart::destroy();
            session()->forget('checkout');
            return redirect()->route('thank-you');
        }elseif($request->payment_method == 'bkash'){
            $transaction = new Transaction();
            $transaction->user_id=$myid;
            $transaction->order_id=$order->id;
            $transaction->mode=$request->payment_method;
            $transaction->number=$request->bkash_number;
            $transaction->transaction_id=$request->transaction_id;
            $transaction->status='pending';
            $transaction->save();
            Cart::destroy();
            session()->forget('checkout');
            return redirect()->route('thank-you');
        }
        return view('frontend.thank-you');
        }
        
    }
    public function makeTransaction(Request $request,$order_id){
            $transaction = new Transaction();
            $transaction->user_id=Auth::user()->id;
            $transaction->order_id=$order_id;
            $transaction->mode=$request->paymentmode;
            $transaction->status='pending';
            $transaction->save();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     
    public function buynow(Request $request,$id){
        $product=Product::find($id);
        $bkash=Bkash::first();
        return view('frontend.buynow')->with('product',$product)->with('bkash',$bkash);
    }
    public function confirm_buynow(Request $request,$id){
        $rules = array(
            'name'       => 'required',
            'phone'       => 'required',
            'address'      =>'required',
            'district'      =>'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator);
        } else {
        if(Auth::check('login')==false){
            // $email=$request->email;
            $phone=$request->phone;
            $user=User::where('phone',$phone)->first();
            if($user){
                    auth()->login($user);
                
            }else{
                $user=new User();
                $user->name=$request->name;
                $user->phone=$request->phone;
                $user->email='Null';
                $user->password=md5('12345678###');
                $user->save();
                auth()->login($user);
            }
            
        }
        $settings=Settings::find(1);
        $product=Product::find($id);
        $order=new Order();
        $order->user_id=Auth::user()->id;
        if($product->sale_price==$product->price){
            $order->subtotal=$product->price;
        }else{
            $order->subtotal=$product->sale_price;
        }
        $order->tax='0';
        if($product->sale_price==$product->price){
            $order->total=$product->price;
        }else{
            $order->total=$product->sale_price;
        }
        $order->name=$request->name;
        $order->mobile=$request->phone;
        // $order->email=$request->email;
        $order->address=$request->address;
        $order->city=$request->district;
        $order->note=$request->note;
        $order->status="ordered";
        $order->is_shipping_different=$request->ship_to_different_address ? 1:0;
        if($request->address==$settings->Delivery_Charge_Inside_Dhaka){
            $order->delivery_charge=$settings->Delivery_Charge_Inside_Dhaka;
            if($product->sale_price==$product->price){
                $order->total_with_dcost=$product->price+$settings->Delivery_Charge_Inside_Dhaka;
            }else{
                $order->total_with_dcost=$product->sale_price+$settings->Delivery_Charge_Inside_Dhaka;
            }
        }elseif($request->address==$settings->Delivery_Charge_Outside_Dhaka){
            $order->delivery_charge=$settings->Delivery_Charge_Outside_Dhaka;
            if($product->sale_price==$product->price){
                $order->total_with_dcost=$product->price+$settings->Delivery_Charge_Outside_Dhaka;
            }else{
                $order->total_with_dcost=$product->sale_price+$settings->Delivery_Charge_Outside_Dhaka;
            }
        }else{
            $order->delivery_charge="0";
            if($product->sale_price==$product->price){
                $order->total_with_dcost=$product->price;
            }else{
                $order->total_with_dcost=$product->sale_price;
            }
        }
        $order->save();
        $orderItem=new OrderItem();
        $orderItem->product_id = $product->id;
        $orderItem->order_id=$order->id;
        if($product->sale_price==$product->price){
            $orderItem->price=$product->price;
        }else{
            $orderItem->price=$product->sale_price;
        }
        $orderItem->quantity='1';
        $orderItem->save();
        
        if($request->ship_to_different_address){
            $shipping = new Shipping();
            $shipping->order_id=$order->id;
            $shipping->name=$request->shipping_name;
            $shipping->mobile=$request->shipping_phone;
            $shipping->email=$request->shipping_email;
            $shipping->address=$request->shipping_address;
            $shipping->city=$request->shipping_district;
            $shipping->save();
        }
        if($request->payment_method == 'cod'){
            $transaction = new Transaction();
            $transaction->user_id=Auth::user()->id;
            $transaction->order_id=$order->id;
            $transaction->mode=$request->payment_method;
            $transaction->status='pending';
            $transaction->save();
            return redirect()->route('thank-you');
        }elseif($request->payment_method == 'bkash'){
            $transaction = new Transaction();
            $transaction->user_id=Auth::user()->id;
            $transaction->order_id=$order->id;
            $transaction->mode=$request->payment_method;
            $transaction->number=$request->bkash_number;
            $transaction->transaction_id=$request->transaction_id;
            $transaction->status='pending';
            $transaction->save();
            return redirect()->route('thank-you');
        }
        return view('frontend.thank-you');
        }
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
