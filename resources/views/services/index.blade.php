@extends('layouts.all')

@section('main')
    <section class="section section--portfolio">
        <div class="container">
            <x-breadcrumbs.main title="Услуги нашей компании"></x-breadcrumbs.main>
            <div class="section__header">
                <h2 class="section__title __left">Дополниельные строительные услуги</h2>
                <p class="section__subtitle __left">Наша компания занимается не только строительством коттеджей и бань в {!! get_city_text('[city|pp]') !!} но и оказывает сопуствующе услуги </p>
            </div>

            <div class="services-pointer-list">
                @foreach (array_keys($services) as $item)
                    <a href="#part_{{ Str::slug($item) }}" class="services-pointer-list__link">{{ $item }}</a>
                @endforeach
            </div>

            @foreach ($services as $group => $items)
                <h2 id="part_{{ Str::slug($group) }}" class="services-grid__title">{{ $group }}:</h2>
                <div class="services-grid">
                    @foreach ($items as $item)
                        <x-cards.service :item="(object) $item" />
                    @endforeach
                </div>
            @endforeach


        </div>
    </section>

@endsection

