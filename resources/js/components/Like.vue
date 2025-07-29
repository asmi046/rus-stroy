<template>
<div class="projects-section__grid">
    <ProjectCard
        v-for="project in favoritesList"
        :key="project.id"
        :project="project"
        :onRemoveFromFavorites="removeFromFavorites"
    />
</div>
<h3 v-if="favoritesList.length === 0">Нет проектов в избранном! Нажимайте на ❤️ и добавляйте проекты в избранное</h3>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import ProjectCard from './cards/ProjectCard.vue';
const favoritesList = ref([]);

const getFavoritesFromStorage = () => {
    return JSON.parse(localStorage.getItem('favorites')) || [];
};

const setFavoritesToStorage = (favorites) => {
    localStorage.setItem('favorites', JSON.stringify(favorites));
};

const loadFavoritesList = async () => {
    try {
        const favorites = getFavoritesFromStorage();

        if (favorites.length > 0) {
            const response = await axios.get('/projects/get_list', {
                params: {
                    ids: favorites
                }
            });
            favoritesList.value = response.data;
        } else {
            favoritesList.value = [];
        }
    } catch (error) {
        console.error('Ошибка при загрузке избранных проектов:', error);
        favoritesList.value = [];
    }
};

const removeFromFavorites = (projectId) => {
    console.log('Удаление проекта из избранного:', projectId)
    let favorites = getFavoritesFromStorage();

    favorites = favorites.filter(id => parseInt(id) !== parseInt(projectId));
    setFavoritesToStorage(favorites);
    loadFavoritesList();
};

onMounted(() => {
    loadFavoritesList();
});
</script>
