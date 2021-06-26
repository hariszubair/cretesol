<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Yajra\Datatables\Datatables;
use Intervention\Image\Facades\Image as Image;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function category()
    {

        $records = Category::all();
        return view('admin.category', compact('records'));
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
        $validated = $request->validate([
            'slug' => 'required|unique:categories,slug',
            'name' => 'required|unique:categories,name',

        ]);
        $input = $request->all();
        if ($file = $request->file('category_image')) {
            $name_array = array_map('strrev', explode('.', strrev($file->getClientOriginalName())));
            $name = time() . '.' . $name_array[0];
            $file->move(public_path('images/assets'), $name);
            $input['image'] = '/images/assets/' . $name;
            $image = Image::make(public_path($input['image']))->resize(540, 300);
            $image->save(public_path('images/assets/compressed_' . $name));
            $input['compressed_image'] = '/images/assets/compressed_' . $name;
        }
        Category::create($input);
        return redirect()->back()->with('message', 'Record Added successfully!!!');
    }
    public function edit_category(Request $request)
    {
        $cat = Category::find($request->id);
        $validated = $request->validate([
            'slug' => 'required|unique:categories,slug,' . $cat->id,
            'name' => 'required|unique:categories,name,' . $cat->id,

        ]);
        $input = [];
        if ($file = $request->file('category_image')) {
            if (file_exists(public_path($cat->image))) {
                unlink(public_path($cat->image));
            }
            if (file_exists(public_path($cat->compressed_image))) {
                unlink(public_path($cat->compressed_image));
            }
            $name_array = array_map('strrev', explode('.', strrev($file->getClientOriginalName())));
            $name = time() . '.' . $name_array[0];
            $file->move(public_path('images/assets'), $name);
            $input['image'] = '/images/assets/' . $name;
            $image = Image::make(public_path($input['image']))->resize(540, 300);
            $image->save(public_path('images/assets/compressed_' . $name));
            $input['compressed_image'] = '/images/assets/compressed_' . $name;
        }
        $input['name'] = $request->name;
        $input['slug'] = $request->slug;
        Category::where('id', $request->id)->update($input);
        return redirect()->back();
    }
    public function delete_category($id)
    {
        $cat = Category::with('sub_category', 'products')->find($id);
        if (count($cat->sub_category) > 0 ||  count($cat->products) > 0) {
            return redirect()->back()->withErrors(['This category can\'t be deleted, because it contains Sub Category or products']);
        }
        if (file_exists(public_path($cat->image))) {
            unlink(public_path($cat->image));
        }
        if (file_exists(public_path($cat->compressed_image))) {
            unlink(public_path($cat->compressed_image));
        }
        $cat->delete();
        return redirect()->back()->with('message', 'Record deleted successfully!!!');
    }
}
