<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;
use App\Shipping;
use App\Transaction;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Session;
use App\Mail\FeedbackMail;
use Mail;
use Carbon\Carbon;

class UserOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order=Order::where('user_id',Auth::user()->id)->get();
        return view('backend.orders.userorder')->with('order',$order);
    }

    public function showOrderDetails(){
        $orderdetails=OrderItem::all();
        return view('backend.orders.order-item')->with('orderdetails',$orderdetails);
    }
    public function shippingDifferent(){
        $shippingdifferent=Shipping::all();
        return view('backend.orders.shipping-different')->with('shippingdifferent',$shippingdifferent);
    }
    public function transaction(){
        $transaction=Transaction::all();
        return view('backend.orders.transaction')->with('transaction',$transaction);
    }
        public function viewdetails($id){
        $order=Order::find($id);
        return view('backend.orders.user-view-order-details')->with('order',$order);
    }
    public function updateorder($id,$status){
        $order=Order::find($id);
        $order->status=$status;
        $order->save();
        return redirect()->route('user.order');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function saveProduct()
    {
       
    }
    public function delete(){
       
    }
    public function edit(){
        

    }
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
