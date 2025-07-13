<section class="cases-section">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Реализованные проекты</h2>
            <p class="section__subtitle">Множество довольных клиентов уже построили свой дом мечты</p>
        </div>

        <div class="cases-section__grid">
            @foreach ($cases as $item)
                <x-cards.portfolio :item="$item" />
            @endforeach
        </div>

        <div class="section_bottom_control">
            <a href="{{ route('portfolio') }}" class="button">Все портфолио</a>
        </div>
    </div>
</section>
