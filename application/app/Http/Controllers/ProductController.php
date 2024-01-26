<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Session;
use App\Mail\FeedbackMail;
use Mail;
use Carbon\Carbon;
use App\Cat;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::orderBy('id','DESC')->paginate(15);
        return view('backend.products.product',['products'=>$product]);
    }

    public function productSinglePage($id)
    {
        $singleShow = Cat::find($id);
        // dd($singleShow);
        return view('themes.esha_corporation.pages.productSinglePage')->with('singleShow', $singleShow);
    }
    
    public function productSubCategory($id){
        $categories = Cat::find($id);
        $subCategories = Cat::query()->where('parent', $categories->id)->get();
        return view('themes.esha_corporation.pages.productSubCategory')
        ->with('categories', $categories)
        ->with('subCategories', $subCategories);
    }
    
    public function searchingresult()
    {
        if(request('keyword')){
            $categories = Cat::where('name', 'LIKE', '%'.request('keyword').'%')->latest()->paginate(10);
        }else{
            $categories = Cat::where('parent','0')->get();
        }
        return view('themes.esha_corporation.pages.searchingresult', ['categories'=>$categories]);
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.products.addproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function saveProduct(Request $request)
    {
        $rules = array(
            'name'       => 'required',
            'f_pic'       => 'required',
            'description'      =>'required',
            'status'      =>'required'
        );
        $messages = [
            'name.required' => 'Name Required!',
            'f_pic.required' => 'Featured Picture Required!',
            'description.required' => 'Description Required!',
            'status.required' => 'Status Required!'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('addproduct')
                ->withInput($request->input())
                ->withErrors($validator);
        } else {
            $product = new Product;
            $product->name=$request->name;
            $product->product_code=$request->product_code;
            if($request->pics)
            {
                $imagesname='';
                foreach($request->pics as $key=>$image){
                    $imgName=Carbon::now()->timestamp.$key.'.'.$image->extension();
                    $image->storeAs('/product/',$imgName);
                    if($imagesname==''){
                        $imagesname=$imgName;
                    }else{
                    $imagesname=$imagesname.','.$imgName;
                    }
                }
                $product->pics=$imagesname;
            }
            $imageName=Carbon::now()->timestamp.'.'.$request->f_pic->extension();
            $request->f_pic->storeAs('/product/',$imageName);
            $product->f_pic=$imageName;
            if($request->discount_type=='fixed'){
                $product->sale_price=$request->price-$request->discount_amount;
            }elseif($request->discount_type=='percent'){
                $sale_pric=$request->price*($request->discount_amount/100);
                $product->sale_price=$request->price-$sale_pric;
            }else{
                $product->sale_price=00;
            }
            if($request->price){
            $product->price=$request->price;
                
            }else{
              $product->price=0;  
            }
            $product->brand=$request->brand;
            $product->discount_type=$request->discount_type;
            $product->discount_amount=$request->discount_amount;
            $product->description=$request->description;
            $product->brand_details=$request->brand_details;
            $product->tags=$request->tags;
            if($request->cat_ids){
            $cat_ids=implode(',',$request->cat_ids);
            $product->cat_ids=$cat_ids;
            }
            $product->brief=$request->brief;
            $product->status=$request->status;
            $product->sort=$request->sort;
            if($request->feature_product){
            $product->feature_product=$request->feature_product;
            }else{
                $product->feature_product=0;
            }
            if($request->top_product){
            $product->top_product=$request->top_product;
            }else{
                $product->top_product=0;
            }
            $product->save();
            }
            Session::flash('message', 'Successfully Saved!');
            return redirect()->route("admin.addproduct");
    }
    public function delete($product_id){
        $product=Product::find($product_id);
        if($product){
            if($product->pics!=''){
                $picsarr=explode(',',$product->pics);
                foreach($picsarr as $picsrc){
                    if (\File::exists(storage_path('app/product/'.$picsrc))) {
                    unlink(storage_path('app/product/'.$picsrc));
                    }
                }
            }
            if (\File::exists(storage_path('app/product/'.$product->f_pic))) {
                unlink(storage_path('app/product/'.$product->f_pic));
            }
            $product->delete();
            Session()->flash('delete_message','product has been deleted successfully!');
            return redirect()->route('product');
        }else{
            Session()->flash('delete_message','There is a problem product deletion!!');
            return redirect()->route('product');
        }
    }
    public function edit($product_id){
        $singleData=Product::where('id',$product_id)->first();
        return view('backend.products.editproduct')->with('singleData',$singleData);

    }
    public function updateProduct(Request $request,$id){
        $rules = array(
            'name'       => 'required',
            'description'      =>'required',
            'status'      =>'required'
        );
         $messages = [
            'name.required' => 'Name Required!',
            'f_pic.required' => 'Featured Picture Required!',
            'description.required' => 'Description Required!',
            'status.required' => 'Status Required!'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->input())
                ->withErrors($validator);
        }
            $product = Product::find($id);
            $product->name=$request->name;
            $product->product_code=$request->product_code;
            if($request->pics)
            {
                $imagesname='';
                foreach($request->pics as $key=>$image){
                    $imgName=Carbon::now()->timestamp.$key.'.'.$image->extension();
                    $image->storeAs('/product/',$imgName);
                    $imagesname=$imagesname.','.$imgName;
                }
                if($product->pics!=''){
                    $picsarr=explode(',',$product->pics);
                    foreach($picsarr as $picsrc){
                        if (\File::exists(storage_path('app/product/'.$picsrc)) && $product->pics!='') {
                        unlink(storage_path('app/product/'.$picsrc));
                        }
                    }
                }
                $product->pics=$imagesname;
            }
            if($request->f_pic){
                $imageName=Carbon::now()->timestamp.'.'.$request->f_pic->extension();
                $request->f_pic->storeAs('/product/',$imageName);
                
                if (\File::exists(storage_path('app/product/'.$product->f_pic)) && $product->f_pic!='') {
                unlink(storage_path('app/product/'.$product->f_pic));
                }
                $product->f_pic=$imageName;
            }
            if($request->discount_type=='fixed'){
                $product->sale_price=$request->price-$request->discount_amount;
            }elseif($request->discount_type=='percent'){
                $sale_pric=$request->price*($request->discount_amount/100);
                $product->sale_price=$request->price-$sale_pric;
            }else{
                $product->sale_price=00;
            }
            if($request->price){
            $product->price=$request->price;
            }
            $product->brand=$request->brand;
            $product->discount_type=$request->discount_type;
            $product->discount_amount=$request->discount_amount;
            $product->description=$request->description;
            $product->brand_details=$request->brand_details;
            $product->tags=$request->tags;
            if($request->cat_ids){
            $cat_ids=implode(',',$request->cat_ids);
            $product->cat_ids=$cat_ids;}
            $product->brief=$request->brief;
            $product->status=$request->status;
            $product->sort=$request->sort;
            if($request->feature_product){
            $product->feature_product=$request->feature_product;
            }else{
                $product->feature_product=0;
            }
            if($request->top_product){
            $product->top_product=$request->top_product;
            }else{
                $product->top_product=0;
            }
            $product->save();
            Session()->flash('message', 'Successfully Updated!');
            return redirect()->route("product");
    }
    public function removefeaturedproductpic($pid){
        $product = Product::find($pid);
        if (\File::exists(storage_path('app/product/'.$product->f_pic))) {
        unlink(storage_path('app/product/'.$product->f_pic));
        }
        $product->f_pic='';
        $product->save();
        return redirect()->route('admin.editproduct',['product_id'=>$pid]);
    }
    public function removesingleproductpic($pid,$picturename){
        $product = Product::find($pid);
        if (\File::exists(storage_path('app/product/'.$picturename))) {
        unlink(storage_path('app/product/'.$picturename));
        }
        $picsarr=explode(',',$product->pics);
        if(($key = array_search($picturename, $picsarr)) !== false) {
            unset($picsarr[$key]);
        }
        $product->pics=implode(',',$picsarr);
        $product->save();
        return redirect()->route('admin.editproduct',['product_id'=>$pid]);
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
