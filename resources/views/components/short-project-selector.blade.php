<div class="short-project-selector">
    <div class="param">
        <span>Площадь: </span>
        @foreach ($areaList as $key => $item)
            <a href="{{ $item['lnk'] }}">{{ $key }}</a>
        @endforeach
    </div>

    <div class="param">
        <span>Этажность: </span>
        @foreach ($florsList as $key => $item)
            <a href="{{ $item['lnk'] }}">{{ $key }}</a>
        @endforeach
    </div>
</div>
