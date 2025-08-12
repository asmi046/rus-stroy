<a href="{{ route('services_page', $item->slug) }}"
    class="service-card"
    title="{{ get_city_text($item->title) }}"
    >
    <div class="service-card__image-wrapper">
        <img src="{{ Storage::url($item->img) }}" alt="{{ get_city_text($item->title) }}" class="service-card__image">
        <div class="service-card__overlay"></div>
    </div>
    <h3 class="service-card__title">{{ get_city_text($item->title) }}</h3>
</a>
