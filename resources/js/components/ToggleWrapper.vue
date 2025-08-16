<template>
  <div class="toggle-wrapper">
    <button
      :class="{ 'button':true, 'active': !isCollapsed }"
      @click="toggleContent"
      v-if="isMobile"
    >
      {{ buttonText }}
    </button>

    <div
      class="content-container"
      :class="{ 'active': !isCollapsed }"
      ref="content"
    >
      <slot></slot>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';

const props = defineProps({
  buttonText: {
    type: String,
    required: true
  }
});

const isCollapsed = ref(true);
const isMobile = ref(false);
const content = ref(null);

// Обработчик изменения размера экрана
const checkDevice = () => {
  isMobile.value = window.innerWidth <= 768;
  if (!isMobile.value) {
    isCollapsed.value = false; // Показываем контент на десктопе по умолчанию
  }
};

// Переключение состояния контента
const toggleContent = () => {
  isCollapsed.value = !isCollapsed.value;
};

// Следим за изменением размера экрана
onMounted(() => {
  checkDevice();
  window.addEventListener('resize', checkDevice);
});

onBeforeUnmount(() => {
  window.removeEventListener('resize', checkDevice);
});
</script>
