<?php

namespace App\View\Components\Main;

use Closure;
use App\Models\Question;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class FaqSection extends Component
{
    public $questions;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->questions = Cache::rememberForever('faq_in_main', function () {
            return Question::orderBy('order')->take(6)->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.faq-section');
    }
}
