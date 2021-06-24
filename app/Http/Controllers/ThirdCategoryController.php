<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\ThirdCategory;
use Yajra\Datatables\Datatables;
use Intervention\Image\Facades\Image as Image;

class ThirdCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function third_category()
    {
        $categories = SubCategory::all();
        $records = ThirdCategory::with('parent_category')->get();
        return view('admin.third_category', compact('records', 'categories'));
    }
    public function add_third_category(Request $request)
    {
        // return $request;
        $sub_category = SubCategory::has('products')->find($request->parent_category_id);
        if ($sub_category) {
            return redirect()->back()->withErrors('Parent category (' . $sub_category->name . ') has products, please delete the products to add a third category');
        }
        $validated = $request->validate([
            'slug' => 'required|unique:third_categories,slug',

        ]);
        $input = $request->all();
        if ($file = $request->file('sub_category_image')) {
            $name_array = array_map('strrev', explode('.', strrev($file->getClientOriginalName())));
            $name = time() . '.' . $name_array[0];
            $file->move(public_path('images/assets/'), $name);
            $input['image'] = '/images/assets/' . $name;
            $image = Image::make(public_path($input['image']))->resize(540, 300);
            $image->save(public_path('images/assets/compressed_' . $name));
            $input['compressed_image'] = '/images/assets/compressed_' . $name;
        }
        ThirdCategory::create($input);
        return redirect()->back()->with('message', 'Record Added successfully!!!');
    }
    public function edit_third_category(Request $request)
    {
        $cat = ThirdCategory::find($request->id);

        $validated = $request->validate([
            'slug' => 'required|unique:third_categories,slug,' . $cat->id,

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
            $file->move(public_path('imagesassets//'), $name);
            $input['image'] = '/images/assets/' . $name;
            $image = Image::make(public_path($input['image']))->resize(540, 300);
            $image->save(public_path('images/assets/compressed_' . $name));
            $input['compressed_image'] = '/images/assets/compressed_' . $name;
        }
        $input['name'] = $request->name;
        $input['slug'] = $request->slug;
        $input['parent_category_id'] = $request->category_id;
        // return $input;
        ThirdCategory::where('id', $request->id)->update($input);
        return redirect()->back();
    }
    public function delete_third_category($id)
    {
        $cat = ThirdCategory::find($id);
        if (count($cat->products) > 0) {
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
    public function get_third_category(Request $request)
    {
        return ThirdCategory::where('parent_category_id', $request->parent_id)->get();
    }
}
