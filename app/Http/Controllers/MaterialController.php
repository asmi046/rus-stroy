<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Filters\ProjectFilter;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::all();
        return view('materials.index', ['materials' => $materials]);
    }

    public function page(ProjectFilter $request, string $slug)
    {
        $types = config('filter.types');
        $matrerials = config('filter.wall_materials');

        $material = Material::where('slug', $slug)->first();
        $projects = $material->projects()->where('type', 'Дом')->filter($request)->paginate(15)->withQueryString();

        if($material == null) abort('404');

        $sizes = $material->projects()->selectRaw('plan_dimensions, COUNT(*) as count')
            ->filter($request)
            ->groupBy('plan_dimensions')
            ->orderByDesc('count')
            ->get();
// dd(Str::slug($material->material_name));
        return view('materials.page', ['material' => $material, 'projects' => $projects,
            'sizes' => $sizes,
            'type' => $types['doma'],
            'wall_material' => $matrerials[Str::slug($material->material_name)] ?? null,
        ]);
    }
}
