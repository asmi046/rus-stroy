<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Request::macro('subdomain', function () {
            $host = $this->getHost();
            $parts = explode('.', $host);
            return count($parts) > 2 ? $parts[0] : false;
        });
    }
}
