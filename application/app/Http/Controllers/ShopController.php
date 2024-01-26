<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cat;
use Cart;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->search){
            $search=$request->search;
            $product = Product::where('name', 'LIKE', '%'.$search.'%')->paginate(15);
            return view('frontend.shop')->with('products', $product);
        }
            $product=Product::paginate(15);
        return view('frontend.shop')->with('products', $product);
        
        
    }
    public function shopByCategory($category_id){
        $category=Cat::where('id',$category_id)->first();
        $productbycatid=Product::whereRaw("find_in_set($category_id,cat_ids)")->get();
        //dd($productbycatid);
        return view('frontend.productbycat')
        ->with('category',$category)
        ->with('productbycatid',$productbycatid);
    }
    public function search(Request $request){
            $search=$request->q;
            $product = Product::orWhere('name', 'LIKE', '%'.$search.'%')
                        ->orWhere('product_code', 'LIKE', '%'.$search.'%')
                        ->orWhere('brief', 'LIKE', '%'.$search.'%')
                        ->paginate(15);
        return view('frontend.shop')->with('products', $product);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($product_id)
    {
        
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
