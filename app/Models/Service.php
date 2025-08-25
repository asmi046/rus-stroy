<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'order',
        'group',
        'template',
        'img',
        'slug',
        'short_description',
        'description',
        'gallery',
        'sections',
    ];

    protected $casts = [
        'gallery' => 'array',
        'sections' => 'array',
    ];


    public function setSlugAttribute($value)
    {
        if (empty($value))
            $this->attributes['slug'] =  Str::slug($this->title);
        else
            $this->attributes['slug'] =  $value;
    }
}
