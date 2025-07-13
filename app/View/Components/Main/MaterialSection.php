<?php

namespace App\View\Components\Main;

use Closure;
use App\Models\Material;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class MaterialSection extends Component
{
    public $materials;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->materials = Cache::rememberForever('material_in_main', function () {
            return Material::orderBy('order')->take(9)->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.material-section');
    }
}
