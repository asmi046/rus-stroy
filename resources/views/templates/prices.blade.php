@extends('layouts.all')


@section('main')
    <section class="section section--page-header">
        <div class="container text_styles">
            <x-breadcrumbs.main title="Цены на строительство"></x-breadcrumbs.main>

            <div class="section__header">
                <h1 class="section__title __left">Цены на строительство</h1>
            </div>

            @isset($prices['Цены на строительство'])
                <div class="dotted-grid">
                    @foreach ($prices['Цены на строительство'] as $item)
                        <div class="dotted-item">
                            <span class="dotted-item__name">{{ $item->name }}</span>
                            <span class="dotted-item__dots"></span>
                            <span class="dotted-item__value">
                                от <strong>{{ $item->price }}</strong> ₽/{{ $item->unit }}
                            </span>
                        </div>
                    @endforeach
                </div>
            @endisset

            <div class="any_price">
                @foreach ($prices as $key => $item)
                    @continue($key === 'Цены на строительство')
                    <details>
                        <summary>{{ $key }}</summary>
                            <div class="response">
                                @foreach ($item as $sub_item)
                                    <div class="price-item">
                                        <span class="price-item__name">{{ $sub_item->name }}</span>
                                        <span class="price-item__dots"></span>
                                        <span class="price-item__value">
                                            от <strong>{{ $sub_item->price }}</strong> ₽/{{ $sub_item->unit }}
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        </details>
                @endforeach
            </div>

        </div>
    </section>
@endsection

