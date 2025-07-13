<?php

namespace App\View\Components\Main;

use Closure;
use App\Models\Project;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class ProjectsSection extends Component
{
    public $projects;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->projects = Cache::rememberForever('project_in_main', function () {
            return Project::select()->take(6)->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main.projects-section');
    }
}
