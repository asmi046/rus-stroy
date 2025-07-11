@extends('layouts.all')

@section('main')
    <section class="section section--portfolio">
        <div class="container">
            <x-breadcrumbs.main title="Услуги нашей компании"></x-breadcrumbs.main>
            <div class="section__header">
                <h2 class="section__title __left">Дополниельные услуги</h2>
                <p class="section__subtitle __left">Наша компания занимается не только строительством коттеджей но и оказывает сопуствующе услуги </p>
            </div>


                <div class="services-grid">
                    @foreach ($services as $item)
                        <x-cards.service :item="$item" />
                    @endforeach
                </div>

                {{-- <div class="services-grid">
                    <div class="service-card">
                        <div class="service-card__image-wrapper">
                            <img src="{{ asset('img/hometype/h2.png') }}" alt="Дополнительная услуга" class="service-card__image">
                            <div class="service-card__overlay"></div>
                        </div>
                        <h3 class="service-card__title">Дополнительная услуга</h3>
                    </div>

                    <div class="service-card">
                        <div class="service-card__image-wrapper">
                            <img src="{{ asset('img/hometype/h2.png') }}" alt="Дополнительная услуга" class="service-card__image">
                            <div class="service-card__overlay"></div>
                        </div>
                        <h3 class="service-card__title">Дополнительная услуга</h3>
                    </div>

                    <div class="service-card">
                        <div class="service-card__image-wrapper">
                            <img src="{{ asset('img/hometype/h2.png') }}" alt="Дополнительная услуга" class="service-card__image">
                            <div class="service-card__overlay"></div>
                        </div>
                        <h3 class="service-card__title">Дополнительная услуга</h3>
                    </div>

                    <div class="service-card">
                        <div class="service-card__image-wrapper">
                            <img src="{{ asset('img/hometype/h2.png') }}" alt="Дополнительная услуга" class="service-card__image">
                            <div class="service-card__overlay"></div>
                        </div>
                        <h3 class="service-card__title">Дополнительная услуга</h3>
                    </div>

                    <div class="service-card">
                        <div class="service-card__image-wrapper">
                            <img src="{{ asset('img/hometype/h2.png') }}" alt="Дополнительная услуга" class="service-card__image">
                            <div class="service-card__overlay"></div>
                        </div>
                        <h3 class="service-card__title">Дополнительная услуга</h3>
                    </div>

                    <div class="service-card">
                        <div class="service-card__image-wrapper">
                            <img src="{{ asset('img/hometype/h2.png') }}" alt="Дополнительная услуга" class="service-card__image">
                            <div class="service-card__overlay"></div>
                        </div>
                        <h3 class="service-card__title">Дополнительная услуга</h3>
                    </div>
                </div> --}}




        </div>
    </section>

@endsection

