<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Validator;
use Session;
use Auth;
use Carbon\Carbon;

class PostController extends Controller
{
    public function index()
    {
        $list=Post::orderBy('id','asc')->paginate(50);
        return view('backend.posts.home')
            ->with('data', $list);
    }
    public function create()
    {
        // $parentMenus=Bkash::where('',0)->orderBy('sorts','asc')->get();
        return view('backend.posts.create');
    }
    public function store(Request $request)
    {
        
        $rules = array(
            // 'picture'       => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            Session::flash('message', 'Image Required');
            return redirect('posts/create')
                ->withErrors($validator);
        } else {
            
            $posts = new Post();            
            $posts->title=$request->title;
            $posts->subtitle=$request->subtitle;
            $posts->details=$request->details;
            if(isset($request->pageids) && $request->pageids!=''){
                $pageids=implode(',',$request->pageids);
                $posts->pageids=$pageids;
            }else{
                $posts->pageids='';
            }
            if(isset($request->catids) && $request->catids!=''){
                $catids=implode(',',$request->catids);
                $posts->catids=$catids;
            }else{
                $posts->catids='';
            }
            $posts->section=$request->section;
            $posts->links=$request->links;
            $posts->sorts=$request->sorts;
            $posts->creator=\Auth::user()->id;
            if($request->picture){
                $imageName=Carbon::now()->timestamp.'.'.$request->picture->extension();
                $urlym=Carbon::now()->year.'/'.Carbon::now()->month.'/';
                $request->picture->storeAs('/posts/'.$urlym,$imageName);
                $posts->picture=$urlym.$imageName;
            }
            $posts->save();
            if($posts->id){
                Post::where('id',$posts->id)->update(["slug"=>strtolower(str_replace(' ', '_',$request->title)).'-'.$posts->id]); 
            }
            Session::flash('message', 'Successfully created!');
            return redirect('posts/'.$posts->id.'/edit');
        }
    }
    public function edit($id)
    {
        $singleData = Post::find($id);
        return view('backend.posts.edit')
            ->with('singleData', $singleData);
    }
    public function update(Request $request, $id)
    {
        $rules = array(
            'picture'       => 'mimes:jpg,png,jpeg'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            Session::flash('message', 'Image Required');
            return back()
                ->withErrors($validator);
        } else {
            $posts = Post::find($id);
            $posts->title=$request->title;
            $posts->subtitle=$request->subtitle;
            $posts->details=$request->details;
            if(isset($request->pageids) && $request->pageids!=''){
                $pageids=implode(',',$request->pageids);
                $posts->pageids=$pageids;
            }else{
                $posts->pageids='';
            }
            if(isset($request->catids) && $request->catids!=''){
                $catids=implode(',',$request->catids);
                $posts->catids=$catids;
            }else{
                $posts->catids='';
            }
            $posts->section=$request->section;
            $posts->links=$request->links;
            $posts->sorts=$request->sorts;
            if($request->picture){
                $getfilename=Post::where('id',$id)->value('picture');
                if (\File::exists(storage_path('app/posts/'.$getfilename))) {
                unlink(storage_path('app/posts/'.$getfilename));
                }
                $imageName=Carbon::now()->timestamp.'.'.$request->picture->extension();
                $urlym=Carbon::now()->year.'/'.Carbon::now()->month.'/';
                $request->picture->storeAs('posts/'.$urlym,$imageName);
                $posts->picture=$urlym.$imageName;
            }
            $posts->save();
            if($posts->id){
                Post::where('id',$posts->id)->update(["slug"=>strtolower(str_replace(' ', '_',$request->title)).'-'.$posts->id]); 
            }
            Session::flash('message', 'Successfully Updated!');
            return redirect('posts');
        }
    }
    public function destroy($id)
    {
        // $getfilename=Post::where('id',$id)->value('picture');
        // if (\File::exists(storage_path('app/posts/'.$getfilename))) {
        // unlink(storage_path('app/posts/'.$getfilename));
        // }
        $getfilename=Post::where('id',$id)->first();
         if($getfilename->picture !=null){
             ulnink($getfilename->picture);
         }
        Post::find($id)->delete();
        Session::flash('message', 'Successfully deleted!');
        return redirect('posts');
    }
}
