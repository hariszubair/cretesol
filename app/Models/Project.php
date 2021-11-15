<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'slug',
        'category',
        'image',
        'compressed_image',
    ];
    public function images()
    {

        return $this->hasMany('App\Models\ProjectsImage');
    }
    public function first_image()
    {

        return $this->hasOne('App\Models\ProjectsImage');
    }
}
