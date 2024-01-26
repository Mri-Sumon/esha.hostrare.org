<?php

namespace App\Http\Controllers;

use App\Bkash;
use Illuminate\Http\Request;
use Validator;
use Session;
use Auth;

class BkashController extends Controller
{
    public function index()
    {
        $list=Bkash::orderBy('id','asc')->paginate(50);
        return view('backend.bkash.home')
            ->with('data', $list);
    }
    public function create()
    {
        // $parentMenus=Bkash::where('',0)->orderBy('sorts','asc')->get();
        return view('backend.bkash.create');
    }
    public function store(Request $request)
    {
        $rules = array(
            'number'       => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            Session::flash('message', 'Number Required');
            return redirect('bkashs/create')
                ->withErrors($validator);
        } else {
            $pages = new Bkash();
            $pages->number = $request->number;
            $pages->save();
            Session::flash('message', 'Successfully created!');
            return redirect('bkashs');
        }
    }
    public function edit($id)
    {
        $parentMenus=Bkash::where('id',$id)->get();
        // dd($parentMenus);
        $singleData = Bkash::find($id);
        // dd($singleData);
        return view('backend.bkash.edit')
            ->with('singleData', $singleData)
            ->with('parentMenus',$parentMenus);
    }
    public function update(Request $request, $id)
    {
        $rules = array(
            'number'       => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            Session::flash('message', 'Number Required');
            return back()
                ->withErrors($validator);
        } else {
            $pages = Bkash::find($id);
            $pages->number = $request->number;
            $pages->save();
            Session::flash('message', 'Successfully Updated!');
            return redirect('bkashs');
        }
    }
    public function destroy($id)
    {
        Bkash::find($id)->delete();
        return redirect('bkashs');
    }
}
