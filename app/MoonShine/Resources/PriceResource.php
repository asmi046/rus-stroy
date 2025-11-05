<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Price;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Components\Filters\TextFilter;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;

/**
 * @extends ModelResource<Price>
 */
class PriceResource extends ModelResource
{
    protected string $model = Price::class;

    protected string $title = 'Прайс-лист';

    protected string $column = 'name';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Наименование', 'name'),
            Text::make('Раздел', 'section'),
            Number::make('Цена', 'price'),
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
                Text::make('Раздел', 'section'),
                Text::make('Наименование', 'name'),
                Text::make('Единицы измерения', 'unit'),
                Number::make('Цена', 'price'),
                Text::make('Ссылка', 'link'),
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
            Text::make('Раздел', 'section'),
            Text::make('Наименование', 'name'),
            Text::make('Единицы измерения', 'unit'),
            Number::make('Цена', 'price'),
            Text::make('Ссылка', 'link'),
        ];
    }

    /**
     * @param Price $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'section' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'unit' => 'required|string|max:50',
            'price' => 'required|numeric|min:0',
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Наименование', 'name'),
        ];
    }
}
