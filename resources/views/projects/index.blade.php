@extends('layouts.all')

@section('main')
    <section class="section section--portfolio">
        <div class="container">
            <x-breadcrumbs.main title="Услуги нашей компании"></x-breadcrumbs.main>
            <div class="section__header">
                <h2 class="section__title __left">Проекты домов
                    @if(request()->has('page') && request()->get('page') > 1)
                        <span class="section__page">— страница {{ request()->get('page') }}</span>
                    @endif
                </h2>
                <p class="section__subtitle __left">Представляем Вашему вниманию каталог проектов домов доступных для заказа</p>
            </div>

            <div class="projects-section__grid">
                @foreach ($projects as $item)
                    <x-cards.project :item="$item" />
                @endforeach
            </div>

            <x-pagination :tovars="$projects"></x-pagination>
        </div>
    </section>

@endsection

