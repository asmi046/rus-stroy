@extends('layouts.all')

@section('main')
    <section class="section section--portfolio">
        <div class="container">
            <x-breadcrumbs.main title="Услуги нашей компании"></x-breadcrumbs.main>
            <div class="section__header">
                <h2 class="section__title __left">Дополниельные строительные услуги</h2>
                <p class="section__subtitle __left">Наша компания занимается не только строительством коттеджей и бань в {!! get_city_text('[city|pp]') !!} но и оказывает сопуствующе услуги </p>
            </div>


                <div class="services-grid">
                    @foreach ($services as $item)
                        <x-cards.service :item="$item" />
                    @endforeach
                </div>

        </div>
    </section>

@endsection

