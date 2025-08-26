<section class="cta-section">
    <div class="container">
        <div id="cta_app" class="cta-block">
            <h2 class="cta-block__title">Получить консультацию специалиста</h2>

            <send-cta></send-cta>

            {{-- <form class="cta-form">
                <div class="cta-form__fields">
                    <input type="text" name="name" placeholder="Имя" class="form-input">
                    <input type="tel" name="phone" placeholder="Телефон" class="form-input">
                </div>

                <div class="cta-form__checkboxes">
                    <label class="checbox_label" for="policy_ch">
                        <input type="checkbox" id="policy_ch">
                        <span>Я соглашаюсь с <a href="/page/politika-v-oblasti-obrabotki-personalnyx-dannyx"> политикой в области обработки персональных данных</a></span>
                    </label>

                    <label class="checbox_label" for="accept_ch">
                        <input type="checkbox" id="accept_ch">
                        <span>Я даю <a href="/page/soglasie-na-obrabotku-personalnyx-dannyx">согласие на обработку моих персональных данных</a></span>
                    </label>
                </div>

                <button type="submit" class="button button-orange">Отправить</button>
            </form> --}}
        </div>

        <div class="contact-block">
            <div class="photo">
                <img src="{{ asset('img/manager.webp') }}" alt="Менеджер" class="photo__img">
                <div class="beeper"></div>
            </div>
            <p class="contact-block__text">Отвкечу на все Ваши вопросы, помогу определиться с выбором проекта и бюджетом</p>
            <a href="tel:+7{{ phone_format(get_city_text('[city|phone_f]')) }}" class="contact-block__phone">{{ get_city_text('[city|phone]') }}</a>
        </div>
    </div>
</section>
