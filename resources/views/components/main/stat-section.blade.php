
<section class="stats-section">
    <div class="container">


        <div class="stats-section__grid">
            @foreach ($statistics as $stat)
                <div class="stats-item">
                    <div class="stats-item__number">{{ $stat->value }}</div>
                    <div class="stats-item__text">
                        {!! $stat->title !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
