<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductsImage;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ThirdCategory;
use Yajra\Datatables\Datatables;
use Intervention\Image\Facades\Image as Image;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function product()
    {
        $records = Product::orderBy('created_at', 'desc')->get();
        $categories = Category::get();
        return view('admin.product', compact('records', 'categories'));
    }
    public function add_product(Request $request)
    {
        $validated = $request->validate([
            'slug' => 'required|unique:products,slug,',
        ]);
        $input = $request->all();
        $product = Product::create($input);
        $temp_product = [];
        $temp_product['product_id'] = $product->id;

        if ($files = $request->file('product_image')) {
            foreach ($files as $key => $file) {
                $name_array = array_map('strrev', explode('.', strrev($file->getClientOriginalName())));
                $name = $key . '_' . time() . '.' . $name_array[0];
                if ($key == 0) {
                    Product::where('id', $product->id)->update(['image' => '/images/assets/' . $name]);
                    Product::where('id', $product->id)->update(['compressed_image' => '/images/assets/compressed_' . $name]);
                }
                $file->move(public_path('images/assets/'), $name);
                $temp_product['image'] = '/images/assets/' . $name;
                $image = Image::make(public_path($temp_product['image']))->fit(540, 300);
                $image->save(public_path('images/assets/compressed_' . $name));
                $temp_product['compressed_image'] = '/images/assets/compressed_' . $name;
                ProductsImage::create($temp_product);
            }
        }
        return redirect()->back()->with('message', 'Record Added successfully!!!');
    }
    public function delete_product($id)
    {
        $product = Product::with('images')->find($id);

        $images = $product->images;
        foreach ($images as $key => $image) {
            if (file_exists(public_path($image->image))) {
                unlink(public_path($image->image));
            }
            if (file_exists(public_path($image->compressed_image))) {
                unlink(public_path($image->compressed_image));
            }
        }
        ProductsImage::where('product_id', $id)->delete();
        $product->delete();
        return redirect()->back()->with('message', 'Record deleted successfully!!!');
    }
    public function edit_product($id)
    {
        $product = Product::with('images')->find($id);
        $categories = Category::get();
        return view('admin.edit_product', compact('product', 'categories'));
    }
    public function delete_image(Request $request, $id)
    {
        $product = ProductsImage::find($id);
        if (file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }
        if (file_exists(public_path($product->compressed_image))) {
            unlink(public_path($product->compressed_image));
        }
        $product->delete();
        return redirect()->back();
    }
    public function add_image(Request $request)
    {
        $input = $request->all();
        if ($files = $request->file('product_image')) {
            foreach ($files as $key => $file) {
                $name_array = array_map('strrev', explode('.', strrev($file->getClientOriginalName())));
                $name = $key . '_' . time() . '.' . $name_array[0];
                $file->move(public_path('images/assets/'), $name);
                $temp_product['product_id'] = $request->product_id;
                $temp_product['image'] = '/images/assets/' . $name;
                $image = Image::make(public_path($temp_product['image']))->fit(540, 300);
                $image->save(public_path('images/assets/compressed_' . $name));
                $temp_product['compressed_image'] = '/images/assets/compressed_' . $name;
                ProductsImage::create($temp_product);
            }
        }
        return redirect()->back();
    }
    public function update_product(Request $request, $id)
    {
        $validated = $request->validate([
            'slug' => 'required|unique:products,slug,' . $id,
        ]);
        $input = $request->except('_method', '_token');
        if (!$request->sub_category_id) {
            $input['sub_category_id'] = null;
        }
        if (!$request->third_category_id) {
            $input['third_category_id'] = null;
        }
        Product::where('id', $id)->update($input);
        return redirect()->route('admin.product');
    }
}
