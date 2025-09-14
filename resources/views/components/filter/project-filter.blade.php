<div id="toggle_app" class="filter-section">
    <toggle-wrapper button-text="Фильтры для выбора проектов">
        <form class="filter-form" action="{{ url()->current() }}" method="GET">
        <div class="filter-form__row">
            @if ($const_type)
                <x-filter.select-constant name="stype" title="Тип" :values="$const_type" />
            @else
                <x-filter.select name="stype" title="Тип" :values="$stype" />
            @endif

            @if ($const_material)
                <x-filter.select-constant name="wall_material" title="Материал" :values="$const_material" />
            @else
                <x-filter.select name="wall_material" title="Материал" :values="$wall_materials" />
            @endif


            <x-filter.select name="floors" title="Количество этажей" :values="$floors" />


            <div class="filter-form__group">
                <label class="filter-form__label">Площадь, м²</label>
                <div class="filter-form__range">
                    <input value="{{ request('area_from') ?? '' }}" type="number" name="area_from" placeholder="от" class="filter-form__input" min="0">
                    <span class="filter-form__separator">—</span>
                    <input value="{{ request('area_to') ?? '' }}" type="number" name="area_to" placeholder="до" class="filter-form__input" min="0">
                </div>
            </div>

            <div class="filter-form__group">
                <label for="extension" class="filter-form__label">Пристройка</label>
                <select name="extension" id="extension" class="filter-form__select">
                    <option value="%" {{ request('extension') == '%' ? 'selected' : '' }}>Не важно</option>
                    <option value="yes" {{ request('extension') == 'yes' ? 'selected' : '' }}>Есть</option>
                    <option value="no" {{ request('extension') == 'no' ? 'selected' : '' }}>Нет</option>
                </select>
            </div>




        </div>
        <div class="filter-form__row filter-form__row_full">
            <div class="filter-form__group">
                <label for="size" class="filter-form__label">Размер</label>
                <div class="filter-form__radio-group" id="size">
                    <div class="showed_sizes">
                        <label for="size-all">
                            <input type="radio" checked name="size" id="size-all" value="%" {{ request('size') == '%' ? 'checked' : '' }}>
                            <span>Все размеры</span>
                        </label>

                        @for ($i = 0; $i < (count($sizes) < 10 ? count($sizes) : 10); $i++)
                            <label for="size-{{ Str::slug($sizes[$i]->plan_dimensions) }}">
                                <input type="radio" name="size" id="size-{{ Str::slug($sizes[$i]->plan_dimensions) }}" value="{{ $sizes[$i]->plan_dimensions }}" {{ request('size') == $sizes[$i]->plan_dimensions ? 'checked' : '' }}>
                                <span>{{ $sizes[$i]->plan_dimensions }}</span>
                            </label>
                        @endfor
                    </div>

                    @if (count($sizes) > 10)

                        <details class="size_all">
                            <summary>Другие размеры ...</summary>
                            <div class="response">
                                @for ($i = 10; $i < count($sizes); $i++)
                                    <label for="size-{{ Str::slug($sizes[$i]->plan_dimensions) }}">
                                        <input type="radio" name="size" id="size-{{ Str::slug($sizes[$i]->plan_dimensions) }}" value="{{ $sizes[$i]->plan_dimensions }}" {{ request('size') == $sizes[$i]->plan_dimensions ? 'checked' : '' }}>
                                        <span>{{ $sizes[$i]->plan_dimensions }}</span>
                                    </label>
                                @endfor
                            </div>
                        </details>
                    @endif
                </div>
            </div>
        </div>
            <div class="filter-form__row filter-form__row_full">
                <div class="filter-form__group">
                <div class="filter-form__buttons">
                    <button
                        type="submit"
                        class="filter-form__submit button"
                        title="Применить фильтр"
                        >Применить фильтр</button>
                    <a
                        href="{{ url()->current() }}"
                        class="filter-form__reset button button-outline"
                        title="Сбросить фильтр"
                        >Сбросить фильтр</a>
                </div>
            </div>
            </div>
        </form>
    </toggle-wrapper>
</div>
