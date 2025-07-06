<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\City;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IssetCity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $defaulCity = City::allFromCache()->whereStrict('is_default', 1);
        $currentCity = City::allFromCache()->whereStrict('slug', $request->subdomain());

        abort_if($request->subdomain()  !== false && $currentCity->isEmpty(), 404);

        $currentCity = $currentCity->isEmpty() ? $defaulCity->first() : $currentCity->first();

        // dd($defaulCity, $currentCity);

        app()->instance('current_city_name', $currentCity->name ?? "Сургут");
        app()->instance('current_city_pp', $currentCity->pp ?? "Сургуте");
        app()->instance('current_city_rp', $currentCity->rp ?? "Сургута");
        app()->instance('current_city_dp', $currentCity->dp ?? "Сургуту");


        $request->merge([
            'currentCity' => $currentCity,
        ]);

        return $next($request);
    }
}
