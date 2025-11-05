<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Material;

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
 * @extends ModelResource<Material>
 */
class MaterialResource extends ModelResource
{
    protected string $model = Material::class;

    protected string $title = 'Материалы';
    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Image::make('Изображение', 'img')->dir(''),
            Text::make('Заголовок', 'material_name'),
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
                Text::make('Заголовок карточки', 'card_title'),
                Text::make('Заголовок', 'material_name'),
                TinyMce::make('Подзаголовок', 'short_description'),
                Image::make('Изображение', 'img')->dir(''),
                Slug::make('Слаг', 'slug'),
                Number::make('Порядок', 'order'),
                TinyMce::make('Описание', 'description'),
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
            Text::make('Заголовок карточки', 'card_title'),
            Text::make('Заголовок', 'material_name'),
            TinyMce::make('Подзаголовок', 'short_description'),
            Image::make('Изображение', 'img')->dir(''),
            Slug::make('Слаг', 'slug'),
            Number::make('Порядок', 'order'),
            TinyMce::make('Описание', 'description'),
            Number::make('Стартовая цена', 'start_price'),
        ];
    }

    /**
     * @param Material $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => 'required|string',
            'card_title' => 'required|string',
            'material_name' => 'required|string',
            'order' => 'required|integer',
            'start_price' => 'required|numeric',
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('title', 'Заголовок'),
            Text::make('material_name', 'Заголовок'),
        ];
    }
}
