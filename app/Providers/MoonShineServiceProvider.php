<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\MoonShine\Resources\CityResource;
use App\MoonShine\Resources\MenuResource;
use App\MoonShine\Resources\PageResource;
use App\MoonShine\Resources\ReviewResource;
use App\MoonShine\Resources\ContactResource;
use App\MoonShine\Resources\SeoDataResource;
use App\MoonShine\Resources\ParametrResource;
use App\MoonShine\Resources\QuestionResource;
use App\MoonShine\Resources\MoonShineUserResource;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use App\MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use App\MoonShine\Resources\ProjectResource;
use App\MoonShine\Resources\BuildingResource;
use App\MoonShine\Resources\MaterialResource;
use App\MoonShine\Resources\WorkStepsResource;
use App\MoonShine\Resources\ServiceResource;
use App\MoonShine\Resources\PortfolioResource;
use App\MoonShine\Resources\PriceResource;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  MoonShine  $core
     * @param  MoonShineConfigurator  $config
     *
     */
    public function boot(CoreContract $core, ConfiguratorContract $config): void
    {
        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                CityResource::class,
                ReviewResource::class,
                ParametrResource::class,
                QuestionResource::class,
                ContactResource::class,
                SeoDataResource::class,
                MenuResource::class,
                PageResource::class,
                ProjectResource::class,
                BuildingResource::class,
                MaterialResource::class,
                WorkStepsResource::class,
                ServiceResource::class,
                PortfolioResource::class,
                PriceResource::class,
            ])
            ->pages([
                ...$config->getPages(),
            ])
        ;
    }
}
