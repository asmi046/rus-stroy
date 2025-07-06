<?php

namespace App\View\Components\Main;

use Closure;
use App\Models\Parametr;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class WhaySection extends Component
{
    public $adv;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->adv = Cache::rememberForever('adv_list', function () {
            return Parametr::where('section', 'Почему выбирают нас')->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.whay-section');
    }
}
