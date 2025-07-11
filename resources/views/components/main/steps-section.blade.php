<section class="work-step-section">
    <div class="container" id="steps_app">
        <div class="section__header">
            <h2 class="section__title">Как мы работаем</h2>
            <p class="section__subtitle">Простые шаги которые подарят Вам дом мечты</p>
        </div>

        <tap :header="{{ json_encode(['Шаг 1', 'Шаг 2' , 'Шаг 3', 'Шаг 4', 'Шаг 5', 'Шаг 6']) }}">
            <template v-slot:body1>
                <div class="work-step-section__content">
                    <div class="work-step-section__left">
                        <div class="work-step-section__text-block">
                            <p>Перед тем, как начать процесс, мы должны подготовить все необходимые документы для органов государственной власти, провести геодезические работы на участке, выбрать проект дома, рассчитать смету и заключить договор.</p>
                        </div>
                        <div class="work-step-section__text-block">
                            <p>Первый этап предоставляет возможность ознакомиться с преимуществами сотрудничества с нами без каких-либо обязательств.</p>
                        </div>
                    </div>

                    <div class="work-step-section__right text_styles">
                        <h3 class="work-step-section__title">Согласование всех вопросов и нюансов перед началом работ</h3>
                        <ul class="work-step-section__list">
                            <li>Выбор проекта дома, количества и высоты этажей</li>
                            <li>Выбор материалов для строительства дома</li>
                            <li>Расчет сметы</li>
                        </ul>
                    </div>
                </div>
            </template>
        </tap>
    </div>
</section>
