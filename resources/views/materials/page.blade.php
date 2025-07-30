@extends('layouts.all')

@section('main')
    <section class="section section--page-header">
        <div class="container text_styles">
            <x-breadcrumbs.main :title="$material->title"></x-breadcrumbs.main>
            <div class="section__header">
                <h2 class="section__title __left">{{$material->title}}</h2>
            </div>

            <div class="projects-section__grid">
                @foreach ($material->projects as $item)
                    <x-cards.project :item="$item" />
                @endforeach
            </div>

            <x-pagination :tovars="$material->projects()->paginate(15)"></x-pagination>

        </div>
    </section>

@endsection

