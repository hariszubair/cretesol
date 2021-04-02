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
     	'category_id'
     ];
     public function parent_category(){

        return $this->belongsTo('App\Models\Category', 'category_id');

    }
}
