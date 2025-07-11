<footer class="footer">
    <div class="container">
        <div class="footer__content">
            <!-- Первая колонка - основная информация -->
            <div class="footer__column footer__column--main">
                <a href="{{ route('home') }}" class="footer__logo">
                    <img src="{{ asset('img/logo_footer.svg') }}" alt="СтройДом">
                </a>

                <div class="footer__phones">
                    <a href="tel:+7{{ phone_format($contacts['phone']->value) }}" class="footer__phone">{{ $contacts['phone']->value }}</a>
                    <a href="tel:+7{{ phone_format($contacts['phone_2']->value) }}" class="footer__phone">{{ $contacts['phone_2']->value }}</a>
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
                <ul class="footer__menu">
                    <li><a href="#">Строительство домов</a></li>
                    <li><a href="#">Проектирование</a></li>
                    <li><a href="#">Ремонт и отделка</a></li>
                    <li><a href="#">Инженерные системы</a></li>
                    <li><a href="#">Благоустройство</a></li>
                </ul>
            </div>

            <!-- Третья колонка -->
            <div class="footer__column">
                <h3 class="footer__title">Проекты</h3>
                <ul class="footer__menu">
                    <li><a href="#">Дома из керамзитоблока</a></li>
                    <li><a href="#">Дома из газобетона</a></li>
                    <li><a href="#">Кирпичные дома</a></li>
                    <li><a href="#">Деревянные дома</a></li>
                    <li><a href="#">Монолитные дома</a></li>
                </ul>
            </div>

            <!-- Четвертая колонка -->
            <div class="footer__column">
                <h3 class="footer__title">Компания</h3>
                <ul class="footer__menu">
                    <li><a href="#">О компании</a></li>
                    <li><a href="#">Наши работы</a></li>
                    <li><a href="#">Отзывы</a></li>
                    <li><a href="#">Лицензии</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>

            <!-- Пятая колонка -->
            <div class="footer__column">
                <h3 class="footer__title">Информация</h3>
                <ul class="footer__menu">
                    <li><a href="#">Политика конфиденциальности</a></li>
                    <li><a href="#">Пользовательское соглашение</a></li>
                    <li><a href="#">Карта сайта</a></li>
                    <li><a href="#">Вакансии</a></li>
                    <li><a href="#">Новости</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
