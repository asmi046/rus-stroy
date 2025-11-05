<?php

namespace App\View\Components\Main;

use Closure;
use App\Models\Parametr;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class StatSection extends Component
{
    public $statistics;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->statistics = Cache::rememberForever('stat_list', function () {
            return Parametr::where('section', 'Статистика')->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.stat-section');
    }
}
