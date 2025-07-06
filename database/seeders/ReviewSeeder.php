<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // 25 отзывов

        Storage::disk('public')->put("rew/1.webp", file_get_contents(public_path('tmp_data/rew/1.webp')), 'public');
        Storage::disk('public')->put("rew/2.webp", file_get_contents(public_path('tmp_data/rew/2.webp')), 'public');
        Storage::disk('public')->put("rew/3.webp", file_get_contents(public_path('tmp_data/rew/3.webp')), 'public');
        Storage::disk('public')->put("rew/4.webp", file_get_contents(public_path('tmp_data/rew/4.webp')), 'public');
        Storage::disk('public')->put("rew/5.webp", file_get_contents(public_path('tmp_data/rew/5.webp')), 'public');
        Storage::disk('public')->put("rew/6.webp", file_get_contents(public_path('tmp_data/rew/6.webp')), 'public');
        Storage::disk('public')->put("rew/7.webp", file_get_contents(public_path('tmp_data/rew/7.webp')), 'public');
        Storage::disk('public')->put("rew/8.webp", file_get_contents(public_path('tmp_data/rew/8.webp')), 'public');
        Storage::disk('public')->put("rew/9.webp", file_get_contents(public_path('tmp_data/rew/9.webp')), 'public');
        Storage::disk('public')->put("rew/10.webp", file_get_contents(public_path('tmp_data/rew/10.webp')), 'public');
        Storage::disk('public')->put("rew/11.webp", file_get_contents(public_path('tmp_data/rew/11.webp')), 'public');
        Storage::disk('public')->put("rew/12.webp", file_get_contents(public_path('tmp_data/rew/12.webp')), 'public');
        Storage::disk('public')->put("rew/13.webp", file_get_contents(public_path('tmp_data/rew/13.webp')), 'public');
        Storage::disk('public')->put("rew/14.webp", file_get_contents(public_path('tmp_data/rew/14.webp')), 'public');
        Storage::disk('public')->put("rew/15.webp", file_get_contents(public_path('tmp_data/rew/15.webp')), 'public');
        Storage::disk('public')->put("rew/16.webp", file_get_contents(public_path('tmp_data/rew/16.webp')), 'public');
        Storage::disk('public')->put("rew/17.webp", file_get_contents(public_path('tmp_data/rew/17.webp')), 'public');
        Storage::disk('public')->put("rew/18.webp", file_get_contents(public_path('tmp_data/rew/18.webp')), 'public');
        Storage::disk('public')->put("rew/19.webp", file_get_contents(public_path('tmp_data/rew/19.webp')), 'public');
        Storage::disk('public')->put("rew/20.webp", file_get_contents(public_path('tmp_data/rew/20.webp')), 'public');
        Storage::disk('public')->put("rew/21.webp", file_get_contents(public_path('tmp_data/rew/21.webp')), 'public');
        Storage::disk('public')->put("rew/22.webp", file_get_contents(public_path('tmp_data/rew/22.webp')), 'public');
        Storage::disk('public')->put("rew/23.webp", file_get_contents(public_path('tmp_data/rew/23.webp')), 'public');
        Storage::disk('public')->put("rew/24.webp", file_get_contents(public_path('tmp_data/rew/24.webp')), 'public');
        Storage::disk('public')->put("rew/25.webp", file_get_contents(public_path('tmp_data/rew/25.webp')), 'public');
        Storage::disk('public')->put("rew/26.webp", file_get_contents(public_path('tmp_data/rew/26.webp')), 'public');
        $data = [
            [
                'name' => "Александр Петрович",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "2gis",
                'img' => "rew/6.webp",
                'score' => 5,
                'description' => "Очень доволен сотрудничеством с этой компанией! Заказывал монтаж винтовых свай для фундамента дачного дома. Работу выполнили быстро, профессионально и без лишних хлопот. Сваи установили ровно, без отклонений, бригада работала аккуратно и оставила после себя чистоту. Менеджер подробно проконсультировал по всем вопросам, а цены оказались ниже, чем у конкурентов. Рекомендую!",
                'platform_lnk' => "https://2gis.ru"
            ],
            [
                'name' => "Дмитрий",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "2gis",
                'img' => "rew/5.webp",
                'score' => 5,
                'description' => "Выбирал подрядчика для установки винтовых свай под каркасный дом и остановился на этой компании. Не пожалел! Работу выполнили в срок, несмотря на сложный грунт. Специалисты приехали с качественным оборудованием, все сделали четко по технологии. Особенно порадовало, что предоставили гарантию на сваи и монтаж. Теперь фундамент стоит надежно, без перекосов. Спасибо за отличный результат!",
                'platform_lnk' => "https://2gis.ru"
            ],
            [
                'name' => "Игорь С.",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "Yandex",
                'img' => "rew/4.webp",
                'score' => 5,
                'description' => "Заказывал винтовые сваи с монтажом для пристройки к дому. Компания порадовала оперативностью – от замера до установки прошло всего три дня. Сваи качественные, покрытие антикоррозийное, монтаж выполнен без нареканий. Цена адекватная, плюс дали скидку за объем. Бригада работала профессионально, все объяснили и показали. Остался очень доволен, буду обращаться еще!",
                'platform_lnk' => "https://yandex.ru"
            ],
            [
                'name' => "Ольга Николаевна",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "Yandex",
                'img' => "rew/3.webp",
                'score' => 5,
                'description' => "Нужно было укрепить фундамент старого дома, решил использовать винтовые сваи. Остановился на этой компании – и не зря! Сотрудники приехали на оценку, подобрали оптимальное решение, а монтаж выполнили за один день. Работали аккуратно, не повредили участок. Качество свай на высоте, никаких ржавчин или деформаций. Отдельное спасибо за честность и прозрачные условия договора. Рекомендую!",
                'platform_lnk' => "https://yandex.ru"
            ],
            [
                'name' => "Артем",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "Yandex",
                'img' => "rew/2.webp",
                'score' => 5,
                'description' => "Искал надежного подрядчика для фундамента на винтовых сваях и нашел! Компания предложила выгодные условия, а монтаж провели даже быстрее, чем планировалось. Сваи отличного качества, установлены строго по уровню. Порадовало, что не было скрытых платежей – итоговая сумма совпала с предварительным расчетом. Бригада вежливая, работала без задержек. Теперь дом стоит крепко, спасибо!",
                'platform_lnk' => "https://yandex.ru"
            ],
            [
                'name' => "Сергей Валерьевич",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "Yandex",
                'img' => "rew/1.webp",
                'score' => 5,
                'description' => "Обратился в компанию для установки свай под баню. Остался под большим впечатлением! Менеджер помог выбрать оптимальный вариант, а монтажная бригада приехала точно в срок. Работали слаженно, использовали профессиональное оборудование. Уже через несколько часов сваи были установлены идеально ровно. Качество материалов и монтажа на высоте, никаких нареканий. Обязательно порекомендую знакомым! Каждый отзыв содержит около 400 символов, отражает положительный опыт клиента и охватывает разные аспекты работы компании (качество свай, монтаж, сервис, цены). При необходимости можно адаптировать детали под специфику вашего бизнеса.",
                'platform_lnk' => "https://yandex.ru"
            ],
            [
                'name' => "Игорь Петров",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "Yandex",
                'img' => "rew/7.webp",
                'score' => 5,
                'description' => "Спасибо команде СвайМонтаж за надёжный фундамент под наш гараж! Работали даже в -30°C, не сбавили темп. Сваи выбрали с учётом мерзлоты — всё чётко. Цены адекватные, менеджер помог с расчётами. Остались довольны!",
                'platform_lnk' => "https://yandex.ru"
            ],
            [
                'name' => "Анна Семёнова",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "2gis",
                'img' => "rew/8.webp",
                'score' => 5,
                'description' => "Заказывали сваи для бани. Бригада приехала точно в срок, установила за день. Порадовало, что не пришлось ждать неделями, как у других. Все аккуратно, мусор убрали. Отдельное спасибо за скидку пенсионерам!",
                'platform_lnk' => "https://2gis.ru"
            ],
            [
                'name' => "Анна Семёнова",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "2gis",
                'img' => "rew/9.webp",
                'score' => 5,
                'description' => "Заказывали сваи для бани. Бригада приехала точно в срок, установила за день. Порадовало, что не пришлось ждать неделями, как у других. Все аккуратно, мусор убрали. Отдельное спасибо за скидку пенсионерам!",
                'platform_lnk' => "https://2gis.ru"
            ],
            [
                'name' => "Дмитрий Волков",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "2gis",
                'img' => "rew/10.webp",
                'score' => 5,
                'description' => "Строил дом на склоне. Думал, будут проблемы, но ребята справились! Сваи поставили идеально, перекосов нет. Техника справилась с сложным рельефом. Рекомендую — профессионалы с большим опытом.",
                'platform_lnk' => "https://2gis.ru"
            ],
            [
                'name' => "Ольга Козлова",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "2gis",
                'img' => "rew/11.webp",
                'score' => 5,
                'description' => "Обратилась срочно — нужно было укрепить фундамент старого дома. СвайМонтаж отреагировали мгновенно! Привезли материалы за два дня, смонтировали без задержек. Цены ниже рыночных, а качество на высоте. Благодарна за оперативность!",
                'platform_lnk' => "https://2gis.ru"
            ],
            [
                'name' => "Сергей Николаев",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "2gis",
                'img' => "rew/12.webp",
                'score' => 5,
                'description' => "Работал с ними как подрядчик. За три года — ни одной жалобы от клиентов. Сваи не ржавеют, монтаж точный. Все документы и сертификаты предоставляют. Надёжный партнёр для стройки в условиях Севера!",
                'platform_lnk' => "https://2gis.ru"
            ],
            [
                'name' => "Екатерина Иванова",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "2gis",
                'img' => "rew/13.webp",
                'score' => 5,
                'description' => "Установили сваи под теплицу. Боялась, что будет дорого, но вышло дешевле бетонного фундамента. Работали аккуратно, не повредили грядки. Менеджер Антон подробно объяснил про нагрузку и срок службы. Спасибо!",
                'platform_lnk' => "https://2gis.ru"
            ],
            [
                'name' => "Алексей Морозов",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "2gis",
                'img' => "rew/13.webp",
                'score' => 5,
                'description' => "Сам строитель, поэтому придираюсь к мелочам. Но тут — всё безупречно! От проекта до монтажа. Сваи обработаны антикоррозийным составом, бригада не курит и не опаздывает. Видно, что компания дорожит репутацией.",
                'platform_lnk' => "https://2gis.ru"
            ],
            [
                'name' => "Наталья Соколова",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "2gis",
                'img' => "rew/14.webp",
                'score' => 5,
                'description' => "Заказывала монтаж для дачи. Порадовало, что не требовалось выравнивать участок — сэкономили время и деньги. Сваи стоят как вкопанные, даже после зимы нет смещения. Соседи уже спрашивают контакты!",
                'platform_lnk' => "https://2gis.ru"
            ],
            [
                'name' => "Андрей Кузнецов",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "2gis",
                'img' => "rew/15.webp",
                'score' => 5,
                'description' => "Работа в болотистой местности — это кошмар. Но эти ребята знают своё дело! Использовали сваи с усиленными лопастями, установили без проблем. Ни грязи, ни поломок. Теперь советую их всем, кто строит в тундре.",
                'platform_lnk' => "https://2gis.ru"
            ],
            [
                'name' => "Виктор Павлов",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "2gis",
                'img' => "rew/16.webp",
                'score' => 5,
                'description' => "Сравнил пять компаний — здесь лучшее соотношение цены и качества. Гарантию дали 15 лет, сделали смету без скрытых платежей. Бригада ответственная, даже фотоотчёт прислали после монтажа. Однозначно рекомендую!",
                'platform_lnk' => "https://2gis.ru"
            ],
            [
                'name' => "Марина Белова",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "Yandex",
                'img' => "rew/17.webp",
                'score' => 5,
                'description' => "Строили причал на озере — задача не из простых! СвайМонтаж предложили специальные сваи с антикоррозийным покрытием для воды. Установили за день, несмотря на сырую погоду. Теперь лодка стоит надёжно, а соседи завидуют. Спасибо за креативный подход!",
                'platform_lnk' => "https://yandex.ru"
            ],
            [
                'name' => "Артём Жуков",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "Yandex",
                'img' => "rew/18.webp",
                'score' => 5,
                'description' => "Заказывал сваи для ангара. Удивила скорость: от звонка до монтажа — 4 дня! Бригада привезла всё необходимое, даже учли неровности грунта. Никаких доплат за выезд в отдалённый район. Рад, что обратился именно сюда!",
                'platform_lnk' => "https://yandex.ru"
            ],
            [
                'name' => "Лидия Громова",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "Yandex",
                'img' => "rew/19.webp",
                'score' => 5,
                'description' => "Нужно было укрепить фундамент старого сарая. Другие компании отказывались — говорят, «невыгодно». А СвайМонтаж взялись без вопросов! Сделали аккуратно, сохранили постройку. Цена символическая. Очень человечное отношение!",
                'platform_lnk' => "https://yandex.ru"
            ],
            [
                'name' => "Роман Савельев",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "Yandex",
                'img' => "rew/20.webp",
                'score' => 5,
                'description' => "Работаю в геологоразведке и знаю, как сложно строить в тундре. Заказал у них базу для вахтового посёлка — сваи выдержали и технику, и ураганные ветра. Качество материалов на уровне ГОСТа. Теперь только к ним!",
                'platform_lnk' => "https://yandex.ru"
            ],
            [
                'name' => "Валерия Котова",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "Yandex",
                'img' => "rew/21.webp",
                'score' => 5,
                'description' => "Хотела беседку с «парящей» крышей. Ребята предложили винтовые сваи разной высоты — реализовали мой дизайн идеально! Даже добавили подсветку в проект. Работали как художники — с душой. Восторг!",
                'platform_lnk' => "https://yandex.ru"
            ],
            [
                'name' => "Геннадий Фёдоров",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "Yandex",
                'img' => "rew/22.webp",
                'score' => 5,
                'description' => "После урагана забор повело. СвайМонтаж не только укрепили основание, но и помогли с ремонтом секций. Бесплатно проконсультировали по дренажу участка. Такая забота о клиенте — редкость сейчас. Благодарю!",
                'platform_lnk' => "https://yandex.ru"
            ],
            [
                'name' => "Алёна Ветрова",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "Yandex",
                'img' => "rew/23.webp",
                'score' => 5,
                'description' => "Эко-ферма — моя мечта. Искала компанию, которая использует безопасные материалы. Здесь сваи с экопокрытием! Монтаж прошёл тихо, без вреда для животных. Даже козы не нервничали. Идеально для природы!",
                'platform_lnk' => "https://yandex.ru"
            ],
            [
                'name' => "Станислав Новиков",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "Yandex",
                'img' => "rew/24.webp",
                'score' => 5,
                'description' => "Купил участок с торфяным грунтом — все пугали, что фундамент «поплывёт». СвайМонтаж углубили сваи на 8 метров! Теперь дом стоит как скала. Даже сейсмику учли в расчётах. Это не монтаж — это инженерия!",
                'platform_lnk' => "https://yandex.ru"
            ],
            [
                'name' => "Дарья Лебедева",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "Yandex",
                'img' => "rew/25.webp",
                'score' => 5,
                'description' => "Заказывала в пятый раз! Сначала дом, потом баня, теперь мастерская. Всегда — чёткие сроки, никаких сюрпризов по деньгам. Постоянным клиентам дарят бонусы. Лучшие в регионе, проверено годами!",
                'platform_lnk' => "https://yandex.ru"
            ],
            [
                'name' => "Иван Широков",
                'data' => date("Y-m-d", strtotime("01.02.2024") ),
                'platform' => "Yandex",
                'img' => "rew/26.webp",
                'score' => 5,
                'description' => "Сосед порекомендовал. Установили сваи под трёхэтажный коттедж за неделю! Бонусом сделали дренажную систему вокруг. Приезжали через месяц — проверили усадку. Сервис, как в Европе, но с северным характером!",
                'platform_lnk' => "https://yandex.ru"
            ]
        ];

        DB::table("reviews")->insert($data);

    }
}
