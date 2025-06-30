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

<section class="projects-section">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Проекты и цены</h2>
            <p class="section__subtitle">Выберите готовый дом</p>
        </div>

        <div class="projects-section__grid">
            <div class="project-card">
                <div class="project-card__image-wrapper">
                    <img src="img/test_project.jpg" alt="Проект 1" class="project-card__image">
                    <div class="project-card__overlay">
                        <h3 class="project-card__name">ПРОЕКТ 1</h3>
                    </div>
                </div>

                <div class="project-card__info">
                    <div class="project-card__params">
                        <div class="project-card__param">
                            <span class="project-card__param-label">Тип:</span>
                            <span class="project-card__param-value">Дом</span>
                        </div>
                        <div class="project-card__param">
                            <span class="project-card__param-label">Этажность:</span>
                            <span class="project-card__param-value">2</span>
                        </div>
                    </div>

                    <div class="project-card__details">
                        <div class="project-card__detail">
                            <span class="project-card__detail-value">0x0 м</span>
                            <span class="project-card__detail-label">20115 м2</span>
                        </div>
                        <div class="project-card__detail">
                            <span class="project-card__detail-value">Мансарда:</span>
                            <span class="project-card__detail-label">Нет</span>
                        </div>
                        <div class="project-card__detail">
                            <span class="project-card__detail-value">Материал:</span>
                            <span class="project-card__detail-label">Керамзитоблок</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-card__image-wrapper">
                    <img src="img/test_project.jpg" alt="Проект 2" class="project-card__image">
                    <div class="project-card__overlay">
                        <h3 class="project-card__name">ПРОЕКТ 2</h3>
                    </div>
                </div>

                <div class="project-card__info">
                    <div class="project-card__params">
                        <div class="project-card__param">
                            <span class="project-card__param-label">Тип:</span>
                            <span class="project-card__param-value">Дом</span>
                        </div>
                        <div class="project-card__param">
                            <span class="project-card__param-label">Этажность:</span>
                            <span class="project-card__param-value">2</span>
                        </div>
                    </div>

                    <div class="project-card__details">
                        <div class="project-card__detail">
                            <span class="project-card__detail-value">0x0 м</span>
                            <span class="project-card__detail-label">20115 м2</span>
                        </div>
                        <div class="project-card__detail">
                            <span class="project-card__detail-value">Мансарда:</span>
                            <span class="project-card__detail-label">Нет</span>
                        </div>
                        <div class="project-card__detail">
                            <span class="project-card__detail-value">Материал:</span>
                            <span class="project-card__detail-label">Керамзитоблок</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-card__image-wrapper">
                    <img src="img/test_project.jpg" alt="Проект 3" class="project-card__image">
                    <div class="project-card__overlay">
                        <h3 class="project-card__name">ПРОЕКТ 3</h3>
                    </div>
                </div>

                <div class="project-card__info">
                    <div class="project-card__params">
                        <div class="project-card__param">
                            <span class="project-card__param-label">Тип:</span>
                            <span class="project-card__param-value">Дом</span>
                        </div>
                        <div class="project-card__param">
                            <span class="project-card__param-label">Этажность:</span>
                            <span class="project-card__param-value">2</span>
                        </div>
                    </div>

                    <div class="project-card__details">
                        <div class="project-card__detail">
                            <span class="project-card__detail-value">0x0 м</span>
                            <span class="project-card__detail-label">20115 м2</span>
                        </div>
                        <div class="project-card__detail">
                            <span class="project-card__detail-value">Мансарда:</span>
                            <span class="project-card__detail-label">Нет</span>
                        </div>
                        <div class="project-card__detail">
                            <span class="project-card__detail-value">Материал:</span>
                            <span class="project-card__detail-label">Керамзитоблок</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="stats-section">
    <div class="container">
        <div class="stats-section__grid">
            <div class="stats-item">
                <div class="stats-item__number">40+</div>
                <div class="stats-item__text">
                    построенных<br>
                    объектов
                </div>
            </div>
            
            <div class="stats-item">
                <div class="stats-item__number">5</div>
                <div class="stats-item__text">
                    лет<br>
                    в строительной<br>
                    сфере
                </div>
            </div>
            
            <div class="stats-item">
                <div class="stats-item__number">5</div>
                <div class="stats-item__text">
                    лет<br>
                    гарантия на<br>
                    услуги
                </div>
            </div>
            
            <div class="stats-item">
                <div class="stats-item__number">1700+</div>
                <div class="stats-item__text">
                    м2<br>
                    введено<br>
                    жилья
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

