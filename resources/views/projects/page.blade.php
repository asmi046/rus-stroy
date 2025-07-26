@extends('layouts.all')

@section('main')
    <section class="section section--page-header">
        <div class="container">
            <x-breadcrumbs.main :title="$project->title"></x-breadcrumbs.main>
            <div class="section__header">
                <h2 class="section__title __left">{{$project->title}}</h2>
            </div>

        </div>
    </section>

    <section class="section project-details">
        <div class="container">
            <div class="project-details__wrapper">
                <!-- Левая колонка -->
                <div class="project-details__left">
                    <!-- Слайдер -->
                    <div class="project-slider">
                        <swiper-container
                            class="project-swiper"
                            pagination="true"
                            pagination-clickable="true"
                            space-between="30"
                            slides-per-view="1"
                        >
                            @if($project->gallery)
                                @foreach($project->gallery as $image)
                                    <swiper-slide>
                                        <a data-fslightbox="project-page-gallery" href="{{ Storage::url($image) }}" >
                                            <img src="{{ Storage::url($image) }}" alt="{{ $project->title }}" class="project-slider__image">
                                        </a>

                                    </swiper-slide>
                                @endforeach
                            @endif
                        </swiper-container>
                    </div>

                    <!-- Блок с параметрами -->
                    <div class="dotted-grid">
                        <div class="dotted-item">
                            <span class="dotted-item__name">Количество этажей</span>
                            <span class="dotted-item__dots"></span>
                            <span class="dotted-item__value">{{ $project->floors }}</span>
                        </div>
                        <div class="dotted-item">
                            <span class="dotted-item__name">Общая площадь</span>
                            <span class="dotted-item__dots"></span>
                            <span class="dotted-item__value">{{ $project->total_area }} м²</span>
                        </div>
                        @if($project->wall_material)
                        <div class="dotted-item">
                            <span class="dotted-item__name">Материал стен</span>
                            <span class="dotted-item__dots"></span>
                            <span class="dotted-item__value">{{ $project->wall_material }}</span>
                        </div>
                        @endif
                        @if($project->foundation)
                        <div class="dotted-item">
                            <span class="dotted-item__name">Фундамент</span>
                            <span class="dotted-item__dots"></span>
                            <span class="dotted-item__value">{{ $project->foundation }}</span>
                        </div>
                        @endif
                        @if($project->ceiling_height)
                        <div class="dotted-item">
                            <span class="dotted-item__name">Высота потолка</span>
                            <span class="dotted-item__dots"></span>
                            <span class="dotted-item__value">{{ $project->ceiling_height }} м</span>
                        </div>
                        @endif
                        @if($project->flooring)
                        <div class="dotted-item">
                            <span class="dotted-item__name">Перекрытия</span>
                            <span class="dotted-item__dots"></span>
                            <span class="dotted-item__value">{{ $project->flooring }}</span>
                        </div>
                        @endif
                        <div class="dotted-item">
                            <span class="dotted-item__name">Мансарда</span>
                            <span class="dotted-item__dots"></span>
                            <span class="dotted-item__value">{{ $project->mansard ? 'Да' : 'Нет' }}</span>
                        </div>
                        @if($project->plan_dimensions)
                        <div class="dotted-item">
                            <span class="dotted-item__name">Габариты для плана</span>
                            <span class="dotted-item__dots"></span>
                            <span class="dotted-item__value">{{ $project->plan_dimensions }}</span>
                        </div>
                        @endif
                        @if($project->extension)
                        <div class="dotted-item">
                            <span class="dotted-item__name">Пристройка</span>
                            <span class="dotted-item__dots"></span>
                            <span class="dotted-item__value">{{ $project->extension }}</span>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Правая колонка -->
                <div class="project-details__right">
                    <!-- Блок с ценой -->
                    <div class="price-block">
                        <select class="price-block__select">
                            <option value="korobka">Коробка</option>
                            <option value="tepliy-kontur">Теплый контур</option>
                            <option value="chernovaya">Черновая отделка</option>
                            <option value="pod-kluch">Под ключ</option>
                        </select>

                        <p class="price-block__comment">
                            Цена указана за базовую комплектацию дома без учета фундамента и отделочных работ. Окончательная стоимость зависит от выбранных материалов.
                        </p>

                        <div class="price-block__prices">
                            <div class="price-block__old-price">{{ number_format($project->start_price * 1.2, 0, '', ' ') }} ₽</div>
                            <div class="price-block__current-price">от {{ number_format($project->start_price, 0, '', ' ') }} ₽</div>
                        </div>
                    </div>

                    <!-- Блок с кнопками -->
                    <div class="action-buttons">
                        <button class="button">Получить смету</button>
                        <button class="button button-orange">Получить консультацию</button>
                    </div>

                    <!-- Блок про ипотеку -->
                    <div class="mortgage-block">
                        <div class="mortgage-block__content">
                            <div class="mortgage-block__text">
                                <div class="mortgage-block__title">Доступна Ипотека:</div>
                                <div class="mortgage-block__rate">от 6 %</div>
                            </div>
                            <button class="mortgage-block__button">подробнее</button>
                        </div>
                    </div>

                    <!-- Блок с описанием -->
                    <div class="description-block text_styles">
                        {!! $project->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

