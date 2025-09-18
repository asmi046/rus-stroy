@extends('layouts.all')

@section('main')
    <section class="section section--page-header">
        <div class="container text_styles">

            <x-breadcrumbs.main :title="$building->title"></x-breadcrumbs.main>
            <x-header-mini :item="$building" />
            <x-filter.project-filter :sizes="$sizes" :const-type="$type" />


            <div class="projects-section__grid">
                @foreach ($projects as $item)
                    <x-cards.project :item="$item" />
                @endforeach
            </div>

            <x-short-project-selector></x-short-project-selector>

            <x-pagination :tovars="$projects"></x-pagination>

        </div>
    </section>

    <x-main.cases-section />
    <x-main.steps-section />
    <x-main.faq-section />
@endsection

