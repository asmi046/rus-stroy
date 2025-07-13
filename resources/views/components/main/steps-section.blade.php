<section class="work-step-section">
    <div class="container" id="steps_app">
        <div class="section__header">
            <h2 class="section__title">Как мы работаем</h2>
            <p class="section__subtitle">Простые шаги которые подарят Вам дом мечты</p>
        </div>

        <tap :header="{{ json_encode($steps) }}">
            @foreach ($content as $key => $item)
                <template v-slot:body{{ $loop->index + 1 }}>
                    <div class="work-step-section__content">
                        <div class="work-step-section__left">
                            <div class="work-step-section__text-block">
                                {!! $item->description !!}
                            </div>
                            <div class="work-step-section__text-block __sub">
                                {!! $item->sub_description !!}
                            </div>
                        </div>

                        <div class="work-step-section__right text_styles">
                            {!! $item->additional_description !!}
                        </div>
                    </div>
                </template>
            @endforeach

        </tap>
    </div>
</section>
