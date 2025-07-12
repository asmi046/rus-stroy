@extends('layouts.all')

@section('main')
    <section class="section section--page-header">
        <div class="container text_styles">
            <x-breadcrumbs.main :title="$service->title"></x-breadcrumbs.main>

            <!-- Верхний блок с баннером -->
            <div class="service-banner">
                <img src="{{ Storage::url($service->img) }}" alt="{{ $service->title }}" class="service-banner__image">
                <div class="service-banner__overlay"></div>
                <div class="service-banner__content">
                    <h1 class="service-banner__title">{{$service->title}}</h1>
                    <p class="service-banner__subtitle">{!! $service->short_description !!}</p>
                    <div class="service-banner__buttons">
                        <a href="#" class="button">Задать вопрос</a>
                        <a href="#" class="button button-orange">Узнать цену</a>
                    </div>
                </div>
            </div>

            <!-- Центральный блок с описанием -->
            <div class="service-description text_styles">
                {!! $service->description !!}
            </div>

            <!-- Нижний блок с галереей -->
            <div class="service-gallery-section">
                <h2 class="service-gallery__title">Галерея выполненных работ</h2>
                <div class="service-gallery">
                    <div class="service-gallery__item">
                        <img src="{{ asset('img/hometype/h2.png') }}" alt="Работа 1" class="service-gallery__image">
                    </div>
                    <div class="service-gallery__item">
                        <img src="{{ asset('img/hometype/h2.png') }}" alt="Работа 2" class="service-gallery__image">
                    </div>
                    <div class="service-gallery__item">
                        <img src="{{ asset('img/hometype/h2.png') }}" alt="Работа 3" class="service-gallery__image">
                    </div>
                    <div class="service-gallery__item">
                        <img src="{{ asset('img/hometype/h2.png') }}" alt="Работа 4" class="service-gallery__image">
                    </div>
                    <div class="service-gallery__item">
                        <img src="{{ asset('img/hometype/h2.png') }}" alt="Работа 5" class="service-gallery__image">
                    </div>
                    <div class="service-gallery__item">
                        <img src="{{ asset('img/hometype/h2.png') }}" alt="Работа 6" class="service-gallery__image">
                    </div>
                </div>
            </div>



        </div>
    </section>

@endsection

