<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Filters\ProjectFilter;

class ProjectController extends Controller
{
    public function index(ProjectFilter $request)
    {
        $projects = Project::select()->filter($request)->paginate(15)->withQueryString();

        $sizes = Project::selectRaw('plan_dimensions, COUNT(*) as count')
            ->groupBy('plan_dimensions')
            ->orderByDesc('count')
            ->get();

            // dd($sizes);

        return view('projects.index', [
            'projects' => $projects,
            'sizes' => $sizes
        ]);
    }

    public function page(string $slug)
    {
        $project = Project::where('slug', $slug)->first();

        if($project == null) abort('404');

        $dop_project = Project::where('floors', $project->floors)
            ->where('type', $project->type)
            ->inRandomOrder()
            ->get();

        return view('projects.page', ['project' => $project, 'dop_project' => $dop_project]);
    }

    public function get_list(Request $request)
    {
        $ids = $request->input('ids', []);
        return Project::whereIn('id', $ids)->get();
    }

}
