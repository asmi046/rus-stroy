<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\City;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Switcher;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<City>
 */
class CityResource extends ModelResource
{
    protected string $model = City::class;

    protected string $title = 'Города';



    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Наименование', 'name'),
            Text::make('Поддомен', 'slug'),
            Switcher::make('По умолчанию', 'is_default')
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
                Switcher::make('По умолчанию', 'is_default'),
                Number::make('Порядок сортировки', 'order'),
                Text::make('Наименование', 'name'),
                Text::make('Поддомен', 'slug'),
                Text::make('Телефон', 'phone'),
                Text::make('Адрес', 'address'),
                Text::make('Юридическое лицо', 'ul'),
                Text::make('Родительный падеж', 'rp'),
                Text::make('Предложный падеж', 'pp'),
                Text::make('Дательный падеж', 'dp'),

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
            Switcher::make('По умолчанию', 'is_default'),
            Number::make('Порядок сортировки', 'order'),
            Text::make('Наименование', 'name'),
            Text::make('Поддомен', 'slug'),

            Text::make('Телефон', 'phone'),
            Text::make('Адрес', 'address'),
            Text::make('Юридическое лицо', 'ul'),

            Text::make('Родительный падеж', 'rp'),
            Text::make('Предложный падеж', 'pp'),
            Text::make('Дательный падеж', 'dp'),
        ];
    }

    /**
     * @param City $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'name' => ['required'],
            'rp' => ['required'],
            'pp' => ['required'],
        ];
    }
}
