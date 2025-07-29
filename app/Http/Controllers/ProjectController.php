<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(15);
        return view('projects.index', ['projects' => $projects]);
    }

    public function page(string $slug)
    {
        $project = Project::where('slug', $slug)->first();

        if($project == null) abort('404');

        $dop_project = Project::where('floors', $project->floors)
            ->where('type', $project->type)
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('projects.page', ['project' => $project, 'dop_project' => $dop_project]);
    }

    public function get_list(Request $request)
    {
        $ids = $request->input('ids', []);
        return Project::whereIn('id', $ids)->get();
    }

}
