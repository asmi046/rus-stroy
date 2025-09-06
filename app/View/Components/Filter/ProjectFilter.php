<?php

namespace App\View\Components\Filter;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProjectFilter extends Component
{
    public $wall_materials;
    public $floors;
    public $stype;
    public $sizes;
    public $const_type;
    public $const_material;
    /**
     * Create a new component instance.
     */
    public function __construct($sizes = [], $constType = null, $constMaterial = null)
    {
        $this->sizes = $sizes;
        $this->const_type = $constType;
        $this->const_material = $constMaterial;

        $this->wall_materials = config('filter.wall_materials');

        $this->floors = config('filter.floors');

        $this->stype = config('filter.types');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.filter.project-filter');
    }
}
