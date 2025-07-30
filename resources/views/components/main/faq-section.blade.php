<section class="work-step-section">
    <div class="container" id="steps_app">
        <div class="section__header">
            <h2 class="section__title">Часто задаваемые вопросы</h2>
            <p class="section__subtitle">Мы собрали наиболее частые вопросы которые задают наши клиенты при заказе строительства в {!! get_city_text('[city|pp]') !!}</p>
        </div>

        <div class="faq">
            @foreach ($questions as $item)
                <x-cards.faq :item="$item" />
            @endforeach
        </div>
    </div>
</section>
