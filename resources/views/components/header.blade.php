<header class="header">
        <div class="container">
            <div class="header__content">
                <!-- Логотип -->
                <div class="header__logo">
                    <img src="{{ asset('img/logo.svg') }}" alt="РусСтрой" class="header__logo-img">
                </div>

                <!-- Контактная информация и кнопка -->
                <div class="header__contacts">
                    <a href="#cityselect" class="text_icon">
                        <svg class="sprite_icon">
                            <use xlink:href="#ti_map"></use>
                        </svg>
                        <span class="text">{{ app()->make('current_city_name') }}</span>
                    </a>

                    <a href="#coll" class="button">Рассчитать стоимость</a>

                    <div class="header__phone">
                        <a href="tel:+79999999999" class="header__phone-link">+ 7 (9999) 99-99-99</a>
                        <span class="header__phone-subtitle">работаем без выходных</span>
                    </div>

                    <div class="header__actions">
                        <div class="header__icons">
                            <button class="header__icon-btn header__icon-btn--heart" aria-label="Избранное">
                                <svg class="sprite_icon">
                                    <use xlink:href="#like_icon"></use>
                                </svg>
                            </button>
                            <button class="header__icon-btn header__icon-btn--balance" aria-label="Сравнение">
                                <svg class="sprite_icon">
                                    <use xlink:href="#compare_icon"></use>
                                </svg>
                            </button>
                        </div>
                        <a href="#coll" class="header__callback-btn">Обратный звонок</a>
                    </div>


                </div>

                <!-- Мобильное меню -->
                <button class="header__burger show_menue_button_do" aria-label="Открыть меню">
                    <span class="header__burger-line"></span>
                    <span class="header__burger-line"></span>
                    <span class="header__burger-line"></span>
                </button>
            </div>
        </div>
    </header>
