<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');

Auth::routes();

//website
Route::get('/tiles', [App\Http\Controllers\HomeController::class, 'tiles'])->name('tiles');
Route::get('/stones', [App\Http\Controllers\HomeController::class, 'stones'])->name('stones');
Route::get('/mosaic', [App\Http\Controllers\HomeController::class, 'mosaic'])->name('mosaic');
Route::get('/category/{id}', [App\Http\Controllers\HomeController::class, 'category'])->name('category');
Route::get('/sub_category/{id}', [App\Http\Controllers\HomeController::class, 'sub_category'])->name('sub_category');
Route::get('/third_category/{id}', [App\Http\Controllers\HomeController::class, 'third_category'])->name('third_category');
Route::get('/product/{id}', [App\Http\Controllers\HomeController::class, 'product'])->name('product');








//Portal 

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('home');


//category
Route::get('/admin/category', [App\Http\Controllers\CategoryController::class, 'category'])->name('admin.category');
Route::post('/admin/all_category', [App\Http\Controllers\CategoryController::class, 'all_category'])->name('admin.all_category');
Route::post('/admin/add_category', [App\Http\Controllers\CategoryController::class, 'add_category'])->name('admin.add_category');
Route::post('/admin/edit_category', [App\Http\Controllers\CategoryController::class, 'edit_category'])->name('admin.edit_category');
Route::get('/admin/delete_category/{id}', [App\Http\Controllers\CategoryController::class, 'delete_category'])->name('admin.delete_category');


//sub category
Route::get('/admin/sub_category', [App\Http\Controllers\SubCategoryController::class, 'sub_category'])->name('admin.sub_category');
Route::post('/admin/add_sub_category', [App\Http\Controllers\SubCategoryController::class, 'add_sub_category'])->name('admin.add_sub_category');
Route::post('/admin/edit_sub_category', [App\Http\Controllers\SubCategoryController::class, 'edit_sub_category'])->name('admin.edit_sub_category');
Route::get('/admin/delete_sub_category/{id}', [App\Http\Controllers\SubCategoryController::class, 'delete_sub_category'])->name('admin.delete_sub_category');
Route::post('/admin/get_sub_category', [App\Http\Controllers\SubCategoryController::class, 'get_sub_category'])->name('admin.get_sub_category');



//third category
Route::get('/admin/third_category', [App\Http\Controllers\ThirdCategoryController::class, 'third_category'])->name('admin.third_category');
Route::post('/admin/add_third_category', [App\Http\Controllers\ThirdCategoryController::class, 'add_third_category'])->name('admin.add_third_category');
Route::post('/admin/edit_third_category', [App\Http\Controllers\ThirdCategoryController::class, 'edit_third_category'])->name('admin.edit_third_category');
Route::get('/admin/delete_third_category/{id}', [App\Http\Controllers\ThirdCategoryController::class, 'delete_third_category'])->name('admin.delete_third_category');
Route::post('/admin/get_third_category', [App\Http\Controllers\ThirdCategoryController::class, 'get_third_category'])->name('admin.get_third_category');


//products
Route::get('/admin/product', [App\Http\Controllers\ProductController::class, 'product'])->name('admin.product');
Route::post('/admin/add_product', [App\Http\Controllers\ProductController::class, 'add_product'])->name('admin.add_product');
Route::get('/admin/edit_product/{id}', [App\Http\Controllers\ProductController::class, 'edit_product'])->name('admin.edit_product');
Route::patch('/admin/update_product/{id}', [App\Http\Controllers\ProductController::class, 'update_product'])->name('admin.update_product');

Route::get('/admin/delete_product/{id}', [App\Http\Controllers\ProductController::class, 'delete_product'])->name('admin.delete_product');
Route::delete('/admin/product/delete_image/{id}', [App\Http\Controllers\ProductController::class, 'delete_image'])->name('admin.delete_image');
Route::post('/admin/add_image', [App\Http\Controllers\ProductController::class, 'add_image'])->name('admin.add_image');






