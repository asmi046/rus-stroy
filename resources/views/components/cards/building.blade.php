<a href="{{ route('building_page', $item->slug) }}"
    class="material-card"
    title="{!! get_city_text($item->title) !!}"
    >
    <div class="material-card__image-wrapper">
        <img src="{{ Storage::url($item->img) }}" alt="{{ get_city_text($item->card_title) }}" class="material-card__image">
        <div class="material-card__overlay"></div>
    </div>
    <div class="material-card__info">
        <div class="material-card__name">{{ get_city_text($item->title) }}</div>
        @if ($item->start_price)
            <div class="material-card__price">от {{ intval($item->start_price) }} ₽</div>
        @endif
    </div>
</a>
