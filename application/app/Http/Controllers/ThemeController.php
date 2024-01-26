<?php

namespace App\Http\Controllers;

use App\Theme;
use Illuminate\Http\Request;
use Validator;
use Session;
use Auth;
use Carbon\Carbon;
use File;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class ThemeController extends Controller
{
    public function index()
    {
        $list=Theme::orderBy('id','asc')->paginate(50);
        return view('backend.theme.home')
            ->with('data', $list);
    }
    public function create()
    {
        // $parentMenus=Bkash::where('',0)->orderBy('sorts','asc')->get();
        return view('backend.theme.create');
    }
    public function store(Request $request)
    {
        
        $rules = array(
            'name'       => 'required',
            'thumbs' => 'required|mimes:jpg,png,jpeg',
            'themefile' => 'required|mimes:zip',
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            Session::flash('message', 'Thumb Required');
            return redirect('themes/create')
                ->withErrors($validator);
        } else {
                if($request->themefile){
                    $themedirname=strtolower(str_replace(' ', '_',$request->name));
                    $themeDirectoryPath = resource_path('views/themes/'.$themedirname);
                    $filesystem = new Filesystem;

                    if ($filesystem->isDirectory($themeDirectoryPath)) {
                        return redirect()->back()->with('error', 'A theme directory already exists.');
                    }

                    
                    $themeName=Carbon::now()->timestamp.'.'.$request->themefile->extension();
                    $tempFilePath = $request->themefile->storeAs('temp', $themeName);

                    // Extract the zip file
                    $zip = new ZipArchive;
                    $zipFilePath = storage_path('app/' . $tempFilePath);

                    if ($zip->open($zipFilePath) === true) {
                        $zip->extractTo(resource_path('views/themes/'.$themedirname)); // Extract to the 'views' directory
                        $zip->close();
                    } else {
                        return redirect()->back()->with('error', 'Failed to extract the theme.zip file.');
                    }

                    // Delete the temporary zip file
                    Storage::delete($tempFilePath);

                    
                }
            $themes = new Theme();            
            $themes->name=$request->name;
            $themes->isdefault='inactive';
            $themes->details=$request->details;
            if($request->thumbs){
                $imageName=Carbon::now()->timestamp.'.'.$request->thumbs->extension();
                $request->thumbs->storeAs('/themes/',$imageName);
                $themes->thumbs=$imageName;
            }
            $themes->save();
            if($themes->id){
                Theme::where('id',$themes->id)->update(["slug"=>strtolower(str_replace(' ', '_',$request->name))]); 
            }
            Session::flash('message', 'Successfully created!');
            return redirect('themes');
        }
    }
    public function edit($id)
    {
        // $singleData = Theme::find($id);
        // return view('backend.theme.edit')
        //     ->with('singleData', $singleData);
        return redirect('themes');
    }
    public function update(Request $request, $id)
    {
        return redirect('themes');
        // $rules = array(
        //     'picture'       => 'mimes:jpg,png,jpeg'
        // );
        // $validator = Validator::make($request->all(), $rules);
        // if ($validator->fails()) {
        //     Session::flash('message', 'Image Required');
        //     return back()
        //         ->withErrors($validator);
        // } else {
        //     $themes = Theme::find($id);
        //     $themes->title=$request->title;
        //     $themes->subtitle=$request->subtitle;
        //     $themes->details=$request->details;
        //     if(isset($request->pageids) && $request->pageids!=''){
        //         $pageids=implode(',',$request->pageids);
        //         $themes->pageids=$pageids;
        //     }else{
        //         $themes->pageids='';
        //     }
        //     if(isset($request->catids) && $request->catids!=''){
        //         $catids=implode(',',$request->catids);
        //         $themes->catids=$catids;
        //     }else{
        //         $themes->catids='';
        //     }
        //     $themes->section=$request->section;
        //     $themes->links=$request->links;
        //     $themes->sorts=$request->sorts;
        //     if($request->picture){
        //         $getfilename=Theme::where('id',$id)->value('picture');
        //         if (\File::exists(storage_path('app/theme/'.$getfilename))) {
        //         unlink(storage_path('app/theme/'.$getfilename));
        //         }
        //         $imageName=Carbon::now()->timestamp.'.'.$request->picture->extension();
        //         $urlym=Carbon::now()->year.'/'.Carbon::now()->month.'/';
        //         $request->picture->storeAs('theme/'.$urlym,$imageName);
        //         $themes->picture=$urlym.$imageName;
        //     }
        //     $themes->save();
        //     if($themes->id){
        //         Theme::where('id',$themes->id)->update(["slug"=>strtolower(str_replace(' ', '_',$request->title)).'-'.$themes->id]); 
        //     }
        //     Session::flash('message', 'Successfully Updated!');
        //     return redirect('themes');
        // }
    }
    public function destroy($id)
    {
        $getfilename=Theme::where('id',$id)->value('thumbs');
        if (\File::exists(storage_path('app/themes/'.$getfilename))) {
        unlink(storage_path('app/themes/'.$getfilename));
        }
         $getfileslug=Theme::where('id',$id)->value('slug');
        // $directoryPath = resource_path('views/themes/'.$getfileslug);
        // if (Storage::exists($directoryPath)) {
        //     // Use Laravel's Storage facade to delete the directory
        //     Storage::deleteDirectory($directoryPath);
        // }

        $directoryPath = resource_path('views/themes/'.$getfileslug);
        $filesystem = new Filesystem;

        if ($filesystem->isDirectory($directoryPath)) {
            // Use standard PHP functions to delete the directory and its contents
            $filesystem->deleteDirectory($directoryPath);
        }
        Theme::find($id)->delete();
        Session::flash('message', 'Successfully deleted!');
        return redirect('themes');
    }
    public function theme_activate($themeid){
        \DB::table('themes')->update(["isdefault"=>'inactive']);
        \DB::table('themes')->where('id',$themeid)->update(["isdefault"=>'active']);
        Session::flash('message', 'Successfully Activated!');
        return redirect('themes');
    }
    public function theme_inactivate($themeid){
        \DB::table('themes')->where('id',$themeid)->update(["isdefault"=>'inactive']);
        Session::flash('message', 'Successfully Inactive!');
        return redirect('themes');
    }
}
