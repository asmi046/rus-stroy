@extends('layouts.all')

@section('main')
    <section class="section section--page-header">
        <div class="container text_styles">
            <x-breadcrumbs.main title="Часто задаваемые вопросы"></x-breadcrumbs.main>
            <div class="section__header">
                <h2 class="section__title __left">Часто задаваемые вопросы по строительству домов</h2>
            </div>

        <div class="faq faq_in_page">
            @foreach ($faq as $item)
                <x-cards.faq :item="$item" />
            @endforeach
        </div>

        </div>
    </section>

@endsection

