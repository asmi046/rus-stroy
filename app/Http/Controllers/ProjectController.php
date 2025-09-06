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
            'sizes' => $sizes,
        ]);
    }

    public function projects_type(ProjectFilter $request, string $type = null)
    {
        $types = config('filter.types');

        if ($type == null || !isset($types[$type])) abort(404);

        $request->request->merge(['stype' => $types[$type]['name']]);

        $projects = Project::select()->filter($request)->paginate(15)->withQueryString();

        $sizes = Project::selectRaw('plan_dimensions, COUNT(*) as count')
            ->filter($request)
            ->groupBy('plan_dimensions')
            ->orderByDesc('count')
            ->get();

        return view('projects.type', [
            'projects' => $projects,
            'sizes' => $sizes,
            'type' => $types[$type],
            'title' => $types[$type]['title'],
            'subtitle' => $types[$type]['subtitle'],
        ]);

    }

    public function projects_type_material(ProjectFilter $request, string $type = null, string $material = null)
    {
        $types = config('filter.types');
        $materials = config('filter.wall_materials');

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
            ->take(6)
            ->get();

        return view('projects.page', ['project' => $project, 'dop_project' => $dop_project]);
    }

    public function get_list(Request $request)
    {
        $ids = $request->input('ids', []);
        return Project::whereIn('id', $ids)->get();
    }

}
