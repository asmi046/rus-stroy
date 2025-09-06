<a href="{{ route('materials_page', $item->slug) }}"
    class="material-card"
    title="{{ $item->card_title }} в {!! get_city_text('[city|pp]') !!}"
    >
    <div class="material-card__image-wrapper">
        <img src="{{ Storage::url($item->img) }}" alt="{{ get_city_text($item->card_title) }}" class="material-card__image">
        <div class="material-card__overlay"></div>
    </div>
    <div class="material-card__info">
        <div class="material-card__name">{{ get_city_text($item->card_title) }}</div>
        <div class="material-card__price">от {{ intval($item->start_price) }} ₽</div>
    </div>
</a>
