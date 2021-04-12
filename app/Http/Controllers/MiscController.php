<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MiscImage;
use Intervention\Image\Facades\Image as Image;

class MiscController extends Controller
{
    public function misc_images(){
       $images= MiscImage::orderBy('id','asc')->get();
        return view('admin.misc_images', compact('images'));
    }
    public function edit_image(Request $request)
    {
        $images= MiscImage::find($request->image_id);
        $input=[];
       if($file = $request->file('image')){
           if($images->image != ""){
            if(file_exists(public_path($images->image))) {
                unlink(public_path($images->image));
            }
           }
           $name_array=array_map('strrev', explode('.', strrev($file->getClientOriginalName())));   
           $name= time().'.'.$name_array[0];
           $file->move(public_path('images/assets'), $name);
           $input['image']='/images/assets/'.$name;
           $image=Image::make(public_path($input['image']))->resize(427, 427);
           $image->save(public_path('images/assets'.$name));
           $input['image']='/images/assets/'.$name; 
        }
        MiscImage::where('id',$request->image_id)->update($input);
        return redirect()->back()->with('message', 'Record Updated Successfully!!!');
    }
}
