<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Service;
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
 * @extends ModelResource<Service>
 */
class ServiceResource extends ModelResource
{
    protected string $model = Service::class;

    protected string $title = 'Строительные услуги';

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
            Text::make('Группа', 'group'),
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
                Text::make('Группа', 'group'),
                Text::make('Шаблон', 'template'),
                Image::make('Изображение', 'img')->dir(''),
                Slug::make('Слаг', 'slug'),
                TinyMce::make('Короткое описание', 'short_description'),
                TinyMce::make('Описание', 'description'),
                Json::make('Галерея', 'gallery')->fields([
                    Position::make(),
                ]),
                Json::make('Секции', 'sections')->fields([
                    Position::make(),
                ]),
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
            Text::make('Группа', 'group'),
            Text::make('Шаблон', 'template'),
            Image::make('Изображение', 'img')->dir(''),
            Slug::make('Слаг', 'slug'),
            TinyMce::make('Короткое описание', 'short_description'),
            TinyMce::make('Описание', 'description'),
            Json::make('Галерея', 'gallery')->fields([
                Position::make(),
            ]),
            Json::make('Секции', 'sections')->fields([
                Position::make(),
            ]),
        ];
    }

    /**
     * @param Service $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => 'required|string|max:255',
            'order' => 'required|integer',
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
