<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Building;
use Illuminate\Http\Request;
use App\Filters\ProjectFilter;

class BuildingController extends Controller
{
    public function index(ProjectFilter $request)
    {
        $projects = Project::filter($request)->paginate(15)->withQueryString();
        $sizes = Project::selectRaw('plan_dimensions, COUNT(*) as count')
            ->groupBy('plan_dimensions')
            ->orderByDesc('count')
            ->get();

        $building = Building::all();

        return view('building.index', ['building' => $building, 'projects' => $projects, 'sizes' => $sizes]);
    }

    public function page(ProjectFilter $request, string $slug)
    {
        $types = config('filter.types');

        $building = Building::where('slug', $slug)->first();
        $projects = $building->projects()->where('type', $building->building_type)->filter($request)->paginate(15)->withQueryString();

        if($building == null) abort('404');

        $sizes = $building->projects()->selectRaw('plan_dimensions, COUNT(*) as count')
            ->filter($request)
            ->groupBy('plan_dimensions')
            ->orderByDesc('count')
            ->get();
        return view('building.page', ['building' => $building, 'projects' => $projects,
            'sizes' => $sizes,
            'type' =>  collect($types)->firstWhere('name', $building->building_type),
        ]);
    }
}
