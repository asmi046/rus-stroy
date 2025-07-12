<a href="{{ route('materials_page', $item->slug) }}" class="material-card">
    <div class="material-card__image-wrapper">
        <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}" class="material-card__image">
        <div class="material-card__overlay"></div>
    </div>
    <div class="material-card__info">
        <div class="material-card__name">{{ $item->title }}</div>
        <div class="material-card__price">от {{ intval($item->start_price) }} ₽</div>
    </div>
</a>
