<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'img',
        'slug',
        'description',
        'type',
        'floors',
        'location',
        'coordinates',
        'wall_material',
        'cladding',
        'foundation',
        'roofing',
        'flooring',
        'gallery'
    ];

    protected $casts = [
        'gallery' => 'array',
        'floors' => 'integer'
    ];
}
