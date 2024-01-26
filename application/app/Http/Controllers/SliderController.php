<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Validator;
use Session;
use Auth;
use Carbon\Carbon;

class SliderController extends Controller
{
    public function index()
    {
        $list=Slider::orderBy('id','asc')->paginate(50);
        return view('backend.slider.home')
            ->with('data', $list);
    }
    public function create()
    {
        // $parentMenus=Bkash::where('',0)->orderBy('sorts','asc')->get();
        return view('backend.slider.create');
    }
    public function store(Request $request)
    {
        
        $rules = array(
            'img'       => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            Session::flash('message', 'Image Required');
            return redirect('slider/create')
                ->withErrors($validator);
        } else {
            
            $pages = new Slider();
            $imageName=Carbon::now()->timestamp.'.'.$request->img->extension();
            $request->img->storeAs('/product/',$imageName);
            $pages->img=$imageName;
            $pages->alt=$request->alt;
            $pages->save();
            Session::flash('message', 'Successfully created!');
            return redirect('slider');
        }
    }
    public function edit($id)
    {
        $parentMenus=Slider::where('id',$id)->get();
        // dd($parentMenus);
        $singleData = Slider::find($id);
        // dd($singleData);
        return view('backend.slider.edit')
            ->with('singleData', $singleData)
            ->with('parentMenus',$parentMenus);
    }
    public function update(Request $request, $id)
    {
        $rules = array(
            'nimg'       => 'mimes:jpg,png,jpeg'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            Session::flash('message', 'Image Required');
            return back()
                ->withErrors($validator);
        } else {
            $pages = Slider::find($id);
            if($request->nimg){
            $imageName=Carbon::now()->timestamp.'.'.$request->nimg->extension();
            $request->nimg->storeAs('/product/',$imageName);
            $pages->img=$imageName;}
            $pages->alt=$request->alt;
            $pages->save();
            Session::flash('message', 'Successfully Updated!');
            return redirect('slider');
        }
    }
    public function destroy($id)
    {
        Slider::find($id)->delete();
        return redirect('slider');
    }
}
