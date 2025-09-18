<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'title',
        'card_title',
        'material_name',
        'short_description',
        'img',
        'slug',
        'order',
        'start_price',
        'description',
    ];

    // protected $with = [
    //     'projects',
    // ];

    public function projects()
    {
        return $this->hasMany(Project::class, 'wall_material', 'material_name');
    }

    public function setSlugAttribute($value)
    {
        if (empty($value))
            $this->attributes['slug'] =  Str::slug($this->title);
        else
            $this->attributes['slug'] =  $value;
    }

}
