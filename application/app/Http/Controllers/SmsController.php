<?php

namespace App\Http\Controllers;

use App\Sms;
use Illuminate\Http\Request;
use Validator;
use Session;
use Auth;

class SmsController extends Controller
{
    public function index()
    {
        $list=Sms::orderBy('id','desc')->paginate(50);
        return view('sms.home')
            ->with('data', $list);
    }
    public function create()
    {
        return view('sms.create');
    }
    public function store(Request $request)
    {
        $rules = array(
            'sms_to'       => 'required',
            'text'       => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            Session::flash('message', 'Name, Email and Password Required');
            return redirect('sms/create')
                ->withErrors($validator);
        } else {
            $sms = new Sms();
            $sms->sms_from = Auth::user()->id;
            $sms->sms_to = '+1'.$request->sms_to;
            $sms->text = $request->text;
            $sms->creator = Auth::user()->id;
            $sms->save();
            Session::flash('message', 'Successfully Queued!');
            return redirect('sms');
        }
    }
    public function edit($id)
    {
//        $singleData = Sms::find($id);
//        return view('sms.edit')
//            ->with('singleData', $singleData);
    }
    public function update(Request $request, $id)
    {
//        $rules = array(
//            'name'       => 'required',
//            'email'       => 'required'
//        );
//        $validator = Validator::make($request->all(), $rules);
//        if ($validator->fails()) {
//            Session::flash('message', 'Name and Email Required');
//            return redirect('sms')
//                ->withErrors($validator);
//        } else {
//            $sms = Sms::find($id);
//            $sms->name = $request->name;
//            $sms->email = $request->email;
//            $sms->phone = $request->phone;
//            if($request->password){
//                $sms->password = bcrypt($request->password);
//            }
//            $sms->save();
//            Session::flash('message', 'Successfully Updated!');
//            return redirect('sms');
//        }
    }
    public function destroy($id)
    {
        Sms::find($id)->delete();
        return redirect('sms');
    }
}
