<div class="service-banner">
    <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}" class="service-banner__image">
    <div class="service-banner__overlay"></div>
    <div class="service-banner__content">
        <h1 class="service-banner__title">{{  get_city_text($item->title) }}</h1>
        <div class="service-banner__subtitle">{!!  get_city_text($item->short_description) !!}</div>
        <div class="service-banner__buttons">
            <a href="#coll" class="button">Задать вопрос</a>
            <a href="#coll" class="button button-orange">Узнать цену</a>
        </div>
    </div>
</div>
