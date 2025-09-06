<div class="filter-form__group">
    <label :for="$name" class="filter-form__label">{{ $title }}</label>
    <select disabled :name="$name" :id="$name" class="filter-form__select">
        <option value="{{ $values['name'] }}" selected>{{ $values['name'] }}</option>
    </select>
</div>
