<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Yajra\Datatables\Datatables;
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   public function category()
    {
    	$records=Category::all();
        return view('admin.category',compact('records'));
    }
    // public function all_category(Request $request)
    // {
    // 	 $record=Category::select('*');
    // 	 return Datatables::of($record)->addColumn('link', function ($row) {
    // 	 	return '<img style="width:100px;height:100px;overflow: hidden; object-fit: cover;" src="'.URL($row->image).'">';
    // 	 })->addColumn('action', function ($row) {
    // 	 	return '<button class="btn btn-primary edit_category" name="'.$row->name.'" category_id="'.$row->id.'">Edit</button><a href="'.URL('admin/category_delete/'.$row->id).'" class="btn btn-danger">Delete</a>';
    // 	 })->escapeColumns([])->make(true);
    // }
    public function add_category(Request $request)
    {
    	     $input=$request->all();
       if($file = $request->file('category_image')){
            $name_array=array_map('strrev', explode('.', strrev($file->getClientOriginalName())));   
            $name= time().'.'.$name_array[0];
            $file->move(public_path('images\\assets\\'), $name);
            $input['image']='/images/assets/'.$name;
        }
        Category::create($input);
        return redirect()->back();
    }
     public function edit_category(Request $request)
    {
    	$cat= Category::find($request->id);
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
        Category::where('id',$request->id)->update($input);
        return redirect()->back();
    }	
    public function delete_category($id){
    		$cat=Category::find($id);
    		if(file_exists(public_path($cat->image))) {
            unlink(public_path($cat->image));
        	}
    		$cat->delete();
    		return redirect()->back();
    }
}
