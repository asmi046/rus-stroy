<section class="home-materi-section">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Все технологии строительства</h2>
            <p class="section__subtitle">Выберите подходящую технологию и материалы для строительства дома в {!! get_city_text('[city|pp]') !!}</p>
        </div>

        <div class="home-materi-section__grid">
            @foreach ($materials as $item)
                <x-cards.material :item="$item"></x-cards.material>
            @endforeach
        </div>

        <div class="home-materi-section__button">
            <a href="{{ route('materials')}}" class="button">Все варианты</a>
        </div>
    </div>
</section>
