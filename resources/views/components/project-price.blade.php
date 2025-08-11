        <tap :header="{{ json_encode(array_keys($prices)) }}">
            @foreach ($prices as $key => $item)
                <template v-slot:body{{ $loop->index + 1 }}>
                    @foreach ($item as $sub_item)
                        <div class="material_price-item">
                            <span class="material_price-item__name">{{ $sub_item['material'] }}</span>
                            <span class="material_price-item__value">
                                {{ number_format(round($sub_item['price_per_meter'] * $area), 0, ',', ' ') }} ₽        </div>
                    @endforeach
                </template>
            @endforeach

        </tap>
