<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =[
    	'category_id',
    	'sub_category_id',
    	'third_category_id',
     	'name',
         'slug',
     	'image'
     ];
     public function category(){

        return $this->belongsTo('App\Models\Category', 'category_id');

    }
    public function sub_category(){

        return $this->belongsTo('App\Models\SubCategory', 'sub_category_id');

    }
    public function third_category(){

        return $this->belongsTo('App\Models\ThirdCategory', 'third_category_id');

    }
    public function images(){

        return $this->hasMany('App\Models\ProductsImage');

    }
}
