@extends('layouts.all')

@section('main')
    <section class="section section--portfolio">
        <div class="container">
            <x-breadcrumbs.main title="Материалы доступные для строительства"></x-breadcrumbs.main>
            <div class="section__header">
                <h2 class="section__title __left">Материалы для постройки дома</h2>
                <p class="section__subtitle __left">Выберите необходимый Вам материал и просмотрите проекты домов из этого материала</p>
            </div>

            <div class="home-materi-section__grid">
                @foreach ($materials as $item)
                    <x-cards.material :item="$item"></x-cards.material>
                @endforeach
            </div>
        </div>
    </section>

    <x-main.cases-section />
    <x-main.steps-section />
    <x-main.faq-section />

@endsection

