<div class="ipoteka_greed">
                <div class="ipoteka-famaly">
                    <img src="{{ asset('img/ipoteka-famaly.webp') }}" alt="Ипотека в {{ get_city_text('[city|pp]') }}" class="famaly__img">
                    <div class="overley"></div>
                    <div class="text">
                        <h2>Делаем ипотеку легкой и доступной!</h2>
                        <div class="stavka">от <span>6%</span></div>
                        <a href="#coll" class="button button-orange">Задать вопрос</a>
                    </div>
                </div>

                <div class="ipoteka-info-section">
                    <div class="ipoteka-info-section__container">
                        <div class="ipoteka-info-section__block ipoteka-info-section__block--left">
                            <div class="ipoteka-info-section__icon">
                                <svg class="sprite_icon">
                                    <use xlink:href="#calendar"></use>
                                </svg>
                            </div>
                            <div class="ipoteka-info-section__content">
                                <div class="ipoteka-info-section__period">
                                    До <span class="ipoteka-info-section__number">30</span> лет
                                </div>
                                <div class="ipoteka-info-section__text">
                                    Первоначальный взнос от 10%
                                </div>
                            </div>
                        </div>

                        <div class="ipoteka-info-section__block ipoteka-info-section__block--right">
                            <div class="ipoteka-info-section__icon">
                                <svg class="sprite_icon">
                                    <use xlink:href="#bank"></use>
                                </svg>
                            </div>
                            <div class="ipoteka-info-section__content">
                                <h3 class="ipoteka-info-section__title">Ипотека до</h3>
                                <div class="ipoteka-info-section__amount">
                                    5 000 000 ₽
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ipoteka_calc_app" id="ipoteka_calc_app">
                    <ipoteka-calc></ipoteka-calc>
                </div>
            </div>
