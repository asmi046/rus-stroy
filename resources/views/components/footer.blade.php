<footer class="footer">
    <div class="container">
        <div class="footer__content">
            <!-- Первая колонка - основная информация -->
            <div class="footer__column footer__column--main">
                <a href="{{ route('home') }}" class="footer__logo">
                    <img src="{{ asset('img/logo_footer.svg') }}" alt="СтройДом">
                </a>

                <div class="footer__phones">
                    <a href="tel:+7{{ phone_format(get_city_text('[city|phone_f]') ) }}" class="footer__phone">{{ get_city_text('[city|phone]')  }}</a>
                    @if (app('current_city_name') === 'Сургут')
                        <a href="tel:+7{{ phone_format($contacts['phone_2']->value) }}" class="footer__phone">{{ $contacts['phone_2']->value }}</a>
                    @endif

                </div>

                <a href="#coll" class="footer__button button button-orange">Получить консультацию</a>

                <div class="footer__schedule">{{ $contacts['work_time']->value }}</div>

                <a href="mailto:{{ $contacts['email']->value }}" class="footer__email">{{ $contacts['email']->value }}</a>

                <div class="footer__social">
                    <a href="{{ $contacts['2gis']->value }}" class="footer__social-link">
                        <img src="{{ asset('img/icon/services/yandex.svg') }}" alt="Яндекс">
                    </a>
                    <a href="{{ $contacts['yandex']->value }}" class="footer__social-link">
                        <img src="{{ asset('img/icon/services/2gis.svg') }}" alt="2ГИС">
                    </a>
                </div>
            </div>

            <!-- Вторая колонка -->
            <div class="footer__column">
                <h3 class="footer__title">Услуги</h3>
                <x-menues.puncts name="Услуги в подвале"></x-menues.puncts>
            </div>

            <!-- Третья колонка -->
            <div class="footer__column">
                <h3 class="footer__title">Проекты</h3>
                <x-menues.puncts name="Проекты в подвале"></x-menues.puncts>

            </div>

            <!-- Четвертая колонка -->
            <div class="footer__column">
                <h3 class="footer__title">Компания</h3>
                <x-menues.puncts name="О компании в подвале"></x-menues.puncts>
            </div>

            <!-- Пятая колонка -->
            <div class="footer__column">
                <h3 class="footer__title">Информация</h3>
                <x-menues.puncts name="Информация в подвале"></x-menues.puncts>
            </div>
        </div>
    </div>
</footer>
