@extends('layouts.all')

@section('main')
    <section class="page_section">
        <div class="container">
            <x-breadcrumbs.main title="Контакты"></x-breadcrumbs.main>
            <div class="section__header">
                <h2 class="section__title __left">Контакты</h2>
            </div>

            <div class="page_content contacts_page_section">
                <div class="content">
                    <h1 class="inner_page_h1">Контакты нашей компании</h1>
                    <p>Контакты СвайМонтаж в {{ get_city_text('[city|pp]') }}. Адреса офисов, юридические реквизиты, форма обратной связи. По всем вопросам звоните нам по номеру <a class="phone" href="tel:+7{{ phone_format( $contacts['phone'] ) }}">{{ $contacts['phone'] }}</a> или пишите. Все сообщения читаются. Скидки на продажу и все услуги монтажа винтовых свай в апреле.</p>

                    <div class="colls">
                        <div class="col">
                            <h2>Юридическая информация</h2>
                            <p class="label">Наименование:</p>
                            <p class="param">{{ $contacts['company_name'] }}</p>

                            <p class="label">ИНН:</p>
                            <p class="param">{{ $contacts['inn'] }}</p>

                            <p class="label">ОГРНИП:</p>
                            <p class="param">{{ $contacts['ogrn'] }}</p>

                            <p class="label">Контактное лицо:</p>
                            <p class="param">{{ $contacts['person'] }}</p>
                        </div>

                        <div class="col">
                            <h2>Контакты</h2>
                            <p class="param">тел. <a class="phone" href="tel:+7{{ phone_format( $contacts['phone'] ) }}">{{ $contacts['phone'] }}</a></p>
                            <p class="param">тел. <a class="phone" href="tel:+7{{ phone_format( $contacts['phone_2'] ) }}">{{ $contacts['phone_2'] }}</a></p>
                            <p class="param">e-mail: <a class="email" href="mailto:{{ $contacts['email']}}">{{ $contacts['email'] }}</a></p>
                            <h2>Главный офис</h2>
                            <p class="param">Адрес: {{ $contacts['adress'] }}</p>
                            <p class="param">Режим работы: {{ $contacts['work_time'] }}</p>
                        </div>
                    </div>

                    <h2>Как добраться</h2>
                     <x-map-in-page :name="$contacts['company_name']" :geo="$contacts['geo']" :adres="$contacts['adress']" :phone="$contacts['phone']"></x-map-in-page>

                </div>
            </div>
        </div>
    </section>
@endsection

