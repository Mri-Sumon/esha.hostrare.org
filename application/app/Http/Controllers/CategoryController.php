<?php

namespace App\Http\Controllers;

use App\Cat;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Session;
use App\Mail\FeedbackMail;
use Mail;
use Carbon\Carbon;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Cat::all();
        return view('backend.cats.categories',['category'=>$category]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('backend.cats.addcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveCategory(Request $request)
    {
        $rules = array(
            'name'       => 'required',
            'parent'       => 'required',
            'status'       => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('addcategory')
                ->withInput($request->input())
                ->withErrors($validator);
        } else {
            $category = new Cat;
            $category->faicon=$request->faicon;
            $category->name=$request->name;
            $category->parent=$request->parent;
            $category->status=$request->status;
            if($request->image){
            $imageName=Carbon::now()->timestamp.'.'.$request->image->extension();
            $request->image->storeAs('/product/',$imageName);
            $category->image=$imageName;
            }
            $category->sort=$request->sort;
            $category->description=$request->description;
            $category->save();
            }
            Session::flash('message', 'Successfully Saved!');
            return redirect()->route("admin.addcategory");
    }

    public function delete($cat_id){
        $category=Cat::find($cat_id);
        if($category){
            $category->delete();
            Session()->flash('delete_message','Category has been deleted successfully!');
            return redirect()->route('category');
        }else{
            Session()->flash('delete_message','There is a problem category deletion!!');
            return redirect()->route('category');
        }
    }

    public function edit($cat_id){
        $singleData=Cat::where('id',$cat_id)->first();
        return view('backend.cats.editcategory')->with('singleData',$singleData);

    }
    public function updateCategory(Request $request,$cat_id){
        $rules = array(
            'name'       => 'required',
            'parent'       => 'required',
            'status'       => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
            ->withInput($request->input())
                ->withErrors($validator);
        } else {
            $category = Cat::where('id',$cat_id)->first();
            $category->faicon=$request->faicon;
            $category->name=$request->name;
            $category->parent=$request->parent;
            $category->status=$request->status;
            if($request->image){
            $imageName=Carbon::now()->timestamp.'.'.$request->image->extension();
            $request->image->storeAs('/product/',$imageName);
            $category->image=$imageName;
            }
            $category->sort=$request->sort;
            $category->description=$request->description;
            $category->save();
            }
            Session::flash('message', 'Category Updated Successfully!');
            return redirect()->route("category");
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
    // public function edit($id)
    // {
    //     //
    // }

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
