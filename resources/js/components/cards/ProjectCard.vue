<template>
  <a :href="`/projects/${project.slug}`" class="project-card">
                <div class="project-card__image-wrapper">
                    <div class="control_icons">
                        <button class="control_icons__icon __like __liked" :data-projectid="project.id" aria-label="Избранное" @click.prevent="handleRemoveFromFavorites(project.id)">
                                <svg class="sprite_icon">
                                    <use xlink:href="#like_icon"></use>
                                </svg>
                        </button>

                    </div>

                    <img :src="`${base_path}${project.img}`" :alt="project.title" class="project-card__image">
                    <div class="project-card__overlay">
                        <h3 class="project-card__name">{{ project.title }}</h3>
                    </div>
                </div>

                <div class="project-card__info">
                    <div class="project-card__params">
                        <div class="project-card__param">
                            <span class="project-card__param-label">Тип:</span>
                            <span class="project-card__param-value">{{ project.type }}</span>
                        </div>
                        <div class="project-card__param">
                            <span class="project-card__param-label">Этажность:</span>
                            <span class="project-card__param-value">{{ project.floors }}</span>
                        </div>
                        <div class="project-card__param">
                            <span class="project-card__param-label">от:</span>
                            <span class="project-card__param-value">{{ formatPrice(project.start_price) }} ₽</span>
                        </div>
                    </div>

                    <div class="project-card__details">
                        <div class="project-card__detail">
                            <span class="project-card__detail-value">Площадь:</span>
                            <span class="project-card__detail-label">{{ Math.floor(project.total_area) }} м<sup>2</sup></span>
                        </div>
                        <div class="project-card__detail">
                            <span class="project-card__detail-value">Мансарда:</span>
                            <span class="project-card__detail-label">{{ project.mansard ? "Да" : "Нет" }}</span>
                        </div>
                        <div class="project-card__detail">
                            <span class="project-card__detail-value">Материал стен:</span>
                            <span class="project-card__detail-label">{{ project.wall_material || "По выбору" }}</span>
                        </div>
                    </div>
                </div>
            </a>
</template>

<script setup>
// Определяем пропсы компонента
const props = defineProps({
    project: {
        type: Object,
        required: true
    },
    onRemoveFromFavorites: {
        type: Function,
        required: true
    }
});

// Переменная для пути к хранилищу
const base_path = window.Laravel?.storageUrl || '';

// Функция для форматирования цены
const formatPrice = (price) => {
    return new Intl.NumberFormat('ru-RU').format(price);
};

// Обработчик удаления из избранного
const handleRemoveFromFavorites = (id) => {
    props.onRemoveFromFavorites(id);
};
</script>
