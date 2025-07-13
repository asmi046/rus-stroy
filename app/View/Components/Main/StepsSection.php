<?php

namespace App\View\Components\Main;

use Closure;
use App\Models\WorkSteps;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class StepsSection extends Component
{
    public $steps;
    public $content;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->steps = Cache::rememberForever('steps_in_main', function () {
            return WorkSteps::all()->pluck('step_name')->toArray();
        });

        $this->content = Cache::rememberForever('steps_content_in_main', function () {
            return WorkSteps::all()->keyBy('step_number');
        });

        // dd($this->steps, $this->content); // Debugging line to check the data being fetched
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.steps-section');
    }
}
