<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShortProjectSelector extends Component
{
    public $type;
    public $material;

    public $areaList = [];
    public $florsList = [];
    /**
     * Create a new component instance.
     */
    public function __construct(string $type = "Дом", string $material = "")
    {
        $this->type = $type;
        $this->material = $material;
        $this->areaList = [
            'до 100 м²' => [
                'lnk' => '?area_from=0&area_to=100',
                'area_from' => 0,
                'area_to' => 100,
            ],

            'от 100 до 150 м²' => [
                'lnk' => '?area_from=100&area_to=150',
                'area_from' => 100,
                'area_to' => 150,
            ],

            'от 150 до 200 м²' => [
                'lnk' => '?area_from=150&area_to=200',
                'area_from' => 150,
                'area_to' => 200,
            ],

            'от 200 м²' => [
                'lnk' => '?area_from=200&area_to=500',
                'area_from' => 200,
                'area_to' => 500,
            ],
        ];

        $this->florsList = [
            'Одноэтажные' => [
                'lnk' => '?floors=1+этаж',
                'floors' => 1,
            ],
            'Двухэтажные'  => [
                'lnk' => '?floors=2+этажа',
                'floors' => 2,
            ],
        ];

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.short-project-selector');
    }
}
