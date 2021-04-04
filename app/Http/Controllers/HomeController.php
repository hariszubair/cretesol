<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductsImage;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ThirdCategory;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function tiles()
    {
        return view('tiles');
    }
    public function welcome()
    {
        $categories=Category::all();
        return view('welcome',compact('categories'));
    }
    public function stones()
    {
        return view('stones');
    }
    public function mosaic()
    {
        return view('mosaic');
    }
    public function category($id)
    {
        $category= Category::with('sub_category')->where('slug',$id)->first();
        if(count($category->sub_category) > 0){
        return view('sub_cat',compact('category'));
        }
        $products=Product::where('category_id',$category->id)->with('images')->get();
        return view('products',compact('category','products'));
    }
    public function sub_category($id)
    {
        $category= SubCategory::with('third_category','parent_category')->where('slug',$id)->first();
        if(count($category->third_category) > 0){
        return view('third_cat',compact('category'));
        }
        $products=Product::where('sub_category_id',$category->id)->with('images')->get();
        // if(count($products) == 0){
        //     return 'No products available.';
        // }else{
        return view('products',compact('category','products'));
        // }
    }
    public function third_category($id)
    {
        $category=ThirdCategory::with('parent_category.parent_category')->where('slug',$id)->first();
        $products=Product::where('third_category_id',$category->id)->with('images')->get();
        if(count($products) == 0){
            return 'no product available';
        }
        return view('products',compact('category','products'));
    }
    public function product($id)
    {
        $product=Product::where('slug',$id)->first();
        if($product->third_category_id){
            $other_products=Product::where('third_category_id',$product->third_category_id)->where('slug','!=',$id)->take(3)->get();
        }
        else if($product->sub_category_id){
            $other_products=Product::where('sub_category_id',$product->sub_category_id)->where('slug','!=',$id)->take(3)->get();
        }
        else if($product->category_id){
            $other_products=Product::where('category_id',$product->category_id)->where('slug','!=',$id)->take(3)->get();
        }
        $category=Category::find($product->category_id);
        return view('product',compact('product','category','other_products'));
    }
}
