<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use App\Models\PriceOfMaterial;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class ProjectPrice extends Component
{
    public $prices;
    public $area;
    /**
     * Create a new component instance.
     */
    public function __construct( float $area = 60 )
    {
        $this->area = $area;

        $this->prices = Cache::rememberForever('prices_for_project', function () {
            $priceTable = PriceOfMaterial::all()->groupBy('type')->toArray();
            // dd($priceTable);
            return $priceTable;
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.project-price');
    }
}
