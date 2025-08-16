<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProjectFilter extends Component
{
    public $wall_materials;
    public $floors;
    public $sizes;
    /**
     * Create a new component instance.
     */
    public function __construct($sizes = [])
    {
        $this->sizes = $sizes;

        $this->wall_materials = [
            'СИП-панели',
            'Пеноблок',
            'Кирпич',
            'Газобетон',
            'Брус',
            'ПЩС-блоки',
            'Теплокерамика',
            'Клеёный брус',
            'Профилированный брус',
            'Оцилиндрованное бревно',
        ];

        $this->floors = [
            '1' => '1 этаж',
            '2' => '2 этажа',
            '3' => '3 этажа',
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.project-filter');
    }
}
