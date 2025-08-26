<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Project;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Switcher;
use MoonShine\UI\Fields\DateTime;
use MoonShine\UI\Fields\Position;
use MoonShine\UI\Fields\Textarea;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\TinyMce\Fields\TinyMce;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<Project>
 */
class ProjectResource extends ModelResource
{
    protected string $model = Project::class;

    protected string $title = 'Проекты';
    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Image::make('Изображение', 'img')->dir('projects'),
            Text::make('Заголовок', 'title'),
            Text::make('Тип', 'type'),
            Number::make('Общая площадь', 'total_area'),
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
                Image::make('Изображение', 'img')->dir('projects'),
                Slug::make('Слаг', 'slug'),
                Number::make('Стартовая цена', 'start_price'),
                TinyMce::make('Описание', 'description'),
                Json::make('Галерея', 'gallery')->fields([
                    Position::make(),
                    Image::make('Изображение', 'img')->dir('projects'),
                ]),
                Json::make('Планировка', 'layout')->fields([
                    Position::make(),
                    Image::make('Изображение', 'img')->dir('projects'),
                ]),
                Text::make('Тип', 'type'),
                Number::make('Количество этажей', 'floors'),
                Number::make('Общая площадь', 'total_area'),
                Text::make('Материал стен', 'wall_material'),
                Text::make('Фундамент', 'foundation'),
                Number::make('Высота потолка', 'ceiling_height'),
                Text::make('Перекрытия', 'flooring'),
                Switcher::make('Мансарда', 'mansard'),
                Text::make('Габариты для плана', 'plan_dimensions'),
                Text::make('Пристройка', 'extension'),
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
            Image::make('Изображение', 'img')->dir('projects'),
            Slug::make('Слаг', 'slug'),
            Number::make('Стартовая цена', 'start_price'),
            TinyMce::make('Описание', 'description'),
            Json::make('Галерея', 'gallery')->fields([
                Position::make(),
                Image::make('Изображение', 'img')->dir('projects'),
            ]),
            Json::make('Планировка', 'layout')->fields([
                Position::make(),
                Image::make('Изображение', 'img')->dir('projects'),
            ]),
            Text::make('Тип', 'type'),
            Number::make('Количество этажей', 'floors'),
            Number::make('Общая площадь', 'total_area'),
            Text::make('Материал стен', 'wall_material'),
            Text::make('Фундамент', 'foundation'),
            Number::make('Высота потолка', 'ceiling_height'),
            Text::make('Перекрытия', 'flooring'),
            Switcher::make('Мансарда', 'mansard'),
            Text::make('Габариты для плана', 'plan_dimensions'),
            Text::make('Пристройка', 'extension'),
            DateTime::make('Создано', 'created_at'),
            DateTime::make('Обновлено', 'updated_at'),
        ];
    }

    /**
     * @param Project $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'start_price' => ['required', 'numeric'],
            'type' => ['required', 'string', 'max:255'],
            'total_area' => ['required', 'numeric'],
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make("Заголовок", 'title'),
            Text::make("Описание", 'description'),
            Text::make("Тип", 'type'),
        ];
    }
}
