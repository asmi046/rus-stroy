@extends('layouts.all')

@section('main')
    <section class="quiz_section">
        <div class="container">
            <div class="page_content">
                <div class="content">
                    <x-breadcrumbs.main title="Калькулятор"></x-breadcrumbs.main>
                    <div class="section__header">
                        <h1 class="section__title __left">Расчет стоимости строительства</h1>
                    </div>

                    <div id="quiz_app" class="quiz_wrapper">
                        <quiz></quiz>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

