<section class="whay-section">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Почему стоит заказать строительство у нас</h2>
        </div>
        <p class="section__description">Мы знаем, как превратить проект любой сложности в готовый результат. Все работы выполняем строго по законодательным нормам, используем современные технологии и только лучшие строительные материалы. С нами ваш дом в {!! get_city_text('[city|pp]') !!} будет надежным, красивым и долговечным!</p>

        <div class="whay-section__content">
            <div class="whay-section__left">
                <div class="whay-section__image-wrapper">
                    <img src="{{ asset('img/whay.webp') }}" alt="Строительство домов" class="whay-section__image">
                </div>
            </div>

            <div class="whay-section__right">
                <div class="whay-section__advantages">
                    @foreach ($adv as $item)
                        <x-cards.adv :item="$item" :index="$loop->iteration"/>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
