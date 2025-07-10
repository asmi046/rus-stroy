@extends('layouts.all')

@php
    $title = (empty($page->seo_title))?$page->title:$page->seo_title;
    $description = (empty($page->seo_description))?$page->title:$page->seo_description;;
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <section class="section section--page-header">
        <div class="container text_styles">
            <x-breadcrumbs.main :title="$page->title"></x-breadcrumbs.main>

            <div class="section__header">
                <h1 class="section__title __left">{{$page->title}}</h1>
            </div>

            {!! $page->description !!}

        </div>
    </section>
@endsection

