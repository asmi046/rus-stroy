<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Building;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\TinyMce\Fields\TinyMce;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Filters\TextFilter;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<Building>
 */
class BuildingResource extends ModelResource
{
    protected string $model = Building::class;

    protected string $title = 'Строительство';
    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Number::make('Порядок', 'order'),
            Image::make('Изображение', 'img')->dir(''),
            Text::make('Заголовок', 'title'),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Text::make('Заголовок', 'title'),
                Number::make('Порядок', 'order'),
                Text::make('Краткое описание', 'short_description'),
                Image::make('Изображение', 'img')->dir(''),
                Image::make('Баннер', 'banner')->dir(''),
                Slug::make('Слаг', 'slug'),
                TinyMce::make('Описание', 'description'),
                Text::make('Тип постройки', 'building_type'),
                Text::make('Материал постройки', 'building_material'),
                Number::make('Стартовая цена', 'start_price'),
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Заголовок', 'title'),
            Number::make('Порядок', 'order'),
            Text::make('Краткое описание', 'short_description'),
            Image::make('Изображение', 'img')->dir(''),
            Image::make('Баннер', 'banner')->dir(''),
            Slug::make('Слаг', 'slug'),
            TinyMce::make('Описание', 'description'),
            Text::make('Тип постройки', 'building_type'),
            Text::make('Материал постройки', 'building_material'),
            Number::make('Стартовая цена', 'start_price'),
        ];
    }

    /**
     * @param Building $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => 'required|string',
            'order' => 'required|integer',
            'building_type' => 'required|string',
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('title', 'Заголовок'),
        ];
    }
}
