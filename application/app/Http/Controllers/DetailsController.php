<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use Validator;
use Illuminate\Support\Facades\Auth;
use Cart;
use App\Bkash;
use DB;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($product_id)
    {
        $product_details=Product::find($product_id);
        // dd(explode(',',$product_details->pics));
        $need_product=Product::orderBy('id','DESC')->take(4)->get();
        $query = DB::table('products')
         ->whereRaw("FIND_IN_SET('$product_details->cat_ids', cat_ids)")
         ->take(6)->get();
         $bkash=Bkash::all();
        return view('frontend.productDetails')
            ->with('product_details',$product_details)
            ->with('bkash',$bkash)
            ->with('need_product',$need_product)
            ->with('related_product',$query);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function decreasequantity($rowId){
        $product=Cart::get($rowId);
        $qty=$product->qty-1;
        Cart::update($rowId,$qty);
        return redirect()->route("details");
    }
    public function increasequantity($rowId){
        $product=Cart::get($rowId);
        $qty=$product->qty+1;
        Cart::update($rowId,$qty);
        return redirect()->route("details");
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

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
