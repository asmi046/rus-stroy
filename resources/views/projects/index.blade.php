@extends('layouts.all')

@section('main')
    <section class="section section--portfolio">
        <div class="container">
            <x-breadcrumbs.main title="Услуги нашей компании"></x-breadcrumbs.main>
            <div class="section__header">
                <h2 class="section__title __left">Проекты домов</h2>
                <p class="section__subtitle __left">Представляем Вашему вниманию каталог проектов домов доступных для заказа</p>
            </div>

            <div class="projects-section__grid">
                @foreach ($projects as $item)
                    <x-cards.project :item="$item" />
                @endforeach
            </div>
        </div>
    </section>

@endsection

