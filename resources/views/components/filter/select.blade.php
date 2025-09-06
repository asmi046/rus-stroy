<div class="filter-form__group">
    <label for="{{ $name }}" class="filter-form__label">{{ $title }}</label>
    <select name="{{ $name }}" id="{{ $name }}" class="filter-form__select">
        <option value="%" {{ request($name) == '%' ? 'selected' : '' }}>Не важно</option>
        @foreach ($values as $key => $val)
            <option value="{{ $val['name'] }}" @selected(request($name) == $val['name'])>{{ $val['name'] }}</option>
        @endforeach
    </select>
</div>
