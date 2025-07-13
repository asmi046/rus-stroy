<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::all();
        return view('materials.index', ['materials' => $materials]);
    }

    public function page(string $slug)
    {
        $material = Material::where('slug', $slug)->first();

        if($material == null) abort('404');

        return view('materials.page', ['material' => $material]);
    }
}
