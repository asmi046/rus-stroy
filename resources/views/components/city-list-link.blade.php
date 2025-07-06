<div class="city_list_modal">
    <nav>
        <ul>
            @foreach ($citylist as $item)
            <li>
                <a @class(['city_list_element', 'active' => $item->name === app()->make('current_city_name')]) href="{{ $item->getUrl()}}">{{ $item->name }}</a>
            </li>
            @endforeach

        </ul>
    </nav>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
</div>
