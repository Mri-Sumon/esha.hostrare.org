<?php

namespace App\Http\Controllers;

use App\Medias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Validator;
use Session;

class MediasController extends Controller
{
    public function index(Request $request)
    {
        if($request->searchkey){
          $list=Medias::where('name', 'like','%'.$request->searchkey.'%')->orderBy('id','desc')->paginate(50);  
        }else{
        $list=Medias::orderBy('id','desc')->paginate(50);
        }
        return view('backend.medias.home')
            ->with('data', $list);
    }
    public function cat($cat=NULL){
        $list=Medias::where('link_id',$cat)->orderBy('id','desc')->paginate(50);
        return view('backend.medias.home')
            ->with('data', $list);
    }
    public function create()
    {
        return view('backend.medias.create');
    }
    public function store(Request $request)
    {
        $rules = array(
            'name'       => 'required',
            'picture' => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('medias/create')
                ->withErrors($validator);
        } else {
            $filename = $request->picture->store('/medias');
            $medias = new Medias();
            $medias->name=$request->name;
            $medias->sec_title=$request->sec_title;
            $medias->link_id=$request->link_id;
            $medias->source=$filename;
            $medias->link=$request->link;
            $medias->sort=$request->sort;
            $medias->save();
            }
            Session::flash('message', 'Successfully Uploaded!');
            return redirect('medias');
    }
    // public function edit($id)
    // {
    //     $parentMenus=Pages::where('parent_page',0)->orderBy('name','asc')->get();
    //     $singleData = Pages::find($id);
    //     return view('pages.edit')
    //         ->with('singleData', $singleData)
    //         ->with('parentMenus',$parentMenus);
    // }
    // public function update(Request $request, $id)
    // {
    //     $rules = array(
    //         'name'       => 'required',
    //         'title'       => 'required'
    //     );
    //     $validator = Validator::make($request->all(), $rules);
    //     if ($validator->fails()) {
    //         Session::flash('message', 'Name and Title Required');
    //         return redirect('pages')
    //             ->withErrors($validator);
    //     } else {
    //         $pages = Pages::find($id);
    //         $pages->name = $request->name;
    //         $pages->title = $request->title;
    //         $pages->parent_page = $request->parent_page;
    //         $pages->details = $request->details;
    //         $pages->sorts = $request->sorts;
    //         $pages->links = $request->links;
    //         $pages->save();
    //         Session::flash('message', 'Successfully Updated!');
    //         return redirect('pages');
    //     }
    // }
    public function destroy($id)
    {
        $getfilename=Medias::where('id',$id)->value('source');
        if (\File::exists(storage_path('app/'.$getfilename))) {
        unlink(storage_path('app/'.$getfilename));
        }
        Medias::find($id)->delete();
        return redirect('medias');
    }



    public function media_image(){
        $media = Medias::orderBy('id','desc')->paginate(2);        
            if ($request->ajax()) {            
               return json_encode([
              'media'=>$media,
          ]);
            
        }
   }
   
   
   
   public function getMedia(Request $request){
       
      $RemoveMiddleWordAddComma =str_replace('&', ',', $request->medias_id);
        $removeAllString=str_replace('img_id=', '', $RemoveMiddleWordAddComma);
            $alldata = $removeAllString;
             $data=explode(",",$alldata);
             $value=[];
            foreach ($data as $dt){
                 $mainpart = Medias::where('id',$dt)->first();
                  array_push($value,$mainpart);
             }
            return response()->json([
               "data"=>$value,
            ]);
   }
   
   
   
   
   public function fileUploadPost(Request $request)
   {
         
       if ($request->hasFile('photo')) {
           $photo = $request->file('photo');
           $tempName= $photo->getClientOriginalName();
           $filename = $photo->storeAs('/medias',$tempName);
           $media  = new Medias();
           $media->source = $filename;
           $media->save();
              
       }
       //end user photo upload
       return ['success'=>true,'message'=>'Successfully updated'];
               
        
    }
}
