@extends('layouts.all')

@section('main')
    <section class="section section--page-header">
        <div class="container text_styles">
            <x-breadcrumbs.main :title="$page->title"></x-breadcrumbs.main>
            <div class="section__header">
                <h2 class="section__title __left">{{$page->title}}</h2>
            </div>

            {!! $page->description !!}
        </div>
    </section>

@endsection

