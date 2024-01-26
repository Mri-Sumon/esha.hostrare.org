<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Pages;
use App\Post;
use App\Settings;
use App\Medias;
use App\Product;
use App\Cat;
use App\Order;
use App\Slider;

class MainController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    
    
    public function home()
    {
        $settings=Settings::where('id',1)->first();
        $products=Product::orderBy('id','desc')->paginate(21);
        $hot_product_1=Product::orderBy('id','desc')->take(12)->get();
        $hot_product_2=Product::orderBy('id','asc')->take(12)->get();
        $category=Cat::where('parent',0)->where('status','active')->get();
        $slider=Slider::all();
        return view('frontend.home')
        ->with('settings', $settings)
        ->with('slider',$slider)
        ->with('products', $products)
        ->with('category',$category)
        ->with('hot_product_1', $hot_product_1)
        ->with('hot_product_2', $hot_product_2);
    }
    
    
    public function subpage($slug=NULL){
        
        if($slug==''){
            return redirect('/');
        }
        
        $settings=Settings::where('id',1)->first();
        $pageContent=Pages::where('slug',$slug)->first();
        
        if($slug=='services'){
            $pics=Medias::where('link_id','services')->orderBy('sort','asc')->get();
        }elseif($slug=='gallery'){
           $pics=Medias::where('link_id','!=','na')->where('link_id','!=','services')->where('link_id','!=','slider')->where('link_id','!=','certificate')->orderBy('id','desc')->get(); 
        }else{
            $pics=[];
        }
        
        //echo count($pics);exit();
        return view('frontend.subpage')->with('pageContent', $pageContent)->with('settings', $settings)->with('pics', $pics);
    }
    
    
    public function post($slug=NULL){
        
        if($slug==''){
            $settings=Settings::where('id',1)->first();
            $blogposts=Post::orderBy('created_at','desc')->paginate(20); 
            return view('frontend.blog')->with('blogposts', $blogposts)->with('settings', $settings);
        }else{
            $settings=Settings::where('id',1)->first();
            $postContent=Post::where('slug',$slug)->first();        
            //echo count($pics);exit();
            return view('frontend.post')->with('postContent', $postContent)->with('settings', $settings);
        }
    }
    
    
    public function catpost($catid=NULL){
        
        if($catid==''){
            return redirect('blog');
        }else{
            $settings=Settings::where('id',1)->first();
            $blogposts=Post::whereRaw("find_in_set($catid,catids)")->orderBy('created_at','desc')->paginate(20);         
            //echo count($pics);exit();
            return view('frontend.blog')->with('blogposts', $blogposts)->with('settings', $settings);
        }
    }
    
    public function subgallery($album=NULL){
        if($album==''){
            return redirect('/');
        }
        $settings=Settings::where('id',1)->first();
        //$pageContent=Pages::where('slug',$slug)->first();
        $pics=Medias::where('link_id',$album)->orderBy('sort','asc')->get();
        return view('frontend.album')->with('settings', $settings)->with('pics', $pics);
    }
    
    public function action_search(Request $request){
        $catid=$request->cat_idss;
        $search=$request->cat_search;
        if($catid=='0'){
            $product=Product::where('name','LIKE',"%$search%")->paginate(21);
        }else{
        $product=Product::where('cat_ids',$catid)->where('name','LIKE',"%$search%")->paginate(21);
        }
        return view('frontend.shop')->with('products',$product);
    }
    public function track_order(){
        return view('frontend.track_order');
    }
    public function trackorder(Request $request){
        $orderId=$request->order_id;
        $phone=$request->phone;
        $order=Order::where('mobile',$phone)->get();
        // return redirect()->route('trackorderdetails')->with('orders',$order);
        //dd($order);
        if($order){
            return view('frontend.track_order_details')->with('orders',$order);
        }else{
            session()->flash('not_found_message',"Your Enter Order Not Found");
            return redirect()->route('track_order');
        }
    }
    public function trackorderdetails(){
        $orders=Order::all();
        return view('frontend.track_order_details')->with('orders',$orders);
    }
}
