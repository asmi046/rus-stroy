@extends('layouts.all')

@section('main')
    <section class="section section--page-header">
        <div class="container text_styles">
            <x-breadcrumbs.main :title="$project->title"></x-breadcrumbs.main>
            <div class="section__header">
                <h2 class="section__title __left">{{$project->title}}</h2>
            </div>

            <div class="portfolio-content">
                <div class="portfolio-content__main">
                    <div class="portfolio-content__gallery">
                        <swiper-container class="portfolio-slider" pagination="true" navigation="false" loop="true">
                            @if($project->gallery)
                                @foreach($project->gallery as $image)
                                    <swiper-slide>
                                        <img src="{{ Storage::url($image) }}" alt="{{ $project->title }}" class="portfolio-slider__image">
                                    </swiper-slide>
                                @endforeach
                            @else
                                <swiper-slide>
                                    <img src="{{ Storage::url($project->img) }}" alt="{{ $project->title }}" class="portfolio-slider__image">
                                </swiper-slide>
                            @endif
                        </swiper-container>
                    </div>

                    <div class="portfolio-content__params">
                        <div class="dotted-grid">
                            <div class="dotted-item">
                                <span class="dotted-item__name">Тип</span>
                                <span class="dotted-item__dots"></span>
                                <span class="dotted-item__value">{{ $project->type ?? 'Не указано' }}</span>
                            </div>
                            <div class="dotted-item">
                                <span class="dotted-item__name">Количество этажей</span>
                                <span class="dotted-item__dots"></span>
                                <span class="dotted-item__value">{{ $project->floors ?? 'Не указано' }}</span>
                            </div>
                            <div class="dotted-item">
                                <span class="dotted-item__name">Место нахождения</span>
                                <span class="dotted-item__dots"></span>
                                <span class="dotted-item__value">{{ $project->location ?? 'Не указано' }}</span>
                            </div>

                            <div class="dotted-item">
                                <span class="dotted-item__name">Материал стен</span>
                                <span class="dotted-item__dots"></span>
                                <span class="dotted-item__value">{{ $project->wall_material ?? 'Не указано' }}</span>
                            </div>
                            <div class="dotted-item">
                                <span class="dotted-item__name">Облицовка</span>
                                <span class="dotted-item__dots"></span>
                                <span class="dotted-item__value">{{ $project->cladding ?? 'Не указано' }}</span>
                            </div>
                            <div class="dotted-item">
                                <span class="dotted-item__name">Фундамент</span>
                                <span class="dotted-item__dots"></span>
                                <span class="dotted-item__value">{{ $project->foundation ?? 'Не указано' }}</span>
                            </div>
                            <div class="dotted-item">
                                <span class="dotted-item__name">Кровля</span>
                                <span class="dotted-item__dots"></span>
                                <span class="dotted-item__value">{{ $project->roofing ?? 'Не указано' }}</span>
                            </div>
                            <div class="dotted-item">
                                <span class="dotted-item__name">Перекрытия</span>
                                <span class="dotted-item__dots"></span>
                                <span class="dotted-item__value">{{ $project->flooring ?? 'Не указано' }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="portfolio-content__description text_styles">
                    {!! $project->description ?? '<p>Описание не указано</p>' !!}
                </div>
            </div>


        </div>
    </section>

@endsection

