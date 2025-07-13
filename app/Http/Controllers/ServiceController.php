<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', ['services' => $services]);
    }

    public function page(string $slug)
    {
        $service = Service::where('slug', $slug)->first();

        if($service == null) abort('404');

        return view('services.page', ['service' => $service]);
    }
}
