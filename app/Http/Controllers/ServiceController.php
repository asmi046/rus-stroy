<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all()->groupBy('group')->toArray();

        return view('services.index', ['services' => $services]);
    }

    public function page(string $slug)
    {
        $service = Service::where('slug', $slug)->first();
        $more_service = Service::where('group', $service->group)->inRandomOrder()->take(3)->get();

        if($service == null) abort('404');

        $template = (View::exists($service->template))?$service->template:'services.page';

        return view($template, [
            'service' => $service,
            'more_service' => $more_service
        ]);
    }
}

