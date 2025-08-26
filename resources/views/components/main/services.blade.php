<section class="services-main-section">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Строительные услуги в {!! get_city_text('[city|pp]') !!}</h2>
            <p class="section__subtitle">Выберите необходимую Вам услугу</p>
        </div>

        <div class="services-grid">
            @foreach ($services as $item)
                <x-cards.service :item="$item" />
            @endforeach
        </div>

        <div class="section_bottom_control">
            <a href="{{ route('services') }}" class="button">Смотреть все услуги</a>
        </div>

    </div>
</section>
