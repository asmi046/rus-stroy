@extends('layouts.all')

@section('main')
    <section class="section section--page-header">
        <div class="container text_styles">
            <x-breadcrumbs.main :title="$page->title"></x-breadcrumbs.main>

            <div class="section__header">
                <h1 class="section__title __left">{{$page->title}}</h1>
            </div>

            {!! $page->description !!}

            <div class="ipoteka-info-section">
                <div class="ipoteka-info-section__container">
                    <div class="ipoteka-info-section__block ipoteka-info-section__block--left">
                        <div class="ipoteka-info-section__icon">
                            <svg class="sprite_icon">
                                <use xlink:href="#calendar"></use>
                            </svg>
                        </div>
                        <div class="ipoteka-info-section__content">
                            <div class="ipoteka-info-section__period">
                                До <span class="ipoteka-info-section__number">30</span> лет
                            </div>
                            <div class="ipoteka-info-section__text">
                                Первоначальный взнос от 10%
                            </div>
                        </div>
                    </div>

                    <div class="ipoteka-info-section__block ipoteka-info-section__block--right">
                        <div class="ipoteka-info-section__icon">
                            <svg class="sprite_icon">
                                <use xlink:href="#bank"></use>
                            </svg>
                        </div>
                        <div class="ipoteka-info-section__content">
                            <h3 class="ipoteka-info-section__title">Ипотека до</h3>
                            <div class="ipoteka-info-section__amount">
                                5 000 000 ₽
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection

