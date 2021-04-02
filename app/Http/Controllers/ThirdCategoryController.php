<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\ThirdCategory;
use Yajra\Datatables\Datatables;
class ThirdCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   public function third_category()
    {
    	$categories=SubCategory::all();
    	$records=ThirdCategory::with('parent_category')->get();
        return view('admin.third_category',compact('records','categories'));
    }
    public function add_third_category(Request $request)
    {
    	     $input=$request->all();
       if($file = $request->file('sub_category_image')){
            $name_array=array_map('strrev', explode('.', strrev($file->getClientOriginalName())));   
            $name= time().'.'.$name_array[0];
            $file->move(public_path('images\\assets\\'), $name);
            $input['image']='/images/assets/'.$name;
        }
        ThirdCategory::create($input);
        return redirect()->back();
    }
    public function edit_third_category(Request $request)
    {
    	 $cat= SubCategory::find($request->category_id);
    	$input=[];
       if($file = $request->file('category_image')){
       		if(file_exists(public_path($cat->image))) {
            unlink(public_path($cat->image));
        }
            $name_array=array_map('strrev', explode('.', strrev($file->getClientOriginalName())));   
            $name= time().'.'.$name_array[0];
            $file->move(public_path('images\\assets\\'), $name);
            $input['image']='/images/assets/'.$name;
        }
        $input['name']=$request->name;
        $input['parent_category_id']=$request->category_id;
        // return $input;
        ThirdCategory::where('id',$request->id)->update($input);
        return redirect()->back();
    }
     public function delete_third_category($id){
            return $id;
    		$cat=ThirdCategory::find($id);
    		if(file_exists(public_path($cat->image))) {
            unlink(public_path($cat->image));
        	}
    		$cat->delete();
    		return redirect()->back();
    }	
    public function get_third_category(Request $request){
        return ThirdCategory::where('parent_category_id',$request->parent_id)->get();
    }
}
