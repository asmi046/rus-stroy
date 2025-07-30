@extends('layouts.all')

@section('main')
    <section class="section section--portfolio">
        <div class="container">
            <x-breadcrumbs.main title="Услуги нашей компании"></x-breadcrumbs.main>
            <div class="section__header">
                <h2 class="section__title __left">Проекты домов
                    @if(request()->has('page') && request()->get('page') > 1)
                        <span class="section__page">— страница {{ request()->get('page') }}</span>
                    @endif
                </h2>
                <p class="section__subtitle __left">Представляем Вашему вниманию каталог проектов домов доступных для заказа</p>
            </div>

                        <div class="filter-section">
                <form class="filter-form" action="#" method="GET">
                    <div class="filter-form__row">
                        <div class="filter-form__group">
                            <label for="material" class="filter-form__label">Материал</label>
                            <select name="material" id="material" class="filter-form__select">
                                <option value="">Все материалы</option>
                                <option value="sip">СИП-панели</option>
                                <option value="brick">Кирпич</option>
                                <option value="block">Блок</option>
                                <option value="wood">Дерево</option>
                                <option value="frame">Каркасный</option>
                            </select>
                        </div>

                        <div class="filter-form__group">
                            <label for="floors" class="filter-form__label">Количество этажей</label>
                            <select name="floors" id="floors" class="filter-form__select">
                                <option value="">Любое количество</option>
                                <option value="1">1 этаж</option>
                                <option value="2">2 этажа</option>
                                <option value="3">3 этажа</option>
                            </select>
                        </div>

                        <div class="filter-form__group">
                            <label class="filter-form__label">Площадь, м²</label>
                            <div class="filter-form__range">
                                <input type="number" name="area_from" placeholder="от" class="filter-form__input" min="0">
                                <span class="filter-form__separator">—</span>
                                <input type="number" name="area_to" placeholder="до" class="filter-form__input" min="0">
                            </div>
                        </div>

                        <div class="filter-form__group">
                            <label for="extension" class="filter-form__label">Пристройка</label>
                            <select name="extension" id="extension" class="filter-form__select">
                                <option value="">Не важно</option>
                                <option value="yes">Есть</option>
                                <option value="no">Нет</option>
                            </select>
                        </div>

                        <div class="filter-form__group">
                            <button type="submit" class="filter-form__submit button">Применить фильтр</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="projects-section__grid">
                @foreach ($projects as $item)
                    <x-cards.project :item="$item" />
                @endforeach
            </div>

            <x-pagination :tovars="$projects"></x-pagination>
        </div>
    </section>

@endsection

