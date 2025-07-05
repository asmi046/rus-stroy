@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

<section class="main-section">
    <div class="container main-section__container">
        <div class="main-section__left">
            <div class="main-section__content">
                <h1 class="main-section__title">
                    Строительство домов<br>
                    и коттеджей под ключ<br>
                    в ЯНАО
                </h1>
                <ul class="main-section__list">
                    <li class="main-section__list-item">Без изменений цен в ходе строительства</li>
                    <li class="main-section__list-item">Качественные дома под ключ от 1,5 млн руб.</li>
                    <li class="main-section__list-item">Строительство домов с гарантией<br>и с оплатой по факту завершения</li>
                </ul>
                <a href="#" class="main-section__button button">Посмотреть проекты</a>
            </div>
        </div>
        <div class="main-section__right">
            <div class="main-section__offer main-section__offer--credit">
                <div class="main-section__offer-title">
                    Строительство домов <br><b>в кредит и ипотеку<br>от 6% годовых</b>
                </div>
                <a href="#" class="main-section__offer-button button button-orange">Узнать условия</a>
            </div>
            <div class="main-section__offer main-section__offer--gift">
                <div class="main-section__offer-title">
                    <b>Участок в подарок</b><br>
                    при заказе строительства<br>
                    дома от 200 м2 в Сургуте
                </div>
            </div>
        </div>
    </div>
</section>


<x-main.projects-section />
<x-main.stat-section />
<x-main.material-section />
<x-main.steps-section />
<x-main.cases-section />
<x-main.whay-section />


<section class="work-step-section">
    <div class="container" id="steps_app">
        <div class="section__header">
            <h2 class="section__title">Способы оплаты домов</h2>
            <p class="section__subtitle">Выберите способ, удобный для Вас</p>
        </div>

        <div class="payment-methods">
            <div class="payment-method">
                <div class="payment-method__icon">
                    <img src="{{ asset('img/icon/payment/pay_1.svg') }}" alt="Наличные">
                </div>
                <div class="payment-method__text">НАЛИЧНЫЕ</div>
            </div>

            <div class="payment-method">
                <div class="payment-method__icon">
                    <img src="{{ asset('img/icon/payment/pay_2.svg') }}" alt="Картой">
                </div>
                <div class="payment-method__text">КАРТОЙ</div>
            </div>

            <div class="payment-method">
                <div class="payment-method__icon">
                    <img src="{{ asset('img/icon/payment/pay_3.svg') }}" alt="Перевод">
                </div>
                <div class="payment-method__text">ПЕРЕВОД</div>
            </div>

            <div class="payment-method">
                <div class="payment-method__icon">
                    <img src="{{ asset('img/icon/payment/pay_4.svg') }}" alt="Кредит">
                </div>
                <div class="payment-method__text">КРЕДИТ</div>
            </div>

            <div class="payment-method">
                <div class="payment-method__icon">
                    <img src="{{ asset('img/icon/payment/pay_5.svg') }}" alt="Рассрочка">
                </div>
                <div class="payment-method__text">РАССРОЧКА</div>
            </div>

            <div class="payment-method">
                <div class="payment-method__icon">
                    <img src="{{ asset('img/icon/payment/pay_6.svg') }}" alt="По счёту">
                </div>
                <div class="payment-method__text">ПО СЧЁТУ</div>
            </div>
        </div>
    </div>
</section>




@endsection

