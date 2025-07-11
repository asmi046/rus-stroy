@extends('layouts.all')

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

    <x-main.whay-section />

    <x-main.stat-section />

    <section class="work-step-section">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title">Способы оплаты домов</h2>
                <p class="section__subtitle">Выберите способ, удобный для Вас</p>
            </div>

            <x-pay-methods />
        </div>
    </section>

    @endsection

