<template>
    <div class="price-block">
        <select class="price-block__select" v-model="selectedType">
            <option value="korobka">Коробка</option>
            <option value="tepliy-kontur">Теплый контур</option>
            <option value="chernovaya">Черновая отделка</option>
            <option value="pod-kluch">Под ключ</option>
        </select>

        <p class="price-block__comment">
            {{ currentDescription }}
        </p>

        <div class="price-block__prices">
            <div class="price-block__old-price">от {{ formattedOldPrice }} ₽</div>
            <div class="price-block__current-price">от {{ formattedCurrentPrice }} ₽</div>
        </div>
    </div>
</template>

<script setup>
import { ref, computed } from 'vue'

// Пропс для получения стартовой цены
const props = defineProps({
    startPrice: {
        type: Number,
        required: true
    }
})

// Массив с типами, описаниями и процентами увеличения цены
const priceTypes = {
    'korobka': {
        title: 'Коробка',
        description: 'Базовая комплектация включает возведение стен, установку кровли, окон и дверей. Дом готов для проведения коммуникаций и отделочных работ.',
        priceIncrease: 10
    },
    'tepliy-kontur': {
        title: 'Теплый контур',
        description: 'Дом с установленным отоплением, утеплением стен и перекрытий. Включает монтаж радиаторов, котла и разводку труб. Готов для чистовой отделки.',
        priceIncrease: 20
    },
    'chernovaya': {
        title: 'Черновая отделка',
        description: 'Полная черновая отделка с установкой всех коммуникаций, стяжкой пола, штукатуркой стен. Дом готов для финишной отделки и установки сантехники.',
        priceIncrease: 30
    },
    'pod-kluch': {
        title: 'Под ключ',
        description: 'Полностью готовый к проживанию дом с чистовой отделкой, установленной сантехникой, электрикой и всеми необходимыми коммуникациями.',
        priceIncrease: 35
    }
}

// Реактивная переменная для выбранного типа
const selectedType = ref('korobka')

// Вычисляемое свойство для текущего описания
const currentDescription = computed(() => {
    return priceTypes[selectedType.value]?.description || ''
})

// Вычисляемое свойство для текущей цены (с увеличением)
const currentPrice = computed(() => {
    const increase = priceTypes[selectedType.value]?.priceIncrease || 0
    return Math.round(props.startPrice * (1 + increase / 100))
})

// Вычисляемое свойство для старой цены (текущая цена + 15%)
const oldPrice = computed(() => {
    return Math.round(currentPrice.value * 1.15)
})

// Форматированная текущая цена
const formattedCurrentPrice = computed(() => {
    return currentPrice.value.toLocaleString('ru-RU')
})

// Форматированная старая цена
const formattedOldPrice = computed(() => {
    return oldPrice.value.toLocaleString('ru-RU')
})
</script>
