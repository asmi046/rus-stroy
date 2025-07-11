@extends('layouts.all')


@section('main')
    <section class="section section--page-header">
        <div class="container text_styles">
            <x-breadcrumbs.main :title="$page->title"></x-breadcrumbs.main>

            <div class="section__header">
                <h1 class="section__title __left">{{$page->title}}</h1>
            </div>

            {!! $page->description !!}

            <x-pay-methods />
        </div>
    </section>
@endsection

