@extends('layouts.all')

@section('main')
    <section class="section section--portfolio">
        <div class="container">
            <x-breadcrumbs.main title="Проекты домов для строителства"></x-breadcrumbs.main>
            <div class="section__header">
                <h1 class="section__title __left">{{ get_city_text($title) }}
                    @if(request()->has('page') && request()->get('page') > 1)
                        <span class="section__page">— страница {{ request()->get('page') }}</span>
                    @endif
                </h1>
                <p class="section__subtitle __left">{{ get_city_text($subtitle) }}</p>
            </div>

            <x-filter.project-filter :sizes="$sizes" :const-type="$type" />

            <div class="projects-section__grid">
                @foreach ($projects as $item)
                    <x-cards.project :item="$item" />
                @endforeach
            </div>

            <x-pagination :tovars="$projects"></x-pagination>
        </div>
    </section>


    <x-main.cases-section />
    <x-main.steps-section />
    <x-main.whay-section />
    <x-main.faq-section />

@endsection

