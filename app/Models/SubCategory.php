<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
     protected $fillable =[
     	'name',
     	'image',
         'slug',
     	'category_id'
     ];
     public function parent_category(){

        return $this->belongsTo('App\Models\Category', 'category_id');

    }
    public function third_category(){

        return $this->hasMany('App\Models\ThirdCategory','parent_category_id','id');

    }
}
