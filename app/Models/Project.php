<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'img',
        'slug',
        'description',
        'start_price',
        'gallery',
        'layout',
        'type',
        'floors',
        'total_area',
        'wall_material',
        'foundation',
        'ceiling_height',
        'flooring',
        'mansard',
        'plan_dimensions',
        'extension',
    ];

    protected $casts = [
        'gallery' => 'array',
        'layout' => 'array',
        'mansard' => 'boolean',
        'total_area' => 'decimal:2',
        'ceiling_height' => 'decimal:2',
    ];

    /**
     * Связь многие ко многим с тегами проектов
     */
    public function projectTags()
    {
        return $this->belongsToMany(ProjectTag::class, 'project_project_tag');
    }
    /**
     * Обратная связь один ко многим с моделью Material по полям material_name и wall_material
     */
    public function material()
    {
        return $this->belongsTo(Material::class, 'wall_material', 'material_name');
    }

}
