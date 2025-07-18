<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'img',
        'slug',
        'order',
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


    public function setSlugAttribute($value)
    {
        if (empty($value))
            $this->attributes['slug'] =  Str::slug($this->title);
        else
            $this->attributes['slug'] =  $value;
    }
}
