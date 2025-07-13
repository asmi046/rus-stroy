<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', ['projects' => $projects]);
    }

    public function page(string $slug)
    {
        $project = Project::where('slug', $slug)->first();

        if($project == null) abort('404');

        return view('projects.page', ['project' => $project]);
    }
}
