@extends('layouts.all')

@section('main')
    <section class="section section--portfolio">
        <div class="container">
            <x-breadcrumbs.main :title="get_city_text('Строительство в [city|pp]')"></x-breadcrumbs.main>
            <div class="section__header">
                <h2 class="section__title __left">{!! get_city_text("Строительство в [city|pp]") !!}</h2>
                <p class="section__subtitle __left">Услуги по строительству под ключ в {!! get_city_text("[city|pp]") !!}</p>
            </div>

            <x-filter.project-filter :sizes="$sizes" />

            <div class="projects-section__grid">
                @foreach ($projects as $item)
                    <x-cards.project :item="$item" />
                @endforeach
            </div>
        </div>
    </section>

    <x-building-all
        title="Строительство под ключ в {!! get_city_text('[city|pp]') !!}"
        subtitle="Проекты гаражей, беседок домов под ключ в {!! get_city_text('[city|pp]') !!}">
    </x-building-all>

    <x-main.cases-section />
    <x-main.steps-section />
    <x-main.faq-section />

@endsection

