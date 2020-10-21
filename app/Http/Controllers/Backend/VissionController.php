<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Vission;
class VissionController extends Controller
{
    public function view(){
        $data['countVission'] = Vission::count();
        $data['allData']= Vission::all();
         return view('backend.vission.view-vission',$data);
     }
 
     public function add(){
         return view('backend.vission.add-vission');
     }
 
     public function store(Request $request){
        
         $data = new Vission();
         $data->title = $request->title;
        
         $data->created_by = Auth::user()->id;
         if ($request->file('image')){
            $file = $request->file('image');
           
            $filename =date('YmdHi').$file->getClientoriginalName();
            $file->move(public_path('upload/vission_images/'),$filename);
            $data['image']=$filename;
        }
         
         $data->save();
 
         return redirect()->route('vissions.view')->with('success','Data Insert Successfully');
     }
 
     public function edit($id){
         $editData= Vission::find($id);
         return view('backend.vission.edit-vission',compact('editData'));
     }
 
     public function update(Request $request,$id){
         $data =Vission::find($id);
         $data->title = $request->title;
         $data->updated_by = Auth::user()->id;
        if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/vission_images/'.$data->image));
            $filename =date('YmdHi').$file->getClientoriginalName();
            $file->move(public_path('upload/vission_images/'),$filename);
            $data['image']=$filename;
        }
        
         $data->save();
 
         return redirect()->route('vissions.view')->with('success','Data Will be Updated Successfully');
     }
 
     public function delet($id){
         $vission = Vission::find($id);
         if (file_exists('public/upload/vission_images/' . $vission->image) AND ! empty($vission->image)){
             
             unlink('public/upload/vission_images/' . $vission->image);
         };
         $vission->delete();
         return redirect()->route('vissions.view')->with('success','Data Will be Deleted Successfully');
     }
}
