@extends('layouts.all')

@section('main')
    <section class="section section--page-header">
        <div class="container text_styles">
            <x-breadcrumbs.main :title="$service->title"></x-breadcrumbs.main>

            <x-header-mini :item="$service" />

            <!-- Центральный блок с описанием -->
            <div class="service-description text_styles">
                {!! get_city_text($service->description) !!}
            </div>

            @if ($service->gallery)
                <div class="service-gallery-section">
                    <h2 class="service-gallery__title">Галерея выполненных работ</h2>
                    <div class="service-gallery">
                        @foreach ($service->gallery as $image)
                            <a data-fslightbox="service-gallery" href="{{ Storage::url($image) }}" class="service-gallery__item">
                                <img src="{{ Storage::url($image) }}"
                                alt="Портфолио - {{ get_city_text($service->title)  }}  ( фото {{ $loop->index + 1 }})"
                                title="Портфолио - {{ get_city_text($service->title)  }}  ( фото {{ $loop->index + 1 }})"
                                class="service-gallery__image">
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>
    </section>

@endsection

