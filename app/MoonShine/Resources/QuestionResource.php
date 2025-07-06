<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Question;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Number;
use MoonShine\TinyMce\Fields\TinyMce;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<Question>
 */
class QuestionResource extends ModelResource
{
    protected string $model = Question::class;

    protected string $title = 'FAQ';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            Number::make('Порядок', 'order')->sortable(),
            Text::make('Вопрос', 'title'),
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
                Number::make('Порядок', 'order'),
                Text::make('Вопрос', 'title'),
                TinyMce::make('Ответ на вопрос', 'description')
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
            Number::make('Порядок', 'order'),
            Text::make('Вопрос', 'title'),
            TinyMce::make('Ответ на вопрос', 'description')
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Вопрос', 'title'),
        ];
    }

    /**
     * @param Question $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'order' => ['required', 'integer'],
            'title' => ['required', 'string', 'max:500'],
            'description' => ['required', 'string'],
        ];
    }
}
