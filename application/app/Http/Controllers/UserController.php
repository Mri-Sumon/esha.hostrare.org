<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Validator;
use Session;

class UserController extends Controller
{
    public function index()
    {
        if(\Auth::user()->id!=1){
            $permissioarr=explode(',',\Auth::user()->permissions);
            if(in_array('customers',$permissioarr)===true && in_array('users',$permissioarr)===false){
                $list=User::where('id','!=',1)->where('utype','USR')->orderBy('id','desc')->paginate(50);
            }else{
                $list=User::where('id','!=',1)->orderBy('id','desc')->paginate(50);
            }            
        }else{
            $list=User::orderBy('id','desc')->paginate(50);  
        }
        return view('backend.users.home')
            ->with('data', $list);
    }
    public function create()
    {
        return view('backend.users.create');
    }
    public function store(Request $request)
    {
        $rules = array(
            'name'       => 'required',
            'email'       => 'required',
            'password'       => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            Session::flash('message', 'Name, Email and Password Required');
            return redirect('users/create')
                ->withErrors($validator);
        } else {
            $users = new User();
            $users->name = $request->name;
            $users->email = $request->email;
            $users->phone = $request->phone;
            $users->utype=$request->utype;
            if($request->permissions){
                $users->permissions=implode(',',$request->permissions);
            }
            if($request->password){
                $users->password = bcrypt($request->password);
            }
            $users->save();
            Session::flash('message', 'Successfully created!');
            return redirect('users');
        }
    }
    public function edit($id)
    {
        $singleData = User::find($id);
        return view('backend.users.edit')
            ->with('singleData', $singleData);
    }
    public function update(Request $request, $id)
    {
        $rules = array(
            'name'       => 'required',
            'email'       => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            Session::flash('message', 'Name and Email Required');
            return redirect('users')
                ->withErrors($validator);
        } else {
            $users = User::find($id);
            $users->name = $request->name;
            $users->email = $request->email;
            $users->phone = $request->phone;
            $users->utype=$request->utype;
            if($request->permissions){
                $users->permissions=implode(',',$request->permissions);
            }
            if($request->password){
            $users->password = bcrypt($request->password);
            }
            $users->save();
            Session::flash('message', 'Successfully Updated!');
            return redirect('users');
        }
    }
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('users');
    }
}
