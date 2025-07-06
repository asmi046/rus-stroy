<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Review;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Url;
use MoonShine\UI\Fields\Date;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\TinyMce\Fields\TinyMce;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<Review>
 */
class ReviewResource extends ModelResource
{
    protected string $model = Review::class;

    protected string $title = 'Отзывы';

    protected string $column = 'name';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Image::make('Аватар', 'img')->dir('rew'),
            Text::make('Имя', 'name'),
            Text::make('Платформа', 'platform'),
            Number::make('Оценка', 'score'),
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
                Image::make('Аватар', 'img')->dir('rew'),
                Text::make('Имя', 'name'),
                Date::make('Дата отзыва', 'data'),
                Text::make('Платформа', 'platform'),
                Number::make('Оценка', 'score'),
                TinyMce::make('Отзыв', 'description'),
                Url::make('Ссылка на платформу', 'platform_lnk'),
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
            Image::make('Аватар', 'img')->dir('rew'),
            Text::make('Имя', 'name'),
            Date::make('Дата отзыва', 'data'),
            Text::make('Платформа', 'platform'),
            Number::make('Оценка', 'score'),
            TinyMce::make('Отзыв', 'description'),
            Url::make('Ссылка на платформу', 'platform_lnk'),
        ];
    }

    /**
     * @param Review $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [

            'name' => ['required', 'string', 'max:100'],
            'data' => ['required'],
            'platform' => ['required', 'string'],
            'score' => ['required', 'integer'],

        ];
    }
}
