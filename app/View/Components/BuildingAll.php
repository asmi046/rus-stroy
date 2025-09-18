<?php

namespace App\View\Components;

use Closure;
use App\Models\Building;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class BuildingAll extends Component
{
    public $building;
    public $title;
    public $subtitle;
    /**
     * Create a new component instance.
     */
    public function __construct(string $title = 'Все виды построек', string $subtitle = 'Подробное описание всех видов построек')
    {
        $this->title = $title;
        $this->subtitle = $subtitle;

        $this->building = Cache::rememberForever('building_all', function () {
            return Building::orderBy('order')->take(3)->get();
        });
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.building-all');
    }
}
