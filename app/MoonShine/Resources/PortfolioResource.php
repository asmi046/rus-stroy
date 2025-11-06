<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Portfolio;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Position;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\TinyMce\Fields\TinyMce;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Filters\TextFilter;

/**
 * @extends ModelResource<Portfolio>
 */
class PortfolioResource extends ModelResource
{
    protected string $model = Portfolio::class;

    protected string $title = 'Портфолио';

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
                Image::make('Изображение', 'img')->dir(''),
                Number::make('Порядок', 'order'),
                Slug::make('Слаг', 'slug'),
                TinyMce::make('Описание', 'description'),
                Text::make('Тип', 'type'),
                Number::make('Количество этажей', 'floors'),
                Text::make('Место нахождения', 'location'),
                Text::make('Координаты', 'coordinates'),
                Text::make('Материал стен', 'wall_material'),
                Text::make('Облицовка', 'cladding'),
                Text::make('Фундамент', 'foundation'),
                Text::make('Кровля', 'roofing'),
                Text::make('Перекрытия', 'flooring'),
                Json::make('Галерея', 'gallery')
                ->onlyValue('Изображение', Image::make('Изображение'))
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
            Image::make('Изображение', 'img')->dir(''),
            Number::make('Порядок', 'order'),
            Slug::make('Слаг', 'slug'),
            TinyMce::make('Описание', 'description'),
            Text::make('Тип', 'type'),
            Number::make('Количество этажей', 'floors'),
            Text::make('Место нахождения', 'location'),
            Text::make('Координаты', 'coordinates'),
            Text::make('Материал стен', 'wall_material'),
            Text::make('Облицовка', 'cladding'),
            Text::make('Фундамент', 'foundation'),
            Text::make('Кровля', 'roofing'),
            Text::make('Перекрытия', 'flooring'),
            Json::make('Галерея', 'gallery')->onlyValue('Изображение', Image::make('Изображение'))
        ];
    }

    /**
     * @param Portfolio $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => 'required|string|max:255',
            'order' => 'required|integer',
            'type' => 'required|string|max:50',
            'floors' => 'required|integer',
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Заголовок', 'title'),
            Text::make('Описание', 'description'),
        ];
    }
}
