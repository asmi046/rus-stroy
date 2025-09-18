<section class="section section--portfolio">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">{{ $title }}</h2>
            @if ($subtitle)
                <p class="section__subtitle">{{ $subtitle }}</p>
            @endif
        </div>

        <div class="home-materi-section__grid">
                @foreach ($building as $item)
                    <x-cards.building :item="$item"></x-cards.building>
                @endforeach
        </div>
    </div>
</section>
