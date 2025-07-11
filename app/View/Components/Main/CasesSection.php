<?php

namespace App\View\Components\Main;

use Closure;
use App\Models\Portfolio;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class CasesSection extends Component
{
    public $cases;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->cases = Cache::rememberForever('cases_in_main', function () {
            return Portfolio::orderBy('order')->take(6)->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.cases-section');
    }
}
