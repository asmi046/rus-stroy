@extends('layouts.all')

@section('main')
    <section class="section section--page-header">
        <div class="container">
            <x-breadcrumbs.main :title="$project->title"></x-breadcrumbs.main>
            <div class="section__header">
                <h2 class="section__title __left">{{$project->title}}</h2>
            </div>

        </div>
    </section>

@endsection

