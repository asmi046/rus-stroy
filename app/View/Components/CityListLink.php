<?php

namespace App\View\Components;

use Closure;
use App\Models\City;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class CityListLink extends Component
{
    public $citylist;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->citylist = City::allFromCache()->keyBy('name');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.city-list-link');
    }
}
