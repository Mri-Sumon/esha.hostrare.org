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
use DB;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order=Order::orderBy('id','DESC')->get();
        //dd($order);
        return view('backend.orders.order')->with('order',$order);
    }

    public function showOrderDetails(){
        $orderdetails=OrderItem::orderBy('id','DESC')->get();
        return view('backend.orders.order-item')->with('orderdetails',$orderdetails);
    }
    public function shippingDifferent(){
        $shippingdifferent=Shipping::orderBy('id','DESC')->get();
        return view('backend.orders.shipping-different')->with('shippingdifferent',$shippingdifferent);
    }
    public function deleteshipping($id){
        $shipping=Shipping::find($id);
        $shipping->delete();
        return redirect()->route('admin.shipping.different');
    }
    public function transaction(){
        $transaction=Transaction::orderBy('id','DESC')->get();
        return view('backend.orders.transaction')->with('transaction',$transaction);
    }
    public function updateorder($id,$status){
        $order=Order::find($id);
        $order->status=$status;
        $order->save();
        return redirect()->route('admin.order');
    }
    public function updatetransaction($id,$status){
        $transaction=Transaction::find($id);
        $transaction->status=$status;
        $transaction->save();
        session()->flash('success_message','Transaction has been successfully Updated!');
        return redirect()->route('admin.transaction');
    }
    public function deletetransaction($id){
        $transaction=Transaction::find($id);
        $transaction->delete();
        session()->flash('delete_message','Transaction has been deleted successfully!');
        return redirect()->route('admin.transaction');
    }
    public function viewdetails($id){
        $order=Order::find($id);
        return view('backend.orders.admin-view-order-details')->with('order',$order);
    }
    public function deleteorder($id){
        $order=Order::find($id);
        $order_item=OrderItem::where('order_id',$order->id)->get();
        $shipping=Shipping::where('order_id',$order->id)->get();
        $transaction=Transaction::where('order_id',$order->id)->get();
        $order->delete();
        // $order_item->delete();
        // $shipping->delete();
        // $transaction->delete();
        return redirect()->route('admin.order');
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
