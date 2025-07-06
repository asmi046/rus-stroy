<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;


use MoonShine\MenuManager\MenuItem;
use MoonShine\MenuManager\MenuGroup;

use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Laravel\Components\Layout\{Locales, Notifications, Profile, Search};
use MoonShine\UI\Components\{Breadcrumbs,
    Components,
    Layout\Flash,
    Layout\Div,
    Layout\Body,
    Layout\Burger,
    Layout\Content,
    Layout\Footer,
    Layout\Head,
    Layout\Favicon,
    Layout\Assets,
    Layout\Meta,
    Layout\Header,
    Layout\Html,
    Layout\Layout,
    Layout\Logo,
    Layout\Menu,
    Layout\Sidebar,
    Layout\ThemeSwitcher,
    Layout\TopBar,
    Layout\Wrapper,
    When};

use App\MoonShine\Resources\SeoDataResource;
use App\MoonShine\Resources\CityResource;
use App\MoonShine\Resources\ContactResource;
use App\MoonShine\Resources\ParametrResource;
use App\MoonShine\Resources\QuestionResource;
use App\MoonShine\Resources\ReviewResource;
use App\MoonShine\Resources\MenuResource;
use App\MoonShine\Resources\PageResource;

final class MoonShineLayout extends AppLayout
{
    protected function assets(): array
    {


        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {
        return [
            MenuGroup::make('Контент', [
                MenuItem::make('Параметры сайта', ParametrResource::class)->icon('cube'),
                MenuItem::make('FAQ', QuestionResource::class)->icon('fire'),
                MenuItem::make('Отзывы', ReviewResource::class)->icon('identification'),
                MenuItem::make('SEO', SeoDataResource::class,)->icon('chart-bar-square'),
            ])->icon('folder-open'),

            MenuItem::make("Страницы", PageResource::class)->icon('document-text'),
            MenuItem::make('Меню', MenuResource::class)->icon('bars-3-bottom-left'),
            MenuItem::make('Контакты', ContactResource::class)->icon('chat-bubble-bottom-center-text'),
            MenuItem::make('Города', CityResource::class)->icon('map-pin'),
            ...parent::menu(),
        ];
    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

        // $colorManager->primary('#00000');
    }

    public function build(): Layout
    {
        return parent::build();
    }
}
