<a href="{{ route('portfolio_page', $item->slug) }}" class="case-card">
    <div class="case-card__image-wrapper">
        <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}" class="case-card__image">
    </div>
    <div class="case-card__info">
        <div class="case-card__params">
            <div class="case-card__param">
                <span class="case-card__param-label">Тип:</span>
                <span class="case-card__param-value">{{ $item->type }}</span>
            </div>
            <div class="case-card__param">
                <span class="case-card__param-label">Количество этажей:</span>
                <span class="case-card__param-value">{{ $item->floors }}</span>
            </div>
        </div>

        <p class="case-card__text">{{ $item->title }}</p>

    </div>
</a>
