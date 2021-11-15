<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'image',
        'compressed_image'
    ];
}