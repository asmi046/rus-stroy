<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @header_seo

    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon256.png')}}" sizes="256x256">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon128.png')}}" sizes="128x128">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon64.png')}}" sizes="64x64">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon16.png')}}" sizes="16x16">
    <link rel="icon" type="image/svg" href="{{asset('/img/favicons/fav.svg')}}" sizes="any">

    <meta name="_token" content="{{ csrf_token() }}">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'public/scss/main.scss'
    ])

    <script>
        window.Laravel = {
            assetUrl: '{{ asset('') }}',
            storageUrl: '{{ Storage::url('') }}'
        };
    </script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m,e,t,r,i,k,a){
            m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
        })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=103542849', 'ym');

        ym(103542849, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", accurateTrackBounce:true, trackLinks:true});
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/103542849" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <meta name="yandex-verification" content="3dbe2ec467e40f6b" />
</head>
<body>
    @include("allicon")
    <main id="main">
        <x-top-header/>
        @yield('main')

    </main>

    <x-cta-block />
    <x-footer/>

    <x-menues.side-menu></x-menues.side-menu>

    <div class="modal_win" id="global_app">
        <side-panel></side-panel>
        <modal-window rout="/send_consult" redirect="/thencs" hesh="coll" title="Помощь специалиста" subtitle="Мы свяжемся с Вами в течении 15 минут"></modal-window>
        <modal-window rout="/send_consult" redirect="/thencs" hesh="smeta" title="Получить смету" subtitle="Мы свяжемся с Вами в течении 15 минут и уточним информацию по смете"></modal-window>

         <cookies-warning
            privacy-policy-link="{{ route('page', 'politika-v-oblasti-obrabotki-personalnyx-dannyx') }}"
            cookies-info-link="{{ route('page', 'o-failax-cookie') }}"
            privacy-policy-accept-link="{{ route('page', 'soglasie-na-obrabotku-personalnyx-dannyx') }}"
        />

        <empty-modal hesh="cityselect" title="Выбор города" subtitle="Выберите город в котором вы проживаете">
            <x-city-list-link/>
        </empty-modal>
    </div>
</body>
</html>
