<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'title',
        'material_name',
        'subtitle',
        'img',
        'slug',
        'order',
        'start_price',
        'description',
    ];

    protected $with = [
        'projects',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class, 'wall_material', 'material_name');
    }

}
