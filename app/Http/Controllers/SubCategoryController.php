<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use Yajra\Datatables\Datatables;
class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   public function sub_category()
    {
    	$categories=Category::all();
    	$records=SubCategory::with('parent_category')->get();
        return view('admin.sub_category',compact('records','categories'));
    }
    public function add_sub_category(Request $request)
    {
    	     $input=$request->all();
       if($file = $request->file('sub_category_image')){
            $name_array=array_map('strrev', explode('.', strrev($file->getClientOriginalName())));   
            $name= time().'.'.$name_array[0];
            $file->move(public_path('images\\assets\\'), $name);
            $input['image']='/images/assets/'.$name;
        }
        SubCategory::create($input);
        return redirect()->back();
    }
    public function edit_sub_category(Request $request)
    {
    	$cat= Category::find($request->category_id);
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
        $input['category_id']=$request->category_id;
        // return $input;
        SubCategory::where('id',$request->id)->update($input);
        return redirect()->back();
    }
     public function delete_sub_category($id){
    		$cat=SubCategory::find($id);
    		if(file_exists(public_path($cat->image))) {
            unlink(public_path($cat->image));
        	}
    		$cat->delete();
    		return redirect()->back();
    }	
    public function get_sub_category(Request $request){
        return SubCategory::where('category_id',$request->parent_id)->get();
    }
}
