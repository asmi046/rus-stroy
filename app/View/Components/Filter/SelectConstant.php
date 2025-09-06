<?php

namespace App\View\Components\Filter;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectConstant extends Component
{
    public $name;
    public $title;
    public $values;

    /**
     * Create a new component instance.
     */
    public function __construct($name = "", $title = "", $values = [])
    {
        $this->name = $name;
        $this->title = $title;
        $this->values = $values;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.filter.select-constant');
    }
}
