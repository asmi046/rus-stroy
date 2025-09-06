@extends('layouts.all')

@section('main')
    <section class="section section--page-header">
        <div class="container text_styles">

            <x-breadcrumbs.main :title="$material->title"></x-breadcrumbs.main>
            <x-header-mini :item="$material" />



            <div class="projects-section__grid">
                @foreach ($projects as $item)
                    <x-cards.project :item="$item" />
                @endforeach
            </div>

            <x-pagination :tovars="$projects"></x-pagination>

        </div>
    </section>

@endsection

