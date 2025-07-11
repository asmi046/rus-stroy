@extends('layouts.all')

@section('main')
    <section class="section section--portfolio">
        <div class="container">
            <x-breadcrumbs.main title="Портфолио нашей компании"></x-breadcrumbs.main>
            <div class="section__header">
                <h2 class="section__title __left">Портфолио</h2>
                <p class="section__subtitle __left">Дома и коттеджи построенные нашей компанией</p>
            </div>

            <div class="cases-section__grid">
                @foreach ($projects as $item)
                    <x-cards.portfolio :item="$item" />
                @endforeach
            </div>
        </div>
    </section>

@endsection

