<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use Yajra\Datatables\Datatables;
use Intervention\Image\Facades\Image as Image;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function sub_category()
    {
        $categories = Category::all();
        $records = SubCategory::with('parent_category')->get();
        return view('admin.sub_category', compact('records', 'categories'));
    }
    public function add_sub_category(Request $request)
    {
        $main_category = Category::has('products')->find($request->category_id);
        if ($main_category) {
            return redirect()->back()->withErrors('Main category (' . $main_category->name . ') has products, please delete the products to add a sub category');
        }
        $validated = $request->validate([
            'slug' => 'required|unique:sub_categories,slug',

        ]);
        $input = $request->all();
        if ($file = $request->file('sub_category_image')) {
            $name_array = array_map('strrev', explode('.', strrev($file->getClientOriginalName())));
            $name = time() . '.' . $name_array[0];
            $file->move(public_path('images/assets'), $name);
            $input['image'] = '/images/assets/' . $name;
            $image = Image::make(public_path($input['image']))->resize(540, 300);
            $image->save(public_path('images/assets/compressed_' . $name));
            $input['compressed_image'] = '/images/assets/' . $name;
        }
        SubCategory::create($input);
        return redirect()->back()->with('message', 'Record Added successfully!!!');
    }
    public function edit_sub_category(Request $request)
    {
        // return $request;
        $cat = SubCategory::find($request->id);
        $main_category = Category::has('products')->find($request->category_id);
        if ($main_category) {
            return redirect()->back()->withErrors('Main category (' . $main_category->name . ') has products, please delete the products to add a sub category');
        }
        $validated = $request->validate([
            'slug' => 'required|unique:sub_categories,slug,' . $cat->id,
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
            $input['compressed_image'] = '/images/assets/' . $name;
        }
        $input['name'] = $request->name;
        $input['slug'] = $request->slug;
        $input['category_id'] = $request->category_id;
        // return $input;
        SubCategory::where('id', $request->id)->update($input);
        return redirect()->back();
    }
    public function delete_sub_category($id)
    {
        $cat = SubCategory::find($id);
        if (count($cat->third_category) > 0 ||  count($cat->products) > 0) {
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
    public function get_sub_category(Request $request)
    {
        return SubCategory::where('category_id', $request->parent_id)->get();
    }
}
