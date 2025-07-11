<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Portfolio::all();
        return view('portfolio.index', ['projects' => $projects]);
    }

    public function page(string $slug)
    {
        $project = Portfolio::where('slug', $slug)->first();

        if($project == null) abort('404');

        return view('portfolio.page', ['project' => $project]);
    }
}
