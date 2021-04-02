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
        
        return view('welcome');
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
        $category= Category::with('sub_category')->find($id);
        return view('sub_cat',compact('category'));
    }
}
