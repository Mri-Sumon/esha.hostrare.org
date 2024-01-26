<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;
use Validator;
use Session;
use Auth;
use Carbon\Carbon;

class SectionController extends Controller
{
    public function index()
    {
        $list=Section::orderBy('id','asc')->paginate(50);
        return view('sections.home')
            ->with('data', $list);
    }
    public function create()
    {
        return view('sections.create');
    }
    public function store(Request $request)
    {
        
        $rules = array(
            'name'       => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            Session::flash('message', 'Name Required');
            return redirect('medias')
                ->withErrors($validator);
        } else {
            
            $sections = new Section();            
            $sections->name=$request->name;
            $sections->save();
            if($sections->id){
                Section::where('id',$sections->id)->update(["slug"=>strtolower(str_replace(' ', '_',$request->name))]); 
            }
            Session::flash('message', 'Successfully created!');
            return redirect('medias');
        }
    }
    public function edit($id)
    {
        // dd($parentMenus);
        $singleData = Section::find($id);
        // dd($singleData);
        return view('sections.edit')
            ->with('singleData', $singleData)
            ->with('parentMenus',$parentMenus);
    }
    public function update(Request $request, $id)
    {
        $rules = array(
            'name'       => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            Session::flash('message', 'Name Required');
            return back()
                ->withErrors($validator);
        } else {
            $sections = Section::find($id);
            $sections->name=$request->name;
            $sections->save();
            if($sections->id){
                Section::where('id',$sections->id)->update(["slug"=>strtolower(str_replace(' ', '_',$request->name))]); 
            }
            Session::flash('message', 'Successfully Updated!');
            return redirect('sections');
        }
    }
    public function destroy($id)
    {        
        Section::find($id)->delete();
        Session::flash('message', 'Successfully deleted!');
        return redirect('medias');
    }
}
