<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = [
        'title',
        'order',
        'short_description',
        'img',
        'banner',
        'slug',
        'description',
        'building_type',
        'building_material',
        'start_price',
    ];

    protected $casts = [
        'title' => 'string',
        'short_description' => 'string',
        'img' => 'string',
        'banner' => 'string',
        'slug' => 'string',
        'description' => 'string',
        'building_type' => 'string',
        'building_material' => 'string',
        'start_price' => 'decimal:2',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class, 'type', 'building_type');
    }

    public function setSlugAttribute($value)
    {
        if (empty($value))
            $this->attributes['slug'] =  Str::slug($this->title);
        else
            $this->attributes['slug'] =  $value;
    }
}
