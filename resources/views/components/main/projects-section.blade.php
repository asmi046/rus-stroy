<section class="projects-section">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Проекты домов и цены в {!! get_city_text('[city|pp]') !!}</h2>
            <p class="section__subtitle">Выберите готовый дом</p>
        </div>

        <div class="projects-section__grid">
            @foreach ($projects as $item)
                <x-cards.project :item="$item" />
            @endforeach
        </div>

        <div class="section_bottom_control">
            <a href="{{ route('projects') }}" class="button">Смотреть все проекты</a>
        </div>

    </div>
</section>
