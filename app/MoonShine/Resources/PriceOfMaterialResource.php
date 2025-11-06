<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\PriceOfMaterial;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Number;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;

/**
 * @extends ModelResource<PriceOfMaterial>
 */
class PriceOfMaterialResource extends ModelResource
{
    protected string $model = PriceOfMaterial::class;

    protected string $title = 'Цены по материалам';

    protected string $column = 'material';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Тип', 'type'),
            Text::make('Материал', 'material'),
            Number::make('Цена за метр', 'price_per_meter'),
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
                Text::make('Материал', 'material'),
                Text::make('Тип', 'type'),
                Number::make('Цена за метр', 'price_per_meter'),
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
            Text::make('Материал', 'material'),
            Text::make('Тип', 'type'),
            Number::make('Цена за метр', 'price_per_meter'),
        ];
    }

    /**
     * @param PriceOfMaterial $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'material' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price_per_meter' => 'required|numeric|min:0',
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Тип', 'type'),
            Text::make('Материал', 'material'),
        ];
    }
}
