<?php

namespace App\Http\Controllers;

use App\Pages;
use Illuminate\Http\Request;
use Validator;
use Session;
use Auth;

class PagesController extends Controller
{
    public function index()
    {
        $list=Pages::orderBy('sorts','asc')->paginate(50);
        return view('backend.pages.home')
            ->with('data', $list);
    }
    public function create()
    {
        $parentMenus=Pages::where('parent_page',0)->orderBy('sorts','asc')->get();
        return view('backend.pages.create')
            ->with('parentMenus',$parentMenus);
    }
    public function store(Request $request)
    {
        $rules = array(
            'name'       => 'required',
            'title'       => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            Session::flash('message', 'Name and Title Required');
            return redirect('pages/create')
                ->withErrors($validator);
        } else {
            $pages = new Pages();
            $pages->name = $request->name;
            $pages->slug = strtolower(str_replace(' ', '_',$request->name));
            $pages->title = $request->title;
            $pages->parent_page = $request->parent_page;
            $pages->details = $request->details;
            $pages->sorts = $request->sorts;
            $pages->links = $request->links;
            $pages->creator = Auth::user()->id;
            $pages->save();
            Session::flash('message', 'Successfully created!');
            return redirect('pages');
        }
    }
    public function edit($id)
    {
        $parentMenus=Pages::where('parent_page',0)->orderBy('name','asc')->get();
        $singleData = Pages::find($id);
        return view('backend.pages.edit')
            ->with('singleData', $singleData)
            ->with('parentMenus',$parentMenus);
    }
    public function update(Request $request, $id)
    {
        $rules = array(
            'name'       => 'required',
            'title'       => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            Session::flash('message', 'Name and Title Required');
            return redirect('pages')
                ->withErrors($validator);
        } else {
            $pages = Pages::find($id);
            $pages->name = $request->name;
            $pages->title = $request->title;
            $pages->parent_page = $request->parent_page;
            $pages->details = $request->details;
            $pages->sorts = $request->sorts;
            $pages->links = $request->links;
            $pages->save();
            Session::flash('message', 'Successfully Updated!');
            return redirect('pages');
        }
    }
    public function destroy($id)
    {
        Pages::find($id)->delete();
        return redirect('pages');
    }
}
