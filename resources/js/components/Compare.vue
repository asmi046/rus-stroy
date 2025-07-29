<template>

    <div v-if="compareList.length !== 0" class="compare-table">
                <div class="compare-table__wrapper">
                    <div class="compare-table__grid">
                        <!-- Заголовок параметров (фиксированный) -->
                        <div class="compare-table__header-params">
                            <div class="compare-table__param-row">Параметры</div>
                            <div class="compare-table__param-row">Изображение</div>
                            <div class="compare-table__param-row">Стартовая цена</div>
                            <div class="compare-table__param-row">Тип</div>
                            <div class="compare-table__param-row">Количество этажей</div>
                            <div class="compare-table__param-row">Общая площадь</div>
                            <div class="compare-table__param-row">Высота потолка</div>
                            <div class="compare-table__param-row">Габариты</div>
                            <div class="compare-table__param-row">Пристройка</div>
                        </div>

                        <!-- Прокручиваемая область с проектами -->
                        <div class="compare-table__content">
                            <!-- Проект 1 -->
                            <div
                                v-for="project in compareList"
                                :key="project.id"
                                class="compare-table__project">
                                <div class="compare-table__project-header">
                                    <h3 class="compare-table__project-title">{{project.title}}</h3>
                                    <button class="compare-table__remove-btn" @click.prevent="removeFromCompare(project.id)" aria-label="Удалить из сравнения">×</button>
                                </div>
                                <div class="compare-table__value">
                                    <img :src="`${base_path}${project.img}`" :alt="project.title" class="compare-table__image">
                                    <!-- <img src="/img/project-placeholder.jpg" alt="Проект" class="compare-table__image"> -->
                                </div>
                                <div class="compare-table__value">от {{ formatPrice(project.start_price) }} ₽</div>
                                <div class="compare-table__value">{{ project.type }}</div>
                                <div class="compare-table__value">{{ project.floors }}</div>
                                <div class="compare-table__value">{{ Math.floor(project.total_area) }} м²</div>
                                <div class="compare-table__value">{{ Math.floor(project.ceiling_height) }} м</div>
                                <div class="compare-table__value">{{ project.plan_dimensions }} м</div>
                                <div class="compare-table__value">{{ project.extension }}</div>
                            </div>

                        </div>
                    </div>
                </div>
    </div>

<h3 v-if="compareList.length === 0">Нет проектов в сравнени! Нажимайте на ⚖️ и добавляйте проекты в сравнение</h3>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const base_path = window.Laravel?.storageUrl || '';

const compareList = ref([]);

const getCompareFromStorage = () => {
    return JSON.parse(localStorage.getItem('compare')) || [];
};

const setCompareToStorage = (compare) => {
    localStorage.setItem('compare', JSON.stringify(compare));
};

const loadcompareList = async () => {
    try {
        const compare = getCompareFromStorage();
        console.log('Загружаем проекты для сравнения:', compare);

        if (compare.length > 0) {
            const response = await axios.get('/projects/get_list', {
                params: {
                    ids: compare
                }
            });
            compareList.value = response.data;
        } else {
            compareList.value = [];
        }
    } catch (error) {
        console.error('Ошибка при загрузке сравниваемых проектов:', error);
        compareList.value = [];
    }
};

const removeFromCompare = (projectId) => {
    console.log('Удаление проекта из сравнения:', projectId)
    let compare = getCompareFromStorage();

    compare = compare.filter(id => parseInt(id) !== parseInt(projectId));
    setCompareToStorage(compare);
    loadcompareList();
};

const formatPrice = (price) => {
    return new Intl.NumberFormat('ru-RU').format(price);
};

onMounted(() => {
    loadcompareList();
});
</script>
