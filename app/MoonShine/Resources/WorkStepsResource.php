<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\WorkSteps;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Number;
use MoonShine\TinyMce\Fields\TinyMce;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Filters\TextFilter;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;

/**
 * @extends ModelResource<WorkSteps>
 */
class WorkStepsResource extends ModelResource
{
    protected string $model = WorkSteps::class;

    protected string $title = 'Как мы работаем';

    protected string $column = 'step_name';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Number::make('Номер шага', 'step_number'),
            Text::make('Имя шага', 'step_name'),
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
                Number::make('Номер шага', 'step_number'),
                Text::make('Имя шага', 'step_name'),
                TinyMce::make('Описание', 'description'),
                TinyMce::make('Сноска', 'sub_description'),
                TinyMce::make('Описание дополнительное', 'additional_description'),
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
            Number::make('Номер шага', 'step_number'),
            Text::make('Имя шага', 'step_name'),
            TinyMce::make('Описание', 'description'),
            TinyMce::make('Сноска', 'sub_description'),
            TinyMce::make('Описание дополнительное', 'additional_description'),
        ];
    }

    /**
     * @param WorkSteps $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'step_number' => 'required|integer',
            'step_name' => 'required|string|max:255',
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Имя шага', 'step_name'),
            Text::make('Описание', 'description'),
        ];
    }
}
