<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTag extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'img',
        'slug',
        'description',
    ];

    /**
     * Связь многие ко многим с проектами
     */
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_project_tag');
    }
}
