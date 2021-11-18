<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'image',
        'compressed_image'
    ];
    public function sub_category()
    {

        return $this->hasMany('App\Models\SubCategory');
    }
    public function products()
    {

        return $this->hasMany('App\Models\Product')->where('sub_category_id', '=', null)->where('third_category_id', '=', null);
    }
    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }
}
