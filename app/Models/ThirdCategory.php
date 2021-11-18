<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'slug',
        'parent_category_id',
        'compressed_image'
    ];
    public function parent_category()
    {

        return $this->belongsTo('App\Models\SubCategory', 'parent_category_id');
    }
    public function products()
    {

        return $this->hasMany('App\Models\Product');
    }
    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }
}
