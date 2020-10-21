<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\About;
class AboutController extends Controller
{
    public function view(){
        $data['countAbout'] = About::count();
       
        $data['allData']= About::all();
         return view('backend.about.view-about',$data);
     }
 
     public function add(){
         return view('backend.about.add-about');
     }
 
     public function store(Request $request){
        
         $data = new About();
         $data->description = $request->description; 
         $data->created_by = Auth::user()->id;
         $data->save();
 
         return redirect()->route('abouts.view')->with('success','Data Insert Successfully');
     }
 
     public function edit($id){
         $editData= About::find($id);
         return view('backend.about.edit-about',compact('editData'));
     }
 
     public function update(Request $request,$id){
         $data =About::find($id);
         $data->description = $request->description; 
         
         $data->updated_by = Auth::user()->id;
       
        
         $data->save();
 
         return redirect()->route('abouts.view')->with('success','Data Will be Updated Successfully');
     }
 
     public function delet($id){
         $about = About::find($id);
         
         $about->delete();
         return redirect()->route('abouts.view')->with('success','Data Will be Deleted Successfully');
     }
}
